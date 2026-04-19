@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="bg-navy py-16 lg:py-24">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="flex items-center gap-2 mb-4">
            <a href="{{ route('equipment') }}" class="text-gray-400 hover:text-gray-200 text-sm font-body transition-colors">Equipment</a>
            <svg class="w-3 h-3 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
            <span class="text-gray-300 text-sm font-body">{{ $category }}</span>
        </div>
        <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl mb-5">{{ $category }} Equipment</h1>
        <p class="font-body text-blue-200 text-lg max-w-2xl leading-relaxed mb-6">
            Commercial {{ strtolower($category) }} equipment supplied, installed and supported by Irish Laundry Systems. Electrolux Professional range available.
        </p>
        <a href="{{ route('contact') }}"
           class="inline-flex items-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 cursor-pointer">
            Request Equipment Quote
        </a>
    </div>
</section>

<!-- PROOF BAR -->
@include('components.proof-bar')

@if($categorySlug === 'barrier-washers')
<!-- BARRIER WASHERS INTRO -->
<section class="py-14 lg:py-20 bg-white border-b border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- Split: text left, image right --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center mb-14">
            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-5">
                    Barrier Washers
                </h2>
                <p class="font-body font-bold text-navy text-base leading-relaxed mb-3">
                    Take total control of contamination in sensitive laundry environments.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Implement failsafe laundry cycle management programmes in high-risk applications. A wide range of high productivity Barrier Washers designed to remove human error and protect against accidental contamination.
                </p>
                <a href="#products"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy-dark text-white font-heading font-bold px-7 py-3.5 rounded-lg text-sm tracking-wide transition-colors">
                    GO TO PRODUCTS
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>
            <div class="flex justify-center reveal reveal-right">
                <img src="{{ asset('images/equipment/line6000-barrier-washer.webp') }}"
                     alt="Barrier Washer"
                     class="w-full max-w-md object-contain drop-shadow-xl">
            </div>
        </div>

        {{-- Green stat band --}}
        <div class="rounded-2xl px-8 py-6 flex flex-col sm:flex-row items-center gap-6 reveal" style="background-color: #c8d8a8;">
            <div class="flex-shrink-0 w-20 h-20 rounded-full border-4 border-white/60 flex flex-col items-center justify-center" style="background-color: #a8bc7a;">
                <span class="font-heading font-bold text-white text-xs leading-none">up to</span>
                <span class="font-heading font-bold text-white text-xl leading-none">50%</span>
                <span class="font-body text-white text-[9px] leading-tight text-center">Water<br>savings</span>
            </div>
            <div>
                <p class="font-heading font-bold text-navy text-lg mb-1">Water savings</p>
                <p class="font-body text-navy/80 text-sm leading-relaxed">
                    Reduce water consumption by 50% with a Barrier Washer fitted with a second drain valve.
                </p>
            </div>
        </div>

    </div>
</section>

{{-- ① Enhanced usability, superior safety --}}
<section class="py-14 lg:py-20 bg-bg border-b border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-10 reveal">Enhanced usability, superior safety</h2>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            {{-- Left: 3 features --}}
            <div class="lg:col-span-2 flex flex-col gap-8">
                @foreach([
                    ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/>', 'title' => 'Maximise hygiene in healthcare applications', 'body' => 'Robust infection prevention measures to eliminate contamination risk'],
                    ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>',                'title' => 'Operator support in high-output laundries',      'body' => 'Dual-partition drum and auto-positioning for easy manual handling of heavy loads'],
                    ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z"/>',       'title' => 'Intelligent control',                             'body' => 'Intuitive interface in dirty and clean zones for failsafe disinfection'],
                ] as $feat)
                <div class="flex items-start gap-5 reveal">
                    <div class="flex-shrink-0 w-14 h-14 rounded-full border-2 border-navy flex items-center justify-center">
                        <svg class="w-7 h-7 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">{!! $feat['icon'] !!}</svg>
                    </div>
                    <div>
                        <h3 class="font-heading font-bold text-navy text-lg mb-1">{{ $feat['title'] }}</h3>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $feat['body'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Right: Download + Discover --}}
            <div class="flex flex-col gap-5 reveal reveal-right">
                <div class="bg-navy rounded-2xl p-6">
                    <h4 class="font-heading font-bold text-white text-base mb-4">Download</h4>
                    <ul class="space-y-4">
                        @foreach([
                            ['label' => 'Line 6000 Evolution Barrier Washers',    'file' => 'EPR-brochure-Line 6000 Evolution Barrier Washers-20241119-EN.pdf'],
                            ['label' => 'Line 6000 Pullman Barrier Washers',      'file' => 'EPR-leaflet-pullman-barrier-washer-EN-20230919-LR.pdf'],
                            ['label' => 'Clean, Sanitize, Decontaminate brochure','file' => 'Electrolux_WhitePaper_CleaningSolution.pdf'],
                        ] as $pdf)
                        <li>
                            <a href="/pdfs/{{ $pdf['file'] }}" target="_blank" download class="flex items-start gap-2 font-body text-sm text-white/80 hover:text-white transition-colors">
                                <svg class="w-4 h-4 flex-shrink-0 mt-0.5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                                {{ $pdf['label'] }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="bg-white border border-border rounded-2xl p-6">
                    <h4 class="font-heading font-bold text-navy text-base mb-4">Discover</h4>
                    <ul class="space-y-4">
                        @foreach([
                            ['label' => 'Hospital: Uncompromising hygiene',     'href' => route('sectors.healthcare')],
                            ['label' => 'Firefighters: Protect the protectors', 'href' => route('contact')],
                            ['label' => 'Essentia: the heart of customer service','href' => route('contact')],
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
    </div>
</section>

{{-- ② Detailed feature deep-dives --}}
<section class="py-14 lg:py-20 bg-white border-b border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 flex flex-col gap-16">

        {{-- Maximise hygiene --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center reveal">
            <div>
                <h3 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-5">Maximise hygiene in healthcare applications</h3>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    Barrier washing technology helps prevent the spread of infection through effective and repeatable laundry cycle management.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-5">
                    Line 6000 Barrier Washers provide a physical barrier between dirty and clean laundry zones and sit flush with the wall for easy cleaning.
                </p>
                <div class="bg-bg border border-border rounded-xl p-4 flex items-start gap-4">
                    <div class="flex-shrink-0 w-14 h-14 rounded-lg bg-white border border-border flex items-center justify-center p-2">
                        <div class="text-center">
                            <svg class="w-7 h-7 text-navy mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                            <p class="font-body font-bold text-navy text-[9px] leading-tight mt-0.5">Hygiene<br>Watchdog</p>
                        </div>
                    </div>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">
                        The <strong class="text-navy">Hygiene Watchdog</strong> feature stops accidental door openings to protect against cross-contamination.
                    </p>
                </div>
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('images/equipment/line6000-barrier-washer.webp') }}" alt="Barrier Washer hygiene" class="w-full max-w-sm object-contain drop-shadow-lg">
            </div>
        </div>

        {{-- Operator support --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center reveal">
            <div class="order-2 lg:order-1 flex justify-center">
                <img src="{{ asset('images/healthcare/workflow.jpg') }}" alt="Operator support" class="w-full max-w-sm rounded-2xl object-cover shadow-lg">
            </div>
            <div class="order-1 lg:order-2">
                <h3 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-5">Operator support in high-output laundries</h3>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-5">
                    All Line 6000 Barrier Washers feature the Ergocert 4-star rating and include ergonomic door handles and optimised door height for easy loading and unloading. Models with more than 50kg capacity include a dual-compartment partition drum which automatically assumes the correct unloading position at the end of each cycle.
                </p>
                <div class="bg-bg border border-border rounded-xl p-4 flex items-start gap-4">
                    <div class="flex-shrink-0 w-14 h-14 rounded-lg bg-white border border-border flex items-center justify-center p-2">
                        <div class="text-center">
                            <svg class="w-7 h-7 text-navy mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15"/></svg>
                            <p class="font-body font-bold text-navy text-[9px] leading-tight mt-0.5">Auto Inner<br>Door Opening</p>
                        </div>
                    </div>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">
                        The <strong class="text-navy">Auto Inner Door Opening</strong> feature maximises operator safety by pre-opening the inner drum doors at the end of each wash cycle.
                    </p>
                </div>
            </div>
        </div>

        {{-- Intelligent control --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center reveal">
            <div>
                <h3 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-5">Intelligent control</h3>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    The new ClarusVibe control* is Electrolux Professional's most intuitive display to date. It comes pre-set with a wide range of self-explanatory programs to improve productivity and reduce running costs.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-3">
                    Both the dirty and clean side of the Barrier Washers feature their own display to avoid operators moving between different zones.
                </p>
                <p class="font-body text-gray-400 text-xs italic">* Only available on Pullman line</p>
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('images/equipment/line6000-barrier-washer.webp') }}" alt="ClarusVibe control" class="w-full max-w-xs object-contain drop-shadow-lg">
            </div>
        </div>

    </div>
</section>

{{-- ③ Where you can find our Barrier Washer solutions --}}
<section class="py-14 lg:py-20 bg-bg border-b border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-10 reveal">Where you can find our Barrier Washer solutions</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
            @foreach([
                ['img' => '/images/healthcare/engineer.jpg',   'title' => 'Healthcare',    'body' => 'Maintain stringent hygiene requirements and minimise infection risk in a wide range of health and social care settings.'],
                ['img' => '/images/healthcare/plant-room.jpg', 'title' => 'Firefighters',  'body' => 'Safely clean protective equipment and uniforms following exposure to carcinogens and other toxic substances.'],
                ['img' => '/images/healthcare/workflow.jpg',   'title' => 'Clean Rooms',   'body' => 'Help uphold rigorous cleaning standards in advanced manufacturing facilities with hyper-sensitive operating environments.'],
            ] as $card)
            <div class="reveal">
                <div class="rounded-2xl overflow-hidden mb-5 aspect-[4/3]">
                    <img src="{{ asset($card['img']) }}" alt="{{ $card['title'] }}" class="w-full h-full object-cover">
                </div>
                <h3 class="font-heading font-bold text-navy text-xl mb-2">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $card['body'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endif

@if($categorySlug === 'washers')
<!-- LINE 6000 COMMERCIAL WASHERS INTRO -->
<section class="py-14 lg:py-20 bg-white border-b border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- Split: text left, image right --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center mb-14">
            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-4">
                    Line 6000 Commercial Washers
                </h2>
                <p class="font-body text-gray-500 text-lg leading-relaxed mb-3">
                    Commercial Washers, built for people and the planet.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    High productivity front-load washers designed to make laundry operations safe, fast and cost controlled.
                </p>
                <a href="#products"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy-dark text-white font-heading font-bold px-7 py-3.5 rounded-lg text-sm tracking-wide transition-colors">
                    GO TO PRODUCTS
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>
            <div class="flex justify-center reveal reveal-right">
                <img src="{{ asset('images/equipment/commercialwasher.webp') }}"
                     alt="Line 6000 Commercial Washer"
                     class="w-full max-w-md object-contain drop-shadow-xl">
            </div>
        </div>

        {{-- Green stat band --}}
        <div class="rounded-2xl px-8 py-6 flex flex-col sm:flex-row items-center gap-6 reveal" style="background-color: #c8d8a8;">
            {{-- Badge --}}
            <div class="flex-shrink-0 w-20 h-20 rounded-full border-4 border-white/60 flex items-center justify-center" style="background-color: #a8bc7a;">
                <span class="font-heading font-bold text-white text-lg leading-none text-center">40%<br><span class="text-xs font-body font-normal">Energy<br>Saving</span></span>
            </div>
            <div>
                <p class="font-heading font-bold text-navy text-lg mb-1">Energy savings</p>
                <p class="font-body text-navy/80 text-sm leading-relaxed">
                    Reduce your operational expenditure by up to 40% without compromising on productivity with built-in technologies to optimize utilisation.
                </p>
            </div>
        </div>

    </div>
</section>

<!-- ULTIMATE PEACE OF MIND -->
<section class="py-14 lg:py-20 bg-bg border-b border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-10 reveal">
            Ultimate peace of mind
        </h2>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            {{-- Left: 3 features --}}
            <div class="lg:col-span-2 flex flex-col gap-8">
                @foreach([
                    [
                        'title' => 'Intuitive operation',
                        'body'  => 'Effortless user experience with ClarusVibe control',
                        'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122"/>',
                    ],
                    [
                        'title' => 'Long-term savings & productivity',
                        'body'  => 'Automatically adjust water and detergents to keep operational expenditure to a minimum',
                        'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"/>',
                    ],
                    [
                        'title' => 'Certified ergonomics',
                        'body'  => "Reduce absenteeism by improving operators' well-being",
                        'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>',
                    ],
                ] as $feat)
                <div class="flex items-start gap-5 reveal">
                    <div class="flex-shrink-0 w-14 h-14 rounded-full border-2 border-navy flex items-center justify-center">
                        <svg class="w-7 h-7 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">{!! $feat['icon'] !!}</svg>
                    </div>
                    <div>
                        <h3 class="font-heading font-bold text-navy text-lg mb-1">{{ $feat['title'] }}</h3>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $feat['body'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Right: Download + Discover --}}
            <div class="flex flex-col gap-5 reveal reveal-right">

                {{-- Download --}}
                <div class="bg-navy rounded-2xl p-6">
                    <h4 class="font-heading font-bold text-white text-base mb-4">Download</h4>
                    <ul class="space-y-4">
                        @foreach([
                            ['label' => 'Line 6000 Washers & Dryers brochure',          'file' => 'EPR-brochure-Line 6000 Evolution Barrier Washers-20241119-EN.pdf'],
                            ['label' => 'Discover the full range of Ecolabel Detergents','file' => ''],
                            ['label' => 'Line 6000 High Spin Washers & Heat Pump Dryers','file' => 'EPR-Line6000-DryersBrochure-01072025_EN.pdf'],
                        ] as $pdf)
                        <li>
                            @if($pdf['file'])
                            <a href="/pdfs/{{ $pdf['file'] }}" target="_blank" download class="flex items-start gap-2 font-body text-sm text-white/80 hover:text-white transition-colors">
                                <svg class="w-4 h-4 flex-shrink-0 mt-0.5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                                {{ $pdf['label'] }}
                            </a>
                            @else
                            <span class="flex items-start gap-2 font-body text-sm text-white/40">
                                <svg class="w-4 h-4 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                                {{ $pdf['label'] }}
                            </span>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Discover --}}
                <div class="bg-white border border-border rounded-2xl p-6">
                    <h4 class="font-heading font-bold text-navy text-base mb-4">Discover</h4>
                    <ul class="space-y-4">
                        @foreach([
                            ['label' => "What's in your detergents and cleaning products?", 'href' => '#'],
                            ['label' => 'Ensuring Profitability With Efficient On-Premises Laundry', 'href' => '#'],
                            ['label' => 'Essentia: the heart of customer service', 'href' => route('contact')],
                        ] as $link)
                        <li>
                            <a href="{{ $link['href'] }}" class="flex items-start gap-2 font-body text-sm text-navy hover:text-orange font-bold transition-colors">
                                <svg class="w-4 h-4 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                                </svg>
                                {{ $link['label'] }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- LONG-TERM SAVINGS & PRODUCTIVITY -->
<section class="py-14 lg:py-20 bg-white border-b border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            {{-- Left: text content --}}
            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-5">
                    Long-term savings &amp; Productivity
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Minimize your <strong class="text-navy">cost per-load</strong> through the lowest possible water, energy and detergent consumption.
                </p>

                {{-- Intelligent Dosing --}}
                <div class="flex items-start gap-5 mb-6">
                    <div class="flex-shrink-0 w-20 h-20 rounded-xl bg-bg border border-border flex items-center justify-center p-2">
                        <div class="text-center">
                            <svg class="w-8 h-8 text-navy mx-auto mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15M14.25 3.104c.251.023.501.05.75.082M19.8 15l-1.8 1.8m0 0A2.25 2.25 0 0116.5 18H7.5a2.25 2.25 0 01-1.5-.6m11.8-1.8L15 13.2M4.5 18l1.8-1.8m0 0L8 14.8"/></svg>
                            <p class="font-body font-bold text-navy text-[10px] leading-tight">Intelligent<br>Dosing</p>
                        </div>
                    </div>
                    <div>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">
                            With Intelligent Dosing, you can automatically add the <strong class="text-navy">precise amount of detergent</strong> and chemicals based on the dry weight of each load*.
                        </p>
                    </div>
                </div>

                <p class="font-body text-gray-500 text-sm leading-relaxed mb-6 pl-[100px]">
                    Manual dosing is also easier than ever thanks to a front-mounted dispenser which can be tilted downwards to clearly see all six colour-coded compartments.
                </p>

                {{-- Integrated Savings --}}
                <div class="bg-bg border border-border rounded-xl p-5 flex items-start gap-4 mb-5">
                    <div class="flex-shrink-0 w-16 h-16 rounded-lg bg-white border border-border flex items-center justify-center p-2">
                        <div class="text-center">
                            <svg class="w-7 h-7 text-navy mx-auto mb-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/></svg>
                            <p class="font-body font-bold text-navy text-[9px] leading-tight">Integrated<br>Savings</p>
                        </div>
                    </div>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">
                        The Integrated Savings feature measures and <strong class="text-navy">shows the load in real time</strong>, to avoid overloading and underloading of the machine. This not only reduces the amount of water and energy used when washing partial loads, but it can help to <strong class="text-navy">extend the lifetime of your washer</strong>.
                    </p>
                </div>

                <p class="font-body text-gray-400 text-xs italic">*Only available on ClarusVibe models.</p>
            </div>

            {{-- Right: image --}}
            <div class="flex justify-center items-start reveal reveal-right">
                <img src="{{ asset('images/equipment/commercialwasher.webp') }}"
                     alt="Intelligent Dosing"
                     class="w-full max-w-sm rounded-2xl object-cover shadow-lg">
            </div>

        </div>
    </div>
</section>

<!-- WHERE YOU CAN FIND OUR SOLUTIONS -->
<section class="py-14 lg:py-20 bg-bg border-b border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-10 reveal">
            Where you can find our Commercial Washers solutions
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
            @foreach([
                [
                    'img'   => '/images/about/testimonial-1.jpg',
                    'title' => 'Multi-Housing Laundry',
                    'body'  => 'Ensure tenant satisfaction by offering a quick, hassle-free, and eco-friendly laundry experience. Invest in energy-efficient machines and high-capacity dryers.',
                ],
                [
                    'img'   => '/images/about/testimonial-2.jpg',
                    'title' => 'On Premises Laundries',
                    'body'  => 'Clean and dry at your convenience with our reliable, low-maintenance machines. Say goodbye to wait times and tough stains, while ensuring total hygiene.',
                ],
                [
                    'img'   => '/images/equipment/commercialwasher.webp',
                    'title' => 'Self service laundry',
                    'body'  => 'We provide a comprehensive range of solutions, bringing together washers, dryers, and accessories to create the perfect combination.',
                ],
            ] as $card)
            <div class="reveal">
                <div class="rounded-2xl overflow-hidden mb-5 aspect-[4/3]">
                    <img src="{{ asset($card['img']) }}" alt="{{ $card['title'] }}" class="w-full h-full object-cover">
                </div>
                <h3 class="font-heading font-bold text-navy text-xl mb-2">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $card['body'] }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>

@endif

@if($categorySlug === 'tumble-dryers')
<!-- TUMBLE DRYERS INTRO -->
<section class="py-14 lg:py-20 bg-white border-b border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- Split: text left, image right --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center mb-14">
            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-4">
                    Line 6000 Tumble Dryers
                </h2>
                <p class="font-body text-gray-500 text-lg leading-relaxed mb-3">
                    Professional drying, engineered for performance and efficiency.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    High-capacity tumble dryers designed to maximise throughput, minimise energy costs and keep your laundry operation running at full speed.
                </p>
                <a href="#products"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy-dark text-white font-heading font-bold px-7 py-3.5 rounded-lg text-sm tracking-wide transition-colors">
                    GO TO PRODUCTS
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>
            <div class="flex justify-center reveal reveal-right">
                <img src="{{ asset('images/equipment/line6000-tumble-dryer.webp') }}"
                     alt="Line 6000 Tumble Dryer"
                     class="w-full max-w-md object-contain drop-shadow-xl">
            </div>
        </div>

        {{-- Green stat band --}}
        <div class="rounded-2xl px-8 py-6 flex flex-col sm:flex-row items-center gap-6 reveal" style="background-color: #c8d8a8;">
            <div class="flex-shrink-0 w-20 h-20 rounded-full border-4 border-white/60 flex flex-col items-center justify-center" style="background-color: #a8bc7a;">
                <span class="font-heading font-bold text-white text-xs leading-none">up to</span>
                <span class="font-heading font-bold text-white text-xl leading-none">60%</span>
                <span class="font-body text-white text-[9px] leading-tight text-center">Energy<br>savings</span>
            </div>
            <div>
                <p class="font-heading font-bold text-navy text-lg mb-1">Heat Pump Technology</p>
                <p class="font-body text-navy/80 text-sm leading-relaxed">
                    Reduce energy consumption by up to 60% with heat pump tumble dryers — without compromising on drying performance or cycle times.
                </p>
            </div>
        </div>

    </div>
</section>

{{-- ① Outstanding drying performance --}}
<section class="py-14 lg:py-20 bg-bg border-b border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-10 reveal">Outstanding drying performance</h2>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            {{-- Left: 3 features --}}
            <div class="lg:col-span-2 flex flex-col gap-8">
                @foreach([
                    [
                        'title' => 'Maximum throughput, minimum downtime',
                        'body'  => 'High-capacity drums and fast cycle programmes keep your laundry operation running efficiently around the clock.',
                        'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>',
                    ],
                    [
                        'title' => 'Protect fabrics and extend linen life',
                        'body'  => 'Precise temperature control and moisture sensing prevent over-drying, protecting textile quality and reducing replacement costs.',
                        'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 4.875 7.5 11.25 9 11.25s9-6.375 9-11.25z"/>',
                    ],
                    [
                        'title' => 'Certified ergonomics – Ergocert 4-star',
                        'body'  => 'Designed for operator comfort with easy-access drum height, ergonomic door handles and an intuitive ClarusVibe control panel.',
                        'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/>',
                    ],
                ] as $feat)
                <div class="flex items-start gap-5 reveal">
                    <div class="flex-shrink-0 w-14 h-14 rounded-full border-2 border-navy flex items-center justify-center">
                        <svg class="w-7 h-7 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">{!! $feat['icon'] !!}</svg>
                    </div>
                    <div>
                        <h3 class="font-heading font-bold text-navy text-lg mb-1">{{ $feat['title'] }}</h3>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $feat['body'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Right: Download + Discover --}}
            <div class="flex flex-col gap-5 reveal reveal-right">

                {{-- Download --}}
                <div class="bg-navy rounded-2xl p-6">
                    <h4 class="font-heading font-bold text-white text-base mb-4">Download</h4>
                    <ul class="space-y-4">
                        @foreach([
                            ['label' => 'Line 6000 Washers & Dryers brochure',           'file' => 'EPR-brochure-Line 6000 Evolution Barrier Washers-20241119-EN.pdf'],
                            ['label' => 'Line 6000 High Spin Washers & Heat Pump Dryers', 'file' => 'EPR-Line6000-DryersBrochure-01072025_EN.pdf'],
                            ['label' => 'Ergocert 4-star Certification',                  'file' => ''],
                        ] as $pdf)
                        <li>
                            @if($pdf['file'])
                            <a href="/pdfs/{{ $pdf['file'] }}" target="_blank" download class="flex items-start gap-2 font-body text-sm text-white/80 hover:text-white transition-colors">
                                <svg class="w-4 h-4 flex-shrink-0 mt-0.5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                                {{ $pdf['label'] }}
                            </a>
                            @else
                            <span class="flex items-start gap-2 font-body text-sm text-white/40">
                                <svg class="w-4 h-4 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                                {{ $pdf['label'] }}
                            </span>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Discover --}}
                <div class="bg-white border border-border rounded-2xl p-6">
                    <h4 class="font-heading font-bold text-navy text-base mb-4">Discover</h4>
                    <ul class="space-y-4">
                        @foreach([
                            ['label' => 'Ensuring Profitability With Efficient On-Premises Laundry', 'href' => '#'],
                            ['label' => 'Hotel & Hospitality laundry solutions',                     'href' => route('sectors.hospitality')],
                            ['label' => 'Essentia: the heart of customer service',                   'href' => route('contact')],
                        ] as $link)
                        <li>
                            <a href="{{ $link['href'] }}" class="flex items-start gap-2 font-body text-sm text-navy hover:text-orange font-bold transition-colors">
                                <svg class="w-4 h-4 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                                </svg>
                                {{ $link['label'] }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- ② Feature deep-dives --}}
<section class="py-14 lg:py-20 bg-white border-b border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 flex flex-col gap-16">

        {{-- Heat pump efficiency --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center reveal">
            <div>
                <h3 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-5">Heat pump technology for maximum efficiency</h3>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    Unlike conventional dryers, heat pump models recycle hot air rather than exhausting it — dramatically reducing energy consumption while maintaining consistent drying results.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-5">
                    Ideal for locations where venting is difficult or where energy costs are a priority.
                </p>
                <div class="bg-bg border border-border rounded-xl p-4 flex items-start gap-4">
                    <div class="flex-shrink-0 w-14 h-14 rounded-lg bg-white border border-border flex items-center justify-center p-2">
                        <div class="text-center">
                            <svg class="w-7 h-7 text-navy mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"/></svg>
                            <p class="font-body font-bold text-navy text-[9px] leading-tight mt-0.5">Heat Pump<br>Tech</p>
                        </div>
                    </div>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">
                        The <strong class="text-navy">Heat Pump</strong> system recovers and reuses thermal energy from exhaust air, cutting energy use by up to 60% compared to traditional vented dryers.
                    </p>
                </div>
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('images/equipment/line6000-tumble-dryer.webp') }}" alt="Heat pump tumble dryer" class="w-full max-w-sm object-contain drop-shadow-lg">
            </div>
        </div>

        {{-- Moisture sensing & fabric care --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center reveal">
            <div class="order-2 lg:order-1 flex justify-center">
                <img src="{{ asset('images/equipment/line6000-tumble-dryer.webp') }}" alt="Moisture sensing" class="w-full max-w-sm object-contain drop-shadow-lg">
            </div>
            <div class="order-1 lg:order-2">
                <h3 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-5">Smart moisture sensing for perfect results</h3>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-5">
                    Built-in residual moisture sensors detect when laundry has reached the ideal dryness level and automatically end the cycle — preventing over-drying, protecting fabrics and reducing energy waste.
                </p>
                <div class="bg-bg border border-border rounded-xl p-4 flex items-start gap-4">
                    <div class="flex-shrink-0 w-14 h-14 rounded-lg bg-white border border-border flex items-center justify-center p-2">
                        <div class="text-center">
                            <svg class="w-7 h-7 text-navy mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15M14.25 3.104c.251.023.501.05.75.082M19.8 15l-1.8 1.8m0 0A2.25 2.25 0 0116.5 18H7.5a2.25 2.25 0 01-1.5-.6m11.8-1.8L15 13.2M4.5 18l1.8-1.8m0 0L8 14.8"/></svg>
                            <p class="font-body font-bold text-navy text-[9px] leading-tight mt-0.5">Moisture<br>Sensor</p>
                        </div>
                    </div>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">
                        <strong class="text-navy">Automatic cycle termination</strong> based on real-time moisture readings extends linen life and lowers cost per load.
                    </p>
                </div>
            </div>
        </div>

        {{-- ClarusVibe control --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center reveal">
            <div>
                <h3 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-5">Intuitive control with ClarusVibe</h3>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    The ClarusVibe touchscreen interface makes setting up and monitoring drying cycles effortless. Pre-loaded programmes cover a wide range of fabric types and load sizes.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed">
                    Operators can track performance data in real time, helping laundry managers identify savings opportunities and improve productivity across every shift.
                </p>
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('images/equipment/line6000-tumble-dryer.webp') }}" alt="ClarusVibe control" class="w-full max-w-xs object-contain drop-shadow-lg">
            </div>
        </div>

    </div>
</section>

{{-- ③ Where you can find our Tumble Dryer solutions --}}
<section class="py-14 lg:py-20 bg-bg border-b border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-10 reveal">Where you can find our Tumble Dryer solutions</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
            @foreach([
                ['img' => '/images/about/testimonial-1.jpg',   'title' => 'Hotels & Hospitality',  'body' => 'Keep guests satisfied with fast linen turnaround and consistently high-quality results across towels, bedding and uniforms.'],
                ['img' => '/images/healthcare/engineer.jpg',    'title' => 'Healthcare & Care',     'body' => 'Ensure safe and compliant drying of healthcare textiles with programmes designed to meet hygiene and infection control standards.'],
                ['img' => '/images/about/testimonial-2.jpg',   'title' => 'On-Premises Laundries', 'body' => 'Maximise throughput and reduce cost per load with high-capacity tumble dryers built for demanding commercial environments.'],
            ] as $card)
            <div class="reveal">
                <div class="rounded-2xl overflow-hidden mb-5 aspect-[4/3]">
                    <img src="{{ asset($card['img']) }}" alt="{{ $card['title'] }}" class="w-full h-full object-cover">
                </div>
                <h3 class="font-heading font-bold text-navy text-xl mb-2">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $card['body'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endif

<!-- FILTERS + PRODUCTS GRID -->
<section id="products" class="py-16 lg:py-20 bg-bg">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="flex flex-col lg:flex-row gap-8">

            <!-- Filter Sidebar -->
            <aside class="lg:w-64 flex-shrink-0">
                <div class="bg-white border border-border rounded-2xl p-5 sticky top-24" x-data="{ typeOpen: true, capacityOpen: true, sectorOpen: true }">
                    <h3 class="font-heading font-semibold text-navy text-base mb-4">Filter Equipment</h3>

                    <!-- Type filter -->
                    <div class="mb-4">
                        <button @click="typeOpen = !typeOpen" class="flex items-center justify-between w-full text-sm font-body font-semibold text-navy mb-2 cursor-pointer">
                            Equipment Type
                            <svg class="w-4 h-4 transition-transform" :class="typeOpen ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div x-show="typeOpen" class="space-y-1.5">
                            @foreach (['All Types', 'Freestanding', 'Built-In / Pass-Through', 'High Capacity', 'Standard Capacity'] as $type)
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" class="rounded border-border text-steel cursor-pointer">
                                <span class="text-sm font-body text-gray-600">{{ $type }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <hr class="border-border my-3">

                    <!-- Capacity filter -->
                    <div class="mb-4">
                        <button @click="capacityOpen = !capacityOpen" class="flex items-center justify-between w-full text-sm font-body font-semibold text-navy mb-2 cursor-pointer">
                            Capacity
                            <svg class="w-4 h-4 transition-transform" :class="capacityOpen ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div x-show="capacityOpen" class="space-y-1.5">
                            @foreach (['Up to 10kg', '10–18kg', '18–30kg', '30kg+'] as $cap)
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" class="rounded border-border text-steel cursor-pointer">
                                <span class="text-sm font-body text-gray-600">{{ $cap }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <hr class="border-border my-3">

                    <!-- Sector filter -->
                    <div>
                        <button @click="sectorOpen = !sectorOpen" class="flex items-center justify-between w-full text-sm font-body font-semibold text-navy mb-2 cursor-pointer">
                            Sector
                            <svg class="w-4 h-4 transition-transform" :class="sectorOpen ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div x-show="sectorOpen" class="space-y-1.5">
                            @foreach (['Healthcare', 'Hospitality', 'Care Facilities', 'Commercial'] as $sector)
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" class="rounded border-border text-steel cursor-pointer">
                                <span class="text-sm font-body text-gray-600">{{ $sector }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="mt-4 pt-4 border-t border-border">
                        <a href="{{ route('contact') }}" class="block w-full text-center bg-orange hover:bg-orange-dark text-white font-body font-semibold px-4 py-2.5 rounded-lg text-sm transition-colors cursor-pointer">
                            Get a Quote
                        </a>
                    </div>
                </div>
            </aside>

            <!-- Products Grid -->
            <div class="flex-1">
                <div class="flex items-center justify-between mb-6">
                    <p class="font-body text-gray-600 text-sm">Showing equipment in <strong class="text-navy">{{ $category }}</strong></p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-5">
                    @forelse ($products as $product)
                    <a href="{{ route('equipment.product', [$categorySlug, $product->slug]) }}"
                       class="group bg-white border border-border rounded-2xl overflow-hidden hover:border-navy hover:shadow-card-hover transition-all duration-200">
                        <!-- Product image -->
                        <div class="aspect-video bg-bg border-b border-border flex items-center justify-center overflow-hidden">
                            @if ($product->image_path)
                            <img src="{{ asset($product->image_path) }}"
                                 alt="{{ $product->name }}"
                                 class="w-full h-full object-cover">
                            @else
                            <svg class="w-16 h-16 text-muted" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 010 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.992l-1.004-.827a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            @endif
                        </div>
                        <div class="p-4">
                            <h3 class="font-heading font-bold text-navy text-base mb-1 group-hover:text-steel transition-colors">{{ $product->name }}</h3>
                            @if ($product->capacity)
                            <p class="font-body text-gray-500 text-xs mb-2">Capacity: {{ $product->capacity }}</p>
                            @endif
                            <div class="flex flex-wrap gap-1 mb-3">
                                @foreach ($product->sectors ?? [] as $sec)
                                <span class="text-xs font-body bg-muted text-navy px-2 py-0.5 rounded-full">{{ $sec }}</span>
                                @endforeach
                            </div>
                            <span class="inline-flex items-center gap-1 text-steel text-xs font-body font-semibold">
                                View details <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                            </span>
                        </div>
                    </a>
                    @empty
                    <div class="col-span-3 text-center py-12">
                        <p class="font-body text-gray-500">No equipment available in this category yet. <a href="{{ route('contact') }}" class="text-steel font-semibold hover:underline">Contact us</a> for availability.</p>
                    </div>
                    @endforelse
                </div>
                <div class="mt-8 text-center">
                    <p class="font-body text-gray-500 text-sm mb-4">Looking for a specific model or capacity? We can advise on the right specification for your operation.</p>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center gap-2 bg-navy hover:bg-navy-dark text-white font-body font-semibold px-6 py-3 rounded-lg transition-colors cursor-pointer">
                        Talk to an Engineer
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA BAND -->
@include('components.cta-band', [
    'heading' => 'Need spec advice?',
    'subheading' => 'Our engineers can advise on the right equipment for your operation — capacity, configuration and support options.',
    'primaryText' => 'Get a Quote',
    'primaryHref' => '/contact',
])

@include('components.cta-combined-banner')

@endsection
