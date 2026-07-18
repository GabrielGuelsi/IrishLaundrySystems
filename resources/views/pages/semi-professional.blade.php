@extends('layouts.app')

@section('pageTitle', 'Semi-Professional Laundry Equipment Ireland | myPRO XL')

@section('meta')
<meta name="description" content="Step up from domestic laundry with Electrolux Professional myPRO XL, myPRO and myPROzip washers and dryers, supplied and supported by Irish Laundry Systems.">
@endsection

@section('content')

{{-- 1. HERO --}}
<section class="relative overflow-hidden flex flex-col lg:!h-[720px]" style="height:auto; min-height:560px;">
    <img src="/images/pages/equipment/mypro-family.jpg" alt="Semi-professional laundry equipment"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.75) 42%, rgba(1,30,65,0.35) 65%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 sm:py-20 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-5xl">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Semi-Professional Laundry Equipment</p>
                <h1 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-[2.6rem] xl:text-5xl leading-tight mb-6">
                    When domestic machines<br><span style="color:#148af4;">become the weak point</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8">
                    <span class="block lg:whitespace-nowrap">For small businesses using laundry every day, Electrolux Professional myPRO XL,</span>
                    <span class="block lg:whitespace-nowrap">myPRO and myPROzip offer a stronger step up from standard domestic appliances.</span>
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

{{-- 2. THIN ELECTROLUX TRUST STRIP --}}
@include('components.partner-strip')

{{-- 3. INTRO / BRIDGE --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Small-Business Laundry</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    Built for <span style="color:#148af4;">regular business use</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Semi-professional washers and dryers give smaller sites more capacity and faster cycles than domestic appliances, without the scale of a full commercial setup.
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
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $lvl['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $lvl['copy'] }}</p>
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

{{-- 5. MYPRO XL HIGHLIGHT --}}
<section class="py-12 lg:py-16 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal flex flex-col lg:flex-row lg:items-start lg:justify-between gap-6">
            <div class="min-w-0">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">myPRO XL Highlight</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3 lg:whitespace-nowrap">
                    A bigger step up for <span style="color:#148af4;">heavier daily laundry use</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed">
                    <span class="block lg:whitespace-nowrap">myPRO XL gives smaller businesses more capacity, durability and speed in a compact semi-professional setup,</span>
                    <span class="block lg:whitespace-nowrap">helping handle larger loads without moving straight to full commercial laundry scale.</span>
                </p>
            </div>
            <a href="{{ route('contact') }}"
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
<section class="py-16 lg:py-24 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">myPRO Range Options</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
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
                'badges'    => ['8 kg loads', '7,500 cycles', 'Daily use', 'Small sites'],
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

{{-- 6b. EQUIPMENT RANGE (myPRO ironing & finishing) --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">myPRO Ironing Support</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Add light finishing <span style="color:#148af4;">alongside washing and drying</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                For sites that also need practical ironing, myPRO steam ironers can support everyday garment and flatwork finishing without moving into a larger finishing line.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 reveal">
            @foreach([
                ['name' => 'myPRO Steam Ironer IS1103', 'topLine' => 'For everyday ironing support', 'copy' => 'A myPRO steam ironer for practical garment and flatwork finishing alongside washing and drying.', 'badges' => ['Light ironing', 'Practical finishing', 'myPRO setup', 'Small sites'], 'img' => '/images/pages/semi-professional/IS1103.jpg'],
                ['name' => 'myPRO Steam Ironer IS185', 'topLine' => 'For faster light finishing', 'copy' => 'A foldable myPRO steam ironer for sites that need a more consistent finish than hand ironing alone.', 'badges' => ['Light finishing', 'Foldable format', 'Faster ironing', 'myPRO setup'], 'img' => '/images/pages/semi-professional/myPRO%20-%20IronersIS185.jpg'],
            ] as $card)
            <div class="flex flex-col rounded-2xl p-6 bg-white border border-gray-200">
                <div class="flex items-center justify-center h-60 lg:h-72 mb-5">
                    <img src="{{ $card['img'] }}" alt="{{ $card['name'] }}" class="max-h-full w-auto object-contain transition-transform duration-300 hover:-translate-y-1.5">
                </div>
                <p class="font-body text-xs font-bold text-navy/60 mb-1.5">{{ $card['topLine'] }}</p>
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $card['name'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-4">{{ $card['copy'] }}</p>
                <div class="flex flex-wrap gap-1.5 mb-5">
                    @foreach($card['badges'] as $b)
                    <span class="font-body text-[10px] font-bold uppercase tracking-wide text-navy/70 bg-navy/[0.06] px-2 py-1 rounded">{{ $b }}</span>
                    @endforeach
                </div>
                <a href="{{ route('contact') }}" class="mt-auto inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-5 py-3 rounded-lg text-sm transition-colors">
                    Request Advice
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 6c. RELATED EQUIPMENT — the next equipment route, front-facing product shots --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Related Equipment</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Not sure semi-professional is <span style="color:#148af4;">the right level?</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                If your site needs higher capacity, heavier daily use or specialist drying and finishing, Irish Laundry Systems can help you compare the next equipment route before you decide.
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
                    <p class="font-heading font-bold text-navy text-2xl leading-snug mb-2">{{ $card['title'] }}</p>
                    <p class="font-body text-gray-600 text-base leading-relaxed">{{ $card['copy'] }}</p>
                </div>
                <div class="w-full flex items-end justify-center" style="height:300px;">
                    <img src="{{ $card['img'] }}" alt="{{ $card['title'] }}" loading="lazy" decoding="async"
                         class="transition-transform duration-500 hover:-translate-y-2"
                         style="width:{{ $card['box'] }}px; max-width:100%; height:{{ $card['box'] }}px; object-fit:contain;">
                </div>
                <a href="{{ $card['route'] }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy-dark text-white font-heading font-bold text-base px-5 py-4 rounded-lg transition-colors mt-auto">
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

{{-- 6d. COMPACT RESOURCES BAR (matches accessories design) --}}
<section class="py-8 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 lg:gap-10">
            @foreach([
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
                    ['l' => 'Request advice', 'h' => route('request-assessment')],
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

{{-- 8. WHERE SEMI-PROFESSIONAL LAUNDRY FITS --}}
<section class="py-12 lg:py-16 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Where It Fits</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
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

{{-- 9. PLANNING / SITE FIT STRIP — Home-style medium-height strip (absorbs Right Fit Advice) --}}
@include('components.cta-combined-banner', [
    'eyebrow'    => 'Planning Before Installation',
    'heading'    => 'Plan the right setup around <span style="color:#011E41;">your room, workload and budget</span>',
    'body'       => 'Irish Laundry Systems can review space, daily use, washer and dryer pairing, utilities, stacked layouts and payment setup where needed before recommending the right next step.',
    'miniPoints' => [
        ['icon' => 'home-planning-fit', 'iconClass' => 'scale-[1.061] translate-y-[2.3%]', 'label' => 'Room<br>fit'],
        ['icon' => '225', 'iconClass' => 'scale-[1.05] translate-y-[0.4%]',  'label' => 'Daily<br>use'],
        ['icon' => '215', 'iconClass' => 'scale-[1.094] -translate-y-[1.2%]', 'label' => 'Utilities<br>and access'],
    ],
    'ctaText'    => 'Request Equipment Advice',
])

{{-- 10. SERVICE AND SUPPORT OPTIONS --}}
<section class="py-16 lg:py-20 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Support Options</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Support for semi-professional equipment <span style="color:#148af4;">beyond installation</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Irish Laundry Systems supports semi-professional laundry sites with repairs, Preventive Maintenance, rental where suitable and aftercare.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                [
                    'title' => 'Repairs &amp; Call-outs',
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

{{-- 10b. MYPRO OWNER SUPPORT — compact resources strip (routes to the Electrolux myPRO Online Help Center, not an in-page support hub) --}}
<section class="py-12 lg:py-16 bg-gray-50 border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">

            <div class="lg:col-span-4 reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">myPRO Owner Support</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
                    Support resources for <span style="color:#148af4;">day-to-day use</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-7">
                    After installation, your team can access myPRO tutorials, FAQs, manuals and product support resources for washers, dryers, ironers and selected accessories.
                </p>
                <a href="https://www.electroluxprofessional.com/gb/mypro-online-help-center/" target="_blank" rel="noopener"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    View myPRO Resources
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <div class="lg:col-span-8 grid grid-cols-1 sm:grid-cols-3 gap-4 reveal reveal-right">
                @foreach([
                    ['t' => 'Tutorial videos',            'd' => 'Practical guidance for everyday operation, setup and user instructions.',            'cta' => 'View Tutorials',          'h' => route('resources').'#mypro-tutorial-videos', 'ext' => false,  'icon' => 'M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z'],
                    ['t' => 'myPRO manuals',              'd' => 'Find product help for myPRO, myPROzip and myPRO XL washers, dryers and ironers.',    'cta' => 'View Support Resources',  'h' => route('resources').'#mypro-tutorial-videos', 'ext' => false,  'icon' => 'M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z'],
                    ['t' => 'Accessories & consumables',  'd' => 'Get guidance on suitable accessories and consumables for day-to-day laundry use.',   'cta' => 'Ask About Supplies',      'h' => route('equipment.category', ['category' => 'accessories']).'#detergents-by-laundry-setup', 'ext' => false, 'icon' => 'M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5'],
                ] as $card)
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 flex flex-col">
                    <span class="w-14 h-14 rounded-full bg-[#148af4]/10 flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $card['icon'] }}"/></svg>
                    </span>
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
    'faqs' => [
        ['question' => 'What is semi-professional laundry equipment?', 'answer' => 'It is designed for businesses that need greater durability and faster cycles than domestic appliances, without the capacity of a full commercial setup.'],
        ['question' => 'When should a business move beyond domestic machines?', 'answer' => 'When regular business use, load volumes or turnaround needs begin to exceed what domestic appliances are designed to handle.'],
        ['question' => 'What is the difference between myPRO and myPRO XL?', 'answer' => 'myPRO offers 8 kg capacity and is designed for up to 7,500 cycles. myPRO XL offers 12 kg capacity and is designed for 15,000+ cycles.'],
        ['question' => 'Where does myPROzip fit?', 'answer' => 'myPROzip is designed for guest-operated laundry areas, with simple controls and options for payment-system integration.'],
        ['question' => 'What should be checked before installation?', 'answer' => 'Available space, water, drainage, electrical supply, ventilation, stacking requirements and expected daily use should all be reviewed.'],
        ['question' => 'When is Line 6000 the better choice?', 'answer' => 'Line 6000 is better suited to higher volumes, more intensive daily use and sites that need greater commercial capacity.'],
    ],
])

{{-- 14. FINAL CTA / FORM --}}
@include('components.cta-downtime-form', [
    'pageSource' => 'semi_professional_cta',
    'heading'    => 'Plan the right semi-professional setup for<br><span style="color:#148af4;">your site</span>',
    'body'       => 'Tell us what you wash, how often the machines run and who uses them. We&rsquo;ll recommend the right equipment, purchase or rental option, and support.',
    'formTitle'  => 'Request Semi-Professional Laundry Advice',
    'buttonText' => 'Request Equipment Advice',
])

@endsection
