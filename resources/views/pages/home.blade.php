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

<section class="relative overflow-hidden" style="height: 720px; min-height: 560px; background-color: #011E41;">

    <!-- Background image -->
    <img src="/images/sectors/Line 6000 solutions products_72dpi.jpg"
         alt="Commercial laundry operation"
         class="absolute inset-0 w-full h-full object-cover object-center" style="transform: scale(1.2) translateX(2%);">

    <!-- Gradient overlay — tight, clears by 70% -->
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,1.00) 0%, rgba(1,30,65,0.92) 30%, rgba(1,30,65,0.50) 50%, rgba(1,30,65,0.10) 65%, transparent 75%);"></div>

    <!-- Text — vertically centered -->
    <div class="relative z-10 h-full flex items-center w-full">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16">
            <div style="max-width: 760px;">

                <h1 class="hero-title font-heading font-bold text-white leading-[1.05] tracking-tight mb-6 text-4xl lg:text-5xl xl:text-5xl">
                    Commercial laundry <span class="text-[#148af4]">engineering support</span> for sites where downtime carries real&nbsp;cost
                </h1>

                <p class="hero-desc font-body text-white leading-relaxed mb-10 text-lg max-w-xl">
                    Irish Laundry Systems helps commercial laundry sites make the right decision around equipment, rental, maintenance, repairs and aftercare, so operational risk, budget pressure and service needs are handled through one clear route.
                </p>

                <div class="hero-btns flex flex-row gap-4">
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

</section>

<!-- Electrolux Partner Strip -->
@include('components.partner-strip')

<!-- 1.5 INTRO / BRIDGE — Built Around the Operation -->
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">
        <p class="font-body font-bold text-orange text-xs uppercase tracking-[0.22em] mb-4">Built Around the Operation</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">
            <div>
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-4xl 2xl:text-5xl leading-tight text-balance">
                    Laundry care built around the <span class="text-[#148af4]">site</span>, the equipment and the next practical step
                </h2>
            </div>
            <div class="flex flex-col gap-4">
                <p class="font-body font-bold text-navy text-xl leading-snug">
                    Irish Laundry Systems is not just an equipment supplier.
                </p>
                <p class="font-body text-gray-600 text-lg leading-relaxed">
                    We help commercial sites connect equipment selection, installation, planned maintenance, call-outs, rental and aftercare into one practical route.
                </p>
                <p class="font-body text-gray-600 text-lg leading-relaxed">
                    That matters when laundry output affects cost, staffing pressure, service continuity and the life of the installed equipment.
                </p>
                <a href="{{ route('services') }}" class="inline-block font-body font-bold text-navy hover:text-navy/80 text-lg leading-snug transition-colors mt-2">
                    See how we support your site →
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 3. THREE CORE PATHWAYS -->
@include('components.services-cards', [
    'eyebrow'          => 'Services',
    'headingLead'      => 'Choose the right route for ',
    'headingHighlight' => 'your site',
    'headingTrail'     => '',
    'highlightClass'   => 'text-[#148af4]',
    'intro'            => 'Four practical routes for breakdowns, planned maintenance, rental pressure and ongoing equipment care.',
    'align'            => 'left',
    'cards'            => [
        ['title' => 'Repairs & Call-outs',     'body' => 'Engineering response when faults, breakdowns or performance issues put the laundry under pressure.',                                              'cta' => 'Request Call-out',         'href' => route('repairs'),           'img' => '/images/healthcare/repairs-callouts.jpg',             'alt' => 'Repairs and Call-outs',   'pos' => 'center 40%'],
        ['title' => 'Preventive Maintenance',  'body' => 'Planned maintenance contracts to help reduce downtime risk, improve service visibility and protect essential equipment over time.',                'cta' => 'View Maintenance Options', 'href' => route('service-contracts'), 'img' => '/images/healthcare/Service%20Contracts.png',          'alt' => 'Preventive Maintenance',  'pos' => 'center 35%'],
        ['title' => 'Equipment Rental',        'body' => 'A practical route for replacement pressure, expansion or capital control, with equipment installed and maintained.',                                'cta' => 'See Rental Options',       'href' => route('rental'),            'img' => '/images/healthcare/lagoon-advanced-care.webp',        'alt' => 'Equipment Rental',        'pos' => 'center'],
        ['title' => 'Aftercare & Support',     'body' => 'Follow-up care for installed equipment, service history, parts routes where required and practical assistance after repairs, rental, contracts or installation.', 'cta' => 'Explore Aftercare', 'href' => route('parts-aftercare'),  'img' => '/images/healthcare/services-overview-hero-portrait.jpg', 'alt' => 'Aftercare & Support', 'pos' => 'center center'],
    ],
])

<!-- 3.5 PLANNING STRIP — Designed around your site, workflow and capacity -->
@include('components.cta-combined-banner')

<!-- 4. SECTOR ROUTING TABS -->
@include('components.sector-switcher')

<!-- 6. EQUIPMENT TEASER — Product Category Grid -->
@include('components.equipment-categories', [
    'heading'    => 'Equipment categories selected around <span class="text-[#148af4]">workflow and output</span>',
    'textMinH'   => '160px',
    'subheading' => 'The right equipment should follow the room, the load profile, the handling process, lifecycle cost and the care behind the installed base.',
    'equipment' => [
        ['img' => 'line6000-barrier-washer',       'name' => 'Barrier Washers',      'desc' => 'For controlled dirty-side and clean-side handling where the process demands separation.',                 'box' => 270, 'mb' => -40],
        ['img' => 'commercialwasher',              'name' => 'Commercial Washers',   'desc' => 'For daily wash capacity, steady performance and broader professional laundry needs.', 'box' => 270, 'mb' => -35],
        ['img' => 'Tumble-dryers_Heat-Pump_1-1',   'name' => 'Tumble Dryers',        'desc' => 'For post-wash continuity, drying control and steady room flow through the day.',                          'box' => 245],
        ['img' => 'drying-cabinet', 'src' => '/images/healthcare/Drying-cabinets_image.webp', 'name' => 'Drying Cabinets', 'desc' => 'For gentle drying of delicate garments, bulky items and specialist fabric care.', 'box' => 260, 'mb' => 0],
        ['img' => 'IB623_FRONT_NEW', 'ext' => 'jpg', 'name' => 'Ironers & Flatwork', 'desc' => 'For finishing, presentation and cleaner output flow across linen-heavy environments.'],
    ],
])

<!-- 6.5 EQUIPMENT RENTAL STRIP — Keep laundry moving with capital control -->
@include('components.why-choose-strip')

<!-- 7. PROOF — TESTIMONIALS -->
@include('components.testimonials', ['heading' => 'What our <span class="text-[#148af4]">customers</span> say'])

<!-- TRUST ANCHORS — proof / "Trusted by" logo strip -->
@include('components.proof-bar')

<!-- 6.6 PREVENTIVE MAINTENANCE & AFTERCARE STRIP -->
@include('components.service-contracts-strip')

<!-- 8. FINAL CTA + SHORT FORM -->
@include('components.cta-downtime-form', [
    'pageSource' => 'homepage_cta',
    'eyebrow'    => 'Next Step',
    'heading'    => 'Start with the <span class="text-[#148af4]">right next step</span>.',
    'body'       => 'Tell us what is under pressure, what equipment is involved and what needs to happen next. Irish Laundry Systems will direct the enquiry to the right service, rental, equipment or aftercare conversation.',
    'formTitle'  => 'Request a Service Assessment',
    'formIntro'  => 'Share the details that help direct the enquiry properly.',
    'buttonText' => 'Request Service Assessment',
])

@endsection
