@extends('layouts.app')

@section('meta')
<meta name="description" content="Engineering-led laundry support for nursing homes and care facilities across Ireland — structured maintenance, documented records, and priority response for HIQA-compliant operations.">
@endsection

@section('content')

@include('components.sector-tabs')

<!-- 1. HERO -->
<section class="relative py-20 lg:py-32 overflow-hidden"
    style="background-color:#011E41; background-image: linear-gradient(90deg, rgba(1,30,65,0.97) 0%, rgba(1,30,65,0.80) 55%, rgba(1,30,65,0.25) 100%), url('/images/care/hero-main.jpg'); background-size:cover; background-position: right center; background-repeat:no-repeat;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-2xl reveal">
            <x-pretitle label="Care Facilities" />
            <h1 class="font-heading font-bold text-white text-4xl lg:text-6xl leading-tight mb-6">
                Care facility laundry can't stop.
            </h1>
            <p class="font-body text-white text-xl leading-relaxed mb-8">
                Whether it's resident linen, staff uniforms or infection control workflows — ILS keeps care facility laundry operations running, documented and compliant.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('request-assessment') }}"
                   class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                    Request a Care Assessment
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

<!-- 3. INTRO / TRUST BLOCK -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="reveal reveal-left">
                <x-pretitle label="What Care Facilities Need" />
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-5xl leading-tight mb-6">
                    We understand the pressure care facilities are under.
                </h2>
                <p class="font-body text-gray-600 text-lg leading-relaxed mb-4">
                    Whether it's keeping residents comfortable, preparing for HIQA inspections, or managing laundry across multiple sites — the demands on care facility operators are constant and the margin for error is small.
                </p>
                <p class="font-body text-gray-600 leading-relaxed mb-4">
                    That's why you need reliable laundry equipment backed by reliable engineering support. ILS has been supporting care homes and nursing homes across Ireland with structured maintenance contracts, documented service records and priority response since 1987.
                </p>
                <p class="font-body text-gray-600 leading-relaxed mb-8">
                    Whatever the laundry operation requires — we'll take care of it.
                </p>
                <a href="{{ route('service-contracts') }}"
                   class="inline-flex items-center gap-2 text-navy font-body font-semibold hover:text-steel transition-colors">
                    View service contracts
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            <div class="reveal reveal-right">
                <div class="grid grid-cols-2 gap-4">
                    @foreach([
                        ['35+', 'Years supporting Irish care operations'],
                        ['3', 'Service contract tiers — matched to your risk profile'],
                        ['Nationwide', 'Engineering coverage across Ireland'],
                        ['HIQA-ready', 'Documented records for every visit'],
                    ] as [$stat, $label])
                    <div class="bg-bg border border-border rounded-2xl p-6 text-center">
                        <div class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-2">{{ $stat }}</div>
                        <div class="font-body text-gray-500 text-sm leading-snug">{{ $label }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. WHAT ARE YOU LOOKING FOR — tabbed services -->
<section class="py-16 lg:py-24 bg-bg border-y border-border" x-data="{ tab: 'contracts' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="max-w-2xl mb-10 reveal">
            <x-pretitle label="How ILS Supports Care Facilities" />
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-5xl leading-tight mb-4">
                What are you looking for?
            </h2>
            <p class="font-body text-gray-500 text-lg">Structured support built around the specific demands of care facility laundry operations.</p>
        </div>

        <!-- Tab nav -->
        <div class="flex flex-wrap gap-2 mb-10">
            @foreach([
                ['contracts', 'Service Contracts'],
                ['equipment', 'Equipment Supply'],
                ['rental',    'Equipment Rental'],
                ['response',  'Breakdown Response'],
            ] as [$key, $label])
            <button @click="tab = '{{ $key }}'"
                    :class="tab === '{{ $key }}' ? 'bg-navy text-white' : 'bg-white border border-border text-navy hover:border-navy'"
                    class="font-body font-semibold text-sm px-5 py-2.5 rounded-lg transition-colors cursor-pointer">
                {{ $label }}
            </button>
            @endforeach
        </div>

        <!-- Tab panels -->
        <div x-show="tab === 'contracts'" class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
            <div>
                <h3 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-4">Structured maintenance you can document.</h3>
                <p class="font-body text-gray-600 leading-relaxed mb-4">
                    Care facilities depend on continuous laundry throughput for resident linen, staff uniforms and infection control workflows. Unplanned downtime isn't just inconvenient — it disrupts care standards.
                </p>
                <p class="font-body text-gray-600 leading-relaxed mb-6">
                    ILS service contracts provide scheduled preventive maintenance with written service reports after every visit. Three tiers — Core, Priority and Assured — matched to your operation's risk profile and regulatory requirements.
                </p>
                <ul class="space-y-3 mb-8">
                    @foreach([
                        'Written service report after every visit — ready for HIQA inspection',
                        'Scheduled visits matched to equipment usage and site requirements',
                        'Priority and Assured tiers include agreed response time targets',
                        'Multi-site contracts available under a single arrangement',
                    ] as $point)
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-orange mt-2 flex-shrink-0"></span>
                        <span class="font-body text-gray-600 text-sm leading-relaxed">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('service-contracts') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-steel text-white font-body font-semibold px-6 py-3 rounded-lg transition-colors text-sm">
                    View service contracts
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            <div class="rounded-2xl overflow-hidden h-80 lg:h-96 bg-bg border border-border">
                <img src="/images/care/contracts.jpg" alt="Service contract documentation" class="w-full h-full object-cover" onerror="this.parentElement.classList.add('flex','items-center','justify-center'); this.style.display='none'">
            </div>
        </div>

        <div x-show="tab === 'equipment'" x-cloak class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
            <div>
                <h3 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-4">The right equipment for the care environment.</h3>
                <p class="font-body text-gray-600 leading-relaxed mb-4">
                    Care facilities require commercial laundry equipment that can handle continuous seven-day demand — resident clothing, bedding, towels and staff uniforms — without bottleneck or breakdown.
                </p>
                <p class="font-body text-gray-600 leading-relaxed mb-6">
                    As an Authorised Electrolux Professional Partner, ILS supplies and installs commercial washers, dryers, barrier washers and ironers specified to your site's throughput and infection control requirements. Equipment is selected through a proper site assessment — not a catalogue guess.
                </p>
                <ul class="space-y-3 mb-8">
                    @foreach([
                        'Barrier washer-extractors for sluice and infection control workflows',
                        'High-capacity washers matched to resident linen demand',
                        'Commercial dryers and flatwork ironers for finishing',
                        'Genuine Electrolux Professional parts and technical documentation',
                    ] as $point)
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-orange mt-2 flex-shrink-0"></span>
                        <span class="font-body text-gray-600 text-sm leading-relaxed">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('equipment') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-steel text-white font-body font-semibold px-6 py-3 rounded-lg transition-colors text-sm">
                    Browse equipment
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-4">
                @foreach([
                    ['barrier-washer', 'Barrier Washer-Extractors'],
                    ['high-capacity-washer', 'High-Capacity Washers'],
                    ['commercial-dryer', 'Commercial Dryers'],
                    ['flatwork-ironer', 'Flatwork Ironers'],
                ] as [$img, $name])
                <div class="rounded-xl overflow-hidden h-40 bg-bg border border-border flex items-end justify-center">
                    <img src="/images/equipment/{{ $img }}.jpg" alt="{{ $name }}" class="max-h-full w-auto object-contain p-2">
                </div>
                @endforeach
            </div>
        </div>

        <div x-show="tab === 'rental'" x-cloak class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
            <div>
                <h3 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-4">New equipment, no capital outlay.</h3>
                <p class="font-body text-gray-600 leading-relaxed mb-4">
                    ILS equipment rental gives care facilities access to modern, compliant commercial laundry equipment on a structured monthly arrangement — with maintenance and engineering support built in.
                </p>
                <p class="font-body text-gray-600 leading-relaxed mb-6">
                    No upfront capital cost, no unexpected repair bills. One fixed monthly cost covers the equipment, scheduled servicing and call-out response. Predictable spend, consistent performance.
                </p>
                <ul class="space-y-3 mb-8">
                    @foreach([
                        'No capital expenditure — fixed monthly arrangement',
                        'Maintenance and engineering support included',
                        'Equipment replaced or upgraded at end of term',
                        'Available across washers, dryers, barrier washers and ironers',
                    ] as $point)
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-orange mt-2 flex-shrink-0"></span>
                        <span class="font-body text-gray-600 text-sm leading-relaxed">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('rental') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-steel text-white font-body font-semibold px-6 py-3 rounded-lg transition-colors text-sm">
                    Learn about rental
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            <div class="rounded-2xl overflow-hidden h-80 lg:h-96 bg-bg border border-border">
                <img src="/images/care/rental.jpg" alt="Equipment rental for care facilities" class="w-full h-full object-cover" onerror="this.parentElement.classList.add('flex','items-center','justify-center'); this.style.display='none'">
            </div>
        </div>

        <div x-show="tab === 'response'" x-cloak class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
            <div>
                <h3 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-4">Priority response when equipment fails.</h3>
                <p class="font-body text-gray-600 leading-relaxed mb-4">
                    When a washer or dryer goes down in a care facility, the impact is immediate — linen backlogs, disrupted workflows, stressed staff. ILS treats care facility breakdowns as priority calls, not general queue.
                </p>
                <p class="font-body text-gray-600 leading-relaxed mb-6">
                    Our engineers carry common parts on-vehicle and aim to diagnose and resolve on the first visit. Response time targets are agreed at contract stage for Priority and Assured customers.
                </p>
                <ul class="space-y-3 mb-8">
                    @foreach([
                        'Priority triage and dispatch for care facility customers',
                        'Engineers carry common parts to maximise first-visit resolution',
                        'Agreed response time targets at contract stage',
                        'Genuine OEM parts as an Authorised Electrolux Professional Partner',
                    ] as $point)
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-orange mt-2 flex-shrink-0"></span>
                        <span class="font-body text-gray-600 text-sm leading-relaxed">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('repairs') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-steel text-white font-body font-semibold px-6 py-3 rounded-lg transition-colors text-sm">
                    Repairs &amp; call-outs
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            <div class="rounded-2xl overflow-hidden h-80 lg:h-96 bg-bg border border-border">
                <img src="/images/about/about-engineers.jpg" alt="ILS engineer on-site" class="w-full h-full object-cover">
            </div>
        </div>

    </div>
</section>

<!-- 5. COMPLIANCE BLOCK -->
<section class="py-16 lg:py-24 bg-navy">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="reveal reveal-left">
                <x-pretitle label="HIQA &amp; Compliance" color="#148af4" />
                <h2 class="font-heading font-bold text-white text-3xl lg:text-5xl leading-tight mb-6">
                    Laundry records that hold up to inspection.
                </h2>
                <p class="font-body text-white leading-relaxed mb-4">
                    HIQA inspections place significant weight on documented evidence of maintenance, hygiene processes and equipment condition. An inspection with gaps in your service records is a risk you don't need.
                </p>
                <p class="font-body text-white leading-relaxed mb-8">
                    Every ILS service visit produces a written service report — what was inspected, what was found, what was done. Records accumulate over the contract term and are available on request, giving you a verifiable maintenance history ready for inspection at any time.
                </p>
                <ul class="space-y-4">
                    @foreach([
                        'Written service report after every maintenance visit',
                        'Maintenance history available on request for HIQA review',
                        'Barrier washer servicing documented to infection control standard',
                        'Multi-site records consolidated under a single contract',
                    ] as $point)
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 rounded-full bg-[#148af4] mt-2 flex-shrink-0"></span>
                        <span class="font-body text-white leading-relaxed text-sm">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="space-y-4 reveal reveal-right">
                @foreach([
                    ['HIQA Ready', 'Documented service history for every visit — ready when the inspector arrives.'],
                    ['Infection Control', 'Barrier washer maintenance structured around care facility hygiene requirements.'],
                    ['Multi-Site', 'Single contract covering multiple nursing homes or care sites — consistent standards across all locations.'],
                    ['Genuine Parts', 'OEM parts as an Authorised Electrolux Professional Partner — no substitutes.'],
                ] as [$title, $desc])
                <div class="bg-white/5 border border-white/10 rounded-xl p-5">
                    <h3 class="font-heading font-semibold text-white text-sm mb-1">{{ $title }}</h3>
                    <p class="font-body text-white text-sm leading-relaxed">{{ $desc }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- 6. NATIONAL COVERAGE + ENGINEER TRUST -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="rounded-2xl overflow-hidden h-96 bg-bg border border-border reveal reveal-left">
                <img src="/images/about/about-engineers.jpg" alt="ILS engineer" class="w-full h-full object-cover">
            </div>
            <div class="reveal reveal-right">
                <x-pretitle label="Coverage &amp; Response" />
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-5xl leading-tight mb-6">
                    Nationwide coverage. Local engineering response.
                </h2>
                <p class="font-body text-gray-600 leading-relaxed mb-6">
                    ILS engineers are deployed across the Republic of Ireland. When a care facility calls with a breakdown, we triage and dispatch — we do not manage a ticket queue. Response targets are agreed at contract stage so you know what to expect before a problem occurs.
                </p>
                <ul class="space-y-4 mb-8">
                    @foreach([
                        'Engineers carry common parts on-vehicle for first-visit resolution',
                        'Priority and Assured tier customers receive priority dispatch',
                        'Response time targets agreed in writing at contract stage',
                        'Genuine OEM parts — no substitutes that compromise performance or compliance',
                    ] as $point)
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-orange mt-2 flex-shrink-0"></span>
                        <span class="font-body text-gray-600 text-sm leading-relaxed">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('repairs') }}"
                   class="inline-flex items-center gap-2 text-navy font-body font-semibold hover:text-steel transition-colors text-sm">
                    About repairs &amp; call-outs
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 7. TESTIMONIALS -->
<section class="py-16 lg:py-20 bg-bg border-y border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-10 reveal">What care facility customers say</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach([
                [
                    'Managing laundry across five nursing homes under one contract was a problem before ILS. Now we have consistent standards and one point of contact across all sites.',
                    'Operations Director', 'Care Group, Munster'
                ],
                [
                    'Our HIQA inspection was coming up and we had gaps in our maintenance records. ILS got us up to date quickly and showed us how to maintain that going forward.',
                    'Compliance Officer', 'Private Nursing Home, Leinster'
                ],
                [
                    'We had recurring issues with our previous provider — slow response, no paperwork after visits. ILS came in, assessed everything on day one, and we\'ve had documented service reports ever since.',
                    'Facilities Manager', 'Nursing Home, Dublin'
                ],
            ] as [$quote, $name, $location])
            <div class="bg-white border border-border rounded-2xl p-6 lg:p-8 flex flex-col reveal card-hover">
                <blockquote class="flex-1">
                    <p class="font-body text-gray-700 text-sm leading-relaxed">&ldquo;{{ $quote }}&rdquo;</p>
                </blockquote>
                <div class="mt-6 pt-4 border-t border-border">
                    <cite class="block text-sm font-body font-semibold text-navy not-italic">{{ $name }}</cite>
                    <span class="text-xs font-body text-gray-400">{{ $location }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- 8. EQUIPMENT CROSS-LINK -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-10 reveal">
            <div class="max-w-2xl">
                <x-pretitle label="Care Facility Equipment" />
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl">Equipment suited to care facility demands.</h2>
            </div>
            <a href="{{ route('equipment') }}"
               class="flex-shrink-0 inline-flex items-center gap-2 bg-navy hover:bg-steel text-white font-body font-semibold px-6 py-3 rounded-lg text-sm transition-colors">
                Browse all equipment
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
                ['barrier-washer',      'Barrier Washer-Extractors', 'Physical separation of soiled and clean zones — the infection control standard for nursing homes.'],
                ['high-capacity-washer','High-Capacity Washers',      'Continuous throughput for resident linen, clothing and bedding across a seven-day operation.'],
                ['commercial-dryer',    'Commercial Tumble Dryers',   'Fast-cycle drying to maintain uninterrupted linen flow.'],
                ['flatwork-ironer',     'Flatwork Ironers',           'Finishing equipment for consistent linen standards across resident and staff laundry.'],
            ] as [$img, $name, $desc])
            <div class="group reveal">
                <div class="h-56 flex items-end justify-center mb-4">
                    <img src="/images/equipment/{{ $img }}.jpg" alt="{{ $name }}"
                         class="max-h-full w-auto object-contain group-hover:scale-105 transition-transform duration-500">
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-1.5">{{ $name }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-3">{{ $desc }}</p>
                <a href="{{ route('equipment') }}" class="inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    View equipment
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- 9. FINAL CTA -->
@include('components.cta-band', [
    'heading'     => 'Talk to ILS about your care facility operation.',
    'subheading'  => 'We\'ll assess your site, review your current setup, and propose a contract structure matched to your compliance and operational requirements — no obligation.',
    'primaryText' => 'Request a Care Assessment',
    'primaryHref' => route('request-assessment'),
    'secondaryText' => 'Talk to an Engineer',
    'secondaryHref' => route('contact'),
])

@endsection
