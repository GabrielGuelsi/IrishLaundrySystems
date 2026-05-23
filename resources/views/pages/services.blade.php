@extends('layouts.app')

@section('pageTitle', 'Commercial Laundry Services | Service Contracts, Repairs, Rental & Parts | Irish Laundry Systems')
@section('metaDescription', 'Engineering-led commercial laundry services across Ireland — service contracts, repairs and call-outs, equipment rental, and genuine Electrolux parts and aftercare.')

@section('content')

<style>
    /* ── Hero entrance (matches home page) ── */
    @keyframes svcFadeUp {
        from { opacity: 0; transform: translateY(24px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    .svc-hero-title { animation: svcFadeUp 0.7s ease forwards; }
    .svc-hero-desc  { animation: svcFadeUp 0.7s ease 0.2s forwards; opacity: 0; }
    .svc-hero-btns  { animation: svcFadeUp 0.7s ease 0.4s forwards; opacity: 0; }
    @media (prefers-reduced-motion: reduce) {
        .svc-hero-title, .svc-hero-desc, .svc-hero-btns { animation: none; opacity: 1; transform: none; }
    }

    /* ── Process strip animated arrows ── */
    .svc-arrow path { stroke-dasharray: 100; stroke-dashoffset: 100; transition: stroke-dashoffset 1.4s ease 0.2s; }
    .svc-process.in-view .svc-arrow path { stroke-dashoffset: 0; }
    .svc-step { transition: transform 0.3s ease; }
    .svc-step:hover { transform: translateY(-4px); }

    /* ── Smooth anchor scroll ── */
    html { scroll-behavior: smooth; }
</style>

<!-- 1. HERO -->
<section class="relative overflow-hidden" style="height: 720px; min-height: 560px; background-color: #011E41;">

    {{-- Background image --}}
    <img src="/images/healthcare/services-overview-hero.jpg"
         alt="ILS engineer shaking hands with a customer in a laundry room"
         loading="eager" decoding="async"
         class="absolute inset-0 w-full h-full object-cover object-top">

    {{-- Gradient overlay --}}
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.95) 0%, rgba(1,30,65,0.78) 18%, rgba(1,30,65,0.40) 35%, rgba(1,30,65,0.10) 55%, transparent 70%);"></div>

    {{-- Text --}}
    <div class="relative z-10 h-full flex items-center w-full">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16">
            <div style="max-width: 680px;">

                <p class="font-body font-bold text-orange text-xs uppercase tracking-[0.22em] mb-4">Commercial Laundry Services</p>

                <h1 class="svc-hero-title font-heading font-bold text-white leading-[1.05] tracking-tight mb-6 text-4xl lg:text-5xl xl:text-6xl">
                    Find the <span class="text-[#148af4]">right service route</span> for your commercial laundry site.
                </h1>

                <p class="svc-hero-desc font-body text-white/80 leading-relaxed mb-10 text-lg max-w-xl">
                    Whether your site is dealing with an urgent fault, planned maintenance, rental need or aftercare around installed machines, Irish Laundry Systems helps identify the clearest next step for your laundry room.
                </p>

                <div class="svc-hero-btns flex flex-row flex-wrap gap-4 mb-8">
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center justify-center bg-[#148af4] hover:bg-[#0e79d8] text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 whitespace-nowrap">
                        Request Service Assessment
                    </a>
                    <a href="#service-routes"
                       class="inline-flex items-center justify-center border border-white/50 hover:border-white text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 hover:bg-white/10 whitespace-nowrap gap-2">
                        View Service Routes
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>

                <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-white/70 font-body text-sm">
                    <span>Engineering-led since 1987</span>
                    <span class="text-white/30">|</span>
                    <span>Electrolux Professional Partner</span>
                    <span class="text-white/30">|</span>
                    <span>Commercial laundry specialists</span>
                </div>

            </div>
        </div>
    </div>

</section>

<!-- 1.5 COMMERCIAL INTRO / DECISION LOGIC -->
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-[3fr_2fr] gap-12 lg:gap-16 mb-12 lg:mb-16">
            <div>
                <p class="font-body font-bold text-orange text-xs uppercase tracking-[0.22em] mb-4">Services Overview</p>
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-4xl 2xl:text-5xl leading-tight">
                    Start with what is happening on-site,<br>then choose the <span class="text-[#148af4]">right route</span>.
                </h2>
            </div>
            <div class="flex flex-col gap-3 lg:pt-[2.6rem]">
                <p class="font-body text-gray-600 text-lg leading-relaxed">
                    Commercial laundry sites do not always need the same type of service. One site may need a fault diagnosed. Another may need planned inspections, rental equipment, follow-up work or a clearer aftercare path around machines already in use.
                </p>
                <p class="font-body text-gray-600 text-lg leading-relaxed">
                    This page helps facilities managers, care home operators, hospitality teams and commercial laundry owners direct the enquiry to the right service route.
                </p>
            </div>
        </div>

        {{-- Decision logic line --}}
        <div class="border-t border-gray-200 pt-8">
            <div class="flex flex-wrap items-center justify-center gap-x-3 gap-y-3 lg:gap-x-5 font-body font-bold text-navy text-sm lg:text-base">
                <span class="px-4 py-2 rounded-full bg-bg border border-gray-200">Site pressure</span>
                <svg class="w-5 h-5 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                <span class="px-4 py-2 rounded-full bg-bg border border-gray-200">Installed equipment</span>
                <svg class="w-5 h-5 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                <span class="px-4 py-2 rounded-full bg-bg border border-gray-200">Right service route</span>
                <svg class="w-5 h-5 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                <span class="px-4 py-2 rounded-full bg-[#148af4] text-white border border-[#148af4]">Clear next step</span>
            </div>
        </div>
    </div>
</section>

<!-- 3. SERVICE ROUTE CARDS -->
<div id="service-routes"></div>
@include('components.services-cards', [
    'eyebrow'          => 'Service Routes',
    'headingLead'      => 'Choose the route that matches the ',
    'headingHighlight' => 'pressure on your site',
    'highlightClass'   => 'text-[#148af4]',
    'intro'            => 'Four practical routes for faults, planned maintenance, rental needs and aftercare around installed equipment.',
    'align'            => 'left',
    'cards'            => [
        ['title' => 'Repairs & Call-outs',                'body' => 'For urgent faults, breakdowns or equipment issues that need on-site diagnosis and a practical repair path.',                       'cta' => 'View Repairs & Call-outs',              'href' => route('repairs'),           'img' => '/images/healthcare/repairs-hero.jpg',                    'alt' => 'Repairs and Call-outs'],
        ['title' => 'Preventive Maintenance Contracts',   'body' => 'For planned inspections, service records and fewer reactive maintenance decisions around essential laundry equipment.',           'cta' => 'View Preventive Maintenance Contracts', 'href' => route('service-contracts'), 'img' => '/images/healthcare/service-contracts-hero.jpg',          'alt' => 'Preventive Maintenance Contracts', 'pos' => 'center 25%'],
        ['title' => 'Equipment Rental',                   'body' => 'For replacement pressure, added capacity or access to commercial laundry equipment without upfront purchase.',                    'cta' => 'View Equipment Rental',                 'href' => route('rental'),            'img' => '/images/healthcare/lagoon-advanced-care.webp',           'alt' => 'Equipment Rental'],
        ['title' => 'Support & Aftercare',                'body' => 'For follow-up work, parts route, service history and decisions around equipment already installed on-site.',                      'cta' => 'View Support & Aftercare',              'href' => route('parts-aftercare'),   'img' => '/images/healthcare/services-overview-hero-portrait.jpg', 'alt' => 'Support & Aftercare', 'pos' => 'center center'],
    ],
])

<!-- 5. STAT BAND -->
<section class="relative bg-navy py-10 lg:py-12 overflow-hidden"
         style="background-image: radial-gradient(rgba(255,255,255,0.06) 1px, transparent 1px); background-size: 22px 22px;">
    <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>
    <div class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>
    <div class="relative max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">
        @php
        $svcCapabilities = [
            ['label' => 'Since 1987',          'body' => 'Commercial laundry engineering support across Ireland.'],
            ['label' => 'Ireland coverage',    'body' => 'Support for sites across the Republic of Ireland.'],
            ['label' => 'Authorised partner',  'body' => 'Electrolux Professional equipment and parts support where applicable.'],
            ['label' => 'Four support routes', 'body' => 'Repairs, contracts, rental, parts and aftercare connected around the installed base.'],
        ];
        @endphp
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-6">
            @foreach ($svcCapabilities as $i => $item)
            <div class="relative">
                @if ($i > 0)
                <div class="hidden lg:block absolute left-0 top-1 bottom-1 w-px bg-white/10" aria-hidden="true"></div>
                @endif
                <div class="lg:pl-6">
                    <p class="font-heading font-bold text-[#148af4] text-base lg:text-lg uppercase tracking-wider mb-1.5 leading-tight">{{ $item['label'] }}</p>
                    <p class="font-body text-blue-200 text-sm leading-relaxed">{{ $item['body'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- 6. HOW THE SUPPORT ROUTES WORK TOGETHER — gallery 1-4 (matches Hospitality) -->
<style>
.svc-gallery-card {
    position: relative;
    overflow: hidden;
    min-height: 520px;
    flex: 1 1 25%;
}
.svc-gallery-card img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    transition: transform 0.6s ease;
}
.svc-gallery-card:hover img { transform: scale(1.06); }
.svc-gallery-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(1,30,65,0.90) 0%, rgba(1,30,65,0.35) 55%, rgba(1,30,65,0.10) 100%);
    z-index: 1;
    transition: opacity 0.4s;
}
.svc-gallery-card::after {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(1,30,65,0.90);
    z-index: 2;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.4s, visibility 0.4s;
}
.svc-gallery-card:hover::before { opacity: 0; }
.svc-gallery-card:hover::after  { opacity: 1; visibility: visible; }

/* Default caption — bottom-left */
.svc-gcap1 {
    position: absolute;
    bottom: 28px;
    left: 32px;
    z-index: 3;
    transition: opacity 0.35s ease, transform 0.35s ease;
}
.svc-gcap1 .svc-num {
    color: #148af4;
    font-size: 2.6rem;
    font-weight: 700;
    line-height: 1;
    display: block;
    margin-bottom: 6px;
    font-family: 'Inter', system-ui, sans-serif;
}
.svc-gcap1 h4 {
    color: #fff;
    font-size: 1rem;
    font-weight: 700;
    line-height: 1.3;
    margin: 0;
    font-family: 'Inter', system-ui, sans-serif;
}
.svc-gallery-card:hover .svc-gcap1 {
    opacity: 0;
    transform: translateY(16px);
}

/* Hover caption — vertically centered */
.svc-gcap2 {
    position: absolute;
    top: 50%;
    left: 32px;
    right: 32px;
    transform: translateY(-40%);
    z-index: 5;
    opacity: 0;
    transition: opacity 0.4s ease, transform 0.4s ease;
}
.svc-gallery-card:hover .svc-gcap2 {
    opacity: 1;
    transform: translateY(-50%);
}
.svc-gcap2 .svc-num {
    color: #148af4;
    font-size: 2.6rem;
    font-weight: 700;
    line-height: 1;
    display: block;
    margin-bottom: 12px;
    font-family: 'Inter', system-ui, sans-serif;
}
.svc-gcap2 h4 {
    color: #fff;
    font-size: 1.1rem;
    font-weight: 700;
    margin-bottom: 12px;
    font-family: 'Inter', system-ui, sans-serif;
}
.svc-gcap2 p {
    color: rgba(255,255,255,0.72);
    font-size: 0.85rem;
    line-height: 1.65;
    font-family: 'Inter', system-ui, sans-serif;
}

@media (max-width: 767px) {
    .svc-gallery-card { min-height: 300px; flex: 1 1 50%; }
}
@media (max-width: 479px) {
    .svc-gallery-card { min-height: 260px; flex: 1 1 100%; }
}
</style>

<section class="pt-16 lg:pt-20 pb-10 lg:pb-12 bg-bg">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">
        <div class="text-center">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl xl:text-5xl leading-tight mb-4">
                How the support routes <span class="text-[#148af4]">work together</span>.
            </h2>
            <p class="font-body text-gray-600 text-base lg:text-lg leading-relaxed max-w-3xl mx-auto">
                The four routes are not silos. They connect into one support story for the installed base.
            </p>
        </div>
    </div>
</section>

<section class="w-full overflow-hidden">
    <div style="display:flex; flex-wrap:wrap;">
        @foreach ([
            ['num' => '01.', 'title' => 'Identify the site pressure',      'body' => 'Understand the issue, urgency, equipment load and operational pressure before choosing the route.', 'img' => '/images/healthcare/operator.jpg'],
            ['num' => '02.', 'title' => 'Choose the right support route',  'body' => 'Select repairs, contracts, rental or parts support based on what the site needs next.',           'img' => '/images/about/about-engineers.jpg'],
            ['num' => '03.', 'title' => 'Connect service, parts or rental','body' => 'Keep the support route joined to the installed base, service history and next practical action.',  'img' => '/images/healthcare/Customer-Care_Line-6000-_001.jpg', 'pos' => '20% center'],
            ['num' => '04.', 'title' => 'Move to the next step',           'body' => 'Direct the enquiry to the right team, assessment, service page or support conversation.',          'img' => '/images/healthcare/customer-care-line6000.jpg'],
        ] as $card)
        <div class="svc-gallery-card">
            <img src="{{ asset(ltrim($card['img'], '/')) }}" alt="{{ $card['title'] }}" loading="lazy"
                 @if(!empty($card['pos'])) style="object-position: {{ $card['pos'] }};" @endif>
            <div class="svc-gcap1">
                <span class="svc-num">{{ $card['num'] }}</span>
                <h4>{{ $card['title'] }}</h4>
            </div>
            <div class="svc-gcap2">
                <span class="svc-num">{{ $card['num'] }}</span>
                <h4>{{ $card['title'] }}</h4>
                <p>{{ $card['body'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- 7. PARTS & AFTERCARE — BRIDGE -->
<section id="parts-aftercare" class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div>
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-widest mb-4">Installed Base Support</p>
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-5">
                    Parts &amp; aftercare for the <span class="text-[#148af4]">installed base</span>.
                </h2>
                <p class="font-body text-gray-600 text-lg leading-relaxed mb-6">
                    As an Authorised Electrolux Professional Partner, Irish Laundry Systems connects parts access, service history and aftercare to the installed base, helping keep diagnosis, follow-up and equipment decisions clearer.
                </p>
                <a href="{{ route('electrolux') }}"
                   class="inline-flex items-center gap-2 text-steel hover:text-navy font-body font-bold text-sm transition-colors">
                    About the Electrolux partnership
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            <div class="bg-bg rounded-2xl p-7 lg:p-8 border border-border">
                <div class="flex items-center gap-4 pb-5 mb-5 border-b border-border">
                    <img src="/images/logo/EPR_Authorized_Partner_horizontal_positive_CMYK.jpg"
                         alt="Electrolux Professional Authorised Partner"
                         class="h-14 lg:h-16 w-auto flex-shrink-0"
                         style="mix-blend-mode: multiply;"
                         loading="lazy" decoding="async">
                    <p class="font-body text-gray-600 text-xs lg:text-sm leading-snug">
                        Irish Laundry Systems is an<br>
                        <span class="font-bold text-navy">Authorised Electrolux Professional Partner</span>.
                    </p>
                </div>
                <ul class="space-y-3">
                    @foreach ([
                        'Genuine Electrolux Professional parts access',
                        'Service history context',
                        'Technical documentation and service records',
                        'Parts support for contract and non-contract customers',
                    ] as $bullet)
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-[#148af4] mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span class="font-body text-navy text-base leading-snug">{{ $bullet }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

@include('components.testimonials', ['heading' => 'What our customers say.'])

@include('components.proof-bar')

<!-- 9. FINAL CTA BANNER -->
<section class="relative overflow-hidden bg-navy">
    <div class="grid grid-cols-1 lg:grid-cols-2">
        {{-- Left: text + CTAs --}}
        <div class="px-6 sm:px-10 lg:px-16 py-12 lg:py-20 z-10 relative">
            <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl xl:text-5xl leading-tight mb-4">
                Need the right support route for <span class="text-[#148af4]">your site</span>?
            </h2>
            <p class="font-body text-blue-200 text-base lg:text-lg leading-relaxed mb-8 max-w-md">
                Speak with an engineer about breakdown risk, installed equipment, parts continuity and the best next step for your site.
            </p>
            <div class="flex flex-row flex-wrap gap-3">
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center bg-white text-navy hover:bg-white/90 font-body font-bold px-6 py-3.5 rounded-full text-sm transition-colors duration-200 whitespace-nowrap gap-2">
                    Talk to an Engineer
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
                <a href="{{ route('request-assessment') }}"
                   class="inline-flex items-center justify-center border border-white/40 hover:border-white text-white font-body font-bold px-6 py-3.5 rounded-full text-sm transition-colors duration-200 whitespace-nowrap gap-2 hover:bg-white/10">
                    Request Service Assessment
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>

        {{-- Right: image with diagonal clip --}}
        <div class="hidden lg:block relative">
            <div class="absolute inset-0" style="clip-path: polygon(15% 0, 100% 0, 100% 100%, 0% 100%);">
                <img src="/images/about/about-engineers.jpg" alt="ILS engineers"
                     class="w-full h-full object-cover">
            </div>
        </div>
    </div>
</section>

<script>
(function () {
    'use strict';

    // Section in-view trigger for SVG path animations
    var observed = document.querySelectorAll('[data-svc-observe]');
    if (observed.length && 'IntersectionObserver' in window) {
        var sectionObs = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                    sectionObs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.25 });
        observed.forEach(function (el) { sectionObs.observe(el); });
    }
}());
</script>

@endsection
