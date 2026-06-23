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
</style>

{{-- ════════════════════════════════════════════════════════════════════════
     1. HERO
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden h-auto min-h-[520px] lg:h-[680px]" style="background-color: #011E41;">

    <img src="/images/healthcare/line-6000-solutions.jpg"
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
                       class="inline-flex items-center justify-center bg-[#148af4] hover:bg-[#0f70cc] text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 whitespace-nowrap">
                        Talk to an Engineer
                    </a>
                    <a href="{{ route('equipment') }}"
                       data-ga-cta="hero-explore-equipment"
                       class="inline-flex items-center justify-center border border-white/50 hover:border-white text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 hover:bg-white/10 whitespace-nowrap">
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
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Partnership Value</p>
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
                'title' => 'Stronger equipment choice',
                'body'  => 'Access a wider Electrolux Professional laundry range, matched to the room, workload, budget and daily pressure of the site.',
                'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Zm.75 10.5 1.5 1.5 3-3"/>',
            ],
            [
                'title' => 'Confidence in the brand behind the machine',
                'body'  => 'Choose commercial laundry equipment from a major name in professional laundry, supported locally by ILS.',
                'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.745 3.745 0 013.296-1.043A3.745 3.745 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"/>',
            ],
            [
                'title' => 'Downtime taken seriously',
                'body'  => 'When a washer, dryer or ironer stops, ILS helps customers move faster from fault to next decision.',
                'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>',
            ],
            [
                'title' => 'Support that stays local',
                'body'  => 'Advice, installation, Preventive Maintenance, repairs and aftercare stay with one Irish team that knows the equipment and the site.',
                'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>',
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 lg:grid-cols-4 lg:[grid-template-rows:auto_auto_1fr]">
            @foreach ($whyCards as $i => $card)
            <div class="reveal group py-8 lg:py-0 border-t border-gray-200 first:border-t-0 lg:border-t-0 lg:border-l lg:first:border-l-0 lg:px-10 lg:first:pl-0 lg:last:pr-0 lg:grid lg:grid-rows-subgrid lg:row-span-3"
                 style="transition-delay:{{ $i * 80 }}ms;">
                <svg class="w-11 h-11 lg:w-12 lg:h-12 text-navy mb-7 transition-transform duration-300 group-hover:-translate-y-1" fill="none" viewBox="0 0 24 24" stroke-width="1.4" stroke="currentColor">{!! $card['icon'] !!}</svg>
                <h3 class="font-heading font-bold text-navy text-lg lg:text-xl mb-3 leading-snug text-balance self-start">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed text-pretty">{{ $card['body'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     4. THE ELECTROLUX PROFESSIONAL ADVANTAGE — navy strip, 4 proof points
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="relative py-20 lg:py-28 bg-navy overflow-hidden">
    <div class="absolute inset-0 ep-dotgrid opacity-40" aria-hidden="true"></div>
    <div class="relative max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="max-w-4xl mb-12 lg:mb-14 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Manufacturer Backing</p>
            <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight mb-5 text-balance">
                A serious <span class="text-[#148af4]">professional laundry range</span> behind the local advice
            </h2>
            <p class="font-body text-blue-200 text-base leading-relaxed text-pretty max-w-3xl">
                Electrolux Professional gives Irish Laundry Systems a stronger base to work from: commercial washers, dryers, barrier washers, ironers, drying cabinets, wet cleaning, myPRO, dosing systems, accessories and consumables. That means customers are not pushed toward one narrow option. They can be guided toward equipment that fits the site, the workload and the support plan around it.
            </p>
        </div>

        @php
        $advantage = [
            [
                'title' => 'More ways to fit the site',
                'body'  => 'A wider laundry range gives ILS more options when planning around room size, utilities, capacity, hygiene needs, finishing standards and budget.',
            ],
            [
                'title' => 'Built for professional pressure',
                'body'  => 'Electrolux Professional laundry equipment is designed for business use, where reliability, productivity, energy use and serviceability matter every day.',
            ],
            [
                'title' => 'Spare parts infrastructure',
                'body'  => 'Electrolux Professional customer care includes 55,000 available spare parts in stock, spare parts availability for at least 10 years from end of production and 24–48 hour worldwide spare parts dispatch.',
            ],
            [
                'title' => 'Knowledge that keeps current',
                'body'  => 'As the Electrolux Professional range develops, ILS stays close to product updates, service guidance, training and new laundry technologies.',
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-5">
            @foreach ($advantage as $i => $item)
            <div class="reveal rounded-2xl p-6 lg:p-8" style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08); transition-delay:{{ $i * 80 }}ms;">
                <h3 class="font-heading font-bold text-white text-lg lg:text-xl mb-3 leading-snug text-balance">{{ $item['title'] }}</h3>
                <p class="font-body text-blue-200/90 text-sm leading-relaxed text-pretty">{{ $item['body'] }}</p>
            </div>
            @endforeach
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
            <article class="reveal bg-bg rounded-2xl border border-navy/5 p-6 lg:p-7 flex flex-col" style="transition-delay:{{ $i * 60 }}ms;">
                <span class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-none mb-4">{{ $card['label'] }}</span>
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
<section class="relative py-20 lg:py-28 bg-navy overflow-hidden">
    <div class="absolute inset-0" aria-hidden="true">
        <img src="/images/sectors/commercial-hero.jpg" alt="" loading="lazy" decoding="async"
             class="absolute inset-0 w-full h-full object-cover">
    </div>
    <div class="absolute inset-0 ep-dotgrid opacity-25" aria-hidden="true"></div>
    <div class="relative max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="max-w-4xl mx-auto reveal">
            <div class="rounded-3xl p-8 lg:p-12 text-center" style="background: rgba(1,30,65,0.82); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,0.08);">
                <p class="font-body font-bold text-[#148af4] uppercase tracking-[0.22em] text-xs mb-4">Operational Continuity</p>
                <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight mb-5 text-balance">
                    Protect uptime with <span class="text-[#148af4]">the right support behind the&nbsp;equipment</span>
                </h2>
                <p class="font-body text-blue-200 text-base leading-relaxed mb-8 text-pretty max-w-2xl mx-auto">
                    A stopped washer, dryer or ironer can delay linen and interrupt the day’s operation. As an Authorised Electrolux Professional Partner, Irish Laundry Systems uses manufacturer support channels, genuine parts access and decades of equipment knowledge to help you reach the right repair decision faster.
                </p>

                <a href="{{ route('repairs') }}" class="inline-flex items-center justify-center gap-2 bg-white text-navy hover:bg-white/90 font-body font-bold px-7 py-3.5 rounded-md text-sm transition-colors duration-200">
                    Request Repair Support
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════════════════════════
     7. ILS EQUIPMENT CARE — 6 pillars (What You Gain style)
     ════════════════════════════════════════════════════════════════════════ --}}
<section class="py-12 lg:py-16 bg-navy">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="max-w-3xl mx-auto text-center mb-10 lg:mb-12">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4 reveal">Equipment Care</p>
            <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight tracking-tight mb-5 reveal text-balance" style="transition-delay:80ms;">
                Equipment support from <span class="text-[#148af4]">advice to&nbsp;aftercare</span>
            </h2>
            <p class="font-body text-white/70 text-base leading-relaxed reveal text-pretty" style="transition-delay:160ms;">
                Customers do not just need equipment supplied. They need the right machine, installed properly, maintained well, repaired correctly and supported when the next decision appears. Irish Laundry Systems brings those steps together through one local engineering team.
            </p>
        </div>

        @php
        $pillars = [
            [
                'title' => 'Equipment Advice & Supply',
                'body'  => 'Choose Electrolux Professional equipment around the room, workload, budget and long-term support plan.',
                'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Zm.75 10.5 1.5 1.5 3-3"/>',
            ],
            [
                'title' => 'Installation & Setup',
                'body'  => 'Plan delivery, access, utilities, installation and handover before the equipment starts working.',
                'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z"/>',
            ],
            [
                'title' => 'Equipment Rental',
                'body'  => 'A lower-capital option where rental is suitable for the selected equipment and site needs.',
                'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/>',
            ],
            [
                'title' => 'Preventive Maintenance Contracts',
                'body'  => 'Planned support to reduce avoidable disruption and keep laundry equipment easier to manage over time.',
                'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/>',
            ],
            [
                'title' => 'Repairs & Call-Outs',
                'body'  => 'Engineering support when faults, breakdowns or performance issues affect the laundry room.',
                'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>',
            ],
            [
                'title' => 'Support & Aftercare',
                'body'  => 'Follow-up advice, service history, parts support where needed and clearer next steps after installation.',
                'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z"/>',
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-5">
            @foreach ($pillars as $i => $pillar)
            <article class="card-hover group relative bg-white rounded-2xl border border-navy/5 p-6 lg:p-7 flex flex-col gap-3 reveal transition-all duration-300 ease-out hover:shadow-[0_20px_40px_-15px_rgba(1,30,65,0.25)]" style="transition-delay:{{ $i * 60 }}ms;">
                <svg class="w-11 h-11 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    {!! $pillar['icon'] !!}
                </svg>
                <h3 class="font-heading font-bold text-navy text-lg lg:text-xl leading-snug">{{ $pillar['title'] }}</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed text-pretty">{{ $pillar['body'] }}</p>
            </article>
            @endforeach
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
<section class="bg-white pt-16 lg:pt-24 pb-4">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="max-w-3xl mx-auto text-center reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Customer Proof</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight tracking-tight mb-5 text-balance">
                Trusted where laundry equipment <span class="text-[#148af4]">needs certainty</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed text-pretty">
                Irish Laundry Systems supports customers across healthcare, care, hospitality and commercial operations where downtime, poor equipment choice or delayed support can affect the day’s work.
            </p>
        </div>
    </div>
</section>
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
                            class="inline-flex items-center justify-center bg-[#148af4] hover:bg-[#0f70cc] text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 w-full sm:w-auto">
                        Talk to an Engineer
                        <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
                        </svg>
                    </button>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center border border-navy/30 hover:border-navy text-navy font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 w-full sm:w-auto">
                        Request Service Assessment
                    </a>
                </div>

            </form>
        </div>
    </div>
</section>

@endsection
