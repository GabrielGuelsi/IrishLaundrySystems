@extends('layouts.app')

@section('meta')
<meta name="description" content="Engineering-led commercial laundry support for healthcare — barrier washers, service contracts, and priority response across Ireland.">

@endsection

@section('content')

<!-- 1. HERO -->
<section class="relative overflow-hidden flex flex-col" style="height:720px; min-height:560px;">
    <!-- Background image -->
    <img src="/images/healthcare/healthcarehero.png" alt="Healthcare laundry installation"
         class="absolute inset-0 w-full h-full object-cover object-right">
    <!-- Content -->
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16 py-24 lg:py-32">
            <div class="max-w-4xl reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Healthcare Laundry Support</p>
                <h1 class="font-heading font-bold text-navy text-4xl lg:text-6xl leading-tight mb-4">
                    <span class="whitespace-nowrap block" style="color:#148af4;">Control healthcare laundry</span>
                    <span class="whitespace-nowrap block">pressure before it becomes</span>
                    <span class="whitespace-nowrap block">a daily cost problem</span>
                </h1>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8 max-w-2xl">
                    Healthcare laundry rooms carry hygiene, linen flow, patient safety, staff pressure and running-cost demands every day. Irish Laundry Systems supports healthcare sites with Electrolux Professional equipment, planned maintenance, repairs, rental and aftercare around the way the room actually operates.
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
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight">
                    <span class="whitespace-nowrap block">Healthcare laundry</span>
                    <span class="whitespace-nowrap block">is a <span style="color:#148af4;">hygiene</span> and</span>
                    <span class="whitespace-nowrap block"><span style="color:#148af4;">cost-control</span> issue</span>
                </h2>
            </div>

            <div class="reveal reveal-right lg:pt-8">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-2">
                    <span class="whitespace-nowrap block">The wrong laundry setup can drain budget every day through energy, water, detergent</span>
                    <span class="whitespace-nowrap block">waste, staff pressure, linen delays, reactive call-outs and replacement pressure.</span>
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Irish Laundry Systems connects room layout, workflow, capacity, equipment, maintenance, repairs, rental and aftercare into one practical plan, so healthcare sites can control costs while protecting hygiene flow.
                </p>
                <a href="{{ route('sectors.healthcare') }}#healthcare-equipment"
                   class="inline-flex items-start gap-2 bg-navy hover:bg-navy-dark text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    See the equipment we provide
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
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-6">
                <span class="whitespace-nowrap block">Laundry and <span style="color:#148af4;">infection control</span> need</span>
                <span class="whitespace-nowrap block">to work as <span style="color:#148af4;">one process</span></span>
            </h2>
            <p class="font-body text-gray-600 text-base leading-relaxed mb-4">
                In healthcare and care environments, laundry is not only about washing linen. Dirty-side handling, clean-side unloading, drying, finishing, transport and storage all affect how controlled the process remains.
            </p>
            <p class="font-body text-gray-600 text-base leading-relaxed mb-4">
                Electrolux Professional barrier systems are built around physical separation between soiled and clean linen handling, supporting hygiene control where cross-contamination risk needs to be managed. Irish Laundry Systems connects that equipment logic with the room, workflow and ongoing care around it.
            </p>
        </div>

        <!-- Image + Navy card overlay -->
        <div class="relative reveal">

            <!-- Image -->
            <div class="w-full lg:w-4/5 ml-auto rounded-2xl overflow-hidden">
                <img src="/images/healthcare/render-double-page_72dpi.jpg"
                     alt="Healthcare laundry room"
                     class="w-full h-[580px] object-cover object-center">
            </div>

            <!-- Navy card overlapping left -->
            <div class="lg:absolute lg:top-1/2 lg:-translate-y-1/2 lg:left-0 mt-6 lg:mt-0 w-full lg:w-[490px] bg-navy rounded-2xl p-10 shadow-2xl">
                <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-snug mb-6">
                    Healthcare laundry needs a <strong>connected process</strong>, not isolated equipment
                </h3>
                <ul class="space-y-3">
                    @foreach([
                        'Dirty-side and clean-side separation',
                        'Barrier washer process logic',
                        'Risk Analysis and Biocontamination Control (RABC)-aligned laundry process support',
                        'Washing, drying, finishing and storage connected',
                        'Planned care for the equipment already on-site',
                    ] as $point)
                    <li class="flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-[#148af4] flex-shrink-0"></span>
                        <span class="font-body text-white text-sm">{{ $point }}</span>
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
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Workflow Matters</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight">
                <span class="whitespace-nowrap block"><span style="color:#148af4;">Dirty-side and clean-side</span> handling need a</span>
                <span class="whitespace-nowrap block"><span style="color:#148af4;">controlled healthcare laundry flow</span></span>
            </h2>
        </div>
        <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
            A healthcare laundry room needs more than the right machine. It needs controlled movement of linen through sorting, washing, drying, finishing, storage and return to use.
        </p>
        <p class="font-body text-gray-500 text-base leading-relaxed mb-10">
            Electrolux Professional's healthcare laundry logic highlights the full laundry cycle, from dirty linen collection through washing, drying, finishing, clean linen protection and storage. Irish Laundry Systems uses that thinking to plan the room, equipment and aftercare around the way linen actually moves.
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
                    Watch workflow video
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
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-6">
                <span class="whitespace-nowrap block"><span style="color:#148af4;">Control healthcare laundry costs</span> before</span>
                <span class="whitespace-nowrap block">poor setup drains budget</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                <span class="whitespace-nowrap block">Healthcare laundry can become a daily cost problem through energy use, water use, detergent waste, staff strain, linen delays and reactive call-outs.</span>
                <span class="whitespace-nowrap block">The right equipment plan should protect hygiene flow while reducing avoidable running-cost pressure.</span>
            </p>
        </div>

        {{-- 5-item grid --}}
        <div class="grid grid-cols-2 lg:grid-cols-5 gap-x-8 gap-y-10">

            {{-- Metric 1 --}}
            <div class="flex flex-col gap-2 col-span-1">
                <div class="flex flex-col gap-0 min-h-[4.5rem]">
                    <span class="font-body font-bold text-[#148af4] text-base">Up to</span>
                    <div class="flex items-center gap-3">
                        <div class="font-heading font-bold text-[#148af4] text-4xl leading-none">-65%</div>
                        <img src="/images/icons/7.png" alt="" class="w-12 h-12 object-contain flex-shrink-0">
                    </div>
                </div>
                <h3 class="font-heading font-bold text-[#148af4] text-sm leading-snug">dryer energy use</h3>
                <p class="font-body text-gray-500 text-base leading-relaxed">Electrolux Professional Heat Pump dryer technology can reduce energy consumption by up to 65% in suitable applications.</p>
            </div>

            {{-- Metric 2 --}}
            <div class="flex flex-col gap-2 col-span-1">
                <div class="flex flex-col gap-0 min-h-[4.5rem]">
                    <span class="font-body font-bold text-[#148af4] text-base">Up to</span>
                    <div class="flex items-center gap-3">
                        <div class="font-heading font-bold text-[#148af4] text-4xl leading-none">-50%</div>
                        <img src="/images/icons/8.png" alt="" class="w-12 h-12 object-contain flex-shrink-0">
                    </div>
                </div>
                <h3 class="font-heading font-bold text-[#148af4] text-sm leading-snug">water use</h3>
                <p class="font-body text-gray-500 text-base leading-relaxed">Double-drain barrier washer configurations can support water recycling and reduce water consumption by up to 50% where suitable.</p>
            </div>

            {{-- Metric 3 --}}
            <div class="flex flex-col gap-2 col-span-1">
                <div class="flex flex-col gap-0 min-h-[4.5rem]">
                    <span class="font-body font-bold text-[#148af4] text-base">Up to</span>
                    <div class="flex items-center gap-3">
                        <div class="font-heading font-bold text-[#148af4] text-4xl leading-none">-75%</div>
                        <img src="/images/icons/9.png" alt="" class="w-12 h-12 object-contain flex-shrink-0">
                    </div>
                </div>
                <h3 class="font-heading font-bold text-[#148af4] text-sm leading-snug">sick days</h3>
                <p class="font-body text-gray-500 text-base leading-relaxed">Electrolux Professional ergonomics material cites a 75% average decrease in sick days, alongside a 59% reduction in Work-related Musculoskeletal Disorders and a 25% productivity increase.</p>
            </div>

            {{-- Business 4 --}}
            <div class="flex flex-col gap-2 col-span-1">
                <div class="flex items-start gap-2 min-h-[4.5rem]">
                    <h3 class="font-heading font-bold text-[#148af4] leading-snug">
                        <span class="text-2xl">Less<br>waste</span>
                    </h3>
                    <img src="/images/icons/10.png" alt="" class="w-12 h-12 object-contain flex-shrink-0">
                </div>
                <p class="font-heading font-bold text-[#148af4] text-sm leading-snug">and process waste</p>
                <p class="font-body text-gray-500 text-base leading-relaxed">Integrated Savings and Efficient Dosing support better control of load, water and detergent use, reducing waste from underloading, overloading and poor process control.</p>
            </div>

            {{-- Business 5 --}}
            <div class="flex flex-col gap-2 col-span-2 lg:col-span-1">
                <div class="flex items-start gap-2 min-h-[4.5rem]">
                    <h3 class="font-heading font-bold text-[#148af4] leading-snug">
                        <span class="text-2xl">Fewer<br>surprise</span>
                    </h3>
                    <img src="/images/icons/11.png" alt="" class="w-12 h-12 object-contain flex-shrink-0">
                </div>
                <p class="font-heading font-bold text-[#148af4] text-sm leading-snug">repair and service pressure</p>
                <p class="font-body text-gray-500 text-base leading-relaxed">Irish Laundry Systems connects equipment planning, preventive maintenance, repairs, rental and aftercare so healthcare laundry decisions are not only made after something fails.</p>
            </div>

        </div>
    </div>
</section>

{{-- Technical Bento: 5-card compact grid --}}
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- Header --}}
        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Technical Proof</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-6">
                <span class="whitespace-nowrap block">Features that support <span style="color:#148af4;">hygiene flow</span>,</span>
                <span class="whitespace-nowrap block"><span style="color:#148af4;">staff handling</span> and <span style="color:#148af4;">process control</span></span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Selected Electrolux Professional features support safer handling, cleaner process flow and more consistent laundry routines when matched to the right healthcare room.
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
                    <p class="font-body text-gray-500 text-base leading-relaxed">Barrier configurations support separated handling between soiled and clean linen routes.</p>
                </div>
            </div>

            {{-- Card 2: Operator --}}
            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/4.png" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Operator wellbeing first</h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed">Door access, drum positioning and loading logic help reduce strain during repeated handling tasks.</p>
                </div>
            </div>

            {{-- Card 3: Control --}}
            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/5.png" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Guided process control</h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed">ClarusVibe and CompassPro give operators guided programs, status messages and clearer day-to-day control.</p>
                </div>
            </div>

            {{-- Card 4: ERGOCERT --}}
            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/6.png" alt="4-star ERGOCERT" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">ERGOCERT ergonomics</h3>
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
                    <p class="font-body text-gray-500 text-base leading-relaxed">Auto Inner Door Opening (AIDO) supports controlled loading and unloading in barrier washer configurations.</p>
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
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Support Routes</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-6">
                Connected support to <span style="color:#148af4;">keep healthcare laundry moving</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Healthcare sites need equipment, maintenance, repairs and aftercare to work around the same room, linen flow and staff pressure.
            </p>
        </div>

        <!-- 4-column card grid -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">

            @foreach([
                [
                    'title'  => 'Repairs &amp; Call-outs',
                    'text'   => 'For urgent equipment faults that can interrupt linen flow, increase staff pressure or affect day-to-day healthcare laundry routines.',
                    'cta'    => 'Request Call-out',
                    'route'  => route('repairs'),
                    'img'    => '/images/healthcare/repairs-callouts.jpg',
                    'pos'    => 'center 40%',
                ],
                [
                    'title'  => 'Preventive Maintenance Contracts',
                    'text'   => 'For healthcare sites that need planned visits, fewer reactive maintenance decisions and better control around critical laundry equipment.',
                    'cta'    => 'View Contracts',
                    'route'  => route('service-contracts'),
                    'img'    => '/images/healthcare/Service Contracts.png',
                    'pos'    => 'center 35%',
                ],
                [
                    'title'  => 'Equipment Rental',
                    'text'   => 'For replacement pressure, capacity needs or continuity planning when outright capital purchase is not the best route for the site.',
                    'cta'    => 'See Rental Options',
                    'route'  => route('rental'),
                    'img'    => '/images/healthcare/commercial-industrial.jpg',
                    'pos'    => 'center center',
                ],
                [
                    'title'  => 'Support &amp; Aftercare',
                    'text'   => 'For service history, genuine parts access where applicable and clearer repair, rental or replacement decisions after installation or inspection.',
                    'cta'    => 'Explore Support Options',
                    'route'  => route('service-contracts'),
                    'img'    => '/images/healthcare/services-overview-hero-portrait.jpg',
                    'pos'    => 'center center',
                ],
            ] as $card)
            <a href="{{ $card['route'] }}"
               class="group relative overflow-hidden rounded-2xl block"
               style="height:400px;">
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
                    <h3 class="font-heading font-bold text-white text-xl lg:text-2xl leading-tight mb-4">{!! $card['title'] !!}</h3>
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

@include('components.cta-combined-banner')

<!-- 5. BARRIER WASHERS PRODUCT BLOCK -->

{{-- A2: Navy intro block --}}

<!-- PRODUCTS: Barrier Washers / Tumble Dryers / Ironers -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-12">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Electrolux Professional Equipment</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-6">
                <span class="whitespace-nowrap block">Equipment built around <span style="color:#148af4;">healthcare hygiene</span>,</span>
                <span class="whitespace-nowrap block">flow and <span style="color:#148af4;">running cost</span></span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                The right equipment plan depends on room configuration, linen flow, wash demand, drying pressure, finishing needs and the care that keeps the equipment performing over time.
            </p>
        </div>

        <div class="flex flex-col divide-y divide-gray-100">

            <!-- 1. Barrier Washers — text left, image right -->
            <div x-data="{ open: false, tab: 'aido' }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="lg:pt-10">
                    <h3 class="font-heading font-bold text-navy text-4xl lg:text-5xl mb-3">Barrier <strong>Washers</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                        Barrier washers are central where healthcare laundry rooms need <span style="color:#148af4;">controlled dirty-side loading and clean-side unloading</span> as part of the hygiene process.
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
                    <div class="flex flex-row flex-wrap items-center gap-4">
                        <a href="{{ route('equipment') }}" class="inline-flex items-start gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            View Equipment
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-start gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Request Assessment
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
                </div>
                <div class="lg:-ml-20 lg:mt-10">
                    <h3 class="font-heading font-bold text-navy text-4xl lg:text-5xl mb-3">Commercial <strong>Washers</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                        Commercial washers support broader healthcare wash needs where barrier separation is not required for every load, but <span style="color:#148af4;">capacity, consistency and daily handling</span> still matter.
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
                    <div class="flex flex-row flex-wrap items-center gap-4">
                        <a href="{{ route('equipment') }}" class="inline-flex items-start gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Go to Products
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-start gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Request Assessment
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2. Tumble Dryers — text left, image right -->
            <div x-data="{ open: false }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="order-2 lg:order-1">
                    <h3 class="font-heading font-bold text-navy text-4xl lg:text-5xl mb-3">Tumble <strong>Dryers</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                        Tumble dryers support post-wash flow where <span style="color:#148af4;">drying time, residual moisture</span>, operator handling and energy use affect clean-side movement through the day.
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
                    <div class="flex flex-row flex-wrap items-center gap-4 mb-6">
                        <a href="{{ route('equipment') }}" class="inline-flex items-start gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Go to Products
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-start gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Request Assessment
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
                    <h3 class="font-heading font-bold text-navy text-4xl lg:text-5xl mb-3">Ironers &amp; <strong>Finishing</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                        Ironers and finishing equipment support <span style="color:#148af4;">flatwork flow, linen presentation</span>, drying consistency and storage readiness in healthcare environments.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Direct Ironer Advanced Moisture Management System (DIAMMS)',
                            'Hygiene Guard linen rejection when humidity parameters are not respected',
                            'Risk Analysis and Biocontamination Control (RABC)-related humidity control',
                            'Ceramic Burner power increase up to 20% on selected gas-heated ironers',
                            'Finishing quality before storage or return to use',
                        ] as $point)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="font-body text-gray-500 text-base leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-row flex-wrap items-center gap-4">
                        <a href="{{ route('equipment') }}" class="inline-flex items-start gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Go to Products
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-start gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Request Assessment
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

<!-- DOSING & LAUNDRY CONTROL CAROUSEL -->
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- Section header --}}
        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-2">Dosing &amp; Laundry Control</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-3">
                <span class="whitespace-nowrap block"><span style="color:#148af4;">Cut detergent waste</span> before it becomes another</span>
                <span class="whitespace-nowrap block">running cost</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-2xl">
                <span class="whitespace-nowrap block">Automatic dosing supports healthcare laundry rooms by using the right amount of detergent for each cycle.</span>
                <span class="whitespace-nowrap block">That can reduce waste, lower chemical overuse, protect textile quality and support more consistent wash results over time.</span>
            </p>
        </div>

        {{-- Carousel --}}
        @php
        $dosingProducts = [
            [
                'name'    => 'Multisave',
                'label'   => 'Multi-tank dosing with water saving',
                'body'    => 'Multisave combines dosing control with cylinder-to-cylinder water saving across multi-tank machines. It reduces the volume of water and detergent used per cycle without compromising wash quality or hygiene standards.',
                'points'  => ['Multi-tank machine compatible', 'Reduces water and detergent per cycle', 'Supports wash cycle optimisation'],
                'img'     => '/images/healthcare/MultisaveEQUIP.webp',
                'color'   => '#011E41',
            ],
            [
                'name'    => 'DOSAVE',
                'label'   => 'Precise dosing for consistent results',
                'body'    => 'DOSAVE delivers accurate detergent dosing for each wash cycle, reducing chemical overuse and waste. It supports more consistent wash quality while lowering detergent running cost over time.',
                'points'  => ['Accurate cycle-by-cycle dosing', 'Reduces chemical waste', 'Lowers detergent running cost'],
                'img'     => '/images/healthcare/DOSAVEEQUIP.webp',
                'color'   => '#0d2d5e',
            ],
            [
                'name'    => 'JETSAVE',
                'label'   => 'Jet-based dosing with integrated saving',
                'body'    => 'JETSAVE uses a water jet to mix and deliver detergent precisely into the drum. It is designed to reduce both water and detergent consumption while maintaining consistent wash performance across cycles.',
                'points'  => ['Jet-based detergent delivery', 'Water and detergent saving', 'Compatible with CompassPro control'],
                'img'     => '/images/healthcare/JetsaveEQUIP.webp',
                'color'   => '#0a2448',
            ],
            [
                'name'    => 'Efficient Dosing',
                'label'   => 'Integrated dosing through CompassPro',
                'body'    => 'Efficient Dosing integrates directly with CompassPro to ensure the correct amount of detergent is used in every cycle. It removes manual dosing decisions and supports lower chemical costs over time.',
                'points'  => ['Integrated with CompassPro', 'Removes manual dosing errors', 'Lower detergent cost per cycle'],
                'img'     => '/images/healthcare/efficientDosing_equip.webp',
                'color'   => '#011E41',
            ],
        ];
        @endphp

        <div
            x-data="{
                active: 0,
                count: 4,
                timer: null,
                next()  { this.active = (this.active + 1) % this.count; this.restart(); },
                prev()  { this.active = (this.active - 1 + this.count) % this.count; this.restart(); },
                go(i)   { this.active = i; this.restart(); },
                restart() { clearInterval(this.timer); this.timer = setInterval(() => this.next(), 5000); },
            }"
            x-init="timer = setInterval(() => next(), 5000)"
            class="relative"
        >
            {{-- Slides --}}
            <div class="grid [&>*]:[grid-area:1/1]">
                @foreach($dosingProducts as $i => $p)
                <div
                    class="transition-opacity duration-500"
                    :class="active === {{ $i }} ? 'opacity-100' : 'opacity-0 pointer-events-none'"
                >
                    <div class="grid grid-cols-1 lg:grid-cols-12" style="min-height:420px;">

                        {{-- Left: context photo --}}
                        <div class="lg:col-span-3 overflow-hidden" style="max-height:300px; align-self:center;">
                            <img src="/images/healthcare/Laundry-Double-Banner-965x965-1.webp"
                                 alt="Electrolux Professional laundry equipment"
                                 class="w-full h-full object-cover object-center" style="height:300px;">
                        </div>

                        {{-- Right: product name + tabs indicator + description + unit image --}}
                        <div class="lg:col-span-9 flex flex-col justify-between p-8 lg:p-10">

                            {{-- Tab indicators (product selector) --}}
                            <div class="flex gap-1 border-b border-gray-100 mb-6">
                                @foreach($dosingProducts as $j => $tab)
                                <button @click="go({{ $j }})"
                                        :class="active === {{ $j }} ? 'border-b-2 border-navy text-navy font-bold' : 'text-gray-400 hover:text-navy'"
                                        class="font-heading text-sm pb-3 pr-6 transition-colors whitespace-nowrap">
                                    {{ $tab['name'] }}
                                </button>
                                @endforeach
                            </div>

                            {{-- Content + unit image side by side --}}
                            <div class="flex gap-6 items-start flex-1">

                                {{-- Copy --}}
                                <div class="flex-1">
                                    <p class="font-body font-bold text-[#148af4] text-sm mb-2">{{ $p['label'] }}</p>
                                    <p class="font-body text-gray-600 text-base leading-relaxed mb-5">{{ $p['body'] }}</p>
                                    <div class="flex items-center gap-8">
                                        <img src="/images/healthcare/clarusvibeicon.webp" alt="ClarusVibe" class="h-12 w-auto object-contain opacity-80">
                                        <img src="/images/healthcare/Compass-Pro_1-300x88.webp" alt="CompassPro" class="h-12 w-auto object-contain opacity-80">
                                    </div>
                                </div>

                                {{-- Unit image --}}
                                @if($p['img'])
                                <div class="flex-shrink-0 w-56 lg:w-80 flex items-center justify-center">
                                    <img src="{{ $p['img'] }}" alt="{{ $p['name'] }}"
                                         class="w-full h-auto object-contain">
                                </div>
                                @else
                                <div class="flex-shrink-0 w-32 lg:w-44 flex items-center justify-center">
                                    <div class="w-24 h-24 rounded-2xl bg-[#f7f8fa] border border-gray-100 flex items-center justify-center">
                                        <span class="font-heading font-bold text-navy/30 text-xs text-center leading-tight px-2">{{ $p['name'] }}</span>
                                    </div>
                                </div>
                                @endif

                            </div>

                        </div>

                    </div>
                </div>
                @endforeach
            </div>

            {{-- Prev / Next buttons --}}
            <button @click="prev()"
                    class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-8 lg:-translate-x-14 w-10 h-10 rounded-full bg-white border border-navy/15 shadow text-navy hover:bg-navy hover:text-white transition-colors flex items-center justify-center z-10">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
            </button>
            <button @click="next()"
                    class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-8 lg:translate-x-14 w-10 h-10 rounded-full bg-white border border-navy/15 shadow text-navy hover:bg-navy hover:text-white transition-colors flex items-center justify-center z-10">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
            </button>

            {{-- Dot navigation --}}
            <div class="flex items-center justify-center gap-2 mt-3">
                @foreach($dosingProducts as $i => $p)
                <button
                    @click="go({{ $i }})"
                    :class="active === {{ $i }} ? 'bg-[#148af4] w-6' : 'bg-navy/20 hover:bg-navy/40 w-2'"
                    class="h-2 rounded-full transition-all duration-300">
                </button>
                @endforeach
            </div>

        </div>

        {{-- CTA --}}
        <div class="mt-4 text-center">
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-8 py-4 rounded-lg text-sm transition-colors duration-200">
                Ask About Dosing Systems
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

    </div>
</section>

@include('components.why-choose-strip')

@include('components.equipment-categories')

{{-- Process Block --}}
<section class="py-14 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 text-center">Process</p>
        <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl mb-3 text-center">
            Our process keeps the <span style="color:#148af4;">next step</span> clear
        </h2>
        <p class="font-body text-gray-500 text-base mb-12 max-w-xl leading-relaxed text-center mx-auto">
            From the initial room assessment through to equipment, maintenance and aftercare, each step connects to the next.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-20">

            @foreach([
                ['title' => 'Understand the healthcare laundry room',   'text' => 'Review room layout, workflow, hygiene handling, utilities, capacity and day-to-day&nbsp;pressure.',          'icon' => 'clipboard'],
                ['title' => 'Match equipment to hygiene and cost pressure', 'text' => 'Recommend the right washer, dryer, finishing setup, rental route or replacement&nbsp;plan.',           'icon' => 'Ativo%204'],
                ['title' => 'Connect maintenance, rental and aftercare',           'text' => 'Link the equipment on-site to preventive maintenance, repairs, service history and follow-up care.',  'icon' => 'Ativo%206'],
                ['title' => 'Move to assessment',                       'text' => 'Turn the room, equipment<br>setup and support model<br>into a practical next step.',       'icon' => 'Ativo%203'],
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
                <h3 class="font-heading font-bold text-navy text-sm lg:text-base mb-1">{{ $step['title'] }}</h3>
                <p class="font-body text-gray-500 text-base leading-relaxed">{!! $step['text'] !!}</p>
            </div>

            @endforeach

        </div>
    </div>
</section>

@include('components.service-contracts-strip', [
    'headingLine1' => '<span class="whitespace-nowrap block">Protect the savings, hygiene</span><span class="whitespace-nowrap block">flow and continuity built into</span>',
    'headingLine2' => 'the equipment decision',
    'body'         => 'The right equipment decision should not lose value after installation. Planned maintenance and aftercare keep the room, equipment and next decisions connected so healthcare sites can reduce surprise repair costs and keep vital laundry equipment running.',
    'miniPoints'   => ['Reduce surprise repair costs', 'Protect hygiene flow', 'Keep equipment running'],
    'cta1Label'    => 'View Preventive Maintenance Contracts',
    'cta2Label'    => 'Explore Support &amp; Aftercare',
])

@include('components.testimonials', [
    'eyebrow'    => 'Customer Trust',
    'heading'    => 'What our <span style="color:#148af4;">healthcare customers</span> say',
    'subheading' => '',
])

@include('components.proof-bar')

@include('components.faq', [
    'eyebrow'    => 'Healthcare Laundry FAQs',
    'heading'    => 'Questions before requesting a <span style="color:#148af4;">healthcare laundry assessment</span>',
    'subheading' => '',
    'faqs' => [
        ['question' => 'What types of healthcare sites do you support?',                       'answer' => 'Irish Laundry Systems supports healthcare, clinical and related commercial laundry environments where hygiene, linen flow, equipment performance and service continuity matter.'],
        ['question' => 'Do you supply barrier washers for infection-control laundry rooms?',   'answer' => 'Yes. Irish Laundry Systems supplies and supports Electrolux Professional barrier washer equipment for sites where dirty-side and clean-side handling need to remain separated.'],
        ['question' => 'Can you help assess whether our existing laundry room is costing too much to run?', 'answer' => 'Yes. We can review room layout, machine type, capacity, utilities, maintenance history, repair pressure and replacement needs to understand where costs may be building up.'],
        ['question' => 'Can Electrolux Professional equipment reduce energy and water use?',   'answer' => 'Selected Electrolux Professional technologies can reduce utility pressure. Examples include Heat Pump dryer technology, double-drain water recycling, Integrated Savings and Efficient Dosing, depending on the equipment and site configuration.'],
        ['question' => 'What does a Preventive Maintenance Contract include for healthcare sites?', 'answer' => 'A contract can include scheduled preventive visits, inspection, reporting, practical follow-up and preferential support conditions where applicable. Parts are not assumed to be included unless agreed.'],
        ['question' => 'How quickly can you respond to a breakdown call-out?',                 'answer' => 'Breakdown calls are handled based on urgency, site pressure, equipment details and maintenance history. Contract customers may receive preferential service and labour rates where applicable.'],
        ['question' => 'Can equipment be rented rather than purchased outright?',              'answer' => 'Yes. Equipment Rental can be discussed where a healthcare site needs replacement, expansion or continuity without one large capital purchase.'],
        ['question' => 'Do you support equipment after installation?',                         'answer' => 'Yes. Support & Aftercare connects service history, practical follow-up, genuine parts access where applicable and future equipment decisions after installation, repair, rental or maintenance.'],
    ],
])

@include('components.cta-downtime-form', ['pageSource' => 'healthcare_cta'])

@endsection
