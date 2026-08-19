@extends('layouts.app')

@section('meta')
<meta name="description" content="Engineering-led commercial laundry support for healthcare — barrier washers, service contracts, and priority response across Ireland.">

@endsection

@section('content')

<!-- 1. HERO -->
<section class="relative overflow-hidden flex flex-col min-h-[520px] lg:!min-h-[560px] lg:!h-[720px]" style="height:auto;">
    <!-- Background image -->
    <img src="/images/pages/sectors/healthcarehero.png" alt="Healthcare laundry installation"
         class="absolute inset-0 w-full h-full object-cover object-right">
    <!-- Content -->
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16 py-16 lg:py-32">
            <div class="max-w-5xl reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Healthcare Laundry</p>
                <h1 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-4">
                    <span class="sm:block">Healthcare laundry for <span style="color:#148af4;">hygiene, safety</span></span>
                    <span class="sm:block" style="color:#148af4;">and continuous operation</span>
                </h1>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8 max-w-4xl">
                    Commercial laundry equipment, installation and ongoing support<br class="hidden lg:block"> for hospitals, clinics and other healthcare facilities across Ireland.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#healthcare-assessment"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Healthcare Assessment
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
        <div class="grid grid-cols-1 lg:grid-cols-[6fr_5fr] gap-8 lg:gap-8 items-start">

            <div class="reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Laundry Process</p>
                <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight">
                    <span class="lg:whitespace-nowrap">Healthcare laundry</span><br class="hidden lg:block"><span class="lg:whitespace-nowrap">from soiled linen</span><br class="hidden lg:block"><span class="lg:whitespace-nowrap">to <span style="color:#148af4;">clean linen</span></span>
                </h2>
            </div>

            <div class="reveal reveal-right lg:pt-8">
                <p class="font-body text-gray-500 text-base leading-relaxed">
                    <span class="lg:block">The right setup makes each stage easier for staff to manage,</span>
                    <span class="lg:block">supports consistent handling and gives the operation the level</span>
                    <span class="lg:block">of hygiene control it actually needs, without adding</span>
                    <span class="lg:block">unnecessary complexity to the laundry process.</span>
                </p>
            </div>

        </div>
    </div>
</section>

<!-- LAUNDRY CONTROL SECTION -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <!-- Title -->
        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Laundry Control</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-6">
                <span>The right level of control for <span style="color:#148af4;">healthcare laundry</span></span>
            </h2>
            <p class="font-body text-gray-600 text-base leading-relaxed mb-4">
                Healthcare laundry requirements vary from one site to another. Irish Laundry Systems supports everything from<br class="hidden lg:block"> commercial washer-extractor installations to barrier layouts where soiled and clean handling must remain separate.
            </p>
        </div>

        <!-- Image + Navy card overlay -->
        <div class="relative reveal">

            <!-- Image -->
            <div class="w-full lg:w-4/5 ml-auto rounded-2xl overflow-hidden">
                <img src="/images/shared/render-double-page_72dpi.jpg"
                     alt="Healthcare laundry room"
                     class="w-full h-[280px] sm:h-[400px] lg:h-[580px] object-cover object-center">
            </div>

            <!-- Navy card overlapping left -->
            <div class="lg:absolute lg:top-1/2 lg:-translate-y-1/2 lg:left-0 mt-6 lg:mt-0 w-full lg:w-[600px] bg-navy rounded-2xl p-6 sm:p-10 shadow-2xl">
                <h3 class="font-heading font-bold text-white text-xl sm:text-2xl lg:text-3xl leading-snug mb-6">
                    Healthcare laundry control<br class="hidden lg:block"> starts with the right room setup
                </h3>
                <ul class="flex flex-wrap gap-x-8 gap-y-3">
                    @foreach([
                        'Soiled handling',
                        'Clean unloading',
                        'Barrier layouts',
                        'Hygiene routines',
                        'Equipment care',
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
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Separation Layouts</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                <span>See how <span style="color:#148af4;">dirty-side and clean-side separation</span> works</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Barrier washer layouts keep soiled loading and clean unloading physically separated. The visual below shows how the process works in a healthcare laundry.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center reveal">

            <!-- Infographic -->
            <div>
                <img src="/images/pages/sectors/Electrolux-Barrier-infografica-LOW.webp"
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
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-6">
                <span>Reduce <span style="color:#148af4;">everyday running costs</span></span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed min-[1440px]:whitespace-nowrap">
                The right healthcare laundry strategy can improve financial performance across your operation. The examples below highlight where measurable savings can be achieved.
            </p>
        </div>

        {{-- 5-item grid (aligned via shared component) --}}
        @include('components.financial-metrics', ['items' => [
            ['icon'=>'6',  'iconClass'=>'scale-[1.181] -translate-y-[13.2%]', 'prefix'=>'Up to', 'stat'=>'65%',            'size'=>'text-4xl', 'label'=>'dryer energy',                'body'=>'Heat Pump dryer technology can reduce energy use while supporting controlled drying performance.'],
            ['icon'=>'7',  'iconClass'=>'scale-[1.181] -translate-y-[13.2%]', 'prefix'=>'Up to', 'stat'=>'50%',            'size'=>'text-4xl', 'label'=>'water use',                   'body'=>'Double-drain barrier washer configurations support water recycling and lower water consumption.'],
            ['icon'=>'9',  'iconClass'=>'scale-[1.027] -translate-y-[6.7%]', 'prefix'=>'Up to', 'stat'=>'75%',            'size'=>'text-4xl', 'label'=>'sick days',                   'body'=>'Electrolux ergonomic design supports easier handling, fewer sick days and higher productivity.'],
            ['icon'=>'dosing-control', 'iconClass'=>'scale-[1.051] -translate-y-[7.5%]', 'prefix'=>'',      'stat'=>'Less<br>waste',      'size'=>'text-2xl', 'label'=>'detergent use', 'body'=>'Integrated Savings and Efficient Dosing reduce waste from poor loading and detergent overuse.'],
            ['icon'=>'88', 'prefix'=>'',      'stat'=>'Cost<br>control', 'size'=>'text-2xl', 'label'=>'planned service', 'body'=>'Preventive Maintenance and aftercare make service costs easier to plan and manage over time.'],
        ]])
    </div>
</section>

{{-- Technical Bento: 5-card compact grid --}}
<section class="py-12 lg:py-16 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- Header --}}
        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Technical Proof</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-6">
                <span>Built for <span style="color:#148af4;">hygiene, handling and control</span></span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Professional laundry technology designed to support the hygiene, handling and control required in healthcare environments.
            </p>
        </div>

        {{-- 5-card grid --}}
        <div class="grid grid-cols-2 lg:grid-cols-5 gap-3">

            {{-- Card 1: Hygiene --}}
            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/2.png" alt="" class="w-24 h-24 object-contain" style="transform:scale(1.342);">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Hygiene separation</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Barrier washer layouts separate soiled loading from clean unloading to reduce cross-contamination risk.</p>
                </div>
            </div>

            {{-- Card 2: Operator --}}
            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/3.png" alt="" class="w-24 h-24 object-contain" style="transform:translateY(-8.55%) scale(1.351);">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Staff wellbeing</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Ergonomic door, drum and control design supports easier loading, unloading and daily handling.</p>
                </div>
            </div>

            {{-- Card 3: Control --}}
            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/clarusvibe.jpeg" alt="ClarusVibe" class="w-full h-24 object-cover rounded-lg">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Programme control</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">ClarusVibe and CompassPro give teams clear&nbsp;programmes, machine status and <span class="whitespace-nowrap">day-to-day</span> control.</p>
                </div>
            </div>

            {{-- Card 4: ERGOCERT --}}
            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/224.png" alt="ERGOCERT — Ergonomics Certifying Institute" class="w-full h-full object-contain scale-[1.6]">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-sm tracking-tight leading-snug mb-1.5">Certified ergonomics</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Line 6000 ergonomic design is recognised with 4-star ERGOCERT on relevant models.</p>
                </div>
            </div>

            {{-- Card 5: AIDO --}}
            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-2 lg:col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/shared/Auto%20Inner%20Door%20Opening%20(AIDO)%20System.png" alt="" class="w-24 h-24 object-contain" style="transform:scale(1.15);">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Controlled handling</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">AIDO supports controlled loading and unloading in barrier washer configurations.</p>
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
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Services</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-4xl leading-tight mb-6 min-[1300px]:whitespace-nowrap">
                Keep healthcare laundry moving with <span style="color:#148af4;">the right service behind it</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Irish Laundry Systems provides repairs, Preventive Maintenance, equipment rental and aftercare for healthcare laundry operations.
            </p>
        </div>

        <!-- 4-column card grid -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">

            @foreach([
                [
                    'title'  => 'Repairs &amp; Call-Outs',
                    'text'   => 'For urgent equipment faults that interrupt essential healthcare laundry operations.',
                    'cta'    => 'Request Call-Out',
                    'route'  => route('repairs'),
                    'img'    => '/images/pages/services/support-aftercare-hero.png',
                    'pos'    => 'center 40%',
                ],
                [
                    'title'  => 'Preventive Maintenance',
                    'text'   => 'For planned servicing that keeps healthcare laundry equipment performing day after day.',
                    'cta'    => 'View Preventive Maintenance',
                    'route'  => route('service-contracts'),
                    'img'    => '/images/shared/service-contracts-hero.png',
                    'pos'    => '90% 35%',
                ],
                [
                    'title'  => 'Equipment Rental',
                    'text'   => 'For additional capacity, temporary replacement or planned equipment upgrades.',
                    'cta'    => 'See Rental Options',
                    'route'  => route('rental'),
                    'img'    => '/images/pages/sectors/How-barrier-washers-can-help-maximize-OPL-hygiene-and-safety_phone.webp',
                    'pos'    => 'center center',
                ],
                [
                    'title'  => 'Support &amp; Aftercare',
                    'text'   => 'For ongoing technical support, parts guidance and long-term equipment care.',
                    'cta'    => 'Explore Support Options',
                    'route'  => route('service-contracts'),
                    'img'    => '/images/shared/services-overview-hero-portrait.jpg',
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
                    <h3 class="font-heading font-bold text-white text-xl leading-tight mb-4">{!! $card['title'] !!}</h3>
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

{{-- White spacing between the services cards and the Planning banner --}}
<div class="h-16 lg:h-28 bg-white"></div>

@include('components.cta-combined-banner', [
    'eyebrow'    => 'Planning',
    'textMaxW'   => 'lg:max-w-[60%]',
    'heading'    => 'Plan the healthcare laundry room for <span style="color:#011E41;">the right long-term investment</span>',
    'body'       => 'Review room layout, utilities and operational requirements before purchasing,<br class="hidden lg:block"> renting or replacing healthcare laundry equipment.',
    'miniPoints' => [
        ['icon' => 'home-planning-fit', 'iconClass' => 'scale-[1.06]',    'label' => 'Room<br>Fit'],
        ['icon' => 'home-planning-spend',  'label' => 'Budget<br>Control'],
        ['icon' => 'home-planning-rework', 'iconClass' => 'scale-[0.95]', 'label' => 'Less<br>rework'],
    ],
    'ctaText'    => 'Talk to Our Team',
])

<!-- 5. BARRIER WASHERS PRODUCT BLOCK -->

{{-- A2: Navy intro block --}}

<!-- PRODUCTS: Barrier Washers / Tumble Dryers / Ironers -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-12">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Equipment</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-6">
                <span>The <span style="color:#148af4;">right equipment range</span> for healthcare laundry</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                Explore the equipment categories recommended for different healthcare laundry requirements, from barrier separation to everyday washing, drying and finishing.
            </p>
        </div>

        <div class="flex flex-col divide-y divide-gray-100">

            <!-- 1. Barrier Washers — text left, image right -->
            <div x-data="{ open: false, tab: 'aido' }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="lg:pt-10">
                    <h3 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">Barrier <strong>Washers</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                        For healthcare sites that need dirty-side loading, clean-side unloading and controlled separation between soiled and clean textiles.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Dirty-side loading',
                            'Clean-side unloading',
                            'Hygiene Watchdog',
                            'AIDO handling',
                            'Water recycling',
                            'RABC support',
                        ] as $point)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="font-body text-gray-500 text-base leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-col sm:flex-row sm:items-center gap-3">
                        <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 whitespace-nowrap w-fit">
                            View Barrier Washer Options
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 whitespace-nowrap w-fit">
                            Request Equipment Advice
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col">
                    <img src="/images/pages/barrier-washers/line6000-barrier-washer.webp"
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
                                <img src="/images/shared/Auto%20Inner%20Door%20Opening%20(AIDO)%20System.png" alt="AIDO System" class="w-full h-full object-contain">
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
                                <img src="/images/shared/HygieneWatchdog.webp" alt="Hygiene Watchdog" class="w-full h-full object-contain">
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
                    <img src="/images/pages/commercial-washers/commercialwasher.webp"
                         alt="Commercial Washer"
                         class="w-full h-96 object-contain object-left-top">
                </div>
                <div class="lg:-ml-20 lg:mt-10">
                    <h3 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">Commercial <strong>Washers</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                        For healthcare loads that need capacity, consistent wash results and dosing control without barrier separation.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Integrated Savings',
                            'Efficient Dosing',
                            'Power Balance',
                            'Load control',
                            'Lower consumption',
                        ] as $point)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="font-body text-gray-500 text-base leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-row flex-wrap items-center gap-4">
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
                    <h3 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">Tumble <strong>Dryers</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                        For controlled drying, lower energy use and moisture control after washing.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Up to 65% energy saving',
                            'Moisture Balance',
                            'Adaptive Fan',
                            'Certified ergonomics',
                            'Lower energy use',
                        ] as $point)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="font-body text-gray-500 text-base leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-row flex-wrap items-center gap-4 mb-6">
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
                    <img src="/images/pages/dryers/TD6-14.jpg"
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
                        <img src="/images/shared/MoistureBalance.png" alt="Moisture Balance" class="w-full h-full object-contain">
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
                    <img src="/images/pages/ironers/flatwork-iv64821ffs-trim.jpg"
                         alt="Line 6000 Ironer"
                         class="w-full h-auto object-contain object-left-top lg:scale-[1.12] lg:origin-top-left lg:-translate-x-40">
                    <div class="mt-4 lg:mt-24 pt-3 w-full">
                        <button @click="open = !open" class="w-full flex items-center justify-start gap-3 text-left group pl-[10px]">
                            <span class="font-heading font-bold text-navy text-sm">System features: DIAMMS, Hygiene Guard, FoldFlex, Ceramic Burner</span>
                            <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </button>
                    </div>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">Ironers &amp; <strong>Finishing</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                        For healthcare laundry that needs moisture control, consistent finishing and textiles ready for storage or use.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'DIAMMS',
                            'Hygiene Guard',
                            'Moisture control',
                            'FoldFlex',
                            'Ceramic Burner',
                        ] as $point)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="font-body text-gray-500 text-base leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-row flex-wrap items-center gap-4">
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
                                <img src="/images/shared/Diamms.png" alt="DIAMMS" class="w-full h-full object-contain">
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
                                <img src="/images/shared/HygieneGuard.png" alt="Hygiene Guard" class="w-full h-full object-contain">
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
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                <span>Control <span style="color:#148af4;">detergent use and wash consistency</span></span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                Automatic dosing helps deliver consistent wash results while reducing chemical waste across everyday healthcare laundry operations.
            </p>
        </div>

        {{-- Carousel --}}
        @php
        $dosingProducts = [
            [
                'name'    => 'Multisave',
                'label'   => 'One unit for multiple washers',
                'body'    => 'Connects up to seven washing machines with one unit for simpler dosing control.',
                'points'  => ['Up to 7 washers', 'Multi-machine control', 'Controlled consumption'],
                'logos'   => ['clarusvibe', 'compasspro'],
                'img'     => '/images/shared/MultisaveEQUIP.webp',
                'scene'   => '/images/pages/accessories/MULTISAVE.png',
                'color'   => '#011E41',
            ],
            [
                'name'    => 'DOSAVE',
                'label'   => 'Programmable dosing support',
                'body'    => 'A peristaltic dosing option for easy connection, programming and controlled detergent delivery.',
                'points'  => ['Peristaltic pumps', 'Easy programming', 'Controlled delivery'],
                'logos'   => ['clarusvibe'],
                'img'     => '/images/shared/DOSAVEEQUIP.webp',
                'scene'   => '/images/pages/accessories/DOSAVE.jpg',
                'color'   => '#0d2d5e',
            ],
            [
                'name'    => 'JETSAVE',
                'label'   => 'Lower-maintenance dosing control',
                'body'    => 'Uses water-powered pumps with no moving parts or squeeze tubes to replace.',
                'points'  => ['Water-powered pumps', 'Fewer wear points', 'Lower maintenance'],
                'logos'   => ['clarusvibe'],
                'img'     => '/images/shared/JetsaveEQUIP.webp',
                'scene'   => '/images/pages/accessories/JETSAVE.png',
                'color'   => '#0a2448',
            ],
            [
                'name'    => 'Efficient Dosing',
                'label'   => 'Adjust detergent to the real load',
                'body'    => 'Measures the load at the start of the programme and adjusts detergent use to match the cycle.',
                'points'  => ['Real load measured', 'Less overuse', 'Cost control'],
                'logos'   => ['compasspro'],
                'img'     => '/images/shared/efficientDosing_equip.webp',
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

                        {{-- Left: context photo — one at a time, alternates per slide (detergentdoser first) --}}
                        <div class="lg:col-span-3 overflow-hidden pt-8 lg:pt-10" style="align-self:start;">
                            <img src="{{ $p['scene'] ?? ($i % 2 === 0 ? '/images/pages/sectors/detergentdoser.png' : '/images/shared/Laundry-Double-Banner-965x965-1.webp') }}"
                                 alt="Electrolux Professional laundry equipment"
                                 class="w-full object-cover object-center" style="height:260px;">
                        </div>

                        {{-- Right: product name + tabs indicator + description + unit image --}}
                        <div class="lg:col-span-9 flex flex-col justify-between p-6 sm:p-8 lg:p-10">

                            {{-- Tab indicators (product selector) --}}
                            <div class="flex gap-1 border-b border-gray-100 mb-6 overflow-x-auto">
                                @foreach($dosingProducts as $j => $tab)
                                <button @click="go({{ $j }})"
                                        :class="active === {{ $j }} ? 'border-b-2 border-navy text-navy font-bold' : 'text-gray-400 hover:text-navy'"
                                        class="font-heading text-sm pb-3 pr-6 transition-colors whitespace-nowrap">
                                    {{ $tab['name'] }}
                                </button>
                                @endforeach
                            </div>

                            {{-- Content + unit image side by side --}}
                            <div class="flex flex-col sm:flex-row gap-6 items-start flex-1">

                                {{-- Copy --}}
                                <div class="flex-1">
                                    <p class="font-body font-bold text-[#148af4] text-sm mb-2">{{ $p['label'] }}</p>
                                    <p class="font-body text-gray-600 text-base leading-relaxed mb-5">{{ $p['body'] }}</p>
                                    <div class="flex items-center gap-8">
                                        @if(in_array('clarusvibe', $p['logos'] ?? []))
                                        <img src="/images/shared/clarusvibeicon.webp" alt="ClarusVibe" class="h-12 w-auto object-contain opacity-80">
                                        @endif
                                        @if(in_array('compasspro', $p['logos'] ?? []))
                                        <img src="/images/shared/Compass-Pro_1-300x88.webp" alt="CompassPro" class="h-12 w-auto object-contain opacity-80">
                                        @endif
                                    </div>
                                </div>

                                {{-- Unit image --}}
                                @if($p['img'])
                                <div class="flex-shrink-0 w-full max-w-[220px] sm:max-w-none sm:w-56 lg:w-80 mx-auto flex items-center justify-center">
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
                    class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-2 lg:-translate-x-14 w-10 h-10 rounded-full bg-white border border-navy/15 shadow text-navy hover:bg-navy hover:text-white transition-colors flex items-center justify-center z-10">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
            </button>
            <button @click="next()"
                    class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-2 lg:translate-x-14 w-10 h-10 rounded-full bg-white border border-navy/15 shadow text-navy hover:bg-navy hover:text-white transition-colors flex items-center justify-center z-10">
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

{{-- RESOURCES BAR (slim inline) — after Dosing & Laundry Control --}}
@include('components.resources-bar', ['groups' => [
                ['title' => 'Official Resources', 'links' => [
                    ['l' => 'Pullman barrier washer leaflet', 'h' => '/pdfs/EPR-leaflet-pullman-barrier-washer-EN-20230919-LR.pdf'],
                    ['l' => 'Line 6000 Evolution Barrier Washers brochure', 'h' => '/pdfs/EPR-brochure-Line 6000 Evolution Barrier Washers-20241119-EN.pdf'],
                    ['l' => 'Line 6000 dryers brochure', 'h' => '/pdfs/EPR-Line6000-DryersBrochure-01072025_EN.pdf'],
                    ['l' => 'Hot Cylinder Ironers brochure', 'h' => '/pdfs/EPR-Brochure Line 6000-Hot_Cylinder_Ironers-ENG-2023_LR.pdf'],
                    ['l' => 'Product resources', 'h' => route('resources')],
                ]],
                ['title' => 'Related Equipment', 'links' => [
                    ['l' => 'Barrier Washers', 'h' => route('equipment.category', 'barrier-washers')],
                    ['l' => 'Tumble Dryers', 'h' => route('equipment.category', 'tumble-dryers')],
                    ['l' => 'Ironers', 'h' => route('equipment.category', 'ironers')],
                ]],
                ['title' => 'Advice & Support', 'links' => [
                    ['l' => 'Request healthcare assessment', 'h' => route('request-assessment')],
                    ['l' => 'Support & Aftercare', 'h' => route('parts-aftercare')],
                    ['l' => 'Talk to our team', 'h' => route('contact')],
                ]],
]])

{{-- breathing space between the Resources bar and the Equipment Rental strip --}}
<div class="bg-white h-12 lg:h-20"></div>

@include('components.why-choose-strip', [
    'eyebrow' => 'Equipment Rental',
    'headingLine1' => 'Access the equipment your healthcare site needs<br>',
    'headingLine2' => '<span style="color:#148af4;">with lower upfront cost</span>',
    'body' => 'Equipment Rental provides access to Electrolux Professional laundry equipment<br class="hidden lg:block"> with installation and ongoing support included in the agreement.',
    'miniPoints' => [
        ['icon' => '145', 'iconClass' => 'scale-[1.06]', 'label' => 'Lower Upfront<br>Cost'],
        ['icon' => '146', 'iconClass' => 'scale-[0.92]', 'label' => 'Included<br>Support'],
        ['icon' => '147', 'iconClass' => 'scale-[0.93]', 'label' => 'Clearer<br>Budgeting'],
    ],
])

@include('components.equipment-categories', ['eyebrow' => 'Equipment Categories', 'heading' => 'Explore <span style="color:#148af4;">more healthcare equipment options</span>', 'subheading' => 'Select an equipment category based on the room, laundry handled and level of hygiene control required.', 'subheadingClass' => 'lg:whitespace-nowrap', 'headerAlign' => 'lg:flex-row lg:items-start', 'equipment' => [
    ['img'=>'line6000-barrier-washer', 'src' => '/images/pages/barrier-washers/line6000-barrier-washer.webp','name'=>'Barrier Washers','desc'=>'For healthcare laundry rooms that need soiled handling and clean return kept physically separate.','box'=>250,'mb'=>-20],
    ['img'=>'commercialwasher', 'src' => '/images/pages/commercial-washers/commercialwasher.webp','name'=>'Washing Machines','desc'=>'For healthcare wash loads that need capacity, consistency and dosing control.','box'=>270,'mb'=>-35],
    ['img'=>'TD6-14', 'src' => '/images/pages/dryers/TD6-14.jpg','name'=>'Dryers','desc'=>'For controlled drying, lower energy use and moisture management after washing.','box'=>245],
    ['img'=>'drying-cabinet','src'=>'/images/pages/drying-cabinets/workwear-dc6-15ww.jpg','name'=>'Drying Cabinets','desc'=>'For garments, bulky items and specialist textiles that need gentle drying and fabric care.','box'=>260,'mb'=>-11],
    ['img'=>'IB623_FRONT_NEW', 'src' => '/images/pages/ironers/IB623_FRONT_NEW.jpg','ext'=>'jpg','name'=>'Ironers & Flatwork','desc'=>'For finishing, moisture control and textiles ready for storage or use.'],
]])

{{-- Process Block --}}
<section class="py-14 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 text-center">Installation &amp; Handover</p>
        <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3 text-center">
            Prepare healthcare laundry equipment for <span style="color:#148af4;">daily use</span>
        </h2>
        <p class="font-body text-gray-500 text-base mb-12 leading-relaxed text-center mx-auto lg:whitespace-nowrap">
            Site checks, installation, commissioning and handover are coordinated so the selected equipment is ready for use.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-12 lg:gap-20">

            @foreach([
                ['title' => 'Prepare the Site',      'text' => 'Confirm access, utilities and positioning<br class="hidden lg:block"> before delivery.'],
                ['title' => 'Install and Commission', 'text' => 'Deliver, position, install and test<br class="hidden lg:block"> the selected equipment.'],
                ['title' => 'Handover',               'text' => 'Provide operating guidance and explain<br class="hidden lg:block"> available aftercare.'],
            ] as $i => $step)

            <div class="flex flex-col items-center text-center relative">
                @if($i < 2)
                <div class="hidden lg:block absolute -right-[4.5rem] top-[2.45rem] text-[#148af4]">
                    <svg class="w-14 h-8" fill="none" viewBox="0 0 40 24" stroke="currentColor" stroke-width="2.2"><path stroke-linecap="round" stroke-linejoin="round" d="M29.5 4.5 37 12m0 0-7.5 7.5M37 12H3"/></svg>
                </div>
                @endif
                <div class="w-full flex justify-center items-center mb-1" style="height:8rem;">
                    <img src="/images/icons/{{ [126, 125, 128][$i] }}.png" alt=""
                         style="width:{{ $i === 1 ? '8rem' : '7rem' }};height:{{ $i === 1 ? '8rem' : '7rem' }};filter:brightness(0) saturate(100%) invert(35%) sepia(96%) saturate(1500%) hue-rotate(196deg) brightness(103%);">
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
    'headingLine1' => 'Keep healthcare laundry',
    'headingLine2' => '<span style="color:#011E41;">performing every day</span>',
    'body'         => 'Ongoing maintenance and aftercare keep equipment performing, protect your investment and support reliable healthcare laundry operations.',
    'image'        => '/images/pages/services/support-aftercare-hero.png',
    'miniPoints'   => [
        ['icon' => '149', 'iconClass' => 'scale-[0.78] translate-x-[2px]', 'label' => 'Planned<br>Service'],
        ['icon' => '247', 'iconClass' => 'scale-[0.95] -translate-x-[3px]', 'label' => 'Long-Term<br>Performance'],
        ['icon' => '151', 'iconClass' => 'scale-[0.85]', 'label' => 'Equipment<br>Care'],
    ],
    'cta1Label'    => 'View Preventive Maintenance',
    'cta1Route'    => 'service-contracts',
])



@include('components.testimonials', [
    'eyebrow'    => 'Customer Trust',
    'heading'    => 'Trusted <span style="color:#148af4;">healthcare laundry support</span> in Ireland',
    'subheading' => 'See how healthcare organisations across Ireland describe their experience working with Irish Laundry Systems.',
    'subheadingClass' => 'max-w-6xl mx-auto',
])

@include('components.proof-bar')

@include('components.faq', [
    'eyebrow'    => 'Healthcare Laundry FAQs',
    'heading'    => 'Questions about <span style="color:#148af4;">healthcare laundry planning</span> and equipment',
    'subheading' => 'Answers to common questions before planning or upgrading a healthcare laundry.',
    'footerNote' => 'Have a different question? Talk to our team.',
    'faqs' => [
        ['question' => 'What types of healthcare sites do you support?',                       'answer' => 'Irish Laundry Systems supports healthcare, clinical and related laundry environments where hygiene routines, clean textile availability, equipment reliability and service support matter.'],
        ['question' => 'Do you supply barrier washers for infection-control laundry rooms?',   'answer' => 'Yes. Irish Laundry Systems supplies and supports Electrolux Professional barrier washer equipment for sites that need dirty-side and clean-side handling kept separate.'],
        ['question' => 'Can you assess whether our existing laundry room is costing too much to run?', 'answer' => 'Yes. Irish Laundry Systems can review room layout, machine type, capacity, utilities, maintenance history, repair patterns and replacement needs to identify avoidable operating costs.'],
        ['question' => 'Can Electrolux Professional equipment reduce energy and water use?',   'answer' => 'Yes. Selected Electrolux Professional technologies can lower consumption, including Heat Pump dryers, double-drain water recycling, Integrated Savings and Efficient Dosing.'],
        ['question' => 'What does a Preventive Maintenance Contract include for healthcare sites?', 'answer' => 'A contract can include scheduled preventive visits, inspection, reporting and practical follow-up. Parts are not included unless separately agreed.'],
        ['question' => 'How quickly can you respond to a breakdown call-out?',                 'answer' => 'Breakdown calls are prioritised by urgency, equipment details, site requirements and service history. Contract customers may receive preferential call-out rates and scheduling.'],
        ['question' => 'Can equipment be rented rather than purchased outright?',              'answer' => 'Yes. Equipment Rental can be discussed for healthcare sites that need replacement, expansion or continuity without one large purchase upfront.'],
        ['question' => 'Do you support equipment after installation?',                         'answer' => 'Yes. Support & Aftercare covers service history, practical follow-up, parts access where needed and equipment guidance after installation, repair, rental or maintenance.'],
    ],
])

@include('components.cta-downtime-form', ['pageSource' => 'healthcare_cta', 'eyebrow' => 'Request Healthcare Laundry Assessment', 'heading' => 'Ready to review your <span style="color:#148af4;">healthcare laundry setup</span>', 'body' => "Talk to Irish Laundry Systems about your healthcare laundry requirements. We'll review your operation and recommend the right equipment, layout and support for your site."])

@endsection
