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
                    Care facility laundry rooms handle resident clothing, bedding, towels and staff items every day. Irish Laundry Systems supports care homes, nursing homes and residential care settings with Electrolux Professional equipment, rental, planned maintenance, repairs and aftercare around daily demand, staff routines, hygiene needs and running cost.
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
                    Irish Laundry Systems connects equipment choice, rental, preventive maintenance, repairs and aftercare around how the site actually runs, so care facilities can keep laundry moving with better cost control and more peace of mind.
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
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-4">
                <span class="whitespace-nowrap block">Laundry support for <span style="color:#148af4;">resident items,</span></span>
                <span class="whitespace-nowrap block">linen flow and <span style="color:#148af4;">staff routines</span></span>
            </h2>
            <p class="font-body text-gray-600 text-base leading-relaxed mb-4">
                Care facility laundry needs to move through the week without adding strain for managers, care teams, residents or staff. The right setup should account for resident clothing, bedding, towels, staff items, hygiene handling, drying pressure and the care needed to keep equipment running.
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
                    Care facility laundry needs a system designed around daily care
                </h3>
                <ul class="space-y-3">
                    @foreach([
                        'Resident clothing, bedding and towels',
                        'Staff-friendly wash and dry routines',
                        'Daily output planned around site use',
                        'Barrier options where separation is required',
                        'Planned care around equipment already on-site',
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
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Financial Performance</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-3">
                <span class="whitespace-nowrap block"><span style="color:#148af4;">Control care home laundry costs</span> before</span>
                <span class="whitespace-nowrap block">they quietly build up</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                <span class="whitespace-nowrap block">In care facilities, laundry cost can build through energy use, water use, detergent waste, staff time, repair calls, ageing equipment and replacement decisions made too late.</span>
                <span class="whitespace-nowrap block">The right equipment plan should keep daily care moving while reducing avoidable running costs.</span>
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-x-8 gap-y-10">

            {{-- Metric 1 --}}
            <div class="flex flex-col gap-2 col-span-1">
                <div class="flex items-center gap-3 min-h-[4.5rem]">
                    <div class="font-heading font-bold text-[#148af4] text-4xl leading-none">-65%</div>
                    <img src="/images/icons/7.png" alt="" class="w-12 h-12 object-contain flex-shrink-0">
                </div>
                <h3 class="font-heading font-bold text-[#148af4] text-sm leading-snug">dryer energy use</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">Electrolux Professional Heat Pump dryer technology can reduce energy consumption by up to 65% in suitable applications.</p>
            </div>

            {{-- Metric 2 --}}
            <div class="flex flex-col gap-2 col-span-1">
                <div class="flex items-center gap-3 min-h-[4.5rem]">
                    <div class="font-heading font-bold text-[#148af4] text-4xl leading-none">-50%</div>
                    <img src="/images/icons/8.png" alt="" class="w-12 h-12 object-contain flex-shrink-0">
                </div>
                <h3 class="font-heading font-bold text-[#148af4] text-sm leading-snug">water use</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">Double-drain barrier washer configurations can support water recycling and reduce water consumption by up to 50% where suitable.</p>
            </div>

            {{-- Metric 3 --}}
            <div class="flex flex-col gap-2 col-span-1">
                <div class="flex items-center gap-3 min-h-[4.5rem]">
                    <div class="font-heading font-bold text-[#148af4] text-4xl leading-none">-75%</div>
                    <img src="/images/icons/9.png" alt="" class="w-12 h-12 object-contain flex-shrink-0">
                </div>
                <h3 class="font-heading font-bold text-[#148af4] text-sm leading-snug">sick days</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">Electrolux Professional ergonomics material cites a 75% average decrease in sick days, alongside a 59% reduction in Work-related Musculoskeletal Disorders and a 25% productivity increase.</p>
            </div>

            {{-- Business 4 --}}
            <div class="flex flex-col gap-2 col-span-1">
                <div class="flex items-center gap-2 min-h-[4.5rem]">
                    <div class="font-heading font-bold text-[#148af4] text-2xl leading-none">Less<br>waste</div>
                    <img src="/images/icons/10.png" alt="" class="w-12 h-12 object-contain flex-shrink-0">
                </div>
                <h3 class="font-heading font-bold text-[#148af4] text-sm leading-snug">detergent and process waste</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">Integrated Savings and Efficient Dosing support better control of load, water and detergent use, reducing waste from underloading, overloading and poor process control.</p>
            </div>

            {{-- Business 5 --}}
            <div class="flex flex-col gap-2 col-span-2 lg:col-span-1">
                <div class="flex items-center gap-2 min-h-[4.5rem]">
                    <div class="font-heading font-bold text-[#148af4] text-2xl leading-none">Fewer<br>surprise</div>
                    <img src="/images/icons/11.png" alt="" class="w-12 h-12 object-contain flex-shrink-0">
                </div>
                <h3 class="font-heading font-bold text-[#148af4] text-sm leading-snug">repair and maintenance pressure</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">Irish Laundry Systems connects equipment planning, rental, preventive maintenance, repairs and aftercare so care home laundry decisions are not only made after something fails.</p>
            </div>

        </div>
    </div>
</section>

<!-- 6. COMPACT CARE FACILITIES BENTO -->
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Technical Proof</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-3">
                <span class="whitespace-nowrap block">Features that support <span style="color:#148af4;">daily care,</span> <span style="color:#148af4;">staff handling</span></span>
                <span class="whitespace-nowrap block">and <span style="color:#148af4;">laundry consistency</span></span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                <span class="whitespace-nowrap block">Selected Electrolux Professional features can support easier handling, clearer process control, better drying and more</span>
                <span class="whitespace-nowrap block">manageable day-to-day laundry routines when matched to the right care setting.</span>
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-3">

            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/13.png" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Resident-item handling</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed text-left">Support for resident bedding, towels, personal clothing and staff items as they move through daily care routines and back into use.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/4.png" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Operator wellbeing first</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed text-left">Ergonomic loading, easy access and clear controls make repeated daily laundry tasks easier for care teams and laundry&nbsp;staff.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/5.png" alt="" class="w-32 h-32 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Guided process control</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed text-left">ClarusVibe and CompassPro give operators guided programs, clear status messages and easier day-to-day&nbsp;control.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/15.png" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Hygiene-focused process</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed text-left">Barrier options and process control support separated dirty-side and clean-side handling where the site requires it.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-2 lg:col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/16.png" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Drying and finishing control</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed text-left">Moisture Balance, Direct Ironer Advanced Moisture Management System (DIAMMS) and finishing features support linen quality before storage or return to use.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 7. FOUR SERVICE CARDS -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Support Routes</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-3">
                Connected support to <span style="color:#148af4;">keep daily care moving</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Care facilities need equipment, maintenance, repairs and aftercare to work around the same daily laundry routine, resident-item flow and staff pressure.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">

            @foreach([
                [
                    'title'  => 'Repairs &amp; Call-outs',
                    'text'   => 'For urgent equipment faults that can delay resident laundry, increase staff pressure or disrupt daily care routines.',
                    'cta'    => 'Request Call-out',
                    'route'  => route('repairs'),
                    'img'    => '/images/healthcare/support-aftercare-hero.png',
                    'pos'    => 'center 40%',
                ],
                [
                    'title'  => 'Preventive Maintenance',
                    'text'   => 'For care homes that need planned visits, fewer reactive maintenance decisions and better control around essential laundry equipment.',
                    'cta'    => 'View Maintenance Options',
                    'route'  => route('service-contracts'),
                    'img'    => '/images/healthcare/service-contracts-hero.png',
                    'pos'    => '90% 35%',
                ],
                [
                    'title'  => 'Equipment Rental',
                    'text'   => 'For sites that need professional laundry equipment without turning every decision into a large upfront purchase.',
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
                    <h3 class="font-heading font-bold text-white text-xl lg:text-2xl leading-tight mb-4 whitespace-nowrap">{!! $card['title'] !!}</h3>
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
            <span class="text-white text-3xl lg:text-5xl block">Plan the care laundry room</span>
            <span class="text-3xl lg:text-5xl block" style="color:#011E41;">before daily costs build up</span>
        </h2>

        <p class="font-body text-white text-base lg:text-lg leading-relaxed mb-6">
            Before equipment becomes a daily management issue, the room, staff routine, resident-item flow, utility pressure and maintenance needs should be understood together. Irish Laundry Systems plans care facility laundry around daily pressure, not just machine capacity.
        </p>

        <div class="flex items-center flex-wrap gap-x-5 gap-y-2 mb-7">
            @foreach(['Avoid wasted spend', 'Right-fit daily flow', 'Reduce costly rework'] as $i => $pt)
            @if($i > 0)<span class="text-white/40">|</span>@endif
            <span class="font-body text-white text-sm font-bold">{{ $pt }}</span>
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
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-3">
                <span class="whitespace-nowrap block">Equipment built around <span style="color:#148af4;">resident items,</span></span>
                <span class="whitespace-nowrap block">staff routines and <span style="color:#148af4;">running cost</span></span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                The right equipment plan depends on daily load, resident items, drying pressure, staff handling, available space and the care that keeps the equipment performing over time.
            </p>
        </div>

        <div class="flex flex-col divide-y divide-gray-100">

            <!-- 1. COMMERCIAL WASHERS — text left, image right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="order-2 lg:order-1 lg:pt-10">
                    <h3 class="font-heading font-bold text-navy text-4xl lg:text-5xl mb-3">Commercial Washers</h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Commercial washers support daily wash demand across resident clothing, bedding, towels and mixed loads where capacity, wash quality and garment care matter.
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
                <div class="flex flex-col order-1 lg:order-2">
                    <img src="/images/equipment/commercialwasher.webp"
                         alt="Commercial Washer"
                         class="w-full h-96 object-contain object-left-top">
                </div>
            </div>

            <!-- 2. TUMBLE DRYERS — image left, text right -->
            <div x-data="{ open: false }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal">
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

            <!-- 3. VACUUM IRONING TABLES — text left, image right -->
            <div x-data="{ open: false }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="order-2 lg:order-1 lg:pt-10">
                    <h3 class="font-heading font-bold text-navy text-4xl lg:text-5xl mb-3">Vacuum Ironing Tables</h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Vacuum ironing tables give care facilities a practical <span style="color:#148af4;">finishing option</span> for resident clothing, uniforms and garments that need a neater finish before storage or return to use.
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
                            Go to Products
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Request Assessment
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col order-1 lg:order-2">
                    <img src="/images/CareFacilities/ELS_PH_415x415_FIT2B.jpg"
                         alt="Electrolux Professional FIT2 Vacuum Ironing Table"
                         class="w-full h-96 object-contain object-center">
                    <div class="mt-1 pt-3 w-full">
                        <button @click="open = !open" class="w-full flex items-center justify-start gap-3 text-left group pl-[10px]">
                            <span class="font-heading font-bold text-navy text-lg">FIT2A, FIT2B Features &amp; Options</span>
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
                <div>
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

<!-- DOSING & LAUNDRY CONTROL CAROUSEL -->
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- Section header --}}
        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-2">Dosing &amp; Laundry Control</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-3">
                <span class="whitespace-nowrap block"><span style="color:#148af4;">Cut detergent waste</span> before it becomes</span>
                <span class="whitespace-nowrap block">another running cost</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-2xl">
                <span class="whitespace-nowrap block">Automatic dosing supports care facility laundry rooms by using the right amount of detergent for each cycle. That can reduce waste,</span>
                <span class="whitespace-nowrap block">lower chemical overuse, protect resident clothing, bedding and towels, and support more consistent wash results over time.</span>
            </p>
        </div>

        {{-- Carousel --}}
        @php
        $dosingProducts = [
            [
                'name'    => 'Multisave',
                'label'   => 'Multi-tank dosing with water saving',
                'body'    => 'Multisave combines dosing control with cylinder-to-cylinder water saving across multi-tank machines. It reduces the volume of water and detergent used per cycle without compromising wash quality or hygiene standards.',
                'img'     => '/images/healthcare/MultisaveEQUIP.webp',
            ],
            [
                'name'    => 'DOSAVE',
                'label'   => 'Precise dosing for consistent results',
                'body'    => 'DOSAVE delivers accurate detergent dosing for each wash cycle, reducing chemical overuse and waste. It supports more consistent wash quality while lowering detergent running cost over time.',
                'img'     => '/images/healthcare/DOSAVEEQUIP.webp',
            ],
            [
                'name'    => 'JETSAVE',
                'label'   => 'Jet-based dosing with integrated saving',
                'body'    => 'JETSAVE uses a water jet to mix and deliver detergent precisely into the drum. It is designed to reduce both water and detergent consumption while maintaining consistent wash performance across cycles.',
                'img'     => '/images/healthcare/JetsaveEQUIP.webp',
            ],
            [
                'name'    => 'Efficient Dosing',
                'label'   => 'Integrated dosing through CompassPro',
                'body'    => 'Efficient Dosing integrates directly with CompassPro to ensure the correct amount of detergent is used in every cycle. It removes manual dosing decisions and supports lower chemical costs over time.',
                'img'     => '/images/healthcare/efficientDosing_equip.webp',
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
                            <img src="/images/healthcare/Laundry-Double-Banner-965x965-1.webp"
                                 alt="Electrolux Professional laundry equipment"
                                 class="w-full object-cover object-center" style="height:260px;">
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

@include('components.why-choose-strip', [
    'headingLine1' => '<span style="color:#148af4;">Keep daily laundry moving</span>',
    'headingLine2' => 'with lower upfront cost',
    'body' => 'For care facilities facing replacement pressure, expansion needs or ageing equipment, rental can keep laundry moving without turning every equipment decision into one large upfront purchase.',
    'miniPoints' => ['Lower upfront cost', 'Avoid one large purchase', 'Installed and supported'],
])

@include('components.equipment-categories')

<!-- PROCESS BLOCK -->
<section class="pt-4 lg:pt-6 pb-14 lg:pb-20 bg-white">
    <div class="max-w-screen-xl mx-auto px-6 sm:px-10 lg:px-20">

        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 text-center">Process</p>
        <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-3 text-center">
            Our process keeps the <span style="color:#148af4;">next step clear</span>
        </h2>
        <p class="font-body text-gray-500 text-base mb-12 max-w-xl leading-relaxed text-center mx-auto">
            From the first assessment through to equipment, rental, maintenance and aftercare, each step should make the next decision easier.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-20">

            @foreach([
                ['title' => 'Understand the care facility laundry room', 'text' => 'Review the room layout, staff routine, resident-item flow, utilities, capacity and the day-to-day pressure on the laundry.',  'icon' => 'clipboard'],
                ['title' => 'Match equipment to<br>daily care needs',        'text' => 'Recommend the right washer, dryer, finishing setup, rental route or replacement plan.',               'icon' => 'Ativo%204'],
                ['title' => 'Connect maintenance, rental and aftercare',  'text' => 'Link the equipment already on-site to preventive maintenance, repairs, service history and follow-up care.', 'icon' => 'Ativo%206'],
                ['title' => 'Move to assessment',                         'text' => 'Turn the room, equipment setup and care model into a clear, practical next step you can act on.',                            'icon' => 'Ativo%203'],
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
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $step['text'] }}</p>
            </div>

            @endforeach

        </div>
    </div>
</section>

<!-- 11. Service Contracts, Support & Aftercare Strip -->
@include('components.service-contracts-strip', [
    'eyebrow'      => 'After Installation',
    'headingLine1' => '<span style="color:#011E41;">Protect daily laundry routines</span>',
    'headingLine2' => '<span style="color:#ffffff;">after installation</span>',
    'body'         => 'The right equipment decision should not become harder to manage after installation, rental, repair or replacement. Planned maintenance and aftercare give care facilities a clearer way to reduce surprise repair costs, keep equipment running and spend less time dealing with laundry pressure.',
    'image'        => '/images/healthcare/support-aftercare-hero.png',
    'miniPoints'   => ['Reduce surprise repair costs', 'Keep equipment running', 'Support from people who know the equipment'],
    'cta1Label'    => 'View Preventive Maintenance Contracts',
    'cta1Route'    => 'service-contracts',
    'cta2Label'    => 'Explore Support &amp; Aftercare',
    'cta2Route'    => 'parts-aftercare',
])

<!-- 12. Testimonial / Proof Block -->
@include('components.testimonials', [
    'eyebrow'    => 'Customer Trust',
    'heading'    => 'Trusted by care teams who need <span style="color:#148af4;">laundry to keep moving</span>',
    'subheading' => '',
])

@include('components.proof-bar')

@include('components.faq', [
    'heading' => 'Questions before requesting a <span style="color:#148af4;">care facility laundry assessment</span>',
    'faqs' => [
        ['question' => 'What types of care facilities do you work with?',             'answer' => 'Irish Laundry Systems works with care homes, residential care settings, nursing home environments and related sites where daily laundry demand, resident items, staff routines and equipment continuity matter.'],
        ['question' => 'Can you supply machines suitable for a care home laundry room?', 'answer' => 'Yes. Irish Laundry Systems supplies and supports Electrolux Professional laundry equipment for care facility settings, including washers, dryers, finishing equipment and barrier options where separation is required.'],
        ['question' => 'Can you reduce laundry running costs?',                       'answer' => 'We can assess the room, equipment type, utility pressure, load pattern and maintenance needs. Selected Electrolux Professional technologies can reduce energy, water and detergent use depending on the equipment and site configuration.'],
        ['question' => 'Is rental an option instead of purchasing equipment outright?', 'answer' => 'Yes. Equipment Rental can be discussed where a care facility needs replacement, expansion or continuity without one large upfront purchase.'],
        ['question' => 'What maintenance support is available after installation?',   'answer' => 'Preventive Maintenance Contracts can include scheduled visits, inspection, reporting and practical follow-up. Support & Aftercare connects service history, genuine parts access where applicable and future equipment decisions.'],
        ['question' => 'Can you respond if a machine breaks down?',                   'answer' => 'Yes. Repairs & Call-outs are available for urgent equipment faults. Requests are handled based on urgency, equipment details, site pressure and maintenance history.'],
        ['question' => 'Do care homes need barrier washers?',                         'answer' => 'Not every care facility needs the same setup. Barrier washers are relevant where dirty-side and clean-side handling need controlled separation. Irish Laundry Systems can assess whether this is required for your site.'],
        ['question' => 'Can you review an existing care home laundry room?',          'answer' => 'Yes. We can review current machines, room layout, daily demand, running pressure, maintenance history and whether purchase, rental, repair or replacement is the right next step.'],
    ],
])

<!-- 13. Final CTA / Form -->
@include('components.cta-downtime-form', ['pageSource' => 'care_cta'])

@endsection
