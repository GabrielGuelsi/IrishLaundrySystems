@extends('layouts.app')

@section('meta')
<meta name="description" content="ILS provides engineering-led commercial laundry support for hotels and hospitality operations across Ireland — service contracts, rapid response and equipment support to protect guest operations.">
@endsection

@section('content')

@include('components.sector-tabs')

<!-- 1. HERO -->
<section class="bg-navy py-20 lg:py-28">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <div class="reveal reveal-left">
                <x-pretitle label="Hospitality Laundry Support" />
                <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-6">
                    Guest operations run on laundry. When it stops, everything stops.
                </h1>
                <p class="font-body text-gray-300 text-lg leading-relaxed mb-8">
                    Engineering-led laundry support for hotels and hospitality operators — structured maintenance to prevent failure during peak periods, and fast response when something does go wrong.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Discuss Contract Options
                    </a>
                    <a href="tel:+353000000000"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white/40 hover:border-white text-white font-body font-semibold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                        </svg>
                        Call an Engineer
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-3 reveal reveal-right">
                <div class="col-span-2 rounded-2xl overflow-hidden h-56 bg-white/5">
                    <img src="/images/hospitality/hero-main.jpg" alt="Hospitality laundry operation" class="w-full h-full object-cover" onerror="this.style.display='none'">
                </div>
                <div class="rounded-2xl overflow-hidden h-40 bg-white/5">
                    <img src="/images/hospitality/hero-panel.jpg" alt="Laundry control panel" class="w-full h-full object-cover" onerror="this.style.display='none'">
                </div>
                <div class="bg-white/5 border border-white/10 rounded-2xl p-5 flex flex-col justify-center h-40">
                    <p class="font-heading font-bold text-white text-sm leading-snug">Hotels and hospitality properties running in-house laundry cannot afford unplanned downtime during peak occupancy.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 2. PROOF BAR -->
@include('components.proof-bar')

<!-- 3. SPLIT STATEMENT -->
<section class="py-16 lg:py-24 bg-white border-b border-border">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-6xl leading-tight">
                    We'll keep your laundry room running — whatever the season.
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-700 text-xl leading-relaxed mb-4">
                    ILS supports hospitality operations across Ireland — planned maintenance before peak periods, fast response when faults occur, and a service structure built around your occupancy.
                </p>
                <p class="font-body text-gray-500 leading-relaxed mb-8">
                    Whatever the job calls for, we'll take care of it.
                </p>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy-dark text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    Discuss a service contract
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- 4. WHY HOSPITALITY IS DIFFERENT -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <!-- Left: headline + bullets + CTA -->
            <div class="reveal reveal-left">
                <x-pretitle label="Why Hospitality Laundry Is Different" />
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-5xl leading-tight mb-3">
                    Why do so many hotels choose an ILS service contract?
                </h2>
                <p class="font-body text-gray-500 text-sm mb-8">The main reasons are:</p>

                <ul class="space-y-5 mb-10">
                    @foreach([
                        'Protects room linen turnaround during peak occupancy and busy seasons.',
                        'Covers room linen, F&B textiles, and staff uniforms under one maintenance arrangement.',
                        'Structured preventive maintenance before peak periods reduces failure risk.',
                        'Priority response when breakdowns occur — not just during office hours.',
                        'Multi-property arrangements available for hotel groups and hospitality operators.',
                    ] as $point)
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                        </svg>
                        <span class="font-body text-gray-600 text-sm leading-relaxed">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>

                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2 border-2 border-navy text-navy hover:bg-navy hover:text-white font-body font-bold px-7 py-3.5 rounded-lg text-sm transition-colors duration-200">
                    Talk to our team about your property →
                </a>
            </div>

            <!-- Right: image grid — 2 stacked left, 1 tall right -->
            <div class="grid grid-cols-2 gap-3 reveal reveal-right">
                <div class="flex flex-col gap-3">
                    <div class="rounded-2xl overflow-hidden h-52 bg-gray-200">
                        <img src="/images/hospitality/hotel-linen.jpg" alt="Hotel linen" class="w-full h-full object-cover" onerror="this.style.display='none'">
                    </div>
                    <div class="rounded-2xl overflow-hidden h-52 bg-gray-200">
                        <img src="/images/hospitality/hotel-room.jpg" alt="Hotel room" class="w-full h-full object-cover" onerror="this.style.display='none'">
                    </div>
                </div>
                <div class="rounded-2xl overflow-hidden h-full min-h-[424px] bg-gray-200">
                    <img src="/images/hospitality/engineer.jpg" alt="ILS engineer on site" class="w-full h-full object-cover" onerror="this.style.display='none'">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 5. STATEMENT SECTION -->
<section class="relative min-h-[480px] flex items-center py-20 lg:py-28 overflow-hidden bg-navy">
    <div class="absolute inset-0" style="background-image: url('/images/hospitality/statement-bg.jpg'); background-size: cover; background-position: center;">
        <div class="absolute inset-0" style="background: linear-gradient(90deg,rgba(1,30,65,0.93) 0%,rgba(1,30,65,0.80) 55%,rgba(1,30,65,0.30) 100%);"></div>
    </div>
    <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="max-w-2xl reveal reveal-left">
            <h2 class="font-heading font-bold text-white text-4xl lg:text-6xl leading-tight mb-8">
                Laundry is part of the guest experience. Get it wrong and everyone notices.
            </h2>
            <ul class="space-y-4 mb-10">
                @foreach([
                    'Consistent linen supply protects room readiness and housekeeping schedules.',
                    'No emergency outsourcing costs during peak occupancy or high-demand weekends.',
                    'Planned maintenance means faults are prevented, not just repaired.',
                    'One service partner for equipment, contracts, and response across your property.',
                ] as $point)
                <li class="flex items-start gap-3 font-body text-gray-300 text-base leading-relaxed">
                    <span class="mt-1.5 w-2 h-2 rounded-full bg-[#148af4] flex-shrink-0"></span>
                    {{ $point }}
                </li>
                @endforeach
            </ul>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                Discuss Contract Options
            </a>
        </div>
    </div>
</section>

<!-- 6. HOW ILS SUPPORTS HOSPITALITY — 4 SERVICE CARDS -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mb-12 reveal">
            <x-pretitle label="Hospitality Services" />
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-3">
                How ILS Supports Hospitality
            </h2>
            <p class="font-body text-gray-500 leading-relaxed">
                Our services mapped to the demands of hotel and hospitality laundry operations.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

            <!-- Service Contracts -->
            <div class="bg-bg border border-border rounded-2xl p-6 flex flex-col card-hover reveal" style="transition-delay: 0.0s;">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Service Contracts</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">Scheduled preventive maintenance with documented service reports — planned before peak periods, not just when something fails.</p>
                <a href="{{ route('service-contracts') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    View service contracts
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <!-- Repairs & Call-outs -->
            <div class="bg-bg border border-border rounded-2xl p-6 flex flex-col card-hover reveal" style="transition-delay: 0.1s;">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Repairs &amp; Call-outs</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">Fast engineer dispatch when faults occur — carrying genuine Electrolux Professional parts and focused on first-visit resolution.</p>
                <a href="{{ route('repairs') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Repairs &amp; call-outs
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <!-- Equipment Rental -->
            <div class="bg-bg border border-border rounded-2xl p-6 flex flex-col card-hover reveal" style="transition-delay: 0.2s;">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Equipment Rental</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">Access to commercial laundry equipment on a structured arrangement — inclusive of maintenance support, without capital outlay.</p>
                <a href="{{ route('rental') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Equipment rental
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <!-- Multi-Property Support -->
            <div class="bg-bg border border-border rounded-2xl p-6 flex flex-col card-hover reveal" style="transition-delay: 0.3s;">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Multi-Property Support</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">Hotel groups can structure one service arrangement across all properties — consistent standards, consolidated reporting, one contact.</p>
                <a href="{{ route('contact') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Discuss group contracts
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- 7. EQUIPMENT -->
<section class="py-16 lg:py-24 bg-bg border-y border-border">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="max-w-2xl mb-12 reveal">
            <x-pretitle label="Hospitality Equipment" />
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-3">
                Equipment matched to the demands of hotel laundry operations.
            </h2>
            <p class="font-body text-gray-500 leading-relaxed">
                Electrolux Professional equipment — specified, installed, and maintained by ILS.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-5 mb-10">

            <div class="bg-bg border border-border rounded-2xl overflow-hidden flex flex-col card-hover reveal" style="transition-delay: 0.0s;">
                <div class="h-48 bg-bg flex items-center justify-center border-b border-border"><span class="font-body text-xs text-gray-400">Equipment image</span></div>
                <div class="p-5 flex flex-col flex-1">
                    <h3 class="font-heading font-bold text-navy text-base mb-2">High-Capacity Washers</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed flex-1">Throughput-matched machines for continuous linen cycles — sized to room linen, F&amp;B textiles, and uniform volume.</p>
                    <a href="{{ route('equipment') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                        View equipment
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
            </div>

            <div class="bg-bg border border-border rounded-2xl overflow-hidden flex flex-col card-hover reveal" style="transition-delay: 0.1s;">
                <div class="h-48 bg-bg flex items-center justify-center border-b border-border"><span class="font-body text-xs text-gray-400">Equipment image</span></div>
                <div class="p-5 flex flex-col flex-1">
                    <h3 class="font-heading font-bold text-navy text-base mb-2">Commercial Tumble Dryers</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed flex-1">Fast-cycle drying for tight room turnaround times — essential for properties with high occupancy and limited linen holding.</p>
                    <a href="{{ route('equipment') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                        View equipment
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
            </div>

            <div class="bg-bg border border-border rounded-2xl overflow-hidden flex flex-col card-hover reveal" style="transition-delay: 0.2s;">
                <div class="h-48 bg-bg flex items-center justify-center border-b border-border"><span class="font-body text-xs text-gray-400">Equipment image</span></div>
                <div class="p-5 flex flex-col flex-1">
                    <h3 class="font-heading font-bold text-navy text-base mb-2">Flatwork Ironers</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed flex-1">Flatwork ironing for properties presenting linen to a consistent visual standard across rooms and F&amp;B service.</p>
                    <a href="{{ route('equipment') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                        View equipment
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
            </div>

            <div class="bg-bg border border-border rounded-2xl overflow-hidden flex flex-col card-hover reveal" style="transition-delay: 0.3s;">
                <div class="h-48 bg-bg flex items-center justify-center border-b border-border"><span class="font-body text-xs text-gray-400">Equipment image</span></div>
                <div class="p-5 flex flex-col flex-1">
                    <h3 class="font-heading font-bold text-navy text-base mb-2">Washer-Extractors</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed flex-1">High-spin extraction for faster drying cycles — reducing energy cost and improving linen throughput.</p>
                    <a href="{{ route('equipment') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                        View equipment
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
            </div>

        </div>

        <div class="flex items-center gap-4">
            <a href="{{ route('equipment') }}"
               class="inline-flex items-center gap-2 bg-navy hover:bg-steel text-white font-body font-bold px-6 py-3 rounded-lg text-sm transition-colors duration-200">
                Browse all hospitality equipment
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
            <a href="{{ route('contact') }}" class="font-body text-sm text-gray-500 hover:text-navy transition-colors">
                Not sure what you need? Talk to an engineer →
            </a>
        </div>

    </div>
</section>

<!-- 8. PROOF POINTS -->
<section class="py-16 lg:py-20 bg-white border-y border-border">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-white border border-border rounded-2xl p-6 reveal" style="transition-delay: 0.0s;">
                <p class="font-heading font-bold text-navy text-3xl mb-2">Peak Season</p>
                <p class="font-body text-gray-500 text-sm leading-relaxed">Planned maintenance before your busiest weeks — not after.</p>
            </div>
            <div class="bg-navy rounded-2xl p-6 reveal" style="transition-delay: 0.1s;">
                <p class="font-heading font-bold text-white text-3xl mb-2">Same Day</p>
                <p class="font-body text-gray-300 text-sm leading-relaxed">Our target: engineer on site and working — not just acknowledging a ticket.</p>
            </div>
            <div class="bg-white border border-border rounded-2xl p-6 reveal" style="transition-delay: 0.2s;">
                <p class="font-heading font-bold text-navy text-3xl mb-2">Multi-Property</p>
                <p class="font-body text-gray-500 text-sm leading-relaxed">One contract arrangement covering all sites in your group.</p>
            </div>
            <div class="bg-navy rounded-2xl p-6 reveal" style="transition-delay: 0.3s;">
                <p class="font-heading font-bold text-white text-3xl mb-2">Zero Surprises</p>
                <p class="font-body text-gray-300 text-sm leading-relaxed">Documented service records after every visit — no chasing required.</p>
            </div>
        </div>
    </div>
</section>

<!-- 9. HOSPITALITY ROUTE -->
<section class="py-16 lg:py-24 bg-bg">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mb-12 reveal">
            <x-pretitle label="Hospitality Route Within ILS" />
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl">
                Equipment, contracts, and response — one hospitality support system.
            </h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

            <div class="bg-white border border-border rounded-2xl p-6 flex flex-col card-hover reveal" style="transition-delay: 0.1s;">
                <p class="text-xs font-body font-bold uppercase tracking-widest text-gray-400 mb-3">Equipment Route</p>
                <h3 class="font-heading font-bold text-navy text-lg mb-2">Laundry equipment for hotel operations</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed flex-1">Machines matched to hospitality volume and linen standards.</p>
                <a href="{{ route('equipment') }}" class="mt-6 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Explore Hospitality Equipment
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <div class="bg-white border border-border rounded-2xl p-6 flex flex-col card-hover reveal" style="transition-delay: 0.2s;">
                <p class="text-xs font-body font-bold uppercase tracking-widest text-gray-400 mb-3">Service Route</p>
                <h3 class="font-heading font-bold text-navy text-lg mb-2">Service contracts for hospitality</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed flex-1">Planned maintenance and priority response — structured around your occupancy profile.</p>
                <a href="{{ route('service-contracts') }}" class="mt-6 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Request Contract Review
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <div class="bg-white border border-border rounded-2xl p-6 flex flex-col card-hover reveal" style="transition-delay: 0.3s;">
                <p class="text-xs font-body font-bold uppercase tracking-widest text-gray-400 mb-3">Engineering Route</p>
                <h3 class="font-heading font-bold text-navy text-lg mb-2">Site assessment and engineering support</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed flex-1">A direct path to an engineering conversation about your specific property.</p>
                <a href="{{ route('contact') }}" class="mt-6 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Talk to an Engineer
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- 10. ASSESSMENT FORM -->
<section id="hospitality-assessment" class="py-16 lg:py-24 bg-bg">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 items-stretch">

            <div class="bg-navy rounded-2xl p-8 flex flex-col reveal reveal-left">
                <div class="flex items-center gap-2 mb-5">
                    <span class="w-2 h-2 rounded-full bg-[#148af4] flex-shrink-0"></span>
                    <span class="font-body text-xs font-bold uppercase tracking-widest text-gray-400">Hospitality Assessment</span>
                </div>
                <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl mb-4">
                    Request a hospitality assessment.
                </h2>
                <p class="font-body text-gray-400 text-sm leading-relaxed mb-8 flex-1">
                    Property profile, equipment review, and a service structure matched to your occupancy.
                </p>
                <div class="flex flex-col sm:flex-row gap-3">
                    <button form="hospitality-form" type="submit"
                        class="inline-flex items-center justify-center bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-6 py-3 rounded-lg text-sm transition-colors duration-200">
                        Submit Request
                    </button>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center border border-white/30 hover:border-white text-white font-body font-semibold px-6 py-3 rounded-lg text-sm transition-colors duration-200 hover:bg-white/10">
                        Talk to an Engineer
                    </a>
                </div>
            </div>

            <div class="bg-white border border-border rounded-2xl p-8 reveal reveal-right">
                <h3 class="font-heading font-bold text-navy text-xl mb-1">Request Hospitality Assessment</h3>
                <p class="font-body text-gray-500 text-sm mb-6">Only the information needed — property, contact, and follow-up priority.</p>
                <form id="hospitality-form" action="{{ route('contact') }}" method="POST" class="space-y-3">
                    @csrf
                    <div class="grid grid-cols-2 gap-3">
                        <input type="text" name="name" required placeholder="Full Name"
                            class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors">
                        <input type="text" name="property_name" placeholder="Property Name"
                            class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors">
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <input type="tel" name="phone" placeholder="Phone Number"
                            class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors">
                        <input type="email" name="email" required placeholder="Email Address"
                            class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors">
                    </div>
                    <textarea name="message" rows="4" placeholder="What do you need help with?"
                        class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors resize-none"></textarea>
                    <button type="submit"
                        class="w-full bg-navy hover:bg-steel text-white font-body font-bold px-8 py-3.5 rounded-lg text-sm transition-colors duration-200">
                        Submit Request
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

<!-- 11. CTA BAND -->
@include('components.cta-band', [
    'heading'     => 'Talk to ILS about your hospitality operation.',
    'subheading'  => 'We will assess your property, review the current setup, and propose a service structure matched to your occupancy profile.',
    'primaryText' => 'Discuss Contract Options',
    'primaryHref' => route('contact'),
])

@endsection
