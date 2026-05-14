@extends('layouts.app')

@section('pageTitle', 'Commercial Laundry Engineering Ireland | Service Contracts, Repairs & Equipment | Irish Laundry Systems')
@section('metaDescription', 'Engineering-led commercial laundry support since 1987. Service contracts, repairs, equipment rental and parts across the Republic of Ireland. Request a service assessment.')

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
            <div style="max-width: 620px;">

                <h1 class="hero-title font-heading font-bold text-white leading-[1.05] tracking-tight mb-6 text-4xl lg:text-5xl xl:text-6xl">
                    Commercial laundry engineering support for sites where <span class="text-[#148af4]">downtime carries real cost</span>
                </h1>

                <p class="hero-desc font-body text-white/80 leading-relaxed mb-10 text-lg max-w-xl">
                    Irish Laundry Systems supports healthcare, hospitality, care and commercial sites across Ireland with equipment supply, rental, installation, service contracts, repairs, parts access and practical aftercare.
                </p>

                <div class="hero-btns flex flex-row gap-4">
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center justify-center bg-orange hover:bg-orange-dark text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 whitespace-nowrap">
                        Request Service Assessment
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center border border-white/50 hover:border-white text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 hover:bg-white/10 whitespace-nowrap">
                        Talk to an Engineer
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
        <div class="grid grid-cols-1 lg:grid-cols-[3fr_2fr] gap-12 lg:gap-16">
            <div>
                <p class="font-body font-bold text-orange text-xs uppercase tracking-[0.22em] mb-4">Built Around the Operation</p>
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-4xl 2xl:text-5xl leading-tight">
                    Laundry support built around<br>the <span class="text-[#148af4]">site</span>, the <span class="text-[#148af4]">equipment</span><br>and the <span class="text-[#148af4]">next practical step</span>.
                </h2>
            </div>
            <div class="flex flex-col gap-3 lg:pt-[2.6rem]">
                <p class="font-body font-bold text-navy text-xl leading-snug whitespace-nowrap">
                    Irish Laundry Systems is not just an equipment supplier.
                </p>
                <p class="font-body text-gray-600 text-lg leading-relaxed whitespace-nowrap">
                    We connect equipment selection, installation, planned maintenance,<br>call-outs, rental, parts continuity and aftercare.<br>into one practical plan for the site.
                </p>
                <a href="{{ route('services') }}" class="inline-block font-body font-bold text-navy hover:text-navy/80 text-lg leading-snug transition-colors">
                    See how we <span class="text-[#148af4]">support</span> your site.
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 3. THREE CORE PATHWAYS -->
@include('components.services-cards', [
    'eyebrow'          => 'Services',
    'headingLead'      => 'Choose the right support for ',
    'headingHighlight' => 'your site',
    'highlightClass'   => 'text-[#148af4]',
    'intro'            => 'Four practical ways to get the right help for faults, planned maintenance, rental, parts access and aftercare.',
    'align'            => 'left',
    'cards'            => [
        ['title' => 'Repairs & Call-outs', 'body' => 'Engineering support for faults, breakdowns and performance issues when the laundry is under pressure.',                            'cta' => 'Request Call-out',        'href' => route('repairs'),           'img' => '/images/healthcare/repairs-callouts.jpg',             'alt' => 'Repairs and Call-outs', 'pos' => 'center 40%'],
        ['title' => 'Service Contracts',   'body' => 'Planned maintenance and service structure for sites that need better control over the installed base.',                              'cta' => 'View Contracts',          'href' => route('service-contracts'), 'img' => '/images/healthcare/Service%20Contracts.png',          'alt' => 'Service Contracts',     'pos' => 'center 35%'],
        ['title' => 'Equipment Rental',    'body' => 'A supported option for replacement pressure, expansion or capital control, with equipment installed and maintained.',                'cta' => 'See Rental Options',      'href' => route('rental'),            'img' => '/images/healthcare/lagoon-advanced-care.webp',        'alt' => 'Equipment Rental',      'pos' => 'center'],
        ['title' => 'Parts & Aftercare',   'body' => 'Genuine parts access, service history context and practical follow-up support around commercial laundry equipment.',                'cta' => 'Explore Support Options', 'href' => route('services'),          'img' => '/images/healthcare/services-overview-hero-portrait.jpg', 'alt' => 'Parts & Aftercare',  'pos' => 'center center'],
    ],
])

<!-- 3.5 PLANNING STRIP — Designed around your site, workflow and capacity -->
@include('components.cta-combined-banner')

<!-- 4. SECTOR ROUTING TABS -->
@include('components.sector-switcher')

<!-- 6. EQUIPMENT TEASER — Product Category Grid -->
<section class="py-20 lg:py-32 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <!-- Header -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-14">
            <div class="max-w-2xl">
                <p class="font-body font-bold text-orange text-xs uppercase tracking-[0.22em] mb-4">Browse by type</p>
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight">Equipment categories selected around<br class="hidden lg:inline"> <span class="text-[#148af4]">workflow and output</span>.</h2>
                <p class="font-body text-gray-500 text-lg mt-4">The right equipment should follow the room, the load profile, the handling process and the support behind the installed base.</p>
            </div>
            <a href="{{ route('equipment') }}"
               class="inline-flex self-start lg:self-auto lg:mb-2 items-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-5 py-3 rounded-full text-xs uppercase tracking-wide transition-all duration-200 whitespace-nowrap">
                Browse All Equipment
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

        {{-- 4 equipment cards --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
                ['img' => 'line6000-barrier-washer',  'name' => 'Barrier Washers',      'desc' => 'For controlled dirty-side and clean-side handling where the process demands separation.',                  'scale' => '1.55'],
                ['img' => 'commercialwasher',         'name' => 'Commercial Washers',    'desc' => 'For broader wash needs, daily capacity and consistent performance across professional laundry environments.',  'scale' => '1.75'],
                ['img' => 'line6000-tumble-dryer',    'name' => 'Tumble Dryers',         'desc' => 'For post-wash continuity, drying control and steady room flow through the day.',                              'scale' => '1'],
                ['img' => 'IB623_FRONT_NEW',          'name' => 'Ironers & Flatwork',    'desc' => 'For finishing, presentation and cleaner output flow across linen-heavy environments.',                          'scale' => '1.15', 'ext' => 'jpg'],
            ] as $eq)
            <div class="bg-white border border-gray-100 rounded-xl p-8 flex flex-col gap-6">
                <div class="min-h-[112px]">
                    <p class="font-heading font-bold text-navy text-2xl leading-snug mb-2">{{ $eq['name'] }}</p>
                    <p class="font-body text-gray-600 text-base leading-relaxed">{{ $eq['desc'] }}</p>
                </div>
                <div class="flex items-end justify-center h-96 rounded-lg overflow-hidden bg-white">
                    <img src="/images/equipment/{{ $eq['img'] }}.{{ $eq['ext'] ?? 'webp' }}"
                         alt="{{ $eq['name'] }}"
                         class="max-h-full max-w-full object-contain"
                         style="transform: scale({{ $eq['scale'] }}); transform-origin: bottom center;">
                </div>
                <a href="{{ route('equipment') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy-dark text-white font-heading font-bold text-base px-5 py-4 rounded-lg transition-colors mt-auto">
                    View Equipment
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>
            @endforeach
        </div>

    </div>
</section>

<!-- 6.5 EQUIPMENT RENTAL STRIP — Keep operations running without capital pressure -->
@include('components.why-choose-strip')

<!-- 7. PROOF — TESTIMONIALS -->
@include('components.testimonials', ['heading' => 'What our customers say.'])

<!-- 2. TRUST ANCHORS — proof strip -->
@include('components.proof-bar')

<!-- 6.6 SERVICE CONTRACTS, PARTS & AFTERCARE STRIP -->
@include('components.service-contracts-strip')

<!-- 8. FINAL CTA + SHORT FORM -->
@include('components.cta-downtime-form', ['pageSource' => 'homepage_cta'])

@endsection
