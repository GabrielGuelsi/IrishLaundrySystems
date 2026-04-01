@extends('layouts.app')

@section('meta')
<meta name="description" content="ILS provides engineering-led commercial laundry support for hotels and hospitality operations across Ireland — service contracts, rapid response and equipment support to protect guest operations.">
@endsection

@section('content')

@include('components.sector-tabs')

<!-- 1. HERO -->
<section class="bg-navy py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl">
            <div class="flex items-center gap-2 mb-5">
                <a href="{{ route('sectors') }}" class="text-gray-400 hover:text-gray-200 text-sm font-body transition-colors">Sectors</a>
                <svg class="w-3 h-3 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                <span class="text-gray-300 text-sm font-body">Hospitality</span>
            </div>
            <p class="text-sm font-body font-semibold text-orange uppercase tracking-wide mb-4">Hospitality sector</p>
            <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-5">
                When the laundry room stops, guest operations feel it first.
            </h1>
            <p class="font-body text-gray-300 text-lg leading-relaxed mb-8">
                Engineering-led laundry support for hotels and hospitality operators — structured maintenance to prevent failure during peak periods, and fast response when something does go wrong.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200"
                   data-ga-cta="hospitality_discuss_contract">
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
    </div>
</section>

<!-- 2. PROOF BAR -->
@include('components.proof-bar')

<!-- 3. PAIN POINTS + CONTINUITY LOGIC -->
<section class="py-16 lg:py-24 bg-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-12">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-5">What hospitality operators tell us</h2>
            <p class="font-body text-gray-500 leading-relaxed mb-8">
                When hotel and hospitality teams come to ILS, they are typically dealing with one or more of these:
            </p>
            <ul class="space-y-4">
                @foreach ([
                    'A machine breakdown during high occupancy that delayed housekeeping and affected room turnaround',
                    'A service provider with slow response times that didn\'t treat hotel operations as time-sensitive',
                    'No planned maintenance — only reactive calls when something fails',
                    'Limited backup capacity, so a single equipment failure cascades quickly across the operation',
                    'Inconsistent support across multiple properties under the same ownership',
                    'Uncertainty about what is covered under existing service arrangements',
                ] as $item)
                <li class="flex items-start gap-3">
                    <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-navy/40 mt-2"></span>
                    <span class="font-body text-gray-700 text-sm leading-relaxed">{{ $item }}</span>
                </li>
                @endforeach
            </ul>
        </div>

        <div class="border-t border-border pt-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">
                <div>
                    <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-5">Uptime is part of the guest experience</h2>
                    <p class="font-body text-gray-600 leading-relaxed mb-4">
                        In a hotel or hospitality property running in-house laundry, the laundry room is an operational dependency. Room linen, F&B textiles and staff uniforms must move through the cycle continuously — without interruption to housekeeping schedules.
                    </p>
                    <p class="font-body text-gray-600 leading-relaxed">
                        Equipment failure during peak occupancy — a weekend, a conference, or a summer season — has a direct cost: delayed room readiness, emergency outsourcing, and staff pressure that affects guest-facing service.
                    </p>
                </div>
                <div>
                    <p class="font-body text-gray-600 leading-relaxed mb-4">
                        ILS structures our hospitality support around planned prevention and fast reactive response. That means scheduled maintenance before peak periods, priority call-out when faults occur, and a service record that gives management visibility across the operation.
                    </p>
                    <p class="font-body text-gray-600 leading-relaxed">
                        For properties with multiple machines or multiple sites, we can structure contracts to cover the full operation under a single consistent arrangement.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. SERVICE-PATHWAY FIT BLOCK -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-10">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-3">How ILS supports hospitality operations</h2>
            <p class="font-body text-gray-500 text-lg max-w-2xl">Our services mapped to the demands of hotel and hospitality laundry.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

            <!-- Service Contracts -->
            <div class="bg-bg border border-border rounded-xl p-6 flex flex-col card-hover">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Service Contracts</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">Scheduled preventive maintenance with documented service reports. Planned visits keep equipment in condition and reduce the likelihood of failure during high-occupancy periods.</p>
                <a href="{{ route('service-contracts') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    View service contracts
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <!-- Repairs & Call-outs -->
            <div class="bg-bg border border-border rounded-xl p-6 flex flex-col card-hover">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Repairs &amp; Call-outs</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">When a fault occurs, we triage quickly and dispatch engineers. We aim to be on site and working on the problem — not just acknowledging a ticket. Genuine Electrolux Professional parts support better first-fix rates.</p>
                <a href="{{ route('repairs') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Repairs &amp; call-outs
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <!-- Equipment Rental -->
            <div class="bg-bg border border-border rounded-xl p-6 flex flex-col card-hover">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Equipment Rental</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">Rental provides access to commercial laundry equipment on a structured arrangement — inclusive of maintenance support. An option for properties looking to replace aging equipment or add capacity without a capital purchase.</p>
                <a href="{{ route('rental') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Equipment rental
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <!-- Multi-Property Support -->
            <div class="bg-bg border border-border rounded-xl p-6 flex flex-col card-hover">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Multi-Property Support</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">Hotel groups and hospitality operators managing multiple properties can structure a single service arrangement across all sites. Consistent maintenance standards, consolidated reporting, and one point of contact for the full portfolio.</p>
                <a href="{{ route('contact') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Discuss group contracts
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- 5. PROOF — HOSPITALITY TESTIMONIALS ⚠️ PLACEHOLDER — replace with real approved quotes before go-live -->
<section class="py-16 lg:py-20 bg-navy">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-heading font-bold text-white text-2xl lg:text-3xl mb-10">What hospitality operators say</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div class="bg-navy-light border border-white/10 rounded-xl p-6 lg:p-8 flex flex-col">
                <blockquote class="flex-1">
                    <p class="font-body text-gray-300 text-base leading-relaxed">
                        &ldquo;We had a washer fail on a Friday before a full weekend. ILS had an engineer on site the same day and the machine was back running before the evening shift. That kind of response matters when you have 200 rooms to turn.&rdquo;
                    </p>
                </blockquote>
                <div class="mt-6 pt-5 border-t border-white/10">
                    <cite class="block text-sm font-body font-semibold text-white not-italic">Head of Housekeeping</cite>
                    <span class="text-xs text-gray-400 font-body">Four-Star Hotel, Leinster</span>
                </div>
            </div>

            <div class="bg-navy-light border border-white/10 rounded-xl p-6 lg:p-8 flex flex-col">
                <blockquote class="flex-1">
                    <p class="font-body text-gray-300 text-base leading-relaxed">
                        &ldquo;We moved to a service contract after too many reactive calls. Having planned maintenance visits means we know the machines are being looked at before problems develop — not just when something breaks.&rdquo;
                    </p>
                </blockquote>
                <div class="mt-6 pt-5 border-t border-white/10">
                    <cite class="block text-sm font-body font-semibold text-white not-italic">General Manager</cite>
                    <span class="text-xs text-gray-400 font-body">Hotel Group, Munster</span>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 6. EQUIPMENT RELEVANCE BLOCK -->
<section class="py-16 lg:py-20 bg-bg border-y border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-10">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-3">Equipment suited to hotel operations</h2>
            <p class="font-body text-gray-500 text-lg">ILS supplies and supports commercial laundry equipment matched to the throughput and operational demands of hospitality properties.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-10">
            @foreach([
                ['High-Capacity Washers', 'Throughput-matched machines for continuous linen cycles — sized to the volume of room linen, F&B textiles and staff uniforms your property processes daily.'],
                ['Commercial Tumble Dryers', 'Fast-cycle drying to keep linen moving through the operation — essential for properties with limited holding capacity and tight room turnaround times.'],
                ['Ironers &amp; Finishing Equipment', 'Flatwork ironers and finishing equipment for properties presenting linen to a consistent visual standard across rooms and F&B service.'],
            ] as [$title, $desc])
            <div class="bg-white border border-border rounded-xl p-6">
                <h3 class="font-heading font-semibold text-navy text-base mb-2">{!! $title !!}</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
        <p class="font-body text-gray-500 text-sm mb-6">ILS is an Authorised Electrolux Professional Partner — providing access to manufacturer-grade equipment, genuine OEM parts and technical support. Equipment scope is confirmed per property during the assessment process.</p>
        <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
            Browse the equipment library
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
        </a>
    </div>
</section>

<!-- 7. FINAL CTA -->
@include('components.cta-band', [
    'heading'     => 'Talk to ILS about your hospitality operation.',
    'subheading'  => 'We will assess your property, review the current setup, and propose a service structure matched to your occupancy profile and operational requirements.',
    'primaryText' => 'Discuss Contract Options',
    'primaryHref' => route('contact'),
])

@endsection
