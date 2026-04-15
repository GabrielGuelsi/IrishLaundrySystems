@extends('layouts.app')

@section('pageTitle', 'Commercial Laundry Engineering Ireland | Service Contracts, Repairs & Equipment | Irish Laundry Systems')
@section('metaDescription', 'Engineering-led commercial laundry support since 1987. Service contracts, repairs, equipment rental and parts across the Republic of Ireland. Request a service assessment.')

@section('content')

<!-- 1. HERO -->
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

                <h1 class="hero-title font-heading font-bold text-white leading-tight tracking-tight mb-5" style="font-size: clamp(1.9rem, 3.0vw, 3.0rem);">
                    Keeping Commercial Laundry <span class="text-orange">Running.</span>
                </h1>

                <p class="hero-desc font-body text-white/80 leading-relaxed mb-8" style="font-size: 1.05rem; max-width: 520px;">
                    Contracts, repairs and equipment — keeping critical operations running across Ireland.
                </p>

                <div class="hero-btns flex flex-row gap-4">
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center justify-center bg-orange hover:bg-orange-dark text-white font-body font-bold px-6 py-3.5 text-sm tracking-wide uppercase transition-colors duration-200 rounded-md">
                        Request Assessment
                    </a>
                    <a href="{{ route('services') }}"
                       class="inline-flex items-center justify-center border-2 border-white/50 hover:border-white text-white font-body font-semibold px-6 py-3.5 text-sm tracking-wide uppercase transition-colors duration-200 hover:bg-white/10 rounded-md">
                        View Services
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

<!-- 2. TRUST ANCHORS — Electrolux credibility line + proof strip -->
@include('components.proof-bar')

<!-- 3. THREE CORE PATHWAYS — CardSwap -->
<style>
.cs-card {
    position: absolute;
    top: 50%; left: 50%;
    width: 520px; height: 360px;
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,0.10);
    background: #011E41;
    transform-style: preserve-3d;
    will-change: transform;
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
    padding: 40px;
    box-sizing: border-box;
    overflow: hidden;
    cursor: default;
}
.cs-card-accent {
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    border-radius: 12px 12px 0 0;
}
@media (max-width: 1023px) {
    #cs-container {
        transform: translateX(-50%) scale(0.82);
        transform-origin: bottom center;
    }
}
@media (max-width: 640px) {
    #cs-container {
        transform: translateX(-50%) scale(0.65);
        transform-origin: bottom center;
    }
    .lg\:w-7\/12.relative { height: 380px !important; }
}
</style>

<section class="py-16 lg:py-28 bg-gray-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">

            <!-- Left: heading + text -->
            <div class="lg:w-5/12 flex-shrink-0">
                <p class="font-body text-orange font-semibold text-xs uppercase tracking-[0.2em] mb-4">Built for Operational Continuity</p>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-6">
                    3 pathways, <span class="text-orange">built around uptime</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Whether you need structured preventive maintenance, rapid-response repairs, or equipment with service included — ILS has a pathway built around keeping your operation running.
                </p>
                <div class="flex flex-col gap-3 text-base font-body">
                    <a href="{{ route('repairs') }}" class="flex items-center gap-3 text-navy/70 hover:text-orange transition-colors">
                        <span class="w-1.5 h-1.5 rounded-full bg-steel flex-shrink-0"></span> Repairs &amp; Call-outs
                    </a>
                    <a href="{{ route('service-contracts') }}" class="flex items-center gap-3 text-navy/70 hover:text-orange transition-colors">
                        <span class="w-1.5 h-1.5 rounded-full bg-orange flex-shrink-0"></span> Service Contracts
                    </a>
                    <a href="{{ route('rental') }}" class="flex items-center gap-3 text-navy/70 hover:text-orange transition-colors">
                        <span class="w-1.5 h-1.5 rounded-full bg-navy flex-shrink-0"></span> Equipment Rental
                    </a>
                </div>
            </div>

            <!-- Right: CardSwap -->
            <div class="lg:w-7/12 w-full relative" style="height: 580px;">
                <div id="cs-container" style="position:absolute; bottom:0; left:50%; transform:translateX(-50%); perspective:900px; overflow:visible;">

                    <!-- Card 01 — Repairs & Call-outs -->
                    <div class="cs-card">
                        <div class="cs-card-accent" style="background: #148af4;"></div>
                        <div class="flex items-center gap-3 mb-5 mt-2">
                            <span class="font-heading font-bold text-white/20 text-4xl leading-none select-none">01</span>
                            <h3 class="font-heading font-bold text-white text-lg">Repairs &amp; Call-outs</h3>
                        </div>
                        <p class="font-body text-white/60 text-sm leading-relaxed mb-6">
                            When breakdowns happen, you need engineers who know the equipment and carry the right parts. ILS provides reactive repair support across the Republic of Ireland.
                        </p>
                        <a href="{{ route('repairs') }}" class="inline-flex items-center gap-2 text-steel font-body font-semibold text-sm hover:opacity-80 transition-opacity">
                            Repairs &amp; call-outs
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>

                    <!-- Card 02 — Service Contracts -->
                    <div class="cs-card">
                        <div class="cs-card-accent" style="background: #F4620F;"></div>
                        <div class="flex items-center gap-3 mb-5 mt-2">
                            <span class="font-heading font-bold text-white/20 text-4xl leading-none select-none">02</span>
                            <h3 class="font-heading font-bold text-white text-lg">Service Contracts</h3>
                        </div>
                        <p class="font-body text-white/60 text-sm leading-relaxed mb-6">
                            Structured preventive maintenance across three tiers — Core, Priority and Assured. Predictable costs, documented history, fewer unplanned stoppages.
                        </p>
                        <a href="{{ route('service-contracts') }}" class="inline-flex items-center gap-2 text-orange font-body font-semibold text-sm hover:opacity-80 transition-opacity">
                            View service contracts
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>

                    <!-- Card 03 — Equipment Rental -->
                    <div class="cs-card">
                        <div class="cs-card-accent" style="background: rgba(255,255,255,0.3);"></div>
                        <div class="flex items-center gap-3 mb-5 mt-2">
                            <span class="font-heading font-bold text-white/20 text-4xl leading-none select-none">03</span>
                            <h3 class="font-heading font-bold text-white text-lg">Equipment Rental</h3>
                        </div>
                        <p class="font-body text-white/60 text-sm leading-relaxed mb-6">
                            Electrolux Professional equipment supplied, installed and supported. Structured rental with maintenance included — managed cost and operational continuity.
                        </p>
                        <a href="{{ route('rental') }}" class="inline-flex items-center gap-2 text-white/80 font-body font-semibold text-sm hover:opacity-80 transition-opacity">
                            Rental options
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<script>
(function () {
    if (typeof gsap === 'undefined') return;

    const cards  = Array.from(document.querySelectorAll('#cs-container .cs-card'));
    const total  = cards.length;
    const distX  = 50, distY = 55, skew = 6;
    const cfg    = { ease: 'elastic.out(0.6,0.9)', dur: 2, overlap: 0.9 };
    const order  = cards.map((_, i) => i);

    const slot  = i => ({ x: i * distX, y: -i * distY, z: -i * distX * 1.5, zIndex: total - i });
    const place = (el, s) => gsap.set(el, { x: s.x, y: s.y, z: s.z, xPercent: -50, yPercent: -50, skewY: skew, zIndex: s.zIndex, force3D: true });

    cards.forEach((c, i) => place(c, slot(i)));

    function swap() {
        const [front, ...rest] = order;
        const el = cards[front];
        const tl = gsap.timeline();

        tl.to(el, { y: '+=520', duration: cfg.dur, ease: cfg.ease });

        tl.addLabel('promote', `-=${cfg.dur * cfg.overlap}`);
        rest.forEach((idx, i) => {
            const s = slot(i);
            tl.set(cards[idx], { zIndex: s.zIndex }, 'promote');
            tl.to(cards[idx], { x: s.x, y: s.y, z: s.z, duration: cfg.dur, ease: cfg.ease }, `promote+=${i * 0.15}`);
        });

        const back = slot(total - 1);
        tl.addLabel('return', `promote+=${cfg.dur * 0.05}`);
        tl.call(() => gsap.set(el, { zIndex: back.zIndex }), undefined, 'return');
        tl.to(el, { x: back.x, y: back.y, z: back.z, duration: cfg.dur, ease: cfg.ease }, 'return');
        tl.call(() => order.splice(0, total, ...rest, front));
    }

    swap();
    setInterval(swap, 5000);
}());
</script>

<!-- 4. SECTOR ROUTING TABS -->
@include('components.sector-switcher')

<!-- 5. WHY ILS + ELECTROLUX -->
<section class="py-20 lg:py-28 bg-navy overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-14 lg:gap-24 items-start">

            <!-- LEFT — anchor column -->
            <div class="lg:w-5/12 flex-shrink-0 lg:sticky lg:top-32">
                <p class="font-body font-semibold text-orange text-xs uppercase tracking-[0.22em] mb-4">Platform + Local Execution</p>
                <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl leading-tight mb-5">
                    Why ILS and Electrolux Professional Work Together
                </h2>
                <p class="font-body text-blue-200 text-base leading-relaxed mb-10">
                    Manufacturer-grade capability delivered through field engineering. The combination that reduces friction and downtime risk in critical laundry operations.
                </p>

                <!-- Electrolux badge — prominent white card -->
                <div class="bg-white rounded-xl px-6 py-5 inline-block mb-8 shadow-lg">
                    <img src="/images/logo/EPR_Authorized_Partner_horizontal_positive_CMYK.jpg"
                         alt="Electrolux Professional Authorized Partner"
                         class="h-12 w-auto">
                </div>

                <div>
                    <a href="{{ route('electrolux') }}"
                       class="inline-flex items-center gap-2 text-steel-light hover:text-white font-body font-semibold text-sm transition-colors duration-200">
                        About our Electrolux partnership
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- RIGHT — numbered editorial rows -->
            <div class="lg:w-7/12 flex flex-col divide-y divide-white/10">

                <!-- Row 01 -->
                <div class="flex gap-6 lg:gap-8 py-8 first:pt-0">
                    <span class="font-heading font-bold text-white/10 leading-none flex-shrink-0 select-none" style="font-size: 3.5rem; line-height: 1;">01</span>
                    <div class="pt-1">
                        <div class="flex items-center gap-2.5 mb-3">
                            <svg class="w-5 h-5 text-orange flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09Z"/>
                            </svg>
                            <h3 class="font-heading font-bold text-white text-lg">Electrolux Professional</h3>
                        </div>
                        <p class="font-body text-gray-400 text-sm leading-relaxed">Manufacturer platform, engineering standards, genuine parts network and technical documentation across the full equipment range.</p>
                    </div>
                </div>

                <!-- Row 02 -->
                <div class="flex gap-6 lg:gap-8 py-8">
                    <span class="font-heading font-bold text-white/10 leading-none flex-shrink-0 select-none" style="font-size: 3.5rem; line-height: 1;">02</span>
                    <div class="pt-1">
                        <div class="flex items-center gap-2.5 mb-3">
                            <svg class="w-5 h-5 text-steel-light flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/>
                            </svg>
                            <h3 class="font-heading font-bold text-white text-lg">ILS — Local Execution</h3>
                        </div>
                        <p class="font-body text-gray-400 text-sm leading-relaxed">Field response, structured service contracts, preventive maintenance and reactive support delivered by engineers who know Irish laundry operations.</p>
                    </div>
                </div>

                <!-- Row 03 -->
                <div class="flex gap-6 lg:gap-8 py-8 last:pb-0">
                    <span class="font-heading font-bold text-white/10 leading-none flex-shrink-0 select-none" style="font-size: 3.5rem; line-height: 1;">03</span>
                    <div class="pt-1">
                        <div class="flex items-center gap-2.5 mb-3">
                            <svg class="w-5 h-5 text-emerald flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            <h3 class="font-heading font-bold text-white text-lg">Together — Lower Downtime Risk</h3>
                        </div>
                        <p class="font-body text-gray-400 text-sm leading-relaxed">Faster diagnosis, first-visit resolution and lifecycle parts support — reducing operational risk for healthcare, hospitality, care and commercial operations.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- 6. EQUIPMENT TEASER — FlowingMenu -->
<style>
.fm-wrap { width: 100%; overflow: hidden; }
.fm-nav  { display: flex; flex-direction: column; margin: 0; padding: 0; }

.fm-item {
    position: relative;
    overflow: hidden;
    border-top: 1px solid rgba(0,0,0,0.07);
    height: 90px;
    flex-shrink: 0;
}

.fm-link {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 100%;
    padding: 0 24px 0 0;
    padding-left: max(24px, calc((100vw - 1280px) / 2 + 8px));
    text-decoration: none;
    color: #011E41;
    font-family: inherit;
    font-size: clamp(1.05rem, 1.6vw, 1.4rem);
    font-weight: 600;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    transition: color 0.2s ease;
    cursor: pointer;
}
.fm-link:hover { color: #011E41; }

.fm-link-arrow {
    flex-shrink: 0;
    opacity: 0.3;
    transition: opacity 0.2s ease, transform 0.2s ease;
}
.fm-item:hover .fm-link-arrow {
    opacity: 0.9;
    transform: translateX(4px);
}

.fm-marquee {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    pointer-events: none;
    transform: translateY(101%);
    background: #011E41;
    overflow: hidden;
}
.fm-marquee-inner-wrap { height: 100%; width: 100%; overflow: hidden; }
.fm-marquee-inner {
    display: flex;
    align-items: center;
    height: 100%;
    width: max-content;
    will-change: transform;
}
.fm-marquee-part {
    display: flex;
    align-items: center;
    flex-shrink: 0;
    padding: 0 2vw;
}
.fm-marquee-part span {
    white-space: nowrap;
    text-transform: uppercase;
    font-weight: 600;
    font-size: clamp(1.05rem, 1.6vw, 1.4rem);
    letter-spacing: 0.06em;
    color: #fff;
    padding: 0 2vw;
}
.fm-marquee-img {
    width: 160px;
    height: 56px;
    border-radius: 40px;
    background-size: cover;
    background-position: center;
    opacity: 0.85;
    flex-shrink: 0;
}
</style>

<section style="background: #fff; overflow: hidden;">

    <!-- Header -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-2 pt-14 pb-10 flex items-end justify-between gap-6">
        <div>
            <p class="font-body font-semibold text-orange text-xs uppercase tracking-[0.22em] mb-3">Browse by type</p>
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl">Equipment Categories</h2>
            <p class="font-body text-gray-500 text-base mt-3 max-w-lg">Commercial laundry equipment supplied, installed and supported across the Republic of Ireland.</p>
        </div>
        <a href="{{ route('equipment') }}"
           class="hidden lg:inline-flex items-center gap-2 border border-navy/20 hover:border-navy text-navy/60 hover:text-navy font-body font-semibold px-5 py-2.5 text-xs uppercase tracking-wide transition-all duration-200 whitespace-nowrap">
            Browse All Equipment
            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
        </a>
    </div>

    <!-- FlowingMenu -->
    <div class="fm-wrap border-t border-gray-100">
        <nav class="fm-nav">

            <div class="fm-item">
                <a class="fm-link" href="{{ route('equipment.category', 'washers') }}">
                    Commercial Washers
                    <svg class="fm-link-arrow w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
                <div class="fm-marquee">
                    <div class="fm-marquee-inner-wrap">
                        <div class="fm-marquee-inner" data-speed="14">
                            <div class="fm-marquee-part"><span>Commercial Washers</span><div class="fm-marquee-img" style="background-image:url('/images/hero/hero-placeholder.jpg')"></div></div>
                            <div class="fm-marquee-part"><span>Commercial Washers</span><div class="fm-marquee-img" style="background-image:url('/images/hero/hero-placeholder.jpg')"></div></div>
                            <div class="fm-marquee-part"><span>Commercial Washers</span><div class="fm-marquee-img" style="background-image:url('/images/hero/hero-placeholder.jpg')"></div></div>
                            <div class="fm-marquee-part"><span>Commercial Washers</span><div class="fm-marquee-img" style="background-image:url('/images/hero/hero-placeholder.jpg')"></div></div>
                            <div class="fm-marquee-part"><span>Commercial Washers</span><div class="fm-marquee-img" style="background-image:url('/images/hero/hero-placeholder.jpg')"></div></div>
                            <div class="fm-marquee-part"><span>Commercial Washers</span><div class="fm-marquee-img" style="background-image:url('/images/hero/hero-placeholder.jpg')"></div></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fm-item">
                <a class="fm-link" href="{{ route('equipment.category', 'tumble-dryers') }}">
                    Tumble Dryers
                    <svg class="fm-link-arrow w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
                <div class="fm-marquee">
                    <div class="fm-marquee-inner-wrap">
                        <div class="fm-marquee-inner" data-speed="16">
                            <div class="fm-marquee-part"><span>Tumble Dryers</span><div class="fm-marquee-img" style="background-image:url('/images/about/about-equipment.jpg')"></div></div>
                            <div class="fm-marquee-part"><span>Tumble Dryers</span><div class="fm-marquee-img" style="background-image:url('/images/about/about-equipment.jpg')"></div></div>
                            <div class="fm-marquee-part"><span>Tumble Dryers</span><div class="fm-marquee-img" style="background-image:url('/images/about/about-equipment.jpg')"></div></div>
                            <div class="fm-marquee-part"><span>Tumble Dryers</span><div class="fm-marquee-img" style="background-image:url('/images/about/about-equipment.jpg')"></div></div>
                            <div class="fm-marquee-part"><span>Tumble Dryers</span><div class="fm-marquee-img" style="background-image:url('/images/about/about-equipment.jpg')"></div></div>
                            <div class="fm-marquee-part"><span>Tumble Dryers</span><div class="fm-marquee-img" style="background-image:url('/images/about/about-equipment.jpg')"></div></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fm-item">
                <a class="fm-link" href="{{ route('equipment.category', 'barrier-washers') }}">
                    Barrier Washers
                    <svg class="fm-link-arrow w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
                <div class="fm-marquee">
                    <div class="fm-marquee-inner-wrap">
                        <div class="fm-marquee-inner" data-speed="13">
                            <div class="fm-marquee-part"><span>Barrier Washers</span><div class="fm-marquee-img" style="background-image:url('/images/healthcare/hero-main.jpg')"></div></div>
                            <div class="fm-marquee-part"><span>Barrier Washers</span><div class="fm-marquee-img" style="background-image:url('/images/healthcare/hero-main.jpg')"></div></div>
                            <div class="fm-marquee-part"><span>Barrier Washers</span><div class="fm-marquee-img" style="background-image:url('/images/healthcare/hero-main.jpg')"></div></div>
                            <div class="fm-marquee-part"><span>Barrier Washers</span><div class="fm-marquee-img" style="background-image:url('/images/healthcare/hero-main.jpg')"></div></div>
                            <div class="fm-marquee-part"><span>Barrier Washers</span><div class="fm-marquee-img" style="background-image:url('/images/healthcare/hero-main.jpg')"></div></div>
                            <div class="fm-marquee-part"><span>Barrier Washers</span><div class="fm-marquee-img" style="background-image:url('/images/healthcare/hero-main.jpg')"></div></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fm-item" style="border-bottom: 1px solid rgba(0,0,0,0.07);">
                <a class="fm-link" href="{{ route('equipment.category', 'ironers') }}">
                    Ironers
                    <svg class="fm-link-arrow w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
                <div class="fm-marquee">
                    <div class="fm-marquee-inner-wrap">
                        <div class="fm-marquee-inner" data-speed="15">
                            <div class="fm-marquee-part"><span>Ironers</span><div class="fm-marquee-img" style="background-image:url('/images/about/about-engineers.jpg')"></div></div>
                            <div class="fm-marquee-part"><span>Ironers</span><div class="fm-marquee-img" style="background-image:url('/images/about/about-engineers.jpg')"></div></div>
                            <div class="fm-marquee-part"><span>Ironers</span><div class="fm-marquee-img" style="background-image:url('/images/about/about-engineers.jpg')"></div></div>
                            <div class="fm-marquee-part"><span>Ironers</span><div class="fm-marquee-img" style="background-image:url('/images/about/about-engineers.jpg')"></div></div>
                            <div class="fm-marquee-part"><span>Ironers</span><div class="fm-marquee-img" style="background-image:url('/images/about/about-engineers.jpg')"></div></div>
                            <div class="fm-marquee-part"><span>Ironers</span><div class="fm-marquee-img" style="background-image:url('/images/about/about-engineers.jpg')"></div></div>
                        </div>
                    </div>
                </div>
            </div>

        </nav>
    </div>

    <!-- Mobile browse button -->
    <div class="lg:hidden text-center py-8 px-4">
        <a href="{{ route('equipment') }}"
           class="inline-flex items-center gap-2 border border-navy/30 text-navy font-body font-semibold px-6 py-3 text-sm uppercase tracking-wide hover:bg-navy/5 transition-colors">
            Browse All Equipment →
        </a>
    </div>

</section>

<script>
(function () {
    if (typeof gsap === 'undefined') return;

    function distSq(x, y, x2, y2) {
        return (x - x2) ** 2 + (y - y2) ** 2;
    }

    function closestEdge(mouseX, mouseY, w, h) {
        return distSq(mouseX, mouseY, w / 2, 0) < distSq(mouseX, mouseY, w / 2, h) ? 'top' : 'bottom';
    }

    document.querySelectorAll('.fm-item').forEach(function (item) {
        const marquee      = item.querySelector('.fm-marquee');
        const marqueeInner = item.querySelector('.fm-marquee-inner');
        const firstPart    = item.querySelector('.fm-marquee-part');
        const speed        = parseFloat(marqueeInner.dataset.speed) || 14;
        const defaults     = { duration: 0.55, ease: 'expo.out' };

        // Start continuous scroll after a brief layout pass
        setTimeout(function () {
            const w = firstPart ? firstPart.offsetWidth : 300;
            if (w === 0) return;
            gsap.to(marqueeInner, { x: -w, duration: speed, ease: 'none', repeat: -1 });
        }, 80);

        item.addEventListener('mouseenter', function (e) {
            const r    = item.getBoundingClientRect();
            const edge = closestEdge(e.clientX - r.left, e.clientY - r.top, r.width, r.height);
            gsap.timeline({ defaults })
                .set(marquee,      { y: edge === 'top' ? '-101%' : '101%' })
                .set(marqueeInner, { y: edge === 'top' ?  '101%' : '-101%' })
                .to([marquee, marqueeInner], { y: '0%' });
        });

        item.addEventListener('mouseleave', function (e) {
            const r    = item.getBoundingClientRect();
            const edge = closestEdge(e.clientX - r.left, e.clientY - r.top, r.width, r.height);
            gsap.timeline({ defaults })
                .to(marquee,      { y: edge === 'top' ? '-101%' : '101%' })
                .to(marqueeInner, { y: edge === 'top' ?  '101%' : '-101%' }, 0);
        });
    });
}());
</script>

<!-- 7. PROOF — TESTIMONIALS -->
@include('components.testimonials')

<!-- 8. FINAL CTA + SHORT FORM -->
<section class="py-16 lg:py-24 bg-navy">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <div>
                <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl mb-4 leading-tight">
                    Ready to Reduce Downtime Risk?
                </h2>
                <p class="font-body text-blue-200 text-lg leading-relaxed mb-8">
                    Talk to an ILS engineer about service contracts, repairs or equipment. Tell us about your operation and we will confirm the right next step.
                </p>
                <div class="space-y-4">
                    <a href="tel:+353000000000" class="flex items-center gap-3 text-gray-200 hover:text-white transition-colors group">
                        <div class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-white/20 transition-colors">
                            <x-icon class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/>
                            </x-icon>
                        </div>
                        <div>
                            <p class="font-body font-semibold text-white text-sm">+353 01 123 4567</p>
                            <p class="font-body text-gray-400 text-xs">Mon–Fri, 8am–5pm</p>
                        </div>
                    </a>
                    <a href="{{ route('electrolux') }}" class="inline-flex items-center gap-2 text-steel-light hover:text-white font-body text-sm transition-colors">
                        Authorised Electrolux Professional Partner
                        <x-icon class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                        </x-icon>
                    </a>
                </div>
            </div>
            <div class="bg-white rounded-xl p-6 lg:p-8 shadow-card">
                <h3 class="font-heading font-bold text-navy text-lg mb-1">Request a Service Assessment</h3>
                <p class="font-body text-gray-500 text-sm mb-6">We aim to respond within 24 hours.</p>
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="home_name" class="block text-sm font-body font-medium text-navy mb-1.5">Name <span class="text-red-500">*</span></label>
                            <input type="text" id="home_name" name="name" required
                                   class="w-full px-3.5 py-2.5 border border-border rounded-lg font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-steel/30 focus:border-steel transition-colors"
                                   placeholder="Your name">
                        </div>
                        <div>
                            <label for="home_company" class="block text-sm font-body font-medium text-navy mb-1.5">Organisation <span class="text-red-500">*</span></label>
                            <input type="text" id="home_company" name="company" required
                                   class="w-full px-3.5 py-2.5 border border-border rounded-lg font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-steel/30 focus:border-steel transition-colors"
                                   placeholder="Company or organisation">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="home_phone" class="block text-sm font-body font-medium text-navy mb-1.5">Phone <span class="text-red-500">*</span></label>
                            <input type="tel" id="home_phone" name="phone" required
                                   class="w-full px-3.5 py-2.5 border border-border rounded-lg font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-steel/30 focus:border-steel transition-colors"
                                   placeholder="+353...">
                        </div>
                        <div>
                            <label for="home_sector" class="block text-sm font-body font-medium text-navy mb-1.5">Sector <span class="text-red-500">*</span></label>
                            <select id="home_sector" name="sector" required
                                    class="w-full px-3.5 py-2.5 border border-border rounded-lg font-body text-sm text-navy focus:outline-none focus:ring-2 focus:ring-steel/30 focus:border-steel transition-colors bg-white">
                                <option value="" disabled selected>Select sector</option>
                                <option value="healthcare">Healthcare</option>
                                <option value="hospitality">Hospitality</option>
                                <option value="care">Care Facilities</option>
                                <option value="commercial">Commercial &amp; Industrial</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="home_request_type" class="block text-sm font-body font-medium text-navy mb-1.5">Request Type <span class="text-red-500">*</span></label>
                        <select id="home_request_type" name="request_type" required
                                class="w-full px-3.5 py-2.5 border border-border rounded-lg font-body text-sm text-navy focus:outline-none focus:ring-2 focus:ring-steel/30 focus:border-steel transition-colors bg-white">
                            <option value="" disabled selected>What do you need?</option>
                            <option value="contract">Service Contract</option>
                            <option value="rental">Equipment Rental</option>
                            <option value="breakdown">Breakdown / Repair</option>
                            <option value="parts">Parts &amp; Aftercare</option>
                            <option value="equipment_quote">Equipment Quote</option>
                        </select>
                    </div>
                    <div class="flex items-start gap-2.5">
                        <input type="checkbox" id="home_gdpr" name="gdpr_consent" value="1" required
                               class="mt-0.5 w-4 h-4 rounded border-border text-steel focus:ring-steel/30 cursor-pointer flex-shrink-0">
                        <label for="home_gdpr" class="font-body text-gray-500 text-xs leading-relaxed cursor-pointer">
                            I consent to ILS storing and using my data to respond to this request. <a href="{{ route('privacy') }}" class="text-steel underline hover:text-navy">Privacy policy</a>. <span class="text-red-500">*</span>
                        </label>
                    </div>
                    <!-- Hidden UTM fields -->
                    <input type="hidden" name="utm_source" id="home_utm_source">
                    <input type="hidden" name="utm_medium" id="home_utm_medium">
                    <input type="hidden" name="utm_campaign" id="home_utm_campaign">
                    <input type="hidden" name="page_source" value="homepage_cta">
                    <button type="submit"
                            class="w-full bg-orange hover:bg-orange-dark text-white font-body font-bold py-3.5 px-6 rounded-lg text-base transition-colors duration-200 cursor-pointer"
                            data-ga-cta="homepage_form_submit">
                        Request Service Assessment
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
