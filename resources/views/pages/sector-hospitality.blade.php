@extends('layouts.app')

@section('meta')
<meta name="description" content="Hospitality laundry support for hotels and hospitality sites — equipment selection, installation, service contracts, repairs, parts and aftercare across Ireland.">
@endsection

@section('content')

<!-- 1. HERO -->
<section class="relative overflow-hidden flex flex-col h-auto min-h-[480px] lg:h-[720px]" style="min-height:480px;">
    <img src="/images/Hospitallity/hospitallityhero.jpeg" alt="Hospitality laundry installation"
         class="absolute inset-0 w-full h-full object-cover" style="object-position: 50% 20%;">
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16 py-16 lg:py-32">
            <div class="max-w-5xl reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Hospitality Laundry Support</p>
                <h1 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight mb-4">
                    <span class="block">Hospitality laundry support</span>
                    <span class="block">for <span style="color:#148af4;">linen flow</span>, <span style="color:#148af4;">guest standards</span></span>
                    <span class="block">and peak-period pressure</span>
                </h1>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8 max-w-2xl">
                    Irish Laundry Systems supports hotels, guesthouses and hospitality sites with Electrolux Professional equipment selection, supply, installation, rental options, planned maintenance, repairs and aftercare for laundry rooms that affect room readiness, housekeeping pressure and day-to-day service.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#hospitality-assessment"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Hospitality Assessment
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white hover:border-white/70 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        Talk to Our Team
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
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Built for Hospitality</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    Laundry support built around <span style="color:#148af4;">guest standards</span> and <span style="color:#148af4;">room readiness</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    Hospitality laundry affects more than the laundry room. Bedding, towels, robes, table linen, uniforms and guest items all influence room readiness, housekeeping routines and the standard guests notice.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Irish Laundry Systems brings equipment selection, supply, installation, planned maintenance, call-outs, rental options and aftercare together around the way the property runs, so teams can keep linen moving with better cost control and more peace of mind.
                </p>
                <a href="{{ route('equipment') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    View Hospitality Equipment Options
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- HOSPITALITY LAUNDRY PRIORITIES BENTO -->
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Hospitality Priorities</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Protect <span style="color:#148af4;">guest experience</span> while <span style="color:#148af4;">keeping linen moving</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                The right laundry setup supports linen availability, housekeeping pressure, peak demand periods, finishing standards and the support needed to keep service moving.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-3">

            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/23.png" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Linen turnaround</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Bedding, towels, robes and flatwork need to move back into use quickly during busy periods.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/24.png" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Housekeeping pressure</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Laundry affects room readiness, team workload and the rhythm of daily hotel service.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/25.png" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Finishing and presentation</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Ironing and flatwork quality support the visual standard guests notice in rooms, restaurants and service areas.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/26.png" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Peak occupancy planning</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">The laundry room should be planned around peak demand periods, not only average daily use.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-2 lg:col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/6.png" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Cost and quality control</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">An on-premises laundry room can support faster turnaround times, higher quality control standards and better control over what is washed, how and when.</p>
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
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                <span><span style="color:#148af4;">Control hospitality laundry costs</span> while</span>
                <span><span style="color:#148af4;">protecting guest standards</span></span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Hospitality laundry cost can build through energy use, detergent waste, linen replacement pressure, housekeeping delays, outsourced laundry reliance, reactive call-outs and equipment decisions made too late. The right setup should support fresh linen, faster turnaround times, efficient daily operation and better cost control.
            </p>
        </div>

        @include('components.financial-metrics', ['items' => [
            ['icon'=>'31', 'prefix'=>'', 'stat'=>'Faster<br>turnaround', 'size'=>'text-2xl', 'label'=>'linen and room readiness',       'body'=>'Keeping more laundry control on-site can support faster linen return, room readiness and a smoother response to peak-period demand.'],
            ['icon'=>'24', 'prefix'=>'', 'stat'=>'Higher<br>quality',    'size'=>'text-2xl', 'label'=>'fresh linen and guest standards', 'body'=>'An on-premises laundry room gives the property more control over what is washed, how it is handled and when it returns to service.'],
            ['icon'=>'6',  'prefix'=>'', 'stat'=>'-65%',              'size'=>'text-4xl', 'label'=>'dryer energy use',                'body'=>'Electrolux Professional Heat Pump dryer technology can reduce energy consumption by up to 65% in suitable applications.'],
            ['icon'=>'10', 'prefix'=>'', 'stat'=>'Less<br>waste',        'size'=>'text-2xl', 'label'=>'detergent and linen care',        'body'=>'Efficient dosing and the right wash setup can reduce detergent waste, protect linen quality and support more consistent wash results.'],
            ['icon'=>'11', 'prefix'=>'', 'stat'=>'Fewer<br>surprise',    'size'=>'text-2xl', 'label'=>'servicing and breakdown support', 'body'=>'Irish Laundry Systems brings equipment planning, planned maintenance, repairs, rental options and aftercare together, so hospitality laundry decisions are not only made after something fails.'],
        ]])
    </div>
</section>

<!-- SUPPORT ROUTES -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Support Options</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Support that <span style="color:#148af4;">keeps hospitality laundry moving</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Hotels and hospitality sites often need equipment, maintenance, breakdown support and aftercare to work together around linen turnaround, guest standards and peak demand.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                [
                    'title'  => 'Repairs &amp; Call-outs',
                    'text'   => 'Engineering support when faults or breakdowns put laundry output, linen availability or room readiness under pressure.',
                    'cta'    => 'Request Call-Out',
                    'route'  => route('repairs'),
                    'img'    => '/images/healthcare/repairs-callouts.jpg',
                    'pos'    => '50% 35%',
                ],
                [
                    'title'  => 'Preventive Maintenance',
                    'text'   => 'Planned maintenance for sites that need better control over recurring issues, servicing needs and busy-period risk.',
                    'cta'    => 'View Preventive Maintenance Contracts',
                    'route'  => route('service-contracts'),
                    'img'    => '/images/healthcare/service-contracts-hero.png',
                    'pos'    => '90% 35%',
                ],
                [
                    'title'  => 'Equipment Rental',
                    'text'   => 'For selected hospitality laundry needs, replacement pressure or capacity gaps where the available rental range fits the property&rsquo;s operation.',
                    'cta'    => 'See Rental Options',
                    'route'  => route('rental'),
                    'img'    => '/images/healthcare/commercial-industrial.jpg',
                    'pos'    => 'center center',
                ],
                [
                    'title'  => 'Support &amp; Aftercare',
                    'text'   => 'Follow-up care, service history, genuine parts support where needed and clearer maintenance, repair, rental or replacement decisions after installation or inspection.',
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
                    <div class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-40 group-hover:opacity-100 transition-all duration-500 mb-4">
                        <p class="font-body text-white/80 text-sm leading-relaxed">{!! $card['text'] !!}</p>
                    </div>
                    <h3 class="font-heading font-bold text-white text-xl leading-tight mb-4 lg:whitespace-nowrap">{!! $card['title'] !!}</h3>
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

<!-- PLANNING STRIP -->
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.82) 8%, rgba(20,138,244,0.45) 28%, rgba(20,138,244,0.18) 48%, transparent 65%);"></div>
    </div>
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-12 lg:py-24 w-full max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Site Planning</p>
        <h2 class="font-heading font-bold text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
            <span class="text-white text-3xl sm:text-4xl lg:text-5xl">Plan the <span style="color:#011E41;">property laundry room</span></span>
            <span class="text-white text-3xl sm:text-4xl lg:text-5xl">around linen demand, space and <span style="color:#011E41;">peak periods</span></span>
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6">
            Before equipment becomes a daily service issue, the room, linen demand, space, staffing, utility pressure and peak demand periods should be understood together. Irish Laundry Systems plans hospitality laundry around the way the property operates.
        </p>
        <div class="flex items-center flex-wrap gap-x-5 gap-y-2 mb-7">
            <span class="font-body text-white text-sm font-bold">Avoid wasted spend</span>
            <span class="text-white/40">|</span>
            <span class="font-body text-white text-sm font-bold">Right-fit laundry room</span>
            <span class="text-white/40">|</span>
            <span class="font-body text-white text-sm font-bold">Reduce costly rework</span>
        </div>
        <a href="{{ route('contact') }}"
           class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
            Talk to Our Team
        </a>
    </div>
</section>

<!-- DETAILED EQUIPMENT SECTION -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-16 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Electrolux Professional Equipment</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
                Equipment for <span style="color:#148af4;">hospitality laundry</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                The right equipment plan depends on linen volume, turnaround pressure, finishing standards, available space,
                guest-facing requirements and the care needed to keep equipment performing.
            </p>
        </div>

        <div class="flex flex-col divide-y divide-gray-100">

            <!-- 1. COMMERCIAL WASHERS — text left, image right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="order-2 lg:order-1 lg:pt-10">
                    <h3 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">Commercial <strong>Washers</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Commercial washers support bedding, towels, robes, uniforms, guest items and food and beverage linen where wash quality, capacity and repeatable results matter.
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
                    <div class="flex flex-row flex-wrap items-center gap-4">
                        <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            View Washing Machine Options
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Request Hospitality Equipment Advice
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
                            <span class="font-heading font-bold text-navy text-lg">System Features and Moisture Control</span>
                            <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </button>
                    </div>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">Tumble <strong>Dryers</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                        Tumble dryers support linen turnaround where <span style="color:#148af4;">drying time</span>, residual moisture, energy use and room layout can affect the pace of the day.
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
                    <h3 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">Ironers &amp; <strong>Finishing</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Ironers and finishing equipment support <span style="color:#148af4;">flatwork presentation</span>, linen consistency, table linen, bedding standards and storage readiness for hospitality environments.
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
                    <img src="/images/equipment/line6000-ironer.webp"
                         alt="Line 6000 Ironer"
                         class="w-full h-80 object-contain object-left-top">
                    <div class="mt-1 pt-3 w-full">
                        <button @click="open = !open" class="w-full flex items-center justify-start gap-3 text-left group pl-[10px]">
                            <span class="font-heading font-bold text-navy text-lg">System Features, DIAMMS and Hygiene Guard</span>
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
                            <img src="/images/healthcare/Diamms.png" alt="DIAMMS" class="w-full h-full object-contain">
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
                            <img src="/images/healthcare/HygieneGuard.png" alt="Hygiene Guard" class="w-full h-full object-contain">
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
                    <img src="/images/equipment/line6000-barrier-washer.webp"
                         alt="Line 6000 Barrier Washer"
                         class="w-full h-96 object-contain object-left-top">
                    <div class="mt-1 pt-3">
                        <button @click="open = !open"
                                class="w-full flex items-center justify-start gap-3 text-left group pl-[20px]">
                            <span class="font-heading font-bold text-navy text-lg">System Features, AIDO and Hygiene Watchdog</span>
                            <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </button>
                    </div>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">Barrier <strong>Washers</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Barrier washers support hospitality sites where <span style="color:#148af4;">controlled dirty-side loading and clean-side unloading</span> are required for specific handling or separation needs.
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
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- Section header --}}
        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-2">Dosing &amp; Laundry Control</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                <span style="color:#148af4;">Protect linen quality</span> while <span style="color:#148af4;">cutting detergent waste</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-5xl">
                Automatic dosing supports hospitality laundry rooms by using the right amount of detergent for each cycle. That can reduce chemical overuse, protect towels, robes, bedding and table linen, lower maintenance pressure and support more consistent wash results over time.
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
                                        <img src="/images/healthcare/clarusvibeicon.webp" alt="ClarusVibe" class="h-12 w-auto object-contain opacity-80">
                                        <img src="/images/healthcare/Compass-Pro_1-300x88.webp" alt="CompassPro" class="h-12 w-auto object-contain opacity-80">
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
    'headingLine1' => '<span style="color:#148af4;">Keep laundry moving</span>',
    'headingLine2' => 'where rental is the right fit',
    'body'         => 'For hospitality sites facing replacement pressure, capacity gaps or seasonal demand, rental may be a good fit where the available Electrolux Professional equipment range matches the property’s operation.',
    'miniPoints'   => ['Lower upfront cost where suitable', 'Capacity support where available', 'Installed and supported'],
    'miniNowrap'   => true,
])

@include('components.equipment-categories', [
    'heading' => 'Equipment categories for hospitality laundry rooms',
])

<!-- PROCESS BLOCK -->
<section class="py-14 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 text-center">How We Work</p>
        <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3 text-center">
            Clear advice before the next <span style="color:#148af4;">equipment or service decision</span>
        </h2>
        <p class="font-body text-gray-500 text-base mb-12 max-w-xl leading-relaxed text-center mx-auto">
            A clear four-step path from property review to the next useful recommendation.
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-20">

            @foreach([
                ['title' => 'Assess the room',                       'text' => 'Review linen demand, peak periods, housekeeping pressure and available space.',                                  'icon' => 'clipboard'],
                ['title' => 'Match the equipment',                   'text' => 'Recommend the right washing, drying, finishing, rental option or guest-laundry setup.',                       'icon' => 'Ativo%204'],
                ['title' => 'Plan maintenance and aftercare',        'text' => 'Match equipment in use to preventive maintenance, repairs, follow-up care and future decisions.',         'icon' => 'Ativo%206'],
                ['title' => 'Agree the next step',                   'text' => 'Turn the property, equipment needs and support needed into a clear next step.',                                'icon' => 'Ativo%203'],
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
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $step['text'] }}</p>
            </div>

            @endforeach

        </div>
    </div>
</section>

<!-- SERVICE CONTRACTS + SUPPORT & AFTERCARE STRIP -->
@include('components.service-contracts-strip', [
    'headingLine1' => '<span style="color:#011E41;">Protect linen turnaround</span>, control<br>service costs and keep <span style="color:#011E41;">peace</span>',
    'headingLine2' => '<span style="color:#ffffff;"><span style="color:#011E41;">of mind</span> after installation</span>',
    'body'         => 'Servicing, planned maintenance and aftercare keep laundry equipment easier to manage after installation, rental, repair or replacement. Irish Laundry Systems keeps follow-up clear so hospitality teams can reduce surprise repair costs, keep equipment running and spend less time dealing with laundry pressure.',
    'image'        => '/images/healthcare/repairs-callouts.jpg',
    'miniPoints'   => ['Reduce surprise repair costs', 'Keep equipment running', 'Peace of mind'],
    'cta1Label'    => 'View Preventive Maintenance Contracts',
    'cta1Route'    => 'service-contracts',
    'cta2Label'    => 'Explore Support &amp; Aftercare',
    'cta2Route'    => 'parts-aftercare',
])

<!-- TESTIMONIAL / PROOF BLOCK -->
@include('components.testimonials', [
    'eyebrow'    => 'Client Feedback',
    'heading'    => 'Trusted by teams that need <span style="color:#148af4;">linen to keep moving</span>',
    'subheading' => 'Irish Laundry Systems is trusted by hospitality teams that need clear communication, reliable support and people who know the equipment when linen turnaround, housekeeping pressure and peak-period demand affect daily service.',
])

@include('components.proof-bar')

@include('components.faq', [
    'eyebrow' => 'Hospitality Laundry FAQs',
    'heading' => 'Questions before requesting a <span style="color:#148af4;">hospitality laundry assessment</span>',
    'faqs' => [
        ['question' => 'What types of hospitality sites do you work with?',            'answer' => 'Irish Laundry Systems works with hotels, guesthouses, serviced apartments, hostels and hospitality sites where linen flow, guest standards, housekeeping rhythm and laundry equipment continuity matter.'],
        ['question' => 'Can you help us decide whether in-house laundry makes sense?', 'answer' => 'Yes. We can review linen volume, outsourcing pressure, room space, utilities, staffing rhythm, equipment needs and service requirements to understand whether purchase, rental or a phased approach is the right route.'],
        ['question' => 'Can professional laundry equipment reduce operating costs?',   'answer' => 'Selected Electrolux Professional technologies can reduce energy, water and detergent use. Examples include Heat Pump drying, Automatic Savings, Integrated Savings, Intelligent Dosing and Efficient Dosing, depending on the equipment and site configuration.'],
        ['question' => 'Can you support busy hotels during peak periods?',             'answer' => 'Yes. Irish Laundry Systems can match equipment capacity, drying speed, finishing needs and service support to periods where occupancy, linen turnaround and housekeeping pressure are higher.'],
        ['question' => 'Is rental an option instead of purchasing equipment outright?', 'answer' => 'Yes. Equipment Rental can be discussed where a hospitality site needs replacement, expansion or continuity without one large upfront purchase.'],
        ['question' => 'Can you support guest laundry or self-service laundry areas?', 'answer' => 'Yes. We can advise on suitable equipment for guest laundry areas, including easy-to-use machines, payment options where relevant, space planning and support needs.'],
        ['question' => 'Do you support premium garment care or valet laundry?',        'answer' => 'Yes. Electrolux Professional options such as lagoon Advanced Care and Drying Cabinets can support delicate garments, guest items, uniforms, leathers, shoes and premium textile-care needs where suitable for the property.'],
        ['question' => 'What happens after installation?',                             'answer' => 'Support can continue through Service Contracts, Repairs & Call-outs, Equipment Rental support and Support & Aftercare, including service history, follow-up care and genuine parts access where applicable.'],
    ],
])

@include('components.cta-downtime-form', [
    'pageSource'  => 'hospitality_cta',
    'heading'     => 'Ready to take control of your hospitality laundry',
    'body'        => 'Tell us about the property, current equipment, linen demand, peak periods and pressure points. Irish Laundry Systems will guide you toward the right equipment advice, equipment quote, rental, preventive maintenance, repair or aftercare support.',
    'formTitle'   => 'Request a Hospitality Laundry Assessment',
    'buttonText'  => 'Request Hospitality Assessment',
])

@endsection
