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

    <video autoplay muted loop playsinline
           poster="/images/shared/line-6000-solutions.jpg"
           aria-label="120 years of laundry solutions — Electrolux Professional"
           class="absolute inset-0 w-full h-full object-cover object-center">
        <source src="/images/pages/120_years_of_Laundry_solutions_Electrolux_Professional.mp4" type="video/mp4">
    </video>

    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.97) 0%, rgba(1,30,65,0.90) 25%, rgba(1,30,65,0.65) 45%, rgba(1,30,65,0.25) 65%, transparent 80%);"></div>

    <div class="relative z-10 h-full flex items-center w-full py-16 lg:py-0">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16">
            <div class="max-w-full lg:max-w-[920px]">

                <p class="ep-hero-desc font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-5" style="opacity:1;">Authorised Electrolux Professional Partner</p>

                <h1 class="ep-hero-title font-heading font-bold text-white leading-tight tracking-tight mb-6 text-2xl sm:text-4xl lg:text-5xl text-balance">
                    Electrolux Professional strength,<br class="hidden lg:block"> delivered with <span class="text-[#148af4]">Irish engineering&nbsp;expertise</span>
                </h1>

                <p class="ep-hero-desc font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl text-pretty">
                    Irish Laundry Systems supplies Electrolux Professional commercial laundry equipment across Ireland, with local installation and long-term service.
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
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-12 lg:mb-14 reveal max-w-6xl">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Why the Partnership Matters</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-5 min-[1200px]:whitespace-nowrap">
                What the partnership brings to <span class="text-[#148af4]">your laundry operation</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed text-pretty lg:whitespace-nowrap">
                Access the Electrolux Professional range, product knowledge, genuine parts and local engineering through Irish Laundry Systems.
            </p>
        </div>

        @php
        $whyCards = [
            [
                'title' => 'Equipment Range',
                'body'  => 'Professional laundry equipment across different capacities and applications.',
                'img'   => '175',
                'iconScale' => 'scale-[1.2]',
            ],
            [
                'title' => 'Product Knowledge',
                'body'  => 'Advice informed by Electrolux Professional training, product updates and technical resources.',
                'img'   => '245',
                'iconScale' => 'scale-[1.037]',
            ],
            [
                'title' => 'Genuine Parts Access',
                'body'  => 'Access genuine parts through the Electrolux Professional network for service and repair.',
                'img'   => '126',
                'iconScale' => 'scale-[1.119]',
            ],
            [
                'title' => 'Irish Engineering',
                'body'  => 'Local installation, maintenance and aftercare from people who know the equipment.',
                'img'   => 'pmc-gain-87',
                'iconScale' => 'scale-[1.027]',
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 lg:grid-cols-4 lg:[grid-template-rows:auto_auto_1fr]">
            @foreach ($whyCards as $i => $card)
            <div class="reveal group py-8 lg:py-0 border-t border-gray-200 first:border-t-0 lg:border-t-0 lg:border-l lg:first:border-l-0 lg:px-10 lg:first:pl-0 lg:last:pr-0 lg:grid lg:grid-rows-subgrid lg:row-span-3"
                 style="transition-delay:{{ $i * 80 }}ms;">
                @if(!empty($card['img']))
                <img src="/images/icons/{{ $card['img'] }}.png" alt="" aria-hidden="true" class="w-24 h-24 object-contain mb-6 transition-transform duration-300 group-hover:-translate-y-1 {{ $card['iconScale'] ?? '' }}">
                @else
                <svg class="w-11 h-11 lg:w-12 lg:h-12 text-navy mb-7 transition-all duration-300 group-hover:-translate-y-1 group-hover:text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke-width="1.4" stroke="currentColor">{!! $card['icon'] !!}</svg>
                @endif
                <h3 class="font-heading font-bold text-navy text-xl mb-3 leading-snug text-balance self-start transition-colors duration-300 group-hover:text-[#148af4]">{{ $card['title'] }}</h3>
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

        <div class="grid grid-cols-1 lg:grid-cols-[auto_minmax(0,1fr)] gap-10 lg:gap-8 items-center">

            <div class="reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Electrolux Professional Range</p>
                <h2 class="font-heading font-bold text-white text-2xl sm:text-4xl lg:text-5xl leading-tight mb-5 text-balance">
                    <span class="sm:block lg:whitespace-nowrap">Professional laundry equipment</span>
                    <span class="sm:block lg:whitespace-nowrap">across <span class="text-[#148af4]">washing, drying and finishing</span></span>
                </h2>
                <p class="font-body text-blue-200 text-base leading-relaxed mb-8 lg:whitespace-nowrap">
                    Explore equipment for different capacities, sectors and specialist laundry applications.
                </p>
                <a href="{{ route('equipment') }}" class="group inline-flex items-center gap-2 bg-white text-navy hover:bg-white/90 font-body font-bold px-7 py-3.5 rounded-md text-sm transition-all duration-200 hover:shadow-lg hover:shadow-black/25">
                    Explore the Range
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
                    'Barrier Washers'  => 'barrier-washers',
                    'Ironers'          => 'ironers',
                    'Drying Cabinets'  => 'drying-cabinets',
                    'Semi Professional'=> 'semi-professional',
                    'Dosing Systems'   => 'accessories',
                    'Accessories'      => 'accessories',
                ] as $label => $slug)
                <a href="{{ route('equipment.category', $slug) }}" class="relative font-body font-bold text-white/70 hover:text-white text-sm transition-colors after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-px after:w-0 after:bg-[#148af4] after:transition-all after:duration-300 hover:after:w-full">{{ $label }}</a>
                @endforeach
            </div>
        </div>

    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     5. PROFESSIONAL LAUNDRY HERITAGE — regular strip (image pinned right + fade)
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden" style="background-color:#011E41;">
    {{-- image pinned right, gradient fade toward the text column --}}
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:42%;">
        <img src="/images/shared/professional-laundry-heritage-strip.jpg" alt="Electrolux Professional laundry heritage supported by Irish Laundry Systems"
             loading="lazy" decoding="async" class="w-full h-full object-cover" style="object-position:center center;">
        <div class="absolute inset-0" style="background:linear-gradient(to right, #011E41 0%, rgba(1,30,65,0.85) 18%, rgba(1,30,65,0.35) 55%, transparent 100%);"></div>
    </div>

    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-10 lg:py-14 max-w-full lg:max-w-[62%]">
        <p class="font-body font-bold text-white/70 uppercase tracking-[0.22em] text-xs mb-3">Professional Laundry Heritage</p>
        <h2 class="font-heading font-bold text-white text-2xl sm:text-4xl lg:text-5xl leading-tight mb-4 text-balance">
            More than 120 years of<br class="hidden lg:block"> professional laundry innovation,<br class="hidden lg:block"> <span style="color:#148af4;">supported in Ireland since 1987</span>
        </h2>
        <p class="font-body text-white/90 text-base leading-relaxed mb-6 text-pretty max-w-xl">
            Electrolux Professional brings generations of laundry development and a global Customer Care network. Irish Laundry Systems brings local product knowledge, genuine parts access, installation and aftercare.
        </p>

        <div class="flex flex-wrap gap-x-10 gap-y-4 mb-6">
            @foreach([
                ['stat' => '120+', 'label' => 'Years in Professional Laundry'],
                ['stat' => '110',  'label' => 'Countries'],
                ['stat' => '55,000+', 'label' => 'Spare Parts'],
            ] as $proof)
            <div>
                <div class="font-heading font-bold text-white text-3xl lg:text-4xl leading-none mb-1">{{ $proof['stat'] }}</div>
                <div class="font-body text-white/80 text-sm leading-tight">{{ $proof['label'] }}</div>
            </div>
            @endforeach
        </div>

        <a href="{{ route('request-assessment') }}" class="group inline-flex items-center justify-center gap-2 bg-white text-navy hover:bg-white/90 font-body font-bold px-7 py-3.5 rounded-md text-sm transition-all duration-200 hover:shadow-lg hover:shadow-black/25">
            Discuss Electrolux Equipment
            <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
        </a>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     6. ELECTROLUX PROFESSIONAL STATEMENT — official partnership testimonial
     (approved statement from Paul Frost, Electrolux Professional Country Manager)
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="py-16 lg:py-24 bg-navy">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-12 lg:mb-14 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">From Electrolux Professional</p>
            <h2 class="font-heading font-bold text-white text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                <span class="">Trusted by Electrolux Professional <span style="color:#148af4;">since 1987</span></span>
            </h2>
            <p class="font-body text-white/70 text-base leading-relaxed">
                A statement on the long-standing partnership with Irish Laundry Systems in Ireland.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">

            {{-- Left: Electrolux Professional logo + partnership badges --}}
            <div class="lg:col-span-4 flex flex-col items-center text-center reveal reveal-left">
                <img src="/images/logo/electrolux-partner.png" alt="Electrolux Professional Authorised Partner"
                     loading="lazy" decoding="async" class="w-full max-w-[300px] h-auto object-contain"
                     style="filter:brightness(0) invert(1);">
            </div>

            {{-- Right: white testimonial card --}}
            <div class="lg:col-span-8 reveal reveal-right">
                <div class="bg-white rounded-2xl shadow-card p-8 lg:p-12">
                    <blockquote class="relative font-heading font-bold text-navy text-xl lg:text-2xl leading-snug mb-6 pl-8">
                        <svg class="absolute w-6 h-6 top-1 left-0" style="transform: rotate(180deg);" fill="#148af4" viewBox="0 0 32 32" aria-hidden="true"><path d="M9.5 8c-3 0-5.5 2.5-5.5 5.5 0 2 1 3.7 2.5 4.6-.3 2.6-1.5 4.6-3.5 5.9l1 2c4-1.5 7-5 7-10v-2c0-3.3-.7-6-1.5-6zm14 0c-3 0-5.5 2.5-5.5 5.5 0 2 1 3.7 2.5 4.6-.3 2.6-1.5 4.6-3.5 5.9l1 2c4-1.5 7-5 7-10v-2c0-3.3-.7-6-1.5-6z"/></svg>Irish Laundry Systems has been a trusted Authorised partner of Electrolux Professional in Ireland for more than 30 years, delivering expert support for our commercial laundry solutions.
                    </blockquote>
                    <div class="space-y-4 mb-8">
                        <p class="font-body text-gray-600 text-base leading-relaxed">Maurice, Luana and the wider team do a superb job supporting customers with the supply, installation and ongoing service of our commercial laundry equipment.</p>
                        <p class="font-body text-gray-600 text-base leading-relaxed">Their in-depth product knowledge and understanding of local customers ensures that they can confidently invest in Electrolux Professional solutions, knowing local engineering support and genuine parts access are only a phone call away.<svg display="inline" style="display:inline; vertical-align:middle; margin-left:4px;" width="22" height="22" fill="#148af4" viewBox="0 0 32 32" aria-hidden="true"><path d="M9.5 8c-3 0-5.5 2.5-5.5 5.5 0 2 1 3.7 2.5 4.6-.3 2.6-1.5 4.6-3.5 5.9l1 2c4-1.5 7-5 7-10v-2c0-3.3-.7-6-1.5-6zm14 0c-3 0-5.5 2.5-5.5 5.5 0 2 1 3.7 2.5 4.6-.3 2.6-1.5 4.6-3.5 5.9l1 2c4-1.5 7-5 7-10v-2c0-3.3-.7-6-1.5-6z"/></svg></p>
                    </div>
                    <div class="pt-6 border-t border-gray-100">
                        <p class="font-heading font-bold text-navy text-base">Paul Frost</p>
                        <p class="font-body text-gray-500 text-sm">Electrolux Professional Country Manager</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Trusted-by logos strip removed; keep the breathing space --}}
<div class="bg-white h-16 lg:h-24"></div>

{{-- ════════════════════════════════════════════════════════════════════════
     10. FINAL CTA / ENQUIRY FORM
     ════════════════════════════════════════════════════════════════════════ --}}
<section id="electrolux-form" class="bg-white py-16 lg:py-24">
    <div class="max-w-4xl mx-auto px-6 sm:px-10">

        <div class="max-w-4xl mx-auto text-center mb-10 lg:mb-12 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Talk to an Engineer</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-4">
                <span class="lg:whitespace-nowrap">Discuss Electrolux Professional equipment</span><br class="hidden lg:block"> with <span class="text-[#148af4]">our Irish engineering team</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed text-pretty">
                Share the main details about your site, existing equipment and what you need help with.
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

            <p class="font-heading font-bold text-navy text-lg mb-6">Request Electrolux Professional Advice</p>

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
                            I agree to the Privacy Policy and to Irish Laundry Systems using my details to respond to this enquiry. <span class="text-red-400">*</span>
                            <a href="{{ route('privacy') }}" class="underline hover:text-navy transition-colors" target="_blank">Privacy Policy</a>.
                        </span>
                    </label>
                    <label class="flex items-start gap-3 cursor-pointer">
                        <input type="checkbox" name="marketing_consent" value="1" {{ old('marketing_consent') ? 'checked' : '' }}
                               class="mt-0.5 w-4 h-4 rounded border-gray-300 text-navy focus:ring-navy/30 flex-shrink-0 cursor-pointer">
                        <span class="font-body text-xs text-gray-400 leading-relaxed">
                            I would like to receive occasional updates from Irish Laundry Systems. Optional.
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
                        Request an Assessment
                    </a>
                </div>

            </form>
        </div>
    </div>
</section>

@endsection
