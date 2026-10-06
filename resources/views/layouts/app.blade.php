<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')
    <title>@yield('pageTitle', 'Irish Laundry Systems | Commercial Laundry Engineering Ireland')</title>
    <meta name="description" content="@yield('metaDescription', 'Irish Laundry Systems — specialist commercial laundry engineering since 1987. Service contracts, repairs, equipment and parts across the Republic of Ireland.')">

    <!-- Canonical + Open Graph / Twitter -->
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Irish Laundry Systems">
    <meta property="og:locale" content="en_IE">
    <meta property="og:title" content="@yield('pageTitle', 'Irish Laundry Systems | Commercial Laundry Engineering Ireland')">
    <meta property="og:description" content="@yield('metaDescription', 'Irish Laundry Systems — specialist commercial laundry engineering since 1987. Service contracts, repairs, equipment and parts across the Republic of Ireland.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ url('/images/pages/home/HOMEHERO1.webp') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('pageTitle', 'Irish Laundry Systems | Commercial Laundry Engineering Ireland')">
    <meta name="twitter:description" content="@yield('metaDescription', 'Irish Laundry Systems — specialist commercial laundry engineering since 1987. Service contracts, repairs, equipment and parts across the Republic of Ireland.')">
    <meta name="twitter:image" content="{{ url('/images/pages/home/HOMEHERO1.webp') }}">

    <!-- Organization structured data (JSON-LD) -->
    @verbatim
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Irish Laundry Systems",
        "legalName": "D.S.B. Electrical (Templeogue) Limited",
        "url": "https://irishlaundrysystems.com",
        "logo": "https://irishlaundrysystems.com/email/logo-ils.png",
        "image": "https://irishlaundrysystems.com/images/pages/home/HOMEHERO1.webp",
        "description": "Engineering-led commercial laundry specialist serving the Republic of Ireland since 1987 — preventive maintenance, repairs and call-outs, equipment supply and rental, and aftercare. Authorised Electrolux Professional Partner.",
        "foundingDate": "1987",
        "telephone": "+353-1-491-0402",
        "email": "contact@irishlaundrysystems.com",
        "address": { "@type": "PostalAddress", "addressLocality": "Dublin", "addressCountry": "IE" },
        "areaServed": { "@type": "Country", "name": "Ireland" },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+353-1-491-0402",
            "email": "contact@irishlaundrysystems.com",
            "contactType": "customer service",
            "areaServed": "IE",
            "availableLanguage": "English"
        },
        "brand": { "@type": "Brand", "name": "Electrolux Professional" },
        "knowsAbout": ["Commercial laundry equipment", "Preventive maintenance", "Equipment rental", "Laundry repairs and call-outs", "Electrolux Professional laundry"]
    }
    </script>
    @endverbatim

    <!-- Favicons -->
    <link rel="icon" href="/favicon.ico?v=2" sizes="any">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=2">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=2">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png?v=2">

    <!-- Google Analytics 4 + Consent Mode v2 -->
    @if(config('services.google_analytics.measurement_id'))
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        // Consent Mode v2 — deny storage by default until the visitor accepts (GDPR/EU)
        gtag('consent', 'default', {
            ad_storage: 'denied',
            ad_user_data: 'denied',
            ad_personalization: 'denied',
            analytics_storage: 'denied',
            functionality_storage: 'granted',
            security_storage: 'granted',
            wait_for_update: 500
        });
        // Re-apply a previously granted choice on repeat visits
        try {
            if (localStorage.getItem('cookie_consent') === 'granted') {
                gtag('consent', 'update', {
                    ad_storage: 'granted',
                    ad_user_data: 'granted',
                    ad_personalization: 'granted',
                    analytics_storage: 'granted'
                });
            }
        } catch (e) {}
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.google_analytics.measurement_id') }}"></script>
    <script>
        gtag('js', new Date());
        gtag('config', '{{ config('services.google_analytics.measurement_id') }}');
    </script>
    @endif

    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Google Fonts: Inter (loaded non-render-blocking) -->
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;700&display=swap" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;700&display=swap"></noscript>

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

    <!-- GSAP CDN (deferred — only used by the repairs page, guarded there) -->
    <script defer src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
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
        html, body, *, *::before, *::after {
            font-family: 'Inter', system-ui, sans-serif !important;
        }
        body {
            font-weight: 300;
            background-color: #eaeff5;
            color: #1d1d1b;
            font-size: 17px;
            overflow-x: clip;
        }
        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
        }
        .font-light { font-weight: 300 !important; }
        .font-bold   { font-weight: 700 !important; }
        .prose-ils p { margin-bottom: 1rem; line-height: 1.75; }
        [x-cloak] { display: none !important; }

        /* Smooth scroll */
        html { scroll-behavior: smooth; }

        /* Focus styles */
        *:focus-visible {
            outline: 2px solid #148af4;
            outline-offset: 2px;
        }

        /* ── Card hover — navy wipe from bottom ── */
        .card-hover {
            position: relative;
            overflow: hidden;
            transition: transform 0.5s ease, box-shadow 0.5s ease;
        }
        .card-hover::before {
            content: '';
            position: absolute;
            inset: 0;
            background-color: #011E41;
            transform: translateY(100%);
            transition: transform 0.55s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            z-index: 0;
        }
        .card-hover:hover::before,
        .card-hover.is-visible:hover::before {
            transform: translateY(0);
        }
        .card-hover > * {
            position: relative;
            z-index: 1;
        }
        .card-hover:hover,
        .card-hover.is-visible:hover {
            transform: translateY(-4px) !important;
            box-shadow: 0 16px 40px rgba(1, 30, 65, 0.20);
        }
        .card-hover:hover h3,
        .card-hover.is-visible:hover h3,
        .card-hover:hover p,
        .card-hover.is-visible:hover p,
        .card-hover:hover span,
        .card-hover.is-visible:hover span {
            color: rgba(255, 255, 255, 0.9);
        }
        .card-hover:hover a,
        .card-hover.is-visible:hover a {
            color: rgba(255, 255, 255, 0.7);
        }
        .card-hover:hover svg,
        .card-hover.is-visible:hover svg {
            stroke: rgba(255, 255, 255, 0.85);
        }
        .card-hover:hover .border-border,
        .card-hover.is-visible:hover .border-border {
            border-color: rgba(255, 255, 255, 0.15);
        }

        /* ── Scroll reveal ── */
        .reveal {
            opacity: 0;
            transform: translateY(28px);
            transition: opacity 1.1s ease, transform 1.1s ease;
        }
        .reveal.is-visible {
            opacity: 1;
            transform: none;
        }
        .reveal-left  { transform: translateX(-48px); }
        .reveal-right { transform: translateX(48px); }
        .reveal-left.is-visible,
        .reveal-right.is-visible { transform: none; }

        /* Show wide hero photos above the copy on phones and tablets. */
        @media (max-width: 1023px) {
            .mobile-photo-hero {
                min-height: 0 !important;
                height: auto !important;
                padding-top: clamp(190px, 58vw, 420px);
                background-color: #011E41;
            }
            .mobile-photo-hero--light {
                background-color: #fff !important;
            }
            .mobile-photo-hero__image {
                top: 0 !important;
                bottom: auto !important;
                left: 0 !important;
                width: 100% !important;
                max-width: none !important;
                height: clamp(190px, 58vw, 420px) !important;
                object-fit: cover !important;
                object-position: var(--mobile-photo-position, center) !important;
                transform: none !important;
            }
            .mobile-photo-hero__overlay { display: none; }
            .mobile-photo-hero__content {
                padding-top: 2rem !important;
                padding-bottom: 4rem !important;
            }
            .mobile-photo-hero__dots {
                top: calc(clamp(190px, 58vw, 420px) - 1.5rem);
                bottom: auto !important;
            }
            .mobile-photo-hero .mobile-hero-cta {
                width: 100%;
                white-space: normal !important;
                text-align: center;
            }
            .mobile-photo-hero__content a {
                max-width: 100%;
                white-space: normal !important;
                text-align: center;
            }
            main a[href$="/contact"].whitespace-nowrap {
                max-width: 100%;
                white-space: normal !important;
                text-align: center;
            }
        }
        @media (max-width: 1023px) {
            [data-mobile-photo-strip] { width: 100% !important; }
            [data-mobile-photo-strip] img { object-position: center 45% !important; }
            [data-mobile-photo-strip] img[src*="engineering-support"] { object-position: center 10% !important; }
        }
        @media (max-width: 1023px) {
            .reveal-right:not(.is-visible) { transform: translateY(24px); }
            .mobile-service-card {
                height: auto !important;
                padding-top: 200px;
                background: #011E41;
            }
            .mobile-service-card__image {
                height: 200px !important;
                bottom: auto !important;
                transform: none !important;
            }
            .mobile-service-card__overlay { display: none !important; }
            .mobile-service-card__content {
                position: relative !important;
                inset: auto !important;
                padding: 1.25rem !important;
            }
            .mobile-service-card__details {
                max-height: none !important;
                overflow: visible !important;
                opacity: 1 !important;
            }
            .mobile-sector-card {
                height: auto !important;
                padding-top: 200px;
                background: #011E41;
            }
            .mobile-sector-card > img {
                height: 200px !important;
                bottom: auto !important;
                transform: none !important;
            }
            .mobile-sector-card > img + div { display: none !important; }
            .mobile-sector-card > div:last-child {
                position: relative !important;
                inset: auto !important;
                padding: 1.5rem !important;
            }
            .mobile-sector-card > div:last-child span {
                max-width: 100%;
                white-space: normal !important;
            }
            .mobile-support-card,
            .mobile-application-card {
                height: auto !important;
                padding-top: 200px;
                background: #011E41;
            }
            .mobile-support-card > img,
            .mobile-application-card > img {
                bottom: auto !important;
                height: 200px !important;
                transform: none !important;
            }
            .mobile-support-card > img + div,
            .mobile-support-card > img + div + div,
            .mobile-application-card > img + div,
            .mobile-application-card > img + div + div { display: none !important; }
            .mobile-support-card > div:last-child,
            .mobile-application-card > div:last-child {
                position: relative !important;
                inset: auto !important;
                padding: 1.25rem !important;
            }
            .mobile-support-card > div:last-child > div:first-child,
            .mobile-application-card > div:last-child > ul {
                max-height: none !important;
                overflow: visible !important;
                opacity: 1 !important;
                order: 1;
                margin-bottom: 1rem !important;
            }
            .mobile-support-card > div:last-child > h3,
            .mobile-application-card > div:last-child > h3 { order: 0; margin-bottom: 1rem; }
            .mobile-support-card > div:last-child > div:last-child { order: 2; }
            .mobile-support-card > div:last-child span { max-width: 100%; white-space: normal; }
            .mobile-service-card__image[src*="services-overview-hero-portrait"], .mobile-support-card > img[src*="services-overview-hero-portrait"] { object-position: 50% 10% !important; }
            img[alt="Commercial laundry equipment rental"][src*="rentalstripimage"] { object-position: 20% 15% !important; }
            .mobile-story-step {
                min-height: 0 !important;
                padding-top: 200px;
                background: #011E41;
            }
            .mobile-story-step > img {
                bottom: auto !important;
                height: 200px !important;
                transform: none !important;
            }
            .mobile-story-step > img + div,
            .mobile-story-step > img + div + div { display: none !important; }
            .mobile-story-step > img[src*="01%20Understand"], .mobile-story-step > img[src*="02%20Plan"], .mobile-story-step > img[src*="03%20Coordinate"] { object-position: 50% 20% !important; }
            .mobile-story-step > img[src*="04%20Keep"] { object-position: 50% 10% !important; }
            .mobile-story-step > div:last-child {
                position: relative !important;
                inset: auto !important;
                padding: 1.25rem !important;
            }
            .mobile-story-step > div:last-child > div:nth-child(2) {
                max-height: none !important;
                overflow: visible !important;
                opacity: 1 !important;
                order: 2;
            }
            .mobile-story-step > div:last-child > div:nth-child(3) {
                order: 1;
                margin-bottom: 0.75rem;
            }
            .mobile-fit-card {
                height: auto !important;
                aspect-ratio: auto !important;
                padding-top: 220px;
                background: #011E41;
            }
            .mobile-fit-card > img {
                bottom: auto !important;
                height: 220px !important;
                transform: none !important;
            }
            .mobile-fit-card--source-margins > img { transform: scale(2.2) !important; }
            .mobile-fit-card > img + div,
            .mobile-fit-card > img + div + div { display: none !important; }
            .mobile-fit-card > div:last-child {
                position: relative !important;
                inset: auto !important;
                padding: 1.25rem !important;
                background: #011E41;
            }
            .mobile-fit-card > div:last-child > p {
                max-height: none !important;
                overflow: visible !important;
                opacity: 1 !important;
                order: 1;
                margin-bottom: 0 !important;
            }
            .mobile-fit-card > div:last-child > h3 { order: 0; margin-bottom: 0.75rem; }
            .mobile-equipment-teaser {
                min-height: 0 !important;
                padding-top: 220px;
                background: #011E41;
            }
            .mobile-equipment-teaser > img {
                height: 220px !important;
                bottom: auto !important;
                transform: none !important;
            }
            .mobile-equipment-teaser > img + div { display: none !important; }
            .mobile-equipment-teaser > div:last-child {
                min-height: 0 !important;
                display: block !important;
            }
            .mobile-equipment-teaser > div:last-child > div { padding: 1.5rem !important; }
            .mobile-equipment-teaser-controls {
                grid-area: 2 / 1 !important;
                justify-self: end;
                background: #011E41;
                width: 100%;
            }
            .mobile-maintenance-sector {
                height: auto !important;
                padding-top: 200px;
                background: #011E41;
            }
            .mobile-maintenance-sector > img {
                bottom: auto !important;
                height: 200px !important;
                transform: none !important;
            }
            .mobile-maintenance-sector > img + div { display: none !important; }
            .mobile-maintenance-sector > div:last-child {
                position: relative !important;
                inset: auto !important;
                padding: 1.5rem !important;
            }
            .mobile-sector-carousel-image {
                height: 200px !important;
                transform: none !important;
            }
            .mobile-responsible-equipment {
                min-height: 0 !important;
                display: block !important;
                padding-top: 220px;
            }
            .mobile-responsible-equipment > img { height: 220px !important; bottom: auto !important; }
            .mobile-responsible-equipment > img + div { display: none !important; }
            .mobile-responsible-equipment > div:last-child { padding-top: 2rem !important; padding-bottom: 2rem !important; }
            :is(.rn-visit-card, .sc-visit-card, .pa-visit-card) {
                min-height: 0 !important;
                height: auto !important;
                padding-top: 210px;
                background: #011E41;
            }
            :is(.rn-visit-card, .sc-visit-card, .pa-visit-card) img {
                bottom: auto !important;
                height: 210px !important;
                transform: none !important;
            }
            :is(.rn-visit-card, .sc-visit-card, .pa-visit-card)::before,
            :is(.rn-visit-card, .sc-visit-card, .pa-visit-card)::after,
            :is(.rn-vcap1, .sc-vcap1, .pa-vcap1) { display: none !important; }
            :is(.rn-vcap2, .sc-vcap2, .pa-vcap2) {
                position: relative !important;
                top: auto !important;
                left: auto !important;
                right: auto !important;
                opacity: 1 !important;
                transform: none !important;
                padding: 1.5rem;
            }
        }
        @media (max-width: 639px) {
            .mobile-dosing-tabs {
                display: grid !important;
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
            .mobile-dosing-tabs > button {
                white-space: normal !important;
                text-align: left;
                padding-right: 0.25rem !important;
            }
        }
        @media (min-width: 1024px) and (max-width: 1279px) {
            img[src*="support-aftercare-hero"] { object-position: 85% 30% !important; }
            img[src*="repairs-how-02"] { object-position: 70% 15% !important; }
            img[src*="professional-laundry-heritage"] { object-fit: contain !important; background-color: #aebac8; }
            img[src*="Parts%20%26%20Aftercare"] { object-position: 85% 30% !important; }
            img[src*="agreementiclusions"] { object-position: 55% center !important; }
            img[src*="rentalstripimage"][style*="center 30%"] { object-position: 10% 30% !important; }
            img[src*="Technical%20Standards"] { object-position: 20% center !important; }
            .grid:has(> .mobile-service-card) {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
            }
            .mobile-service-card {
                height: auto !important;
                padding-top: 220px;
                background: #011E41;
            }
            .mobile-service-card__image {
                height: 220px !important;
                bottom: auto !important;
                transform: none !important;
            }
            .mobile-service-card__overlay { display: none !important; }
            .mobile-service-card__content {
                position: relative !important;
                inset: auto !important;
                padding: 1.5rem !important;
            }
            .mobile-service-card__details {
                max-height: none !important;
                overflow: visible !important;
                opacity: 1 !important;
            }
            .mobile-sector-carousel-image {
                height: 220px !important;
                transform: none !important;
            }
            .grid:has(> .mobile-support-card) {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
            }
            .mobile-support-card {
                height: auto !important;
                padding-top: 220px;
                background: #011E41;
            }
            .mobile-support-card > img {
                bottom: auto !important;
                height: 220px !important;
                transform: none !important;
            }
            .mobile-support-card > img + div,
            .mobile-support-card > img + div + div { display: none !important; }
            .mobile-support-card > div:last-child {
                position: relative !important;
                inset: auto !important;
                padding: 1.5rem !important;
            }
            .mobile-support-card > div:last-child > div:first-child {
                max-height: none !important;
                overflow: visible !important;
                opacity: 1 !important;
                order: 1;
                margin-bottom: 1rem !important;
            }
            .mobile-support-card > div:last-child > h3 { order: 0; margin-bottom: 1rem; }
            .mobile-support-card > div:last-child > div:last-child { order: 2; }
            .mobile-service-card__image[src*="services-overview-hero-portrait"], .mobile-support-card > img[src*="services-overview-hero-portrait"] { object-position: 50% 10% !important; }
            img[alt="Commercial laundry equipment rental"][src*="rentalstripimage"] { object-position: 20% 15% !important; }
            .mobile-application-card {
                height: auto !important;
                padding-top: 220px;
                background: #011E41;
            }
            .mobile-application-card > img {
                bottom: auto !important;
                height: 220px !important;
                transform: none !important;
            }
            .mobile-application-card > img + div,
            .mobile-application-card > img + div + div { display: none !important; }
            .mobile-application-card > div:last-child {
                position: relative !important;
                inset: auto !important;
                padding: 1.5rem !important;
            }
            .mobile-application-card > div:last-child > ul {
                max-height: none !important;
                overflow: visible !important;
                opacity: 1 !important;
                order: 1;
                margin-bottom: 1rem !important;
            }
            .mobile-application-card > div:last-child > h3 { order: 0; margin-bottom: 1rem; }
            .mobile-story-step {
                min-height: 0 !important;
                padding-top: 220px;
                background: #011E41;
            }
            .mobile-story-step > img {
                bottom: auto !important;
                height: 220px !important;
                transform: none !important;
            }
            .mobile-story-step > img + div,
            .mobile-story-step > img + div + div { display: none !important; }
            .mobile-story-step > img[src*="01%20Understand"], .mobile-story-step > img[src*="02%20Plan"], .mobile-story-step > img[src*="03%20Coordinate"] { object-position: 50% 20% !important; }
            .mobile-story-step > img[src*="04%20Keep"] { object-position: 50% 10% !important; }
            .mobile-story-step > div:last-child {
                position: relative !important;
                inset: auto !important;
                padding: 1.5rem !important;
            }
            .mobile-story-step > div:last-child > div:nth-child(2) {
                max-height: none !important;
                overflow: visible !important;
                opacity: 1 !important;
                order: 2;
            }
            .mobile-story-step > div:last-child > div:nth-child(3) { order: 1; margin-bottom: 0.75rem; }
            .mobile-fit-card {
                height: auto !important;
                aspect-ratio: auto !important;
                padding-top: 220px;
                background: #011E41;
            }
            .mobile-fit-card > img {
                bottom: auto !important;
                height: 220px !important;
                transform: none !important;
            }
            .mobile-fit-card--source-margins > img { transform: scale(2.2) !important; }
            .mobile-fit-card > img + div,
            .mobile-fit-card > img + div + div { display: none !important; }
            .mobile-fit-card > div:last-child {
                position: relative !important;
                inset: auto !important;
                padding: 1.5rem !important;
                background: #011E41;
            }
            .mobile-fit-card > div:last-child > p {
                max-height: none !important;
                overflow: visible !important;
                opacity: 1 !important;
                order: 1;
                margin-bottom: 0 !important;
            }
            .mobile-fit-card > div:last-child > h3 { order: 0; margin-bottom: 0.75rem; }
            :is(.rn-visit-card, .sc-visit-card, .pa-visit-card) {
                min-height: 0 !important;
                height: auto !important;
                padding-top: 180px;
                background: #011E41;
            }
            :is(.rn-visit-card, .sc-visit-card, .pa-visit-card) img {
                bottom: auto !important;
                height: 180px !important;
                transform: none !important;
            }
            :is(.rn-visit-card, .sc-visit-card, .pa-visit-card)::before,
            :is(.rn-visit-card, .sc-visit-card, .pa-visit-card)::after,
            :is(.rn-vcap1, .sc-vcap1, .pa-vcap1) { display: none !important; }
            :is(.rn-vcap2, .sc-vcap2, .pa-vcap2) {
                position: relative !important;
                top: auto !important;
                left: auto !important;
                right: auto !important;
                opacity: 1 !important;
                transform: none !important;
                padding: 1.25rem;
            }
        }
    </style>
</head>
<body class="antialiased">

    @include('components.header')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    @include('components.mobile-sticky-bar')

    @include('components.cookie-consent')

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

    <!-- Scroll reveal -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.12 });
            document.querySelectorAll('.reveal').forEach(function (el) {
                observer.observe(el);
            });
        });
    </script>

</body>
</html>
