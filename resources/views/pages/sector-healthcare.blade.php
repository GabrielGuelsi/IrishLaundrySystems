@extends('layouts.app')

@section('meta')
<meta name="description" content="Engineering-led commercial laundry support for healthcare — barrier washers, service contracts, and priority response across Ireland.">
@endsection

@section('content')

@include('components.sector-tabs')

<!-- 1. HERO -->
<section class="bg-navy py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <div class="reveal reveal-left">
                <x-pretitle label="Healthcare Laundry Support" />
                <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-6">
                    Healthcare laundry systems designed around hygiene control, workflow discipline, and operational continuity.
                </h1>
                <p class="font-body text-gray-300 text-lg leading-relaxed mb-8">
                    Barrier washer solutions, service contracts, and engineering support — built for environments where hygiene and uptime are non-negotiable.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 mb-10">
                    <a href="#healthcare-assessment"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Healthcare Assessment
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white/40 hover:border-white text-white font-body font-semibold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        Talk to an Engineer
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-3 reveal reveal-right">
                <div class="col-span-2 rounded-2xl overflow-hidden h-56">
                    <img src="/images/healthcare/hero-main.jpg" alt="Healthcare laundry installation" class="w-full h-full object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden h-40">
                    <img src="/images/healthcare/hero-panel.jpg" alt="Machine control panel" class="w-full h-full object-cover">
                </div>
                <div class="bg-white/5 border border-white/10 rounded-2xl p-5 flex flex-col justify-center h-40">
                    <p class="font-heading font-bold text-white text-sm leading-snug">Built for sites where contamination control and continuity cannot be treated casually.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 2. PROOF BAR -->
@include('components.proof-bar')

<!-- 3. SPLIT STATEMENT -->
<section class="py-16 lg:py-24 bg-white border-b border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-6xl leading-tight">
                    We'll keep your critical laundry equipment running.
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-700 text-xl leading-relaxed mb-4">
                    ILS supports healthcare operations across Ireland — reducing breakdown risk, improving hygiene compliance, and keeping laundry systems operational.
                </p>
                <p class="font-body text-gray-500 leading-relaxed mb-8">
                    Whatever the site requires, we'll take care of it.
                </p>
                <a href="{{ route('sectors.healthcare') }}#healthcare-equipment"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy-dark text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    See the equipment we provide
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- 4. LAUNDRY CYCLE MANAGEMENT -->
<section class="py-16 lg:py-24 bg-white border-y border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="max-w-3xl mb-10 reveal">
            <x-pretitle label="Laundry Cycle Management" />
            <p class="font-body text-gray-600 text-lg leading-relaxed mb-6">
                Effective laundry cycle management for hospitals and healthcare sites combines proper sorting, transport, washing, drying, finishing and storage to keep infection at bay while maximizing the safety of both patients and staff.
            </p>
            <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl leading-tight">
                Maximized hygiene guaranteed with Line 6000 laundry solutions
            </h2>
        </div>

        <div class="reveal w-full max-w-4xl mx-auto">
            <img src="/images/healthcare/Electrolux-Barrier-infografica-LOW.webp"
                 alt="Healthcare laundry cycle management"
                 class="w-full h-auto object-contain">
        </div>

    </div>
</section>

{{-- Video band --}}
<section class="bg-navy py-14 lg:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="reveal flex flex-col lg:flex-row items-center gap-8 lg:gap-12">

            <div class="lg:w-2/5">
                <span class="inline-block font-body font-bold text-xs uppercase tracking-widest text-white mb-4">See It In Action</span>
                <h3 class="font-heading font-bold text-white text-xl lg:text-2xl leading-snug mb-4">
                    Watch how the Line 6000 transforms healthcare laundry
                </h3>
                <p class="font-body text-white text-base leading-relaxed mb-6">
                    From barrier washing to hygienic drying and finishing — see the full cycle in operation and discover why leading hospitals trust Line 6000 to protect patients and staff every day.
                </p>
                <a href="https://www.youtube.com/watch?v=26g9u4GPRVc" target="_blank"
                   class="inline-flex items-center gap-2 font-body font-semibold text-white hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z"/>
                    </svg>
                    Watch the full video
                </a>
            </div>

            <div class="lg:w-3/5 w-full">
                <div class="relative w-full rounded-xl overflow-hidden shadow-2xl" style="padding-bottom: 56.25%;">
                    <iframe class="absolute inset-0 w-full h-full"
                            src="https://www.youtube.com/embed/26g9u4GPRVc"
                            title="Laundry Cycle Management"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 5. BARRIER WASHERS PRODUCT BLOCK -->

{{-- A: Split hero --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <div class="reveal reveal-left">
                <x-pretitle label="Professional Barrier Washers" />
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-4">
                    Take total control of contamination in sensitive laundry environments.
                </h2>
                <p class="font-body text-gray-600 text-base leading-relaxed mb-4">
                    <strong>Implement failsafe laundry cycle management programmes in high-risk applications.</strong>
                </p>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-8">
                    A wide range of high productivity Barrier Washers designed to remove human error and protect against accidental contamination — built specifically for the demands of Irish healthcare environments.
                </p>
                <a href="{{ route('equipment') }}"
                   class="inline-flex items-center gap-2 bg-navy text-white hover:bg-navy/90 font-body font-bold px-7 py-3.5 rounded-lg text-sm transition-colors duration-200">
                    Go to Products
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            <div class="reveal reveal-right flex justify-center items-center">
                <img src="/images/equipment/line6000-barrier-washer.webp"
                     alt="Line 6000 Barrier Washer"
                     class="max-h-80 w-auto object-contain drop-shadow-xl">
            </div>

        </div>
    </div>
</section>

{{-- B: Metric bar --}}
<div class="bg-[#e8f0e0] py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center gap-6">
        <div class="flex-shrink-0 text-center">
            <span class="block font-heading font-bold text-navy text-4xl leading-none">50%</span>
            <span class="block font-body text-xs font-bold uppercase tracking-widest text-gray-500 mt-1">Water Savings</span>
        </div>
        <div class="w-px h-12 bg-gray-300 hidden sm:block"></div>
        <p class="font-body text-gray-700 text-sm leading-relaxed">
            Reduce water consumption by 50% with a Barrier Washer fitted with a second drain valve — without compromising hygiene performance.
        </p>
    </div>
</div>

{{-- C: Features + Download/Discover --}}
<section class="py-16 lg:py-24 bg-white border-t border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-10 reveal">
            Enhanced usability, superior safety
        </h2>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            {{-- Left: 3 features --}}
            <div class="lg:col-span-2 flex flex-col gap-8">
                @foreach([
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/>',
                        'title' => 'Maximise hygiene in healthcare applications',
                        'body'  => 'Robust infection prevention measures to eliminate contamination risk between dirty and clean zones at every stage of the wash cycle.',
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/>',
                        'title' => 'Operator support in high-output laundries',
                        'body'  => 'Dual-partition drum and auto-positioning for easy manual handling of heavy loads — reducing operator strain on busy hospital laundry shifts.',
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 15V5.25m19.5 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 7.409A2.25 2.25 0 012.25 5.493V5.25"/>',
                        'title' => 'Intelligent control',
                        'body'  => 'Intuitive interface managing dirty and clean zones independently — ensuring failsafe disinfection and full audit trail compliance.',
                    ],
                ] as $feature)
                <div class="flex items-start gap-5 reveal">
                    <div class="w-11 h-11 rounded-full border-2 border-border flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            {!! $feature['icon'] !!}
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-heading font-bold text-navy text-base mb-1">{{ $feature['title'] }}</h3>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $feature['body'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Right: Download + Discover stacked --}}
            <div class="flex flex-col gap-5 reveal reveal-right">

                {{-- Download box --}}
                <div class="bg-navy rounded-2xl p-6">
                    <h4 class="font-heading font-bold text-white text-base mb-4">Download</h4>
                    <ul class="space-y-3">
                        @foreach([
                            'Line 6000 Evolution Barrier Washers',
                            'Line 6000 Pullman Barrier Washers',
                            'Clean, Sanitize, Decontaminate Brochure',
                        ] as $pdf)
                        <li>
                            <a href="#" class="flex items-center gap-2 font-body text-sm text-white/80 hover:text-white transition-colors">
                                <svg class="w-4 h-4 flex-shrink-0 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/>
                                </svg>
                                {{ $pdf }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Discover box --}}
                <div class="bg-bg border border-border rounded-2xl p-6">
                    <h4 class="font-heading font-bold text-navy text-base mb-4">Discover</h4>
                    <ul class="space-y-3">
                        @foreach([
                            ['label' => 'Service & Maintenance Contracts', 'route' => 'service-contracts'],
                            ['label' => 'Full Equipment Range',            'route' => 'equipment'],
                            ['label' => 'Request a Site Assessment',       'route' => 'contact'],
                        ] as $link)
                        <li>
                            <a href="{{ route($link['route']) }}" class="flex items-center gap-2 font-body text-sm text-navy hover:text-orange font-semibold transition-colors">
                                <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
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



<!-- FEATURE DETAILS: Maximise hygiene / Operator support / Intelligent control -->
<section class="py-10 bg-bg border-b border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">

        {{-- 1. Maximise hygiene --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start reveal border-b border-border pb-8">
            <div>
                <img src="/images/healthcare/illustration-barrier-washers-1.webp"
                     alt="Barrier washer hygiene illustration"
                     class="w-full h-auto object-contain">
            </div>
            <div class="lg:pt-2">
                <h3 class="font-heading font-bold text-navy text-xl mb-4">Maximise hygiene in healthcare applications</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed mb-2">
                    Barrier washing technology helps prevent the spread of infection through effective and repeatable laundry cycle management.
                </p>
                <p class="font-body text-gray-600 text-sm leading-relaxed mb-5">
                    Line 6000 Barrier Washers provide a physical barrier between dirty and clean laundry zones and sit flush with the wall for easy cleaning.
                </p>
                <div class="flex items-center gap-4">
                    <img src="/images/healthcare/HygieneWatch_png.webp" alt="Hygiene Watchdog" class="w-16 h-16 object-contain flex-shrink-0">
                    <p class="font-body text-gray-600 text-sm leading-relaxed">
                        The <strong class="text-navy">Hygiene Watchdog</strong> feature stops accidental door openings to protect against cross-contamination.
                    </p>
                </div>
            </div>
        </div>

        {{-- 2. Operator support --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start reveal border-b border-border pb-8">
            <div class="lg:pt-2">
                <h3 class="font-heading font-bold text-navy text-xl mb-4">Operator support in high-output laundries</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed mb-5">
                    All Line 6000 Barrier Washers feature the Ergocent 4-star rating with ergonomic door handles and optimised door height. Models over 50kg include a dual-compartment partition drum that auto-positions at the end of each cycle.
                </p>
                <div class="flex items-center gap-4">
                    <img src="/images/healthcare/AutoInner_png.webp" alt="Auto Inner Door Opening" class="w-16 h-16 object-contain flex-shrink-0">
                    <p class="font-body text-gray-600 text-sm leading-relaxed">
                        The <strong class="text-navy">Auto Inner Door Opening</strong> feature pre-opens inner drum doors at the end of each wash cycle.
                    </p>
                </div>
            </div>
            <div>
                <img src="/images/healthcare/Foto-web-BW.jpg"
                     alt="Operator loading barrier washer drum"
                     class="w-full h-auto rounded-xl object-cover">
            </div>
        </div>

        {{-- 3. Intelligent control --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start reveal">
            <div>
                <img src="/images/healthcare/immagine-schermi-PullmannBW.webp"
                     alt="ClarusVibe intelligent control display"
                     class="w-full h-auto object-contain">
            </div>
            <div class="lg:pt-2">
                <h3 class="font-heading font-bold text-navy text-xl mb-4">Intelligent control</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed mb-2">
                    The new ClarusVibe control comes pre-set with self-explanatory programs to improve productivity and reduce running costs.
                </p>
                <p class="font-body text-gray-600 text-sm leading-relaxed mb-2">
                    Both dirty and clean sides feature their own display to avoid operators crossing zones.
                </p>
                <p class="font-body text-gray-400 text-xs italic mt-3">* Only available on Pullman line</p>
            </div>
        </div>

    </div>
</section>

<!-- 7. HEALTHCARE EQUIPMENT -->
<section class="py-16 lg:py-24 bg-bg border-y border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-10 reveal">
            <div class="max-w-2xl">
                <x-pretitle label="Healthcare Equipment" />
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl">
                    Everything your healthcare laundry needs, in a single partner.
                </h2>
            </div>
            <a href="{{ route('equipment') }}"
               class="flex-shrink-0 inline-flex items-center gap-2 bg-navy hover:bg-steel text-white font-body font-semibold px-6 py-3 rounded-lg text-sm transition-colors duration-200">
                Browse all equipment
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

        <div x-data="{ open: 0 }" class="divide-y divide-border border-t border-b border-border">

            @php $items = [
                [
                    'img'     => 'line6000-barrier-washer',
                    'name'    => 'Line 6000 Barrier Washers',
                    'heading' => 'Hygienic separation without compromise.',
                    'body'    => 'The Line 6000 Barrier Washer range is the first commercial washer to achieve third-party ERGOCERT ergonomic certification — engineered to ease operator strain while maintaining the strictest hygiene standards. The clean/dirty barrier is built into the machine itself, not managed by procedure. Physical separation of soiled and clean zones eliminates cross-contamination risk at source — the standard required by healthcare environments operating under infection control protocols.',
                ],
                [
                    'img'     => 'line6000-tumble-dryer',
                    'name'    => 'Line 6000 Tumble Dryers',
                    'heading' => 'Precision drying for high-demand healthcare cycles.',
                    'body'    => 'The Line 6000 Tumble Dryer range carries a 4-star ERGOCERT rating and features Moisture Balance technology — automatically sensing residual moisture in each load and adjusting the cycle to dry precisely without overdrying. This protects textile integrity across high-volume linen cycles, reduces energy consumption, and supports the continuous throughput healthcare laundry demands around the clock.',
                ],
                [
                    'img'     => 'line6000-ironer',
                    'name'    => 'Line 6000 Ironers',
                    'heading' => 'Finishing equipment built for healthcare throughput.',
                    'body'    => 'The Line 6000 Ironer range is equipped with DIAMMS™ — Direct Adaptive Ironing Motor Management System — which adjusts roller pressure and speed in real time to the textile being processed. Hygiene Guard certification confirms the system meets the hygiene standards required for linen finishing in clinical and care environments. Designed for consistent output, shift after shift.',
                ],
            ]; @endphp

            @foreach($items as $i => $item)
            <div>
                <button @click="open = (open === {{ $i }}) ? null : {{ $i }}"
                        class="w-full flex items-center justify-between py-6 text-left group cursor-pointer">
                    <span class="font-heading font-bold text-navy text-lg lg:text-xl group-hover:text-steel transition-colors">{{ $item['name'] }}</span>
                    <span class="flex-shrink-0 ml-6 text-gray-400 group-hover:text-navy transition-colors">
                        <svg x-show="open !== {{ $i }}" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                        <svg x-show="open === {{ $i }}" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15"/></svg>
                    </span>
                </button>
                <div x-show="open === {{ $i }}"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 -translate-y-2"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center pb-10">
                    <div>
                        <h3 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-5">{{ $item['heading'] }}</h3>
                        <p class="font-body text-gray-600 leading-relaxed mb-8">{{ $item['body'] }}</p>
                        <a href="{{ route('equipment') }}"
                           class="inline-flex items-center gap-2 bg-navy hover:bg-steel text-white font-body font-semibold px-6 py-3 rounded-lg text-sm transition-colors">
                            View equipment
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                    <div class="flex items-center justify-center h-72 lg:h-96">
                        <img src="/images/equipment/{{ $item['img'] }}.webp"
                             alt="{{ $item['name'] }}"
                             class="max-h-full w-auto object-contain">
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>

<!-- 9. ASSESSMENT FORM -->
<section id="healthcare-assessment" class="py-16 lg:py-24 bg-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 items-stretch">

            <div class="bg-navy rounded-2xl p-8 flex flex-col reveal reveal-left">
                <div class="flex items-center gap-2 mb-5">
                    <span class="w-2 h-2 rounded-full bg-[#148af4] flex-shrink-0"></span>
                    <span class="font-body text-xs font-bold uppercase tracking-widest text-gray-400">Healthcare Assessment</span>
                </div>
                <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl mb-4">
                    Request a healthcare laundry assessment.
                </h2>
                <p class="font-body text-gray-400 text-sm leading-relaxed mb-8 flex-1">
                    Site context, hygiene requirements, equipment logic, and the right support structure — one conversation.
                </p>
                <div class="flex flex-col sm:flex-row gap-3">
                    <button form="healthcare-form" type="submit"
                        class="inline-flex items-center justify-center bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-6 py-3 rounded-lg text-sm transition-colors duration-200">
                        Submit Request
                    </button>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center border border-white/30 hover:border-white text-white font-body font-semibold px-6 py-3 rounded-lg text-sm transition-colors duration-200 hover:bg-white/10">
                        Talk to an Engineer
                    </a>
                </div>
            </div>

            <div class="bg-white border border-border rounded-2xl p-8 reveal reveal-right">
                <h3 class="font-heading font-bold text-navy text-xl mb-1">Request Healthcare Assessment</h3>
                <p class="font-body text-gray-500 text-sm mb-6">Only the information needed — context, site, and follow-up priority.</p>
                <form id="healthcare-form" action="{{ route('contact') }}" method="POST" class="space-y-3">
                    @csrf
                    <div class="grid grid-cols-2 gap-3">
                        <input type="text" name="name" required placeholder="Full Name"
                            class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors">
                        <input type="text" name="organisation" placeholder="Organisation"
                            class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors">
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <input type="email" name="email" required placeholder="Email Address"
                            class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors">
                        <input type="tel" name="phone" placeholder="Phone Number"
                            class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors">
                    </div>
                    <input type="text" name="site_type" placeholder="Site Type / Healthcare Context"
                        class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors">
                    <textarea name="message" rows="3" placeholder="What do you need help with?"
                        class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors resize-none"></textarea>
                    <textarea name="context" rows="2" placeholder="Operational Context / Hygiene Requirement / Urgency"
                        class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors resize-none"></textarea>
                    <button type="submit"
                        class="w-full bg-navy hover:bg-steel text-white font-body font-bold px-8 py-3.5 rounded-lg text-sm transition-colors duration-200">
                        Submit Request
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection
