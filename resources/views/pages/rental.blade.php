@extends('layouts.app')

@section('pageTitle', $title ?? 'Commercial Laundry Equipment Rental & Lease | Lower Upfront Cost | Irish Laundry Systems')
@section('metaDescription', $metaDescription ?? 'Rent selected Electrolux Professional commercial laundry equipment with lower upfront cost. Supply, installation, service labour, preventive maintenance, parts and ongoing support included in one agreement.')

@section('content')

<style>
    @keyframes rn_heroFadeUp { from { opacity:0; transform:translateY(24px);} to { opacity:1; transform:translateY(0);} }
    .rn-hero-title { animation: rn_heroFadeUp 0.7s ease forwards; }
    .rn-hero-desc  { animation: rn_heroFadeUp 0.7s ease 0.2s forwards; opacity:0; }
    .rn-hero-btns  { animation: rn_heroFadeUp 0.7s ease 0.4s forwards; opacity:0; }
    @media (prefers-reduced-motion: reduce){ .rn-hero-title,.rn-hero-desc,.rn-hero-btns{ animation:none; opacity:1; transform:none; } }
    .rn-dotgrid { background-image: radial-gradient(rgba(255,255,255,0.08) 1px, transparent 1px); background-size: 22px 22px; }

    /* How Rental Works — step gallery (mirrors aftercare/service-contracts) */
    .rn-visit-card { position: relative; overflow: hidden; min-height: 520px; flex: 1 1 33.333%; }
    .rn-visit-card img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; object-position: center; transition: transform 0.6s ease; }
    .rn-visit-card:hover img { transform: scale(1.06); }
    .rn-visit-card::before { content: ''; position: absolute; inset: 0; background: linear-gradient(to top, rgba(1,30,65,0.90) 0%, rgba(1,30,65,0.35) 55%, rgba(1,30,65,0.10) 100%); z-index: 1; transition: opacity 0.4s; }
    .rn-visit-card::after { content: ''; position: absolute; inset: 0; background: rgba(1,30,65,0.90); z-index: 2; opacity: 0; visibility: hidden; transition: opacity 0.4s, visibility 0.4s; }
    .rn-visit-card:hover::before { opacity: 0; }
    .rn-visit-card:hover::after { opacity: 1; visibility: visible; }
    .rn-vcap1 { position: absolute; bottom: 28px; left: 32px; z-index: 3; transition: opacity 0.35s ease, transform 0.35s ease; }
    .rn-vcap1 .rn-num { color: #148af4; font-size: 2.6rem; font-weight: 700; line-height: 1; display: block; margin-bottom: 6px; }
    .rn-vcap1 h4 { color: #fff; font-size: 1rem; font-weight: 700; line-height: 1.3; margin: 0; }
    .rn-visit-card:hover .rn-vcap1 { opacity: 0; transform: translateY(16px); }
    .rn-vcap2 { position: absolute; top: 50%; left: 32px; right: 32px; transform: translateY(-40%); z-index: 5; opacity: 0; transition: opacity 0.4s ease, transform 0.4s ease; }
    .rn-visit-card:hover .rn-vcap2 { opacity: 1; transform: translateY(-50%); }
    .rn-vcap2 .rn-num { color: #148af4; font-size: 2.6rem; font-weight: 700; line-height: 1; display: block; margin-bottom: 12px; }
    .rn-vcap2 h4 { color: #fff; font-size: 1.1rem; font-weight: 700; margin-bottom: 12px; }
    .rn-vcap2 p { color: rgba(255,255,255,0.72); font-size: 0.85rem; line-height: 1.65; }
    @media (max-width: 767px) { .rn-visit-card { min-height: 300px; flex: 1 1 50%; } }
    @media (max-width: 479px) { .rn-visit-card { min-height: 260px; flex: 1 1 100%; } }
</style>

{{-- ════════════ 2. HERO ════════════ --}}
<section class="relative overflow-hidden" style="height: 720px; min-height: 560px; background-color: #011E41;">
    <img src="/images/hero/rental-hero.webp"
         alt="Commercial laundry equipment supplied and installed by Irish Laundry Systems"
         loading="eager" decoding="async"
         class="absolute inset-0 w-full h-full object-cover object-right">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.96) 0%, rgba(1,30,65,0.90) 25%, rgba(1,30,65,0.65) 45%, rgba(1,30,65,0.25) 65%, transparent 82%);"></div>

    <div class="relative z-10 h-full flex items-center w-full">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16">
            <div style="max-width: 720px;">
                <p class="rn-hero-desc font-body font-bold text-[#148af4] uppercase tracking-widest text-xs mb-5" style="opacity:1;">Equipment Rental &amp; Lease</p>
                <h1 class="rn-hero-title font-heading font-bold text-white leading-[1.05] tracking-tight mb-6 text-4xl lg:text-5xl xl:text-5xl text-balance">
                    Commercial laundry equipment rental with <span class="text-[#148af4]">lower upfront&nbsp;cost</span>
                </h1>
                <p class="rn-hero-desc font-body text-blue-200 text-base lg:text-lg leading-relaxed mb-10 max-w-xl text-pretty">
                    Irish Laundry Systems rental agreements give commercial laundry sites access to selected Electrolux Professional equipment without one large upfront purchase. Equipment supply, installation, service labour, preventive maintenance, parts and ongoing technical support are included in one complete agreement.
                </p>
                <div class="rn-hero-btns flex flex-row flex-wrap gap-4">
                    <a href="#quote-form" data-ga-cta="hero-request-quote"
                       class="inline-flex items-center justify-center bg-[#148af4] hover:bg-[#0f70cc] text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 whitespace-nowrap">
                        Request a Quote
                    </a>
                    <a href="{{ route('contact') }}" data-ga-cta="hero-talk-team"
                       class="inline-flex items-center justify-center border border-white/50 hover:border-white text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 hover:bg-white/10 whitespace-nowrap">
                        Talk to Our Team
                    </a>
                </div>
                <div class="rn-hero-btns mt-8 flex flex-wrap items-center gap-x-5 gap-y-2 font-body text-white/70 text-xs">
                    <span class="whitespace-nowrap">Selected Electrolux Professional equipment</span>
                    <span class="w-px h-3 bg-white/25 hidden sm:block" aria-hidden="true"></span>
                    <span class="whitespace-nowrap">Supply and installation included</span>
                    <span class="w-px h-3 bg-white/25 hidden sm:block" aria-hidden="true"></span>
                    <span class="whitespace-nowrap">Service support throughout the agreement</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ════════════ 3. THIN ELECTROLUX TRUST STRIP ════════════ --}}
@include('components.partner-strip')

{{-- ════════════ 4. RENTAL INTRO / BRIDGE ════════════ --}}
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">
            <div class="reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Why Rental</p>
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl 2xl:text-6xl leading-tight text-balance">
                    A <span class="text-[#148af4]">simpler&nbsp;way</span> to put professional laundry equipment in place
                </h2>
            </div>
            <div class="flex flex-col gap-4 reveal" style="transition-delay:120ms;">
                <p class="font-body text-gray-600 text-lg leading-relaxed text-pretty">
                    Buying commercial laundry equipment outright is not always the best fit for every site. Rental can help protect capital, make equipment costs easier to plan and keep supply, installation, servicing, parts and support connected under one agreement.
                </p>
                <p class="font-body text-gray-600 text-lg leading-relaxed text-pretty">
                    Irish Laundry Systems supplies, installs and supports the selected equipment throughout the rental term, giving your site one complete solution from supply to support.
                </p>
                <a href="#quote-form" class="inline-flex items-center gap-2 bg-navy hover:bg-navy-dark text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200 mt-4 w-fit">
                    Request a Quote
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ════════════ 5. WHAT YOU GAIN ════════════ --}}
<section class="bg-bg py-16 lg:py-24">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="max-w-3xl mb-12 lg:mb-14 reveal">
            <p class="font-body font-bold text-[#148af4] uppercase tracking-widest text-xs mb-4">Rental Benefits</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-5 text-balance">
                <span class="text-[#148af4]">What you&nbsp;gain</span> with an Irish Laundry Systems rental agreement
            </h2>
            <p class="font-body text-gray-600 text-lg leading-relaxed text-pretty">
                Rental is designed for sites that want professional laundry equipment without one large upfront purchase, with service, parts and support built into the agreement from the start.
            </p>
        </div>

        @php
        $gainCards = [
            ['title' => 'No large capital outlay',
             'body'  => 'Avoid one large upfront equipment purchase and keep more budget available for other operational needs.',
             'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>'],
            ['title' => 'Equipment supply and installation included',
             'body'  => 'Irish Laundry Systems supplies and installs the selected Electrolux Professional equipment as part of the rental agreement.',
             'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-5.25m0-11.25h2.25c.621 0 1.125.504 1.125 1.125v9m-9-12v9.75M7.5 6.75v9.75"/>'],
            ['title' => 'Fixed rental fee',
             'body'  => 'A fixed rental fee for the contract period gives your site clearer budgeting and better control over equipment cost.',
             'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z"/>'],
            ['title' => 'Service and labour included',
             'body'  => 'Service labour is included, giving your team less to arrange separately when equipment support is needed.',
             'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26"/>'],
            ['title' => 'Preventive maintenance service and parts included',
             'body'  => 'Preventive maintenance service and replacement parts are included in the rental agreement, except filters and consumables.',
             'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z"/>'],
            ['title' => 'Support throughout the agreement',
             'body'  => 'Irish Laundry Systems supports the rented equipment throughout the agreement, giving your site more peace of mind after installation.',
             'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155"/>'],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($gainCards as $i => $card)
            <div class="reveal group bg-white border border-border rounded-2xl p-7 lg:p-8 flex flex-col shadow-card transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl" style="transition-delay:{{ $i * 70 }}ms;">
                <svg class="w-11 h-11 text-[#148af4] mb-5 transition-transform duration-300 group-hover:-translate-y-0.5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">{!! $card['icon'] !!}</svg>
                <h3 class="font-heading font-bold text-navy text-lg lg:text-xl mb-3 leading-snug text-balance">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed text-pretty">{{ $card['body'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ════════════ 6. WHAT'S INCLUDED IN THE RENTAL AGREEMENT ════════════ --}}
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="max-w-3xl mb-12 lg:mb-14 reveal">
            <p class="font-body font-bold text-[#148af4] uppercase tracking-widest text-xs mb-4">Agreement Inclusions</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-5 text-balance">
                One complete solution from <span class="text-[#148af4]">supply to&nbsp;support</span>
            </h2>
            <p class="font-body text-gray-600 text-lg leading-relaxed text-pretty">
                Rental keeps the main equipment needs in one place: supply, delivery, installation, service labour, preventive maintenance, parts and support. That means fewer separate decisions for your team to manage after the equipment is installed.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-stretch">
            <div class="lg:col-span-5 reveal reveal-left">
                <div class="relative rounded-3xl overflow-hidden bg-navy shadow-xl h-72 sm:h-96 lg:h-full">
                    <img src="/images/hero/on-site-diagnosis.jpeg"
                         alt="Irish Laundry Systems engineer installing and commissioning rented commercial laundry equipment"
                         loading="lazy" decoding="async"
                         class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-x-0 bottom-0 h-1/3" style="background: linear-gradient(to top, rgba(1,15,42,0.55) 0%, transparent 100%);" aria-hidden="true"></div>
                    <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-3xl pointer-events-none"></div>
                </div>
            </div>

            <div class="lg:col-span-7">
                @php
                $includedItems = [
                    ['title' => 'Selected equipment supply',                       'text' => 'Irish Laundry Systems supplies the agreed Electrolux Professional laundry equipment for the site.'],
                    ['title' => 'Delivery and installation included',              'text' => 'Delivery and installation are included as part of the rental agreement.'],
                    ['title' => 'Service labour included',                         'text' => 'Service labour is included during the agreement, for a clearer support arrangement.'],
                    ['title' => 'Preventive maintenance included',                 'text' => 'Preventive maintenance is included to keep rented equipment serviced and easy to manage.'],
                    ['title' => 'Parts included except filters and consumables',   'text' => 'Replacement parts are included within the rental agreement, except filters and consumables.'],
                    ['title' => 'Breakdown support included',                      'text' => 'Service and breakdown support are included, so you avoid arranging support separately.'],
                    ['title' => 'Support throughout the agreement',                'text' => 'Irish Laundry Systems provides ongoing technical support during the rental term.'],
                    ['title' => 'Serviced by Irish Laundry Systems engineers',     'text' => 'Rented machines are serviced only by Irish Laundry Systems engineers during the term.'],
                ];
                @endphp
                <ul class="space-y-4">
                    @foreach ($includedItems as $i => $item)
                    <li class="flex items-start gap-4 reveal" style="transition-delay:{{ $i * 50 }}ms;">
                        <div class="flex-shrink-0 w-8 h-8 rounded-full bg-[#148af4]/10 ring-1 ring-inset ring-[#148af4]/30 flex items-center justify-center mt-0.5">
                            <svg class="w-4 h-4 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                            </svg>
                        </div>
                        <div class="min-w-0">
                            <h3 class="font-heading font-bold text-navy text-base lg:text-lg leading-snug mb-1">{{ $item['title'] }}</h3>
                            <p class="font-body text-gray-600 text-sm lg:text-base leading-relaxed">{{ $item['text'] }}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- ════════════ 7. RENTAL VS OUTRIGHT PURCHASE ════════════ --}}
<section class="bg-bg py-16 lg:py-24">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="max-w-3xl mb-12 lg:mb-14 reveal">
            <p class="font-body font-bold text-[#148af4] uppercase tracking-widest text-xs mb-4">Compare Options</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-5 text-balance">
                Choose the equipment option that <span class="text-[#148af4]">fits how your site&nbsp;budgets</span>
            </h2>
            <p class="font-body text-gray-600 text-lg leading-relaxed text-pretty">
                Rental and outright purchase both have their place. The right decision depends on capital planning, equipment needs, support requirements and how much your site wants included from the start.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8 items-start">
            {{-- Rental / Lease --}}
            <div class="reveal bg-white border-2 border-[#148af4] rounded-2xl p-7 lg:p-9 shadow-card flex flex-col h-full">
                <h3 class="font-heading font-bold text-navy text-2xl mb-5">Rental / Lease</h3>
                <ul class="space-y-3 mb-6">
                    @foreach ([
                        'No large capital outlay',
                        'Equipment supply and installation included',
                        'Fixed rental fee for the contract period',
                        'Service and labour included',
                        'Preventive maintenance service included',
                        'Parts included except filters and consumables',
                        'Support throughout the agreement',
                        'One complete solution from supply to support',
                    ] as $item)
                    <li class="flex items-start gap-3 font-body text-sm lg:text-base">
                        <svg class="w-5 h-5 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                        <span class="text-gray-700">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
                <div class="mt-auto pt-5 border-t border-gray-100">
                    <p class="font-body text-gray-500 text-sm leading-relaxed text-pretty">
                        <span class="font-bold text-navy">Best for:</span> Sites that want selected Electrolux Professional laundry equipment with lower upfront cost, clearer budgeting and less to arrange separately after installation.
                    </p>
                </div>
            </div>

            {{-- Outright Purchase --}}
            <div class="reveal bg-white border border-border rounded-2xl p-7 lg:p-9 flex flex-col h-full" style="transition-delay:100ms;">
                <h3 class="font-heading font-bold text-navy text-2xl mb-5">Outright Purchase</h3>
                <ul class="space-y-3 mb-6">
                    @foreach ([
                        'Full ownership of the equipment from day one',
                        'One-time capital purchase',
                        'No rental agreement commitment',
                        'Equipment becomes a site-owned asset',
                        'Maintenance arranged separately',
                        'New equipment includes a 12-month parts warranty',
                        'Service contracts can be discussed separately',
                    ] as $item)
                    <li class="flex items-start gap-3 font-body text-sm lg:text-base">
                        <svg class="w-5 h-5 text-navy/50 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                        <span class="text-gray-700">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
                <div class="mt-auto pt-5 border-t border-gray-100">
                    <p class="font-body text-gray-500 text-sm leading-relaxed text-pretty">
                        <span class="font-bold text-navy">Best for:</span> Sites that prefer to buy equipment outright and manage servicing, maintenance and future support separately or through a separate maintenance contract.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ════════════ 8. HOW RENTAL WORKS ════════════ --}}
<section class="w-full overflow-hidden bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 lg:py-20">
        <p class="font-body font-bold text-[#148af4] uppercase tracking-[0.22em] text-xs mb-4 reveal">How Rental Works</p>
        <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-5 max-w-3xl reveal text-balance" style="transition-delay:80ms;">
            From equipment need to <span class="text-[#148af4]">supplied, installed and&nbsp;supported</span>
        </h2>
        <p class="font-body text-gray-600 text-lg leading-relaxed max-w-2xl reveal text-pretty" style="transition-delay:160ms;">
            A simple process keeps the rental conversation focused on the site, the equipment and what needs to be included during the agreement.
        </p>
    </div>

    <div style="display:flex; flex-wrap:wrap;">
        @foreach([
            ['num' => '01.', 'title' => 'Tell us what you need',       'body' => 'Share the equipment type, site, laundry demand, current pressure and whether you are considering rental, lease or purchase.', 'img' => '/images/healthcare/customer-care-line6000.jpg'],
            ['num' => '02.', 'title' => 'We confirm the right fit',     'body' => 'Irish Laundry Systems reviews the available Electrolux Professional range, site needs, installation requirements and the support included in the agreement.', 'img' => '/images/healthcare/service-contracts-hero.jpg'],
            ['num' => '03.', 'title' => 'We supply it and support it',  'body' => 'Once agreed, the selected equipment is supplied, installed and supported throughout the rental agreement.', 'img' => '/images/healthcare/repairs-callouts.jpg'],
        ] as $step)
        <div class="rn-visit-card">
            <img src="{{ asset(ltrim($step['img'], '/')) }}" alt="{{ $step['title'] }}" loading="lazy">
            <div class="rn-vcap1">
                <span class="rn-num">{{ $step['num'] }}</span>
                <h4>{{ $step['title'] }}</h4>
            </div>
            <div class="rn-vcap2">
                <span class="rn-num">{{ $step['num'] }}</span>
                <h4>{{ $step['title'] }}</h4>
                <p>{{ $step['body'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>

{{-- ════════════ 9. WHERE RENTAL FITS ════════════ --}}
<section class="bg-bg py-16 lg:py-24">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="max-w-3xl mb-10 lg:mb-12 reveal">
            <p class="font-body font-bold text-[#148af4] uppercase tracking-widest text-xs mb-4">Where Rental Fits</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-5 text-balance">
                Rental for sites that want equipment access with <span class="text-[#148af4]">support built&nbsp;in</span>
            </h2>
            <p class="font-body text-gray-600 text-lg leading-relaxed text-pretty">
                Rental can be a good fit for sites that need selected Electrolux Professional laundry equipment without one large capital purchase, while keeping service, parts and support included throughout the agreement.
            </p>
        </div>

        @php
        $rentalFits = [
            ['label' => 'Care facilities managing daily resident laundry demand',
             'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z"/>'],
            ['label' => 'Healthcare environments with essential laundry needs',
             'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"/>'],
            ['label' => 'Hospitality sites managing linen flow and room readiness',
             'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M12 12.75h.008v.008H12v-.008Z"/>'],
            ['label' => 'Commercial and industrial sites with high-use laundry equipment',
             'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.75A.75.75 0 0 1 9.75 16.5h4.5a.75.75 0 0 1 .75.75V21"/>'],
            ['label' => 'Shared-use and managed residential laundry rooms',
             'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>'],
        ];
        @endphp
        <div class="flex flex-wrap justify-center gap-4">
            @foreach ($rentalFits as $i => $fit)
            <div class="reveal group bg-white border border-border rounded-2xl p-6 flex items-start gap-4 w-full sm:w-[calc(50%-0.5rem)] lg:w-[calc(33.333%-0.7rem)] transition-all duration-300 hover:-translate-y-1 hover:border-[#148af4]/40 hover:shadow-card" style="transition-delay:{{ $i * 60 }}ms;">
                <svg class="w-9 h-9 text-[#148af4] flex-shrink-0 transition-transform duration-300 group-hover:-translate-y-0.5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">{!! $fit['icon'] !!}</svg>
                <span class="font-body text-navy text-sm lg:text-base font-bold leading-snug">{{ $fit['label'] }}</span>
            </div>
            @endforeach
        </div>

        <div class="mt-8 flex flex-col sm:flex-row sm:items-center gap-4 reveal">
            <p class="font-body text-gray-500 text-sm leading-relaxed text-pretty max-w-2xl">
                Rental suitability depends on the available Electrolux Professional equipment range, site requirements and agreement terms.
            </p>
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy-dark text-white font-body font-bold px-6 py-3.5 rounded-lg text-sm transition-colors duration-200 whitespace-nowrap sm:ml-auto">
                Talk to Our Team
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- ════════════ 10. RENTAL FIT / PLANNING BLOCK ════════════ --}}
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Site Planning</p>
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance">
                    Make sure rental <span class="text-[#148af4]">fits the room, workload and&nbsp;budget</span>
                </h2>
                <p class="font-body text-gray-600 text-lg leading-relaxed mt-5 text-pretty">
                    Before a rental agreement is confirmed, the equipment choice, room layout, utilities, access, laundry demand and support needs should be reviewed together. Irish Laundry Systems helps confirm whether rental is the right fit for the site.
                </p>
                <div class="mt-6 flex flex-wrap items-center gap-x-4 gap-y-2 font-body text-gray-500 text-sm">
                    <span class="whitespace-nowrap">Right-fit equipment</span>
                    <span class="w-px h-3 bg-gray-300 hidden sm:block" aria-hidden="true"></span>
                    <span class="whitespace-nowrap">Clearer rental cost</span>
                    <span class="w-px h-3 bg-gray-300 hidden sm:block" aria-hidden="true"></span>
                    <span class="whitespace-nowrap">Planned around your site</span>
                </div>
                <a href="#quote-form" class="inline-flex items-center gap-2 bg-[#148af4] hover:bg-[#0f70cc] text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 mt-7 w-fit">
                    Request a Quote
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            @php
            $planProof = [
                ['title' => 'Right-fit equipment', 'text' => 'Equipment matched to the site, space and laundry demand.',
                 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>'],
                ['title' => 'Clearer rental cost', 'text' => 'Fixed rental fee confirmed before the agreement.',
                 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/>'],
                ['title' => 'Planned around your site', 'text' => 'Equipment supply, installation and support are planned around your room, workload and rental agreement.',
                 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/>'],
            ];
            @endphp
            <div class="flex flex-col reveal" style="transition-delay:120ms;">
                @foreach ($planProof as $i => $p)
                <div class="flex items-start gap-5 py-6 border-t border-gray-100 first:border-t-0 first:pt-0 last:pb-0">
                    <svg class="w-12 h-12 lg:w-14 lg:h-14 text-[#148af4] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.4" stroke="currentColor">{!! $p['icon'] !!}</svg>
                    <div>
                        <h3 class="font-heading font-bold text-navy text-lg lg:text-xl mb-1.5 leading-snug">{{ $p['title'] }}</h3>
                        <p class="font-body text-gray-600 text-sm lg:text-base leading-relaxed text-pretty">{{ $p['text'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ════════════ 11. SUPPORT DURING THE AGREEMENT BLOCK (#148AF4) ════════════ --}}
<section class="relative overflow-hidden" style="min-height: 420px; background-color: #148af4;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:42%;">
        <img src="/images/healthcare/engineer.jpg" alt="Irish Laundry Systems engineer supporting rented commercial laundry equipment"
             loading="lazy" decoding="async" class="w-full h-full object-cover">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.72) 25%, rgba(20,138,244,0.35) 55%, transparent 100%);"></div>
    </div>
    <div class="absolute inset-0 rn-dotgrid opacity-25 pointer-events-none"></div>

    <div class="relative max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 lg:py-20 flex items-center" style="min-height:420px;">
        <div class="lg:max-w-[58%]">
            <p class="font-body font-bold text-white uppercase tracking-widest text-xs mb-4 reveal">During the Agreement</p>
            <h2 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-5 reveal text-balance">
                We supply it, install it and <span class="text-navy">take care of&nbsp;it</span>
            </h2>
            <p class="font-body text-white/90 text-base lg:text-lg leading-relaxed mb-4 max-w-2xl reveal text-pretty">
                With rental, Irish Laundry Systems takes care of more than the equipment. Supply, installation, service labour, preventive maintenance and replacement parts are included in the agreement, with filters and consumables excluded.
            </p>
            <p class="font-body text-white/90 text-base lg:text-lg leading-relaxed mb-7 max-w-2xl reveal text-pretty">
                That means less for your team to arrange separately, clearer support during the rental term and more peace of mind after installation.
            </p>
            <div class="mb-8 flex flex-wrap items-center gap-x-5 gap-y-2 font-body text-white/90 text-xs lg:text-sm reveal">
                <span class="inline-flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-white"></span>Service labour included</span>
                <span class="text-white/40">|</span>
                <span class="inline-flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-white"></span>Preventive maintenance included</span>
                <span class="text-white/40">|</span>
                <span class="inline-flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-white"></span>Parts included except filters and consumables</span>
            </div>
            <div class="flex flex-wrap items-center gap-4 reveal">
                <a href="#quote-form" class="inline-flex items-center justify-center bg-white text-navy hover:bg-white/90 font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 whitespace-nowrap">Request a Quote</a>
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center border border-white/70 hover:border-white text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 hover:bg-white/10 whitespace-nowrap">Talk to Our Team</a>
            </div>
        </div>
    </div>
</section>

{{-- ════════════ 12. TRUSTED BY / CLIENT LOGO STRIP ════════════ --}}
@include('components.proof-bar')

{{-- ════════════ 13. RENTAL FAQs ════════════ --}}
@php
$rentalFaqs = [
    ['question' => 'What is included in an Irish Laundry Systems rental agreement?',
     'answer'   => 'Rental agreements include selected equipment supply, delivery, installation, service labour, preventive maintenance service, replacement parts except filters and consumables, breakdown support and ongoing technical support throughout the agreement.'],
    ['question' => 'How long is the rental agreement?',
     'answer'   => 'Irish Laundry Systems rental agreements have a minimum term of 3 years.'],
    ['question' => 'How is the rental fee calculated?',
     'answer'   => 'The rental fee is based on the equipment list price and the contract term. Irish Laundry Systems will confirm the rental fee in the proposal.'],
    ['question' => 'Is the rental fee fixed?',
     'answer'   => 'Yes. The rental fee is fixed for the contract period.'],
    ['question' => 'How is rental usually invoiced?',
     'answer'   => 'Rental is typically invoiced quarterly in advance.'],
    ['question' => 'Is a deposit required?',
     'answer'   => 'A deposit is not normally required, but agreement terms are confirmed during the proposal stage.'],
    ['question' => 'Are parts included?',
     'answer'   => 'Yes. Replacement parts are included within the rental agreement, except filters and consumables.'],
    ['question' => 'Are filters and consumables included?',
     'answer'   => 'No. Filters and consumables are excluded and are charged separately where required.'],
    ['question' => 'Who repairs or services rented machines?',
     'answer'   => 'Only Irish Laundry Systems engineers may repair or service rented machines during the agreement.'],
    ['question' => 'Can I buy equipment outright instead?',
     'answer'   => 'Yes. Outright purchase may be the better fit where a site wants full ownership from day one and prefers to manage servicing separately or through a separate maintenance contract.'],
    ['question' => 'Is rental right for every site?',
     'answer'   => 'Not always. Rental suitability depends on the available Electrolux Professional equipment range, site requirements, installation needs and agreement terms.'],
    ['question' => 'What is excluded from a rental agreement?',
     'answer'   => 'Exclusions can include filters, consumables, electrical or plumbing work beyond disconnect, misuse, malicious damage and freezing damage. Irish Laundry Systems will confirm the relevant terms during the proposal stage.'],
];
@endphp
@include('components.faq', [
    'eyebrow' => 'Rental FAQs',
    'heading' => 'Questions before requesting a <span class="text-[#148af4]">rental quote</span>',
    'faqs'    => $rentalFaqs,
])

{{-- ════════════ 14. FINAL RENTAL QUOTE FORM ════════════ --}}
<section id="quote-form" class="bg-bg py-16 lg:py-24">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">

            {{-- Left: heading + contact --}}
            <div class="lg:col-span-5 reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] uppercase tracking-widest text-xs mb-4">Request a Quote</p>
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-5 text-balance">
                    Ready to discuss <span class="text-[#148af4]">rental or lease&nbsp;options</span>
                </h2>
                <p class="font-body text-gray-600 text-lg leading-relaxed mb-8 text-pretty">
                    Tell us what equipment you need, what the site is dealing with and whether you are considering rental, lease or outright purchase. Irish Laundry Systems will review the requirement and confirm the right next step.
                </p>

                <div class="space-y-4">
                    <a href="tel:+35314910402" class="flex items-center gap-3 group">
                        <span class="w-10 h-10 rounded-lg bg-[#148af4]/10 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/></svg>
                        </span>
                        <span class="font-body text-navy font-bold group-hover:text-[#148af4] transition-colors">+353 1 491 0402</span>
                    </a>
                    <a href="mailto:info@ils.ie" class="flex items-center gap-3 group">
                        <span class="w-10 h-10 rounded-lg bg-[#148af4]/10 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/></svg>
                        </span>
                        <span class="font-body text-navy font-bold group-hover:text-[#148af4] transition-colors">info@ils.ie</span>
                    </a>
                    <div class="flex items-center gap-3">
                        <span class="w-10 h-10 rounded-lg bg-[#148af4]/10 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/></svg>
                        </span>
                        <span class="font-body text-navy font-bold">Dublin &amp; Ireland-wide service</span>
                    </div>
                </div>
            </div>

            {{-- Right: form card --}}
            <div class="lg:col-span-7 reveal" style="transition-delay:120ms;">
                <div class="bg-white rounded-2xl shadow-card p-8 lg:p-10">
                    @if (session('success'))
                    <div class="bg-green-50 border border-green-200 rounded-xl p-5 mb-6">
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-green-600 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
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
                            <li class="font-body text-red-600 text-sm flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-red-500 flex-shrink-0"></span>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <p class="font-body text-gray-500 text-sm mb-6">Share the details that help direct the enquiry properly.</p>

                    <form id="rental-quote-form" action="{{ route('contact.submit') }}" method="POST" class="space-y-5" data-utm>
                        @csrf
                        <input type="hidden" name="request_type" value="rental">
                        <input type="hidden" name="urgency" value="planning">
                        <input type="hidden" name="page_source" value="rental">
                        <input type="hidden" name="utm_source">
                        <input type="hidden" name="utm_medium">
                        <input type="hidden" name="utm_campaign">
                        <input type="hidden" name="utm_content">
                        <input type="hidden" name="utm_term">

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

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
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
                            <div>
                                <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Site location <span class="text-red-400">*</span></label>
                                <input type="text" name="location" required value="{{ old('location') }}" placeholder="e.g. Dublin, Cork..."
                                       class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 placeholder-gray-400 transition-all">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Current laundry setup</label>
                                <input type="text" name="current_setup" value="{{ old('current_setup') }}" placeholder="Machines / age / current arrangement"
                                       class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 placeholder-gray-400 transition-all">
                            </div>
                            <div>
                                <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Equipment required</label>
                                <input type="text" name="equipment" value="{{ old('equipment') }}" placeholder="Washers, dryers, ironers..."
                                       class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 placeholder-gray-400 transition-all">
                            </div>
                        </div>

                        <div>
                            <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Are you considering rental, lease or purchase?</label>
                            <select name="rental_intent"
                                    class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 cursor-pointer transition-all">
                                <option value="">Select</option>
                                <option value="Rental">Rental</option>
                                <option value="Lease">Lease</option>
                                <option value="Outright purchase">Outright purchase</option>
                                <option value="Not sure yet">Not sure yet</option>
                            </select>
                        </div>

                        <div>
                            <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Message</label>
                            <textarea name="message" rows="4" placeholder="Anything else that would help us review the requirement."
                                      class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 placeholder-gray-400 resize-none leading-relaxed transition-all">{{ old('message') }}</textarea>
                        </div>

                        <label class="flex items-start gap-3 cursor-pointer">
                            <input type="checkbox" name="gdpr_consent" required value="1" {{ old('gdpr_consent') ? 'checked' : '' }}
                                   class="mt-0.5 w-4 h-4 rounded border-gray-300 text-navy focus:ring-navy/30 flex-shrink-0 cursor-pointer">
                            <span class="font-body text-xs text-gray-500 leading-relaxed">
                                I agree to ILS processing my details to respond to this enquiry. <span class="text-red-400">*</span>
                                <a href="{{ route('privacy') }}" class="underline hover:text-navy transition-colors" target="_blank">Privacy Policy</a>.
                            </span>
                        </label>

                        <div class="pt-2 flex flex-col sm:flex-row gap-3">
                            <button type="submit" data-ga-cta="form-request-quote"
                                    class="inline-flex items-center justify-center bg-[#148af4] hover:bg-[#0f70cc] text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200">
                                Request a Quote
                                <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/></svg>
                            </button>
                            <a href="{{ route('contact') }}"
                               class="inline-flex items-center justify-center border border-navy/20 hover:border-navy text-navy font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200">
                                Talk to Our Team
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Merge rental-specific fields into message (no backend change) --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    var f = document.getElementById('rental-quote-form');
    if (!f) return;
    f.addEventListener('submit', function () {
        var setup = f.querySelector('[name="current_setup"]');
        var intent = f.querySelector('[name="rental_intent"]');
        var msg = f.querySelector('[name="message"]');
        if (!msg) return;
        var extra = [];
        if (setup && setup.value) extra.push('Current laundry setup: ' + setup.value);
        if (intent && intent.value) extra.push('Considering: ' + intent.value);
        if (extra.length) { msg.value = (msg.value ? msg.value + '\n\n' : '') + extra.join('\n'); }
        if (setup) setup.removeAttribute('name');
        if (intent) intent.removeAttribute('name');
    });
});
</script>

@endsection
