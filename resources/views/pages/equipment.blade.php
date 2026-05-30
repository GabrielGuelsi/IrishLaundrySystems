@extends('layouts.app')

@section('meta')
<meta name="description" content="Commercial laundry equipment selected around your operation — selected Electrolux Professional washers, dryers, ironers and more, with supply, commissioning and aftercare from Irish Laundry Systems.">
@endsection

@section('content')

<!-- 1. HERO -->
<section class="relative overflow-hidden flex flex-col" style="height:660px; min-height:560px; background-color:#011E41;">
    <img src="/images/equipment/td6-multihousing-room.jpg" alt="Commercial laundry equipment room"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.94) 0%, rgba(1,30,65,0.80) 45%, rgba(1,30,65,0.45) 75%, rgba(1,30,65,0.20) 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16 py-24 lg:py-32">
            <div class="max-w-4xl reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Equipment Guidance</p>
                <h1 class="font-heading font-bold text-white text-4xl lg:text-6xl leading-tight mb-5">
                    Commercial laundry equipment <span style="color:#148af4;">selected around your operation</span>
                </h1>
                <p class="font-body text-white/80 text-base lg:text-lg leading-relaxed mb-8 max-w-2xl">
                    Irish Laundry Systems helps commercial, healthcare, care, hospitality and industrial sites choose equipment around workload, space, budget and daily laundry demand. We supply selected Electrolux Professional machines, then support installation, commissioning and aftercare where needed.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 mb-8">
                    <a href="#equipment-quote"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request an Equipment Quote
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white/50 hover:border-white text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        Talk to Our Team
                    </a>
                </div>
                <p class="font-body text-white/50 text-xs tracking-wide">Selected Electrolux Professional equipment &nbsp;·&nbsp; Supply, commissioning and aftercare &nbsp;·&nbsp; Purchase or rental where suitable</p>
            </div>
        </div>
    </div>
</section>

<!-- 2. THIN ELECTROLUX TRUST STRIP -->
@include('components.partner-strip')

<!-- 3. INTRO / BRIDGE -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Choosing Equipment</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight">
                    A better equipment fit can mean <span style="color:#148af4;">less waste</span>, less pressure and <span style="color:#148af4;">smoother laundry flow</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    The right equipment choice can save time, reduce waste, improve linen flow and support lower energy and water use where suitable.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Irish Laundry Systems looks at the room, workload, workflow and support needs before guiding the next equipment decision, whether the right step is purchase, rental where suitable, installation and commissioning or follow-up care.
                </p>
                <a href="#equipment-categories"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    Explore Equipment
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- 4. ELECTROLUX SOLUTION TEASERS -->
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Electrolux Professional Lines</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-3">
                Explore equipment lines built for <span style="color:#148af4;">different laundry needs</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-3xl">
                The available Electrolux Professional range includes options for high-use laundry rooms, smaller professional sites and specialist textile care. Irish Laundry Systems helps match the right option to the site and the next step.
            </p>
        </div>

        @php
        $teasers = [
            [
                'eyebrow'  => 'Line 6000',
                'headline' => 'Energy-saving options for professional laundry',
                'subline'  => 'Line 6000 equipment options for sites looking to manage energy use, water use and daily laundry demand.',
                'points'   => ['Control running costs', 'Use less water and energy', 'Built for daily demand'],
                'cta'      => 'Explore Line 6000 Options',
                'route'    => route('equipment.category', 'washers'),
                'img'      => '/images/equipment/commercialwasher.webp',
            ],
            [
                'eyebrow'  => 'myPROzip',
                'headline' => 'High speed, long life and flexibility for smaller sites',
                'subline'  => 'myPROzip washer and dryer options for operations that need more than domestic equipment in a compact professional setup.',
                'points'   => ['More than domestic', 'Smaller-site fit', 'Faster turnaround'],
                'cta'      => 'Explore myPRO Options',
                'route'    => route('equipment.category', 'semi-professional'),
                'img'      => '/images/equipment/IB623_FRONT_NEW.jpg',
            ],
            [
                'eyebrow'  => 'lagoon Advanced Care',
                'headline' => 'Specialist textile care where the fabric needs more',
                'subline'  => 'lagoon Advanced Care and wet cleaning options for garments and textiles that need a different approach.',
                'points'   => ['Protect textile quality', 'Handle specialist garments', 'Reduce outsourcing where suitable'],
                'cta'      => 'Explore Wet Cleaning',
                'route'    => route('equipment.category', 'wet-cleaning'),
                'img'      => '/images/healthcare/lagoon-advanced-care.webp',
            ],
        ];
        @endphp

        <div
            x-data="{
                active: 0,
                count: 3,
                timer: null,
                next()  { this.active = (this.active + 1) % this.count; this.restart(); },
                prev()  { this.active = (this.active - 1 + this.count) % this.count; this.restart(); },
                go(i)   { this.active = i; this.restart(); },
                restart() { clearInterval(this.timer); this.timer = setInterval(() => this.next(), 6000); },
            }"
            x-init="timer = setInterval(() => next(), 6000)"
            class="relative"
        >
            <div class="grid [&>*]:[grid-area:1/1]">
                @foreach($teasers as $i => $t)
                <div
                    class="transition-opacity duration-500 rounded-2xl overflow-hidden"
                    :class="active === {{ $i }} ? 'opacity-100' : 'opacity-0 pointer-events-none'"
                >
                    <div class="relative" style="min-height:460px;">
                        <img src="{{ $t['img'] }}" alt="{{ $t['eyebrow'] }}"
                             class="absolute inset-0 w-full h-full object-cover object-center">
                        <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.72) 42%, rgba(1,30,65,0.30) 70%, transparent 100%);"></div>
                        <div class="relative z-10 flex items-center" style="min-height:460px;">
                            <div class="px-8 lg:px-16 py-12 max-w-2xl">
                                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">{{ $t['eyebrow'] }}</p>
                                <h3 class="font-heading font-bold text-white text-3xl lg:text-4xl leading-tight mb-4">{{ $t['headline'] }}</h3>
                                <p class="font-body text-white/80 text-base leading-relaxed mb-6">{{ $t['subline'] }}</p>
                                <div class="flex flex-wrap items-center gap-x-6 gap-y-2 mb-8">
                                    @foreach($t['points'] as $pt)
                                    <span class="font-body text-white/90 text-sm">{{ $pt }}</span>
                                    @if(!$loop->last)<span class="text-white/30">|</span>@endif
                                    @endforeach
                                </div>
                                <a href="{{ $t['route'] }}"
                                   class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
                                    {{ $t['cta'] }}
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Dot navigation --}}
            <div class="flex items-center justify-center gap-2 mt-6">
                @foreach($teasers as $i => $t)
                <button @click="go({{ $i }})"
                        :class="active === {{ $i }} ? 'bg-[#148af4] w-6' : 'bg-navy/20 hover:bg-navy/40 w-2'"
                        class="h-2 rounded-full transition-all duration-300"></button>
                @endforeach
            </div>
        </div>

    </div>
</section>

<!-- 5. HIGHLIGHTED EQUIPMENT -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Highlighted Equipment</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-3">
                Equipment options <span style="color:#148af4;">worth a closer look</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-3xl">
                These equipment options can help sites handle common laundry demands around output, drying performance, space and professional-grade use.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            @foreach([
                [
                    'title' => 'High Spin Commercial Washers',
                    'text'  => 'For sites that need stronger wash performance, better load handling and more control around daily laundry output.',
                    'cta'   => 'View Washer Options',
                    'route' => route('equipment.category', 'washers'),
                    'img'   => '/images/equipment/commercialwasher.webp',
                ],
                [
                    'title' => 'Heat Pump Dryers',
                    'text'  => 'For sites looking to reduce energy pressure while keeping drying performance strong for busy laundry demand.',
                    'cta'   => 'View Dryer Options',
                    'route' => route('equipment.category', 'tumble-dryers'),
                    'img'   => '/images/equipment/Tumble-dryers_Heat-Pump_1-1.webp',
                ],
                [
                    'title' => 'myPRO Washers &amp; Dryers',
                    'text'  => 'For smaller operations that need more than domestic equipment without moving straight into a full commercial laundry setup.',
                    'cta'   => 'View myPRO Options',
                    'route' => route('equipment.category', 'semi-professional'),
                    'img'   => '/images/equipment/IB623_FRONT_NEW.jpg',
                ],
            ] as $card)
            <div class="group border border-gray-100 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300 flex flex-col">
                <div class="aspect-[4/3] overflow-hidden bg-white">
                    <img src="{{ $card['img'] }}" alt="{{ strip_tags($card['title']) }}" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <h3 class="font-heading font-bold text-navy text-xl mb-2">{!! $card['title'] !!}</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed mb-5 flex-1">{{ $card['text'] }}</p>
                    <a href="{{ $card['route'] }}" class="inline-flex items-center gap-1.5 font-body font-bold text-navy hover:text-[#148af4] text-sm transition-colors">
                        {!! $card['cta'] !!} <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<!-- 6. EQUIPMENT CATEGORIES -->
<section id="equipment-categories" class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-12 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Equipment Categories</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-3">
                Browse commercial laundry equipment <span style="color:#148af4;">by category</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-3xl">
                Start with the equipment type, then Irish Laundry Systems can help confirm the right capacity, site fit, purchase option or rental option where suitable.
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

            @foreach([
                ['title' => 'Commercial Washers',       'text' => 'For daily commercial laundry loads, wash performance and output control across high-use sites.',        'cta' => 'View Commercial Washers', 'route' => route('equipment.category', 'washers'),          'img' => '/images/equipment/commercialwasher.webp'],
                ['title' => 'Barrier Washers',          'text' => 'For laundry environments that need dirty-side and clean-side separation to support hygiene flow.',       'cta' => 'View Barrier Washers',    'route' => route('equipment.category', 'barrier-washers'),  'img' => '/images/equipment/line6000-barrier-washer.webp'],
                ['title' => 'Tumble Dryers',            'text' => 'For drying capacity matched to wash demand, turnaround needs and textile care requirements.',          'cta' => 'View Tumble Dryers',      'route' => route('equipment.category', 'tumble-dryers'),    'img' => '/images/equipment/line6000-tumble-dryer.webp'],
                ['title' => 'Drying Cabinets',          'text' => 'For workwear, PPE, uniforms and garments that need careful drying without standard tumble action.',     'cta' => 'View Drying Cabinets',    'route' => route('equipment.category', 'drying-cabinets'),  'img' => '/images/healthcare/Drying-cabinets_image.webp'],
                ['title' => 'Hot Cylinder Ironers',     'text' => 'For flatwork finishing, linen presentation and sites that need better control over finishing flow.',   'cta' => 'View Ironers',            'route' => route('equipment.category', 'ironers'),          'img' => '/images/equipment/line6000-ironer.webp'],
                ['title' => 'Wet Cleaning',             'text' => 'For specialist textile care and garment handling where a different cleaning approach is needed.',       'cta' => 'View Wet Cleaning',       'route' => route('equipment.category', 'wet-cleaning'),     'img' => '/images/healthcare/lagoon-advanced-care.webp'],
                ['title' => 'Semi-Professional',        'text' => 'For smaller sites that need a stronger step up from domestic laundry equipment.',                       'cta' => 'View Semi-Professional',  'route' => route('equipment.category', 'semi-professional'),'img' => '/images/equipment/IB623_FRONT_NEW.jpg'],
                ['title' => 'Accessories &amp; Consumables', 'text' => 'For products and support items that help keep day-to-day laundry operation moving.',                 'cta' => 'View Accessories',        'route' => route('equipment.category', 'accessories'),      'img' => '/images/equipment/IntegratedSavings.png'],
            ] as $cat)
            <a href="{{ $cat['route'] }}" class="group bg-white border border-gray-100 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300 flex flex-col">
                <div class="aspect-[4/3] overflow-hidden bg-white">
                    <img src="{{ $cat['img'] }}" alt="{{ strip_tags($cat['title']) }}" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <h3 class="font-heading font-bold text-navy text-lg mb-1.5">{!! $cat['title'] !!}</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed mb-4 flex-1">{{ $cat['text'] }}</p>
                    <span class="inline-flex items-center gap-1.5 font-body font-bold text-navy group-hover:text-[#148af4] text-sm transition-colors">
                        {!! $cat['cta'] !!} <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </span>
                </div>
            </a>
            @endforeach

        </div>
    </div>
</section>

<!-- 7. EQUIPMENT ACCESS & VALUE STRIP -->
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:340px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry equipment supply"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.82) 8%, rgba(20,138,244,0.45) 28%, rgba(20,138,244,0.18) 48%, transparent 65%);"></div>
    </div>
    <div class="relative z-10 px-10 lg:px-16 py-12 lg:py-16" style="width:100%; max-width:60%;">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Equipment Access</p>
        <h2 class="font-heading font-bold leading-tight mb-4">
            <span class="text-white text-3xl lg:text-5xl block">Choose the <span style="color:#011E41;">right equipment option</span></span>
            <span class="text-white text-3xl lg:text-5xl block">for your site and budget</span>
        </h2>
        <p class="font-body text-white text-base lg:text-lg leading-relaxed mb-6 max-w-2xl">
            The right equipment decision is not only about the machine. Irish Laundry Systems can supply selected Electrolux Professional equipment for outright purchase or discuss rental where suitable, helping your site balance workload, space, budget and support needs.
        </p>
        <div class="flex flex-wrap items-center gap-x-6 gap-y-2 mb-8">
            @foreach(['Outright purchase', 'Rental where suitable', 'Supplied and commissioned'] as $i => $pt)
            @if($i > 0)<span class="text-white/40">|</span>@endif
            <span class="font-body text-white font-bold text-sm">{{ $pt }}</span>
            @endforeach
        </div>
        <div class="flex flex-wrap gap-3">
            <a href="#equipment-quote"
               class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
                Request an Equipment Quote
            </a>
            <a href="{{ route('rental') }}"
               class="inline-flex items-center gap-2 border border-white/60 text-white font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/10 transition-colors tracking-wide">
                View Rental Options
            </a>
        </div>
    </div>
</section>

<!-- 8. INSTALLATION, COMMISSIONING & HANDOVER -->
<section class="py-14 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-12 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 text-center">Installation &amp; Handover</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl mb-3 text-center">
                From equipment choice to <span style="color:#148af4;">ready for daily use</span>
            </h2>
            <p class="font-body text-gray-500 text-base mb-2 max-w-2xl leading-relaxed text-center mx-auto">
                A good equipment decision does not stop at the quote. Irish Laundry Systems can support the site review, supply, installation, commissioning and handover steps that help put the selected equipment into operation.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-20">
            @foreach([
                ['title' => 'Review the site',          'text' => 'Look at the room, access, utilities, workload, staff flow and current laundry demand.',                 'icon' => 'clipboard'],
                ['title' => 'Confirm the equipment',    'text' => 'Match the equipment category, capacity and purchase or rental fit to the site and laundry demand.',     'icon' => 'Ativo%204'],
                ['title' => 'Supply and commission',    'text' => 'Arrange equipment supply, positioning, installation, commissioning and test cycles where required.',    'icon' => 'Ativo%206'],
                ['title' => 'Handover and next steps',  'text' => 'Give the site clearer guidance on use, support options and follow-up care where needed.',               'icon' => 'Ativo%203'],
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

<!-- 9. SUPPORT AFTER INSTALLATION -->
<section class="py-12 lg:py-16 bg-white border-y border-gray-200">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">

            <div class="lg:col-span-5">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">After Installation</p>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-3">
                    Keep the <span style="color:#148af4;">next support step clear</span> after installation
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed">
                    Once equipment is in place, Irish Laundry Systems can help your site choose the right follow-up support, from planned maintenance to call-out support and aftercare.
                </p>
            </div>

            <div class="lg:col-span-7">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-5">
                    @foreach([
                        ['label' => 'Preventive Maintenance Contracts', 'route' => route('service-contracts')],
                        ['label' => 'Repairs &amp; Call-outs',          'route' => route('repairs')],
                        ['label' => 'Support &amp; Aftercare',          'route' => route('parts-aftercare')],
                    ] as $link)
                    <a href="{{ $link['route'] }}"
                       class="group flex items-center justify-between gap-3 bg-white border border-gray-200 rounded-xl px-5 py-4 hover:border-[#148af4] transition-colors">
                        <span class="font-heading font-bold text-navy text-sm leading-snug">{!! $link['label'] !!}</span>
                        <svg class="w-4 h-4 text-[#148af4] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </a>
                    @endforeach
                </div>
                <div class="flex flex-wrap items-center gap-x-5 gap-y-2">
                    @foreach(['Less delay', 'Clearer service decisions', 'Support from people who know the equipment'] as $i => $pt)
                    @if($i > 0)<span class="text-gray-300">|</span>@endif
                    <span class="font-body text-gray-500 text-sm">{{ $pt }}</span>
                    @endforeach
                    <a href="{{ route('parts-aftercare') }}" class="inline-flex items-center gap-1.5 font-body font-bold text-navy hover:text-[#148af4] text-sm transition-colors ml-auto">
                        Explore Support &amp; Aftercare <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 10. EQUIPMENT FOR DIFFERENT LAUNDRY ENVIRONMENTS -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">

            <div class="lg:col-span-4">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Site Fit</p>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-4">
                    Match equipment to the way <span style="color:#148af4;">each laundry room works</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                    A hotel, care facility, healthcare site, commercial laundry and shared-use laundry room may each need a different balance of capacity, hygiene flow, drying performance, finishing, space and support.
                </p>
                <p class="font-body text-gray-400 text-sm leading-relaxed mb-6">
                    Irish Laundry Systems can help review the site needs before confirming the right category, equipment option or next step.
                </p>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200">
                    Talk to Our Team
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <div class="lg:col-span-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    @foreach([
                        ['env' => 'Healthcare',                   'text' => 'Hygiene flow and essential laundry needs',          'route' => route('sectors.healthcare')],
                        ['env' => 'Care Facilities',              'text' => 'Resident clothing, bedding and daily routines',     'route' => route('sectors.care')],
                        ['env' => 'Hospitality',                  'text' => 'Linen flow, room readiness and presentation',       'route' => route('sectors.hospitality')],
                        ['env' => 'Commercial &amp; Industrial',  'text' => 'Volume, output and mixed laundry loads',            'route' => route('sectors.commercial')],
                        ['env' => 'Shared-use / smaller operations', 'text' => 'Space, access and usage patterns',               'route' => route('sectors')],
                    ] as $row)
                    <a href="{{ $row['route'] }}"
                       class="group flex items-start gap-4 bg-white border border-gray-200 rounded-xl px-5 py-4 hover:bg-navy hover:border-navy transition-colors duration-200">
                        <span class="w-2 h-2 rounded-full bg-[#148af4] flex-shrink-0 mt-2"></span>
                        <div>
                            <p class="font-heading font-bold text-navy group-hover:text-white text-base leading-snug mb-0.5 transition-colors">{!! $row['env'] !!}</p>
                            <p class="font-body text-gray-500 group-hover:text-white/70 text-sm leading-relaxed transition-colors">{{ $row['text'] }}</p>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 11. TRUSTED BY / CLIENT LOGO STRIP -->
@include('components.proof-bar')

<!-- 12. EQUIPMENT FAQs -->
@include('components.faq', [
    'eyebrow' => 'Equipment FAQs',
    'heading' => 'Questions before choosing <span style="color:#148af4;">commercial laundry equipment</span>',
    'faqs' => [
        ['question' => 'What equipment categories do you supply?',           'answer' => 'Irish Laundry Systems supplies selected Electrolux Professional commercial laundry equipment, including commercial washers, barrier washers, tumble dryers, drying cabinets, hot cylinder ironers, wet cleaning equipment, semi-professional equipment and accessories or consumables where suitable.'],
        ['question' => 'Can you help choose the right equipment size?',       'answer' => 'Yes. Irish Laundry Systems can review the room, workload, daily laundry demand, access, utilities and support needs before recommending the right equipment option.'],
        ['question' => 'Do you only supply Electrolux Professional equipment?', 'answer' => 'Irish Laundry Systems supplies selected Electrolux Professional equipment. The team can also review existing mixed-brand laundry rooms where service, maintenance or support is needed.'],
        ['question' => 'Is installation included with equipment supply?',     'answer' => 'Equipment proposals can include delivery, installation and commissioning. Irish Laundry Systems will confirm the agreed scope in the quote, including any additional site works that may need to be handled separately.'],
        ['question' => 'Can new equipment be rented?',                        'answer' => 'Rental may be available where the selected Electrolux Professional equipment range, site requirements and agreement terms are a good fit. Rental has a minimum term of 3 years.'],
        ['question' => 'Can equipment be purchased outright?',                'answer' => 'Yes. Outright purchase is available for sites that want full ownership of the equipment from day one.'],
        ['question' => 'Do new machines include warranty?',                   'answer' => 'New equipment purchases include a 12-month parts warranty. Service, maintenance or follow-up support can be discussed separately.'],
        ['question' => 'Can you support the equipment after installation?',   'answer' => 'Yes. Irish Laundry Systems can discuss Preventive Maintenance Contracts, Repairs & Call-outs and Support & Aftercare options depending on the equipment and site needs.'],
        ['question' => 'Can you review an existing laundry room?',            'answer' => 'Yes. Irish Laundry Systems can review an existing laundry room and advise whether replacement equipment, rental, maintenance or service support is the right next step.'],
        ['question' => 'What is the best next step?',                         'answer' => 'Request an Equipment Quote or Talk to Our Team. Share the site type, equipment need, current laundry setup and whether you are considering purchase or rental.'],
    ],
])

<!-- 13. FINAL EQUIPMENT QUOTE FORM -->
<div id="equipment-quote"></div>
@include('components.cta-downtime-form', [
    'pageSource'  => 'equipment_cta',
    'eyebrow'     => 'Request an Equipment Quote',
    'heading'     => 'Ready to choose the <span style="color:#148af4;">right equipment for your site</span>',
    'body'        => 'Tell us about your laundry room, workload and equipment needs. Irish Laundry Systems will review the enquiry and help confirm the right category, equipment option, purchase or rental fit and next step.',
    'formTitle'   => 'Request an Equipment Quote',
    'formIntro'   => 'Share the details that help direct the enquiry properly.',
    'buttonText'  => 'Request an Equipment Quote',
])

@endsection
