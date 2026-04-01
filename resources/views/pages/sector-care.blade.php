@extends('layouts.app')

@section('meta')
<meta name="description" content="ILS provides engineering-led commercial laundry support for nursing homes and care facilities across Ireland — service contracts, barrier washer maintenance, HIQA documentation support and priority response.">
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
                <span class="text-gray-300 text-sm font-body">Care Facilities</span>
            </div>
            <p class="text-sm font-body font-semibold text-orange uppercase tracking-wide mb-4">Care facilities sector</p>
            <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-5">
                Care facility laundry can't stop. Neither can the service behind it.
            </h1>
            <p class="font-body text-gray-300 text-lg leading-relaxed mb-8">
                Engineering-led laundry support for nursing homes and care facilities — structured maintenance, documented service records, infection-control-aware response, and priority call-out when faults occur.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200"
                   data-ga-cta="care_request_assessment">
                    Request Assessment
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
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-5">What care facility operators tell us</h2>
            <p class="font-body text-gray-500 leading-relaxed mb-8">
                When nursing home and care facility managers come to ILS, they are typically dealing with one or more of these:
            </p>
            <ul class="space-y-4">
                @foreach ([
                    'Equipment failure affecting resident laundry — a direct impact on dignity and day-to-day care quality',
                    'No documented maintenance history to support HIQA inspection or regulatory review',
                    'A previous service provider that was slow to respond and didn\'t understand the urgency of a care environment',
                    'Aging equipment with increasing repair frequency and rising maintenance costs',
                    'Barrier washer faults disrupting infection control workflows in sluice or linen handling areas',
                    'Multi-site care groups with inconsistent service standards and no single point of accountability',
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
                    <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-5">Why continuity matters in care settings</h2>
                    <p class="font-body text-gray-600 leading-relaxed mb-4">
                        In a nursing home or care facility, laundry is a hygiene-critical function running seven days a week. Resident linen, personal clothing and staff uniforms must be processed continuously — there is no acceptable window for extended downtime.
                    </p>
                    <p class="font-body text-gray-600 leading-relaxed">
                        Equipment failure in these environments carries real consequences: disruption to resident routines, infection control risk, and — in regulated settings — potential implications for compliance and inspection readiness.
                    </p>
                </div>
                <div>
                    <p class="font-body text-gray-600 leading-relaxed mb-4">
                        ILS structures care facility support around prevention first and priority response second. Scheduled maintenance keeps equipment in condition, written service records support audit readiness, and our call-out response treats care environments with the same seriousness as healthcare.
                    </p>
                    <p class="font-body text-gray-600 leading-relaxed">
                        For care groups managing multiple sites, a single contract arrangement can cover the full operation — consistent standards, consistent documentation, and one point of contact across all properties.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. SERVICE-PATHWAY FIT BLOCK — 2×2 grid -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-10">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-3">How ILS supports care facility operations</h2>
            <p class="font-body text-gray-500 text-lg max-w-2xl">Our services mapped to the specific demands of care and nursing home laundry.</p>
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
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">Scheduled preventive maintenance with a written service record after every visit. Reduces equipment failure frequency and produces the documented maintenance history that care facilities need for HIQA inspection and regulatory audit.</p>
                <a href="{{ route('service-contracts') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    View service contracts
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <!-- Barrier Washer Support -->
            <div class="bg-bg border border-border rounded-xl p-6 flex flex-col card-hover">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Barrier Washer Support</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">Barrier washers are a hygiene-critical piece of equipment in care environments — physically separating soiled from clean linen to protect infection control workflows. ILS has specific experience with barrier washer installation, maintenance and repair in nursing home and care settings. A fault here is not a routine breakdown.</p>
                <a href="{{ route('repairs') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Repairs &amp; call-outs
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
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">When a fault occurs in a care environment, deferred response is not acceptable. We triage quickly and dispatch engineers carrying genuine Electrolux Professional parts — focused on first-visit resolution to restore the operation with minimum disruption to residents and care staff.</p>
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
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">Structured rental arrangements for care facilities replacing aging equipment without capital outlay — inclusive of maintenance support. An option for facilities that need to upgrade machines while keeping the operational and compliance continuity the environment demands.</p>
                <a href="{{ route('rental') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Equipment rental
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- 5. HIQA & COMPLIANCE CALLOUT -->
<section class="py-12 bg-bg border-y border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white border border-border rounded-xl p-8 lg:p-10">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                <div class="lg:col-span-2">
                    <h2 class="font-heading font-bold text-navy text-xl lg:text-2xl mb-3">Inspection readiness and compliance documentation</h2>
                    <p class="font-body text-gray-600 text-sm leading-relaxed mb-4">
                        Care facilities subject to HIQA inspection are expected to demonstrate that equipment supporting hygiene-critical functions is maintained to a documented standard. A maintenance visit without a written record is, from an audit perspective, a visit that didn't happen.
                    </p>
                    <p class="font-body text-gray-600 text-sm leading-relaxed">
                        ILS service contracts include written service documentation after every scheduled visit — covering work carried out, equipment condition, and any follow-up required. These records are yours to retain and present at inspection. They do not require chasing.
                    </p>
                </div>
                <div class="flex flex-col gap-4">
                    @foreach([
                        'Written service record after every visit',
                        'Equipment maintenance log per machine',
                        'Supports HIQA and regulatory audit preparation',
                        'Records produced at visit — no chasing required',
                    ] as $point)
                    <div class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-navy flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                        </svg>
                        <span class="font-body text-gray-700 text-sm leading-relaxed">{{ $point }}</span>
                    </div>
                    @endforeach
                    <a href="{{ route('service-contracts') }}" class="mt-2 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                        About service contracts
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. PROOF — CARE TESTIMONIALS ⚠️ PLACEHOLDER — replace with real approved quotes before go-live -->
<section class="py-16 lg:py-20 bg-navy">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-heading font-bold text-white text-2xl lg:text-3xl mb-10">What care facility operators say</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div class="bg-navy-light border border-white/10 rounded-xl p-6 lg:p-8 flex flex-col">
                <blockquote class="flex-1">
                    <p class="font-body text-gray-300 text-base leading-relaxed">
                        &ldquo;Our HIQA inspection was coming up and we had no maintenance records for our laundry equipment. ILS came in, assessed everything and got us up to date quickly. We've had documented service records from every visit since.&rdquo;
                    </p>
                </blockquote>
                <div class="mt-6 pt-5 border-t border-white/10">
                    <cite class="block text-sm font-body font-semibold text-white not-italic">Director of Nursing</cite>
                    <span class="text-xs text-gray-400 font-body">Private Nursing Home, Leinster</span>
                </div>
            </div>

            <div class="bg-navy-light border border-white/10 rounded-xl p-6 lg:p-8 flex flex-col">
                <blockquote class="flex-1">
                    <p class="font-body text-gray-300 text-base leading-relaxed">
                        &ldquo;Managing laundry across four care homes under one contract was a problem before ILS. Now we have consistent service standards and one point of contact for the entire group.&rdquo;
                    </p>
                </blockquote>
                <div class="mt-6 pt-5 border-t border-white/10">
                    <cite class="block text-sm font-body font-semibold text-white not-italic">Operations Manager</cite>
                    <span class="text-xs text-gray-400 font-body">Care Group, Munster</span>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 7. EQUIPMENT RELEVANCE BLOCK -->
<section class="py-16 lg:py-20 bg-bg border-y border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-10">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-3">Equipment suited to care environments</h2>
            <p class="font-body text-gray-500 text-lg">ILS supplies and supports commercial laundry equipment suited to the hygiene requirements and continuous operation of care and nursing home settings.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-10">
            @foreach([
                ['Barrier Washer-Extractors', 'The infection control standard for care environments — physically separating soiled linen handling from clean linen processing. A fault on this machine is a compliance and care risk, not a routine operational issue. ILS has specific experience with barrier washer maintenance and repair in care settings.'],
                ['High-Capacity Washers', 'Machines sized to the continuous linen demand of care facilities — resident clothing, bedding and staff uniforms processed without operational bottleneck across a seven-day operation.'],
                ['Commercial Tumble Dryers', 'Fast-cycle drying to support uninterrupted linen flow — matched to the throughput requirements of nursing homes and care facilities that cannot afford queuing at the drying stage.'],
            ] as [$title, $desc])
            <div class="bg-white border border-border rounded-xl p-6">
                <h3 class="font-heading font-semibold text-navy text-base mb-2">{{ $title }}</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
        <p class="font-body text-gray-500 text-sm mb-6">ILS is an Authorised Electrolux Professional Partner — providing access to manufacturer-grade equipment, genuine OEM parts and technical documentation. Equipment scope is confirmed per site during the assessment process.</p>
        <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
            Browse the equipment library
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
        </a>
    </div>
</section>

<!-- 8. FINAL CTA -->
@include('components.cta-band', [
    'heading'     => 'Talk to ILS about your care facility operation.',
    'subheading'  => 'We will assess your site, review your current equipment and service arrangements, and propose a contract structure that supports both operational continuity and compliance readiness.',
    'primaryText' => 'Request Assessment',
    'primaryHref' => route('contact'),
])

@endsection
