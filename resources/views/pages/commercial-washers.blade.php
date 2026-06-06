@extends('layouts.app')

@section('pageTitle', 'Commercial Washing Machines | Electrolux Professional Washers | Irish Laundry Systems')

@section('meta')
<meta name="description" content="Commercial washing machines selected around daily demand, running costs and long-term support. Irish Laundry Systems supplies, installs and supports Electrolux Professional commercial washers across Ireland.">
@endsection

@section('content')

{{-- 2. HERO --}}
<section class="relative overflow-hidden flex flex-col" style="height:720px; min-height:560px;">
    <img src="/images/sectors/Line 6000 solutions products_72dpi.jpg" alt="Commercial washing machines"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.75) 42%, rgba(1,30,65,0.35) 65%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-24 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-3xl">
                <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Commercial Washing Machines</p>
                <h1 class="font-heading font-bold text-white text-4xl lg:text-6xl leading-tight mb-6">
                    Choose commercial washers around <span style="color:#148af4;">daily demand, running costs and long-term support</span>
                </h1>
                <p class="font-body text-white/80 text-base lg:text-lg leading-relaxed mb-8 max-w-2xl">
                    Irish Laundry Systems supplies, installs and supports Electrolux Professional commercial washing machines for hotels, healthcare sites, care facilities and commercial laundries across Ireland. We connect washer capacity, room setup, staff routines and after-installation support around the way your laundry actually operates.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Equipment Advice
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

{{-- 3. UNIVERSAL THIN ELECTROLUX TRUST STRIP --}}
@include('components.partner-strip')

{{-- 4. INTRO / BRIDGE --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Washer Planning</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight">
                    Washer choice affects <span style="color:#148af4;">cost control, laundry flow and support after installation</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    The wrong washer fit can create daily pressure through water use, detergent waste, drying delays, staff routines, service calls and replacement pressure. Irish Laundry Systems connects washer selection, room layout, installation, rental, maintenance, repairs and aftercare into one clear equipment decision.
                </p>
                <a href="#washer-range"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    See the washer options we provide
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

{{-- 5. FINANCIAL / OPERATIONAL PERFORMANCE --}}
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Financial Performance</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-3">
                Choose washers around the <span style="color:#148af4;">costs your laundry room carries every day</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                A washer decision affects more than the wash cycle. Chemicals, energy, water, drying pressure, staff routines and long-term support all shape the real cost of keeping laundry moving.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach([
                ['title' => '10% up-front investment. 90% life cycle costs', 'copy' => 'Purchase price is only part of the washer decision. Chemicals, energy and water carry the larger cost over the life of the equipment.'],
                ['title' => 'Save over 30% on detergent costs',            'copy' => 'Efficient Dosing can reduce detergent cost pressure while giving better control over the wash process.'],
                ['title' => 'Not a drop of water wasted',                  'copy' => 'Automatic Savings adjusts water intake to the actual load, reducing waste when machines are not running at full capacity.'],
                ['title' => 'Avoid underloading and overloading',          'copy' => 'Integrated Savings shows the load in real time, supporting better productivity, lower water and energy waste and longer washer life.'],
                ['title' => 'Maximum dewatering',                          'copy' => 'Power Balance supports stronger extraction and lower moisture retention before drying, reducing pressure on the drying stage.'],
                ['title' => 'Save 65% on energy consumption',              'copy' => 'Heat Pump Dryer technology can reduce energy pressure where the connected washer-dryer setup fits the room and operation.'],
            ] as $card)
            <div class="bg-bg border border-gray-100 rounded-2xl p-7 flex flex-col h-full">
                <div class="w-10 h-1 rounded-full bg-[#148af4] mb-4"></div>
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $card['copy'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 6. TECHNICAL PROOF --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Technical Proof</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-3">
                Washer features that support <span style="color:#148af4;">capacity, control and daily handling</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Selected Electrolux Professional features support load control, detergent accuracy, clearer operation, stronger extraction and easier daily handling when matched to the right laundry room.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach([
                ['icon' => '30', 'title' => 'Automatic Savings',              'copy' => 'Water intake adjusted to the actual load.'],
                ['icon' => '34', 'title' => 'Integrated Savings',             'copy' => 'Real-time load visibility to avoid underloading and overloading.'],
                ['icon' => '26', 'title' => 'Intelligent / Efficient Dosing', 'copy' => 'Detergent control linked to load weight and cycle needs.'],
                ['icon' => '5',  'title' => 'ClarusVibe and CompassPro',       'copy' => 'Clearer programme selection, editable programmes and easier operator control.'],
                ['icon' => '4',  'title' => 'ERGOCERT operator handling',      'copy' => 'Certified ergonomic design for repeated laundry work and daily staff routines.'],
                ['icon' => '36', 'title' => 'Validated hygiene options',       'copy' => 'Global Hygiene Advanced programmes support validated hygiene process control where the correct Electrolux Professional process is specified.'],
            ] as $card)
            <div class="bg-white border border-gray-100 rounded-2xl p-7 flex flex-col items-center text-center gap-4 shadow-card">
                <div class="flex items-center justify-center h-20">
                    <img src="/images/icons/{{ $card['icon'] }}.png" alt="" class="w-20 h-20 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">{{ $card['title'] }}</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $card['copy'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 7. RANGE TEASERS CAROUSEL --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-2">Washer Range Starting Points</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-3">
                Equipment paths <span style="color:#148af4;">worth a closer look</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-3xl">
                Start with the range that fits the pressure of your laundry room, then connect the decision to capacity, installation, rental and long-term support.
            </p>
        </div>

        @php
        $rangeCards = [
            ['name' => 'Line 6000 Commercial Washers', 'copy' => 'Main commercial washer range for busy laundry rooms where capacity, controls, dosing, high spin and support need to work together.', 'cta' => 'View Washer Range', 'img' => '/images/equipment/commercialwasher.webp'],
            ['name' => 'myPRO / myPRO XL',             'copy' => 'For smaller sites that need more than domestic equipment without moving straight into a full commercial laundry setup.', 'cta' => 'Discover myPRO', 'img' => '/images/equipment/commercialwasher.webp'],
            ['name' => 'Heat Pump Dryers',             'copy' => 'For sites looking to reduce drying energy pressure while keeping laundry flow moving.', 'cta' => 'Explore Drying Options', 'img' => '/images/equipment/line6000-tumble-dryer.webp'],
            ['name' => 'Lagoon Advanced Care',         'copy' => 'For specialist wet cleaning and textile care where delicate garments, leathers or shoes need a different process.', 'cta' => 'Explore Wet Cleaning', 'img' => '/images/healthcare/lagoon-advanced-care.webp'],
        ];
        @endphp

        <div
            x-data="{
                active: 0,
                count: {{ count($rangeCards) }},
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
                @foreach($rangeCards as $i => $p)
                <div class="transition-opacity duration-500" :class="active === {{ $i }} ? 'opacity-100' : 'opacity-0 pointer-events-none'">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center bg-bg border border-gray-100 rounded-3xl overflow-hidden" style="min-height:380px;">
                        <div class="flex items-center justify-center p-8 lg:p-12" style="background-color:#011E41;">
                            <img src="{{ $p['img'] }}" alt="{{ $p['name'] }}" class="w-full h-64 lg:h-72 object-contain">
                        </div>
                        <div class="p-8 lg:p-12">
                            <h3 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-4">{{ $p['name'] }}</h3>
                            <p class="font-body text-gray-500 text-base leading-relaxed mb-7 max-w-md">{{ $p['copy'] }}</p>
                            <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200">
                                {{ $p['cta'] }}
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Controls --}}
            <div class="flex items-center justify-between mt-6">
                <div class="flex items-center gap-2">
                    @foreach($rangeCards as $i => $p)
                    <button @click="go({{ $i }})" :class="active === {{ $i }} ? 'w-8 bg-[#148af4]' : 'w-2.5 bg-gray-300'" class="h-2.5 rounded-full transition-all duration-300" aria-label="Go to slide {{ $i + 1 }}"></button>
                    @endforeach
                </div>
                <div class="flex items-center gap-3">
                    <button @click="prev()" class="w-11 h-11 rounded-full border border-gray-200 flex items-center justify-center text-navy hover:bg-navy hover:text-white transition-colors" aria-label="Previous">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"/></svg>
                    </button>
                    <button @click="next()" class="w-11 h-11 rounded-full border border-gray-200 flex items-center justify-center text-navy hover:bg-navy hover:text-white transition-colors" aria-label="Next">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 8. PLANNING / INSTALLATION STRIP --}}
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.85) 15%, rgba(20,138,244,0.3) 55%, transparent 100%);"></div>
    </div>
    <div class="relative z-10 px-10 lg:px-16 py-10 lg:py-14" style="width:100%; max-width:60%;">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Room Planning</p>
        <h2 class="font-heading font-bold leading-tight mb-4">
            <span class="text-white text-3xl lg:text-5xl block">Build the washer decision</span>
            <span class="text-white text-3xl lg:text-5xl block">around the <span style="color:#011E41;">room, workflow</span></span>
            <span class="text-white text-3xl lg:text-5xl block">and <span style="color:#011E41;">support</span></span>
        </h2>
        <p class="font-body text-white text-base lg:text-lg leading-relaxed mb-6 max-w-xl">
            A washer should fit the room, the workflow and the pressure placed on it every day. Irish Laundry Systems connects capacity, utilities, access, drying pressure, installation and support before the equipment decision is made.
        </p>
        <div class="flex items-center flex-wrap gap-x-5 gap-y-2 mb-7">
            @foreach(['Room fit', 'Utilities and access', 'Capacity and drying pressure'] as $i => $pt)
            @if($i > 0)<span class="text-white/40">|</span>@endif
            <span class="font-body text-white text-sm font-bold">{{ $pt }}</span>
            @endforeach
        </div>
        <a href="{{ route('request-assessment') }}"
           class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
            Request Equipment Advice
        </a>
    </div>
</section>

{{-- 9. PRODUCT FINDER / WASHER RANGE --}}
<section id="washer-range" class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Commercial Washer Range</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-3">
                Compare washer options around <span style="color:#148af4;">capacity, cost and support</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Start with capacity, then connect the washer decision to room layout, utilities, detergent use, drying pressure, installation and long-term support.
            </p>
        </div>

        {{-- Washer families — one card per range, filterable by capacity and type --}}
        @php
        $washerFamilies = [
            ['name' => 'WS6 — Line 6000 High-Spin Washer', 'fit' => 'Line 6000 high-spin commercial washer across the full capacity range for busy, high-output laundry rooms.', 'kg' => ['8','9','11','14','20','28','35'], 'capLabel' => '8–35 kg', 'models' => 'WS6-8 → WS6-35', 'type' => 'Line 6000', 'img' => '/images/equipment/commercialwasher.webp'],
            ['name' => 'WN6 — Line 6000 Normal-Spin Washer', 'fit' => 'Line 6000 normal-spin commercial washer across the same capacity range for everyday wash demand.', 'kg' => ['8','9','11','14','20','28','35'], 'capLabel' => '8–35 kg', 'models' => 'WN6-8 → WN6-35', 'type' => 'Line 6000', 'img' => '/images/equipment/commercialwasher.webp'],
            ['name' => 'W4-Series Washer-Extractor', 'fit' => 'High-capacity washer-extractors for heavy-duty and industrial laundry output.', 'kg' => ['40+'], 'capLabel' => '40 kg+', 'models' => 'W4400H, W4600H, W4850H, W41100H', 'type' => 'Washer-Extractor', 'img' => '/images/equipment/line6000-barrier-washer.webp'],
            ['name' => 'Quickwash QWC', 'fit' => 'Compact quick-wash machine for fast turnaround where space is limited.', 'kg' => [], 'capLabel' => 'Compact', 'models' => 'Quickwash QWC', 'type' => 'Compact', 'img' => '/images/equipment/commercialwasher.webp'],
            ['name' => 'PW9C', 'fit' => 'Compact professional washer for smaller commercial laundry needs.', 'kg' => ['9'], 'capLabel' => '9 kg', 'models' => 'PW9C', 'type' => 'Compact', 'img' => '/images/equipment/commercialwasher.webp'],
        ];
        $capacityFilters = ['all'=>'All', '8'=>'8 kg', '9'=>'9 kg', '11'=>'11 kg', '14'=>'14 kg', '20'=>'20 kg', '28'=>'28 kg', '35'=>'35 kg', '40+'=>'40 kg+'];
        $typeFilters = ['all'=>'All ranges', 'Line 6000'=>'Line 6000', 'Washer-Extractor'=>'Washer-Extractor', 'Compact'=>'Compact'];
        $familiesJs = array_map(fn($f) => ['kg' => $f['kg'], 'type' => $f['type']], $washerFamilies);
        @endphp

        <div x-data="{ kg:'all', type:'all', families: {{ \Illuminate\Support\Js::from($familiesJs) }} }">

            {{-- Filter bar --}}
            <div class="bg-bg border border-gray-100 rounded-2xl p-6 lg:p-8 mb-10 space-y-5">
                <div class="flex flex-col lg:flex-row lg:items-center gap-3">
                    <span class="font-heading font-bold text-navy text-sm w-36 flex-shrink-0">Capacity (kg)</span>
                    <div class="flex flex-wrap gap-2">
                        @foreach($capacityFilters as $val => $lbl)
                        <button type="button" @click="kg='{{ $val }}'" :class="kg==='{{ $val }}' ? 'bg-[#148af4] text-white border-[#148af4]' : 'bg-white text-gray-600 border-gray-200 hover:border-[#148af4] hover:text-[#148af4]'" class="font-body text-sm border px-4 py-2 rounded-full transition-colors">{{ $lbl }}</button>
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row lg:items-center gap-3">
                    <span class="font-heading font-bold text-navy text-sm w-36 flex-shrink-0">Range / Type</span>
                    <div class="flex flex-wrap gap-2">
                        @foreach($typeFilters as $val => $lbl)
                        <button type="button" @click="type='{{ $val }}'" :class="type==='{{ $val }}' ? 'bg-[#148af4] text-white border-[#148af4]' : 'bg-white text-gray-600 border-gray-200 hover:border-[#148af4] hover:text-[#148af4]'" class="font-body text-sm border px-4 py-2 rounded-full transition-colors">{{ $lbl }}</button>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- One card per washer family --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($washerFamilies as $f)
                <div x-show="(kg==='all' || {{ \Illuminate\Support\Js::from($f['kg']) }}.includes(kg)) && (type==='all' || type==={{ \Illuminate\Support\Js::from($f['type']) }})" class="bg-white border border-gray-100 rounded-2xl overflow-hidden flex flex-col shadow-card">
                    <div class="flex items-center justify-center p-8 bg-bg" style="height:240px;">
                        <img src="{{ $f['img'] }}" alt="{{ $f['name'] }}" class="max-h-full w-auto object-contain">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="font-body text-xs font-bold text-[#148af4] bg-[#148af4]/10 px-2.5 py-1 rounded-full">{{ $f['type'] }}</span>
                            <span class="font-body text-xs text-gray-500">{{ $f['capLabel'] }}</span>
                        </div>
                        <h3 class="font-heading font-bold text-navy text-xl mb-2">{{ $f['name'] }}</h3>
                        <p class="font-body text-gray-500 text-sm leading-relaxed mb-4">{{ $f['fit'] }}</p>
                        @if(count($f['kg']))
                        <div class="flex flex-wrap gap-1.5 mb-4">
                            @foreach($f['kg'] as $k)
                            <span class="font-body text-xs text-navy border border-gray-200 px-2.5 py-1 rounded-full">{{ $k === '40+' ? '40 kg+' : $k.' kg' }}</span>
                            @endforeach
                        </div>
                        @endif
                        <p class="font-body text-xs text-gray-400 mb-6">{{ $f['models'] }}</p>
                        <div class="flex flex-wrap items-center gap-3 mt-auto">
                            <a href="{{ route('request-assessment') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-5 py-3 rounded-lg text-xs transition-colors">Request Advice</a>
                            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-5 py-3 rounded-lg text-xs transition-colors">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Empty state --}}
            <div x-show="!families.some(f => (kg==='all' || f.kg.includes(kg)) && (type==='all' || f.type===type))" x-cloak class="text-center py-12">
                <p class="font-body text-gray-500 text-base">No washers match that combination. <a href="{{ route('contact') }}" class="text-[#148af4] font-bold hover:underline">Talk to our team</a> and we'll find the right fit.</p>
            </div>

        </div>

        <p class="font-body text-gray-500 text-sm leading-relaxed mt-8 max-w-3xl">
            Not sure which model fits? Irish Laundry Systems can assess capacity, room setup, rental, installation and support options before a final recommendation.
        </p>
    </div>
</section>

{{-- 10. CONNECTED SERVICE ROUTES --}}
<section class="py-16 lg:py-20 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Connected Support</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-3">
                Support routes that keep <span style="color:#148af4;">washer decisions moving</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Commercial washer performance depends on more than the first installation. Irish Laundry Systems connects equipment access, planned maintenance, repairs and aftercare around the way the laundry room operates.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                [
                    'title' => 'Equipment Rental',
                    'text'  => 'Lower upfront cost for washer replacement, capacity planning or expansion where rental is the right fit.',
                    'cta'   => 'See Rental Options',
                    'route' => route('rental'),
                    'img'   => '/images/healthcare/commercial-industrial.jpg',
                    'pos'   => 'center center',
                ],
                [
                    'title' => 'Preventive Maintenance',
                    'text'  => 'Planned washer servicing to reduce surprise repair pressure and keep equipment condition visible.',
                    'cta'   => 'View Maintenance Options',
                    'route' => route('service-contracts'),
                    'img'   => '/images/healthcare/service-contracts-hero.png',
                    'pos'   => '90% 35%',
                ],
                [
                    'title' => 'Repairs &amp; Call-outs',
                    'text'  => 'Service and breakdown support when washer faults interrupt wash flow, staff routines or daily output.',
                    'cta'   => 'Request Call-out',
                    'route' => route('repairs'),
                    'img'   => '/images/healthcare/repairs-callouts.jpg',
                    'pos'   => '50% 35%',
                ],
                [
                    'title' => 'Support &amp; Aftercare',
                    'text'  => 'Service history, follow-up guidance and parts access where needed after installation, rental, repair or inspection.',
                    'cta'   => 'Explore Support Options',
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
                    <h3 class="font-heading font-bold text-white text-xl lg:text-2xl leading-tight mb-4 whitespace-nowrap">{!! $card['title'] !!}</h3>
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

{{-- 11. RENTAL / CAPITAL PRESSURE STRIP --}}
@include('components.why-choose-strip', [
    'headingLine1' => 'Keep laundry moving with',
    'headingLine2' => '<span style="color:#148af4;">lower upfront cost</span>',
    'body'         => 'For sites facing washer replacement, capacity needs or ageing equipment, rental can keep the laundry room moving without turning every equipment decision into one large capital purchase.',
    'miniPoints'   => ['Lower upfront cost', 'Installation and support available', 'Service and breakdown support included under rental terms'],
    'miniNowrap'   => true,
])

{{-- 12. COMPACT AFTER-INSTALLATION SUPPORT BAND --}}
<section class="py-12 lg:py-16 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-7">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">After Installation</p>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-3">
                    Keep washer decisions <span style="color:#148af4;">connected after installation</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-5 max-w-2xl">
                    Irish Laundry Systems connects planned maintenance, service history, service and breakdown support and parts access where needed, so washer decisions stay clear after installation, rental, repair or inspection.
                </p>
                <div class="flex items-center flex-wrap gap-x-5 gap-y-2">
                    @foreach(['Planned maintenance', 'Service history', 'Service and breakdown support', 'Parts access where needed'] as $i => $pt)
                    @if($i > 0)<span class="text-gray-300">|</span>@endif
                    <span class="font-body text-navy text-sm font-bold">{{ $pt }}</span>
                    @endforeach
                </div>
            </div>
            <div class="lg:col-span-5 flex lg:justify-end">
                <a href="{{ route('parts-aftercare') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-heading font-bold text-sm px-6 py-4 rounded-lg transition-colors tracking-wide">
                    Explore Support &amp; Aftercare
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- 13. TESTIMONIAL MODULE --}}
@include('components.testimonials', [
    'eyebrow'    => 'Customer Trust',
    'heading'    => 'Trusted support behind <span style="color:#148af4;">commercial laundry decisions</span>',
    'subheading' => 'Commercial washing machine decisions affect cost, workflow, staff routines and daily output. Irish Laundry Systems is trusted by organisations that need clear communication, responsive support and equipment knowledge after the machine is on site.',
])

{{-- 14. TRUSTED BY LOGO STRIP --}}
@include('components.proof-bar')

{{-- 15. FAQ --}}
@include('components.faq', [
    'eyebrow' => 'Commercial Washer FAQs',
    'heading' => 'Clear answers before the <span style="color:#148af4;">washer decision</span>',
    'faqs' => [
        ['question' => 'What size commercial washing machine do I need?', 'answer' => 'The right size depends on daily laundry volume, textile type, peak demand, room layout, utilities and drying capacity. Irish Laundry Systems can assess the site before recommending a washer range or model.'],
        ['question' => 'Can I rent a commercial washing machine?', 'answer' => 'Yes. Rental may be suitable for sites looking for lower upfront cost, replacement support or capacity expansion. Service and breakdown support is included under rental terms.'],
        ['question' => 'Do you install commercial washing machines?', 'answer' => 'Yes. Irish Laundry Systems supplies, installs and supports commercial laundry equipment across Ireland.'],
        ['question' => 'Do you provide service and breakdown support?', 'answer' => 'Yes. Service and breakdown support is available, with planned maintenance and aftercare options for equipment already on site.'],
        ['question' => 'What is the difference between Automatic Savings and Integrated Savings?', 'answer' => 'Automatic Savings adjusts water intake to the actual load. Integrated Savings shows the load in real time to avoid underloading and overloading.'],
        ['question' => 'Can washer choice reduce drying pressure?', 'answer' => 'Yes. High-spin washer selection and Power Balance can reduce moisture retention before drying, protecting laundry flow and reducing pressure on the drying stage.'],
        ['question' => 'Are Line 6000 washers suitable for healthcare or care facilities?', 'answer' => 'Selected Line 6000 washer options can support hygiene-focused and high-demand laundry environments when matched to the correct process, room setup and support plan.'],
    ],
])

{{-- 15b. RESOURCES — Download + Discover --}}
<section class="py-16 lg:py-24 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Resources</p>
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight">Brochures, guides and useful reading</h2>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">

            {{-- Download --}}
            <div class="bg-navy rounded-2xl p-6 lg:p-8">
                <h4 class="font-heading font-bold text-white text-base mb-4">Download</h4>
                <ul class="space-y-4">
                    @foreach([
                        ['label' => 'Line 6000 Washers &amp; Dryers brochure',           'file' => 'EPR-brochure-Line 6000 Evolution Barrier Washers-20241119-EN.pdf'],
                        ['label' => 'Discover the full range of Ecolabel Detergents',     'file' => ''],
                        ['label' => 'Line 6000 High Spin Washers &amp; Heat Pump Dryers', 'file' => 'EPR-Line6000-DryersBrochure-01072025_EN.pdf'],
                    ] as $pdf)
                    <li>
                        @if($pdf['file'])
                        <a href="/pdfs/{{ $pdf['file'] }}" target="_blank" download class="flex items-start gap-2 font-body text-sm text-white/80 hover:text-white transition-colors">
                            <svg class="w-4 h-4 flex-shrink-0 mt-0.5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                            {!! $pdf['label'] !!}
                        </a>
                        @else
                        <span class="flex items-start gap-2 font-body text-sm text-white/40">
                            <svg class="w-4 h-4 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                            {!! $pdf['label'] !!}
                        </span>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Discover --}}
            <div class="bg-white border border-gray-200 rounded-2xl p-6 lg:p-8">
                <h4 class="font-heading font-bold text-navy text-base mb-4">Discover</h4>
                <ul class="space-y-4">
                    @foreach([
                        ['label' => "What's in your detergents and cleaning products?",        'href' => '#'],
                        ['label' => 'Ensuring Profitability With Efficient On-Premises Laundry', 'href' => '#'],
                        ['label' => 'Essentia: the heart of customer service',                   'href' => route('contact')],
                    ] as $link)
                    <li>
                        <a href="{{ $link['href'] }}" class="flex items-start gap-2 font-body text-sm text-navy hover:text-orange font-bold transition-colors">
                            <svg class="w-4 h-4 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                            {{ $link['label'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</section>

{{-- 16. FINAL CTA --}}
<section class="py-16 lg:py-24" style="background-color:#011E41;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 text-center">
        <h2 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-4 max-w-4xl mx-auto">
            Need the <span style="color:#148af4;">right washer decision</span> for your laundry room?
        </h2>
        <p class="font-body text-white/80 text-base lg:text-lg leading-relaxed mb-8 max-w-2xl mx-auto">
            Talk to Irish Laundry Systems about washer capacity, running cost pressure, installation, rental, maintenance and support options.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}"
               class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                Talk to Our Team
            </a>
            <a href="{{ route('request-assessment') }}"
               class="inline-flex items-center justify-center gap-2 border-2 border-white/60 hover:border-white text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                Request Equipment Advice
            </a>
        </div>
    </div>
</section>

@endsection
