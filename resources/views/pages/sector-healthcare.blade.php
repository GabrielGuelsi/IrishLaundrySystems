@extends('layouts.app')

@section('meta')
<meta name="description" content="ILS provides engineering-led commercial laundry support for healthcare operations across Ireland — service contracts, barrier washer maintenance and priority response.">
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
                <span class="text-gray-300 text-sm font-body">Healthcare</span>
            </div>
            <p class="text-sm font-body font-semibold text-orange uppercase tracking-wide mb-4">Healthcare sector</p>
            <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-5">
                Healthcare laundry operations can't afford downtime.
            </h1>
            <p class="font-body text-gray-300 text-lg leading-relaxed mb-8">
                Engineering-led laundry support for healthcare operations — prevention first, priority response when it matters, and documentation that holds up to audit.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('request-assessment') }}"
                   class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200"
                   data-ga-cta="healthcare_request_assessment">
                    Request Healthcare Assessment
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

<!-- 3. PAIN POINTS + WHY UPTIME MATTERS -->
<section class="py-16 lg:py-24 bg-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-12">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-5">What healthcare operators tell us</h2>
            <p class="font-body text-gray-500 leading-relaxed mb-8">
                When facilities managers in healthcare come to ILS, they're typically dealing with one or more of these:
            </p>
            <ul class="space-y-4">
                @foreach ([
                    'A breakdown during a busy period that disrupted ward linen or patient laundry workflow',
                    'A service provider that wasn\'t responsive enough or didn\'t understand the urgency of healthcare operations',
                    'No documented maintenance history to support audit or compliance review',
                    'Aging equipment generating increasing reactive repair costs',
                    'Multi-site contracts that are difficult to manage or inconsistently delivered',
                    'Lack of clarity about what is and isn\'t covered under existing arrangements',
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
                    <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-5">Why uptime matters in healthcare</h2>
                    <p class="font-body text-gray-600 leading-relaxed mb-4">
                        In a hospital, nursing home or care facility, laundry is a hygiene-critical function. Patient linen, theatre textiles and staff uniforms must move through the laundry cycle to the required standard, without interruption.
                    </p>
                    <p class="font-body text-gray-600 leading-relaxed">
                        Equipment failure directly affects infection control workflows, patient dignity and — in some settings — regulatory compliance. This is not a sector where deferred response is acceptable.
                    </p>
                </div>
                <div>
                    <p class="font-body text-gray-600 leading-relaxed mb-4">
                        ILS structures our healthcare support — particularly at Priority and Assured tier — around the operational reality that laundry downtime in these environments carries real risk.
                    </p>
                    <p class="font-body text-gray-600 leading-relaxed">
                        That means prevention programmes that are documented and consistent, call-out response that treats healthcare as priority, and service records that hold up to audit scrutiny.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. HOW ILS SUPPORTS HEALTHCARE — with distinct icons and CTAs -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-10">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-3">How ILS supports healthcare operations</h2>
            <p class="font-body text-gray-500 text-lg max-w-2xl">Our services mapped to the specific demands of healthcare laundry.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

            <!-- Service Contracts -->
            <div class="bg-bg border border-border rounded-xl p-6 flex flex-col card-hover">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Service Contracts</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">Scheduled preventive maintenance with documented service reports. Three tiers: Core, Priority and Assured — matched to your risk profile and operational dependency.</p>
                <a href="{{ route('service-contracts') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    View contracts
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <!-- Compliance Documentation -->
            <div class="bg-bg border border-border rounded-xl p-6 flex flex-col card-hover">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Compliance Documentation</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">Written service records and maintenance logs for every visit — supporting audit, inspection and governance processes.</p>
                <a href="{{ route('service-contracts') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    About service contracts
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <!-- Priority Response -->
            <div class="bg-bg border border-border rounded-xl p-6 flex flex-col card-hover">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Priority Response</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">Healthcare customers at Priority and Assured tiers receive priority triage and dispatch. Response targets are agreed at contract stage based on your site location and operational requirements.</p>
                <a href="{{ route('repairs') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Repairs &amp; call-outs
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <!-- Multi-Site Contracts -->
            <div class="bg-bg border border-border rounded-xl p-6 flex flex-col card-hover">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Multi-Site Contracts</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">Group service contracts covering multiple hospital or care sites under a single arrangement — consistent standards and reporting across all locations.</p>
                <a href="{{ route('contact') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Talk to us
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <!-- Genuine Parts -->
            <div class="bg-bg border border-border rounded-xl p-6 flex flex-col card-hover">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Genuine Parts</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">As an Authorised Electrolux Professional Partner, we have access to genuine OEM parts — important for equipment longevity and warranty purposes.</p>
                <a href="{{ route('electrolux') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Electrolux partnership
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <!-- Barrier Washer Support -->
            <div class="bg-bg border border-border rounded-xl p-6 flex flex-col card-hover">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 010 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 010-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Barrier Washer Support</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">Specialist knowledge of barrier washer operation and maintenance — critical in healthcare environments for sluice and infection control workflows.</p>
                <a href="{{ route('equipment') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    View equipment
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

        </div>
    </div>
</section>

{{-- Service tier comparison removed — tier names and inclusions require client approval before publishing. --}}

<!-- 5. PROOF — HEALTHCARE TESTIMONIALS ⚠️ PLACEHOLDER — replace with real approved quotes before go-live -->
<section class="py-16 lg:py-20 bg-navy">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-heading font-bold text-white text-2xl lg:text-3xl mb-10">What healthcare customers say</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="bg-navy-light border border-white/10 rounded-xl p-6 lg:p-8 flex flex-col">
                <blockquote class="flex-1">
                    <p class="font-body text-gray-300 text-base leading-relaxed">
                        &ldquo;We had recurring issues with our previous provider — slow response, no paperwork after visits. ILS came in, assessed everything on day one, and we've had documented service reports from every visit since.&rdquo;
                    </p>
                </blockquote>
                <div class="mt-6 pt-5 border-t border-white/10">
                    <cite class="block text-sm font-body font-semibold text-white not-italic">Facilities Manager</cite>
                    <span class="text-xs text-gray-400 font-body">Public Hospital, Dublin</span>
                </div>
            </div>

            <div class="bg-navy-light border border-white/10 rounded-xl p-6 lg:p-8 flex flex-col">
                <blockquote class="flex-1">
                    <p class="font-body text-gray-300 text-base leading-relaxed">
                        &ldquo;Managing laundry across five nursing homes under one contract was a problem before ILS. Now we have consistent standards and one point of contact across all sites.&rdquo;
                    </p>
                </blockquote>
                <div class="mt-6 pt-5 border-t border-white/10">
                    <cite class="block text-sm font-body font-semibold text-white not-italic">Operations Director</cite>
                    <span class="text-xs text-gray-400 font-body">Care Group, Munster</span>
                </div>
            </div>

            <div class="bg-navy-light border border-white/10 rounded-xl p-6 lg:p-8 flex flex-col">
                <blockquote class="flex-1">
                    <p class="font-body text-gray-300 text-base leading-relaxed">
                        &ldquo;Our HIQA inspection was coming up and we had gaps in our maintenance records. ILS got us up to date quickly and showed us how to maintain that going forward.&rdquo;
                    </p>
                </blockquote>
                <div class="mt-6 pt-5 border-t border-white/10">
                    <cite class="block text-sm font-body font-semibold text-white not-italic">Compliance Officer</cite>
                    <span class="text-xs text-gray-400 font-body">Private Nursing Home, Leinster</span>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- FAQs removed — content requires client approval before publishing. --}}

<!-- 7. EQUIPMENT RELEVANCE BLOCK -->
<section class="py-16 lg:py-20 bg-bg border-y border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-10">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-3">Equipment that fits healthcare</h2>
            <p class="font-body text-gray-500 text-lg">The right machine matters as much as the right service. ILS supplies and supports commercial laundry equipment suited to healthcare environments.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-10">
            @foreach([
                ['Barrier Washer-Extractors', 'Physical separation of soiled and clean zones — essential for infection control in hospitals and care facilities.'],
                ['High-Capacity Washers', 'Throughput-matched machines for high-volume linen cycles in larger healthcare sites and laundry rooms.'],
                ['Commercial Dryers & Ironers', 'Full-cycle support — from wash through to finishing — for ward linen, patient clothing and theatre textiles.'],
            ] as [$title, $desc])
            <div class="bg-white border border-border rounded-xl p-6">
                <h3 class="font-heading font-semibold text-navy text-base mb-2">{{ $title }}</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
        <p class="font-body text-gray-500 text-sm mb-6">ILS is an Authorised Electrolux Professional Partner — giving access to manufacturer-grade equipment, genuine parts and technical documentation. Equipment scope is confirmed per site during the assessment process.</p>
        <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
            Browse the equipment library
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
        </a>
    </div>
</section>

<!-- 8. EQUIPMENT & RENTAL CROSS-LINK -->
<section class="py-12 bg-white border-b border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="font-heading font-semibold text-navy text-lg mb-6">Also relevant for healthcare operators</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <a href="{{ route('equipment') }}" class="group flex items-start gap-5 bg-bg border border-border rounded-xl p-6 hover:border-navy/30 transition-colors">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-heading font-semibold text-navy text-base mb-1 group-hover:text-steel transition-colors">Equipment Sales</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Browse the ILS equipment library — washers, dryers, barrier washers, ironers and finishing equipment.</p>
                </div>
            </a>
            <a href="{{ route('rental') }}" class="group flex items-start gap-5 bg-bg border border-border rounded-xl p-6 hover:border-navy/30 transition-colors">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-heading font-semibold text-navy text-base mb-1 group-hover:text-steel transition-colors">Equipment Rental</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Commercial laundry equipment on a structured rental arrangement — inclusive of maintenance and support.</p>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- 9. FINAL CTA -->
@include('components.cta-band', [
    'heading' => 'Talk to an ILS engineer about your healthcare operation.',
    'subheading' => 'We will assess your site, review your current setup, and propose a contract structure matched to your risk profile — no obligation.',
    'primaryText' => 'Request Healthcare Assessment',
])

@endsection
