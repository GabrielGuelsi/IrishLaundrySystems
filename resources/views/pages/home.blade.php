@extends('layouts.app')

@section('pageTitle', 'Commercial Laundry Engineering Ireland | Service Contracts, Repairs & Equipment | Irish Laundry Systems')
@section('metaDescription', 'Engineering-led commercial laundry support since 1987. Service contracts, repairs, equipment rental and parts across the Republic of Ireland. Request a service assessment.')

@section('content')

<!-- 1. HERO -->
<style>
@keyframes heroFadeUp {
    from { opacity: 0; transform: translateY(24px); }
    to   { opacity: 1; transform: translateY(0); }
}
.hero-title { animation: heroFadeUp 0.7s ease forwards; }
.hero-desc  { animation: heroFadeUp 0.7s ease 0.2s forwards; opacity: 0; }
.hero-btns  { animation: heroFadeUp 0.7s ease 0.4s forwards; opacity: 0; }
</style>

<section class="relative overflow-hidden" style="height: 580px; min-height: 460px; background-color: #011E41;">

    <!-- Background image -->
    <img src="/images/about/about-engineers.jpg"
         alt="ILS engineer servicing commercial laundry equipment"
         class="absolute inset-0 w-full h-full object-cover object-right">

    <!-- Gradient overlay — tight, clears by 70% -->
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,1.00) 0%, rgba(1,30,65,0.92) 30%, rgba(1,30,65,0.50) 50%, rgba(1,30,65,0.10) 65%, transparent 75%);"></div>

    <!-- Text — vertically centered -->
    <div class="relative z-10 h-full flex items-center w-full">
        <div class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8">
            <div style="max-width: 420px;">

                <h1 class="hero-title font-heading font-bold text-white leading-tight tracking-tight mb-5 text-3xl lg:text-4xl xl:text-[2.75rem]">
                    Designed to reduce <span class="text-orange">downtime risk</span> in critical laundry operations.
                </h1>

                <p class="hero-desc font-body text-white/80 leading-relaxed mb-8" style="font-size: 1.05rem;">
                    Irish Laundry Systems combines local engineering support in Ireland with manufacturer-grade equipment standards, lifecycle continuity, and a more structured route to service and lifecycle support.
                </p>

                <div class="hero-btns flex flex-row gap-4">
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center justify-center bg-orange hover:bg-orange-dark text-white font-body font-bold px-6 py-3.5 text-sm tracking-wide uppercase transition-colors duration-200 rounded-md">
                        Request Service Assessment
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center border-2 border-white/50 hover:border-white text-white font-body font-semibold px-6 py-3.5 text-sm tracking-wide uppercase transition-colors duration-200 hover:bg-white/10 rounded-md">
                        Talk to an Engineer
                    </a>
                </div>

            </div>
        </div>
    </div>

</section>

<!-- Electrolux Partner Strip -->
<div class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 lg:py-8 flex items-center gap-0">

        <!-- Left: Logo -->
        <div class="flex-shrink-0 pr-8">
            <img src="/images/logo/EPR_Authorized_Partner_horizontal_positive_CMYK.jpg"
                 alt="Electrolux Professional Authorized Partner"
                 class="h-20 w-auto">
        </div>

        <!-- Middle: Description -->
        <div class="hidden lg:block flex-1 border-l border-r border-gray-200 px-8">
            <p class="font-body font-bold text-navy text-sm uppercase tracking-wide mb-1">Electrolux Professional Authorized Partner</p>
            <p class="font-body text-gray-600 text-sm leading-relaxed">Irish Laundry Systems combines local engineering support in Ireland with manufacturer-grade equipment standards, lifecycle continuity, and a more structured route to service and lifecycle support.</p>
        </div>

        <!-- Right: 3 feature icons -->
        <div class="hidden lg:flex flex-shrink-0 items-center gap-8 pl-8">

            <!-- Local engineering execution -->
            <div class="flex flex-col items-center gap-2 text-center">
                <svg class="w-6 h-6 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l5.653-4.655m5.873-4.025a3 3 0 1 1 4.243 4.243"/>
                </svg>
                <span class="text-xs font-body text-gray-600 leading-snug" style="max-width: 80px;">Local engineering execution</span>
            </div>

            <!-- Lifecycle support route -->
            <div class="flex flex-col items-center gap-2 text-center">
                <svg class="w-6 h-6 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/>
                </svg>
                <span class="text-xs font-body text-gray-600 leading-snug" style="max-width: 80px;">Lifecycle support route</span>
            </div>

            <!-- Genuine parts continuity -->
            <div class="flex flex-col items-center gap-2 text-center">
                <svg class="w-6 h-6 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z"/>
                </svg>
                <span class="text-xs font-body text-gray-600 leading-snug" style="max-width: 80px;">Genuine parts continuity</span>
            </div>

        </div>

    </div>
</div>

<!-- 2. TRUST ANCHORS — Electrolux credibility line + proof strip -->
@include('components.proof-bar')

<!-- 3. THREE CORE PATHWAYS -->

<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Heading -->
        <div class="mb-10">
            <h2 class="font-heading text-navy text-4xl lg:text-5xl leading-tight">
                <span class="font-bold">Three clear routes into</span><br>
                the main commercial pathways.
            </h2>
        </div>

        <!-- 3-column card grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">

            <!-- Card 1 — Repairs & Call-outs -->
            <div class="group relative overflow-hidden h-[420px] cursor-pointer">
                <img src="/images/about/about-engineers.jpg" alt="Repairs and Call-outs"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <!-- Default overlay: heavy at bottom -->
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background: linear-gradient(to bottom, rgba(1,30,65,0.72) 0%, transparent 28%);"></div>
                <!-- Hover overlay: darker overall -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background: rgba(1,30,65,0.82);"></div>

                <!-- Content -->
                <div class="absolute inset-0 p-8 flex flex-col justify-end group-hover:justify-start transition-all duration-300">
                    <h3 class="font-heading font-bold text-white text-2xl mb-0 group-hover:mb-4 transition-all duration-300">Repairs &amp; Call-outs</h3>

                    <!-- Hover-only content -->
                    <div class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-64 group-hover:opacity-100 transition-all duration-500">
                        <p class="font-body text-white/75 text-sm leading-relaxed mb-4">
                            Urgent support for breakdowns and performance issues where operational pressure demands a fast, practical route.
                        </p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center gap-2 font-body text-white/85 text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>
                                Triage-first breakdown support
                            </li>
                            <li class="flex items-center gap-2 font-body text-white/85 text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>
                                Fast route into contact and follow-up
                            </li>
                            <li class="flex items-center gap-2 font-body text-white/85 text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>
                                Built for critical laundry environments
                            </li>
                        </ul>
                    </div>

                    <!-- Arrow button — always visible, pushed to bottom right -->
                    <div class="flex justify-end mt-auto">
                        <a href="{{ route('repairs') }}"
                           class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/40 flex items-center justify-center transition-colors duration-200">
                            <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2 — Equipment Rental -->
            <div class="group relative overflow-hidden h-[420px] cursor-pointer">
                <img src="/images/about/about-equipment.jpg" alt="Equipment Rental"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background: linear-gradient(to bottom, rgba(1,30,65,0.72) 0%, transparent 28%);"></div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background: rgba(1,30,65,0.82);"></div>

                <div class="absolute inset-0 p-8 flex flex-col justify-end group-hover:justify-start transition-all duration-300">
                    <h3 class="font-heading font-bold text-white text-2xl mb-0 group-hover:mb-4 transition-all duration-300">Equipment Rental</h3>

                    <div class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-64 group-hover:opacity-100 transition-all duration-500">
                        <p class="font-body text-white/75 text-sm leading-relaxed mb-4">
                            Electrolux Professional equipment supplied, installed and supported. Structured rental with maintenance included — managed cost and operational continuity.
                        </p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center gap-2 font-body text-white/85 text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>
                                Equipment with service built in
                            </li>
                            <li class="flex items-center gap-2 font-body text-white/85 text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>
                                Predictable monthly cost
                            </li>
                            <li class="flex items-center gap-2 font-body text-white/85 text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>
                                Electrolux Professional standard
                            </li>
                        </ul>
                    </div>

                    <div class="flex justify-end mt-auto">
                        <a href="{{ route('rental') }}"
                           class="inline-flex items-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-semibold text-xs px-4 py-2 rounded transition-colors duration-200">
                            Request Call-out
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3 — Service Contracts -->
            <div class="group relative overflow-hidden h-[420px] cursor-pointer">
                <img src="/images/about/about-team.jpg" alt="Service Contracts"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background: linear-gradient(to bottom, rgba(1,30,65,0.72) 0%, transparent 28%);"></div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background: rgba(1,30,65,0.82);"></div>

                <div class="absolute inset-0 p-8 flex flex-col justify-end group-hover:justify-start transition-all duration-300">
                    <h3 class="font-heading font-bold text-white text-2xl mb-0 group-hover:mb-4 transition-all duration-300">Service Contracts</h3>

                    <div class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-64 group-hover:opacity-100 transition-all duration-500">
                        <p class="font-body text-white/75 text-sm leading-relaxed mb-4">
                            Structured preventive maintenance across three tiers — Core, Priority and Assured. Predictable costs, documented history, fewer unplanned stoppages.
                        </p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center gap-2 font-body text-white/85 text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>
                                Three maintenance tiers
                            </li>
                            <li class="flex items-center gap-2 font-body text-white/85 text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>
                                Documented service records
                            </li>
                            <li class="flex items-center gap-2 font-body text-white/85 text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>
                                Fewer unplanned stoppages
                            </li>
                        </ul>
                    </div>

                    <div class="flex justify-end mt-auto">
                        <a href="{{ route('service-contracts') }}"
                           class="inline-flex items-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-semibold text-xs px-4 py-2 rounded transition-colors duration-200">
                            Request Call-out
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 4. SECTOR ROUTING TABS -->
@include('components.sector-switcher')

<!-- 5. THREE VALUE PILLARS -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col gap-4">

        <!-- Card 1: Electrolux Professional — overlay left, icon centred on right edge -->
        <div class="relative overflow-hidden rounded-2xl h-56 lg:h-64">
            <img src="/images/about/about-equipment.jpg" alt="Electrolux Professional"
                 class="absolute inset-0 w-full h-full object-cover object-center">
            <div class="absolute inset-0 flex">
                <div class="w-full lg:w-[58%] bg-navy/90 flex flex-col justify-center px-8 lg:px-14 py-8">
                    <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-snug mb-3">Electrolux Professional</h3>
                    <p class="font-body text-white/70 text-sm lg:text-base leading-relaxed max-w-lg mb-5">Manufacturer platform, engineering standards, genuine parts network and technical documentation across the full equipment range.</p>
                    <a href="{{ route('electrolux') }}" class="inline-flex items-center gap-2 self-start bg-white/15 hover:bg-white/25 border border-white/30 text-white font-body font-semibold text-sm px-4 py-2 rounded-lg transition-colors">
                        About the partnership
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
            <!-- Icon: centred vertically, sitting on the overlay/image boundary -->
            <div class="absolute top-1/2 -translate-y-1/2 left-[55%] hidden lg:flex w-20 h-20 rounded-full bg-navy/80 border-2 border-white/20 items-center justify-center">
                <svg class="w-9 h-9 text-white/80" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                </svg>
            </div>
        </div>

        <!-- Card 2: ILS Local Execution — overlay right, icon on left edge -->
        <div class="relative overflow-hidden rounded-2xl h-56 lg:h-64">
            <img src="/images/about/about-engineers.jpg" alt="ILS Local Execution"
                 class="absolute inset-0 w-full h-full object-cover object-center">
            <div class="absolute inset-0 flex flex-row-reverse">
                <div class="w-full lg:w-[58%] bg-navy/90 flex flex-col justify-center px-8 lg:px-14 py-8">
                    <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-snug mb-3">ILS — Local Execution</h3>
                    <p class="font-body text-white/70 text-sm lg:text-base leading-relaxed max-w-lg mb-5">Field response, structured service contracts, preventive maintenance and reactive support delivered by engineers who know Irish laundry operations.</p>
                    <a href="{{ route('services') }}" class="inline-flex items-center gap-2 self-start bg-white/15 hover:bg-white/25 border border-white/30 text-white font-body font-semibold text-sm px-4 py-2 rounded-lg transition-colors">
                        View service options
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
            <!-- Icon: centred vertically on the left boundary -->
            <div class="absolute top-1/2 -translate-y-1/2 right-[55%] hidden lg:flex w-20 h-20 rounded-full bg-navy/80 border-2 border-white/20 items-center justify-center">
                <svg class="w-9 h-9 text-white/80" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/>
                </svg>
            </div>
        </div>

        <!-- Card 3: Together — overlay left, icon on right edge -->
        <div class="relative overflow-hidden rounded-2xl h-56 lg:h-64">
            <img src="/images/healthcare/plant-room.jpg" alt="Together — Lower Downtime Risk"
                 class="absolute inset-0 w-full h-full object-cover object-center">
            <div class="absolute inset-0 flex">
                <div class="w-full lg:w-[58%] bg-navy/90 flex flex-col justify-center px-8 lg:px-14 py-8">
                    <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-snug mb-3">Together — Lower Downtime Risk</h3>
                    <p class="font-body text-white/70 text-sm lg:text-base leading-relaxed max-w-lg mb-5">Faster diagnosis, first-visit resolution and lifecycle parts support — reducing operational risk across healthcare, hospitality, care and commercial operations.</p>
                    <a href="{{ route('request-assessment') }}" class="inline-flex items-center gap-2 self-start bg-white/15 hover:bg-white/25 border border-white/30 text-white font-body font-semibold text-sm px-4 py-2 rounded-lg transition-colors">
                        Request assessment
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
            <!-- Icon: centred vertically on the right boundary -->
            <div class="absolute top-1/2 -translate-y-1/2 left-[55%] hidden lg:flex w-20 h-20 rounded-full bg-navy/80 border-2 border-white/20 items-center justify-center">
                <svg class="w-9 h-9 text-white/80" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
            </div>
        </div>

    </div>
</section>

<!-- 6. EQUIPMENT TEASER — Product Category Grid -->
<section class="py-16 lg:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Header -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-10">
            <div>
                <p class="font-body font-semibold text-orange text-xs uppercase tracking-[0.22em] mb-3">Browse by type</p>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl">Equipment Categories</h2>
                <p class="font-body text-gray-500 text-base mt-3 max-w-lg">Commercial laundry equipment supplied, installed and supported across the Republic of Ireland.</p>
            </div>
            <a href="{{ route('equipment') }}"
               class="inline-flex self-start lg:self-auto items-center gap-2 border border-navy/20 hover:border-navy text-navy/60 hover:text-navy font-body font-semibold px-5 py-2.5 text-xs uppercase tracking-wide transition-all duration-200 whitespace-nowrap">
                Browse All Equipment
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

        <!-- 4-across product grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

            <!-- Commercial Washers -->
            <a href="{{ route('equipment.category', 'washers') }}"
               class="group flex flex-col bg-white rounded-xl border border-gray-200 hover:border-navy hover:shadow-xl transition-all duration-300 overflow-hidden">
                <div class="relative bg-gray-100 aspect-[4/5] overflow-hidden flex items-center justify-center p-6">
                    <img src="/images/equipment/commercialwasher.webp" alt="Commercial Washers"
                         class="max-h-full max-w-full object-contain transition-transform duration-500 group-hover:scale-105">
                </div>
                <div class="p-6 flex flex-col gap-3 flex-1">
                    <p class="font-body font-semibold text-orange text-[11px] uppercase tracking-widest">Equipment</p>
                    <h3 class="font-heading font-bold text-navy text-xl leading-tight">Commercial Washers</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed flex-1">High-performance washing across capacity and efficiency tiers.</p>
                    <div class="flex items-center gap-2 mt-2 pt-4 border-t border-gray-100">
                        <span class="font-body font-semibold text-navy text-sm uppercase tracking-wide group-hover:text-orange transition-colors">Discover</span>
                        <svg class="w-4 h-4 text-navy group-hover:text-orange group-hover:translate-x-1 transition-all duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </div>
                </div>
            </a>

            <!-- Commercial Dryers -->
            <a href="{{ route('equipment.category', 'tumble-dryers') }}"
               class="group flex flex-col bg-white rounded-xl border border-gray-200 hover:border-navy hover:shadow-xl transition-all duration-300 overflow-hidden">
                <div class="relative bg-gray-100 aspect-[4/5] overflow-hidden flex items-center justify-center p-6">
                    <img src="/images/equipment/line6000-tumble-dryer.webp" alt="Commercial Dryers"
                         class="max-h-full max-w-full object-contain transition-transform duration-500 group-hover:scale-105">
                </div>
                <div class="p-6 flex flex-col gap-3 flex-1">
                    <p class="font-body font-semibold text-orange text-[11px] uppercase tracking-widest">Equipment</p>
                    <h3 class="font-heading font-bold text-navy text-xl leading-tight">Commercial Dryers</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed flex-1">Efficient drying for continuous high-volume operations.</p>
                    <div class="flex items-center gap-2 mt-2 pt-4 border-t border-gray-100">
                        <span class="font-body font-semibold text-navy text-sm uppercase tracking-wide group-hover:text-orange transition-colors">Discover</span>
                        <svg class="w-4 h-4 text-navy group-hover:text-orange group-hover:translate-x-1 transition-all duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </div>
                </div>
            </a>

            <!-- Barrier Washers -->
            <a href="{{ route('equipment.category', 'barrier-washers') }}"
               class="group flex flex-col bg-white rounded-xl border border-gray-200 hover:border-navy hover:shadow-xl transition-all duration-300 overflow-hidden">
                <div class="relative bg-gray-100 aspect-[4/5] overflow-hidden flex items-center justify-center p-6">
                    <img src="/images/equipment/line6000-barrier-washer.webp" alt="Barrier Washers"
                         class="max-h-full max-w-full object-contain transition-transform duration-500 group-hover:scale-105">
                </div>
                <div class="p-6 flex flex-col gap-3 flex-1">
                    <p class="font-body font-semibold text-orange text-[11px] uppercase tracking-widest">Equipment</p>
                    <h3 class="font-heading font-bold text-navy text-xl leading-tight">Barrier Washers</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed flex-1">Hygiene-critical environments with clean/dirty segregation.</p>
                    <div class="flex items-center gap-2 mt-2 pt-4 border-t border-gray-100">
                        <span class="font-body font-semibold text-navy text-sm uppercase tracking-wide group-hover:text-orange transition-colors">Discover</span>
                        <svg class="w-4 h-4 text-navy group-hover:text-orange group-hover:translate-x-1 transition-all duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </div>
                </div>
            </a>

            <!-- Ironers -->
            <a href="{{ route('equipment.category', 'ironers') }}"
               class="group flex flex-col bg-white rounded-xl border border-gray-200 hover:border-navy hover:shadow-xl transition-all duration-300 overflow-hidden">
                <div class="relative bg-gray-100 aspect-[4/5] overflow-hidden flex items-center justify-center p-6">
                    <img src="/images/equipment/line6000-ironer.webp" alt="Ironers"
                         class="max-h-full max-w-full object-contain transition-transform duration-500 group-hover:scale-105">
                </div>
                <div class="p-6 flex flex-col gap-3 flex-1">
                    <p class="font-body font-semibold text-orange text-[11px] uppercase tracking-widest">Equipment</p>
                    <h3 class="font-heading font-bold text-navy text-xl leading-tight">Ironers</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed flex-1">Flatwork finishing for linen at volume.</p>
                    <div class="flex items-center gap-2 mt-2 pt-4 border-t border-gray-100">
                        <span class="font-body font-semibold text-navy text-sm uppercase tracking-wide group-hover:text-orange transition-colors">Discover</span>
                        <svg class="w-4 h-4 text-navy group-hover:text-orange group-hover:translate-x-1 transition-all duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </div>
                </div>
            </a>

        </div>
    </div>
</section>

<!-- 7. PROOF — TESTIMONIALS -->
@include('components.testimonials')

<!-- 8. FINAL CTA + SHORT FORM -->
<section class="py-16 lg:py-24 bg-navy">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <div>
                <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl mb-4 leading-tight">
                    Ready to Reduce Downtime Risk?
                </h2>
                <p class="font-body text-blue-200 text-lg leading-relaxed mb-8">
                    Talk to an ILS engineer about service contracts, repairs or equipment. Tell us about your operation and we will confirm the right next step.
                </p>
                <div class="space-y-4">
                    <a href="tel:+353000000000" class="flex items-center gap-3 text-gray-200 hover:text-white transition-colors group">
                        <div class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-white/20 transition-colors">
                            <x-icon class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/>
                            </x-icon>
                        </div>
                        <div>
                            <p class="font-body font-semibold text-white text-sm">+353 01 123 4567</p>
                            <p class="font-body text-gray-400 text-xs">Mon–Fri, 8am–5pm</p>
                        </div>
                    </a>
                    <a href="{{ route('electrolux') }}" class="inline-flex items-center gap-2 text-steel-light hover:text-white font-body text-sm transition-colors">
                        Authorised Electrolux Professional Partner
                        <x-icon class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                        </x-icon>
                    </a>
                </div>
            </div>
            <div class="bg-white rounded-xl p-6 lg:p-8 shadow-card">
                <h3 class="font-heading font-bold text-navy text-lg mb-1">Request a Service Assessment</h3>
                <p class="font-body text-gray-500 text-sm mb-6">We aim to respond within 24 hours.</p>
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="home_name" class="block text-sm font-body font-medium text-navy mb-1.5">Name <span class="text-red-500">*</span></label>
                            <input type="text" id="home_name" name="name" required
                                   class="w-full px-3.5 py-2.5 border border-border rounded-lg font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-steel/30 focus:border-steel transition-colors"
                                   placeholder="Your name">
                        </div>
                        <div>
                            <label for="home_company" class="block text-sm font-body font-medium text-navy mb-1.5">Organisation <span class="text-red-500">*</span></label>
                            <input type="text" id="home_company" name="company" required
                                   class="w-full px-3.5 py-2.5 border border-border rounded-lg font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-steel/30 focus:border-steel transition-colors"
                                   placeholder="Company or organisation">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="home_phone" class="block text-sm font-body font-medium text-navy mb-1.5">Phone <span class="text-red-500">*</span></label>
                            <input type="tel" id="home_phone" name="phone" required
                                   class="w-full px-3.5 py-2.5 border border-border rounded-lg font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-steel/30 focus:border-steel transition-colors"
                                   placeholder="+353...">
                        </div>
                        <div>
                            <label for="home_sector" class="block text-sm font-body font-medium text-navy mb-1.5">Sector <span class="text-red-500">*</span></label>
                            <select id="home_sector" name="sector" required
                                    class="w-full px-3.5 py-2.5 border border-border rounded-lg font-body text-sm text-navy focus:outline-none focus:ring-2 focus:ring-steel/30 focus:border-steel transition-colors bg-white">
                                <option value="" disabled selected>Select sector</option>
                                <option value="healthcare">Healthcare</option>
                                <option value="hospitality">Hospitality</option>
                                <option value="care">Care Facilities</option>
                                <option value="commercial">Commercial &amp; Industrial</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="home_request_type" class="block text-sm font-body font-medium text-navy mb-1.5">Request Type <span class="text-red-500">*</span></label>
                        <select id="home_request_type" name="request_type" required
                                class="w-full px-3.5 py-2.5 border border-border rounded-lg font-body text-sm text-navy focus:outline-none focus:ring-2 focus:ring-steel/30 focus:border-steel transition-colors bg-white">
                            <option value="" disabled selected>What do you need?</option>
                            <option value="contract">Service Contract</option>
                            <option value="rental">Equipment Rental</option>
                            <option value="breakdown">Breakdown / Repair</option>
                            <option value="parts">Parts &amp; Aftercare</option>
                            <option value="equipment_quote">Equipment Quote</option>
                        </select>
                    </div>
                    <div class="flex items-start gap-2.5">
                        <input type="checkbox" id="home_gdpr" name="gdpr_consent" value="1" required
                               class="mt-0.5 w-4 h-4 rounded border-border text-steel focus:ring-steel/30 cursor-pointer flex-shrink-0">
                        <label for="home_gdpr" class="font-body text-gray-500 text-xs leading-relaxed cursor-pointer">
                            I consent to ILS storing and using my data to respond to this request. <a href="{{ route('privacy') }}" class="text-steel underline hover:text-navy">Privacy policy</a>. <span class="text-red-500">*</span>
                        </label>
                    </div>
                    <!-- Hidden UTM fields -->
                    <input type="hidden" name="utm_source" id="home_utm_source">
                    <input type="hidden" name="utm_medium" id="home_utm_medium">
                    <input type="hidden" name="utm_campaign" id="home_utm_campaign">
                    <input type="hidden" name="page_source" value="homepage_cta">
                    <button type="submit"
                            class="w-full bg-orange hover:bg-orange-dark text-white font-body font-bold py-3.5 px-6 rounded-lg text-base transition-colors duration-200 cursor-pointer"
                            data-ga-cta="homepage_form_submit">
                        Request Service Assessment
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
