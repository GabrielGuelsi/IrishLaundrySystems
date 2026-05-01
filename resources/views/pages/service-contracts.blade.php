@extends('layouts.app')

@section('pageTitle', 'Service Contracts Built Around Uptime | Irish Laundry Systems')
@section('metaDescription', 'Prevent downtime risk. Improve predictability. We confirm scope and commitments per agreement.')

@section('content')

<style>
    /* ── Hero fade-up (matches home page hero) ── */
    @keyframes heroFadeUp {
        from { opacity: 0; transform: translateY(24px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    .hero-title { animation: heroFadeUp 0.7s ease forwards; }
    .hero-desc  { animation: heroFadeUp 0.7s ease 0.2s forwards; opacity: 0; }
    .hero-btns  { animation: heroFadeUp 0.7s ease 0.4s forwards; opacity: 0; }
    @media (prefers-reduced-motion: reduce) {
        .hero-title, .hero-desc, .hero-btns { animation: none; opacity: 1; transform: none; }
    }

    /* ── Soft pulse halo behind hero primary CTA ── */
    .pulse-cta { position: relative; isolation: isolate; }
    .pulse-cta::before {
        content: '';
        position: absolute;
        inset: -6px;
        border-radius: inherit;
        background: rgba(20, 138, 244, 0.45);
        z-index: -1;
        animation: scPulse 2.4s ease-out infinite;
    }
    @keyframes scPulse {
        0%   { transform: scale(0.96); opacity: 0.55; }
        70%  { transform: scale(1.08); opacity: 0;    }
        100% { transform: scale(1.08); opacity: 0;    }
    }

    /* ── Subtle dot-grid pattern for navy backgrounds ── */
    .sc-dotgrid {
        background-image: radial-gradient(rgba(255,255,255,0.06) 1px, transparent 1px);
        background-size: 22px 22px;
    }

    /* ── Stat counter typography ── */
    .sc-stat-num {
        font-feature-settings: 'tnum';
        font-variant-numeric: tabular-nums;
        letter-spacing: -0.02em;
    }

    /* ── Timeline (How It Works) ── */
    .sc-timeline { position: relative; }
    .sc-timeline-track {
        position: absolute;
        top: 0; bottom: 0;
        left: 18px;
        width: 2px;
        background: rgba(255,255,255,0.12);
    }
    .sc-timeline-fill {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 0%;
        background: linear-gradient(180deg, #148af4 0%, #5babf7 100%);
        transition: height 0.1s linear;
    }
    @media (min-width: 768px) {
        .sc-timeline-track { left: 50%; transform: translateX(-50%); }
    }
    .sc-step-node {
        position: absolute;
        left: 18px;
        width: 56px;
        height: 56px;
        transform: translate(-50%, 0);
        z-index: 10;
    }
    @media (min-width: 768px) {
        .sc-step-node { left: 50%; transform: translate(-50%, 0); }
    }

    /* ── Stepper sliding track ── */
    .sc-stepper-track { transition: transform 0.5s cubic-bezier(0.22, 1, 0.36, 1); }
    @media (prefers-reduced-motion: reduce) { .sc-stepper-track { transition: none; } }

    /* ── Decorative animated check beside form heading ── */
    .sc-check-circle {
        stroke-dasharray: 64;
        stroke-dashoffset: 64;
        animation: scDraw 1.2s ease 0.3s forwards;
    }
    .sc-check-tick {
        stroke-dasharray: 18;
        stroke-dashoffset: 18;
        animation: scDraw 0.5s ease 1.2s forwards;
    }
    @keyframes scDraw { to { stroke-dashoffset: 0; } }

    @media (prefers-reduced-motion: reduce) {
        .pulse-cta::before { animation: none; opacity: 0; }
        .sc-check-circle, .sc-check-tick { animation: none; stroke-dashoffset: 0; }
    }
</style>

<!-- HERO -->
<section class="relative overflow-hidden" style="height: 720px; min-height: 560px; background-color: #011E41;">

    {{-- Background image --}}
    <img src="/images/healthcare/service-contracts-hero.jpg"
         alt="Two Electrolux Professional engineers discussing service equipment"
         loading="eager" decoding="async"
         class="absolute inset-0 w-full h-full object-cover object-[center_25%]">


    {{-- Gradient overlay — fades faster so both engineers come through --}}
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.95) 0%, rgba(1,30,65,0.78) 18%, rgba(1,30,65,0.40) 35%, rgba(1,30,65,0.10) 55%, transparent 70%);"></div>

    {{-- Text — vertically centered --}}
    <div class="relative z-10 h-full flex items-center w-full">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16">
            <div style="max-width: 620px;">

                <h1 class="hero-title font-heading font-bold text-white leading-[1.05] tracking-tight mb-10 text-4xl lg:text-5xl xl:text-6xl">
                    Service contracts built around <span class="text-orange">uptime</span>.
                </h1>

                <div class="hero-btns flex flex-row gap-4">
                    <a href="#contract-review-form"
                       data-ga-cta="hero-contract-review"
                       class="pulse-cta inline-flex items-center justify-center bg-orange hover:bg-orange-dark text-white font-body font-semibold px-7 py-4 rounded-md text-base transition-colors duration-200 whitespace-nowrap">
                        Request Contract Review
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

<!-- ELECTROLUX PARTNER STRIP -->
@include('components.partner-strip')

<!-- PROOF BAR -->
<div class="reveal">
    @include('components.proof-bar')
</div>

<!-- STAT BAND -->
<section class="relative bg-navy sc-dotgrid py-14 lg:py-16 overflow-hidden">
    <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>
    <div class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>
    <div class="relative max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        @php
        $stats = [
            ['target' => 38,  'suffix' => '+',  'label' => 'Years engineering-led',         'sub' => 'Specialist commercial laundry since 1987'],
            ['target' => 26,  'suffix' => '',   'label' => 'Counties covered',              'sub' => 'Full Republic of Ireland coverage'],
            ['target' => 48,  'suffix' => 'h',  'label' => 'Priority response window',      'sub' => 'On Priority &amp; Assured tiers'],
            ['target' => 100, 'suffix' => '%',  'label' => 'Genuine Electrolux parts',      'sub' => 'Authorised Professional Partner'],
        ];
        @endphp
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-10">
            @foreach ($stats as $i => $stat)
            <div class="relative reveal text-center lg:text-left" style="transition-delay:{{ $i * 90 }}ms;">
                @if ($i > 0)
                <div class="hidden lg:block absolute left-0 top-2 bottom-2 w-px bg-white/10" aria-hidden="true"></div>
                @endif
                <div class="lg:pl-6">
                    <div class="font-heading font-bold text-white text-4xl lg:text-5xl mb-2 sc-stat-num">
                        <span data-counter
                              data-target="{{ $stat['target'] }}"
                              data-suffix="{{ $stat['suffix'] }}">0{{ $stat['suffix'] }}</span>
                    </div>
                    <div class="font-body font-semibold text-orange text-sm uppercase tracking-wider mb-1">{{ $stat['label'] }}</div>
                    <div class="font-body text-blue-200 text-xs leading-relaxed">{!! $stat['sub'] !!}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- WHAT'S INCLUDED — bento grid -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        {{-- Heading row --}}
        <div class="max-w-3xl mb-12 lg:mb-16">
            <p class="text-orange font-body font-semibold text-xs uppercase tracking-widest mb-3 reveal">Inside the contract</p>
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-5 reveal" style="transition-delay:80ms;">What's Included in a Service Contract</h2>
            <p class="font-body text-gray-600 leading-relaxed reveal" style="transition-delay:140ms;">
                All ILS service contracts include a core set of structured support elements. Higher tiers add additional layers of priority, documentation and escalation support.
            </p>
        </div>

        {{-- BENTO GRID — 4 cols × 3 rows on lg, stacks on mobile --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 lg:auto-rows-[260px]">

            {{-- TILE 1 · Engineer photo (2×2) --}}
            <div class="group relative md:col-span-2 lg:col-span-2 lg:row-span-2 rounded-3xl overflow-hidden bg-navy reveal min-h-[400px] lg:min-h-0">
                <img src="/images/about/about-engineers.jpg"
                     alt="ILS engineering team on site"
                     loading="lazy" decoding="async"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-[1500ms] ease-out group-hover:scale-105">
                {{-- Top scrim for badge legibility --}}
                <div class="absolute inset-x-0 top-0 h-32"
                     style="background: linear-gradient(to bottom, rgba(1,15,42,0.55) 0%, rgba(1,15,42,0) 100%);"
                     aria-hidden="true"></div>
                {{-- Bottom scrim for headline + description legibility --}}
                <div class="absolute inset-x-0 bottom-0 h-3/5"
                     style="background: linear-gradient(to top, rgba(1,15,42,0.96) 0%, rgba(1,15,42,0.88) 35%, rgba(1,15,42,0.55) 65%, rgba(1,30,65,0) 100%);"
                     aria-hidden="true"></div>
                <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-3xl pointer-events-none"></div>
                <div class="relative z-10 h-full flex flex-col justify-between p-6 lg:p-8">
                    <div class="inline-flex items-center gap-2 self-start bg-white/15 backdrop-blur-sm border border-white/25 rounded-full px-3 py-1">
                        <svg class="w-3.5 h-3.5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.4"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span class="text-[11px] font-body font-semibold text-white uppercase tracking-wider">Engineering-led since 1987</span>
                    </div>
                    <div>
                        <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-tight mb-2 drop-shadow-[0_2px_8px_rgba(0,0,0,0.5)]">Specialist commercial laundry engineers</h3>
                        <p class="font-body text-white/90 text-sm lg:text-base leading-relaxed max-w-md drop-shadow-[0_1px_4px_rgba(0,0,0,0.5)]">Manufacturer-trained, Authorised Electrolux Professional Partner — not generalist field service.</p>
                    </div>
                </div>
            </div>

            {{-- TILE 2 · Scheduled preventive visits — featured (2×1, navy) --}}
            <div class="group relative md:col-span-2 lg:col-span-2 rounded-3xl overflow-hidden bg-navy text-white p-6 lg:p-8 reveal" style="transition-delay:60ms;">
                {{-- Background calendar glyph --}}
                <svg class="absolute -bottom-6 -right-6 w-44 h-44 text-white opacity-[0.08] transition-transform duration-700 group-hover:scale-110 group-hover:rotate-3"
                     fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/>
                </svg>
                <div class="relative z-10 h-full flex flex-col justify-between gap-4">
                    <div class="flex items-start gap-4">
                        <div class="w-11 h-11 rounded-xl bg-orange/20 border border-orange/40 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/></svg>
                        </div>
                        <div>
                            <p class="text-orange font-body font-semibold text-[11px] uppercase tracking-widest mb-1">Core inclusion</p>
                            <h3 class="font-heading font-bold text-white text-xl lg:text-2xl leading-snug">Scheduled preventive visits</h3>
                        </div>
                    </div>
                    <ul class="font-body text-blue-200 text-sm lg:text-base leading-relaxed space-y-2">
                        <li class="flex items-start gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-orange mt-2 flex-shrink-0"></span>
                            <span>Regular planned visits scheduled around your operation</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-orange mt-2 flex-shrink-0"></span>
                            <span>Inspect, clean and service your laundry equipment</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-orange mt-2 flex-shrink-0"></span>
                            <span>Reduces the likelihood of unplanned breakdowns</span>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- TILE 3 · Service reporting (1×1, light → navy on hover) --}}
            <div class="group relative rounded-3xl overflow-hidden bg-bg border border-border p-5 lg:p-6 reveal hover:bg-navy hover:border-navy transition-colors duration-300 cursor-default" style="transition-delay:120ms;">
                <div class="h-full flex flex-col gap-3">
                    <div class="w-10 h-10 rounded-xl bg-white border border-border group-hover:bg-orange group-hover:border-orange flex items-center justify-center transition-colors duration-300">
                        <svg class="w-5 h-5 text-navy group-hover:text-white transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                    </div>
                    <h3 class="font-heading font-bold text-navy group-hover:text-white text-base lg:text-lg leading-snug transition-colors duration-300">Service reporting</h3>
                    <p class="font-body text-gray-600 group-hover:text-blue-200 text-xs lg:text-sm leading-relaxed transition-colors duration-300">Written records every visit — a documented maintenance history for compliance.</p>
                </div>
            </div>

            {{-- TILE 4 · Remote support & triage (1×1, light → navy on hover) --}}
            <div class="group relative rounded-3xl overflow-hidden bg-bg border border-border p-5 lg:p-6 reveal hover:bg-navy hover:border-navy transition-colors duration-300 cursor-default" style="transition-delay:180ms;">
                <div class="h-full flex flex-col gap-3">
                    <div class="w-10 h-10 rounded-xl bg-white border border-border group-hover:bg-orange group-hover:border-orange flex items-center justify-center transition-colors duration-300">
                        <svg class="w-5 h-5 text-navy group-hover:text-white transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg>
                    </div>
                    <h3 class="font-heading font-bold text-navy group-hover:text-white text-base lg:text-lg leading-snug transition-colors duration-300">Remote support &amp; triage</h3>
                    <p class="font-body text-gray-600 group-hover:text-blue-200 text-xs lg:text-sm leading-relaxed transition-colors duration-300">Phone access to ILS engineers for guidance before dispatch.</p>
                </div>
            </div>

            {{-- TILE 5 · Preferential rates — featured (2×1, navy with glow) --}}
            <div class="group relative md:col-span-2 lg:col-span-2 rounded-3xl overflow-hidden text-white p-6 lg:p-8 reveal"
                 style="background: radial-gradient(circle at top right, rgba(20,138,244,0.32) 0%, transparent 55%), #011E41; transition-delay:60ms;">
                <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-3xl pointer-events-none"></div>
                <div class="relative z-10 h-full flex flex-col sm:flex-row items-start sm:items-center gap-5 lg:gap-7">
                    <div class="flex-shrink-0">
                        <div class="w-14 h-14 rounded-2xl bg-orange/20 border border-orange/40 flex items-center justify-center">
                            <svg class="w-6 h-6 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z"/><path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z"/></svg>
                        </div>
                    </div>
                    <div class="min-w-0">
                        <p class="text-orange font-body font-semibold text-[11px] uppercase tracking-widest mb-1">Cost control</p>
                        <h3 class="font-heading font-bold text-white text-xl lg:text-2xl mb-2 leading-snug">Preferential call-out rates</h3>
                        <p class="font-body text-blue-200 text-sm lg:text-base leading-relaxed">Contract customers receive preferential labour rates for reactive call-outs — helping control unexpected costs.</p>
                    </div>
                </div>
            </div>

            {{-- TILE 6 · How preventive visits work — interactive stepper (2×1, light) --}}
            @php
            $stepperSteps = [
                ['title' => 'Inspect & assess',   'desc' => 'Engineer inspects all contracted equipment, checks safety features, identifies wear and flags any items needing attention.'],
                ['title' => 'Service & replace',  'desc' => 'Cleaning, lubrication and consumable parts replacement where appropriate — keeping equipment operating to spec.'],
                ['title' => 'Document on-site',   'desc' => 'Written service report completed during the visit and provided to your facilities or operations manager.'],
                ['title' => 'Plan ahead',         'desc' => 'Visit frequency agreed up-front based on your equipment, usage profile and chosen tier — no surprises.'],
            ];
            @endphp
            <div class="relative md:col-span-2 lg:col-span-2 rounded-3xl overflow-hidden bg-bg border border-border p-5 lg:p-6 reveal"
                 style="transition-delay:120ms;"
                 x-data="{ step: 0, total: {{ count($stepperSteps) }} }">
                <div class="h-full flex flex-col">
                    {{-- Header --}}
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-1 h-5 bg-orange rounded-full"></div>
                        <p class="text-steel font-body font-semibold text-[11px] uppercase tracking-widest">How preventive visits work</p>
                    </div>

                    {{-- Step indicators --}}
                    <div class="flex items-center mb-4">
                        @foreach ($stepperSteps as $i => $_)
                            @if ($i > 0)
                            <div class="flex-1 h-0.5 mx-2 transition-colors duration-500"
                                 :class="step >= {{ $i }} ? 'bg-navy' : 'bg-border'"
                                 aria-hidden="true"></div>
                            @endif
                            <button type="button"
                                    @click="step = {{ $i }}"
                                    :aria-current="step === {{ $i }} ? 'step' : null"
                                    :aria-label="`Go to step {{ $i + 1 }}`"
                                    :class="{
                                        'bg-navy border-navy text-white shadow-md ring-4 ring-navy/10': step === {{ $i }},
                                        'bg-steel border-steel text-white': step > {{ $i }},
                                        'bg-white border-border text-gray-400 hover:border-navy/40': step < {{ $i }},
                                    }"
                                    class="w-9 h-9 rounded-full border-2 font-heading font-bold text-xs flex items-center justify-center transition-all duration-300 cursor-pointer flex-shrink-0 hover:scale-110">
                                <template x-if="step > {{ $i }}">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </template>
                                <template x-if="step <= {{ $i }}">
                                    <span>{{ $i + 1 }}</span>
                                </template>
                            </button>
                        @endforeach
                    </div>

                    {{-- Sliding content --}}
                    <div class="flex-1 overflow-hidden">
                        <div class="flex h-full sc-stepper-track"
                             :style="`transform: translateX(-${step * 100}%)`">
                            @foreach ($stepperSteps as $i => $s)
                            <div class="w-full flex-shrink-0 pr-1"
                                 :aria-hidden="step !== {{ $i }}">
                                <p class="text-orange font-body font-semibold text-[11px] uppercase tracking-widest mb-1.5">Step {{ $i + 1 }}</p>
                                <h4 class="font-heading font-bold text-navy text-base lg:text-lg mb-2 leading-snug">{{ $s['title'] }}</h4>
                                <p class="font-body text-gray-700 text-[13px] lg:text-sm leading-relaxed">{{ $s['desc'] }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Controls --}}
                    <div class="flex items-center justify-between gap-3 pt-3 mt-1 border-t border-border/60">
                        <button type="button"
                                @click="step = Math.max(step - 1, 0)"
                                :disabled="step === 0"
                                :class="step === 0 ? 'opacity-30 cursor-not-allowed' : 'hover:text-navy cursor-pointer'"
                                class="inline-flex items-center gap-1.5 text-xs font-body font-semibold text-gray-500 transition-colors px-1 py-1.5">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                            Back
                        </button>
                        <span class="font-body text-[11px] font-semibold text-gray-400 tabular-nums" x-text="`${step + 1} / ${total}`"></span>
                        <button type="button"
                                @click="step = Math.min(step + 1, total - 1)"
                                :disabled="step === total - 1"
                                :class="step === total - 1 ? 'opacity-40 cursor-not-allowed' : 'hover:bg-navy-dark cursor-pointer'"
                                class="inline-flex items-center gap-1.5 text-xs font-body font-semibold bg-navy text-white px-3 py-1.5 rounded-md transition-colors">
                            Next
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {{-- "What's Not Included" — slim banner below the bento --}}
        <div class="mt-4 bg-amber-50 border border-amber-200 rounded-3xl p-5 lg:p-6 reveal" style="transition-delay:60ms;">
            <div class="flex items-start gap-4">
                <div class="w-10 h-10 rounded-xl bg-amber-100 border border-amber-200 flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/>
                    </svg>
                </div>
                <div class="min-w-0">
                    <div class="flex flex-wrap items-baseline gap-x-3 gap-y-1 mb-1">
                        <p class="font-body font-semibold text-amber-800 text-[11px] uppercase tracking-widest">What's not included</p>
                        <span class="font-heading font-semibold text-amber-900 text-sm">Parts, major repairs &amp; misuse damage</span>
                    </div>
                    <p class="font-body text-amber-800 text-xs lg:text-sm leading-relaxed">
                        Service contracts cover planned preventive maintenance and scheduled labour. Parts, major repairs and damage from misuse or third-party interference are separate. Your contract document will clearly state what is and is not covered.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- DOWNTIME FRAMING BLOCK -->
<section class="relative py-20 lg:py-32 bg-navy overflow-hidden">
    {{-- Backdrop image at full opacity with subtle vignette --}}
    <div class="absolute inset-0" aria-hidden="true">
        <img src="/images/sectors/commercial-hero.jpg"
             alt=""
             loading="lazy" decoding="async"
             class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0"
             style="background: linear-gradient(to bottom, rgba(1,30,65,0.55) 0%, rgba(1,30,65,0.35) 50%, rgba(1,30,65,0.55) 100%);"></div>
    </div>

    <div class="relative max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="max-w-3xl mx-auto reveal">
            <div class="rounded-2xl p-8 lg:p-12 text-center"
                 style="background: rgba(1,30,65,0.78); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,0.08);">
                <div class="w-16 h-1 bg-steel mx-auto mb-6 rounded-full"></div>
                <p class="text-orange font-body font-semibold text-sm uppercase tracking-widest mb-4">Operational Risk Management</p>
                <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl mb-5 leading-tight">
                    Designed to Reduce Downtime Risk in Critical Laundry Operations
                </h2>
                <p class="font-body text-blue-200 text-lg leading-relaxed">
                    Unplanned breakdowns in healthcare, care and regulated environments don't just cost money — they create operational pressure, compliance risk and reputational exposure. A structured service contract puts the engineering infrastructure in place before problems occur.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- PACKAGES -->
<div class="reveal">
    @include('components.packages')
</div>

<!-- HOW IT WORKS — vertical alternating timeline -->
<section class="relative py-16 lg:py-24 bg-navy sc-dotgrid overflow-hidden">
    <div class="relative max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="text-center mb-14 lg:mb-20 reveal">
            <p class="text-orange font-body font-semibold text-xs uppercase tracking-widest mb-3">How it works</p>
            <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl mb-4">Getting a Contract in Place</h2>
            <p class="font-body text-blue-200 text-lg max-w-xl mx-auto">Three steps from first contact to service contract active.</p>
        </div>

        @php
        $steps = [
            [
                'title'    => 'Tell Us About Your Equipment',
                'desc'     => 'Submit an assessment request or call us. Tell us your equipment types, site count and any existing service arrangements.',
                'image'    => '/images/equipment/td6-multihousing-room.jpg',
                'alt'      => 'Clean laundry room with TD6 equipment ready for assessment',
                'meta'     => 'Step 1 · Discovery',
                'position' => 'center',
            ],
            [
                'title'    => 'We Propose a Contract',
                'desc'     => "We'll recommend the right tier and structure for your operation and provide a written contract proposal. No obligation.",
                'image'    => '/images/healthcare/Service Agreements.png',
                'alt'      => 'Tailored service agreement proposal',
                'meta'     => 'Step 2 · Proposal',
                'position' => 'center 25%',
            ],
            [
                'title'    => 'Contract Activates',
                'desc'     => 'Once agreed, we schedule the first preventive visit, set up service reporting and put your operation under cover.',
                'image'    => '/images/healthcare/customer-care-line6000.jpg',
                'alt'      => 'ILS engineer providing customer care on Electrolux Line 6000 equipment',
                'meta'     => 'Step 3 · Activation',
                'position' => 'center',
            ],
        ];
        @endphp

        <div class="sc-timeline">
            {{-- Vertical track + scroll-driven fill --}}
            <div class="sc-timeline-track" aria-hidden="true">
                <div class="sc-timeline-fill" data-timeline-fill></div>
            </div>

            <div class="space-y-14 md:space-y-24">
                @foreach ($steps as $i => $step)
                @php $isEven = $i % 2 === 1; @endphp
                <div class="relative pl-16 md:pl-0">
                    {{-- Numbered node --}}
                    <div class="sc-step-node" style="top: 0;">
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

<!-- FAQs -->
@php
$faqs = [
    [
        'question' => 'Can I get a contract for multiple sites?',
        'answer' => 'Yes. ILS supports multi-site operations under group service contracts. If you manage a group of healthcare facilities, nursing homes or hotel properties, we can structure a single contract arrangement covering all sites. Contact us to discuss your requirements.',
    ],
    [
        'question' => 'What equipment is covered under a service contract?',
        'answer' => 'Contracts cover the specific equipment agreed at the time of signing — typically washers, dryers, barrier washers, ironers and drying cabinets. Equipment must be assessed before being added to a contract. We\'ll advise during the assessment process.',
    ],
    [
        'question' => 'Can I upgrade my contract tier if my needs change?',
        'answer' => 'Yes. You can review and upgrade your contract tier at any time. If your operation grows or your risk profile changes, we\'ll work with you to adjust the arrangement accordingly.',
    ],
    [
        'question' => 'What\'s the difference between Priority and Assured?',
        'answer' => 'Priority tier adds priority scheduling, genuine parts strategy and compliance documentation support over Core. Assured tier adds out-of-hours escalation, tighter escalation paths and dedicated service reporting — designed for high-dependency operations where laundry continuity is critical.',
    ],
];
@endphp
<div class="reveal">
    @include('components.faq', ['faqs' => $faqs, 'heading' => 'Service Contract FAQs'])
</div>

<!-- INLINE CONTRACT REVIEW FORM -->
<section id="contract-review-form" class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="relative bg-navy rounded-3xl overflow-hidden reveal">
            <div class="grid grid-cols-1 lg:grid-cols-5">

                {{-- Left: heading + bullets --}}
                <div class="relative lg:col-span-2 p-8 lg:p-12 flex flex-col justify-between overflow-hidden">
                    {{-- Decorative background graphic --}}
                    <img src="/images/healthcare/Service%20Contracts.png"
                         alt=""
                         aria-hidden="true"
                         loading="lazy" decoding="async"
                         class="hidden lg:block pointer-events-none absolute -bottom-10 -right-10 w-64 opacity-[0.08] select-none">
                    <div>
                        <p class="text-orange font-body font-semibold text-xs uppercase tracking-widest mb-3">Next step</p>
                        <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl leading-tight mb-5">
                            Request a Contract Review
                        </h2>
                        <p class="font-body text-blue-200 text-base leading-relaxed mb-7">
                            Tell us about your equipment, site count and operational profile. We'll review and come back with a tailored proposal — no obligation.
                        </p>
                        <div class="flex flex-col gap-3">
                            @foreach ([
                                ['Engineering-led', 'Specialist commercial laundry engineers, not generalist field service.'],
                                ['Authorised Electrolux Professional Partner', 'Genuine parts and manufacturer-trained engineers.'],
                                ['Republic of Ireland coverage', 'Local engineering support across the Republic.'],
                            ] as [$bullet, $sub])
                            <div class="bg-white/10 rounded-xl px-5 py-3">
                                <div class="font-body text-white text-sm font-semibold">{{ $bullet }}</div>
                                <div class="font-body text-blue-200 text-xs mt-0.5">{{ $sub }}</div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Right: form card --}}
                <div class="lg:col-span-3 bg-white lg:m-2 rounded-2xl p-6 lg:p-8">
                    <div class="flex items-center gap-3 mb-1">
                        <svg class="w-7 h-7 text-steel flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle class="sc-check-circle" cx="12" cy="12" r="10"/>
                            <path class="sc-check-tick" d="M9 12.5l2 2 4.5-5"/>
                        </svg>
                        <h3 class="font-heading font-bold text-navy text-xl">Send Contract Review Request</h3>
                    </div>
                    <p class="font-body text-gray-500 text-sm mb-6">Fill in as much detail as you can — the more context, the better we can respond.</p>

                    @if (session('success'))
                    <div class="bg-green-50 border border-green-200 rounded-2xl p-4 mb-6 flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <p class="font-body text-green-800 text-sm leading-relaxed">{{ session('success') }}</p>
                    </div>
                    @endif

                    @if ($errors->any())
                    <div class="bg-red-50 border border-red-200 rounded-2xl p-4 mb-6">
                        <ul class="space-y-1">
                            @foreach ($errors->all() as $error)
                            <li class="font-body text-red-700 text-sm">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4" data-utm>
                        @csrf
                        {{-- Locked: this form always represents a contract review request --}}
                        <input type="hidden" name="request_type" value="contract">
                        <input type="hidden" name="page_source" value="service-contracts">
                        {{-- UTM tracking fields (populated by JS in app.blade.php) --}}
                        <input type="hidden" name="utm_source">
                        <input type="hidden" name="utm_medium">
                        <input type="hidden" name="utm_campaign">
                        <input type="hidden" name="utm_content">
                        <input type="hidden" name="utm_term">

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="cr_name" class="block text-xs font-body font-semibold text-navy mb-1.5">Name <span class="text-red-500">*</span></label>
                                <input type="text" id="cr_name" name="name" required value="{{ old('name') }}"
                                       placeholder="Your full name"
                                       class="w-full border border-border rounded-lg px-4 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                            </div>
                            <div>
                                <label for="cr_company" class="block text-xs font-body font-semibold text-navy mb-1.5">Company / Organisation <span class="text-red-500">*</span></label>
                                <input type="text" id="cr_company" name="company" required value="{{ old('company') }}"
                                       placeholder="Company or facility"
                                       class="w-full border border-border rounded-lg px-4 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="cr_email" class="block text-xs font-body font-semibold text-navy mb-1.5">Email <span class="text-red-500">*</span></label>
                                <input type="email" id="cr_email" name="email" required value="{{ old('email') }}"
                                       placeholder="you@company.ie"
                                       class="w-full border border-border rounded-lg px-4 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                            </div>
                            <div>
                                <label for="cr_phone" class="block text-xs font-body font-semibold text-navy mb-1.5">Phone <span class="text-red-500">*</span></label>
                                <input type="tel" id="cr_phone" name="phone" required value="{{ old('phone') }}"
                                       placeholder="+353 (0)..."
                                       class="w-full border border-border rounded-lg px-4 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="cr_location" class="block text-xs font-body font-semibold text-navy mb-1.5">Site Location(s) <span class="text-red-500">*</span></label>
                                <input type="text" id="cr_location" name="location" required value="{{ old('location') }}"
                                       placeholder="e.g. Dublin, Cork"
                                       class="w-full border border-border rounded-lg px-4 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                            </div>
                            <div>
                                <label for="cr_sector" class="block text-xs font-body font-semibold text-navy mb-1.5">Sector <span class="text-red-500">*</span></label>
                                <select id="cr_sector" name="sector" required
                                        class="w-full border border-border rounded-lg px-4 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent cursor-pointer">
                                    <option value="">Select sector</option>
                                    <option value="healthcare" {{ old('sector') === 'healthcare' ? 'selected' : '' }}>Healthcare</option>
                                    <option value="hospitality" {{ old('sector') === 'hospitality' ? 'selected' : '' }}>Hospitality</option>
                                    <option value="care" {{ old('sector') === 'care' ? 'selected' : '' }}>Care Facilities</option>
                                    <option value="commercial" {{ old('sector') === 'commercial' ? 'selected' : '' }}>Commercial &amp; Industrial</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="cr_equipment" class="block text-xs font-body font-semibold text-navy mb-1.5">Equipment Type(s) &amp; Brand</label>
                            <input type="text" id="cr_equipment" name="equipment" value="{{ old('equipment') }}"
                                   placeholder="e.g. Electrolux WH6-18, washers and dryers x4..."
                                   class="w-full border border-border rounded-lg px-4 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                        </div>

                        <div>
                            <label class="block text-xs font-body font-semibold text-navy mb-1.5">Timeline <span class="text-red-500">*</span></label>
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                                @foreach ([
                                    ['today', 'Urgent'],
                                    ['24_48h', '24–48 hrs'],
                                    ['this_week', 'This week'],
                                    ['planning', 'Planning'],
                                ] as [$val, $label])
                                <label class="cursor-pointer">
                                    <input type="radio" name="urgency" value="{{ $val }}" class="sr-only peer" {{ old('urgency', 'planning') === $val ? 'checked' : '' }}>
                                    <div class="border-2 border-border rounded-lg px-3 py-2 text-center text-xs font-body font-semibold text-gray-600 peer-checked:border-steel peer-checked:bg-steel peer-checked:text-white hover:border-steel transition-all">
                                        {{ $label }}
                                    </div>
                                </label>
                                @endforeach
                            </div>
                        </div>

                        <div>
                            <label for="cr_message" class="block text-xs font-body font-semibold text-navy mb-1.5">Message</label>
                            <textarea id="cr_message" name="message" rows="3"
                                      placeholder="Tell us about your operation — site count, current arrangement, anything we should know."
                                      class="w-full border border-border rounded-lg px-4 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400 resize-none leading-relaxed">{{ old('message') }}</textarea>
                        </div>

                        <label class="flex items-start gap-3 cursor-pointer pt-1">
                            <input type="checkbox" name="gdpr_consent" required value="1" {{ old('gdpr_consent') ? 'checked' : '' }}
                                   class="mt-0.5 w-4 h-4 rounded border-border text-steel focus:ring-steel flex-shrink-0">
                            <span class="font-body text-xs text-gray-600 leading-relaxed">
                                I agree to ILS processing my details to respond to this enquiry. <a href="{{ route('privacy') }}" class="text-steel underline hover:text-navy" target="_blank">Privacy Policy</a>. <span class="text-red-500">*</span>
                            </span>
                        </label>

                        <button type="submit"
                                data-ga-cta="contract-review-submit"
                                class="w-full inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-8 py-3.5 rounded-lg text-sm transition-colors duration-200 cursor-pointer">
                            Request Contract Review
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

<div class="reveal">
    @include('components.cta-combined-banner')
</div>

<script>
    (function () {
        var prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        var hasGsap = typeof window.gsap !== 'undefined';
        var hasScrollTrigger = hasGsap && typeof window.ScrollTrigger !== 'undefined';

        if (hasScrollTrigger) {
            gsap.registerPlugin(ScrollTrigger);
        }

        // ── Animated stat counters ───────────────────────────────────────────
        document.querySelectorAll('[data-counter]').forEach(function (el) {
            var target = parseFloat(el.getAttribute('data-target')) || 0;
            var suffix = el.getAttribute('data-suffix') || '';

            if (prefersReduced || !hasGsap) {
                el.textContent = target + suffix;
                return;
            }

            var state = { val: 0 };
            var animate = function () {
                gsap.to(state, {
                    val: target,
                    duration: 1.6,
                    ease: 'power2.out',
                    onUpdate: function () { el.textContent = Math.round(state.val) + suffix; },
                    onComplete: function () { el.textContent = target + suffix; },
                });
            };

            if (hasScrollTrigger) {
                ScrollTrigger.create({
                    trigger: el,
                    start: 'top 85%',
                    once: true,
                    onEnter: animate,
                });
            } else {
                animate();
            }
        });

        // ── Timeline progress fill ───────────────────────────────────────────
        var timeline = document.querySelector('.sc-timeline');
        var fill = document.querySelector('[data-timeline-fill]');
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

@endsection
