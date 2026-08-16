@extends('layouts.app')

@section('pageTitle', 'OnE Connected Ireland | Electrolux Professional Connected Laundry Intelligence')

@section('meta')
<meta name="description" content="OnE Connected connects compatible Electrolux Professional laundry equipment to performance data that can reduce costs and waste, improve production flow, monitor consumption and support service decisions. Talk to Irish Laundry Systems about compatibility, setup and support in Ireland.">
@endsection

@section('content')

{{-- 1. HERO --}}
<section class="relative overflow-hidden flex flex-col h-auto min-h-[520px] lg:h-[720px]" style="min-height:520px; background-color:#011E41;">
    <img src="/images/pages/one-connected/hero-oneconnected.png" alt="OnE Connected laundry dashboard"
         class="absolute inset-0 w-full h-full object-cover" style="object-position: 78% center;">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.96) 0%, rgba(1,30,65,0.88) 40%, rgba(1,30,65,0.55) 68%, rgba(1,30,65,0.25) 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 sm:py-20 lg:py-28">
            <div class="flex-1 reveal reveal-left max-w-3xl">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">OnE Connected</p>
                <h1 class="font-heading font-bold text-white text-2xl sm:text-4xl lg:text-5xl leading-tight mb-6">
                    Use connected laundry data to improve <span style="color:#148af4;">performance, control and compliance</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-7 max-w-2xl">
                    OnE Connected brings compatible Electrolux Professional laundry equipment into one digital ecosystem, helping teams monitor performance, consumption, alerts and process validation.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 mb-8">
                    <a href="#one-connected-form"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Ask About OnE Connected
                    </a>
                    <a href="#one-connected-form"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white hover:border-white/70 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        Check Equipment Compatibility
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 2. THIN ELECTROLUX TRUST STRIP --}}
@include('components.partner-strip')

{{-- 3. INTELLIGENCE BEHIND THE EQUIPMENT --}}
<section class="py-20 lg:py-32 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Connected Laundry Intelligence</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">
            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    Turn equipment data into <span style="color:#148af4;">better laundry decisions</span>
                </h2>
            </div>
            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    OnE Connected gives laundry teams clearer insight into load factor, hygiene validation, energy, water and detergent consumption, helping support better control across compatible Electrolux Professional equipment.
                </p>
                <a href="#dashboard"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200">
                    See What OnE Connected Can Monitor
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- 4. BIG ICON BENEFITS --}}
<section class="py-20 lg:py-32 bg-gray-50 border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Business Value</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Use connected laundry data to improve <span style="color:#148af4;">performance and cost control</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                OnE Connected helps compatible Electrolux Professional laundry equipment turn daily operation into clearer business insight.
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 reveal">
            @foreach([
                ['claim' => 'Productivity',   'label' => 'Improve production flow',  'body' => 'Use connected data to understand cycle activity, loading and output across the laundry room.', 'icon' => '173'],
                ['claim' => 'Efficiency',     'label' => 'Use equipment better',     'body' => 'See how compatible machines are being used and where daily operation can improve.', 'icon' => '11'],
                ['claim' => 'Running costs',  'label' => 'Make consumption visible', 'body' => 'Monitor energy, water and detergent use to support better cost decisions.', 'icon' => '166'],
                ['claim' => 'Sustainability', 'label' => 'Reduce resource waste',    'body' => 'Use consumption data to support more efficient energy, water and detergent use.', 'icon' => '6'],
            ] as $b)
            <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex flex-col gap-4">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/{{ $b['icon'] }}.png" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <p class="font-heading font-bold text-[#148af4] text-xl leading-snug mb-1">{{ $b['claim'] }}</p>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">{{ $b['label'] }}</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $b['body'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 6. LIVE DASHBOARD (navy centrepiece) --}}
<section id="dashboard" class="relative overflow-hidden pt-10 lg:pt-12 pb-16 lg:pb-20" style="background-color:#011E41;">

    {{-- Section background --}}
    <img src="/images/pages/one-connected/One%20Dashboardbackground.png" alt="" aria-hidden="true"
         class="absolute inset-0 w-full h-full object-cover object-center" loading="lazy" decoding="async"
         style="transform: scale(1.72); transform-origin: center 46%;">
    <div class="absolute inset-0" style="background:rgba(1,30,65,0.62);"></div>

    <div class="relative z-10 max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="grid lg:grid-cols-2 gap-10 lg:gap-14 items-center mb-12 lg:mb-16">
            <div class="reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">One Dashboard</p>
                <h2 class="font-heading font-bold text-white text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
                    See the signals that help you <span style="color:#148af4;">control laundry performance</span>
                </h2>
                <p class="font-body text-white/75 text-base leading-relaxed mb-8 max-w-xl">
                    OnE Connected gives compatible Electrolux Professional laundry equipment one digital view of activity, consumption, alerts and process data.
                </p>
                <a href="{{ asset('pdfs/OnE-Connected-Quick-Guide.pdf') }}" target="_blank" rel="noopener" class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-7 py-4 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
                    Explore the OnE Connected Dashboard
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            <div class="reveal">
                <img src="/images/pages/one-connected/laptoponedashboard.png" alt="OnE Connected dashboard" class="w-full h-auto object-contain">
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-5 reveal">
            @foreach([
                ['claim' => 'KPIs',        'label' => 'Usage trends',                'body' => 'View key laundry performance indicators from one dashboard.',            'icon' => '250'],
                ['claim' => 'Load factor', 'label' => 'Loading insight',             'body' => 'See how effectively equipment is loaded against capacity.',              'icon' => '251'],
                ['claim' => 'Consumption', 'label' => 'Energy, water and detergent', 'body' => 'Monitor resource use across compatible laundry equipment.',              'icon' => '252'],
                ['claim' => 'Validation',  'label' => 'Hygiene process support',     'body' => 'Track process validation status and issues.',                            'icon' => '253'],
                ['claim' => 'Alerts',      'label' => 'Faster response',             'body' => 'Receive notifications when a process or machine needs attention.',       'icon' => '254'],
                ['claim' => 'Reports',     'label' => 'Data for review',             'body' => 'Keep records available for performance checks and future reference.',    'icon' => '75'],
            ] as $dp)
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-6">
                <img src="/images/icons/{{ $dp['icon'] }}.png" alt="" class="w-24 h-24 object-contain mb-4">
                <p class="font-heading font-bold text-[#148af4] text-lg leading-snug mb-1">{{ $dp['claim'] }}</p>
                <h3 class="font-heading font-bold text-white text-base leading-snug mb-2">{{ $dp['label'] }}</h3>
                <p class="font-body text-white/65 text-sm leading-relaxed">{{ $dp['body'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 7. CONSUMPTION CONTROL — three resource signals (claim / label / body) --}}
<section class="py-20 lg:py-32 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Consumption Control</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Focus on the resources that affect <span style="color:#148af4;">cost and waste every day</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                OnE Connected shows many areas of laundry performance. For cost and waste control, three resource signals matter most: energy, water and detergent use.
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 reveal">
            @foreach([
                ['claim' => 'Energy use',    'label' => 'See where power is being used',   'body' => 'Monitor energy consumption across compatible laundry equipment and cycles.',    'icon' => '257'],
                ['claim' => 'Water use',     'label' => 'Compare use across cycles',       'body' => 'Review water consumption patterns and see where usage may need attention.',      'icon' => '256'],
                ['claim' => 'Detergent use', 'label' => 'Link product use to activity',    'body' => 'Track detergent consumption alongside washing activity where monitoring is available.', 'icon' => '258'],
            ] as $c)
            <div class="rounded-2xl p-7 border border-gray-100 bg-gray-50 flex flex-col">
                <img src="/images/icons/{{ $c['icon'] }}.png" alt="" class="w-24 h-24 object-contain mb-8">
                <p class="font-heading font-bold text-[#148af4] text-sm mb-1">{{ $c['claim'] }}</p>
                <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-4">{{ $c['label'] }}</h3>
                <div class="border-t border-gray-200 pt-4 mt-auto">
                    <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $c['body'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-10">
            <a href="#one-connected-form" class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200">
                Ask About Consumption Monitoring
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- 8. ILS ENGINEERING LAYER (image-backed strip) --}}
@include('components.service-contracts-strip', [
    'eyebrow'      => 'Engineering Support',
    'textMaxW'     => 'lg:max-w-[60%]',
    'headingLine1' => 'Use OnE Connected data',
    'headingLine2' => 'to improve maintenance<br class="hidden lg:block">and operational performance',
    'body'         => 'Our team helps interpret OnE Connected data on consumption, alerts, equipment use and process performance, so you can make clearer decisions about maintenance, call-outs, parts, running costs and equipment care.',
    'image'        => '/images/pages/one-connected/engineering-support.png',
    'miniPoints'   => [
        ['icon' => '307', 'iconClass' => 'brightness-0 invert', 'label' => 'Earlier<br>Maintenance'],
        ['icon' => '308', 'iconClass' => 'brightness-0 invert', 'label' => 'Reduced<br>Downtime'],
        ['icon' => '309', 'iconClass' => 'brightness-0 invert', 'label' => 'Longer Equipment<br>Life'],
    ],
    'cta1Label'    => 'Speak to Irish Laundry Systems',
    'cta1Route'    => 'contact',
])

{{-- 9. COMPATIBLE LAUNDRY EQUIPMENT --}}
<section class="relative overflow-hidden py-20 lg:py-32" style="background:linear-gradient(180deg,#ffffff 0%,#f7fafd 45%,#ffffff 100%);">

    {{-- decorative line-work, right side (xl only, purely cosmetic) --}}
    <svg class="hidden xl:block absolute pointer-events-none" aria-hidden="true" focusable="false" fill="none"
         style="top:60px; right:-140px; width:520px; height:560px; color:#148af4;" viewBox="0 0 520 560">
        <circle cx="360" cy="280" r="130" stroke="currentColor" stroke-opacity="0.09" stroke-width="1"/>
        <circle cx="360" cy="280" r="200" stroke="currentColor" stroke-opacity="0.07" stroke-width="1"/>
        <circle cx="360" cy="280" r="270" stroke="currentColor" stroke-opacity="0.05" stroke-width="1"/>
        <path d="M20 550 C 150 460 250 330 300 170 C 325 80 370 25 450 0" stroke="currentColor" stroke-opacity="0.10" stroke-width="1"/>
    </svg>

    <div class="relative z-10 max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-12 lg:mb-16 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Product Portfolio Compatibility</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-3">
                Connect your laundry equipment<br>in <span style="color:#148af4;">one digital ecosystem</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                <span class="sm:block xl:whitespace-nowrap">Across washing, drying and ironing, OnE Connected is available for selected Electrolux Professional equipment.</span>
                <span class="sm:block xl:whitespace-nowrap">Irish Laundry Systems can review the model, controls and connection requirements before a recommendation is made.</span>
            </p>
        </div>

        {{-- Compatibility infographic: navy hub with six radiating pills.
             Each "+" reveals that equipment photo in the strip below.
             At lg+ the stage is a fixed 800x300 box so the SVG viewBox maps 1:1 to pixels:
             hub centre (400,150) r=115, connector endpoints at x=230 / x=570, rows y=58/150/242. --}}
        @php
        $portfolio = [
            ['key' => 'w6', 'label' => 'Line 6000<br>Washers',          'side' => 'left',  'row' => 0, 'img' => '/images/pages/commercial-washers/WH6-27.jpg'],
            ['key' => 'd6', 'label' => 'Line 6000<br>Tumble Dryers',    'side' => 'left',  'row' => 1, 'img' => '/images/pages/dryers/line6000-tumble-dryer.webp'],
            ['key' => 'i6', 'label' => 'Line 6000<br>FFS Vibe Ironers', 'side' => 'left',  'row' => 2, 'img' => '/images/shared/line6000-ironer.webp'],
            ['key' => 'w5', 'label' => 'Line 5000<br>Washers',          'side' => 'right', 'row' => 0, 'img' => '/images/pages/commercial-washers/commercialwasher.webp'],
            ['key' => 'd5', 'label' => 'Line 5000<br>Tumble Dryers',    'side' => 'right', 'row' => 1, 'img' => '/images/pages/dryers/heat-pump-dryer-lineup.png'],
            ['key' => 'bw', 'label' => 'Barrier Washers',               'side' => 'right', 'row' => 2, 'img' => '/images/pages/barrier-washers/line6000-barrier-washer.webp'],
        ];
        @endphp

        <div x-data="{
                open: {{ \Illuminate\Support\Js::from(array_column($portfolio, 'key')) }},
                toggle(k) { this.open.includes(k) ? this.open = this.open.filter(i => i !== k) : this.open.push(k) },
                shown(k) { return this.open.includes(k) }
             }"
             class="reveal">

            {{-- stage --}}
            <div class="relative mx-auto w-full lg:w-[800px] lg:h-[300px]">

                {{-- connectors (lg+ only, beneath the pills) --}}
                <svg class="hidden lg:block absolute inset-0 w-full h-full pointer-events-none" style="z-index:0;"
                     viewBox="0 0 800 300" fill="none" aria-hidden="true" focusable="false">
                    <g stroke="#b3ccea" stroke-width="1" stroke-linecap="round">
                        <path d="M299 95 C 272 78, 266 58, 242 58"/>
                        <path d="M285 150 L 242 150"/>
                        <path d="M299 205 C 272 222, 266 242, 242 242"/>
                        <path d="M501 95 C 528 78, 534 58, 558 58"/>
                        <path d="M515 150 L 558 150"/>
                        <path d="M501 205 C 528 222, 534 242, 558 242"/>
                    </g>
                    <g fill="#b9d4f2">
                        <circle cx="242" cy="58" r="3.5"/><circle cx="242" cy="150" r="3.5"/><circle cx="242" cy="242" r="3.5"/>
                        <circle cx="558" cy="58" r="3.5"/><circle cx="558" cy="150" r="3.5"/><circle cx="558" cy="242" r="3.5"/>
                    </g>
                </svg>

                {{-- hub --}}
                <div class="relative lg:absolute lg:left-1/2 lg:top-1/2 lg:-translate-x-1/2 lg:-translate-y-1/2 mx-auto mb-8 lg:mb-0 flex flex-col items-center justify-center text-center rounded-full"
                     style="z-index:10; width:230px; height:230px; background-color:#011E41; box-shadow:0 18px 40px -18px rgba(1,30,65,0.45); padding:0 34px;">
                    <p class="font-heading font-bold text-white text-xl leading-none">OnE Connected</p>
                    <span class="block w-8 h-px bg-white/25 my-3"></span>
                    <p class="font-body text-white/70 text-xs leading-relaxed">One digital ecosystem for connected laundry equipment.</p>
                </div>

                {{-- pills --}}
                @foreach($portfolio as $p)
                @php $plain = trim(strip_tags(str_replace('<br>', ' ', $p['label']))); @endphp
                <button type="button"
                        @click="toggle('{{ $p['key'] }}')"
                        :aria-expanded="shown('{{ $p['key'] }}') ? 'true' : 'false'"
                        aria-label="Show or hide the {{ $plain }} photo"
                        data-side="{{ $p['side'] }}" data-row="{{ $p['row'] }}"
                        class="pf-pill group relative lg:absolute w-full lg:w-[236px] lg:h-16 mb-3 lg:mb-0 flex items-center gap-3 rounded-full pl-2 pr-5 py-2.5 lg:py-0 text-left focus:outline-none focus-visible:ring-2 focus-visible:ring-[#148af4] focus-visible:ring-offset-2"
                        style="z-index:10;"
                        :class="shown('{{ $p['key'] }}') ? 'pf-pill-on' : 'pf-pill-off'">
                    <span class="flex items-center justify-center w-9 h-9 rounded-full bg-white text-[#148af4] font-heading font-bold text-lg leading-none flex-shrink-0"
                          style="box-shadow:0 2px 6px -2px rgba(1,30,65,0.25);"
                          x-text="shown('{{ $p['key'] }}') ? '−' : '+'">+</span>
                    <span class="font-heading font-bold text-navy text-sm leading-tight">{!! $p['label'] !!}</span>
                </button>
                @endforeach
            </div>

            {{-- revealed equipment photos --}}
            <div class="mt-10 lg:mt-14 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-x-6 gap-y-10 items-start">
                @foreach($portfolio as $p)
                @php $plain = trim(strip_tags(str_replace('<br>', ' ', $p['label']))); @endphp
                {{-- plain x-show: the x-transition opacity variant leaves the element stuck
                     mid-transition on this page, so the photo never hides --}}
                <div x-show="shown('{{ $p['key'] }}')"
                     class="flex flex-col items-center text-center pf-fade">
                    <div class="relative w-full flex items-end justify-center h-36 lg:h-48">
                        {{-- grounding glow, scales with the column --}}
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-4/5 h-6 rounded-[50%] pointer-events-none"
                              style="background:radial-gradient(ellipse at center, rgba(1,30,65,0.16) 0%, rgba(1,30,65,0) 70%);" aria-hidden="true"></span>
                        <img src="{{ $p['img'] }}" alt="{{ $plain }}" loading="lazy" decoding="async"
                             class="relative max-h-full max-w-full w-auto object-contain">
                    </div>
                    <p class="font-body font-bold text-navy text-xs leading-tight mt-4">{!! $p['label'] !!}</p>
                </div>
                @endforeach
            </div>
        </div>

    </div>

    <style>
        .pf-pill { transition: background-color .2s ease, box-shadow .25s ease, border-color .2s ease; border:1px solid #dfe8f4; background-color:#eef3fa; box-shadow:0 10px 35px -10px rgba(1,30,65,0.10); }
        .pf-pill:hover { background-color:#e4edf9; border-color:#c9d9ee; }
        .pf-pill-on { background-color:#e4edf9; border-color:#c9d9ee; }
        /* Stage coordinates only apply once the pills are absolutely positioned (lg+).
           Below lg they stack in normal flow, where a right/top offset would displace them. */
        @media (min-width:1024px) {
            .pf-pill[data-side="left"]  { right:564px; }
            .pf-pill[data-side="right"] { left:564px; }
            .pf-pill[data-row="0"] { top:26px; }
            .pf-pill[data-row="1"] { top:118px; }
            .pf-pill[data-row="2"] { top:210px; }
        }
        @media (prefers-reduced-motion: reduce) { .pf-pill { transition:none; } }
    </style>
</section>

{{-- 10. GETTING STARTED --}}
<section class="py-20 lg:py-32 bg-gray-50 border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-12 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Getting Started</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Start OnE Connected with <span style="color:#148af4;">a clear, secure setup</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed [@media(min-width:1425px)]:whitespace-nowrap">
                Irish Laundry Systems reviews equipment compatibility, site connection needs and access requirements before helping your laundry move into connected monitoring.
            </p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 lg:gap-0 reveal">
            @foreach([
                ['icon' => '242', 'title' => 'Easy Setup',         'body' => 'Check the selected equipment, controls and site requirements before connection work begins.'],
                ['icon' => '240', 'title' => 'Secure Connection',  'body' => 'Review network, data and access requirements so the system is prepared correctly.'],
                ['icon' => '241', 'title' => 'Scalable Monitoring','body' => 'Start with compatible equipment and expand connected monitoring as the laundry operation grows.'],
            ] as $step)
            <div class="text-center px-6 lg:px-10 {{ $loop->first ? '' : 'lg:border-l lg:border-gray-200' }}">
                <img src="/images/icons/{{ $step['icon'] }}.png" alt="{{ $step['title'] }}"
                     class="w-24 h-24 object-contain mx-auto mb-6">
                <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-3">{{ $step['title'] }}</h3>
                <p class="font-body text-gray-500 text-base leading-relaxed">{{ $step['body'] }}</p>
            </div>
            @endforeach
        </div>
        <div class="mt-12 text-center">
            <a href="#one-connected-form" class="inline-flex items-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200">
                Start With a Compatibility Check
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- 11. OFFICIAL RESOURCES --}}
<section class="py-20 lg:py-32 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Official Resources</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Find out how OnE Connected can work <span style="color:#148af4;">for your laundry</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Use official Electrolux Professional resources to review the benefits, compatible equipment and connection requirements before discussing your setup with Irish Laundry Systems.
            </p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 reveal">
            @foreach([
                ['title' => 'OnE Connected Quick Guide',                  'body' => 'Explore compatible laundry equipment, dashboard benefits, hygiene validation, maintenance alerts and resource monitoring.', 'cta' => 'Download Quick Guide', 'href' => asset('pdfs/OnE-Connected-Quick-Guide.pdf'), 'newTab' => true],
                ['title' => 'OnE Connected Connectivity Technical Sheet', 'body' => 'Review compatible models, required hardware, network specifications and installation requirements.', 'cta' => 'View Technical Sheet', 'href' => asset('pdfs/OnE-Connected-Connectivity-Technical-Sheet.pdf'), 'newTab' => true],
                ['title' => 'Ask Irish Laundry Systems',                  'body' => 'Speak with our team about equipment compatibility, connection requirements and how OnE Connected could fit your laundry room.', 'cta' => 'Ask Our Team', 'href' => route('contact'), 'newTab' => false],
            ] as $r)
            <div class="rounded-2xl p-7 border border-gray-100 bg-gray-50 flex flex-col">
                <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-2">{{ $r['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-5 flex-1">{{ $r['body'] }}</p>
                <a href="{{ $r['href'] }}" @if($r['newTab']) target="_blank" rel="noopener" @endif class="inline-flex items-center gap-2 font-body font-bold text-[#148af4] hover:underline text-sm mt-auto">
                    {{ $r['cta'] }}
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 11b. CLIENT PROOF --}}
@include('components.proof-bar')

{{-- 12. FAQs --}}
@include('components.faq', [
    'eyebrow' => 'OnE Connected FAQs',
    'heading' => 'Clear answers before <span style="color:#148af4;">you connect your equipment</span>',
    'footerNote' => 'Have a different question? Ask about OnE Connected.',
    'faqs' => [
        ['question' => 'What is OnE Connected?', 'answer' => 'OnE Connected is Electrolux Professional&rsquo;s digital ecosystem for connected equipment, giving laundry teams clearer visibility over machine activity, performance, alerts and process data.'],
        ['question' => 'Which laundry equipment can connect?', 'answer' => 'Compatibility depends on the model, controls and production date. Selected Line 6000 and Line 5000 washers and tumble dryers, selected barrier washers and IV648xx FFS ironers are listed as compatible in Electrolux Professional materials.'],
        ['question' => 'Do we need a site check before connecting?', 'answer' => 'Yes. Irish Laundry Systems should review the equipment, controls, network requirements and any conversion kit needs before a recommendation is made.'],
        ['question' => 'What can we monitor through the dashboard?', 'answer' => 'Teams can monitor machine status, cycle activity, load factor, alerts, reports, consumption data and process information from compatible connected equipment.'],
        ['question' => 'Can it help with running costs and performance?', 'answer' => 'Yes, where compatible equipment is connected. OnE Connected can show energy, water and detergent consumption, helping teams review use and make better operational decisions.'],
        ['question' => 'Is the connection secure?', 'answer' => 'Electrolux Professional presents OnE Connected as a secure cloud-based system, with GDPR and ISO 27001 referenced in its official material. Site network and access requirements should still be reviewed before connection.'],
    ],
])

{{-- 13. FINAL CTA / FORM --}}
<div id="one-connected-form"></div>
@include('components.cta-downtime-form', [
    'pageSource' => 'one_connected_cta',
    'eyebrow'    => 'Get Connected',
    'heading'    => 'Bring your laundry equipment into <br class="hidden sm:block"><span style="color:#148af4;">clearer connected control</span>',
    'body'       => 'Talk to Irish Laundry Systems about connecting compatible Electrolux Professional equipment and using OnE Connected to monitor machine status, cycles, consumption, hygiene validation, alerts and reports.',
    'formTitle'  => 'Request an OnE Connected Review',
    'formIntro'  => 'Tell us what equipment you use and what your laundry team needs to monitor.',
    'buttonText' => 'Request an OnE Connected Review',
    'equipmentLabel' => 'Equipment currently in use',
    'messageLabel'   => 'What would you like to improve?',
])

@endsection
