@extends('layouts.app')

@section('pageTitle', 'Service Contracts | Irish Laundry Systems')
@section('metaDescription', 'Service contracts scoped around your installed equipment and maintenance needs — planned visits, service reporting, parts access and practical aftercare.')

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
    <img src="/images/healthcare/service-contracts-hero.png"
         alt="ILS engineer reviewing a commercial laundry service contract with a customer"
         loading="eager" decoding="async"
         class="absolute inset-0 w-full h-full object-cover object-right">


    {{-- Gradient overlay — stronger left-side fade for text contrast, still lets engineers come through --}}
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.97) 0%, rgba(1,30,65,0.90) 25%, rgba(1,30,65,0.65) 45%, rgba(1,30,65,0.25) 65%, transparent 80%);"></div>

    {{-- Text — vertically centered --}}
    <div class="relative z-10 h-full flex items-center w-full">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16">
            <div style="max-width: 620px;">

                <h1 class="hero-title font-heading font-bold text-white leading-[1.05] tracking-tight mb-6 text-4xl lg:text-5xl xl:text-6xl">
                    Service contracts scoped&nbsp;around your <span class="text-orange">installed equipment and&nbsp;maintenance&nbsp;needs</span>.
                </h1>

                <p class="hero-desc font-body text-blue-200 text-base lg:text-lg leading-relaxed mb-10 max-w-xl">
                    Irish Laundry Systems supports commercial laundry sites with planned maintenance, service reporting, preferential call-out rates where applicable, parts access and practical aftercare around the equipment already in use.
                </p>

                <div class="hero-btns flex flex-row gap-4">
                    <a href="#contract-review-form"
                       data-ga-cta="hero-contract-review"
                       class="pulse-cta inline-flex items-center justify-center bg-orange hover:bg-orange-dark text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 whitespace-nowrap">
                        Request Contract Review
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

<!-- ELECTROLUX PARTNER STRIP -->
@include('components.partner-strip')

<!-- PROOF BAR -->
<div class="reveal">
    @include('components.proof-bar')
</div>

<!-- SAFE AUTHORITY BAR -->
<section class="relative bg-navy sc-dotgrid py-8 lg:py-10 overflow-hidden">
    <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>
    <div class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>
    <div class="relative max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        @php
        $authorityItems = [
            ['label' => 'Since 1987',                    'text' => 'Commercial laundry engineering support across Ireland.'],
            ['label' => 'Republic of Ireland coverage',  'text' => 'Engineering support for sites across the Republic.'],
            ['label' => 'Authorised partner',            'text' => 'Electrolux Professional equipment and parts support where applicable.'],
            ['label' => 'Planned maintenance support',   'text' => 'Contracts, call-outs, reporting, parts and aftercare connected.'],
        ];
        @endphp
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-6">
            @foreach ($authorityItems as $i => $item)
            <div class="relative reveal text-center lg:text-left" style="transition-delay:{{ $i * 90 }}ms;">
                @if ($i > 0)
                <div class="hidden lg:block absolute left-0 top-1 bottom-1 w-px bg-white/10" aria-hidden="true"></div>
                @endif
                <div class="lg:pl-6">
                    <div class="font-heading font-bold text-orange text-sm lg:text-base mb-1.5 uppercase tracking-wider leading-tight">{{ $item['label'] }}</div>
                    <div class="font-body text-blue-200 text-xs lg:text-sm leading-snug">{{ $item['text'] }}</div>
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
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-5 reveal">What's <span class="text-orange">included</span> in a service contract.</h2>
            <p class="font-body text-gray-600 leading-relaxed reveal" style="transition-delay:140ms;">
                A service contract gives your site a clearer maintenance structure around the equipment already installed. The exact scope is reviewed around your machines, usage, site pressure and service history.
            </p>
        </div>

        {{-- BENTO GRID — 4 cols × 3 rows on lg, stacks on mobile --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 lg:auto-rows-[260px]">

            {{-- TILE 1 · Engineer photo (2×2) --}}
            <div class="group relative md:col-span-2 lg:col-span-2 lg:row-span-2 rounded-3xl overflow-hidden bg-navy reveal min-h-[400px] lg:min-h-0">
                <img src="/images/hero/on-site-diagnosis.jpeg"
                     alt="ILS technician inspecting a commercial washing machine drum during diagnosis"
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
                        <span class="text-[11px] font-body font-bold text-white uppercase tracking-wider">Engineering-led since 1987</span>
                    </div>
                    <div>
                        <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-tight mb-2 drop-shadow-[0_2px_8px_rgba(0,0,0,0.5)]">Specialist commercial laundry engineers</h3>
                        <p class="font-body text-white/90 text-sm lg:text-base leading-relaxed max-w-md drop-shadow-[0_1px_4px_rgba(0,0,0,0.5)]">Planned maintenance carried out by engineers who understand commercial laundry equipment, site pressure and day-to-day operating needs.</p>
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
                        <h3 class="font-heading font-bold text-white text-xl lg:text-2xl leading-snug">Scheduled preventive visits</h3>
                    </div>
                    <p class="font-body text-blue-200 text-sm lg:text-base leading-relaxed">
                        Planned visits are scheduled around your equipment, usage and site requirements to help identify issues before they become larger problems.
                    </p>
                </div>
            </div>

            {{-- TILE 3 · Service reporting (1×1, light → navy on hover) --}}
            <div class="group relative rounded-3xl overflow-hidden bg-bg border border-border p-5 lg:p-6 reveal hover:bg-navy hover:border-navy transition-colors duration-300 cursor-default" style="transition-delay:120ms;">
                <div class="h-full flex flex-col gap-3">
                    <div class="w-10 h-10 rounded-xl bg-white border border-border group-hover:bg-orange group-hover:border-orange flex items-center justify-center transition-colors duration-300">
                        <svg class="w-5 h-5 text-navy group-hover:text-white transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                    </div>
                    <h3 class="font-heading font-bold text-navy group-hover:text-white text-base lg:text-lg leading-snug transition-colors duration-300">Service reporting</h3>
                    <p class="font-body text-gray-600 group-hover:text-blue-200 text-xs lg:text-sm leading-relaxed transition-colors duration-300">Clear visit notes and service records help your team understand what was checked, what was adjusted and what may need attention next.</p>
                </div>
            </div>

            {{-- TILE 4 · Remote support & triage (1×1, light → navy on hover) --}}
            <div class="group relative rounded-3xl overflow-hidden bg-bg border border-border p-5 lg:p-6 reveal hover:bg-navy hover:border-navy transition-colors duration-300 cursor-default" style="transition-delay:180ms;">
                <div class="h-full flex flex-col gap-3">
                    <div class="w-10 h-10 rounded-xl bg-white border border-border group-hover:bg-orange group-hover:border-orange flex items-center justify-center transition-colors duration-300">
                        <div class="w-5 h-5 text-navy group-hover:text-white transition-colors duration-300 [&>svg]:w-full [&>svg]:h-full" aria-hidden="true">
                            {!! file_get_contents(public_path('images/icons/brand/Ativo 6.svg')) !!}
                        </div>
                    </div>
                    <h3 class="font-heading font-bold text-navy group-hover:text-white text-base lg:text-lg leading-snug transition-colors duration-300">Remote support &amp; triage</h3>
                    <p class="font-body text-gray-600 group-hover:text-blue-200 text-xs lg:text-sm leading-relaxed transition-colors duration-300">Phone and remote support help assess the issue, prioritise the next step and direct the enquiry to the right route.</p>
                </div>
            </div>

        </div>

        {{-- Preferential rates — slim banner directly below the bento (was Tile 5) --}}
        <div class="group relative mt-4 rounded-2xl overflow-hidden text-white p-4 lg:px-6 lg:py-4 reveal"
             style="background: radial-gradient(circle at top right, rgba(20,138,244,0.32) 0%, transparent 55%), #011E41; transition-delay:60ms;">
            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-2xl pointer-events-none"></div>
            <div class="relative z-10 flex flex-col sm:flex-row items-start sm:items-center gap-4">
                <div class="flex-shrink-0">
                    <div class="w-11 h-11 rounded-xl bg-orange/20 border border-orange/40 flex items-center justify-center">
                        <svg class="w-6 h-6 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M14.25 7.756a4.5 4.5 0 100 8.488M7.5 10.5h5.25m-5.25 3h5.25M3 12a9 9 0 1118 0 9 9 0 01-18 0z"/></svg>
                    </div>
                </div>
                <div class="min-w-0">
                    <h3 class="font-heading font-bold text-white text-base lg:text-lg mb-1 leading-snug">Preferential call-out rates</h3>
                    <p class="font-body text-blue-200 text-xs lg:text-sm leading-relaxed">Contract customers may receive preferential labour rates for reactive call-outs, helping control unexpected service costs where this applies.</p>
                </div>
            </div>
        </div>

        {{-- "What's Not Included" — slim banner below the bento --}}
        <div class="mt-4 bg-amber-50 border border-amber-200 rounded-2xl p-3 lg:p-4 reveal" style="transition-delay:60ms;">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-lg bg-amber-100 border border-amber-200 flex items-center justify-center flex-shrink-0">
                    <svg class="w-4 h-4 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/>
                    </svg>
                </div>
                <div class="min-w-0 flex-1">
                    <p class="font-body text-amber-800 text-[11px] lg:text-xs leading-snug">
                        <span class="font-bold uppercase tracking-widest text-amber-700">Note:</span>
                        Parts, major repairs and damage from misuse or third-party maintenance are quoted separately unless included in the agreed contract scope.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- HOW PREVENTIVE VISITS WORK — gallery (matches hospitality pattern) -->
<style>
.sc-visit-card {
    position: relative;
    overflow: hidden;
    min-height: 520px;
    flex: 1 1 25%;
}
.sc-visit-card img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    transition: transform 0.6s ease;
}
.sc-visit-card:hover img { transform: scale(1.06); }
.sc-visit-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(1,30,65,0.90) 0%, rgba(1,30,65,0.35) 55%, rgba(1,30,65,0.10) 100%);
    z-index: 1;
    transition: opacity 0.4s;
}
.sc-visit-card::after {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(1,30,65,0.90);
    z-index: 2;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.4s, visibility 0.4s;
}
.sc-visit-card:hover::before { opacity: 0; }
.sc-visit-card:hover::after  { opacity: 1; visibility: visible; }

.sc-vcap1 {
    position: absolute;
    bottom: 28px;
    left: 32px;
    z-index: 3;
    transition: opacity 0.35s ease, transform 0.35s ease;
}
.sc-vcap1 .sc-num {
    color: #148af4;
    font-size: 2.6rem;
    font-weight: 700;
    line-height: 1;
    display: block;
    margin-bottom: 6px;
}
.sc-vcap1 h4 {
    color: #fff;
    font-size: 1rem;
    font-weight: 700;
    line-height: 1.3;
    margin: 0;
}
.sc-visit-card:hover .sc-vcap1 {
    opacity: 0;
    transform: translateY(16px);
}

.sc-vcap2 {
    position: absolute;
    top: 50%;
    left: 32px;
    right: 32px;
    transform: translateY(-40%);
    z-index: 5;
    opacity: 0;
    transition: opacity 0.4s ease, transform 0.4s ease;
}
.sc-visit-card:hover .sc-vcap2 {
    opacity: 1;
    transform: translateY(-50%);
}
.sc-vcap2 .sc-num {
    color: #148af4;
    font-size: 2.6rem;
    font-weight: 700;
    line-height: 1;
    display: block;
    margin-bottom: 12px;
}
.sc-vcap2 h4 {
    color: #fff;
    font-size: 1.1rem;
    font-weight: 700;
    margin-bottom: 12px;
}
.sc-vcap2 p {
    color: rgba(255,255,255,0.72);
    font-size: 0.85rem;
    line-height: 1.65;
}

@media (max-width: 767px) {
    .sc-visit-card { min-height: 300px; flex: 1 1 50%; }
}
@media (max-width: 479px) {
    .sc-visit-card { min-height: 260px; flex: 1 1 100%; }
}
</style>

<section class="w-full overflow-hidden pb-16 lg:pb-24">
    {{-- Section header (matches home heading pattern) --}}
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 lg:py-20">
        <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight max-w-3xl">
            How <span class="text-orange">preventive visits</span> work.
        </h2>
        <p class="font-body text-gray-600 text-lg leading-relaxed mt-4 max-w-2xl">
            Four practical stages that turn planned maintenance into clearer equipment support.
        </p>
    </div>

    {{-- Full-width 4-card gallery --}}
    <div style="display:flex; flex-wrap:wrap;">
        @foreach([
            [
                'num'   => '01.',
                'title' => 'Inspect & assess',
                'body'  => 'Review equipment condition, visible wear, usage pressure and any issues reported by the site.',
                'img'   => '/images/healthcare/Customer-Care_Line-6000-_001.jpg',
            ],
            [
                'num'   => '02.',
                'title' => 'Service & replace',
                'body'  => 'Carry out planned maintenance tasks and replace agreed wear items where included or quoted.',
                'img'   => '/images/healthcare/repairs-hero.jpg',
            ],
            [
                'num'   => '03.',
                'title' => 'Document on-site',
                'body'  => 'Record the visit, findings, adjustments and recommendations for service history.',
                'img'   => '/images/healthcare/service-contracts-hero.jpg',
            ],
            [
                'num'   => '04.',
                'title' => 'Plan ahead',
                'body'  => 'Highlight follow-up actions, parts requirements or future maintenance needs before they become urgent.',
                'img'   => '/images/equipment/td6-multihousing-room.jpg',
            ],
        ] as $card)
        <div class="sc-visit-card">
            <img src="{{ asset(ltrim($card['img'], '/')) }}" alt="{{ $card['title'] }}" loading="lazy">
            <div class="sc-vcap1">
                <span class="sc-num">{{ $card['num'] }}</span>
                <h4>{{ $card['title'] }}</h4>
            </div>
            <div class="sc-vcap2">
                <span class="sc-num">{{ $card['num'] }}</span>
                <h4>{{ $card['title'] }}</h4>
                <p>{{ $card['body'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- DOWNTIME FRAMING BLOCK -->
<section class="relative py-20 lg:py-32 bg-navy overflow-hidden">
    {{-- Backdrop image at full opacity, no blue overlay --}}
    <div class="absolute inset-0" aria-hidden="true">
        <img src="/images/sectors/commercial-hero.jpg"
             alt=""
             loading="lazy" decoding="async"
             class="absolute inset-0 w-full h-full object-cover">
    </div>

    <div class="relative max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="max-w-3xl mx-auto reveal">
            <div class="rounded-2xl p-8 lg:p-12 text-center"
                 style="background: rgba(1,30,65,0.78); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,0.08);">
                <h2 class="font-heading font-bold text-white text-4xl lg:text-5xl mb-5 leading-tight">
                    Designed to reduce <span class="text-orange">downtime risk</span> around essential laundry equipment.
                </h2>
                <p class="font-body text-blue-200 text-lg leading-relaxed">
                    A structured service contract helps keep planned maintenance, service records, parts access and follow-up support connected before small issues become larger operational pressure.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CONTRACT SCOPE BLOCK -->
<section class="py-16 lg:py-24 bg-bg">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- Heading row --}}
        <div class="max-w-3xl mb-12 lg:mb-16">
            <p class="text-orange font-body font-bold text-xs uppercase tracking-widest mb-4 reveal">Contract Scope</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-5 reveal" style="transition-delay:80ms;">
                Service contracts scoped around your <span class="text-orange">installed equipment and maintenance needs</span>.
            </h2>
            <p class="font-body text-gray-600 text-lg leading-relaxed reveal" style="transition-delay:160ms;">
                Every contract is shaped around your site, your machines and your operational priorities.
            </p>
        </div>

        {{-- 4 icon cards --}}
        @php
        $scopeCards = [
            [
                'title' => 'Scheduled preventive visits',
                'text'  => 'Visit frequency is reviewed around equipment use, workload, condition and how critical each machine is to the site.',
                'svg'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/>',
            ],
            [
                'title' => 'Installed base review',
                'text'  => 'We assess equipment type, age, usage pattern and service history before confirming the right contract scope.',
                'svg'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"/>',
            ],
            [
                'title' => 'Service history context',
                'text'  => 'Previous faults, repeat issues and visit records help focus attention where the installed base needs it most.',
                'svg'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>',
            ],
            [
                'title' => 'Parts & aftercare connection',
                'text'  => 'Genuine parts access, service reporting and practical aftercare keep support connected beyond the visit itself.',
                'svg'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/>',
            ],
        ];
        @endphp
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 lg:gap-6">
            @foreach ($scopeCards as $i => $card)
            <article class="group relative overflow-hidden bg-white rounded-3xl border border-navy/5 p-7 lg:p-8 flex flex-col gap-5 reveal transition-all duration-300 ease-out hover:-translate-y-1 hover:shadow-[0_20px_40px_-15px_rgba(1,30,65,0.18)] hover:border-[#148af4]/30" style="transition-delay:{{ $i * 80 }}ms;">

                {{-- Top accent line --}}
                <span aria-hidden="true" class="absolute inset-x-0 top-0 h-[2px] bg-gradient-to-r from-transparent via-[#148af4] to-transparent opacity-70 group-hover:opacity-100 transition-opacity duration-300"></span>

                {{-- Big numeral watermark --}}
                <span aria-hidden="true" class="pointer-events-none absolute top-4 right-5 font-heading font-bold text-navy/[0.06] text-7xl lg:text-8xl leading-none tracking-tight select-none transition-all duration-500 group-hover:text-[#148af4]/[0.10] group-hover:scale-105">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>

                {{-- Icon disc --}}
                <div class="relative w-14 h-14 rounded-full flex items-center justify-center bg-gradient-to-br from-[#148af4]/15 via-[#148af4]/8 to-white ring-1 ring-inset ring-[#148af4]/25 shadow-[inset_0_1px_2px_rgba(255,255,255,0.8),0_4px_12px_-4px_rgba(20,138,244,0.25)] transition-transform duration-300 group-hover:scale-110">
                    <svg class="w-7 h-7 text-[#148af4] relative" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        {!! $card['svg'] !!}
                    </svg>
                </div>

                <h3 class="relative font-heading font-bold text-navy text-xl lg:text-2xl leading-snug">{{ $card['title'] }}</h3>
                <p class="relative font-body text-gray-600 text-sm lg:text-base leading-relaxed">{{ $card['text'] }}</p>
            </article>
            @endforeach
        </div>

    </div>
</section>

<!-- HOW IT WORKS — vertical alternating timeline -->
<section class="relative py-16 lg:py-24 bg-navy sc-dotgrid overflow-hidden">
    <div class="relative max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="text-center mb-14 lg:mb-20 reveal">
            <h2 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-4">Getting a <span class="text-orange">contract in place</span>.</h2>
            <p class="font-body text-blue-200 text-lg max-w-xl mx-auto">A clear process from first review to contract activation.</p>
        </div>

        @php
        $steps = [
            [
                'title'    => 'Tell us about your equipment',
                'desc'     => 'Share your site details, equipment types, number of machines, usage pressure and any existing service arrangements.',
                'image'    => '/images/equipment/td6-multihousing-room.jpg',
                'alt'      => 'Clean laundry room with installed equipment ready for review',
                'meta'     => 'Step 1 · Discovery',
                'position' => 'center',
            ],
            [
                'title'    => 'Review the installed base',
                'desc'     => 'We assess the equipment mix, service history, site needs and maintenance priorities before recommending the contract scope.',
                'image'    => '/images/healthcare/Customer-Care_Line-6000-_001.jpg',
                'alt'      => 'ILS engineer reviewing installed laundry equipment',
                'meta'     => 'Step 2 · Review',
                'position' => 'center',
            ],
            [
                'title'    => 'Define the contract scope',
                'desc'     => 'We confirm the planned maintenance structure, service route, reporting needs and any call-out or parts considerations.',
                'image'    => '/images/healthcare/Service Agreements.png',
                'alt'      => 'Tailored service contract proposal',
                'meta'     => 'Step 3 · Proposal',
                'position' => 'center 25%',
            ],
            [
                'title'    => 'Contract activates',
                'desc'     => 'Once agreed, planned visits are scheduled and the service route is connected to your installed equipment.',
                'image'    => '/images/healthcare/customer-care-line6000.jpg',
                'alt'      => 'ILS engineer providing customer care on Electrolux Line 6000 equipment',
                'meta'     => 'Step 4 · Activation',
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
                            <p class="text-orange font-body font-bold text-xs uppercase tracking-widest mb-3">{{ $step['meta'] }}</p>
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

<!-- DAY-TO-DAY OUTCOMES — heading + 3 outcome columns -->
<section class="py-16 lg:py-20 bg-white border-t border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12">

            {{-- Left: heading --}}
            <div class="lg:col-span-4 reveal">
                <p class="font-body font-bold text-orange text-xs uppercase tracking-[0.22em] mb-4">Day-to-day impact</p>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-4">
                    What a <span class="text-orange">service contract</span> changes <span class="text-orange">day-to-day</span>.
                </h2>
                <p class="font-body text-gray-600 text-base leading-relaxed">
                    A planned contract gives your team a clearer route for maintenance, reporting and follow-up support around the installed base.
                </p>
            </div>

            {{-- Right: 3 outcome columns with icon circles --}}
            @php
            $outcomeCards = [
                [
                    'highlight' => 'More planned maintenance, fewer reactive surprises.',
                    'body'      => 'Regular visits help teams move from purely reactive support to a clearer maintenance rhythm.',
                    'icon'      => '<path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5M9 13.5l1.75 1.75L14.5 11.5"/>',
                ],
                [
                    'highlight' => 'Service history that makes decisions easier.',
                    'body'      => 'Visit records and service notes help the site understand equipment condition, repeat issues and recommended next steps.',
                    'icon'      => '<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>',
                ],
                [
                    'highlight' => 'Better connection between servicing, parts and aftercare.',
                    'body'      => 'The contract helps keep maintenance, parts access and practical follow-up in the same support route.',
                    'icon'      => '<path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244"/>',
                ],
            ];
            @endphp
            <div class="lg:col-span-8 grid grid-cols-1 sm:grid-cols-3 gap-6 lg:gap-8">
                @foreach ($outcomeCards as $i => $card)
                <div class="text-center reveal" style="transition-delay:{{ ($i + 1) * 80 }}ms;">
                    <div class="w-16 h-16 lg:w-20 lg:h-20 rounded-full bg-white border border-border shadow-sm mx-auto mb-5 flex items-center justify-center">
                        <svg class="w-8 h-8 lg:w-10 lg:h-10 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6" aria-hidden="true">
                            {!! $card['icon'] !!}
                        </svg>
                    </div>
                    <p class="font-heading font-bold text-navy text-base lg:text-lg leading-snug mb-2">{{ $card['highlight'] }}</p>
                    <p class="font-body text-gray-500 text-xs lg:text-sm leading-snug">{{ $card['body'] }}</p>
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
        'answer' => 'Yes. A contract review can cover one site or multiple locations. The scope should be reviewed around the equipment base, site count and service requirements.',
    ],
    [
        'question' => 'What equipment is covered under a service contract?',
        'answer' => 'Coverage depends on the equipment installed, its condition, age, service history and the agreed contract scope. The review confirms what can be included.',
    ],
    [
        'question' => 'Are parts included in the contract?',
        'answer' => 'Parts are not automatically included unless stated in the agreed contract. Genuine parts access and aftercare can be connected to the contract, with quoted parts handled separately where required.',
    ],
    [
        'question' => 'What happens if a machine breaks down between planned visits?',
        'answer' => 'The issue can be triaged and directed to the appropriate call-out route. Contract customers may receive preferential labour rates where this applies.',
    ],
    [
        'question' => 'Can the contract be reviewed if our needs change?',
        'answer' => 'Yes. If equipment changes, site demand increases or maintenance needs shift, the contract scope can be reviewed.',
    ],
];
@endphp
<div class="reveal">
    @include('components.faq', ['faqs' => $faqs, 'heading' => 'Service Contract FAQs'])
</div>

@include('components.testimonials', ['light' => true])

<!-- INLINE CONTRACT REVIEW FORM -->
<section id="contract-review-form" class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="relative bg-navy rounded-3xl overflow-hidden reveal">
            <div class="grid grid-cols-1 lg:grid-cols-5">

                {{-- Left: heading + bullets + photo --}}
                <div class="relative lg:col-span-2 p-8 lg:p-12 flex flex-col gap-6 overflow-hidden">
                    <div>
                        <h2 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-5">
                            Request a <span class="text-orange">contract review</span>.
                        </h2>
                        <p class="font-body text-blue-200 text-base leading-relaxed mb-7">
                            Tell us about your site, equipment and service needs. Irish Laundry Systems will review the information and recommend the right contract scope.
                        </p>
                        <div class="flex flex-col gap-3">
                            @foreach ([
                                'No obligation',
                                'Expert advice',
                                'Focused on your operation',
                            ] as $point)
                            <div class="flex items-center gap-3 bg-white/10 rounded-xl px-5 py-3">
                                <svg class="w-4 h-4 text-orange flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.4" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                                </svg>
                                <div class="font-body text-white text-sm font-bold">{{ $point }}</div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Bottom photo block --}}
                    <div class="hidden lg:block relative rounded-2xl overflow-hidden mt-auto">
                        <div class="aspect-[16/9]">
                            <img src="/images/healthcare/service-contracts-hero.jpg"
                                 alt="ILS engineers reviewing service equipment"
                                 loading="lazy" decoding="async"
                                 class="w-full h-full object-cover object-[center_25%]">
                        </div>
                        <div class="absolute inset-0" style="background: linear-gradient(to top, rgba(1,30,65,0.55) 0%, transparent 60%);"></div>
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
                                <label for="cr_name" class="block text-xs font-body font-bold text-navy mb-1.5">Name <span class="text-red-500">*</span></label>
                                <input type="text" id="cr_name" name="name" required value="{{ old('name') }}"
                                       placeholder="Your full name"
                                       class="w-full border border-border rounded-lg px-4 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                            </div>
                            <div>
                                <label for="cr_company" class="block text-xs font-body font-bold text-navy mb-1.5">Company / Organisation <span class="text-red-500">*</span></label>
                                <input type="text" id="cr_company" name="company" required value="{{ old('company') }}"
                                       placeholder="Company or facility"
                                       class="w-full border border-border rounded-lg px-4 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="cr_email" class="block text-xs font-body font-bold text-navy mb-1.5">Email <span class="text-red-500">*</span></label>
                                <input type="email" id="cr_email" name="email" required value="{{ old('email') }}"
                                       placeholder="you@company.ie"
                                       class="w-full border border-border rounded-lg px-4 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                            </div>
                            <div>
                                <label for="cr_phone" class="block text-xs font-body font-bold text-navy mb-1.5">Phone <span class="text-red-500">*</span></label>
                                <input type="tel" id="cr_phone" name="phone" required value="{{ old('phone') }}"
                                       placeholder="+353 (0)..."
                                       class="w-full border border-border rounded-lg px-4 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="cr_location" class="block text-xs font-body font-bold text-navy mb-1.5">Site Location(s) <span class="text-red-500">*</span></label>
                                <input type="text" id="cr_location" name="location" required value="{{ old('location') }}"
                                       placeholder="e.g. Dublin, Cork"
                                       class="w-full border border-border rounded-lg px-4 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                            </div>
                            <div>
                                <label for="cr_sector" class="block text-xs font-body font-bold text-navy mb-1.5">Sector <span class="text-red-500">*</span></label>
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

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="cr_equipment" class="block text-xs font-body font-bold text-navy mb-1.5">Equipment Type &amp; Brand</label>
                                <input type="text" id="cr_equipment" name="equipment" value="{{ old('equipment') }}"
                                       placeholder="e.g. Electrolux WH6-18 washer"
                                       class="w-full border border-border rounded-lg px-4 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                            </div>
                            <div>
                                <label for="cr_machines" class="block text-xs font-body font-bold text-navy mb-1.5">Number of Machines</label>
                                <input type="text" id="cr_machines" name="machines_count" value="{{ old('machines_count') }}"
                                       placeholder="e.g. 4 washers + 2 dryers"
                                       class="w-full border border-border rounded-lg px-4 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-body font-bold text-navy mb-1.5">Timeline</label>
                            <div class="grid grid-cols-3 gap-2">
                                @foreach ([
                                    ['today', 'Urgent'],
                                    ['this_week', 'This week'],
                                    ['planning', 'Planning'],
                                ] as [$val, $label])
                                <label class="cursor-pointer">
                                    <input type="radio" name="urgency" value="{{ $val }}" class="sr-only peer" {{ old('urgency', 'planning') === $val ? 'checked' : '' }}>
                                    <div class="border-2 border-border rounded-lg px-3 py-2 text-center text-xs font-body font-bold text-gray-600 peer-checked:border-steel peer-checked:bg-steel peer-checked:text-white hover:border-steel transition-all">
                                        {{ $label }}
                                    </div>
                                </label>
                                @endforeach
                            </div>
                        </div>

                        <div>
                            <label for="cr_issue" class="block text-xs font-body font-bold text-navy mb-1.5">Current Issue / Requirement</label>
                            <input type="text" id="cr_issue" name="issue" value="{{ old('issue') }}"
                                   placeholder="What prompted this enquiry?"
                                   class="w-full border border-border rounded-lg px-4 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                        </div>

                        <div>
                            <label for="cr_message" class="block text-xs font-body font-bold text-navy mb-1.5">Message / Additional Details</label>
                            <textarea id="cr_message" name="message" rows="3"
                                      placeholder="Anything else we should know about your site or equipment."
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

<!-- CLOSING STRIP — PARTS & AFTERCARE -->
<section class="relative overflow-hidden reveal" style="background-color:#011E41; min-height:320px;">

    {{-- RIGHT: image pinned to 40% --}}
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/healthcare/repairs-callouts.jpg" alt="ILS engineer working near commercial laundry equipment with parts and service tools"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #011E41 0%, rgba(1,30,65,0.5) 35%, transparent 100%);"></div>
    </div>

    {{-- LEFT: content — 60% width --}}
    <div class="relative z-10 flex flex-col justify-center px-10 lg:px-16 py-12 lg:py-14" style="max-width:60%;">

        <p class="text-orange font-body font-bold text-xs uppercase tracking-widest mb-4">Support Route</p>

        <h2 class="font-heading font-bold leading-tight mb-4">
            <span class="text-white text-3xl lg:text-5xl block">Parts &amp;</span>
            <span class="text-3xl lg:text-5xl block" style="color:#22d3ee;">Aftercare</span>
        </h2>

        <p class="font-body text-white/80 text-base lg:text-lg leading-relaxed mb-6 max-w-xl">
            Genuine parts access, service history context and practical aftercare help keep maintenance decisions connected to the installed base.
        </p>

        <div class="flex items-center flex-nowrap gap-0 mb-7">
            @foreach([
                ['icon' => 'ativo-8', 'label' => 'Genuine parts access'],
                ['icon' => 'ativo-7', 'label' => 'Installed-base support'],
                ['icon' => 'ativo-4', 'label' => 'Practical aftercare'],
            ] as $i => $feat)
            @if($i > 0)
                <div class="w-px h-7 bg-white/20 mx-4 flex-shrink-0"></div>
            @endif
            <div class="flex items-center gap-2">
                <img src="/images/icons/brand-white/{{ $feat['icon'] }}.svg"
                     class="w-5 h-5 flex-shrink-0 opacity-80" alt="">
                <span class="font-body text-white text-xs font-bold whitespace-nowrap">{{ $feat['label'] }}</span>
            </div>
            @endforeach
        </div>

        <div class="flex flex-wrap items-center gap-3">
            <a href="{{ route('repairs') }}"
               class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
                Explore Parts &amp; Aftercare
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                </svg>
            </a>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 border border-white/40 text-white font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/10 transition-colors tracking-wide">
                Talk to an Engineer
            </a>
        </div>

    </div>

</section>

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
