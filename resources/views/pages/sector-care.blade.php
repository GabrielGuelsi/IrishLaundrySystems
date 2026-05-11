@extends('layouts.app')

@section('meta')
<meta name="description" content="Care facility laundry support â€” equipment selection, installation, service contracts, repairs, parts and aftercare for care facilities across Ireland.">
@endsection

@section('content')

<!-- 1. HERO -->
<section class="relative overflow-hidden flex flex-col" style="height:720px; min-height:560px;">
    <img src="/images/CareFacilities/CareFacilitiesHero.png" alt="Care facility laundry"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-24 lg:py-32">
            <div class="max-w-3xl reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Care Facility Laundry Support</p>
                <h1 class="font-heading font-bold text-navy text-3xl lg:text-5xl leading-tight mb-4">
                    Laundry support for care facilities,<br>built around <span style="color:#148af4;">daily demand</span>,<br><span style="color:#148af4;">resident care</span> and site continuity.
                </h1>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8 max-w-2xl">
                    Irish Laundry Systems supports care facilities with equipment selection, installation, rental, service contracts, repairs, parts access and practical aftercare for laundry rooms that carry daily pressure.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#care-assessment"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Care Facility Assessment
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 border-2 border-navy hover:border-navy/70 text-navy font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-navy/10">
                        Talk to an Engineer
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Thin Electrolux Trust Strip -->
@include('components.partner-strip')

<!-- 3. Proof / Logo Strip -->
@include('components.proof-bar')

<!-- 4. INTRO COMMERCIAL BLOCK -->
<section class="py-16 lg:py-24 bg-white border-b border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <div class="reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Built for Care Facilities</p>
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-6xl leading-tight">
                    Purpose-built laundry support<br>for <span style="color:#148af4;">care facilities</span>.
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    Care facility laundry is part of daily care. Resident clothing, bedding, towels and linen need to move through the room without creating avoidable pressure for staff or delays for residents.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Irish Laundry Systems connects equipment selection, installation, service contracts, call-outs, rental, parts and aftercare into one practical support plan for the site.
                </p>
                <a href="{{ route('equipment') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy-dark text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    See the equipment we provide
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- 5. LAUNDRY AND HYGIENE-SENSITIVE HANDLING SUPPORT -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Laundry Room Pressure</p>
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-5xl leading-tight mb-4">
                Laundry support for <span style="color:#148af4;">resident items</span>,<br>linen flow and daily use.
            </h2>
            <ul class="space-y-2">
                <li class="flex items-start gap-3 font-body text-gray-600 text-base">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] mt-2 flex-shrink-0"></span>
                    Equipment specified around daily wash demand and room configuration
                </li>
                <li class="flex items-start gap-3 font-body text-gray-600 text-base">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] mt-2 flex-shrink-0"></span>
                    Supply, installation, rental, service and maintenance under one support structure
                </li>
                <li class="flex items-start gap-3 font-body text-gray-600 text-base">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] mt-2 flex-shrink-0"></span>
                    Practical support for wash, dry, finish, parts and aftercare decisions
                </li>
                <li class="flex items-start gap-3 font-body text-gray-600 text-base">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] mt-2 flex-shrink-0"></span>
                    Barrier options where controlled dirty-side and clean-side separation is required
                </li>
            </ul>
        </div>

        <!-- Image + Navy overlay card -->
        <div class="relative reveal">

            <div class="w-full lg:w-4/5 ml-auto rounded-2xl overflow-hidden">
                <img src="/images/CareFacilities/CareFacilitiesHero.png"
                     alt="Care facility laundry room"
                     class="w-full h-[580px] object-cover object-center">
            </div>

            <div class="lg:absolute lg:top-1/2 lg:-translate-y-1/2 lg:left-0 mt-6 lg:mt-0 w-full lg:w-[490px] bg-navy rounded-2xl p-10 shadow-2xl">
                <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-snug mb-6">
                    Care facility laundry needs a <span style="color:#148af4;">system designed for care</span>.
                </h3>
                <ul class="space-y-3">
                    @foreach([
                        'Resident clothing and linen handled with practical separation',
                        'Staff-friendly workflows that reduce unnecessary handling',
                        'Fabric care that supports resident items',
                        'Daily output planned around site pressure',
                        'Local support and parts access for continuity',
                    ] as $point)
                    <li class="flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-[#148af4] flex-shrink-0"></span>
                        <span class="font-body text-white text-sm">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>

    </div>
</section>

<!-- 6. COMPACT CARE FACILITIES BENTO -->
<section class="py-12 lg:py-16" style="background:#f5f5f7;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Daily Laundry Priorities</p>
            <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl leading-tight mb-3">
                Care facility laundry should support <span style="color:#148af4;">daily care</span>,<br>not create another pressure point.
            </h2>
            <p class="font-body text-gray-500 text-sm leading-relaxed max-w-3xl">
                The right laundry setup helps teams manage resident items, linen flow, staff handling, drying pressure and equipment support without turning the laundry room into a bottleneck.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-3">

            <div class="bg-white rounded-xl p-5 flex flex-col gap-3 col-span-1">
                <div class="flex items-center justify-center h-10">
                    <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="#148af4" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-sm leading-snug">Daily laundry demand</h3>
                    <p class="font-body text-gray-500 text-xs leading-relaxed">Resident clothing, bedding, towels and linen create repeated pressure across the week.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-3 col-span-1">
                <div class="flex items-center justify-center h-10">
                    <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="#148af4" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.05 4.575a1.575 1.575 0 1 0-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 0 1 3.15 0v1.5m-3.15 0 .075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 0 1 3.15 0V15M6.9 7.575a1.575 1.575 0 1 0-3.15 0v8.175a6.75 6.75 0 0 0 6.75 6.75h2.018a5.25 5.25 0 0 0 3.712-1.538l1.732-1.732a5.25 5.25 0 0 0 1.538-3.712l.003-2.024a.668.668 0 0 1 .198-.471 1.575 1.575 0 1 0-2.228-2.228 3.818 3.818 0 0 0-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0 1 16.35 15m.002 0h-.002"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-sm leading-snug">Staff handling</h3>
                    <p class="font-body text-gray-500 text-xs leading-relaxed">Equipment should support easier loading, unloading, drying and finishing for smaller care teams.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-3 col-span-1">
                <div class="flex items-center justify-center h-10">
                    <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="#148af4" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-sm leading-snug">Garment care and resident items</h3>
                    <p class="font-body text-gray-500 text-xs leading-relaxed">Professional washers help manage mixed loads, resident garments and hygiene-sensitive handling.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-3 col-span-1">
                <div class="flex items-center justify-center h-10">
                    <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="#148af4" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-sm leading-snug">Drying and finishing flow</h3>
                    <p class="font-body text-gray-500 text-xs leading-relaxed">Drying control and finishing capacity help keep clean items moving back into use.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-3 col-span-2 lg:col-span-1">
                <div class="flex items-center justify-center h-10">
                    <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="#148af4" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-sm leading-snug">Service and parts support</h3>
                    <p class="font-body text-gray-500 text-xs leading-relaxed">Maintenance, parts access and aftercare keep the installed base easier to manage.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 7. FOUR SERVICE CARDS -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Services</p>
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-3">
                Four ways we support<br><span style="color:#148af4;">care facility laundry</span>.
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-2xl">
                Care facilities often need equipment, maintenance, response and parts support to work together around the laundry room.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">

            @foreach([
                [
                    'title'  => 'Repairs &amp; Call-outs',
                    'text'   => 'Engineering support when faults or breakdowns put the laundry room under pressure.',
                    'cta'    => 'Request Call-out',
                    'route'  => route('repairs'),
                    'img'    => '/images/healthcare/repairs-callouts.jpg',
                    'pos'    => 'center 40%',
                ],
                [
                    'title'  => 'Service Contracts',
                    'text'   => 'Planned maintenance and service structure for sites that need better control over recurring issues.',
                    'cta'    => 'View Contracts',
                    'route'  => route('service-contracts'),
                    'img'    => '/images/healthcare/Service Contracts.png',
                    'pos'    => 'center 35%',
                ],
                [
                    'title'  => 'Equipment Rental',
                    'text'   => 'A practical option for replacement pressure, expansion or capital control, with equipment installed and supported.',
                    'cta'    => 'See Rental Options',
                    'route'  => route('rental'),
                    'img'    => '/images/healthcare/commercial-industrial.jpg',
                    'pos'    => 'center center',
                ],
                [
                    'title'  => 'Parts &amp; Aftercare',
                    'text'   => 'Genuine parts access, service history context and practical follow-up support around laundry equipment.',
                    'cta'    => 'Explore Support Options',
                    'route'  => route('service-contracts'),
                    'img'    => '/images/healthcare/Customer-Care_Line-6000-_001.jpg',
                    'pos'    => 'center 20%',
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
                    <div class="opacity-0 group-hover:opacity-100 translate-y-3 group-hover:translate-y-0 transition-all duration-300 mb-4">
                        <p class="font-body text-white/80 text-sm leading-relaxed mb-4">{!! $card['text'] !!}</p>
                        <span class="inline-flex items-center gap-2 bg-[#148af4] text-white font-heading font-bold text-xs px-4 py-2 rounded-lg">
                            {!! $card['cta'] !!}
                            <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </span>
                    </div>
                    <div class="flex items-end justify-between gap-3">
                        <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-tight">{!! $card['title'] !!}</h3>
                        <div class="flex-shrink-0 w-9 h-9 rounded-full bg-white/20 group-hover:bg-[#148af4] flex items-center justify-center transition-colors duration-300">
                            <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach

        </div>
    </div>
</section>

<!-- 8. PLANNING STRIP -->
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">

    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover"
             style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.85) 15%, rgba(20,138,244,0.3) 55%, transparent 100%);"></div>
    </div>

    <div class="relative z-10 px-10 lg:px-16 py-10 lg:py-14" style="width:100%; max-width:60%;">

        <h2 class="font-heading font-bold leading-tight mb-4">
            <span class="text-white text-3xl lg:text-5xl block">Designed around your</span>
            <span class="text-3xl lg:text-5xl block" style="color:#011E41;">care facility, workflow and capacity</span>
        </h2>

        <p class="font-body text-white text-base lg:text-lg leading-relaxed mb-6">
            We assess daily demand, space and staffing to define a laundry layout that works for your operation.
        </p>

        <div class="flex items-center flex-nowrap gap-0 mb-7">
            @foreach([
                ['icon' => 'ativo-20', 'label' => 'Workflow &amp;<br>layout'],
                ['icon' => 'ativo-10', 'label' => 'Equipment<br>selection'],
                ['icon' => 'ativo-21', 'label' => 'Capacity<br>planning'],
            ] as $i => $feat)
            @if($i > 0)
                <div class="w-px h-10 bg-white/30 mx-5 hidden sm:block flex-shrink-0"></div>
            @endif
            <div class="flex items-center gap-3">
                <div class="flex-shrink-0 flex items-center justify-center rounded-full"
                     style="width:52px;height:52px;border:2px dashed rgba(255,255,255,0.5);">
                    <img src="/images/icons/brand-white/{{ $feat['icon'] }}.svg"
                         style="width:1.6rem;height:1.6rem;" alt="">
                </div>
                <span class="font-body text-white text-xs font-bold leading-snug">{!! $feat['label'] !!}</span>
            </div>
            @endforeach
        </div>

        <a href="{{ route('contact') }}"
           class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
            Talk to an Engineer
        </a>

    </div>

</section>

@include('components.why-choose-strip')

@include('components.equipment-categories', ['equipment' => [
    ['img' => 'commercialwasher',         'name' => 'Commercial Washers',    'desc' => 'Commercial washers support daily wash demand across resident clothing, bedding, towels and mixed loads where capacity, wash quality and garment care matter.',                                       'scale' => '1.75'],
    ['img' => 'line6000-tumble-dryer',    'name' => 'Tumble Dryers',         'desc' => 'Tumble dryers support post-wash flow where drying time, residual moisture and operator handling can affect turnaround through the day.',                                                            'scale' => '1'],
    ['img' => 'IB623_FRONT_NEW', 'ext' => 'jpg', 'name' => 'Ironers & Flatwork', 'desc' => 'Ironers and finishing equipment support linen presentation, drying consistency, flatwork flow and storage readiness in care environments.',                                                   'scale' => '1.15'],
    ['img' => 'line6000-barrier-washer',  'name' => 'Barrier Washers',       'desc' => 'Barrier washers support sites where controlled dirty-side loading and clean-side unloading are required as part of the laundry room setup.',                                                       'scale' => '1.55'],
]])

<!-- 11. Service Contracts, Parts & Aftercare Strip -->
@include('components.service-contracts-strip')

<!-- 12. Testimonial / Proof Block -->
@include('components.testimonials')

<!-- 13. Final CTA / Form -->
@include('components.cta-downtime-form', ['pageSource' => 'care_cta'])

@endsection
