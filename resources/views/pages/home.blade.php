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

<section class="relative overflow-hidden" style="height: 720px; min-height: 560px; background-color: #011E41;">

    <!-- Background image -->
    <img src="/images/hero/hero-technician-inspection.png"
         alt="ILS technician inspecting a commercial washing machine drum during a service call"
         class="absolute inset-0 w-full h-full object-cover object-right">

    <!-- Gradient overlay — tight, clears by 70% -->
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,1.00) 0%, rgba(1,30,65,0.92) 30%, rgba(1,30,65,0.50) 50%, rgba(1,30,65,0.10) 65%, transparent 75%);"></div>

    <!-- Text — vertically centered -->
    <div class="relative z-10 h-full flex items-center w-full">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16">
            <div style="max-width: 620px;">

                <h1 class="hero-title font-heading font-bold text-white leading-[1.05] tracking-tight mb-10 text-4xl lg:text-5xl xl:text-6xl">
                    Designed to reduce <span class="text-orange">downtime risk</span> in critical laundry operations.
                </h1>

                <div class="hero-btns flex flex-row gap-4">
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center justify-center bg-orange hover:bg-orange-dark text-white font-body font-semibold px-7 py-4 rounded-md text-base transition-colors duration-200 whitespace-nowrap">
                        Request Service Assessment
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center border border-white/50 hover:border-white text-white font-body font-semibold px-7 py-4 rounded-md text-base transition-colors duration-200 hover:bg-white/10 whitespace-nowrap">
                        Talk to an Engineer
                    </a>
                </div>

            </div>
        </div>
    </div>

</section>

<!-- Electrolux Partner Strip -->
@include('components.partner-strip')

<!-- 2. TRUST ANCHORS — Electrolux credibility line + proof strip -->
@include('components.proof-bar')

<!-- 1.5 LEADERS IN — JLA-style company info -->
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20">
            <h2 class="font-heading font-bold text-navy text-5xl lg:text-6xl xl:text-7xl leading-[1.05]">
                Leaders in commercial laundry support <span class="text-orange">for over 35 years</span>.
            </h2>
            <div class="space-y-6">
                <p class="font-body text-navy text-xl lg:text-2xl leading-relaxed font-semibold">
                    Hundreds of organisations across Ireland trust ILS to supply and look after their commercial laundry equipment across Healthcare, Care, Hospitality, and Industrial sites.
                </p>
                <p class="font-body text-gray-600 text-lg leading-relaxed">
                    We understand that your equipment is business critical, and that you don't have the time to manage it all. We are the one partner you can trust to take care of it — so you can take care of everything else.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- 3. THREE CORE PATHWAYS -->

<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">

        <!-- Heading -->
        <div class="mb-10">
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight">
                Three clear routes into<br>
                <span class="text-orange">the main commercial pathways</span>.
            </h2>
        </div>

        <!-- 3-column card grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">

            <!-- Card 1 — Repairs & Call-outs -->
            <div class="group relative overflow-hidden h-[520px] lg:h-[560px] rounded-2xl cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <img src="/images/healthcare/repairs-callouts.jpg" alt="Repairs and Call-outs"
                     class="absolute inset-0 w-full h-full object-cover object-[center_40%] transition-transform duration-700 group-hover:scale-105">
                <!-- Default overlay: heavy at bottom -->
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.55) 30%, rgba(1,30,65,0.1) 60%, transparent 80%);"></div>
                <!-- Hover overlay: darker overall -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background: rgba(1,30,65,0.96);"></div>

                <!-- Content — anchored bottom always -->
                <div class="absolute inset-0 p-8 flex flex-col justify-end">
                    <!-- Hover-only description + bullets (above title) -->
                    <div class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-64 group-hover:opacity-100 transition-all duration-500">
                        <p class="font-body text-white text-sm leading-relaxed mb-4">
                            Urgent support for breakdowns and performance issues where operational pressure demands a fast, practical route.
                        </p>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-center gap-2 font-body text-white text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>
                                Triage-first breakdown support
                            </li>
                            <li class="flex items-center gap-2 font-body text-white text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>
                                Fast route into contact and follow-up
                            </li>
                            <li class="flex items-center gap-2 font-body text-white text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>
                                Built for critical laundry environments
                            </li>
                        </ul>
                    </div>

                    <!-- Bottom stack: big title, CTA right-aligned below -->
                    <h3 class="font-heading font-extrabold text-white text-4xl lg:text-5xl leading-[1.05] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-5">Repairs &amp; <span class="whitespace-nowrap">Call-outs</span></h3>
                    <div class="flex justify-end">
                        <a href="{{ route('repairs') }}"
                           class="inline-flex items-center justify-center bg-orange hover:bg-orange-dark text-white font-body font-semibold px-5 py-2.5 rounded-md text-sm transition-colors duration-200 whitespace-nowrap">
                            Request Call-out
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2 — Equipment Rental -->
            <div class="group relative overflow-hidden h-[520px] lg:h-[560px] rounded-2xl cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <img src="/images/healthcare/lagoon-advanced-care.webp" alt="Equipment Rental"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.55) 30%, rgba(1,30,65,0.1) 60%, transparent 80%);"></div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background: rgba(1,30,65,0.96);"></div>

                <div class="absolute inset-0 p-8 flex flex-col justify-end">
                    <div class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-64 group-hover:opacity-100 transition-all duration-500">
                        <p class="font-body text-white text-sm leading-relaxed mb-4">
                            Electrolux Professional equipment supplied, installed and supported. Structured rental with maintenance included — managed cost and operational continuity.
                        </p>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-center gap-2 font-body text-white text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>
                                Equipment with service built in
                            </li>
                            <li class="flex items-center gap-2 font-body text-white text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>
                                Predictable monthly cost
                            </li>
                            <li class="flex items-center gap-2 font-body text-white text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>
                                Electrolux Professional standard
                            </li>
                        </ul>
                    </div>

                    <h3 class="font-heading font-extrabold text-white text-4xl lg:text-5xl leading-[1.05] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-5">Equipment Rental</h3>
                    <div class="flex justify-end">
                        <a href="{{ route('rental') }}"
                           class="inline-flex items-center justify-center bg-orange hover:bg-orange-dark text-white font-body font-semibold px-5 py-2.5 rounded-md text-sm transition-colors duration-200 whitespace-nowrap">
                            See Rental Options
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3 — Service Contracts -->
            <div class="group relative overflow-hidden h-[520px] lg:h-[560px] rounded-2xl cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <img src="/images/healthcare/Service%20Contracts.png" alt="Service Contracts"
                     class="absolute inset-0 w-full h-full object-cover object-[center_35%] transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.55) 30%, rgba(1,30,65,0.1) 60%, transparent 80%);"></div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background: rgba(1,30,65,0.96);"></div>

                <div class="absolute inset-0 p-8 flex flex-col justify-end">
                    <div class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-64 group-hover:opacity-100 transition-all duration-500">
                        <p class="font-body text-white text-sm leading-relaxed mb-4">
                            Structured preventive maintenance across three tiers — Core, Priority and Assured. Predictable costs, documented history, fewer unplanned stoppages.
                        </p>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-center gap-2 font-body text-white text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>
                                Three maintenance tiers
                            </li>
                            <li class="flex items-center gap-2 font-body text-white text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>
                                Documented service records
                            </li>
                            <li class="flex items-center gap-2 font-body text-white text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>
                                Fewer unplanned stoppages
                            </li>
                        </ul>
                    </div>

                    <h3 class="font-heading font-extrabold text-white text-4xl lg:text-5xl leading-[1.05] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-5">Service Contracts</h3>
                    <div class="flex justify-end">
                        <a href="{{ route('service-contracts') }}"
                           class="inline-flex items-center justify-center bg-orange hover:bg-orange-dark text-white font-body font-semibold px-5 py-2.5 rounded-md text-sm transition-colors duration-200 whitespace-nowrap">
                            View Contracts
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 4. SECTOR ROUTING TABS -->
@include('components.sector-switcher')

<!-- 6. EQUIPMENT TEASER — Product Category Grid -->
<section class="py-20 lg:py-32 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <!-- Header -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-14">
            <div>
                <p class="font-body font-semibold text-orange text-xs uppercase tracking-[0.22em] mb-4">Browse by type</p>
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl">Equipment Categories</h2>
                <p class="font-body text-gray-500 text-lg mt-4 max-w-xl">Commercial laundry equipment supplied, installed and supported across the Republic of Ireland.</p>
            </div>
            <a href="{{ route('equipment') }}"
               class="inline-flex self-start lg:self-auto items-center gap-2 border border-navy/20 hover:border-navy text-navy/60 hover:text-navy font-body font-semibold px-5 py-3 text-xs uppercase tracking-wide transition-all duration-200 whitespace-nowrap">
                Browse All Equipment
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

        {{-- 4 equipment cards --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
                ['img' => 'line6000-barrier-washer',  'name' => 'Barrier Washers',      'desc' => 'For controlled dirty-side and clean-side handling.',                  'scale' => '1.55'],
                ['img' => 'commercialwasher',         'name' => 'Commercial Washers',    'desc' => 'For broader wash routes and capacity planning.',                       'scale' => '1.75'],
                ['img' => 'line6000-tumble-dryer',    'name' => 'Tumble Dryers',         'desc' => 'For post-wash continuity and room flow.',                              'scale' => '1'],
                ['img' => 'line6000-ironer',          'name' => 'Ironers & Flatwork',    'desc' => 'For finishing, hygiene presentation, and clean-route continuity.',     'scale' => '1.4'],
            ] as $eq)
            <div class="bg-white border border-gray-100 rounded-xl p-8 flex flex-col gap-6">
                <div class="min-h-[112px]">
                    <p class="font-heading font-bold text-navy text-2xl leading-snug mb-2">{{ $eq['name'] }}</p>
                    <p class="font-body text-[#148af4] text-base leading-relaxed">{{ $eq['desc'] }}</p>
                </div>
                <div class="flex items-center justify-center h-96 rounded-lg overflow-hidden bg-white">
                    <img src="/images/equipment/{{ $eq['img'] }}.webp"
                         alt="{{ $eq['name'] }}"
                         class="max-h-full max-w-full object-contain"
                         style="transform: scale({{ $eq['scale'] }}); transform-origin: center;">
                </div>
                <a href="{{ route('equipment') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy-dark text-white font-heading font-bold text-base px-5 py-4 rounded-lg transition-colors mt-auto">
                    View Equipment
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>
            @endforeach
        </div>

    </div>
</section>

@include('components.service-contracts-strip')

<!-- 7. PROOF — TESTIMONIALS -->
@include('components.testimonials')

<!-- 7.5 PARTNERSHIP STRIP — "We design… together" -->
@include('components.cta-combined-banner')

<!-- 8. FINAL CTA + SHORT FORM -->
<section class="py-16 lg:py-24 bg-navy">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">
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
