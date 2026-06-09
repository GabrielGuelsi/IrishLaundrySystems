@extends('layouts.app')

@section('pageTitle', 'Commercial Laundry Engineering Ireland | Preventive Maintenance, Repairs & Equipment | Irish Laundry Systems')
@section('metaDescription', 'Engineering-led commercial laundry care since 1987. Preventive maintenance, repairs, equipment rental and aftercare across Dublin and Ireland. Request a service assessment.')

@section('content')

<!-- 1. HERO -->
<style>
@keyframes heroFadeUp {
    from { opacity: 0; transform: translateY(24px); }
    to   { opacity: 1; transform: translateY(0); }
}
.hero-title { animation: heroFadeUp 0.7s ease forwards; }
.hero-desc  { animation: heroFadeUp 0.7s ease 0.2s forwards; opacity: 0; }
.hero-btns  { animation: heroFadeUp 0.7s ease 0.4s forwards; opacity: 0; }
</style>

<section class="relative overflow-hidden min-h-[520px] lg:h-[720px] lg:min-h-[560px]" style="background-color: #011E41;"
         x-data="{ active: 0, slides: 2 }"
         x-init="setInterval(() => active = (active + 1) % slides, 6000)">

    <!-- Background carousel -->
    <img src="/images/hero/HOMEHERO1.png"
         alt="Commercial laundry operation"
         class="absolute inset-0 w-full h-full object-cover object-center transition-opacity ease-in-out duration-[1200ms]"
         :class="active === 0 ? 'opacity-100' : 'opacity-0'">
    <img src="/images/hero/HOMEHERO2.jpg"
         alt="Irish Laundry Systems engineering team on site"
         class="absolute inset-0 w-full h-full object-cover object-center transition-opacity ease-in-out duration-[1200ms]"
         :class="active === 1 ? 'opacity-100' : 'opacity-0'">

    <!-- Gradient overlay — tight, clears by 70% -->
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,1.00) 0%, rgba(1,30,65,0.92) 30%, rgba(1,30,65,0.50) 50%, rgba(1,30,65,0.10) 65%, transparent 75%);"></div>

    <!-- Text — vertically centered -->
    <div class="relative z-10 h-full flex items-center w-full">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16">
            <div style="max-width: 760px;">

                <h1 class="hero-title font-heading font-bold text-white leading-tight tracking-tight mb-6 text-3xl sm:text-4xl lg:text-5xl">
                    Commercial laundry<br><span class="text-[#148af4]">engineering support</span> for sites<br>where downtime carries real&nbsp;cost
                </h1>

                <p class="hero-desc font-body text-white leading-relaxed mb-10 text-base max-w-2xl">
                    Irish Laundry Systems supports commercial laundry sites with equipment, rental, maintenance, repairs and aftercare from one experienced team, so teams can control budget pressure, reduce disruption and keep laundry&nbsp;moving.
                </p>

                <div class="hero-btns flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center justify-center bg-orange hover:bg-orange-dark text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 whitespace-nowrap">
                        Request Service Assessment
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center border border-white/50 hover:border-white text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 hover:bg-white/10 whitespace-nowrap">
                        Talk to Our Team
                    </a>
                </div>

            </div>
        </div>
    </div>

    {{-- Carousel indicators --}}
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-20 flex items-center gap-2">
        <template x-for="i in slides" :key="i">
            <button type="button" @click="active = i - 1"
                    :class="active === (i - 1) ? 'bg-white w-6' : 'bg-white/40 hover:bg-white/70 w-2.5'"
                    class="h-2.5 rounded-full transition-all duration-300"
                    :aria-label="'Go to slide ' + i"></button>
        </template>
    </div>

</section>

<!-- Electrolux Partner Strip -->
@include('components.partner-strip')

<!-- 1.5 INTRO / BRIDGE — Built Around the Operation -->
<section class="py-12 sm:py-16 lg:py-28 bg-white">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Built Around the Operation</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">
            <div>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    <span class="text-[#148af4]">Laundry support</span> built around the site, the equipment and <span class="text-[#148af4]">what needs to happen next</span>
                </h2>
            </div>
            <div class="flex flex-col gap-4">
                <p class="font-body text-navy text-base leading-relaxed">
                    Irish Laundry Systems supports equipment selection, installation, planned maintenance, call-outs, rental and aftercare, so commercial laundry sites can make clearer decisions with less pressure.
                </p>
                <p class="font-body text-gray-600 text-base leading-relaxed">
                    That gives teams clearer decisions and more confidence when laundry output affects cost control, staffing pressure, service continuity and the long-term value of the equipment they depend on every day.
                </p>
                <a href="{{ route('services') }}" class="inline-block font-body font-bold text-navy hover:text-navy/80 text-lg leading-snug transition-colors mt-2">
                    See service options for your site &rarr;
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 3. THREE CORE PATHWAYS -->
@include('components.services-cards', [
    'eyebrow'          => 'Services',
    'headingLead'      => 'Choose the ',
    'headingHighlight' => 'right service support',
    'headingTrail'     => ' for your site',
    'highlightClass'   => 'text-[#148af4]',
    'intro'            => 'Four clear service options to manage breakdowns, plan maintenance, make rental decisions easier and keep equipment running.',
    'introClass'       => '',
    'introMaxW'        => 'max-w-none',
    'align'            => 'left',
    'cards'            => [
        ['title' => 'Repairs & Call-outs',     'body' => 'Engineer-led response when faults, breakdowns or performance issues put laundry output, staffing and service continuity under pressure.',          'cta' => 'Request Call-out',         'href' => route('repairs'),           'img' => '/images/healthcare/repairs-callouts.jpg',             'alt' => 'Repairs and Call-outs',   'pos' => 'center 40%'],
        ['title' => 'Preventive Maintenance',  'body' => 'Planned maintenance contracts support better control of service timing, equipment condition and repair pressure over time.',                       'cta' => 'View Maintenance Options', 'href' => route('service-contracts'), 'img' => '/images/healthcare/Service%20Contracts.png',          'alt' => 'Preventive Maintenance',  'pos' => 'center 35%'],
        ['title' => 'Equipment Rental',        'body' => 'A lower upfront cost option for replacement pressure, expansion or continuity, with equipment installed, maintained and easier to manage over time.',      'cta' => 'See Rental Options',       'href' => route('rental'),            'img' => '/images/healthcare/lagoon-advanced-care.webp',        'alt' => 'Equipment Rental',        'pos' => 'center'],
        ['title' => 'Support & Aftercare',     'body' => 'Follow-up care that keeps service history and next steps clear after repairs, rental, contracts, inspection or installation.',                       'cta' => 'Explore Support & Aftercare', 'href' => route('parts-aftercare'),  'img' => '/images/healthcare/services-overview-hero-portrait.jpg', 'alt' => 'Support & Aftercare', 'pos' => 'center center'],
    ],
])

<!-- 3.5 PLANNING STRIP — Designed around your site, workflow and capacity -->
<div class="bg-white" style="margin-top:-1px; margin-bottom:-2px;">
    @include('components.cta-combined-banner', [
        'heading'  => 'Designed around your room, <span style="color:#011E41;">workload and budget</span> before money is&nbsp;spent',
        'body'     => 'Poor equipment fit, weak layout and undersized capacity can create avoidable spend after installation. <span class="whitespace-nowrap">Irish Laundry Systems</span> reviews the room, workload and support needs before money is spent, so the site can make a better decision from the start.',
        'features' => [
            ['img' => '/images/icons/home-planning-spend.png', 'label' => 'Avoid wasted<br>spend'],
            ['img' => '/images/icons/home-planning-fit.png', 'label' => 'Right-fit<br>equipment'],
            ['img' => '/images/icons/home-planning-rework.png', 'label' => 'Reduce costly<br>rework'],
        ],
        'ctaText'  => 'Talk to Our Team',
    ])
</div>

<!-- 4. SECTOR ROUTING TABS -->
@include('components.sector-switcher', [
    'intro'           => 'Different sites carry different cost, staffing and service pressures. The right commercial laundry care depends on hygiene requirements, daily laundry demand, equipment in use, budget pressure and day-to-day operating needs.',
    'healthcareBody'  => 'Care for healthcare laundry environments where hygiene process, room flow, equipment continuity and service pressure affect daily operations.',
    'careBody'        => 'Practical support for care environments where daily laundry demand, smaller teams and planned maintenance need to stay manageable.',
    'hospitalityBody' => 'Support for guest-facing sites where linen availability, finishing quality, turnaround and operating cost affect the wider business.',
    'commercialBody'  => 'Care for higher-throughput laundry sites where output, running cost and engineering response carry more operational weight.',
])

<!-- 6. EQUIPMENT TEASER — Product Category Grid -->
@include('components.equipment-categories', [
    'heading'    => 'Equipment categories selected around <span class="text-[#148af4]">workload and daily output</span>',
    'textMinH'   => '160px',
    'subheading' => 'The right equipment should fit the room, workload, daily use, running costs and the support needed to keep it performing.',
    'equipment' => [
        ['img' => 'commercialwasher',              'name' => 'Washing Machines',     'desc' => 'For daily wash capacity, steady performance and broader professional laundry needs.', 'box' => 270, 'mb' => -35],
        ['img' => 'Tumble-dryers_Heat-Pump_1-1',   'name' => 'Dryers',               'desc' => 'For daily drying demand, drying control and steady turnaround through the day.',                          'box' => 245],
        ['img' => 'drying-cabinet', 'src' => '/images/healthcare/Drying-cabinets_image.webp', 'name' => 'Drying Cabinets', 'desc' => 'For gentle drying of delicate garments, bulky items and specialist fabric care.', 'box' => 260, 'mb' => 0],
        ['img' => 'IB623_FRONT_NEW', 'ext' => 'jpg', 'name' => 'Ironers & Flatwork', 'desc' => 'For finishing, presentation and stronger output across linen-heavy environments.'],
    ],
])

<!-- 6.5 EQUIPMENT RENTAL STRIP — Keep laundry moving with capital control -->
@include('components.why-choose-strip', [
    'body'     => 'Rental gives your site a practical option for replacement, expansion or continuity without one large purchase upfront. Equipment, installation and maintenance are included under the rental agreement, making budget planning easier to manage.',
    'features' => [
        [
            'icon' => '<img src="/images/icons/home-rental-upfront.png" style="width:3.5rem;height:3.5rem;object-fit:contain;filter:brightness(0) invert(1);" alt="">',
            'label' => 'Lower upfront<br>cost',
        ],
        [
            'icon' => '<img src="/images/icons/home-rental-purchase.png" style="width:3.5rem;height:3.5rem;object-fit:contain;filter:brightness(0) invert(1);" alt="">',
            'label' => 'Avoid one large<br>purchase',
        ],
        [
            'icon' => '<img src="/images/icons/home-rental-maintained.png" style="width:3.5rem;height:3.5rem;object-fit:contain;filter:brightness(0) invert(1);" alt="">',
            'label' => 'Installed and<br>maintained',
        ],
    ],
])

<!-- 7. PROOF — TESTIMONIALS -->
@include('components.testimonials', [
    'eyebrow'    => 'Customer Trust',
    'heading'    => 'What our customers say',
    'subheading' => 'Irish Laundry Systems is trusted by organisations that need clear communication, reliable support and people who know the equipment when laundry performance affects cost, continuity and day-to-day operations.',
])

<!-- TRUST ANCHORS — proof / "Trusted by" logo strip -->
<div class="bg-white -mt-10 lg:-mt-16">
    @include('components.proof-bar')
</div>

<!-- 6.6 PREVENTIVE MAINTENANCE & AFTERCARE STRIP -->
@include('components.service-contracts-strip', [
    'headingLine1' => 'Keep service costs, maintenance and',
    'headingLine2' => 'next steps clear',
    'body'         => 'Planned maintenance and aftercare keep service history, equipment condition and follow-up needs clear, giving teams a better way to reduce surprise repair costs, protect equipment value and limit disruption over time.',
    'features'     => [
        ['img' => '/images/icons/home-maintenance-costs.png', 'label' => 'Reduce surprise repair costs'],
        ['img' => '/images/icons/home-maintenance-value.png', 'label' => 'Protect equipment value'],
        ['img' => '/images/icons/home-maintenance-disruption.png', 'label' => 'Minimise disruption'],
    ],
])

<!-- 8. FINAL CTA + SHORT FORM -->
@include('components.cta-downtime-form', [
    'pageSource' => 'homepage_cta',
    'eyebrow'    => 'Next Step',
    'heading'    => 'Start with the <span class="text-[#148af4]">right next step</span>',
    'body'       => 'Tell us what is under pressure, what equipment is involved and what needs to happen next. Irish Laundry Systems will guide you toward the right service, rental, equipment or aftercare support.',
    'formTitle'  => 'Request a Service Assessment',
    'formIntro'  => 'Share the details that make the next step clearer.',
    'buttonText' => 'Request Service Assessment',
])

@endsection
