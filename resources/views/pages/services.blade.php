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

    /* ── Connector strip animated dotted line ── */
    .svc-connector path { stroke-dasharray: 600; stroke-dashoffset: 600; transition: stroke-dashoffset 2s ease 0.3s; }
    .svc-link-strip.in-view .svc-connector path { stroke-dashoffset: 0; }
    .svc-link-icon { transition: transform 0.3s ease; }
    .svc-link-node:hover .svc-link-icon { transform: scale(1.1); box-shadow: 0 0 0 8px rgba(20, 138, 244, 0.15); }

    /* ── Stat counter typography ── */
    .svc-stat-num { font-feature-settings: 'tnum'; font-variant-numeric: tabular-nums; letter-spacing: -0.02em; }

    /* ── Smooth anchor scroll ── */
    html { scroll-behavior: smooth; }
</style>

<!-- 1. HERO -->
<section class="relative overflow-hidden" style="height: 720px; min-height: 560px; background-color: #011E41;">

    {{-- Background image --}}
    <img src="/images/healthcare/Customer-Care_Line-6000-_001.jpg"
         alt="ILS engineer reviewing commercial laundry equipment"
         loading="eager" decoding="async"
         class="absolute inset-0 w-full h-full object-cover object-top">

    {{-- Gradient overlay --}}
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.95) 0%, rgba(1,30,65,0.78) 18%, rgba(1,30,65,0.40) 35%, rgba(1,30,65,0.10) 55%, transparent 70%);"></div>

    {{-- Text --}}
    <div class="relative z-10 h-full flex items-center w-full">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16">
            <div style="max-width: 680px;">

                <h1 class="svc-hero-title font-heading font-bold text-white leading-[1.05] tracking-tight mb-6 text-4xl lg:text-5xl xl:text-6xl">
                    Support routes built around <span class="text-orange">your site and equipment</span>.
                </h1>

                <p class="svc-hero-desc font-body text-white/80 leading-relaxed mb-10 text-lg max-w-xl">
                    From urgent call-outs to planned support, genuine parts and rental cover — this page helps operators find the right route for the installed base and day-to-day pressure.
                </p>

                <div class="svc-hero-btns flex flex-row flex-wrap gap-4">
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center justify-center bg-orange hover:bg-orange-dark text-white font-body font-semibold px-7 py-4 rounded-md text-base transition-colors duration-200 whitespace-nowrap">
                        Request Service Assessment
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center border border-white/50 hover:border-white text-white font-body font-semibold px-7 py-4 rounded-md text-base transition-colors duration-200 hover:bg-white/10 whitespace-nowrap gap-2">
                        Talk to an Engineer
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>

            </div>
        </div>
    </div>

</section>

<!-- 2. PROOF BAR -->
@include('components.proof-bar')

<!-- 3. HOW SUPPORT STARTS -->
<section class="svc-process py-16 lg:py-20 bg-bg" data-svc-observe>
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">

            {{-- Left: heading --}}
            <div class="lg:col-span-3">
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-3">
                    How support <span class="text-orange">starts</span>.
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed">
                    Most service decisions begin with site pressure, the installed equipment, and the support route needed next.
                </p>
            </div>

            {{-- Right: 3-step horizontal flow --}}
            <div class="lg:col-span-9 flex items-start justify-between gap-3 sm:gap-4 lg:gap-6 flex-wrap sm:flex-nowrap">

                {{-- Step 1 --}}
                <div class="svc-step flex-1 min-w-[140px] text-center">
                    <div class="w-16 h-16 lg:w-20 lg:h-20 rounded-full bg-white border border-border shadow-sm mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-7 h-7 lg:w-9 lg:h-9 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                        </svg>
                    </div>
                    <p class="font-heading font-bold text-navy text-sm lg:text-base mb-1">Site pressure</p>
                    <p class="font-body text-gray-500 text-xs lg:text-sm leading-snug">Understand breakdown risk, utilisation and urgency.</p>
                </div>

                {{-- Arrow 1 --}}
                <div class="hidden sm:flex flex-shrink-0 items-center pt-6 lg:pt-7">
                    <svg class="svc-arrow w-12 lg:w-16 h-3" viewBox="0 0 80 12" fill="none">
                        <path d="M2 6 L70 6 M62 1 L70 6 L62 11" stroke="#148af4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>

                {{-- Step 2 --}}
                <div class="svc-step flex-1 min-w-[140px] text-center">
                    <div class="w-16 h-16 lg:w-20 lg:h-20 rounded-full bg-white border border-border shadow-sm mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-7 h-7 lg:w-9 lg:h-9 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z"/>
                        </svg>
                    </div>
                    <p class="font-heading font-bold text-navy text-sm lg:text-base mb-1">Installed equipment</p>
                    <p class="font-body text-gray-500 text-xs lg:text-sm leading-snug">Identify model, age, capacity and spare parts continuity.</p>
                </div>

                {{-- Arrow 2 --}}
                <div class="hidden sm:flex flex-shrink-0 items-center pt-6 lg:pt-7">
                    <svg class="svc-arrow w-12 lg:w-16 h-3" viewBox="0 0 80 12" fill="none">
                        <path d="M2 6 L70 6 M62 1 L70 6 L62 11" stroke="#148af4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>

                {{-- Step 3 --}}
                <div class="svc-step flex-1 min-w-[140px] text-center">
                    <div class="w-16 h-16 lg:w-20 lg:h-20 rounded-full bg-white border border-border shadow-sm mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-7 h-7 lg:w-9 lg:h-9 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z"/>
                        </svg>
                    </div>
                    <p class="font-heading font-bold text-navy text-sm lg:text-base mb-1">Support route</p>
                    <p class="font-body text-gray-500 text-xs lg:text-sm leading-snug">Select the right mix of support for your site.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- 4. CHOOSE THE ROUTE — 4 PREMIUM PHOTO CARDS -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">

        <div class="text-center mb-12 lg:mb-16">
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight">
                Choose the route that fits <span class="text-orange">your site</span>.
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-5">

            {{-- Card 1 — Repairs & Call-outs --}}
            <a href="{{ route('repairs') }}"
               class="group relative overflow-hidden h-[480px] lg:h-[520px] rounded-2xl block cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <img src="/images/healthcare/repairs-hero.jpg" alt="Repairs and Call-outs"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.55) 30%, rgba(1,30,65,0.1) 60%, transparent 80%);"></div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background: rgba(1,30,65,0.96);"></div>

                <div class="absolute inset-0 p-6 lg:p-7 flex flex-col justify-end">
                    <div class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-64 group-hover:opacity-100 transition-all duration-500">
                        <p class="font-body text-white text-sm leading-relaxed mb-4">Urgent response when breakdowns interrupt healthcare and high-pressure operations.</p>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-center gap-2 font-body text-white text-sm"><span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>Triage-first response</li>
                            <li class="flex items-center gap-2 font-body text-white text-sm"><span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>Fast contact and follow-up</li>
                            <li class="flex items-center gap-2 font-body text-white text-sm"><span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>Built for critical environments</li>
                        </ul>
                    </div>

                    <h3 class="font-heading font-extrabold text-white text-2xl lg:text-3xl leading-[1.05] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-4">Repairs &amp; Call-outs</h3>
                    <div class="flex justify-end">
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/20 group-hover:bg-orange transition-colors duration-200">
                            <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </span>
                    </div>
                </div>
            </a>

            {{-- Card 2 — Service Contracts --}}
            <a href="{{ route('service-contracts') }}"
               class="group relative overflow-hidden h-[480px] lg:h-[520px] rounded-2xl block cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <img src="/images/healthcare/service-contracts-hero.jpg" alt="Service Contracts"
                     class="absolute inset-0 w-full h-full object-cover object-[center_25%] transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.55) 30%, rgba(1,30,65,0.1) 60%, transparent 80%);"></div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background: rgba(1,30,65,0.96);"></div>

                <div class="absolute inset-0 p-6 lg:p-7 flex flex-col justify-end">
                    <div class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-64 group-hover:opacity-100 transition-all duration-500">
                        <p class="font-body text-white text-sm leading-relaxed mb-4">Planned preventive maintenance keeping operations stable and downtime predictable.</p>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-center gap-2 font-body text-white text-sm"><span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>Three maintenance tiers</li>
                            <li class="flex items-center gap-2 font-body text-white text-sm"><span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>Documented service records</li>
                            <li class="flex items-center gap-2 font-body text-white text-sm"><span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>Fewer unplanned stoppages</li>
                        </ul>
                    </div>

                    <h3 class="font-heading font-extrabold text-white text-2xl lg:text-3xl leading-[1.05] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-4">Service Contracts</h3>
                    <div class="flex justify-end">
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/20 group-hover:bg-orange transition-colors duration-200">
                            <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </span>
                    </div>
                </div>
            </a>

            {{-- Card 3 — Equipment Rental --}}
            <a href="{{ route('rental') }}"
               class="group relative overflow-hidden h-[480px] lg:h-[520px] rounded-2xl block cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <img src="/images/healthcare/lagoon-advanced-care.webp" alt="Equipment Rental"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.55) 30%, rgba(1,30,65,0.1) 60%, transparent 80%);"></div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background: rgba(1,30,65,0.96);"></div>

                <div class="absolute inset-0 p-6 lg:p-7 flex flex-col justify-end">
                    <div class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-64 group-hover:opacity-100 transition-all duration-500">
                        <p class="font-body text-white text-sm leading-relaxed mb-4">Short or long-term rental to cover breakdowns, upgrades or operational growth.</p>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-center gap-2 font-body text-white text-sm"><span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>Equipment with service built in</li>
                            <li class="flex items-center gap-2 font-body text-white text-sm"><span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>Predictable monthly cost</li>
                            <li class="flex items-center gap-2 font-body text-white text-sm"><span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>Electrolux Professional standard</li>
                        </ul>
                    </div>

                    <h3 class="font-heading font-extrabold text-white text-2xl lg:text-3xl leading-[1.05] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-4">Equipment Rental</h3>
                    <div class="flex justify-end">
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/20 group-hover:bg-orange transition-colors duration-200">
                            <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </span>
                    </div>
                </div>
            </a>

            {{-- Card 4 — Parts & Aftercare (anchor link) --}}
            <a href="#parts-aftercare"
               class="group relative overflow-hidden h-[480px] lg:h-[520px] rounded-2xl block cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <img src="/images/healthcare/Customer-Care_Line-6000-_001.jpg" alt="Parts & Aftercare"
                     class="absolute inset-0 w-full h-full object-cover object-[center_30%] transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.55) 30%, rgba(1,30,65,0.1) 60%, transparent 80%);"></div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background: rgba(1,30,65,0.96);"></div>

                <div class="absolute inset-0 p-6 lg:p-7 flex flex-col justify-end">
                    <div class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-64 group-hover:opacity-100 transition-all duration-500">
                        <p class="font-body text-white text-sm leading-relaxed mb-4">Genuine parts supply and practical aftercare for the installed Electrolux base.</p>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-center gap-2 font-body text-white text-sm"><span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>Genuine Electrolux parts</li>
                            <li class="flex items-center gap-2 font-body text-white text-sm"><span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>Lifecycle support</li>
                            <li class="flex items-center gap-2 font-body text-white text-sm"><span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>Manufacturer-trained engineers</li>
                        </ul>
                    </div>

                    <h3 class="font-heading font-extrabold text-white text-2xl lg:text-3xl leading-[1.05] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-4">Parts &amp; Aftercare</h3>
                    <div class="flex justify-end">
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/20 group-hover:bg-orange transition-colors duration-200">
                            <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3"/></svg>
                        </span>
                    </div>
                </div>
            </a>

        </div>
    </div>
</section>

<!-- 5. STAT BAND -->
<section class="relative bg-navy py-10 lg:py-12 overflow-hidden"
         style="background-image: radial-gradient(rgba(255,255,255,0.06) 1px, transparent 1px); background-size: 22px 22px;">
    <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>
    <div class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>
    <div class="relative max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">
        @php
        $svcStats = [
            ['target' => 38,  'suffix' => '+',  'label' => 'Years engineering-led',         'sub' => 'Specialist commercial laundry since 1987'],
            ['target' => 26,  'suffix' => '',   'label' => 'Counties covered',              'sub' => 'Full Republic of Ireland coverage'],
            ['target' => 48,  'suffix' => 'h',  'label' => 'Priority response window',      'sub' => 'On Priority &amp; Assured tiers'],
            ['target' => 100, 'suffix' => '%',  'label' => 'Genuine Electrolux parts',      'sub' => 'Authorised Professional Partner'],
        ];
        @endphp
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($svcStats as $i => $stat)
            <div class="relative text-center lg:text-left">
                @if ($i > 0)
                <div class="hidden lg:block absolute left-0 top-1 bottom-1 w-px bg-white/10" aria-hidden="true"></div>
                @endif
                <div class="lg:pl-6">
                    <div class="font-heading font-bold text-white text-2xl lg:text-3xl mb-1 svc-stat-num leading-none">
                        <span data-counter
                              data-target="{{ $stat['target'] }}"
                              data-suffix="{{ $stat['suffix'] }}">0{{ $stat['suffix'] }}</span>
                    </div>
                    <div class="font-body font-semibold text-orange text-xs uppercase tracking-wider mb-0.5">{{ $stat['label'] }}</div>
                    <div class="font-body text-blue-200 text-[11px] leading-snug">{!! $stat['sub'] !!}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- 6. HOW THE ROUTES WORK TOGETHER -->
<section class="svc-link-strip py-16 lg:py-20 bg-bg" data-svc-observe>
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">
        <div class="text-center mb-12 lg:mb-14">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight">
                How the routes <span class="text-orange">work together</span>.
            </h2>
            <p class="font-body text-gray-500 text-base mt-3 max-w-xl mx-auto leading-relaxed">
                The four routes aren't silos — they connect into one continuous support story for the installed base.
            </p>
        </div>

        <div class="relative">
            {{-- Connector SVG line — desktop only --}}
            <svg class="svc-connector hidden lg:block absolute left-0 right-0 top-10 mx-auto pointer-events-none" viewBox="0 0 1200 4" preserveAspectRatio="none" style="width:80%; height:4px;">
                <path d="M 0 2 L 1200 2" stroke="#148af4" stroke-width="2" stroke-dasharray="6 8" stroke-linecap="round"/>
            </svg>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
                @foreach([
                    ['icon' => 'M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z', 'label' => 'Call-out identifies pressure'],
                    ['icon' => 'M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z', 'label' => 'Contract reduces repeat issues'],
                    ['icon' => 'M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z', 'label' => 'Parts support the installed base'],
                    ['icon' => 'M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z', 'label' => 'Rental helps with replacement or growth'],
                ] as $node)
                <div class="svc-link-node text-center">
                    <div class="svc-link-icon relative z-10 w-20 h-20 rounded-full bg-white border border-border shadow-sm mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $node['icon'] }}"/>
                        </svg>
                    </div>
                    <p class="font-body text-navy text-sm font-semibold leading-snug max-w-[160px] mx-auto">{{ $node['label'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- 7. PARTS & AFTERCARE — DEEP SECTION -->
<section id="parts-aftercare" class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center mb-12 lg:mb-16">
            <div>
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-5">
                    Parts &amp; aftercare for the <span class="text-orange">installed base</span>.
                </h2>
                <p class="font-body text-gray-600 text-lg leading-relaxed mb-6">
                    As an Authorised Electrolux Professional Partner, ILS supplies genuine manufacturer parts and structured aftercare across the full Electrolux range — supporting faster diagnosis, first-visit resolution, and equipment lifecycle continuity.
                </p>
                <a href="{{ route('electrolux') }}"
                   class="inline-flex items-center gap-2 text-steel hover:text-navy font-body font-semibold text-sm transition-colors">
                    About the Electrolux partnership
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            <div class="bg-bg rounded-2xl p-7 lg:p-8 border border-border">
                <ul class="space-y-3">
                    @foreach ([
                        'Genuine Electrolux Professional parts',
                        'Preferential parts rates for contract customers',
                        'Technical documentation and service history',
                        'Parts supply for both contract and non-contract customers',
                    ] as $bullet)
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-orange mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span class="font-body text-navy text-base leading-snug">{{ $bullet }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

@include('components.aftercare-service-cards')

<!-- 8. COMPACT TESTIMONIALS — operational impact focus -->
<section class="py-16 lg:py-20 bg-bg border-t border-border">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">

        <div class="max-w-2xl mb-12">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-3">
                What the routes <span class="text-orange">change</span> day-to-day.
            </h2>
            <p class="font-body text-gray-600 text-base leading-relaxed">
                How ILS customers describe the operational shift after picking the right support route.
            </p>
        </div>

        @php
        $svcTestimonials = [
            [
                'highlight' => 'Predictable maintenance instead of constant breakdowns.',
                'body'      => 'After putting a contract in place, the equipment just runs. We plan around scheduled visits.',
                'name'      => 'Operations Manager',
                'role'      => 'Healthcare Group, Republic of Ireland',
                'img'       => '/images/about/testimonial-1.jpg',
            ],
            [
                'highlight' => 'A clear path when something breaks.',
                'body'      => 'Fast triage, the right engineer, the right parts. The repair route is structured — not chaotic.',
                'name'      => 'Facilities Manager',
                'role'      => 'Nursing Home Group, Munster',
                'img'       => '/images/about/testimonial-2.jpg',
            ],
            [
                'highlight' => 'Rental solved the gap before the next install.',
                'body'      => 'When we needed extra capacity over peak season, the rental came in fast and was supported throughout.',
                'name'      => 'General Manager',
                'role'      => '4-Star Hotel, Leinster',
                'img'       => '/images/about/testimonial-3.jpg',
            ],
        ];
        @endphp
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 lg:gap-6">
            @foreach ($svcTestimonials as $t)
            <article class="bg-white border border-border rounded-2xl p-6 lg:p-7 flex flex-col">
                <svg class="w-7 h-7 text-orange mb-4 flex-shrink-0" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                    <path d="M9.5 8c-3 0-5.5 2.5-5.5 5.5 0 2 1 3.7 2.5 4.6-.3 2.6-1.5 4.6-3.5 5.9l1 2c4-1.5 7-5 7-10v-2c0-3.3-.7-6-1.5-6zm14 0c-3 0-5.5 2.5-5.5 5.5 0 2 1 3.7 2.5 4.6-.3 2.6-1.5 4.6-3.5 5.9l1 2c4-1.5 7-5 7-10v-2c0-3.3-.7-6-1.5-6z"/>
                </svg>
                <p class="font-heading font-bold text-navy text-lg lg:text-xl leading-snug mb-3">{{ $t['highlight'] }}</p>
                <p class="font-body text-gray-600 text-sm leading-relaxed mb-6 flex-1">{{ $t['body'] }}</p>
                <div class="flex items-center gap-3 pt-5 border-t border-border">
                    <img src="{{ $t['img'] }}" alt="{{ $t['name'] }}"
                         class="w-10 h-10 rounded-full object-cover object-top flex-shrink-0"
                         loading="lazy" decoding="async">
                    <div class="min-w-0">
                        <cite class="block font-body font-semibold text-navy text-sm not-italic leading-tight">{{ $t['name'] }}</cite>
                        <span class="font-body text-gray-500 text-xs leading-tight">{{ $t['role'] }}</span>
                    </div>
                </div>
            </article>
            @endforeach
        </div>

    </div>
</section>

<!-- 9. FINAL CTA BANNER -->
<section class="relative overflow-hidden bg-navy">
    <div class="grid grid-cols-1 lg:grid-cols-2">
        {{-- Left: text + CTAs --}}
        <div class="px-6 sm:px-10 lg:px-16 py-12 lg:py-20 z-10 relative">
            <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl xl:text-5xl leading-tight mb-4">
                Need the right support route for <span class="text-orange">your site</span>?
            </h2>
            <p class="font-body text-blue-200 text-base lg:text-lg leading-relaxed mb-8 max-w-md">
                Speak with an engineer about breakdown risk, installed equipment, parts continuity and the best next step for your site.
            </p>
            <div class="flex flex-row flex-wrap gap-3">
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center bg-white text-navy hover:bg-white/90 font-body font-semibold px-6 py-3.5 rounded-full text-sm transition-colors duration-200 whitespace-nowrap gap-2">
                    Talk to an Engineer
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
                <a href="{{ route('request-assessment') }}"
                   class="inline-flex items-center justify-center border border-white/40 hover:border-white text-white font-body font-semibold px-6 py-3.5 rounded-full text-sm transition-colors duration-200 whitespace-nowrap gap-2 hover:bg-white/10">
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

    // Animated number counters
    var counters = document.querySelectorAll('[data-counter]');
    if (counters.length && 'IntersectionObserver' in window) {
        var counterObs = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                var el = entry.target;
                var target = parseFloat(el.dataset.target) || 0;
                var suffix = el.dataset.suffix || '';
                var dur = 1400;
                var start = performance.now();
                function step(t) {
                    var p = Math.min(1, (t - start) / dur);
                    var eased = 1 - Math.pow(1 - p, 3);
                    el.textContent = Math.round(target * eased) + suffix;
                    if (p < 1) requestAnimationFrame(step);
                }
                requestAnimationFrame(step);
                counterObs.unobserve(el);
            });
        }, { threshold: 0.4 });
        counters.forEach(function (el) { counterObs.observe(el); });
    }

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
