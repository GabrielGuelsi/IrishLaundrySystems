@extends('layouts.app')

@section('pageTitle', 'Semi-Professional Laundry Equipment Ireland | myPRO XL')

@section('meta')
<meta name="description" content="Step up from domestic laundry with Electrolux Professional myPRO XL, myPRO and myPROzip washers and dryers, supplied and supported by Irish Laundry Systems.">
@endsection

@section('content')

{{-- 1. HERO --}}
<section class="relative overflow-hidden flex flex-col lg:!h-[720px]" style="height:auto; min-height:560px;">
    <img src="/images/sectors/Line 6000 solutions products_72dpi.jpg" alt="Semi-professional laundry equipment"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.75) 42%, rgba(1,30,65,0.35) 65%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 sm:py-20 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-3xl">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Semi-Professional Laundry Equipment</p>
                <h1 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight mb-6">
                    Step up from domestic machines with <span style="color:#148af4;">myPRO XL and myPRO</span> laundry equipment
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    For small businesses where domestic washers and dryers are too slow, too small or wearing out too often. Irish Laundry Systems supplies and supports Electrolux Professional myPRO XL, myPRO and myPROzip equipment across Dublin and Ireland.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Equipment Advice
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white hover:border-white/70 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        Ask About myPRO XL
                    </a>
                </div>
                <div class="mt-8 flex flex-wrap items-center gap-x-3 gap-y-2 font-body font-semibold text-white/70 text-sm">
                    @foreach(['myPRO XL', 'myPRO', 'myPROzip', 'Irish engineering support since 1987'] as $i => $ti)
                    @if($i > 0)<span class="text-white/30">|</span>@endif
                    <span>{{ $ti }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 2. THIN ELECTROLUX TRUST STRIP --}}
@include('components.partner-strip')

{{-- 3. INTRO / BRIDGE --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">When Domestic Machines Are Not Enough</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    A stronger laundry setup for <span style="color:#148af4;">daily small-business use</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    Domestic machines can become a weak point when laundry is used every day for towels, bedding, uniforms, cloths, mops or guest items.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Semi-professional equipment gives smaller sites more capacity, durability and speed before moving into full commercial laundry scale. Irish Laundry Systems can advise whether myPRO XL, myPRO, myPROzip or Line 6000 is the right level for the room, workload and budget.
                </p>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    Talk to Our Team
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

{{-- 4. EQUIPMENT LEVEL GUIDE --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Equipment Level Guide</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Know when to step up, and <span style="color:#148af4;">how far to go</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                The right level depends on load size, daily use, room space and how much pressure laundry puts on the business.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 reveal">
            @foreach([
                ['step' => '01', 'title' => 'Domestic machines', 'copy' => 'For light household use, not repeated business laundry demand.', 'img' => '/images/equipment/Domestic%20machines.png'],
                ['step' => '02', 'title' => 'myPRO',             'copy' => 'For smaller sites that need a stronger step up from domestic equipment.', 'img' => '/images/equipment/myPRO-8K-washer.webp'],
                ['step' => '03', 'title' => 'myPRO XL',          'copy' => 'For busier small-business laundry with 12 kg capacity and heavier daily use.', 'img' => '/images/equipment/myPROXL%2012kg.webp'],
                ['step' => '04', 'title' => 'Line 6000',         'copy' => 'For larger capacity, intensive use and full commercial laundry performance.', 'img' => '/images/equipment/commercialwasher.webp'],
            ] as $lvl)
            <div class="bg-bg rounded-2xl overflow-hidden flex flex-col h-full border border-gray-100">
                <div class="bg-white flex items-center justify-center p-5 border-b border-gray-100" style="height:160px;">
                    <img src="{{ $lvl['img'] }}" alt="{{ $lvl['title'] }}" class="max-h-full w-auto object-contain">
                </div>
                <div class="p-7 flex flex-col flex-1">
                    <span class="font-heading font-bold text-[#148af4] text-xs tracking-[0.2em] mb-3">{{ $lvl['step'] }}</span>
                    <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $lvl['title'] }}</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $lvl['copy'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-8 reveal">
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                Ask Which Level Fits Your Site
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

{{-- 5. BUILT BEYOND DOMESTIC USE — only main proof section --}}
<section class="py-12 lg:py-16 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Built Beyond Domestic Use</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                More capacity, speed and durability than <span style="color:#148af4;">domestic laundry</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                myPRO and myPRO XL are built for smaller businesses that need laundry equipment working harder every day without moving straight to full commercial scale.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 reveal">
            @foreach([
                ['stat' => '3x longer',       'title' => 'Built beyond domestic use',     'body' => 'myPRO washers and dryers are designed to last three times longer than domestic machines.'],
                ['stat' => 'Up to 50%',       'title' => 'Faster washer programmes',      'body' => 'Shorter programmes can reduce waiting time during busy laundry periods.'],
                ['stat' => '12 kg',           'title' => 'More capacity with myPRO XL',   'body' => 'A practical step up for towels, bedding, workwear, mops and regular small-business laundry.'],
                ['stat' => '15,000+ cycles',  'title' => 'Durability for heavier daily use', 'body' => 'myPRO XL is built for busier sites that need stronger equipment in a compact format.'],
            ] as $proof)
            <div class="bg-white rounded-2xl p-7 border border-gray-100 shadow-sm flex flex-col h-full">
                <p class="font-heading font-bold text-navy text-3xl sm:text-4xl leading-tight tracking-tight mb-3">{{ $proof['stat'] }}</p>
                <div class="w-10 h-1 rounded-full bg-navy/15 mb-4"></div>
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $proof['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $proof['body'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 6. PRODUCT / RANGE SECTION --}}
<section class="py-16 lg:py-24 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Choose the Right myPRO Option</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Start with the setup that matches <span style="color:#148af4;">your daily laundry use</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Choose around load size, room space, who uses the machines and how often laundry needs to be washed and dried.
            </p>
        </div>

        @php
        $semiProCards = [
            [
                'name'      => 'myPRO XL',
                'topLine'   => 'Best fit for busier small-business laundry',
                'copy'      => 'A 12 kg semi-professional washer and dryer range for sites that need more capacity and durability without moving straight to Line 6000.',
                'badges'    => ['12 kg capacity', '15,000+ cycles', 'Faster programmes', 'Compact format'],
                'img'       => '/images/equipment/myPROXL 12kg.webp',
                'route'     => route('equipment.product', ['category' => 'semi-professional', 'product' => 'mypro-xl']),
                'featured'  => true,
            ],
            [
                'name'      => 'myPRO',
                'topLine'   => 'For smaller sites stepping up from domestic machines',
                'copy'      => 'A stronger washer, dryer and light finishing setup for small businesses with regular laundry demand.',
                'badges'    => ['8 kg washer options', '7,500 cycles', '3x longer', 'Up to 50% faster'],
                'img'       => '/images/equipment/myPRO-8K-washer.webp',
                'route'     => route('equipment.product', ['category' => 'semi-professional', 'product' => 'mypro-washer']),
                'featured'  => false,
            ],
            [
                'name'      => 'myPROzip',
                'topLine'   => 'For guest-operated laundry',
                'copy'      => 'Designed for shared or guest-operated laundry rooms where simple use and payment integration matter.',
                'badges'    => ['Guest-operated use', 'Simple controls', 'Payment-ready', 'Stronger than domestic'],
                'img'       => '/images/equipment/Self Service Laundry.png',
                'route'     => route('equipment.product', ['category' => 'semi-professional', 'product' => 'myprozip']),
                'featured'  => false,
            ],
            [
                'name'      => 'myPRO ironers / light finishing support',
                'topLine'   => 'For simple finishing needs',
                'copy'      => 'Light finishing support for sites that need practical ironing alongside washing and drying.',
                'badges'    => ['Light finishing', 'Compact format', 'Simple ironing', 'myPRO setup'],
                'img'       => '/images/equipment/myPRO - IronersIS185.jpg',
                'route'     => route('equipment.product', ['category' => 'semi-professional', 'product' => 'mypro-finishing']),
                'featured'  => false,
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 reveal">
            @foreach($semiProCards as $card)
            <div class="flex flex-col rounded-2xl p-6 bg-white {{ $card['featured'] ? 'border-2 border-[#148af4] relative shadow-md' : 'border border-gray-200' }}">
                @if($card['featured'])
                <span class="absolute -top-3 left-6 font-body text-[10px] font-bold uppercase tracking-wide text-white bg-[#148af4] px-2.5 py-1 rounded">Most capacity</span>
                @endif
                <a href="{{ $card['route'] }}" class="flex items-center justify-center h-60 lg:h-72 mb-5">
                    <img src="{{ $card['img'] }}" alt="{{ $card['name'] }}" class="max-h-full w-auto object-contain transition-transform duration-300 hover:-translate-y-1.5">
                </a>
                <p class="font-body text-xs font-bold text-navy/60 mb-1.5">{{ $card['topLine'] }}</p>
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">
                    <a href="{{ $card['route'] }}" class="hover:text-[#148af4] transition-colors">{{ $card['name'] }}</a>
                </h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-4">{{ $card['copy'] }}</p>
                <div class="flex flex-wrap gap-1.5 mb-5">
                    @foreach(array_slice($card['badges'], 0, 4) as $b)
                    <span class="font-body text-[10px] font-bold uppercase tracking-wide text-navy/70 bg-navy/[0.06] px-2 py-1 rounded">{{ $b }}</span>
                    @endforeach
                </div>
                <div class="mt-auto flex flex-col gap-2.5">
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/></svg>
                        Request Advice
                    </a>
                    <a href="{{ $card['route'] }}" class="inline-flex items-center justify-center gap-2 border border-gray-300 text-navy hover:border-navy font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                        View Details
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 7. TINY STRIP / CONSUMABLES LINK --}}
<section class="py-10 lg:py-12 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center">
            <div class="lg:col-span-9">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-2">Detergents &amp; Consumables</p>
                <h2 class="font-heading font-bold text-navy text-2xl sm:text-3xl leading-tight text-balance mb-2">
                    Detergent support for <span style="color:#148af4;">selected myPRO washer setups</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed max-w-3xl">
                    Selected myPRO washer setups can support external dosing and suitable Electrolux Professional detergents where specified.
                </p>
            </div>
            <div class="lg:col-span-3 flex lg:justify-end">
                <a href="{{ route('equipment.category', 'accessories') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-6 py-3.5 rounded-lg text-sm transition-colors whitespace-nowrap">
                    View Consumables
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- 8. WHERE SEMI-PROFESSIONAL LAUNDRY FITS --}}
<section class="py-12 lg:py-16 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Where It Fits</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Built for smaller sites with <span style="color:#148af4;">laundry working every day</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                myPRO and myPRO XL suit businesses where laundry is not industrial-scale, but still affects service, staff time and customer standards.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 reveal">
            @foreach([
                ['title' => 'B&amp;Bs, guesthouses and small hotels',          'copy' => 'For towels, robes and guest laundry where faster turnaround keeps rooms ready.', 'points' => ['Guest linen', 'Towels', 'Room readiness']],
                ['title' => 'Salons, spas and hairdressers',                    'copy' => 'For towels, robes and treatment textiles washed throughout the week.', 'points' => ['Towels', 'Robes', 'Daily use']],
                ['title' => 'Smaller care settings',                            'copy' => 'For resident items, bedding and towels where laundry demand fits semi-professional equipment.', 'points' => ['Resident items', 'Bedding', 'Towels']],
                ['title' => 'Restaurants, cafés and food service',              'copy' => 'For aprons, napkins and kitchen cloths where space is limited and laundry still needs to move.', 'points' => ['Aprons', 'Cloths', 'Limited space']],
                ['title' => 'Cleaning, facilities, sports and animal care',     'copy' => 'For mops, cloths, towels, uniforms and specialist daily laundry.', 'points' => ['Mops', 'Uniforms', 'Frequent washing']],
                ['title' => 'Shared, apartment and guest-operated laundry',     'copy' => 'For shared laundry rooms where simple use, durability and payment options may matter.', 'points' => ['Shared use', 'Guest operation', 'Payment-ready']],
            ] as $fit)
            <div class="bg-white border border-gray-100 rounded-2xl p-7 flex flex-col h-full shadow-sm">
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{!! $fit['title'] !!}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-5">{{ $fit['copy'] }}</p>
                <ul class="mt-auto space-y-1.5">
                    @foreach($fit['points'] as $pt)
                    <li class="font-body font-semibold text-navy text-sm flex items-center gap-2">
                        <span class="text-[#148af4]">&#9656;</span> {{ $pt }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 9. PLANNING / SITE FIT STRIP — Home-style medium-height strip (absorbs Right Fit Advice) --}}
@include('components.cta-combined-banner', [
    'eyebrow'    => 'Planning Before Installation',
    'heading'    => 'Fit semi-professional laundry around the <span style="color:#011E41;">room, workload and budget</span>',
    'body'       => 'Irish Laundry Systems can review the room, daily use, washer and dryer pairing, utilities and rental where suitable before recommending the right next step.',
    'miniPoints' => [
        ['icon' => 'home-planning-fit',    'label' => 'Room<br>fit'],
        ['icon' => 'home-planning-spend',  'label' => 'Daily<br>use'],
        ['icon' => 'home-planning-rework', 'label' => 'Utilities'],
    ],
    'ctaText'    => 'Request Equipment Advice',
])

{{-- 10. SERVICE AND SUPPORT OPTIONS --}}
<section class="py-16 lg:py-20 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Support Options</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Support to keep semi-professional laundry equipment <span style="color:#148af4;">running</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Irish Laundry Systems can support semi-professional laundry sites with repairs, Preventive Maintenance, rental options and aftercare.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                [
                    'title' => 'Repairs &amp; Call-Outs',
                    'text'  => 'For washer, dryer or finishing faults that need practical service support.',
                    'cta'   => 'Request a Repair',
                    'route' => route('repairs'),
                    'img'   => '/images/healthcare/repairs-callouts.jpg',
                    'pos'   => '50% 35%',
                ],
                [
                    'title' => 'Preventive Maintenance',
                    'text'  => 'Planned maintenance for sites that want fewer avoidable disruptions.',
                    'cta'   => 'View Preventive Maintenance',
                    'route' => route('service-contracts'),
                    'img'   => '/images/healthcare/service-contracts-hero.png',
                    'pos'   => '90% 35%',
                ],
                [
                    'title' => 'Equipment Rental',
                    'text'  => 'For selected equipment where lower upfront cost and included support make sense.',
                    'cta'   => 'See Equipment Rental',
                    'route' => route('rental'),
                    'img'   => '/images/healthcare/commercial-industrial.jpg',
                    'pos'   => 'center center',
                ],
                [
                    'title' => 'Support &amp; Aftercare',
                    'text'  => 'For service history, parts access where needed and clearer repair or replacement calls.',
                    'cta'   => 'Explore Support &amp; Aftercare',
                    'route' => route('parts-aftercare'),
                    'img'   => '/images/healthcare/services-overview-hero-portrait.jpg',
                    'pos'   => 'center center',
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

{{-- 11. RESOURCES --}}
<section class="py-16 lg:py-24 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Resources</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Official Electrolux Professional <span style="color:#148af4;">myPRO information</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Review official myPRO information or ask Irish Laundry Systems to advise on the right fit for your site.
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach([
                [
                    'title' => 'myPRO general leaflet',
                    'copy'  => 'Official Electrolux Professional information covering myPRO washers, dryers and light finishing support.',
                    'cta'   => 'Download myPRO Leaflet',
                    'href'  => '',
                    'download' => true,
                ],
                [
                    'title' => 'myPRO XL leaflet',
                    'copy'  => 'Official Electrolux Professional information covering myPRO XL capacity, durability and small-business use.',
                    'cta'   => 'Download myPRO XL Leaflet',
                    'href'  => '',
                    'download' => true,
                ],
                [
                    'title' => 'Need advice before choosing?',
                    'copy'  => 'Irish Laundry Systems can review load size, site use, space and budget before recommending the right level.',
                    'cta'   => 'Request Advice',
                    'href'  => route('request-assessment'),
                    'download' => false,
                ],
            ] as $res)
            <div class="bg-white border border-gray-200 rounded-2xl p-6 lg:p-8 flex flex-col h-full">
                <div class="w-10 h-1 rounded-full bg-[#148af4] mb-4"></div>
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $res['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-5">{{ $res['copy'] }}</p>
                @if($res['download'] && $res['href'])
                <a href="{{ $res['href'] }}" target="_blank" download class="mt-auto inline-flex items-center gap-2 font-body font-bold text-[#148af4] hover:underline text-sm w-fit">
                    {{ $res['cta'] }}
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                </a>
                @elseif($res['download'])
                <span class="mt-auto inline-flex items-center gap-2 font-body font-bold text-gray-400 text-sm w-fit cursor-not-allowed" aria-disabled="true" title="Leaflet coming soon">
                    {{ $res['cta'] }}
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                </span>
                @else
                <a href="{{ $res['href'] }}" class="mt-auto inline-flex items-center gap-2 font-body font-bold text-[#148af4] hover:underline text-sm w-fit">
                    {{ $res['cta'] }}
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 12. RELATED EQUIPMENT --}}
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Related Equipment</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Other equipment that may suit <span style="color:#148af4;">the same site</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Some sites need a larger washer, dryer, drying cabinet or finishing option depending on volume, item type and daily use.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach([
                ['title' => 'Commercial Washing Machines', 'copy' => 'For larger capacity, heavier use or full commercial laundry performance.', 'cta' => 'View Washing Machine Options', 'route' => route('equipment.category', ['category' => 'washers']), 'img' => '/images/equipment/commercialwasher.webp'],
                ['title' => 'Commercial Tumble Dryers',    'copy' => 'For higher drying demand where a commercial dryer is the better fit.', 'cta' => 'View Dryer Options', 'route' => route('equipment.category', ['category' => 'tumble-dryers']), 'img' => '/images/equipment/Tumble-dryers_Heat-Pump_1-1.webp'],
                ['title' => 'Drying Cabinets',             'copy' => 'For shoes, gloves, workwear, delicate garments and items that should not be tumble dried.', 'cta' => 'View Drying Cabinets', 'route' => route('equipment.category', ['category' => 'drying-cabinets']), 'img' => '/images/healthcare/Drying-cabinets_image.webp'],
                ['title' => 'Finishing Equipment',         'copy' => 'For ironing, pressing or light finishing alongside washing and drying.', 'cta' => 'View Finishing Equipment', 'route' => route('equipment.category', ['category' => 'finishing-equipment']), 'img' => '/images/equipment/IB623_FRONT_NEW.jpg'],
            ] as $card)
            <div class="bg-bg border border-gray-100 rounded-2xl overflow-hidden flex flex-col h-full">
                <div class="bg-white flex items-center justify-center p-5 border-b border-gray-100" style="height:170px;">
                    <img src="{{ $card['img'] }}" alt="{{ $card['title'] }}" class="max-h-full w-auto object-contain">
                </div>
                <div class="p-7 flex flex-col flex-1">
                    <div class="w-10 h-1 rounded-full bg-[#148af4] mb-4"></div>
                    <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $card['title'] }}</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed mb-5">{{ $card['copy'] }}</p>
                    <a href="{{ $card['route'] }}" class="mt-auto inline-flex items-center gap-2 font-body font-bold text-[#148af4] hover:underline text-sm">
                        {{ $card['cta'] }}
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 13. FAQ --}}
@include('components.faq', [
    'eyebrow' => 'Semi-Professional FAQs',
    'heading' => 'Questions before choosing <span style="color:#148af4;">myPRO or myPRO XL</span>',
    'faqs' => [
        ['question' => 'What is semi-professional laundry equipment?', 'answer' => 'Equipment for smaller businesses that need more durability, speed and capacity than domestic machines, without moving straight to full commercial scale.'],
        ['question' => 'When should a business step up from domestic machines?', 'answer' => 'When domestic machines are too slow, too small, wearing out too often or struggling with daily business laundry.'],
        ['question' => 'What is the difference between myPRO and myPRO XL?', 'answer' => 'myPRO suits smaller sites stepping up from domestic machines. myPRO XL gives more capacity, with 12 kg options and more than 15,000 cycles according to Electrolux Professional material.'],
        ['question' => 'What is myPROzip?', 'answer' => 'myPROzip is designed for guest-operated laundry rooms, with simple use and payment system integration.'],
        ['question' => 'Can semi-professional machines be rented?', 'answer' => 'Rental may be available where the selected equipment and site needs are suitable.'],
        ['question' => 'When should a site choose Line 6000 instead?', 'answer' => 'Choose Line 6000 where laundry demand, usage intensity or capacity needs move beyond semi-professional scale.'],
    ],
])

{{-- 14. FINAL CTA / FORM --}}
@include('components.cta-downtime-form', [
    'pageSource' => 'semi_professional_cta',
    'heading'    => 'Choose the right semi-professional laundry equipment <span style="color:#148af4;">for your site</span>',
    'body'       => 'Tell us what you wash, how often the machines are used and whether the laundry is staff-operated or guest-operated. Irish Laundry Systems will guide you toward the right equipment, rental or support option.',
    'formTitle'  => 'Request Semi-Professional Laundry Advice',
    'buttonText' => 'Request Equipment Advice',
])

@endsection
