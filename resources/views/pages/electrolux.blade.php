@extends('layouts.app')

@section('pageTitle', $title ?? 'Electrolux Professional Partner Ireland | Irish Laundry Systems')
@section('metaDescription', $metaDescription ?? 'Irish Laundry Systems is an Authorised Electrolux Professional Partner, bringing Electrolux Professional laundry equipment, Irish engineering support, genuine parts access and aftercare to commercial laundry sites across Ireland.')

@section('content')

<style>
    /* Hero fade-up */
    @keyframes ep_heroFadeUp {
        from { opacity: 0; transform: translateY(24px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    .ep-hero-title { animation: ep_heroFadeUp 0.7s ease forwards; }
    .ep-hero-desc  { animation: ep_heroFadeUp 0.7s ease 0.2s forwards; opacity: 0; }
    .ep-hero-btns  { animation: ep_heroFadeUp 0.7s ease 0.4s forwards; opacity: 0; }
    @media (prefers-reduced-motion: reduce) {
        .ep-hero-title, .ep-hero-desc, .ep-hero-btns { animation: none; opacity: 1; transform: none; }
    }

    /* Dot-grid pattern for navy panels */
    .ep-dotgrid {
        background-image: radial-gradient(rgba(255,255,255,0.06) 1px, transparent 1px);
        background-size: 22px 22px;
    }

    /* Card lift on hover — reveal-compatible: keeps the .65s opacity fade while
       using a .3s transform for both entrance and hover. The .is-visible:hover
       selector beats .reveal.is-visible{transform:none} via higher specificity. */
    .ep-lift {
        transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease, opacity .65s ease;
    }
    .ep-lift:hover,
    .ep-lift.is-visible:hover {
        transform: translateY(-6px);
        box-shadow: 0 18px 40px rgba(1, 30, 65, 0.13);
        border-color: rgba(20, 138, 244, 0.35);
    }
    @media (prefers-reduced-motion: reduce) {
        .ep-lift:hover, .ep-lift.is-visible:hover { transform: none; box-shadow: none; }
    }
</style>

{{-- ════════════════════════════════════════════════════════════════════════
     1. HERO
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden h-auto min-h-[520px] lg:h-[680px]" style="background-color: #011E41;">

    <img src="/images/shared/line-6000-solutions.jpg"
         alt="Electrolux Professional commercial laundry equipment supported by Irish Laundry Systems"
         loading="eager" decoding="async"
         class="absolute inset-0 w-full h-full object-cover object-right">

    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.97) 0%, rgba(1,30,65,0.90) 25%, rgba(1,30,65,0.65) 45%, rgba(1,30,65,0.25) 65%, transparent 80%);"></div>

    <div class="relative z-10 h-full flex items-center w-full py-16 lg:py-0">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16">
            <div class="max-w-full lg:max-w-[920px]">

                <p class="ep-hero-desc font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-5" style="opacity:1;">Authorised Electrolux Professional Partner</p>

                <h1 class="ep-hero-title font-heading font-bold text-white leading-tight tracking-tight mb-6 text-3xl sm:text-4xl lg:text-[44px] text-balance">
                    Electrolux Professional strength, delivered with <span class="text-[#148af4]">Irish engineering&nbsp;support</span>
                </h1>

                <p class="ep-hero-desc font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl text-pretty">
                    <span class="whitespace-nowrap">Irish Laundry Systems</span> helps businesses choose, install, maintain and support Electrolux Professional commercial laundry equipment with confidence. Built on more than 30 years of Electrolux Professional equipment and service experience, our partnership gives customers access to a major professional laundry range, genuine parts support and local engineers who know the equipment.
                </p>

                <div class="ep-hero-btns flex flex-row flex-wrap gap-4">
                    <a href="#electrolux-form"
                       data-ga-cta="hero-talk-engineer"
                       class="inline-flex items-center justify-center bg-[#148af4] hover:bg-[#0f70cc] text-white font-body font-bold px-7 py-4 rounded-md text-base transition-all duration-200 hover:-translate-y-0.5 hover:shadow-lg hover:shadow-[#148af4]/40 whitespace-nowrap">
                        Talk to an Engineer
                    </a>
                    <a href="{{ route('equipment') }}"
                       data-ga-cta="hero-explore-equipment"
                       class="inline-flex items-center justify-center border border-white/50 hover:border-white text-white font-body font-bold px-7 py-4 rounded-md text-base transition-all duration-200 hover:bg-white/10 hover:-translate-y-0.5 whitespace-nowrap">
                        Explore Equipment
                    </a>
                </div>

                {{-- Trust indicators --}}
                <div class="ep-hero-btns mt-8 flex flex-wrap items-center gap-x-5 gap-y-2 font-body text-white/70 text-xs">
                    <span class="whitespace-nowrap">Authorised Electrolux Professional Partner</span>
                    <span class="w-px h-3 bg-white/25 hidden sm:block" aria-hidden="true"></span>
                    <span class="whitespace-nowrap">Irish engineering expertise since 1987</span>
                    <span class="w-px h-3 bg-white/25 hidden sm:block" aria-hidden="true"></span>
                    <span class="whitespace-nowrap">100+ clients supported</span>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     2. THIN ELECTROLUX TRUST STRIP
     ════════════════════════════════════════════════════════════════════════ --}}
@include('components.partner-strip')

{{-- ════════════════════════════════════════════════════════════════════════
     3. WHY THE PARTNERSHIP MATTERS — 4 cards
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="bg-bg py-16 lg:py-24">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-12 lg:mb-14 reveal max-w-4xl">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Why the Partnership Matters</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight mb-5 text-balance">
                More than a badge. A stronger way to <span class="text-[#148af4]">protect your laundry&nbsp;operation</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed text-pretty max-w-3xl">
                The right equipment partner affects more than the purchase. It can shape running costs, downtime risk, repair confidence and the quality of support available after installation. Irish Laundry Systems works with Electrolux Professional so customers can make commercial laundry decisions with a stronger range, clearer advice and local engineering support behind them.
            </p>
        </div>

        @php
        $whyCards = [
            [
                'title' => 'Equipment choice',
                'body'  => 'Access the right range of professional laundry equipment, matched to the room, workload and budget.',
                'icon'  => '<rect x="4.5" y="3" width="15" height="18" rx="2"/><circle cx="12" cy="13" r="4.25"/><path stroke-linecap="round" d="M7 6.5h3"/>',
            ],
            [
                'title' => 'Brand confidence',
                'body'  => 'Backed by Electrolux Professional quality, engineered for demanding commercial use.',
                'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z"/>',
            ],
            [
                'title' => 'Parts support',
                'body'  => 'Genuine parts, available locally to keep equipment performing at its best.',
                'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.24-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>',
            ],
            [
                'title' => 'Local service',
                'body'  => 'Irish engineering expertise providing fast, reliable support across Ireland.',
                'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/>',
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 lg:grid-cols-4 lg:[grid-template-rows:auto_auto_1fr]">
            @foreach ($whyCards as $i => $card)
            <div class="reveal group py-8 lg:py-0 border-t border-gray-200 first:border-t-0 lg:border-t-0 lg:border-l lg:first:border-l-0 lg:px-10 lg:first:pl-0 lg:last:pr-0 lg:grid lg:grid-rows-subgrid lg:row-span-3"
                 style="transition-delay:{{ $i * 80 }}ms;">
                <svg class="w-11 h-11 lg:w-12 lg:h-12 text-navy mb-7 transition-all duration-300 group-hover:-translate-y-1 group-hover:text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke-width="1.4" stroke="currentColor">{!! $card['icon'] !!}</svg>
                <h3 class="font-heading font-bold text-navy text-lg lg:text-xl mb-3 leading-snug text-balance self-start transition-colors duration-300 group-hover:text-[#148af4]">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed text-pretty">{{ $card['body'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     4. THE ELECTROLUX PROFESSIONAL ADVANTAGE — machine range
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="relative py-20 lg:py-28 bg-navy overflow-hidden">
    <div class="absolute inset-0 ep-dotgrid opacity-40" aria-hidden="true"></div>
    <div class="relative max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            <div class="reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Electrolux Professional Advantage</p>
                <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight mb-5 text-balance">
                    A serious <span class="text-[#148af4]">professional laundry range</span> behind the local advice
                </h2>
                <p class="font-body text-blue-200 text-base leading-relaxed text-pretty mb-8 max-w-xl">
                    Electrolux Professional equipment is built for performance, efficiency and reliability in the most demanding environments. With Irish Laundry Systems by your side, you get expert advice, installation and ongoing support from a local team that understands your operation.
                </p>
                <a href="{{ route('equipment') }}" class="group inline-flex items-center gap-2 bg-white text-navy hover:bg-white/90 font-body font-bold px-7 py-3.5 rounded-md text-sm transition-all duration-200 hover:shadow-lg hover:shadow-black/25">
                    Explore the range
                    <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <div class="reveal reveal-right" style="transition-delay:120ms;">
                <div class="group rounded-2xl overflow-hidden border border-white/10 shadow-2xl">
                    <img src="/images/shared/Line 6000 solutions products_72dpi.jpg" alt="Electrolux Professional commercial laundry range" loading="lazy" decoding="async" class="w-full h-auto object-cover transition-transform duration-[600ms] ease-out group-hover:scale-[1.04]">
                </div>
            </div>

        </div>

        {{-- Category links --}}
        <div class="mt-12 lg:mt-14 pt-8 border-t border-white/10 reveal">
            <div class="flex flex-wrap items-center gap-x-8 gap-y-3">
                @foreach([
                    'Washers'          => 'washers',
                    'Dryers'           => 'tumble-dryers',
                    'Barrier washers'  => 'barrier-washers',
                    'Ironers'          => 'ironers',
                    'Drying cabinets'  => 'drying-cabinets',
                    'myPRO / myPRO XL' => 'semi-professional',
                    'Dosing systems'   => 'accessories',
                    'Accessories'      => 'accessories',
                ] as $label => $slug)
                <a href="{{ route('equipment.category', $slug) }}" class="relative font-body font-bold text-white/70 hover:text-white text-sm transition-colors after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-px after:w-0 after:bg-[#148af4] after:transition-all after:duration-300 hover:after:w-full">{{ $label }}</a>
                @endforeach
            </div>
        </div>

    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     5. ILS LOCAL DELIVERY — 4 stat cards
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-12 lg:mb-14 reveal max-w-4xl">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Local Irish Support</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight mb-5 text-balance">
                Global equipment strength, <span class="text-[#148af4]">local responsibility</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed text-pretty max-w-3xl">
                The Electrolux Professional name gives customers confidence in the equipment. Irish Laundry Systems gives them confidence in the work around it: advice, installation planning, rental where suitable, maintenance, repairs, parts support and aftercare across Dublin and Ireland.
            </p>
        </div>

        @php
        $localCards = [
            ['label' => '1987',     'title' => 'Irish engineering roots',          'body' => 'Irish Laundry Systems grew from practical electrical contracting and commercial laundry equipment experience.'],
            ['label' => '30+ years','title' => 'Electrolux Professional experience','body' => 'The business is built on more than 30 years of Electrolux Professional equipment and service knowledge.'],
            ['label' => '100+',     'title' => 'Clients supported',                'body' => 'ILS supports commercial laundry sites across healthcare, care, hospitality and commercial operations.'],
            ['label' => 'One team', 'title' => 'Advice to aftercare',              'body' => 'Customers can speak to one local team about equipment choice, installation, rental, Preventive Maintenance, repairs and aftercare.'],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-5">
            @foreach ($localCards as $i => $card)
            <article class="reveal ep-lift group bg-bg rounded-2xl border border-navy/5 p-6 lg:p-7 flex flex-col" style="transition-delay:{{ $i * 60 }}ms;">
                <span class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-none mb-4 transition-colors duration-300 group-hover:text-[#148af4]">{{ $card['label'] }}</span>
                <h3 class="font-heading font-bold text-navy text-base lg:text-lg mb-2 leading-snug">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed text-pretty">{{ $card['body'] }}</p>
            </article>
            @endforeach
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     6. DOWNTIME CONFIDENCE — navy strip with image
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="relative bg-navy overflow-hidden">
    <div class="grid grid-cols-1 lg:grid-cols-2">

        {{-- Photo --}}
        <div class="group relative min-h-[320px] lg:min-h-[540px] overflow-hidden">
            <img src="/images/shared/customer-care-line6000.jpg" alt="Irish Laundry Systems engineer supporting Electrolux Professional equipment"
                 loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover transition-transform duration-[700ms] ease-out group-hover:scale-105">
            <div class="absolute inset-0 lg:hidden" style="background:rgba(1,30,65,0.45);"></div>
        </div>

        {{-- Text --}}
        <div class="relative flex items-center px-6 sm:px-10 lg:px-16 py-16 lg:py-24">
            <div class="ep-dotgrid absolute inset-0 opacity-25" aria-hidden="true"></div>
            <div class="relative max-w-xl reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] uppercase tracking-[0.22em] text-xs mb-4">Downtime Is Not An Option</p>
                <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight mb-5 text-balance">
                    Protect uptime with <span class="text-[#148af4]">the right support</span> behind the&nbsp;equipment
                </h2>
                <p class="font-body text-blue-200 text-base leading-relaxed mb-8 text-pretty">
                    A stopped washer, dryer or ironer can delay linen and interrupt the day’s operation. As an Authorised Electrolux Professional Partner, Irish Laundry Systems uses manufacturer support channels, genuine parts access and decades of equipment knowledge to help you reach the right repair decision faster.
                </p>
                <a href="{{ route('request-assessment') }}" class="group inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-[#0f70cc] text-white font-body font-bold px-7 py-3.5 rounded-md text-sm transition-all duration-200 hover:shadow-lg hover:shadow-[#148af4]/30">
                    Request Service Assessment
                    <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>

    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     7. ILS EQUIPMENT CARE — 6 pillars (What You Gain style)
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">

            {{-- Left: heading + image --}}
            <div class="reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Equipment Care</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight mb-5 text-balance">
                    Equipment support from <span class="text-[#148af4]">advice to&nbsp;aftercare</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed text-pretty mb-8">
                    Customers do not just need equipment supplied. They need the right machine, installed properly, maintained well, repaired correctly and supported when the next decision appears. Irish Laundry Systems brings those steps together through one local engineering team.
                </p>
                <div class="group rounded-2xl overflow-hidden shadow-card">
                    <img src="/images/shared/render-double-page_72dpi.jpg" alt="Electrolux Professional laundry equipment supported by Irish Laundry Systems"
                         loading="lazy" decoding="async" class="w-full h-auto object-cover transition-transform duration-[600ms] ease-out group-hover:scale-[1.04]">
                </div>
            </div>

            {{-- Right: 01–06 support list --}}
            @php
            $pillars = [
                ['title' => 'Equipment Advice & Supply', 'body' => 'Choose Electrolux Professional equipment around the room, workload, budget and long-term support plan.'],
                ['title' => 'Installation & Setup',      'body' => 'Plan delivery, access, utilities, installation and handover before the equipment starts working.'],
                ['title' => 'Equipment Rental',          'body' => 'A lower-capital option where rental is suitable for the selected equipment and site needs.'],
                ['title' => 'Preventive Maintenance',    'body' => 'Planned support to reduce avoidable disruption and keep laundry equipment easier to manage over time.'],
                ['title' => 'Repairs & Call-Outs',       'body' => 'Engineering support when faults, breakdowns or performance issues affect the laundry room.'],
                ['title' => 'Support & Aftercare',       'body' => 'Follow-up advice, service history, parts support where needed and clearer next steps after installation.'],
            ];
            @endphp
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-7 lg:pt-4">
                @foreach ($pillars as $i => $p)
                <div class="reveal group" style="transition-delay:{{ $i * 60 }}ms;">
                    <div class="font-heading font-bold text-[#148af4] text-lg mb-2 transition-transform duration-300 origin-left group-hover:scale-110">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
                    <h3 class="font-heading font-bold text-navy text-base lg:text-lg mb-1.5 leading-snug transition-colors duration-300 group-hover:text-[#148af4]">{{ $p['title'] }}</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed text-pretty">{{ $p['body'] }}</p>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     8. ELECTROLUX PROFESSIONAL STATEMENT — RESERVED
     ──────────────────────────────────────────────────────────────────────
     Reserved for the official approved Electrolux Professional statement
     (quote, certificate, signed statement or authorised partner confirmation).
     Do NOT publish holding copy here — keep the space reserved until the
     approved statement arrives, then build the visible section in this block.
     ════════════════════════════════════════════════════════════════════════ --}}

{{-- ════════════════════════════════════════════════════════════════════════
     9. CUSTOMER CONFIDENCE — compact trusted-by logo strip
     ════════════════════════════════════════════════════════════════════════ --}}
@include('components.testimonials', [
    'eyebrow'    => 'Customer Trust',
    'heading'    => 'Trusted support for <span style="color:#148af4;">commercial laundry operations</span>',
    'subheading' => '',
])

@include('components.proof-bar')

{{-- ════════════════════════════════════════════════════════════════════════
     10. FINAL CTA / ENQUIRY FORM
     ════════════════════════════════════════════════════════════════════════ --}}
<section id="electrolux-form" class="bg-bg py-16 lg:py-24">
    <div class="max-w-4xl mx-auto px-6 sm:px-10">

        <div class="max-w-3xl mx-auto text-center mb-10 lg:mb-12 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Talk to an Engineer</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight mb-4 text-balance">
                Need Electrolux Professional equipment, <span class="text-[#148af4]">repair support or advice</span>?
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed text-pretty">
                Whether you are choosing new equipment, replacing a machine, planning maintenance or dealing with downtime, <span class="whitespace-nowrap">Irish Laundry Systems</span> can guide the next step with local engineering support and Electrolux Professional equipment knowledge.
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
                        <p class="font-body text-gray-700 text-sm leading-relaxed">{{ session('success') }}</p>
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

            <p class="font-heading font-bold text-navy text-lg mb-6">Request Electrolux Professional Equipment Support</p>

            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-5" data-utm>
                @csrf
                <input type="hidden" name="request_type" value="equipment_quote">
                <input type="hidden" name="utm_source">
                <input type="hidden" name="utm_medium">
                <input type="hidden" name="utm_campaign">
                <input type="hidden" name="utm_content">
                <input type="hidden" name="utm_term">
                <input type="hidden" name="page_source" value="electrolux-partnership">

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

                {{-- Phone + Email --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Phone <span class="text-red-400">*</span></label>
                        <input type="tel" name="phone" required value="{{ old('phone') }}" placeholder="+353 (0)..."
                               class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 placeholder-gray-400 transition-all">
                    </div>
                    <div>
                        <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Email <span class="text-red-400">*</span></label>
                        <input type="email" name="email" required value="{{ old('email') }}" placeholder="you@company.ie"
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

                {{-- Current equipment + What do you need help with --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Current equipment</label>
                        <input type="text" name="equipment" value="{{ old('equipment') }}" placeholder="Washer, dryer, ironer, brand, model..."
                               class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 placeholder-gray-400 transition-all">
                    </div>
                    <div>
                        <label class="block font-body text-sm font-light text-gray-700 mb-1.5">What do you need help with?</label>
                        <select name="help_with"
                                class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 cursor-pointer transition-all">
                            <option value="">Select</option>
                            <option value="equipment_advice"      {{ old('help_with') === 'equipment_advice' ? 'selected' : '' }}>Equipment advice</option>
                            <option value="installation"          {{ old('help_with') === 'installation' ? 'selected' : '' }}>Installation</option>
                            <option value="parts_or_repair"       {{ old('help_with') === 'parts_or_repair' ? 'selected' : '' }}>Parts or repair</option>
                            <option value="preventive_maintenance"{{ old('help_with') === 'preventive_maintenance' ? 'selected' : '' }}>Preventive Maintenance</option>
                            <option value="equipment_rental"      {{ old('help_with') === 'equipment_rental' ? 'selected' : '' }}>Equipment Rental</option>
                            <option value="support_aftercare"     {{ old('help_with') === 'support_aftercare' ? 'selected' : '' }}>Support &amp; Aftercare</option>
                        </select>
                    </div>
                </div>

                {{-- Timeframe (required by enquiry handling) --}}
                <div>
                    <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Timeframe <span class="text-red-400">*</span></label>
                    <select name="urgency" required
                            class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 cursor-pointer transition-all">
                        <option value="">Select a timeframe</option>
                        <option value="today"     {{ old('urgency') === 'today' ? 'selected' : '' }}>As soon as possible</option>
                        <option value="24_48h"    {{ old('urgency') === '24_48h' ? 'selected' : '' }}>Within 24–48 hours</option>
                        <option value="this_week" {{ old('urgency') === 'this_week' ? 'selected' : '' }}>This week</option>
                        <option value="planning"  {{ old('urgency') === 'planning' ? 'selected' : '' }}>Just planning</option>
                    </select>
                </div>

                {{-- Message --}}
                <div>
                    <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Message</label>
                    <textarea name="message" rows="4" placeholder="Tell us about the equipment, the site and what you need help with."
                              class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 placeholder-gray-400 resize-none leading-relaxed transition-all">{{ old('message') }}</textarea>
                </div>

                {{-- GDPR --}}
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
                <div class="pt-2 flex flex-wrap gap-4">
                    <button type="submit"
                            data-ga-cta="form-talk-engineer"
                            class="group inline-flex items-center justify-center bg-[#148af4] hover:bg-[#0f70cc] text-white font-body font-bold px-7 py-4 rounded-md text-base transition-all duration-200 hover:-translate-y-0.5 hover:shadow-lg hover:shadow-[#148af4]/30 w-full sm:w-auto">
                        Talk to an Engineer
                        <svg class="w-4 h-4 ml-2 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
                        </svg>
                    </button>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center border border-navy/30 hover:border-navy text-navy font-body font-bold px-7 py-4 rounded-md text-base transition-all duration-200 hover:-translate-y-0.5 w-full sm:w-auto">
                        Request Service Assessment
                    </a>
                </div>

            </form>
        </div>
    </div>
</section>

@endsection
