<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')
    <title>@yield('pageTitle', 'Irish Laundry Systems | Commercial Laundry Engineering Ireland')</title>
    <meta name="description" content="@yield('metaDescription', 'Irish Laundry Systems — specialist commercial laundry engineering since 1987. Service contracts, repairs, equipment and parts across the Republic of Ireland.')">

    <!-- Google Analytics 4 -->
    @if(env('GA4_MEASUREMENT_ID'))
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('GA4_MEASUREMENT_ID') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ env('GA4_MEASUREMENT_ID') }}');
    </script>
    @endif

    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind Config with ILS Design System -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: {
                            DEFAULT: '#011E41',
                            light:   '#0d3568',
                            dark:    '#010f2a',
                        },
                        steel: {
                            DEFAULT: '#148af4',
                            light:   '#5babf7',
                            dark:    '#0f70cc',
                        },
                        orange: {
                            DEFAULT: '#148af4',
                            light:   '#5babf7',
                            dark:    '#0f70cc',
                        },
                        emerald: {
                            DEFAULT: '#16A34A',
                            light:   '#22C55E',
                            dark:    '#15803D',
                        },
                        muted:  '#b2b2b2',
                        border: '#b2b2b2',
                        bg:     '#eaeff5',
                        card:   '#FFFFFF',
                    },
                    fontFamily: {
                        heading: ['Inter', 'system-ui', 'sans-serif'],
                        body:    ['Inter', 'system-ui', 'sans-serif'],
                    },
                    boxShadow: {
                        card: '0 1px 3px 0 rgba(0,0,0,0.08), 0 1px 2px -1px rgba(0,0,0,0.05)',
                        'card-hover': '0 4px 16px 0 rgba(0,0,0,0.10)',
                    }
                }
            }
        }
    </script>

    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- UTM parameter capture: reads from URL and persists to sessionStorage -->
    <script>
        (function () {
            var utmKeys = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term'];
            var params = new URLSearchParams(window.location.search);
            var stored = {};
            try { stored = JSON.parse(sessionStorage.getItem('ils_utm') || '{}'); } catch (e) {}

            // If UTM params are in the URL this visit, update storage
            var hasUtm = false;
            utmKeys.forEach(function (k) { if (params.get(k)) hasUtm = true; });
            if (hasUtm) {
                utmKeys.forEach(function (k) { if (params.get(k)) stored[k] = params.get(k); });
                try { sessionStorage.setItem('ils_utm', JSON.stringify(stored)); } catch (e) {}
            }

            // Inject hidden fields into every form on the page
            document.addEventListener('DOMContentLoaded', function () {
                var finalUtm = {};
                try { finalUtm = JSON.parse(sessionStorage.getItem('ils_utm') || '{}'); } catch (e) {}

                document.querySelectorAll('form[data-utm]').forEach(function (form) {
                    utmKeys.forEach(function (k) {
                        var el = form.querySelector('input[name="' + k + '"]');
                        if (el) el.value = finalUtm[k] || '';
                    });
                    var pageEl = form.querySelector('input[name="page_source"]');
                    if (pageEl) pageEl.value = window.location.pathname;
                });
            });
        })();
    </script>

    <style>
        body {
            font-family: 'Inter', system-ui, sans-serif;
            background-color: #eaeff5;
            color: #1d1d1b;
            font-size: 17px;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Inter', system-ui, sans-serif;
        }
        .prose-ils p { margin-bottom: 1rem; line-height: 1.75; }
        [x-cloak] { display: none !important; }

        /* Smooth scroll */
        html { scroll-behavior: smooth; }

        /* Focus styles */
        *:focus-visible {
            outline: 2px solid #148af4;
            outline-offset: 2px;
        }
    </style>
</head>
<body class="antialiased">

    @include('components.header')

    <main class="pb-20 md:pb-0">
        @yield('content')
    </main>

    @include('components.footer')

    @include('components.mobile-sticky-bar')

    <!-- GA4 event tracking: CTA clicks + form submissions -->
    <script>
        (function () {
            if (typeof gtag !== 'function') return;

            // Track primary CTA button clicks (any element with data-ga-cta attribute)
            document.querySelectorAll('[data-ga-cta]').forEach(function (el) {
                el.addEventListener('click', function () {
                    gtag('event', 'cta_click', {
                        event_category: 'engagement',
                        event_label: el.getAttribute('data-ga-cta') || el.innerText.trim(),
                        page_path: window.location.pathname,
                    });
                });
            });

            // Track form submissions as generate_lead
            document.querySelectorAll('form[data-utm]').forEach(function (form) {
                form.addEventListener('submit', function () {
                    var sectorEl  = form.querySelector('[name="sector"]');
                    var typeEl    = form.querySelector('[name="request_type"]');
                    gtag('event', 'generate_lead', {
                        event_category: 'form',
                        event_label: (typeEl ? typeEl.value : 'unknown'),
                        sector: (sectorEl ? sectorEl.value : 'unknown'),
                        page_path: window.location.pathname,
                    });
                });
            });
        })();
    </script>

</body>
</html>
