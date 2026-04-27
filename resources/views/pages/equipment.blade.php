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

                <div class="hero-title inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-1.5 mb-5">
                    <svg class="w-4 h-4 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                    </svg>
                    <span class="text-sm font-body text-gray-200">Authorised Electrolux Professional Partner</span>
                </div>

                <h1 class="hero-desc font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-4">
                    Commercial Laundry Equipment — Supplied and Supported
                </h1>
                <p class="font-body text-blue-200 text-lg mb-3 font-semibold">Engineering-first supply, installation and long-term support.</p>
                <p class="font-body text-gray-300 text-base leading-relaxed mb-7 max-w-xl">
                    ILS supplies commercial laundry equipment including the full Electrolux Professional range — with expert installation, commissioning and ongoing service support built in.
                </p>

                <div class="hero-btns flex flex-row gap-4">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center bg-orange hover:bg-orange-dark text-white font-body font-bold px-6 py-3.5 text-sm tracking-wide uppercase transition-colors duration-200 rounded-md">
                        Request Equipment Quote
                    </a>
                    <a href="{{ route('rental') }}"
                       class="inline-flex items-center justify-center border-2 border-white/50 hover:border-white text-white font-body font-semibold px-6 py-3.5 text-sm tracking-wide uppercase transition-colors duration-200 hover:bg-white/10 rounded-md">
                        Rental Options
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

<!-- EQUIPMENT CATEGORIES -->
<section class="py-16 lg:py-24 bg-bg">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="text-center mb-12">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-4">Equipment Categories</h2>
            <p class="font-body text-gray-600 text-lg max-w-2xl mx-auto">The full range of commercial laundry equipment — supplied, installed and maintained by ILS.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <a href="{{ route('equipment.category', 'washers') }}" class="group bg-white border border-border rounded-2xl p-6 hover:border-navy hover:shadow-card-hover transition-all duration-200">
                <div class="w-12 h-12 rounded-2xl bg-steel/10 flex items-center justify-center mb-4 group-hover:bg-steel/20 transition-colors">
                    <svg class="w-7 h-7 text-steel" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 010 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.992l-1.004-.827a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-lg mb-2 group-hover:text-steel transition-colors">Commercial Washers</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed mb-3">Freestanding and built-in commercial washers — from 6kg to high-capacity industrial units. Electrolux Professional range available.</p>
                <span class="inline-flex items-center gap-1 text-steel text-sm font-body font-semibold">
                    View washers <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </span>
            </a>

            <a href="{{ route('equipment.category', 'tumble-dryers') }}" class="group bg-white border border-border rounded-2xl p-6 hover:border-navy hover:shadow-card-hover transition-all duration-200">
                <div class="w-12 h-12 rounded-2xl bg-orange/10 flex items-center justify-center mb-4 group-hover:bg-orange/20 transition-colors">
                    <svg class="w-7 h-7 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-lg mb-2 group-hover:text-steel transition-colors">Tumble Dryers</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed mb-3">Gas and electric tumble dryers for commercial operations. Matched capacity to your washer fleet for optimised throughput.</p>
                <span class="inline-flex items-center gap-1 text-steel text-sm font-body font-semibold">
                    View tumble dryers <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </span>
            </a>

            <a href="{{ route('equipment.category', 'barrier-washers') }}" class="group bg-white border border-border rounded-2xl p-6 hover:border-navy hover:shadow-card-hover transition-all duration-200">
                <div class="w-12 h-12 rounded-2xl bg-red-100 flex items-center justify-center mb-4 group-hover:bg-red-200 transition-colors">
                    <svg class="w-7 h-7 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-lg mb-2 group-hover:text-steel transition-colors">Barrier Washers</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed mb-3">Pass-through barrier washers for healthcare and care environments — separating soiled and clean sides for infection control compliance.</p>
                <span class="inline-flex items-center gap-1 text-steel text-sm font-body font-semibold">
                    View barrier washers <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </span>
            </a>

            <a href="{{ route('equipment.category', 'ironers') }}" class="group bg-white border border-border rounded-2xl p-6 hover:border-navy hover:shadow-card-hover transition-all duration-200">
                <div class="w-12 h-12 rounded-2xl bg-navy/10 flex items-center justify-center mb-4 group-hover:bg-navy/20 transition-colors">
                    <svg class="w-7 h-7 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-lg mb-2 group-hover:text-steel transition-colors">Ironers</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed mb-3">Commercial flatwork ironers and chest ironers — for linen, table linen and uniform finishing in hospitality and healthcare.</p>
                <span class="inline-flex items-center gap-1 text-steel text-sm font-body font-semibold">
                    View ironers <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </span>
            </a>

            <a href="{{ route('equipment.category', 'drying-cabinets') }}" class="group bg-white border border-border rounded-2xl p-6 hover:border-navy hover:shadow-card-hover transition-all duration-200">
                <div class="w-12 h-12 rounded-2xl bg-green-100 flex items-center justify-center mb-4 group-hover:bg-green-200 transition-colors">
                    <svg class="w-7 h-7 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-lg mb-2 group-hover:text-steel transition-colors">Drying Cabinets</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed mb-3">Drying cabinets for garments, workwear and PPE — maintaining shape and finish while reducing tumble dryer throughput pressure.</p>
                <span class="inline-flex items-center gap-1 text-steel text-sm font-body font-semibold">
                    View drying cabinets <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </span>
            </a>
        </div>
    </div>
</section>

<!-- PRODUCTIVITY INFOGRAPHIC -->
<section class="py-0 bg-[#011E41] overflow-hidden">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 lg:py-24">

        {{-- Header row --}}
        <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-6 mb-14">
            <div class="max-w-2xl">
                <h2 class="font-heading font-bold text-white text-3xl lg:text-5xl leading-tight">
                    Washers and Dryers designed so thoughtfully<br class="hidden lg:block">
                    <span class="text-[#148af4]">that every step is easy</span>
                </h2>
            </div>
            {{-- Outstanding productivity badge --}}
            <div class="flex-shrink-0">
                <div class="inline-flex flex-col items-center justify-center bg-[#148af4] rounded-2xl px-6 py-4 text-center shadow-lg">
                    <svg class="w-8 h-8 text-white mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/>
                    </svg>
                    <p class="font-heading font-bold text-white text-base leading-tight">Outstanding</p>
                    <p class="font-heading font-bold text-white text-base leading-tight">productivity</p>
                </div>
            </div>
        </div>

        {{-- Workflow diagram --}}
        <div class="mb-14">
            <div class="flex flex-col sm:flex-row items-center gap-0 sm:gap-0">

                {{-- Node 1 --}}
                <div class="flex-1 bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center">
                    <div class="w-12 h-12 bg-[#148af4] rounded-xl flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"/>
                        </svg>
                    </div>
                    <p class="font-heading font-bold text-white text-base leading-tight">Wash &amp; Dry more,</p>
                    <p class="font-heading font-bold text-white text-base leading-tight">in less time</p>
                </div>

                {{-- Arrow --}}
                <div class="flex-shrink-0 text-[#148af4] px-2 rotate-90 sm:rotate-0">
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </div>

                {{-- Node 2 --}}
                <div class="flex-1 bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center">
                    <div class="w-12 h-12 bg-[#148af4] rounded-xl flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 010 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.992l-1.004-.827a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <p class="font-heading font-bold text-white text-base leading-tight">Wash</p>
                </div>

                {{-- Arrow --}}
                <div class="flex-shrink-0 text-[#148af4] px-2 rotate-90 sm:rotate-0">
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </div>

                {{-- Node 3 --}}
                <div class="flex-1 bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center">
                    <div class="w-12 h-12 bg-[#148af4] rounded-xl flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <p class="font-heading font-bold text-white text-base leading-tight">Smart process</p>
                </div>

                {{-- Arrow --}}
                <div class="flex-shrink-0 text-[#148af4] px-2 rotate-90 sm:rotate-0">
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </div>

                {{-- Node 4 --}}
                <div class="flex-1 bg-[#148af4]/20 border border-[#148af4]/50 rounded-2xl p-6 text-center">
                    <div class="w-12 h-12 bg-[#148af4] rounded-xl flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                        </svg>
                    </div>
                    <p class="font-heading font-bold text-[#148af4] text-base leading-tight">Power Balance</p>
                    <p class="font-heading font-bold text-[#148af4] text-base leading-tight">&amp; High Spinning</p>
                </div>

            </div>
        </div>

        {{-- 4 bottom feature chevrons --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">

            @foreach([
                ['icon' => 'M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z', 'label' => 'Exceptional design', 'sub' => 'Ergonomic, award-winning form meets function'],
                ['icon' => 'M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z', 'label' => 'Easy to use', 'sub' => 'Intuitive controls for any operator'],
                ['icon' => 'M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99', 'label' => 'Effortless process', 'sub' => 'Automated cycles reduce manual effort'],
                ['icon' => 'M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941', 'label' => 'Do more &amp; better in less time', 'sub' => 'Higher throughput without compromising results'],
            ] as $feat)
            <div class="bg-white/5 border border-white/10 rounded-2xl p-5 flex flex-col gap-3 hover:bg-white/10 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-lg bg-[#148af4]/20 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $feat['icon'] }}"/>
                        </svg>
                    </div>
                    <p class="font-heading font-bold text-white text-sm leading-tight">{!! $feat['label'] !!}</p>
                </div>
                <p class="font-body text-gray-400 text-xs leading-relaxed">{{ $feat['sub'] }}</p>
            </div>
            @endforeach

        </div>

    </div>
</section>

<!-- TWO PATHS -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="text-center mb-12">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-4">Two Ways to Access Equipment</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-bg border border-border rounded-2xl p-6 lg:p-8">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-lg bg-navy flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/>
                        </svg>
                    </div>
                    <h3 class="font-heading font-bold text-navy text-xl">Outright Purchase &amp; Supply</h3>
                </div>
                <p class="font-body text-gray-600 leading-relaxed mb-5">Buy equipment outright and own it. ILS supplies, delivers, installs and commissions — and can pair with a service contract for ongoing maintenance support.</p>
                <ul class="space-y-2 text-sm font-body text-gray-600">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>Full ownership from day one</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>Electrolux Professional range available</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>Expert installation and commissioning</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>Service contract available separately</li>
                </ul>
                <a href="{{ route('contact') }}" class="mt-5 inline-flex items-center gap-2 bg-navy hover:bg-navy-dark text-white font-body font-semibold px-5 py-2.5 rounded-lg text-sm transition-colors cursor-pointer">
                    Get a Quote
                </a>
            </div>
            <div class="bg-bg border-2 border-orange rounded-2xl p-6 lg:p-8">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-lg bg-orange flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/>
                        </svg>
                    </div>
                    <h3 class="font-heading font-bold text-navy text-xl">Rental &amp; Lease</h3>
                </div>
                <p class="font-body text-gray-600 leading-relaxed mb-5">Access equipment without capital outlay. Maintenance typically included. Predictable monthly cost for easier budgeting and reporting.</p>
                <ul class="space-y-2 text-sm font-body text-gray-600">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>No large capital outlay required</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>Maintenance typically included</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>Flexible terms discussed on enquiry</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>Current Electrolux Professional equipment</li>
                </ul>
                <a href="{{ route('rental') }}" class="mt-5 inline-flex items-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-semibold px-5 py-2.5 rounded-lg text-sm transition-colors cursor-pointer">
                    Explore Rental
                </a>
            </div>
        </div>
    </div>
</section>

<!-- INSTALLATION SECTION -->
<section class="py-16 lg:py-20 bg-bg">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="bg-navy rounded-2xl p-8 lg:p-12 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="font-heading font-bold text-white text-3xl mb-4">Installation &amp; Commissioning</h2>
                <p class="font-body text-gray-300 leading-relaxed mb-4">
                    ILS engineers install and commission all equipment we supply. We don't just deliver — we ensure the equipment is set up correctly, running to specification, and that your team understands how to use it.
                </p>
                <ul class="space-y-3 text-sm font-body text-gray-300">
                    @foreach (['Site survey and utilities check before installation', 'Delivery, positioning and connection by ILS engineers', 'Commissioning and test cycles to confirm correct operation', 'Staff handover and operation guidance', 'Equipment added to service contract or maintenance plan'] as $item)
                    <li class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-orange flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="flex flex-col gap-4">
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-semibold px-6 py-3.5 rounded-lg transition-colors cursor-pointer">
                    Request an Equipment Quote
                </a>
                <a href="{{ route('service-contracts') }}"
                   class="inline-flex items-center justify-center gap-2 border-2 border-white/30 text-white font-body font-semibold px-6 py-3.5 rounded-lg hover:bg-white/10 transition-colors cursor-pointer">
                    View Service Contracts
                </a>
            </div>
        </div>
    </div>
</section>

@include('components.partner-strip')
@include('components.proof-bar')

<!-- CTA BAND -->
@include('components.cta-band', [
    'heading' => 'Protect your equipment investment',
    'subheading' => 'Every ILS equipment supply can be paired with a service contract — giving you planned maintenance and priority call-out support from day one.',
    'primaryText' => 'Get an Equipment Quote',
    'primaryHref' => '/contact',
])

@include('components.cta-combined-banner')

@endsection
