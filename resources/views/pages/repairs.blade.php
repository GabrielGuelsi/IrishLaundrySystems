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

                <h1 class="hero-title font-heading font-bold text-white leading-[1.05] tracking-tight mb-10 text-4xl lg:text-5xl xl:text-6xl">
                    Repairs and call-outs <span class="text-orange">when breakdowns happen</span>.
                </h1>

                <div class="hero-btns flex flex-row gap-4">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center bg-orange hover:bg-orange-dark text-white font-body font-semibold px-7 py-4 rounded-md text-base transition-colors duration-200 whitespace-nowrap">
                        Request Call-out
                    </a>
                    <a href="tel:+353000000000"
                       class="inline-flex items-center justify-center border border-white/50 hover:border-white text-white font-body font-semibold px-7 py-4 rounded-md text-base transition-colors duration-200 hover:bg-white/10 whitespace-nowrap">
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

<!-- RESPONSE STATEMENT -->
<section class="py-8 bg-orange">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <svg class="w-8 h-8 text-white flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <div>
                    <div class="font-heading font-bold text-white text-lg">We aim to be on-site within 24 hours</div>
                    <div class="text-orange-100 text-sm font-body">Subject to location and parts availability. Contract customers receive priority scheduling.</div>
                </div>
            </div>
            <a href="tel:+353000000000" class="flex-shrink-0 bg-white text-orange font-body font-bold px-6 py-3 rounded-lg text-sm hover:bg-orange-50 transition-colors cursor-pointer">
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
        'desc'     => 'Call our engineer line or submit a repair request online. Tell us the machine type, fault symptoms and your location. We triage from there.',
        'image'    => '/images/healthcare/operator.jpg',
        'alt'      => 'Operator placing a call about a commercial laundry breakdown',
        'meta'     => 'Step 1 · Contact',
        'position' => 'center',
    ],
    [
        'title'    => 'Engineer Dispatch',
        'desc'     => 'We schedule the nearest available engineer and confirm an estimated arrival window. Contract customers receive priority triage.',
        'image'    => '/images/healthcare/customer-care-line6000.jpg',
        'alt'      => 'ILS engineer providing customer care on Electrolux Line 6000 equipment',
        'meta'     => 'Step 2 · Dispatch',
        'position' => 'center',
    ],
    [
        'title'    => 'On-Site Diagnosis',
        'desc'     => 'Our engineer diagnoses the fault and advises on repair options — clearly, without technical jargon. If parts are needed, we confirm availability.',
        'image'    => '/images/hero/hero-technician-inspection.png',
        'alt'      => 'ILS technician inspecting a commercial washing machine drum during diagnosis',
        'meta'     => 'Step 3 · Diagnosis',
        'position' => 'center',
    ],
    [
        'title'    => 'Repair & Report',
        'desc'     => 'Repair is completed where possible on the first visit. A service report is provided. If further work is needed, we agree the next steps with you.',
        'image'    => '/images/healthcare/repairs-callouts.jpg',
        'alt'      => 'ILS engineer completing a reactive repair on commercial laundry equipment',
        'meta'     => 'Step 4 · Resolution',
        'position' => 'center',
    ],
];
@endphp

<section class="relative py-16 lg:py-24 bg-navy expect-dotgrid overflow-hidden">
    <div class="relative max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="text-center mb-14 lg:mb-20 reveal">
            <p class="text-orange font-body font-semibold text-xs uppercase tracking-widest mb-3">A clear journey</p>
            <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl mb-4">What to Expect from an ILS Call-Out</h2>
            <p class="font-body text-blue-200 text-lg max-w-xl mx-auto">A clear, professional process — from your first call to the job being resolved.</p>
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
                        <div class="w-14 h-14 rounded-full bg-orange flex items-center justify-center text-white font-heading font-bold text-xl ring-4 ring-navy shadow-lg">
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
                            <p class="text-orange font-body font-semibold text-xs uppercase tracking-widest mb-3">{{ $step['meta'] }}</p>
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

<!-- CONTRACT UPSELL -->
<section class="py-16 lg:py-20 bg-bg">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="bg-navy rounded-2xl p-8 lg:p-12 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <div>
                <div class="inline-flex items-center gap-2 bg-orange/20 border border-orange/30 rounded-full px-3 py-1 mb-5">
                    <svg class="w-4 h-4 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="text-xs text-orange font-body font-semibold">Reduce reactive costs</span>
                </div>
                <h2 class="font-heading font-bold text-white text-2xl lg:text-3xl mb-4">Already dealing with repeat breakdowns?</h2>
                <p class="font-body text-gray-300 leading-relaxed mb-4">
                    Reactive call-outs are more expensive than planned maintenance. If you're regularly paying for emergency repairs, a service contract may cost less — while also reducing the frequency and impact of failures.
                </p>
                <p class="font-body text-gray-400 text-sm leading-relaxed">
                    Contract customers also receive preferential call-out rates and priority scheduling — meaning faster response when breakdowns do occur.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row lg:flex-col gap-4">
                <a href="{{ route('service-contracts') }}"
                   class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-semibold px-6 py-3 rounded-lg text-sm transition-colors cursor-pointer">
                    View Service Contracts
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
                <a href="{{ route('request-assessment') }}"
                   class="inline-flex items-center justify-center gap-2 border-2 border-white/30 hover:border-white text-white font-body font-semibold px-6 py-3 rounded-lg text-sm transition-colors cursor-pointer hover:bg-white/10">
                    Request Assessment
                </a>
            </div>
        </div>
    </div>
</section>

<!-- FAQs -->
@php
$faqs = [
    [
        'question' => 'Do you repair all brands of commercial laundry equipment?',
        'answer' => 'We work with a range of commercial laundry brands. As an Authorised Electrolux Professional Partner, we have particular expertise in the Electrolux Professional range. For other brands, please contact us to confirm we can support your specific equipment.',
    ],
    [
        'question' => 'What information do I need when I call about a breakdown?',
        'answer' => 'If possible, have the machine make, model and serial number to hand, along with a description of the fault — error codes, unusual sounds, what the machine is or isn\'t doing. This helps us triage efficiently and advise on likely parts needed before arriving.',
    ],
    [
        'question' => 'Can you repair equipment you didn\'t supply?',
        'answer' => 'Yes, in most cases. Our engineers work on a range of commercially available laundry equipment. Where parts availability may affect turnaround, we\'ll advise before proceeding.',
    ],
    [
        'question' => 'Is there a call-out charge?',
        'answer' => 'Standard call-out charges apply. Contract customers at Priority and Assured tiers benefit from preferential call-out rates. Please contact us for current rate information for your specific situation.',
    ],
];
@endphp
@include('components.faq', ['faqs' => $faqs, 'heading' => 'Repairs &amp; Call-out FAQs'])

@include('components.partner-strip')
@include('components.proof-bar')

<!-- CTA BAND -->
@include('components.cta-band', [
    'heading' => 'Need an engineer today?',
    'subheading' => 'Call us directly or submit a repair request. We aim to be on-site within 24 hours (subject to location and parts availability).',
    'primaryText' => 'Request a Call-Out',
    'primaryHref' => '/contact',
    'secondaryText' => 'Talk to an Engineer',
    'secondaryHref' => 'tel:+353000000000',
])

@include('components.cta-combined-banner')

@endsection
