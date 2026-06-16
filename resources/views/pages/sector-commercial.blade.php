@extends('layouts.app')

@section('meta')
<meta name="description" content="Commercial and industrial laundry support — equipment, rental, service contracts, repairs, parts and aftercare for high-demand laundry operations across Ireland.">
@endsection

@section('content')

<!-- 1. HERO -->
<section class="relative overflow-hidden flex flex-col min-h-[520px] lg:min-h-[560px] lg:h-[720px]">
    <img src="/images/sectors/Line 6000 solutions products_72dpi.jpg" alt="Commercial laundry operation"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 sm:py-24 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-5xl">
                <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Commercial &amp; Industrial Laundry Support</p>
                <h1 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight mb-6">
                    <span style="color:#011E41;">Keep</span> <span style="color:#148af4;">high-demand laundry</span><br><span style="color:#148af4;">operations</span> <span style="color:#011E41;">under control</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    Irish Laundry Systems supports commercial, industrial, institutional and specialist laundry sites with Electrolux Professional equipment selection, supply, rental, preventive maintenance, repairs and aftercare built around daily load, mixed textiles, running cost and keeping equipment running.
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
        <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Built for Operational Sites</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    Commercial laundry support built around <span style="color:#148af4;">output,</span> <span style="color:#148af4;">mixed textiles</span> and <span style="color:#148af4;">running cost</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    Commercial and industrial laundry sites often deal with heavier loads, mixed textiles, staff uniforms, mops, workwear, towels, bedding or specialist items moving through the same room. Poor equipment fit can increase utility cost, detergent waste, handling pressure, repair calls and replacement pressure.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Irish Laundry Systems brings equipment selection, supply, rental, preventive maintenance, repairs and aftercare together around how the laundry room is used, so sites can keep output moving with better cost control and clearer support.
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
                Built for demanding commercial, <span style="color:#148af4;">shared-use and specialist laundry environments</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                <span>From high-volume commercial laundries to self-service, managed residential, leisure, public-sector, workwear and specialist sites,</span><br>
                <span>the setup should match how the laundry is used every day.</span>
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 reveal">
            @foreach([
                [
                    'title' => 'Facility Management and Public Sites',
                    'items' => ['Managed buildings and councils', 'Schools and public-sector institutions', 'Multi-use and shared-service environments'],
                    'icon'  => 'ativo-21',
                    'img'   => '/images/healthcare/line-6000-solutions.jpg',
                    'pos'   => 'center 30%',
                ],
                [
                    'title' => 'Heavy-Duty and High-Volume Commercial Laundries',
                    'items' => ['Commercial laundries', 'Industrial laundries', 'Continuous-use laundry rooms'],
                    'icon'  => 'ativo-9',
                    'img'   => '/images/healthcare/commercial-industrial.jpg',
                    'pos'   => 'center center',
                ],
                [
                    'title' => 'Self-Service, Managed Residential, Leisure and Wellness',
                    'items' => ['Laundromats and self-service sites', 'Apartment blocks and managed accommodation', 'Gyms, spas, wellness and leisure facilities'],
                    'icon'  => 'ativo-20',
                    'img'   => '/images/healthcare/services-overview-hero.jpg',
                    'pos'   => 'center center',
                ],
                [
                    'title' => 'Workwear, Uniforms and Mixed Textiles',
                    'items' => ['Staff uniforms and workwear', 'Towels, mats and bedding', 'Mixed garments in daily operational routines'],
                    'icon'  => 'ativo-11',
                    'img'   => '/images/healthcare/repairs-callouts.jpg',
                    'pos'   => 'center 35%',
                ],
                [
                    'title' => 'Safety, PPE and Controlled Laundry Needs',
                    'items' => ['Fire brigade and emergency services', 'PPE, cleanroom and food processing', 'Contamination-sensitive laundry needs'],
                    'icon'  => 'ativo-7',
                    'img'   => '/images/healthcare/render-double-page_72dpi.jpg',
                    'pos'   => 'center center',
                ],
                [
                    'title' => 'Marine, Transport and Remote Sites',
                    'items' => ['Onboard and offshore facilities', 'Transport and crew-support sites', 'Remote facilities where continuity matters'],
                    'icon'  => 'ativo-6',
                    'img'   => '/images/healthcare/services-overview-hero-portrait.jpg',
                    'pos'   => 'center center',
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
                <span><span style="color:#148af4;">Control operating cost</span> before high-use laundry equipment</span>
                <span>quietly adds pressure</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                <span>In high-demand sites, laundry cost can build through energy use, water use, detergent waste, slow drying, handling pressure,</span><br>
                <span>last-minute repairs and equipment decisions made too late.</span>
            </p>
        </div>

        @include('components.financial-metrics', ['items' => [
            ['icon'=>'30', 'prefix'=>'',     'stat'=>'90%',            'size'=>'text-4xl', 'label'=>'life-cycle cost pressure', 'labelClass'=>'translate-y-2', 'iconClass'=>'scale-90',  'body'=>'Electrolux Professional highlights that upfront investment can be only 10% of washer or dryer cost, while water, energy and chemicals make up the majority of life-cycle cost.'],
            ['icon'=>'6',  'prefix'=>'Up to', 'stat'=>'-65%',           'size'=>'text-4xl', 'label'=>'dryer energy use', 'labelClass'=>'translate-y-2',              'body'=>'Electrolux Professional Heat Pump dryer technology can save up to 65% on energy consumption in suitable applications.'],
            ['icon'=>'39', 'prefix'=>'',     'stat'=>'30%+',           'size'=>'text-4xl', 'label'=>'detergent-cost saving', 'labelClass'=>'translate-y-2', 'iconClass'=>'scale-90',  'body'=>'Efficient Dosing can save over 30% on detergent costs by helping use the right amount of detergent at each cycle.'],
            ['icon'=>'3',  'prefix'=>'Up to', 'stat'=>'-75%',           'size'=>'text-4xl', 'label'=>'sick days', 'labelClass'=>'translate-y-2','body'=>'Electrolux Professional ergonomics material cites a 75% average decrease in sick days, alongside a 59% reduction in Work-related Musculoskeletal Disorders and a 25% productivity increase.'],
            ['icon'=>'11', 'prefix'=>'',     'stat'=>'Fewer<br>surprise<br>costs', 'size'=>'text-2xl', 'label'=>'repair and maintenance', 'labelClass'=>'translate-y-2',  'body'=>'Irish Laundry Systems brings equipment planning, rental, preventive maintenance, repairs and aftercare together, so commercial sites are not forced to make every decision after something fails.'],
        ]])
    </div>
</section>

<!-- TECHNICAL PROOF ICONS -->
<section class="py-12 lg:py-16 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Technical Proof</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Features that support <span style="color:#148af4;">output,</span> <span style="color:#148af4;">mixed textiles</span> and <span style="color:#148af4;">daily handling</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                The right setup supports volume, textile mix, turnaround pressure, utility use and equipment reliability when matched to the way the laundry room is used.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-3">

            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/34.png" alt="" class="w-32 h-32 object-contain">
                </div>
                <div class="text-center">
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Throughput and daily load</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Equipment and support planned around repeated use, busy periods and steady output.</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/35.png" alt="" class="w-28 h-28 object-contain">
                </div>
                <div class="text-center">
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Textile mix</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Planning for workwear, towels, uniforms, bedding, mops, Personal Protective Equipment (PPE) and specialist textiles.</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/26.png" alt="" class="w-28 h-28 object-contain">
                </div>
                <div class="text-center">
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Utility and dosing control</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Washer, dryer and dosing choices shaped around water, energy, detergent and cycle efficiency.</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/3.png" alt="" class="w-28 h-28 object-contain">
                </div>
                <div class="text-center">
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Operator handling and controls</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">ClarusVibe, CompassPro, ergonomic access and program setup support clearer daily equipment use.</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-2 lg:col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/38.png" alt="" class="w-28 h-28 object-contain">
                </div>
                <div class="text-center">
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Specialist laundry control</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Barrier, cleanroom, Personal Protective Equipment (PPE), hygiene-sensitive or controlled-environment options can be assessed where required.</p>
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
                Support that keeps <span style="color:#148af4;">commercial and industrial laundry moving</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                High-load sites often need equipment, rental, maintenance, breakdown support and aftercare to work around the same output, usage pressure and equipment in use.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">

            @foreach([
                [
                    'title'  => 'Repairs &amp; Call-Outs',
                    'text'   => 'For urgent equipment faults that can interrupt output, delay internal processes or increase pressure on staff.',
                    'cta'    => 'Request Call-Out',
                    'route'  => route('repairs'),
                    'img'    => '/images/healthcare/Parts%20%26%20Aftercare.png',
                    'pos'    => 'center 40%',
                ],
                [
                    'title'  => 'Preventive Maintenance',
                    'text'   => 'For sites that need planned visits, clearer maintenance control and fewer last-minute decisions around high-use equipment.',
                    'cta'    => 'View Preventive Maintenance',
                    'route'  => route('service-contracts'),
                    'img'    => '/images/healthcare/service-contracts-hero.png',
                    'pos'    => '90% 35%',
                ],
                [
                    'title'  => 'Equipment Rental',
                    'text'   => 'For sites that need professional laundry equipment without one large purchase upfront, where rental is the right fit.',
                    'cta'    => 'See Rental Options',
                    'route'  => route('rental'),
                    'img'    => '/images/healthcare/commercial-industrial.jpg',
                    'pos'    => 'center center',
                ],
                [
                    'title'  => 'Support &amp; Aftercare',
                    'text'   => 'For service history, parts support where needed and clearer maintenance, repair, rental or replacement decisions.',
                    'cta'    => 'Explore Support Options',
                    'route'  => route('service-contracts'),
                    'img'    => '/images/healthcare/services-overview-hero-portrait.jpg',
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
    'heading'    => 'Plan the laundry room around <span style="color:#011E41;">daily load</span>,<br class="hidden lg:block"> <span style="color:#011E41;">room layout</span> and <span style="color:#011E41;">running cost</span>',
    'body'       => 'Before equipment becomes a cost or service problem, daily load, room layout, utilities, access, site use and maintenance needs should be understood together.',
    'miniPoints' => [
        ['icon' => 'home-planning-fit',    'label' => 'Room<br>layout'],
        ['icon' => 'home-planning-spend',  'label' => 'Equipment<br>selection'],
        ['icon' => 'home-planning-rework', 'label' => 'Capacity<br>planning'],
    ],
    'ctaText'    => 'Talk to Our Team',
])

<!-- EQUIPMENT ROUTES -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-16 reveal">
            <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Electrolux Professional Equipment</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
                Equipment options for <span style="color:#148af4;">high-demand laundry environments</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                <span>The right equipment choice depends on daily load, textile mix, output pressure, drying demand, finishing needs,</span><br>
                <span>available space and the support needed to keep equipment performing.</span>
            </p>
        </div>

        <div class="flex flex-col divide-y divide-gray-100">

            <!-- 1. COMMERCIAL WASHERS — image left, text right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal">
                <div class="flex flex-col lg:ml-28">
                    <img src="/images/equipment/commercialwasher.webp"
                         alt="Commercial Washer"
                         class="w-full h-96 object-contain object-top">
                </div>
                <div class="lg:-ml-20 lg:mt-10">
                    <h3 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">Commercial <strong>Washers</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Commercial washers support daily load across workwear, towels, uniforms, bedding, mops and mixed textiles where <span style="color:#148af4;">wash quality, capacity and cycle control</span> matter.
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
                        Tumble dryers support <span style="color:#148af4;">drying demand</span> where drying time, residual moisture, energy use and fabric protection affect output through the day.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Up to 65% energy saving with Heat Pump technology',
                            'Moisture Balance to avoid overdrying',
                            'Adaptive Fan for energy and drying control',
                            'Smart Energy Management',
                            'Certified ergonomic design',
                            'Reduced drying-cost pressure',
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
                    <img src="/images/equipment/Tumble-dryers_Heat-Pump_1-1.webp"
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
                        <img src="/images/healthcare/MoistureBalance.png" alt="Moisture Balance" class="w-full h-full object-contain">
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
                    <img src="/images/equipment/line6000-ironer.webp"
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
                        Ironers and finishing equipment support <span style="color:#148af4;">flatwork output</span>, linen presentation, <span style="color:#148af4;">finish consistency</span> and storage readiness where finishing quality matters.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Flatwork finishing',
                            'Output consistency',
                            'Linen presentation',
                            'Drying and finishing control',
                            'Supports repeated daily finishing demand',
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
                            <img src="/images/healthcare/Diamms.png" alt="DIAMMS" class="w-full h-full object-contain">
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
                            <img src="/images/healthcare/HygieneGuard.png" alt="Hygiene Guard" class="w-full h-full object-contain">
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
                        Barrier washers and specialist washing support sites where separation, hygiene-sensitive handling or <span style="color:#148af4;">controlled laundry processes</span> are required as part of the laundry setup.
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
                    <div class="flex flex-row flex-wrap items-center gap-4">
                        <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            View Barrier Washer Options
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Request Commercial Equipment Advice
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col order-1 lg:order-2">
                    <img src="/images/equipment/line6000-barrier-washer.webp"
                         alt="Barrier Washer"
                         class="w-full h-96 object-contain object-left-top">
                    <div class="mt-1 pt-3 w-full">
                        <span class="font-heading font-bold text-navy text-sm">System features: AIDO, Hygiene Watchdog, specialist handling</span>
                    </div>
                </div>
            </div>

            <!-- 5. DRYING CABINETS / SPECIALIST ITEMS — text left, image right -->
            <div x-data="{ open: false }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="order-2 lg:order-1">
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
                            'Useful for Personal Protective Equipment (PPE), workwear and mixed garment needs',
                        ] as $point)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="font-body text-gray-500 text-sm leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-row flex-wrap items-center gap-4 mb-6">
                        <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            View Drying Cabinet Options
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Request Commercial Equipment Advice
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col order-1 lg:order-2 lg:ml-20">
                    <img src="/images/healthcare/Drying-cabinets_image.webp"
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
                <span><span style="color:#148af4;">Cut detergent waste</span> before it becomes</span>
                <span>another operating cost</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-6xl">
                <span>Automatic dosing supports high-use laundry rooms by using the right amount of detergent for each cycle.</span><br>
                <span>That can reduce waste, lower chemical overuse, protect textiles and support more consistent wash results over repeated daily use.</span>
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
                'img'     => '/images/healthcare/MultisaveEQUIP.webp',
                'color'   => '#011E41',
            ],
            [
                'name'    => 'DOSAVE',
                'label'   => 'Precise dosing for consistent results',
                'body'    => 'DOSAVE delivers accurate detergent dosing for each wash cycle, reducing chemical overuse and waste. It supports more consistent wash quality while lowering detergent running cost over time.',
                'points'  => ['Accurate cycle-by-cycle dosing', 'Reduces chemical waste', 'Lowers detergent running cost'],
                'img'     => '/images/healthcare/DOSAVEEQUIP.webp',
                'color'   => '#0d2d5e',
            ],
            [
                'name'    => 'JETSAVE',
                'label'   => 'Jet-based dosing with integrated saving',
                'body'    => 'JETSAVE uses a water jet to mix and deliver detergent precisely into the drum. It is designed to reduce both water and detergent consumption while maintaining consistent wash performance across cycles.',
                'points'  => ['Jet-based detergent delivery', 'Water and detergent saving', 'Compatible with CompassPro control'],
                'img'     => '/images/healthcare/JetsaveEQUIP.webp',
                'color'   => '#0a2448',
            ],
            [
                'name'    => 'Efficient Dosing',
                'label'   => 'Integrated dosing through CompassPro',
                'body'    => 'Efficient Dosing integrates directly with CompassPro to ensure the correct amount of detergent is used in every cycle. It removes manual dosing decisions and supports lower chemical costs over time.',
                'points'  => ['Integrated with CompassPro', 'Removes manual dosing errors', 'Lower detergent cost per cycle'],
                'img'     => '/images/healthcare/efficientDosing_equip.webp',
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
                            <img src="/images/healthcare/Laundry-Double-Banner-965x965-1.webp"
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
                                        <img src="/images/healthcare/clarusvibeicon.webp" alt="ClarusVibe" class="h-12 w-auto object-contain opacity-80">
                                        <img src="/images/healthcare/Compass-Pro_1-300x88.webp" alt="CompassPro" class="h-12 w-auto object-contain opacity-80">
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
    'eyebrow' => 'Rental Options',
    'headingLine1' => 'Keep laundry moving with',
    'headingLine2' => '<span style="color:#148af4;">lower upfront cost</span>',
    'body' => 'For commercial and industrial sites facing replacement pressure, expansion, ageing equipment or higher load demand, rental can keep laundry moving without one large purchase upfront, where rental is the right fit.',
    'miniPoints' => [
        ['icon' => 'healthcarerentalstrip1', 'label' => 'Lower upfront cost<br>where suitable'],
        ['icon' => 'healthcarerentalstrip2', 'label' => 'Installed and<br>supported'],
        ['icon' => 'healthcarerentalstrip3', 'label' => 'Service and breakdown support<br>included under rental terms'],
    ],
])

@include('components.equipment-categories', [
    'heading' => 'Equipment categories for <span style="color:#148af4;">commercial and industrial laundry</span>',
])

<!-- PROCESS BLOCK -->
<section class="py-14 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 text-center">How We Work</p>
        <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3 text-center">
            Clear advice before the next <span style="color:#148af4;">equipment or service decision</span>
        </h2>
        <p class="font-body text-gray-500 text-base mb-12 max-w-xl leading-relaxed text-center mx-auto">
            From site assessment through to equipment advice, rental, preventive maintenance and aftercare, each step should make the next decision easier.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-20">

            @foreach([
                ['title' => 'Understand the site',              'text' => 'Review daily load, space, utilities,<br>access, equipment pressure and operating priorities.',    'icon' => 'clipboard'],
                ['title' => 'Match the equipment',              'text' => 'Recommend the right washing, drying, finishing or specialist setup.',              'icon' => 'Ativo%204'],
                ['title' => 'Plan maintenance and aftercare', 'text' => 'Match equipment in use to preventive<br>maintenance, repairs, parts support where<br>needed and practical aftercare.', 'icon' => 'Ativo%206'],
                ['title' => 'Agree the next step',               'text' => 'Turn the site, equipment needs and support needed into a clear next step.',                        'icon' => 'Ativo%203'],
            ] as $i => $step)

            <div class="flex flex-col items-center text-center relative">
                @if($i < 3)
                <div class="hidden lg:block absolute -right-16 top-8 text-[#148af4]">
                    <svg class="w-24 h-10" viewBox="0 0 120 30" fill="none">
                        <path d="M0 15 L96 15 M78 4 L96 15 L78 26" stroke="#148af4" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                @endif
                <div class="w-full flex justify-center items-center mb-4" style="height:8rem;">
                    <img src="/images/icons/{{ 125 + $i }}.png" alt=""
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
    'headingLine1' => 'Keep service costs, maintenance and',
    'headingLine2' => '<span style="color:#011E41;">next steps</span> clear after installation',
    'accentFirst'  => true,
    'body'         => 'Planned maintenance, service history and aftercare help commercial and industrial sites keep high-use laundry equipment easier to manage after installation, rental, repair or replacement.',
    'image'        => '/images/healthcare/Parts%20%26%20Aftercare.png',
    'miniPoints'   => [
        ['icon' => 'aftercarehealthcarestrip1', 'label' => 'Preventive<br>maintenance'],
        ['icon' => 'aftercarehealthcarestrip2', 'label' => 'Service<br>history'],
        ['icon' => 'aftercarehealthcarestrip3', 'label' => 'Parts support<br>where needed'],
    ],
    'cta1Label'    => 'View Preventive Maintenance',
    'cta1Route'    => 'service-contracts',
    'cta2Label'    => 'Explore Support &amp; Aftercare',
    'cta2Route'    => 'parts-aftercare',
])

@include('components.testimonials', [
    'eyebrow'    => 'Customer Trust',
    'heading'    => 'Trusted support for <span style="color:#148af4;">commercial laundry decisions</span>',
    'subheading' => '',
])

@include('components.proof-bar')

@include('components.faq', [
    'eyebrow' => 'Commercial Laundry FAQs',
    'heading' => 'Questions before requesting a <span style="color:#148af4;">commercial laundry assessment</span>',
    'faqs' => [
        ['question' => 'What types of commercial and industrial sites do you support?',        'answer' => 'Irish Laundry Systems supports commercial laundries, self-service and shared-use laundry rooms, managed residential sites, leisure and wellness facilities, public-sector sites, facility management environments, workwear operations and specialist laundry environments where equipment reliability matters.'],
        ['question' => 'Can you help with high-volume or continuous-use laundry rooms?',       'answer' => 'Yes. Irish Laundry Systems can review daily load, cycle demand, room layout, utilities, drying pressure, finishing needs and maintenance history before recommending the right equipment and support.'],
        ['question' => 'Can professional laundry equipment reduce running costs?',             'answer' => 'Selected Electrolux Professional technologies can support lower energy, water and detergent use. Examples include Heat Pump drying, Automatic Savings, Integrated Savings, Intelligent Dosing and Efficient Dosing, depending on the equipment and site configuration.'],
        ['question' => 'Can you support specialist laundry requirements?',                     'answer' => 'Yes. Irish Laundry Systems can advise on barrier washers, specialist washing, dosing systems, drying cabinets and other equipment options where hygiene, workwear, Personal Protective Equipment (PPE), mops, mixed textiles or process control are important.'],
        ['question' => 'Is rental available for commercial or industrial sites?',              'answer' => 'Yes. Equipment Rental can be discussed where a site needs replacement, expansion or continuity without one large purchase upfront, where rental is suitable for the site.'],
        ['question' => 'What maintenance support is available?',                               'answer' => 'Preventive maintenance can include scheduled visits, inspection, service reporting and practical follow-up. Support & Aftercare uses service history, parts support where needed and future equipment decisions.'],
        ['question' => 'Can you respond to urgent equipment faults?',                          'answer' => 'Yes. Repairs & Call-Outs are available for urgent faults. Requests are handled based on urgency, equipment details, site pressure and maintenance history.'],
        ['question' => 'Can you review an existing laundry setup before we replace equipment?', 'answer' => 'Yes. Irish Laundry Systems can assess the current equipment, utility pressure, usage pattern, maintenance history and whether repair, rental, replacement or preventive maintenance is the right next step.'],
    ],
])

@include('components.cta-downtime-form', [
    'pageSource'  => 'commercial_cta',
    'heading'     => 'Ready to understand what your <span style="color:#148af4;">commercial laundry operation</span> is costing you',
    'body'        => 'Talk to Irish Laundry Systems about your site, equipment, daily load, maintenance history and current pressure. We will guide you toward the right equipment advice, equipment quote, rental, preventive maintenance, repair or aftercare support.',
    'formTitle'   => 'Request a Commercial Laundry Assessment',
    'buttonText'  => 'Request Commercial Assessment',
])

@endsection
