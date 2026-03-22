@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="bg-navy py-20 lg:py-32 relative overflow-hidden">
    <!-- Subtle background pattern -->
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
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-1.5 mb-6">
                <svg class="w-4 h-4 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                </svg>
                <span class="text-sm font-body text-gray-200">Authorised Electrolux Professional Partner</span>
            </div>

            <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl xl:text-6xl leading-tight mb-6">
                Reliable Commercial Laundry Systems &amp; Service Since 1987
            </h1>
            <p class="font-body text-blue-200 text-xl mb-4 leading-relaxed font-semibold">
                Contracts, repairs, parts and equipment — built around uptime.
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
                    Request Assessment
                </a>
                <a href="tel:+353000000000"
                   class="inline-flex items-center justify-center gap-2 border-2 border-white/40 hover:border-white text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 cursor-pointer hover:bg-white/10">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                    </svg>
                    Call an Engineer
                </a>
            </div>

            <p class="mt-6 text-sm text-gray-400 font-body">
                Republic of Ireland coverage &bull; We aim to respond within 24 hours (subject to location)
            </p>
        </div>
    </div>
</section>

<!-- PROOF BAR -->
@include('components.proof-bar')

<!-- HEALTHCARE FIRST -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div>
                <div class="inline-flex items-center gap-2 bg-red-50 border border-red-100 rounded-full px-3 py-1 mb-5">
                    <svg class="w-4 h-4 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/>
                    </svg>
                    <span class="text-xs font-body font-semibold text-red-700">Healthcare & Critical Operations</span>
                </div>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-5 leading-tight">
                    Built for Operations Where Laundry Reliability Matters Most
                </h2>
                <p class="font-body text-gray-600 text-lg leading-relaxed mb-5">
                    We support hospitals, nursing homes and care groups where laundry continuity directly affects patient and resident welfare. Breakdowns in these environments are not an inconvenience — they are a clinical and operational risk.
                </p>
                <p class="font-body text-gray-600 leading-relaxed mb-8">
                    ILS brings structured service contracts, documented maintenance records and priority call-out support — all designed with the expectations of healthcare environments in mind. We work within the frameworks of group operations, multi-site estates and procurement requirements.
                </p>
                <a href="{{ route('sectors.healthcare') }}"
                   class="inline-flex items-center gap-2 text-steel font-body font-semibold hover:text-navy transition-colors">
                    Explore healthcare support
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-bg border border-border rounded-xl p-5">
                    <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
                        </svg>
                    </div>
                    <h3 class="font-heading font-semibold text-navy text-sm mb-1">Multi-Site Support</h3>
                    <p class="text-xs font-body text-gray-500 leading-relaxed">Group-level contracts covering multiple facilities under a single service arrangement.</p>
                </div>
                <div class="bg-bg border border-border rounded-xl p-5">
                    <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-steel" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"/>
                        </svg>
                    </div>
                    <h3 class="font-heading font-semibold text-navy text-sm mb-1">Compliance Documentation</h3>
                    <p class="text-xs font-body text-gray-500 leading-relaxed">Service records and maintenance logs to support audit and governance requirements.</p>
                </div>
                <div class="bg-bg border border-border rounded-xl p-5">
                    <div class="w-10 h-10 rounded-lg bg-orange-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-heading font-semibold text-navy text-sm mb-1">Priority Response</h3>
                    <p class="text-xs font-body text-gray-500 leading-relaxed">Priority scheduling and triage for contract customers in critical operations.</p>
                </div>
                <div class="bg-bg border border-border rounded-xl p-5">
                    <div class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                        </svg>
                    </div>
                    <h3 class="font-heading font-semibold text-navy text-sm mb-1">Genuine Parts</h3>
                    <p class="text-xs font-body text-gray-500 leading-relaxed">Genuine OEM parts sourced through our Electrolux Professional partnership.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHY CHOOSE ILS -->
<section class="py-16 lg:py-24 bg-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-4">Why Operators Choose ILS</h2>
            <p class="font-body text-gray-600 text-lg max-w-2xl mx-auto leading-relaxed">
                We've been supporting commercial laundry operations across Ireland for over three decades. Here's what that means in practice.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white border border-border rounded-xl p-6 shadow-card text-center">
                <div class="w-12 h-12 rounded-xl bg-navy flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2">Established 1987</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">Over 30 years of commercial laundry engineering experience in Ireland. Proven reliability across sectors.</p>
            </div>
            <div class="bg-white border border-border rounded-xl p-6 shadow-card text-center">
                <div class="w-12 h-12 rounded-xl bg-navy flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2">Reliability &amp; Responsiveness</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">We aim to be on-site within 24 hours. Clear communication from first call to job completion.</p>
            </div>
            <div class="bg-white border border-border rounded-xl p-6 shadow-card text-center">
                <div class="w-12 h-12 rounded-xl bg-navy flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2">Authorised Electrolux Partner</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">Genuine parts, manufacturer-trained engineers and access to the full Electrolux Professional range.</p>
            </div>
            <div class="bg-white border border-border rounded-xl p-6 shadow-card text-center">
                <div class="w-12 h-12 rounded-xl bg-navy flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2">Engineering-Led Approach</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">Our team is built around technical expertise — diagnosis, repair and preventive maintenance done properly.</p>
            </div>
        </div>
    </div>
</section>

<!-- WHAT WE DO - 3 PILLARS -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-4">What We Do</h2>
            <p class="font-body text-gray-600 text-lg max-w-xl mx-auto">Three core service pillars — each engineered for commercial laundry reliability.</p>
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
                    Structured preventive maintenance programmes across three tiers — Core, Priority and Assured. Designed to reduce reactive breakdowns and give operations managers predictable costs and documented maintenance history.
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
                    When breakdowns happen, you need engineers who know the equipment, carry the right parts and communicate clearly. ILS provides reactive repair support across the Republic of Ireland — we aim to be on-site within 24 hours (subject to location and parts availability).
                </p>
                <a href="{{ route('repairs') }}" class="inline-flex items-center gap-2 text-steel font-body font-semibold hover:text-navy transition-colors text-sm">
                    Repairs &amp; call-outs
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            <!-- Equipment & Rental -->
            <div class="bg-bg border border-border rounded-xl p-6 lg:p-8 flex flex-col hover:shadow-card-hover transition-shadow duration-200">
                <div class="w-12 h-12 rounded-xl bg-navy/10 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 2.625c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125m16.5 5.625c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-xl mb-3">Equipment &amp; Rental</h3>
                <p class="font-body text-gray-600 leading-relaxed mb-5 flex-1">
                    Supply, installation and commissioning of commercial laundry equipment — including the full Electrolux Professional range. Equipment rental and lease options available for operations looking to manage capital expenditure and maintenance within a single arrangement.
                </p>
                <div class="flex gap-4">
                    <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 text-steel font-body font-semibold hover:text-navy transition-colors text-sm">
                        Equipment
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                    <a href="{{ route('rental') }}" class="inline-flex items-center gap-2 text-steel font-body font-semibold hover:text-navy transition-colors text-sm">
                        Rental
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- HOW IT WORKS -->
<section class="py-16 lg:py-24 bg-navy">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl mb-4">How It Works</h2>
            <p class="font-body text-blue-200 text-lg max-w-xl mx-auto">Three straightforward steps from first contact to service in place.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
            <!-- Step 1 -->
            <div class="text-center">
                <div class="w-14 h-14 rounded-full bg-orange flex items-center justify-center mx-auto mb-5 text-white font-heading font-bold text-xl">1</div>
                <h3 class="font-heading font-semibold text-white text-lg mb-3">Tell Us About Your Operation</h3>
                <p class="font-body text-gray-300 text-sm leading-relaxed">
                    Use the assessment form or call us directly. Tell us your sector, site count, equipment types and what you need — contract, repair support or equipment.
                </p>
            </div>
            <!-- Step 2 -->
            <div class="text-center">
                <div class="w-14 h-14 rounded-full bg-orange flex items-center justify-center mx-auto mb-5 text-white font-heading font-bold text-xl">2</div>
                <h3 class="font-heading font-semibold text-white text-lg mb-3">We Review &amp; Respond</h3>
                <p class="font-body text-gray-300 text-sm leading-relaxed">
                    An ILS engineer reviews your request and comes back with the right recommendation — typically within 24 hours. No generic sales process.
                </p>
            </div>
            <!-- Step 3 -->
            <div class="text-center">
                <div class="w-14 h-14 rounded-full bg-orange flex items-center justify-center mx-auto mb-5 text-white font-heading font-bold text-xl">3</div>
                <h3 class="font-heading font-semibold text-white text-lg mb-3">Service Begins</h3>
                <p class="font-body text-gray-300 text-sm leading-relaxed">
                    Once agreed, we schedule the first visit, set up service reporting and put your operation under cover. Ongoing support from there.
                </p>
            </div>
        </div>
        <div class="text-center mt-10">
            <a href="{{ route('request-assessment') }}"
               class="inline-flex items-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-semibold px-8 py-4 rounded-lg text-base transition-colors duration-200 cursor-pointer">
                Start the Process
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- PACKAGES -->
@include('components.packages')

<!-- SECTORS -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-4">Sectors We Support</h2>
            <p class="font-body text-gray-600 text-lg max-w-xl mx-auto">Engineering support tailored to the demands of each operating environment.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <a href="{{ route('sectors.healthcare') }}" class="group bg-bg border border-border rounded-xl p-6 hover:border-navy hover:shadow-card-hover transition-all duration-200">
                <div class="w-12 h-12 rounded-xl bg-red-100 flex items-center justify-center mb-4 group-hover:bg-red-200 transition-colors">
                    <svg class="w-6 h-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2 group-hover:text-steel transition-colors">Healthcare</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">Hospitals, HSE sites and healthcare groups — uptime, hygiene compliance and governance support.</p>
            </a>
            <a href="{{ route('sectors.hospitality') }}" class="group bg-bg border border-border rounded-xl p-6 hover:border-navy hover:shadow-card-hover transition-all duration-200">
                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center mb-4 group-hover:bg-blue-200 transition-colors">
                    <svg class="w-6 h-6 text-steel" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2 group-hover:text-steel transition-colors">Hospitality</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">Hotels, guesthouses and leisure — protecting guest operations with predictable laundry uptime.</p>
            </a>
            <a href="{{ route('sectors.care') }}" class="group bg-bg border border-border rounded-xl p-6 hover:border-navy hover:shadow-card-hover transition-all duration-200">
                <div class="w-12 h-12 rounded-xl bg-green-100 flex items-center justify-center mb-4 group-hover:bg-green-200 transition-colors">
                    <svg class="w-6 h-6 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2 group-hover:text-steel transition-colors">Care Facilities</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">Nursing homes and residential care — continuity, safety and confidence in daily laundry operations.</p>
            </a>
            <a href="{{ route('sectors.commercial') }}" class="group bg-bg border border-border rounded-xl p-6 hover:border-navy hover:shadow-card-hover transition-all duration-200">
                <div class="w-12 h-12 rounded-xl bg-orange-100 flex items-center justify-center mb-4 group-hover:bg-orange-200 transition-colors">
                    <svg class="w-6 h-6 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2 group-hover:text-steel transition-colors">Commercial &amp; Industrial</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">Commercial laundries and industrial operators — throughput focus, lifecycle cost and uptime management.</p>
            </a>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
@include('components.testimonials')

<!-- FAQs -->
@php
$faqs = [
    [
        'question' => 'What areas of Ireland does ILS cover?',
        'answer' => 'ILS covers the Republic of Ireland. We do not currently provide services in Northern Ireland. If you are unsure about coverage for your specific location, please contact us and we will confirm.',
    ],
    [
        'question' => 'How quickly can you respond to a breakdown?',
        'answer' => 'We aim to be on-site within 24 hours of a reported breakdown (subject to location and parts availability). Contract customers at Priority and Assured tiers receive preferential scheduling. Response times may vary during peak periods and are subject to engineer availability and location.',
    ],
    [
        'question' => 'Do you work with all commercial laundry brands?',
        'answer' => 'We work with a wide range of commercial laundry equipment brands. As an Authorised Electrolux Professional Partner, we have particular depth in the Electrolux range. For other brands, please contact us and we can advise on our capability for your specific equipment.',
    ],
];
@endphp
@include('components.faq', ['faqs' => $faqs, 'heading' => 'Common Questions'])

<!-- CTA BAND -->
@include('components.cta-band', [
    'heading' => 'Ready to reduce downtime risk?',
    'subheading' => 'Talk to an ILS engineer about service contracts, repairs or equipment. Covering the Republic of Ireland.',
])

@endsection
