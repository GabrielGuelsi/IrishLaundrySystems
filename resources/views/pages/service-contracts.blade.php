@extends('layouts.app')

@section('pageTitle', 'Preventive Maintenance Contracts | Irish Laundry Systems')
@section('metaDescription', 'Preventive Maintenance Contracts for commercial laundry — scheduled servicing, preferential call-out support, reporting and aftercare around the equipment already in operation.')

@section('content')

<style>
    /* ── Hero fade-up ── */
    @keyframes heroFadeUp {
        from { opacity: 0; transform: translateY(24px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    .hero-title { animation: heroFadeUp 0.7s ease forwards; }
    .hero-desc  { animation: heroFadeUp 0.7s ease 0.2s forwards; opacity: 0; }
    .hero-btns  { animation: heroFadeUp 0.7s ease 0.4s forwards; opacity: 0; }
    .hero-trust { animation: heroFadeUp 0.7s ease 0.55s forwards; opacity: 0; }
    @media (prefers-reduced-motion: reduce) {
        .hero-title, .hero-desc, .hero-btns, .hero-trust { animation: none; opacity: 1; transform: none; }
    }

    /* ── Soft pulse halo behind hero primary CTA ── */
    .pulse-cta { position: relative; isolation: isolate; }
    .pulse-cta::before {
        content: '';
        position: absolute;
        inset: -6px;
        border-radius: inherit;
        background: rgba(20, 138, 244, 0.45);
        z-index: -1;
        animation: scPulse 2.4s ease-out infinite;
    }
    @keyframes scPulse {
        0%   { transform: scale(0.96); opacity: 0.55; }
        70%  { transform: scale(1.08); opacity: 0;    }
        100% { transform: scale(1.08); opacity: 0;    }
    }

    /* ── Subtle dot-grid pattern for navy backgrounds ── */
    .sc-dotgrid {
        background-image: radial-gradient(rgba(255,255,255,0.06) 1px, transparent 1px);
        background-size: 22px 22px;
    }

    /* ── Decorative animated check beside form heading ── */
    .sc-check-circle {
        stroke-dasharray: 64;
        stroke-dashoffset: 64;
        animation: scDraw 1.2s ease 0.3s forwards;
    }
    .sc-check-tick {
        stroke-dasharray: 18;
        stroke-dashoffset: 18;
        animation: scDraw 0.5s ease 1.2s forwards;
    }
    @keyframes scDraw { to { stroke-dashoffset: 0; } }

    @media (prefers-reduced-motion: reduce) {
        .pulse-cta::before { animation: none; opacity: 0; }
        .sc-check-circle, .sc-check-tick { animation: none; stroke-dashoffset: 0; }
    }

    /* ── Preventive visits gallery ── */
    .sc-visit-card {
        position: relative;
        overflow: hidden;
        min-height: 520px;
        flex: 1 1 25%;
    }
    .sc-visit-card img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        transition: transform 0.6s ease;
    }
    .sc-visit-card:hover img { transform: scale(1.06); }
    .sc-visit-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(1,30,65,0.90) 0%, rgba(1,30,65,0.35) 55%, rgba(1,30,65,0.10) 100%);
        z-index: 1;
        transition: opacity 0.4s;
    }
    .sc-visit-card::after {
        content: '';
        position: absolute;
        inset: 0;
        background: rgba(1,30,65,0.90);
        z-index: 2;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.4s, visibility 0.4s;
    }
    .sc-visit-card:hover::before { opacity: 0; }
    .sc-visit-card:hover::after  { opacity: 1; visibility: visible; }

    .sc-vcap1 {
        position: absolute;
        bottom: 28px;
        left: 32px;
        z-index: 3;
        transition: opacity 0.35s ease, transform 0.35s ease;
    }
    .sc-vcap1 .sc-num {
        color: #148af4;
        font-size: 2.6rem;
        font-weight: 700;
        line-height: 1;
        display: block;
        margin-bottom: 6px;
    }
    .sc-vcap1 h4 {
        color: #fff;
        font-size: 1rem;
        font-weight: 700;
        line-height: 1.3;
        margin: 0;
    }
    .sc-visit-card:hover .sc-vcap1 {
        opacity: 0;
        transform: translateY(16px);
    }

    .sc-vcap2 {
        position: absolute;
        top: 50%;
        left: 32px;
        right: 32px;
        transform: translateY(-40%);
        z-index: 5;
        opacity: 0;
        transition: opacity 0.4s ease, transform 0.4s ease;
    }
    .sc-visit-card:hover .sc-vcap2 {
        opacity: 1;
        transform: translateY(-50%);
    }
    .sc-vcap2 .sc-num {
        color: #148af4;
        font-size: 2.6rem;
        font-weight: 700;
        line-height: 1;
        display: block;
        margin-bottom: 12px;
    }
    .sc-vcap2 h4 {
        color: #fff;
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 12px;
    }
    .sc-vcap2 p {
        color: rgba(255,255,255,0.72);
        font-size: 0.85rem;
        line-height: 1.65;
    }

    @media (max-width: 767px) {
        .sc-visit-card { min-height: 300px; flex: 1 1 50%; }
    }
    @media (max-width: 479px) {
        .sc-visit-card { min-height: 260px; flex: 1 1 100%; }
    }
</style>

{{-- ════════════════════════════════════════════════════════════════════════
     1. HERO
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden" style="height: 720px; min-height: 560px; background-color: #011E41;">

    <img src="/images/healthcare/service-contracts-hero.png"
         alt="ILS engineer carrying out preventive maintenance on commercial laundry equipment"
         loading="eager" decoding="async"
         class="absolute inset-0 w-full h-full object-cover object-right">

    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.97) 0%, rgba(1,30,65,0.90) 25%, rgba(1,30,65,0.65) 45%, rgba(1,30,65,0.25) 65%, transparent 80%);"></div>

    <div class="relative z-10 h-full flex items-center w-full">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16">
            <div style="max-width: 640px;">

                <p class="hero-trust font-body font-bold text-steel text-xs uppercase tracking-[0.22em] mb-5" style="opacity:1;">
                    Preventive Maintenance Contracts
                </p>

                <h1 class="hero-title font-heading font-bold text-white leading-[1.05] tracking-tight mb-6 text-4xl lg:text-5xl xl:text-6xl">
                    <span class="text-steel">Keep your laundry operation running</span> without costly downtime
                </h1>

                <p class="hero-desc font-body text-blue-200 text-base lg:text-lg leading-relaxed mb-9 max-w-xl">
                    Prevent unexpected breakdowns, reduce repair costs, and keep your commercial laundry equipment operating efficiently with an Irish Laundry Systems Preventive Maintenance Contract.
                </p>

                <div class="hero-btns flex flex-row flex-wrap gap-4">
                    <a href="#book-visit-form"
                       data-ga-cta="hero-book-visit"
                       class="pulse-cta inline-flex items-center justify-center bg-orange hover:bg-orange-dark text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 whitespace-nowrap">
                        Book a Preventive Maintenance Visit
                    </a>
                    <a href="{{ route('contact') }}"
                       data-ga-cta="hero-talk-team"
                       class="inline-flex items-center justify-center border border-white/50 hover:border-white text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 hover:bg-white/10 whitespace-nowrap">
                        Talk to Our Team
                    </a>
                </div>

                <div class="hero-trust mt-7 flex flex-wrap items-center gap-x-5 gap-y-2 text-xs font-body text-blue-200/90">
                    <span class="inline-flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-steel"></span>
                        Fast engineer response
                    </span>
                    <span class="hidden sm:inline opacity-30">|</span>
                    <span class="inline-flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-steel"></span>
                        Preventive maintenance
                    </span>
                    <span class="hidden sm:inline opacity-30">|</span>
                    <span class="inline-flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-steel"></span>
                        Commercial laundry specialists
                    </span>
                </div>

            </div>
        </div>
    </div>

</section>

{{-- ════════════════════════════════════════════════════════════════════════
     2. ELECTROLUX TRUST STRIP
     ════════════════════════════════════════════════════════════════════════ --}}
@include('components.partner-strip')

{{-- ════════════════════════════════════════════════════════════════════════
     3. COMMERCIAL INTRO / WHY PREVENTIVE MAINTENANCE CONTRACTS MATTER
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">

            {{-- Left column --}}
            <div class="lg:col-span-5 reveal">
                <p class="font-body font-bold text-steel text-xs uppercase tracking-[0.22em] mb-5">
                    Why Preventive Maintenance Contracts Matter
                </p>
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-[1.1] tracking-tight">
                    A <span class="text-steel">proactive protection plan</span><br class="hidden lg:block">
                    for essential commercial<br class="hidden lg:block">
                    laundry equipment
                </h2>
            </div>

            {{-- Right column --}}
            <div class="lg:col-span-7 reveal" style="transition-delay:120ms;">
                <p class="font-heading font-bold text-navy text-xl lg:text-2xl leading-snug mb-6">
                    Equipment failures can disrupt operations, delay linen turnaround and create unnecessary pressure for staff.
                </p>
                <p class="font-body text-gray-600 text-base lg:text-lg leading-relaxed mb-5">
                    Irish Laundry Systems Preventive Maintenance Contracts are designed to help businesses reduce downtime through planned maintenance, priority support and proactive servicing.
                </p>
                <p class="font-body text-gray-600 text-base lg:text-lg leading-relaxed mb-8">
                    With regular inspections and expert support, issues can often be identified before they become major breakdowns.
                </p>
                <a href="#book-visit-form"
                   data-ga-cta="intro-book-visit"
                   class="inline-flex items-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200">
                    Book a Preventive Maintenance Visit
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     4. WHAT YOU GAIN — 6 cards
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="py-16 lg:py-24 bg-bg">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="max-w-3xl mx-auto text-center mb-14 lg:mb-16">
            <p class="font-body font-bold text-steel text-xs uppercase tracking-[0.22em] mb-4 reveal">What You Gain</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-[1.1] tracking-tight mb-5 reveal" style="transition-delay:80ms;">
                <span class="text-steel">What you gain</span> with an<br class="hidden md:block">
                Irish Laundry Systems<br class="hidden md:block">
                Preventive Maintenance Contract
            </h2>
            <p class="font-body text-gray-600 text-base lg:text-lg leading-relaxed reveal" style="transition-delay:160ms;">
                A Preventive Maintenance Contract gives your site a clearer route for planned care, fewer unexpected problems and better control around essential laundry equipment.
            </p>
        </div>

        @php
        $gainCards = [
            [
                'title' => 'Preferential Call-Out Support',
                'text'  => 'Service contract customers benefit from structured engineering support, including preferential labour rates for reactive call-outs where applicable.',
                'svg'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>',
            ],
            [
                'title' => 'Experienced Laundry Equipment Specialists',
                'text'  => 'Backed by Safe Electric registration, Registered Gas Installer (RGI) contractor capability and Electrolux Professional equipment experience.',
                'svg'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.745 3.745 0 013.296-1.043A3.745 3.745 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"/>',
            ],
            [
                'title' => 'Preventive Maintenance',
                'text'  => 'Scheduled servicing helps identify wear and potential faults before they become expensive repairs.',
                'svg'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/>',
            ],
            [
                'title' => 'Reduced Downtime',
                'text'  => 'Well-maintained machines are more reliable and less likely to suffer unexpected failures.',
                'svg'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>',
            ],
            [
                'title' => 'Cost Control & Less Disruption',
                'text'  => 'Helps businesses manage maintenance expenses more predictably, reduce unexpected repair costs and avoid larger emergency repair bills.',
                'svg'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/>',
            ],
            [
                'title' => 'Improved Equipment Lifespan',
                'text'  => 'Regular servicing can help equipment operate more efficiently and extend operational life.',
                'svg'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"/>',
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-6">
            @foreach ($gainCards as $i => $card)
            <article class="group relative overflow-hidden bg-white rounded-3xl border border-navy/5 p-7 lg:p-8 flex flex-col gap-5 reveal transition-all duration-300 ease-out hover:-translate-y-1 hover:shadow-[0_20px_40px_-15px_rgba(1,30,65,0.18)] hover:border-steel/30" style="transition-delay:{{ $i * 60 }}ms;">
                <span aria-hidden="true" class="absolute inset-x-0 top-0 h-[2px] bg-gradient-to-r from-transparent via-steel to-transparent opacity-70 group-hover:opacity-100 transition-opacity duration-300"></span>
                <span aria-hidden="true" class="pointer-events-none absolute top-4 right-5 font-heading font-bold text-navy/[0.06] text-7xl lg:text-8xl leading-none tracking-tight select-none transition-all duration-500 group-hover:text-steel/[0.10] group-hover:scale-105">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>

                <div class="relative w-14 h-14 rounded-full flex items-center justify-center bg-gradient-to-br from-steel/15 via-steel/10 to-white ring-1 ring-inset ring-steel/25 shadow-[inset_0_1px_2px_rgba(255,255,255,0.8),0_4px_12px_-4px_rgba(20,138,244,0.25)] transition-transform duration-300 group-hover:scale-110">
                    <svg class="w-7 h-7 text-steel relative" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        {!! $card['svg'] !!}
                    </svg>
                </div>

                <h3 class="relative font-heading font-bold text-navy text-lg lg:text-xl leading-snug">{{ $card['title'] }}</h3>
                <p class="relative font-body text-gray-600 text-sm lg:text-base leading-relaxed">{{ $card['text'] }}</p>
            </article>
            @endforeach
        </div>

    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     5. WHAT'S INCLUDED — premium checklist with image
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="max-w-3xl mb-12 lg:mb-14">
            <p class="font-body font-bold text-steel text-xs uppercase tracking-[0.22em] mb-4 reveal">What's Included</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-[1.1] tracking-tight mb-5 reveal" style="transition-delay:80ms;">
                <span class="text-steel">What's included</span> in a<br class="hidden md:block">
                Preventive Maintenance<br class="hidden md:block">
                Contract
            </h2>
            <p class="font-body text-gray-600 text-base lg:text-lg leading-relaxed reveal" style="transition-delay:160ms;">
                A clear maintenance structure around the equipment already in operation.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">

            {{-- Left: image --}}
            <div class="lg:col-span-5 reveal">
                <div class="relative rounded-3xl overflow-hidden bg-navy shadow-xl">
                    <img src="/images/hero/on-site-diagnosis.jpeg"
                         alt="ILS technician inspecting commercial laundry equipment during a planned visit"
                         loading="lazy" decoding="async"
                         class="w-full h-full object-cover aspect-[4/5]">
                    <div class="absolute inset-x-0 bottom-0 h-1/3" style="background: linear-gradient(to top, rgba(1,15,42,0.55) 0%, transparent 100%);" aria-hidden="true"></div>
                    <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-3xl pointer-events-none"></div>
                </div>
            </div>

            {{-- Right: 8-item checklist --}}
            <div class="lg:col-span-7">
                @php
                $includedItems = [
                    ['title' => 'Scheduled preventive maintenance visits',     'text' => 'Planned maintenance visits are scheduled around your equipment and site requirements to help identify wear, servicing needs and developing faults before they become larger operational issues.'],
                    ['title' => 'Equipment inspections and testing',            'text' => 'Inspection and testing to check machine condition, performance and safety.'],
                    ['title' => 'Preferential call-out support',                'text' => 'Service contract customers benefit from structured engineering support, including preferential labour rates for reactive call-outs where applicable.'],
                    ['title' => 'Fault diagnosis',                              'text' => 'Engineer assessment when issues are identified during maintenance or reported between visits.'],
                    ['title' => 'Performance and safety checks',                'text' => 'Checks to help keep essential laundry equipment operating properly and safely.'],
                    ['title' => 'Service reporting',                            'text' => 'Detailed engineer reporting and maintenance records help sites track servicing history, identify recurring equipment issues and maintain clearer documentation for operational audits and inspection processes.'],
                    ['title' => 'Recommendations for wear-and-tear items',      'text' => 'Clear recommendations where wear-and-tear items or follow-up work may be needed.'],
                    ['title' => 'Technical support and assistance',             'text' => 'Direct access to experienced engineers for telephone support and practical assistance when equipment issues arise.'],
                ];
                @endphp
                <ul class="space-y-4">
                    @foreach ($includedItems as $i => $item)
                    <li class="flex items-start gap-4 reveal" style="transition-delay:{{ $i * 50 }}ms;">
                        <div class="flex-shrink-0 w-8 h-8 rounded-full bg-steel/10 ring-1 ring-inset ring-steel/30 flex items-center justify-center mt-0.5">
                            <svg class="w-4 h-4 text-steel" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                            </svg>
                        </div>
                        <div class="min-w-0">
                            <h3 class="font-heading font-bold text-navy text-base lg:text-lg leading-snug mb-1">{{ $item['title'] }}</h3>
                            <p class="font-body text-gray-600 text-sm lg:text-base leading-relaxed">{{ $item['text'] }}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>

                {{-- Parts clarification note --}}
                <div class="mt-8 bg-amber-50 border border-amber-200 rounded-2xl p-4 lg:p-5 reveal" style="transition-delay:480ms;">
                    <div class="flex items-start gap-3">
                        <div class="w-9 h-9 rounded-lg bg-amber-100 border border-amber-200 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/>
                            </svg>
                        </div>
                        <p class="font-body text-amber-900 text-sm leading-relaxed">
                            <span class="font-bold uppercase tracking-widest text-amber-700 text-xs block mb-1">Parts clarification</span>
                            Parts are charged separately where required. Preventive Maintenance Contracts do not include replacement parts unless separately agreed in the contract scope.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     6. FINANCIAL VALUE — full-width diptych with imagery
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="py-16 lg:py-24 bg-bg">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- Editorial header — compact, with expandable financial case --}}
        <div class="max-w-3xl mb-10 lg:mb-12" x-data="{ open: false }">
            <p class="font-body font-bold text-steel text-xs uppercase tracking-[0.22em] mb-4 reveal">Financial Value</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-[1.1] tracking-tight mb-6 reveal" style="transition-delay:80ms;">
                <span class="text-steel">Protect your maintenance budget</span><br class="hidden lg:block">
                before small problems become<br class="hidden lg:block">
                expensive repairs
            </h2>

            <p class="font-body text-gray-600 text-base lg:text-lg leading-relaxed mb-6 reveal" style="transition-delay:140ms;">
                Many businesses compare contract cost with doing nothing. Waiting for breakdowns can create emergency call-outs, longer downtime, production delays and unplanned repair costs.
            </p>

            <button
                type="button"
                @click="open = !open"
                :aria-expanded="open"
                aria-controls="fv-disclosure"
                class="inline-flex items-center gap-2 bg-white border border-steel/30 hover:border-steel text-steel font-body font-bold text-sm px-5 py-2.5 rounded-full transition-colors duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-steel focus-visible:ring-offset-2 reveal"
                style="transition-delay:200ms;">
                <span x-text="open ? 'Hide the financial case' : 'Read the financial case'">Read the financial case</span>
                <svg :class="open ? 'rotate-180' : ''" class="w-4 h-4 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>

            <div
                id="fv-disclosure"
                x-show="open"
                x-cloak
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 -translate-y-2"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-2"
                class="mt-7 pt-7 border-t border-navy/10 space-y-5">
                <p class="font-body text-gray-600 text-base lg:text-lg leading-relaxed">
                    Preventive maintenance helps protect the money already invested in commercial laundry equipment. Planned servicing, earlier issue detection, preferential labour rates where applicable and clearer service records can help reduce avoidable repair costs, limit disruption and support longer equipment life.
                </p>
                <p class="font-body text-gray-600 text-base lg:text-lg leading-relaxed">
                    For sites using Electrolux Professional equipment, this maintenance-led approach also helps protect performance benefits around energy use, water use, detergent control and lifecycle cost.
                </p>
                <div class="bg-white border-l-4 border-steel rounded-r-xl p-5 lg:p-6 shadow-[0_10px_30px_-15px_rgba(1,30,65,0.18)]">
                    <p class="font-body text-navy text-sm lg:text-base leading-relaxed italic">
                        Routine servicing can help identify developing issues early, reducing the likelihood of larger failures and helping maintain consistent laundry performance.
                    </p>
                </div>
            </div>
        </div>

        {{-- Diptych: two photo panes, no gap --}}
        <div class="rounded-3xl overflow-hidden shadow-[0_30px_80px_-30px_rgba(1,30,65,0.35)] reveal" style="transition-delay:120ms;">
            <div class="grid grid-cols-1 lg:grid-cols-2">

                {{-- WITHOUT pane --}}
                <article class="relative min-h-[520px] lg:min-h-[680px] overflow-hidden bg-navy">
                    {{-- Background image --}}
                    <img src="/images/equipment/td6-multihousing-room.jpg"
                         alt="A commercial laundry room without active maintenance support"
                         loading="lazy" decoding="async"
                         class="absolute inset-0 w-full h-full object-cover"
                         style="filter: brightness(0.7) saturate(0.85);">

                    {{-- Cinematic fade-to-solid-navy --}}
                    <div class="absolute inset-0"
                         style="background: linear-gradient(180deg, rgba(1,30,65,0.20) 0%, rgba(1,30,65,0.55) 30%, rgba(1,30,65,0.92) 55%, rgba(1,30,65,1.0) 75%, rgba(1,30,65,1.0) 100%);"
                         aria-hidden="true"></div>

                    {{-- Content sits directly over the solid navy lower band --}}
                    <div class="relative z-10 h-full flex flex-col justify-end p-8 lg:p-12">
                        <div class="inline-flex items-center self-start gap-2 bg-white/10 border border-white/15 rounded-full px-3 py-1 mb-6">
                            <span class="w-1.5 h-1.5 rounded-full bg-white/40"></span>
                            <span class="text-[11px] font-body font-bold text-white/85 uppercase tracking-[0.18em]">Without a contract</span>
                        </div>
                        <h3 class="font-heading font-bold text-white text-3xl lg:text-4xl leading-tight mb-7 drop-shadow-[0_2px_8px_rgba(0,0,0,0.4)]">
                            The cost of doing nothing
                        </h3>
                        <ul class="space-y-3">
                            @foreach (['Emergency call-outs', 'Longer downtime', 'Production delays', 'Unplanned repair costs', 'Potential equipment neglect'] as $item)
                            <li class="flex items-start gap-3">
                                <span class="flex-shrink-0 w-7 h-7 rounded-full bg-white/10 ring-1 ring-inset ring-white/20 flex items-center justify-center mt-0.5">
                                    <svg class="w-3.5 h-3.5 text-white/70" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </span>
                                <span class="font-body text-white/85 text-sm lg:text-base leading-snug pt-1 drop-shadow-[0_1px_3px_rgba(0,0,0,0.35)]">{{ $item }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </article>

                {{-- WITH pane --}}
                <article class="relative min-h-[520px] lg:min-h-[680px] overflow-hidden bg-navy">
                    {{-- Top steel highlight bar --}}
                    <div class="absolute inset-x-0 top-0 h-[3px] z-20 bg-gradient-to-r from-transparent via-steel to-transparent" aria-hidden="true"></div>

                    {{-- Background image (full colour) --}}
                    <img src="/images/healthcare/customer-care-line6000.jpg"
                         alt="Irish Laundry Systems engineer providing planned maintenance support"
                         loading="lazy" decoding="async"
                         class="absolute inset-0 w-full h-full object-cover">

                    {{-- Cinematic fade-to-solid-navy --}}
                    <div class="absolute inset-0"
                         style="background: linear-gradient(180deg, rgba(1,30,65,0.20) 0%, rgba(1,30,65,0.55) 30%, rgba(1,30,65,0.92) 55%, rgba(1,30,65,1.0) 75%, rgba(1,30,65,1.0) 100%);"
                         aria-hidden="true"></div>

                    {{-- Content sits directly over the solid navy lower band --}}
                    <div class="relative z-10 h-full flex flex-col justify-end p-8 lg:p-12">
                        <div class="inline-flex items-center self-start gap-2 bg-steel/25 border border-steel/50 rounded-full px-3 py-1 mb-6">
                            <span class="w-1.5 h-1.5 rounded-full bg-steel"></span>
                            <span class="text-[11px] font-body font-bold text-white uppercase tracking-[0.18em]">With a PM Contract</span>
                        </div>
                        <h3 class="font-heading font-bold text-white text-3xl lg:text-4xl leading-tight mb-7 drop-shadow-[0_2px_8px_rgba(0,0,0,0.4)]">
                            A predictable, protected operation
                        </h3>
                        <ul class="space-y-3">
                            @foreach (['Planned maintenance', 'Predictable support structure', 'Earlier issue detection', 'Reduced operational disruption', 'Preferential labour rates where applicable', 'Better equipment reliability', 'Clearer service records', 'Longer equipment life'] as $item)
                            <li class="flex items-start gap-3">
                                <span class="flex-shrink-0 w-7 h-7 rounded-full bg-steel/25 ring-1 ring-inset ring-steel/50 flex items-center justify-center mt-0.5">
                                    <svg class="w-3.5 h-3.5 text-steel" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                                    </svg>
                                </span>
                                <span class="font-body text-white text-sm lg:text-base font-medium leading-snug pt-1 drop-shadow-[0_1px_3px_rgba(0,0,0,0.35)]">{{ $item }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </article>

            </div>
        </div>

    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     7. HOW PREVENTIVE VISITS WORK — wide 4-image process strip
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="w-full overflow-hidden pb-16 lg:pb-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 lg:py-20">
        <p class="font-body font-bold text-steel text-xs uppercase tracking-[0.22em] mb-4 reveal">Preventive Visits</p>
        <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-[1.1] tracking-tight max-w-3xl reveal" style="transition-delay:80ms;">
            How <span class="text-steel">preventive visits</span> work
        </h2>
        <p class="font-body text-gray-600 text-lg leading-relaxed mt-4 max-w-2xl reveal" style="transition-delay:160ms;">
            A simple route from equipment review to planned maintenance, reporting and the next practical action.
        </p>
    </div>

    <div style="display:flex; flex-wrap:wrap;">
        @foreach([
            [
                'num'   => '01.',
                'title' => 'Inspect & assess',
                'body'  => 'Review equipment condition, visible wear, usage pressure and any issues reported by the site.',
                'img'   => '/images/healthcare/Customer-Care_Line-6000-_001.jpg',
            ],
            [
                'num'   => '02.',
                'title' => 'Service & identify',
                'body'  => 'Carry out scheduled preventive maintenance and identify wear, servicing needs or developing faults before they become larger operational issues.',
                'img'   => '/images/healthcare/repairs-hero.jpg',
            ],
            [
                'num'   => '03.',
                'title' => 'Report on-site',
                'body'  => 'Provide engineer reporting and maintenance records to help track service history, recurring issues and inspection requirements.',
                'img'   => '/images/healthcare/service-contracts-hero.jpg',
            ],
            [
                'num'   => '04.',
                'title' => 'Agree the next action',
                'body'  => 'Agree recommendations, follow-up actions or call-out routes where further work, parts or technical assistance may be needed.',
                'img'   => '/images/equipment/td6-multihousing-room.jpg',
            ],
        ] as $card)
        <div class="sc-visit-card">
            <img src="{{ asset(ltrim($card['img'], '/')) }}" alt="{{ $card['title'] }}" loading="lazy">
            <div class="sc-vcap1">
                <span class="sc-num">{{ $card['num'] }}</span>
                <h4>{{ $card['title'] }}</h4>
            </div>
            <div class="sc-vcap2">
                <span class="sc-num">{{ $card['num'] }}</span>
                <h4>{{ $card['title'] }}</h4>
                <p>{{ $card['body'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     8. GETTING STARTED — compact 3-step navy strip
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="relative py-16 lg:py-20 bg-navy sc-dotgrid overflow-hidden">
    <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>
    <div class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>

    <div class="relative max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="max-w-2xl mb-12 lg:mb-14 reveal">
            <p class="font-body font-bold text-steel text-xs uppercase tracking-[0.22em] mb-4">Getting Started</p>
            <h2 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-[1.1] tracking-tight mb-4">
                Getting a <span class="text-steel">Preventive<br class="hidden md:block">
                Maintenance Contract</span><br class="hidden md:block">
                in place
            </h2>
            <p class="font-body text-blue-200 text-base lg:text-lg leading-relaxed">
                A clear route from first visit to planned maintenance.
            </p>
        </div>

        @php
        $startSteps = [
            ['title' => 'Book a preventive maintenance visit', 'text' => 'Tell us about your equipment, site and current pressure points.'],
            ['title' => 'Review the installed base',           'text' => 'We assess equipment type, usage, condition and service history.'],
            ['title' => 'Start planned maintenance',           'text' => 'Your site moves into a clearer maintenance structure with reporting and ongoing assistance.'],
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
            @foreach ($startSteps as $i => $step)
            <div class="relative bg-white/[0.04] border border-white/10 rounded-2xl p-6 lg:p-7 reveal" style="transition-delay:{{ $i * 100 }}ms;">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-full bg-steel/20 border border-steel/40 flex items-center justify-center text-steel font-heading font-bold text-lg">
                        {{ $i + 1 }}
                    </div>
                    @if ($i < count($startSteps) - 1)
                    <div class="hidden md:block flex-1 h-px bg-gradient-to-r from-steel/40 to-transparent" aria-hidden="true"></div>
                    @endif
                </div>
                <h3 class="font-heading font-bold text-white text-lg lg:text-xl leading-snug mb-2">{{ $step['title'] }}</h3>
                <p class="font-body text-blue-200 text-sm lg:text-base leading-relaxed">{{ $step['text'] }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     9. DOWNTIME STRIP
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="relative py-20 lg:py-28 bg-navy overflow-hidden">
    <div class="absolute inset-0" aria-hidden="true">
        <img src="/images/sectors/commercial-hero.jpg"
             alt=""
             loading="lazy" decoding="async"
             class="absolute inset-0 w-full h-full object-cover">
    </div>

    <div class="relative max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="max-w-3xl mx-auto reveal">
            <div class="rounded-3xl p-8 lg:p-12 text-center"
                 style="background: rgba(1,30,65,0.82); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,0.08);">
                <h2 class="font-heading font-bold text-white text-3xl lg:text-5xl leading-tight mb-5">
                    Designed to help <span class="text-steel">reduce operational downtime</span><br class="hidden md:block">
                    around essential laundry equipment
                </h2>
                <p class="font-body text-blue-200 text-base lg:text-lg leading-relaxed mb-5">
                    A structured service contract helps commercial sites maintain clearer maintenance planning, more consistent equipment support and improved visibility around equipment condition and servicing requirements.
                </p>
                <p class="font-body text-white/70 text-sm lg:text-base italic leading-relaxed mb-7">
                    While no maintenance programme can prevent every fault, proactive servicing can help reduce avoidable disruption and support more reliable equipment operation over time.
                </p>
                <div class="flex flex-wrap justify-center items-center gap-x-5 gap-y-2 text-xs lg:text-sm font-body text-blue-200/90">
                    <span class="inline-flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-steel"></span>
                        Clearer planning
                    </span>
                    <span class="opacity-30">|</span>
                    <span class="inline-flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-steel"></span>
                        Better equipment visibility
                    </span>
                    <span class="opacity-30">|</span>
                    <span class="inline-flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-steel"></span>
                        Less avoidable disruption
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     10. INDUSTRY-SPECIFIC MESSAGING
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="max-w-3xl mb-12 lg:mb-14">
            <p class="font-body font-bold text-steel text-xs uppercase tracking-[0.22em] mb-4 reveal">Industry-Specific Messaging</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-[1.1] tracking-tight mb-5 reveal" style="transition-delay:80ms;">
                Different industries have<br class="hidden md:block">
                different <span class="text-steel">laundry pressures</span>
            </h2>
            <p class="font-body text-gray-600 text-base lg:text-lg leading-relaxed reveal" style="transition-delay:160ms;">
                Preventive maintenance helps connect the service to the pressure each laundry operation faces every day.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

            <!-- Healthcare -->
            <a href="{{ route('sectors.healthcare') }}"
               class="group relative overflow-hidden h-[420px] rounded-2xl block cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl reveal">
                <img src="/images/healthcare/healthcarehero.png" alt="Healthcare laundry support"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.90) 0%, rgba(1,30,65,0.55) 38%, transparent 68%);"></div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end items-center text-center">
                    <h3 class="font-heading font-bold text-white text-3xl lg:text-4xl leading-[1.1] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-3">Healthcare</h3>
                    <p class="font-body text-white text-sm leading-relaxed mb-4 max-w-sm">
                        Care for healthcare laundry environments where hygiene process, room flow and equipment continuity affect daily service.
                    </p>
                    <span class="inline-flex items-center justify-center bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-4 py-2 rounded-md text-xs transition-colors duration-200 whitespace-nowrap">
                        Request Healthcare Assessment
                    </span>
                </div>
            </a>

            <!-- Care Facilities -->
            <a href="{{ route('sectors.care') }}"
               class="group relative overflow-hidden h-[420px] rounded-2xl block cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl reveal" style="transition-delay:80ms;">
                <img src="/images/CareFacilities/CareFacilitiesHero.png" alt="Care facility laundry support"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.90) 0%, rgba(1,30,65,0.55) 38%, transparent 68%);"></div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end items-center text-center">
                    <h3 class="font-heading font-bold text-white text-3xl lg:text-4xl leading-[1.1] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-3">Care Facilities</h3>
                    <p class="font-body text-white text-sm leading-relaxed mb-4 max-w-sm">
                        Practical help for care environments where daily laundry demand, smaller teams and planned maintenance need to stay manageable.
                    </p>
                    <span class="inline-flex items-center justify-center bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-4 py-2 rounded-md text-xs transition-colors duration-200 whitespace-nowrap">
                        View Care Facility Support
                    </span>
                </div>
            </a>

            <!-- Hospitality -->
            <a href="{{ route('sectors.hospitality') }}"
               class="group relative overflow-hidden h-[420px] rounded-2xl block cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl reveal" style="transition-delay:160ms;">
                <img src="/images/Hospitallity/HeroHospitallity.png" alt="Hospitality laundry support"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.90) 0%, rgba(1,30,65,0.55) 38%, transparent 68%);"></div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end items-center text-center">
                    <h3 class="font-heading font-bold text-white text-3xl lg:text-4xl leading-[1.1] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-3">Hospitality</h3>
                    <p class="font-body text-white text-sm leading-relaxed mb-4 max-w-sm">
                        Engineering care for guest-facing sites where linen availability, finishing quality, turnaround and response time affect the wider business.
                    </p>
                    <span class="inline-flex items-center justify-center bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-4 py-2 rounded-md text-xs transition-colors duration-200 whitespace-nowrap">
                        View Hospitality Support
                    </span>
                </div>
            </a>

            <!-- Commercial & Industrial -->
            <a href="{{ route('sectors.commercial') }}"
               class="group relative overflow-hidden h-[420px] rounded-2xl block cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl reveal" style="transition-delay:240ms;">
                <img src="/images/healthcare/line-6000-solutions.jpg" alt="Commercial and industrial laundry support"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.90) 0%, rgba(1,30,65,0.55) 38%, transparent 68%);"></div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end items-center text-center">
                    <h3 class="font-heading font-bold text-white text-3xl lg:text-4xl leading-[1.1] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-3">Commercial<br>&amp; Industrial</h3>
                    <p class="font-body text-white text-sm leading-relaxed mb-4 max-w-sm">
                        Care for higher-throughput laundry sites where output, lifecycle cost and engineering response carry more operational weight.
                    </p>
                    <span class="inline-flex items-center justify-center bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-4 py-2 rounded-md text-xs transition-colors duration-200 whitespace-nowrap">
                        Discuss Site Requirements
                    </span>
                </div>
            </a>

        </div>

    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     11. TESTIMONIALS / PROOF
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="pt-12 lg:pt-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="max-w-3xl mx-auto text-center reveal">
            <p class="font-body font-bold text-steel text-xs uppercase tracking-[0.22em] mb-4">Trusted by Laundry Businesses Across Ireland</p>
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-[1.15] tracking-tight">
                Preventive maintenance support<br class="hidden md:block">
                that <span class="text-steel">helps reduce unexpected downtime</span>
            </h2>
        </div>
    </div>
</section>

@include('components.testimonials', ['heading' => '', 'light' => false])

@include('components.proof-bar')

{{-- ════════════════════════════════════════════════════════════════════════
     12. FAQ
     ════════════════════════════════════════════════════════════════════════ --}}
@php
$faqs = [
    [
        'question' => 'What equipment is covered?',
        'answer'   => 'Contract scope depends on the equipment already in operation, the site requirements and the agreed maintenance structure. Irish Laundry Systems can review commercial laundry equipment before confirming the right route.',
    ],
    [
        'question' => 'How often are maintenance visits scheduled?',
        'answer'   => 'Visit frequency is reviewed around equipment use, workload, condition and how critical each machine is to the site.',
    ],
    [
        'question' => 'Are parts included?',
        'answer'   => 'No. Parts are charged separately where required unless replacement parts are separately agreed in the contract scope.',
    ],
    [
        'question' => 'Do contract customers receive preferential call-out support?',
        'answer'   => 'Service contract customers benefit from structured engineering support, including preferential labour rates for reactive call-outs where applicable.',
    ],
    [
        'question' => 'Can I book a preventive maintenance visit before agreeing a contract?',
        'answer'   => 'Yes. A preventive maintenance visit can be the first step for sites that need equipment checked, service records updated or a clearer contract route recommended.',
    ],
    [
        'question' => 'Do you provide technical support between visits?',
        'answer'   => 'Yes. Preventive Maintenance Contracts can include technical support and assistance, giving customers access to experienced engineers for telephone support and practical guidance when equipment issues arise.',
    ],
    [
        'question' => 'Do you provide emergency call-outs?',
        'answer'   => 'Irish Laundry Systems can route urgent equipment issues through the appropriate call-out path. Contract customers may benefit from preferential call-out support where applicable.',
    ],
];
@endphp

<div class="reveal bg-white">
    <div class="max-w-3xl mx-auto px-6 sm:px-10 lg:px-20 pt-12 lg:pt-16 text-center">
        <p class="font-body font-bold text-steel text-xs uppercase tracking-[0.22em] mb-3">Preventive Maintenance FAQs</p>
    </div>
    @include('components.faq', ['faqs' => $faqs, 'heading' => 'Questions about <span class="text-steel">Preventive Maintenance Contracts</span>.'])
</div>

{{-- ════════════════════════════════════════════════════════════════════════
     13. PARTS & AFTERCARE CLOSING STRIP (sits before the form)
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden reveal" style="background-color:#011E41; min-height:340px;">

    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/healthcare/repairs-callouts.jpg"
             alt="ILS engineer working near commercial laundry equipment with parts and service tools"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #011E41 0%, rgba(1,30,65,0.5) 35%, transparent 100%);"></div>
    </div>

    <div class="relative z-10 flex flex-col justify-center px-10 lg:px-16 py-14 lg:py-16" style="max-width:62%;">

        <p class="font-body font-bold text-steel text-xs uppercase tracking-[0.22em] mb-4">Parts &amp; Aftercare</p>

        <h2 class="font-heading font-bold leading-tight mb-5">
            <span class="text-white text-3xl lg:text-5xl block">Turn preventive visit findings</span>
            <span class="text-3xl lg:text-5xl block text-steel">into the right next step.</span>
        </h2>

        <p class="font-body text-white/80 text-base lg:text-lg leading-relaxed mb-6 max-w-xl">
            When a preventive visit identifies wear, a recurring fault or a parts requirement, Parts &amp; Aftercare helps keep the follow-up clear, quoted separately where needed, and connected to the equipment history.
        </p>

        <div class="flex items-center flex-wrap gap-0 mb-7">
            @foreach([
                ['icon' => 'ativo-8', 'label' => 'Clearer service history'],
                ['icon' => 'ativo-7', 'label' => 'Genuine parts route'],
                ['icon' => 'ativo-4', 'label' => 'Less delay after inspection'],
            ] as $i => $feat)
            @if($i > 0)
                <div class="w-px h-7 bg-white/20 mx-4 flex-shrink-0"></div>
            @endif
            <div class="flex items-center gap-2">
                <img src="/images/icons/brand-white/{{ $feat['icon'] }}.svg"
                     class="w-5 h-5 flex-shrink-0 opacity-80" alt="">
                <span class="font-body text-white text-xs font-bold whitespace-nowrap">{{ $feat['label'] }}</span>
            </div>
            @endforeach
        </div>

        <div class="flex flex-wrap items-center gap-3">
            <a href="{{ route('parts-aftercare') }}"
               data-ga-cta="parts-aftercare-strip"
               class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
                Explore Parts &amp; Aftercare
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                </svg>
            </a>
            <a href="{{ route('contact') }}"
               data-ga-cta="parts-aftercare-talk"
               class="inline-flex items-center gap-2 border border-white/40 text-white font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/10 transition-colors tracking-wide">
                Talk to Our Team
            </a>
        </div>

    </div>

</section>

{{-- ════════════════════════════════════════════════════════════════════════
     14. BOOK A PREVENTIVE MAINTENANCE VISIT FORM
     ════════════════════════════════════════════════════════════════════════ --}}
<section id="book-visit-form" class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="relative bg-navy rounded-3xl overflow-hidden reveal">
            <div class="grid grid-cols-1 lg:grid-cols-5">

                {{-- Left: heading + bullets + photo --}}
                <div class="relative lg:col-span-2 p-8 lg:p-12 flex flex-col gap-6 overflow-hidden">
                    <div>
                        <p class="font-body font-bold text-steel text-xs uppercase tracking-[0.22em] mb-4">Book a Preventive Maintenance Visit</p>
                        <h2 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-[1.1] mb-5">
                            Protect your laundry operation<br class="hidden lg:block">
                            with <span class="text-steel">proactive support</span>
                        </h2>
                        <p class="font-body text-blue-200 text-base leading-relaxed mb-7">
                            Tell us about your equipment, site and current maintenance needs. Irish Laundry Systems will help identify the clearest next step.
                        </p>
                        <div class="flex flex-col gap-3">
                            @foreach ([
                                'Fast engineer response',
                                'Preventive maintenance focus',
                                'Commercial laundry specialists',
                            ] as $point)
                            <div class="flex items-center gap-3 bg-white/10 rounded-xl px-5 py-3">
                                <svg class="w-4 h-4 text-steel flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.8" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                                </svg>
                                <div class="font-body text-white text-sm font-bold">{{ $point }}</div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="hidden lg:block relative rounded-2xl overflow-hidden mt-auto">
                        <div class="aspect-[16/9]">
                            <img src="/images/healthcare/service-contracts-hero.jpg"
                                 alt="ILS engineers reviewing service equipment"
                                 loading="lazy" decoding="async"
                                 class="w-full h-full object-cover object-[center_25%]">
                        </div>
                        <div class="absolute inset-0" style="background: linear-gradient(to top, rgba(1,30,65,0.55) 0%, transparent 60%);"></div>
                    </div>
                </div>

                {{-- Right: form card --}}
                <div class="lg:col-span-3 bg-white lg:m-2 rounded-2xl p-6 lg:p-8">
                    <div class="flex items-center gap-3 mb-1">
                        <svg class="w-7 h-7 text-steel flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle class="sc-check-circle" cx="12" cy="12" r="10"/>
                            <path class="sc-check-tick" d="M9 12.5l2 2 4.5-5"/>
                        </svg>
                        <h3 class="font-heading font-bold text-navy text-xl">Book a Preventive Maintenance Visit</h3>
                    </div>
                    <p class="font-body text-gray-500 text-sm mb-6">Share the details that help direct the enquiry properly.</p>

                    @if (session('success'))
                    <div class="bg-green-50 border border-green-200 rounded-2xl p-4 mb-6 flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <p class="font-body text-green-800 text-sm leading-relaxed">{{ session('success') }}</p>
                    </div>
                    @endif

                    @if ($errors->any())
                    <div class="bg-red-50 border border-red-200 rounded-2xl p-4 mb-6">
                        <ul class="space-y-1">
                            @foreach ($errors->all() as $error)
                            <li class="font-body text-red-700 text-sm">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4" data-utm id="book-visit-form-el">
                        @csrf
                        <input type="hidden" name="request_type" value="contract">
                        <input type="hidden" name="page_source" value="service-contracts">
                        <input type="hidden" name="urgency" value="planning">
                        <input type="hidden" name="utm_source">
                        <input type="hidden" name="utm_medium">
                        <input type="hidden" name="utm_campaign">
                        <input type="hidden" name="utm_content">
                        <input type="hidden" name="utm_term">

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="bv_name" class="block text-xs font-body font-bold text-navy mb-1.5">Name <span class="text-red-500">*</span></label>
                                <input type="text" id="bv_name" name="name" required value="{{ old('name') }}"
                                       placeholder="Your full name"
                                       class="w-full border border-border rounded-lg px-4 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                            </div>
                            <div>
                                <label for="bv_company" class="block text-xs font-body font-bold text-navy mb-1.5">Organisation <span class="text-red-500">*</span></label>
                                <input type="text" id="bv_company" name="company" required value="{{ old('company') }}"
                                       placeholder="Organisation or facility"
                                       class="w-full border border-border rounded-lg px-4 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="bv_phone" class="block text-xs font-body font-bold text-navy mb-1.5">Phone <span class="text-red-500">*</span></label>
                                <input type="tel" id="bv_phone" name="phone" required value="{{ old('phone') }}"
                                       placeholder="+353 (0)..."
                                       class="w-full border border-border rounded-lg px-4 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                            </div>
                            <div>
                                <label for="bv_email" class="block text-xs font-body font-bold text-navy mb-1.5">Email <span class="text-red-500">*</span></label>
                                <input type="email" id="bv_email" name="email" required value="{{ old('email') }}"
                                       placeholder="you@company.ie"
                                       class="w-full border border-border rounded-lg px-4 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="bv_location" class="block text-xs font-body font-bold text-navy mb-1.5">Site Location <span class="text-red-500">*</span></label>
                                <input type="text" id="bv_location" name="location" required value="{{ old('location') }}"
                                       placeholder="e.g. Dublin, Cork"
                                       class="w-full border border-border rounded-lg px-4 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                            </div>
                            <div>
                                <label for="bv_sector" class="block text-xs font-body font-bold text-navy mb-1.5">Sector <span class="text-red-500">*</span></label>
                                <select id="bv_sector" name="sector" required
                                        class="w-full border border-border rounded-lg px-4 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent cursor-pointer">
                                    <option value="">Select sector</option>
                                    <option value="healthcare" {{ old('sector') === 'healthcare' ? 'selected' : '' }}>Healthcare</option>
                                    <option value="hospitality" {{ old('sector') === 'hospitality' ? 'selected' : '' }}>Hospitality</option>
                                    <option value="care" {{ old('sector') === 'care' ? 'selected' : '' }}>Care Facilities</option>
                                    <option value="commercial" {{ old('sector') === 'commercial' ? 'selected' : '' }}>Commercial &amp; Industrial</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="bv_equipment" class="block text-xs font-body font-bold text-navy mb-1.5">Equipment Type</label>
                            <input type="text" id="bv_equipment" name="equipment" value="{{ old('equipment') }}"
                                   placeholder="e.g. Electrolux WH6-18 washer"
                                   class="w-full border border-border rounded-lg px-4 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                        </div>

                        <div>
                            <label for="bv_issue" class="block text-xs font-body font-bold text-navy mb-1.5">Current Issue or Maintenance Need</label>
                            <input type="text" id="bv_issue" name="issue" value="{{ old('issue') }}"
                                   placeholder="What prompted this enquiry?"
                                   class="w-full border border-border rounded-lg px-4 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                        </div>

                        <div>
                            <label class="block text-xs font-body font-bold text-navy mb-1.5">Preferred Contact Method</label>
                            <div class="grid grid-cols-2 gap-2">
                                @foreach ([
                                    ['phone', 'Phone'],
                                    ['email', 'Email'],
                                ] as [$val, $label])
                                <label class="cursor-pointer">
                                    <input type="radio" name="preferred_contact" value="{{ $val }}" class="sr-only peer" {{ old('preferred_contact', 'phone') === $val ? 'checked' : '' }}>
                                    <div class="border-2 border-border rounded-lg px-3 py-2 text-center text-xs font-body font-bold text-gray-600 peer-checked:border-steel peer-checked:bg-steel peer-checked:text-white hover:border-steel transition-all">
                                        {{ $label }}
                                    </div>
                                </label>
                                @endforeach
                            </div>
                        </div>

                        <div>
                            <label for="bv_message" class="block text-xs font-body font-bold text-navy mb-1.5">Message / Requirement</label>
                            <textarea id="bv_message" name="message" rows="3"
                                      placeholder="Anything else we should know about your site or equipment."
                                      class="w-full border border-border rounded-lg px-4 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400 resize-none leading-relaxed">{{ old('message') }}</textarea>
                        </div>

                        <label class="flex items-start gap-3 cursor-pointer pt-1">
                            <input type="checkbox" name="gdpr_consent" required value="1" {{ old('gdpr_consent') ? 'checked' : '' }}
                                   class="mt-0.5 w-4 h-4 rounded border-border text-steel focus:ring-steel flex-shrink-0">
                            <span class="font-body text-xs text-gray-600 leading-relaxed">
                                I agree to ILS processing my details to respond to this enquiry. <a href="{{ route('privacy') }}" class="text-steel underline hover:text-navy" target="_blank">Privacy Policy</a>. <span class="text-red-500">*</span>
                            </span>
                        </label>

                        <button type="submit"
                                data-ga-cta="book-visit-submit"
                                class="w-full inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-8 py-3.5 rounded-lg text-sm transition-colors duration-200 cursor-pointer">
                            Book a Preventive Maintenance Visit
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    (function () {
        var form = document.getElementById('book-visit-form-el');
        if (!form) return;
        form.addEventListener('submit', function () {
            var prefRadio = form.querySelector('input[name="preferred_contact"]:checked');
            var messageEl = form.querySelector('textarea[name="message"]');
            if (!prefRadio || !messageEl) return;
            var label = prefRadio.value === 'email' ? 'Email' : 'Phone';
            var prefix = 'Preferred contact: ' + label;
            var current = (messageEl.value || '').trim();
            messageEl.value = current ? (prefix + '\n\n' + current) : prefix;
        });
    })();
</script>

@endsection
