<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')
    <title>{{ $title ?? 'Irish Laundry Systems | Commercial Laundry Engineering Ireland' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Irish Laundry Systems — specialist commercial laundry engineering since 1987. Service contracts, repairs, equipment and parts across the Republic of Ireland.' }}">

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

    <!-- Google Fonts: Lexend + Source Sans 3 -->
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;500;600;700;800&family=Source+Sans+3:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Tailwind CSS Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind Config with ILS Design System -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: {
                            DEFAULT: '#1a2744',
                            light:   '#243259',
                            dark:    '#111b30',
                        },
                        steel: {
                            DEFAULT: '#2d5f8a',
                            light:   '#3a72a6',
                            dark:    '#24507a',
                        },
                        orange: {
                            DEFAULT: '#e87c32',
                            light:   '#f08c47',
                            dark:    '#d06b22',
                        },
                        muted:  '#E8ECF1',
                        border: '#E2E8F0',
                        bg:     '#F8FAFC',
                        card:   '#FFFFFF',
                    },
                    fontFamily: {
                        heading: ['Lexend', 'sans-serif'],
                        body:    ['Source Sans 3', 'system-ui', 'sans-serif'],
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
            font-family: 'Source Sans 3', system-ui, sans-serif;
            background-color: #F8FAFC;
            color: #0F172A;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Lexend', sans-serif;
        }
        .prose-ils p { margin-bottom: 1rem; line-height: 1.75; }
        [x-cloak] { display: none !important; }

        /* Smooth scroll */
        html { scroll-behavior: smooth; }

        /* Focus styles */
        *:focus-visible {
            outline: 2px solid #e87c32;
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
