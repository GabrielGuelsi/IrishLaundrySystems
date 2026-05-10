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

                <p class="hero-title font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Repairs &amp; Call-outs</p>

                <h1 class="hero-title font-heading font-bold text-white leading-[1.05] tracking-tight mb-6 text-4xl lg:text-5xl xl:text-6xl">
                    Call-outs and repairs when commercial laundry equipment is <span class="text-[#148af4]">under pressure</span>.
                </h1>

                <p class="hero-desc font-body text-white/80 leading-relaxed mb-10 text-lg max-w-xl">
                    Irish Laundry Systems supports commercial laundry sites with fault triage, engineering response, diagnosis, repair guidance and next-step support when equipment issues affect daily operation.
                </p>

                <div class="hero-btns flex flex-row gap-4">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center bg-orange hover:bg-orange-dark text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 whitespace-nowrap">
                        Request Call-Out
                    </a>
                    <a href="tel:+353000000000"
                       class="inline-flex items-center justify-center border border-white/50 hover:border-white text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 hover:bg-white/10 whitespace-nowrap">
                        Talk to an Engineer
                    </a>
                </div>

            </div>
        </div>
    </div>

</section>

<!-- PARTNER STRIP + PROOF BAR -->
@include('components.partner-strip')
@include('components.proof-bar')

<!-- REPAIR TRIAGE INTRO -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-4xl mx-auto px-6 sm:px-10 lg:px-20 text-center">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Repair Triage</p>
        <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-5">
            First, we need to <span class="text-[#148af4]">understand</span> the <span class="text-[#148af4]">fault</span>.
        </h2>
        <p class="font-body text-gray-600 text-lg leading-relaxed mb-8 max-w-2xl mx-auto">
            Tell us what equipment is affected, what has changed, where the site is located and how urgent the issue is. This helps Irish Laundry Systems route the request to the right engineer, parts path or next support step.
        </p>
        <div class="flex flex-wrap items-center justify-center gap-x-8 gap-y-3 mb-8">
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25M21 7.5v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9"/>
                </svg>
                <span class="font-body font-bold text-navy text-sm">Machine type</span>
            </div>
            <div class="w-px h-5 bg-gray-200 hidden sm:block"></div>
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/>
                </svg>
                <span class="font-body font-bold text-navy text-sm">Fault symptoms</span>
            </div>
            <div class="w-px h-5 bg-gray-200 hidden sm:block"></div>
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                </svg>
                <span class="font-body font-bold text-navy text-sm">Site urgency</span>
            </div>
        </div>
        <a href="{{ route('contact') }}"
           class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-7 py-3.5 rounded-md text-sm transition-colors duration-200">
            Request Call-Out
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
        </a>
    </div>
</section>

<!-- SAFE URGENCY / TRIAGE STRIP -->
<section class="relative py-10 bg-navy overflow-hidden">
    <div class="absolute inset-y-0 left-0 w-1" style="background-color: #148af4;"></div>
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-5">
            <div class="flex items-start sm:items-center gap-4">
                <div class="flex-shrink-0 w-11 h-11 rounded-full bg-white/5 ring-1 ring-white/10 flex items-center justify-center">
                    <svg class="w-5 h-5 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                    </svg>
                </div>
                <div>
                    <div class="font-heading font-bold text-[#148af4] text-lg leading-tight mb-1">Urgent equipment fault?</div>
                    <p class="font-body text-white/80 text-sm leading-relaxed">
                        Tell us the machine type, site location, symptoms and urgency so we can <span class="text-[#148af4]">route the request correctly</span>.
                    </p>
                    <p class="font-body text-white/50 text-xs mt-1.5">
                        Service Contract customers may receive preferential service and labour rates where applicable.
                    </p>
                </div>
            </div>
            <a href="tel:+353000000000"
               class="flex-shrink-0 inline-flex items-center justify-center gap-2 bg-white text-navy font-body font-bold px-6 py-3 rounded-lg text-sm hover:bg-white/90 transition-colors cursor-pointer">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                </svg>
                Call Now
            </a>
        </div>
    </div>
</section>

<!-- WHAT TO EXPECT -->
@php
$expectSteps = [
    [
        'title'    => 'Contact Us',
        'desc'     => 'Share the site, machine type, fault symptoms, urgency and any recent service history.',
        'image'    => '/images/healthcare/operator.jpg',
        'alt'      => 'Operator placing a call about a commercial laundry breakdown',
        'meta'     => 'Step 1',
        'position' => 'center',
    ],
    [
        'title'    => 'Triage & Dispatch',
        'desc'     => 'We review the details and route the request to the appropriate engineering response.',
        'image'    => '/images/healthcare/customer-care-line6000.jpg',
        'alt'      => 'ILS engineer providing customer care on Electrolux Line 6000 equipment',
        'meta'     => 'Step 2',
        'position' => 'center',
    ],
    [
        'title'    => 'On-Site Diagnosis',
        'desc'     => 'An engineer assesses the machine, identifies the issue and confirms the practical route forward.',
        'image'    => '/images/hero/on-site-diagnosis.jpeg',
        'alt'      => 'ILS technician inspecting a commercial washing machine drum during diagnosis',
        'meta'     => 'Step 3',
        'position' => 'center',
    ],
    [
        'title'    => 'Repair & Report',
        'desc'     => 'Work is completed where possible, with notes on repair actions, parts requirements or follow-up needs.',
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
            <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl mb-4">What to Expect from an Irish Laundry Systems <span class="text-[#148af4]">Call-Out</span></h2>
            <p class="font-body text-blue-200 text-lg max-w-2xl mx-auto">A clear repair route from first contact to diagnosis, repair guidance and next-step support.</p>
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
                            <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl mb-4">{{ $step['title'] }}</h3>
                            <p class="font-body text-blue-200 text-base leading-relaxed">{{ $step['desc'] }}</p>
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

<!-- REPEAT BREAKDOWNS BRIDGE -->
<section class="py-16 lg:py-20 bg-bg">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="bg-navy rounded-2xl p-8 lg:p-12 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="font-heading font-bold text-white text-2xl lg:text-3xl mb-4">Already dealing with <span class="text-[#148af4]">repeat breakdowns</span>?</h2>
                <p class="font-body text-gray-300 leading-relaxed">
                    Repeated faults may point to a wider maintenance, parts or service history issue. A more structured support route can help the site understand what keeps coming back and what needs attention next.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row lg:flex-col gap-4">
                <a href="{{ route('service-contracts') }}"
                   class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-6 py-3 rounded-lg text-sm transition-colors cursor-pointer">
                    View Service Contracts
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
                <a href="{{ route('services') }}"
                   class="inline-flex items-center justify-center gap-2 border-2 border-white/30 hover:border-white text-white font-body font-bold px-6 py-3 rounded-lg text-sm transition-colors cursor-pointer hover:bg-white/10">
                    Explore Parts &amp; Aftercare
                </a>
            </div>
        </div>
    </div>
</section>

<!-- FAQs -->
@php
$faqs = [
    [
        'question' => 'Can Irish Laundry Systems repair equipment it did not originally supply?',
        'answer'   => 'Yes. Irish Laundry Systems repairs and maintains other makes of industrial laundry equipment. The next step depends on the machine type, condition, parts availability and the issue reported.',
    ],
    [
        'question' => 'What information should I provide when requesting a call-out?',
        'answer'   => 'Please share the machine type, site location, fault symptoms, urgency and any recent service history. This helps the request be routed to the right engineer, parts path or next support step.',
    ],
    [
        'question' => 'Is there a call-out charge?',
        'answer'   => 'For customers without a Service Contract or Preventative Maintenance Agreement, the current call-out charge is €60 per hour, minimum 3 hours, plus Value Added Tax (VAT) at 13.5%. Travelling time and spare parts are charged separately.',
    ],
    [
        'question' => 'What happens if spare parts are needed?',
        'answer'   => 'If spare parts are required, Irish Laundry Systems will confirm the next step, availability and whether a separate parts quote is needed before proceeding.',
    ],
    [
        'question' => 'Do Service Contract customers receive preferential service?',
        'answer'   => 'Yes. Preventative Maintenance contract holders receive preferential service and a discounted labour rate for improvement or repair work, where applicable and upon proper authorisation.',
    ],
    [
        'question' => 'Can repeat breakdowns be reviewed under a Service Contract?',
        'answer'   => 'Yes. If the same fault keeps returning, the site may need a wider review of the installed base, service history, parts route or preventive maintenance structure.',
    ],
];
@endphp
@include('components.faq', ['faqs' => $faqs, 'heading' => 'Repairs &amp; Call-Out FAQs'])

@include('components.testimonials', ['light' => true])

<!-- NEED AN ENGINEER TODAY? — premium contained navy panel -->
<section class="py-16 lg:py-20 bg-bg">
    <div class="max-w-4xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="relative bg-navy rounded-2xl p-8 lg:p-12 text-center ring-1 ring-white/10 shadow-xl overflow-hidden">
            <div class="absolute inset-x-0 top-0 h-px" style="background: linear-gradient(90deg, transparent 0%, #148af4 50%, transparent 100%);"></div>
            <div class="mx-auto mb-5 w-12 h-12 rounded-full bg-white/5 ring-1 ring-white/10 flex items-center justify-center">
                <svg class="w-5 h-5 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                </svg>
            </div>
            <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl leading-tight mb-4">
                Need an <span class="text-[#148af4]">engineer</span> today?
            </h2>
            <p class="font-body text-white/80 text-base lg:text-lg leading-relaxed max-w-xl mx-auto mb-8">
                Call us or submit a repair request with the equipment type, site location and fault symptoms so the request can be directed to the right team.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('contact') }}"
                   class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-7 py-3.5 rounded-md text-sm transition-colors duration-200">
                    Request a Call-Out
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
                <a href="tel:+353000000000"
                   class="w-full sm:w-auto inline-flex items-center justify-center gap-2 border-2 border-white/30 hover:border-white text-white font-body font-bold px-7 py-3.5 rounded-md text-sm transition-colors duration-200 hover:bg-white/10">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                    </svg>
                    Talk to an Engineer
                </a>
            </div>
        </div>
    </div>
</section>

@include('components.service-contracts-strip')

@endsection
