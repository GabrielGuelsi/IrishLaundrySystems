@extends('layouts.app')

@section('pageTitle', 'Semi-Professional Laundry Equipment Ireland | myPRO XL')

@section('meta')
<meta name="description" content="Step up from domestic laundry with Electrolux Professional myPRO XL, myPRO and myPROzip washers and dryers, supplied and supported by Irish Laundry Systems.">
@endsection

@section('content')

{{-- 1. HERO --}}
<section class="relative overflow-hidden flex flex-col lg:!h-[720px]" style="height:auto; min-height:560px;">
    <img src="/images/sectors/Line 6000 solutions products_72dpi.jpg" alt="Semi-professional laundry equipment"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.75) 42%, rgba(1,30,65,0.35) 65%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 sm:py-20 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-5xl">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Semi-Professional Laundry Equipment</p>
                <h1 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-[2.6rem] xl:text-5xl leading-tight mb-6">
                    When domestic machines become<br class="hidden lg:block"> <span style="color:#148af4;">the weak point</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    For small businesses using laundry every day, Electrolux Professional myPRO XL, myPRO and myPROzip offer a stronger step up from standard domestic appliances.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Equipment Advice
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white hover:border-white/70 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        Ask About myPRO XL
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 2. THIN ELECTROLUX TRUST STRIP --}}
@include('components.partner-strip')

{{-- 3. INTRO / BRIDGE --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Built for Daily Small-Business Use</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    The step between domestic appliances and <span style="color:#148af4;">full commercial laundry</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    Semi-professional equipment gives smaller sites more capacity, durability and speed without starting with a full commercial laundry setup.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Irish Laundry Systems helps match the right level of equipment to the room, workload, use pattern and budget.
                </p>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    Talk to Our Team
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

{{-- 4. EQUIPMENT LEVEL GUIDE --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Equipment Level Guide</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Choose the right step up <span style="color:#148af4;">before laundry becomes a problem</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Not every site needs a full commercial laundry setup straight away. The right level depends on how often the equipment is used, the size of each load, the room available and how much pressure laundry puts on the business.
            </p>
        </div>

        {{-- Domestic machines is the starting point / current problem, not a sales option — muted image and gray step number; myPRO XL carries the visual focus --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 reveal">
            @foreach([
                ['step' => '01', 'title' => 'Domestic machines', 'copy' => 'For light household use, not repeated daily business demand.', 'img' => '/images/equipment/Domestic%20machines.png', 'imgClass' => 'saturate-[.3] contrast-[.85] brightness-105 opacity-80', 'stepClass' => 'text-gray-400'],
                ['step' => '02', 'title' => 'myPRO',             'copy' => 'For lighter small-site use where a domestic appliance is no longer the right fit.', 'img' => '/images/equipment/mypro-hp-front.jpg'],
                ['step' => '03', 'title' => 'myPRO XL',          'copy' => 'For smaller businesses handling bigger loads, more frequent washing and heavier daily use.', 'img' => '/images/equipment/myPROXL%2012kg.webp', 'imgClass' => 'scale-110 origin-bottom'],
                ['step' => '04', 'title' => 'Line 6000',         'copy' => 'For larger capacity, intensive use and full commercial laundry performance.', 'img' => '/images/equipment/commercialwasher.webp'],
            ] as $lvl)
            <div class="flex flex-col h-full">
                <div class="w-full flex items-end justify-center mb-5" style="height:240px;">
                    <img src="{{ $lvl['img'] }}" alt="{{ $lvl['title'] }}" class="max-h-full w-auto object-contain {{ $lvl['imgClass'] ?? '' }}">
                </div>
                <span class="font-heading font-bold {{ $lvl['stepClass'] ?? 'text-[#148af4]' }} text-xs tracking-[0.2em] mb-2">{{ $lvl['step'] }}</span>
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $lvl['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $lvl['copy'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="mt-8 reveal">
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                Ask Which Level Fits Your Site
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

{{-- 5. BUILT BEYOND DOMESTIC USE — only main proof section --}}
<section class="py-12 lg:py-16 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Built Beyond Domestic Use</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                More capacity, speed and durability than <span style="color:#148af4;">domestic laundry</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                myPRO and myPRO XL are built for smaller businesses that need laundry equipment working harder every day without moving straight to full commercial scale.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 reveal">
            @foreach([
                ['stat' => 'Up to 50%',       'title' => 'Faster washer programmes',      'body' => 'Shorter programmes can reduce waiting time during busy laundry periods.'],
                ['stat' => '12 kg',           'title' => 'More capacity with myPRO XL',   'body' => 'A practical step up for towels, bedding, workwear, mops and regular small-business laundry.'],
                ['stat' => '15,000+ cycles',  'title' => 'Durability for heavier daily use', 'body' => 'myPRO XL is built for busier sites that need stronger equipment in a compact format.'],
            ] as $proof)
            <div class="flex flex-col h-full">
                <p class="font-heading font-bold text-navy text-4xl sm:text-5xl leading-tight tracking-tight mb-3">{{ $proof['stat'] }}</p>
                <div class="w-12 h-1 rounded-full bg-[#148af4] mb-4"></div>
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $proof['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $proof['body'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 6. PRODUCT / RANGE SECTION --}}
<section class="py-16 lg:py-24 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Choose the Right myPRO Option</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Start with the setup that matches <span style="color:#148af4;">your daily laundry use</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Choose around load size, room space, who uses the machines and how often laundry needs to be washed and dried.
            </p>
        </div>

        @php
        $semiProCards = [
            [
                'name'      => 'myPRO XL',
                'topLine'   => 'Best fit for busier small-business laundry',
                'copy'      => 'A 12 kg semi-professional washer and dryer range for sites that need more capacity and durability without moving straight to Line 6000.',
                'badges'    => ['12 kg capacity', '15,000+ cycles', 'Faster programmes', 'Compact format'],
                'img'       => '/images/equipment/myPROXL 12kg.webp',
                'route'     => route('equipment.product', ['category' => 'semi-professional', 'product' => 'mypro-xl']),
                'featured'  => true,
            ],
            [
                'name'      => 'myPRO',
                'topLine'   => 'For smaller sites stepping up from domestic machines',
                'copy'      => 'A stronger washer, dryer and light finishing setup for small businesses with regular laundry demand.',
                'badges'    => ['8 kg washer options', '7,500 cycles', '3x longer', 'Up to 50% faster'],
                'img'       => '/images/equipment/mypro-hp-front.jpg',
                'route'     => route('equipment.product', ['category' => 'semi-professional', 'product' => 'mypro-washer']),
                'featured'  => false,
            ],
            [
                'name'      => 'myPROzip',
                'topLine'   => 'For guest-operated laundry',
                'copy'      => 'Designed for shared or guest-operated laundry rooms where simple use and payment integration matter.',
                'badges'    => ['Guest-operated use', 'Simple controls', 'Payment-ready', 'Stronger than domestic'],
                'img'       => '/images/equipment/Self Service Laundry.png',
                'route'     => route('equipment.product', ['category' => 'semi-professional', 'product' => 'myprozip']),
                'featured'  => false,
            ],
            [
                'name'      => 'myPRO ironers / light finishing support',
                'topLine'   => 'For simple finishing needs',
                'copy'      => 'Light finishing support for sites that need practical ironing alongside washing and drying.',
                'badges'    => ['Light finishing', 'Compact format', 'Simple ironing', 'myPRO setup'],
                'img'       => '/images/equipment/myPRO - IronersIS185.jpg',
                'route'     => route('equipment.product', ['category' => 'semi-professional', 'product' => 'mypro-finishing']),
                'featured'  => false,
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 reveal">
            @foreach($semiProCards as $card)
            <div class="flex flex-col rounded-2xl p-6 bg-white {{ $card['featured'] ? 'border-2 border-[#148af4] relative shadow-md' : 'border border-gray-200' }}">
                @if($card['featured'])
                <span class="absolute -top-3 left-6 font-body text-[10px] font-bold uppercase tracking-wide text-white bg-[#148af4] px-2.5 py-1 rounded">Most capacity</span>
                @endif
                <a href="{{ $card['route'] }}" class="flex items-center justify-center h-60 lg:h-72 mb-5">
                    <img src="{{ $card['img'] }}" alt="{{ $card['name'] }}" class="max-h-full w-auto object-contain transition-transform duration-300 hover:-translate-y-1.5">
                </a>
                <p class="font-body text-xs font-bold text-navy/60 mb-1.5">{{ $card['topLine'] }}</p>
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">
                    <a href="{{ $card['route'] }}" class="hover:text-[#148af4] transition-colors">{{ $card['name'] }}</a>
                </h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-4">{{ $card['copy'] }}</p>
                <div class="flex flex-wrap gap-1.5 mb-5">
                    @foreach(array_slice($card['badges'], 0, 4) as $b)
                    <span class="font-body text-[10px] font-bold uppercase tracking-wide text-navy/70 bg-navy/[0.06] px-2 py-1 rounded">{{ $b }}</span>
                    @endforeach
                </div>
                <div class="mt-auto flex flex-col gap-2.5">
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/></svg>
                        Request Advice
                    </a>
                    <a href="{{ $card['route'] }}" class="inline-flex items-center justify-center gap-2 border border-gray-300 text-navy hover:border-navy font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                        View Details
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 6b. EQUIPMENT RANGE (myPRO ironing & finishing) --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Equipment Range</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                myPRO ironing and <span style="color:#148af4;">finishing equipment</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Practical ironing and finishing equipment to complete the myPRO setup alongside washing and drying.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 reveal">
            @foreach([
                ['name' => 'IS1103', 'topLine' => 'myPRO ironing system', 'copy' => 'A myPRO ironing system for practical garment and flatwork finishing alongside washing and drying.', 'badges' => ['myPRO setup', 'Practical finishing', 'Compact format', 'Small business'], 'img' => '/images/equipment/IS1103.jpg'],
                ['name' => 'myPRO Ironer IS185', 'topLine' => 'myPRO rotary iron', 'copy' => 'A myPRO rotary iron for faster, more consistent finishing than hand ironing alone.', 'badges' => ['Rotary ironing', 'Faster finishing', 'Compact format', 'myPRO setup'], 'img' => '/images/equipment/myPRO%20-%20IronersIS185.jpg'],
            ] as $card)
            <div class="flex flex-col rounded-2xl p-6 bg-white border border-gray-200">
                <div class="flex items-center justify-center h-60 lg:h-72 mb-5">
                    <img src="{{ $card['img'] }}" alt="{{ $card['name'] }}" class="max-h-full w-auto object-contain transition-transform duration-300 hover:-translate-y-1.5">
                </div>
                <p class="font-body text-xs font-bold text-navy/60 mb-1.5">{{ $card['topLine'] }}</p>
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $card['name'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-4">{{ $card['copy'] }}</p>
                <div class="flex flex-wrap gap-1.5 mb-5">
                    @foreach($card['badges'] as $b)
                    <span class="font-body text-[10px] font-bold uppercase tracking-wide text-navy/70 bg-navy/[0.06] px-2 py-1 rounded">{{ $b }}</span>
                    @endforeach
                </div>
                <a href="{{ route('contact') }}" class="mt-auto inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-5 py-3 rounded-lg text-sm transition-colors">
                    Request Advice
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 7. DETERGENTS & CONSUMABLES — Dosing Intelligence carousel (matches accessories) --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Detergents &amp; Consumables</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3 lg:whitespace-nowrap">
                Use <span style="color:#148af4;">the correct amount,</span> cycle after cycle
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                Electrolux Professional dosing systems help reduce chemical overuse, improve wash consistency and give sites clearer control over detergent costs.
            </p>
        </div>

        @php
        $dosingProducts = [
            [
                'name'   => 'Intelligent Dosing',
                'label'  => 'Dosing based on the load',
                'body'   => 'Intelligent Dosing adds detergent according to the load inside the drum, reducing waste without compromising wash results.',
                'points' => ['Load-based dosing', 'Less waste', 'Consistent results', 'ClarusVibe where applicable'],
                'img'    => '/images/healthcare/efficientDosing_equip.webp',
            ],
            [
                'name'   => 'Efficient Dosing',
                'label'  => 'Correct dose for selected CompassPro setups',
                'body'   => 'Efficient Dosing uses the right amount of detergent for each cycle and can save over 30% on detergent costs where suitable.',
                'points' => ['Correct amount', 'Over 30% saving where suitable', 'CompassPro', 'Cost control'],
                'img'    => '/images/healthcare/efficientDosing_equip.webp',
            ],
            [
                'name'   => 'Multisave',
                'label'  => 'One unit for multiple washers',
                'body'   => 'Multisave can connect up to 7 washing machines with one unit, supporting controlled detergent use in multi-washer laundry rooms.',
                'points' => ['Up to 7 washers', 'Multi-machine control', 'Lower setup complexity', 'Controlled consumption'],
                'img'    => '/images/healthcare/MultisaveEQUIP.webp',
            ],
            [
                'name'   => 'JETSAVE',
                'label'  => 'Lower upkeep with water-powered dosing',
                'body'   => 'JETSAVE uses water-powered pumps with no moving parts or squeeze tubes, supporting reliable dosing with less dosing system maintenance.',
                'points' => ['Water-powered dosing', 'No squeeze tubes', 'Reliable dosage', 'Less maintenance'],
                'img'    => '/images/healthcare/JetsaveEQUIP.webp',
            ],
            [
                'name'   => 'DOSAVE',
                'label'  => 'Straightforward dosing setup',
                'body'   => 'DOSAVE uses peristaltic technology with easy installation and programming where this system is the right fit.',
                'points' => ['Easy installation', 'Easy programming', 'Accurate dosing', 'Practical setup'],
                'img'    => '/images/healthcare/DOSAVEEQUIP.webp',
            ],
        ];
        @endphp

        <div
            x-data="{
                active: 0,
                count: 5,
                timer: null,
                next()  { this.active = (this.active + 1) % this.count; this.restart(); },
                prev()  { this.active = (this.active - 1 + this.count) % this.count; this.restart(); },
                go(i)   { this.active = i; this.restart(); },
                restart() { clearInterval(this.timer); this.timer = setInterval(() => this.next(), 5000); },
            }"
            x-init="timer = setInterval(() => next(), 5000)"
            class="relative reveal"
        >
            {{-- Slides --}}
            <div class="grid [&>*]:[grid-area:1/1]">
                @foreach($dosingProducts as $i => $p)
                <div
                    class="transition-opacity duration-500"
                    :class="active === {{ $i }} ? 'opacity-100' : 'opacity-0 pointer-events-none'"
                    @if($i > 0) x-cloak @endif
                >
                    <div class="grid grid-cols-1 lg:grid-cols-12" style="min-height:420px;">

                        {{-- Left: context photo --}}
                        <div class="lg:col-span-3 overflow-hidden pt-8 lg:pt-10" style="align-self:start;">
                            <img src="/images/healthcare/Laundry-Double-Banner-965x965-1.webp"
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
                                    <ul class="space-y-1.5 mb-5">
                                        @foreach($p['points'] as $pt)
                                        <li class="font-body font-semibold text-navy text-sm flex items-center gap-2">
                                            <span class="text-[#148af4]">&#9656;</span> {{ $pt }}
                                        </li>
                                        @endforeach
                                    </ul>
                                    <div class="flex items-center gap-8">
                                        <img src="/images/healthcare/clarusvibeicon.webp" alt="ClarusVibe" class="h-12 w-auto object-contain opacity-80">
                                        <img src="/images/healthcare/Compass-Pro_1-300x88.webp" alt="CompassPro" class="h-12 w-auto object-contain opacity-80">
                                    </div>
                                </div>

                                {{-- Unit image --}}
                                @if($p['img'])
                                <div class="flex-shrink-0 w-full max-w-[220px] sm:max-w-none sm:w-56 lg:w-80 mx-auto flex items-center justify-center">
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

{{-- 8. WHERE SEMI-PROFESSIONAL LAUNDRY FITS --}}
<section class="py-12 lg:py-16 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Where It Fits</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Built for smaller sites with <span style="color:#148af4;">laundry working every day</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                myPRO and myPRO XL suit businesses where laundry is not industrial-scale, but still affects service, staff time and customer standards.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 reveal">
            @foreach([
                ['title' => 'B&amp;Bs, guesthouses and small hotels',          'items' => ['Guest linen', 'Towels', 'Room readiness'],           'img' => '/images/Hospitallity/hospitallityhero.png',                'pos' => '82% 30%'],
                ['title' => 'Salons, spas and hairdressers',                    'items' => ['Towels', 'Robes', 'Daily use'],                      'img' => '/images/healthcare/services-overview-hero.jpg',            'pos' => 'center center'],
                ['title' => 'Smaller care settings',                            'items' => ['Resident items', 'Bedding', 'Towels'],               'img' => '/images/CareFacilities/carefacilitiesheroimage.jpg',       'pos' => 'center center'],
                ['title' => 'Restaurants, cafés and food service',              'items' => ['Aprons', 'Cloths', 'Limited space'],                 'img' => '/images/healthcare/line-6000-solutions.jpg',               'pos' => 'center 30%'],
                ['title' => 'Cleaning, facilities, sports and animal care',     'items' => ['Mops', 'Uniforms', 'Frequent washing'],              'img' => '/images/healthcare/commercial-industrial.jpg',             'pos' => 'center center'],
                ['title' => 'Shared, apartment and guest-operated laundry',     'items' => ['Shared use', 'Guest operation', 'Payment-ready'],     'img' => '/images/healthcare/services-overview-hero-portrait.jpg',    'pos' => 'center center'],
            ] as $card)
            <div class="group relative overflow-hidden rounded-2xl" style="height:380px;">
                <img src="{{ $card['img'] }}" alt="{{ strip_tags($card['title']) }}"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                     style="object-position: {{ $card['pos'] }};">
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background:linear-gradient(to top, rgba(1,30,65,0.95) 0%, rgba(1,30,65,0.45) 45%, rgba(1,30,65,0.05) 75%, transparent 100%);"></div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background:rgba(1,30,65,0.90);"></div>
                <div class="absolute inset-0 p-7 flex flex-col justify-end z-10">
                    <ul class="font-body text-white/80 text-sm space-y-2 overflow-hidden max-h-0 opacity-0 group-hover:max-h-40 group-hover:opacity-100 transition-all duration-500 mb-0 group-hover:mb-5">
                        @foreach($card['items'] as $item)
                        <li class="flex items-start gap-2.5">
                            <span class="flex-shrink-0 mt-1.5 w-1.5 h-1.5 rounded-full bg-white/60"></span>
                            <span>{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <h3 class="font-heading font-bold text-white text-xl leading-snug">{!! $card['title'] !!}</h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 9. PLANNING / SITE FIT STRIP — Home-style medium-height strip (absorbs Right Fit Advice) --}}
@include('components.cta-combined-banner', [
    'eyebrow'    => 'Planning Before Installation',
    'heading'    => 'Fit semi-professional laundry around the <span style="color:#011E41;">room, workload and budget</span>',
    'body'       => 'Irish Laundry Systems can review the room, daily use, washer and dryer pairing, utilities and rental where suitable before recommending the right next step.',
    'miniPoints' => [
        ['icon' => 'home-planning-fit',    'label' => 'Room<br>fit'],
        ['icon' => 'home-planning-spend',  'label' => 'Daily<br>use'],
        ['icon' => 'home-planning-rework', 'label' => 'Utilities'],
    ],
    'ctaText'    => 'Request Equipment Advice',
])

{{-- 10. SERVICE AND SUPPORT OPTIONS --}}
<section class="py-16 lg:py-20 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Support Options</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Support to keep semi-professional laundry equipment <span style="color:#148af4;">running</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Irish Laundry Systems can support semi-professional laundry sites with repairs, Preventive Maintenance, rental options and aftercare.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                [
                    'title' => 'Repairs &amp; Call-Outs',
                    'text'  => 'For washer, dryer or finishing faults that need practical service support.',
                    'cta'   => 'Request a Repair',
                    'route' => route('repairs'),
                    'img'   => '/images/healthcare/repairs-callouts.jpg',
                    'pos'   => '50% 35%',
                ],
                [
                    'title' => 'Preventive Maintenance',
                    'text'  => 'Planned maintenance for sites that want fewer avoidable disruptions.',
                    'cta'   => 'View Preventive Maintenance',
                    'route' => route('service-contracts'),
                    'img'   => '/images/healthcare/service-contracts-hero.png',
                    'pos'   => '90% 35%',
                ],
                [
                    'title' => 'Equipment Rental',
                    'text'  => 'For selected equipment where lower upfront cost and included support make sense.',
                    'cta'   => 'See Equipment Rental',
                    'route' => route('rental'),
                    'img'   => '/images/healthcare/td6-11-multihousing-room-front.jpg',
                    'pos'   => '66% center',
                ],
                [
                    'title' => 'Support &amp; Aftercare',
                    'text'  => 'For service history, parts access where needed and clearer repair or replacement calls.',
                    'cta'   => 'Explore Support &amp; Aftercare',
                    'route' => route('parts-aftercare'),
                    'img'   => '/images/healthcare/services-overview-hero-portrait.jpg',
                    'pos'   => 'center center',
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

{{-- 10b. myPRO ONLINE ASSISTANT (tutorial videos + online help) --}}
<section class="py-12 lg:py-16 bg-gray-50 border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="text-center max-w-3xl mx-auto mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">myPRO Online Assistant</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
                Get the best out of your <span style="color:#148af4;">myPRO and myPROzip</span> washer, dryer and ironer
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Video tutorials, frequently asked questions and online help. Register your products and find accessories and consumables to get the best out of your washer, dryer and ironer, or get in touch with an expert if you need additional support.
            </p>
        </div>

        <p class="font-heading font-bold text-navy text-xl text-center mb-6">myPRO: tutorial videos</p>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 max-w-5xl mx-auto mb-8 reveal">
            @foreach([
                ['title' => 'myPROzip Washer: User Instructions',                       'url' => 'https://www.youtube.com/watch?v=IHJiqGrhOm8'],
                ['title' => 'myPROzip Dryer: User Instructions',                        'url' => 'https://www.youtube.com/watch?v=liScSk-1b1c'],
                ['title' => 'myPROzip: Instructions on Set Up for Washer and Dryer',    'url' => 'https://www.youtube.com/watch?v=OX3JTInT8A4'],
            ] as $vid)
            <a href="{{ $vid['url'] }}" target="_blank" rel="noopener" class="group flex flex-col bg-white rounded-2xl overflow-hidden border border-gray-100 hover:border-[#148af4] transition-colors">
                <div class="flex items-center justify-center h-32 bg-gray-100">
                    <span class="flex items-center justify-center w-14 h-14 rounded-full bg-navy text-white group-hover:bg-[#148af4] transition-colors">
                        <svg class="w-6 h-6 ml-0.5" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                    </span>
                </div>
                <p class="font-body font-bold text-navy text-sm leading-snug p-5">{{ $vid['title'] }}</p>
            </a>
            @endforeach
        </div>

        <div class="flex flex-col sm:flex-row gap-4 justify-center max-w-3xl mx-auto">
            <a href="https://www.electroluxprofessional.com/gb/commercial-laundry-equipment/mypro-washers-dryers-steam-ironers/faq-mypro-washer/" target="_blank" rel="noopener" class="flex-1 inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-heading font-bold px-6 py-4 rounded-lg text-base transition-colors tracking-wide">
                Online help Washer
            </a>
            <a href="https://www.electroluxprofessional.com/gb/commercial-laundry-equipment/mypro-washers-dryers-steam-ironers/online-help-dryer/" target="_blank" rel="noopener" class="flex-1 inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-heading font-bold px-6 py-4 rounded-lg text-base transition-colors tracking-wide">
                Online help Dryer
            </a>
        </div>
    </div>
</section>

{{-- 11. COMPACT RESOURCES BAR (matches accessories design) --}}
<section class="py-8 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 lg:gap-10">
            @foreach([
                ['title' => 'Official Resources', 'links' => [
                    ['l' => 'myPRO XL leaflet', 'h' => '/pdfs/EPR-leaflet-General-myPRO-XL_2021-eng-lr.pdf'],
                    ['l' => 'myPRO product resources', 'h' => route('resources')],
                    ['l' => 'Browse semi-professional range', 'h' => route('equipment.category', ['category' => 'semi-professional'])],
                ]],
                ['title' => 'Related Equipment', 'links' => [
                    ['l' => 'Washing Machines', 'h' => route('equipment.category', ['category' => 'washers'])],
                    ['l' => 'Tumble Dryers', 'h' => route('equipment.category', ['category' => 'tumble-dryers'])],
                    ['l' => 'Drying Cabinets', 'h' => route('equipment.category', ['category' => 'drying-cabinets'])],
                ]],
                ['title' => 'Advice & Support', 'links' => [
                    ['l' => 'Request advice', 'h' => route('request-assessment')],
                    ['l' => 'Support & Aftercare', 'h' => route('parts-aftercare')],
                    ['l' => 'Talk to our team', 'h' => route('contact')],
                ]],
            ] as $grp)
            <div class="{{ !$loop->last ? 'sm:border-r sm:border-gray-200 sm:pr-6 lg:pr-10' : '' }}">
                <p class="font-heading font-bold text-navy text-xs uppercase tracking-[0.16em] mb-3">{{ $grp['title'] }}</p>
                <div class="flex flex-col gap-2">
                    @foreach($grp['links'] as $lk)
                    <a href="{{ $lk['h'] }}" @if(str_ends_with($lk['h'], '.pdf')) target="_blank" rel="noopener" @endif
                       class="inline-flex items-center gap-1.5 font-body text-sm text-gray-600 hover:text-[#148af4] transition-colors">
                        <svg class="w-3.5 h-3.5 text-[#148af4] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        {{ $lk['l'] }}
                    </a>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 12. RELATED EQUIPMENT --}}
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Related Equipment</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Other equipment that may suit <span style="color:#148af4;">the same site</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Some sites need a larger washer, dryer, drying cabinet or finishing option depending on volume, item type and daily use.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 reveal">
            @foreach([
                ['title' => 'Commercial Washing Machines', 'copy' => 'For larger capacity, heavier use or full commercial laundry performance.', 'cta' => 'View Washing Machine Options', 'route' => route('equipment.category', ['category' => 'washers']), 'img' => '/images/equipment/commercialwasher.webp', 'box' => 270],
                ['title' => 'Commercial Tumble Dryers',    'copy' => 'For higher drying demand where a commercial dryer is the better fit.', 'cta' => 'View Dryer Options', 'route' => route('equipment.category', ['category' => 'tumble-dryers']), 'img' => '/images/equipment/Tumble-dryers_Heat-Pump_1-1.webp', 'box' => 245],
                ['title' => 'Drying Cabinets',             'copy' => 'For shoes, gloves, workwear, delicate garments and items that should not be tumble dried.', 'cta' => 'View Drying Cabinets', 'route' => route('equipment.category', ['category' => 'drying-cabinets']), 'img' => '/images/healthcare/Drying-cabinets_image.webp', 'box' => 260],
                ['title' => 'Finishing Equipment',         'copy' => 'For ironing, pressing or light finishing alongside washing and drying.', 'cta' => 'View Finishing Equipment', 'route' => route('equipment.category', ['category' => 'finishing-equipment']), 'img' => '/images/equipment/IB623_FRONT_NEW.jpg', 'box' => 300],
            ] as $card)
            <div class="flex flex-col gap-6 h-full">
                <div style="min-height:112px;">
                    <p class="font-heading font-bold text-navy text-2xl leading-snug mb-2">{{ $card['title'] }}</p>
                    <p class="font-body text-gray-600 text-base leading-relaxed">{{ $card['copy'] }}</p>
                </div>
                <div class="w-full flex items-end justify-center" style="height:300px;">
                    <img src="{{ $card['img'] }}" alt="{{ $card['title'] }}" loading="lazy" decoding="async"
                         class="transition-transform duration-500 hover:-translate-y-2"
                         style="width:{{ $card['box'] }}px; max-width:100%; height:{{ $card['box'] }}px; object-fit:contain;">
                </div>
                <a href="{{ $card['route'] }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy-dark text-white font-heading font-bold text-base px-5 py-4 rounded-lg transition-colors mt-auto">
                    {{ $card['cta'] }}
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 13. FAQ --}}
@include('components.faq', [
    'eyebrow' => 'Semi-Professional FAQs',
    'heading' => 'Questions before choosing <span style="color:#148af4;">myPRO or myPRO XL</span>',
    'faqs' => [
        ['question' => 'What is semi-professional laundry equipment?', 'answer' => 'Equipment for smaller businesses that need more durability, speed and capacity than domestic machines, without moving straight to full commercial scale.'],
        ['question' => 'When should a business step up from domestic machines?', 'answer' => 'When domestic machines are too slow, too small, wearing out too often or struggling with daily business laundry.'],
        ['question' => 'What is the difference between myPRO and myPRO XL?', 'answer' => 'myPRO suits smaller sites stepping up from domestic machines. myPRO XL gives more capacity, with 12 kg options and more than 15,000 cycles according to Electrolux Professional material.'],
        ['question' => 'What is myPROzip?', 'answer' => 'myPROzip is designed for guest-operated laundry rooms, with simple use and payment system integration.'],
        ['question' => 'Can semi-professional machines be rented?', 'answer' => 'Rental may be available where the selected equipment and site needs are suitable.'],
        ['question' => 'When should a site choose Line 6000 instead?', 'answer' => 'Choose Line 6000 where laundry demand, usage intensity or capacity needs move beyond semi-professional scale.'],
    ],
])

{{-- 14. FINAL CTA / FORM --}}
@include('components.cta-downtime-form', [
    'pageSource' => 'semi_professional_cta',
    'heading'    => 'Choose the right semi-professional laundry equipment <span style="color:#148af4;">for your site</span>',
    'body'       => 'Tell us what you wash, how often the machines are used and whether the laundry is staff-operated or guest-operated. Irish Laundry Systems will guide you toward the right equipment, rental or support option.',
    'formTitle'  => 'Request Semi-Professional Laundry Advice',
    'buttonText' => 'Request Equipment Advice',
])

@endsection
