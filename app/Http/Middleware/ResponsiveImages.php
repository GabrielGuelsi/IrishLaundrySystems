<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Adds width/height (the file's real size) to <img> tags so the browser reserves their space,
 * and srcset/sizes where the photo has smaller copies in public/images/_r
 * (built by scripts/build-responsive-images.mjs), so phones download a phone-sized file.
 *
 * srcset only goes on images whose rendered width doesn't depend on the file's own width:
 * a full-width / fixed-px-width image, or one that already declares its own `sizes`.
 */
class ResponsiveImages
{
    private static ?array $manifest = null;

    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $type = (string) $response->headers->get('Content-Type');
        if ($response->getStatusCode() !== 200 || ! str_contains($type, 'text/html')) {
            return $response;
        }

        $content = $response->getContent();
        if (! is_string($content) || ! str_contains($content, '<img')) {
            return $response;
        }

        $manifest = self::manifest();
        if (! $manifest) {
            return $response;
        }

        $response->setContent(preg_replace_callback('/<img\b[^>]*>/i', function ($m) use ($manifest) {
            $tag = $m[0];

            // src is swapped by Alpine at runtime — leave it alone.
            if (preg_match('/\s(?::src|x-bind:src|:srcset)\s*=/i', $tag)
                || ! preg_match('/\ssrc="([^"]+)"/i', $tag, $src)) {
                return $tag;
            }

            $path = rawurldecode((string) parse_url(html_entity_decode($src[1]), PHP_URL_PATH));
            $entry = $manifest[$path] ?? null;
            if (! $entry) {
                return $tag;
            }

            $attrs = '';

            // The file's real dimensions: same rendered size, but no layout shift while it loads.
            // Only where the CSS already sets the size (h-*, w-full, style width/height) and no max-height
            // clamps it — or a square icon fitted with max-w-full + max-h-full. Elsewhere explicit
            // dimensions would change the rendered size (e.g. max-height alone no longer keeps the ratio).
            $class = preg_match('/\sclass="([^"]*)"/i', $tag, $c) ? ' '.$c[1].' ' : '';
            $style = preg_match('/\sstyle="([^"]*)"/i', $tag, $s) ? $s[1] : '';
            $sized = preg_match('/[\s:](?:h-(?:\d|\[)|w-full\s)/', $class) || preg_match('/(?<![\w-])(?:width|height):\s*\d/', $style);
            $clamped = preg_match('/[\s:]max-h-/', $class) || preg_match('/max-height/', $style);
            $squareIcon = ! str_ends_with($path, '.svg') && $entry['w'] === $entry['h'] && str_contains($class, ' max-w-full ') && str_contains($class, ' max-h-full ');
            if (! empty($entry['h']) && ! preg_match('/\s(?:width|height)\s*=/i', $tag)
                && (($sized && ! $clamped) || $squareIcon)) {
                $attrs .= ' width="'.$entry['w'].'" height="'.$entry['h'].'"';
            }

            $hasSizes = (bool) preg_match('/\ssizes="/i', $tag);
            $fullWidth = preg_match('/\sclass="[^"]*(?<![\w:-])w-full(?![\w-])/i', $tag)
                || preg_match('/\sstyle="[^"]*(?<![\w-])width:\s*(?:100%|\d+px)/i', $tag);
            if (! empty($entry['v']) && ($hasSizes || $fullWidth) && ! preg_match('/\ssrcset\s*=/i', $tag)) {
                // Keep the same scheme/host as the src (asset() gives absolute URLs).
                $prefix = substr($src[1], 0, (int) strpos($src[1], '/images/'));
                $base = '/images/_r/'.preg_replace('/\.[^.\/]+$/', '', substr($path, strlen('/images/')));
                $base = implode('/', array_map('rawurlencode', explode('/', $base)));

                $set = array_map(fn ($w) => "{$prefix}{$base}-{$w}w.webp {$w}w", $entry['v']);
                $set[] = $src[1].' '.$entry['w'].'w';

                $attrs .= ' srcset="'.implode(', ', $set).'"'.($hasSizes ? '' : ' sizes="100vw"');
            }

            return $attrs === '' ? $tag : preg_replace('/\ssrc="/i', $attrs.' src="', $tag, 1);
        }, $content));

        return $response;
    }

    private static function manifest(): array
    {
        if (self::$manifest === null) {
            $file = public_path('images/_r/manifest.json');
            self::$manifest = is_file($file) ? (json_decode((string) file_get_contents($file), true) ?: []) : [];
        }

        return self::$manifest;
    }
}
