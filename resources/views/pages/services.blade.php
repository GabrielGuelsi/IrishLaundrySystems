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
            <div style="max-width: 760px;">

                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Commercial Laundry Services</p>

                <h1 class="svc-hero-title font-heading font-bold text-white leading-[1.05] tracking-tight mb-6 text-4xl lg:text-6xl xl:text-6xl text-balance">
                    Find the <span class="text-[#148af4]">right service&nbsp;route</span><br class="hidden lg:inline"> before equipment&nbsp;issues<br class="hidden lg:inline"> become bigger&nbsp;costs
                </h1>

                <p class="svc-hero-desc font-body text-white leading-relaxed mb-10 text-lg max-w-xl text-pretty">
                    Faults, maintenance gaps, rental pressure and aftercare decisions can all affect cost, staffing and service continuity. <span class="whitespace-nowrap">Irish Laundry Systems</span> supports commercial laundry sites by matching the issue to the right route, so teams can reduce disruption, avoid confusion and keep the operation moving.
                </p>

                <div class="svc-hero-btns flex flex-row flex-wrap gap-4">
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

                {{-- Trust indicators --}}
                <div class="svc-hero-btns flex flex-wrap items-center gap-x-5 gap-y-2 mt-8 font-body text-white/70 text-xs">
                    <span class="whitespace-nowrap">Engineering-led since 1987</span>
                    <span class="w-px h-3 bg-white/25 hidden sm:block" aria-hidden="true"></span>
                    <span class="whitespace-nowrap">Electrolux Professional Partner</span>
                    <span class="w-px h-3 bg-white/25 hidden sm:block" aria-hidden="true"></span>
                    <span class="whitespace-nowrap">Commercial laundry specialists</span>
                </div>

            </div>
        </div>
    </div>

</section>

<!-- Electrolux Partner Strip -->
@include('components.partner-strip')

<!-- 1.5 COMMERCIAL INTRO / DECISION LOGIC -->
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center mb-12 lg:mb-16">
            <div>
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Services Overview</p>
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight">
                    Start with what is creating&nbsp;pressure,<br> then choose the <span class="text-[#148af4]">right&nbsp;route</span>
                </h2>
            </div>
            <div class="flex flex-col gap-4">
                <p class="font-body text-gray-600 text-base leading-relaxed text-pretty">
                    Commercial laundry sites do not always need the same type of support. One site may need a fault diagnosed. Another may need planned maintenance, rental equipment, follow-up care or a clearer decision around machines already in use.
                </p>
                <p class="font-body text-gray-600 text-base leading-relaxed text-pretty">
                    Irish Laundry Systems gives facilities managers, care home operators, hospitality teams and commercial laundry owners a clearer way to decide what needs to happen next, from repairs and maintenance to rental and aftercare.
                </p>
            </div>
        </div>

        {{-- Decision logic line --}}
        <div class="border-t border-gray-200 pt-8">
            <div class="flex flex-wrap items-center justify-center gap-x-3 gap-y-3 lg:gap-x-5 font-body font-bold text-navy text-sm lg:text-base">
                <span class="px-4 py-2 rounded-full bg-bg border border-gray-200 text-navy hover:bg-[#148af4] hover:text-white hover:border-[#148af4] transition-colors duration-200 cursor-default">Site pressure</span>
                <svg class="w-5 h-5 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                <span class="px-4 py-2 rounded-full bg-bg border border-gray-200 text-navy hover:bg-[#148af4] hover:text-white hover:border-[#148af4] transition-colors duration-200 cursor-default">Equipment already on-site</span>
                <svg class="w-5 h-5 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                <span class="px-4 py-2 rounded-full bg-bg border border-gray-200 text-navy hover:bg-[#148af4] hover:text-white hover:border-[#148af4] transition-colors duration-200 cursor-default">Right route</span>
                <svg class="w-5 h-5 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                <span class="px-4 py-2 rounded-full bg-bg border border-gray-200 text-navy hover:bg-[#148af4] hover:text-white hover:border-[#148af4] transition-colors duration-200 cursor-default">Clear next step</span>
            </div>
        </div>
    </div>
</section>

<!-- 3. SERVICE ROUTE CARDS -->
<div id="service-routes"></div>
@include('components.services-cards', [
    'eyebrow'          => 'Service Routes',
    'headingLead'      => 'Repairs, maintenance, rental and aftercare covered through ',
    'headingHighlight' => 'one clear route',
    'headingTrail'     => '',
    'highlightClass'   => 'text-[#148af4]',
    'headingNowrap'    => false,
    'intro'            => 'Four practical routes for faults, planned maintenance, rental pressure and aftercare around commercial laundry equipment.',
    'introClass'       => '',
    'align'            => 'left',
    'cards'            => [
        ['title' => 'Repairs & Call-outs',               'body' => 'For faults, breakdowns or performance issues affecting laundry output, staffing or service continuity.',                          'cta' => 'View Repairs & Call-outs',              'href' => route('repairs'),           'img' => '/images/healthcare/repairs-callouts.jpg',                'alt' => 'Repairs and Call-outs',           'pos' => 'center 40%', 'bullets' => ['Machine faults', 'Breakdown calls', 'Fault diagnosis', 'Urgent equipment issues']],
        ['title' => 'Preventive Maintenance',           'body' => 'For planned inspections that reduce reactive pressure, support better service timing and keep essential equipment easier to manage.', 'cta' => 'View Preventive Maintenance',           'href' => route('service-contracts'), 'img' => '/images/healthcare/Service%20Contracts.png',             'alt' => 'Preventive Maintenance',          'pos' => 'center 35%', 'bullets' => ['Scheduled visits', 'Service history', 'Planned inspections', 'Reduced reactive pressure']],
        ['title' => 'Equipment Rental',                  'body' => 'For replacement pressure, added capacity or access to commercial laundry equipment without one large purchase upfront.',           'cta' => 'View Equipment Rental',                 'href' => route('rental'),            'img' => '/images/healthcare/lagoon-advanced-care.webp',           'alt' => 'Equipment Rental',                'bullets' => ['Rental equipment', 'Capacity needs', 'Replacement pressure', 'Lower upfront cost']],
        ['title' => 'Support & Aftercare',               'body' => 'For follow-up care, genuine parts access where applicable and clearer repair, maintenance or replacement decisions after the first visit.', 'cta' => 'View Support & Aftercare',        'href' => route('parts-aftercare'),   'img' => '/images/healthcare/services-overview-hero-portrait.jpg', 'alt' => 'Support & Aftercare',             'pos' => 'center center', 'bullets' => ['Aftercare', 'Parts access where applicable', 'Follow-up care', 'Equipment history']],
    ],
])

<!-- 4. PROOF / TRUST STRIP — matches About Us "Proof & Scale" style -->
<section class="bg-white py-16 lg:py-24 border-t border-gray-100">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">

        <div class="mb-12">
            <p class="font-heading font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Why Irish Laundry Systems</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight max-w-4xl text-balance">
                Commercial laundry care built around<br>
                cost control and <span class="text-[#148af4]">peace of mind</span>
            </h2>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
            @foreach ([
                ['type' => 'text',  'num' => '1987', 'sub' => 'year',      'title' => 'Since 1987',                      'desc' => 'Engineering-led commercial laundry work in Ireland.'],
                ['type' => 'badge', 'badge' => '/images/logo/EPR_Authorized_Partner_horizontal_positive_CMYK.jpg', 'sub' => 'partner', 'title' => 'Electrolux Professional Partner', 'desc' => 'Authorised partner for a global professional laundry equipment platform.'],
                ['type' => 'text',  'num' => 'RGI',  'sub' => 'certified', 'title' => 'Registered technical capability', 'desc' => 'Safe Electric registered and Registered Gas Installer contractor capability.'],
                ['type' => 'text',  'num' => '38+',  'sub' => 'clients',   'title' => '38+ long-term clients supported', 'desc' => 'Commercial laundry support for long-term customers.'],
            ] as $item)
            <div class="border-b border-gray-300 pb-5">
                <div class="flex items-end gap-3 mb-3 min-h-[68px] lg:min-h-[80px]">
                    @if ($item['type'] === 'badge')
                        <img src="{{ $item['badge'] }}" alt="Authorised Electrolux Professional Partner"
                             class="h-14 lg:h-16 w-auto object-contain flex-shrink-0" style="mix-blend-mode: multiply;">
                    @else
                        <div class="font-heading font-bold text-navy text-5xl lg:text-6xl leading-none flex-shrink-0">{{ $item['num'] }}</div>
                    @endif
                    <p class="font-body text-gray-400 text-xs uppercase tracking-widest pb-1">{{ $item['sub'] }}</p>
                </div>
                <p class="font-body font-bold text-navy text-sm mb-1">{{ $item['title'] }}</p>
                <p class="font-body text-navy/70 text-sm leading-relaxed font-medium text-pretty">{{ $item['desc'] }}</p>
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
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">How It Works</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-4 text-balance">
                From equipment pressure to the <span class="text-[#148af4]">right next step</span>
            </h2>
            <p class="font-body text-gray-600 text-base leading-relaxed max-w-6xl mx-auto text-pretty">
                <span class="xl:whitespace-nowrap">The right route depends on what is happening in the laundry room.</span><br class="hidden md:block">
                <span class="xl:whitespace-nowrap"><span class="whitespace-nowrap">Irish Laundry Systems</span> connects the issue, the equipment and the practical next step before the problem becomes harder to manage.</span>
            </p>
        </div>
    </div>
</section>

<section class="w-full overflow-hidden">
    <div style="display:flex; flex-wrap:wrap;">
        @foreach ([
            ['num' => '01.', 'title' => 'Understand what is under pressure', 'body' => 'Clarify whether the issue is a fault, recurring problem, planned maintenance need, rental requirement or follow-up after previous work.', 'img' => '/images/healthcare/operator.jpg'],
            ['num' => '02.', 'title' => 'Review the machine and its history', 'body' => 'Look at the machine type, condition, usage, service history and how important the equipment is to daily operation.',                       'img' => '/images/about/about-engineers.jpg'],
            ['num' => '03.', 'title' => 'Choose the right route',           'body' => 'Match the issue to repairs, preventive maintenance, rental or aftercare, depending on what the site needs.',                            'img' => '/images/healthcare/Customer-Care_Line-6000-_001.jpg', 'pos' => '20% center'],
            ['num' => '04.', 'title' => 'Keep the next decision clear',     'body' => 'Use reports, service history, parts access where applicable and follow-up recommendations to keep repair, maintenance or replacement decisions practical.', 'img' => '/images/healthcare/customer-care-line6000.jpg'],
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

<!-- 6. INSTALLED BASE / SUPPORT & AFTERCARE BRIDGE -->
<section id="parts-aftercare" class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div>
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Installed Equipment</p>
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-5 text-balance">
                    Keep <span class="text-[#148af4]">aftercare clearer</span> with <span class="text-[#148af4]">Electrolux partnership</span> behind the&nbsp;equipment
                </h2>
                <p class="font-body text-gray-600 text-base leading-relaxed mb-6 text-pretty">
                    After a repair, service visit, rental decision or equipment recommendation, the next step often depends on the machines already in place. As an Authorised Electrolux Professional Partner, Irish Laundry Systems gives sites clearer access to genuine Electrolux parts where applicable, support from people who know the equipment and better-informed follow-up after the visit.
                </p>
                <a href="{{ route('electrolux') }}"
                   class="inline-flex items-center gap-2 text-steel hover:text-navy font-body font-bold text-sm transition-colors">
                    About the Electrolux Partnership
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
                    <p class="font-body font-bold text-navy text-xs lg:text-sm leading-snug">
                        Irish Laundry Systems is an<br>
                        Authorised Electrolux Professional Partner.
                    </p>
                </div>
                <p class="font-heading font-bold text-navy text-base mb-4">What that means for your site</p>
                <ul class="space-y-3">
                    @foreach ([
                        'Clearer access to genuine Electrolux parts where applicable',
                        'Less uncertainty after a fault or service visit',
                        'Support from people who know the equipment',
                        'Better-informed repair, maintenance or replacement decisions',
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

<!-- 7. CUSTOMER TRUST / TESTIMONIALS -->
<section class="pt-16 lg:pt-24 bg-white">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">
        <div class="max-w-3xl mx-auto text-center">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Customer Trust</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-4 text-balance">
                Trusted by sites that need <span class="text-[#148af4]">clear service decisions</span>
            </h2>
            <p class="font-body text-gray-600 text-base leading-relaxed text-pretty">
                Irish Laundry Systems works with healthcare, care home, hospitality and commercial laundry sites where equipment issues affect daily operations, staff pressure and service&nbsp;continuity.
            </p>
        </div>
    </div>
</section>

<div class="-mt-8 lg:-mt-12">
    @include('components.testimonials', ['heading' => ''])
</div>

<div class="bg-white -mt-10 lg:-mt-16">
    @include('components.proof-bar')
</div>

<!-- 8. FINAL CTA + SHORT FORM -->
<section class="relative overflow-hidden bg-navy">
    <div class="grid grid-cols-1 lg:grid-cols-2 items-stretch">

        {{-- Left: heading + body + CTAs --}}
        <div class="px-6 sm:px-10 lg:px-16 py-12 lg:py-20 z-10 relative">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Request Service Assessment</p>
            <h2 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-4 text-balance">
                Start with the <span class="text-[#148af4]">right service&nbsp;route</span>
            </h2>
            <p class="font-body text-blue-200 text-base leading-relaxed mb-8 max-w-md text-pretty">
                Tell us what is happening with your laundry equipment. Irish Laundry Systems will connect the enquiry to the right route, whether that means repairs, preventive maintenance, equipment rental or&nbsp;aftercare.
            </p>
            <div class="flex flex-row flex-wrap gap-3">
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center bg-white text-navy hover:bg-white/90 font-body font-bold px-6 py-3.5 rounded-full text-sm transition-colors duration-200 whitespace-nowrap gap-2">
                    Talk to Our Team
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
                <a href="#services-form"
                   class="inline-flex items-center justify-center border border-white/40 hover:border-white text-white font-body font-bold px-6 py-3.5 rounded-full text-sm transition-colors duration-200 whitespace-nowrap gap-2 hover:bg-white/10">
                    Request Service Assessment
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>

        {{-- Right: diagonal blue-gradient panel with embedded form --}}
        <div class="hidden lg:block relative">
            <div class="absolute inset-0" style="clip-path: polygon(15% 0, 100% 0, 100% 100%, 0% 100%); background: linear-gradient(135deg, #148af4 0%, #0e79d8 45%, #011E41 100%);"></div>
            <div id="services-form" class="relative z-10 h-full flex items-center justify-end pr-10 xl:pr-16 py-12 lg:py-16 pl-[18%]">
                <div class="w-full max-w-md bg-white rounded-2xl shadow-2xl p-7 lg:p-8">
                    <p class="font-heading font-bold text-navy text-lg lg:text-xl leading-snug mb-1">Request Service Assessment</p>
                    <p class="font-body text-gray-500 text-sm leading-relaxed mb-5">Share the details that make the next step clearer.</p>
                    <form action="{{ route('contact.submit') ?? '#' }}" method="POST" class="space-y-3">
                        @csrf
                        <input type="hidden" name="page_source" value="services_overview_cta">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <input type="text"  name="name"          placeholder="Name *"           required class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:border-[#148af4] focus:ring-1 focus:ring-[#148af4] outline-none font-body text-sm text-navy placeholder-gray-400">
                            <input type="text"  name="organisation"  placeholder="Organisation"             class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:border-[#148af4] focus:ring-1 focus:ring-[#148af4] outline-none font-body text-sm text-navy placeholder-gray-400">
                            <input type="tel"   name="phone"         placeholder="Phone *"          required class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:border-[#148af4] focus:ring-1 focus:ring-[#148af4] outline-none font-body text-sm text-navy placeholder-gray-400">
                            <input type="email" name="email"         placeholder="Email *"          required class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:border-[#148af4] focus:ring-1 focus:ring-[#148af4] outline-none font-body text-sm text-navy placeholder-gray-400">
                            <input type="text"  name="site_location" placeholder="Site location"            class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:border-[#148af4] focus:ring-1 focus:ring-[#148af4] outline-none font-body text-sm text-navy placeholder-gray-400">
                            <select name="sector" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:border-[#148af4] focus:ring-1 focus:ring-[#148af4] outline-none font-body text-sm text-navy bg-white">
                                <option value="">Sector</option>
                                <option>Healthcare</option>
                                <option>Care Facilities</option>
                                <option>Hospitality</option>
                                <option>Commercial &amp; Industrial</option>
                            </select>
                        </div>
                        <input type="text" name="equipment_type" placeholder="Equipment type" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:border-[#148af4] focus:ring-1 focus:ring-[#148af4] outline-none font-body text-sm text-navy placeholder-gray-400">
                        <textarea name="message" rows="3" placeholder="Current issue or requirement *" required class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:border-[#148af4] focus:ring-1 focus:ring-[#148af4] outline-none font-body text-sm text-navy placeholder-gray-400 resize-none"></textarea>
                        <div class="flex items-center gap-3 pt-1">
                            <span class="font-body text-gray-500 text-xs">Preferred contact:</span>
                            <label class="inline-flex items-center gap-1.5 font-body text-navy text-xs">
                                <input type="radio" name="preferred_contact" value="phone" class="accent-[#148af4]"> Phone
                            </label>
                            <label class="inline-flex items-center gap-1.5 font-body text-navy text-xs">
                                <input type="radio" name="preferred_contact" value="email" checked class="accent-[#148af4]"> Email
                            </label>
                        </div>
                        <button type="submit" class="w-full mt-2 inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-[#0e79d8] text-white font-body font-bold px-6 py-3 rounded-lg text-sm transition-colors">
                            Request Service Assessment
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        {{-- Mobile-only form (replaces hidden right column on small screens) --}}
        <div id="services-form-mobile" class="lg:hidden px-6 sm:px-10 pb-12">
            <div class="bg-white rounded-2xl shadow-2xl p-6 sm:p-7">
                <p class="font-heading font-bold text-navy text-lg leading-snug mb-1">Request Service Assessment</p>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-5">Share the details that make the next step clearer.</p>
                <form action="{{ route('contact.submit') ?? '#' }}" method="POST" class="space-y-3">
                    @csrf
                    <input type="hidden" name="page_source" value="services_overview_cta_mobile">
                    <input type="text"  name="name"          placeholder="Name *"  required class="w-full px-4 py-2.5 rounded-lg border border-gray-300 outline-none font-body text-sm text-navy placeholder-gray-400">
                    <input type="tel"   name="phone"         placeholder="Phone *" required class="w-full px-4 py-2.5 rounded-lg border border-gray-300 outline-none font-body text-sm text-navy placeholder-gray-400">
                    <input type="email" name="email"         placeholder="Email *" required class="w-full px-4 py-2.5 rounded-lg border border-gray-300 outline-none font-body text-sm text-navy placeholder-gray-400">
                    <textarea name="message" rows="3" placeholder="Current issue or requirement *" required class="w-full px-4 py-2.5 rounded-lg border border-gray-300 outline-none font-body text-sm text-navy placeholder-gray-400 resize-none"></textarea>
                    <button type="submit" class="w-full inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-[#0e79d8] text-white font-body font-bold px-6 py-3 rounded-lg text-sm transition-colors">
                        Request Service Assessment
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
