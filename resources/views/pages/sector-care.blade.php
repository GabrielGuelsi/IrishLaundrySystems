@extends('layouts.app')

@section('meta')
<meta name="description" content="Care facility laundry support — equipment selection, installation, service contracts, repairs, parts and aftercare for care facilities across Ireland.">
@endsection

@section('content')

<!-- 1. HERO -->
<section class="relative overflow-hidden flex flex-col" style="height:720px; min-height:560px;">
    <img src="/images/CareFacilities/CareFacilitiesHero.png" alt="Care facility laundry"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16 py-24 lg:py-32">
            <div class="max-w-3xl reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Care Facility Laundry Support</p>
                <h1 class="font-heading font-bold text-navy text-3xl lg:text-5xl leading-tight mb-4">
                    Keep <span style="color:#148af4;">daily care moving</span><br>without laundry becoming<br>another management problem
                </h1>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8 max-w-2xl">
                    Care facility laundry rooms handle resident clothing, bedding, towels and staff items every day. Irish Laundry Systems helps care homes specify, rent, maintain and support Electrolux Professional laundry equipment around daily demand, hygiene needs, staff pressure and running cost.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#care-assessment"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Care Facility Assessment
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

<!-- 2. Thin Electrolux Trust Strip -->
@include('components.partner-strip')

<!-- 4. INTRO COMMERCIAL BLOCK -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Built for Care</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-6xl leading-tight">
                    Care home laundry is part of <span style="color:#148af4;">daily care</span>,<br>not a back-room task
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    When laundry slows down, resident clothing, bedding, towels and staff routines all come under pressure. Poor equipment fit can also increase water use, energy use, detergent waste, staff strain, repair calls and replacement pressure.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Irish Laundry Systems helps care facilities connect equipment choice, rental, preventive maintenance, repairs and aftercare around how the site actually runs.
                </p>
                <a href="{{ route('equipment') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy-dark text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    See the equipment we provide
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- 5. LAUNDRY AND HYGIENE-SENSITIVE HANDLING SUPPORT -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Daily Demand</p>
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-5xl leading-tight mb-4">
                Laundry support for <span style="color:#148af4;">resident items, linen flow</span><br>and day-to-day use
            </h2>
            <p class="font-body text-gray-600 text-base leading-relaxed mb-4">
                Care facility laundry needs to move through the week without creating extra strain for managers, care teams or residents. The right setup should account for clothing, bedding, towels, staff items, hygiene handling, drying pressure and service needs.
            </p>
        </div>

        <!-- Image + Navy overlay card -->
        <div class="relative reveal">

            <div class="w-full lg:w-4/5 ml-auto rounded-2xl overflow-hidden">
                <img src="/images/healthcare/render-double-page_72dpi.jpg"
                     alt="Care facility laundry room"
                     class="w-full h-[580px] object-cover object-center">
            </div>

            <div class="lg:absolute lg:top-1/2 lg:-translate-y-1/2 lg:left-0 mt-6 lg:mt-0 w-full lg:w-[490px] bg-navy rounded-2xl p-10 shadow-2xl">
                <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-snug mb-6">
                    Care facility laundry needs a <span style="color:#148af4;">system designed for care</span>
                </h3>
                <ul class="space-y-3">
                    @foreach([
                        'Resident clothing, bedding and towels',
                        'Staff-friendly wash and dry routines',
                        'Daily output planned around site use',
                        'Barrier options where separation is required',
                        'Service structure behind the installed equipment',
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

<!-- 6. COMPACT CARE FACILITIES BENTO -->
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Technical Proof</p>
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-[2.75rem] leading-tight mb-3">
                Care facility laundry should <span style="color:#148af4;">support daily care</span>, not create another pressure point
            </h2>
            <p class="font-body text-gray-500 text-sm leading-relaxed">
                Selected Electrolux Professional features can support easier handling, clearer process control, better drying and more manageable day-to-day laundry routines when matched to the right care setting.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-3">

            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/13.png" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Resident-item handling</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Support for bedding, towels, personal clothing and staff items moving through daily care routines.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/4.png" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Operator wellbeing first</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Ergonomic loading, access and controls help reduce strain for teams handling repeated laundry tasks.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/5.png" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Intelligent control</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">ClarusVibe and CompassPro give operators guided programs, status messages and clearer day-to-day process control.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/15.png" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Hygiene-focused process</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Barrier options and process control support separated handling where the site requires&nbsp;it.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-2 lg:col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/16.png" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Drying and finishing control</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Moisture Balance, Direct Ironer Advanced Moisture Management System (DIAMMS) and finishing features help support linen quality before storage or return to use.</p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Financial Performance Bento: metric cards --}}
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Financial Performance</p>
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-[2.75rem] leading-tight mb-3">
                Stop <span style="color:#148af4;">laundry costs</span> quietly building up in the care home
            </h2>
            <p class="font-body text-gray-500 text-sm leading-relaxed">
                In care facilities, laundry cost can build through energy use, water use, detergent waste, staff time, repair calls, ageing equipment and replacement decisions made too late.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-x-8 gap-y-10">

            {{-- Metric 1 --}}
            <div class="flex flex-col gap-2 col-span-1">
                <div class="flex flex-col gap-0 min-h-[4.5rem]">
                    <span class="font-body font-bold text-[#148af4] text-base">Up to</span>
                    <div class="flex items-center gap-3">
                        <div class="font-heading font-bold text-[#148af4] text-4xl leading-none">+65%</div>
                        <img src="/images/icons/7.png" alt="" class="w-12 h-12 object-contain flex-shrink-0">
                    </div>
                </div>
                <h3 class="font-heading font-bold text-[#148af4] text-sm leading-snug">dryer energy saving</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">Electrolux Professional Heat Pump dryer technology can save up to 65% on energy consumption in suitable applications.</p>
            </div>

            {{-- Metric 2 --}}
            <div class="flex flex-col gap-2 col-span-1">
                <div class="flex flex-col gap-0 min-h-[4.5rem]">
                    <span class="font-body font-bold text-[#148af4] text-base">Up to</span>
                    <div class="flex items-center gap-3">
                        <div class="font-heading font-bold text-[#148af4] text-4xl leading-none">+50%</div>
                        <img src="/images/icons/8.png" alt="" class="w-12 h-12 object-contain flex-shrink-0">
                    </div>
                </div>
                <h3 class="font-heading font-bold text-[#148af4] text-sm leading-snug">water saving</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">Double-drain barrier washer configurations can support water recycling and save up to 50% on water consumption where suitable.</p>
            </div>

            {{-- Metric 3 --}}
            <div class="flex flex-col gap-2 col-span-1">
                <div class="flex flex-col gap-0 min-h-[4.5rem]">
                    <span class="font-body font-bold text-[#148af4] text-base">Up to</span>
                    <div class="flex items-center gap-3">
                        <div class="font-heading font-bold text-[#148af4] text-4xl leading-none">+75%</div>
                        <img src="/images/icons/9.png" alt="" class="w-12 h-12 object-contain flex-shrink-0">
                    </div>
                </div>
                <h3 class="font-heading font-bold text-[#148af4] text-sm leading-snug">fewer sick days</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">Electrolux Professional ergonomics material cites a 75% average decrease in sick days, alongside a 59% reduction in Work-related Musculoskeletal Disorders and a 25% productivity increase.</p>
            </div>

            {{-- Business 4 --}}
            <div class="flex flex-col gap-2 col-span-1">
                <div class="flex items-start gap-2 min-h-[4.5rem]">
                    <h3 class="font-heading font-bold text-[#148af4] leading-snug">
                        <span class="text-2xl">Less<br>detergent</span>
                    </h3>
                    <img src="/images/icons/10.png" alt="" class="w-12 h-12 object-contain flex-shrink-0">
                </div>
                <p class="font-heading font-bold text-[#148af4] text-sm leading-snug">and process waste</p>
                <p class="font-body text-gray-500 text-sm leading-relaxed">Integrated Savings and Efficient Dosing help match load, water and detergent use to the real cycle demand, reducing waste from underloading, overloading and poor process control.</p>
            </div>

            {{-- Business 5 --}}
            <div class="flex flex-col gap-2 col-span-2 lg:col-span-1">
                <div class="flex items-start gap-2 min-h-[4.5rem]">
                    <h3 class="font-heading font-bold text-[#148af4] leading-snug">
                        <span class="text-2xl">Lower<br>reactive</span>
                    </h3>
                    <img src="/images/icons/11.png" alt="" class="w-12 h-12 object-contain flex-shrink-0">
                </div>
                <p class="font-heading font-bold text-[#148af4] text-sm leading-snug">cost pressure</p>
                <p class="font-body text-gray-500 text-sm leading-relaxed">Irish Laundry Systems connects rental, preventive maintenance, repairs and aftercare so care homes are not forced to make every decision after something fails.</p>
            </div>

        </div>
    </div>
</section>

<!-- 7. FOUR SERVICE CARDS -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Connected Routes</p>
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-[2.75rem] leading-tight mb-3">
                Four ways we support <span style="color:#148af4;">care facility laundry</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Care facilities often need equipment, maintenance, response and aftercare to work around the same daily laundry routine. These needs should not sit in separate conversations.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">

            @foreach([
                [
                    'title'  => 'Repairs &amp; Call-outs',
                    'text'   => 'For urgent equipment faults that can delay resident laundry, increase staff pressure or disrupt daily care routines.',
                    'cta'    => 'Request Call-out',
                    'route'  => route('repairs'),
                    'img'    => '/images/healthcare/repairs-callouts.jpg',
                    'pos'    => 'center 40%',
                ],
                [
                    'title'  => 'Preventive Contracts',
                    'text'   => 'For care homes that need planned visits, service visibility and fewer reactive maintenance decisions around essential laundry equipment.',
                    'cta'    => 'View Contracts',
                    'route'  => route('service-contracts'),
                    'img'    => '/images/healthcare/Service Contracts.png',
                    'pos'    => 'center 35%',
                ],
                [
                    'title'  => 'Equipment Rental',
                    'text'   => 'For sites that need access to professional equipment without turning every laundry decision into an upfront capital purchase.',
                    'cta'    => 'See Rental Options',
                    'route'  => route('rental'),
                    'img'    => '/images/healthcare/commercial-industrial.jpg',
                    'pos'    => 'center center',
                ],
                [
                    'title'  => 'Support &amp; Aftercare',
                    'text'   => 'For service history, parts access where needed, technical follow-up and clearer maintain, repair, rent or replace decisions.',
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
                    <h3 class="font-heading font-bold text-white text-xl lg:text-2xl leading-tight mb-4">{!! $card['title'] !!}</h3>
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

<!-- 8. PLANNING STRIP -->
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">

    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover"
             style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.85) 15%, rgba(20,138,244,0.3) 55%, transparent 100%);"></div>
    </div>

    <div class="relative z-10 px-10 lg:px-16 py-10 lg:py-14" style="width:100%; max-width:60%;">

        <h2 class="font-heading font-bold leading-tight mb-4">
            <span class="text-white text-3xl lg:text-5xl block">Designed around your</span>
            <span class="text-3xl lg:text-5xl block" style="color:#011E41;">care facility, workflow<br>and capacity</span>
        </h2>

        <p class="font-body text-white text-base lg:text-lg leading-relaxed mb-6">
            Before equipment becomes a daily management issue, the room, staff routine, resident-item flow, utility pressure and service needs should be understood together.
        </p>

        <div class="flex items-center flex-nowrap gap-0 mb-7">
            @foreach([
                ['icon' => 'ativo-20', 'label' => 'Workflow &amp;<br>layout'],
                ['icon' => 'ativo-10', 'label' => 'Equipment<br>selection'],
                ['icon' => 'ativo-21', 'label' => 'Capacity<br>planning'],
                ['icon' => 'ativo-9',  'label' => 'Service<br>structure'],
            ] as $i => $feat)
            @if($i > 0)
                <div class="w-px h-10 bg-white/30 mx-5 hidden sm:block flex-shrink-0"></div>
            @endif
            <div class="flex items-center gap-3">
                <div class="flex-shrink-0 flex items-center justify-center rounded-full"
                     style="width:52px;height:52px;border:2px dashed rgba(255,255,255,0.5);">
                    <img src="/images/icons/brand-white/{{ $feat['icon'] }}.svg"
                         style="width:1.6rem;height:1.6rem;" alt="">
                </div>
                <span class="font-body text-white text-xs font-bold leading-snug">{!! $feat['label'] !!}</span>
            </div>
            @endforeach
        </div>

        <a href="{{ route('contact') }}"
           class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
            Talk to Our Team
        </a>

    </div>

</section>

<!-- 9. DETAILED EQUIPMENT SECTION -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-12 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Electrolux Professional Equipment</p>
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-3">
                Equipment for <span style="color:#148af4;">care facility laundry</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                The right equipment plan depends on daily load, resident items, drying pressure, staff handling, available space and the service structure behind the installed equipment.
            </p>
        </div>

        <div class="flex flex-col divide-y divide-gray-100">

            <!-- 1. COMMERCIAL WASHERS — text left, image right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center py-12 lg:py-16 reveal lg:pl-[10%]">
                <div>
                    <h3 class="font-heading font-bold text-navy text-4xl lg:text-5xl mb-3">Commercial Washers</h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Commercial washers support daily wash demand across resident clothing, bedding,<br>towels and mixed loads where capacity, wash quality and garment care matter.
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
                            <span class="font-body text-gray-500 text-sm leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-row flex-wrap items-center gap-4">
                        <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Go to Products
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Request Assessment
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
                <div class="flex items-center justify-center -mt-16">
                    <img src="/images/equipment/commercialwasher.webp"
                         alt="Commercial Washer"
                         class="w-full h-96 object-contain object-top">
                </div>
            </div>

            <!-- 2. TUMBLE DRYERS — image left, text right -->
            <div x-data="{ open: false }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="flex flex-col">
                    <img src="/images/equipment/Tumble-dryers_Heat-Pump_1-1.webp"
                         alt="Line 6000 Tumble Dryer"
                         class="w-full h-96 object-contain object-left-top">
                    <div class="mt-1 pt-3">
                        <button @click="open = !open"
                                class="w-full flex items-center justify-start gap-3 text-left group pl-[20px]">
                            <span class="font-heading font-bold text-navy text-lg">System Features, Moisture Control</span>
                            <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </button>
                    </div>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-4xl lg:text-5xl mb-3">Tumble Dryers</h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Tumble dryers support post-wash flow where <span style="color:#148af4;">drying time</span>, residual moisture, operator handling and energy use affect laundry turnaround through the day.
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
                            <span class="font-body text-gray-500 text-sm leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-row flex-wrap items-center gap-4">
                        <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Go to Products
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Request Assessment
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div x-show="open" x-collapse class="py-6 border-t border-gray-100">
                <h4 class="font-heading font-bold text-navy text-xl mb-4">Dry not overdry</h4>
                <div class="flex items-start gap-6 mb-8">
                    <div class="w-32 h-32 flex-shrink-0">
                        <img src="/images/healthcare/MoistureBalance.png" alt="Moisture Balance" class="w-full h-full object-contain">
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

            <!-- 3. IRONERS & FINISHING — text left, image right -->
            <div x-data="{ open: false, tab: 'diamms' }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div>
                    <h3 class="font-heading font-bold text-navy text-4xl lg:text-5xl mb-3">Ironers &amp; Finishing</h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Ironers and finishing equipment support linen presentation, drying consistency, <span style="color:#148af4;">flatwork flow</span> and storage readiness in care environments.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Direct Ironer Advanced Moisture Management System (DIAMMS)',
                            'Hygiene Guard linen rejection when humidity parameters are not respected',
                            'Finishing quality before storage or return to use',
                            'Ceramic Burner power increase up to 20% on selected gas-heated ironers',
                            'Operator-friendly finishing flow',
                        ] as $point)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="font-body text-gray-500 text-sm leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-row flex-wrap items-center gap-4">
                        <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Go to Products
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Request Assessment
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col">
                    <img src="/images/equipment/line6000-ironer.webp"
                         alt="Line 6000 Ironer"
                         class="w-full h-80 object-contain object-left-top">
                    <div class="mt-1 pt-3 w-full">
                        <button @click="open = !open" class="w-full flex items-center justify-start gap-3 text-left group pl-[10px]">
                            <span class="font-heading font-bold text-navy text-lg">System Features, DIAMMS &amp; Hygiene Guard</span>
                            <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div x-show="open" x-collapse class="py-6 border-t border-gray-100">
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

                <div x-show="tab === 'diamms'">
                    <h4 class="font-heading font-bold text-navy text-xl mb-4">Maximum hygiene and performance</h4>
                    <div class="flex items-start gap-6 mb-8">
                        <div class="w-32 h-32 flex-shrink-0">
                            <img src="/images/healthcare/Diamms.png" alt="DIAMMS" class="w-full h-full object-contain">
                        </div>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">
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
                            <p class="font-body text-gray-500 text-sm leading-relaxed">FoldFlex ensures the highest quality at the end of the finishing process so that linen can be safely and securely stored, ready for the next use.</p>
                        </div>
                    </div>
                </div>

                <div x-show="tab === 'hygiene'">
                    <h4 class="font-heading font-bold text-navy text-xl mb-4">Pure Hygiene: Flawless Dry Linen Delivery</h4>
                    <div class="flex items-start gap-6 mb-8">
                        <div class="w-32 h-32 flex-shrink-0">
                            <img src="/images/healthcare/HygieneGuard.png" alt="Hygiene Guard" class="w-full h-full object-contain">
                        </div>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">
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
                            <p class="font-body text-gray-500 text-sm leading-relaxed">FoldFlex ensures the highest quality at the end of the finishing process so that linen can be safely and securely stored, ready for the next use.</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <!-- 4. BARRIER WASHERS — text left, image right -->
            <div x-data="{ open: false, tab: 'aido' }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="flex flex-col">
                    <img src="/images/equipment/line6000-barrier-washer.webp"
                         alt="Line 6000 Barrier Washer"
                         class="w-full h-[440px] object-contain object-left-top">
                    <div class="mt-1 pt-3 w-full flex justify-center">
                        <button @click="open = !open" class="inline-flex items-center gap-3 text-left group">
                            <span class="font-heading font-bold text-navy text-lg">System Features, AIDO &amp; Hygiene Watchdog</span>
                            <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="lg:pt-10">
                    <h3 class="font-heading font-bold text-navy text-4xl lg:text-5xl mb-3">Barrier Washers</h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Barrier washers support sites where controlled dirty-side loading and clean-side unloading are required as part of the care laundry process.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Dirty-side and clean-side separation',
                            'AIDO controlled loading and unloading',
                            'Hygiene Watchdog full-cycle completion',
                            'Double-drain water recycling where suitable',
                            'Risk Analysis and Biocontamination Control (RABC)-aligned process support',
                        ] as $point)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="font-body text-gray-500 text-sm leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-row flex-wrap items-center gap-4">
                        <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            View Equipment
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Request Assessment
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
                            <img src="/images/healthcare/Auto%20Inner%20Door%20Opening%20(AIDO)%20System.png" alt="AIDO System" class="w-full h-full object-contain">
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
                            <img src="/images/healthcare/HygieneWatchdog.webp" alt="Hygiene Watchdog" class="w-full h-full object-contain">
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

@include('components.why-choose-strip')

@include('components.equipment-categories')

<!-- PROCESS BLOCK -->
<section class="py-14 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 text-center">Process</p>
        <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl mb-3 text-center">
            Our process keeps the <span style="color:#148af4;">next step</span> clear
        </h2>
        <p class="font-body text-gray-500 text-base mb-12 max-w-xl leading-relaxed text-center mx-auto">
            From the first assessment through to equipment, rental, maintenance and aftercare, each step should make the next decision easier.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-20">

            @foreach([
                ['title' => 'Understand the care facility laundry room', 'text' => 'Review room layout, staff routine,<br>resident-item flow, utilities,<br>capacity and day-to-day pressure.',  'icon' => 'clipboard'],
                ['title' => 'Match equipment to<br>daily care needs',        'text' => 'Recommend the right washer, dryer, finishing setup, rental route or replacement&nbsp;plan.',               'icon' => 'Ativo%204'],
                ['title' => 'Connect service, rental<br>and aftercare',      'text' => 'Link the installed equipment to<br>preventive maintenance, repairs,<br>service history and follow-up.',      'icon' => 'Ativo%206'],
                ['title' => 'Move to assessment',                         'text' => 'Turn the room, equipment setup and service model into a practical next step.',                         'icon' => 'Ativo%203'],
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
                <p class="font-body text-gray-500 text-sm leading-relaxed">{!! $step['text'] !!}</p>
            </div>

            @endforeach

        </div>
    </div>
</section>

<!-- 11. Service Contracts, Support & Aftercare Strip -->
@include('components.service-contracts-strip')

<!-- 12. Testimonial / Proof Block -->
@include('components.testimonials')

@include('components.proof-bar')

@include('components.faq', [
    'heading' => 'Care Facility Laundry FAQs',
    'faqs' => [
        ['question' => 'What types of care facilities do you work with?',             'answer' => 'Irish Laundry Systems works with care homes, residential care settings, nursing home environments and related sites where daily laundry demand, resident items, staff routines and equipment continuity matter.'],
        ['question' => 'Can you supply machines suitable for a care home laundry room?', 'answer' => 'Yes. Irish Laundry Systems supplies and supports Electrolux Professional laundry equipment for care facility settings, including washers, dryers, finishing equipment and barrier options where separation is required.'],
        ['question' => 'Can you help reduce laundry running costs?',                  'answer' => 'We can assess the room, equipment type, utility pressure, load pattern and maintenance needs. Selected Electrolux Professional technologies can help reduce energy, water and detergent use depending on the equipment and site configuration.'],
        ['question' => 'Is rental an option instead of purchasing equipment outright?', 'answer' => 'Yes. Equipment Rental can be discussed where a care facility needs replacement, expansion or continuity without immediate capital purchase.'],
        ['question' => 'What maintenance support is available after installation?',   'answer' => 'Preventive Maintenance Contracts can include scheduled visits, inspection, service reporting and technical follow-up. Support & Aftercare helps connect service history, parts access where needed and future equipment decisions.'],
        ['question' => 'Can you respond if a machine breaks down?',                   'answer' => 'Yes. Repairs & Call-outs are available for urgent equipment faults. Requests are handled based on urgency, equipment details, site pressure and service context.'],
        ['question' => 'Do care homes need barrier washers?',                         'answer' => 'Not every care facility needs the same setup. Barrier washers are relevant where dirty-side and clean-side handling need controlled separation. Irish Laundry Systems can help assess whether this is required for your site.'],
        ['question' => 'Can you review an existing care home laundry room?',          'answer' => 'Yes. We can review current machines, room layout, daily demand, running pressure, maintenance history and whether purchase, rental, repair or replacement is the right next step.'],
    ],
])

<!-- 13. Final CTA / Form -->
@include('components.cta-downtime-form', ['pageSource' => 'care_cta'])

@endsection
