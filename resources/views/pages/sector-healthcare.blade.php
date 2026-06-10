@extends('layouts.app')

@section('meta')
<meta name="description" content="Engineering-led commercial laundry support for healthcare — barrier washers, service contracts, and priority response across Ireland.">

@endsection

@section('content')

<!-- 1. HERO -->
<section class="relative overflow-hidden flex flex-col min-h-[520px] lg:!min-h-[560px] lg:!h-[720px]" style="height:auto;">
    <!-- Background image -->
    <img src="/images/healthcare/healthcarehero.png" alt="Healthcare laundry installation"
         class="absolute inset-0 w-full h-full object-cover object-right">
    <!-- Content -->
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16 py-16 lg:py-32">
            <div class="max-w-4xl reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Healthcare Laundry Support</p>
                <h1 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight mb-4">
                    <span class="block" style="color:#148af4;">Control healthcare laundry</span>
                    <span class="block">pressure before it becomes</span>
                    <span class="block">a daily cost problem</span>
                </h1>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8 max-w-2xl">
                    Healthcare laundry rooms carry hygiene, patient care, clean linen availability, staff pressure and running-cost demands every day. Irish Laundry Systems supports healthcare sites with Electrolux Professional equipment selection, supply, rental, planned maintenance, repairs and aftercare around the way the room is used.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#healthcare-assessment"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Healthcare Assessment
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 border-2 border-navy hover:border-navy/70 text-navy font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-navy/10">
                        Talk to Our Team
                    </a>
                </div>
                <div class="flex flex-wrap items-center gap-x-4 gap-y-2 mt-8">
                    <span class="font-body text-navy/70 text-xs">Healthcare laundry support</span>
                    <span class="w-px h-3 bg-navy/20"></span>
                    <span class="font-body text-navy/70 text-xs">Electrolux Professional equipment</span>
                    <span class="w-px h-3 bg-navy/20"></span>
                    <span class="font-body text-navy/70 text-xs">Irish engineering expertise since 1987</span>
                </div>
            </div>
        </div>
    </div>
</section>

@include('components.partner-strip')

<!-- 3. SPLIT STATEMENT -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Built for Healthcare</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    <span>Healthcare laundry</span>
                    <span>is a <span style="color:#148af4;">hygiene</span> and</span>
                    <span><span style="color:#148af4;">cost-control</span> issue</span>
                </h2>
            </div>

            <div class="reveal reveal-right lg:pt-8">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-2">
                    The wrong laundry setup can drain budget every day through energy use, water use, detergent waste, staff pressure, delays in clean linen availability, reactive call-outs and replacement pressure.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Irish Laundry Systems brings room layout, capacity, equipment selection, supply, rental, maintenance, repairs and aftercare together, so healthcare sites can control costs while supporting hygiene routines and daily laundry demand.
                </p>
                <a href="{{ route('sectors.healthcare') }}#healthcare-equipment"
                   class="inline-flex items-start gap-2 bg-navy hover:bg-navy-dark text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    View Healthcare Equipment Options
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- WORKING ROUTE SECTION -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <!-- Title -->
        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Infection Control</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-6">
                <span>Laundry and <span style="color:#148af4;">infection control</span></span>
                <span>need to work together</span>
            </h2>
            <p class="font-body text-gray-600 text-base leading-relaxed mb-4">
                In healthcare environments, laundry is not only about washing linen. Dirty-side handling, clean-side unloading, drying, finishing, transport and storage all affect hygiene control.
            </p>
            <p class="font-body text-gray-600 text-base leading-relaxed mb-4">
                Electrolux Professional barrier systems are built around physical separation between soiled and clean linen handling, supporting dirty-side and clean-side separation where cross-contamination risk needs to be managed. Irish Laundry Systems plans the equipment choice, installation and ongoing care around that requirement.
            </p>
        </div>

        <!-- Image + Navy card overlay -->
        <div class="relative reveal">

            <!-- Image -->
            <div class="w-full lg:w-4/5 ml-auto rounded-2xl overflow-hidden">
                <img src="/images/healthcare/render-double-page_72dpi.jpg"
                     alt="Healthcare laundry room"
                     class="w-full h-[280px] sm:h-[400px] lg:h-[580px] object-cover object-center">
            </div>

            <!-- Navy card overlapping left -->
            <div class="lg:absolute lg:top-1/2 lg:-translate-y-1/2 lg:left-0 mt-6 lg:mt-0 w-full lg:w-[490px] bg-navy rounded-2xl p-6 sm:p-10 shadow-2xl">
                <h3 class="font-heading font-bold text-white text-xl sm:text-2xl lg:text-3xl leading-snug mb-6">
                    Healthcare laundry needs controlled handling, not isolated equipment.
                </h3>
                <ul class="space-y-3">
                    @foreach([
                        'Dirty-side and clean-side separation',
                        'Barrier washer hygiene support',
                        'Risk Analysis and Biocontamination Control (RABC)-<br>aligned laundry process support',
                        'Washing, drying, finishing and storage planned together',
                        'Planned care for equipment in daily use',
                    ] as $point)
                    <li class="flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-[#148af4] flex-shrink-0"></span>
                        <span class="font-body text-white text-sm">{!! $point !!}</span>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>

    </div>
</section>

<!-- 4. LAUNDRY CYCLE MANAGEMENT + VIDEO -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Laundry Room Planning</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                <span><span style="color:#148af4;">Dirty-side and clean-side</span> handling need</span>
                <span>a <span style="color:#148af4;">controlled healthcare laundry room</span></span>
            </h2>
        </div>
        <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
            A healthcare laundry room needs more than the right machine. It needs controlled handling from soiled linen collection through washing, drying, finishing, clean linen protection, storage and return to use.
        </p>
        <p class="font-body text-gray-500 text-base leading-relaxed mb-10">
            Irish Laundry Systems uses that full-room view to plan the room, equipment choice, installation and aftercare around daily healthcare laundry demand.
        </p>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center reveal">

            <!-- Infographic -->
            <div>
                <img src="/images/healthcare/Electrolux-Barrier-infografica-LOW.webp"
                     alt="Healthcare laundry cycle management"
                     class="w-full h-auto object-contain">
            </div>

            <!-- Video -->
            <div>
                <div class="relative w-full rounded-2xl overflow-hidden shadow-2xl" style="padding-bottom: 56.25%;">
                    <iframe class="absolute inset-0 w-full h-full"
                            src="https://www.youtube.com/embed/26g9u4GPRVc"
                            title="Laundry Cycle Management"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <a href="https://www.youtube.com/watch?v=26g9u4GPRVc" target="_blank" rel="noopener"
                   class="inline-flex items-start gap-2 text-navy hover:text-[#148af4] font-heading font-bold text-sm mt-4 transition-colors">
                    Watch healthcare laundry planning video
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

        </div>

    </div>
</section>

{{-- Financial Performance Bento: metric cards --}}
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- Header --}}
        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Financial Performance</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-6">
                <span><span style="color:#148af4;">Control healthcare laundry costs</span></span>
                <span>before poor setup drains budget</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Healthcare laundry can become a daily cost problem through energy use, water use, detergent waste, staff strain, clean linen delays and reactive call-outs. The right equipment plan should support hygiene routines while reducing avoidable running-cost pressure.
            </p>
        </div>

        {{-- 5-item grid (aligned via shared component) --}}
        @include('components.financial-metrics', ['items' => [
            ['icon'=>'6', 'prefix'=>'', 'stat'=>'-65%',                  'size'=>'text-4xl', 'label'=>'dryer energy use',            'body'=>'Electrolux Professional Heat Pump dryer technology can reduce energy consumption by up to 65% in suitable applications.'],
            ['icon'=>'7', 'prefix'=>'', 'stat'=>'-50%',                  'size'=>'text-4xl', 'label'=>'water use',                   'body'=>'Double-drain barrier washer configurations can support water recycling and reduce water consumption by up to 50% where suitable.'],
            ['icon'=>'3', 'prefix'=>'', 'stat'=>'-75%',                  'size'=>'text-4xl', 'label'=>'sick days',                   'body'=>'Electrolux Professional ergonomics material cites a 75% average decrease in sick days, alongside a 59% reduction in Work-related Musculoskeletal Disorders and a 25% productivity increase.'],
            ['icon'=>'10', 'prefix'=>'', 'stat'=>'Less<br>waste',         'size'=>'text-2xl', 'label'=>'detergent and process waste',  'body'=>'Integrated Savings and Efficient Dosing support better control of load, water and detergent use, reducing waste from underloading, overloading and poor process control.'],
            ['icon'=>'11', 'prefix'=>'', 'stat'=>'Fewer<br>surprise costs', 'size'=>'text-2xl', 'label'=>'repair and service pressure', 'body'=>'Irish Laundry Systems brings equipment planning, supply, preventive maintenance, repairs, rental and aftercare together, so healthcare laundry decisions are not only made after something fails.'],
        ]])
    </div>
</section>

{{-- Technical Bento: 5-card compact grid --}}
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- Header --}}
        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Technical Proof</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-6">
                <span>Features that support <span style="color:#148af4;">hygiene routines,</span></span>
                <span><span style="color:#148af4;">staff handling</span> and <span style="color:#148af4;">process control</span></span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Selected Electrolux Professional features support safer handling, cleaner process control and more consistent laundry routines when matched to the right healthcare room.
            </p>
        </div>

        {{-- 5-card grid --}}
        <div class="grid grid-cols-2 lg:grid-cols-5 gap-3">

            {{-- Card 1: Hygiene --}}
            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/2.png" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Hygiene-focused design</h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed">Barrier configurations support separated handling between soiled and clean linen areas.</p>
                </div>
            </div>

            {{-- Card 2: Operator --}}
            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/3.png" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Operator wellbeing first</h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed">Door access, drum positioning and loading logic support easier repeated handling for laundry teams.</p>
                </div>
            </div>

            {{-- Card 3: Control --}}
            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/4.png" alt="" class="w-32 h-32 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Guided process control</h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed">ClarusVibe and CompassPro give operators guided programs, status messages and clearer day-to-day&nbsp;control.</p>
                </div>
            </div>

            {{-- Card 4: ERGOCERT --}}
            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/5.png" alt="4-star ERGOCERT" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Certified ergonomic design</h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed">Selected Electrolux Professional Line 6000 equipment carries 4-star ERGOCERT recognition for ergonomic design.</p>
                </div>
            </div>

            {{-- Card 5: AIDO --}}
            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-2 lg:col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/healthcare/Auto%20Inner%20Door%20Opening%20(AIDO)%20System.png" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Secure door handling</h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed">Auto Inner Door Opening (AIDO) supports controlled loading and unloading in barrier washer&nbsp;configurations.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FOUR SERVICE CARDS -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <!-- Heading -->
        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Support Options</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-6">
                Support that keeps <span style="color:#148af4;">healthcare laundry moving</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Healthcare sites need equipment, maintenance, repairs and aftercare to work around the same room, daily laundry demand and staff pressure.
            </p>
        </div>

        <!-- 4-column card grid -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">

            @foreach([
                [
                    'title'  => 'Repairs &amp; Call-Outs',
                    'text'   => 'For urgent equipment faults that can interrupt daily laundry, increase staff pressure or affect healthcare routines.',
                    'cta'    => 'Request Call-Out',
                    'route'  => route('repairs'),
                    'img'    => '/images/healthcare/support-aftercare-hero.png',
                    'pos'    => 'center 40%',
                ],
                [
                    'title'  => 'Preventive Maintenance Contracts',
                    'text'   => 'For healthcare sites that need planned visits, fewer reactive maintenance decisions and better control around critical laundry equipment.',
                    'cta'    => 'View Contracts',
                    'route'  => route('service-contracts'),
                    'img'    => '/images/healthcare/service-contracts-hero.png',
                    'pos'    => '90% 35%',
                ],
                [
                    'title'  => 'Equipment Rental',
                    'text'   => 'For replacement pressure, capacity needs or continuity planning when rental is a better fit than one large purchase upfront.',
                    'cta'    => 'See Rental Options',
                    'route'  => route('rental'),
                    'img'    => '/images/healthcare/commercial-industrial.jpg',
                    'pos'    => 'center center',
                ],
                [
                    'title'  => 'Support &amp; Aftercare',
                    'text'   => 'For service history, genuine parts support where needed and clearer repair, rental or replacement decisions after installation or inspection.',
                    'cta'    => 'Explore Support Options',
                    'route'  => route('service-contracts'),
                    'img'    => '/images/healthcare/services-overview-hero-portrait.jpg',
                    'pos'    => 'center center',
                ],
            ] as $card)
            <a href="{{ $card['route'] }}"
               class="group relative overflow-hidden rounded-2xl block h-[280px] sm:h-[360px] lg:h-[400px]">
                <img src="{{ $card['img'] }}" alt="{{ strip_tags($card['title']) }}"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                     style="object-position: {{ $card['pos'] }};">
                {{-- Default gradient --}}
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.4) 45%, rgba(1,30,65,0.05) 75%, transparent 100%);"></div>
                {{-- Hover overlay --}}
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background: rgba(1,30,65,0.88);"></div>
                {{-- Content --}}
                <div class="absolute inset-0 p-6 flex flex-col justify-end z-10">
                    {{-- Description (slides up on hover) --}}
                    <div class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-40 group-hover:opacity-100 transition-all duration-500 mb-4">
                        <p class="font-body text-white/80 text-sm leading-relaxed">{!! $card['text'] !!}</p>
                    </div>
                    {{-- Title (always visible) --}}
                    <h3 class="font-heading font-bold text-white text-xl leading-tight mb-4 lg:whitespace-nowrap">{!! $card['title'] !!}</h3>
                    {{-- Button (always visible) --}}
                    <div class="flex justify-end">
                        <span class="inline-flex items-start gap-2 bg-white/15 group-hover:bg-orange border border-white/30 group-hover:border-orange text-white font-body font-bold text-xs uppercase tracking-wide px-4 py-2.5 rounded-full transition-colors duration-200">
                            {!! $card['cta'] !!}
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </span>
                    </div>
                </div>
            </a>
            @endforeach

        </div>
    </div>
</section>

@include('components.cta-combined-banner', [
    'heading'    => '<span style="color:#011E41;">Plan the healthcare laundry room</span> before costs repeat every day',
    'body'       => 'Before equipment becomes a daily cost problem, the room, workload, utilities, hygiene handling and maintenance needs should be understood together. Irish Laundry Systems plans healthcare laundry equipment around real operating pressure, not just machine capacity.',
    'miniPoints' => ['Avoid wasted spend', 'Right-fit healthcare laundry room', 'Reduce costly rework'],
    'ctaText'    => 'Talk to Our Team',
])

<!-- 5. BARRIER WASHERS PRODUCT BLOCK -->

{{-- A2: Navy intro block --}}

<!-- PRODUCTS: Barrier Washers / Tumble Dryers / Ironers -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-12">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Electrolux Professional Equipment</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-6">
                <span>Equipment built around <span style="color:#148af4;">healthcare hygiene,</span></span>
                <span><span style="color:#148af4;">running cost</span> and daily demand</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                The right equipment plan depends on room configuration, wash demand, drying pressure, finishing needs, hygiene routines and the support that keeps the equipment performing over time.
            </p>
        </div>

        <div class="flex flex-col divide-y divide-gray-100">

            <!-- 1. Barrier Washers — text left, image right -->
            <div x-data="{ open: false, tab: 'aido' }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="lg:pt-10">
                    <h3 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">Barrier <strong>Washers</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                        Barrier washers are central where healthcare laundry rooms need controlled dirty-side loading and clean-side unloading as part of the hygiene process.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Dirty-side and clean-side separation',
                            'Hygiene Watchdog full-cycle completion',
                            'AIDO controlled loading and unloading',
                            'Double-drain water recycling where suitable',
                            'Risk Analysis and Biocontamination Control (RABC)-aligned process support',
                        ] as $point)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="font-body text-gray-500 text-base leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                        <a href="{{ route('equipment') }}" class="inline-flex items-start gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            View Barrier Washer Options
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-start gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Request Healthcare Equipment Advice
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col">
                    <img src="/images/equipment/line6000-barrier-washer.webp"
                         alt="Line 6000 Barrier Washer"
                         class="w-full h-[440px] object-contain object-left-top">
                    <div class="mt-1 pt-3 w-full flex justify-center">
                        <button @click="open = !open" class="inline-flex items-center gap-3 text-left group">
                            <span class="font-heading font-bold text-navy text-sm">System features: AIDO, Hygiene Watchdog, double-drain options</span>
                            <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Barrier Washer: AIDO + Watchdog collapsible -->
                <div x-show="open" x-collapse class="py-6 border-t border-gray-100">
                    <!-- Tabs -->
                    <div class="flex gap-6 border-b border-gray-200 mb-8">
                        <button @click="tab = 'aido'"
                                :class="tab === 'aido' ? 'border-b-2 border-navy text-navy font-bold' : 'text-gray-400 hover:text-navy'"
                                class="font-heading text-sm pb-3 transition-colors">
                            AIDO System
                        </button>
                        <button @click="tab = 'watchdog'"
                                :class="tab === 'watchdog' ? 'border-b-2 border-navy text-navy font-bold' : 'text-gray-400 hover:text-navy'"
                                class="font-heading text-sm pb-3 transition-colors">
                            Watchdog System
                        </button>
                    </div>

                    <!-- AIDO Tab -->
                    <div x-show="tab === 'aido'">
                        <h4 class="font-heading font-bold text-navy text-xl mb-4">Auto Inner Door Opening (AIDO) System</h4>
                        <div class="flex items-start gap-6 mb-8">
                            <div class="w-32 h-32 flex-shrink-0">
                                <img src="/images/healthcare/Auto%20Inner%20Door%20Opening%20(AIDO)%20System.png" alt="AIDO System" class="w-full h-full object-contain">
                            </div>
                            <p class="font-body text-gray-500 text-base leading-relaxed">
                                Our large inner-drum doors make loading and unloading the washer exceptionally easy, while our innovative opening mechanism pre-opens <strong>the inner-drum doors automatically at the end</strong> of the wash cycle. This enables the easy manual handling of large loads of wet linen while minimizing potential strain for the operator.
                            </p>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                            <div class="relative w-full rounded-2xl overflow-hidden shadow-lg" style="padding-bottom: 56.25%;">
                                <iframe class="absolute inset-0 w-full h-full"
                                        src="https://www.youtube.com/embed/4MAlhxGZj88"
                                        title="AIDO System"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                            <div>
                                <h5 class="font-heading font-bold text-navy text-xl mb-3">Operator wellbeing is our top priority</h5>
                                <p class="font-body text-gray-500 text-base leading-relaxed">Whatever your technological requirements, our machines are designed to help your operators work in a safe and ergonomic way.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Watchdog Tab -->
                    <div x-show="tab === 'watchdog'">
                        <h4 class="font-heading font-bold text-navy text-xl mb-4">Hygiene Watchdog</h4>
                        <div class="flex items-start gap-6 mb-8">
                            <div class="w-32 h-32 flex-shrink-0">
                                <img src="/images/healthcare/HygieneWatchdog.webp" alt="Hygiene Watchdog" class="w-full h-full object-contain">
                            </div>
                            <p class="font-body text-gray-500 text-base leading-relaxed">
                                <strong>Your Hygiene Partner:</strong> The Electrolux Professional Hygiene Watchdog (HW) ensures full-cycle completion so that all linen is <strong>fully washed and thoroughly decontaminated</strong>. This provides the maximum defense against the spread of microorganisms and cross-contamination, keeping germs at bay and your mind at rest.
                            </p>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                            <div class="relative w-full rounded-2xl overflow-hidden shadow-lg" style="padding-bottom: 56.25%;">
                                <iframe class="absolute inset-0 w-full h-full"
                                        src="https://www.youtube.com/embed/4MAlhxGZj88"
                                        title="Hygiene Watchdog"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                            <div>
                                <h5 class="font-heading font-bold text-navy text-xl mb-3">Operator wellbeing is our top priority</h5>
                                <p class="font-body text-gray-500 text-base leading-relaxed">Whatever your technological requirements, our machines are designed to help your operators work in a safe and ergonomic way.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- COMMERCIAL WASHERS — image left, text right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal">
                <div class="flex flex-col lg:ml-28">
                    <img src="/images/equipment/commercialwasher.webp"
                         alt="Commercial Washer"
                         class="w-full h-96 object-contain object-left-top">
                    <div class="mt-1 pt-3 w-full pl-[20px]">
                        <span class="font-heading font-bold text-navy text-sm">System features: Integrated Savings, Efficient Dosing, Power Balance</span>
                    </div>
                </div>
                <div class="lg:-ml-20 lg:mt-10">
                    <h3 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">Commercial <strong>Washers</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                        Commercial washers support broader healthcare wash needs where barrier separation is not required for every load, but capacity, consistency and daily handling still matter.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Integrated Savings',
                            'Efficient Dosing',
                            'Power Balance',
                            'Load control',
                            'Reduced water, energy and detergent waste',
                        ] as $point)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="font-body text-gray-500 text-base leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                        <a href="{{ route('equipment') }}" class="inline-flex items-start gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            View Washing Machine Options
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-start gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Request Healthcare Equipment Advice
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2. Tumble Dryers — text left, image right -->
            <div x-data="{ open: false }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="order-2 lg:order-1">
                    <h3 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">Tumble <strong>Dryers</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                        Tumble dryers support drying demand where drying time, residual moisture, operator handling and energy use affect daily laundry turnaround.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Up to 65% energy saving with Heat Pump technology',
                            'Moisture Balance to avoid overdrying',
                            'Adaptive Fan for energy and drying control',
                            'Certified ergonomic design',
                            'Lower drying-cost pressure',
                        ] as $point)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="font-body text-gray-500 text-base leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 mb-6">
                        <a href="{{ route('equipment') }}" class="inline-flex items-start gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            View Dryer Options
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-start gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Request Healthcare Equipment Advice
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col order-1 lg:order-2 lg:ml-20">
                    <img src="/images/equipment/Tumble-dryers_Heat-Pump_1-1.webp"
                         alt="Line 6000 Tumble Dryer"
                         class="w-full h-96 object-contain object-left-top">
                    <div class="mt-1 pt-3">
                        <button @click="open = !open"
                                class="w-full flex items-center justify-start gap-3 text-left group pl-[20px]">
                            <span class="font-heading font-bold text-navy text-sm">System features: Heat Pump, Moisture Balance, Adaptive Fan</span>
                            <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div x-show="open" x-collapse class="py-6 border-t border-gray-100">
                <h4 class="font-heading font-bold text-navy text-xl mb-4">Dry not overdry</h4>
                <div class="flex items-start gap-6 mb-8">
                    <div class="w-32 h-32 flex-shrink-0">
                        <img src="/images/healthcare/MoistureBalance.png" alt="Moisture Balance" class="w-full h-full object-contain">
                    </div>
                    <p class="font-body text-gray-500 text-base leading-relaxed">
                        The Moisture Balance function measures the exact residual moisture level of the linen throughout the drying process and automatically <strong>stops the cycle</strong> once the desired level of hygienic dryness is achieved.
                    </p>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div class="relative w-full rounded-2xl overflow-hidden shadow-lg" style="padding-bottom: 56.25%;">
                        <iframe class="absolute inset-0 w-full h-full"
                                src="https://www.youtube.com/embed/Xm2CpX95zDM"
                                title="Tumble Dryers Ergonomics"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <div>
                        <h5 class="font-heading font-bold text-navy text-xl mb-3">Our dryers have earned the prestigious 4-star rating for ergonomics from ERGOCERT</h5>
                        <p class="font-body text-gray-500 text-base leading-relaxed">All models have been user-tested to ensure operators will feel less tension and strain, so they—and your hospital laundry—can thrive.</p>
                    </div>
                </div>
            </div>
            </div>

            <!-- 3. Ironers — image left, text right -->
            <div x-data="{ open: false, tab: 'diamms' }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="flex flex-col">
                    <img src="/images/equipment/line6000-ironer.webp"
                         alt="Line 6000 Ironer"
                         class="w-full h-80 object-contain object-left-top">
                    <div class="mt-1 pt-3 w-full">
                        <button @click="open = !open" class="w-full flex items-center justify-start gap-3 text-left group pl-[10px]">
                            <span class="font-heading font-bold text-navy text-sm">System features: DIAMMS, Hygiene Guard, FoldFlex, Ceramic Burner</span>
                            <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </button>
                    </div>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">Ironers &amp; <strong>Finishing</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                        Ironers and finishing equipment support linen presentation, drying consistency, flatwork output and storage readiness in healthcare environments.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Direct Ironer Advanced Moisture Management System (DIAMMS)',
                            'Hygiene Guard linen rejection when humidity parameters are not respected',
                            'Risk Analysis and Biocontamination Control (RABC)-aligned humidity control',
                            'Ceramic Burner power increase up to 20% on selected gas-heated ironers',
                            'Finishing quality before storage or return to use',
                        ] as $point)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="font-body text-gray-500 text-base leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                        <a href="{{ route('equipment') }}" class="inline-flex items-start gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            View Ironer Options
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-start gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Request Healthcare Equipment Advice
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Ironers: collapsible features -->
                <div x-show="open" x-collapse class="py-6 border-t border-gray-100">
                    <!-- Tabs -->
                    <div class="flex gap-6 border-b border-gray-200 mb-8">
                        <button @click="tab = 'diamms'"
                                :class="tab === 'diamms' ? 'border-b-2 border-navy text-navy font-bold' : 'text-gray-400 hover:text-navy'"
                                class="font-heading text-sm pb-3 transition-colors">
                            DIAMMS
                        </button>
                        <button @click="tab = 'hygiene'"
                                :class="tab === 'hygiene' ? 'border-b-2 border-navy text-navy font-bold' : 'text-gray-400 hover:text-navy'"
                                class="font-heading text-sm pb-3 transition-colors">
                            Hygiene Guard
                        </button>
                    </div>

                    <!-- DIAMMS Tab -->
                    <div x-show="tab === 'diamms'">
                        <h4 class="font-heading font-bold text-navy text-xl mb-4">Maximum hygiene and performance</h4>
                        <div class="flex items-start gap-6 mb-8">
                            <div class="w-32 h-32 flex-shrink-0">
                                <img src="/images/healthcare/Diamms.png" alt="DIAMMS" class="w-full h-full object-contain">
                            </div>
                            <p class="font-body text-gray-500 text-base leading-relaxed">
                                Using DIAMMS™ technology, the Line 6000 Flatwork Ironers will automatically adapt the cylinder speed to the amount of moisture in the linen.
                            </p>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                            <div class="relative w-full rounded-2xl overflow-hidden shadow-lg" style="padding-bottom: 56.25%;">
                                <iframe class="absolute inset-0 w-full h-full"
                                        src="https://www.youtube.com/embed/KER1S0tcqeE"
                                        title="Ironers DIAMMS"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                            <div>
                                <h5 class="font-heading font-bold text-navy text-xl mb-3">Extreme customization of the ironing and folding programs</h5>
                                <p class="font-body text-gray-500 text-base leading-relaxed">FoldFlex ensures the highest quality at the end of the finishing process so that linen can be safely and securely stored, ready for the next bed.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Hygiene Guard Tab -->
                    <div x-show="tab === 'hygiene'">
                        <h4 class="font-heading font-bold text-navy text-xl mb-4">Pure Hygiene: Flawless Dry Linen Delivery</h4>
                        <div class="flex items-start gap-6 mb-8">
                            <div class="w-32 h-32 flex-shrink-0">
                                <img src="/images/healthcare/HygieneGuard.png" alt="Hygiene Guard" class="w-full h-full object-contain">
                            </div>
                            <p class="font-body text-gray-500 text-base leading-relaxed">
                                Hygiene Guard, in conjunction with DIAMMS™, will automatically reject any linen if it does not comply with the prescribed humidity parameters set by the RABC standards.
                            </p>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                            <div class="relative w-full rounded-2xl overflow-hidden shadow-lg" style="padding-bottom: 56.25%;">
                                <iframe class="absolute inset-0 w-full h-full"
                                        src="https://www.youtube.com/embed/KER1S0tcqeE"
                                        title="Ironers Hygiene Guard"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                            <div>
                                <h5 class="font-heading font-bold text-navy text-xl mb-3">Extreme customization of the ironing and folding programs</h5>
                                <p class="font-body text-gray-500 text-base leading-relaxed">FoldFlex ensures the highest quality at the end of the finishing process so that linen can be safely and securely stored, ready for the next bed.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- DOSING & LAUNDRY CONTROL — COMPACT BLOCK -->
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center reveal">

            {{-- Single dosing product image --}}
            <div class="flex items-center justify-center order-1">
                <img src="/images/healthcare/efficientDosing_equip.webp"
                     alt="Electrolux Professional dosing system"
                     class="w-full max-w-md h-auto object-contain">
            </div>

            {{-- Copy --}}
            <div class="order-2">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-2">Dosing &amp; Laundry Control</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                    <span><span style="color:#148af4;">Cut detergent waste</span> before it</span>
                    <span>becomes another running cost</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-5 max-w-xl">
                    Automatic dosing supports healthcare laundry rooms by using the right amount of detergent for each cycle. That can reduce waste, lower chemical overuse, protect textile quality and support more consistent wash results over time.
                </p>

                <div class="flex items-center flex-wrap gap-x-4 gap-y-2 mb-5">
                    @foreach(['Less detergent waste', 'Lower maintenance pressure', 'Better cost control'] as $i => $pt)
                    @if($i > 0)<span class="text-navy/20">|</span>@endif
                    <span class="font-body text-navy text-sm font-bold">{{ $pt }}</span>
                    @endforeach
                </div>

                <p class="font-body text-gray-500 text-sm leading-relaxed mb-6">
                    Selected dosing options include Multisave, DOSAVE, JETSAVE and Efficient Dosing
                </p>

                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-8 py-4 rounded-lg text-sm transition-colors duration-200">
                    Ask About Dosing Systems
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

        </div>

    </div>
</section>

@include('components.why-choose-strip', [
    'eyebrow' => 'Equipment Rental',
    'headingLine1' => '<span style="color:#148af4;">Keep healthcare laundry moving</span>',
    'headingLine2' => 'without one large purchase upfront',
    'body' => 'For healthcare sites facing replacement pressure, capacity needs or ageing equipment, rental can keep the laundry room moving with a lower upfront cost than outright purchase, where rental is the right fit for the site.',
    'miniPoints' => ['Lower upfront cost', 'Avoid one large purchase', 'Installed and supported'],
])

@include('components.equipment-categories', [
    'heading'     => 'Equipment options for <span style="color:#148af4;">healthcare laundry rooms</span>',
    'subheading'  => 'Use this section as a simple way into the main equipment categories. The detailed decision should still begin with the room, workload, hygiene process and maintenance needs.',
    'equipment'   => [
        ['img' => 'line6000-barrier-washer',     'name' => 'Barrier Washers',    'desc' => 'For controlled dirty-side and clean-side handling where the hygiene process demands separation.', 'box' => 250, 'mb' => -20, 'route' => ['equipment.category', 'barrier-washers']],
        ['img' => 'commercialwasher',             'name' => 'Commercial Washers', 'desc' => 'For broader healthcare wash needs, daily capacity and consistent professional washing.',           'box' => 270, 'mb' => -35, 'route' => ['equipment.category', 'washers']],
        ['img' => 'Tumble-dryers_Heat-Pump_1-1',  'name' => 'Tumble Dryers',      'desc' => 'For daily drying demand, drying control and steady turnaround through the day.',                  'box' => 245,            'route' => ['equipment.category', 'tumble-dryers']],
        ['img' => 'IB623_FRONT_NEW', 'ext' => 'jpg', 'name' => 'Ironers & Flatwork', 'desc' => 'For finishing, linen presentation and linen ready for storage or return to use.',                'route' => ['equipment.category', 'ironers']],
    ],
])

{{-- Process Block --}}
<section class="py-14 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 text-center">How We Work</p>
        <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3 text-center">
            Clear advice before the next <span style="color:#148af4;">equipment or service decision</span>
        </h2>
        <p class="font-body text-gray-500 text-base mb-12 max-w-xl leading-relaxed text-center mx-auto">
            From the first room review through to equipment advice, supply, rental, maintenance and aftercare, the next step should be clear before money is spent.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-20">

            @foreach([
                ['title' => 'Understand the<br>healthcare laundry room',   'text' => 'Review room layout, hygiene handling, utilities, capacity, staff pressure and day-to-day laundry&nbsp;demand.', 'icon' => 'clipboard'],
                ['title' => 'Match equipment to hygiene<br>and cost pressure', 'text' => 'Recommend the right washer, dryer, finishing equipment, rental option, replacement advice or equipment&nbsp;quote.', 'icon' => 'Ativo%204'],
                ['title' => 'Plan maintenance,<br>rental and aftercare',     'text' => 'Match equipment in use to preventive maintenance, repairs, service history and follow-up&nbsp;care.', 'icon' => 'Ativo%206'],
                ['title' => 'Move to assessment',                       'text' => 'Turn the room, equipment needs and support requirements into a clear next&nbsp;step.', 'icon' => 'Ativo%203'],
            ] as $i => $step)

            <div class="flex flex-col items-center text-center relative">
                @if($i < 3)
                <div class="hidden lg:block absolute -right-16 top-8 text-[#148af4]">
                    <svg class="w-24 h-10" viewBox="0 0 120 30" fill="none">
                        <path d="M0 15 L96 15 M78 4 L96 15 L78 26" stroke="#148af4" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                @endif
                <div class="w-full flex justify-center items-center mb-4" style="height:6rem;">
                    <img src="/images/icons/brand/{{ $step['icon'] }}.svg" alt=""
                         style="width:5rem;height:5rem;filter:brightness(0) saturate(100%) invert(35%) sepia(96%) saturate(1500%) hue-rotate(196deg) brightness(103%);">
                </div>
                <h3 class="font-heading font-bold text-navy text-sm lg:text-base mb-1">{!! $step['title'] !!}</h3>
                <p class="font-body text-gray-500 text-base leading-relaxed">{!! $step['text'] !!}</p>
            </div>

            @endforeach

        </div>
    </div>
</section>

@include('components.service-contracts-strip', [
    'eyebrow'      => 'After Installation',
    'headingLine1' => '<span class="block"><span style="color:#011E41;">Protect the savings,</span> <span style="color:#011E41;">hygiene</span></span><span class="block"><span style="color:#011E41;">routines</span> and continuity built into</span>',
    'headingLine2' => '<span style="color:#ffffff;">the equipment decision</span>',
    'body'         => 'The right equipment decision should not lose value after installation. Planned maintenance and aftercare keep the room, equipment and next steps clear, helping healthcare sites reduce surprise repair costs and keep vital laundry equipment running.',
    'image'        => '/images/healthcare/support-aftercare-hero.png',
    'miniPoints'   => ['Reduce surprise repair costs', 'Support hygiene routines', 'Keep equipment running'],
    'cta1Label'    => 'View Preventive Maintenance Contracts',
    'cta1Route'    => 'service-contracts',
    'cta2Label'    => 'Explore Support &amp; Aftercare',
    'cta2Route'    => 'parts-aftercare',
])

<section class="pt-16 lg:pt-24 bg-white">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">
        <div class="text-center max-w-3xl mx-auto">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Customer Trust</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-3xl lg:text-5xl leading-tight text-balance mb-4">
                Trusted <span style="color:#148af4;">healthcare laundry support</span> in Ireland
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Trusted by healthcare organisations across Ireland, including HSE (Health Service Executive) services, Irish Laundry Systems supports healthcare laundry environments where hygiene routines, equipment reliability and clear service support matter.
            </p>
        </div>
    </div>
</section>

@include('components.testimonials', [
    'single'     => 'grace',
])

@include('components.proof-bar')

@include('components.faq', [
    'eyebrow'    => 'Healthcare Laundry FAQs',
    'heading'    => 'Questions before requesting a <span style="color:#148af4;">healthcare laundry assessment</span>',
    'subheading' => '',
    'faqs' => [
        ['question' => 'What types of healthcare sites do you support?',                       'answer' => 'Irish Laundry Systems supports healthcare, clinical and related commercial laundry environments where hygiene routines, clean linen availability, equipment performance and service continuity matter.'],
        ['question' => 'Do you support healthcare organisations connected with HSE services?', 'answer' => 'Yes. Irish Laundry Systems is trusted by healthcare organisations across Ireland, including HSE (Health Service Executive) services, with support for commercial laundry environments where hygiene routines, equipment reliability and clear service support are important.'],
        ['question' => 'Do you supply barrier washers for infection-control laundry rooms?',   'answer' => 'Yes. Irish Laundry Systems supplies and supports Electrolux Professional barrier washer equipment for sites where dirty-side and clean-side handling need to remain separated.'],
        ['question' => 'Do the machines support healthcare laundry standards?',                'answer' => 'Selected Electrolux Professional healthcare laundry equipment supports hygiene-focused laundry processes, dirty-side and clean-side separation, RABC-aligned controls where specified, and the standards expected in clinical and care environments when specified, installed and used correctly.'],
        ['question' => 'Can you assess whether our existing laundry room is costing too much to run?', 'answer' => 'Yes. Irish Laundry Systems can review room layout, machine type, capacity, utilities, maintenance history, repair pressure and replacement needs to understand where costs may be building up.'],
        ['question' => 'Can Electrolux Professional equipment reduce energy and water use?',   'answer' => 'Selected Electrolux Professional technologies can reduce utility pressure. Examples include Heat Pump dryer technology, double-drain water recycling, Integrated Savings and Efficient Dosing, depending on the equipment and site configuration.'],
        ['question' => 'What does a Preventive Maintenance Contract include for healthcare sites?', 'answer' => 'A contract can include scheduled preventive visits, inspection, reporting, practical follow-up and preferential support conditions under the agreement. Parts are not assumed to be included unless agreed.'],
        ['question' => 'How quickly can you respond to a breakdown call-out?',                 'answer' => 'Breakdown calls are handled based on urgency, site pressure, equipment details and maintenance history. Contract customers may receive preferential service and labour rates under their agreement.'],
        ['question' => 'Can equipment be rented rather than purchased outright?',              'answer' => 'Yes. Equipment Rental can be discussed where a healthcare site needs replacement, expansion or continuity without one large purchase upfront, where rental is suitable for the site.'],
        ['question' => 'Do you support equipment after installation?',                         'answer' => 'Yes. Support & Aftercare uses service history, practical follow-up, genuine parts support where needed and future equipment decisions after installation, repair, rental or maintenance.'],
    ],
])

<div id="healthcare-assessment"></div>
@include('components.cta-downtime-form', [
    'pageSource'        => 'healthcare_cta',
    'eyebrow'           => 'Request Healthcare Assessment',
    'heading'           => 'Ready to understand your <span style="color:#148af4;">healthcare laundry costs</span>',
    'body'              => 'Talk to Irish Laundry Systems about your healthcare site, equipment, service history, laundry pressure and budget needs. We will guide you toward the right equipment advice, equipment quote, rental, maintenance, repair or aftercare support.',
    'formTitle'         => 'Request a Healthcare Laundry Assessment',
    'buttonText'        => 'Request Healthcare Assessment',
    'showLocationField' => true,
    'equipmentLabel'    => 'Current equipment type',
    'messageLabel'      => 'Current issue or requirement',
    'messageRequired'   => true,
    'requestTypeLabel'  => 'Are you looking at equipment purchase, rental, repair or maintenance?',
])

@endsection
