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
            <div style="max-width: 620px;">

                <p class="hero-title font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Repairs &amp; Call-Outs</p>

                <h1 class="hero-title font-heading font-bold text-white leading-[1.05] tracking-tight mb-6 text-4xl lg:text-5xl xl:text-6xl text-balance">
                    <span class="text-[#148af4]">Call-outs and repairs</span><br class="hidden lg:inline"> when commercial laundry<br class="hidden lg:inline"> equipment is under pressure
                </h1>

                <p class="hero-desc font-body text-white/80 leading-relaxed mb-10 text-lg max-w-xl text-pretty">
                    Irish Laundry Systems engineers respond quickly to get your laundry equipment back on track; with first triage, expert diagnosis and the right fix the first&nbsp;time, where&nbsp;possible.
                </p>

                <div class="hero-btns flex flex-row gap-4">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 whitespace-nowrap">
                        Request Call-Out
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 border border-white/50 hover:border-white text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 hover:bg-white/10 whitespace-nowrap">
                        Talk to an Engineer
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
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
        <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-5 text-balance">
            Fast response works best<br class="hidden lg:inline"> with a <span class="text-[#148af4] whitespace-nowrap">professional diagnosis</span>
        </h2>
        <p class="font-body text-gray-600 text-base lg:text-lg leading-relaxed mb-10 max-w-3xl mx-auto text-pretty">
            The right response depends on knowing the machine type, the fault symptoms, how urgent the site is and any relevant service history. Tell us as much as you can so we can route your request correctly and get the right engineer to the right&nbsp;site.
        </p>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-5 mb-10">
            <div class="bg-white border border-gray-200 rounded-xl p-8 flex flex-col items-center text-center shadow-sm hover:shadow-md transition-shadow">
                <svg class="w-14 h-14 text-[#148af4] mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25M21 7.5v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9"/>
                </svg>
                <span class="font-body font-bold text-navy text-sm">Machine type</span>
            </div>
            <div class="bg-white border border-gray-200 rounded-xl p-8 flex flex-col items-center text-center shadow-sm hover:shadow-md transition-shadow">
                <svg class="w-14 h-14 text-[#148af4] mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/>
                </svg>
                <span class="font-body font-bold text-navy text-sm">Fault symptoms</span>
            </div>
            <div class="bg-white border border-gray-200 rounded-xl p-8 flex flex-col items-center text-center shadow-sm hover:shadow-md transition-shadow">
                <svg class="w-14 h-14 text-[#148af4] mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span class="font-body font-bold text-navy text-sm">Site urgency</span>
            </div>
            <div class="bg-white border border-gray-200 rounded-xl p-8 flex flex-col items-center text-center shadow-sm hover:shadow-md transition-shadow">
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
                        <h2 class="font-heading font-bold text-white text-xl lg:text-2xl leading-tight mb-2 text-balance">Need fast help with a laundry equipment&nbsp;fault?</h2>
                        <p class="font-body text-white text-sm leading-relaxed text-pretty">
                            Tell us the machine type, site location, fault symptoms and urgency so the request can be <span class="text-[#148af4]">routed&nbsp;correctly</span>.
                        </p>
                        <p class="font-body text-white/60 text-xs mt-2 text-pretty">
                            Contract customers may receive preferential service and labour rates where&nbsp;applicable.
                        </p>
                    </div>
                </div>

                {{-- RIGHT: phone + CTAs --}}
                <div class="lg:col-span-5 flex flex-col gap-5 lg:items-end">

                    {{-- Phone number prominent --}}
                    <a href="tel:+353011234567" class="group lg:text-right">
                        <span class="block font-body text-white/60 text-[11px] uppercase tracking-[0.22em] mb-1">Talk to a person now</span>
                        <span class="block font-heading font-bold text-white text-2xl lg:text-3xl tracking-tight leading-none group-hover:text-[#148af4] transition-colors">
                            +353 01 123&nbsp;4567
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
                        <a href="tel:+353011234567"
                           class="inline-flex items-center justify-center gap-2 bg-white text-navy font-body font-bold px-6 py-3 rounded-lg text-sm hover:bg-white/90 transition-colors cursor-pointer whitespace-nowrap">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                            </svg>
                            Call Now
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<!-- WHAT TO EXPECT -->
@php
$expectSteps = [
    [
        'title'    => 'Contact Us',
        'desc'     => 'Share the key details on the equipment, symptoms and any recent trends or&nbsp;alerts.',
        'image'    => '/images/healthcare/operator.jpg',
        'alt'      => 'Operator placing a call about a commercial laundry breakdown',
        'meta'     => 'Step 1',
        'position' => 'center',
    ],
    [
        'title'    => 'Triage &amp; Dispatch',
        'desc'     => 'We review the info and prioritise the request by urgency, location and specialist&nbsp;availability.',
        'image'    => '/images/healthcare/customer-care-line6000.jpg',
        'alt'      => 'ILS engineer providing customer care on Electrolux Line 6000 equipment',
        'meta'     => 'Step 2',
        'position' => 'center',
    ],
    [
        'title'    => 'On-Site Diagnosis',
        'desc'     => 'An engineer attends site, carries out a full diagnosis and identifies the root&nbsp;cause.',
        'image'    => '/images/hero/on-site-diagnosis.jpeg',
        'alt'      => 'ILS technician inspecting a commercial washing machine drum during diagnosis',
        'meta'     => 'Step 3',
        'position' => 'center',
    ],
    [
        'title'    => 'Repair &amp; Report',
        'desc'     => 'We carry out the repair, test the equipment and provide a clear summary of the work completed and any&nbsp;recommendations.',
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
            <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl mb-4 text-balance">What to Expect from an Irish Laundry Systems <span class="text-[#148af4]">Call-Out</span></h2>
            <p class="font-body text-blue-200 text-lg max-w-2xl mx-auto text-pretty">A clear, four-step process from first contact to sign-off, designed to get you back up and&nbsp;running.</p>
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
                    <span class="text-[#148af4]">Keep laundry moving</span> while your equipment is&nbsp;down
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
                        <p class="font-body text-gray-600 text-sm leading-relaxed">A practical option when your site needs temporary laundry cover.</p>
                    </div>
                    <div>
                        <svg class="w-10 h-10 text-[#148af4] mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <h3 class="font-heading font-bold text-navy text-base mb-1 whitespace-nowrap">Short-term cover</h3>
                        <p class="font-body text-gray-600 text-sm leading-relaxed">Useful while you manage downtime, repair timing or replacement decisions.</p>
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

<!-- TRUST STRIP — between Laundry Online and Repeat Breakdowns -->
<section class="bg-white border-y border-gray-200">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-5">
        <div class="flex flex-wrap items-center justify-center lg:justify-between gap-x-8 gap-y-4">
            <div class="flex items-center gap-2.5">
                <svg class="w-5 h-5 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                </svg>
                <span class="font-body text-navy text-sm">Trusted engineering support <span class="text-gray-500">since 1987</span></span>
            </div>
            <div class="hidden lg:block w-px h-5 bg-gray-200"></div>
            <div class="flex items-center gap-2.5">
                <svg class="w-5 h-5 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/>
                </svg>
                <span class="font-body text-navy text-sm">Local technical team</span>
            </div>
            <div class="hidden lg:block w-px h-5 bg-gray-200"></div>
            <div class="flex items-center gap-2.5">
                <svg class="w-5 h-5 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <span class="font-body text-navy text-sm">Genuine parts route</span>
            </div>
            <div class="hidden lg:block w-px h-5 bg-gray-200"></div>
            <div class="flex items-center gap-2.5">
                <svg class="w-5 h-5 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5"/>
                </svg>
                <span class="font-body text-navy text-sm">Ongoing aftercare</span>
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
                    <h2 class="font-heading font-bold text-white text-2xl lg:text-3xl mb-4 leading-tight text-balance">Repeated breakdowns usually need more than another&nbsp;call-out</h2>
                    <p class="font-body text-gray-300 leading-relaxed text-pretty">
                        If the same issue keeps returning, the fault may point to a wider maintenance, parts or service-history problem. Irish Laundry Systems can help review what keeps coming back and <span class="text-[#148af4]">what needs attention&nbsp;next</span>.
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
                    <h3 class="font-heading font-bold text-white text-sm mb-1.5">Proactive insights</h3>
                    <p class="font-body text-white text-xs leading-relaxed">Identify patterns and prevent future downtime.</p>
                </div>
                <div>
                    <div class="mb-5">
                        <svg class="w-10 h-10 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6L9 12.75l4.286-4.286a11.948 11.948 0 014.306 6.43l.776 2.898m0 0l3.182-5.511m-3.182 5.51l-5.511-3.181"/>
                        </svg>
                    </div>
                    <h3 class="font-heading font-bold text-white text-sm mb-1.5">Lower running costs</h3>
                    <p class="font-body text-white text-xs leading-relaxed">Reduce repeat visits and unplanned repairs.</p>
                </div>
                <div>
                    <div class="mb-5">
                        <svg class="w-10 h-10 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/>
                        </svg>
                    </div>
                    <h3 class="font-heading font-bold text-white text-sm mb-1.5">Better equipment uptime</h3>
                    <p class="font-body text-white text-xs leading-relaxed">Keep operations running smoothly and reliably.</p>
                </div>
                <div>
                    <div class="mb-5">
                        <svg class="w-10 h-10 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"/>
                        </svg>
                    </div>
                    <h3 class="font-heading font-bold text-white text-sm mb-1.5">Contract advantages</h3>
                    <p class="font-body text-white text-xs leading-relaxed">Service Contract customers get preferred rates.</p>
                </div>
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
<section class="py-16 lg:py-20 bg-bg">
    <div class="max-w-4xl mx-auto px-6 sm:px-10 lg:px-20 text-center mb-10">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Customer Trust</p>
        <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-5 text-balance">
            Trusted by sites where equipment issues affect <span class="text-[#148af4]">daily operations</span>
        </h2>
        <p class="font-body text-gray-600 text-lg leading-relaxed max-w-2xl mx-auto text-pretty">
            Irish Laundry Systems works with healthcare, care home, hospitality and commercial laundry sites where faults can create pressure for staff, linen flow, guests, residents or&nbsp;production.
        </p>
    </div>
    @include('components.testimonials', ['light' => true, 'heading' => ''])
    @include('components.proof-bar')
</section>

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
                Need an engineer today?
            </h2>
            <p class="font-body text-white/80 text-base lg:text-lg leading-relaxed max-w-xl mx-auto mb-8 text-pretty">
                Tell us your issue and we&rsquo;ll prioritise your request and get<br>the right engineer to the right&nbsp;site.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('contact') }}"
                   class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-7 py-3.5 rounded-md text-sm transition-colors duration-200">
                    Request Call-Out
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
                <a href="{{ route('contact') }}"
                   class="w-full sm:w-auto inline-flex items-center justify-center gap-2 border-2 border-white/30 hover:border-white text-white font-body font-bold px-7 py-3.5 rounded-md text-sm transition-colors duration-200 hover:bg-white/10">
                    Talk to an Engineer
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- LOOKING BEYOND THE CURRENT FAULT? -->
<section class="py-10 lg:py-14 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="bg-blue-50 rounded-2xl p-6 lg:p-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-center">

                {{-- LEFT: heading + body --}}
                <div class="lg:col-span-4">
                    <h2 class="font-heading font-bold text-navy text-xl lg:text-2xl leading-tight mb-2 text-balance">
                        Looking beyond the <span class="text-[#148af4]">current&nbsp;fault?</span>
                    </h2>
                    <p class="font-body text-gray-600 text-sm leading-relaxed text-pretty">
                        Preventive maintenance and support &amp; aftercare can help reduce repeat faults, improve visibility on equipment history and keep your laundry base better&nbsp;managed.
                    </p>
                </div>

                {{-- MIDDLE: two highlight items --}}
                <div class="lg:col-span-5 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <div>
                            <p class="font-heading font-bold text-navy text-sm mb-1">Preventive Maintenance Contracts</p>
                            <p class="font-body text-gray-600 text-xs leading-relaxed">Planned maintenance to reduce unplanned downtime.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <div>
                            <p class="font-heading font-bold text-navy text-sm mb-1">Support &amp; Aftercare</p>
                            <p class="font-body text-gray-600 text-xs leading-relaxed">Long-term support focused on performance and reliability.</p>
                        </div>
                    </div>
                </div>

                {{-- RIGHT: CTA --}}
                <div class="lg:col-span-3 flex lg:justify-end">
                    <a href="{{ route('service-contracts') }}"
                       class="w-full lg:w-auto inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-[#0f72d0] text-white font-body font-bold px-6 py-3 rounded-md text-sm transition-colors duration-200">
                        Explore Preventive<br class="hidden lg:inline">Maintenance Contracts
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
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

@endsection
