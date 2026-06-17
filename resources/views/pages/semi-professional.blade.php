@extends('layouts.app')

@section('pageTitle', 'Semi-Professional Laundry Equipment Ireland | myPRO | Irish Laundry Systems')

@section('meta')
<meta name="description" content="Step up from domestic laundry with Electrolux Professional myPRO and myPRO XL washers, dryers and light finishing equipment, supplied and supported by Irish Laundry Systems.">
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
                    Semi-professional laundry<br class="hidden lg:block"> equipment for small businesses<br class="hidden lg:block"> <span style="color:#148af4;">ready to step up</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    Step up from domestic laundry without buying more machine than your site needs. Electrolux Professional myPRO gives smaller businesses stronger washers, dryers and light finishing support when domestic machines are too slow, too small or wearing out too often.
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
            </div>
        </div>
    </div>
</section>

{{-- 2. UNIVERSAL THIN ELECTROLUX TRUST STRIP --}}
@include('components.partner-strip')

{{-- 3. INTRO / BRIDGE --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">When Domestic Machines Are Not Enough</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    A stronger laundry setup for <span style="color:#148af4;">real daily use</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    Domestic laundry machines can become a weak point when towels, bedding, robes, uniforms, cloths, mops, workwear or guest laundry need to be washed and dried every day. Slow cycles, limited capacity and repeated wear can put pressure on staff, managers and operating costs.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Semi-professional laundry equipment gives smaller sites a stronger and more practical choice before moving into larger commercial laundry scale. Irish Laundry Systems can advise whether myPRO, myPRO XL, myPROzip or a full commercial Line 6000 option is the right fit for the room, workload and budget.
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
                The right choice depends on daily volume, load type, available space, budget and how much pressure the laundry puts on the site.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 reveal">
            @foreach([
                ['step' => '01', 'title' => 'Domestic machines', 'copy' => 'For light household use, not repeated business laundry demand.', 'img' => '/images/equipment/Domestic%20machines.png'],
                ['step' => '02', 'title' => 'myPRO',             'copy' => 'For smaller businesses that need stronger, faster equipment without moving straight to full commercial scale.', 'img' => '/images/equipment/myPRO-8K-washer.webp'],
                ['step' => '03', 'title' => 'myPRO XL',          'copy' => 'For bigger small-business loads, heavier daily use and more capacity in a compact format.', 'img' => '/images/equipment/myPROXL%2012kg.webp'],
                ['step' => '04', 'title' => 'Line 6000',         'copy' => 'For heavier laundry demand, larger capacity needs and full commercial performance.', 'img' => '/images/equipment/commercialwasher.webp'],
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

{{-- 5. FINANCIAL & OPERATIONAL PROOF --}}
<section class="py-12 lg:py-16 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Financial &amp; Operational Proof</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Lower pressure on <span style="color:#148af4;">time, reliability and daily laundry costs</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Semi-professional equipment is built for businesses that need more than domestic performance, while still keeping capacity, space and budget under control.
            </p>
        </div>

        @include('components.financial-metrics', ['items' => [
            ['icon'=>'24', 'prefix'=>'',      'stat'=>'3x',                              'size'=>'text-4xl', 'label'=>'Longer lifetime than domestic machines',      'body'=>'myPRO washers and dryers are designed to last three times longer than domestic machines, helping reduce replacement pressure for small businesses.'],
            ['icon'=>'34', 'prefix'=>'Up to', 'stat'=>'50%',                             'size'=>'text-4xl', 'label'=>'Faster washer programmes',                    'body'=>'myPRO washer programmes can run up to 50% faster than domestic alternatives, helping reduce delays during busy laundry periods.'],
            ['icon'=>'30', 'prefix'=>'',      'stat'=>'Save water,<br>energy and<br>money', 'size'=>'text-2xl', 'label'=>'Lower daily running costs',                'body'=>'SpeedCare drum and Automatic Moisture Control help reduce cycle time, drying pressure and everyday laundry costs.'],
            ['icon'=>'25', 'prefix'=>'',      'stat'=>'15,000+',                         'size'=>'text-4xl', 'label'=>'More durability for heavier small-business use', 'body'=>'myPRO XL is built for bigger daily demand, with more than 15,000 cycles according to Electrolux Professional material.'],
            ['icon'=>'16', 'prefix'=>'',      'stat'=>'12 kg',                           'size'=>'text-4xl', 'label'=>'More capacity without full commercial scale', 'body'=>'myPRO XL gives smaller businesses extra capacity for towels, bedding, guest laundry, workwear, mops and other regular laundry demand.'],
        ]])
    </div>
</section>

{{-- 6. PRODUCT / RANGE SECTION --}}
<section class="py-16 lg:py-24 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Choose the Right myPRO Option</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Match the equipment to<br class="hidden lg:block"> <span style="color:#148af4;">the way your laundry is used</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                The right semi-professional choice depends on load size, room space, who uses the equipment and how often laundry needs to turn around.
            </p>
        </div>

        @php
        $semiProCards = [
            [
                'name'      => 'myPRO',
                'topLine'   => 'For smaller sites stepping up from domestic machines',
                'copy'      => 'myPRO is designed for small businesses that need washers, dryers and light finishing support stronger and faster than standard domestic appliances.',
                'badges'    => ['8 kg washer options', '7,500 cycles', '3x longer', 'Up to 50% faster'],
                'img'       => '/images/equipment/myPRO-8K-washer.webp',
                'route'     => route('equipment.product', ['category' => 'semi-professional', 'product' => 'mypro-washer']),
                'featured'  => false,
            ],
            [
                'name'      => 'myPRO XL',
                'topLine'   => 'For bigger small-business loads',
                'copy'      => 'myPRO XL gives smaller and decentralised laundry sites a 12 kg option for heavier daily washing and drying demand.',
                'badges'    => ['12 kg capacity', '15,000+ cycles', 'Faster programmes', 'Payment options available'],
                'img'       => '/images/equipment/myPROXL 12kg.webp',
                'route'     => route('equipment.product', ['category' => 'semi-professional', 'product' => 'mypro-xl']),
                'featured'  => true,
            ],
            [
                'name'      => 'myPROzip',
                'topLine'   => 'For guest-operated laundry',
                'copy'      => 'myPROzip is designed for guest-operated laundry facilities where users need simple, clear machines that are easy to understand and ready for payment system integration.',
                'badges'    => ['Guest-operated use', 'Simple controls', 'Payment integration', 'Stronger than domestic'],
                'img'       => '/images/equipment/Self Service Laundry.png',
                'route'     => route('equipment.product', ['category' => 'semi-professional', 'product' => 'myprozip']),
                'featured'  => false,
            ],
            [
                'name'      => 'myPRO Ironers / Light Finishing',
                'topLine'   => 'For simple finishing needs',
                'copy'      => 'Where a site needs light finishing support alongside washing and drying, myPRO ironers and finishing options can help complete the setup without creating a full commercial finishing room.',
                'badges'    => ['Light finishing', 'Compact format', 'Linen support', 'Works with myPRO laundry'],
                'img'       => '/images/equipment/myPRO - IronersIS185.jpg',
                'route'     => route('equipment.product', ['category' => 'semi-professional', 'product' => 'mypro-finishing']),
                'featured'  => false,
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 reveal">
            @foreach($semiProCards as $card)
            <div class="flex flex-col rounded-2xl p-6 bg-white {{ $card['featured'] ? 'border-2 border-[#148af4] relative' : 'border border-gray-200' }}">
                @if($card['featured'])
                <span class="absolute -top-3 left-6 font-body text-[10px] font-bold uppercase tracking-wide text-white bg-[#148af4] px-2.5 py-1 rounded">Most capacity</span>
                @endif
                <a href="{{ $card['route'] }}" class="flex items-center justify-center h-56 lg:h-64 mb-5">
                    <img src="{{ $card['img'] }}" alt="{{ $card['name'] }}" class="max-h-full w-auto object-contain transition-transform duration-300 hover:-translate-y-1.5">
                </a>
                <p class="font-body text-xs font-bold text-[#148af4] mb-1.5">{{ $card['topLine'] }}</p>
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">
                    <a href="{{ $card['route'] }}" class="hover:text-[#148af4] transition-colors">{{ $card['name'] }}</a>
                </h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-4">{{ $card['copy'] }}</p>
                <div class="flex flex-wrap gap-1.5 mb-5">
                    @foreach(array_slice($card['badges'], 0, 4) as $b)
                    <span class="font-body text-[10px] font-bold uppercase tracking-wide text-[#148af4] bg-[#148af4]/10 px-2 py-1 rounded">{{ $b }}</span>
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

{{-- 7. DETERGENT CONTROL --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-start">

            <div class="reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Detergent Control</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-5">
                    <span style="color:#148af4;">Better detergent control</span> for smaller laundry rooms
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    Selected myPRO washer setups can support an optional External Dosing System, giving smaller businesses a clearer way to manage detergent use, wash consistency and day-to-day laundry costs.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Irish Laundry Systems can advise whether external dosing, suitable detergents or a simpler manual setup is the right fit for the site.
                </p>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    Ask About Detergent Control
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            <div class="reveal reveal-right">
                <div class="bg-bg border border-gray-100 rounded-2xl p-7 lg:p-9">
                    <ul class="space-y-4 mb-6">
                        @foreach(['Less detergent waste', 'Better wash consistency', 'Clearer running-cost control'] as $pt)
                        <li class="flex items-center gap-3">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-[#148af4]/10 flex items-center justify-center">
                                <svg class="w-4 h-4 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            </span>
                            <span class="font-body font-bold text-navy text-base">{{ $pt }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <p class="font-body text-gray-500 text-sm leading-relaxed border-t border-gray-200 pt-5">
                        Optional External Dosing System available on selected myPRO washer setups. Electrolux Professional detergents and consumables can also support the right wash result where specified.
                    </p>
                </div>
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
                Useful for businesses that need <span style="color:#148af4;">laundry working every day</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                The myPRO family fits smaller businesses where laundry is not industrial-scale, but still affects customer experience, staff routines, hygiene standards, cost control or daily service.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 reveal">
            @foreach([
                ['title' => 'B&Bs, guesthouses and small hotels',               'copy' => 'For guest linen, towels, robes and light hospitality laundry where faster turnaround helps keep rooms ready.', 'points' => ['Guest linen', 'Towels and robes', 'Faster room readiness']],
                ['title' => 'Salons, spas and hairdressers',                    'copy' => 'For towels, robes and treatment textiles that need frequent washing without putting domestic machines under constant pressure.', 'points' => ['Daily towel use', 'Robes and textiles', 'Better wash consistency']],
                ['title' => 'Smaller care settings',                             'copy' => 'For smaller or decentralised care settings where laundry volume and hygiene requirements fit semi-professional equipment.', 'points' => ['Resident items', 'Bedding and towels', 'Hygiene-focused use']],
                ['title' => 'Restaurants, cafés and food service',              'copy' => 'For aprons, napkins, kitchen cloths and light back-of-house laundry where space is limited and turnaround matters.', 'points' => ['Aprons and cloths', 'Limited space', 'Daily back-of-house use']],
                ['title' => 'Cleaning, facilities, sports and animal care',      'copy' => 'For mops, cloths, towels, uniforms, sports textiles and animal care laundry that need durable equipment for frequent washing.', 'points' => ['Mops and cloths', 'Uniforms and towels', 'Frequent washing']],
                ['title' => 'Shared, apartment and guest-operated laundry',     'copy' => 'For apartments, laundromats, shared laundry rooms and guest-operated facilities where simple use, equipment durability and payment options may matter.', 'points' => ['Shared use', 'Guest operation', 'Payment-ready options']],
            ] as $fit)
            <div class="bg-white border border-gray-100 rounded-2xl p-7 flex flex-col h-full shadow-sm">
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $fit['title'] }}</h3>
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

{{-- 9. RIGHT FIT ADVICE PANEL --}}
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="rounded-3xl p-8 lg:p-14 reveal" style="background-color:#011E41;">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Right Fit Advice</p>
            <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
                Choose the right myPRO setup <span style="color:#148af4;">before money is spent</span>
            </h2>
            <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-3xl">
                Semi-professional laundry equipment works best when the machine, room, drying demand and daily use are considered together. Irish Laundry Systems can review load size, available space, staff or guest use, budget and future growth before advising whether myPRO, myPRO XL, myPROzip or a larger Line 6000 option is the better fit.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-9">
                @foreach([
                    ['t' => 'Choose the right equipment',          'd' => 'myPRO, myPRO XL, myPROzip or Line 6000, based on daily laundry demand.'],
                    ['t' => 'Plan the room before installation',   'd' => 'Space, stacking, drying, utilities, access and staff or guest use.'],
                    ['t' => 'Support it after purchase or rental', 'd' => 'Repairs, Preventive Maintenance, aftercare and parts support where needed.'],
                ] as $dp)
                <div class="border-l-2 border-[#148af4] pl-5">
                    <h3 class="font-heading font-bold text-white text-base leading-snug mb-1.5">{{ $dp['t'] }}</h3>
                    <p class="font-body text-white/70 text-sm leading-relaxed">{{ $dp['d'] }}</p>
                </div>
                @endforeach
            </div>
            <a href="{{ route('request-assessment') }}"
               class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3.5 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
                Request Equipment Advice
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- 10. TECHNICAL PROOF --}}
<section class="py-12 lg:py-16 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Technical Proof</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Professional features in a <span style="color:#148af4;">compact format</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Selected myPRO and myPRO XL features support stronger performance, shorter cycles, better garment care and easier daily use for smaller business laundry rooms.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-4">
            @foreach([
                ['icon' => '35', 'title' => 'SpeedCare drum',                                       'copy' => 'Supports strong dewatering, shorter wash times and garment care in selected myPRO washers.'],
                ['icon' => '37', 'title' => 'Automatic Moisture Control and Heat Pump dryer option', 'copy' => 'Supports shorter drying cycles and lower energy pressure where the selected dryer model fits the site.'],
                ['icon' => '11', 'title' => 'Heavy-duty durability system',                          'copy' => 'myPRO XL includes heavy duty SKF bearings, cast iron housing, triple seals and an 8-point spring suspension to support heavier small-business use.'],
                ['icon' => '21', 'title' => 'Adjustable water levels',                               'copy' => 'myPRO XL supports water saving through adjustable water levels, helping smaller sites keep daily laundry use easier to manage.'],
                ['icon' => '2',  'title' => 'Disinfection programmes and easy operation',            'copy' => 'Selected myPRO XL washers include dedicated disinfection programmes, with simple push-button operation for staff or shared laundry use.'],
            ] as $card)
            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/{{ $card['icon'] }}.png" alt="" class="w-28 h-28 object-contain">
                </div>
                <h3 class="font-heading font-bold text-navy text-sm leading-snug">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-500 text-xs leading-relaxed flex-1">{{ $card['copy'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 11. myPRO XL PERFORMANCE SNAPSHOT --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 text-center reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">myPRO XL Performance</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Useful cycle benchmarks for <span style="color:#148af4;">busier small-business laundry</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-3xl mx-auto">
                Selected myPRO XL models give smaller businesses useful benchmarks for planning daily washing and drying demand, where the programme, model and site conditions apply.
            </p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6 lg:gap-8 reveal">
            @foreach([
                ['prefix' => '',      'stat' => '35 min', 'label' => 'Cold water programme'],
                ['prefix' => '',      'stat' => '73 min', 'label' => 'Normal 60°C programme under stated inlet conditions'],
                ['prefix' => '',      'stat' => '87 min', 'label' => 'Electric dryer full load'],
                ['prefix' => '',      'stat' => '84 min', 'label' => 'Gas dryer full load'],
                ['prefix' => 'Below', 'stat' => '62 dB',  'label' => 'Washing process'],
            ] as $bm)
            <div class="flex flex-col items-center text-center gap-2">
                <div class="flex flex-col items-center justify-end min-h-14">
                    @if($bm['prefix'])
                    <span class="font-body font-bold text-navy text-xs leading-none mb-1">{{ $bm['prefix'] }}</span>
                    @endif
                    <p class="font-heading font-bold text-[#148af4] text-3xl sm:text-4xl leading-none">{{ $bm['stat'] }}</p>
                </div>
                <p class="font-body font-semibold text-navy text-sm leading-snug">{{ $bm['label'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 12. PLANNING / SITE FIT STRIP --}}
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.85) 15%, rgba(20,138,244,0.3) 55%, transparent 100%);"></div>
    </div>
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-12 sm:py-16 lg:py-24 w-full max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Planning Before Installation</p>
        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
            Fit semi-professional laundry around the <span style="color:#011E41;">room, workload and budget</span>
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6 max-w-xl">
            The right semi-professional setup depends on more than capacity. Irish Laundry Systems can review the laundry room, washer and dryer pairing, access, utilities, drainage, ventilation, stacking options, staff use, guest use and rental where suitable before recommending the right next step.
        </p>
        <div class="flex flex-wrap items-center gap-x-6 gap-y-3 mb-7">
            @foreach([
                ['t' => 'Room space',               'd' => 'M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75'],
                ['t' => 'Daily volume',             'd' => 'M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z'],
                ['t' => 'Washer and dryer pairing', 'd' => 'M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244'],
                ['t' => 'Staff or guest use',       'd' => 'M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z'],
                ['t' => 'Rental where suitable',    'd' => 'M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z'],
                ['t' => 'Future growth',            'd' => 'M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941'],
            ] as $pt)
            <span class="inline-flex items-center gap-2">
                <svg class="w-4 h-4 text-white flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $pt['d'] }}"/></svg>
                <span class="font-body text-white text-sm font-bold">{{ $pt['t'] }}</span>
            </span>
            @endforeach
        </div>
        <a href="{{ route('request-assessment') }}"
           class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
            Request Equipment Advice
        </a>
    </div>
</section>

{{-- 13. SERVICE AND SUPPORT OPTIONS --}}
<section class="py-16 lg:py-20 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Support Options</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Support to keep semi-professional laundry equipment <span style="color:#148af4;">running</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                The right equipment choice should be backed by practical support. Irish Laundry Systems can support semi-professional laundry sites with repairs, Preventive Maintenance, rental options and aftercare.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                [
                    'title' => 'Repairs &amp; Call-Outs',
                    'text'  => 'For washer, dryer or finishing equipment faults, performance issues or breakdowns that need practical engineering support.',
                    'cta'   => 'Request a Repair',
                    'route' => route('repairs'),
                    'img'   => '/images/healthcare/repairs-callouts.jpg',
                    'pos'   => '50% 35%',
                ],
                [
                    'title' => 'Preventive Maintenance',
                    'text'  => 'For sites that want planned support to reduce avoidable disruption and keep laundry equipment easier to manage over time.',
                    'cta'   => 'View Preventive Maintenance',
                    'route' => route('service-contracts'),
                    'img'   => '/images/healthcare/service-contracts-hero.png',
                    'pos'   => '90% 35%',
                ],
                [
                    'title' => 'Equipment Rental',
                    'text'  => 'For sites considering lower upfront cost where rental is suitable for the selected equipment and site needs.',
                    'cta'   => 'See Equipment Rental',
                    'route' => route('rental'),
                    'img'   => '/images/healthcare/commercial-industrial.jpg',
                    'pos'   => 'center center',
                ],
                [
                    'title' => 'Support &amp; Aftercare',
                    'text'  => 'For follow-up support, service history, parts support where needed and clearer repair or replacement decisions.',
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

{{-- 14. RESOURCES --}}
<section class="py-16 lg:py-24 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Resources</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Official Electrolux Professional <span style="color:#148af4;">myPRO information</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Review official Electrolux Professional information before making a final equipment decision, or ask Irish Laundry Systems to advise on the best fit for your site.
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach([
                [
                    'title' => 'myPRO general leaflet',
                    'copy'  => 'Official Electrolux Professional leaflet covering myPRO washers, dryers and light finishing support for small businesses.',
                    'cta'   => 'Download myPRO Leaflet',
                    'href'  => '',
                    'download' => true,
                ],
                [
                    'title' => 'myPRO XL leaflet',
                    'copy'  => 'Official Electrolux Professional leaflet covering myPRO XL capacity, durability, faster programmes, drying times and small-business applications.',
                    'cta'   => 'Download myPRO XL Leaflet',
                    'href'  => '',
                    'download' => true,
                ],
                [
                    'title' => 'Need advice before choosing?',
                    'copy'  => 'Irish Laundry Systems can review load size, site use, space and budget before advising whether myPRO, myPRO XL, myPROzip or Line 6000 is the right fit.',
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
                <span class="mt-auto inline-flex items-center gap-2 font-body font-bold text-gray-400 text-sm w-fit">
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

{{-- 15. RELATED EQUIPMENT --}}
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Related Equipment</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Other equipment that may suit <span style="color:#148af4;">the same site</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Some businesses start with semi-professional equipment. Others may need a larger commercial washer, dryer, drying cabinet or finishing option depending on laundry volume, fabric type and daily pressure.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach([
                ['title' => 'Commercial Washing Machines', 'copy' => 'For sites that need larger capacity, heavier use or full commercial laundry performance.', 'cta' => 'View Washing Machine Options', 'route' => route('equipment.category', ['category' => 'washers']), 'img' => '/images/equipment/commercialwasher.webp'],
                ['title' => 'Commercial Tumble Dryers',    'copy' => 'For higher drying demand where a commercial dryer is a better fit than semi-professional equipment.', 'cta' => 'View Dryer Options', 'route' => route('equipment.category', ['category' => 'tumble-dryers']), 'img' => '/images/equipment/Tumble-dryers_Heat-Pump_1-1.webp'],
                ['title' => 'Drying Cabinets',             'copy' => 'For shoes, gloves, workwear, delicate garments and items that should not be tumble dried.', 'cta' => 'View Drying Cabinets', 'route' => route('equipment.category', ['category' => 'drying-cabinets']), 'img' => '/images/healthcare/Drying-cabinets_image.webp'],
                ['title' => 'Finishing Equipment',         'copy' => 'For sites that need ironing, pressing or light finishing support alongside washing and drying.', 'cta' => 'View Finishing Equipment', 'route' => route('equipment.category', ['category' => 'finishing-equipment']), 'img' => '/images/equipment/IB623_FRONT_NEW.jpg'],
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

{{-- 16. FAQ --}}
@include('components.faq', [
    'eyebrow' => 'Semi-Professional FAQs',
    'heading' => 'Questions before choosing <span style="color:#148af4;">myPRO or myPRO XL</span>',
    'faqs' => [
        ['question' => 'What is semi-professional laundry equipment?', 'answer' => 'Semi-professional laundry equipment is designed for smaller businesses that need stronger, faster and more durable machines than domestic appliances, but do not yet need full commercial laundry scale.'],
        ['question' => 'When should a business step up from domestic machines?', 'answer' => 'A business should consider stepping up when domestic machines are too slow, too small, breaking down too often or struggling with towels, bedding, uniforms, cloths, robes, workwear or guest laundry every day.'],
        ['question' => 'What is the difference between myPRO and myPRO XL?', 'answer' => 'myPRO is a strong semi-professional option for small businesses stepping up from domestic machines. myPRO XL gives extra capacity, with 12 kg options and more than 15,000 cycles according to Electrolux Professional material.'],
        ['question' => 'What is myPROzip?', 'answer' => 'myPROzip is designed for guest-operated laundry facilities. It is simple to operate, easy to understand and ready for integration with payment systems.'],
        ['question' => 'Can semi-professional machines be rented?', 'answer' => 'Rental may be available where the selected equipment and site needs are suitable. Irish Laundry Systems can advise whether rental, purchase or a larger commercial option is the better fit.'],
        ['question' => 'When should a site choose Line 6000 instead?', 'answer' => 'A site should consider Line 6000 where laundry demand is heavier, usage is more intensive, capacity needs are larger or the operation needs full commercial laundry performance.'],
    ],
])

{{-- 17. FINAL CTA / FORM --}}
@include('components.cta-downtime-form', [
    'pageSource' => 'semi_professional_cta',
    'heading'    => 'Choose the right semi-professional laundry equipment <span style="color:#148af4;">for your site</span>',
    'body'       => 'Tell us what you wash, how often the equipment will be used and whether the laundry is staff-operated or guest-operated. Irish Laundry Systems will guide you toward the right myPRO, myPRO XL, myPROzip, Equipment Rental, Preventive Maintenance or larger commercial laundry option.',
    'formTitle'  => 'Request Semi-Professional Laundry Advice',
    'buttonText' => 'Request Equipment Advice',
])

@endsection
