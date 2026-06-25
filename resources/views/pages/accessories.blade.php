@extends('layouts.app')

@section('pageTitle', 'Laundry Dosing Systems Ireland | Detergents & Accessories')

@section('meta')
<meta name="description" content="Control detergent use, wash results and daily laundry costs with Electrolux Professional dosing systems, eco-detergents, storage and accessories, supplied and supported by Irish Laundry Systems.">
@endsection

@section('content')

{{-- 1. HERO --}}
<section class="relative overflow-hidden flex flex-col lg:!h-[720px]" style="height:auto; min-height:560px;">
    <img src="/images/sectors/Line 6000 solutions products_72dpi.jpg" alt="Laundry dosing systems, detergents and accessories"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.75) 42%, rgba(1,30,65,0.35) 65%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 sm:py-20 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-3xl">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Laundry Dosing Systems, Detergents &amp; Accessories</p>
                <h1 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-6">
                    Control detergent use, wash results and <span style="color:#148af4;">daily laundry costs</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    Irish Laundry Systems supplies and supports Electrolux Professional dosing systems, eco-detergents, detergent storage and original accessories for commercial laundry rooms across Dublin and Ireland. Better dosing and better detergent choice can reduce waste, protect textiles and support equipment condition over time.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Laundry Control Advice
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white hover:border-white/70 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        Ask About Dosing Systems
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
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Hidden Laundry Costs</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    Detergent control is not a <span style="color:#148af4;">small laundry detail</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    Too much detergent, the wrong product or poorly managed chemical storage can lead to wasted product, inconsistent wash results, repeat washing, damaged textiles and avoidable service pressure.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Irish Laundry Systems helps sites choose the right dosing system, detergent, storage and support around the way their laundry is used every day.
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

{{-- 4. FINANCIAL & OPERATIONAL PROOF --}}
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Financial &amp; Operational Proof</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Control the costs <span style="color:#148af4;">built into every wash</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                Detergent use, water, energy, repeat washing, textile quality and maintenance all affect the real cost of a laundry room over time.
            </p>
        </div>

        @include('components.financial-metrics', ['items' => [
            ['icon'=>'30', 'prefix'=>'',          'stat'=>'90%',                'size'=>'text-4xl', 'label'=>'The purchase is only the beginning', 'body'=>'Electrolux Professional highlights that most lifetime laundry cost sits in operation, including energy, water and chemicals.'],
            ['icon'=>'dosing-control', 'prefix'=>'Save over',  'stat'=>'30%',                'size'=>'text-4xl', 'label'=>'Reduce detergent costs', 'body'=>'Efficient Dosing can save over 30% on detergent costs on suitable Electrolux Professional setups.'],
            ['icon'=>'7',  'prefix'=>'',          'stat'=>'Correct<br>dose',    'size'=>'text-2xl', 'label'=>'Reduce detergent overuse', 'body'=>'Automatic dosing supports the right amount of detergent for each cycle, helping reduce waste and keep results consistent.'],
            ['icon'=>'31', 'prefix'=>'',          'stat'=>'Less<br>maintenance','size'=>'text-2xl', 'label'=>'Lower system upkeep', 'labelClass'=>'!ml-0', 'body'=>'Selected systems such as JETSAVE use water-powered pumps with no moving parts or squeeze tubes.'],
            ['icon'=>'7',  'prefix'=>'',          'stat'=>'Better<br>control',  'size'=>'text-2xl', 'label'=>'Protect linen and equipment', 'body'=>'Better chemical control can support wash quality, textile life and equipment condition over time.'],
        ]])
    </div>
</section>

{{-- 5. DOSING INTELLIGENCE FEATURE / TABS (Alpine carousel — main technical/commercial proof) --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Dosing Intelligence</p>
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

{{-- 6. LAUNDRY CONTROL SYSTEM ZIG-ZAG (dose → detergent → storage → support) --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-12 lg:mb-14 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Laundry Control System</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3 lg:whitespace-nowrap">
                Build detergent control into the <span style="color:#148af4;">full laundry setup</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                The best result comes when dosing, detergent choice, storage and service support are planned together.
            </p>
        </div>

        @php
        $controlBlocks = [
            [
                'step' => '01', 'title' => 'Dose correctly',
                'text' => 'Use the right amount of detergent for the load, programme and wash result required.',
                'points' => ['Less overuse', 'Cost control', 'Consistent results'],
                'img' => 'control-01.jpg',
                'd' => 'M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5',
            ],
            [
                'step' => '02', 'title' => 'Choose the correct detergent',
                'text' => 'Match detergent to soil level, fabric type, hygiene needs and customer standards.',
                'points' => ['Eco options', 'Textile care', 'Wash quality'],
                'img' => 'control-02.jpg',
                'd' => 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z',
            ],
            [
                'step' => '03', 'title' => 'Store chemicals properly',
                'text' => 'Keep canisters, pumps and dosing equipment organised, safer and easier to manage.',
                'points' => ['Cleaner room', 'Safer storage', 'Easier handling'],
                'img' => 'control-03.jpg',
                'd' => 'M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z',
            ],
            [
                'step' => '04', 'title' => 'Keep the system supported',
                'text' => 'Use ILS advice, setup support, Preventive Maintenance and aftercare to keep the system working properly.',
                'points' => ['Setup advice', 'Planned support', 'Aftercare'],
                'img' => 'control-04.jpg',
                'd' => 'M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z',
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-20 reveal">
            @foreach($controlBlocks as $i => $blk)
            <div class="flex flex-col items-center text-center relative">
                @if($i < 3)
                <div class="hidden lg:block absolute -right-16 top-8 text-[#148af4]">
                    <svg class="w-24 h-10" viewBox="0 0 120 30" fill="none">
                        <path d="M0 15 L96 15 M78 4 L96 15 L78 26" stroke="#148af4" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                @endif
                <div class="w-full flex justify-center items-center mb-4" style="height:8rem;">
                    <svg class="w-20 h-20 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.4"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $blk['d'] }}"/></svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-base lg:text-lg mb-2">{{ $blk['title'] }}</h3>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">{{ $blk['text'] }}</p>
                <ul class="space-y-1.5">
                    @foreach($blk['points'] as $pt)
                    <li class="font-body font-semibold text-navy text-sm flex items-center justify-center gap-2">
                        <span class="text-[#148af4]">&#9656;</span> {{ $pt }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>

        <div class="mt-10 reveal">
            <a href="{{ route('request-assessment') }}"
               class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                Plan Your Laundry Setup
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

{{-- 7. PRODUCT / RANGE SECTION --}}
<section class="py-16 lg:py-24 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Product Range</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Choose the right dosing, detergent and <span style="color:#148af4;">laundry room support</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                Start with the part of the laundry room that needs better control: dosing accuracy, detergent quality, chemical storage or daily handling.
            </p>
        </div>

        @php
        $rangeCards = [
            [
                'name'    => 'Dosing Systems',
                'topLine' => 'For better detergent control and lower waste',
                'copy'    => 'Automatic dosing systems support accurate chemical use, consistent wash results and clearer cost control.',
                'badges'  => ['Intelligent Dosing', 'Efficient Dosing', 'Multisave', 'JETSAVE / DOSAVE'],
                'cta'     => 'Ask About Dosing Systems',
                'img'     => '/images/healthcare/MultisaveEQUIP.webp',
            ],
            [
                'name'    => 'Eco-Detergents',
                'topLine' => 'For quality wash results and textile care',
                'copy'    => 'Electrolux Professional eco-range detergents support high-quality results, textile care and lower environmental impact where applicable.',
                'badges'  => ['EU Ecolabel', 'Hypoallergenic', 'Dermatologically tested', 'Textile care'],
                'cta'     => 'Ask About Detergents',
                'img'     => '/images/equipment/eco-detergents.webp',
            ],
            [
                'name'    => 'Detergent Storage',
                'topLine' => 'For cleaner chemical organisation',
                'copy'    => 'Detergent Storage keeps canisters organised and can support pumps and dosing systems on selected setups.',
                'badges'  => ['Canister storage', 'Pump support', 'Cleaner room', 'Easier handling'],
                'cta'     => 'Ask About Storage',
                'img'     => '/images/equipment/detergent-storage.webp',
            ],
            [
                'name'    => 'Original Accessories & Consumables',
                'topLine' => 'For daily laundry room support',
                'copy'    => 'Original accessories and consumables support handling, daily use and equipment care over time.',
                'badges'  => ['Baskets', 'Racks & trolleys', 'Dryer balls', 'Cleaning essentials'],
                'cta'     => 'Ask About Accessories',
                'img'     => '/images/equipment/trolleys-and-racks.webp',
            ],
        ];
        @endphp

        <div class="space-y-16 lg:space-y-24">
            @foreach($rangeCards as $i => $card)
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center reveal">

                {{-- Text side --}}
                <div class="{{ $i % 2 === 1 ? 'lg:order-2' : '' }}">
                    <p class="font-body text-xs font-bold uppercase tracking-[0.18em] text-[#148af4] mb-3">{{ $card['topLine'] }}</p>
                    <h3 class="font-heading font-bold text-navy text-3xl sm:text-4xl leading-tight text-balance mb-4">{{ $card['name'] }}</h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6 max-w-xl">{{ $card['copy'] }}</p>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-2.5 mb-8 max-w-xl">
                        @foreach($card['badges'] as $b)
                        <li class="flex items-center gap-2 font-body text-gray-600 text-base">
                            <svg class="w-5 h-5 text-[#148af4] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            {{ $b }}
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-heading font-bold text-sm px-6 py-3.5 rounded-lg transition-colors">
                            {{ $card['cta'] }}
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('request-assessment') }}" class="inline-flex items-center justify-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-heading font-bold text-sm px-6 py-3.5 rounded-lg transition-colors">
                            Request Advice
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>

                {{-- Image side --}}
                <div class="{{ $i % 2 === 1 ? 'lg:order-1' : '' }} flex items-center justify-center">
                    <img src="{{ $card['img'] }}" alt="{{ $card['name'] }}" loading="lazy" decoding="async"
                         class="w-auto object-contain" style="max-height:300px; max-width:100%;">
                </div>

            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 8. ECO-DETERGENTS & CERTIFICATION COMPACT STRIP --}}
<section class="py-12 lg:py-16 bg-gray-50 border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="max-w-3xl mb-10 lg:mb-14 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Eco-Detergents</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-5">
                Certified detergents for <span style="color:#148af4;">quality wash results and textile care</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                Electrolux Professional eco-range detergents are developed for high-quality, safe and effective washing while supporting lower environmental impact.
            </p>
            <div class="flex flex-wrap gap-2 mb-8">
                @foreach(['EU Ecolabel', 'Dermatologically tested', 'Hypoallergenic', 'Textile care'] as $proof)
                <span class="font-body text-xs font-bold uppercase tracking-wide text-navy/70 bg-navy/[0.06] px-3 py-1.5 rounded-full">{{ $proof }}</span>
                @endforeach
            </div>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                Ask About Eco-Detergents
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>

        {{-- Product cards: image + name + navy "Product & Safety Sheet" download block --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-12 lg:gap-y-16 reveal">
            @foreach([
                ['name' => 'L00 – Laundry Eco Degreaser', 'label' => 'L00 Product & Safety Sheet', 'img' => 'l00-laundry-eco-degreaser.webp', 'href' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2022/02/COMBINED-L00-Laundry-Eco-Degreaser.pdf'],
                ['name' => 'L01 – Laundry Eco Powder',    'label' => 'L01 Product & Safety Sheet', 'img' => 'l01-laundry-eco-powder.webp',    'href' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2021/11/COMBINED-L01-Laundry-Eco-Powder.pdf'],
                ['name' => 'L02 – Laundry Eco Wash',      'label' => 'L02 Product & Data Sheet',   'img' => 'l02-laundry-eco-wash.webp',      'href' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2021/11/COMBINED-L02-Laundry-Eco-Wash.pdf'],
                ['name' => 'L03 – Laundry Eco Booster',   'label' => 'L03 Product & Safety Sheet', 'img' => 'l03-laundry-eco-booster.webp',   'href' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2021/11/COMBINED-L03-Laundry-Eco-Booster.pdf'],
                ['name' => 'L04 – Laundry Eco Bleach',    'label' => 'L04 Product & Safety Sheet', 'img' => 'l04-laundry-eco-bleach.webp',    'href' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2021/11/COMBINED-L04-Laundry-Eco-Bleach.pdf'],
                ['name' => 'L05 – Laundry Eco Softener',  'label' => 'L05 Product & Safety Sheet', 'img' => 'l05-laundry-eco-softener.webp',  'href' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2021/11/COMBINED-L05-Laundry-Eco-Softener.pdf'],
            ] as $ex)
            <a href="{{ $ex['href'] }}" target="_blank" rel="noopener"
               class="group flex flex-col text-center">
                <div class="flex items-center justify-center h-64 lg:h-72 mb-5">
                    <img src="{{ asset('images/equipment/'.$ex['img']) }}" alt="{{ $ex['name'] }}"
                         loading="lazy" decoding="async"
                         class="max-h-full w-auto object-contain transition-transform duration-500 group-hover:scale-105">
                </div>
                <h3 class="font-heading font-bold text-navy text-lg lg:text-xl leading-snug mb-3">{{ $ex['name'] }}</h3>
                <span class="mt-auto font-body font-semibold text-[#148af4] text-sm leading-snug group-hover:underline">{{ $ex['label'] }}</span>
            </a>
            @endforeach
        </div>
        <p class="font-body text-gray-400 text-xs mt-5 reveal">Official Electrolux Professional brochures (PDF) &mdash; open in a new tab.</p>
    </div>
</section>

{{-- 9. ACCESSORIES MINI GRID --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Original Accessories &amp; Consumables</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Small details that support <span style="color:#148af4;">easier daily laundry</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Accessories should support handling, storage, cleaning and daily use without taking focus away from dosing and detergent control.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 reveal">
            @foreach([
                ['title' => 'Racks and trolleys',                     'copy' => 'Support movement, storage and daily laundry handling.',  'img' => '/images/equipment/trolleys-and-racks.webp'],
                ['title' => 'Baskets and handling',                   'copy' => 'Make sorting, loading and unloading easier for staff.',   'img' => '/images/equipment/trolley_.webp'],
                ['title' => 'Dryer balls and cleaning essentials',    'copy' => 'Support practical care across daily laundry use.',        'img' => '/images/equipment/dryer-balls.png'],
                ['title' => 'Hygiene tools',                          'copy' => 'Keep the laundry room cleaner and easier to manage.',     'img' => '/images/healthcare/JetsaveEQUIP.webp'],
            ] as $acc)
            <div class="flex flex-col gap-6 h-full">
                <div style="min-height:112px;">
                    <p class="font-heading font-bold text-navy text-2xl leading-snug mb-2">{{ $acc['title'] }}</p>
                    <p class="font-body text-gray-600 text-base leading-relaxed">{{ $acc['copy'] }}</p>
                </div>
                <div class="w-full flex items-end justify-center" style="height:300px;">
                    <img src="{{ $acc['img'] }}" alt="{{ $acc['title'] }}" loading="lazy" decoding="async"
                         class="transition-transform duration-500 hover:-translate-y-2"
                         style="max-width:100%; max-height:280px; width:auto; object-fit:contain;">
                </div>
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy-dark text-white font-heading font-bold text-base px-5 py-4 rounded-lg transition-colors mt-auto">
                    Ask About Accessories
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 10. SERVICE AND SUPPORT OPTIONS (image-cards) --}}
<section class="py-16 lg:py-20 bg-gray-50 border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">ILS Support</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Advice and service for <span style="color:#148af4;">dosing, detergents and laundry room setup</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Irish Laundry Systems can advise, set up and support dosing systems, detergent storage and accessory choices around the equipment already in use.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                [
                    'title' => 'Dosing and detergent advice',
                    'text'  => 'Choose dosing systems, detergents and storage around your washers, load types and daily use.',
                    'cta'   => 'Request Advice',
                    'route' => route('request-assessment'),
                    'img'   => '/images/healthcare/commercial-industrial.jpg',
                    'pos'   => 'center center',
                ],
                [
                    'title' => 'Setup and installation',
                    'text'  => 'Support for dosing systems, detergent storage and laundry room setup where installation planning is needed.',
                    'cta'   => 'Ask About Setup',
                    'route' => route('contact'),
                    'img'   => '/images/equipment/Strip1.jpeg',
                    'pos'   => 'center 30%',
                ],
                [
                    'title' => 'Preventive Maintenance',
                    'text'  => 'Planned maintenance for laundry equipment and dosing systems to reduce avoidable disruption.',
                    'cta'   => 'View Preventive Maintenance',
                    'route' => route('service-contracts'),
                    'img'   => '/images/healthcare/service-contracts-hero.png',
                    'pos'   => '90% 35%',
                ],
                [
                    'title' => 'Support &amp; Aftercare',
                    'text'  => 'Follow-up advice, service history and parts access where dosing or laundry room equipment needs attention.',
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

{{-- 11. COMPACT RESOURCES BAR (matches commercial washers design) --}}
<section class="py-8 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 lg:gap-10">
            @foreach([
                ['title' => 'Detergent Brochures', 'links' => [
                    ['l' => 'L00 Laundry Eco Degreaser', 'h' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2022/02/COMBINED-L00-Laundry-Eco-Degreaser.pdf'],
                    ['l' => 'L01 Laundry Eco Powder',    'h' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2021/11/COMBINED-L01-Laundry-Eco-Powder.pdf'],
                    ['l' => 'L02 Laundry Eco Wash',      'h' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2021/11/COMBINED-L02-Laundry-Eco-Wash.pdf'],
                    ['l' => 'L03 Laundry Eco Booster',   'h' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2021/11/COMBINED-L03-Laundry-Eco-Booster.pdf'],
                    ['l' => 'L04 Laundry Eco Bleach',    'h' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2021/11/COMBINED-L04-Laundry-Eco-Bleach.pdf'],
                    ['l' => 'L05 Laundry Eco Softener',  'h' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2021/11/COMBINED-L05-Laundry-Eco-Softener.pdf'],
                ]],
                ['title' => 'Dosing & Storage', 'links' => [
                    ['l' => 'Dosing Systems', 'h' => route('contact')],
                    ['l' => 'Detergent Storage', 'h' => route('contact')],
                    ['l' => 'Product resources', 'h' => route('resources')],
                ]],
                ['title' => 'Advice & Support', 'links' => [
                    ['l' => 'Request dosing advice', 'h' => route('request-assessment')],
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
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Related Equipment</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Equipment that may need <span style="color:#148af4;">dosing or detergent support</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 reveal">
            @foreach([
                ['title' => 'Commercial Washing Machines', 'copy' => 'For washer setups where detergent choice and dosing accuracy affect results.', 'cta' => 'View Washing Machines', 'route' => route('equipment.category', 'washers'), 'img' => '/images/equipment/commercialwasher.webp', 'box' => 270],
                ['title' => 'Commercial Tumble Dryers',    'copy' => 'For drying capacity and energy use after the wash process.', 'cta' => 'View Dryers', 'route' => route('equipment.category', 'tumble-dryers'), 'img' => '/images/equipment/Tumble-dryers_Heat-Pump_1-1.webp', 'box' => 245],
                ['title' => 'Wet Cleaning Equipment',      'copy' => 'For delicate garment care where detergents, dosing and finishing work together.', 'cta' => 'View Wet Cleaning', 'route' => route('equipment.category', 'wet-cleaning'), 'img' => '/images/equipment/FC48.jpg', 'box' => 260],
                ['title' => 'Commercial Ironers',          'copy' => 'For finishing and flatwork where wash and detergent quality affect the final result.', 'cta' => 'View Ironers', 'route' => route('equipment.category', 'ironers'), 'img' => '/images/equipment/IB623_FRONT_NEW.jpg', 'box' => 300],
            ] as $card)
            <div class="flex flex-col gap-6 h-full">
                <div style="min-height:112px;">
                    <p class="font-heading font-bold text-navy text-2xl leading-snug mb-2">{{ $card['title'] }}</p>
                    <p class="font-body text-gray-600 text-base leading-relaxed">{{ $card['copy'] }}</p>
                </div>
                <div class="w-full flex items-end justify-center" style="height:300px;">
                    <img src="{{ $card['img'] }}" alt="{{ $card['title'] }}"
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
    'eyebrow' => 'Dosing & Detergent FAQs',
    'heading' => 'Questions before choosing <span style="color:#148af4;">dosing systems, detergents or storage</span>',
    'faqs' => [
        ['question' => 'Why does detergent control matter in a commercial laundry?', 'answer' => 'It affects cost, wash quality, textile life, repeat washing and equipment condition.'],
        ['question' => 'What is a laundry dosing system?', 'answer' => 'A dosing system automatically delivers detergent or chemicals into the wash process, using the required amount for the load, programme and result.'],
        ['question' => 'Can automatic dosing reduce detergent costs?', 'answer' => 'Yes, where the selected system and equipment are suitable. Efficient Dosing can save over 30% on detergent costs.'],
        ['question' => 'Can detergent overuse damage linen?', 'answer' => 'Yes. Overdosing can affect wash results and textile condition over time.'],
        ['question' => 'Can poor chemical control affect equipment condition?', 'answer' => 'Poor chemical control can contribute to avoidable equipment issues. Better dosing and detergent choice reduce that pressure.'],
        ['question' => 'What are eco-range detergents?', 'answer' => 'Electrolux Professional eco-range detergents support wash quality, textile care, safety and lower environmental impact, with certification proof where applicable.'],
        ['question' => 'What does Detergent Storage do?', 'answer' => 'Detergent Storage keeps canisters organised and supports a cleaner, safer laundry room.'],
        ['question' => 'Can Irish Laundry Systems advise on existing equipment?', 'answer' => 'Yes. Irish Laundry Systems can review your washers, detergent use, wash results, storage and service needs before recommending the next step.'],
    ],
])

{{-- 14. FINAL CTA / FORM --}}
@include('components.cta-downtime-form', [
    'pageSource' => 'accessories_cta',
    'heading'    => 'Take control of detergent use and <span style="color:#148af4;">laundry room costs</span>',
    'body'       => 'Tell us what equipment you use, what you wash and how detergents are currently managed. Irish Laundry Systems will guide you toward the right dosing, detergent, storage, accessory or support option.',
    'formTitle'  => 'Request Dosing, Detergent & Storage Advice',
    'buttonText' => 'Request Advice',
])

@endsection
