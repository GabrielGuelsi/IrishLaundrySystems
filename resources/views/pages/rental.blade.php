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
<section class="relative overflow-hidden lg:!h-[720px]" style="height: auto; min-height: 520px; background-color: #011E41;">
    <img src="/images/pages/equipmentrentalhero.png"
         alt="Commercial laundry equipment supplied and installed by Irish Laundry Systems"
         loading="eager" decoding="async"
         class="absolute inset-0 w-full h-full object-cover object-right">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.96) 0%, rgba(1,30,65,0.90) 25%, rgba(1,30,65,0.65) 45%, rgba(1,30,65,0.25) 65%, transparent 82%);"></div>

    <div class="relative z-10 h-full flex items-center w-full py-16 lg:py-0">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16">
            <div style="max-width: 720px;">
                <p class="rn-hero-desc font-body font-bold text-[#148af4] uppercase tracking-[0.22em] text-xs mb-5" style="opacity:1;">Equipment Rental &amp; Lease</p>
                <h1 class="rn-hero-title font-heading font-bold text-white leading-[1.05] tracking-tight mb-6 text-3xl sm:text-4xl lg:text-5xl text-balance">
                    Rent the laundry equipment your site needs with <span class="text-[#148af4]">lower upfront&nbsp;cost</span>
                </h1>
                <p class="rn-hero-desc font-body text-blue-200 text-base leading-relaxed mb-10 max-w-2xl text-pretty">
                    A rental agreement gives your site access to selected Electrolux Professional equipment with supply, installation, servicing, planned maintenance and ongoing support included.
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
            </div>
        </div>
    </div>
</section>

{{-- ════════════ 3. THIN ELECTROLUX TRUST STRIP ════════════ --}}
@include('components.partner-strip')

{{-- ════════════ 4. RENTAL INTRO / BRIDGE ════════════ --}}
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Why Rental</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">
            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    Keep capital available while <span class="text-[#148af4]">your laundry stays&nbsp;equipped</span>
                </h2>
            </div>
            <div class="flex flex-col gap-4 reveal" style="transition-delay:120ms;">
                <p class="font-body text-gray-600 text-base leading-relaxed text-pretty">
                    Rental can help your site plan equipment costs without committing to one large purchase. Irish Laundry Systems supplies, installs, services and supports selected Electrolux Professional equipment under one agreement.
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
<section class="py-12 lg:py-16 bg-navy">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="max-w-3xl mx-auto text-center mb-10 lg:mb-12">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4 reveal">Rental Benefits</p>
            <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight tracking-tight mb-5 reveal text-balance" style="transition-delay:80ms;">
                Lower upfront cost, included support and <span class="text-[#148af4]">more peace of&nbsp;mind</span>
            </h2>
            <p class="font-body text-white/70 text-base leading-relaxed reveal text-pretty" style="transition-delay:160ms;">
                Rental is designed for sites that want selected professional laundry equipment without one large upfront purchase, with the main support needs built into the agreement from the start.
            </p>
        </div>

        @php
        $gainCards = [
            ['title' => 'No large capital outlay',
             'img'   => '/images/icons/rental-gain-115.png',
             'body'  => 'Avoid one large equipment purchase and keep more budget available for other operational needs.',
             'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>'],
            ['title' => 'Supply and installation included',
             'img'   => '/images/icons/rental-gain-119.png',
             'body'  => 'Irish Laundry Systems supplies and installs the selected Electrolux Professional equipment as part of the rental agreement.',
             'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-5.25m0-11.25h2.25c.621 0 1.125.504 1.125 1.125v9m-9-12v9.75M7.5 6.75v9.75"/>'],
            ['title' => 'Fixed rental fee',
             'img'   => '/images/icons/206.png',
             'body'  => 'A fixed rental fee for the contract period gives your site clearer budgeting and better control over equipment cost.',
             'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z"/>'],
            ['title' => 'Service labour included',
             'img'   => '/images/icons/rental-gain-118.png',
             'body'  => 'Service labour is included, giving your team less to arrange separately when support is needed.',
             'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26"/>'],
            ['title' => 'Preventive maintenance and parts included',
             'img'   => '/images/icons/rental-gain-116.png',
             'body'  => 'Preventive maintenance service and replacement parts are included, except filters and consumables.',
             'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z"/>'],
            ['title' => 'Support throughout the agreement',
             'img'   => '/images/icons/rental-gain-120.png',
             'body'  => 'Irish Laundry Systems supports the rented equipment throughout the agreement, giving your site more peace of mind after installation.',
             'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155"/>'],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-5">
            @foreach ($gainCards as $i => $card)
            <article class="card-hover group relative bg-white rounded-2xl border border-navy/5 p-6 lg:p-7 flex flex-col gap-3 reveal transition-all duration-300 ease-out hover:shadow-[0_20px_40px_-15px_rgba(1,30,65,0.25)]" style="transition-delay:{{ $i * 60 }}ms;">
                @if (!empty($card['img']))
                    <img src="{{ $card['img'] }}" alt="" aria-hidden="true" class="w-24 h-24 object-contain">
                @else
                <svg class="w-11 h-11 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">{!! $card['icon'] !!}</svg>
                @endif
                <h3 class="font-heading font-bold text-navy text-xl leading-snug">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed text-pretty">{{ $card['body'] }}</p>
            </article>
            @endforeach
        </div>
    </div>
</section>

{{-- ════════════ 6. WHAT'S INCLUDED IN THE RENTAL AGREEMENT ════════════ --}}
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="max-w-6xl mb-12 lg:mb-14 reveal">
            <p class="font-body font-bold text-[#148af4] uppercase tracking-[0.22em] text-xs mb-4">What's Included</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight mb-5 text-balance">
                See what is covered under <span class="text-[#148af4]">the rental&nbsp;agreement</span>
            </h2>
            <p class="font-body text-gray-600 text-base leading-relaxed text-pretty">
                Your rental agreement brings key equipment, service and support requirements into one clear arrangement from the start.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-stretch">
            <div class="lg:col-span-5 reveal reveal-left">
                <div class="relative rounded-3xl overflow-hidden bg-navy shadow-xl h-72 sm:h-96 lg:h-full">
                    <img src="/images/pages/services/agreementiclusions.png"
                         alt="Irish Laundry Systems engineer installing and commissioning rented commercial laundry equipment"
                         loading="lazy" decoding="async"
                         class="absolute inset-0 w-full h-full object-cover" style="object-position: 28% center;">
                    <div class="absolute inset-x-0 bottom-0 h-1/3" style="background: linear-gradient(to top, rgba(1,15,42,0.55) 0%, transparent 100%);" aria-hidden="true"></div>
                    <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-3xl pointer-events-none"></div>
                </div>
            </div>

            <div class="lg:col-span-7">
                @php
                $includedItems = [
                    ['title' => 'Selected equipment supply',                       'text' => 'Irish Laundry Systems supplies the agreed Electrolux Professional laundry equipment for the site.'],
                    ['title' => 'Delivery and installation included',              'text' => 'Delivery and installation are included as part of the rental agreement.'],
                    ['title' => 'Service labour included',                         'text' => 'Service labour is included during the agreement, so your team has support in place.'],
                    ['title' => 'Preventive maintenance included',                 'text' => 'Preventive maintenance is included to keep rented equipment checked, serviced and easier to manage.'],
                    ['title' => 'Parts included except filters and consumables',   'text' => 'Replacement parts are included within the rental agreement, except filters and consumables.'],
                    ['title' => 'Breakdown support included',                      'text' => 'Service and breakdown support are included, so your site is not left arranging support separately.'],
                    ['title' => 'Support throughout the agreement',                'text' => 'Irish Laundry Systems provides ongoing support during the rental term.'],
                    ['title' => 'Serviced by Irish Laundry Systems engineers',     'text' => 'Rented equipment must be repaired and serviced by Irish Laundry Systems engineers during the agreement.'],
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
        <div class="mb-12 lg:mb-14 reveal">
            <p class="font-body font-bold text-[#148af4] uppercase tracking-[0.22em] text-xs mb-4">Compare Options</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight mb-5 text-balance">
                Choose the equipment option that <span class="text-[#148af4]">fits how your site&nbsp;budgets</span>
            </h2>
            <p class="font-body text-gray-600 text-base leading-relaxed text-pretty">
                Rental and outright purchase both have their place. The right decision depends on capital planning,<br class="hidden lg:block"> equipment needs, support requirements and how much your site wants included from the start.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8 items-start">
            {{-- Rental / Lease --}}
            <div class="reveal bg-white border-2 border-[#148af4] rounded-2xl p-7 lg:p-9 shadow-card flex flex-col h-full">
                <h3 class="font-heading font-bold text-navy text-xl mb-5">Rental / Lease</h3>
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
                <h3 class="font-heading font-bold text-navy text-xl mb-5">Outright Purchase</h3>
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
        <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight mb-5 max-w-5xl reveal text-balance" style="transition-delay:80ms;">
            A clear rental process from <span class="text-[#148af4]">site review to&nbsp;agreement</span>
        </h2>
        <p class="font-body text-gray-600 text-base leading-relaxed max-w-6xl reveal text-pretty" style="transition-delay:160ms;">
            Irish Laundry Systems reviews your site needs, confirms suitable equipment and sets out the rental scope before the agreement begins.
        </p>
    </div>

    <div style="display:flex; flex-wrap:wrap;">
        @foreach([
            ['num' => '01.', 'title' => 'Share your site needs',    'body' => 'Tell us what equipment, capacity or laundry pressure needs to be covered.', 'img' => '/images/pages/Share%20your%20site%20needsimage.png'],
            ['num' => '02.', 'title' => 'Confirm the right fit',    'body' => 'We review the equipment route, installation needs and agreement scope.', 'img' => '/images/shared/Strip1.jpeg'],
            ['num' => '03.', 'title' => 'Start the rental term',    'body' => 'The selected equipment is supplied, installed and supported under the agreed rental arrangement.', 'img' => '/images/pages/equipmentrentalhero.png'],
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
        <div class="max-w-5xl mb-10 lg:mb-12 reveal">
            <p class="font-body font-bold text-[#148af4] uppercase tracking-[0.22em] text-xs mb-4">Where Rental Fits</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight mb-5">
                Rental for sites that want equipment access<br class="hidden lg:block"> with <span class="text-[#148af4]">support built&nbsp;in</span>
            </h2>
            <p class="font-body text-gray-600 text-base leading-relaxed text-pretty">
                Rental can be a good fit for sites that need selected Electrolux Professional laundry equipment without one large capital purchase, while keeping service, parts and support included throughout the agreement.
            </p>
        </div>

        @php
        $rentalFits = [
            ['env' => 'Healthcare',                  'route' => route('sectors.healthcare'),  'img' => '/images/pages/sectors/healthcarehero.png', 'pos' => '80% center'],
            ['env' => 'Care Facilities',             'route' => route('sectors.care'),        'img' => '/images/pages/sectors/carefacilitiesheroimage.jpg', 'pos' => '75% center', 'zoom' => '1.18'],
            ['env' => 'Hospitality',                 'route' => route('sectors.hospitality'), 'img' => '/images/pages/sectors/hospitallityhero.png', 'pos' => '75% center'],
            ['env' => 'Commercial &amp; Industrial', 'route' => route('sectors.commercial'),  'img' => '/images/pages/commercialindustrialequipmentrental.png'],
            ['env' => 'Multi Housing',               'route' => route('equipment'),           'img' => '/images/pages/sectors/selfservice.png'],
        ];
        @endphp

        <div
            x-data="{
                active: 0,
                count: {{ count($rentalFits) }},
                perView: 4,
                timer: null,
                get maxIndex() { return Math.max(0, this.count - this.perView); },
                next()  { this.active = this.active >= this.maxIndex ? 0 : this.active + 1; this.restart(); },
                prev()  { this.active = this.active <= 0 ? this.maxIndex : this.active - 1; this.restart(); },
                go(i)   { this.active = Math.min(i, this.maxIndex); this.restart(); },
                restart() { clearInterval(this.timer); this.timer = setInterval(() => this.next(), 6000); },
                init() {
                    const calc = () => { this.perView = window.innerWidth < 640 ? 1 : (window.innerWidth < 1024 ? 2 : 4); if (this.active > this.maxIndex) this.active = this.maxIndex; };
                    calc();
                    window.addEventListener('resize', calc);
                    this.timer = setInterval(() => this.next(), 6000);
                },
            }"
            class="relative"
        >
            <div class="overflow-hidden">
                <div class="flex transition-transform duration-500 ease-out -mx-3"
                     :style="`transform: translateX(-${active * (100 / perView)}%)`">
                    @foreach($rentalFits as $i => $env)
                    <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/4 px-3">
                        <div class="flex flex-col items-center text-center">
                            <a href="{{ $env['route'] }}" class="block w-full overflow-hidden rounded-sm mb-5">
                                <img src="{{ $env['img'] }}" alt="{{ strip_tags($env['env']) }}"
                                     class="w-full object-cover transition-transform duration-500 hover:scale-105" style="height:320px; object-position: {{ $env['pos'] ?? 'center' }};{{ isset($env['zoom']) ? ' transform: scale('.$env['zoom'].'); transform-origin: center bottom;' : '' }}">
                            </a>
                            <h3 class="font-heading font-bold text-navy text-xl mb-4">{!! $env['env'] !!}</h3>
                            <a href="{{ $env['route'] }}"
                               class="inline-flex items-center justify-center bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-3 rounded-full text-sm transition-colors duration-200">
                                Discover more
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Dots centered + arrows bottom-right --}}
            <div class="relative mt-10 flex items-center justify-center">
                <div class="flex items-center gap-2">
                    <template x-for="i in (maxIndex + 1)" :key="i">
                        <button @click="go(i - 1)"
                                :class="active === (i - 1) ? 'bg-navy w-2.5 h-2.5' : 'bg-navy/25 hover:bg-navy/50 w-2.5 h-2.5'"
                                class="rounded-full transition-all duration-300"></button>
                    </template>
                </div>
                <div class="absolute right-0 flex gap-2">
                    <button @click="prev()"
                            class="w-11 h-11 rounded-full bg-navy text-white hover:bg-navy/90 transition-colors flex items-center justify-center">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
                    </button>
                    <button @click="next()"
                            class="w-11 h-11 rounded-full bg-navy text-white hover:bg-navy/90 transition-colors flex items-center justify-center">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="mt-8 flex flex-col sm:flex-row sm:items-center gap-4 reveal">
            <p class="font-body text-gray-500 text-sm leading-relaxed text-pretty max-w-2xl">
                Rental suitability depends on the available Electrolux Professional equipment range, site size, access, utilities, laundry demand and agreement terms. For larger or more complex operations, Irish Laundry Systems will confirm whether the available rental range is the right fit before recommending this option.
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
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    Confirm the rental setup fits <span class="text-[#148af4]">your site before it&nbsp;begins</span>
                </h2>
                <p class="font-body text-gray-600 text-base leading-relaxed mt-5 text-pretty">
                    Before the agreement is confirmed, Irish Laundry Systems reviews room layout, utilities, access, workload and support needs.
                </p>
                <div class="mt-6 flex flex-wrap items-center gap-x-4 gap-y-2 font-body text-gray-500 text-sm">
                    <span class="whitespace-nowrap">Right-fit equipment</span>
                    <span class="w-px h-3 bg-gray-300 hidden sm:block" aria-hidden="true"></span>
                    <span class="whitespace-nowrap">Clear rental cost</span>
                    <span class="w-px h-3 bg-gray-300 hidden sm:block" aria-hidden="true"></span>
                    <span class="whitespace-nowrap">Planned installation</span>
                </div>
                <a href="#quote-form" class="inline-flex items-center gap-2 bg-[#148af4] hover:bg-[#0f70cc] text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 mt-7 w-fit">
                    Request a Quote
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            @php
            $planProof = [
                ['title' => 'Right-fit equipment', 'text' => 'Equipment matched to space, workload and laundry demand.',
                 'img' => '/images/icons/175.png'],
                ['title' => 'Clear rental cost', 'text' => 'Rental fee confirmed before the agreement begins.',
                 'img' => '/images/icons/206.png'],
                ['title' => 'Planned installation', 'text' => 'Supply, access and support planned around your room and operation.',
                 'img' => '/images/icons/pmc-gain-88.png', 'style' => 'filter:brightness(0) saturate(100%) invert(35%) sepia(96%) saturate(1500%) hue-rotate(196deg) brightness(103%);'],
            ];
            @endphp
            <div class="flex flex-col reveal" style="transition-delay:120ms;">
                @foreach ($planProof as $i => $p)
                <div class="flex items-start gap-5 py-6 border-t border-gray-100 first:border-t-0 first:pt-0 last:pb-0">
                    <img src="{{ $p['img'] }}" alt="" aria-hidden="true" class="w-14 h-14 object-contain flex-shrink-0" style="{{ $p['style'] ?? '' }}">
                    <div>
                        <h3 class="font-heading font-bold text-navy text-xl mb-1.5 leading-snug">{{ $p['title'] }}</h3>
                        <p class="font-body text-gray-600 text-sm lg:text-base leading-relaxed text-pretty">{{ $p['text'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ════════════ 11. SUPPORT DURING THE AGREEMENT BLOCK (#148AF4) ════════════ --}}
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:280px;">
    <div class="absolute inset-y-0 left-0 hidden lg:block" style="width:40%;">
        <img src="/images/shared/rentalstripimage.jpg" alt="Irish Laundry Systems engineer supporting rented commercial laundry equipment"
             loading="lazy" decoding="async" class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to left, #148af4 0%, rgba(20,138,244,0.82) 8%, rgba(20,138,244,0.45) 28%, rgba(20,138,244,0.18) 48%, transparent 65%);"></div>
    </div>

    <div class="relative z-10 flex flex-col justify-center px-6 sm:px-10 lg:px-16 py-10 lg:py-12 max-w-full lg:max-w-[52%] lg:ml-auto">

        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">During the Agreement</p>

        <h2 class="font-heading font-bold text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
            <span style="color:#ffffff;">We supply, install and</span><br class="hidden sm:block"> <span style="color:#011E41;">take care of&nbsp;it</span>
        </h2>

        <p class="font-body text-white/80 text-base leading-relaxed mb-6 max-w-2xl text-pretty">
            With rental, Irish Laundry Systems supplies, installs and supports the equipment during the rental term. Service labour, preventive maintenance and parts cover are included, with filters and consumables excluded.
        </p>

        <div class="flex items-center flex-wrap lg:flex-nowrap gap-x-8 gap-y-3 mb-7">
            <div class="flex items-center gap-5">
                <img src="/images/icons/rental-gain-118.png" alt="" aria-hidden="true" style="width:3.5rem;height:3.5rem;flex-shrink:0;object-fit:contain;filter:brightness(0) invert(1);">
                <span class="font-body text-white text-sm font-bold leading-snug">Service labour<br>included</span>
            </div>
            <div class="flex items-center gap-5">
                <img src="/images/icons/rental-gain-116.png" alt="" aria-hidden="true" style="width:3.5rem;height:3.5rem;flex-shrink:0;object-fit:contain;filter:brightness(0) invert(1);">
                <span class="font-body text-white text-sm font-bold leading-snug">Preventive Maintenance<br>included</span>
            </div>
            <div class="flex items-center gap-5">
                <img src="/images/icons/151.png" alt="" aria-hidden="true" style="width:3.5rem;height:3.5rem;flex-shrink:0;object-fit:contain;filter:brightness(0) invert(1);">
                <span class="font-body text-white text-sm font-bold leading-snug">Parts<br>included</span>
            </div>
        </div>

        <div class="flex flex-wrap gap-3">
            <a href="#quote-form" class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide w-fit">
                Request a Quote
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
            </a>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 border border-white/60 text-white font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/10 transition-colors tracking-wide w-fit">
                Talk to Our Team
            </a>
        </div>

    </div>
</section>

{{-- ════════════ 12. TESTIMONIAL / TRUSTED BY LOGO STRIP ════════════ --}}
@include('components.testimonials', [
    'light'      => true,
    'bordered'   => false,
    'eyebrow'    => 'Customer Trust',
    'heading'    => 'Trusted for <span class="text-[#148af4]">commercial laundry rental&nbsp;&amp; support</span>',
    'subheading' => 'Sites across Ireland choose Irish Laundry Systems for equipment supply, rental and reliable ongoing support.',
])
<div class="bg-[#f7f8fa] -mt-10 lg:-mt-16 pb-12 lg:pb-16">
    @include('components.proof-bar')
</div>

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
    ['question' => 'Who repairs or services rented equipment?',
     'answer'   => 'Only Irish Laundry Systems engineers may repair or service rented equipment during the agreement.'],
    ['question' => 'Can I buy equipment outright instead?',
     'answer'   => 'Yes. Outright purchase may be the better fit where a site wants full ownership from day one and prefers to manage servicing separately or through a separate maintenance contract.'],
    ['question' => 'Is rental right for every site?',
     'answer'   => 'Not always. Rental suitability depends on the available Electrolux Professional equipment range, site requirements, installation needs and agreement terms. Irish Laundry Systems will confirm whether rental is the right fit before recommending this option.'],
    ['question' => 'What is excluded from a rental agreement?',
     'answer'   => 'Exclusions can include filters, consumables, electrical or plumbing work beyond disconnect, misuse, malicious damage and freezing damage. Irish Laundry Systems will confirm the relevant terms during the proposal stage.'],
];
@endphp
@include('components.faq', [
    'eyebrow'    => 'Agreement Details',
    'heading'    => 'Keep rental terms clear <span class="text-[#148af4]">from the&nbsp;start</span>',
    'subheading' => 'Your agreement sets out what is included, how support is handled and which exclusions apply before the rental begins.',
    'faqs'       => $rentalFaqs,
])

{{-- ════════════ 14. FINAL RENTAL QUOTE FORM ════════════ --}}
<section id="quote-form" class="bg-bg py-16 lg:py-24">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">

            {{-- Left: heading + contact --}}
            <div class="lg:col-span-5 reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] uppercase tracking-[0.22em] text-xs mb-4">Request a Quote</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight mb-5 text-balance">
                    Ready to discuss <span class="text-[#148af4]">rental or lease&nbsp;options</span>
                </h2>
                <p class="font-body text-gray-600 text-base leading-relaxed mb-8 text-pretty">
                    Tell us what equipment you need, what the site is dealing with and whether you are considering rental, lease or outright purchase. Irish Laundry Systems will review the requirement and confirm the right next step.
                </p>

                <div class="space-y-4">
                    <a href="tel:+35314910402" class="flex items-center gap-3 group">
                        <span class="w-10 h-10 rounded-lg bg-[#148af4]/10 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/></svg>
                        </span>
                        <span class="font-body text-navy font-bold group-hover:text-[#148af4] transition-colors">+353 1 491 0402</span>
                    </a>
                    <a href="mailto:contact@irishlaundrysystems.com" class="flex items-center gap-3 group">
                        <span class="w-10 h-10 rounded-lg bg-[#148af4]/10 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/></svg>
                        </span>
                        <span class="font-body text-navy font-bold group-hover:text-[#148af4] transition-colors">contact@irishlaundrysystems.com</span>
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

                    <p class="font-body text-gray-500 text-sm mb-6">Share the details needed to review your rental enquiry.</p>

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
