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
<section class="relative overflow-hidden h-auto min-h-[520px] lg:h-[720px]" style="background-color: #011E41;">

    <img src="/images/shared/service-contracts-hero.png"
         alt="ILS engineer carrying out preventive maintenance on commercial laundry equipment"
         loading="eager" decoding="async"
         class="absolute inset-0 w-full h-full object-cover object-right">

    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.97) 0%, rgba(1,30,65,0.90) 25%, rgba(1,30,65,0.65) 45%, rgba(1,30,65,0.25) 65%, transparent 80%);"></div>

    <div class="relative z-10 h-full flex items-center w-full py-16 lg:py-0">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16">
            <div class="max-w-full lg:max-w-[880px]">

                <p class="hero-trust font-body font-bold text-steel text-xs uppercase tracking-[0.22em] mb-5" style="opacity:1;">
                    Preventive Maintenance Contracts
                </p>

                <h1 class="hero-title font-heading font-bold text-white leading-tight tracking-tight mb-6 text-3xl sm:text-4xl lg:text-5xl text-balance">
                    Keep your laundry operation&nbsp;running<br class="hidden lg:block"> with <span class="text-steel">fewer surprise&nbsp;costs</span>
                </h1>

                <p class="hero-desc font-body text-white/80 text-base leading-relaxed mb-8 max-w-3xl text-pretty">
                    <span class="whitespace-nowrap">Irish Laundry Systems</span> gives commercial laundry sites a planned way to manage servicing, inspections and follow-up support, with preferential call-out labour rates under the agreement. It is built for sites that want fewer surprises, better cost control and peace of mind around essential laundry equipment.
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
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">
        <p class="font-body font-bold text-steel text-xs uppercase tracking-[0.22em] mb-3 reveal">
            Planned Equipment Care
        </p>
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-12 xl:gap-20 items-start">

            {{-- Left column: heading --}}
            <div class="reveal">
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    Stay ahead with <span class="text-steel">planned maintenance&nbsp;support</span>
                </h2>
            </div>

            {{-- Right column: lead + body + CTA --}}
            <div class="flex flex-col gap-4 reveal" style="transition-delay:120ms;">
                <p class="font-body text-gray-500 text-base leading-relaxed text-pretty">
                    Commercial laundry equipment works hard every day. A Preventive Maintenance Contract gives your site planned inspections, service checks and clear recommendations before smaller issues create bigger repair pressure.
                </p>
                <a href="#book-visit-form"
                   data-ga-cta="intro-book-visit"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy-dark text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 mt-2 w-fit">
                    Book a Preventive Maintenance Visit
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     4. WHAT YOU GAIN — 6 cards
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="py-16 lg:py-24 bg-navy">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="max-w-3xl lg:max-w-5xl mx-auto text-center mb-10 lg:mb-12">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4 reveal">What You Gain</p>
            <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight tracking-tight mb-5 reveal text-balance" style="transition-delay:80ms;">
                More control, fewer surprises and <span class="text-[#148af4]">peace of&nbsp;mind</span>
            </h2>
            <p class="font-body text-white/70 text-base leading-relaxed reveal text-pretty" style="transition-delay:160ms;">
                A Preventive Maintenance Contract helps your site manage service needs, reduce disruption and plan around essential laundry equipment with more confidence.
            </p>
        </div>

        @php
        $gainCards = [
            [
                'title' => 'Preferential call-out support',
                'img'   => '/images/icons/pmc-gain-86.png',
                'text'  => 'Contract customers can receive preferential labour rates for unscheduled call-outs under their agreement.',
                'svg'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>',
            ],
            [
                'title' => 'People who know the equipment',
                'img'   => '/images/icons/pmc-gain-87.png',
                'text'  => 'Engineering support with commercial laundry experience and Electrolux Professional equipment knowledge.',
                'svg'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.745 3.745 0 013.296-1.043A3.745 3.745 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"/>',
            ],
            [
                'title' => 'Preventive Maintenance',
                'img'   => '/images/icons/pmc-gain-88.png',
                'text'  => 'Planned servicing helps identify wear, service needs and developing faults before they create bigger repair pressure.',
                'svg'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/>',
            ],
            [
                'title' => 'Reduce downtime pressure',
                'img'   => '/images/icons/203.png',
                'imgClass' => 'scale-[0.79]',
                'text'  => 'Planned servicing helps spot issues earlier, so your site can reduce downtime pressure and keep laundry moving.',
                'svg'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>',
            ],
            [
                'title' => 'Cost control',
                'img'   => '/images/icons/pmc-gain-90.png',
                'text'  => 'Earlier issue detection can reduce surprise repair pressure and help teams plan the next cost with more confidence.',
                'svg'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/>',
            ],
            [
                'title' => 'Equipment value',
                'img'   => '/images/icons/204.png',
                'imgClass' => 'scale-[0.79]',
                'text'  => 'Regular servicing can support more reliable performance and help protect equipment value over time.',
                'svg'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"/>',
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-5">
            @foreach ($gainCards as $i => $card)
            <article class="card-hover group relative bg-white rounded-2xl border border-navy/5 p-6 lg:p-7 flex flex-col gap-3 reveal transition-all duration-300 ease-out hover:shadow-[0_20px_40px_-15px_rgba(1,30,65,0.25)]" style="transition-delay:{{ $i * 60 }}ms;">
                @if (!empty($card['img']))
                    <img src="{{ $card['img'] }}" alt="" aria-hidden="true" class="w-24 h-24 object-contain {{ $card['imgClass'] ?? '' }}">
                @else
                <svg class="w-16 h-16 lg:w-20 lg:h-20 text-steel" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    {!! $card['svg'] !!}
                </svg>
                @endif
                <h3 class="font-heading font-bold text-navy text-xl leading-snug">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed text-pretty">{{ $card['text'] }}</p>
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

        <div class="mb-12 lg:mb-14">
            <p class="font-body font-bold text-steel text-xs uppercase tracking-[0.22em] mb-3 reveal">What's Included</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight tracking-tight mb-5 reveal" style="transition-delay:80ms;">
                What's included in a <span class="text-steel">Preventive Maintenance Contract</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed reveal text-pretty max-w-5xl" style="transition-delay:160ms;">
                Your contract brings planned visits, equipment checks, service reporting, preferential call-out support and<br class="hidden lg:block"> practical recommendations around the laundry equipment your site depends on.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-stretch">

            {{-- Left: image --}}
            <div class="lg:col-span-5 reveal">
                <div class="relative rounded-3xl overflow-hidden bg-navy shadow-xl">
                    <img src="/images/pages/services/on-site-diagnosis.jpeg"
                         alt="ILS technician inspecting commercial laundry equipment during a planned visit"
                         loading="lazy" decoding="async"
                         class="w-full h-full object-cover aspect-[4/5]">
                    <div class="absolute inset-x-0 bottom-0 h-1/3" style="background: linear-gradient(to top, rgba(1,15,42,0.55) 0%, transparent 100%);" aria-hidden="true"></div>
                    <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-3xl pointer-events-none"></div>
                </div>
            </div>

            {{-- Right: 8-item checklist --}}
            <div class="lg:col-span-7 flex flex-col">
                @php
                $includedItems = [
                    ['title' => 'Scheduled preventive maintenance visits',     'text' => 'Two planned inspections per year, arranged around equipment use and site needs.'],
                    ['title' => 'Equipment inspections and testing',            'text' => 'Inspection and testing to review equipment condition, performance and safety.'],
                    ['title' => 'Preferential call-out support',                'text' => 'Contract customers can receive preferential labour rates for unscheduled call-outs under their agreement.'],
                    ['title' => 'Fault diagnosis',                              'text' => 'Engineer assessment when issues are identified during maintenance or reported between visits.'],
                    ['title' => 'Performance and safety checks',                'text' => 'Checks to support proper, safe operation of essential commercial laundry equipment.'],
                    ['title' => 'Maintenance reporting',                        'text' => 'A record of maintenance visits, recurring issues and recommended next steps.'],
                    ['title' => 'Wear-and-tear recommendations',                'text' => 'Clear guidance where wear-and-tear items or quoted follow-up work may be needed.'],
                    ['title' => 'Operator guidance where relevant',             'text' => 'Practical guidance for site teams on safe and efficient equipment use where useful.'],
                ];
                @endphp
                <ul class="flex-1 flex flex-col justify-between gap-4">
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
            </div>

        </div>

        {{-- Support between visits + Replacement parts — two-up strip below grid --}}
        <div class="mt-10 bg-bg border border-border rounded-xl px-6 py-5 reveal" style="transition-delay:480ms;">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-0 lg:divide-x lg:divide-gray-300">
                @foreach([
                    ['icon' => '/images/icons/298.png', 'title' => 'Support between visits',
                     'body' => 'Talk to Our Team when equipment issues arise between planned inspections, with support from people who know the equipment.'],
                    ['icon' => '/images/icons/299.png', 'title' => 'Replacement parts',
                     'body' => 'Replacement parts are charged separately where required, unless separately agreed in the contract.'],
                ] as $i => $note)
                <div class="flex items-start gap-4 {{ $i === 1 ? 'lg:pl-8' : 'lg:pr-8' }}">
                    <img src="{{ $note['icon'] }}" alt="" aria-hidden="true" class="w-14 h-14 flex-shrink-0 object-contain">
                    <div>
                        <h3 class="font-heading font-bold text-navy text-base mb-1">{{ $note['title'] }}</h3>
                        <p class="font-body text-gray-600 text-sm leading-relaxed">{{ $note['body'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     6. FINANCIAL VALUE — full-width diptych with imagery
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="py-16 lg:py-24 bg-bg relative overflow-hidden">

    {{-- Decorative ambient blur --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[900px] h-[900px] rounded-full pointer-events-none" style="background: radial-gradient(circle, rgba(20,138,244,0.06) 0%, transparent 60%);" aria-hidden="true"></div>

    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-20 relative">

        {{-- Centered header — 2-line title --}}
        <div class="max-w-none mx-auto text-center mb-10 lg:mb-12">
            <p class="font-body font-bold text-steel text-xs uppercase tracking-[0.22em] mb-3 reveal">Financial Value</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight tracking-tight mb-4 reveal" style="transition-delay:80ms;">
                <span class="text-steel">Protect your maintenance budget</span><br class="hidden lg:block"> <span class="">before small problems become expensive repairs</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed reveal text-pretty max-w-5xl mx-auto" style="transition-delay:140ms;">
                Waiting for breakdowns can create urgent call-outs, downtime and unplanned repair costs. A Preventive Maintenance Contract gives<br class="hidden lg:block"> your site planned servicing, reports and earlier issue detection before smaller problems become expensive repairs.
            </p>
        </div>

        {{-- Two separate premium comparison cards --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 lg:gap-7 items-start">

            {{-- WITHOUT card — photo bg, subdued/desaturated --}}
            <article class="reveal relative rounded-2xl overflow-hidden p-7 lg:p-8 flex flex-col gap-4 shadow-[0_20px_50px_-20px_rgba(1,30,65,0.30)] min-h-[480px]" style="transition-delay:120ms;">
                {{-- Background image desaturated --}}
                <img src="/images/shared/td6-multihousing-room.jpg"
                     alt="A commercial laundry room without active maintenance support"
                     loading="lazy" decoding="async"
                     class="absolute inset-0 w-full h-full object-cover"
                     style="filter: grayscale(0.9) brightness(0.55) saturate(0.4);">
                {{-- Cinematic fade to neutral slate-grey --}}
                <div class="absolute inset-0" style="background: linear-gradient(180deg, rgba(51,58,66,0.35) 0%, rgba(51,58,66,0.72) 35%, rgba(45,51,58,0.95) 65%, rgba(45,51,58,1.0) 100%);" aria-hidden="true"></div>

                <div class="relative z-10 flex flex-col gap-4 mt-auto">
                    <div class="flex items-center gap-2">
                        <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-white/10 ring-1 ring-white/20">
                            <span class="w-1.5 h-1.5 rounded-full bg-white/70"></span>
                        </span>
                        <span class="font-body font-bold text-white/80 text-xs uppercase tracking-[0.22em]">Without a contract</span>
                    </div>
                    <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-tight drop-shadow-[0_2px_8px_rgba(0,0,0,0.4)]">
                        The cost of waiting for breakdowns
                    </h3>
                    <ul class="space-y-2.5">
                        @foreach (['Urgent call-outs', 'Longer downtime', 'Production delays', 'Unplanned repair costs', 'More reactive decisions', 'Greater pressure on staff', 'Equipment wear found too late'] as $item)
                        <li class="flex items-center gap-3">
                            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-white/10 ring-1 ring-white/20 flex items-center justify-center">
                                <svg class="w-3 h-3 text-white/70" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </span>
                            <span class="font-body text-white/90 text-sm lg:text-base leading-snug">{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </article>

            {{-- WITH card — photo bg, vibrant, recommended --}}
            <article class="reveal relative rounded-2xl overflow-hidden p-7 lg:p-8 flex flex-col gap-4 shadow-[0_24px_60px_-20px_rgba(20,138,244,0.35)] ring-1 ring-steel/40 min-h-[480px]" style="transition-delay:200ms;">
                {{-- Background image full colour --}}
                <img src="/images/shared/customer-care-line6000.jpg"
                     alt="Irish Laundry Systems engineer providing planned maintenance support"
                     loading="lazy" decoding="async"
                     class="absolute inset-0 w-full h-full object-cover">
                {{-- Cinematic fade to navy --}}
                <div class="absolute inset-0" style="background: linear-gradient(180deg, rgba(1,30,65,0.25) 0%, rgba(1,30,65,0.65) 35%, rgba(1,30,65,0.95) 65%, rgba(1,30,65,1.0) 100%);" aria-hidden="true"></div>
                {{-- Top accent line --}}
                <div class="absolute inset-x-0 top-0 h-[2px] bg-gradient-to-r from-transparent via-steel to-transparent z-20" aria-hidden="true"></div>

                {{-- Recommended badge --}}
                <span class="absolute top-5 right-5 z-20 inline-flex items-center gap-1.5 bg-steel/25 border border-steel/50 rounded-full px-2.5 py-1 text-[10px] font-body font-bold text-white uppercase tracking-wider">
                    <svg class="w-3 h-3 fill-steel" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12 .587l3.668 7.568L24 9.748l-6 5.853L19.336 24 12 19.897 4.664 24 6 15.601 0 9.748l8.332-1.593z"/>
                    </svg>
                    Recommended
                </span>

                <div class="relative z-10 flex flex-col gap-4 mt-auto">
                    <div class="inline-flex items-center gap-2 self-start rounded-full bg-steel px-3.5 py-1.5 shadow-lg">
                        <span class="w-1.5 h-1.5 rounded-full bg-white"></span>
                        <span class="font-body font-bold text-white text-xs uppercase tracking-[0.22em]">With a Preventive Maintenance Contract</span>
                    </div>
                    <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-tight drop-shadow-[0_2px_8px_rgba(0,0,0,0.4)]">
                        A planned way to protect essential equipment
                    </h3>
                    <ul class="space-y-2.5">
                        @foreach (['Two planned inspections per year', 'Servicing and equipment checks', 'Earlier issue detection', 'Preferential call-out rates where applicable', 'Maintenance reports', 'More consistent equipment performance', 'More peace of mind'] as $item)
                        <li class="flex items-center gap-3">
                            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-steel/25 ring-1 ring-steel/50 flex items-center justify-center">
                                <svg class="w-3 h-3 text-steel" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3.5" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                                </svg>
                            </span>
                            <span class="font-body text-white text-sm lg:text-base font-medium leading-snug">{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </article>

        </div>

    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     PLANNED MAINTENANCE VALUE STRIP
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="relative py-16 lg:py-24 bg-navy overflow-hidden">
    <div class="absolute inset-0" aria-hidden="true">
        <img src="/images/shared/commercial-hero.jpg" alt="" loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover">
    </div>
    <div class="relative max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="max-w-3xl mx-auto reveal">
            <div class="rounded-3xl p-8 lg:p-12 text-center" style="background: rgba(1,30,65,0.82); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,0.08);">
                <p class="font-body font-bold text-steel text-xs uppercase tracking-[0.22em] mb-4">Planned Maintenance Value</p>
                <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight mb-5 text-balance">
                    Keep essential laundry equipment running with <span class="text-steel">less&nbsp;downtime</span>
                </h2>
                <p class="font-body text-blue-200 text-base leading-relaxed mb-7 text-pretty">
                    Planned inspections help identify wear, developing faults and service needs earlier,<br class="hidden lg:block"> so your site can reduce downtime pressure, minimise disruption and<br class="hidden lg:block"> keep maintenance decisions easier to&nbsp;manage.
                </p>
                <div class="flex flex-wrap justify-center items-center gap-x-8 gap-y-3 mb-8">
                    @foreach([
                        ['icon' => 'ativo-8',  'src' => '/images/icons/rental-gain-119.png', 'style' => 'filter:brightness(0) invert(1);', 'label' => 'Spot issues<br>earlier'],
                        ['icon' => 'ativo-4',  'label' => 'Keep equipment<br>running'],
                        ['icon' => 'ativo-7',  'src' => '/images/icons/203.png', 'style' => 'filter:brightness(0) invert(1);', 'label' => 'Minimise<br>downtime'],
                    ] as $feat)
                    <div class="flex items-center gap-5 text-left">
                        <img src="{{ $feat['src'] ?? '/images/icons/brand-white/'.$feat['icon'].'.svg' }}" style="width:3.5rem;height:3.5rem;flex-shrink:0;{{ $feat['style'] ?? '' }}" alt="">
                        <span class="font-body text-white text-sm font-bold leading-snug">{!! $feat['label'] !!}</span>
                    </div>
                    @endforeach
                </div>
                <a href="#book-visit-form" class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-7 py-3.5 rounded-md text-sm transition-colors duration-200">
                    Book a Preventive Maintenance Visit
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
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
        <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight tracking-tight reveal" style="transition-delay:80ms;">
            How preventive visits create <span class="text-steel">clearer next&nbsp;steps</span>
        </h2>
        <p class="font-body text-gray-500 text-base leading-relaxed mt-4 reveal text-pretty lg:whitespace-nowrap" style="transition-delay:160ms;">
            A preventive visit gives your site a clearer view of equipment condition, service needs and what should happen next.
        </p>
    </div>

    <div style="display:flex; flex-wrap:wrap;">
        @foreach([
            [
                'num'   => '01.',
                'title' => 'Inspect and assess',
                'body'  => 'Review equipment condition, visible wear,<br class="hidden lg:block"> daily use and any issues reported by the site.',
                'img'   => '/images/shared/services-overview-hero-portrait.jpg',
            ],
            [
                'num'   => '02.',
                'title' => 'Service and identify',
                'body'  => 'Carry out scheduled preventive maintenance and identify wear, service needs or developing faults.',
                'img'   => '/images/pages/services/repairs-how-02.jpg',
            ],
            [
                'num'   => '03.',
                'title' => 'Report clearly',
                'body'  => 'Provide maintenance notes so the site can track visits, recurring issues and inspection findings.',
                'img'   => '/images/pages/services/repairs-how-03.jpg',
            ],
            [
                'num'   => '04.',
                'title' => 'Agree the next step',
                'body'  => 'Confirm recommendations, quoted follow-up work or parts requirements where follow-up is needed.',
                'img'   => '/images/pages/services/preventive-agree-step.jpg',
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
                <p>{!! $card['body'] !!}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     10. INDUSTRY-SPECIFIC MESSAGING
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-12 lg:mb-14 text-center">
            <p class="font-body font-bold text-steel text-xs uppercase tracking-[0.22em] mb-4 reveal">Sector Support</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight tracking-tight mb-5 reveal text-balance" style="transition-delay:80ms;">
                Planned maintenance for <span class="text-steel">different site&nbsp;demands</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed reveal text-pretty lg:whitespace-nowrap" style="transition-delay:160ms;">
                Different sites place different pressure on laundry equipment. Preventive Maintenance should be planned around daily use, service needs and the cost of disruption.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

            <!-- Healthcare -->
            <a href="{{ route('sectors.healthcare') }}"
               class="group relative overflow-hidden h-[420px] rounded-2xl block cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl reveal">
                <img src="/images/pages/sectors/healthcarehero.png" alt="Healthcare laundry support"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                     style="object-position: 80% center;">
                <div class="absolute inset-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.90) 0%, rgba(1,30,65,0.55) 38%, transparent 68%);"></div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end items-center text-center">
                    <h3 class="font-heading font-bold text-white text-3xl lg:text-4xl leading-[1.1] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-3">Healthcare</h3>
                    <p class="font-body text-white text-sm leading-relaxed mb-4 max-w-md text-balance">
                        For healthcare laundry environments where hygiene standards, staff pressure and equipment reliability affect daily&nbsp;operations.
                    </p>
                    <span class="inline-flex items-center justify-center bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-4 py-2 rounded-md text-xs transition-colors duration-200 whitespace-nowrap">
                        Request Healthcare Assessment
                    </span>
                </div>
            </a>

            <!-- Care Facilities -->
            <a href="{{ route('sectors.care') }}"
               class="group relative overflow-hidden h-[420px] rounded-2xl block cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl reveal" style="transition-delay:80ms;">
                <img src="/images/pages/sectors/carefacilitiesheroimage.jpg" alt="Care facility laundry support"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.90) 0%, rgba(1,30,65,0.55) 38%, transparent 68%);"></div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end items-center text-center">
                    <h3 class="font-heading font-bold text-white text-3xl lg:text-4xl leading-[1.1] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-3">Care Facilities</h3>
                    <p class="font-body text-white text-sm leading-relaxed mb-4 max-w-md text-balance">
                        For care environments where resident clothing, bedding, towels and staff routines depend on reliable laundry equipment.
                    </p>
                    <span class="inline-flex items-center justify-center bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-4 py-2 rounded-md text-xs transition-colors duration-200 whitespace-nowrap">
                        View Care Facility Support
                    </span>
                </div>
            </a>

            <!-- Hospitality -->
            <a href="{{ route('sectors.hospitality') }}"
               class="group relative overflow-hidden h-[420px] rounded-2xl block cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl reveal" style="transition-delay:160ms;">
                <img src="/images/pages/sectors/hospitallityhero.png" alt="Hospitality laundry support"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                     style="object-position: 100% 30%;">
                <div class="absolute inset-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.90) 0%, rgba(1,30,65,0.55) 38%, transparent 68%);"></div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end items-center text-center">
                    <h3 class="font-heading font-bold text-white text-3xl lg:text-4xl leading-[1.1] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-3">Hospitality</h3>
                    <p class="font-body text-white text-sm leading-relaxed mb-4 max-w-md text-balance">
                        For hotels and hospitality sites where linen availability, room readiness and peak-period demand affect service.
                    </p>
                    <span class="inline-flex items-center justify-center bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-4 py-2 rounded-md text-xs transition-colors duration-200 whitespace-nowrap">
                        View Hospitality Support
                    </span>
                </div>
            </a>

            <!-- Commercial & Industrial -->
            <a href="{{ route('sectors.commercial') }}"
               class="group relative overflow-hidden h-[420px] rounded-2xl block cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl reveal" style="transition-delay:240ms;">
                <img src="/images/shared/line-6000-solutions.jpg" alt="Commercial and industrial laundry support"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 scale-[1.15] group-hover:scale-[1.21]">
                <div class="absolute inset-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.90) 0%, rgba(1,30,65,0.55) 38%, transparent 68%);"></div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end items-center text-center">
                    <h3 class="font-heading font-bold text-white text-3xl lg:text-4xl leading-[1.1] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-3">Commercial &amp; Industrial</h3>
                    <p class="font-body text-white text-sm leading-relaxed mb-4 max-w-md text-balance">
                        For higher-use sites where output, running cost and equipment reliability carry more operational weight.
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
<section class="pt-16 lg:pt-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="max-w-5xl mx-auto text-center reveal">
            <p class="font-body font-bold text-steel text-xs uppercase tracking-[0.22em] mb-4">Customer Proof</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight tracking-tight text-balance max-w-3xl mx-auto">
                Trusted by teams that need <span class="text-steel">equipment to keep&nbsp;running</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed mt-4 text-pretty">
                <span class="whitespace-nowrap">Irish Laundry Systems</span> supports organisations that need clear communication, experienced engineers and practical help when maintenance, repairs or laundry performance affect daily operations.
            </p>
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
        'question' => 'What equipment can be covered?',
        'answer'   => 'Coverage depends on the equipment in use, the site requirements and the agreed maintenance plan. Irish Laundry Systems can review commercial laundry equipment before confirming the right support option.',
    ],
    [
        'question' => 'How often are preventive maintenance visits scheduled?',
        'answer'   => 'Preventive Maintenance Contracts include two planned inspections per year. Visit timing is arranged around the site, equipment use and operational needs.',
    ],
    [
        'question' => 'Are parts included?',
        'answer'   => 'No. Replacement parts are charged separately where required unless they are separately agreed in the contract.',
    ],
    [
        'question' => 'Do contract customers receive preferential call-out support?',
        'answer'   => 'Yes. Contract customers can receive preferential labour rates for unscheduled call-outs under their agreement.',
    ],
    [
        'question' => 'Can I book a preventive maintenance visit before agreeing a contract?',
        'answer'   => 'Yes. A preventive maintenance visit can be the first step for sites that need equipment checked, service records updated or a clearer maintenance recommendation.',
    ],
    [
        'question' => 'Can this support insurance or compliance requirements?',
        'answer'   => 'Yes. Maintenance reports and service records can support insurance or compliance requirements where evidence of planned maintenance is required.',
    ],
    [
        'question' => 'Can you provide support between visits?',
        'answer'   => 'Yes. Talk to Our Team when equipment issues arise between planned inspections.',
    ],
    [
        'question' => 'Do you provide urgent call-outs?',
        'answer'   => 'Yes. Repairs & Call-Outs are available for urgent faults. Requests are handled based on urgency, equipment details, site pressure and maintenance history.',
    ],
    [
        'question' => 'Can you maintain equipment that was not purchased from Irish Laundry Systems?',
        'answer'   => 'Irish Laundry Systems can review mixed-brand laundry rooms and confirm whether equipment can be included within a maintenance contract or supported through call-outs.',
    ],
    [
        'question' => 'How long is a Preventive Maintenance Contract?',
        'answer'   => 'Preventive Maintenance Contracts are annual contracts and can be renewed each year.',
    ],
];
@endphp

@include('components.faq', [
    'faqs'    => $faqs,
    'eyebrow' => 'Preventive Maintenance FAQs',
    'heading' => 'Questions about <span class="text-steel">Preventive Maintenance Contracts</span>',
])

{{-- ════════════════════════════════════════════════════════════════════════
     13. PARTS & AFTERCARE CLOSING STRIP (sits before the form)
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden reveal" style="background-color:#011E41; min-height:340px;">

    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/shared/repairs-callouts.jpg"
             alt="ILS engineer working near commercial laundry equipment with parts and service tools"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #011E41 0%, rgba(1,30,65,0.5) 35%, transparent 100%);"></div>
    </div>

    <div class="relative z-10 flex flex-col justify-center px-6 sm:px-10 lg:px-16 py-12 lg:py-16 max-w-full lg:max-w-[70%]">

        <p class="font-body font-bold text-steel text-xs uppercase tracking-[0.22em] mb-4">After the Visit</p>

        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-[1.8rem] xl:text-[2.35rem] 2xl:text-[2.9rem] leading-tight mb-5">
            <span class="block">Receive a service report after every visit</span>
            <span class="block text-steel">with further work quoted before approval</span>
        </h2>

        <p class="font-body text-white/80 text-base leading-relaxed mb-6">
            <span class="block">The report records equipment condition and any issues found,</span>
            <span class="block">so you can review recommended repairs and genuine parts before deciding what goes ahead.</span>
        </p>

        <div class="flex items-center flex-wrap lg:flex-nowrap gap-x-8 gap-y-3 mb-7">
            @foreach([
                ['src' => '/images/icons/295.png', 'label' => 'Equipment<br>Condition'],
                ['src' => '/images/icons/296.png', 'label' => 'Quoted<br>Repairs'],
                ['src' => '/images/icons/297.png', 'label' => 'Genuine<br>Parts'],
            ] as $i => $feat)
            <div class="flex items-center gap-5">
                <img src="{{ $feat['src'] ?? '/images/icons/brand-white/'.$feat['icon'].'.svg' }}"
                     style="width:3.5rem;height:3.5rem;flex-shrink:0;{{ $feat['style'] ?? '' }}" alt="">
                <span class="font-body text-white text-sm font-bold leading-snug">{!! $feat['label'] !!}</span>
            </div>
            @endforeach
        </div>

        <div class="flex flex-wrap items-center gap-3">
            <a href="{{ route('parts-aftercare') }}"
               data-ga-cta="parts-aftercare-strip"
               class="inline-flex items-center gap-2 bg-white text-navy font-body font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors">
                Explore Support &amp; Aftercare
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                </svg>
            </a>
            <a href="{{ route('contact') }}"
               data-ga-cta="parts-aftercare-talk"
               class="inline-flex items-center gap-2 border border-white/40 text-white font-body font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/10 transition-colors">
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
                        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight mb-5 text-balance">
                            Protect your laundry operation with <span class="text-steel">planned maintenance&nbsp;support</span>
                        </h2>
                        <p class="font-body text-blue-200 text-base leading-relaxed mb-7 text-pretty">
                            Tell us about your equipment and maintenance needs. We&rsquo;ll guide you towards the right support route.
                        </p>
                        <div class="flex flex-col gap-3">
                            @foreach ([
                                'Experienced Engineers',
                                'Planned Servicing',
                                'Laundry Specialists',
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
                            <img src="/images/pages/services/preventive-agree-step.jpg"
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
                    <p class="font-body text-gray-500 text-sm mb-6">Share the details that make the next step clearer.</p>

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
                                I agree to the Privacy Policy and to Irish Laundry Systems using my details to respond to this enquiry. <span class="text-red-500">*</span> <a href="{{ route('privacy') }}" class="text-steel underline hover:text-navy" target="_blank">Privacy Policy</a>.
                            </span>
                        </label>
                        <label class="flex items-start gap-3 cursor-pointer">
                            <input type="checkbox" name="marketing_consent" value="1" {{ old('marketing_consent') ? 'checked' : '' }}
                                   class="mt-0.5 w-4 h-4 rounded border-border text-steel focus:ring-steel flex-shrink-0">
                            <span class="font-body text-xs text-gray-400 leading-relaxed">
                                I would like to receive occasional updates from Irish Laundry Systems. Optional.
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
