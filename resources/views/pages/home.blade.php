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

            <!-- 01 — Service Contracts -->
            <div class="relative bg-white rounded-xl shadow-sm border-l-4 border-orange p-6 lg:p-8 flex flex-col hover:shadow-md hover:-translate-y-0.5 transition-all duration-200 overflow-hidden">
                <span class="absolute top-4 right-5 font-heading font-bold text-6xl text-navy/5 select-none leading-none" aria-hidden="true">01</span>
                <div class="w-11 h-11 rounded-lg bg-orange/10 flex items-center justify-center mb-5">
                    <x-icon class="w-6 h-6 text-orange">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"/>
                    </x-icon>
                </div>
                <h3 class="font-heading font-bold text-navy text-xl mb-3">Service Contracts</h3>
                <p class="font-body text-gray-600 leading-relaxed mb-5 flex-1">
                    Structured preventive maintenance programmes across three tiers — Core, Priority and Assured. Designed to reduce unplanned stoppages and give operations managers predictable costs and documented maintenance history.
                </p>
                <a href="{{ route('service-contracts') }}" class="inline-flex items-center gap-2 text-orange font-body font-semibold hover:text-orange-dark transition-colors text-sm">
                    View service contracts
                    <x-icon class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                    </x-icon>
                </a>
            </div>

            <!-- 02 — Repairs & Call-outs -->
            <div class="relative bg-white rounded-xl shadow-sm border-l-4 border-steel p-6 lg:p-8 flex flex-col hover:shadow-md hover:-translate-y-0.5 transition-all duration-200 overflow-hidden">
                <span class="absolute top-4 right-5 font-heading font-bold text-6xl text-navy/5 select-none leading-none" aria-hidden="true">02</span>
                <div class="w-11 h-11 rounded-lg bg-steel/10 flex items-center justify-center mb-5">
                    <x-icon class="w-6 h-6 text-steel">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z"/>
                    </x-icon>
                </div>
            </div>

            <!-- 03 — Equipment Rental -->
            <div class="relative bg-white rounded-xl shadow-sm border-l-4 border-navy p-6 lg:p-8 flex flex-col hover:shadow-md hover:-translate-y-0.5 transition-all duration-200 overflow-hidden">
                <span class="absolute top-4 right-5 font-heading font-bold text-6xl text-navy/5 select-none leading-none" aria-hidden="true">03</span>
                <div class="w-11 h-11 rounded-lg bg-navy/10 flex items-center justify-center mb-5">
                    <x-icon class="w-6 h-6 text-navy">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12"/>
                    </x-icon>
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
        <div class="text-center mb-12">
            <p class="text-orange font-body font-semibold text-sm uppercase tracking-widest mb-3">Platform + Local Execution</p>
            <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl mb-4 leading-tight">
                Why ILS and Electrolux Professional Work Together
            </h2>
            <p class="font-body text-blue-200 text-lg max-w-2xl mx-auto">
                Manufacturer-grade capability delivered through field engineering. The combination that reduces friction and downtime risk in critical laundry operations.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                <div class="w-12 h-12 rounded-xl bg-orange/20 flex items-center justify-center mx-auto mb-4">
                    <x-icon class="w-6 h-6 text-orange">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z"/>
                    </x-icon>
                </div>
                <h3 class="font-heading font-semibold text-white text-base mb-2">Electrolux Professional</h3>
                <p class="font-body text-gray-400 text-sm leading-relaxed">Manufacturer platform, engineering standards, genuine parts network and technical documentation across the full equipment range.</p>
            </div>
            <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                <div class="w-12 h-12 rounded-xl bg-steel/30 flex items-center justify-center mx-auto mb-4">
                    <x-icon class="w-6 h-6 text-steel-light">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/>
                    </x-icon>
                </div>
            </div>
            <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                <div class="w-12 h-12 rounded-xl bg-emerald/20 flex items-center justify-center mx-auto mb-4">
                    <x-icon class="w-6 h-6 text-emerald">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </x-icon>
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
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 lg:gap-6 mb-10">
            <a href="{{ route('equipment.category', 'washers') }}" class="bg-white border border-border rounded-xl p-5 text-center hover:shadow-card-hover hover:border-steel/30 transition-all duration-200 group">
                <div class="w-10 h-10 rounded-lg bg-steel/10 flex items-center justify-center mx-auto mb-3">
                    <x-icon class="w-5 h-5 text-steel">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99"/>
                    </x-icon>
                </div>
                <p class="font-heading font-semibold text-navy text-sm group-hover:text-steel transition-colors">Commercial Washers</p>
            </a>
            <a href="{{ route('equipment.category', 'dryers') }}" class="bg-white border border-border rounded-xl p-5 text-center hover:shadow-card-hover hover:border-steel/30 transition-all duration-200 group">
                <div class="w-10 h-10 rounded-lg bg-steel/10 flex items-center justify-center mx-auto mb-3">
                    <x-icon class="w-5 h-5 text-steel">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"/>
                    </x-icon>
                </div>
                <p class="font-heading font-semibold text-navy text-sm group-hover:text-steel transition-colors">Commercial Dryers</p>
            </a>
            <a href="{{ route('equipment.category', 'barrier-washers') }}" class="bg-white border border-border rounded-xl p-5 text-center hover:shadow-card-hover hover:border-steel/30 transition-all duration-200 group">
                <div class="w-10 h-10 rounded-lg bg-steel/10 flex items-center justify-center mx-auto mb-3">
                    <x-icon class="w-5 h-5 text-steel">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z"/>
                    </x-icon>
                </div>
                <p class="font-heading font-semibold text-navy text-sm group-hover:text-steel transition-colors">Barrier Washers</p>
            </a>
            <a href="{{ route('equipment.category', 'ironers') }}" class="bg-white border border-border rounded-xl p-5 text-center hover:shadow-card-hover hover:border-steel/30 transition-all duration-200 group">
                <div class="w-10 h-10 rounded-lg bg-steel/10 flex items-center justify-center mx-auto mb-3">
                    <x-icon class="w-5 h-5 text-steel">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 20.25h12m-7.5-3v3m3-3v3m-10.125-3h17.25c.621 0 1.125-.504 1.125-1.125V4.875c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125Z"/>
                    </x-icon>
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
