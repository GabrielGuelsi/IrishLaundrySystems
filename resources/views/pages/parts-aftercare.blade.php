@extends('layouts.app')

@section('pageTitle', $title ?? 'Support & Aftercare | Irish Laundry Systems')
@section('metaDescription', $metaDescription ?? 'Support & Aftercare from Irish Laundry Systems — follow-up care, service history and genuine parts access where applicable, keeping commercial laundry equipment decisions connected beyond a single visit.')

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
<section class="relative overflow-hidden" style="height: 720px; min-height: 560px; background-color: #011E41;">

    <img src="/images/healthcare/support-aftercare-hero.png"
         alt="ILS engineer reviewing commercial laundry equipment after a service visit"
         loading="eager" decoding="async"
         class="absolute inset-0 w-full h-full object-cover object-right">

    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.97) 0%, rgba(1,30,65,0.90) 25%, rgba(1,30,65,0.65) 45%, rgba(1,30,65,0.25) 65%, transparent 80%);"></div>

    <div class="relative z-10 h-full flex items-center w-full">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16">
            <div style="max-width: 720px;">

                <p class="pa-hero-desc font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-5" style="opacity:1;">Support &amp; Aftercare</p>

                <h1 class="pa-hero-title font-heading font-bold text-white leading-tight tracking-tight mb-6 text-4xl lg:text-5xl text-balance">
                    Support that <span class="text-[#148af4]">stays with your&nbsp;equipment</span> after the first&nbsp;visit
                </h1>

                <p class="pa-hero-desc font-body text-blue-200 text-base leading-relaxed mb-10 max-w-xl text-pretty">
                    Irish Laundry Systems keeps commercial laundry sites connected after installation, repair, rental or maintenance, with follow-up care, service history and genuine parts access where applicable, so teams can make clearer equipment decisions beyond a single visit.
                </p>

                <div class="pa-hero-btns flex flex-row flex-wrap gap-4">
                    <a href="#aftercare-form"
                       data-ga-cta="hero-request-aftercare"
                       class="pa-pulse-cta inline-flex items-center justify-center bg-[#148af4] hover:bg-[#0f70cc] text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 whitespace-nowrap">
                        Request Support &amp; Aftercare
                    </a>
                    <a href="{{ route('contact') }}"
                       data-ga-cta="hero-talk-team"
                       class="inline-flex items-center justify-center border border-white/50 hover:border-white text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 hover:bg-white/10 whitespace-nowrap">
                        Talk to Our Team
                    </a>
                </div>

                {{-- Trust indicators --}}
                <div class="pa-hero-btns mt-8 flex flex-wrap items-center gap-x-5 gap-y-2 font-body text-white/70 text-xs">
                    <span class="whitespace-nowrap">Aftercare support</span>
                    <span class="w-px h-3 bg-white/25 hidden sm:block" aria-hidden="true"></span>
                    <span class="whitespace-nowrap">Service history</span>
                    <span class="w-px h-3 bg-white/25 hidden sm:block" aria-hidden="true"></span>
                    <span class="whitespace-nowrap">Genuine parts access where applicable</span>
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
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">
            <div class="reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Connected Aftercare</p>
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl 2xl:text-6xl leading-tight">
                    Aftercare that keeps<br>service history and<br><span class="text-[#148af4]">next steps&nbsp;connected</span>
                </h2>
            </div>
            <div class="flex flex-col gap-4 reveal" style="transition-delay:120ms;">
                <p class="font-body text-gray-600 text-lg leading-relaxed text-pretty">
                    After a repair, inspection or installation, the next decision is often the one that matters.
                </p>
                <p class="font-body text-gray-600 text-lg leading-relaxed text-pretty">
                    Irish Laundry Systems keeps follow-up clearer with service history, Electrolux Professional equipment knowledge and genuine parts access where applicable.
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
<section class="bg-bg py-16 lg:py-24">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="max-w-3xl mb-12 lg:mb-14 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Support &amp; Aftercare</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-5 text-balance">
                What <span class="text-[#148af4]">stays connected</span> after the first visit
            </h2>
            <p class="font-body text-gray-600 leading-relaxed text-pretty">
                Aftercare works best when the repair, the part, the equipment history and the next decision stay connected.
            </p>
        </div>

        @php
        $coverCards = [
            [
                'title' => 'Service history review',
                'body'  => 'Previous visits, known faults, maintenance notes and equipment details are reviewed before the next action is recommended.',
                'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Zm.75 10.5 1.5 1.5 3-3"/>',
            ],
            [
                'title' => 'Follow-up care',
                'body'  => 'Clearer guidance after a repair, installation, rental setup or inspection, so teams know what needs attention next.',
                'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z"/>',
            ],
            [
                'title' => 'Genuine parts access where applicable',
                'body'  => 'When a part is required, Irish Laundry Systems can identify the correct requirement using machine details and service history.',
                'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z"/>',
            ],
            [
                'title' => 'Clearer equipment decisions',
                'body'  => 'The issue is directed toward the right next step, whether that means a repair call-out, planned maintenance, parts follow-up, rental discussion or another practical action.',
                'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z"/>',
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 lg:grid-cols-4">
            @foreach ($coverCards as $i => $card)
            <div class="reveal group py-8 lg:py-0 border-t border-gray-200 first:border-t-0 lg:border-t-0 lg:border-l lg:first:border-l-0 lg:px-10 lg:first:pl-0 lg:last:pr-0"
                 style="transition-delay:{{ $i * 80 }}ms;">
                <svg class="w-11 h-11 lg:w-12 lg:h-12 text-[#148af4] mb-7 transition-transform duration-300 group-hover:-translate-y-1" fill="none" viewBox="0 0 24 24" stroke-width="1.4" stroke="currentColor">{!! $card['icon'] !!}</svg>
                <h3 class="font-heading font-bold text-navy text-lg lg:text-xl mb-3 leading-snug text-balance">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed text-pretty">{{ $card['body'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     5. THE RIGHT PART NEEDS THE RIGHT CONTEXT — navy strip
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="relative py-20 lg:py-28 bg-navy overflow-hidden">
    <div class="absolute inset-0" aria-hidden="true">
        <img src="/images/sectors/commercial-hero.jpg" alt="" loading="lazy" decoding="async"
             class="absolute inset-0 w-full h-full object-cover">
    </div>
    <div class="absolute inset-0 pa-dotgrid opacity-25" aria-hidden="true"></div>
    <div class="relative max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="max-w-3xl mx-auto reveal">
            <div class="rounded-3xl p-8 lg:p-12 text-center" style="background: rgba(1,30,65,0.82); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,0.08);">
                <p class="font-body font-bold text-[#148af4] uppercase tracking-[0.22em] text-xs mb-4">Beyond the Part</p>
                <h2 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-5 text-balance">
                    The <span class="text-[#148af4]">right part</span> starts with the <span class="text-[#148af4]">right equipment&nbsp;information</span>
                </h2>
                <p class="font-body text-blue-200 text-base leading-relaxed mb-7 text-pretty">
                    A part only solves the problem when the machine, fault history, model and next action are clear. Irish Laundry Systems reviews the equipment details and service history before advising what is needed, what can wait and what should happen next.
                </p>
                <div class="flex flex-wrap justify-center items-center gap-x-5 gap-y-2 text-xs lg:text-sm font-body text-blue-200/90 mb-8">
                    <span class="inline-flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#148af4]"></span>Fewer parts mistakes</span>
                    <span class="opacity-30">|</span>
                    <span class="inline-flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#148af4]"></span>Clearer next costs</span>
                    <span class="opacity-30">|</span>
                    <span class="inline-flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#148af4]"></span>Genuine parts access where applicable</span>
                </div>
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 bg-white text-navy hover:bg-white/90 font-body font-bold px-7 py-3.5 rounded-md text-sm transition-colors duration-200">
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
        <p class="font-body font-bold text-[#148af4] uppercase tracking-[0.22em] text-xs mb-4 reveal">How Aftercare Works</p>
        <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight tracking-tight text-balance reveal" style="transition-delay:80ms;">
            A <span class="text-[#148af4]">clearer decision</span> for the equipment already on-site
        </h2>
        <p class="font-body text-gray-600 text-base leading-relaxed mt-4 max-w-2xl reveal text-pretty" style="transition-delay:160ms;">
            Support &amp; Aftercare connects what has happened before with what the equipment needs now.
        </p>
    </div>

    <div style="display:flex; flex-wrap:wrap;">
        @foreach([
            [
                'num'   => '01.',
                'title' => 'Tell us what needs attention',
                'body'  => 'Share the equipment type, site, recent issue, previous visit or current concern.',
                'img'   => '/images/healthcare/engineer.jpg',
            ],
            [
                'num'   => '02.',
                'title' => 'Review the service history',
                'body'  => 'Irish Laundry Systems checks previous notes, known issues and available equipment details.',
                'img'   => '/images/healthcare/service-contracts-hero.jpg',
            ],
            [
                'num'   => '03.',
                'title' => 'Check the next action',
                'body'  => 'The next step may involve genuine parts access where applicable, follow-up care, a repair call-out, planned maintenance or another practical action.',
                'img'   => '/images/healthcare/Customer-Care_Line-6000-_001.jpg',
            ],
            [
                'num'   => '04.',
                'title' => 'Keep the decision clear',
                'body'  => 'The site is guided toward the most useful next step without treating the issue as an isolated parts request.',
                'img'   => '/images/healthcare/services-overview-hero.jpg',
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

{{-- ════════════════════════════════════════════════════════════════════════
     7. PREVENTIVE MAINTENANCE BRIDGE
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="bg-bg py-16 lg:py-20">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="bg-navy rounded-3xl p-8 lg:p-12 relative overflow-hidden">
            <div class="absolute inset-0 pa-dotgrid opacity-50"></div>
            <div class="relative grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                <div>
                    <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4 reveal">When Follow-Up Becomes a Pattern</p>
                    <h2 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-4 reveal text-balance">
                        Repeated issues may need <span class="text-[#148af4]">planned care</span>, not another isolated decision
                    </h2>
                    <p class="font-body text-blue-200 text-base leading-relaxed reveal text-pretty">
                        If the same machine keeps needing attention, Support &amp; Aftercare can connect the history with a Preventive Maintenance Contract review, giving the site a clearer way to reduce repeat disruption, protect equipment value and plan the next step.
                    </p>
                    <div class="mt-6 flex flex-wrap items-center gap-x-4 gap-y-2 font-body text-blue-200/90 text-xs lg:text-sm reveal">
                        <span class="whitespace-nowrap">Reduce repeat disruption</span>
                        <span class="text-white/30">|</span>
                        <span class="whitespace-nowrap">Protect equipment value</span>
                        <span class="text-white/30">|</span>
                        <span class="whitespace-nowrap">Planned maintenance support</span>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row lg:flex-col gap-3 lg:items-stretch reveal" style="transition-delay:120ms;">
                    <a href="{{ route('service-contracts') }}"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-[#0f70cc] text-white font-body font-bold px-6 py-3.5 rounded-lg text-sm transition-colors">
                        View Preventive Maintenance Contracts
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white/30 hover:border-white text-white font-body font-bold px-6 py-3.5 rounded-lg text-sm transition-colors hover:bg-white/10">
                        Talk to Our Team
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     8. RELATED NEXT STEPS — 3 routes
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="max-w-3xl mb-12 lg:mb-14 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Next Routes</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-5 text-balance">
                The <span class="text-[#148af4]">right next step</span> depends on what your site needs now
            </h2>
            <p class="font-body text-gray-600 leading-relaxed text-pretty">
                Support &amp; Aftercare connects the site to the most practical next action without turning every issue into the same conversation.
            </p>
        </div>

        @php
        $nextRoutes = [
            ['title' => 'Repairs & Call-outs',               'text' => 'For urgent faults, breakdowns or equipment issues affecting daily operation.',                       'cta' => 'View Repairs & Call-outs',              'href' => route('repairs'),           'img' => '/images/healthcare/repairs-callouts.jpg'],
            ['title' => 'Preventive Maintenance',           'text' => 'For recurring faults, planned visits and better control of maintenance pressure.',                  'cta' => 'View Preventive Maintenance',           'href' => route('service-contracts'), 'img' => '/images/healthcare/Service%20Contracts.png'],
            ['title' => 'Equipment Rental',                  'text' => 'For replacement pressure, added capacity or cases where buying outright is not the right option.',  'cta' => 'View Equipment Rental',                 'href' => route('rental'),            'img' => '/images/healthcare/lagoon-advanced-care.webp'],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($nextRoutes as $i => $route)
            <a href="{{ $route['href'] }}"
               class="group relative overflow-hidden h-[420px] rounded-2xl block cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl reveal"
               style="transition-delay:{{ $i * 80 }}ms;">
                <img src="{{ $route['img'] }}" alt="{{ $route['title'] }}"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.55) 40%, transparent 70%);"></div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end items-center text-center">
                    <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-[1.1] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-3 text-balance">{{ $route['title'] }}</h3>
                    <p class="font-body text-white text-sm leading-relaxed mb-5 max-w-xs text-balance">{{ $route['text'] }}</p>
                    <span class="inline-flex items-center justify-center gap-2 bg-[#148af4] group-hover:bg-[#0f70cc] text-white font-body font-bold px-5 py-2.5 rounded-md text-xs transition-colors duration-200 whitespace-nowrap">
                        {{ $route['cta'] }}
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </span>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     9 + 10. TESTIMONIAL / PROOF + TRUSTED BY LOGO STRIP
     ════════════════════════════════════════════════════════════════════════ --}}
@include('components.testimonials', [
    'light'      => true,
    'bordered'   => false,
    'eyebrow'    => 'Customer Trust',
    'heading'    => 'Trusted by sites that need care <span class="text-[#148af4]">beyond the first&nbsp;visit</span>',
    'subheading' => 'Irish Laundry Systems supports healthcare, care home, hospitality and commercial laundry sites where equipment history, follow-up care and clear next steps matter after installation, repair or service.',
])
@include('components.proof-bar')

{{-- ════════════════════════════════════════════════════════════════════════
     11. SUPPORT & AFTERCARE FAQs
     ════════════════════════════════════════════════════════════════════════ --}}
@php
$aftercareFaqs = [
    [
        'question' => 'Is Support & Aftercare only for parts?',
        'answer'   => 'No. Parts may be part of the answer, but Support & Aftercare is wider than that. It can include service history review, follow-up care, genuine parts access where applicable and guidance on the most practical next action.',
    ],
    [
        'question' => 'Do I need a Preventive Maintenance Contract to request support?',
        'answer'   => 'No. Contract and non-contract customers can request guidance. If the issue is recurring or would benefit from planned care, Irish Laundry Systems may recommend reviewing a Preventive Maintenance Contract.',
    ],
    [
        'question' => 'Can Irish Laundry Systems support me if I do not know the part required?',
        'answer'   => 'Yes. Share the machine type, model, serial number if available, photos, fault description and service history. The team can identify what information is needed before confirming the best way forward.',
    ],
    [
        'question' => 'Are parts included in repairs or contracts?',
        'answer'   => 'Parts are not assumed to be included unless specifically agreed. Irish Laundry Systems will advise when parts are required and how they relate to the repair, contract or follow-up work.',
    ],
    [
        'question' => 'Can you review previous service history?',
        'answer'   => 'Yes. Service history can show repeated faults, previous interventions and what the equipment may need next.',
    ],
    [
        'question' => 'Do you support Electrolux Professional equipment?',
        'answer'   => 'Yes. Irish Laundry Systems is an Authorised Electrolux Professional Partner and has experience with Electrolux Professional equipment and genuine parts access where applicable.',
    ],
    [
        'question' => 'What should I do if the machine has an urgent fault?',
        'answer'   => 'Use the Repairs & Call-outs page or contact the team directly. Support & Aftercare is best for follow-up, equipment decisions, parts access where needed and practical guidance after a visit, repair or equipment decision.',
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
<section id="aftercare-form" class="bg-bg py-16 lg:py-24">
    <div class="max-w-4xl mx-auto px-6 sm:px-10">

        <div class="max-w-3xl mx-auto text-center mb-10 lg:mb-12">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Request Support &amp; Aftercare</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-4 text-balance">
                Tell us about your equipment and <span class="text-[#148af4]">what needs&nbsp;attention</span>
            </h2>
            <p class="font-body text-gray-600 leading-relaxed text-pretty">
                Share the details that allow Irish Laundry Systems to review the equipment, service history and practical action required.
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

            <p class="font-body text-gray-500 text-sm mb-6">Share the details that make the next step clearer.</p>

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
                            data-ga-cta="form-send-aftercare-request"
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
     13. FINAL CTA STRIP
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden" style="min-height: 360px; background-color: #148af4;">

    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:42%;">
        <img src="/images/healthcare/repairs-hero.jpg"
             alt="ILS engineer reviewing equipment and the next support step on site"
             class="w-full h-full object-cover"
             style="filter: saturate(0.9) contrast(1.05);">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.72) 25%, rgba(20,138,244,0.35) 55%, transparent 100%);"></div>
    </div>

    <div class="absolute inset-0 pa-dotgrid opacity-25 pointer-events-none"></div>

    <div class="relative max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 lg:py-20 flex items-center" style="min-height:360px;">
        <div class="lg:max-w-[55%]">
            <p class="font-body font-bold text-white text-xs uppercase tracking-[0.22em] mb-4 reveal">Talk to Our Team</p>
            <h2 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-5 reveal text-balance">
                Need a <span class="text-navy">clearer next step</span> for your&nbsp;equipment
            </h2>
            <p class="font-body text-white/90 text-base leading-relaxed mb-6 max-w-2xl reveal text-pretty">
                Tell us what is happening with the equipment, what has already been done and what the site needs now. Irish Laundry Systems will connect the enquiry to the most practical next action.
            </p>
            <div class="mb-8 flex flex-wrap items-center gap-x-4 gap-y-2 font-body text-white/90 text-xs lg:text-sm reveal">
                <span class="whitespace-nowrap">Fewer follow-up surprises</span>
                <span class="text-white/40">|</span>
                <span class="whitespace-nowrap">Clearer next costs</span>
                <span class="text-white/40">|</span>
                <span class="whitespace-nowrap">Support from people who know the equipment</span>
            </div>
            <div class="flex flex-wrap items-center gap-4 reveal">
                <a href="#aftercare-form"
                   data-ga-cta="final-request-aftercare"
                   class="inline-flex items-center justify-center bg-white text-navy hover:bg-white/90 font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 whitespace-nowrap">
                    Request Support &amp; Aftercare
                </a>
                <a href="{{ route('contact') }}"
                   data-ga-cta="final-talk-team"
                   class="inline-flex items-center justify-center border border-white/70 hover:border-white text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 hover:bg-white/10 whitespace-nowrap">
                    Talk to Our Team
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Off-white breathing space before footer --}}
<div class="h-12 lg:h-16 bg-bg"></div>

@endsection