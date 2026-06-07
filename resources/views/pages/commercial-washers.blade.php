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
                <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-6">
                    Choose commercial washers around <span style="color:#148af4;">daily demand, running costs and long-term support</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
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
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance">
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

{{-- 5. LIFE-CYCLE COST FEATURE --}}
<section class="py-16 lg:py-24 overflow-hidden" style="background-color:#011E41;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            {{-- Left: copy --}}
            <div class="reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Life-Cycle Costs</p>
                <h2 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight text-balance mb-5">
                    Look beyond purchase price to the <span style="color:#148af4;">costs that keep repeating</span>
                </h2>
                <p class="font-body text-white/75 text-base leading-relaxed mb-8 max-w-xl">
                    Purchase price is only the first part of a washer decision. Over the life of the equipment, chemicals, energy and water carry the larger cost pressure, so the right washer choice should be made around daily use, not just initial purchase.
                </p>
                <a href="{{ route('request-assessment') }}"
                   class="inline-flex items-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    Request Equipment Advice
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            {{-- Right: ILS life-cycle infographic (iceberg metaphor, recreated in ILS style) --}}
            <div class="reveal reveal-right">
                <div class="bg-white/5 border border-white/10 rounded-3xl p-8 lg:p-10">
                    <div class="flex items-center gap-6 lg:gap-8">
                        <svg viewBox="0 0 220 260" class="w-36 lg:w-44 h-auto flex-shrink-0" fill="none" aria-hidden="true">
                            <line x1="6" y1="92" x2="214" y2="92" stroke="#148af4" stroke-width="1.5" stroke-dasharray="5 4" opacity="0.6"/>
                            <polygon points="110,26 140,92 80,92" fill="#bfe1fb"/>
                            <polygon points="80,92 140,92 124,150 110,212 95,242 84,170" fill="#1f5fa6"/>
                            <polygon points="80,92 110,92 95,242 84,170" fill="#163f6e"/>
                        </svg>
                        <div class="flex-1 min-w-0">
                            <div class="mb-4">
                                <div class="font-heading font-bold text-[#148af4] text-4xl lg:text-5xl leading-none">10%</div>
                                <div class="font-body text-white/70 text-sm mt-1">Up-front investment</div>
                            </div>
                            <div class="mb-5">
                                <div class="font-heading font-bold text-white text-5xl lg:text-6xl leading-none">90%</div>
                                <div class="font-body text-white/70 text-sm mt-1">Life cycle costs</div>
                            </div>
                            <div class="flex flex-wrap gap-x-5 gap-y-2 pt-4 border-t border-white/10">
                                @foreach([
                                    ['t' => 'Chemicals', 'd' => 'M10 3h4v3l3 6.5V19a2 2 0 01-2 2H9a2 2 0 01-2-2v-6.5L10 6V3z'],
                                    ['t' => 'Energy',    'd' => 'M13 3 4 14h7l-1 7 9-11h-7l1-7z'],
                                    ['t' => 'Water',     'd' => 'M12 3c4 5 6 8 6 11a6 6 0 11-12 0c0-3 2-6 6-11z'],
                                ] as $sp)
                                <span class="inline-flex items-center gap-1.5 font-body text-white/90 text-sm font-semibold">
                                    <svg class="w-4 h-4 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $sp['d'] }}"/></svg>
                                    {{ $sp['t'] }}
                                </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- 6. FINANCIAL / OPERATIONAL PERFORMANCE --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Financial Performance</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Choose washers around the <span style="color:#148af4;">costs your laundry room carries every day</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                A washer decision affects more than the wash cycle. Operational expenditure, detergent use, water and energy waste, drying pressure and staff productivity all shape the real cost of keeping laundry moving.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-4">
            @foreach([
                ['title' => 'Up to 40% lower operational expenditure', 'copy' => 'Electrolux Professional Line 6000 washer technologies can reduce operational expenditure by up to 40% through better utilisation.'],
                ['title' => 'Over 30% detergent cost savings',         'copy' => 'Efficient Dosing can reduce detergent cost pressure where specified, while supporting better control of the wash process.'],
                ['title' => 'Water, energy and load control',          'copy' => 'Automatic Savings and Integrated Savings support better load control, reducing water, energy and cycle waste.'],
                ['title' => 'Time and money saved before drying',      'copy' => 'Power Balance lowers moisture retention before drying, reducing pressure on the drying stage and helping protect laundry flow.'],
                ['title' => '25% productivity increase',               'copy' => 'Electrolux ergonomic material cites a 25% productivity increase, alongside a 75% decrease in sick days and 59% reduction in work-related musculoskeletal disorders.'],
            ] as $card)
            <div class="bg-bg border border-gray-100 rounded-2xl p-6 flex flex-col h-full col-span-1">
                <div class="w-10 h-1 rounded-full bg-[#148af4] mb-4"></div>
                <h3 class="font-heading font-bold text-navy text-base leading-snug mb-2">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $card['copy'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 7. TECHNICAL PROOF --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Technical Proof</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Washer features that support <span style="color:#148af4;">capacity, control and daily handling</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Selected Electrolux Professional features support load control, detergent accuracy, clearer operation, stronger extraction and easier daily handling when matched to the right laundry room.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-4">
            @foreach([
                ['icon' => '30', 'title' => 'Automatic Savings',              'copy' => 'Water intake adjusted to the actual load.', 'badge' => 'Automatic Savings'],
                ['icon' => '34', 'title' => 'Integrated Savings',             'copy' => 'Real-time load visibility to avoid underloading and overloading.', 'badge' => 'Integrated Savings'],
                ['icon' => '26', 'title' => 'Intelligent / Efficient Dosing', 'copy' => 'Detergent control linked to load weight and cycle needs.', 'badge' => 'Efficient Dosing'],
                ['icon' => '16', 'title' => 'Power Balance',                  'copy' => 'Real-time extraction control for stronger dewatering and lower moisture retention before drying.', 'badge' => 'Power Balance'],
                ['icon' => '5',  'title' => 'ClarusVibe and CompassPro',       'copy' => 'Clearer programme selection, editable programmes and easier operator control.', 'badge' => 'CompassPro'],
            ] as $card)
            <div class="bg-white border border-gray-100 rounded-2xl p-6 flex flex-col items-center text-center gap-3 shadow-card col-span-1">
                <div class="flex items-center justify-center h-16">
                    <img src="/images/icons/{{ $card['icon'] }}.png" alt="" class="w-16 h-16 object-contain">
                </div>
                <h3 class="font-heading font-bold text-navy text-sm leading-snug">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-500 text-xs leading-relaxed flex-1">{{ $card['copy'] }}</p>
                <span class="font-body text-[10px] font-bold uppercase tracking-wide text-[#148af4] bg-[#148af4]/10 px-2.5 py-1 rounded-full">{{ $card['badge'] }}</span>
            </div>
            @endforeach
        </div>

        {{-- Secondary proof chips --}}
        <div class="flex flex-wrap items-center gap-2 mt-6">
            <span class="font-body text-xs text-gray-400 mr-1">Also available:</span>
            @foreach(['ERGOCERT', 'Global Hygiene Advanced', 'Validated hygiene options'] as $chip)
            <span class="font-body text-xs font-semibold text-navy border border-gray-200 px-3 py-1.5 rounded-full">{{ $chip }}</span>
            @endforeach
        </div>
    </div>
</section>

{{-- 8. RANGE TEASERS CAROUSEL --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-2">Washer Range Starting Points</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
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

{{-- 9. PLANNING / INSTALLATION STRIP --}}
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.85) 15%, rgba(20,138,244,0.3) 55%, transparent 100%);"></div>
    </div>
    <div class="relative z-10 px-10 lg:px-16 py-16 lg:py-24" style="width:100%; max-width:60%;">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Room Planning</p>
        <h2 class="font-heading font-bold text-4xl lg:text-5xl leading-tight text-balance mb-4">
            <span class="text-white text-4xl lg:text-5xl">Build the washer decision</span>
            <span class="text-white text-4xl lg:text-5xl">around the <span style="color:#011E41;">room, workflow</span></span>
            <span class="text-white text-4xl lg:text-5xl">and <span style="color:#011E41;">support</span></span>
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6 max-w-xl">
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

{{-- 10. RESOURCES / DOWNLOADS (before the Product Finder) --}}
<section class="py-16 lg:py-24 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">

            {{-- Box 1 — Navy downloads --}}
            <div class="bg-navy rounded-2xl p-7 lg:p-9 flex flex-col">
                <h3 class="font-heading font-bold text-white text-xl lg:text-2xl mb-2">Official Electrolux Professional Downloads</h3>
                <p class="font-body text-white/70 text-sm leading-relaxed mb-6">Access selected product brochures and technical resources before comparing washer options.</p>
                <ul class="space-y-3">
                    @foreach([
                        ['label' => 'Line 6000 Washers &amp; Dryers brochure', 'file' => 'EPR-Line6000-DryersBrochure-01072025_EN.pdf'],
                        ['label' => 'Line 6000 High Spin Washers leaflet',     'file' => ''],
                        ['label' => 'Relevant washer product resources',       'file' => ''],
                    ] as $pdf)
                    <li>
                        @if($pdf['file'])
                        <a href="/pdfs/{{ $pdf['file'] }}" target="_blank" download class="flex items-center gap-2.5 font-body text-sm text-white/85 hover:text-white transition-colors">
                            <svg class="w-4 h-4 flex-shrink-0 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                            {!! $pdf['label'] !!}
                        </a>
                        @else
                        <span class="flex items-center gap-2.5 font-body text-sm text-white/40">
                            <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                            {!! $pdf['label'] !!} <span class="text-[10px] uppercase tracking-wide">(on request)</span>
                        </span>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Box 2 — Related guidance --}}
            <div class="bg-white border border-gray-200 rounded-2xl p-7 lg:p-9 flex flex-col">
                <h3 class="font-heading font-bold text-navy text-xl lg:text-2xl mb-2">Related Equipment Guidance</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-6">Explore connected support routes before making a washer decision.</p>
                <ul class="space-y-3">
                    @foreach([
                        ['label' => 'Equipment Rental',       'href' => route('rental')],
                        ['label' => 'Preventive Maintenance', 'href' => route('service-contracts')],
                        ['label' => 'Support &amp; Aftercare', 'href' => route('parts-aftercare')],
                        ['label' => 'Tumble Dryers',          'href' => route('equipment.category', 'tumble-dryers')],
                        ['label' => 'Wet Cleaning',           'href' => route('equipment.category', 'wet-cleaning')],
                    ] as $link)
                    <li>
                        <a href="{{ $link['href'] }}" class="flex items-center gap-2.5 font-body text-sm text-navy hover:text-orange font-semibold transition-colors">
                            <svg class="w-4 h-4 flex-shrink-0 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                            {!! $link['label'] !!}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</section>

{{-- 11. PRODUCT FINDER / WASHER RANGE --}}
<section id="washer-range" class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Commercial Washer Range</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Compare washer options around <span style="color:#148af4;">capacity, cost and support</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Start with capacity, then connect the washer decision to room layout, utilities, detergent use, drying pressure, installation and long-term support.
            </p>
        </div>

        {{-- Washer families — curated by ILS, one card/image per range, filterable by capacity and profile --}}
        @php
            $washerFamilies = [
                ['name' => 'WS6 — Line 6000 High-Spin Washer', 'fit' => 'Line 6000 high-spin commercial washer across the full capacity range for busy, high-output laundry rooms.', 'kg' => ['8','9','11','14','20','28','35'], 'capLabel' => '8–35 kg', 'models' => 'WS6-8 → WS6-35', 'type' => 'Line 6000', 'img' => '/images/equipment/commercialwasher.webp', 'badges' => ['Automatic Savings','Power Balance','ClarusVibe','ERGOCERT']],
                ['name' => 'WN6 — Line 6000 Normal-Spin Washer', 'fit' => 'Line 6000 normal-spin commercial washer across the same capacity range for everyday wash demand.', 'kg' => ['8','9','11','14','20','28','35'], 'capLabel' => '8–35 kg', 'models' => 'WN6-8 → WN6-35', 'type' => 'Line 6000', 'img' => '/images/equipment/commercialwasher.webp', 'badges' => ['Automatic Savings','Integrated Savings','CompassPro']],
                ['name' => 'W4-Series Washer-Extractor', 'fit' => 'High-capacity washer-extractors for heavy-duty and industrial laundry output.', 'kg' => ['40+'], 'capLabel' => '40 kg+', 'models' => 'W4400H, W4600H, W4850H, W41100H', 'type' => 'Washer-Extractor', 'img' => '/images/equipment/line6000-barrier-washer.webp', 'badges' => ['Power Balance','CompassPro','ERGOCERT']],
                ['name' => 'Quickwash QWC', 'fit' => 'Compact quick-wash machine for fast turnaround where space is limited.', 'kg' => [], 'capLabel' => 'Compact', 'models' => 'Quickwash QWC', 'type' => 'Compact', 'img' => '/images/equipment/commercialwasher.webp', 'badges' => ['Efficient Dosing']],
                ['name' => 'PW9C', 'fit' => 'Compact professional washer for smaller commercial laundry needs.', 'kg' => ['9'], 'capLabel' => '9 kg', 'models' => 'PW9C', 'type' => 'Compact', 'img' => '/images/equipment/commercialwasher.webp', 'badges' => ['CompassPro']],
            ];
            $capacityFilters = ['all'=>'All', '8'=>'8 kg', '9'=>'9 kg', '11'=>'11 kg', '14'=>'14 kg', '20'=>'20 kg', '28'=>'28 kg', '35'=>'35 kg', '40+'=>'40 kg+'];
            $typeFilters = ['all'=>'All ranges', 'Line 6000'=>'Line 6000', 'Washer-Extractor'=>'Washer-Extractor', 'Compact'=>'Compact'];
            $familiesJs = array_map(fn($f) => ['kg' => $f['kg'], 'type' => $f['type']], $washerFamilies);
        @endphp

        <div x-data="{ kg:'all', type:'all', families: {{ \Illuminate\Support\Js::from($familiesJs) }} }">

            {{-- Filter bar --}}
            <div class="bg-bg border border-gray-100 rounded-2xl p-6 lg:p-8 mb-10 space-y-5">
                <div class="flex flex-col lg:flex-row lg:items-start gap-3">
                    <span class="font-heading font-bold text-navy text-sm w-36 flex-shrink-0 lg:pt-2">Capacity (kg)</span>
                    <div class="flex flex-wrap gap-2">
                        @foreach($capacityFilters as $val => $lbl)
                        <button type="button" @click="kg='{{ $val }}'" :class="kg==='{{ $val }}' ? 'bg-[#148af4] text-white border-[#148af4]' : 'bg-white text-gray-600 border-gray-200 hover:border-[#148af4] hover:text-[#148af4]'" class="font-body text-sm border px-4 py-2 rounded-full transition-colors">{{ $lbl }}</button>
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row lg:items-center gap-3">
                    <span class="font-heading font-bold text-navy text-sm w-36 flex-shrink-0">Machine Profile</span>
                    <div class="flex flex-wrap gap-2">
                        @foreach($typeFilters as $val => $lbl)
                        <button type="button" @click="type='{{ $val }}'" :class="type==='{{ $val }}' ? 'bg-[#148af4] text-white border-[#148af4]' : 'bg-white text-gray-600 border-gray-200 hover:border-[#148af4] hover:text-[#148af4]'" class="font-body text-sm border px-4 py-2 rounded-full transition-colors">{{ $lbl }}</button>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- One card per family --}}
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
                        @if(!empty($f['badges']))
                        <div class="flex flex-wrap gap-1.5 mb-4">
                            @foreach($f['badges'] as $b)
                            <span class="font-body text-[10px] font-bold uppercase tracking-wide text-[#148af4] bg-[#148af4]/10 px-2 py-1 rounded-full">{{ $b }}</span>
                            @endforeach
                        </div>
                        @endif
                        <p class="font-body text-xs text-gray-400 mb-6">{{ $f['models'] }}</p>
                        <div class="flex flex-wrap items-center gap-3 mt-auto">
                            <a href="{{ route('request-assessment') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-5 py-3 rounded-lg text-xs transition-colors">Request Advice on This Model</a>
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

{{-- 12. CONNECTED SERVICE ROUTES --}}
<section class="py-16 lg:py-20 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Connected Support</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
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
                    <h3 class="font-heading font-bold text-white text-xl lg:text-2xl leading-tight mb-4">{!! $card['title'] !!}</h3>
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

{{-- 13. RENTAL / CAPITAL PRESSURE STRIP --}}
@include('components.why-choose-strip', [
    'headingLine1' => 'Keep laundry moving with',
    'headingLine2' => '<span style="color:#148af4;">lower upfront cost</span>',
    'body'         => 'For sites facing washer replacement, capacity needs or ageing equipment, rental can keep the laundry room moving without turning every equipment decision into one large capital purchase.',
    'miniPoints'   => ['Lower upfront cost', 'Installation and support available', 'Service and breakdown support included under rental terms'],
    'miniNowrap'   => true,
])

{{-- 14. COMPACT AFTER-INSTALLATION SUPPORT BAND --}}
<section class="py-12 lg:py-16 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-7">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">After Installation</p>
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
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

{{-- 15. TESTIMONIAL MODULE --}}
@include('components.testimonials', [
    'eyebrow'    => 'Customer Trust',
    'heading'    => 'Trusted support behind <span style="color:#148af4;">commercial laundry decisions</span>',
    'subheading' => 'Commercial washing machine decisions affect cost, workflow, staff routines and daily output. Irish Laundry Systems is trusted by organisations that need clear communication, responsive support and equipment knowledge after the machine is on site.',
])

{{-- 16. TRUSTED BY LOGO STRIP --}}
@include('components.proof-bar')

{{-- 17. FAQ --}}
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

{{-- 18. FINAL CTA --}}
<section class="py-16 lg:py-24" style="background-color:#011E41;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 text-center">
        <h2 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight text-balance mb-4 max-w-4xl mx-auto">
            Need the <span style="color:#148af4;">right washer decision</span> for your laundry room?
        </h2>
        <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl mx-auto">
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
