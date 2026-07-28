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
    <img src="/images/pages/home/HOMEHERO1.png"
         alt="Commercial laundry operation"
         class="absolute inset-0 w-full h-full object-cover object-center transition-opacity ease-in-out duration-[1200ms]"
         :class="active === 0 ? 'opacity-100' : 'opacity-0'">
    <img src="/images/pages/home/HOMEHERO2.jpg"
         alt="Irish Laundry Systems engineering team on site"
         style="object-position: center 72%;"
         class="absolute inset-0 w-full h-full object-cover scale-125 transition-opacity ease-in-out duration-[1200ms]"
         :class="active === 1 ? 'opacity-100' : 'opacity-0'">

    <!-- Gradient overlay — tight, clears by 70% -->
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,1.00) 0%, rgba(1,30,65,0.92) 30%, rgba(1,30,65,0.50) 50%, rgba(1,30,65,0.10) 65%, transparent 75%);"></div>

    <!-- Text — vertically centered -->
    <div class="relative z-10 h-full flex items-center w-full">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16">
            <div class="max-w-4xl">

                <p class="hero-title font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Irish Laundry Specialists</p>

                <h1 class="hero-title font-heading font-bold text-white leading-tight mb-6 text-3xl sm:text-4xl lg:text-5xl">
                    <span class="block">Commercial laundry equipment</span>
                    <span class="block">and engineering expertise</span>
                    <span class="block text-[#148af4]">to keep operations running</span>
                </h1>

                <p class="hero-desc font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    From equipment selection and installation to equipment rental, maintenance, repairs and aftercare, Irish Laundry Systems reduces breakdown risk, limits costly downtime and keeps operating costs under control throughout the equipment&rsquo;s working life.
                </p>

                <div class="hero-btns flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center justify-center bg-orange hover:bg-orange-dark text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200 whitespace-nowrap">
                        Request an Assessment
                    </a>
                    <a href="{{ route('equipment') }}"
                       class="inline-flex items-center justify-center border-2 border-white hover:border-white/70 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10 whitespace-nowrap">
                        Browse Equipment
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

<!-- 1.5 INTRO / BRIDGE — Operational Performance -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Built Around The Operation</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">
            <div>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight">
                    <span class="block">Equipment decisions begin</span>
                    <span class="block">with <span class="text-[#148af4]">the room, the workload</span></span>
                    <span class="block text-[#148af4]">and the capacity needed</span>
                </h2>
            </div>
            <div class="flex flex-col gap-4">
                <p class="font-body text-gray-500 text-base leading-relaxed">
                    Room layout, workload, utilities, access, existing equipment and maintenance needs all influence operating cost, staff time and turnaround. Assessing them together gives owners and operators a clearer basis for capacity, installation and long-term investment.
                </p>
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
        ['title' => 'Repairs & Call-Outs',     'body' => 'Engineer-led fault diagnosis and repair to reduce downtime and return equipment to use.',          'cta' => 'Request Call-Out',         'href' => route('repairs'),           'img' => '/images/shared/repairs-callouts.jpg',             'alt' => 'Repairs and Call-Outs',   'pos' => 'center 40%'],
        ['title' => 'Preventive Maintenance',  'body' => 'Planned servicing helps reduce breakdown risk and downtime while keeping equipment in better condition.',                       'cta' => 'View Maintenance Options', 'href' => route('service-contracts'), 'img' => '/images/shared/service-contracts-hero.png',       'alt' => 'Preventive Maintenance',  'pos' => '80% center'],
        ['title' => 'Equipment Rental',        'body' => 'A lower upfront cost option for replacement or expansion, with equipment installed and maintained.',      'cta' => 'Explore Rental Options',   'href' => route('rental'),            'img' => '/images/shared/td6-11-multihousing-room-front.jpg', 'alt' => 'Equipment Rental',        'pos' => '66% center'],
        ['title' => 'Support & Aftercare',     'body' => 'Ongoing advice after installation or repair, with clear information on servicing, parts and future equipment needs.',                       'cta' => 'View Aftercare',           'href' => route('parts-aftercare'),  'img' => '/images/shared/services-overview-hero-portrait.jpg', 'alt' => 'Support & Aftercare', 'pos' => 'center center'],
    ],
])

<!-- 3.5 EQUIPMENT PLANNING STRIP -->
<div style="background-color:#148af4; margin-top:-1px; margin-bottom:-1px;">
    @include('components.cta-combined-banner', [
        'eyebrow'  => 'Equipment Planning',
        'heading'  => 'Plan capacity and layout around<br class="hidden lg:block"> <span style="color:#011E41;">daily laundry demand</span>',
        'body'     => 'We assess available space, required capacity and installation needs to prepare a practical equipment plan for your site and budget.',
        'features' => [
            ['img' => '/images/icons/home-planning-fit.png', 'label' => 'Space<br>Efficiency'],
            ['img' => '/images/icons/home-maintenance-value.png', 'label' => 'Right<br>Capacity'],
            ['img' => '/images/icons/home-planning-spend.png', 'label' => 'Cost<br>Control'],
        ],
        'ctaText'  => 'Plan Your Setup',
    ])
</div>

<!-- 4. SECTOR ROUTING TABS -->
 
@include('components.sector-switcher', [
    'heading'         => 'Commercial laundry planned around <span class="text-[#148af4]">your sector</span>',
    'intro'           => 'Choose your sector to explore equipment and service suited to its hygiene, capacity and turnaround needs.',
    'healthcareBody'  => 'For hospitals and healthcare facilities managing hygiene requirements, linen handling and clean linen availability.',
    'careBody'        => 'For care homes and residential settings managing resident clothing, bedding and regular daily loads.',
    'hospitalityBody' => 'For hotels and accommodation providers where guest-ready linen supports room presentation and turnaround.',
    'commercialBody'  => 'For commercial and industrial sites managing mixed loads, higher volumes and equipment uptime.',
    'healthcareCta'   => 'Explore Healthcare',
    'careCta'         => 'Explore Care Facilities',
    'hospitalityCta'  => 'Explore Hospitality',
    'commercialCta'   => 'Explore Commercial Laundry',
    'commercialImg'   => '/images/pages/home/0O3A9810_72dpi.jpg',
])

<!-- 6. EQUIPMENT TEASER — Product Category Grid -->
@include('components.equipment-categories', [
    'heading'    => '<span>Equipment categories selected around <span class="text-[#148af4]">workload and daily output</span></span>',
    'textMinH'   => '160px',
    'subheading' => 'The right equipment should fit the room, workload, daily use, running costs and the support needed to keep it performing.',
    'subheadingClass' => 'lg:whitespace-nowrap',
    'equipment' => [
        ['img' => 'commercialwasher', 'src' => '/images/pages/commercial-washers/commercialwasher.webp',              'name' => 'Washing Machines',     'desc' => 'For daily commercial washing where capacity, cycle control and fabric care all matter.', 'cta' => 'View Washing Machines', 'route' => ['equipment.category', ['category' => 'commercial-washers']], 'box' => 300, 'mb' => -35],
        ['img' => 'TD6-14', 'src' => '/images/pages/dryers/TD6-14.jpg', 'ext' => 'jpg',   'name' => 'Dryers',               'desc' => 'For regular drying demand where fabric care and steady turnaround matter.', 'cta' => 'View Dryers', 'route' => ['equipment.category', ['category' => 'tumble-dryers']], 'box' => 300],
        ['img' => 'DC6-15WW', 'src' => '/images/pages/drying-cabinets/workwear-dc6-15ww.jpg', 'name' => 'Drying Cabinets', 'desc' => 'For gentle drying of delicate garments, outdoor wear and specialist fabrics.', 'cta' => 'View Drying Cabinets', 'route' => ['equipment.category', ['category' => 'drying-cabinets']], 'box' => 300, 'mb' => 0],
        ['img' => 'IB623_FRONT_NEW', 'src' => '/images/pages/ironers/IB623_FRONT_NEW.jpg', 'ext' => 'jpg', 'name' => 'Ironers & Flatwork', 'desc' => 'For sheets, table linen and other flatwork requiring a consistent professional finish.', 'cta' => 'View Ironers', 'route' => ['equipment.category', ['category' => 'ironers']]],
    ],
])

<!-- 6.5 EQUIPMENT RENTAL STRIP — Keep laundry moving with capital control -->
@include('components.why-choose-strip', [
    'eyebrow'      => 'Equipment Rental',
    'headingLine1' => 'Commercial laundry equipment',
    'headingLine2' => '<span style="color:#148af4;">with lower upfront cost</span>',
    'body'         => 'For replacement or expansion, Equipment Rental includes equipment, installation and maintenance under the rental agreement.',
    'features' => [
        [
            'icon' => '<img src="/images/icons/home-rental-upfront.png" style="width:3.5rem;height:3.5rem;object-fit:contain;filter:brightness(0) invert(1);transform:scale(1.068);" alt="">',
            'label' => 'Lower<br>Outlay',
        ],
        [
            'icon' => '<img src="/images/icons/243.png" style="width:3.5rem;height:3.5rem;object-fit:contain;filter:brightness(0) invert(1);transform:scale(0.936);" alt="">',
            'label' => 'Planned<br>Payments',
        ],
        [
            'icon' => '<img src="/images/icons/healthcarerentalstrip3.png" style="width:3.5rem;height:3.5rem;object-fit:contain;filter:brightness(0) invert(1);transform:scale(0.910) translateY(-1.7%);" alt="">',
            'label' => 'Maintenance<br>Included',
        ],
    ],
])

<!-- 7. PROOF — TESTIMONIALS -->
@include('components.testimonials', [
    'eyebrow'    => 'Customer Feedback',
    'heading'    => 'What <span style="color:#148af4;">our customers say</span>',
    'subheading' => 'Feedback from organisations across Ireland on working with Irish Laundry Systems.',
])

<!-- TRUST ANCHORS — proof / "Trusted by" logo strip -->
<div class="bg-white -mt-10 lg:-mt-16">
    @include('components.proof-bar')
</div>

<!-- 6.6 PREVENTIVE MAINTENANCE & AFTERCARE STRIP -->
@include('components.service-contracts-strip', [
    'eyebrow'      => 'Preventive Maintenance & Aftercare',
    'headingLine1' => 'Keep maintenance planned',
    'headingLine2' => 'and equipment care organised',
    'body'         => 'Preventive servicing, clear records and parts support help teams manage equipment throughout its working life.',
    'features'     => [
        ['img' => '/images/icons/244.png', 'label' => 'Fewer Breakdowns', 'iconStyle' => 'transform:scale(1.039);'],
        ['img' => '/images/icons/home-planning-spend.png', 'label' => 'Cost Control', 'iconStyle' => 'transform:scale(0.996) translateY(-3.6%);'],
        ['img' => '/images/icons/151.png', 'label' => 'Parts Support', 'iconStyle' => 'transform:scale(0.851) translateY(-1.2%);'],
    ],
])

<!-- 8. FINAL CTA + SHORT FORM -->
@include('components.cta-downtime-form', [
    'pageSource' => 'homepage_cta',
    'eyebrow'    => 'Request an Assessment',
    'heading'    => 'Tell us what you need<br class="hidden lg:block"> <span class="text-[#148af4]">from your commercial laundry</span>',
    'body'       => 'Share whether your enquiry concerns equipment, rental, maintenance, repair or aftercare, together with the relevant site and equipment details.',
    'formTitle'  => 'Request a Service Assessment',
    'formIntro'  => 'Choose the enquiry type and provide the relevant site and equipment details.',
    'buttonText' => 'Request an Assessment',
])

@endsection
