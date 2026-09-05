@extends('layouts.app')

@section('meta')
<meta name="description" content="Care facility laundry support — equipment selection, installation, service contracts, repairs, parts and aftercare for care facilities across Ireland.">
@endsection

@section('content')

<!-- 1. HERO -->
<section class="relative overflow-hidden flex flex-col h-auto min-h-[520px] lg:h-[720px]">
    <img src="/images/pages/sectors/carefacilitiesheroimage.jpg" alt="Care facility laundry"
         class="absolute inset-0 w-full h-full object-cover" style="object-position: center 38%; transform: scale(1.22);">
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16 py-24 lg:py-32">
            <div class="max-w-5xl reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Care Facility Laundry</p>
                <h1 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-4">
                    <span class="sm:block">Care facility laundry built around</span>
                    <span class="sm:block" style="color:#148af4;">resident care, hygiene and efficiency</span>
                </h1>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8 max-w-3xl">
                    Irish Laundry Systems supplies, installs and supports Electrolux Professional <br class="hidden lg:block">equipment for care homes, nursing homes and residential care facilities.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#care-assessment"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Care Facility Assessment
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Thin Electrolux Trust Strip -->
@include('components.partner-strip')

<!-- 4. INTRO COMMERCIAL BLOCK -->
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Care Facility Planning</p>
        <div class="grid grid-cols-1 lg:grid-cols-[3fr_4fr] gap-12 lg:gap-16 items-center">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-[2rem] 2xl:text-[2.4rem] leading-tight">
                    <span class="lg:block">The right laundry setup for</span>
                    <span class="lg:block" style="color:#148af4;">your space, daily workload</span>
                    <span class="lg:block" style="color:#148af4;">and hygiene requirements</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed">
                    <span class="lg:block">We assess capacity, room layout, daily workload and hygiene requirements</span>
                    <span class="lg:block">before recommending the equipment and configuration for your facility,</span>
                    <span class="lg:block">so staff have a practical setup they can manage consistently</span>
                    <span class="lg:block">without unnecessary complexity in the daily laundry process.</span>
                </p>
            </div>

        </div>
    </div>
</section>

<!-- 5. LAUNDRY AND HYGIENE-SENSITIVE HANDLING SUPPORT -->
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Barrier Separation</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
                Clear separation <span style="color:#148af4;">where hygiene control requires it</span>
            </h2>
            <p class="font-body text-gray-600 text-base leading-relaxed mb-4">
                Where separation is required, we plan a clear flow from soiled to clean areas.
            </p>
        </div>

        <!-- Image + Navy overlay card -->
        <div class="relative reveal">

            <div class="w-full lg:w-4/5 ml-auto rounded-2xl overflow-hidden">
                <img src="/images/shared/render-double-page_72dpi.jpg"
                     alt="Care facility laundry room"
                     class="w-full h-[320px] sm:h-[440px] lg:h-[580px] object-cover object-center">
            </div>

            <div class="lg:absolute lg:top-1/2 lg:-translate-y-1/2 lg:left-0 mt-6 lg:mt-0 w-full lg:w-[520px] bg-navy rounded-2xl p-6 sm:p-10 lg:p-10 shadow-2xl">
                <h3 class="font-heading font-bold text-white text-xl sm:text-2xl lg:text-3xl leading-snug mb-6">
                    Barrier washer planning<br class="hidden lg:block"> for larger care environments
                </h3>
                <ul class="space-y-3">
                    @foreach([
                        'Separate loading and unloading sides',
                        'Room layout and access review',
                        'Capacity based on site demand',
                        'Installation and staff handover',
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

{{-- Financial Performance Bento: metric cards --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Financial Performance</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                <span class="">Control care facility <span style="color:#148af4;">laundry costs</span></span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                The right equipment and service approach can reduce day-to-day running costs and make future laundry spend easier to plan.
            </p>
        </div>

        @include('components.financial-metrics', ['items' => [
            ['icon'=>'6',  'iconClass'=>'scale-[1.181] -translate-y-[13.2%]', 'prefix'=>'Up to', 'stat'=>'65%',            'size'=>'text-4xl', 'label'=>'dryer energy',              'body'=>'Heat Pump dryer technology can reduce energy use while supporting controlled drying performance.'],
            ['icon'=>'7',  'iconClass'=>'scale-[1.181] -translate-y-[13.2%]', 'prefix'=>'Up to', 'stat'=>'50%',            'size'=>'text-4xl', 'label'=>'water use',              'body'=>'Double-drain barrier washer configurations support water recycling and lower water use in rooms with separated handling.'],
            ['icon'=>'126',  'prefix'=>'Up to', 'stat'=>'40%',      'size'=>'text-4xl', 'label'=>'lower operating costs',      'body'=>'Line 6000 washer technologies optimise utilisation to reduce operating costs without compromising productivity.'],
            ['icon'=>'dosing-control', 'iconClass'=>'scale-[1.051] -translate-y-[7.5%]', 'prefix'=>'', 'stat'=>'Less<br>waste',      'size'=>'text-2xl', 'label'=>'detergent use',      'body'=>'Integrated Savings and Efficient Dosing reduce waste from poor loading and detergent overuse.'],
            ['icon'=>'88', 'iconClass'=>'translate-y-[0.9%]', 'prefix'=>'', 'stat'=>'Service<br>planning',  'size'=>'text-2xl', 'label'=>'service costs',  'body'=>'Preventive maintenance and aftercare keep service costs easier to plan and manage.'],
        ]])
    </div>
</section>

<!-- 6. COMPACT CARE FACILITIES BENTO -->
<section class="py-20 lg:py-28 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Technical Proof</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Technology designed for <span style="color:#148af4;">clearer control and easier handling</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                Electrolux Professional features support simpler operation, consistent programmes and the right level of hygiene and textile care for each facility.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-3">

            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/13.png" alt="" class="w-24 h-24 object-contain scale-[1.3]">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Resident laundry</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed text-left">Supports clothing, bedding, towels and staff items through daily wash routines.</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/224.png" alt="ERGOCERT ergonomics certified" class="h-24 w-auto object-contain scale-[1.6]">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Staff wellbeing</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed text-left">Ergonomic loading, access and controls support easier repeated laundry work for care teams.</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/clarusvibe.jpeg" alt="ClarusVibe" class="w-full h-24 object-cover rounded-lg">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Programme control</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed text-left">ClarusVibe and CompassPro give teams clear programmes, status messages and day-to-day control.</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/15.png" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Hygiene control</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed text-left">Barrier options and process control support separated handling where the site requires it.</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-2 lg:col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/24.png" alt="" class="w-24 h-24 object-contain scale-[1.3]">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Textile care</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed text-left">Moisture Balance, DIAMMS and finishing technology support drying, finishing and textiles ready for storage or use.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 7. FOUR SERVICE CARDS -->
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Services</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Support for the laundry equipment <span style="color:#148af4;">your care team depends on</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Irish Laundry Systems provides repairs, preventive maintenance, equipment rental and aftercare for care facility laundry equipment.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">

            @foreach([
                [
                    'title'  => 'Repairs &amp; Call-Outs',
                    'text'   => 'For urgent faults affecting resident laundry and essential daily routines.',
                    'cta'    => 'Request Call-Out',
                    'route'  => route('repairs'),
                    'img'    => '/images/pages/services/support-aftercare-hero.png',
                    'pos'    => 'center 40%',
                ],
                [
                    'title'  => 'Preventive Maintenance',
                    'text'   => 'For planned servicing, maintenance records and regular care of essential equipment.',
                    'cta'    => 'View Preventive Maintenance',
                    'route'  => route('service-contracts'),
                    'img'    => '/images/shared/service-contracts-hero.png',
                    'pos'    => '90% 35%',
                ],
                [
                    'title'  => 'Equipment Rental',
                    'text'   => 'For temporary replacement, added capacity or longer-term equipment needs.',
                    'cta'    => 'See Rental Options',
                    'route'  => route('rental'),
                    'img'    => '/images/shared/td6-11-multihousing-room-front.jpg',
                    'pos'    => '66% center',
                ],
                [
                    'title'  => 'Support &amp; Aftercare',
                    'text'   => 'For service history, parts identification and practical guidance after installation.',
                    'cta'    => 'Explore Support Options',
                    'route'  => route('service-contracts'),
                    'img'    => '/images/shared/services-overview-hero-portrait.jpg',
                    'pos'    => 'center center',
                ],
            ] as $card)
            <a href="{{ $card['route'] }}"
               class="group relative overflow-hidden rounded-2xl block"
               style="height:400px;">
                <img src="{{ $card['img'] }}" alt="{{ strip_tags($card['title']) }}"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                     style="object-position: {{ $card['pos'] }};">
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.4) 45%, rgba(1,30,65,0.05) 75%, transparent 100%);"></div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background: rgba(1,30,65,0.88);"></div>
                <div class="absolute inset-0 p-6 flex flex-col justify-end z-10">
                    {{-- Description (slides up on hover) --}}
                    <div class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-40 group-hover:opacity-100 transition-all duration-500 mb-4">
                        <p class="font-body text-white/80 text-sm leading-relaxed">{!! $card['text'] !!}</p>
                    </div>
                    {{-- Title (always visible) --}}
                    <h3 class="font-heading font-bold text-white text-xl leading-tight mb-4">{!! $card['title'] !!}</h3>
                    {{-- Button (always visible) --}}
                    <div class="flex justify-end">
                        <span class="inline-flex items-center gap-2 bg-white/15 group-hover:bg-orange border border-white/30 group-hover:border-orange text-white font-body font-bold text-xs uppercase tracking-wide px-4 py-2.5 rounded-full transition-colors duration-200">
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

{{-- White spacing between the services cards and the Site Planning banner --}}
<div class="h-16 lg:h-28 bg-white"></div>

<!-- 8. PLANNING STRIP -->
@include('components.cta-combined-banner', [
    'eyebrow'    => 'Site Planning',
    'heading'    => 'Plan the right laundry setup<br class="hidden lg:block"> <span style="color:#011E41;">for the space you have</span>',
    'body'       => 'We assess room layout, utilities and workflow to design a practical setup,<br class="hidden lg:block"> from adapting compact spaces to planning larger care facility laundries.',
    'miniPoints' => [
        ['icon' => 'home-planning-fit', 'iconClass' => 'scale-[1.06]',    'label' => 'Room<br>Fit'],
        ['icon' => 'home-planning-spend',  'label' => 'Cost<br>Control'],
        ['icon' => '249', 'label' => 'Utility<br>Planning'],
    ],
    'ctaText'    => 'Talk to Our Team',
])

<!-- 9. DETAILED EQUIPMENT SECTION -->
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-12 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Equipment</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Choose the <span style="color:#148af4;">right equipment mix</span> for your care facility
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                We match the right equipment mix to your space, workload and hygiene needs.
            </p>
        </div>

        <div class="flex flex-col divide-y divide-gray-100">

            <!-- 1. COMMERCIAL WASHERS — text left, image right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="order-2 lg:order-1 lg:pt-10">
                    <h3 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl mb-3">Commercial Washers</h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        For resident clothing, bedding, towels and staff items that need consistent wash results and dosing control.
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
                            <span class="font-body text-gray-500 text-sm leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-col sm:flex-row sm:items-center gap-3">
                        <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 whitespace-nowrap w-fit">
                            View Washing Machine Options
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 whitespace-nowrap w-fit">
                            Request Care Facility Equipment Advice
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col order-1 lg:order-2">
                    <img src="/images/pages/commercial-washers/commercialwasher.webp"
                         alt="Commercial Washer"
                         class="w-full h-96 object-contain object-left-top">
                </div>
            </div>

            <!-- 2. TUMBLE DRYERS — image left, text right -->
            <div x-data="{ open: false }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal">
                <div class="flex flex-col">
                    <img src="/images/pages/dryers/TD6-14.jpg"
                         alt="Line 6000 Tumble Dryer"
                         class="w-full h-96 object-contain" style="object-position: 68% top;">
                    <div class="mt-1 pt-3">
                        <button @click="open = !open"
                                class="w-full flex items-center justify-start gap-3 text-left group pl-[20px]">
                            <span class="font-heading font-bold text-navy text-sm">System Features, Moisture Control</span>
                            <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </button>
                    </div>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl mb-3">Tumble Dryers</h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
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
                            <span class="font-body text-gray-500 text-sm leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-row flex-wrap items-center gap-4">
                        <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            View Dryer Options
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Request Care Facility Equipment Advice
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div x-show="open" x-collapse class="py-6 border-t border-gray-100">
                <h4 class="font-heading font-bold text-navy text-xl mb-4">Dry not overdry</h4>
                <div class="flex flex-col sm:flex-row items-start gap-6 mb-8">
                    <div class="w-32 h-32 flex-shrink-0">
                        <img src="/images/shared/MoistureBalance.png" alt="Moisture Balance" class="w-full h-full object-contain">
                    </div>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">
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
                        <p class="font-body text-gray-500 text-sm leading-relaxed">All models have been user-tested to ensure operators will feel less tension and strain, so they and your laundry room can work more comfortably through the day.</p>
                    </div>
                </div>
            </div>
            </div>

            <!-- 3. VACUUM IRONING TABLES — text left, image right -->
            <div x-data="{ open: false }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="order-2 lg:order-1 lg:pt-10">
                    <h3 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl mb-3">Vacuum Ironing Tables</h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        For moisture control, consistent finishing and textiles ready for storage or use.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Heated surface helps keep fabric dry',
                            'Integral vacuum holds garments in place',
                            'Helps dry fabric after pressing',
                            'FIT2B includes integral boiler for simpler installation',
                            'Options available for sleeves, spotting and operator comfort',
                        ] as $point)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="font-body text-gray-500 text-sm leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-row flex-wrap items-center gap-4">
                        <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            View Ironer Options
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Request Care Facility Equipment Advice
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col order-1 lg:order-2">
                    <img src="/images/pages/sectors/ELS_PH_415x415_FIT2B.jpg"
                         alt="Electrolux Professional FIT2 Vacuum Ironing Table"
                         class="w-full h-96 object-contain object-center">
                    <div class="mt-1 pt-3 w-full">
                        <button @click="open = !open" class="w-full flex items-center justify-start gap-3 text-left group pl-[10px]">
                            <span class="font-heading font-bold text-navy text-sm">FIT2A, FIT2B Features &amp; Options</span>
                            <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div x-show="open" x-collapse class="py-6 border-t border-gray-100">
                <h4 class="font-heading font-bold text-navy text-xl mb-4">Garment finishing with vacuum support</h4>
                <p class="font-body text-gray-500 text-sm leading-relaxed max-w-3xl mb-8">
                    The Electrolux Professional FIT2A and FIT2B vacuum ironing tables are designed for general-purpose garment finishing. The heated working surface helps keep fabric dry, while the integral vacuum fan holds garments in place and helps dry the fabric after pressing. The FIT2B model includes a steam electric iron with separator and an integral boiler for simpler installation.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-10 gap-y-2 mb-8">
                    @foreach([
                        'Utility shape for general-purpose pressing',
                        'Heated working surface',
                        'Integral vacuum fan',
                        'Steam electric iron with separator on FIT2B',
                        'Integral boiler on FIT2B',
                        'Sleeve arm option for awkward shapes',
                        'Spotting options available',
                        'Iron balancer option to reduce operator fatigue',
                        'Light option to illuminate the working area',
                    ] as $feat)
                    <div class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                        <span class="font-body text-gray-500 text-sm leading-relaxed">{{ $feat }}</span>
                    </div>
                    @endforeach
                </div>
                <p class="font-body text-gray-400 text-xs leading-relaxed max-w-3xl">
                    FIT2A and FIT2B specifications vary by configuration. FIT2B dimensions are listed as 1600&nbsp;mm x 470&nbsp;mm x 920&nbsp;mm, with 105&nbsp;kg net weight in the product data sheet.
                </p>
            </div>
            </div>

            <!-- 4. BARRIER WASHERS — image left, text right -->
            <div x-data="{ open: false, tab: 'aido' }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal">
                <div class="flex flex-col">
                    <img src="/images/pages/barrier-washers/line6000-barrier-washer.webp"
                         alt="Line 6000 Barrier Washer"
                         class="w-full h-[440px] object-contain" style="object-position: 55% top;">
                    <div class="mt-1 pt-3 w-full flex justify-center">
                        <button @click="open = !open" class="inline-flex items-center gap-3 text-left group">
                            <span class="font-heading font-bold text-navy text-sm">System Features, AIDO &amp; Hygiene Watchdog</span>
                            <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </button>
                    </div>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl mb-3">Barrier Washers</h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        For larger care settings or sites that need dirty-side loading, clean-side unloading and stronger separation control.
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
                            <span class="font-body text-gray-500 text-sm leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-row flex-wrap items-center gap-4">
                        <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            View Barrier Washer Options
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Request Care Facility Equipment Advice
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div x-show="open" x-collapse class="py-6 border-t border-gray-100">
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

                <div x-show="tab === 'aido'">
                    <h4 class="font-heading font-bold text-navy text-xl mb-4">Auto Inner Door Opening (AIDO) System</h4>
                    <div class="flex items-start gap-6 mb-8">
                        <div class="w-32 h-32 flex-shrink-0">
                            <img src="/images/shared/Auto%20Inner%20Door%20Opening%20(AIDO)%20System.png" alt="AIDO System" class="w-full h-full object-contain">
                        </div>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">
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
                            <p class="font-body text-gray-500 text-sm leading-relaxed">Whatever your requirements, our machines are designed to help your operators work in a safe and ergonomic way.</p>
                        </div>
                    </div>
                </div>

                <div x-show="tab === 'watchdog'">
                    <h4 class="font-heading font-bold text-navy text-xl mb-4">Hygiene Watchdog</h4>
                    <div class="flex items-start gap-6 mb-8">
                        <div class="w-32 h-32 flex-shrink-0">
                            <img src="/images/shared/HygieneWatchdog.webp" alt="Hygiene Watchdog" class="w-full h-full object-contain">
                        </div>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">
                            <strong>Your Hygiene Partner:</strong> The Electrolux Professional Hygiene Watchdog (HW) ensures full-cycle completion so that all linen is <strong>fully washed and thoroughly decontaminated</strong>. This provides the maximum defence against the spread of microorganisms and cross-contamination, keeping germs at bay and your mind at rest.
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
                            <p class="font-body text-gray-500 text-sm leading-relaxed">Whatever your requirements, our machines are designed to help your operators work in a safe and ergonomic way.</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </div>
    </div>
</section>

<!-- DOSING & LAUNDRY CONTROL CAROUSEL -->
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- Section header --}}
        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-2">Dosing &amp; Laundry Control</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Control detergent use and <span style="color:#148af4;">wash consistency</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Electrolux Professional dosing options can help reduce detergent overuse and support more consistent wash results when matched to the equipment and site.
            </p>
        </div>

        {{-- Carousel --}}
        @php
        $dosingProducts = [
            [
                'name'    => 'Multisave',
                'label'   => 'One unit for multiple washers',
                'body'    => 'Connects up to seven washing machines with one unit for simpler dosing control.',
                'logos'   => ['clarusvibe', 'compasspro'],
                'img'     => '/images/shared/MultisaveEQUIP.webp',
                'scene'   => '/images/pages/accessories/MULTISAVE.png',
            ],
            [
                'name'    => 'DOSAVE',
                'label'   => 'Programmable dosing support',
                'body'    => 'A peristaltic dosing option for easy connection, programming and controlled detergent delivery.',
                'logos'   => ['clarusvibe'],
                'img'     => '/images/shared/DOSAVEEQUIP.webp',
                'scene'   => '/images/pages/accessories/DOSAVE.jpg',
            ],
            [
                'name'    => 'JETSAVE',
                'label'   => 'Lower-maintenance dosing control',
                'body'    => 'Uses water-powered pumps with no moving parts or squeeze tubes to replace.',
                'logos'   => ['clarusvibe'],
                'img'     => '/images/shared/JetsaveEQUIP.webp',
                'scene'   => '/images/pages/accessories/JETSAVE.png',
            ],
            [
                'name'    => 'Efficient Dosing',
                'label'   => 'Adjust detergent to the real load',
                'body'    => 'Measures the load at the start of the programme and adjusts detergent use to match the cycle.',
                'logos'   => ['compasspro'],
                'img'     => '/images/shared/efficientDosing_equip.webp',
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
                        <div class="lg:col-span-3 overflow-hidden pt-8 lg:pt-10" style="align-self:start;">
                            <img src="{{ $p['scene'] ?? '/images/shared/Laundry-Double-Banner-965x965-1.webp' }}"
                                 alt="Electrolux Professional laundry equipment"
                                 class="w-full object-cover object-center" style="height:260px;">
                        </div>

                        {{-- Right: product name + tabs indicator + description + unit image --}}
                        <div class="lg:col-span-9 flex flex-col justify-between p-5 sm:p-8 lg:p-10">

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
                                <div class="flex-shrink-0 w-full sm:w-56 lg:w-80 flex items-center justify-center">
                                    <img src="{{ $p['img'] }}" alt="{{ $p['name'] }}"
                                         class="w-full h-auto object-contain">
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
                    class="absolute left-0 top-1/2 -translate-y-1/2 translate-x-1 lg:-translate-x-14 w-10 h-10 rounded-full bg-white border border-navy/15 shadow text-navy hover:bg-navy hover:text-white transition-colors flex items-center justify-center z-10">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
            </button>
            <button @click="next()"
                    class="absolute right-0 top-1/2 -translate-y-1/2 -translate-x-1 lg:translate-x-14 w-10 h-10 rounded-full bg-white border border-navy/15 shadow text-navy hover:bg-navy hover:text-white transition-colors flex items-center justify-center z-10">
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

@include('components.why-choose-strip', [
    'eyebrow' => 'Equipment Rental',
    'headingLine1' => 'Access the equipment your facility needs<br>',
    'headingLine2' => '<span style="color:#148af4;">with lower upfront cost</span>',
    'body' => 'Equipment Rental gives care facilities access to Electrolux Professional equipment<br class="hidden lg:block"> with installation and ongoing support included in the agreement.',
    'miniPoints' => [
        ['icon' => 'healthcarerentalstrip1', 'label' => 'Lower Upfront<br>Cost'],
        ['icon' => '146', 'iconClass' => 'scale-[0.92]', 'label' => 'Included<br>Support'],
        ['icon' => '147', 'iconClass' => 'scale-[0.93]', 'label' => 'Clearer<br>Budgeting'],
    ],
])

@include('components.equipment-categories', [
    'eyebrow' => 'Browse by type',
    'textMinH' => '176px',
    'heading' => '<span class="lg:text-4xl lg:whitespace-nowrap">Explore equipment for <span style="color:#148af4;">different care facility needs</span></span>',
    'subheading' => 'Choose the equipment category that fits the room, load type, hygiene needs and aftercare.',
    'equipment' => [
        ['img'=>'line6000-barrier-washer', 'src' => '/images/pages/barrier-washers/line6000-barrier-washer.webp','name'=>'Barrier Washers','desc'=>'For sites that need dirty-side and clean-side handling kept separate.','box'=>250,'mb'=>-20],
        ['img'=>'commercialwasher', 'src' => '/images/pages/commercial-washers/commercialwasher.webp','name'=>'Washing Machines','desc'=>'For everyday care facility loads that need capacity, consistency and dosing control.','box'=>270,'mb'=>-35],
        ['img'=>'TD6-14', 'src' => '/images/pages/dryers/TD6-14.jpg','name'=>'Dryers','desc'=>'For controlled drying, lower energy use and moisture management after washing.','box'=>245],
        ['img'=>'drying-cabinet','src'=>'/images/pages/drying-cabinets/workwear-dc6-15ww.jpg','name'=>'Drying Cabinets','desc'=>'For garments, bulky items and specialist textiles that need gentle drying and fabric care.','box'=>260,'mb'=>-11],
        ['img'=>'IB623_FRONT_NEW', 'src' => '/images/pages/ironers/IB623_FRONT_NEW.jpg','ext'=>'jpg','name'=>'Ironers & Flatwork','desc'=>'For finishing, moisture control and textiles ready for storage or use.'],
    ],
])

<!-- PROCESS BLOCK -->
<section class="pt-4 lg:pt-6 pb-14 lg:pb-20 bg-white">
    <div class="max-w-screen-xl mx-auto px-6 sm:px-10 lg:px-20">

        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 text-center">Installation &amp; Handover</p>
        <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3 text-center">
            Prepare care facility laundry equipment for <span style="color:#148af4;">daily use</span>
        </h2>
        <p class="font-body text-gray-500 text-base mb-12 leading-relaxed text-center mx-auto lg:whitespace-nowrap">
            Site checks, installation, commissioning and handover are coordinated so the selected equipment is ready for use.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-12 lg:gap-20">

            @foreach([
                ['title' => 'Prepare the Site', 'text' => 'Confirm access, utilities and positioning before delivery.'],
                ['title' => 'Install and Commission', 'text' => 'Deliver, position, install and test the selected equipment.'],
                ['title' => 'Handover', 'text' => 'Provide operating guidance and explain available aftercare.'],
            ] as $i => $step)

            <div class="flex flex-col items-center text-center relative">
                @if($i < 2)
                <div class="hidden lg:block absolute -right-[4.5rem] top-[2.45rem] text-[#148af4]">
                    <svg class="w-14 h-8" fill="none" viewBox="0 0 40 24" stroke="currentColor" stroke-width="2.2"><path stroke-linecap="round" stroke-linejoin="round" d="M29.5 4.5 37 12m0 0-7.5 7.5M37 12H3"/></svg>
                </div>
                @endif
                <div class="w-full flex justify-center items-center mb-1" style="height:8rem;">
                    <img src="/images/icons/{{ [126, 125, 128][$i] }}.png" alt=""
                         style="width:7rem;height:7rem;filter:brightness(0) saturate(100%) invert(35%) sepia(96%) saturate(1500%) hue-rotate(196deg) brightness(103%);">
                </div>
                <h3 class="font-heading font-bold text-navy text-sm lg:text-base mb-1">{!! $step['title'] !!}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{!! $step['text'] !!}</p>
            </div>

            @endforeach

        </div>
    </div>
</section>

<!-- 11. Service Contracts, Support & Aftercare Strip -->
@include('components.service-contracts-strip', [
    'eyebrow'      => 'After Installation',
    'headingLine1' => 'Keep care facility laundry',
    'headingLine2' => 'performing reliably every day',
    'body'         => 'Ongoing maintenance and aftercare help minimise disruption and protect equipment value, helping keep your laundry operation reliable long after installation.',
    'image'        => '/images/pages/services/support-aftercare-hero.png',
    'miniPoints'   => [
        ['icon' => 'home-rental-maintained', 'iconClass' => 'scale-[0.94]',  'label' => 'Service<br>Planning'],
        ['icon' => 'home-maintenance-value', 'iconClass' => 'scale-[1.06]',  'label' => 'Equipment<br>Care'],
        ['icon' => '75', 'iconClass' => 'scale-[0.93]', 'label' => 'Aftercare<br>Support'],
    ],
    'cta1Label'    => 'View Preventive Maintenance',
    'cta1Route'    => 'service-contracts',
])

<!-- 12. Testimonial / Proof Block -->
@include('components.testimonials', [
    'eyebrow'    => 'Customer Trust',
    'heading'    => 'Trusted commercial laundry support <span style="color:#148af4;">across Ireland</span>',
    'subheading' => 'See how organisations across Ireland describe their experience working with Irish Laundry Systems.',
    'subheadingClass' => 'max-w-6xl mx-auto',
])

@include('components.proof-bar')

@include('components.faq', [
    'heading' => 'Questions before your <span style="color:#148af4;">care facility laundry assessment</span>',
    'footerNote' => 'Have a different question? Talk to our team.',
    'faqs' => [
        ['question' => 'What types of care facilities do you work with?',             'answer' => 'Irish Laundry Systems works with care homes, nursing homes, residential care settings and related sites where resident items, staff routines and equipment reliability matter.'],
        ['question' => 'Can you supply machines suitable for a care home laundry room?', 'answer' => 'Yes. Irish Laundry Systems supplies and supports Electrolux Professional laundry equipment for care facility settings, including washers, dryers, finishing equipment and barrier options for sites that need separation control.'],
        ['question' => 'Can you reduce laundry running costs?',                       'answer' => 'Yes. Irish Laundry Systems can review room layout, equipment type, utilities, load patterns and maintenance history. Selected Electrolux Professional technologies can lower energy, water and detergent use.'],
        ['question' => 'Is rental an option instead of purchasing equipment outright?', 'answer' => 'Yes. Equipment Rental can be discussed for care facilities that need replacement, expansion or continuity without one large purchase upfront.'],
        ['question' => 'What maintenance support is available after installation?',   'answer' => 'Preventive Maintenance Contracts can include scheduled visits, inspection, reporting and practical follow-up. Support & Aftercare can use service history, parts access where needed and equipment guidance after installation.'],
        ['question' => 'Can you respond if a machine breaks down?',                   'answer' => 'Yes. Repairs & Call-Outs are available for urgent equipment faults. Requests are prioritised by urgency, equipment details, site needs and maintenance history.'],
        ['question' => 'Do care homes need barrier washers?',                         'answer' => 'Barrier washers are relevant for larger care settings or sites where dirty-side and clean-side handling need controlled separation. Irish Laundry Systems can assess whether that level of control is needed.'],
        ['question' => 'Can you review an existing care home laundry room?',          'answer' => 'Yes. Irish Laundry Systems can review current machines, room layout, laundry routines, running costs and maintenance history before recommending purchase, rental, repair or replacement.'],
    ],
])

<!-- 13. Final CTA / Form -->
@include('components.cta-downtime-form', ['pageSource' => 'care_cta', 'heading' => 'Ready to review your<br class="hidden lg:block"> <span style="color:#148af4;">care facility laundry setup</span>', 'body' => 'Talk to Irish Laundry Systems about your facility and laundry requirements. We\'ll recommend the right equipment, layout and ongoing support.', 'formTitle' => 'Request a Care Facility Laundry Assessment', 'buttonText' => 'Request Care Facility Assessment'])

@endsection
