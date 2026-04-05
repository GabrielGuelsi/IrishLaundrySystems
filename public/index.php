<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// mbstring polyfill for shared hosting without the extension
if (!extension_loaded('mbstring')) {
    function mb_split(string $pattern, string $string, int $limit = -1): array|false {
        return preg_split('/' . $pattern . '/u', $string, $limit) ?: false;
    }
    function mb_strlen(string $string, ?string $encoding = null): int {
        if ($encoding !== null && strtolower($encoding) === '8bit') {
            return strlen($string);
        }
        return preg_match_all('/./us', $string);
    }
    function mb_strtolower(string $string, ?string $encoding = null): string {
        return strtolower($string);
    }
    function mb_strtoupper(string $string, ?string $encoding = null): string {
        return strtoupper($string);
    }
    function mb_substr(string $string, int $start, ?int $length = null, ?string $encoding = null): string {
        return mb_substr_native($string, $start, $length);
    }
    function mb_substr_native(string $s, int $start, ?int $length): string {
        preg_match_all('/./us', $s, $m);
        $chars = $m[0];
        $slice = array_slice($chars, $start, $length);
        return implode('', $slice);
    }
    function mb_strpos(string $haystack, string $needle, int $offset = 0, ?string $encoding = null): int|false {
        return strpos($haystack, $needle, $offset);
    }
    function mb_convert_encoding(array|string $string, string $to_encoding, array|string|null $from_encoding = null): array|string|false {
        return $string;
    }
    function mb_detect_encoding(string $string, array|string|null $encodings = null, bool $strict = false): string|false {
        return 'UTF-8';
    }
    function mb_internal_encoding(?string $encoding = null): string|bool {
        return $encoding === null ? 'UTF-8' : true;
    }
    function mb_language(?string $language = null): string|bool {
        return $language === null ? 'neutral' : true;
    }
    function mb_list_encodings(): array { return ['UTF-8']; }
    function mb_encoding_aliases(string $encoding): array { return []; }
    function mb_convert_case(string $string, int $mode, ?string $encoding = null): string {
        return match($mode) {
            MB_CASE_UPPER => strtoupper($string),
            MB_CASE_LOWER => strtolower($string),
            MB_CASE_TITLE => ucwords(strtolower($string)),
            default => $string,
        };
    }
    if (!defined('MB_CASE_UPPER')) define('MB_CASE_UPPER', 0);
    if (!defined('MB_CASE_LOWER')) define('MB_CASE_LOWER', 1);
    if (!defined('MB_CASE_TITLE')) define('MB_CASE_TITLE', 2);
}

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
