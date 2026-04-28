@extends('layouts.app')

@section('content')

<!-- HERO -->
<style>
@keyframes heroFadeUp {
    from { opacity: 0; transform: translateY(24px); }
    to   { opacity: 1; transform: translateY(0); }
}
.hero-title { animation: heroFadeUp 0.7s ease forwards; }
.hero-desc  { animation: heroFadeUp 0.7s ease 0.2s forwards; opacity: 0; }
.hero-btns  { animation: heroFadeUp 0.7s ease 0.4s forwards; opacity: 0; }
</style>

<section class="relative overflow-hidden flex flex-col" style="height: calc(100vh - 104px); max-height: 900px; min-height: 500px; background-color: #011E41;"
    x-data="{
        current: 0,
        playing: true,
        slides: [
            '/images/hero/hero-placeholder.jpg',
            '/images/healthcare/hero-main.jpg',
            '/images/about/about-engineers.jpg',
            '/images/about/about-equipment.jpg',
            '/images/healthcare/engineer.jpg'
        ],
        prev() { this.current = (this.current - 1 + this.slides.length) % this.slides.length },
        next() { this.current = (this.current + 1) % this.slides.length },
        init() { setInterval(() => { if (this.playing) this.next() }, 5000) }
    }">

    <!-- Slides -->
    <div class="absolute inset-0">
        <template x-for="(slide, index) in slides" :key="index">
            <img :src="slide"
                 alt="ILS commercial laundry"
                 class="absolute inset-0 w-full h-full object-cover object-right transition-opacity duration-1000 ease-in-out"
                 :class="current === index ? 'opacity-100' : 'opacity-0'">
        </template>
        <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.95) 0%, rgba(1,30,65,0.80) 40%, rgba(1,30,65,0.40) 60%, transparent 100%);"></div>
    </div>

    <!-- Text — vertically centered, aligned with nav -->
    <div class="relative z-10 flex-1 flex items-center w-full" style="padding-top: 70px;">
        <div class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-2">
            <div style="max-width: 560px;">

                <div class="hero-title flex items-center gap-2 mb-4">
                    <a href="{{ route('equipment') }}" class="text-gray-400 hover:text-gray-200 text-sm font-body transition-colors">Equipment</a>
                    <svg class="w-3 h-3 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                    <span class="text-gray-300 text-sm font-body">{{ $category }}</span>
                </div>

                <h1 class="hero-desc font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-4">{{ $category }} Equipment</h1>
                <p class="font-body text-blue-200 text-lg max-w-xl leading-relaxed mb-7">
                    Commercial {{ strtolower($category) }} equipment supplied, installed and supported by Irish Laundry Systems. Electrolux Professional range available.
                </p>

                <div class="hero-btns">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center bg-orange hover:bg-orange-dark text-white font-body font-bold px-6 py-3.5 text-sm tracking-wide uppercase transition-colors duration-200 rounded-md">
                        Request Equipment Quote
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- Carousel controls — unified bottom-center row -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-20 flex items-center gap-4">

        <!-- Prev -->
        <button @click="prev()" aria-label="Previous slide"
                class="w-12 h-12 rounded-full bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white flex items-center justify-center transition-all duration-200">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <polyline points="15 18 9 12 15 6"/>
            </svg>
        </button>

        <!-- Frosted pill: play + dots -->
        <div class="flex items-center gap-3 bg-white/10 backdrop-blur-sm rounded-full px-5 py-3">
            <button @click="playing = !playing" :aria-label="playing ? 'Pause' : 'Play'"
                    class="w-6 h-6 flex items-center justify-center text-white transition-opacity duration-200 hover:opacity-70">
                <svg x-show="playing" class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <rect x="6" y="4" width="4" height="16"/><rect x="14" y="4" width="4" height="16"/>
                </svg>
                <svg x-show="!playing" x-cloak class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <polygon points="5 3 19 12 5 21 5 3"/>
                </svg>
            </button>
            <template x-for="(slide, index) in slides" :key="index">
                <button @click="current = index" :aria-label="'Slide ' + (index + 1)"
                        class="h-2 rounded-full transition-all duration-300"
                        :class="current === index ? 'bg-white w-8' : 'bg-white/40 hover:bg-white/70 w-2'">
                </button>
            </template>
        </div>

        <!-- Next -->
        <button @click="next()" aria-label="Next slide"
                class="w-12 h-12 rounded-full bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white flex items-center justify-center transition-all duration-200">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <polyline points="9 18 15 12 9 6"/>
            </svg>
        </button>

    </div>

    <!-- Bottom strip — Electrolux partner showcase -->
    <div class="relative z-10 w-full bg-white/95 backdrop-blur-sm border-t border-white/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-2 py-4 flex items-center justify-between gap-6">
            <div class="flex items-center gap-5">
                <div class="flex-shrink-0">
                    <img src="/images/logo/EPR_Authorized_Partner_horizontal_positive_CMYK.jpg"
                         alt="Electrolux Professional Authorized Partner"
                         class="h-12 w-auto">
                </div>
                <div class="hidden sm:block border-l border-gray-300 pl-5">
                    <p class="text-[11px] font-body font-semibold text-navy uppercase tracking-[0.18em]">Official Authorised Partner</p>
                    <p class="text-[13px] font-body text-gray-600 mt-0.5">Electrolux Professional — Ireland</p>
                </div>
            </div>
            <a href="{{ route('electrolux') }}"
               class="flex-shrink-0 text-xs font-body font-semibold text-navy hover:text-orange uppercase tracking-wide transition-colors duration-200 flex items-center gap-1.5 whitespace-nowrap">
                Learn more
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
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

    </div>
</section>

{{-- Green stat full-width band --}}
<div class="w-full py-8" style="background-color: #c8d8a8;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 flex flex-col sm:flex-row items-center gap-12">
        <div class="flex-shrink-0 w-28 h-28 rounded-full border-4 border-white/60 flex flex-col items-center justify-center" style="background-color: #a8bc7a;">
            <span class="font-heading font-bold text-white text-sm leading-none">up to</span>
            <span class="font-heading font-bold text-white text-3xl leading-none">50%</span>
            <span class="font-body text-white text-xs leading-tight text-center">Water<br>savings</span>
        </div>
        <div class="text-center sm:text-left">
            <p class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-2">Water savings</p>
            <p class="font-body text-navy/80 text-base lg:text-lg leading-relaxed max-w-xl">
                Reduce water consumption by 50% with a Barrier Washer fitted with a second drain valve.
            </p>
        </div>
    </div>
</div>

{{-- ① Enhanced usability, superior safety --}}
<section class="bg-white border-t border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="py-10 lg:py-14">
            <h2 class="font-heading font-bold text-navy text-xl lg:text-2xl mb-8 reveal">
                Enhanced usability, superior safety
            </h2>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="lg:col-span-2 flex flex-col">
                    @foreach([
                        ['icon' => '/images/healthcare/hygiene-icon.png',  'alt' => 'Hygiene icon',  'title' => 'Maximise hygiene in healthcare applications', 'body' => 'Robust infection prevention measures to eliminate contamination risk between dirty and clean zones at every stage of the wash cycle.'],
                        ['icon' => '/images/healthcare/operator-icon.png', 'alt' => 'Operator icon', 'title' => 'Operator support in high-output laundries',     'body' => 'Dual-partition drum and auto-positioning for easy manual handling of heavy loads — reducing operator strain on busy hospital laundry shifts.'],
                        ['icon' => '/images/healthcare/control-icon.png',  'alt' => 'Control icon',  'title' => 'Intelligent control',                           'body' => 'Intuitive interface managing dirty and clean zones independently — ensuring failsafe disinfection and full audit trail compliance.'],
                    ] as $feature)
                    <div class="flex items-center gap-8 flex-1 py-6 reveal">
                        <div class="flex-shrink-0"><img src="{{ $feature['icon'] }}" alt="{{ $feature['alt'] }}" class="w-36 h-36 object-contain"></div>
                        <div>
                            <h3 class="font-heading font-bold text-navy text-xl lg:text-2xl mb-2">{{ $feature['title'] }}</h3>
                            <p class="font-body text-gray-500 text-base leading-relaxed">{{ $feature['body'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="flex flex-col gap-5 reveal reveal-right">
                    <div class="bg-navy rounded-2xl p-6">
                        <h4 class="font-heading font-bold text-white text-base mb-4">Download</h4>
                        <ul class="space-y-3">
                            @foreach([
                                ['label' => 'Line 6000 Evolution Barrier Washers',    'file' => 'EPR-brochure-Line 6000 Evolution Barrier Washers-20241119-EN.pdf'],
                                ['label' => 'Line 6000 Pullman Barrier Washers',      'file' => 'EPR-leaflet-pullman-barrier-washer-EN-20230919-LR.pdf'],
                                ['label' => 'Clean, Sanitize, Decontaminate Brochure','file' => 'Electrolux_WhitePaper_CleaningSolution.pdf'],
                                ['label' => 'Line 6000 Tumble Dryers',                'file' => 'EPR-Line6000-DryersBrochure-01072025_EN.pdf'],
                                ['label' => 'Line 6000 Hot Cylinder Ironers',         'file' => 'EPR-Brochure Line 6000-Hot_Cylinder_Ironers-ENG-2023_LR.pdf'],
                            ] as $pdf)
                            <li>
                                <a href="/pdfs/{{ $pdf['file'] }}" target="_blank" download class="flex items-center gap-2 font-body text-sm text-white/80 hover:text-white transition-colors">
                                    <svg class="w-4 h-4 flex-shrink-0 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                                    {{ $pdf['label'] }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="bg-bg border border-border rounded-2xl p-6">
                        <h4 class="font-heading font-bold text-navy text-base mb-4">Discover</h4>
                        <ul class="space-y-3">
                            @foreach([
                                ['label' => 'Hospital: Uncompromising hygiene',      'href' => route('sectors.healthcare')],
                                ['label' => 'Firefighters: Protect the protectors',  'href' => route('contact')],
                                ['label' => 'Essentia: the heart of customer service','href' => route('contact')],
                            ] as $link)
                            <li>
                                <a href="{{ $link['href'] }}" class="flex items-center gap-2 font-body text-sm text-navy hover:text-orange font-bold transition-colors">
                                    <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                                    {{ $link['label'] }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
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
                <div class="inline-flex items-center gap-4">
                    <img src="/images/healthcare/Auto%20Inner%20Door%20Opening%20(AIDO)%20System.png" alt="Auto Inner Door Opening" class="w-32 h-32 object-contain flex-shrink-0">
                    <p class="font-heading font-bold text-navy text-lg leading-tight">Auto Inner<br>Door Opening</p>
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

    </div>
</section>

{{-- Green stat full-width band --}}
<div class="w-full py-8" style="background-color: #c8d8a8;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 flex flex-col sm:flex-row items-center gap-12">
        <div class="flex-shrink-0 w-28 h-28 rounded-full border-4 border-white/60 flex flex-col items-center justify-center" style="background-color: #a8bc7a;">
            <span class="font-heading font-bold text-white text-sm leading-none">up to</span>
            <span class="font-heading font-bold text-white text-3xl leading-none">40%</span>
            <span class="font-body text-white text-xs leading-tight text-center">Energy<br>Saving</span>
        </div>
        <div class="text-center sm:text-left">
            <p class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-2">Energy savings</p>
            <p class="font-body text-navy/80 text-base lg:text-lg leading-relaxed max-w-xl">
                Reduce your operational expenditure by up to 40% without compromising on productivity with built-in technologies to optimize utilisation.
            </p>
        </div>
    </div>
</div>

<!-- ULTIMATE PEACE OF MIND -->
<section class="bg-white border-t border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="py-10 lg:py-14">
        <h2 class="font-heading font-bold text-navy text-xl lg:text-2xl mb-8 reveal">
            Ultimate peace of mind
        </h2>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <div class="lg:col-span-2 flex flex-col">
                @foreach([
                    [
                        'icon'  => '/images/healthcare/control-icon.png',
                        'alt'   => 'Control icon',
                        'title' => 'Intuitive operation',
                        'body'  => 'Effortless user experience with ClarusVibe control — designed for fast, accurate programming in any laundry environment.',
                    ],
                    [
                        'icon'  => '/images/healthcare/hygiene-icon.png',
                        'alt'   => 'Savings icon',
                        'title' => 'Long-term savings & productivity',
                        'body'  => 'Automatically adjust water and detergents to keep operational expenditure to a minimum without compromising results.',
                    ],
                    [
                        'icon'  => '/images/healthcare/operator-icon.png',
                        'alt'   => 'Ergonomics icon',
                        'title' => 'Certified ergonomics',
                        'body'  => "Reduce absenteeism by improving operators' well-being — Ergocert 4-star certified across the entire Line 6000 range.",
                    ],
                ] as $feature)
                <div class="flex items-center gap-8 flex-1 py-6 reveal">
                    <div class="flex-shrink-0"><img src="{{ $feature['icon'] }}" alt="{{ $feature['alt'] }}" class="w-36 h-36 object-contain"></div>
                    <div>
                        <h3 class="font-heading font-bold text-navy text-xl lg:text-2xl mb-2">{{ $feature['title'] }}</h3>
                        <p class="font-body text-gray-500 text-base leading-relaxed">{{ $feature['body'] }}</p>
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
                    <div class="flex-shrink-0 w-24 h-24">
                        <img src="/images/healthcare/EfficientDosing.png" alt="Intelligent Dosing" class="w-full h-full object-contain">
                    </div>
                    <div>
                        <h4 class="font-heading font-bold text-navy text-lg mb-2">The precise amount,<br>every load</h4>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">
                            With <strong class="text-navy">Intelligent Dosing</strong>, you can automatically add the <strong class="text-navy">precise amount of detergent</strong> and chemicals based on the dry weight of each load*.
                        </p>
                    </div>
                </div>

                {{-- Automatic Savings --}}
                <div class="flex items-start gap-5 mb-6">
                    <div class="flex-shrink-0 w-24 h-24">
                        <img src="/images/equipment/AutomaticSavings.png" alt="Automatic Savings" class="w-full h-full object-contain">
                    </div>
                    <div>
                        <h4 class="font-heading font-bold text-navy text-lg mb-2">Not a drop<br>of water wasted</h4>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">
                            <strong class="text-navy">Automatic Savings</strong> weighs the linens and adjusts the water intake to the actual load. This <strong class="text-navy">saves water, energy and money</strong> at anything less than full loads.
                        </p>
                    </div>
                </div>

                {{-- Integrated Savings --}}
                <div class="flex items-start gap-5 mb-6">
                    <div class="flex-shrink-0 w-24 h-24">
                        <img src="/images/equipment/IntegratedSavings.png" alt="Integrated Savings" class="w-full h-full object-contain">
                    </div>
                    <div>
                        <h4 class="font-heading font-bold text-navy text-lg mb-2">Always the right load,<br>never more</h4>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">
                            The <strong class="text-navy">Integrated Savings</strong> feature measures and <strong class="text-navy">shows the load in real time</strong>, to avoid overloading and underloading of the machine — reducing water and energy used, and helping to <strong class="text-navy">extend the lifetime of your washer</strong>.
                        </p>
                    </div>
                </div>

                <p class="font-body text-gray-400 text-xs italic">*Only available on ClarusVibe models.</p>
            </div>

            {{-- Right: image --}}
            <div class="flex justify-center items-start reveal reveal-right">
                <img src="{{ asset('images/equipment/ProfessionalLaundryOperator.png') }}"
                     alt="Professional laundry operator"
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
                    'img'   => '/images/equipment/Multi-Housing%20Laundry.png',
                    'title' => 'Multi-Housing Laundry',
                    'body'  => 'Ensure tenant satisfaction by offering a quick, hassle-free, and eco-friendly laundry experience. Invest in energy-efficient machines and high-capacity dryers.',
                ],
                [
                    'img'   => '/images/equipment/On%20Premises%20Laundries.png',
                    'title' => 'On Premises Laundries',
                    'body'  => 'Clean and dry at your convenience with our reliable, low-maintenance machines. Say goodbye to wait times and tough stains, while ensuring total hygiene.',
                ],
                [
                    'img'   => '/images/equipment/Self%20Service%20Laundry.png',
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
<section class="py-4 lg:py-6 bg-white border-b border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- Split: text left, image right --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-center mb-4">
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
                     class="w-full max-w-[200px] object-contain drop-shadow-xl">
            </div>
        </div>

    </div>
</section>

{{-- Green stat full-width band --}}
<div class="w-full py-5" style="background-color: #c8d8a8;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 flex flex-col sm:flex-row items-center gap-8">
        <div class="flex-shrink-0 w-24 h-24 rounded-full border-4 border-white/60 flex flex-col items-center justify-center" style="background-color: #a8bc7a;">
            <span class="font-heading font-bold text-white text-sm leading-none">up to</span>
            <span class="font-heading font-bold text-white text-3xl leading-none">60%</span>
            <span class="font-body text-white text-xs leading-tight text-center">Energy<br>savings</span>
        </div>
        <div class="flex-1 text-center sm:text-left">
            <p class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-1">Heat Pump Technology</p>
            <p class="font-body text-navy/80 text-base leading-relaxed">
                Reduce energy consumption by up to 60% with heat pump tumble dryers — without compromising on drying performance or cycle times.
            </p>
        </div>
    </div>
</div>

{{-- ① Outstanding drying performance --}}
<section class="bg-white border-t border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="py-10 lg:py-14">
        <h2 class="font-heading font-bold text-navy text-xl lg:text-2xl mb-8 reveal">Shaping the sustainable laundry</h2>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <div class="lg:col-span-2 flex flex-col">

                {{-- Easy, healthy & safe operation --}}
                <div class="flex items-center gap-8 flex-1 py-6 reveal">
                    <div class="flex-shrink-0 w-24 h-24">
                        <img src="/images/healthcare/HygieneGuard.png" alt="Hygiene Guard" class="w-full h-full object-contain">
                    </div>
                    <div>
                        <h3 class="font-heading font-bold text-navy text-xl lg:text-2xl mb-2">Easy, healthy &amp; safe operation</h3>
                        <p class="font-body text-gray-500 text-base leading-relaxed">Human-centred design with certified ergonomics</p>
                    </div>
                </div>

                {{-- Long-term savings --}}
                <div class="flex items-center gap-8 flex-1 py-6 reveal">
                    <div class="flex-shrink-0 w-24 h-24">
                        <img src="/images/healthcare/MoistureBalance.png" alt="Moisture Balance" class="w-full h-full object-contain">
                    </div>
                    <div>
                        <h3 class="font-heading font-bold text-navy text-xl lg:text-2xl mb-2">Long-term savings</h3>
                        <p class="font-body text-gray-500 text-base leading-relaxed">Intelligent moisture management to avoid wasted energy</p>
                    </div>
                </div>

                {{-- Outstanding productivity --}}
                <div class="flex items-center gap-8 flex-1 py-6 reveal">
                    <div class="flex-shrink-0 w-24 h-24">
                        <img src="/images/healthcare/DrumSpeed.png" alt="Drum Speed" class="w-full h-full object-contain">
                    </div>
                    <div>
                        <h3 class="font-heading font-bold text-navy text-xl lg:text-2xl mb-2">Outstanding productivity</h3>
                        <p class="font-body text-gray-500 text-base leading-relaxed">Fast cycle times and even drying for a wide range of fabrics</p>
                    </div>
                </div>

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
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 pb-10">
        <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl">Discover the full range of {{ $category }}</h2>
    </div>
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

@include('components.partner-strip')
@include('components.proof-bar')

<!-- CTA BAND -->
@include('components.cta-band', [
    'heading' => 'Need spec advice?',
    'subheading' => 'Our engineers can advise on the right equipment for your operation — capacity, configuration and support options.',
    'primaryText' => 'Get a Quote',
    'primaryHref' => '/contact',
])

@include('components.cta-combined-banner')

@endsection
