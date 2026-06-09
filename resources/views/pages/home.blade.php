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

                <p class="hero-desc font-body text-white leading-relaxed mb-10 text-base max-w-xl">
                    Irish Laundry Systems supports commercial laundry sites by keeping equipment, rental, maintenance, repairs and aftercare connected through one route, so teams can control budget pressure, reduce disruption and keep the operation moving.
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
                    <span class="text-[#148af4]">Laundry care</span> built around the site, the equipment and the <span class="text-[#148af4]">next practical step</span>
                </h2>
            </div>
            <div class="flex flex-col gap-4">
                <p class="font-body text-navy text-base leading-relaxed">
                    Irish Laundry Systems connects equipment selection, installation, planned maintenance, call-outs, rental and aftercare into one practical commercial laundry plan.
                </p>
                <p class="font-body text-gray-600 text-base leading-relaxed">
                    That gives teams clearer decisions and more confidence when laundry output affects cost control, staffing pressure, service continuity and the long-term value of the equipment already in use.
                </p>
                <a href="{{ route('services') }}" class="inline-block font-body font-bold text-navy hover:text-navy/80 text-lg leading-snug transition-colors mt-2">
                    See the right route for your site &rarr;
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 3. THREE CORE PATHWAYS -->
@include('components.services-cards', [
    'eyebrow'          => 'Services',
    'headingLead'      => 'Choose the ',
    'headingHighlight' => 'right route',
    'headingTrail'     => ' for your site',
    'highlightClass'   => 'text-[#148af4]',
    'intro'            => 'Four practical routes to manage breakdowns, plan maintenance, control rental decisions and keep equipment care moving.',
    'introClass'       => '',
    'introMaxW'        => 'max-w-none',
    'align'            => 'left',
    'cards'            => [
        ['title' => 'Repairs & Call-outs',     'body' => 'Engineer-led response when faults, breakdowns or performance issues put laundry output, staffing and service continuity under pressure.',          'cta' => 'Request Call-out',         'href' => route('repairs'),           'img' => '/images/healthcare/repairs-callouts.jpg',             'alt' => 'Repairs and Call-outs',   'pos' => 'center 40%'],
        ['title' => 'Preventive Maintenance',  'body' => 'Planned maintenance contracts support better control of service timing, equipment condition and repair pressure over time.',                       'cta' => 'View Maintenance Options', 'href' => route('service-contracts'), 'img' => '/images/healthcare/Service%20Contracts.png',          'alt' => 'Preventive Maintenance',  'pos' => 'center 35%'],
        ['title' => 'Equipment Rental',        'body' => 'A lower-capital route for replacement pressure, expansion or continuity, with equipment installed, maintained and easier to manage over time.',      'cta' => 'See Rental Options',       'href' => route('rental'),            'img' => '/images/healthcare/lagoon-advanced-care.webp',        'alt' => 'Equipment Rental',        'pos' => 'center'],
        ['title' => 'Support & Aftercare',     'body' => 'Follow-up care that keeps service history and next steps clear after repairs, rental, contracts, inspection or installation.',                       'cta' => 'Explore Support & Aftercare', 'href' => route('parts-aftercare'),  'img' => '/images/healthcare/services-overview-hero-portrait.jpg', 'alt' => 'Support & Aftercare', 'pos' => 'center center'],
    ],
])

<!-- 3.5 PLANNING STRIP — Designed around your site, workflow and capacity -->
<div class="bg-white" style="margin-top:-1px; margin-bottom:-2px;">
    @include('components.cta-combined-banner', [
        'heading'  => 'Designed around your site, <span style="color:#011E41;">workflow and capacity</span> before budget is&nbsp;committed',
        'body'     => 'Poor equipment fit, weak layout and under-sized capacity can create avoidable spend after installation. <span class="whitespace-nowrap">Irish Laundry Systems</span> reviews the room, workload and support needs before budget is committed, so the site can make a better decision from the start.',
        'features' => [
            ['icon' => 'ativo-20', 'label' => 'Avoid wasted<br>spend'],
            ['icon' => 'ativo-10', 'label' => 'Right-fit<br>equipment'],
            ['icon' => 'ativo-21', 'label' => 'Reduce costly<br>rework'],
        ],
        'ctaText'  => 'Talk to Our Team',
    ])
</div>

<!-- 4. SECTOR ROUTING TABS -->
@include('components.sector-switcher', [
    'intro'           => 'Different sites carry different cost, staffing and service pressures. The right commercial laundry care depends on hygiene requirements, linen flow, throughput, equipment already on-site, budget pressure and day-to-day operating needs.',
    'healthcareBody'  => 'Care for healthcare laundry environments where hygiene process, room flow, equipment continuity and service pressure affect daily operations.',
    'careBody'        => 'Practical support for care environments where daily laundry demand, smaller teams and planned maintenance need to stay manageable.',
    'hospitalityBody' => 'Support for guest-facing sites where linen availability, finishing quality, turnaround and operating cost affect the wider business.',
    'commercialBody'  => 'Care for higher-throughput laundry sites where output, running cost and engineering response carry more operational weight.',
])

<!-- 6. EQUIPMENT TEASER — Product Category Grid -->
@include('components.equipment-categories', [
    'heading'    => 'Equipment categories selected around <span class="text-[#148af4]">workflow and output</span>',
    'textMinH'   => '160px',
    'subheading' => 'The right equipment should follow the room, the load profile, the handling process, lifecycle cost and the support needed to keep it performing.',
    'equipment' => [
        ['img' => 'commercialwasher',              'name' => 'Washing Machines',     'desc' => 'For daily wash capacity, steady performance and broader professional laundry needs.', 'box' => 270, 'mb' => -35],
        ['img' => 'Tumble-dryers_Heat-Pump_1-1',   'name' => 'Dryers',               'desc' => 'For post-wash continuity, drying control and steady room flow through the day.',                          'box' => 245],
        ['img' => 'drying-cabinet', 'src' => '/images/healthcare/Drying-cabinets_image.webp', 'name' => 'Drying Cabinets', 'desc' => 'For gentle drying of delicate garments, bulky items and specialist fabric care.', 'box' => 260, 'mb' => 0],
        ['img' => 'IB623_FRONT_NEW', 'ext' => 'jpg', 'name' => 'Ironers & Flatwork', 'desc' => 'For finishing, presentation and cleaner output flow across linen-heavy environments.'],
    ],
])

<!-- 6.5 EQUIPMENT RENTAL STRIP — Keep laundry moving with capital control -->
@include('components.why-choose-strip', [
    'body'     => 'Rental gives your site a practical route for replacement, expansion or continuity without one large purchase upfront. Equipment, installation and maintenance stay connected through the rental route, making budget planning easier to manage.',
    'features' => [
        [
            'icon' => '<span style="font-size:2rem;font-weight:700;color:white;line-height:1;">€</span>',
            'label' => 'Lower upfront<br>cost',
        ],
        [
            'icon' => '<svg style="width:2.4rem;height:2.4rem;" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/></svg>',
            'label' => 'Avoid one large<br>purchase',
        ],
        [
            'icon' => '<svg style="width:2.4rem;height:2.4rem;" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75a4.5 4.5 0 0 1-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 8.684a2.548 2.548 0 1 1-3.586-3.586l8.684-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 0 1 6.336-4.486l-3.276 3.276a3.004 3.004 0 0 0 2.25 2.25l3.276-3.276c.256.565.398 1.192.398 1.852Z"/></svg>',
            'label' => 'Installed and<br>maintained',
        ],
    ],
])

<!-- 7. PROOF — TESTIMONIALS -->
@include('components.testimonials', [
    'eyebrow'    => 'Customer Trust',
    'heading'    => 'What our customers say',
    'subheading' => 'Irish Laundry Systems is trusted by organisations that need clear communication, practical support and equipment knowledge when laundry performance affects cost, continuity and day-to-day operations.',
])

<!-- TRUST ANCHORS — proof / "Trusted by" logo strip -->
<div class="bg-white -mt-10 lg:-mt-16">
    @include('components.proof-bar')
</div>

<!-- 6.6 PREVENTIVE MAINTENANCE & AFTERCARE STRIP -->
@include('components.service-contracts-strip', [
    'headingLine1' => 'Keep service costs, maintenance and',
    'headingLine2' => 'next steps connected',
    'body'         => 'Planned maintenance and aftercare keep service history, equipment condition and follow-up needs clear, giving teams a better way to reduce surprise repair costs, protect equipment value and limit disruption over time.',
    'features'     => [
        ['icon' => 'ativo-7', 'label' => 'Reduce surprise repair costs'],
        ['icon' => 'ativo-8', 'label' => 'Protect equipment value'],
        ['icon' => 'ativo-4', 'label' => 'Minimise disruption'],
    ],
])

<!-- 8. FINAL CTA + SHORT FORM -->
@include('components.cta-downtime-form', [
    'pageSource' => 'homepage_cta',
    'eyebrow'    => 'Next Step',
    'heading'    => 'Start with the <span class="text-[#148af4]">right next step</span>',
    'body'       => 'Tell us what is under pressure, what equipment is involved and what needs to happen next. Irish Laundry Systems will connect the enquiry to the right service, rental, equipment or aftercare step.',
    'formTitle'  => 'Request a Service Assessment',
    'formIntro'  => 'Share the details that make the next step clearer.',
    'buttonText' => 'Request Service Assessment',
])

@endsection
