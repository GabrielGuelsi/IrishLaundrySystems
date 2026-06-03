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

/* Subtle dot-grid pattern for navy backgrounds */
.expect-dotgrid {
    background-image: radial-gradient(rgba(255,255,255,0.06) 1px, transparent 1px);
    background-size: 22px 22px;
}

/* Vertical alternating timeline */
.expect-timeline { position: relative; }
.expect-timeline-track {
    position: absolute;
    top: 0; bottom: 0;
    left: 18px;
    width: 2px;
    background: rgba(255,255,255,0.12);
}
.expect-timeline-fill {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 0%;
    background: linear-gradient(180deg, #148af4 0%, #5babf7 100%);
    transition: height 0.1s linear;
}
@media (min-width: 768px) {
    .expect-timeline-track { left: 50%; transform: translateX(-50%); }
}
.expect-step-node {
    position: absolute;
    left: 18px;
    width: 56px;
    height: 56px;
    transform: translate(-50%, 0);
    z-index: 10;
}
@media (min-width: 768px) {
    .expect-step-node { left: 50%; transform: translate(-50%, 0); }
}

@media (prefers-reduced-motion: reduce) {
    .hero-title, .hero-desc, .hero-btns { animation: none; opacity: 1; transform: none; }
    .expect-timeline-fill { transition: none; }
}
</style>

<section class="relative overflow-hidden" style="height: 720px; min-height: 560px; background-color: #011E41;">

    <!-- Background image -->
    <img src="/images/healthcare/repairs-hero.jpg"
         alt="ILS engineer providing reactive repair and call-out support on commercial laundry equipment"
         loading="eager" decoding="async"
         class="absolute inset-0 w-full h-full object-cover object-right">

    <!-- Gradient overlay — tight, clears by 70% -->
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,1.00) 0%, rgba(1,30,65,0.92) 30%, rgba(1,30,65,0.50) 50%, rgba(1,30,65,0.10) 65%, transparent 75%);"></div>

    <!-- Text — vertically centered -->
    <div class="relative z-10 h-full flex items-center w-full">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16">
            <div style="max-width: 760px;">

                <p class="hero-title font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Repairs &amp; Call-Outs</p>

                <h1 class="hero-title font-heading font-bold text-white leading-[1.05] tracking-tight mb-6 text-4xl lg:text-5xl xl:text-5xl text-balance">
                    <span class="text-[#148af4]">Call-outs and repairs</span><br class="hidden lg:inline"> when commercial&nbsp;laundry<br class="hidden lg:inline"> equipment is under&nbsp;pressure
                </h1>

                <p class="hero-desc font-body text-white/80 leading-relaxed mb-10 text-lg max-w-xl text-pretty">
                    When a machine fault affects linen flow, staffing or production, Irish Laundry Systems supports your site with engineer-led diagnosis, Electrolux Professional knowledge and a clear repair route, so the issue can move from fault report to the right repair&nbsp;response.
                </p>

                <div class="hero-btns flex flex-row gap-4">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 whitespace-nowrap">
                        Request Call-Out
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 border border-white/50 hover:border-white text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 hover:bg-white/10 whitespace-nowrap">
                        Talk to Our Team
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>

                {{-- Trust indicators --}}
                <div class="flex flex-wrap items-center gap-x-5 gap-y-2 mt-8 font-body text-white/70 text-xs">
                    <span class="whitespace-nowrap">Commercial laundry repairs</span>
                    <span class="w-px h-3 bg-white/25 hidden sm:block" aria-hidden="true"></span>
                    <span class="whitespace-nowrap">Electrolux Professional knowledge</span>
                    <span class="w-px h-3 bg-white/25 hidden sm:block" aria-hidden="true"></span>
                    <span class="whitespace-nowrap">Engineering-led since 1987</span>
                </div>

            </div>
        </div>
    </div>

</section>

@include('components.partner-strip')

<!-- REPAIR TRIAGE INTRO -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-5xl mx-auto px-6 sm:px-10 lg:px-20 text-center">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Repair Triage</p>
        <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-5 text-balance">
            Fast support works best<br class="hidden lg:inline"> with a <span class="text-[#148af4] whitespace-nowrap">clear fault picture</span>
        </h2>
        <p class="font-body text-gray-600 text-base lg:text-lg leading-relaxed mb-4 max-w-3xl mx-auto text-pretty">
            A commercial laundry fault can quickly affect output, staff pressure, guests, residents or production. Clear fault details at the start make it easier to prepare the right call-out response and reduce uncertainty around the next&nbsp;step.
        </p>
        <p class="font-body text-gray-600 text-base lg:text-lg leading-relaxed mb-10 max-w-3xl mx-auto text-pretty">
            Irish Laundry Systems connects the machine type, fault symptoms, site urgency and service history before the engineer response is&nbsp;arranged.
        </p>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-10 mb-10">
            <div class="flex flex-col items-center text-center">
                <svg class="w-14 h-14 text-[#148af4] mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25M21 7.5v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9"/>
                </svg>
                <span class="font-body font-bold text-navy text-sm">Machine type</span>
            </div>
            <div class="flex flex-col items-center text-center">
                <svg class="w-14 h-14 text-[#148af4] mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/>
                </svg>
                <span class="font-body font-bold text-navy text-sm">Fault symptoms</span>
            </div>
            <div class="flex flex-col items-center text-center">
                <svg class="w-14 h-14 text-[#148af4] mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span class="font-body font-bold text-navy text-sm">Site urgency</span>
            </div>
            <div class="flex flex-col items-center text-center">
                <svg class="w-14 h-14 text-[#148af4] mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                </svg>
                <span class="font-body font-bold text-navy text-sm">Service history</span>
            </div>
        </div>

        <a href="{{ route('contact') }}"
           class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-7 py-3.5 rounded-md text-sm transition-colors duration-200">
            Request Call-Out
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
        </a>
    </div>
</section>

<!-- URGENT CALL-OUT STRIP -->
<section class="pt-4 pb-16 lg:pt-6 lg:pb-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="relative bg-navy rounded-2xl overflow-hidden p-8 lg:p-10 shadow-xl">

            {{-- Top gradient accent line --}}
            <div class="absolute inset-x-0 top-0 h-px" style="background: linear-gradient(90deg, transparent 0%, #148af4 50%, transparent 100%);"></div>

            {{-- Soft glow accent (top-right) --}}
            <div class="absolute top-0 right-0 w-72 h-72 -translate-y-1/3 translate-x-1/4 rounded-full pointer-events-none" style="background: radial-gradient(circle, rgba(20,138,244,0.18) 0%, transparent 70%);"></div>

            <div class="relative grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">

                {{-- LEFT: content --}}
                <div class="lg:col-span-7 flex items-start gap-5">
                    <svg class="w-12 h-12 lg:w-14 lg:h-14 text-[#148af4] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                    </svg>
                    <div>
                        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-2">Urgent Support</p>
                        <h2 class="font-heading font-bold text-white text-xl lg:text-2xl leading-tight mb-2 text-balance">Need <span class="text-[#148af4]">fast support</span> with a laundry equipment&nbsp;fault</h2>
                        <p class="font-body text-white text-sm leading-relaxed text-pretty">
                            Tell us what has failed, where the machine is located and how urgent the issue is, so the request can be routed to the right&nbsp;team.
                        </p>
                        <p class="font-body text-white/60 text-xs mt-2 text-pretty">
                            Contract customers may receive preferential service and labour rates where&nbsp;applicable.
                        </p>
                    </div>
                </div>

                {{-- RIGHT: phone + CTAs --}}
                <div class="lg:col-span-5 flex flex-col gap-5 lg:items-end">

                    {{-- Phone number prominent --}}
                    <a href="tel:+35314910402" class="group lg:text-right">
                        <span class="block font-body text-white/60 text-[11px] uppercase tracking-[0.22em] mb-1">Talk to a person now</span>
                        <span class="block font-heading font-bold text-white text-2xl lg:text-3xl tracking-tight leading-none group-hover:text-[#148af4] transition-colors">
                            +353 1 491&nbsp;0402
                        </span>
                    </a>

                    {{-- Divider --}}
                    <div class="h-px w-full lg:w-32 bg-white/10"></div>

                    {{-- CTAs --}}
                    <div class="flex flex-col sm:flex-row gap-3 w-full lg:w-auto">
                        <a href="{{ route('contact') }}"
                           class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-6 py-3 rounded-lg text-sm transition-colors duration-200 cursor-pointer whitespace-nowrap">
                            Request Call-Out
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="tel:+35314910402"
                           class="inline-flex items-center justify-center gap-2 bg-white text-navy font-body font-bold px-6 py-3 rounded-lg text-sm hover:bg-white/90 transition-colors cursor-pointer whitespace-nowrap">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                            </svg>
                            Call Now
                        </a>
                    </div>

                    <p class="font-body text-white/50 text-[11px] mt-1 lg:text-right text-pretty">
                        For urgent equipment faults, call the team directly or request a&nbsp;call-out.
                    </p>

                </div>

            </div>
        </div>
    </div>
</section>

<!-- WHAT TO EXPECT -->
@php
$expectSteps = [
    [
        'title'    => 'Share the fault details',
        'desc'     => 'Tell us the machine type, symptoms, site location, urgency and any recent service&nbsp;history.',
        'image'    => '/images/healthcare/operator.jpg',
        'alt'      => 'Operator placing a call about a commercial laundry breakdown',
        'meta'     => 'Step 1',
        'position' => 'center',
    ],
    [
        'title'    => 'Prepare the call-out',
        'desc'     => 'Irish Laundry Systems reviews the information before the visit, so the engineer attends with the right fault picture and parts access where&nbsp;applicable.',
        'image'    => '/images/healthcare/customer-care-line6000.jpg',
        'alt'      => 'ILS engineer reviewing call-out information on Electrolux Line 6000 equipment',
        'meta'     => 'Step 2',
        'position' => 'center',
    ],
    [
        'title'    => 'Diagnose on-site',
        'desc'     => 'The engineer checks the equipment, confirms the likely cause and carries out the repair where&nbsp;possible.',
        'image'    => '/images/hero/on-site-diagnosis.jpeg',
        'alt'      => 'ILS technician inspecting a commercial washing machine drum during diagnosis',
        'meta'     => 'Step 3',
        'position' => 'center',
    ],
    [
        'title'    => 'Leave with a clear next step',
        'desc'     => 'If further parts, follow-up work or a maintenance review are needed, the recommended route is explained before the next decision is&nbsp;made.',
        'image'    => '/images/healthcare/repairs-callouts.jpg',
        'alt'      => 'ILS engineer completing a reactive repair on commercial laundry equipment',
        'meta'     => 'Step 4',
        'position' => 'center',
    ],
];
@endphp

<section class="relative py-16 lg:py-24 bg-navy expect-dotgrid overflow-hidden">
    <div class="relative max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="text-center mb-14 lg:mb-20 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Call-Out Process</p>
            <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl mb-4 text-balance">From fault report to the <span class="text-[#148af4]">right repair response</span></h2>
            <p class="font-body text-blue-200 text-lg max-w-2xl mx-auto text-pretty">A clear call-out process gives the team the fault details, machine information and site urgency needed to prepare the right engineer-led&nbsp;response.</p>
        </div>

        <div class="expect-timeline">
            {{-- Vertical track + scroll-driven fill --}}
            <div class="expect-timeline-track" aria-hidden="true">
                <div class="expect-timeline-fill" data-expect-timeline-fill></div>
            </div>

            <div class="space-y-14 md:space-y-24">
                @foreach ($expectSteps as $i => $step)
                @php $isEven = $i % 2 === 1; @endphp
                <div class="relative pl-16 md:pl-0">
                    {{-- Numbered node --}}
                    <div class="expect-step-node" style="top: 0;">
                        <div class="w-14 h-14 rounded-full flex items-center justify-center text-white font-heading font-bold text-xl ring-4 ring-navy shadow-lg" style="background-color: #148af4;">
                            {{ $i + 1 }}
                        </div>
                    </div>

                    {{-- Two-column row, alternating --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 md:gap-16 items-center">
                        {{-- Image side --}}
                        <div class="{{ $isEven ? 'md:order-2 md:pl-12' : 'md:order-1 md:pr-12 md:text-right' }} reveal {{ $isEven ? 'reveal-right' : 'reveal-left' }}">
                            <div class="relative rounded-2xl overflow-hidden bg-navy-light shadow-2xl group">
                                <div class="aspect-[16/10]">
                                    <img src="{{ $step['image'] }}"
                                         alt="{{ $step['alt'] }}"
                                         loading="lazy" decoding="async"
                                         style="object-position: {{ $step['position'] ?? 'center' }};"
                                         class="w-full h-full object-cover transition-transform duration-[1200ms] ease-out group-hover:scale-105">
                                </div>
                                <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-2xl pointer-events-none"></div>
                                <div class="absolute inset-x-0 bottom-0 h-1/3"
                                     style="background: linear-gradient(to top, rgba(1,15,42,0.85) 0%, transparent 100%);"
                                     aria-hidden="true"></div>
                            </div>
                        </div>

                        {{-- Text side --}}
                        <div class="mt-6 md:mt-0 {{ $isEven ? 'md:order-1 md:pr-12 md:text-right' : 'md:order-2 md:pl-12' }} reveal {{ $isEven ? 'reveal-left' : 'reveal-right' }}">
                            <p class="text-[#148af4] font-body font-bold text-xs uppercase tracking-widest mb-3">{{ $step['meta'] }}</p>
                            <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl mb-4 text-balance">{!! $step['title'] !!}</h3>
                            <p class="font-body text-blue-200 text-base leading-relaxed text-pretty">{!! $step['desc'] !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<script>
    (function () {
        var prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        var hasGsap = typeof window.gsap !== 'undefined';
        var hasScrollTrigger = hasGsap && typeof window.ScrollTrigger !== 'undefined';
        if (hasScrollTrigger) gsap.registerPlugin(ScrollTrigger);

        var timeline = document.querySelector('.expect-timeline');
        var fill = document.querySelector('[data-expect-timeline-fill]');
        if (timeline && fill && hasScrollTrigger && !prefersReduced) {
            ScrollTrigger.create({
                trigger: timeline,
                start: 'top 70%',
                end: 'bottom 30%',
                scrub: true,
                onUpdate: function (self) {
                    fill.style.height = (self.progress * 100).toFixed(2) + '%';
                },
            });
        } else if (fill) {
            fill.style.height = '100%';
        }
    })();
</script>

<!-- TEMPORARY LAUNDRY SUPPORT -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            {{-- LEFT: content --}}
            <div>
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Temporary Laundry Support</p>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-5 text-balance">
                    <span class="text-[#148af4]">Keep laundry moving</span><br class="hidden lg:inline"> while your equipment is&nbsp;down
                </h2>
                <p class="font-body text-gray-600 text-lg leading-relaxed mb-8 text-pretty">
                    When your on-site laundry is out of action, Irish Laundry Systems can discuss a temporary laundry processing route through Laundry Online locations across Dublin, where suitable and agreed in&nbsp;advance.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mb-8">
                    <div>
                        <svg class="w-10 h-10 text-[#148af4] mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21"/>
                        </svg>
                        <h3 class="font-heading font-bold text-navy text-base mb-1">Dublin store network</h3>
                        <p class="font-body text-gray-600 text-sm leading-relaxed">Multiple Laundry Online locations across Dublin.</p>
                    </div>
                    <div>
                        <svg class="w-10 h-10 text-[#148af4] mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"/>
                        </svg>
                        <h3 class="font-heading font-bold text-navy text-base mb-1">Drop-off / walk-in route</h3>
                        <p class="font-body text-gray-600 text-sm leading-relaxed">A practical option for short-term laundry cover.</p>
                    </div>
                    <div>
                        <svg class="w-10 h-10 text-[#148af4] mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <h3 class="font-heading font-bold text-navy text-base mb-1 whitespace-nowrap">Short-term cover</h3>
                        <p class="font-body text-gray-600 text-sm leading-relaxed">Useful while you manage downtime or&nbsp;replacement.</p>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-6 py-3 rounded-md text-sm transition-colors duration-200">
                        Ask About Temporary Laundry Support
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                    <a href="https://laundryonline.com/" target="_blank" rel="noopener"
                       class="inline-flex items-center justify-center gap-2 border border-navy/20 hover:border-navy text-navy font-body font-bold px-6 py-3 rounded-md text-sm transition-colors duration-200">
                        View Laundry Online
                    </a>
                </div>
                <p class="font-body text-gray-500 text-xs mt-3">Through Laundry Online&rsquo;s Dublin locations</p>
            </div>

            {{-- RIGHT: image (TODO: replace placeholder with Laundry Online imagery) --}}
            <div class="relative rounded-2xl overflow-hidden shadow-lg aspect-[4/3] lg:aspect-auto lg:h-[460px]">
                {{-- TODO: substituir por imagem real do site Laundry Online (Dublin store / locations) --}}
                <img src="/images/healthcare/femalelaundryoperator.png"
                     alt="Laundry Online Dublin store as a temporary processing route while on-site equipment is down"
                     loading="lazy" decoding="async"
                     class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-x-0 bottom-0 p-5 bg-gradient-to-t from-navy/80 to-transparent">
                    <p class="font-body text-white text-xs font-semibold tracking-wide uppercase">Laundry Online &mdash; Dublin</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- REPEAT BREAKDOWNS STRIP -->
<section class="py-16 lg:py-20 bg-bg">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="bg-navy rounded-2xl p-8 lg:p-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center mb-10">
                <div>
                    <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Repeat Faults</p>
                    <h2 class="font-heading font-bold text-white text-2xl lg:text-3xl mb-4 leading-tight text-balance">Repeated breakdowns usually need<br class="hidden lg:inline"> <span class="text-[#148af4]">more than another&nbsp;call-out</span></h2>
                    <p class="font-body text-gray-300 leading-relaxed text-pretty">
                        If the same fault keeps returning, the issue may be linked to maintenance history, wear, parts requirements or how the equipment is being used. Irish Laundry Systems reviews what keeps coming back and what needs attention&nbsp;next.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row lg:flex-col gap-4">
                    <a href="{{ route('service-contracts') }}"
                       class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-6 py-3 rounded-lg text-sm transition-colors cursor-pointer">
                        View Preventive Maintenance Contracts
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                    <a href="{{ route('parts-aftercare') }}"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white/30 hover:border-white text-white font-body font-bold px-6 py-3 rounded-lg text-sm transition-colors cursor-pointer hover:bg-white/10">
                        Explore Support &amp; Aftercare
                    </a>
                </div>
            </div>

            {{-- 4 benefits grid --}}
            <div class="grid grid-cols-2 md:grid-cols-4 gap-10 lg:gap-14 pt-10 border-t border-white/10">
                <div>
                    <div class="mb-5">
                        <svg class="w-10 h-10 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z"/>
                        </svg>
                    </div>
                    <h3 class="font-heading font-bold text-white text-sm mb-1.5">Fault patterns</h3>
                    <p class="font-body text-white text-xs leading-relaxed">Identify what keeps coming back.</p>
                </div>
                <div>
                    <div class="mb-5">
                        <svg class="w-10 h-10 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6L9 12.75l4.286-4.286a11.948 11.948 0 014.306 6.43l.776 2.898m0 0l3.182-5.511m-3.182 5.51l-5.511-3.181"/>
                        </svg>
                    </div>
                    <h3 class="font-heading font-bold text-white text-sm mb-1.5">Service history</h3>
                    <p class="font-body text-white text-xs leading-relaxed">Review previous visits, parts and fault notes.</p>
                </div>
                <div>
                    <div class="mb-5">
                        <svg class="w-10 h-10 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/>
                        </svg>
                    </div>
                    <h3 class="font-heading font-bold text-white text-sm mb-1.5">Cost control</h3>
                    <p class="font-body text-white text-xs leading-relaxed">Reduce the chance of repeated surprise repair costs.</p>
                </div>
                <div>
                    <div class="mb-5">
                        <svg class="w-10 h-10 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"/>
                        </svg>
                    </div>
                    <h3 class="font-heading font-bold text-white text-sm mb-1.5">Maintenance review</h3>
                    <p class="font-body text-white text-xs leading-relaxed">Consider whether preventive maintenance is the right route.</p>
                </div>
            </div>

            {{-- Mini points --}}
            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 mt-8 pt-6 border-t border-white/10 font-body text-white/70 text-xs">
                <span class="whitespace-nowrap">Spot repeat faults</span>
                <span class="w-px h-3 bg-white/20 hidden sm:block" aria-hidden="true"></span>
                <span class="whitespace-nowrap">Reduce surprise repair costs</span>
                <span class="w-px h-3 bg-white/20 hidden sm:block" aria-hidden="true"></span>
                <span class="whitespace-nowrap">Protect equipment value</span>
                <span class="w-px h-3 bg-white/20 hidden sm:block" aria-hidden="true"></span>
                <span class="whitespace-nowrap">Minimise disruption</span>
            </div>
        </div>
    </div>
</section>

<!-- FAQs -->
@php
$faqs = [
    [
        'question' => 'What information should I provide before a call-out?',
        'answer'   => 'Please share the machine type, make and model if available, fault symptoms, site location, urgency and any recent service history. Error codes, unusual noises, leaks, heat issues or repeated faults are especially useful.',
    ],
    [
        'question' => 'Do you repair equipment not supplied by Irish Laundry Systems?',
        'answer'   => 'In many cases, yes. Irish Laundry Systems works with a range of commercial laundry equipment. As an Authorised Electrolux Professional Partner, the team has particular knowledge of Electrolux Professional machines, but other equipment can be reviewed depending on the issue and parts availability.',
    ],
    [
        'question' => 'Are parts included in the call-out?',
        'answer'   => 'No. Parts are charged separately where required. If a part is needed, Irish Laundry Systems will advise on the parts route, availability where applicable and the next step before further work is agreed.',
    ],
    [
        'question' => 'What happens if the machine cannot be repaired on the first visit?',
        'answer'   => 'The engineer will explain what has been found, what may be needed next and whether the issue requires parts, follow-up work, a wider maintenance review or another practical route.',
    ],
    [
        'question' => 'Can repeated faults be reviewed under a Preventive Maintenance Contract?',
        'answer'   => 'Yes. If the same issue keeps returning, Irish Laundry Systems can review the service history, fault pattern and equipment condition to see whether a Preventive Maintenance Contract would be the right route.',
    ],
    [
        'question' => 'Do you work with Electrolux Professional equipment?',
        'answer'   => 'Yes. Irish Laundry Systems is an Authorised Electrolux Professional Partner and has experience with Electrolux Professional commercial laundry equipment, technical documentation and genuine parts route where applicable.',
    ],
    [
        'question' => 'How do I request a repair call-out?',
        'answer'   => 'Use the Request Call-Out form or call the team directly. Include as much detail as possible about the equipment and fault so the request can be directed properly.',
    ],
];
@endphp
<!-- TESTIMONIAL / PROOF -->
@include('components.testimonials', [
    'light'      => true,
    'bordered'   => false,
    'eyebrow'    => 'Customer Trust',
    'heading'    => 'Trusted by sites where equipment issues affect <span class="text-[#148af4]">daily&nbsp;operations</span>',
    'subheading' => 'Irish Laundry Systems works with healthcare, care home, hospitality and commercial laundry sites where faults can create pressure for staff, linen flow, guests, residents or production.',
])
<div class="bg-[#f7f8fa] -mt-10 lg:-mt-16">
    @include('components.proof-bar')
</div>

<!-- AFTER THE REPAIR STRIP -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="bg-blue-50 rounded-2xl p-8 lg:p-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">

                {{-- LEFT: content --}}
                <div class="lg:col-span-7">
                    <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">After the Repair</p>
                    <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl leading-tight mb-4 text-balance">
                        Turn repair findings into the <span class="text-[#148af4]">right next step</span>
                    </h2>
                    <p class="font-body text-gray-600 text-base lg:text-lg leading-relaxed text-pretty">
                        A call-out can solve the immediate fault, but it can also reveal wear, repeated issues, parts requirements or maintenance pressure. Irish Laundry Systems connects repair findings with Preventive Maintenance Contracts and Support &amp; Aftercare where the equipment needs ongoing&nbsp;attention.
                    </p>

                    {{-- Mini points --}}
                    <div class="flex flex-wrap items-center gap-x-4 gap-y-2 mt-6 font-body text-gray-500 text-xs">
                        <span class="whitespace-nowrap">Repair findings</span>
                        <span class="w-px h-3 bg-gray-300 hidden sm:block" aria-hidden="true"></span>
                        <span class="whitespace-nowrap">Service history</span>
                        <span class="w-px h-3 bg-gray-300 hidden sm:block" aria-hidden="true"></span>
                        <span class="whitespace-nowrap">Parts access where applicable</span>
                        <span class="w-px h-3 bg-gray-300 hidden sm:block" aria-hidden="true"></span>
                        <span class="whitespace-nowrap">Preventive maintenance</span>
                    </div>
                </div>

                {{-- RIGHT: CTAs --}}
                <div class="lg:col-span-5 flex flex-col sm:flex-row lg:flex-col gap-3">
                    <a href="{{ route('service-contracts') }}"
                       class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-6 py-3 rounded-md text-sm transition-colors duration-200">
                        View Preventive Maintenance Contracts
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                    <a href="{{ route('parts-aftercare') }}"
                       class="inline-flex items-center justify-center gap-2 border border-navy/20 hover:border-navy text-navy font-body font-bold px-6 py-3 rounded-md text-sm transition-colors duration-200">
                        Explore Support &amp; Aftercare
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

@include('components.faq', [
    'faqs'    => $faqs,
    'eyebrow' => 'Repairs & Call-Out FAQs',
    'heading' => '<span class="lg:whitespace-nowrap">Questions before <span class="text-[#148af4]">requesting a call-out</span></span>',
])

<!-- NEED AN ENGINEER TODAY? — premium contained navy panel -->
<section class="py-16 lg:py-20 bg-bg">
    <div class="max-w-4xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="relative bg-navy rounded-2xl p-8 lg:p-12 text-center ring-1 ring-white/10 shadow-xl overflow-hidden">
            <div class="absolute inset-x-0 top-0 h-px" style="background: linear-gradient(90deg, transparent 0%, #148af4 50%, transparent 100%);"></div>
            <svg class="mx-auto mb-5 w-12 h-12 lg:w-14 lg:h-14 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
            </svg>
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Request Call-Out</p>
            <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl leading-tight mb-4 text-balance">
                Need an <span class="text-[#148af4]">engineer</span> for a <span class="text-[#148af4]">laundry equipment&nbsp;fault</span>
            </h2>
            <p class="font-body text-white/80 text-base lg:text-lg leading-relaxed max-w-xl mx-auto mb-6 text-pretty">
                Call us directly or submit a repair request with the equipment type, site location and fault symptoms, so the enquiry can be connected to the right&nbsp;team.
            </p>
            <a href="tel:+35314910402" class="inline-flex items-center justify-center gap-2 mb-8 group">
                <span class="font-heading font-bold text-white text-2xl lg:text-3xl tracking-tight group-hover:text-[#148af4] transition-colors">+353 1 491&nbsp;0402</span>
            </a>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('contact') }}"
                   class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-7 py-3.5 rounded-md text-sm transition-colors duration-200">
                    Request Call-Out
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
                <a href="{{ route('contact') }}"
                   class="w-full sm:w-auto inline-flex items-center justify-center gap-2 border-2 border-white/30 hover:border-white text-white font-body font-bold px-7 py-3.5 rounded-md text-sm transition-colors duration-200 hover:bg-white/10">
                    Talk to Our Team
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
