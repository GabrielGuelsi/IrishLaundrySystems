@extends('layouts.app')

@section('pageTitle', 'Commercial Laundry Repairs & Call-Outs Ireland | Irish Laundry Systems')
@section('metaDescription', 'Get commercial laundry repair and call-out support in Ireland. Irish Laundry Systems reviews equipment faults and site details before arranging repair support.')

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

<section class="relative overflow-hidden h-auto min-h-[520px] lg:h-[720px]" style="background-color: #011E41;">

    <!-- Background image -->
    <img src="/images/shared/repairs-hero.jpg"
         alt="ILS engineer providing reactive repair and call-out support on commercial laundry equipment"
         loading="eager" decoding="async"
         class="absolute inset-0 w-full h-full object-cover object-right">

    <!-- Gradient overlay — tight, clears by 70% -->
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,1.00) 0%, rgba(1,30,65,0.92) 30%, rgba(1,30,65,0.50) 50%, rgba(1,30,65,0.10) 65%, transparent 75%);"></div>

    <!-- Text — vertically centered -->
    <div class="relative z-10 h-full flex items-center w-full py-16 lg:py-0">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16">
            <div style="max-width: 820px;">

                <p class="hero-title font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Repairs &amp; Call-Outs</p>

                <h1 class="hero-title font-heading font-bold text-white leading-tight tracking-tight mb-6 text-3xl sm:text-4xl lg:text-5xl text-balance">
                    Commercial laundry repair support<br class="hidden lg:block"> to keep <span class="text-[#148af4]">essential equipment&nbsp;running</span>
                </h1>

                <p class="hero-desc font-body text-white/80 leading-relaxed mb-8 text-base max-w-2xl text-pretty">
                    <span class="whitespace-nowrap">Irish Laundry Systems</span> provides call-out and repair support for commercial washers, dryers, ironers and finishing equipment across Ireland. Report the fault and we&rsquo;ll arrange the repair&nbsp;response.
                </p>

                <div class="hero-btns flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 whitespace-nowrap">
                        Request a Call-Out
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                    <a href="tel:+35314910402"
                       class="inline-flex items-center justify-center gap-2 border border-white/50 hover:border-white text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 hover:bg-white/10 whitespace-nowrap">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                        </svg>
                        Call +353 1 491&nbsp;0402
                    </a>
                </div>

            </div>
        </div>
    </div>

</section>

@include('components.partner-strip')

<!-- FIRST RESPONSE -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-5xl mx-auto px-6 sm:px-10 lg:px-20 text-center">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">First Response</p>
        <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight mb-5 text-balance">
            Report the fault once, with <span class="text-[#148af4]">the details that&nbsp;matter</span>
        </h2>
        <p class="font-body text-gray-500 text-base leading-relaxed mb-12 lg:mb-16 max-w-3xl mx-auto text-pretty">
            Machine type, fault symptoms, access details and service history help our engineers prepare before the visit. If the same fault keeps returning, the service visit can also identify whether maintenance, parts or replacement should be&nbsp;considered.
        </p>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-10 mb-10">
            <div class="flex flex-col items-center text-center">
                <img src="/images/icons/repairs-machine-type.png" alt="" aria-hidden="true" class="w-14 h-14 mb-4 object-contain">
                <span class="font-body font-bold text-navy text-sm">Equipment type</span>
            </div>
            <div class="flex flex-col items-center text-center">
                <img src="/images/icons/repairs-fault-symptoms.png" alt="" aria-hidden="true" class="w-14 h-14 mb-4 object-contain">
                <span class="font-body font-bold text-navy text-sm">Fault details</span>
            </div>
            <div class="flex flex-col items-center text-center">
                <img src="/images/icons/repairs-site-urgency.png" alt="" aria-hidden="true" class="w-14 h-14 mb-4 object-contain">
                <span class="font-body font-bold text-navy text-sm">Site urgency</span>
            </div>
            <div class="flex flex-col items-center text-center">
                <img src="/images/icons/repairs-service-history.png" alt="" aria-hidden="true" class="w-14 h-14 mb-4 object-contain">
                <span class="font-body font-bold text-navy text-sm">Service history</span>
            </div>
        </div>

        <a href="{{ route('contact') }}"
           class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-7 py-3.5 rounded-md text-sm transition-colors duration-200">
            Request a Call-Out
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
        </a>
    </div>
</section>

<!-- CALL-OUT SUPPORT STRIP -->
<section class="pt-4 pb-16 lg:pt-6 lg:pb-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="relative bg-navy rounded-2xl overflow-hidden p-8 sm:p-10 lg:p-14 shadow-xl">

            {{-- Top gradient accent line --}}
            <div class="absolute inset-x-0 top-0 h-px" style="background: linear-gradient(90deg, transparent 0%, #148af4 50%, transparent 100%);"></div>

            {{-- Soft glow accent (top-right) --}}
            <div class="absolute top-0 right-0 w-72 h-72 -translate-y-1/3 translate-x-1/4 rounded-full pointer-events-none" style="background: radial-gradient(circle, rgba(20,138,244,0.18) 0%, transparent 70%);"></div>

            <div class="relative grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">

                {{-- LEFT: content --}}
                <div class="lg:col-span-7 flex items-center gap-6 lg:gap-8">
                    <img src="/images/icons/repairs-urgent-support.png" alt="" aria-hidden="true" class="w-24 h-24 sm:w-28 sm:h-28 lg:w-36 lg:h-36 flex-shrink-0 object-contain">
                    <div>
                        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-2">Call-Out Support</p>
                        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight mb-2 text-balance"><span class="text-[#148af4]">Responsive call-out support</span> when equipment needs&nbsp;attention</h2>
                        <p class="font-body text-white/80 text-base leading-relaxed text-pretty">
                            Active faults are reviewed by urgency, site impact and equipment details before a call-out is arranged.
                        </p>
                        <p class="font-body text-white/60 text-xs mt-2 text-pretty">
                            Contract customers receive preferential call-out rates and scheduling.
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
                            Request a Call-Out
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="tel:+35314910402"
                           class="inline-flex items-center justify-center gap-2 bg-white text-navy font-heading font-bold px-6 py-3 rounded-lg text-sm hover:bg-white/90 transition-colors cursor-pointer whitespace-nowrap">
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

<!-- CALL-OUT PROCESS -->
@php
$expectSteps = [
    [
        'title'    => 'Report the fault',
        'desc'     => 'Send the machine type, symptoms, site access and&nbsp;urgency.',
        'image'    => '/images/pages/services/repairs-how-01.jpg',
        'alt'      => 'Site team sharing commercial laundry fault details to request a call-out',
        'meta'     => 'Step 1',
        'position' => 'center',
    ],
    [
        'title'    => 'Prepare the call-out',
        'desc'     => 'The fault details and service history are reviewed before the engineer&nbsp;arrives.',
        'image'    => '/images/pages/services/repairs-how-02.jpg',
        'alt'      => 'Irish Laundry Systems team preparing a commercial laundry repair call-out',
        'meta'     => 'Step 2',
        'position' => 'center',
    ],
    [
        'title'    => 'Diagnose on site',
        'desc'     => 'The engineer checks the equipment, confirms the likely cause and completes repair work when&nbsp;possible.',
        'image'    => '/images/pages/services/repairs-how-03.jpg',
        'alt'      => 'Irish Laundry Systems engineer diagnosing commercial laundry equipment on-site',
        'meta'     => 'Step 3',
        'position' => 'center',
    ],
    [
        'title'    => 'Confirm the outcome',
        'desc'     => 'The visit confirms whether repair, parts, follow-up work, maintenance or replacement should be&nbsp;considered.',
        'image'    => '/images/pages/services/repairs-how-04.jpg',
        'alt'      => 'Irish Laundry Systems engineer explaining the clear next step after a repair',
        'meta'     => 'Step 4',
        'position' => 'center',
    ],
];
@endphp

<section class="relative py-16 lg:py-24 bg-navy expect-dotgrid overflow-hidden">
    <div class="relative max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="text-center mb-14 lg:mb-20 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Call-Out Process</p>
            <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight mb-4 text-balance">From service visit to <span class="text-[#148af4]">repair&nbsp;action</span></h2>
            <p class="font-body text-blue-200 text-base leading-relaxed max-w-2xl mx-auto text-pretty">Each call-out is focused on diagnosis, repair requirements and the best action for the equipment.</p>
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
                            <p class="text-[#148af4] font-body font-bold text-xs uppercase tracking-[0.22em] mb-3">{{ $step['meta'] }}</p>
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
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight mb-5 text-balance">
                    <span class="text-[#148af4]">Short-term laundry support</span><br class="hidden lg:block"> while equipment is being&nbsp;repaired
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8 text-pretty">
                    If on-site laundry equipment is out of use, <span class="whitespace-nowrap">Irish Laundry Systems</span> can discuss short-term support through Laundry Online&rsquo;s Dublin locations by prior&nbsp;arrangement.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mb-8">
                    <div>
                        <img src="/images/icons/repairs-dublin-network.png" alt="" aria-hidden="true" class="w-14 h-14 mb-3 object-contain">
                        <h3 class="font-heading font-bold text-navy text-base mb-1">4 locations around Dublin</h3>
                        <p class="font-body text-gray-600 text-sm leading-relaxed">Access to Laundry Online locations for temporary laundry support.</p>
                    </div>
                    <div>
                        <img src="/images/icons/repairs-dropoff.png" alt="" aria-hidden="true" class="w-14 h-14 mb-3 object-contain">
                        <h3 class="font-heading font-bold text-navy text-base mb-1">Drop-off / walk-in option</h3>
                        <p class="font-body text-gray-600 text-sm leading-relaxed">A short-term option while repair or follow-up work is being planned.</p>
                    </div>
                    <div>
                        <img src="/images/icons/repairs-short-term.png" alt="" aria-hidden="true" class="w-14 h-14 mb-3 object-contain">
                        <h3 class="font-heading font-bold text-navy text-base mb-1">Short-term support</h3>
                        <p class="font-body text-gray-600 text-sm leading-relaxed">Useful when equipment is out of service and the site needs a temporary laundry option.</p>
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

            {{-- RIGHT: image --}}
            <div class="relative rounded-2xl overflow-hidden shadow-lg aspect-[4/3] lg:aspect-auto lg:h-[460px]">
                <img src="/images/pages/services/repairs-temporary-laundry.jpg"
                     alt="Laundry Online Dublin store as a temporary processing route while on-site equipment is down"
                     loading="lazy" decoding="async"
                     style="object-position: center;"
                     class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-x-0 bottom-0 p-5 bg-gradient-to-t from-navy/80 to-transparent">
                    <p class="font-body font-bold text-white text-xs uppercase tracking-[0.22em]">Laundry Online &mdash; Dublin</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- REPEAT FAULTS STRIP -->
<section class="py-16 lg:py-20 bg-bg">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="bg-navy rounded-2xl p-8 lg:p-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center mb-10">
                <div>
                    <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Repeat Faults</p>
                    <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl mb-4 leading-tight text-balance">When the same fault returns, make <span class="text-[#148af4]">a better equipment&nbsp;decision</span></h2>
                    <p class="font-body text-blue-200 text-base leading-relaxed text-pretty">
                        A repeat fault can point to worn parts, missed maintenance or equipment reaching the end of its useful life. <span class="whitespace-nowrap">Irish Laundry Systems</span> can review the repair history and equipment condition so the site knows whether to repair, maintain or plan&nbsp;replacement.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row lg:flex-col gap-4">
                    <a href="{{ route('service-contracts') }}"
                       class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-6 py-3 rounded-lg text-sm transition-colors cursor-pointer">
                        View Preventive Maintenance
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                    <a href="{{ route('parts-aftercare') }}"
                       class="inline-flex items-center justify-center gap-2 border border-white/60 hover:border-white text-white font-body font-bold px-6 py-3 rounded-lg text-sm transition-colors cursor-pointer hover:bg-white/10">
                        Explore Support &amp; Aftercare
                    </a>
                </div>
            </div>

            {{-- 4 benefits grid --}}
            <div class="grid grid-cols-2 md:grid-cols-4 gap-10 lg:gap-14 pt-10 border-t border-white/10">
                <div>
                    <div class="mb-5">
                        <img src="/images/icons/repairs-fault-patterns.png" alt="" aria-hidden="true" class="w-14 h-14 lg:w-16 lg:h-16 object-contain">
                    </div>
                    <h3 class="font-heading font-bold text-white text-sm mb-1.5">Repair history</h3>
                    <p class="font-body text-white text-xs leading-relaxed">See whether the same fault has appeared before.</p>
                </div>
                <div>
                    <div class="mb-5">
                        <img src="/images/icons/repairs-repeat-history.png" alt="" aria-hidden="true" class="w-14 h-14 lg:w-16 lg:h-16 object-contain">
                    </div>
                    <h3 class="font-heading font-bold text-white text-sm mb-1.5">Parts needs</h3>
                    <p class="font-body text-white text-xs leading-relaxed">Identify parts that may need replacement or further checks.</p>
                </div>
                <div>
                    <div class="mb-5">
                        <img src="/images/icons/repairs-cost-control.png" alt="" aria-hidden="true" class="w-14 h-14 lg:w-16 lg:h-16 object-contain">
                    </div>
                    <h3 class="font-heading font-bold text-white text-sm mb-1.5">Maintenance timing</h3>
                    <p class="font-body text-white text-xs leading-relaxed">Know when Preventive Maintenance should be considered.</p>
                </div>
                <div>
                    <div class="mb-5">
                        <img src="/images/icons/repairs-maintenance-review.png" alt="" aria-hidden="true" class="w-14 h-14 lg:w-16 lg:h-16 object-contain">
                    </div>
                    <h3 class="font-heading font-bold text-white text-sm mb-1.5">Replacement planning</h3>
                    <p class="font-body text-white text-xs leading-relaxed">Recognise when continued repair may no longer be the best use of budget.</p>
                </div>
            </div>

            {{-- Mini points --}}
            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 mt-8 pt-6 border-t border-white/10 font-body text-white/70 text-xs">
                <span class="whitespace-nowrap">Repeat fault patterns</span>
                <span class="w-px h-3 bg-white/20 hidden sm:block" aria-hidden="true"></span>
                <span class="whitespace-nowrap">Better cost control</span>
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
        'question' => 'Do you offer commercial laundry repairs?',
        'answer'   => 'Yes. Irish Laundry Systems provides repair and call-out support for commercial washers, dryers, ironers and finishing equipment across Ireland.',
    ],
    [
        'question' => 'What details should I send when reporting a fault?',
        'answer'   => 'Send the machine type, fault symptoms, access details and service history if available.',
    ],
    [
        'question' => 'Can you support non-Electrolux equipment?',
        'answer'   => 'Irish Laundry Systems can support selected non-Electrolux equipment depending on the machine type, fault and parts access.',
    ],
    [
        'question' => 'Do contract customers receive priority?',
        'answer'   => 'Contract customers receive preferential call-out rates and scheduling.',
    ],
    [
        'question' => 'Can you provide urgent repair support?',
        'answer'   => 'Call-out requests are reviewed by urgency, site impact and equipment details before scheduling.',
    ],
    [
        'question' => 'What happens if the same fault keeps returning?',
        'answer'   => 'The service visit can identify whether maintenance, parts or replacement should be considered.',
    ],
    [
        'question' => 'Can temporary laundry support be arranged?',
        'answer'   => 'Irish Laundry Systems can discuss short-term support through Laundry Online by prior arrangement when on-site equipment is out of use.',
    ],
];
@endphp
<!-- TESTIMONIAL / PROOF -->
@include('components.testimonials', [
    'light'      => true,
    'bordered'   => false,
    'eyebrow'    => 'Customer Trust',
    'heading'    => 'Trusted for <span class="text-[#148af4]">commercial laundry service&nbsp;support</span>',
    'subheading' => 'Commercial sites choose Irish Laundry Systems for responsive repairs, clear communication and reliable equipment care.',
])
<div class="bg-[#f7f8fa] -mt-10 lg:-mt-16 pb-12 lg:pb-16">
    @include('components.proof-bar')
</div>

<!-- AFTER THE REPAIR STRIP -->
@include('components.service-contracts-strip', [
    'eyebrow'      => 'After the Repair',
    'headingLine1' => 'Use repair findings to protect',
    'headingLine2' => 'equipment reliability',
    'body'         => 'After a call-out, repair findings can support service records, parts checks, Preventive Maintenance or replacement planning.',
    'image'        => '/images/shared/Parts%20%26%20Aftercare.png',
    'miniPoints'   => [
        ['icon' => 'aftercarehealthcarestrip1', 'label' => 'Repair<br>findings'],
        ['icon' => 'aftercarehealthcarestrip2', 'label' => 'Service<br>history'],
        ['icon' => 'aftercarehealthcarestrip3', 'label' => 'Parts<br>checks'],
    ],
    'cta1Label'    => 'Plan Aftercare',
    'cta1Route'    => 'parts-aftercare',
    'cta2Label'    => 'View Preventive Maintenance',
    'cta2Route'    => 'service-contracts',
])

@include('components.faq', [
    'faqs'    => $faqs,
    'eyebrow' => 'Repairs & Call-Out FAQs',
    'heading' => '<span>Questions before requesting <span class="text-[#148af4]">a repair call-out</span></span>',
])

<!-- FINAL CTA + REPAIR CALL-OUT FORM -->
<section class="py-16 lg:py-20 bg-bg">
    <div class="max-w-4xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="relative bg-navy rounded-2xl p-8 lg:p-12 text-center ring-1 ring-white/10 shadow-xl overflow-hidden mb-8 lg:mb-10">
            <div class="absolute inset-x-0 top-0 h-px" style="background: linear-gradient(90deg, transparent 0%, #148af4 50%, transparent 100%);"></div>
            <img src="/images/icons/repairs-urgent-support.png" alt="" aria-hidden="true" class="mx-auto mb-5 w-16 h-16 lg:w-20 lg:h-20 object-contain">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Request a Call-Out</p>
            <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight mb-4 text-balance">
                Need commercial laundry equipment <span class="text-[#148af4]">back in&nbsp;service</span>?
            </h2>
            <p class="font-body text-white/80 text-base leading-relaxed max-w-xl mx-auto mb-6 text-pretty">
                Send the fault details and site information. Irish Laundry Systems will review the request and arrange the appropriate call-out or repair response.
            </p>
            <a href="tel:+35314910402" class="inline-flex items-center justify-center gap-2 mb-8 group">
                <span class="font-heading font-bold text-white text-2xl lg:text-3xl tracking-tight group-hover:text-[#148af4] transition-colors">+353 1 491&nbsp;0402</span>
            </a>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#repairs-form"
                   class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-7 py-3.5 rounded-md text-sm transition-colors duration-200">
                    Request a Call-Out
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
                <a href="{{ route('contact') }}"
                   class="w-full sm:w-auto inline-flex items-center justify-center gap-2 border border-white/60 hover:border-white text-white font-body font-bold px-7 py-3.5 rounded-md text-sm transition-colors duration-200 hover:bg-white/10">
                    Talk to Our Team
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>

        {{-- Repair Call-Out form --}}
        <div id="repairs-form" class="bg-white rounded-2xl shadow-2xl p-7 lg:p-10">
            <p class="font-heading font-bold text-navy text-xl lg:text-2xl leading-snug mb-1">Request a Call-Out</p>
            <p class="font-body text-gray-500 text-sm leading-relaxed mb-6">We aim to respond within 24 hours.</p>
            <form action="{{ route('contact.submit') ?? '#' }}" method="POST" class="space-y-3">
                @csrf
                <input type="hidden" name="page_source" value="repairs_callout_cta">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <input type="text"  name="name"          placeholder="Name *"          required class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:border-[#148af4] focus:ring-1 focus:ring-[#148af4] outline-none font-body text-sm text-navy placeholder-gray-400">
                    <input type="text"  name="organisation"  placeholder="Organisation"            class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:border-[#148af4] focus:ring-1 focus:ring-[#148af4] outline-none font-body text-sm text-navy placeholder-gray-400">
                    <input type="tel"   name="phone"         placeholder="Phone *"         required class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:border-[#148af4] focus:ring-1 focus:ring-[#148af4] outline-none font-body text-sm text-navy placeholder-gray-400">
                    <input type="email" name="email"         placeholder="Email *"         required class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:border-[#148af4] focus:ring-1 focus:ring-[#148af4] outline-none font-body text-sm text-navy placeholder-gray-400">
                    <input type="text"  name="site_location" placeholder="Site location"           class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:border-[#148af4] focus:ring-1 focus:ring-[#148af4] outline-none font-body text-sm text-navy placeholder-gray-400">
                    <input type="text"  name="equipment_type" placeholder="Equipment type"         class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:border-[#148af4] focus:ring-1 focus:ring-[#148af4] outline-none font-body text-sm text-navy placeholder-gray-400">
                </div>
                <input type="text" name="equipment_model" placeholder="Equipment make / model, if known" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:border-[#148af4] focus:ring-1 focus:ring-[#148af4] outline-none font-body text-sm text-navy placeholder-gray-400">
                <textarea name="fault_details" rows="3" placeholder="Fault details *" required class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:border-[#148af4] focus:ring-1 focus:ring-[#148af4] outline-none font-body text-sm text-navy placeholder-gray-400 resize-none"></textarea>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <select name="urgency" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:border-[#148af4] focus:ring-1 focus:ring-[#148af4] outline-none font-body text-sm text-navy bg-white">
                        <option value="">How urgent is the issue?</option>
                        <option>Urgent &mdash; equipment out of use</option>
                        <option>High &mdash; affecting daily operation</option>
                        <option>Normal &mdash; needs attention soon</option>
                    </select>
                    <select name="out_of_use" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:border-[#148af4] focus:ring-1 focus:ring-[#148af4] outline-none font-body text-sm text-navy bg-white">
                        <option value="">Is the equipment currently out of use?</option>
                        <option>Yes</option>
                        <option>Partially</option>
                        <option>No</option>
                    </select>
                </div>
                <input type="text" name="service_history" placeholder="Recent service history, if known" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:border-[#148af4] focus:ring-1 focus:ring-[#148af4] outline-none font-body text-sm text-navy placeholder-gray-400">
                <textarea name="message" rows="3" placeholder="Message" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:border-[#148af4] focus:ring-1 focus:ring-[#148af4] outline-none font-body text-sm text-navy placeholder-gray-400 resize-none"></textarea>
                <label class="flex items-start gap-2 pt-1">
                    <input type="checkbox" name="consent" value="1" required class="mt-1 accent-[#148af4]">
                    <span class="font-body text-gray-500 text-xs leading-relaxed">I agree to <span class="whitespace-nowrap">Irish Laundry Systems</span> contacting me about this repair enquiry.</span>
                </label>
                <button type="submit" class="w-full mt-2 inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-[#0e79d8] text-white font-body font-bold px-6 py-3.5 rounded-lg text-sm transition-colors">
                    Request a Call-Out
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </button>
            </form>
        </div>
    </div>
</section>

@endsection
