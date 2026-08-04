@extends('layouts.app')

@section('pageTitle', $title ?? 'Support & Aftercare | Irish Laundry Systems')
@section('metaDescription', $metaDescription ?? 'Support & Aftercare from Irish Laundry Systems — follow-up care, service history and genuine parts support where needed, keeping commercial laundry equipment decisions clear beyond a single visit.')

@section('content')

<style>
    /* Hero fade-up */
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

    /* ── How aftercare works — step gallery (mirrors service-contracts) ── */
    .pa-visit-card {
        position: relative;
        overflow: hidden;
        min-height: 520px;
        flex: 1 1 25%;
    }
    .pa-visit-card img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        transition: transform 0.6s ease;
    }
    .pa-visit-card:hover img { transform: scale(1.06); }
    .pa-visit-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(1,30,65,0.90) 0%, rgba(1,30,65,0.35) 55%, rgba(1,30,65,0.10) 100%);
        z-index: 1;
        transition: opacity 0.4s;
    }
    .pa-visit-card::after {
        content: '';
        position: absolute;
        inset: 0;
        background: rgba(1,30,65,0.90);
        z-index: 2;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.4s, visibility 0.4s;
    }
    .pa-visit-card:hover::before { opacity: 0; }
    .pa-visit-card:hover::after  { opacity: 1; visibility: visible; }

    .pa-vcap1 {
        position: absolute;
        bottom: 28px;
        left: 32px;
        z-index: 3;
        transition: opacity 0.35s ease, transform 0.35s ease;
    }
    .pa-vcap1 .pa-num {
        color: #148af4;
        font-size: 2.6rem;
        font-weight: 700;
        line-height: 1;
        display: block;
        margin-bottom: 6px;
    }
    .pa-vcap1 h4 {
        color: #fff;
        font-size: 1rem;
        font-weight: 700;
        line-height: 1.3;
        margin: 0;
    }
    .pa-visit-card:hover .pa-vcap1 {
        opacity: 0;
        transform: translateY(16px);
    }

    .pa-vcap2 {
        position: absolute;
        top: 50%;
        left: 32px;
        right: 32px;
        transform: translateY(-40%);
        z-index: 5;
        opacity: 0;
        transition: opacity 0.4s ease, transform 0.4s ease;
    }
    .pa-visit-card:hover .pa-vcap2 {
        opacity: 1;
        transform: translateY(-50%);
    }
    .pa-vcap2 .pa-num {
        color: #148af4;
        font-size: 2.6rem;
        font-weight: 700;
        line-height: 1;
        display: block;
        margin-bottom: 12px;
    }
    .pa-vcap2 h4 {
        color: #fff;
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 12px;
    }
    .pa-vcap2 p {
        color: rgba(255,255,255,0.72);
        font-size: 0.85rem;
        line-height: 1.65;
    }

    @media (max-width: 767px) {
        .pa-visit-card { min-height: 300px; flex: 1 1 50%; }
    }
    @media (max-width: 479px) {
        .pa-visit-card { min-height: 260px; flex: 1 1 100%; }
    }
</style>

{{-- ════════════════════════════════════════════════════════════════════════
     1. HERO
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden h-auto min-h-[520px] lg:h-[720px]" style="background-color: #011E41;">

    <img src="/images/pages/services/support-aftercare-hero.png"
         alt="ILS engineer reviewing commercial laundry equipment after a service visit"
         loading="eager" decoding="async"
         class="absolute inset-0 w-full h-full object-cover object-right">

    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.97) 0%, rgba(1,30,65,0.90) 25%, rgba(1,30,65,0.65) 45%, rgba(1,30,65,0.25) 65%, transparent 80%);"></div>

    <div class="relative z-10 h-full flex items-center w-full py-16 lg:py-0">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16">
            <div class="max-w-full lg:max-w-[920px]">

                <p class="pa-hero-desc font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-5" style="opacity:1;">Support &amp; Aftercare</p>

                <h1 class="pa-hero-title font-heading font-bold text-white leading-tight tracking-tight mb-6 text-2xl sm:text-4xl lg:text-5xl text-balance">
                    Keep your laundry operation moving<br class="hidden lg:block"> with <span class="text-[#148af4]">long-term equipment&nbsp;care</span>
                </h1>

                <p class="pa-hero-desc font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl lg:max-w-none text-pretty">
                    <span class="whitespace-nowrap">Irish Laundry Systems</span> provides ongoing aftercare for commercial laundry equipment across Dublin and Ireland,<br class="hidden lg:block"> covering service history, parts support and future service planning.
                </p>

                <div class="pa-hero-btns flex flex-row flex-wrap gap-4">
                    <a href="#aftercare-form"
                       data-ga-cta="hero-request-aftercare"
                       class="pa-pulse-cta inline-flex items-center justify-center bg-[#148af4] hover:bg-[#0f70cc] text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 whitespace-nowrap">
                        Request Support &amp; Aftercare
                    </a>
                    <a href="{{ route('services') }}"
                       data-ga-cta="hero-view-services"
                       class="inline-flex items-center justify-center border border-white/50 hover:border-white text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 hover:bg-white/10 whitespace-nowrap">
                        View Service Options
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
     3. CONNECTED AFTERCARE INTRO
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Customer Care</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">
            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    We take care of your equipment, so <span class="text-[#148af4]">your laundry operation can keep&nbsp;moving</span>
                </h2>
            </div>
            <div class="flex flex-col gap-4 reveal" style="transition-delay:120ms;">
                <p class="font-body text-gray-500 text-base leading-relaxed text-pretty">
                    After installation, repair, maintenance or Equipment Rental, equipment still needs the right follow-up.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed text-pretty">
                    <span class="whitespace-nowrap">Irish Laundry Systems</span> keeps service records, parts needs and equipment condition organised for better service decisions over time.
                </p>

                <a href="#aftercare-form" class="inline-flex items-center gap-2 bg-navy hover:bg-navy-dark text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200 mt-4 w-fit">
                    Request Support &amp; Aftercare
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     4. WHAT SUPPORT & AFTERCARE COVERS — 4 cards
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-12 lg:mb-14 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Aftercare Coverage</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-5 text-balance">
                Support &amp; Aftercare for <span class="text-[#148af4]">equipment already in use</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed text-pretty lg:whitespace-nowrap">
                Irish Laundry Systems keeps service records, parts information and equipment condition ready for future repairs, maintenance visits and equipment decisions.
            </p>
        </div>

        @php
        $coverCards = [
            [
                'title' => 'Service history review',
                'img'   => '/images/icons/aftercare-connected-93.png',
                'body'  => 'Previous visits, known faults, maintenance notes and equipment details are reviewed before an aftercare recommendation.',
                'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Zm.75 10.5 1.5 1.5 3-3"/>',
            ],
            [
                'title' => 'Follow-up care',
                'img'   => '/images/icons/aftercare-connected-94.png',
                'body'  => 'After a repair, installation or inspection, the service record stays organised for future service.',
                'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z"/>',
            ],
            [
                'title' => 'Parts support',
                'img'   => '/images/icons/aftercare-connected-95.png',
                'body'  => 'Irish Laundry Systems reviews equipment details and service history before advising on suitable parts or accessories.',
                'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z"/>',
            ],
            [
                'title' => 'Equipment decisions',
                'img'   => '/images/icons/aftercare-connected-96.png',
                'body'  => 'Repair, maintenance, parts and replacement planning are based on the equipment\'s condition and service record.',
                'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z"/>',
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 lg:grid-cols-4 lg:[grid-template-rows:auto_auto_1fr]">
            @foreach ($coverCards as $i => $card)
            <div class="reveal group py-8 lg:py-0 border-t border-gray-200 first:border-t-0 lg:border-t-0 lg:border-l lg:first:border-l-0 lg:px-10 lg:first:pl-0 lg:last:pr-0 lg:grid lg:grid-rows-subgrid lg:row-span-3"
                 style="transition-delay:{{ $i * 80 }}ms;">
                @if (!empty($card['img']))
                    <img src="{{ $card['img'] }}" alt="" aria-hidden="true" class="w-24 h-24 mb-7 object-contain transition-transform duration-300 group-hover:-translate-y-1">
                @else
                <svg class="w-16 h-16 lg:w-20 lg:h-20 text-[#148af4] mb-7 transition-transform duration-300 group-hover:-translate-y-1" fill="none" viewBox="0 0 24 24" stroke-width="1.4" stroke="currentColor">{!! $card['icon'] !!}</svg>
                @endif
                <h3 class="font-heading font-bold text-navy text-xl mb-3 leading-snug text-balance self-start">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed text-pretty">{{ $card['body'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     5. THE RIGHT PART NEEDS THE RIGHT CONTEXT — navy strip
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="relative py-16 lg:py-24 bg-navy overflow-hidden">
    <div class="absolute inset-0" aria-hidden="true">
        <img src="/images/pages/services/parts-support-bg.jpg" alt="" loading="lazy" decoding="async"
             class="absolute inset-0 w-full h-full object-cover">
    </div>
    <div class="absolute inset-0 pa-dotgrid opacity-25" aria-hidden="true"></div>
    <div class="relative max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="max-w-3xl mx-auto reveal">
            <div class="rounded-3xl p-8 lg:p-12 text-center" style="background: rgba(1,30,65,0.82); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,0.08);">
                <p class="font-body font-bold text-[#148af4] uppercase tracking-[0.22em] text-xs mb-3">Parts Support</p>
                <h2 class="font-heading font-bold text-white text-2xl sm:text-4xl lg:text-5xl leading-tight mb-5 text-balance">
                    The right part starts with <span class="text-[#148af4]">accurate equipment&nbsp;details</span>
                </h2>
                <p class="font-body text-blue-200 text-base leading-relaxed mb-7 text-pretty">
                    <span class="whitespace-nowrap">Irish Laundry Systems</span> reviews equipment details, service records and site requirements before advising on parts, accessories or follow-up service.
                </p>
                <div class="flex flex-wrap justify-center items-center gap-x-8 gap-y-3 mb-8">
                    @foreach([
                        ['icon' => 'ativo-8',  'src' => '/images/icons/home-maintenance-value.png', 'label' => 'Equipment<br>details'],
                        ['icon' => 'ativo-4',  'src' => '/images/icons/repairs-repeat-history.png', 'label' => 'Service<br>history'],
                        ['icon' => 'ativo-7',  'src' => '/images/icons/151.png', 'style' => 'transform:scale(0.85);', 'label' => 'Genuine parts<br>support'],
                    ] as $feat)
                    <div class="flex items-center gap-5 text-left">
                        <img src="{{ $feat['src'] ?? '/images/icons/brand-white/'.$feat['icon'].'.svg' }}" style="width:3.5rem;height:3.5rem;flex-shrink:0;{{ $feat['style'] ?? '' }}" alt="">
                        <span class="font-body text-white text-sm font-bold leading-snug">{!! $feat['label'] !!}</span>
                    </div>
                    @endforeach
                </div>
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 bg-white text-navy hover:bg-white/90 font-heading font-bold px-6 py-3 rounded-lg text-sm transition-colors duration-200">
                    Talk to Our Team
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     6. HOW SUPPORT & AFTERCARE WORKS — 4-step process
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="w-full overflow-hidden bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 lg:py-20">
        <p class="font-body font-bold text-[#148af4] uppercase tracking-[0.22em] text-xs mb-3 reveal">How Aftercare Works</p>
        <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight tracking-tight text-balance reveal" style="transition-delay:80ms;">
            Tell us what needs attention and <span class="text-[#148af4]">we&rsquo;ll arrange the&nbsp;follow-up</span>
        </h2>
        <p class="font-body text-gray-500 text-base leading-relaxed mt-4 reveal text-pretty lg:whitespace-nowrap" style="transition-delay:160ms;">
            <span class="whitespace-nowrap">Irish Laundry Systems</span> reviews the equipment, service history and site details before arranging the required support.
        </p>
    </div>

    <div style="display:flex; flex-wrap:wrap;">
        @foreach([
            [
                'num'   => '01.',
                'title' => 'Tell us what needs attention',
                'body'  => 'Share the equipment type, fault details, service history or parts requirement.',
                'img'   => '/images/shared/repairs-callouts.jpg',
            ],
            [
                'num'   => '02.',
                'title' => 'Review the service history',
                'body'  => 'Previous visits, maintenance notes and known faults are checked before support is arranged.',
                'img'   => '/images/pages/services/service-contracts-hero.jpg',
            ],
            [
                'num'   => '03.',
                'title' => 'Confirm the support needed',
                'body'  => 'Irish Laundry Systems confirms whether aftercare, repair, maintenance, parts support or replacement planning is needed.',
                'img'   => '/images/shared/Customer-Care_Line-6000-_001.jpg',
            ],
            [
                'num'   => '04.',
                'title' => 'Keep service records organised',
                'body'  => 'Service notes and parts information stay available for future equipment decisions.',
                'img'   => '/images/pages/services/services-overview-hero.jpg',
            ],
        ] as $step)
        <div class="pa-visit-card">
            <img src="{{ asset(ltrim($step['img'], '/')) }}" alt="{{ $step['title'] }}" loading="lazy">
            <div class="pa-vcap1">
                <span class="pa-num">{{ $step['num'] }}</span>
                <h4>{{ $step['title'] }}</h4>
            </div>
            <div class="pa-vcap2">
                <span class="pa-num">{{ $step['num'] }}</span>
                <h4>{{ $step['title'] }}</h4>
                <p>{{ $step['body'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>

{{-- White gap so the photo row above reads separately from the navy strip below --}}
<div class="h-12 lg:h-20 bg-white"></div>

{{-- ════════════════════════════════════════════════════════════════════════
     7. PREVENTIVE MAINTENANCE BRIDGE
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden" style="background-color:#011E41; min-height:300px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/shared/service-contracts-hero.png" alt="Planned maintenance visit on commercial laundry equipment"
             class="w-full h-full object-cover" style="object-position: center center;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #011E41 0%, rgba(1,30,65,0.85) 18%, rgba(1,30,65,0.35) 55%, transparent 100%);"></div>
    </div>
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-10 lg:py-14 max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">When Follow-Up Becomes a Pattern</p>
        <h2 class="font-heading font-bold text-white text-2xl sm:text-4xl lg:text-5xl leading-tight mb-4 text-balance">
            Repeated issues may need <span style="color:#148af4;">planned care</span>, not another isolated decision
        </h2>
        <p class="font-body text-white/80 text-base leading-relaxed mb-6 text-pretty">
            If the same machine keeps needing attention, Support &amp; Aftercare can use the service history to review whether a Preventive Maintenance Contract would help reduce repeat disruption, protect equipment value and plan the next step.
        </p>
        <div class="flex items-center flex-wrap 2xl:flex-nowrap gap-x-4 gap-y-2 mb-7">
            @foreach([
                ['icon' => 'ativo-8', 'src' => '/images/icons/home-maintenance-costs.png', 'label' => 'Reduce repeat<br>breakdowns'],
                ['icon' => 'ativo-4', 'src' => '/images/icons/205.png', 'label' => 'Protect equipment<br>value'],
                ['icon' => 'ativo-7', 'src' => '/images/icons/61.png', 'label' => 'Planned maintenance<br>support'],
            ] as $feat)
            <span class="flex items-center gap-2 flex-shrink-0">
                <img src="{{ $feat['src'] ?? '/images/icons/brand-white/'.$feat['icon'].'.svg' }}" class="h-14 w-auto object-contain" alt="">
                <span class="font-body text-white text-sm font-bold leading-tight">{!! $feat['label'] !!}</span>
            </span>
            @endforeach
        </div>
        <div class="flex flex-wrap gap-3">
            <a href="{{ route('service-contracts') }}"
               class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
                View Preventive Maintenance
                <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 border border-white/60 text-white font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/10 transition-colors tracking-wide">
                Talk to Our Team
            </a>
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     8. RELATED NEXT STEPS — 3 routes
     ════════════════════════════════════════════════════════════════════════ --}}
{{-- ════════════════════════════════════════════════════════════════════════
     WHEN AFTERCARE MATTERS — use-case grid
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-12 lg:mb-14 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">When Aftercare Matters</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-5 text-balance">
                For the moments that shape <span class="text-[#148af4]">future equipment&nbsp;decisions</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed text-pretty max-w-3xl">
                Aftercare matters after installation, after a repair, when parts are required or when the same fault returns. It also supports decisions to repair, maintain or replace equipment.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 reveal">
            @foreach ([
                'After installation',
                'After a repair',
                'Before planned maintenance',
                'When parts are required',
                'When the same fault returns',
                'When replacement is being considered',
            ] as $useCase)
            <div class="flex items-center gap-3 rounded-2xl border border-gray-200 bg-bg px-5 py-4">
                <span class="flex-shrink-0 w-9 h-9 rounded-full bg-[#148af4]/10 flex items-center justify-center">
                    <svg class="w-5 h-5 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                </span>
                <span class="font-heading font-bold text-navy text-base leading-snug">{{ $useCase }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     ONE CONNECTED — universal strip
     ════════════════════════════════════════════════════════════════════════ --}}
@include('components.one-connected-strip', ['ctaLabel' => 'Ask About OnE Connected'])

{{-- ════════════════════════════════════════════════════════════════════════
     RELATED SERVICES — 4 routes
     ════════════════════════════════════════════════════════════════════════ --}}
@include('components.services-cards', [
    'eyebrow'          => 'Related Services',
    'headingLead'      => 'Keep your laundry support ',
    'headingHighlight' => 'connected beyond aftercare',
    'headingTrail'     => '',
    'highlightClass'   => 'text-[#148af4]',
    'intro'            => 'Support for repairs, planned maintenance, rental options and Electrolux Professional equipment guidance.',
    'introMaxW'        => 'max-w-none',
    'align'            => 'left',
    'cards'            => [
        ['title' => 'Repairs & Call-Outs',                'body' => 'For urgent faults, breakdowns or equipment issues affecting daily operation.',                          'cta' => 'View Repairs & Call-Outs',    'href' => route('repairs'),           'img' => '/images/shared/repairs-callouts.jpg',                'alt' => 'Repairs & Call-Outs',                'pos' => 'center 40%'],
        ['title' => 'Preventive Maintenance',             'body' => 'For recurring faults, planned visits and better maintenance control.',                                 'cta' => 'View Preventive Maintenance', 'href' => route('service-contracts'), 'img' => '/images/shared/service-contracts-hero.png',          'alt' => 'Preventive Maintenance',             'pos' => '80% center'],
        ['title' => 'Equipment Rental',                   'body' => 'For replacement, added capacity or cases where buying outright is not the right option.',              'cta' => 'View Equipment Rental',       'href' => route('rental'),            'img' => '/images/shared/td6-11-multihousing-room-front.jpg', 'alt' => 'Equipment Rental',                   'pos' => '66% center'],
        ['title' => 'Electrolux Professional Partnership','body' => 'For genuine parts, technology and equipment backed by an Authorised Electrolux Professional Partner.', 'cta' => 'View Partnership',            'href' => route('electrolux'),       'img' => '/images/shared/services-overview-hero-portrait.jpg', 'alt' => 'Electrolux Professional Partnership', 'pos' => 'center center'],
    ],
])

{{-- ════════════════════════════════════════════════════════════════════════
     9 + 10. TESTIMONIAL / PROOF + TRUSTED BY LOGO STRIP
     ════════════════════════════════════════════════════════════════════════ --}}
@include('components.testimonials', [
    'light'      => false,
    'bordered'   => false,
    'eyebrow'    => 'Customer Trust',
    'heading'    => 'Long-term support for <span class="text-[#148af4]">commercial laundry&nbsp;operations</span>',
    'subheading' => 'Irish Laundry Systems supports commercial customers across Ireland with equipment service, aftercare, parts support and clear communication over time.',
    'subheadingClass' => 'max-w-none lg:whitespace-nowrap mx-auto',
])
@include('components.proof-bar')

{{-- ════════════════════════════════════════════════════════════════════════
     11. SUPPORT & AFTERCARE FAQs
     ════════════════════════════════════════════════════════════════════════ --}}
@php
$aftercareFaqs = [
    [
        'question' => 'What is Support & Aftercare?',
        'answer'   => 'Support & Aftercare is ongoing service support for commercial laundry equipment already in use. It covers service history, parts support, equipment care, repair follow-up and future equipment planning.',
    ],
    [
        'question' => 'When is Support & Aftercare useful?',
        'answer'   => 'It is useful after installation, after a repair, before planned maintenance, when parts are required, when a fault returns or when a site needs to decide whether to repair, maintain or replace equipment.',
    ],
    [
        'question' => 'Does Support & Aftercare include parts?',
        'answer'   => 'Parts support is part of aftercare for supported equipment. Irish Laundry Systems reviews equipment details and service history before advising on suitable parts or accessories.',
    ],
    [
        'question' => 'Is OnE Connected required for aftercare?',
        'answer'   => 'No. Irish Laundry Systems provides aftercare without OnE Connected. For compatible Electrolux Professional equipment, OnE Connected can provide digital insight into usage, performance and resource consumption.',
    ],
    [
        'question' => 'Does aftercare replace Preventive Maintenance?',
        'answer'   => 'No. Support & Aftercare works alongside Preventive Maintenance. Aftercare keeps service history and equipment information organised, while Preventive Maintenance focuses on planned inspections and maintenance control.',
    ],
    [
        'question' => 'Can aftercare support equipment already installed on site?',
        'answer'   => 'Yes. Irish Laundry Systems can review equipment already in use, including service history, parts needs, equipment condition and future service requirements.',
    ],
];
@endphp
@include('components.faq', [
    'faqs'    => $aftercareFaqs,
    'eyebrow' => 'Support & Aftercare FAQs',
    'heading' => 'Questions before <span class="text-[#148af4]">requesting support</span>',
])

{{-- ════════════════════════════════════════════════════════════════════════
     12. SUPPORT & AFTERCARE ENQUIRY FORM
     ════════════════════════════════════════════════════════════════════════ --}}
<section id="aftercare-form" class="bg-white py-16 lg:py-24">
    <div class="max-w-4xl mx-auto px-6 sm:px-10">

        <div class="max-w-3xl mx-auto text-center mb-10 lg:mb-12">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Support &amp; Aftercare</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-4">
                Need aftercare for<br class="hidden lg:block"> <span class="text-[#148af4]">commercial laundry&nbsp;equipment?</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed text-pretty">
                Tell us what equipment is on site and what needs attention.<br class="hidden lg:block"> <span class="whitespace-nowrap">Irish Laundry Systems</span> will review the request and respond with the appropriate aftercare recommendation.
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
                            If you have a photo of the equipment or rating plate, reply to our email with it attached so we can review it faster.
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

            <p class="font-body text-gray-500 text-sm mb-6">We aim to respond within 24 hours.</p>

            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-5" data-utm>
                @csrf
                <input type="hidden" name="request_type" value="parts">
                <input type="hidden" name="utm_source">
                <input type="hidden" name="utm_medium">
                <input type="hidden" name="utm_campaign">
                <input type="hidden" name="utm_content">
                <input type="hidden" name="utm_term">
                <input type="hidden" name="page_source" value="support-aftercare">

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

                {{-- Model / serial --}}
                <div>
                    <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Model / serial number <span class="text-gray-400">(if available)</span></label>
                    <input type="text" name="model_number" value="{{ old('model_number') }}" placeholder="Model or serial from the rating plate"
                           class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 placeholder-gray-400 transition-all">
                </div>

                {{-- Current issue --}}
                <div>
                    <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Current issue or requirement</label>
                    <input type="text" name="part_required" value="{{ old('part_required') }}" placeholder="Short description of the issue, part or follow-up needed"
                           class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 placeholder-gray-400 transition-all">
                </div>

                {{-- Looked at before + Currently working --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Has this been looked at before?</label>
                        <select name="looked_before"
                                class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 cursor-pointer transition-all">
                            <option value="">Select</option>
                            <option value="yes" {{ old('looked_before') === 'yes' ? 'selected' : '' }}>Yes</option>
                            <option value="no"  {{ old('looked_before') === 'no'  ? 'selected' : '' }}>No</option>
                            <option value="unsure" {{ old('looked_before') === 'unsure' ? 'selected' : '' }}>Not sure</option>
                        </select>
                    </div>
                    <div>
                        <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Is the machine currently working?</label>
                        <select name="machine_working"
                                class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 cursor-pointer transition-all">
                            <option value="">Select</option>
                            <option value="yes" {{ old('machine_working') === 'yes' ? 'selected' : '' }}>Yes</option>
                            <option value="no"  {{ old('machine_working') === 'no'  ? 'selected' : '' }}>No — out of action</option>
                            <option value="intermittent" {{ old('machine_working') === 'intermittent' ? 'selected' : '' }}>Working intermittently</option>
                        </select>
                    </div>
                </div>

                {{-- Message --}}
                <div>
                    <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Message</label>
                    <textarea name="message" rows="4" placeholder="Anything else that would help us review the equipment, history and next step."
                              class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 placeholder-gray-400 resize-none leading-relaxed transition-all">{{ old('message') }}</textarea>
                </div>

                {{-- Photo note --}}
                <p class="font-body text-gray-500 text-xs leading-relaxed">
                    Photo upload, if possible: once we reply, send photos of the machine, rating plate or fault area as an email attachment — it helps us review the equipment faster.
                </p>

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
                <div class="pt-2">
                    <button type="submit"
                            data-ga-cta="form-send-aftercare-request"
                            class="inline-flex items-center justify-center bg-[#148af4] hover:bg-[#0f70cc] text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 w-full sm:w-auto">
                        Request Support &amp; Aftercare
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
     13. FINAL CTA STRIP
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden" style="min-height: 360px; background-color: #148af4;">

    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:42%;">
        <img src="/images/shared/repairs-hero.jpg"
             alt="ILS engineer reviewing equipment and the next support step on site"
             class="w-full h-full object-cover"
             style="filter: saturate(0.9) contrast(1.05);">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.72) 25%, rgba(20,138,244,0.35) 55%, transparent 100%);"></div>
    </div>

    <div class="absolute inset-0 pa-dotgrid opacity-25 pointer-events-none"></div>

    <div class="relative max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 lg:py-20 flex items-center" style="min-height:360px;">
        <div class="lg:max-w-[55%]">
            <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3 reveal">Support &amp; Aftercare</p>
            <h2 class="font-heading font-bold text-white text-2xl sm:text-4xl lg:text-5xl leading-tight mb-5 reveal">
                Speak to Irish Laundry Systems<br class="hidden lg:block"> about <span class="text-navy">equipment care<br class="hidden lg:block"> and&nbsp;aftercare</span>
            </h2>
            <p class="font-body text-white/90 text-base leading-relaxed mb-6 max-w-2xl reveal text-pretty">
                Share the equipment details, service history or parts requirement.<br class="hidden lg:block"> <span class="whitespace-nowrap">Irish Laundry Systems</span> will review the request and advise on the appropriate support.
            </p>
            <div class="mb-8 flex items-center flex-wrap 2xl:flex-nowrap gap-x-4 gap-y-2 reveal">
                @foreach([
                    ['icon' => 'ativo-8', 'label' => 'Organised<br>service history'],
                    ['icon' => 'ativo-4', 'label' => 'Clearer<br>next costs'],
                    ['icon' => 'ativo-7', 'label' => 'Support from people<br>who know the equipment'],
                ] as $feat)
                <span class="flex items-center gap-2 flex-shrink-0">
                    <img src="/images/icons/brand-white/{{ $feat['icon'] }}.svg" class="object-contain flex-shrink-0" style="width:3rem;height:3rem;" alt="">
                    <span class="font-body text-white text-sm font-bold leading-tight">{!! $feat['label'] !!}</span>
                </span>
                @endforeach
            </div>
            <div class="flex flex-wrap items-center gap-4 reveal">
                <a href="#aftercare-form"
                   data-ga-cta="final-request-aftercare"
                   class="inline-flex items-center justify-center bg-white text-navy hover:bg-white/90 font-heading font-bold px-6 py-3 rounded-lg text-sm transition-colors duration-200 whitespace-nowrap">
                    Request Support &amp; Aftercare
                </a>
                <a href="{{ route('contact') }}"
                   data-ga-cta="final-talk-team"
                   class="inline-flex items-center justify-center border border-white/70 hover:border-white text-white font-body font-bold px-7 py-4 rounded-md text-sm transition-colors duration-200 hover:bg-white/10 whitespace-nowrap">
                    Talk to Our Team
                </a>
            </div>
        </div>
    </div>
</section>

{{-- White breathing space before footer --}}
<div class="h-12 lg:h-16 bg-white"></div>

@endsection