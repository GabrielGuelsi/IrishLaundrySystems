<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Response;

/**
 * /sitemap.xml — the main pages (same list and priorities as the old static file)
 * plus every active product detail page, read from the database so new products
 * are listed without editing anything.
 */
class SitemapController extends Controller
{
    private const PAGES = [
        ['/', 'weekly', '1.0'],
        ['/services', 'monthly', '0.9'],
        ['/preventive-maintenance', 'monthly', '0.9'],
        ['/equipment-rental', 'monthly', '0.9'],
        ['/repairs-call-outs', 'monthly', '0.9'],
        ['/support-aftercare', 'monthly', '0.8'],
        ['/sectors', 'monthly', '0.7'],
        ['/sectors/healthcare', 'monthly', '0.8'],
        ['/sectors/hospitality', 'monthly', '0.8'],
        ['/sectors/care-facilities', 'monthly', '0.8'],
        ['/sectors/commercial-industrial', 'monthly', '0.8'],
        ['/equipment', 'monthly', '0.8'],
        ['/equipment/commercial-washers', 'monthly', '0.7'],
        ['/equipment/tumble-dryers', 'monthly', '0.7'],
        ['/equipment/ironers', 'monthly', '0.7'],
        ['/equipment/finishing-equipment', 'monthly', '0.7'],
        ['/equipment/drying-cabinets', 'monthly', '0.7'],
        ['/equipment/barrier-washers', 'monthly', '0.7'],
        ['/equipment/semi-professional', 'monthly', '0.7'],
        ['/equipment/wet-cleaning', 'monthly', '0.7'],
        ['/equipment/accessories', 'monthly', '0.7'],
        ['/equipment/one-connected', 'monthly', '0.7'],
        ['/electrolux-partnership', 'monthly', '0.7'],
        ['/about', 'monthly', '0.6'],
        ['/contact', 'monthly', '0.8'],
        ['/resources', 'monthly', '0.5'],
        ['/request-assessment', 'monthly', '0.8'],
        ['/privacy-policy', 'yearly', '0.3'],
    ];

    public function index(): Response
    {
        $base = 'https://irishlaundrysystems.com';

        $urls = array_map(fn ($p) => ['loc' => $base.$p[0], 'changefreq' => $p[1], 'priority' => $p[2]], self::PAGES);

        Equipment::where('is_active', true)
            ->orderBy('category')->orderBy('sort_order')->orderBy('slug')
            ->get(['category', 'slug', 'updated_at'])
            ->each(function ($item) use (&$urls, $base) {
                $urls[] = [
                    'loc' => $base.'/equipment/'.rawurlencode($item->category).'/'.rawurlencode($item->slug),
                    'lastmod' => $item->updated_at?->toDateString(),
                    'changefreq' => 'monthly',
                    'priority' => '0.5',
                ];
            });

        $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n".'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n";
        foreach ($urls as $u) {
            $xml .= '  <url><loc>'.e($u['loc']).'</loc>'
                .(! empty($u['lastmod']) ? '<lastmod>'.$u['lastmod'].'</lastmod>' : '')
                .'<changefreq>'.$u['changefreq'].'</changefreq><priority>'.$u['priority'].'</priority></url>'."\n";
        }
        $xml .= '</urlset>'."\n";

        return response($xml, 200, ['Content-Type' => 'application/xml; charset=UTF-8']);
    }
}
