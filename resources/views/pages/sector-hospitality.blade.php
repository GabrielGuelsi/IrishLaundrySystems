@extends('layouts.app')

@section('meta')
<meta name="description" content="Hospitality laundry support for hotels and hospitality sites — equipment selection, installation, service contracts, repairs, parts and aftercare across Ireland.">
@endsection

@section('content')

<!-- 1. HERO -->
<section class="relative overflow-hidden flex flex-col h-auto min-h-[480px] lg:h-[720px]" style="min-height:480px;">
    <img src="/images/pages/sectors/hospitallityhero.png" alt="Hospitality laundry installation"
         class="absolute inset-0 w-full h-full object-cover" style="object-position: 50% 20%;">
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16 py-16 lg:py-32">
            <div class="max-w-6xl reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Hospitality Laundry</p>
                <h1 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-4">
                    <span class="sm:block">Commercial laundry equipment for hospitality</span>
                    <span class="sm:block" style="color:#148af4;">built around daily service demands</span>
                </h1>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8 max-w-4xl">
                    <span class="lg:block">Irish Laundry Systems supplies, installs and supports Electrolux Professional equipment</span>
                    <span class="lg:block">for hotels, guesthouses, restaurants, spas and leisure facilities across Ireland.</span>
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#hospitality-assessment"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Hospitality Assessment
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('components.partner-strip')

<!-- INTRO COMMERCIAL BLOCK -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Hospitality Planning</p>
        <div class="grid grid-cols-1 lg:grid-cols-[6fr_5fr] gap-8 lg:gap-8 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-[2rem] 2xl:text-[2.4rem] leading-tight">
                    <span class="sm:block min-[1360px]:whitespace-nowrap">Plan capacity around</span>
                    <span class="sm:block min-[1360px]:whitespace-nowrap">peak demand, available space</span>
                    <span class="sm:block min-[1360px]:whitespace-nowrap" style="color:#148af4;">and the turnaround required</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed">
                    <span class="lg:block">What you process, available utilities and site access</span>
                    <span class="lg:block">help define the right capacity and room layout.</span>
                    <span class="lg:block">Staff handling and installation requirements then help</span>
                    <span class="lg:block">determine which equipment categories fit the operation.</span>
                </p>
            </div>

        </div>
    </div>
</section>

{{-- Financial Performance Bento: metric cards --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Financial Performance</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Control laundry costs and <span style="color:#148af4;">protect guest standards</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Energy use, detergent control, textile care and equipment planning all affect the cost of keeping rooms and service areas supplied during busy periods.
            </p>
        </div>

        @include('components.financial-metrics', ['tightLeft' => true, 'items' => [
            ['icon'=>'202', 'prefix'=>'', 'stat'=>'Faster<br>turnaround', 'size'=>'text-2xl', 'label'=>'room readiness', 'labelClass'=>'translate-y-2', 'iconClass'=>'scale-[1.23] translate-y-[2.5%]',       'body'=>'On-site laundry can return bed linen, towels and robes to service sooner during peak demand.'],
            ['icon'=>'pmc-gain-86', 'prefix'=>'', 'stat'=>'Higher<br>quality control',    'size'=>'text-2xl', 'label'=>'guest standards', 'labelClass'=>'translate-y-2', 'iconClass'=>'scale-[0.953] translate-y-[0.1%]', 'body'=>'Managing laundry in-house gives teams greater control over washing, handling and return-to-service timing.'],
            ['icon'=>'6',  'prefix'=>'Up to', 'stat'=>'65%',              'size'=>'text-4xl', 'label'=>'dryer energy use', 'labelClass'=>'translate-y-2', 'iconClass'=>'scale-[1.181] -translate-y-[13.2%]',              'body'=>'Line 6000 Heat Pump Dryers can use up to 65% less energy than vented dryers.'],
            ['icon'=>'dosing-control', 'prefix'=>'', 'stat'=>'Less<br>waste',        'size'=>'text-2xl', 'label'=>'detergent and textile care', 'labelClass'=>'translate-x-[3.25rem] translate-y-2', 'iconClass'=>'scale-[1.051] -translate-y-[7.5%]',       'body'=>'Efficient dosing and the right wash setup can reduce detergent overuse and protect textile quality.'],
            ['icon'=>'88', 'prefix'=>'', 'stat'=>'Service<br>planning',    'size'=>'text-2xl', 'label'=>'equipment care', 'labelClass'=>'translate-y-2', 'iconClass'=>'translate-y-[0.9%]', 'body'=>'Preventive maintenance, repairs and aftercare make essential laundry equipment easier to manage.'],
        ]])
    </div>
</section>

<!-- HOSPITALITY LAUNDRY PRIORITIES BENTO -->
<section class="py-16 lg:py-24 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Hospitality Priorities</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Plan laundry around <span style="color:#148af4;">room standards and service needs</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Housekeeping schedules, food service, spa use, staff uniforms and busy periods all influence the capacity and equipment the operation needs.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-3">

            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/162.png" alt="" class="w-24 h-24 object-contain" style="transform:scale(1.216);">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Room standards</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Bed linen, towels, robes and guest items need reliable washing, drying and finishing.</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/163.png" alt="" class="w-24 h-24 object-contain" style="transform:scale(1.18);">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Housekeeping routines</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Laundry capacity affects room preparation, staff timing and the pace of daily service.</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/164.png" alt="" class="w-24 h-24 object-contain" style="transform:scale(1.097);">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Finishing quality</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Ironing and flatwork quality protect the presentation guests notice in rooms, restaurants and service areas.</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/165.png" alt="" class="w-24 h-24 object-contain" style="transform:scale(1.25);">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Peak demand</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Equipment planning should reflect busy periods, not only average daily use.</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-2 lg:col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/166.png" alt="" class="w-24 h-24 object-contain" style="transform:translateY(-5.1%) scale(1.02);">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Cost and quality control</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">On-premises laundry gives the property greater control over washing, handling and service timing.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SUPPORT OPTIONS -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Services</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Keep hospitality laundry running with <span style="color:#148af4;">the right support</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Choose the service that fits your operation, from repairs and maintenance to rental and aftercare.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                [
                    'title'  => 'Repairs &amp; Call-Outs',
                    'text'   => 'For equipment faults that can delay washing, drying, finishing or room preparation.',
                    'cta'    => 'Request Call-Out',
                    'route'  => route('repairs'),
                    'img'    => '/images/shared/repairs-callouts.jpg',
                    'pos'    => '50% 35%',
                ],
                [
                    'title'  => 'Preventive Maintenance',
                    'text'   => 'For planned visits, service records and better care for laundry equipment used every day.',
                    'cta'    => 'View Preventive Maintenance',
                    'route'  => route('service-contracts'),
                    'img'    => '/images/shared/service-contracts-hero.png',
                    'pos'    => '90% 35%',
                ],
                [
                    'title'  => 'Equipment Rental',
                    'text'   => 'For selected replacement or capacity needs where the available rental range fits the property size and laundry demand.',
                    'cta'    => 'See Rental Options',
                    'route'  => route('rental'),
                    'img'    => '/images/shared/td6-11-multihousing-room-front.jpg',
                    'pos'    => '66% center',
                ],
                [
                    'title'  => 'Support &amp; Aftercare',
                    'text'   => 'For service history, parts access where needed and clearer repair, rental or replacement guidance after installation.',
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
                    <div class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-40 group-hover:opacity-100 transition-all duration-500 mb-4">
                        <p class="font-body text-white/80 text-sm leading-relaxed">{!! $card['text'] !!}</p>
                    </div>
                    <h3 class="font-heading font-bold text-white text-xl leading-tight mb-4">{!! $card['title'] !!}</h3>
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

<!-- PLANNING STRIP -->
@include('components.cta-combined-banner', [
    'eyebrow'    => 'Site Planning',
    'heading'    => 'Plan the laundry room around <span style="color:#011E41;">space, utilities and peak demand</span>',
    'body'       => 'A room review can check property demand, available space, utilities and<br class="hidden lg:block"> equipment needs before purchase, rental or replacement.',
    'miniPoints' => [
        ['icon' => 'home-planning-fit', 'iconClass' => 'scale-[1.06]',    'label' => 'Room<br>fit'],
        ['icon' => 'home-planning-spend',  'label' => 'Cost<br>control'],
        ['icon' => 'home-planning-rework', 'iconClass' => 'scale-[0.95]', 'label' => 'Peak<br>demand'],
    ],
    'ctaText'    => 'Talk to Our Team',
])

<!-- DETAILED EQUIPMENT SECTION -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-16 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Equipment</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
                Choose the <span style="color:#148af4;">right equipment mix</span> for hospitality
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                Washers, dryers and finishing equipment should match your loads and turnaround needs.
            </p>
        </div>

        <div class="flex flex-col divide-y divide-gray-100">

            <!-- 1. COMMERCIAL WASHERS — text left, image right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="order-2 lg:order-1 lg:pt-10">
                    <h3 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">Commercial <strong>Washers</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Commercial washers support bed linen, towels, robes, uniforms, guest items and food and beverage textiles where wash quality, capacity and repeatable results matter.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Automatic Savings',
                            'Integrated Savings',
                            'Efficient Dosing',
                            'Power Balance',
                            'Reduced water, energy and detergent waste',
                        ] as $point)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="font-body text-gray-500 text-sm leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-col sm:flex-row sm:items-center gap-3">
                        <a href="{{ route('equipment') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-6 py-4 rounded-lg text-sm transition-colors duration-200 whitespace-nowrap w-fit">
                            View Washing Machine Options
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-6 py-4 rounded-lg text-sm transition-colors duration-200 whitespace-nowrap w-fit">
                            Request Hospitality Equipment Advice
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
                    <img src="/images/pages/dryers/Tumble-dryers_Heat-Pump_1-1.webp"
                         alt="Line 6000 Tumble Dryer"
                         class="w-full h-96 object-contain object-left-top">
                    <div class="mt-1 pt-3">
                        <button @click="open = !open"
                                class="w-full flex items-center justify-start gap-3 text-left group pl-[20px]">
                            <span class="font-heading font-bold text-navy text-sm">System Features and Moisture Control</span>
                            <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </button>
                    </div>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">Tumble <strong>Dryers</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                        Tumble dryers support fast, controlled drying where residual moisture, energy use and room layout affect daily service.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Up to 65% energy saving with Heat Pump technology',
                            '35-minute Heat Pump drying cycle in suitable applications',
                            'Moisture Balance to avoid overdrying',
                            'Smart Energy Management',
                            'Adaptive Fan for energy and drying control',
                            'Certified ergonomic design',
                        ] as $point)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="font-body text-gray-500 text-sm leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-row flex-wrap items-center gap-4 mb-6">
                        <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            View Dryer Options
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Request Hospitality Equipment Advice
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div x-show="open" x-collapse class="py-6 border-t border-gray-100">
                <p class="font-body text-gray-500 text-sm leading-relaxed max-w-2xl">
                    Moisture control can support residual moisture management through the drying process, fabric care and reduced overdrying where the selected dryer configuration includes that capability.
                </p>
            </div>
            </div>

            <!-- 3. IRONERS & FINISHING — text left, image right -->
            <div x-data="{ open: false, tab: 'diamms' }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="order-2 lg:order-1 lg:pt-10">
                    <h3 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">Ironers &amp; <strong>Finishing</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Ironers and finishing equipment support flatwork presentation, table linen, bed linen standards and storage-ready results for hospitality environments.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Flatwork finishing',
                            'Linen presentation',
                            'Drying consistency',
                            'DIAMMS',
                            'Hygiene Guard',
                            'Finishing quality before storage or return to use',
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
                            Request Hospitality Equipment Advice
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col order-1 lg:order-2">
                    <img src="/images/shared/line6000-ironer.webp"
                         alt="Line 6000 Ironer"
                         class="w-full h-80 object-contain object-left-top">
                    <div class="mt-1 pt-3 w-full">
                        <button @click="open = !open" class="w-full flex items-center justify-start gap-3 text-left group pl-[10px]">
                            <span class="font-heading font-bold text-navy text-sm">System Features, DIAMMS and Hygiene Guard</span>
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
                            class="font-heading text-sm pb-3 transition-colors">DIAMMS</button>
                    <button @click="tab = 'hygiene'"
                            :class="tab === 'hygiene' ? 'border-b-2 border-navy text-navy font-bold' : 'text-gray-400 hover:text-navy'"
                            class="font-heading text-sm pb-3 transition-colors">Hygiene Guard</button>
                </div>
                <div x-show="tab === 'diamms'">
                    <h4 class="font-heading font-bold text-navy text-xl mb-4">Maximum hygiene and performance</h4>
                    <div class="flex flex-col sm:flex-row items-start gap-6 mb-8">
                        <div class="w-32 h-32 flex-shrink-0">
                            <img src="/images/shared/Diamms.png" alt="DIAMMS" class="w-full h-full object-contain">
                        </div>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">
                            Electrolux Professional finishing features such as DIAMMS and Hygiene Guard are designed to support moisture-aware finishing and linen handling where the selected ironer configuration includes those capabilities.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                        <div class="relative w-full rounded-2xl overflow-hidden shadow-lg" style="padding-bottom: 56.25%;">
                            <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/KER1S0tcqeE" title="Ironers DIAMMS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div>
                            <h5 class="font-heading font-bold text-navy text-xl mb-3">Extreme customization of the ironing and folding programs</h5>
                            <p class="font-body text-gray-500 text-sm leading-relaxed">FoldFlex ensures the highest quality at the end of the finishing process so that linen can be safely and securely stored, ready for the next use.</p>
                        </div>
                    </div>
                </div>
                <div x-show="tab === 'hygiene'">
                    <h4 class="font-heading font-bold text-navy text-xl mb-4">Pure Hygiene: Flawless Dry Linen Delivery</h4>
                    <div class="flex flex-col sm:flex-row items-start gap-6 mb-8">
                        <div class="w-32 h-32 flex-shrink-0">
                            <img src="/images/shared/HygieneGuard.png" alt="Hygiene Guard" class="w-full h-full object-contain">
                        </div>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">
                            Hygiene Guard, in conjunction with DIAMMS, will automatically reject any linen if it does not comply with the prescribed humidity parameters set by the RABC standards.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                        <div class="relative w-full rounded-2xl overflow-hidden shadow-lg" style="padding-bottom: 56.25%;">
                            <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/KER1S0tcqeE" title="Ironers Hygiene Guard" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div>
                            <h5 class="font-heading font-bold text-navy text-xl mb-3">Extreme customization of the ironing and folding programs</h5>
                            <p class="font-body text-gray-500 text-sm leading-relaxed">FoldFlex ensures the highest quality at the end of the finishing process so that linen can be safely and securely stored, ready for the next use.</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <!-- 4. BARRIER WASHERS — image left, text right -->
            <div x-data="{ open: false }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal">
                <div class="flex flex-col">
                    <img src="/images/pages/barrier-washers/line6000-barrier-washer.webp"
                         alt="Line 6000 Barrier Washer"
                         class="w-full h-96 object-contain object-left-top">
                    <div class="mt-1 pt-3">
                        <button @click="open = !open"
                                class="w-full flex items-center justify-start gap-3 text-left group pl-[20px]">
                            <span class="font-heading font-bold text-navy text-sm">System Features, AIDO and Hygiene Watchdog</span>
                            <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </button>
                    </div>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">Barrier <strong>Washers</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Barrier washers are a specialist option for hospitality sites that need controlled dirty-side loading and clean-side unloading.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Dirty-side and clean-side separation',
                            'AIDO controlled loading and unloading',
                            'Hygiene Watchdog full-cycle completion',
                            'Suitable where controlled handling is required',
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
                            Request Hospitality Equipment Advice
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div x-show="open" x-collapse class="py-6 border-t border-gray-100">
                <p class="font-body text-gray-500 text-sm leading-relaxed max-w-2xl">
                    Electrolux Professional barrier washer features such as Automatic Inner Door Opening (AIDO) and Hygiene Watchdog are designed to support controlled handling, cycle completion and operator access in barrier laundry environments.
                </p>
            </div>
            </div>

        </div>
    </div>
</section>

<!-- DOSING & LAUNDRY CONTROL CAROUSEL -->
<section class="py-16 lg:py-24 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- Section header --}}
        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-2">Dosing &amp; Laundry Control</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Protect <span style="color:#148af4;">textile quality</span> while reducing detergent waste
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                Automatic dosing controls detergent use while protecting hospitality textiles.
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

                        {{-- Left: context photo — one at a time, alternates per slide (detergentdoser first) --}}
                        <div class="lg:col-span-3 overflow-hidden pt-8 lg:pt-10" style="align-self:start;">
                            <img src="{{ $p['scene'] ?? ($i % 2 === 0 ? '/images/pages/sectors/detergentdoser.png' : '/images/shared/Laundry-Double-Banner-965x965-1.webp') }}"
                                 alt="Electrolux Professional laundry equipment"
                                 class="w-full object-cover object-center" style="height:260px;">
                        </div>

                        {{-- Right: product name + tabs indicator + description + unit image --}}
                        <div class="lg:col-span-9 flex flex-col justify-between p-8 lg:p-10">

                            {{-- Tab indicators (product selector) --}}
                            <div class="flex flex-wrap lg:flex-nowrap gap-1 border-b border-gray-100 mb-6">
                                @foreach($dosingProducts as $j => $tab)
                                <button @click="go({{ $j }})"
                                        :class="active === {{ $j }} ? 'border-b-2 border-navy text-navy font-bold' : 'text-gray-400 hover:text-navy'"
                                        class="font-heading text-sm pb-3 pr-6 transition-colors whitespace-nowrap">
                                    {{ $tab['name'] }}
                                </button>
                                @endforeach
                            </div>

                            {{-- Content + unit image side by side --}}
                            <div class="flex flex-col lg:flex-row gap-6 items-start flex-1">

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

<!-- EQUIPMENT RENTAL STRIP -->
@include('components.why-choose-strip', [
    'eyebrow'      => 'Equipment Rental',
    'headingLine1' => 'Equipment rental with',
    'headingLine2' => '<span style="color:#148af4;">lower upfront cost</span>',
    'body'         => 'Rental can suit selected hospitality sites where the available Electrolux Professional range fits the laundry room size, capacity need and operating profile.',
    'miniPoints'   => [
        ['icon' => 'healthcarerentalstrip1', 'iconStyle' => 'filter:brightness(0) invert(1);', 'label' => 'Lower<br>upfront cost', 'class' => 'lg:mr-6'],
        ['icon' => '125', 'iconClass' => 'scale-[1.32]', 'iconStyle' => 'filter:brightness(0) invert(1);', 'label' => 'Range<br>fit'],
        ['icon' => 'repairs-maintenance-review', 'iconStyle' => 'filter:brightness(0) invert(1);', 'label' => 'Included<br>support'],
    ],
    'miniNowrap'   => true,
])

@include('components.equipment-categories', [
    'eyebrow' => 'Equipment Categories',
    'textMinH' => '176px',
    'heading' => '<span class="lg:text-4xl lg:whitespace-nowrap">Explore equipment for <span style="color:#148af4;">washing, drying and finishing</span></span>',
    'subheading' => 'Select a category to see the equipment available for different hospitality laundry requirements.',
    'subheadingClass' => 'lg:whitespace-nowrap',
    'equipment' => [
        ['img'=>'FIT1', 'src' => '/images/pages/finishing-equipment/FIT1.jpg','ext'=>'jpg','name'=>'Vacuum Ironing Tables','desc'=>'For pressing garments, linens and delicate items to presentation standard.'],
        ['img'=>'commercialwasher', 'src' => '/images/pages/commercial-washers/commercialwasher.webp','name'=>'Washing Machines','desc'=>'For bed linen, towels, robes, uniforms, guest items and food and beverage textiles.','box'=>270,'mb'=>-35],
        ['img'=>'TD6-14', 'src' => '/images/pages/dryers/TD6-14.jpg','name'=>'Dryers','desc'=>'For controlled drying, fabric care and daily room preparation.','box'=>245],
        ['img'=>'drying-cabinet','src'=>'/images/pages/drying-cabinets/workwear-dc6-15ww.jpg','name'=>'Drying Cabinets','desc'=>'For gentle drying of garments, bulky items and specialist textiles.','box'=>260,'mb'=>-11],
        ['img'=>'IB623_FRONT_NEW', 'src' => '/images/pages/ironers/IB623_FRONT_NEW.jpg','ext'=>'jpg','name'=>'Ironers & Flatwork','desc'=>'For flatwork finishing, presentation standards and storage-ready results.'],
    ],
])

<!-- PROCESS BLOCK -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 text-center">Installation &amp; Handover</p>
        <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3 text-center">
            Prepare hospitality laundry equipment for <span style="color:#148af4;">daily use</span>
        </h2>
        <p class="font-body text-gray-500 text-base mb-12 max-w-2xl leading-relaxed text-center mx-auto">
            Site checks, installation and commissioning are coordinated before handover.
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-12 lg:gap-20">

            @foreach([
                ['title' => 'Prepare the Site',      'text' => 'Confirm access, utilities and positioning before delivery.'],
                ['title' => 'Install and Commission', 'text' => 'Deliver, position, install and test the selected equipment.'],
                ['title' => 'Handover',               'text' => 'Provide operating guidance and explain available aftercare.'],
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
                <h3 class="font-heading font-bold text-navy text-sm lg:text-base mb-1">{{ $step['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $step['text'] }}</p>
            </div>

            @endforeach

        </div>
    </div>
</section>

<!-- SERVICE CONTRACTS + SUPPORT & AFTERCARE STRIP -->
@include('components.service-contracts-strip', [
    'eyebrow'      => 'After Installation',
    'textMaxW'     => 'lg:max-w-[60%]',
    'headingLine1' => 'Protect <span style="color:#011E41;">equipment performance</span>',
    'headingLine2' => '<span style="color:#ffffff;">after installation</span>',
    'body'         => 'Planned maintenance and aftercare keep equipment easier to manage after<br class="hidden lg:block"> installation, rental, repair or replacement.',
    'image'        => '/images/shared/repairs-callouts.jpg',
    'miniPoints'   => [
        ['icon' => '61', 'iconClass' => 'scale-[0.94]', 'label' => 'Service<br>planning'],
        ['icon' => '64', 'iconClass' => 'scale-[1.06]', 'label' => 'Equipment<br>care'],
        ['icon' => '168', 'iconClass' => 'scale-[0.91]', 'label' => 'Peace of<br>mind'],
    ],
    'cta1Label'    => 'View Preventive Maintenance Contracts',
    'cta1Route'    => 'service-contracts',
])

<!-- TESTIMONIAL / PROOF BLOCK -->
@include('components.testimonials', [
    'eyebrow'    => 'Client Feedback',
    'heading'    => 'What clients say about <span style="color:#148af4;">Irish Laundry Systems</span>',
    'subheading' => 'Feedback from clients on service, technical knowledge and long-term support',
    'subheadingClass' => 'max-w-5xl mx-auto',
])

@include('components.proof-bar')

@include('components.faq', [
    'eyebrow' => 'Hospitality Laundry FAQs',
    'heading' => 'Questions hospitality teams ask<br class="hidden lg:block"> before <span style="color:#148af4;">planning a laundry setup</span>',
    'footerNote' => 'Have a different question? Talk to our team.',
    'faqs' => [
        ['question' => 'What types of hospitality sites do you work with?',            'answer' => 'Irish Laundry Systems works with hotels, guesthouses, serviced apartments, hostels and hospitality sites that need reliable laundry equipment for bed linen, towels, robes, uniforms, table linen and guest items.'],
        ['question' => 'Can you help us decide whether in-house laundry makes sense?', 'answer' => 'Yes. The right on-premises setup can keep more washing, drying and finishing control inside the property, supporting room preparation during busy periods.'],
        ['question' => 'Can professional laundry equipment reduce operating costs?',   'answer' => 'Selected Electrolux Professional technologies can lower energy, water and detergent use, depending on the equipment and site configuration.'],
        ['question' => 'Can you support busy hotels during peak periods?',             'answer' => 'Yes. Irish Laundry Systems can review property demand, drying speed, finishing needs and service support for busy periods.'],
        ['question' => 'Is rental an option instead of purchasing equipment outright?', 'answer' => 'Yes. Rental can be reviewed where the available equipment range fits the property size, laundry volume and equipment need.'],
        ['question' => 'Can you support guest laundry or self-service laundry areas?', 'answer' => 'Yes. Irish Laundry Systems can recommend suitable equipment for guest laundry areas, including space planning and support needs.'],
        ['question' => 'Do you support premium garment care or valet laundry?',        'answer' => 'Yes. Selected Electrolux Professional equipment can support delicate garments, guest items, uniforms and specialist textile-care needs where the property requires it.'],
        ['question' => 'What happens after installation?',                             'answer' => 'Support can continue through Preventive Maintenance, Repairs & Call-Outs, rental support and Support & Aftercare, including service history, follow-up and parts access where applicable.'],
    ],
])

@include('components.cta-downtime-form', [
    'pageSource'  => 'hospitality_cta',
    'heading'     => 'Plan the next step for your<br class="hidden sm:block"> <span style="color:#148af4;">hospitality laundry</span>',
    'body'        => 'Tell us about the property, current equipment and priorities. Get clear advice on equipment, Equipment Rental, maintenance, repairs or aftercare.',
    'formTitle'   => 'Request a Hospitality Laundry Assessment',
    'buttonText'  => 'Request Hospitality Assessment',
])

@endsection
