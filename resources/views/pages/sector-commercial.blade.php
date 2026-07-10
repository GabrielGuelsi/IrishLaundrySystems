@extends('layouts.app')

@section('meta')
<meta name="description" content="Commercial and industrial laundry support — equipment, rental, service contracts, repairs, parts and aftercare for high-demand laundry operations across Ireland.">
@endsection

@section('content')

<!-- 1. HERO -->
<section class="relative overflow-hidden flex flex-col min-h-[520px] lg:min-h-[560px] lg:h-[720px]">
    <img src="/images/shared/Line 6000 solutions products_72dpi.jpg" alt="Commercial laundry operation"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0 z-0" style="background: linear-gradient(to right, rgba(1,30,65,0.85) 0%, rgba(1,30,65,0.45) 50%, rgba(20,138,244,0.18) 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 sm:py-24 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-5xl">
                <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Commercial &amp; Industrial</p>
                <h1 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight mb-6">
                    <span style="color:#148af4;">Laundry equipment and support</span><br class="hidden lg:block"> for sites where downtime<br class="hidden lg:block"> carries real cost
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-5xl">
                    Irish Laundry Systems supplies, installs and supports Electrolux Professional laundry equipment for<br class="hidden lg:block"> commercial, industrial, shared-use and specialist laundry rooms. Rental, Preventive Maintenance,<br class="hidden lg:block"> repairs and aftercare can be shaped around daily use, room fit and equipment care.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#commercial-assessment"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Commercial Assessment
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white hover:border-white/70 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        Talk to Our Team
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('components.partner-strip')

<!-- INTRO COMMERCIAL BLOCK -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Room Planning</p>
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_1.28fr] gap-12 lg:gap-12 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    Plan the laundry room<br class="hidden lg:block"> around <span style="color:#148af4;">daily use and<br class="hidden lg:block"> operating demand</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    Commercial and industrial laundry rooms need equipment that matches the workload,<br class="hidden lg:block"> available space, utilities and running costs.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Irish Laundry Systems reviews the site, service history and laundry demand before recommending<br class="hidden lg:block"> Electrolux Professional equipment and support.
                </p>
                <a href="{{ route('equipment') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    View Commercial Laundry Equipment Options
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- SEGMENT / APPLICATION CARDS -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-12 reveal">
            <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Where This Fits</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
                Built for <span style="color:#148af4;">commercial, shared-use and specialist laundry environments</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                From commercial laundries and shared-use laundry rooms to facility management, protective workwear and remote sites,<br class="hidden lg:block"> the equipment setup needs to match daily use, textile type and operating demand.
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 reveal">
            @foreach([
                [
                    'title' => 'Facility Management &amp; Public Sector',
                    'items' => ['Managed buildings and councils', 'Schools and public-sector institutions', 'Shared-use laundry rooms'],
                    'icon'  => 'ativo-21',
                    'img'   => '/images/shared/FacilityManagementandPublicSites.png',
                    'pos'   => 'center center',
                ],
                [
                    'title' => 'Heavy-Duty Commercial Laundries',
                    'items' => ['Commercial laundries', 'Industrial laundries', 'High-volume laundry operations'],
                    'icon'  => 'ativo-9',
                    'img'   => '/images/pages/sectors/Heavy-DutyandHigh-volume.png',
                    'pos'   => 'center center',
                ],
                [
                    'title' => 'Multi-Housing, Self-Service &amp; Leisure',
                    'items' => ['Self-service laundries', 'Apartment blocks and managed accommodation', 'Gyms, spas and leisure facilities'],
                    'icon'  => 'ativo-20',
                    'img'   => '/images/pages/sectors/selfservice.png',
                    'pos'   => 'center center',
                ],
                [
                    'title' => 'Staff Uniforms &amp; Mixed Textiles',
                    'items' => ['Staff uniforms and workwear', 'Towels, mats and bedding', 'Mixed textiles in daily use'],
                    'icon'  => 'ativo-11',
                    'img'   => '/images/pages/sectors/workwear%2Cuniforms.png',
                    'pos'   => 'center center',
                ],
                [
                    'title' => 'Protective Workwear &amp; Controlled Laundry',
                    'items' => ['Fire brigade and emergency services', 'PPE and protective garments', 'Cleanroom, food processing and contamination-sensitive laundry'],
                    'icon'  => 'ativo-7',
                    'img'   => '/images/pages/sectors/Protective%20Workwear%20%26%20Controlled%20Laundry.jpeg',
                    'pos'   => 'center center',
                ],
                [
                    'title' => 'Marine, Transport &amp; Remote Sites',
                    'items' => ['Onboard and offshore facilities', 'Transport and crew-support sites', 'Remote sites where continuity matters'],
                    'icon'  => 'ativo-6',
                    'img'   => '/images/pages/sectors/Marine_navy.png',
                    'pos'   => '20% center',
                ],
            ] as $card)
            <div class="group relative overflow-hidden rounded-2xl" style="height:380px;">
                <img src="{{ $card['img'] }}" alt="{{ strip_tags($card['title']) }}"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                     style="object-position: {{ $card['pos'] }};">
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background:linear-gradient(to top, rgba(1,30,65,0.95) 0%, rgba(1,30,65,0.45) 45%, rgba(1,30,65,0.05) 75%, transparent 100%);"></div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background:rgba(1,30,65,0.90);"></div>
                <div class="absolute inset-0 p-7 flex flex-col justify-end z-10">
                    <ul class="font-body text-white/80 text-sm space-y-2 overflow-hidden max-h-0 opacity-0 group-hover:max-h-40 group-hover:opacity-100 transition-all duration-500 mb-0 group-hover:mb-5">
                        @foreach($card['items'] as $item)
                        <li class="flex items-start gap-2.5">
                            <span class="flex-shrink-0 mt-1.5 w-1.5 h-1.5 rounded-full bg-white/60"></span>
                            <span>{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <h3 class="font-heading font-bold text-white text-xl leading-snug">{!! $card['title'] !!}</h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Financial Performance Bento --}}
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Financial Performance</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Control <span style="color:#148af4;">running costs</span> across daily laundry use
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                High-use laundry rooms carry costs beyond purchase: water, energy, detergent, drying time, service visits and replacement timing.
            </p>
        </div>

        @include('components.financial-metrics', ['items' => [
            ['icon'=>'132', 'prefix'=>'Up to', 'stat'=>'90%',           'size'=>'text-4xl', 'label'=>'Post-purchase cost', 'labelClass'=>'translate-y-2', 'iconClass'=>'scale-[0.914] -translate-y-[1.5%]',  'body'=>'Water, energy and chemicals can drive most washer and dryer lifetime cost, so efficient equipment matters after purchase.'],
            ['icon'=>'6',   'prefix'=>'Up to', 'stat'=>'65%',           'size'=>'text-4xl', 'label'=>'Energy savings', 'labelClass'=>'translate-y-2', 'iconClass'=>'scale-[1.181] -translate-y-[13.2%]',      'body'=>'Electrolux Professional heat pump dryer technology can reduce dryer energy use in suitable applications.'],
            ['icon'=>'dosing-control', 'prefix'=>'Over', 'stat'=>'30%',  'size'=>'text-4xl', 'label'=>'Detergent savings', 'labelClass'=>'translate-y-2', 'iconClass'=>'scale-[1.051] -translate-y-[7.5%]',  'body'=>'Efficient dosing can reduce detergent use by applying the right amount at each cycle.'],
            ['icon'=>'19',  'prefix'=>'Up to', 'stat'=>'75%',           'size'=>'text-4xl', 'label'=>'Sick-day reduction', 'labelClass'=>'translate-y-2', 'iconClass'=>'scale-[1.03]',  'body'=>'Electrolux Professional ergonomic design can reduce handling strain in daily laundry work.'],
            ['icon'=>'166',  'prefix'=>'',     'stat'=>'Cost<br>control', 'size'=>'text-2xl', 'label'=>'planned service', 'labelClass'=>'translate-y-2', 'iconClass'=>'scale-[0.95] -translate-y-[3.6%]',     'body'=>'Preventive Maintenance and aftercare make service costs easier to plan and manage over time.'],
        ]])
    </div>
</section>

<!-- TECHNICAL PROOF ICONS -->
<section class="py-12 lg:py-16 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Technical Proof</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Built for <span style="color:#148af4;">daily use, textile mix and control</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Irish Laundry Systems matches selected Electrolux Professional features to load type, utility demand, operator handling and specialist laundry requirements.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-3">

            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/34.png" alt="" class="w-24 h-24 object-contain" style="transform:translateY(-14.8%) scale(1.489);">
                </div>
                <div class="text-center">
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Laundry volume</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Plan capacity around repeated use, peak periods and daily output.</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/169.png" alt="" class="w-24 h-24 object-contain" style="transform:translateY(0.6%);">
                </div>
                <div class="text-center">
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Textile mix</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Match the setup to uniforms, towels, bedding, mops and protective garments.</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/pmc-gain-90.png" alt="" class="w-24 h-24 object-contain" style="transform:translateY(0.2%) scale(1.099);">
                </div>
                <div class="text-center">
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Utility costs</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Plan water, energy, detergent and cycle efficiency from the start.</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/171.png" alt="" class="w-24 h-24 object-contain" style="transform:scale(1.106);">
                </div>
                <div class="text-center">
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Operator comfort</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Support staff comfort with ergonomic access, controls and programme setup.</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-2 lg:col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/172.png" alt="" class="w-24 h-24 object-contain" style="transform:translateY(-5.5%) scale(1.168);">
                </div>
                <div class="text-center">
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Hygiene control</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Assess barrier, cleanroom and hygiene-sensitive requirements for controlled environments.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FOUR SERVICE CARDS -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Support Options</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Service support that keeps <span style="color:#148af4;">commercial laundry rooms working</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Commercial and shared-use laundry rooms may need equipment advice, rental, Preventive Maintenance, breakdown support and aftercare around equipment already in use.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">

            @foreach([
                [
                    'title'  => 'Repairs &amp; Call-Outs',
                    'text'   => 'For urgent faults that can interrupt washing, drying, finishing or daily operations.',
                    'cta'    => 'Request Call-Out',
                    'route'  => route('repairs'),
                    'img'    => '/images/shared/Parts%20%26%20Aftercare.png',
                    'pos'    => 'center 40%',
                ],
                [
                    'title'  => 'Preventive Maintenance',
                    'text'   => 'For planned visits, service records and better care for equipment used every day.',
                    'cta'    => 'View Preventive Maintenance',
                    'route'  => route('service-contracts'),
                    'img'    => '/images/shared/service-contracts-hero.png',
                    'pos'    => '90% 35%',
                ],
                [
                    'title'  => 'Equipment Rental',
                    'text'   => 'For selected sites that need professional laundry equipment without one large purchase, where rental fits the room and equipment need.',
                    'cta'    => 'See Rental Options',
                    'route'  => route('rental'),
                    'img'    => '/images/shared/td6-11-multihousing-room-front.jpg',
                    'pos'    => '66% center',
                ],
                [
                    'title'  => 'Support &amp; Aftercare',
                    'text'   => 'For service history, parts access where needed and clearer repair, rental or replacement guidance after installation.',
                    'cta'    => 'Explore Support Options',
                    'route'  => route('service-contracts'),
                    'img'    => '/images/shared/services-overview-hero-portrait.jpg',
                    'pos'    => 'center center',
                ],
            ] as $card)
            <a href="{{ $card['route'] }}"
               class="group relative overflow-hidden rounded-2xl block"
               style="height:400px;">
                <img src="{{ $card['img'] }}" alt="{{ strip_tags($card['title']) }}"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                     style="object-position: {{ $card['pos'] }};">
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.4) 45%, rgba(1,30,65,0.05) 75%, transparent 100%);"></div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background: rgba(1,30,65,0.88);"></div>
                <div class="absolute inset-0 p-6 flex flex-col justify-end z-10">
                    <div class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-40 group-hover:opacity-100 transition-all duration-500 mb-4">
                        <p class="font-body text-white/80 text-sm leading-relaxed">{!! $card['text'] !!}</p>
                    </div>
                    <h3 class="font-heading font-bold text-white text-xl leading-tight mb-4 lg:whitespace-nowrap">{!! $card['title'] !!}</h3>
                    <div class="flex justify-end">
                        <span class="inline-flex items-center gap-2 bg-white/15 group-hover:bg-orange border border-white/30 group-hover:border-orange text-white font-body font-bold text-xs uppercase tracking-wide px-4 py-2.5 rounded-full transition-colors duration-200">
                            {!! $card['cta'] !!}
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </span>
                    </div>
                </div>
            </a>
            @endforeach

        </div>
    </div>
</section>

<!-- PLANNING STRIP -->
@include('components.cta-combined-banner', [
    'eyebrow'    => 'Site Planning',
    'heading'    => 'Plan the laundry room around<br class="hidden lg:block"> <span style="color:#011E41;">daily use,</span> <span style="color:#011E41;">room layout</span><br class="hidden lg:block"> and <span style="color:#011E41;">running cost</span>',
    'body'       => 'Before purchase, rental or replacement, review load types, utilities, access,<br class="hidden lg:block"> space and service needs together.',
    'miniPoints' => [
        ['icon' => 'home-planning-fit',    'label' => 'Room<br>fit'],
        ['icon' => 'home-planning-spend',  'label' => 'Cost<br>control'],
        ['icon' => '174', 'label' => 'Capacity<br>planning'],
    ],
    'ctaText'    => 'Talk to Our Team',
])

<!-- EQUIPMENT ROUTES -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-16 reveal">
            <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Electrolux Professional Equipment</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
                Equipment options for <span style="color:#148af4;">commercial laundry rooms</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                The right equipment choice depends on load type, room fit, drying demand, finishing needs, utility use and aftercare.
            </p>
        </div>

        <div class="flex flex-col divide-y divide-gray-100">

            <!-- 1. COMMERCIAL WASHERS — image left, text right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal">
                <div class="flex flex-col lg:ml-28">
                    <img src="/images/pages/commercial-washers/commercialwasher.webp"
                         alt="Commercial Washer"
                         class="w-full h-96 object-contain object-top">
                </div>
                <div class="lg:-ml-20 lg:mt-10">
                    <h3 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">Commercial <strong>Washers</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Commercial washers support daily use across workwear, towels, uniforms, bedding, mops and mixed textiles where <span style="color:#148af4;">wash quality, capacity and cycle control</span> matter.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Automatic Savings',
                            'Integrated Savings',
                            'Efficient Dosing',
                            'Power Balance',
                            'Reduced water, energy and detergent waste',
                        ] as $point)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="font-body text-gray-500 text-sm leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-row flex-wrap items-center gap-4">
                        <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            View Washing Machine Options
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Request Commercial Equipment Advice
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2. TUMBLE DRYERS — text left, image right -->
            <div x-data="{ open: false }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="order-2 lg:order-1">
                    <h3 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">Tumble <strong>Dryers</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Tumble dryers support <span style="color:#148af4;">controlled drying</span> where drying time, residual moisture, energy use and fabric protection affect daily work.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Up to 65% energy saving with Heat Pump technology',
                            'Moisture Balance to avoid overdrying',
                            'Adaptive Fan for energy and drying control',
                            'Smart Energy Management',
                            'Certified ergonomic design',
                            'Lower drying costs',
                        ] as $point)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="font-body text-gray-500 text-sm leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-row flex-wrap items-center gap-4 mb-6">
                        <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            View Dryer Options
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Request Commercial Equipment Advice
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col order-1 lg:order-2 lg:ml-20">
                    <img src="/images/pages/dryers/Tumble-dryers_Heat-Pump_1-1.webp"
                         alt="Line 6000 Tumble Dryer"
                         class="w-full h-96 object-contain object-left-top">
                    <div class="mt-1 pt-3">
                        <button @click="open = !open"
                                class="w-full flex items-center justify-start gap-3 text-left group pl-[20px]">
                            <span class="font-heading font-bold text-navy text-sm">System features: Heat Pump, Moisture Balance, Adaptive Fan</span>
                            <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div x-show="open" x-collapse class="py-6 border-t border-gray-100">
                <h4 class="font-heading font-bold text-navy text-xl mb-4">Dry not overdry</h4>
                <div class="flex items-start gap-6 mb-8">
                    <div class="w-32 h-32 flex-shrink-0">
                        <img src="/images/shared/MoistureBalance.png" alt="Moisture Balance" class="w-full h-full object-contain">
                    </div>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">
                        The Moisture Balance function measures the exact residual moisture level of the linen throughout the drying process and automatically <strong>stops the cycle</strong> once the desired level of hygienic dryness is achieved.
                    </p>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div class="relative w-full rounded-2xl overflow-hidden shadow-lg" style="padding-bottom: 56.25%;">
                        <iframe class="absolute inset-0 w-full h-full"
                                src="https://www.youtube.com/embed/Xm2CpX95zDM"
                                title="Tumble Dryers Ergonomics"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <div>
                        <h5 class="font-heading font-bold text-navy text-xl mb-3">Our dryers have earned the prestigious 4-star rating for ergonomics from ERGOCERT</h5>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">All models have been user-tested to ensure operators will feel less tension and strain, so they and your laundry operation can thrive.</p>
                    </div>
                </div>
            </div>
            </div>

            <!-- 3. IRONERS & FINISHING — image left, text right -->
            <div x-data="{ open: false, tab: 'diamms' }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="flex flex-col">
                    <img src="/images/shared/line6000-ironer.webp"
                         alt="Line 6000 Ironer"
                         class="w-full h-80 object-contain object-left-top">
                    <div class="mt-1 pt-3 w-full">
                        <button @click="open = !open" class="w-full flex items-center justify-start gap-3 text-left group pl-[10px]">
                            <span class="font-heading font-bold text-navy text-sm">System features: DIAMMS, Hygiene Guard, FoldFlex, Ceramic Burner</span>
                            <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </button>
                    </div>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">Ironers and <strong>Finishing</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Ironers and finishing equipment support <span style="color:#148af4;">flatwork output</span>, <span style="color:#148af4;">finish consistency</span> and storage-ready results where presentation standards matter.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Flatwork finishing',
                            'Output consistency',
                            'Presentation standards',
                            'Drying and finishing control',
                            'Repeated daily finishing demand',
                        ] as $point)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="font-body text-gray-500 text-sm leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-row flex-wrap items-center gap-4">
                        <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            View Ironer Options
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Request Commercial Equipment Advice
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div x-show="open" x-collapse class="py-6 border-t border-gray-100">
                <div class="flex gap-6 border-b border-gray-200 mb-8">
                    <button @click="tab = 'diamms'"
                            :class="tab === 'diamms' ? 'border-b-2 border-navy text-navy font-bold' : 'text-gray-400 hover:text-navy'"
                            class="font-heading text-sm pb-3 transition-colors">DIAMMS</button>
                    <button @click="tab = 'hygiene'"
                            :class="tab === 'hygiene' ? 'border-b-2 border-navy text-navy font-bold' : 'text-gray-400 hover:text-navy'"
                            class="font-heading text-sm pb-3 transition-colors">Hygiene Guard</button>
                </div>
                <div x-show="tab === 'diamms'">
                    <h4 class="font-heading font-bold text-navy text-xl mb-4">Maximum hygiene and performance</h4>
                    <div class="flex items-start gap-6 mb-8">
                        <div class="w-32 h-32 flex-shrink-0">
                            <img src="/images/shared/Diamms.png" alt="DIAMMS" class="w-full h-full object-contain">
                        </div>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">
                            Using DIAMMS™ technology, the Line 6000 Flatwork Ironers will automatically adapt the cylinder speed to the amount of moisture in the linen.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                        <div class="relative w-full rounded-2xl overflow-hidden shadow-lg" style="padding-bottom: 56.25%;">
                            <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/KER1S0tcqeE" title="Ironers DIAMMS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div>
                            <h5 class="font-heading font-bold text-navy text-xl mb-3">Extreme customization of the ironing and folding programs</h5>
                            <p class="font-body text-gray-500 text-sm leading-relaxed">FoldFlex ensures the highest quality at the end of the finishing process so that linen can be safely and securely stored, ready for the next use.</p>
                        </div>
                    </div>
                </div>
                <div x-show="tab === 'hygiene'">
                    <h4 class="font-heading font-bold text-navy text-xl mb-4">Pure Hygiene: Flawless Dry Linen Delivery</h4>
                    <div class="flex items-start gap-6 mb-8">
                        <div class="w-32 h-32 flex-shrink-0">
                            <img src="/images/shared/HygieneGuard.png" alt="Hygiene Guard" class="w-full h-full object-contain">
                        </div>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">
                            Hygiene Guard, in conjunction with DIAMMS™, will automatically reject any linen if it does not comply with the prescribed humidity parameters set by the RABC standards.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                        <div class="relative w-full rounded-2xl overflow-hidden shadow-lg" style="padding-bottom: 56.25%;">
                            <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/KER1S0tcqeE" title="Ironers Hygiene Guard" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div>
                            <h5 class="font-heading font-bold text-navy text-xl mb-3">Extreme customization of the ironing and folding programs</h5>
                            <p class="font-body text-gray-500 text-sm leading-relaxed">FoldFlex ensures the highest quality at the end of the finishing process so that linen can be safely and securely stored, ready for the next use.</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <!-- 4. BARRIER WASHERS / SPECIALIST WASHING — text left, image right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="order-2 lg:order-1">
                    <h3 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">Barrier <strong>Washers</strong> and Specialist Washing</h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Barrier washers and specialist washing support sites where separation, hygiene-sensitive handling or <span style="color:#148af4;">controlled laundry processes</span> are required.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Dirty-side and clean-side separation',
                            'Hygiene Watchdog full-cycle completion',
                            'AIDO controlled loading and unloading',
                            'Specialist laundry support',
                            'Suitable where controlled handling is required',
                        ] as $point)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="font-body text-gray-500 text-sm leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-col sm:flex-row sm:items-center gap-3">
                        <a href="{{ route('equipment') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-6 py-4 rounded-lg text-sm transition-colors duration-200 whitespace-nowrap w-fit">
                            View Barrier Washer Options
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-6 py-4 rounded-lg text-sm transition-colors duration-200 whitespace-nowrap w-fit">
                            Request Commercial Equipment Advice
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col order-1 lg:order-2">
                    <img src="/images/pages/barrier-washers/line6000-barrier-washer.webp"
                         alt="Barrier Washer"
                         class="w-full h-96 object-contain object-left-top">
                    <div class="mt-1 pt-3 w-full">
                        <span class="font-heading font-bold text-navy text-sm">System features: AIDO, Hygiene Watchdog, specialist handling</span>
                    </div>
                </div>
            </div>

            <!-- 5. DRYING CABINETS / SPECIALIST ITEMS — image left, text right -->
            <div x-data="{ open: false }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="order-2 lg:order-2">
                    <h3 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">Drying <strong>Cabinets</strong> and Specialist Items</h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Drying cabinets support gentle drying for workwear, protective clothing, bulky items, shoes, gloves and specialist garments where fabric protection matters.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Gentle non-mechanical drying',
                            'Dry 6kg cotton load in less than 45 minutes',
                            'Heat Pump version available where suitable',
                            'Protection for bulky and specialist items',
                            'Useful for PPE, workwear and mixed garment needs',
                        ] as $point)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="font-body text-gray-500 text-sm leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-col sm:flex-row sm:items-center gap-3 mb-6">
                        <a href="{{ route('equipment') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-6 py-4 rounded-lg text-sm transition-colors duration-200 whitespace-nowrap w-fit">
                            View Drying Cabinet Options
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-6 py-4 rounded-lg text-sm transition-colors duration-200 whitespace-nowrap w-fit">
                            Request Commercial Equipment Advice
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col order-1 lg:order-1 lg:mr-20">
                    <img src="/images/pages/drying-cabinets/Drying-cabinets_image.webp"
                         alt="Drying Cabinet"
                         class="w-full h-96 object-contain object-left-top">
                </div>
            </div>
            </div>

        </div>
    </div>
</section>

<!-- DOSING & LAUNDRY CONTROL CAROUSEL -->
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- Section header --}}
        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-2">Dosing &amp; Laundry Control</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Cut <span style="color:#148af4;">detergent waste</span> before it becomes an operating cost
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-6xl">
                Automatic dosing uses the right amount of detergent for each cycle, reducing chemical overuse, protecting textiles and supporting consistent wash results across repeated cycles.
            </p>
        </div>

        {{-- Carousel --}}
        @php
        $dosingProducts = [
            [
                'name'    => 'Multisave',
                'label'   => 'Multi-tank dosing with water saving',
                'body'    => 'Multisave combines dosing control with cylinder-to-cylinder water saving across multi-tank machines. It reduces the volume of water and detergent used per cycle without compromising wash quality or hygiene standards.',
                'points'  => ['Multi-tank machine compatible', 'Reduces water and detergent per cycle', 'Supports wash cycle optimisation'],
                'img'     => '/images/shared/MultisaveEQUIP.webp',
                'color'   => '#011E41',
            ],
            [
                'name'    => 'DOSAVE',
                'label'   => 'Precise dosing for consistent results',
                'body'    => 'DOSAVE delivers accurate detergent dosing for each wash cycle, reducing chemical overuse and waste. It supports more consistent wash quality while lowering detergent running cost over time.',
                'points'  => ['Accurate cycle-by-cycle dosing', 'Reduces chemical waste', 'Lowers detergent running cost'],
                'img'     => '/images/shared/DOSAVEEQUIP.webp',
                'color'   => '#0d2d5e',
            ],
            [
                'name'    => 'JETSAVE',
                'label'   => 'Jet-based dosing with integrated saving',
                'body'    => 'JETSAVE uses a water jet to mix and deliver detergent precisely into the drum. It is designed to reduce both water and detergent consumption while maintaining consistent wash performance across cycles.',
                'points'  => ['Jet-based detergent delivery', 'Water and detergent saving', 'Compatible with CompassPro control'],
                'img'     => '/images/shared/JetsaveEQUIP.webp',
                'color'   => '#0a2448',
            ],
            [
                'name'    => 'Efficient Dosing',
                'label'   => 'Integrated dosing through CompassPro',
                'body'    => 'Efficient Dosing integrates directly with CompassPro to ensure the correct amount of detergent is used in every cycle. It removes manual dosing decisions and supports lower chemical costs over time.',
                'points'  => ['Integrated with CompassPro', 'Removes manual dosing errors', 'Lower detergent cost per cycle'],
                'img'     => '/images/shared/efficientDosing_equip.webp',
                'color'   => '#011E41',
            ],
        ];
        @endphp

        <div
            x-data="{
                active: 0,
                count: 4,
                timer: null,
                next()  { this.active = (this.active + 1) % this.count; this.restart(); },
                prev()  { this.active = (this.active - 1 + this.count) % this.count; this.restart(); },
                go(i)   { this.active = i; this.restart(); },
                restart() { clearInterval(this.timer); this.timer = setInterval(() => this.next(), 5000); },
            }"
            x-init="timer = setInterval(() => next(), 5000)"
            class="relative"
        >
            {{-- Slides --}}
            <div class="grid [&>*]:[grid-area:1/1]">
                @foreach($dosingProducts as $i => $p)
                <div
                    class="transition-opacity duration-500"
                    :class="active === {{ $i }} ? 'opacity-100' : 'opacity-0 pointer-events-none'"
                >
                    <div class="grid grid-cols-1 lg:grid-cols-12" style="min-height:420px;">

                        {{-- Left: context photo --}}
                        <div class="lg:col-span-3 overflow-hidden pt-8 lg:pt-10" style="align-self:start;">
                            <img src="/images/shared/Laundry-Double-Banner-965x965-1.webp"
                                 alt="Electrolux Professional laundry equipment"
                                 class="w-full object-cover object-center" style="height:260px;">
                        </div>

                        {{-- Right: product name + tabs indicator + description + unit image --}}
                        <div class="lg:col-span-9 flex flex-col justify-between p-8 lg:p-10">

                            {{-- Tab indicators (product selector) --}}
                            <div class="flex gap-1 border-b border-gray-100 mb-6">
                                @foreach($dosingProducts as $j => $tab)
                                <button @click="go({{ $j }})"
                                        :class="active === {{ $j }} ? 'border-b-2 border-navy text-navy font-bold' : 'text-gray-400 hover:text-navy'"
                                        class="font-heading text-sm pb-3 pr-6 transition-colors whitespace-nowrap">
                                    {{ $tab['name'] }}
                                </button>
                                @endforeach
                            </div>

                            {{-- Content + unit image side by side --}}
                            <div class="flex flex-col sm:flex-row gap-6 items-start flex-1">

                                {{-- Copy --}}
                                <div class="flex-1">
                                    <p class="font-body font-bold text-[#148af4] text-sm mb-2">{{ $p['label'] }}</p>
                                    <p class="font-body text-gray-600 text-base leading-relaxed mb-5">{{ $p['body'] }}</p>
                                    <div class="flex items-center gap-8">
                                        <img src="/images/shared/clarusvibeicon.webp" alt="ClarusVibe" class="h-12 w-auto object-contain opacity-80">
                                        <img src="/images/shared/Compass-Pro_1-300x88.webp" alt="CompassPro" class="h-12 w-auto object-contain opacity-80">
                                    </div>
                                </div>

                                {{-- Unit image --}}
                                @if($p['img'])
                                <div class="flex-shrink-0 w-56 lg:w-80 flex items-center justify-center">
                                    <img src="{{ $p['img'] }}" alt="{{ $p['name'] }}"
                                         class="w-full h-auto object-contain">
                                </div>
                                @endif

                            </div>

                        </div>

                    </div>
                </div>
                @endforeach
            </div>

            {{-- Prev / Next buttons --}}
            <button @click="prev()"
                    class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-2 lg:-translate-x-14 w-10 h-10 rounded-full bg-white border border-navy/15 shadow text-navy hover:bg-navy hover:text-white transition-colors flex items-center justify-center z-10">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
            </button>
            <button @click="next()"
                    class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-2 lg:translate-x-14 w-10 h-10 rounded-full bg-white border border-navy/15 shadow text-navy hover:bg-navy hover:text-white transition-colors flex items-center justify-center z-10">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
            </button>

            {{-- Dot navigation --}}
            <div class="flex items-center justify-center gap-2 mt-3">
                @foreach($dosingProducts as $i => $p)
                <button
                    @click="go({{ $i }})"
                    :class="active === {{ $i }} ? 'bg-[#148af4] w-6' : 'bg-navy/20 hover:bg-navy/40 w-2'"
                    class="h-2 rounded-full transition-all duration-300">
                </button>
                @endforeach
            </div>

        </div>

        {{-- CTA --}}
        <div class="mt-4 text-center">
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-8 py-4 rounded-lg text-sm transition-colors duration-200">
                Ask About Dosing Systems
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

    </div>
</section>

@include('components.why-choose-strip', [
    'eyebrow' => 'Equipment Rental',
    'headingLine1' => 'Keep laundry moving with',
    'headingLine2' => '<span style="color:#148af4;">lower upfront cost</span>',
    'body' => 'Rental can support replacement, expansion or ageing equipment needs without one large purchase, where the available Electrolux Professional range fits the laundry room. Service and breakdown support are included under rental terms.',
    'miniPoints' => [
        ['icon' => 'healthcarerentalstrip1', 'label' => 'Lower upfront<br>cost'],
        ['icon' => '125', 'iconClass' => 'scale-125', 'iconStyle' => 'filter:brightness(0) invert(1);', 'label' => 'Range<br>fit'],
        ['icon' => 'healthcarerentalstrip3', 'label' => 'Included<br>support'],
    ],
])

@include('components.equipment-categories', [
    'heading' => 'Equipment categories for <span style="color:#148af4;">commercial and industrial laundry</span>',
    'subheading' => 'Use this section as a simple way into the main equipment categories. The detailed choice should still begin<br class="hidden lg:block"> with load type, room fit, utilities, running costs and service needs.',
    'subheadingClass' => 'max-w-none',
    'equipment' => [
        ['img' => 'line6000-barrier-washer', 'src' => '/images/pages/barrier-washers/line6000-barrier-washer.webp', 'name' => 'Barrier Washers', 'desc' => 'For sites that need controlled dirty-side and clean-side handling.', 'box' => 250, 'mb' => -20],
        ['img' => 'commercialwasher', 'src' => '/images/pages/commercial-washers/commercialwasher.webp',        'name' => 'Washing Machines', 'desc' => 'For daily wash demand across workwear, uniforms, towels, bedding, mops and mixed textiles.', 'box' => 270, 'mb' => -35],
        ['img' => 'Tumble-dryers_Heat-Pump_1-1', 'src' => '/images/pages/dryers/Tumble-dryers_Heat-Pump_1-1.webp',   'name' => 'Dryers',      'desc' => 'For controlled drying, fabric care and reliable daily turnaround.', 'box' => 245],
        ['img' => 'drying-cabinet', 'src' => '/images/pages/drying-cabinets/Drying-cabinets_image.webp', 'name' => 'Drying Cabinets', 'desc' => 'For gentle drying of workwear, protective clothing, bulky items, shoes and specialist garments.', 'box' => 260, 'mb' => 20],
        ['img' => 'IB623_FRONT_NEW', 'src' => '/images/pages/ironers/IB623_FRONT_NEW.jpg', 'ext' => 'jpg', 'name' => 'Ironers & Flatwork', 'desc' => 'For flatwork finishing, presentation standards and storage-ready results.'],
    ],
])

<!-- PROCESS BLOCK -->
<section class="py-14 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 text-center">How We Work</p>
        <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3 text-center">
            Clear advice before the next <span style="color:#148af4;">equipment or service decision</span>
        </h2>
        <p class="font-body text-gray-500 text-base mb-12 max-w-xl leading-relaxed text-center mx-auto">
            From room review through equipment advice, rental, Preventive Maintenance and aftercare, each step should make the next decision clearer.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-20">

            @foreach([
                ['title' => 'Understand the site',              'text' => 'Review daily use, space, utilities,<br>access, service history and operating priorities.',    'icon' => 'clipboard'],
                ['title' => 'Match the equipment',              'text' => 'Recommend the right washing, drying, finishing or specialist setup.',              'icon' => 'Ativo%204'],
                ['title' => 'Plan maintenance and aftercare', 'text' => 'Align equipment in use with Preventive<br>Maintenance, repairs, parts access where<br>needed and aftercare.', 'icon' => 'Ativo%206'],
                ['title' => 'Agree the next step',               'text' => 'Turn equipment needs and support requirements into a clear next step.',                        'icon' => 'Ativo%203'],
            ] as $i => $step)

            <div class="flex flex-col items-center text-center relative">
                @if($i < 3)
                <div class="hidden lg:block absolute -right-[3.125rem] top-[2.625rem] text-[#148af4]">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </div>
                @endif
                <div class="w-full flex justify-center items-center mb-4" style="height:8rem;">
                    <img src="/images/icons/{{ [126, 125, 127, 128][$i] }}.png" alt=""
                         style="width:7rem;height:7rem;filter:brightness(0) saturate(100%) invert(35%) sepia(96%) saturate(1500%) hue-rotate(196deg) brightness(103%);">
                </div>
                <h3 class="font-heading font-bold text-navy text-sm lg:text-base mb-1">{{ $step['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{!! $step['text'] !!}</p>
            </div>

            @endforeach

        </div>
    </div>
</section>

@include('components.service-contracts-strip', [
    'eyebrow'      => 'After Installation',
    'headingLine1' => '<span style="color:#ffffff;">Keep</span> service costs and maintenance',
    'headingLine2' => 'clearer after installation',
    'accentFirst'  => true,
    'body'         => 'Planned maintenance, service history and aftercare keep high-use laundry equipment easier to manage after installation, rental, repair or replacement.',
    'image'        => '/images/shared/Parts%20%26%20Aftercare.png',
    'miniPoints'   => [
        ['icon' => '149', 'iconClass' => 'scale-90', 'label' => 'Preventive<br>maintenance'],
        ['icon' => '61', 'iconClass' => 'scale-90', 'label' => 'Service<br>history'],
        ['icon' => '151', 'iconClass' => 'scale-90', 'label' => 'Parts<br>access'],
    ],
    'cta1Label'    => 'View Preventive Maintenance',
    'cta1Route'    => 'service-contracts',
    'cta2Label'    => 'Explore Support &amp; Aftercare',
    'cta2Route'    => 'parts-aftercare',
])

{{-- COMPACT RESOURCES BAR (official brochures — matches equipment pages) --}}
<section class="py-8 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 lg:gap-10">
            @foreach([
                ['title' => 'Official Resources', 'links' => [
                    ['l' => 'Line 6000 Washers & Dryers brochure', 'h' => '/pdfs/EPR_Line 6000 Washers and Dryers brochure-01072025_EN.pdf'],
                    ['l' => 'Detergents, Dosing Systems & Storage leaflet', 'h' => '/pdfs/EPR-leaflet-DetergentsDosingSystems-Storage_singlepageview.pdf'],
                    ['l' => 'Product resources', 'h' => route('resources')],
                ]],
                ['title' => 'Related Equipment', 'links' => [
                    ['l' => 'Commercial Washers', 'h' => route('equipment.category', 'commercial-washers')],
                    ['l' => 'Tumble Dryers', 'h' => route('equipment.category', 'tumble-dryers')],
                    ['l' => 'Dosing & Accessories', 'h' => route('equipment.category', 'accessories')],
                ]],
                ['title' => 'Advice & Support', 'links' => [
                    ['l' => 'Request laundry assessment', 'h' => route('request-assessment')],
                    ['l' => 'Support & Aftercare', 'h' => route('parts-aftercare')],
                    ['l' => 'Talk to our team', 'h' => route('contact')],
                ]],
            ] as $grp)
            <div class="{{ !$loop->last ? 'sm:border-r sm:border-gray-200 sm:pr-6 lg:pr-10' : '' }}">
                <p class="font-heading font-bold text-navy text-xs uppercase tracking-[0.16em] mb-3">{{ $grp['title'] }}</p>
                <div class="flex flex-col gap-2">
                    @foreach($grp['links'] as $lk)
                    <a href="{{ $lk['h'] }}" @if(str_ends_with($lk['h'], '.pdf')) target="_blank" rel="noopener" @endif
                       class="inline-flex items-center gap-1.5 font-body text-sm text-gray-600 hover:text-[#148af4] transition-colors">
                        <svg class="w-3.5 h-3.5 text-[#148af4] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        {{ $lk['l'] }}
                    </a>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@include('components.testimonials', [
    'eyebrow'    => 'Customer Trust',
    'heading'    => 'Trusted support for <span style="color:#148af4;">commercial laundry operations</span>',
    'subheading' => '',
])

@include('components.proof-bar')

@include('components.faq', [
    'eyebrow' => 'Commercial Laundry FAQs',
    'heading' => 'Questions before requesting a <span style="color:#148af4;">commercial laundry assessment</span>',
    'footerNote' => 'Have a different question? Talk to our team.',
    'faqs' => [
        ['question' => 'What types of commercial and industrial sites do you support?',        'answer' => 'Irish Laundry Systems supports commercial laundries, self-service and shared-use laundry rooms, managed residential sites, leisure and wellness facilities, public-sector sites, facility management environments, workwear operations and specialist laundry environments.'],
        ['question' => 'Can you help with high-volume or continuous-use laundry rooms?',       'answer' => 'Yes. Irish Laundry Systems can review daily use, cycle demand, room layout, utilities, drying needs, finishing requirements and maintenance history before recommending equipment and support.'],
        ['question' => 'Can professional laundry equipment reduce running costs?',             'answer' => 'Selected Electrolux Professional technologies can support lower energy, water and detergent use. Examples include Heat Pump drying, Automatic Savings, Integrated Savings, Intelligent Dosing and Efficient Dosing, depending on equipment and site configuration.'],
        ['question' => 'Can you support specialist laundry requirements?',                     'answer' => 'Yes. Irish Laundry Systems can advise on barrier washers, specialist washing, dosing systems, drying cabinets and other equipment where hygiene, workwear, PPE, mops, mixed textiles or process control are important.'],
        ['question' => 'Is rental available for commercial or industrial sites?',              'answer' => 'Yes. Equipment Rental can be discussed where a site needs replacement, expansion or continuity without one large purchase, where the available rental range fits the laundry room and equipment need.'],
        ['question' => 'What maintenance support is available?',                               'answer' => 'Preventive Maintenance can include scheduled visits, inspection, service reporting and practical follow-up. Support & Aftercare uses service history, parts access where needed and future equipment guidance.'],
        ['question' => 'Can you respond to urgent equipment faults?',                          'answer' => 'Yes. Repairs & Call-Outs are available for urgent faults. Requests are handled based on urgency, equipment details, site impact and service history.'],
        ['question' => 'Can you review an existing laundry setup before we replace equipment?', 'answer' => 'Yes. Irish Laundry Systems can assess current equipment, utility use, usage pattern, maintenance history and whether repair, rental, replacement or Preventive Maintenance is the right next step.'],
    ],
])

@include('components.cta-downtime-form', [
    'pageSource'  => 'commercial_cta',
    'heading'     => 'Ready to understand what your <span style="color:#148af4;">commercial laundry operation</span> is costing&nbsp;you?',
    'body'        => 'Tell us about your laundry room, equipment, daily use, service history and current requirement. Irish Laundry Systems will guide you toward equipment advice, an equipment quote, rental, Preventive Maintenance, repair or aftercare support.',
    'formTitle'   => 'Request a Commercial Laundry Assessment',
    'buttonText'  => 'Request Commercial Assessment',
])

@endsection
