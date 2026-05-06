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

                <h1 class="svc-hero-title font-heading font-bold text-white leading-[1.05] tracking-tight mb-6 text-4xl lg:text-5xl xl:text-6xl">
                    Support built around <span class="text-orange">your site and equipment</span>.
                </h1>

                <p class="svc-hero-desc font-body text-white/80 leading-relaxed mb-10 text-lg max-w-xl">
                    From urgent call-outs to planned maintenance, rental, parts and practical aftercare, Irish Laundry Systems helps operators choose the right support for the installed base and the pressure on site.
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
                    Most service decisions begin with the site, the equipment already installed and the help needed next.
                </p>
            </div>

            {{-- Right: 3-step horizontal flow --}}
            <div class="lg:col-span-9 flex items-start justify-between gap-3 sm:gap-4 lg:gap-6 flex-wrap sm:flex-nowrap">

                {{-- Step 1 — Site pressure (Ativo 7 — placeholder, swap after visual preview at /icon-preview.html) --}}
                <div class="svc-step flex-1 min-w-[140px] text-center">
                    <div class="w-16 h-16 lg:w-20 lg:h-20 rounded-full bg-white border border-border shadow-sm mx-auto mb-4 flex items-center justify-center">
                        <div class="w-8 h-8 lg:w-10 lg:h-10 text-orange [&>svg]:w-full [&>svg]:h-full" aria-hidden="true">
                            {!! file_get_contents(public_path('images/icons/brand/Ativo 1.svg')) !!}
                        </div>
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

                {{-- Step 2 — Installed equipment (Ativo 18 placeholder) --}}
                <div class="svc-step flex-1 min-w-[140px] text-center">
                    <div class="w-16 h-16 lg:w-20 lg:h-20 rounded-full bg-white border border-border shadow-sm mx-auto mb-4 flex items-center justify-center">
                        <div class="w-8 h-8 lg:w-10 lg:h-10 text-orange [&>svg]:w-full [&>svg]:h-full" aria-hidden="true">
                            {!! file_get_contents(public_path('images/icons/brand/Ativo 9.svg')) !!}
                        </div>
                    </div>
                    <p class="font-heading font-bold text-navy text-sm lg:text-base mb-1">Installed equipment</p>
                    <p class="font-body text-gray-500 text-xs lg:text-sm leading-snug">Identify model, age, capacity and parts access.</p>
                </div>

                {{-- Arrow 2 --}}
                <div class="hidden sm:flex flex-shrink-0 items-center pt-6 lg:pt-7">
                    <svg class="svc-arrow w-12 lg:w-16 h-3" viewBox="0 0 80 12" fill="none">
                        <path d="M2 6 L70 6 M62 1 L70 6 L62 11" stroke="#148af4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>

                {{-- Step 3 — Support route (Ativo 4 placeholder) --}}
                <div class="svc-step flex-1 min-w-[140px] text-center">
                    <div class="w-16 h-16 lg:w-20 lg:h-20 rounded-full bg-white border border-border shadow-sm mx-auto mb-4 flex items-center justify-center">
                        <div class="w-8 h-8 lg:w-10 lg:h-10 text-orange [&>svg]:w-full [&>svg]:h-full" aria-hidden="true">
                            {!! file_get_contents(public_path('images/icons/brand/Ativo 6.svg')) !!}
                        </div>
                    </div>
                    <p class="font-heading font-bold text-navy text-sm lg:text-base mb-1">Next step</p>
                    <p class="font-body text-gray-500 text-xs lg:text-sm leading-snug">Select the right support for the site.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- 4. CHOOSE THE ROUTE — 4 PREMIUM PHOTO CARDS -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">

        <div class="text-center mb-12 lg:mb-16 max-w-3xl mx-auto">
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-5">
                Choose the right support for <span class="text-orange">your site</span>.
            </h2>
            <p class="font-body text-gray-500 text-base lg:text-lg leading-relaxed">
                Four practical ways to get the right help for faults, planned maintenance, rental, parts access and aftercare around the installed base.
            </p>
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
                        <p class="font-body text-white text-sm leading-relaxed mb-4">Engineering support for faults, breakdowns and performance issues where equipment pressure affects the laundry room.</p>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-center gap-2 font-body text-white text-sm"><span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>Triage-first response</li>
                            <li class="flex items-center gap-2 font-body text-white text-sm"><span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>Fast contact and follow-up</li>
                            <li class="flex items-center gap-2 font-body text-white text-sm"><span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>Built for critical environments</li>
                        </ul>
                    </div>

                    <h3 class="font-heading font-extrabold text-white text-2xl lg:text-3xl leading-[1.05] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-4">Repairs &amp; Call-outs</h3>
                    <div class="flex justify-end">
                        <span class="inline-flex items-center gap-2 bg-white/15 group-hover:bg-orange border border-white/30 group-hover:border-orange text-white font-body font-semibold text-xs uppercase tracking-wide px-4 py-2.5 rounded-full transition-colors duration-200">
                            Request Call-out
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
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
                        <p class="font-body text-white text-sm leading-relaxed mb-4">Planned maintenance and service structure for sites that need better control over recurring issues and the installed base.</p>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-center gap-2 font-body text-white text-sm"><span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>Three maintenance tiers</li>
                            <li class="flex items-center gap-2 font-body text-white text-sm"><span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>Documented service records</li>
                            <li class="flex items-center gap-2 font-body text-white text-sm"><span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>Fewer unplanned stoppages</li>
                        </ul>
                    </div>

                    <h3 class="font-heading font-extrabold text-white text-2xl lg:text-3xl leading-[1.05] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-4">Service Contracts</h3>
                    <div class="flex justify-end">
                        <span class="inline-flex items-center gap-2 bg-white/15 group-hover:bg-orange border border-white/30 group-hover:border-orange text-white font-body font-semibold text-xs uppercase tracking-wide px-4 py-2.5 rounded-full transition-colors duration-200">
                            View Contracts
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
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
                        <p class="font-body text-white text-sm leading-relaxed mb-4">A supported option for replacement pressure, expansion or capital control, with equipment installed and maintained.</p>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-center gap-2 font-body text-white text-sm"><span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>Equipment with service built in</li>
                            <li class="flex items-center gap-2 font-body text-white text-sm"><span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>Predictable monthly cost</li>
                            <li class="flex items-center gap-2 font-body text-white text-sm"><span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>Electrolux Professional standard</li>
                        </ul>
                    </div>

                    <h3 class="font-heading font-extrabold text-white text-2xl lg:text-3xl leading-[1.05] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-4">Equipment Rental</h3>
                    <div class="flex justify-end">
                        <span class="inline-flex items-center gap-2 bg-white/15 group-hover:bg-orange border border-white/30 group-hover:border-orange text-white font-body font-semibold text-xs uppercase tracking-wide px-4 py-2.5 rounded-full transition-colors duration-200">
                            See Rental Options
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
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
                        <p class="font-body text-white text-sm leading-relaxed mb-4">Genuine parts access, service history context and practical follow-up support around commercial laundry equipment.</p>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-center gap-2 font-body text-white text-sm"><span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>Genuine Electrolux parts</li>
                            <li class="flex items-center gap-2 font-body text-white text-sm"><span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>Lifecycle support</li>
                            <li class="flex items-center gap-2 font-body text-white text-sm"><span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>Manufacturer-trained engineers</li>
                        </ul>
                    </div>

                    <h3 class="font-heading font-extrabold text-white text-2xl lg:text-3xl leading-[1.05] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-4">Parts &amp; Aftercare</h3>
                    <div class="flex justify-end">
                        <span class="inline-flex items-center gap-2 bg-white/15 group-hover:bg-orange border border-white/30 group-hover:border-orange text-white font-body font-semibold text-xs uppercase tracking-wide px-4 py-2.5 rounded-full transition-colors duration-200">
                            Explore Support Options
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
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
        $svcCapabilities = [
            ['label' => '38+ years',               'body' => 'Specialist commercial laundry support since 1987.'],
            ['label' => 'Ireland-wide support',    'body' => 'Service coverage across the Republic of Ireland.'],
            ['label' => 'Support options',         'body' => 'Repairs, contracts, rental, parts and aftercare.'],
            ['label' => 'Electrolux parts access', 'body' => 'Access to genuine Electrolux Professional parts where applicable.'],
        ];
        @endphp
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-6">
            @foreach ($svcCapabilities as $i => $item)
            <div class="relative">
                @if ($i > 0)
                <div class="hidden lg:block absolute left-0 top-1 bottom-1 w-px bg-white/10" aria-hidden="true"></div>
                @endif
                <div class="lg:pl-6">
                    <p class="font-heading font-bold text-orange text-base lg:text-lg uppercase tracking-wider mb-1.5 leading-tight">{{ $item['label'] }}</p>
                    <p class="font-body text-blue-200 text-sm leading-relaxed">{{ $item['body'] }}</p>
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
                How the services <span class="text-orange">work together</span>.
            </h2>
            <p class="font-body text-gray-500 text-base mt-3 max-w-2xl mx-auto leading-relaxed">
                Repairs, contracts, rental, parts and aftercare should not sit in separate conversations. Together, they create a clearer support structure around the installed base.
            </p>
        </div>

        <div class="relative">
            {{-- Connector SVG line — desktop only --}}
            <svg class="svc-connector hidden lg:block absolute left-0 right-0 top-10 mx-auto pointer-events-none" viewBox="0 0 1200 4" preserveAspectRatio="none" style="width:80%; height:4px;">
                <path d="M 0 2 L 1200 2" stroke="#148af4" stroke-width="2" stroke-dasharray="6 8" stroke-linecap="round"/>
            </svg>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
                @foreach([
                    ['ativo' => 11, 'label' => 'Call-out identifies pressure',          'desc' => 'A fault, breakdown or recurring issue shows what is under strain.'],
                    ['ativo' => 17, 'label' => 'Contract reduces repeat issues',        'desc' => 'Planned maintenance gives the site a clearer service structure.'],
                    ['ativo' => 14, 'label' => 'Parts support the installed base',      'desc' => 'Genuine parts access and service history keep equipment decisions connected.'],
                    ['ativo' => 19, 'label' => 'Rental helps with replacement or growth','desc' => 'Rental can support capacity gaps, replacement pressure or expansion without a capital purchase route.'],
                ] as $node)
                <div class="svc-link-node text-center">
                    <div class="svc-link-icon relative z-10 w-20 h-20 rounded-full bg-white border border-border shadow-sm mx-auto mb-4 flex items-center justify-center">
                        <div class="w-9 h-9 text-orange [&>svg]:w-full [&>svg]:h-full" aria-hidden="true">
                            {!! file_get_contents(public_path('images/icons/brand/Ativo ' . $node['ativo'] . '.svg')) !!}
                        </div>
                    </div>
                    <p class="font-heading font-bold text-navy text-sm leading-snug max-w-[180px] mx-auto mb-2">{{ $node['label'] }}</p>
                    <p class="font-body text-gray-500 text-xs leading-relaxed max-w-[200px] mx-auto">{{ $node['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- 7. PARTS & AFTERCARE — BRIDGE -->
<section id="parts-aftercare" class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div>
                <p class="font-body font-semibold text-orange text-xs uppercase tracking-widest mb-4">Installed Base Support</p>
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-5">
                    Parts &amp; aftercare for the <span class="text-orange">installed base</span>.
                </h2>
                <p class="font-body text-gray-600 text-lg leading-relaxed mb-6">
                    As an Authorised Electrolux Professional Partner, Irish Laundry Systems supports genuine manufacturer parts and structured aftercare across the installed base, helping keep diagnosis, service history and equipment decisions connected.
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
                        'Genuine Electrolux Professional parts access',
                        'Preferential parts access for contract customers',
                        'Technical documentation and service history',
                        'Parts supply for contract and non-contract customers',
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

<!-- 8. COMPACT TESTIMONIALS — operational impact focus -->
<section class="py-16 lg:py-20 bg-bg border-t border-border">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">

        <div class="max-w-2xl mb-12">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight">
                What the services <span class="text-orange">change</span> day-to-day.
            </h2>
        </div>

        @php
        $svcTestimonials = [
            [
                'quote' => 'Predictable maintenance instead of constant breakdowns.',
                'name'  => 'Operations Manager',
                'role'  => 'Healthcare Group, Republic of Ireland',
                'img'   => '/images/about/testimonial-1.jpg',
            ],
            [
                'quote' => 'A clear path when something breaks.',
                'name'  => 'Facilities Manager',
                'role'  => 'Nursing Home Group, Munster',
                'img'   => '/images/about/testimonial-2.jpg',
            ],
            [
                'quote' => 'Rental solved the gap before the next install.',
                'name'  => 'General Manager',
                'role'  => 'Hotel Group, Leinster',
                'img'   => '/images/about/testimonial-3.jpg',
            ],
        ];
        @endphp
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 lg:gap-6">
            @foreach ($svcTestimonials as $t)
            <article class="bg-white border border-border rounded-2xl p-6 lg:p-7 flex flex-col">
                <svg class="w-7 h-7 text-orange mb-4 flex-shrink-0" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                    <path d="M9.5 8c-3 0-5.5 2.5-5.5 5.5 0 2 1 3.7 2.5 4.6-.3 2.6-1.5 4.6-3.5 5.9l1 2c4-1.5 7-5 7-10v-2c0-3.3-.7-6-1.5-6zm14 0c-3 0-5.5 2.5-5.5 5.5 0 2 1 3.7 2.5 4.6-.3 2.6-1.5 4.6-3.5 5.9l1 2c4-1.5 7-5 7-10v-2c0-3.3-.7-6-1.5-6z"/>
                </svg>
                <p class="font-heading font-bold text-navy text-lg lg:text-xl leading-snug mb-6 flex-1">{{ $t['quote'] }}</p>
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
                Need the right support for <span class="text-orange">your site</span>?
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
