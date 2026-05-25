@extends('layouts.app')

@section('pageTitle', $title ?? 'Parts & Aftercare | Irish Laundry Systems')
@section('metaDescription', $metaDescription ?? 'Genuine parts access, service history context and practical aftercare from Irish Laundry Systems.')

@section('content')

<style>
    /* Hero fade-up (matches service-contracts) */
    @keyframes pa_heroFadeUp {
        from { opacity: 0; transform: translateY(24px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    .pa-hero-title { animation: pa_heroFadeUp 0.7s ease forwards; }
    .pa-hero-desc  { animation: pa_heroFadeUp 0.7s ease 0.2s forwards; opacity: 0; }
    .pa-hero-btns  { animation: pa_heroFadeUp 0.7s ease 0.4s forwards; opacity: 0; }
    @media (prefers-reduced-motion: reduce) {
        .pa-hero-title, .pa-hero-desc, .pa-hero-btns { animation: none; opacity: 1; transform: none; }
    }

    /* Pulse halo on hero primary CTA */
    .pa-pulse-cta { position: relative; isolation: isolate; }
    .pa-pulse-cta::before {
        content: '';
        position: absolute; inset: -6px;
        border-radius: inherit;
        background: rgba(20, 138, 244, 0.45);
        z-index: -1;
        animation: pa_pulse 2.4s ease-out infinite;
    }
    @keyframes pa_pulse {
        0%   { transform: scale(0.96); opacity: 0.55; }
        70%  { transform: scale(1.08); opacity: 0;    }
        100% { transform: scale(1.08); opacity: 0;    }
    }
    @media (prefers-reduced-motion: reduce) {
        .pa-pulse-cta::before { animation: none; opacity: 0; }
    }

    /* Dot-grid pattern for navy panels */
    .pa-dotgrid {
        background-image: radial-gradient(rgba(255,255,255,0.06) 1px, transparent 1px);
        background-size: 22px 22px;
    }
</style>

{{-- ════════════════════════════════════════════════════════════════════════
     1. HEADER — provided by layouts/app.blade.php
     ════════════════════════════════════════════════════════════════════════ --}}

{{-- ════════════════════════════════════════════════════════════════════════
     2. HERO
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden" style="height: 720px; min-height: 560px; background-color: #011E41;">

    <img src="/images/healthcare/repairs-callouts.jpg"
         alt="ILS engineer reviewing commercial laundry equipment and identifying replacement parts"
         loading="eager" decoding="async"
         class="absolute inset-0 w-full h-full object-cover object-right">

    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.97) 0%, rgba(1,30,65,0.90) 25%, rgba(1,30,65,0.65) 45%, rgba(1,30,65,0.25) 65%, transparent 80%);"></div>

    <div class="relative z-10 h-full flex items-center w-full">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16">
            <div style="max-width: 620px;">

                <p class="pa-hero-desc font-body font-bold text-[#148af4] uppercase tracking-widest text-xs mb-5">Parts &amp; Aftercare</p>

                <h1 class="pa-hero-title font-heading font-bold text-white leading-[1.05] tracking-tight mb-6 text-4xl lg:text-5xl xl:text-6xl">
                    Parts &amp; aftercare that keep your <span class="text-[#148af4]">installed base</span> connected
                </h1>

                <p class="pa-hero-desc font-body text-blue-200 text-base lg:text-lg leading-relaxed mb-10 max-w-xl">
                    Genuine parts access, service history and practical aftercare support that keeps your equipment, your team and your next step connected.
                </p>

                <div class="pa-hero-btns flex flex-row gap-4">
                    <a href="#parts-form"
                       data-ga-cta="hero-request-parts-support"
                       class="pa-pulse-cta inline-flex items-center justify-center bg-[#148af4] hover:bg-[#0f70cc] text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 whitespace-nowrap">
                        Request Parts Support
                    </a>
                    <a href="tel:+353000000000"
                       data-ga-cta="hero-talk-to-engineer"
                       class="inline-flex items-center justify-center border border-white/50 hover:border-white text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 hover:bg-white/10 whitespace-nowrap">
                        Talk to an Engineer
                    </a>
                </div>

                <p class="pa-hero-btns font-body text-blue-200/80 text-xs mt-8">
                    Genuine parts access &nbsp;|&nbsp; Service history context &nbsp;|&nbsp; Practical aftercare
                </p>

            </div>
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     3. THIN ELECTROLUX TRUST STRIP
     ════════════════════════════════════════════════════════════════════════ --}}
@include('components.partner-strip')

{{-- ════════════════════════════════════════════════════════════════════════
     4. PROOF / LOGO STRIP
     ════════════════════════════════════════════════════════════════════════ --}}
<div class="reveal">
    @include('components.proof-bar')
</div>

{{-- ════════════════════════════════════════════════════════════════════════
     5. HOW AFTERCARE SUPPORT STARTS
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="bg-bg py-16 lg:py-20">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="max-w-3xl mb-12 reveal">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-4">
                How aftercare <span class="text-[#148af4]">support</span> starts
            </h2>
            <p class="font-body text-gray-600 leading-relaxed">
                A simple start that connects your installed base, parts and service history to the right next action.
            </p>
        </div>

        @php
        $aftercareStart = [
            ['title' => 'Installed base',    'text' => 'We review the equipment already on site.',
             'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15a1.5 1.5 0 0 1 1.5 1.5v15a1.5 1.5 0 0 1-1.5 1.5H4.5A1.5 1.5 0 0 1 3 19.5v-15A1.5 1.5 0 0 1 4.5 3Zm3 6h9m-9 3h9m-9 3h6"/>'],
            ['title' => 'Part identification','text' => 'We identify the right parts and requirements.',
             'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M10.5 18a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15Z"/>'],
            ['title' => 'Service history',   'text' => 'We connect records, faults and visits.',
             'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>'],
            ['title' => 'Next action',       'text' => 'We agree the most practical next step.',
             'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>'],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-10">
            @foreach ($aftercareStart as $i => $step)
            <div class="reveal" style="transition-delay:{{ $i * 90 }}ms;">
                <div class="flex items-center gap-2 mb-4">
                    <span class="font-heading font-bold text-[#148af4] text-xs tracking-widest">STEP 0{{ $i + 1 }}</span>
                </div>
                <svg class="w-8 h-8 text-[#148af4] mb-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    {!! $step['icon'] !!}
                </svg>
                <h3 class="font-heading font-bold text-navy text-base lg:text-lg mb-2">{{ $step['title'] }}</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">{{ $step['text'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     6. FOUR CORE PARTS & AFTERCARE CARDS  (exactly 4 — do not add a 5th)
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="max-w-3xl mb-12 lg:mb-16 reveal">
            <p class="font-body font-bold text-[#148af4] uppercase tracking-widest text-xs mb-4">Parts &amp; Aftercare Support</p>
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-5">
                Four ways Parts &amp; Aftercare keeps equipment support connected
            </h2>
            <p class="font-body text-gray-600 leading-relaxed">
                Parts support works best when the part, the equipment, the service history and the next support route stay connected.
            </p>
        </div>

        @php
        $coreCards = [
            [
                'title'   => 'Genuine parts access',
                'body'    => 'Access to the right parts for your equipment, with support from our engineering route.',
                'bullets' => ['Authorised parts supply', 'Quality and compatibility', 'Availability checked before next step'],
                'cta'     => 'Request parts support',
                'icon'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z"/>',
            ],
            [
                'title'   => 'Parts identification',
                'body'    => 'The right part depends on the right details.',
                'bullets' => ['Model, serial and machine type', 'Clear part matching', 'Notes on previous faults'],
                'cta'     => 'Find the right part',
                'icon'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M10.5 18a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15Zm-2.25-7.5h4.5m-2.25-2.25v4.5"/>',
            ],
            [
                'title'   => 'Service history context',
                'body'    => 'History gives clarity and saves time.',
                'bullets' => ['Previous service records', 'Faults and interventions', 'Planned maintenance context'],
                'cta'     => 'Review service history',
                'icon'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Zm.75 10.5 1.5 1.5 3-3"/>',
            ],
            [
                'title'   => 'Practical aftercare',
                'body'    => 'Support that keeps your operation moving.',
                'bullets' => ['Repairs and scheduled visits', 'Advice and follow-up', 'Support that stays connected'],
                'cta'     => 'Explore aftercare options',
                'icon'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z"/>',
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($coreCards as $i => $card)
            <div class="reveal bg-white border border-border rounded-2xl p-7 lg:p-8 shadow-card flex flex-col"
                 style="transition-delay:{{ $i * 80 }}ms;">
                <div class="w-12 h-12 rounded-xl bg-[#148af4]/10 flex items-center justify-center mb-5">
                    <svg class="w-6 h-6 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        {!! $card['icon'] !!}
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-lg lg:text-xl mb-3">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed mb-5">{{ $card['body'] }}</p>
                <ul class="space-y-2 mb-6">
                    @foreach ($card['bullets'] as $b)
                    <li class="flex items-start gap-2 font-body text-gray-700 text-sm leading-snug">
                        <svg class="w-4 h-4 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/>
                        </svg>
                        <span>{{ $b }}</span>
                    </li>
                    @endforeach
                </ul>
                <a href="#parts-form" class="mt-auto inline-flex items-center gap-2 font-body font-bold text-[#148af4] hover:text-[#0f70cc] text-sm transition-colors">
                    {{ $card['cta'] }}
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
                    </svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     7. SAFE AUTHORITY BAR  (navy + dotgrid — NOT the white 37+/4/26/1987 stats)
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="relative bg-navy pa-dotgrid py-8 lg:py-10 overflow-hidden">
    <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>
    <div class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>
    <div class="relative max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        @php
        $authorityItems = [
            ['label' => 'Since 1987',           'text' => 'Commercial laundry engineering support across Ireland.'],
            ['label' => 'Ireland coverage',     'text' => 'Support for sites across the Republic of Ireland.'],
            ['label' => 'Authorised partner',   'text' => 'Electrolux Professional equipment and parts support where applicable.'],
            ['label' => 'Installed base support','text' => 'Parts and aftercare support for contract and non-contract sites.', 'accent' => true],
        ];
        @endphp
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-6">
            @foreach ($authorityItems as $i => $item)
            <div class="relative reveal text-center lg:text-left" style="transition-delay:{{ $i * 90 }}ms;">
                @if ($i > 0)
                <div class="hidden lg:block absolute left-0 top-1 bottom-1 w-px bg-white/10" aria-hidden="true"></div>
                @endif
                <div class="lg:pl-6">
                    <div class="font-heading font-bold {{ !empty($item['accent']) ? 'text-[#148af4]' : 'text-orange' }} text-sm lg:text-base mb-1.5 uppercase tracking-wider leading-tight">{{ $item['label'] }}</div>
                    <div class="font-body text-blue-200 text-xs lg:text-sm leading-snug">{{ $item['text'] }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     8. EDITORIAL BRIDGE  (60/40 with image right)
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden bg-white">
    <div class="max-w-screen-2xl mx-auto relative" style="min-height: 460px;">

        {{-- Right image (40%) — desktop only --}}
        <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
            <img src="/images/about/about-engineers.jpg"
                 alt="ILS team reviewing equipment records and parts identification details"
                 class="w-full h-full object-cover">
            <div class="absolute inset-0" style="background: linear-gradient(to right, #ffffff 0%, rgba(255,255,255,0.75) 6%, rgba(255,255,255,0.35) 14%, transparent 35%);"></div>
        </div>

        {{-- Left content (60%) --}}
        <div class="relative z-10 px-6 sm:px-10 lg:px-20 py-16 lg:py-20 lg:max-w-[60%]">
            <p class="font-body font-bold text-[#148af4] uppercase tracking-widest text-xs mb-4 reveal">Beyond the Part</p>
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl xl:text-5xl leading-tight mb-6 reveal">
                More than a part. <span class="text-[#148af4]">The right outcome</span>
            </h2>
            <div class="space-y-4 max-w-xl reveal">
                <p class="font-body text-gray-600 leading-relaxed">
                    The right part depends on machine type, model, serial number, service history, previous faults and equipment condition. That context helps us make the right call first time.
                </p>
                <p class="font-body text-gray-600 leading-relaxed">
                    When we have the right information, we can identify the right part quickly, plan the right support and help you avoid unnecessary downtime.
                </p>
            </div>
            <div class="mt-8 reveal">
                <a href="#parts-form" class="inline-flex items-center gap-2 bg-navy hover:bg-navy-light text-white font-body font-bold px-6 py-3 rounded-md text-sm transition-colors duration-200">
                    Talk to our team
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     9. BLUE CONTEXT STRIP  (premium navy gradient — not flat)
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden py-16 lg:py-20"
         style="background: radial-gradient(circle at 20% 30%, rgba(20,138,244,0.28) 0%, transparent 55%), linear-gradient(135deg, #011E41 0%, #02244d 100%);">
    <div class="absolute inset-0 pa-dotgrid opacity-60"></div>
    <div class="relative max-w-4xl mx-auto px-6 sm:px-10 text-center">
        <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl leading-tight mb-5 reveal">
            Parts support starts with the <span class="text-[#148af4]">right equipment context</span>
        </h2>
        <p class="font-body text-blue-200 text-base lg:text-lg leading-relaxed max-w-2xl mx-auto reveal">
            The more accurate the information we have, the faster and more confidently we can identify the right part and the right solution.
        </p>
        <div class="mt-8 flex flex-wrap items-center justify-center gap-x-4 gap-y-2 font-body text-blue-200/90 text-xs lg:text-sm reveal">
            <span>Machine type and model</span>
            <span class="text-white/30">|</span>
            <span>Serial number and build</span>
            <span class="text-white/30">|</span>
            <span>Site and location details</span>
            <span class="text-white/30">|</span>
            <span>Usage and operating needs</span>
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     10 + 11. CHECKLIST + DAY-TO-DAY PROCESS  (side-by-side on lg)
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-14">

            {{-- 10. CHECKLIST CARD --}}
            <div class="reveal bg-bg rounded-2xl p-8 lg:p-10">
                <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl leading-tight mb-3">
                    What helps us identify the <span class="text-[#148af4]">right part</span>
                </h2>
                <p class="font-body text-gray-600 text-sm leading-relaxed mb-7">
                    Please share the following details so we can identify the right part and solution.
                </p>
                @php
                $checklistItems = [
                    ['label' => 'Machine type',          'sub' => 'Washer, dryer, ironer',           'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M6.75 7.5h10.5M6.75 7.5a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm0 0v9a2.25 2.25 0 1 1-4.5 0v-9m15 9V7.5m0 9a2.25 2.25 0 1 0 4.5 0 2.25 2.25 0 0 0-4.5 0Zm0-9a2.25 2.25 0 1 1 4.5 0 2.25 2.25 0 0 1-4.5 0Z"/>'],
                    ['label' => 'Brand',                 'sub' => 'Electrolux, Miele, other',        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z"/>'],
                    ['label' => 'Model',                 'sub' => 'Number or product name',          'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z"/>'],
                    ['label' => 'Serial number',         'sub' => 'From the rating plate',           'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z"/>'],
                    ['label' => 'Photos if available',   'sub' => 'Of part or rating plate',         'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"/>'],
                    ['label' => 'Fault or part required','sub' => 'Short description',              'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z"/>'],
                    ['label' => 'Site location',         'sub' => 'Address or county',               'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/>'],
                    ['label' => 'Urgency',               'sub' => 'Today, this week, planning',      'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>'],
                ];
                @endphp
                <div class="grid grid-cols-2 gap-x-5 gap-y-5">
                    @foreach ($checklistItems as $item)
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            {!! $item['icon'] !!}
                        </svg>
                        <div>
                            <div class="font-heading font-bold text-navy text-sm leading-tight">{{ $item['label'] }}</div>
                            <p class="font-body text-gray-500 text-xs leading-snug">{{ $item['sub'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <p class="font-body text-gray-500 text-xs italic mt-7">
                    The more detail you can provide, the faster and more accurate we can be.
                </p>
            </div>

            {{-- 11. DAY-TO-DAY PROCESS CARD --}}
            <div class="reveal bg-navy rounded-2xl p-8 lg:p-10 relative overflow-hidden">
                <div class="absolute inset-0 pa-dotgrid opacity-50"></div>
                <div class="relative">
                    <h2 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-tight mb-3">
                        How parts &amp; aftercare works <span class="text-[#148af4]">day-to-day</span>
                    </h2>
                    <p class="font-body text-blue-200 text-sm leading-relaxed mb-8">
                        A clear process to get the right part to the right place, faster.
                    </p>
                    @php
                    $dayToDay = [
                        ['title' => 'Identify the installed base',           'text' => 'We confirm the equipment and review its current status and context.'],
                        ['title' => 'Match parts and history',               'text' => 'We check the right parts and relevant service history.'],
                        ['title' => 'Confirm supply, quote or engineer route','text' => 'We agree the best solution for your site, including availability and next steps.'],
                        ['title' => 'Keep the next step connected',          'text' => 'We follow through to keep your operation moving.'],
                    ];
                    @endphp
                    <div class="space-y-5">
                        @foreach ($dayToDay as $i => $step)
                        <div class="flex items-start gap-4">
                            <span class="font-heading font-bold text-[#148af4] text-2xl leading-none flex-shrink-0 w-10">0{{ $i + 1 }}</span>
                            <div class="border-l border-white/10 pl-4 flex-1">
                                <div class="font-heading font-bold text-white text-sm lg:text-base leading-snug mb-1">{{ $step['title'] }}</div>
                                <p class="font-body text-blue-200 text-xs lg:text-sm leading-relaxed">{{ $step['text'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     12. MINI SUPPORT CTA STRIP  (low-height, discreet)
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="bg-bg border-y border-border/40 py-8 lg:py-10">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5">
            <div>
                <h3 class="font-heading font-bold text-navy text-xl lg:text-2xl leading-tight mb-1">
                    Not sure what <span class="text-[#148af4]">part</span> you need?
                </h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">
                    Our team is here to help you identify the right part and plan the right solution.
                </p>
            </div>
            <div class="flex flex-wrap items-center gap-3 flex-shrink-0">
                <a href="#parts-form"
                   data-ga-cta="mini-request-parts"
                   class="inline-flex items-center justify-center bg-navy hover:bg-navy-light text-white font-body font-bold px-5 py-3 rounded-md text-sm transition-colors duration-200">
                    Request parts &amp; aftercare support
                </a>
                <a href="tel:+353000000000"
                   class="inline-flex items-center justify-center border border-navy/40 hover:border-navy text-navy font-body font-bold px-5 py-3 rounded-md text-sm transition-colors duration-200">
                    Talk to our team
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     13. AUTHORISED PARTNER / CONNECTED AFTERCARE
          (no "24/7" / "guaranteed" / "reliable" wording)
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 lg:gap-14 items-center">

            <div class="lg:col-span-3">
                <p class="font-body font-bold text-[#148af4] uppercase tracking-widest text-xs mb-4 reveal">Installed Base Support</p>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl xl:text-5xl leading-tight mb-5 reveal">
                    Authorised partner. <span class="text-[#148af4]">Connected aftercare</span>
                </h2>
                <p class="font-body text-gray-600 leading-relaxed mb-7 max-w-xl reveal">
                    As an Authorised Electrolux Professional Partner, we give you the parts, service history and technical information that help keep your equipment performing.
                </p>
                <ul class="space-y-3 mb-8 reveal">
                    @foreach ([
                        'Genuine Electrolux Professional parts access',
                        'Service history context',
                        'Technical documentation and service records',
                        'Parts support for contract and non-contract customers',
                    ] as $b)
                    <li class="flex items-start gap-3 font-body text-navy text-sm">
                        <svg class="w-5 h-5 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/>
                        </svg>
                        <span>{{ $b }}</span>
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('electrolux') }}" class="reveal inline-flex items-center gap-2 bg-navy hover:bg-navy-light text-white font-body font-bold px-6 py-3 rounded-md text-sm transition-colors duration-200">
                    About our partnership
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
                    </svg>
                </a>
            </div>

            <div class="lg:col-span-2">
                <div class="reveal bg-navy rounded-2xl p-8 lg:p-10 relative overflow-hidden">
                    <div class="absolute inset-0 pa-dotgrid opacity-50"></div>
                    <div class="relative">
                        <div class="flex items-center justify-center bg-white rounded-lg px-4 py-3 mb-6">
                            <span class="font-heading font-bold text-navy text-base lg:text-lg tracking-tight">Electrolux Professional</span>
                        </div>
                        <p class="font-heading font-bold text-white text-lg lg:text-xl mb-3 leading-tight">Authorised Partner</p>
                        <p class="font-body text-blue-200 text-sm leading-relaxed">
                            Irish Laundry Systems is an Authorised Electrolux Professional Partner, providing parts and aftercare support across the installed base.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     14. COMPACT DAY-TO-DAY VALUE STRIP
          (single-row low-height, replaces large Outcome Proof cards)
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="bg-bg border-y border-border/40 py-6 lg:py-7">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="flex flex-col sm:flex-row sm:items-center gap-5 sm:gap-0 sm:divide-x sm:divide-border/60">

            {{-- Left: value-marker icon + headline + body --}}
            <div class="flex items-start gap-3 sm:pr-8 lg:pr-10 flex-shrink-0">
                <svg class="w-6 h-6 text-[#148af4] flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z"/>
                </svg>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base lg:text-lg leading-tight mb-1">
                        What parts &amp; aftercare changes <span class="text-[#148af4]">day-to-day</span>
                    </h3>
                    <p class="font-body text-gray-600 text-xs lg:text-sm leading-snug">
                        The right information helps Irish Laundry Systems connect the part, service history and next support route before the issue becomes more time-consuming.
                    </p>
                </div>
            </div>

            {{-- Right: 3 inline mini-points --}}
            <div class="flex flex-col sm:flex-row sm:items-center sm:divide-x sm:divide-border/60 flex-1">
                <div class="flex items-center gap-2 sm:px-6 lg:px-8 py-2 sm:py-0">
                    <svg class="w-4 h-4 text-[#148af4] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                    </svg>
                    <span class="font-body text-navy text-xs lg:text-sm">Clearer next step</span>
                </div>
                <div class="flex items-center gap-2 sm:px-6 lg:px-8 py-2 sm:py-0">
                    <svg class="w-4 h-4 text-[#148af4] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m6 4.5h-3M8.25 21h7.5A2.25 2.25 0 0 0 18 18.75V9.75A2.25 2.25 0 0 0 15.75 7.5h-7.5A2.25 2.25 0 0 0 6 9.75v9A2.25 2.25 0 0 0 8.25 21Z"/>
                    </svg>
                    <span class="font-body text-navy text-xs lg:text-sm">Better service context</span>
                </div>
                <div class="flex items-center gap-2 sm:px-6 lg:px-8 py-2 sm:py-0">
                    <svg class="w-4 h-4 text-[#148af4] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9"/>
                    </svg>
                    <span class="font-body text-navy text-xs lg:text-sm">Parts route connected</span>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     15. FAQ  (uses components.faq — heading prop carries the accent span)
     ════════════════════════════════════════════════════════════════════════ --}}
@php
$partsFaqs = [
    [
        'question' => 'What information do I need to request a part?',
        'answer'   => 'Machine type, brand, model, serial number, site location, a short description of the fault or part required, and photos if available.',
    ],
    [
        'question' => 'Can you help me identify the right part?',
        'answer'   => 'Yes. We can use equipment details, photos, previous service records and fault information to help identify the right support route.',
    ],
    [
        'question' => 'Do you support equipment not originally supplied by Irish Laundry Systems?',
        'answer'   => 'Irish Laundry Systems has historically repaired and maintained other makes of industrial laundry equipment. For parts and aftercare, the team will review the equipment details before confirming the best route.',
    ],
    [
        'question' => 'Are spare parts included in a repair or call-out?',
        'answer'   => 'Not automatically. Parts, labour and call-out scope depend on the issue, approval and the support route agreed for the site.',
    ],
    [
        'question' => 'Are parts included in a Service Contract?',
        'answer'   => 'Parts inclusion depends on the contract scope. Service Contracts can help with service history, planned support and preferential routing where applicable, but parts should be confirmed case by case.',
    ],
    [
        'question' => 'Can I send photos to help identify the part?',
        'answer'   => 'Yes. Photos of the machine, data plate, damaged part, display message or fault area can help the team identify the right part or next step.',
    ],
    [
        'question' => 'When is an engineer visit required?',
        'answer'   => 'If the issue cannot be resolved through parts identification, photos, service history or remote guidance, Irish Laundry Systems can route the enquiry toward an engineer visit or service assessment.',
    ],
];
@endphp
@include('components.faq', [
    'faqs' => $partsFaqs,
    'heading' => 'Answers to common questions about <span class="text-[#148af4]">parts and aftercare</span>',
])

{{-- ════════════════════════════════════════════════════════════════════════
     16. REQUEST PARTS & AFTERCARE SUPPORT FORM
     ════════════════════════════════════════════════════════════════════════ --}}
<section id="parts-form" class="bg-bg py-16 lg:py-24">
    <div class="max-w-4xl mx-auto px-6 sm:px-10">

        <div class="max-w-3xl mx-auto text-center mb-10 lg:mb-12">
            <p class="font-body font-bold text-[#148af4] uppercase tracking-widest text-xs mb-4">Request Parts &amp; Aftercare Support</p>
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-4">
                Tell us about your <span class="text-[#148af4]">equipment</span> and what you need
            </h2>
            <p class="font-body text-gray-600 leading-relaxed">
                Share the details that help us identify the right part, service history or support route.
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow-card p-8 lg:p-10">

            @if (session('success'))
            <div class="bg-green-50 border border-green-200 rounded-xl p-5 mb-6">
                <div class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-green-600 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <div>
                        <p class="font-heading font-bold text-green-700 text-sm mb-1">Request received</p>
                        <p class="font-body text-gray-700 text-sm leading-relaxed">
                            {{ session('success') }}
                            If you have a photo of the part or rating plate, reply to our email with it attached so we can confirm the exact spare.
                        </p>
                    </div>
                </div>
            </div>
            @endif

            @if ($errors->any())
            <div class="bg-red-50 border border-red-200 rounded-xl p-4 mb-6">
                <ul class="space-y-1">
                    @foreach ($errors->all() as $error)
                    <li class="font-body text-red-600 text-sm flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-red-500 flex-shrink-0"></span>{{ $error }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif

            <p class="font-body text-gray-500 text-xs leading-relaxed mb-6">
                Have a photo of the part or rating plate? Once we reply, send it as an email attachment — it helps us identify the exact spare faster.
            </p>

            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-5" data-utm>
                @csrf
                <input type="hidden" name="request_type" value="parts">
                <input type="hidden" name="utm_source">
                <input type="hidden" name="utm_medium">
                <input type="hidden" name="utm_campaign">
                <input type="hidden" name="utm_content">
                <input type="hidden" name="utm_term">
                <input type="hidden" name="page_source">

                {{-- Name + Organisation --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Name <span class="text-red-400">*</span></label>
                        <input type="text" name="name" required value="{{ old('name') }}" placeholder="Your name"
                               class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 placeholder-gray-400 transition-all">
                    </div>
                    <div>
                        <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Organisation <span class="text-red-400">*</span></label>
                        <input type="text" name="company" required value="{{ old('company') }}" placeholder="Organisation name"
                               class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 placeholder-gray-400 transition-all">
                    </div>
                </div>

                {{-- Email + Phone --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Email <span class="text-red-400">*</span></label>
                        <input type="email" name="email" required value="{{ old('email') }}" placeholder="you@company.ie"
                               class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 placeholder-gray-400 transition-all">
                    </div>
                    <div>
                        <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Phone <span class="text-red-400">*</span></label>
                        <input type="tel" name="phone" required value="{{ old('phone') }}" placeholder="+353 (0)..."
                               class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 placeholder-gray-400 transition-all">
                    </div>
                </div>

                {{-- Site location + Sector --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Site location <span class="text-red-400">*</span></label>
                        <input type="text" name="location" required value="{{ old('location') }}" placeholder="e.g. Dublin, Cork..."
                               class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 placeholder-gray-400 transition-all">
                    </div>
                    <div>
                        <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Sector <span class="text-red-400">*</span></label>
                        <select name="sector" required
                                class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 cursor-pointer transition-all">
                            <option value="">Select sector</option>
                            <option value="healthcare"  {{ old('sector') === 'healthcare'  ? 'selected' : '' }}>Healthcare</option>
                            <option value="hospitality" {{ old('sector') === 'hospitality' ? 'selected' : '' }}>Hospitality</option>
                            <option value="care"        {{ old('sector') === 'care'        ? 'selected' : '' }}>Care Facilities</option>
                            <option value="commercial"  {{ old('sector') === 'commercial'  ? 'selected' : '' }}>Commercial &amp; Industrial</option>
                        </select>
                    </div>
                </div>

                {{-- Equipment brand + Machine type --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Equipment brand</label>
                        <input type="text" name="equipment_brand" value="{{ old('equipment_brand') }}" placeholder="Electrolux, Miele, other..."
                               class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 placeholder-gray-400 transition-all">
                    </div>
                    <div>
                        <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Machine type</label>
                        <input type="text" name="machine_type" value="{{ old('machine_type') }}" placeholder="Washer, dryer, ironer..."
                               class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 placeholder-gray-400 transition-all">
                    </div>
                </div>

                {{-- Model + Serial --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Model</label>
                        <input type="text" name="model_number" value="{{ old('model_number') }}" placeholder="Model number or name"
                               class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 placeholder-gray-400 transition-all">
                    </div>
                    <div>
                        <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Serial number</label>
                        <input type="text" name="serial_number" value="{{ old('serial_number') }}" placeholder="From the rating plate"
                               class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 placeholder-gray-400 transition-all">
                    </div>
                </div>

                {{-- Part required (full width) --}}
                <div>
                    <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Part required / issue</label>
                    <input type="text" name="part_required" value="{{ old('part_required') }}" placeholder="Short description of the part you need or the fault"
                           class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 placeholder-gray-400 transition-all">
                </div>

                {{-- Urgency --}}
                <div>
                    <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Urgency <span class="text-red-400">*</span></label>
                    <select name="urgency" required
                            class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 cursor-pointer transition-all">
                        <option value="">How soon do you need this?</option>
                        <option value="today"      {{ old('urgency') === 'today'      ? 'selected' : '' }}>Today — equipment down</option>
                        <option value="24_48h"     {{ old('urgency') === '24_48h'     ? 'selected' : '' }}>Within 24–48 hours</option>
                        <option value="this_week"  {{ old('urgency') === 'this_week'  ? 'selected' : '' }}>This week</option>
                        <option value="planning"   {{ old('urgency') === 'planning'   ? 'selected' : '' }}>Planning ahead</option>
                    </select>
                </div>

                {{-- Additional message --}}
                <div>
                    <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Additional message</label>
                    <textarea name="message" rows="4" placeholder="Anything else that would help us identify the right part or support route."
                              class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 placeholder-gray-400 resize-none leading-relaxed transition-all">{{ old('message') }}</textarea>
                </div>

                {{-- Privacy microcopy + GDPR --}}
                <p class="font-body text-gray-500 text-xs leading-relaxed">
                    Your details are used only to process your request and provide support.
                </p>

                <div class="space-y-2">
                    <label class="flex items-start gap-3 cursor-pointer">
                        <input type="checkbox" name="gdpr_consent" required value="1" {{ old('gdpr_consent') ? 'checked' : '' }}
                               class="mt-0.5 w-4 h-4 rounded border-gray-300 text-navy focus:ring-navy/30 flex-shrink-0 cursor-pointer">
                        <span class="font-body text-xs text-gray-500 leading-relaxed">
                            I agree to ILS processing my details to respond to this enquiry. <span class="text-red-400">*</span>
                            <a href="{{ route('privacy') }}" class="underline hover:text-navy transition-colors" target="_blank">Privacy Policy</a>.
                        </span>
                    </label>
                    <label class="flex items-start gap-3 cursor-pointer">
                        <input type="checkbox" name="marketing_consent" value="1" {{ old('marketing_consent') ? 'checked' : '' }}
                               class="mt-0.5 w-4 h-4 rounded border-gray-300 text-navy focus:ring-navy/30 flex-shrink-0 cursor-pointer">
                        <span class="font-body text-xs text-gray-400 leading-relaxed">
                            I'm happy to receive occasional updates from ILS. (Optional)
                        </span>
                    </label>
                </div>

                {{-- Submit --}}
                <div class="pt-2">
                    <button type="submit"
                            data-ga-cta="form-send-parts-request"
                            class="inline-flex items-center justify-center bg-[#148af4] hover:bg-[#0f70cc] text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 w-full sm:w-auto">
                        Send Request
                        <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
                        </svg>
                    </button>
                </div>

            </form>
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     17. FINAL SUPPORT STRIP  (navy gradient + technical image right)
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden" style="min-height: 360px; background: linear-gradient(135deg, #011E41 0%, #02265a 60%, #04317a 100%);">

    {{-- Right image (42%) — desktop only --}}
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:42%;">
        <img src="/images/healthcare/repairs-hero.jpg"
             alt="ILS engineer reviewing equipment and parts options on site"
             class="w-full h-full object-cover"
             style="filter: saturate(0.85) contrast(1.05);">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #011E41 0%, rgba(1,30,65,0.7) 25%, rgba(1,30,65,0.35) 55%, transparent 100%);"></div>
    </div>

    <div class="absolute inset-0 pa-dotgrid opacity-40 pointer-events-none"></div>

    <div class="relative max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 lg:py-20">
        <div class="lg:max-w-[55%]">
            <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl xl:text-5xl leading-tight mb-5 reveal">
                Need the right <span class="text-[#148af4]">parts</span> and <span class="text-[#148af4]">support route</span> for your site?
            </h2>
            <p class="font-body text-blue-200 text-base lg:text-lg leading-relaxed mb-8 max-w-2xl reveal">
                Speak with an engineer about parts access, installed equipment, parts continuity and the best next step for your site.
            </p>
            <div class="flex flex-wrap items-center gap-4 reveal">
                <a href="#parts-form"
                   data-ga-cta="final-request-parts-support"
                   class="inline-flex items-center justify-center bg-[#148af4] hover:bg-[#0f70cc] text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 whitespace-nowrap">
                    Request Parts Support
                </a>
                <a href="tel:+353000000000"
                   data-ga-cta="final-talk-to-engineer"
                   class="inline-flex items-center justify-center border border-white/50 hover:border-white text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 hover:bg-white/10 whitespace-nowrap">
                    Talk to an Engineer
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Off-white breathing space before footer (40–64px) --}}
<div class="h-12 lg:h-16 bg-bg"></div>

{{-- ════════════════════════════════════════════════════════════════════════
     18. FOOTER — provided by layouts/app.blade.php
     ════════════════════════════════════════════════════════════════════════ --}}

@endsection
