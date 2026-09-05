@extends('layouts.app')

@section('pageTitle', 'Commercial Laundry Services Ireland | Irish Laundry Systems')
@section('metaDescription', 'Commercial laundry repairs, Preventive Maintenance, equipment rental and aftercare across Dublin and Ireland. Minimise downtime, protect equipment value and control service costs.')

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
<section class="relative overflow-hidden lg:!h-[720px]" style="height: auto; min-height: 480px; background-color: #011E41;">

    {{-- Background image --}}
    <img src="/images/pages/services/services-overview-hero.jpg"
         alt="ILS engineer shaking hands with a customer in a laundry room"
         loading="eager" decoding="async"
         class="absolute inset-0 w-full h-full object-cover" style="object-position: 30% top;">

    {{-- Gradient overlay --}}
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.95) 0%, rgba(1,30,65,0.78) 18%, rgba(1,30,65,0.40) 35%, rgba(1,30,65,0.10) 55%, transparent 70%);"></div>

    {{-- Text --}}
    <div class="relative z-10 h-full flex items-center w-full py-16 lg:py-0">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16">
            <div style="max-width: 760px;">

                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Services Overview</p>

                <h1 class="svc-hero-title font-heading font-bold text-white leading-[1.05] tracking-tight mb-6 text-2xl sm:text-4xl lg:text-5xl">
                    <span class="sm:block">Keep commercial laundry running</span>
                    <span class="sm:block text-[#148af4]">with the right service&nbsp;support</span>
                </h1>

                <p class="svc-hero-desc font-body text-white leading-relaxed mb-10 text-base max-w-2xl text-pretty">
                    <span class="lg:block">Repairs, Preventive Maintenance, equipment rental and aftercare</span>
                    <span class="lg:block">for commercial laundry equipment across Dublin and Ireland.</span>
                </p>

                <div class="svc-hero-btns flex flex-row flex-wrap gap-4">
                    <a href="#services-form"
                       class="inline-flex items-center justify-center bg-[#148af4] hover:bg-[#0e79d8] text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 whitespace-nowrap">
                        Request a Service Assessment
                    </a>
                    <a href="#service-routes"
                       class="inline-flex items-center justify-center border border-white/50 hover:border-white text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 hover:bg-white/10 whitespace-nowrap gap-2">
                        Compare Service Options
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>

            </div>
        </div>
    </div>

</section>

<!-- Electrolux Partner Strip -->
<div class="pt-8 lg:pt-12 bg-white">
    @include('components.partner-strip')
</div>

<!-- 1.5 COMMERCIAL INTRO / BRIDGE -->
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Customer Care</p>
        <div class="grid grid-cols-1 lg:grid-cols-[5fr_6fr] gap-12 lg:gap-10 items-center mb-12 lg:mb-16">
            <div>
                <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-[2rem] 2xl:text-[2.4rem] leading-tight">
                    <span class="sm:block">Service support built around</span>
                    <span class="sm:block text-[#148af4]">uptime, cost control</span>
                    <span class="sm:block text-[#148af4]">and equipment&nbsp;care</span>
                </h2>
            </div>
            <div class="flex flex-col gap-4">
                <p class="font-body text-gray-600 text-base leading-relaxed text-pretty">
                    <span class="lg:block">Service needs change as equipment ages, workloads shift and</span>
                    <span class="lg:block">unexpected faults put pressure on site operations.</span>
                </p>
                <p class="font-body text-gray-600 text-base leading-relaxed text-pretty">
                    <span class="lg:block">Irish Laundry Systems helps you choose the right support, minimise</span>
                    <span class="lg:block">disruption and keep service costs easier to plan and control.</span>
                </p>
            </div>
        </div>

        {{-- Decision logic line --}}
        <div class="pt-14 lg:pt-16">
            <div class="flex flex-col lg:flex-row lg:flex-wrap items-center justify-center gap-x-3 gap-y-3 lg:gap-x-5 font-body font-bold text-navy text-sm lg:text-base">
                <span class="px-4 py-2 rounded-full bg-bg border border-gray-200 text-navy hover:bg-[#148af4] hover:text-white hover:border-[#148af4] transition-colors duration-200 cursor-default">Site pressure</span>
                <svg class="w-5 h-5 text-[#148af4] rotate-90 lg:rotate-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                <span class="px-4 py-2 rounded-full bg-bg border border-gray-200 text-navy hover:bg-[#148af4] hover:text-white hover:border-[#148af4] transition-colors duration-200 cursor-default">Equipment already in use</span>
                <svg class="w-5 h-5 text-[#148af4] rotate-90 lg:rotate-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                <span class="px-4 py-2 rounded-full bg-bg border border-gray-200 text-navy hover:bg-[#148af4] hover:text-white hover:border-[#148af4] transition-colors duration-200 cursor-default">Right support</span>
                <svg class="w-5 h-5 text-[#148af4] rotate-90 lg:rotate-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                <span class="px-4 py-2 rounded-full bg-bg border border-gray-200 text-navy hover:bg-[#148af4] hover:text-white hover:border-[#148af4] transition-colors duration-200 cursor-default">Clear next step</span>
            </div>
        </div>
    </div>
</section>

<!-- 3. SERVICE OPTIONS -->
<div id="service-routes"></div>
@include('components.services-cards', [
    'eyebrow'          => 'Service Options',
    'headingLead'      => 'Find the service your ',
    'headingHighlight' => 'laundry equipment needs',
    'headingTrail'     => '',
    'highlightClass'   => 'text-[#148af4]',
    'headingNowrap'    => false,
    'intro'            => 'From urgent faults to planned care, Irish Laundry Systems covers the main service needs of commercial laundry sites.<br class="hidden lg:block"> Choose the service area your site needs: Repairs & Call-Outs, Preventive Maintenance, Equipment Rental or Support & Aftercare.',
    'introClass'       => '',
    'introMaxW'        => 'max-w-none',
    'align'            => 'left',
    'cards'            => [
        ['title' => 'Repairs & Call-Outs',               'body' => 'Call-out and repair support when commercial laundry equipment needs to return to service.',                          'cta' => 'View Repairs & Call-Outs',              'href' => route('repairs'),           'img' => '/images/shared/repairs-callouts.jpg',                'alt' => 'Repairs and Call-Outs',           'pos' => 'center 40%', 'bullets' => ['Fault review', 'Repair response', 'Service visit']],
        ['title' => 'Preventive Maintenance',  'body' => 'Planned inspections to protect equipment reliability and keep service records clear.',                               'cta' => 'View Preventive Maintenance',           'href' => route('service-contracts'), 'img' => '/images/shared/service-contracts-hero.png',          'alt' => 'Preventive Maintenance',          'pos' => '80% center', 'bullets' => ['Planned checks', 'Service records', 'Maintenance control']],
        ['title' => 'Equipment Rental',                  'body' => 'Access selected Electrolux Professional laundry equipment without one large purchase.',                              'cta' => 'View Equipment Rental',                 'href' => route('rental'),            'img' => '/images/shared/td6-11-multihousing-room-front.jpg', 'alt' => 'Equipment Rental',                'pos' => '66% center', 'bullets' => ['Lower upfront cost', 'Installed equipment', 'Included support']],
        ['title' => 'Support & Aftercare',               'body' => 'Ongoing service for parts checks, service history and future equipment planning.',                                   'cta' => 'View Support & Aftercare',              'href' => route('parts-aftercare'),   'img' => '/images/shared/services-overview-hero-portrait.jpg', 'alt' => 'Support & Aftercare',             'pos' => 'center center', 'bullets' => ['Parts support', 'Service history', 'Aftercare planning']],
    ],
])

<!-- 6. SERVICE RESPONSE — gallery 1-4 (matches Hospitality) -->
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

<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="text-center">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Service Response</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-4 text-balance">
                <span class="sm:block">Tell us what your site needs</span>
                <span class="sm:block text-[#148af4]">and we&rsquo;ll confirm the right next&nbsp;step</span>
            </h2>
            <p class="font-body text-gray-600 text-base leading-relaxed max-w-6xl mx-auto text-pretty">
                <span class="sm:block">Share the equipment, site and service details relevant to your enquiry.</span>
                <span class="sm:block">We&rsquo;ll review what matters and confirm how the request should move forward.</span>
            </p>
        </div>
    </div>
</section>

<section class="w-full overflow-hidden">
    <div style="display:flex; flex-wrap:wrap;">
        @foreach ([
            ['num' => '01.', 'title' => 'Share the service need', 'body' => 'Tell us what is happening with the equipment or what support your site requires.', 'img' => '/images/pages/services/services-how-01.jpg'],
            ['num' => '02.', 'title' => 'Review the details',     'body' => 'We review the equipment, site requirements and any relevant service information.', 'img' => '/images/pages/services/services-how-02.jpg'],
            ['num' => '03.', 'title' => 'Confirm the scope',      'body' => 'We clarify what support is required and what needs to be arranged next.', 'img' => '/images/shared/rentalstripimage.jpg', 'pos' => '20% center'],
            ['num' => '04.', 'title' => 'Arrange the next step',  'body' => 'We confirm the appropriate visit, proposal, service action or follow-up for your enquiry.', 'img' => '/images/shared/service-contracts-hero.png', 'pos' => '70% center'],
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

{{-- White gap so the photo row above reads separately from Installed Equipment below --}}
<div class="h-12 lg:h-20 bg-white"></div>

<!-- 6. INSTALLED EQUIPMENT / ELECTROLUX PROFESSIONAL PARTNERSHIP -->
<section id="parts-aftercare" class="py-20 lg:py-28 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-[11fr_9fr] gap-12 lg:gap-12 items-start">
            <div>
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Electrolux Professional Partnership</p>
                <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-[2.2rem] 2xl:text-[2.5rem] leading-tight mb-5">
                    <span class="lg:block">Service strengthened by Electrolux&nbsp;Professional</span>
                    <span class="lg:block text-[#148af4]">product knowledge and genuine parts&nbsp;access</span>
                </h2>
                <p class="font-body text-gray-600 text-base leading-relaxed mb-6 text-pretty">
                    <span class="lg:block">Access to genuine Electrolux Professional parts and product knowledge</span>
                    <span class="lg:block">supports the way our engineers service and maintain your equipment.</span>
                    <span class="lg:block">That means better-informed decisions around repairs, maintenance</span>
                    <span class="lg:block">and aftercare throughout the working life of the equipment.</span>
                </p>
                <a href="{{ route('electrolux') }}"
                   class="inline-flex items-center gap-2 text-steel hover:text-navy font-body font-bold text-sm transition-colors">
                    Explore the Electrolux Partnership
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            <div class="rounded-2xl border border-gray-200 overflow-hidden" style="background:#f0f4f8;">
                {{-- Logo header row --}}
                <div class="flex items-center gap-5 px-6 py-6">
                    <img src="/images/logo/electrolux-partner.png"
                         alt="Authorised Electrolux Professional Partner"
                         class="h-20 lg:h-24 w-auto object-contain flex-shrink-0">
                    <div>
                        <p class="font-heading font-bold text-navy text-base leading-snug">Authorised Electrolux Professional Partner</p>
                        <p class="font-body text-gray-500 text-sm mt-1">Working together since 1987</p>
                    </div>
                </div>
                {{-- Divider --}}
                <div class="h-px bg-gray-300 mx-6"></div>
                {{-- Proof points --}}
                <ul class="px-6 py-5 space-y-3">
                    @foreach([
                        'Global Professional Range',
                        'Genuine Parts Access',
                        'Manufacturer Knowledge',
                        'Irish Installation & Aftercare',
                    ] as $item)
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10" stroke-width="1.5"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9 12 2 2 4-4"/>
                        </svg>
                        <span class="font-body text-navy text-sm leading-relaxed">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
                {{-- Global proof line --}}
                <div class="px-6 pb-6 pt-1">
                    <p class="font-body text-gray-500 text-xs leading-relaxed">Solutions sold in 110 countries &middot; 55,000 spare parts in stock &middot; 24&ndash;48-hour worldwide parts dispatch</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. CUSTOMER TRUST / TESTIMONIALS -->
<section class="pt-16 lg:pt-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="max-w-5xl mx-auto text-center">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Customer Trust</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-4 text-balance">
                Trusted for <span class="text-[#148af4]">commercial laundry service&nbsp;support</span>
            </h2>
            <p class="font-body text-gray-600 text-base leading-relaxed lg:whitespace-nowrap">
                Commercial customers work with Irish Laundry Systems for responsive service, clear communication and reliable equipment&nbsp;care.
            </p>
        </div>
    </div>
</section>

<div class="-mt-8 lg:-mt-12">
    @include('components.testimonials', ['heading' => ''])
</div>

<div class="bg-white -mt-10 lg:-mt-16 pb-14 lg:pb-20">
    @include('components.proof-bar')
</div>

<!-- 8. FINAL CTA — standard image strip + form below -->
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">

    {{-- RIGHT: image pinned to 40% (matches the standard home strip) --}}
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/pages/services/services-overview-hero.jpg"
             alt="ILS engineer with a commercial laundry customer"
             class="w-full h-full object-cover" style="object-position: center 30%;"
             loading="lazy" decoding="async">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.82) 8%, rgba(20,138,244,0.45) 28%, rgba(20,138,244,0.18) 48%, transparent 65%);"></div>
    </div>

    {{-- LEFT: content — 60% width (matches home cta-combined-banner) --}}
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-10 lg:py-14 max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Service Assessment</p>
        <h2 class="font-heading font-bold leading-tight text-balance mb-4 text-2xl sm:text-4xl lg:text-5xl text-white">
            Need service support for <span style="color:#011E41;">commercial laundry&nbsp;equipment?</span>
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6">
            Tell us what is happening with the equipment. Irish Laundry Systems will review the request<br class="hidden lg:block"> and respond with the appropriate service recommendation.
        </p>

        {{-- 3 horizontal features — icon + label, matches the home strip --}}
        <div class="flex items-center flex-wrap 2xl:flex-nowrap gap-x-4 gap-y-2 mb-7">
            @foreach([
                ['img' => '/images/icons/home-maintenance-costs.png',      'label' => 'Reduce<br>uncertainty'],
                ['img' => '/images/icons/home-maintenance-value.png',      'label' => 'Protect daily<br>operation'],
                ['img' => '/images/icons/home-maintenance-disruption.png', 'label' => 'Keep laundry<br>moving'],
            ] as $i => $feat)
            <span class="flex items-center gap-2 flex-shrink-0">
                <img src="{{ $feat['img'] }}" class="h-14 w-14 object-contain" style="filter:brightness(0) invert(1);" alt="">
                <span class="font-body text-white text-sm font-bold leading-tight">{!! $feat['label'] !!}</span>
            </span>
            @endforeach
        </div>

        <div class="flex flex-wrap gap-3">
            <a href="#services-form"
               class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide w-fit">
                Request a Service Assessment
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
            </a>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 border border-white/60 text-white font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/10 transition-colors tracking-wide w-fit">
                Talk to Our Team
            </a>
        </div>
    </div>

</section>

<!-- 8b. SERVICE ASSESSMENT FORM — below the strip -->
<section id="services-form" class="py-20 lg:py-28 bg-white">
    <div class="max-w-3xl mx-auto px-6 sm:px-10">
        <div class="bg-white rounded-2xl shadow-2xl p-7 lg:p-10">
            <p class="font-heading font-bold text-navy text-xl leading-snug mb-1">Request a Service Assessment</p>
            <p class="font-body text-gray-500 text-sm leading-relaxed mb-6">We aim to respond within 24 hours.</p>
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
                <textarea name="message" rows="4" placeholder="Current issue or requirement *" required class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:border-[#148af4] focus:ring-1 focus:ring-[#148af4] outline-none font-body text-sm text-navy placeholder-gray-400 resize-none"></textarea>
                <div class="flex items-center gap-3 pt-1">
                    <span class="font-body text-gray-500 text-xs">Preferred contact:</span>
                    <label class="inline-flex items-center gap-1.5 font-body text-navy text-xs">
                        <input type="radio" name="preferred_contact" value="phone" class="accent-[#148af4]"> Phone
                    </label>
                    <label class="inline-flex items-center gap-1.5 font-body text-navy text-xs">
                        <input type="radio" name="preferred_contact" value="email" checked class="accent-[#148af4]"> Email
                    </label>
                </div>
                <label class="flex items-start gap-2 pt-1">
                    <input type="checkbox" name="gdpr_consent" value="1" required class="mt-1 accent-[#148af4]">
                    <span class="font-body text-gray-500 text-xs leading-relaxed">I agree to the Privacy Policy and to Irish Laundry Systems using my details to respond to this enquiry. <span class="text-red-400">*</span> <a href="{{ route('privacy') }}" class="underline hover:text-navy transition-colors" target="_blank">Privacy Policy</a>.</span>
                </label>
                <label class="flex items-start gap-2">
                    <input type="checkbox" name="marketing_consent" value="1" class="mt-1 accent-[#148af4]">
                    <span class="font-body text-gray-400 text-xs leading-relaxed">I would like to receive occasional updates from Irish Laundry Systems. Optional.</span>
                </label>
                <button type="submit" class="w-full mt-2 inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-[#0e79d8] text-white font-body font-bold px-6 py-3.5 rounded-lg text-sm transition-colors">
                    Request a Service Assessment
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </button>
            </form>
        </div>
    </div>
</section>

@endsection
