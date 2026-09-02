@extends('layouts.app')

@section('pageTitle', 'Semi-Professional Laundry Equipment Ireland | myPRO XL')

@section('meta')
<meta name="description" content="Step up from domestic laundry with Electrolux Professional myPRO XL, myPRO and myPROzip washers and dryers, supplied and supported by Irish Laundry Systems.">
@endsection

@section('content')

{{-- 1. HERO --}}
<section class="relative overflow-hidden flex flex-col lg:!h-[640px]" style="height:auto; min-height:560px;">
    <img src="/images/pages/equipment/mypro-family.jpg" alt="Semi-professional laundry equipment"
         class="absolute inset-0 w-full h-full object-cover" style="object-position: center 62%;">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.75) 42%, rgba(1,30,65,0.35) 65%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 sm:py-20 lg:py-24">
            <div class="flex-1 reveal reveal-left max-w-5xl">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Semi-Professional Laundry Equipment</p>
                <h1 class="font-heading font-bold text-white text-2xl sm:text-4xl lg:text-5xl leading-tight mb-6">
                    When <span style="color:#148af4;">domestic machines</span> <br class="hidden sm:block">become the weak point
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8">
                    <span class="sm:block lg:whitespace-nowrap">For small businesses using laundry every day, Electrolux Professional myPRO XL,</span>
                    <span class="sm:block lg:whitespace-nowrap">myPRO and myPROzip offer a stronger step up from standard domestic appliances.</span>
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#semi-pro-form"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Equipment Advice
                    </a>
                    <a href="#semi-pro-form"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white hover:border-white/70 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        Ask About myPRO XL
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 2. THIN ELECTROLUX TRUST STRIP --}}
@include('components.partner-strip')

{{-- 3. INTRO / BRIDGE --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Equipment Selection</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight">
                    <span class="sm:block">Built for the demands</span>
                    <span class="sm:block">of <span style="color:#148af4;">everyday business</span></span>
                    <span class="sm:block" style="color:#148af4;">washing and drying</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed">
                    <span class="lg:block">Semi-professional washers and dryers offer greater durability and faster cycles than domestic appliances.</span>
                    <span class="lg:block">They suit sites that need more from their laundry equipment without moving to a full commercial setup.</span>
                </p>
            </div>

        </div>
    </div>
</section>

{{-- 4. EQUIPMENT LEVEL GUIDE --}}
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Equipment Level Guide</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Compare the equipment level <span style="color:#148af4;">your site needs</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Use frequency, load size and available space to compare domestic, semi-professional and commercial equipment.
            </p>
        </div>

        {{-- Domestic machines is the starting point / current problem, not a sales option — muted image and gray step number; myPRO XL carries the visual focus --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 reveal">
            @foreach([
                ['step' => '01', 'title' => 'Domestic machines', 'copy' => 'For light household use, not repeated daily business demand.', 'img' => '/images/pages/semi-professional/Domestic%20machines.png', 'imgClass' => 'saturate-[.3] contrast-[.85] brightness-105 opacity-80 scale-[1.06] origin-bottom translate-y-[6px]', 'stepClass' => 'text-gray-400'],
                ['step' => '02', 'title' => 'myPRO',             'copy' => 'For lighter small-site use where a domestic appliance is no longer the right fit.', 'img' => '/images/pages/semi-professional/mypro-hp-front.jpg', 'imgClass' => 'scale-[0.91] origin-bottom'],
                ['step' => '03', 'title' => 'myPRO XL',          'copy' => 'For smaller businesses handling bigger loads, more frequent washing and heavier daily use.', 'img' => '/images/pages/semi-professional/myPROXL%2012kg.webp', 'imgClass' => 'scale-[1.0] origin-bottom translate-y-[7px]'],
                ['step' => '04', 'title' => 'Line 6000',         'copy' => 'For larger capacity, intensive use and full commercial laundry performance.', 'img' => '/images/pages/commercial-washers/commercialwasher.webp', 'imgClass' => 'scale-[1.29] origin-bottom translate-y-[29px]'],
            ] as $lvl)
            <div class="flex flex-col h-full">
                <div class="w-full flex items-end justify-center mb-5" style="height:240px;">
                    <img src="{{ $lvl['img'] }}" alt="{{ $lvl['title'] }}" class="max-h-full w-auto object-contain {{ $lvl['imgClass'] ?? '' }}">
                </div>
                <span class="font-heading font-bold {{ $lvl['stepClass'] ?? 'text-[#148af4]' }} text-xs tracking-[0.2em] mb-2">{{ $lvl['step'] }}</span>
                <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-2">{{ $lvl['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $lvl['copy'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="mt-8 reveal">
            <a href="#semi-pro-form"
               class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                Ask Which Level Fits Your Site
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

{{-- 8. WHERE SEMI-PROFESSIONAL LAUNDRY FITS (moved below Equipment Level Guide) --}}
<section class="py-20 lg:py-28 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Where It Fits</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Built for smaller sites with <span style="color:#148af4;">laundry to manage every day</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                For businesses and shared sites where laundry is not industrial scale, but still affects room turnover, staff time, customer standards, resident care or day-to-day operations.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 reveal">
            @foreach([
                ['title' => 'B&amp;Bs, guesthouses, small hotels and food service', 'items' => ['Guest linen', 'Towels', 'Room readiness'],       'img' => '/images/pages/semi-professional/B&Bs, guesthouses, small hotels and food service.png', 'pos' => 'center center'],
                ['title' => 'Facility management and cleaning teams',               'items' => ['Mops', 'Uniforms', 'Frequent washing'],           'img' => '/images/pages/semi-professional/Facility management and cleaning teams.png',           'pos' => 'center center'],
                ['title' => 'Salons, spas and wellness businesses',                 'items' => ['Towels', 'Robes', 'Daily use'],                   'img' => '/images/pages/semi-professional/Salons, spas and wellness businesses.png',             'pos' => 'center center'],
                ['title' => 'Gyms, sports clubs and fitness studios',               'items' => ['Towels', 'Training kit', 'Daily turnover'],       'img' => '/images/pages/semi-professional/Gyms, sports clubs and fitness studios.png',           'pos' => 'center center'],
                ['title' => 'Smaller care and nursing settings',                    'items' => ['Resident items', 'Bedding', 'Towels'],            'img' => '/images/pages/semi-professional/Smaller care and nursing settings.png',                'pos' => 'center center'],
                ['title' => 'Shared, apartment and guest-operated laundry',         'items' => ['Shared use', 'Guest operation', 'Payment-ready'], 'img' => '/images/pages/semi-professional/Shared, apartment and guest-operated laundry.png',     'pos' => 'center center'],
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

{{-- 5. MYPRO XL HIGHLIGHT --}}
<section class="py-20 lg:py-28 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal flex flex-col lg:flex-row lg:items-start lg:justify-between gap-6">
            <div class="min-w-0">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">myPRO XL</p>
                <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                    A bigger step up for <span style="color:#148af4;">heavier daily laundry use</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed">
                    myPRO XL gives smaller businesses a clear next step as daily laundry demand grows.
                </p>
            </div>
            <a href="#semi-pro-form"
               class="inline-flex items-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-7 py-3.5 rounded-lg text-sm transition-colors duration-200 whitespace-nowrap flex-shrink-0 lg:mt-[28px]">
                Ask About myPRO XL
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center reveal">
            <div class="lg:col-span-5 flex items-center justify-center">
                <img src="/images/pages/semi-professional/Built Beyond Domestic Use.png" alt="myPRO XL washer and dryer" loading="lazy" decoding="async"
                     class="w-full max-w-xl h-auto object-contain">
            </div>
            <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-3 gap-4">
                @foreach([
                    ['stat' => '12 kg',             'title' => 'More capacity for daily loads',      'body' => 'A practical step up for towels, bedding, workwear, mops and regular business use.', 'img' => '/images/icons/201.png', 'imgClass' => 'w-9 h-9 object-contain scale-[1.25]'],
                    ['stat' => '15,000+ cycles',    'title' => 'Built for heavier use',              'body' => 'Designed for smaller sites where domestic machines are no longer the right fit.', 'img' => '/images/icons/221.png', 'imgClass' => 'w-9 h-9 object-contain scale-[1.4] translate-y-[0.5%]'],
                    ['stat' => 'Fast programmes', 'title' => 'Less waiting during busy periods',   'body' => 'Shorter washer programmes help keep laundry moving when the site is under pressure.', 'img' => '/images/icons/202.png', 'imgClass' => 'w-9 h-9 object-contain scale-[1.61]'],
                ] as $proof)
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 flex flex-col">
                    @if(isset($proof['img']))
                    <img src="{{ $proof['img'] }}" alt="" class="mb-4 {{ $proof['imgClass'] }}">
                    @else
                    <svg class="w-9 h-9 text-[#148af4] mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $proof['icon'] }}"/></svg>
                    @endif
                    <p class="font-heading font-bold text-[#148af4] text-2xl leading-tight mb-1">{{ $proof['stat'] }}</p>
                    <h3 class="font-heading font-bold text-navy text-sm leading-snug mb-2">{{ $proof['title'] }}</h3>
                    <p class="font-body text-gray-500 text-xs leading-relaxed">{{ $proof['body'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- 6. PRODUCT / RANGE SECTION --}}
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">myPRO Range Options</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Compare the myPRO options <span style="color:#148af4;">before choosing a setup</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                See which semi-professional option best matches how your site will use laundry equipment, from higher-capacity daily loads to shared guest use and light finishing.
            </p>
        </div>

        @php
        $semiProCards = [
            [
                'name'      => 'myPRO XL',
                'topLine'   => 'For busier sites with bigger loads',
                'copy'      => 'A 12 kg semi-professional washer and dryer range for sites that need more capacity and longer-life performance without moving straight to Line 6000.',
                'badges'    => ['12 kg loads', '15,000+ cycles', 'Shorter cycles', 'Bigger loads'],
                'img'       => '/images/pages/semi-professional/myPROXL 12kg.webp',
                'imgClass'  => 'scale-110',
                'route'     => route('equipment.product', ['category' => 'semi-professional', 'product' => 'mypro-xl']),
                'featured'  => true,
            ],
            [
                'name'      => 'myPRO',
                'topLine'   => 'For lighter daily use',
                'copy'      => 'A semi-professional washer, dryer and light finishing setup for smaller sites that have outgrown domestic appliances.',
                'badges'    => ['8–9 kg loads', '7,500 cycles', 'Daily use', 'Small sites'],
                'img'       => '/images/pages/semi-professional/mypro-hp-front.jpg',
                'imgClass'  => 'scale-[.85]',
                'route'     => route('equipment.product', ['category' => 'semi-professional', 'product' => 'mypro-washer']),
                'featured'  => false,
            ],
            [
                'name'      => 'myPROzip',
                'topLine'   => 'For shared or guest use',
                'copy'      => 'Designed for laundry rooms used by guests, residents or customers, with simple operation and payment options where needed.',
                'badges'    => ['Guest-operated', 'Simple to use', 'Payment options', 'Shared laundry'],
                'img'       => '/images/pages/semi-professional/my pro zip.webp',
                'route'     => route('equipment.product', ['category' => 'semi-professional', 'product' => 'myprozip']),
                'featured'  => false,
            ],
            [
                'name'      => 'myPRO Ironers & Light Finishing',
                'topLine'   => 'For simple finishing needs',
                'copy'      => 'Practical light finishing support for sites that need ironing alongside washing and drying.',
                'badges'    => ['Light ironing', 'Easy finishing', 'Small spaces', 'Pairs with myPRO'],
                'img'       => '/images/pages/semi-professional/myPRO - IronersIS185.jpg',
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
                    <img src="{{ $card['img'] }}" alt="{{ strip_tags($card['name']) }}" class="max-h-full w-auto object-contain transition-transform duration-300 hover:-translate-y-1.5 {{ $card['imgClass'] ?? '' }}">
                </a>
                <p class="font-body text-xs font-bold text-navy/60 mb-1.5">{{ $card['topLine'] }}</p>
                <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-2">
                    <a href="{{ $card['route'] }}" class="hover:text-[#148af4] transition-colors">{{ $card['name'] }}</a>
                </h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-4">{{ $card['copy'] }}</p>
                <div class="flex flex-wrap gap-1.5 mb-5">
                    @foreach(array_slice($card['badges'], 0, 4) as $b)
                    <span class="font-body text-[10px] font-bold uppercase tracking-wide text-navy/70 bg-navy/[0.06] px-2 py-1 rounded">{{ $b }}</span>
                    @endforeach
                </div>
                <div class="mt-auto flex flex-col gap-2.5">
                    <a href="#semi-pro-form" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
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

{{-- PLANNING / SITE FIT STRIP — moved before the Product Finder --}}
@include('components.cta-combined-banner', [
    'eyebrow'    => 'Planning Before Installation',
    'heading'    => 'Plan the right setup around <span style="color:#011E41;">your room, workload and budget</span>',
    'body'       => 'Check room layout, utilities and expected workload before choosing the final setup.<br class="hidden lg:block"> Pairing, stacking and payment options can then be planned around the site.',
    'miniPoints' => [
        ['icon' => 'home-planning-fit', 'iconClass' => 'scale-[1.061] translate-y-[2.3%]', 'label' => 'Room<br>fit'],
        ['icon' => '225', 'iconClass' => 'scale-[1.05] translate-y-[0.4%]',  'label' => 'Daily<br>use'],
        ['icon' => '215', 'iconClass' => 'scale-[1.094] -translate-y-[1.2%]', 'label' => 'Utilities<br>and access'],
    ],
    'ctaText'    => 'Request Equipment Advice',
    'ctaHref'    => '#semi-pro-form',
])

{{-- 6a-bis. PRODUCT FINDER — myPRO range (washers, dryers and light finishing) --}}
<section id="mypro-range" class="py-20 lg:py-32 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">myPRO Product Finder</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-3">
                Compare individual myPRO models for <span style="color:#148af4;">your setup</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Browse washers, dryers and steam ironers, then filter by product line and equipment type to narrow the options for your site.
            </p>
        </div>

        @php
            $route = fn($slug) => route('equipment.product', ['category' => 'semi-professional', 'product' => $slug]);
            $myproModels = [
                ['group' => 'myPRO Edge Washers', 'line' => 'myPRO Edge', 'type' => 'Washer',
                 'name' => 'WE170P', 'topLine' => 'myPRO Edge Washer', 'slug' => 'we170p',
                 'fit' => 'Semi-professional washer for small sites moving beyond domestic appliances.',
                 'badges' => ['Semi-professional', 'Daily use', 'Small sites'],
                 'img' => '/images/pages/semi-professional/myPRO%20Edge%20-%20WashersWE170P.jpg'],
                ['group' => 'myPRO Edge Washers', 'line' => 'myPRO Edge', 'type' => 'Washer',
                 'name' => 'WE170V', 'topLine' => 'myPRO Edge Washer', 'slug' => 'we170v',
                 'fit' => 'myPRO Edge washer variant for everyday commercial washing.',
                 'badges' => ['Semi-professional', 'Daily use', 'Small sites'],
                 'img' => '/images/pages/semi-professional/myPRO%20Edge%20-%20WashersWE170V.jpg'],
                ['group' => 'myPRO Edge Washers', 'line' => 'myPRO Edge', 'type' => 'Washer',
                 'name' => 'WE2-9', 'topLine' => 'myPRO Edge Washer', 'slug' => 'we2-9',
                 'fit' => 'Larger myPRO Edge washer for sites handling heavier daily volumes.',
                 'badges' => ['Semi-professional', 'Heavier loads', 'Busier sites'],
                 'img' => '/images/pages/semi-professional/myPRO%20Edge%20-%20Washers%20we2-9.jpg'],

                ['group' => 'myPRO Edge Dryers', 'line' => 'myPRO Edge', 'type' => 'Condense Dryer',
                 'name' => 'TE1120', 'topLine' => 'Condense Dryer', 'slug' => 'te1120',
                 'fit' => 'Condense dryer that pairs with myPRO Edge washers where venting is not possible.',
                 'badges' => ['No venting needed', 'Pairs with washers'],
                 'img' => '/images/pages/semi-professional/Condense%20dryerte1120.jpg'],
                ['group' => 'myPRO Edge Dryers', 'line' => 'myPRO Edge', 'type' => 'Heat Pump Dryer',
                 'name' => 'TE1120HP', 'topLine' => 'Heat Pump Dryer', 'slug' => 'te1120hp',
                 'fit' => 'Heat pump dryer for lower energy use across regular drying cycles.',
                 'badges' => ['Lower energy use', 'Heat pump'],
                 'img' => '/images/pages/semi-professional/Heat%20pump%20dryersTE1120HP.jpg'],
                ['group' => 'myPRO Edge Dryers', 'line' => 'myPRO Edge', 'type' => 'Condense Dryer',
                 'name' => 'TD2-8', 'topLine' => 'Condense Dryer', 'slug' => 'td2-8',
                 'fit' => 'Compact condense dryer for smaller laundry rooms without external venting.',
                 'badges' => ['No venting needed', 'Compact'],
                 'img' => '/images/pages/semi-professional/Condense%20dryertd2-8.jpg'],
                ['group' => 'myPRO Edge Dryers', 'line' => 'myPRO Edge', 'type' => 'Heat Pump Dryer',
                 'name' => 'TD2-9HP', 'topLine' => 'Heat Pump Dryer', 'slug' => 'td2-9hp',
                 'fit' => 'Heat pump dryer for sites prioritising running costs and gentler drying.',
                 'badges' => ['Lower energy use', 'Heat pump', 'Gentler drying'],
                 'img' => '/images/pages/semi-professional/Heat%20pump%20dryers%20TD2-9HP.jpg'],

                ['group' => 'Ironing & Light Finishing', 'line' => 'myPRO', 'type' => 'Steam Ironer',
                 'name' => 'IS1103', 'topLine' => 'myPRO Steam Ironer', 'slug' => 'is1103',
                 'fit' => 'A myPRO steam ironer for practical garment and flatwork finishing.',
                 'badges' => ['Light ironing', 'Practical finishing'],
                 'img' => '/images/pages/semi-professional/IS1103.jpg'],
                ['group' => 'Ironing & Light Finishing', 'line' => 'myPRO', 'type' => 'Steam Ironer',
                 'name' => 'IS185', 'topLine' => 'myPRO Steam Ironer', 'slug' => 'is185',
                 'fit' => 'A foldable myPRO steam ironer for a more consistent finish than hand ironing.',
                 'badges' => ['Light finishing', 'Foldable format'],
                 'img' => '/images/pages/semi-professional/myPRO%20-%20IronersIS185.jpg'],
            ];

            $groupOrder = ['myPRO Edge Washers', 'myPRO Edge Dryers', 'Ironing & Light Finishing'];
            $lineOrder  = ['myPRO Edge', 'myPRO'];
            $typeOrder  = ['Washer', 'Condense Dryer', 'Heat Pump Dryer', 'Steam Ironer'];

            $lineOpts = []; $typeOpts = [];
            foreach ($myproModels as $m) {
                $lineOpts[$m['line']] = ($lineOpts[$m['line']] ?? 0) + 1;
                $typeOpts[$m['type']] = ($typeOpts[$m['type']] ?? 0) + 1;
            }
            $modelsJs = array_map(fn($m) => ['group' => $m['group'], 'line' => $m['line'], 'type' => $m['type']], $myproModels);
        @endphp

        <div x-data="{
                line: [],
                type: [],
                models: {{ \Illuminate\Support\Js::from($modelsJs) }},
                matches(m) {
                    const ln = this.line.length === 0 || this.line.includes(m.line);
                    const tp = this.type.length === 0 || this.type.includes(m.type);
                    return ln && tp;
                },
                groupShown(g) { return this.models.some(m => m.group === g && this.matches(m)); },
                get count() { return this.models.filter(m => this.matches(m)).length; },
                clearAll() { this.line = []; this.type = []; },
             }"
             class="grid grid-cols-1 lg:grid-cols-[260px_1fr] gap-8 lg:gap-10 items-start">

            {{-- LEFT: filter sidebar --}}
            <aside class="lg:sticky lg:top-28 self-start border border-gray-200 rounded-xl p-5">
                <div class="flex items-center justify-between">
                    <span class="font-heading font-bold text-navy text-xs uppercase tracking-[0.16em]">Filter myPRO range</span>
                    <button @click="clearAll()" class="font-body text-xs text-[#148af4] hover:underline">Reset all</button>
                </div>

                <div class="mt-4 pt-4 border-t border-gray-100">
                    <p class="font-heading font-bold text-navy text-sm mb-3">Product Line</p>
                    <div class="space-y-2.5">
                        @foreach($lineOrder as $val) @if(isset($lineOpts[$val]))
                        <label class="flex items-center justify-between cursor-pointer group">
                            <span class="flex items-center gap-2.5">
                                <input type="checkbox" value="{{ $val }}" x-model="line" class="w-4 h-4 rounded border-gray-300 accent-[#148af4] cursor-pointer">
                                <span class="font-body text-sm text-gray-600 group-hover:text-navy transition-colors">{{ $val }}</span>
                            </span>
                            <span class="font-body text-xs text-gray-400">{{ $lineOpts[$val] }}</span>
                        </label>
                        @endif @endforeach
                    </div>
                </div>

                <div class="mt-4 pt-4 border-t border-gray-100">
                    <p class="font-heading font-bold text-navy text-sm mb-3">Equipment Type</p>
                    <div class="space-y-2.5">
                        @foreach($typeOrder as $val) @if(isset($typeOpts[$val]))
                        <label class="flex items-center justify-between cursor-pointer group">
                            <span class="flex items-center gap-2.5">
                                <input type="checkbox" value="{{ $val }}" x-model="type" class="w-4 h-4 rounded border-gray-300 accent-[#148af4] cursor-pointer">
                                <span class="font-body text-sm text-gray-600 group-hover:text-navy transition-colors">{{ $val }}</span>
                            </span>
                            <span class="font-body text-xs text-gray-400">{{ $typeOpts[$val] }}</span>
                        </label>
                        @endif @endforeach
                    </div>
                </div>

                <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between">
                    <span class="font-body text-sm text-navy font-bold"><span x-text="count"></span> <span x-text="count === 1 ? 'option' : 'options'"></span></span>
                    <button @click="clearAll()" class="font-body text-xs text-[#148af4] hover:underline">Clear filters</button>
                </div>
            </aside>

            {{-- RIGHT: grouped product tiles --}}
            <div>
                @foreach($groupOrder as $gName)
                @php $groupItems = array_values(array_filter($myproModels, fn($m) => $m['group'] === $gName)); @endphp
                <div x-show="groupShown('{{ $gName }}')" class="mb-12 last:mb-0">
                    <h3 class="font-heading font-bold text-navy text-lg mb-6 pb-2 border-b border-gray-200">{{ $gName }}</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-x-6 gap-y-10">
                        @foreach($groupItems as $m)
                        <div x-show="matches({{ \Illuminate\Support\Js::from(['line' => $m['line'], 'type' => $m['type']]) }})" class="flex flex-col">
                            <a href="{{ $route($m['slug']) }}" class="flex items-center justify-center h-48 lg:h-56 mb-5">
                                <img src="{{ $m['img'] }}" alt="{{ $m['name'] }}" class="max-h-full w-auto object-contain transition-transform duration-300 hover:-translate-y-1.5" loading="lazy" decoding="async">
                            </a>
                            <p class="font-body text-xs font-bold text-[#148af4] mb-1.5">{{ $m['topLine'] }}</p>
                            <h4 class="font-heading font-bold text-navy text-lg leading-snug mb-2"><a href="{{ $route($m['slug']) }}" class="hover:text-[#148af4] transition-colors">{{ $m['name'] }}</a></h4>
                            <p class="font-body text-gray-500 text-sm leading-relaxed mb-4">{{ $m['fit'] }}</p>
                            <div class="flex flex-wrap gap-1.5 mb-5">
                                @foreach($m['badges'] as $b)
                                <span class="font-body text-[10px] font-bold uppercase tracking-wide text-[#148af4] bg-[#148af4]/10 px-2 py-1 rounded">{{ $b }}</span>
                                @endforeach
                            </div>
                            <div class="mt-auto flex flex-col gap-2.5">
                                <a href="#semi-pro-form" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/></svg>
                                    Request Advice
                                </a>
                                <a href="{{ $route($m['slug']) }}" class="inline-flex items-center justify-center gap-2 border border-gray-300 text-navy hover:border-navy font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                                    View Details
                                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach

                <div x-show="count === 0" class="text-center py-16" style="display:none">
                    <p class="font-body text-gray-500 text-base">No models match that combination. <button @click="clearAll()" class="text-[#148af4] font-bold hover:underline">Clear filters</button> or <a href="#semi-pro-form" class="text-[#148af4] font-bold hover:underline">talk to our team</a>.</p>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- RESOURCES BAR (slim inline) — moved directly below the myPRO Product Finder range --}}
@include('components.resources-bar', ['groups' => [
    ['title' => 'Official Resources', 'links' => [
        ['l' => 'myPRO XL leaflet', 'h' => '/pdfs/EPR-leaflet-General-myPRO-XL_2021-eng-lr.pdf'],
        ['l' => 'myPRO product resources', 'h' => route('resources')],
        ['l' => 'Browse semi-professional range', 'h' => route('equipment.category', ['category' => 'semi-professional'])],
    ]],
    ['title' => 'Related Equipment', 'links' => [
        ['l' => 'Washing Machines', 'h' => route('equipment.category', ['category' => 'commercial-washers'])],
        ['l' => 'Tumble Dryers', 'h' => route('equipment.category', ['category' => 'tumble-dryers'])],
        ['l' => 'Drying Cabinets', 'h' => route('equipment.category', ['category' => 'drying-cabinets'])],
    ]],
    ['title' => 'Advice & Support', 'links' => [
        ['l' => 'Request advice', 'h' => '#semi-pro-form'],
        ['l' => 'Support & Aftercare', 'h' => route('parts-aftercare')],
        ['l' => 'Talk to our team', 'h' => '#semi-pro-form'],
    ]],
]])

{{-- 6c. RELATED EQUIPMENT — the next equipment route, front-facing product shots --}}
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Commercial Equipment</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Not sure semi-professional is <span style="color:#148af4;">the right level?</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Move up to commercial equipment when laundry demand goes beyond a semi-professional setup.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 reveal">
            @foreach([
                ['title' => 'Commercial Washers', 'copy' => 'For sites that need larger capacity, heavier use or full commercial washer performance.', 'cta' => 'View Washing Machine Options', 'route' => route('equipment.category', ['category' => 'commercial-washers']), 'img' => '/images/pages/commercial-washers/commercialwasher.webp', 'box' => 300],
                ['title' => 'Commercial Tumble Dryers',    'copy' => 'For sites where drying demand is too high for a semi-professional dryer setup.', 'cta' => 'View Dryer Options', 'route' => route('equipment.category', ['category' => 'tumble-dryers']), 'img' => '/images/pages/dryers/Tumble-dryers_Heat-Pump_1-1.webp', 'box' => 245],
                ['title' => 'Drying Cabinets',             'copy' => 'For shoes, gloves, workwear, delicate garments and items that should not be tumble dried.', 'cta' => 'View Drying Cabinets', 'route' => route('equipment.category', ['category' => 'drying-cabinets']), 'img' => '/images/shared/drying_cabinetscards.jpg', 'box' => 260],
                ['title' => 'Finishing Equipment',         'copy' => 'For sites that need ironing, pressing or finishing support alongside washing and drying.', 'cta' => 'View Finishing Equipment', 'route' => route('equipment.category', ['category' => 'finishing-equipment']), 'img' => '/images/pages/ironers/IB623_FRONT_NEW.jpg', 'box' => 300],
            ] as $card)
            <div class="flex flex-col gap-6 h-full">
                <div style="min-height:112px;">
                    <p class="font-heading font-bold text-navy text-xl leading-snug mb-2">{{ $card['title'] }}</p>
                    <p class="font-body text-gray-600 text-sm leading-relaxed">{{ $card['copy'] }}</p>
                </div>
                <div class="w-full flex items-end justify-center" style="height:300px;">
                    <img src="{{ $card['img'] }}" alt="{{ $card['title'] }}" loading="lazy" decoding="async"
                         class="transition-transform duration-500 hover:-translate-y-2"
                         style="width:{{ $card['box'] }}px; max-width:100%; height:{{ $card['box'] }}px; object-fit:contain;">
                </div>
                <a href="{{ $card['route'] }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy-dark text-white font-heading font-bold text-sm px-5 py-4 rounded-lg transition-colors mt-auto">
                    {{ $card['cta'] }}
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 10. SERVICE AND SUPPORT OPTIONS --}}
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Service Options</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-[2.2rem] 2xl:text-[2.6rem] leading-tight mb-3">
                Keep semi-professional equipment <span style="color:#148af4;">supported after installation</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Choose the service option that best fits your equipment and site.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                [
                    'title' => 'Repairs &amp; Call-Outs',
                    'text'  => 'For washer, dryer or finishing faults that need practical service support.',
                    'cta'   => 'Request a Repair',
                    'route' => route('repairs'),
                    'img'   => '/images/shared/repairs-callouts.jpg',
                    'pos'   => '50% 35%',
                ],
                [
                    'title' => 'Preventive Maintenance',
                    'text'  => 'Planned maintenance for sites that want fewer avoidable disruptions.',
                    'cta'   => 'View Maintenance Support',
                    'route' => route('service-contracts'),
                    'img'   => '/images/shared/service-contracts-hero.png',
                    'pos'   => '90% 35%',
                ],
                [
                    'title' => 'Equipment Rental',
                    'text'  => 'For selected equipment where lower upfront cost and included support make sense.',
                    'cta'   => 'Ask About Rental',
                    'route' => route('rental'),
                    'img'   => '/images/pages/semi-professional/ILSEQUIPMENTRENTALMYPRO.png',
                    'pos'   => '72% center',
                ],
                [
                    'title' => 'Support &amp; Aftercare',
                    'text'  => 'For service history, parts access where needed and clearer repair or replacement calls.',
                    'cta'   => 'Explore Support &amp; Aftercare',
                    'route' => route('parts-aftercare'),
                    'img'   => '/images/pages/semi-professional/ILSSUPPORTMYPRO.png',
                    'pos'   => '58% 25%',
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
                    <h3 class="font-heading font-bold text-white text-xl leading-tight mb-4">{!! $card['title'] !!}</h3>
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

{{-- 10b. MYPRO OWNER SUPPORT — compact resources strip (routes to the Electrolux myPRO Online Help Center, not an in-page support hub) --}}
<section class="py-20 lg:py-28 bg-gray-50 border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">

            <div class="lg:col-span-4 reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">myPRO Owner Resources</p>
                <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
                    Practical help for <span style="color:#148af4;">day-to-day use</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-7">
                    Access manuals, tutorials and product resources for everyday operation of myPRO equipment.
                </p>
                <a href="https://www.electroluxprofessional.com/gb/mypro-online-help-center/" target="_blank" rel="noopener"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    View myPRO Resources
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <div class="lg:col-span-8 grid grid-cols-1 sm:grid-cols-3 gap-4 reveal reveal-right">
                @foreach([
                    ['t' => 'Tutorial videos',            'd' => 'Practical guidance for everyday operation, setup and user instructions.',            'cta' => 'View Tutorials',          'h' => route('resources').'#mypro-tutorial-videos', 'ext' => false,  'icon' => '276'],
                    ['t' => 'myPRO manuals',              'd' => 'Find product help for myPRO, myPROzip and myPRO XL washers, dryers and ironers.',    'cta' => 'View Support Resources',  'h' => route('resources').'#mypro-tutorial-videos', 'ext' => false,  'icon' => '277'],
                    ['t' => 'Accessories & consumables',  'd' => 'Get guidance on suitable accessories and consumables for day-to-day laundry use.',   'cta' => 'Ask About Supplies',      'h' => route('equipment.category', ['category' => 'accessories']).'#detergents-by-laundry-setup', 'ext' => false, 'icon' => '278'],
                ] as $card)
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 flex flex-col">
                    <img src="/images/icons/{{ $card['icon'] }}.png" alt="" aria-hidden="true" class="w-20 h-20 object-contain mb-5">
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-2">{{ $card['t'] }}</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed mb-5 flex-1">{{ $card['d'] }}</p>
                    <a href="{{ $card['h'] ?? route('contact') }}" @if($card['ext']) target="_blank" rel="noopener" @endif
                       class="inline-flex items-center gap-1.5 font-body font-bold text-[#148af4] text-sm hover:underline">
                        {{ $card['cta'] }}
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

{{-- 13. FAQ --}}
@include('components.faq', [
    'eyebrow' => 'Semi-Professional FAQs',
    'heading' => 'Questions before choosing <span style="color:#148af4;">semi-professional laundry equipment</span>',
    'footerNote' => 'Have another question? Talk to our team.',
    'ctaHref' => '#semi-pro-form',
    'faqs' => [
        ['question' => 'What is semi-professional laundry equipment?', 'answer' => 'It is designed for businesses that need greater durability and faster cycles than domestic appliances, without the capacity of a full commercial setup.'],
        ['question' => 'When should a business move beyond domestic machines?', 'answer' => 'When regular business use, load volumes or turnaround needs begin to exceed what domestic appliances are designed to handle.'],
        ['question' => 'What is the difference between myPRO and myPRO XL?', 'answer' => 'myPRO models are available in 8–9 kg capacities, while myPRO XL offers 12 kg capacity. myPRO is designed for up to 7,500 cycles and myPRO XL for 15,000+ cycles.'],
        ['question' => 'Where does myPROzip fit?', 'answer' => 'myPROzip is designed for guest-operated laundry areas, with simple controls and options for payment-system integration.'],
        ['question' => 'What should be checked before installation?', 'answer' => 'Available space, water, drainage, electrical supply, ventilation, stacking requirements and expected daily use should all be reviewed.'],
        ['question' => 'When is Line 6000 the better choice?', 'answer' => 'Line 6000 is better suited to higher volumes, more intensive daily use and sites that need greater commercial capacity.'],
    ],
])

{{-- 14. FINAL CTA / FORM --}}
<div id="semi-pro-form"></div>
@include('components.cta-downtime-form', [
    'pageSource' => 'semi_professional_cta',
    'headingSize' => 'text-2xl sm:text-4xl lg:text-[2.625rem]',
    'heading'    => 'Plan a semi-professional<br class="hidden sm:block"> laundry setup around<br class="hidden sm:block"> <span style="color:#148af4;">your site and workload</span>',
    'body'       => 'Tell us what you wash, how often the machines run and who uses them.<br class="hidden lg:block"> We&rsquo;ll recommend the right equipment, purchase or rental option, and support.',
    'formTitle'  => 'Request Semi-Professional Laundry Advice',
    'buttonText' => 'Request Equipment Advice',
])

@endsection
