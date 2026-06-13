@extends('layouts.app')

@section('pageTitle', 'Laundry Dosing Systems Ireland | Detergents & Accessories | Irish Laundry Systems')

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
                    <span style="color:#148af4;">Take control of detergent use</span> before it becomes another running cost
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    Better detergent control can change how a laundry room performs every day. Irish Laundry Systems supplies and supports Electrolux Professional dosing systems, detergents, storage and original accessories for sites that want cleaner wash results, less waste and clearer control over daily costs.
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

{{-- 2. UNIVERSAL THIN ELECTROLUX TRUST STRIP --}}
@include('components.partner-strip')

{{-- 3. INTRO / BRIDGE --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Hidden Laundry Costs</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    <span style="color:#148af4;">Detergent control</span> is not a small laundry detail
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    Poor chemical control can add cost in more than one place. Too much detergent, the wrong product or an unmanaged chemical area can lead to wasted product, inconsistent wash results, repeat washing, damaged linen and avoidable service issues over time.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Irish Laundry Systems helps businesses connect the machine, detergent, dosing system, storage and service support around the way the laundry is used every day.
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
<section class="py-12 lg:py-16 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Financial &amp; Operational Proof</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Control the costs that sit <span style="color:#148af4;">inside every wash</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                The machine is only part of the laundry cost. Detergent use, water, energy, repeat washing, linen quality and maintenance all affect the budget over time.
            </p>
        </div>

        @include('components.financial-metrics', ['items' => [
            ['icon'=>'30', 'prefix'=>'',          'stat'=>'90%',                'size'=>'text-4xl', 'label'=>'The purchase is only the beginning',            'body'=>'Electrolux Professional highlights that most lifetime laundry cost sits in ongoing operation, including energy, water and chemicals.'],
            ['icon'=>'39', 'prefix'=>'Save over',  'stat'=>'30%',                'size'=>'text-4xl', 'label'=>'Cut detergent costs where suitable',           'body'=>'Efficient Dosing can save over 30% on detergent costs on suitable Electrolux Professional setups by using the correct amount for the load and programme.'],
            ['icon'=>'8',  'prefix'=>'',          'stat'=>'Correct<br>dose',    'size'=>'text-2xl', 'label'=>'Stop detergent overuse',                     'body'=>'Automatic dosing helps deliver the correct amount of detergent for each cycle, reducing waste and keeping wash results more consistent.'],
            ['icon'=>'31', 'prefix'=>'',          'stat'=>'Less<br>maintenance','size'=>'text-2xl', 'label'=>'Fewer dosing parts to replace',              'body'=>'Selected dosing systems such as JETSAVE use water-powered pumps with no moving parts or squeeze tubes, reducing maintenance around the dosing system.'],
            ['icon'=>'7',  'prefix'=>'',          'stat'=>'Better<br>control',  'size'=>'text-2xl', 'label'=>'Protect linen, results and equipment condition', 'body'=>'Better chemical management helps protect wash quality, textile life and equipment condition, reducing avoidable problems before they become service issues.'],
        ]])
    </div>
</section>

{{-- 5. LAUNDRY CONTROL SYSTEM ROW (sector-style zig-zag / 4 blocks: dose → detergent → storage → support) --}}
<section class="py-16 lg:py-24 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-12 lg:mb-14 reveal max-w-3xl">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Laundry Control System</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Control the chemical setup <span style="color:#148af4;">behind every wash</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Dosing, detergents, storage and service support should work together. That is how a laundry room gets stronger control over cost, consistency and daily use.
            </p>
        </div>

        @php
        $controlBlocks = [
            [
                'step' => '01', 'title' => 'Dose correctly',
                'text' => 'Use the correct amount of detergent for the load, programme and wash result required.',
                'points' => ['Less overuse', 'Better cost control', 'Consistent results'],
                'd' => 'M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5',
            ],
            [
                'step' => '02', 'title' => 'Choose the correct detergent',
                'text' => 'Match detergent to soil level, fabric type, hygiene needs and customer expectations.',
                'points' => ['Eco-range options', 'Textile care', 'Lower environmental impact'],
                'd' => 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z',
            ],
            [
                'step' => '03', 'title' => 'Store chemicals properly',
                'text' => 'Keep canisters, pumps and dosing equipment organised, safer and easier to manage.',
                'points' => ['Cleaner room', 'Safer storage', 'Easier handling'],
                'd' => 'M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z',
            ],
            [
                'step' => '04', 'title' => 'Keep the system supported',
                'text' => 'Use ILS advice, setup support, Preventive Maintenance and aftercare to keep detergent control working properly.',
                'points' => ['Practical advice', 'Planned support', 'Clearer next steps'],
                'd' => 'M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z',
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5 reveal">
            @foreach($controlBlocks as $i => $blk)
            <div class="relative flex flex-col h-full bg-bg rounded-2xl p-7 border border-gray-100">
                <div class="flex items-center gap-4 mb-4">
                    <span class="flex-shrink-0 w-12 h-12 rounded-xl bg-[#148af4]/10 flex items-center justify-center">
                        <svg class="w-6 h-6 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $blk['d'] }}"/></svg>
                    </span>
                    <span class="font-heading font-bold text-[#148af4]/40 text-2xl leading-none">{{ $blk['step'] }}</span>
                </div>
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $blk['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-5">{{ $blk['text'] }}</p>
                <ul class="mt-auto space-y-1.5">
                    @foreach($blk['points'] as $pt)
                    <li class="font-body font-semibold text-navy text-sm flex items-center gap-2">
                        <span class="text-[#148af4]">&#9656;</span> {{ $pt }}
                    </li>
                    @endforeach
                </ul>
                @if(!$loop->last)
                <span class="hidden xl:flex absolute top-1/2 -right-3 z-10 -translate-y-1/2 w-6 h-6 items-center justify-center text-[#148af4]">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </span>
                @endif
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

{{-- 6. RANGE / SOLUTION CARDS --}}
<section class="py-16 lg:py-24 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Choose the System</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Products that <span style="color:#148af4;">work together</span>, not separate extras
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                The strongest result comes from connecting detergent choice, dosing accuracy, storage and daily laundry use.
            </p>
        </div>

        @php
        $solutionCards = [
            [
                'name'    => 'Dosing Systems',
                'topLine' => 'For better detergent control and lower waste',
                'copy'    => 'Automatic dosing systems reduce overuse, improve consistency and give teams clearer control over chemical consumption.',
                'badges'  => ['Correct dose', 'Less waste', 'Cost control', 'Consistent wash results'],
                'cta'     => 'Ask About Dosing Systems',
                'img'     => '/images/equipment/commercialwasher.webp',
            ],
            [
                'name'    => 'Eco-Detergents',
                'topLine' => 'For certified wash performance',
                'copy'    => 'Electrolux Professional eco-range detergents support high-quality results with Ecolabel, hypoallergenic and dermatologically tested proof where applicable.',
                'badges'  => ['EU Ecolabel', 'Hypoallergenic', 'Dermatologically tested', 'Textile care'],
                'cta'     => 'Ask About Detergents',
                'img'     => '/images/equipment/Strip1.jpeg',
            ],
            [
                'name'    => 'Detergent Storage',
                'topLine' => 'For cleaner, safer chemical organisation',
                'copy'    => 'Detergent Storage keeps canisters organised and can support pumps and dosing systems on selected setups.',
                'badges'  => ['Organised canisters', 'Pump support', 'Safer room', 'Easier access'],
                'cta'     => 'Ask About Storage',
                'img'     => '/images/equipment/Strip1.jpeg',
            ],
            [
                'name'    => 'Original Accessories & Consumables',
                'topLine' => 'For daily laundry room support',
                'copy'    => 'Original accessories and consumables support safer handling, daily efficiency and equipment performance over time.',
                'badges'  => ['Handling support', 'Daily use', 'Tested accessories', 'Equipment care'],
                'cta'     => 'Explore Accessories',
                'img'     => '/images/equipment/Self Service Laundry.png',
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 reveal">
            @foreach($solutionCards as $card)
            <div class="flex flex-col rounded-2xl p-6 bg-white border border-gray-200">
                <div class="flex items-center justify-center h-44 lg:h-52 mb-5">
                    <img src="{{ $card['img'] }}" alt="{{ $card['name'] }}" class="max-h-full w-auto object-contain">
                </div>
                <p class="font-body text-xs font-bold text-[#148af4] mb-1.5">{{ $card['topLine'] }}</p>
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $card['name'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-4">{{ $card['copy'] }}</p>
                <div class="flex flex-wrap gap-1.5 mb-5">
                    @foreach(array_slice($card['badges'], 0, 4) as $b)
                    <span class="font-body text-[10px] font-bold uppercase tracking-wide text-[#148af4] bg-[#148af4]/10 px-2 py-1 rounded">{{ $b }}</span>
                    @endforeach
                </div>
                <div class="mt-auto flex flex-col gap-2.5">
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/></svg>
                        {{ $card['cta'] }}
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 border border-gray-300 text-navy hover:border-navy font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                        View Details
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 7. DOSING INTELLIGENCE FEATURE (Alpine tabbed block — MAIN technical proof; 5 tabs) --}}
<section class="py-12 lg:py-16 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal max-w-3xl">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Dosing Intelligence</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Use <span style="color:#148af4;">the correct amount</span>, every time
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Dosing systems turn chemical management into a practical part of the wash process. Irish Laundry Systems can advise which option fits the equipment, load type and daily use.
            </p>
        </div>

        @php
        $dosingTabs = [
            [
                'label' => 'Intelligent Dosing',
                'title' => 'Dosing based on the load',
                'text'  => 'Intelligent Dosing adds detergent according to the load inside the drum, helping reduce overuse while protecting wash consistency.',
                'points' => ['Load-based dosing', 'Less waste', 'Better consistency', 'ClarusVibe where applicable'],
            ],
            [
                'label' => 'Multisave',
                'title' => 'One dosing unit for multiple washers',
                'text'  => 'Multisave can connect up to 7 washing machines with one unit, supporting accurate consumption control in multi-washer laundry rooms.',
                'points' => ['Up to 7 washers', 'Lower setup complexity', 'Low running costs', 'Multi-machine control'],
            ],
            [
                'label' => 'JETSAVE',
                'title' => 'Lower upkeep with water-powered dosing',
                'text'  => 'JETSAVE uses water-powered pumps with no moving parts or squeeze tubes to replace, supporting reliable dosage and easier long-term upkeep.',
                'points' => ['Water-powered dosing', 'No squeeze tubes', 'Reliable dosage', 'Less maintenance'],
            ],
            [
                'label' => 'DOSAVE',
                'title' => 'Straightforward dosing setup',
                'text'  => 'DOSAVE uses peristaltic technology with easy installation and programming, supporting accurate dosing where this system is the best fit.',
                'points' => ['Easy installation', 'Easy programming', 'Accurate dosing', 'Savings-focused setup'],
            ],
            [
                'label' => 'Efficient Dosing',
                'title' => 'Detergent control for selected CompassPro setups',
                'text'  => 'Efficient Dosing uses the correct amount of detergent for each cycle, supporting lower detergent costs and more controlled wash results.',
                'points' => ['Correct amount each cycle', 'Over 30% detergent cost saving where suitable', 'CompassPro', 'Cost control'],
            ],
        ];
        @endphp

        <div x-data="{ tab: 0 }" class="reveal">
            {{-- Tab buttons --}}
            <div class="flex flex-wrap gap-2 mb-8 border-b border-gray-200">
                @foreach($dosingTabs as $i => $t)
                <button @click="tab = {{ $i }}"
                        :class="tab === {{ $i }} ? 'text-[#148af4] border-[#148af4]' : 'text-gray-500 border-transparent hover:text-navy'"
                        class="font-heading font-bold text-sm sm:text-base px-4 py-3 -mb-px border-b-2 transition-colors duration-200 cursor-pointer">
                    {{ $t['label'] }}
                </button>
                @endforeach
            </div>

            {{-- Tab panels --}}
            @foreach($dosingTabs as $i => $t)
            <div x-show="tab === {{ $i }}" x-cloak
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 translate-y-1"
                 x-transition:enter-end="opacity-100 translate-y-0">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center bg-white border border-gray-100 rounded-2xl p-7 lg:p-10 shadow-sm">
                    <div>
                        <p class="font-body text-xs font-bold text-[#148af4] uppercase tracking-[0.18em] mb-3">{{ $t['label'] }}</p>
                        <h3 class="font-heading font-bold text-navy text-2xl lg:text-3xl leading-tight mb-4">{{ $t['title'] }}</h3>
                        <p class="font-body text-gray-500 text-base leading-relaxed">{{ $t['text'] }}</p>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        @foreach($t['points'] as $pt)
                        <div class="flex items-start gap-3 bg-bg rounded-xl p-4">
                            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-[#148af4]/10 flex items-center justify-center mt-0.5">
                                <svg class="w-3.5 h-3.5 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            </span>
                            <span class="font-body font-semibold text-navy text-sm leading-snug">{{ $pt }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach

            <div class="mt-8">
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    Ask About Dosing Systems
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- 8. ECO-DETERGENTS & CERTIFICATION STRIP --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-start">

            <div class="reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Eco-Detergents</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-5">
                    <span style="color:#148af4;">Certified detergents</span> that support the standard of the wash
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                    Electrolux Professional eco-range detergents are developed for high quality, safety and effectiveness while supporting lower environmental impact.
                </p>
                <div class="flex flex-wrap gap-2 mb-8">
                    @foreach(['EU Ecolabel', 'Dermatologically tested', 'Hypoallergenic', 'High-quality results', 'Textile care'] as $proof)
                    <span class="font-body text-xs font-bold uppercase tracking-wide text-[#148af4] bg-[#148af4]/10 px-3 py-1.5 rounded-full">{{ $proof }}</span>
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

            <div class="reveal reveal-right">
                <div class="bg-bg border border-gray-100 rounded-2xl p-7 lg:p-9">
                    <p class="font-heading font-bold text-navy text-sm uppercase tracking-[0.16em] mb-5">Product examples</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        @foreach(['Laundry Eco Degreaser', 'Laundry Eco Powder', 'Laundry Eco Wash', 'Laundry Eco Booster', 'Laundry Eco Bleach', 'Laundry Eco Softener'] as $ex)
                        <div class="flex items-center gap-3 bg-white border border-gray-100 rounded-xl px-4 py-3">
                            <span class="flex-shrink-0 w-2 h-2 rounded-full bg-[#148af4]"></span>
                            <span class="font-body font-semibold text-navy text-sm leading-snug">{{ $ex }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- 9. DETERGENT STORAGE VISUAL STRIP --}}
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS detergent storage and laundry chemical organisation"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.85) 15%, rgba(20,138,244,0.3) 55%, transparent 100%);"></div>
    </div>
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-12 sm:py-16 lg:py-24 w-full max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Detergent Storage</p>
        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
            <span style="color:#011E41;">Keep chemicals organised</span> before they create daily problems
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6 max-w-xl">
            Loose canisters, unclear storage and poorly planned chemical areas make laundry rooms harder to manage. Detergent Storage keeps products organised, supports dosing setups where suitable and gives staff a cleaner, safer way to handle daily laundry chemicals.
        </p>
        <div class="flex flex-wrap items-center gap-x-6 gap-y-3 mb-7">
            @foreach([
                ['t' => 'Organised canisters',          'd' => 'M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z'],
                ['t' => 'Cleaner laundry room',         'd' => 'M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42'],
                ['t' => 'Pump support where suitable',  'd' => 'M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25'],
                ['t' => 'Safer daily handling',         'd' => 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z'],
            ] as $pt)
            <span class="inline-flex items-center gap-2">
                <svg class="w-4 h-4 text-white flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $pt['d'] }}"/></svg>
                <span class="font-body text-white text-sm font-bold">{{ $pt['t'] }}</span>
            </span>
            @endforeach
        </div>
        <a href="{{ route('contact') }}"
           class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
            Ask About Detergent Storage
        </a>
    </div>
</section>

{{-- 10. ACCESSORIES MINI GRID --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Original Accessories &amp; Consumables</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Small details that make <span style="color:#148af4;">daily laundry easier</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Accessories should support the way the laundry room is used every day, without taking the focus away from dosing, detergent control and equipment performance.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 reveal">
            @foreach([
                ['title' => 'Racks and trolleys',                     'copy' => 'Support movement, storage and daily laundry handling.'],
                ['title' => 'Baskets and handling',                   'copy' => 'Make sorting, loading and unloading easier for staff.'],
                ['title' => 'Dryer balls and cleaning essentials',    'copy' => 'Support practical care across daily laundry use.'],
                ['title' => 'Hygiene tools',                          'copy' => 'Help keep the laundry room cleaner and easier to manage.'],
            ] as $acc)
            <div class="bg-bg border border-gray-100 rounded-2xl p-7 flex flex-col h-full">
                <div class="w-10 h-1 rounded-full bg-[#148af4] mb-4"></div>
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $acc['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $acc['copy'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="mt-10 reveal">
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                Explore Accessories
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

{{-- 11. SERVICE AND SUPPORT OPTIONS (image-cards) --}}
<section class="py-16 lg:py-20 bg-gray-50 border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">ILS Support</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Advice and service for <span style="color:#148af4;">the system behind the wash</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Dosing, detergents, storage and accessories work best when they are chosen around the equipment and supported over time. Irish Laundry Systems can advise, set up and support the best option for the site.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                [
                    'title' => 'Equipment and dosing advice',
                    'text'  => 'Choose the dosing system, detergent, storage or accessory setup around your washers, load types and daily laundry demand.',
                    'cta'   => 'Request Advice',
                    'route' => route('request-assessment'),
                    'img'   => '/images/healthcare/commercial-industrial.jpg',
                    'pos'   => 'center center',
                ],
                [
                    'title' => 'Setup and installation support',
                    'text'  => 'Practical help for dosing systems, detergent storage and laundry room setup where equipment connections or installation planning are needed.',
                    'cta'   => 'Ask About Setup',
                    'route' => route('contact'),
                    'img'   => '/images/equipment/Strip1.jpeg',
                    'pos'   => 'center 30%',
                ],
                [
                    'title' => 'Preventive Maintenance',
                    'text'  => 'Planned support for laundry equipment and dosing systems, helping reduce avoidable disruption and keep wash results easier to manage.',
                    'cta'   => 'View Preventive Maintenance',
                    'route' => route('service-contracts'),
                    'img'   => '/images/healthcare/service-contracts-hero.png',
                    'pos'   => '90% 35%',
                ],
                [
                    'title' => 'Support &amp; Aftercare',
                    'text'  => 'Follow-up advice, service history, parts support where needed and clearer next steps when dosing, wash results or laundry room equipment need attention.',
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

{{-- 12. RESOURCES --}}
<section class="py-16 lg:py-24 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Resources</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Official <span style="color:#148af4;">Electrolux Professional information</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Review official product information or ask Irish Laundry Systems to advise on the best dosing, detergent, storage or accessory setup for your site.
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach([
                [
                    'title' => 'Detergents, Dosing Systems & Storage brochure',
                    'copy'  => 'Official Electrolux Professional information covering detergents, dosing systems and storage for commercial laundry rooms.',
                    'cta'   => 'Download Brochure',
                    'href'  => '',
                    'download' => true,
                ],
                [
                    'title' => 'Line 6000 Eco-Range Detergents leaflet',
                    'copy'  => 'Official information on Ecolabel-certified detergents, product types and detergent proof.',
                    'cta'   => 'Download Leaflet',
                    'href'  => '',
                    'download' => true,
                ],
                [
                    'title' => 'Need dosing advice before choosing?',
                    'copy'  => 'Irish Laundry Systems can review your current washers, detergent use, wash results and laundry room setup before recommending the next step.',
                    'cta'   => 'Request Advice',
                    'href'  => route('request-assessment'),
                    'download' => false,
                ],
            ] as $res)
            <div class="bg-white border border-gray-200 rounded-2xl p-6 lg:p-8 flex flex-col h-full">
                <div class="w-10 h-1 rounded-full bg-[#148af4] mb-4"></div>
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $res['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-5">{{ $res['copy'] }}</p>
                @if($res['download'] && $res['href'])
                <a href="{{ $res['href'] }}" target="_blank" download class="mt-auto inline-flex items-center gap-2 font-body font-bold text-[#148af4] hover:underline text-sm w-fit">
                    {{ $res['cta'] }}
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                </a>
                @elseif($res['download'])
                <span class="mt-auto inline-flex items-center gap-2 font-body font-bold text-gray-400 text-sm w-fit cursor-not-allowed">
                    {{ $res['cta'] }}
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                </span>
                @else
                <a href="{{ $res['href'] }}" class="mt-auto inline-flex items-center gap-2 font-body font-bold text-[#148af4] hover:underline text-sm w-fit">
                    {{ $res['cta'] }}
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 13. RELATED EQUIPMENT --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Related Equipment</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Equipment that connects with <span style="color:#148af4;">dosing and detergent control</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach([
                ['title' => 'Commercial Washing Machines', 'copy' => 'For washer setups where dosing, detergent choice and programme control all affect results.', 'cta' => 'View Washing Machines', 'route' => route('equipment.category', 'washers')],
                ['title' => 'Commercial Tumble Dryers',    'copy' => 'For drying capacity and energy control after the wash process.', 'cta' => 'View Dryers', 'route' => route('equipment.category', 'tumble-dryers')],
                ['title' => 'Wet Cleaning Equipment',      'copy' => 'For delicate garment care where detergents, dosing and finishing work as a system.', 'cta' => 'View Wet Cleaning', 'route' => route('equipment.category', 'wet-cleaning')],
                ['title' => 'Support & Aftercare',         'copy' => 'For follow-up support, service history and clearer next steps after installation.', 'cta' => 'Explore Aftercare', 'route' => route('parts-aftercare')],
            ] as $card)
            <div class="bg-bg border border-gray-100 rounded-2xl p-7 flex flex-col h-full">
                <div class="w-10 h-1 rounded-full bg-[#148af4] mb-4"></div>
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-5">{{ $card['copy'] }}</p>
                <a href="{{ $card['route'] }}" class="mt-auto inline-flex items-center gap-2 font-body font-bold text-[#148af4] hover:underline text-sm">
                    {{ $card['cta'] }}
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 14. FAQ --}}
@include('components.faq', [
    'eyebrow' => 'Dosing & Detergent FAQs',
    'heading' => 'Questions before choosing <span style="color:#148af4;">dosing systems, detergents or storage</span>',
    'faqs' => [
        ['question' => 'Why does detergent control matter in a commercial laundry?', 'answer' => 'Detergent control affects cost, wash quality, textile life, repeat washing and equipment condition. Using too much or the wrong product can create avoidable problems over time.'],
        ['question' => 'What is a laundry dosing system?', 'answer' => 'A laundry dosing system automatically delivers detergent or chemicals into the wash process, helping use the correct amount for the load, programme and required result.'],
        ['question' => 'Can automatic dosing reduce detergent costs?', 'answer' => 'Yes, where the selected system and equipment are suitable. Efficient Dosing can save over 30% on detergent costs by using the correct amount for each load and programme.'],
        ['question' => 'Can detergent overuse damage linen?', 'answer' => 'Yes. Detergent overdosing can contribute to damaged linen and poor results. A controlled dosing setup helps protect the wash result and the textiles being processed.'],
        ['question' => 'Can poor chemical control affect equipment condition?', 'answer' => 'Poor chemical control can contribute to avoidable equipment issues over time. Irish Laundry Systems can advise on dosing, detergent choice, storage and support to reduce preventable service problems.'],
        ['question' => 'What are eco-range detergents?', 'answer' => 'Electrolux Professional eco-range detergents are designed to support high-quality wash results, textile care, safety and lower environmental impact, with certification proof where applicable.'],
        ['question' => 'What does Detergent Storage do?', 'answer' => 'Detergent Storage keeps canisters organised and supports a safer, cleaner laundry room. Selected setups can also support pumps and dosing systems.'],
        ['question' => 'Can Irish Laundry Systems advise on existing equipment?', 'answer' => 'Yes. Irish Laundry Systems can review your washers, current detergent use, wash results, storage and service needs before recommending a dosing, detergent or accessory setup.'],
    ],
])

{{-- 15. FINAL CTA / FORM --}}
@include('components.cta-downtime-form', [
    'pageSource' => 'accessories_cta',
    'heading'    => 'Take control of detergent use and <span style="color:#148af4;">laundry room costs</span>',
    'body'       => 'Tell us what equipment you use, what you wash and how detergents are currently managed. Irish Laundry Systems will guide you toward the best dosing system, detergent, storage, accessory or support option for your site.',
    'formTitle'  => 'Request Dosing, Detergent & Storage Advice',
    'buttonText' => 'Request Advice',
])

@endsection
