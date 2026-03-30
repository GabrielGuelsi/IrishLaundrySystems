@extends('layouts.app')

@section('pageTitle', 'Commercial Laundry Engineering Ireland | Service Contracts, Repairs & Equipment | Irish Laundry Systems')
@section('metaDescription', 'Engineering-led commercial laundry support since 1987. Service contracts, repairs, equipment rental and parts across the Republic of Ireland. Request a service assessment.')

@section('content')

<!-- 1. HERO -->
<section class="bg-navy py-20 lg:py-32 relative overflow-hidden">
    <div class="absolute inset-0 opacity-5">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                    <path d="M 40 0 L 0 0 0 40" fill="none" stroke="white" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#grid)"/>
        </svg>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-1.5 mb-6">
                <svg class="w-4 h-4 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                </svg>
                <span class="text-sm font-body text-gray-200">Authorised Electrolux Professional Partner</span>
            </div>

            <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl xl:text-6xl leading-tight mb-6">
                Engineering-Led Commercial Laundry Support Since 1987
            </h1>
            <p class="font-body text-blue-200 text-xl mb-4 leading-relaxed font-semibold">
                Contracts, repairs, parts and equipment — built around operational continuity.
            </p>
            <p class="font-body text-gray-300 text-lg mb-10 leading-relaxed max-w-2xl">
                Irish Laundry Systems provides engineering-led commercial laundry support across the Republic of Ireland. From structured service contracts to emergency call-outs — we keep critical operations running.
            </p>

            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('request-assessment') }}"
                   class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 cursor-pointer">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    Request Service Assessment
                </a>
                <a href="tel:+353000000000"
                   class="inline-flex items-center justify-center gap-2 border-2 border-white/40 hover:border-white text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 cursor-pointer hover:bg-white/10">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                    </svg>
                    Talk to an Engineer
                </a>
            </div>

            <p class="mt-6 text-sm text-gray-400 font-body">
                Republic of Ireland coverage &bull; We aim to respond within 24 hours (subject to location)
            </p>
        </div>
    </div>
</section>

<!-- 2. TRUST ANCHORS — Electrolux credibility line + proof strip -->
@include('components.proof-bar')

<!-- 3. PROOF — TESTIMONIALS -->
@include('components.testimonials')

<!-- 4. THREE CORE PATHWAYS -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-4">Three Core Services</h2>
            <p class="font-body text-gray-600 text-lg max-w-xl mx-auto">The three service pathways that underpin every ILS customer relationship — each engineered for commercial laundry continuity.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
            <!-- Service Contracts -->
            <div class="bg-bg border border-border rounded-xl p-6 lg:p-8 flex flex-col hover:shadow-card-hover transition-shadow duration-200">
                <div class="w-12 h-12 rounded-xl bg-steel/10 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-steel" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-xl mb-3">Service Contracts</h3>
                <p class="font-body text-gray-600 leading-relaxed mb-5 flex-1">
                    Structured preventive maintenance programmes across three tiers — Core, Priority and Assured. Designed to reduce unplanned stoppages and give operations managers predictable costs and documented maintenance history.
                </p>
                <a href="{{ route('service-contracts') }}" class="inline-flex items-center gap-2 text-steel font-body font-semibold hover:text-navy transition-colors text-sm">
                    View service contracts
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            <!-- Repairs & Call-outs -->
            <div class="bg-bg border border-border rounded-xl p-6 lg:p-8 flex flex-col hover:shadow-card-hover transition-shadow duration-200">
                <div class="w-12 h-12 rounded-xl bg-orange/10 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-xl mb-3">Repairs &amp; Call-outs</h3>
                <p class="font-body text-gray-600 leading-relaxed mb-5 flex-1">
                    When breakdowns happen, you need engineers who know the equipment, carry the right parts and communicate clearly. ILS provides reactive repair support across the Republic of Ireland.
                </p>
                <a href="{{ route('repairs') }}" class="inline-flex items-center gap-2 text-steel font-body font-semibold hover:text-navy transition-colors text-sm">
                    Repairs &amp; call-outs
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            <!-- Equipment Rental -->
            <div class="bg-bg border border-border rounded-xl p-6 lg:p-8 flex flex-col hover:shadow-card-hover transition-shadow duration-200">
                <div class="w-12 h-12 rounded-xl bg-navy/10 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-xl mb-3">Equipment Rental</h3>
                <p class="font-body text-gray-600 leading-relaxed mb-5 flex-1">
                    Commercial laundry equipment supplied, installed and supported — including the Electrolux Professional range. Structured rental arrangements with maintenance included, for managed cost and operational continuity.
                </p>
                <a href="{{ route('rental') }}" class="inline-flex items-center gap-2 text-steel font-body font-semibold hover:text-navy transition-colors text-sm">
                    Rental options
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 5. WHY ILS + ELECTROLUX -->
<section class="py-16 lg:py-20 bg-navy">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <p class="text-orange font-body font-semibold text-sm uppercase tracking-widest mb-3">Platform + Local Execution</p>
            <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl mb-4 leading-tight">
                Why ILS and Electrolux Professional Work Together
            </h2>
            <p class="font-body text-blue-200 text-lg max-w-2xl mx-auto">
                Manufacturer-grade capability delivered through field engineering. The combination that reduces friction and downtime risk in critical laundry operations.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                <div class="w-12 h-12 rounded-xl bg-orange/20 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21l3.75-3.75m0 0L9.75 13.5M6 17.25L12.75 10.5m0 0l3-3m-3 3l-3.75-3.75M21 3l-7.5 7.5"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-white text-base mb-2">Electrolux Professional</h3>
                <p class="font-body text-gray-400 text-sm leading-relaxed">Manufacturer platform, engineering standards, genuine parts network and technical documentation across the full equipment range.</p>
            </div>
            <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                <div class="w-12 h-12 rounded-xl bg-steel/30 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-steel-light" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-white text-base mb-2">ILS — Local Execution</h3>
                <p class="font-body text-gray-400 text-sm leading-relaxed">Field response, structured service contracts, preventive maintenance and reactive support delivered by engineers who know Irish laundry operations.</p>
            </div>
            <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                <div class="w-12 h-12 rounded-xl bg-emerald/20 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-emerald" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-white text-base mb-2">Together — Lower Downtime Risk</h3>
                <p class="font-body text-gray-400 text-sm leading-relaxed">Faster diagnosis, first-visit resolution and lifecycle parts support — reducing operational risk for healthcare, hospitality, care and commercial operations.</p>
            </div>
        </div>
        <div class="text-center mt-10">
            <a href="{{ route('electrolux') }}" class="inline-flex items-center gap-2 text-steel-light hover:text-white font-body font-semibold text-sm transition-colors">
                About our Electrolux partnership
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- 6. SECTOR ROUTING TABS -->
@include('components.sector-switcher')

<!-- 7. EQUIPMENT TEASER -->
<section class="py-16 lg:py-24 bg-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-4">Equipment Categories</h2>
            <p class="font-body text-gray-600 text-lg max-w-xl mx-auto">Commercial laundry equipment supplied, installed and supported across the Republic of Ireland.</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 lg:gap-6 mb-10">
            <a href="{{ route('equipment.category', 'washers') }}" class="bg-white border border-border rounded-xl p-5 text-center hover:shadow-card-hover hover:border-steel/30 transition-all duration-200 group">
                <div class="w-10 h-10 rounded-lg bg-steel/10 flex items-center justify-center mx-auto mb-3">
                    <svg class="w-5 h-5 text-steel" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z"/>
                    </svg>
                </div>
                <p class="font-heading font-semibold text-navy text-sm group-hover:text-steel transition-colors">Commercial Washers</p>
            </a>
            <a href="{{ route('equipment.category', 'dryers') }}" class="bg-white border border-border rounded-xl p-5 text-center hover:shadow-card-hover hover:border-steel/30 transition-all duration-200 group">
                <div class="w-10 h-10 rounded-lg bg-steel/10 flex items-center justify-center mx-auto mb-3">
                    <svg class="w-5 h-5 text-steel" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"/>
                    </svg>
                </div>
                <p class="font-heading font-semibold text-navy text-sm group-hover:text-steel transition-colors">Commercial Dryers</p>
            </a>
            <a href="{{ route('equipment.category', 'barrier-washers') }}" class="bg-white border border-border rounded-xl p-5 text-center hover:shadow-card-hover hover:border-steel/30 transition-all duration-200 group">
                <div class="w-10 h-10 rounded-lg bg-steel/10 flex items-center justify-center mx-auto mb-3">
                    <svg class="w-5 h-5 text-steel" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                    </svg>
                </div>
                <p class="font-heading font-semibold text-navy text-sm group-hover:text-steel transition-colors">Barrier Washers</p>
            </a>
            <a href="{{ route('equipment.category', 'ironers') }}" class="bg-white border border-border rounded-xl p-5 text-center hover:shadow-card-hover hover:border-steel/30 transition-all duration-200 group">
                <div class="w-10 h-10 rounded-lg bg-steel/10 flex items-center justify-center mx-auto mb-3">
                    <svg class="w-5 h-5 text-steel" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 20.25h12m-7.5-3v3m3-3v3m-10.125-3h17.25c.621 0 1.125-.504 1.125-1.125V4.875c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125z"/>
                    </svg>
                </div>
                <p class="font-heading font-semibold text-navy text-sm group-hover:text-steel transition-colors">Ironers</p>
            </a>
        </div>
        <div class="text-center">
            <a href="{{ route('equipment') }}"
               class="inline-flex items-center gap-2 bg-navy hover:bg-navy-light text-white font-body font-semibold px-7 py-3.5 rounded-lg text-base transition-colors duration-200 cursor-pointer">
                Browse All Equipment
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

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
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-body font-semibold text-white text-sm">+353 01 123 4567</p>
                            <p class="font-body text-gray-400 text-xs">Mon–Fri, 8am–5pm</p>
                        </div>
                    </a>
                    <a href="{{ route('electrolux') }}" class="inline-flex items-center gap-2 text-steel-light hover:text-white font-body text-sm transition-colors">
                        Authorised Electrolux Professional Partner
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
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
