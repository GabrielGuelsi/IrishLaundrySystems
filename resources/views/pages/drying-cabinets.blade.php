@extends('layouts.app')

@section('pageTitle', 'Commercial Drying Cabinets | Electrolux Professional | Irish Laundry Systems')

@section('meta')
<meta name="description" content="Commercial drying cabinets selected around gentle drying, capacity and long-term support. Irish Laundry Systems supplies, installs and supports Electrolux Professional drying cabinets for garments, mops and PPE across Ireland.">
@endsection

@section('content')

{{-- 2. HERO --}}
<section class="relative overflow-hidden flex flex-col min-h-[520px] lg:h-[720px]" style="min-height:520px;">
    <img src="/images/sectors/Line 6000 solutions products_72dpi.jpg" alt="Commercial drying cabinets"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.75) 42%, rgba(1,30,65,0.35) 65%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-24 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-3xl">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Drying Cabinets</p>
                <h1 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight mb-6">
                    Dry bulky, delicate and specialist items with <span style="color:#148af4;">more care and control</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-4 max-w-2xl">
                    Irish Laundry Systems supplies, installs and supports Electrolux Professional drying cabinets for sites handling PPE, workwear, delicate garments, bulky items and specialist textiles across Ireland.
                </p>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    Choose drying support around item type, room fit, running cost, rental and long-term aftercare, without putting every item through a tumble dryer.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Drying Cabinet Advice
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white hover:border-white/70 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        Ask About Purchase or Rental
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 3. UNIVERSAL THIN ELECTROLUX TRUST STRIP --}}
@include('components.partner-strip')

{{-- 4. INTRO / BRIDGE --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Drying Cabinet Choice</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    Dry items that need <span style="color:#148af4;">care, control and faster return to use</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    Drying cabinets support items that need air movement, hanging space or shelf drying instead of tumble action.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Irish Laundry Systems reviews item types, drying capacity, room layout, Heat Pump suitability, installation, rental and aftercare before recommending the right setup.
                </p>
                <a href="#cabinet-range"
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

{{-- 4b. VISUAL PROOF FEATURE --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Energy, Time and Fabric Care</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                See <span style="color:#148af4;">saving, speed and fabric care</span> at a glance
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Drying cabinets give sites a controlled way to reduce running costs, dry specialist items faster and protect garments that should not be tumbled.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 lg:gap-10 reveal">
            @foreach([
                ['stat' => 'Save up to 40%', 'title' => 'Running cost savings',  'copy' => 'Heat Pump technology and auto-stop programmes can reduce running costs by up to 40%.'],
                ['stat' => '0.33 kWh/kg',    'title' => 'Lower energy per kilo', 'copy' => 'Uses just 0.33 kWh of energy per kg of laundry.'],
                ['stat' => 'Under 45 min',   'title' => '6 kg cotton load',      'copy' => 'Dry a 6 kg cotton load in less than 45 minutes.'],
            ] as $feature)
            <div class="p-6 flex flex-col items-center text-center gap-3">
                <div class="flex items-center justify-center min-h-16">
                    <p class="font-heading font-bold text-[#148af4] text-4xl sm:text-5xl leading-none">{{ $feature['stat'] }}</p>
                </div>
                <h3 class="font-heading font-bold text-navy text-base leading-snug">{{ $feature['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $feature['copy'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 5. FINANCIAL / OPERATIONAL PERFORMANCE --}}
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Financial Performance</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Drying cabinets that support <span style="color:#148af4;">lower running costs, faster drying and item care</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                A drying cabinet can reduce open drying, protect items that need gentle handling and return garments, uniforms and specialist items to use faster.
            </p>
        </div>

        @include('components.financial-metrics', ['labelDrop' => true, 'items' => [
            ['icon'=>'30', 'prefix'=>'Up to',      'stat'=>'40%',          'size'=>'text-4xl', 'label'=>'running cost saving',       'body'=>'Heat Pump technology and auto-stop programmes can reduce drying cabinet running costs by up to 40%.'],
            ['icon'=>'6',  'prefix'=>'',           'stat'=>'0.33 kWh/kg',  'size'=>'text-2xl', 'label'=>'energy use',               'body'=>'Energy use of just 0.33 kWh per kg makes the running cost story easy to understand.'],
            ['icon'=>'34', 'prefix'=>'Under',      'stat'=>'45 min',       'size'=>'text-4xl', 'label'=>'drying',                   'body'=>'Dry a 6 kg cotton load in less than 45 minutes for faster garment and workwear availability.'],
            ['icon'=>'4',  'prefix'=>'',           'stat'=>'Auto-stop',    'size'=>'text-2xl', 'label'=>'less wasted running time',  'body'=>'Programmes stop when the load is dry, helping keep cycle time and running costs under control.'],
            ['icon'=>'35', 'prefix'=>'',           'stat'=>'One<br>unit',  'size'=>'text-2xl', 'label'=>'more drying needs covered', 'body'=>'Dry anything from skiwear to silk, plus PPE, workwear, shoes, gloves and bulky items without relying on open drying.'],
        ]])
    </div>
</section>

{{-- 5b. OnE CONNECTED / CONNECTED LAUNDRY INTELLIGENCE STRIP --}}
<section class="relative overflow-hidden" style="background-color:#011E41; min-height:340px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:42%;">
        <img src="/images/healthcare/line-6000-solutions.jpg" alt="Connected commercial laundry equipment"
             class="w-full h-full object-cover" style="object-position: center center;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #011E41 0%, rgba(1,30,65,0.85) 18%, rgba(1,30,65,0.35) 55%, transparent 100%);"></div>
    </div>
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-12 sm:py-16 lg:py-24 w-full max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">OnE Connected</p>
        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
            See drying cabinet use, running costs and service needs <span style="color:#148af4;">in one place</span>
        </h2>
        <p class="font-body text-white/80 text-base leading-relaxed mb-4 max-w-xl">
            OnE Connected shows compatible Electrolux Professional equipment status, cycles, consumption, alerts and service needs in one digital dashboard.
        </p>
        <p class="font-body text-white/80 text-base leading-relaxed mb-6 max-w-xl">
            Where compatible, this supports better oversight of equipment use, running costs and service needs.
        </p>
        <div class="flex items-center flex-wrap gap-x-5 gap-y-2 mb-7">
            @foreach(['Status insight', 'Cycle data', 'Service alerts'] as $i => $pt)
            @if($i > 0)<span class="text-white/40">|</span>@endif
            <span class="font-body text-white text-sm font-bold">{{ $pt }}</span>
            @endforeach
        </div>
        <div class="flex flex-wrap gap-3">
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
                Explore OnE Connected
            </a>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 border border-white/60 text-white font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/10 transition-colors tracking-wide">
                Ask About Connected Equipment
            </a>
        </div>
    </div>
</section>

{{-- 6. TECHNICAL PROOF --}}
<section class="py-12 lg:py-16 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Technical Proof</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Technology behind <span style="color:#148af4;">controlled drying and better item care</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Selected Electrolux Professional drying cabinet features support easier use, controlled drying and better care for items that need a different drying method.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-3">
            @foreach([
                ['icon' => '26', 'stat' => 'Heat Pump',            'title' => 'Energy-saving drying technology', 'copy' => 'Heat Pump models provide the technical base behind the running cost saving claim.'],
                ['icon' => '21', 'stat' => 'Auto-stop programmes', 'title' => 'Stops when the load is dry',      'copy' => 'Automatic programmes stop drying when the desired moisture level is reached.'],
                ['icon' => '7',  'stat' => 'Non-mechanical drying','title' => 'Gentle fabric protection',        'copy' => 'Drying without tumbling helps protect delicate fabrics, outdoor clothing, workwear and bulky items.'],
                ['icon' => '20', 'stat' => 'PPE accessories',      'title' => 'Built around real item types',    'copy' => 'Hanger sticks, shoe shelves, glove hangers and glove or boot drying options support practical daily use.'],
                ['icon' => '30', 'stat' => 'Standard + Heat Pump', 'title' => 'Category range choice',           'copy' => 'Standard drying cabinets and Heat Pump drying cabinets give sites different options depending on room, item type and running cost priorities.'],
            ] as $card)
            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm {{ $loop->last ? 'col-span-2 lg:col-span-1' : 'col-span-1' }}">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/{{ $card['icon'] }}.png" alt="" class="w-28 h-28 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">{{ $card['title'] }}</h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed">{{ $card['copy'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 6b. WHERE DRYING CABINETS FIT --}}
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Where They Fit</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Useful wherever awkward or sensitive items need <span style="color:#148af4;">reliable drying</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Drying cabinets are most useful where sites handle items that are too delicate, too bulky or too specialist for standard tumble drying.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach([
                ['title' => 'Multi-housing and shared laundry',         'copy' => 'For apartment laundry rooms and shared facilities where users need fast, efficient drying without leaving wet items around the space.', 'img' => '/images/equipment/td6-multihousing-room.jpg', 'pos' => 'center center'],
                ['title' => 'On-premises laundries',                    'copy' => 'For hotels, guesthouses, leisure sites and laundries handling garments, uniforms, robes, outdoor clothing or delicate items.', 'img' => '/images/Hospitallity/hospitallityhero.jpeg', 'pos' => 'center center'],
                ['title' => 'Schools, childcare and sports sites',      'copy' => 'For jackets, outdoor clothing, shoes, sportswear and wet items that need to dry between uses.', 'img' => '/images/healthcare/services-overview-hero.jpg', 'pos' => 'center center'],
                ['title' => 'Firefighters, PPE and workwear',           'copy' => 'For firefighter PPE, uniforms, boots, gloves and protective workwear that need controlled cabinet drying after washing, without tumble action.', 'img' => '/images/healthcare/commercial-industrial.jpg', 'pos' => 'center center'],
                ['title' => 'Delicate garment and textile care',        'copy' => 'For silk, wool, velvet, linen, long dresses, curtains and specialist garments that can be damaged by mechanical drying action.', 'img' => '/images/healthcare/customer-care-line6000.jpg', 'pos' => 'center center'],
            ] as $card)
            <div class="group relative overflow-hidden rounded-2xl" style="height:380px;">
                <img src="{{ $card['img'] }}" alt="{{ strip_tags($card['title']) }}"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                     style="object-position: {{ $card['pos'] ?? 'center center' }};">
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background:linear-gradient(to top, rgba(1,30,65,0.95) 0%, rgba(1,30,65,0.45) 45%, rgba(1,30,65,0.05) 75%, transparent 100%);"></div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background:rgba(1,30,65,0.90);"></div>
                <div class="absolute inset-0 p-7 flex flex-col justify-end z-10">
                    <p class="font-body text-white/80 text-sm leading-relaxed overflow-hidden max-h-0 opacity-0 group-hover:max-h-40 group-hover:opacity-100 transition-all duration-500 mb-0 group-hover:mb-4">{{ $card['copy'] }}</p>
                    <h3 class="font-heading font-bold text-white text-xl leading-snug">{{ $card['title'] }}</h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 7. RANGE OVERVIEW --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Electrolux Professional Range</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Standard and Heat Pump cabinets for <span style="color:#148af4;">different items, rooms and running costs</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Irish Laundry Systems supplies and supports Electrolux Professional Line 6000 drying cabinets, including Standard and Heat Pump formats for different item types, room conditions and running cost priorities.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach([
                [
                    'name'       => 'Standard Drying Cabinets',
                    'copy'       => 'For sites that need reliable cabinet drying for garments, workwear, shoes, gloves and bulky items where a standard cabinet is the right fit.',
                    'highlights' => ['Controlled drying', 'Multiple item types', 'Practical daily use', 'Range choice'],
                    'cta'        => 'Ask About Standard Drying Cabinets',
                ],
                [
                    'name'       => 'Heat Pump Drying Cabinets',
                    'copy'       => 'For sites focused on reducing running cost pressure where Heat Pump technology is suitable for the room, item type and daily use.',
                    'highlights' => ['Save up to 40%', '0.33 kWh/kg', 'Auto-stop programmes', 'Energy-focused drying'],
                    'cta'        => 'Ask About Heat Pump Cabinets',
                ],
                [
                    'name'       => 'Glove and boot drying',
                    'copy'       => 'For workwear-heavy sites, emergency services and outdoor working environments that need practical drying for boots, gloves and protective clothing.',
                    'highlights' => ['Gloves', 'Boots', 'PPE', 'Outdoor workwear'],
                    'cta'        => 'Ask About Workwear Drying',
                ],
            ] as $p)
            <div class="bg-white border border-gray-200 rounded-2xl p-6 lg:p-8 flex flex-col h-full">
                <div class="flex items-center justify-center h-40 mb-5">
                    <img src="/images/healthcare/Drying-cabinets_image.webp" alt="{{ $p['name'] }}" class="max-h-full w-auto object-contain">
                </div>
                <h3 class="font-heading font-bold text-navy text-xl lg:text-2xl leading-tight mb-3">{{ $p['name'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-5">{{ $p['copy'] }}</p>
                <div class="flex flex-wrap gap-1.5 mb-6">
                    @foreach($p['highlights'] as $hl)
                    <span class="font-body text-[10px] font-bold uppercase tracking-wide text-[#148af4] bg-[#148af4]/10 px-2 py-1 rounded">{{ $hl }}</span>
                    @endforeach
                </div>
                <a href="{{ route('contact') }}" class="mt-auto inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-3 rounded-lg text-sm transition-colors duration-200 w-fit">
                    {{ $p['cta'] }}
                </a>
            </div>
            @endforeach
        </div>

        <p class="font-body text-gray-500 text-sm leading-relaxed mt-8 max-w-3xl">
            Irish Laundry Systems will assess the room, ventilation, item type, daily drying demand and budget before recommending the right drying cabinet.
        </p>
    </div>
</section>

{{-- 9. PRODUCT FINDER / CABINET RANGE --}}
<section id="cabinet-range" class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Line 6000 Drying Cabinets</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Compare drying cabinet options around <span style="color:#148af4;">item type, room fit and running cost</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Start with what needs to dry, then match the cabinet type to room setup, ventilation, accessories, Heat Pump suitability and support.
            </p>
        </div>

        {{-- Drying cabinet families — one card/image per range, filterable by type and line (like the washers page) --}}
        @php
            // One card per model; same product across kg shares one image.
            $cabinetFamilies = [
                ['name' => 'DC6-4',    'cat' => 'Standard Drying Cabinets',    'slug' => 'dc6-4',  'type' => 'Standard',  'line' => ['Line 6000'], 'fit' => 'Standard drying cabinet for gentle hang-drying of garments and linen.',          'img' => '/images/equipment/Standard%20Drying%20Cabinets.jpg'],
                ['name' => 'DC6-8',    'cat' => 'Standard Drying Cabinets',    'slug' => 'dc6-8',  'type' => 'Standard',  'line' => ['Line 6000'], 'fit' => 'Standard drying cabinet for gentle hang-drying of garments and linen.',          'img' => '/images/equipment/Standard%20Drying%20CabinetsDC6-8.jpg'],
                ['name' => 'DC6-14',   'cat' => 'Standard Drying Cabinets',    'slug' => 'dc6-14', 'type' => 'Standard',  'line' => ['Line 6000'], 'fit' => 'Standard drying cabinet for gentle hang-drying of garments and linen.',          'img' => '/images/equipment/Standard%20Drying%20CabinetsDC6-14.jpg'],
                ['name' => 'DC6-15WW', 'cat' => 'Standard Drying Cabinets',    'slug' => 'workwear-drying-cabinet',  'type' => 'Standard',  'line' => ['Line 6000'], 'fit' => 'Drying cabinet suited to workwear, PPE and heavier garments.',                    'img' => '/images/equipment/Drying%20Cabinets%20-%20Heat%20PumpDC6-15WW.jpg'],
                ['name' => 'DC6-14HP', 'cat' => 'Drying Cabinets - Heat Pump', 'slug' => 'dc6-14hp','type' => 'Heat Pump', 'line' => ['Line 6000'], 'fit' => 'Heat pump drying cabinet that cuts drying energy while protecting fabrics.',      'img' => '/images/equipment/Drying%20Cabinets%20-%20Heat%20Pumpdc6-14hp.jpg'],
                ['name' => 'DC7-4HP',  'cat' => 'Drying Cabinets - Heat Pump', 'slug' => 'dc7-4hp', 'type' => 'Heat Pump', 'line' => ['Line 7000'], 'fit' => 'Heat pump drying cabinet that cuts drying energy while protecting fabrics.',      'img' => '/images/equipment/Drying%20Cabinets%20-%20Heat%20Pumpdc7-4hp.jpg'],
                ['name' => 'DC7-4HPh', 'cat' => 'Drying Cabinets - Heat Pump', 'slug' => 'dc7-4hph','type' => 'Heat Pump', 'line' => ['Line 7000'], 'fit' => 'Heat pump drying cabinet that cuts drying energy while protecting fabrics.',      'img' => '/images/equipment/Drying%20Cabinets%20-%20Heat%20PumpDC7-4HPH.jpg'],
                ['name' => '1LZS03',   'cat' => 'Drying Cabinets - Heat Pump', 'slug' => '1lzs03',  'type' => 'Heat Pump', 'line' => ['Line 7000'], 'fit' => 'Heat pump drying cabinet that cuts drying energy while protecting fabrics.',      'img' => '/images/equipment/Drying%20Cabinets%20-%20Heat%20Pump%201LZS03.jpg'],
            ];
        @endphp

        @php
            // derive facet option arrays with counts from the family data (no new copy)
            $typeOpts = []; $lineOpts = [];
            foreach($cabinetFamilies as $cf) {
                $typeOpts[$cf['type']] = ($typeOpts[$cf['type']] ?? 0) + 1;
                foreach($cf['line'] as $ln) { $lineOpts[$ln] = ($lineOpts[$ln] ?? 0) + 1; }
            }
            $typeOrder = ['Standard','Heat Pump'];
            $lineOrder = ['Line 6000','Line 7000'];
            $famJs = array_map(fn($cf) => ['type' => $cf['type'], 'line' => $cf['line']], $cabinetFamilies);
        @endphp

        <div x-data="{
                type: [],
                line: [],
                families: {{ \Illuminate\Support\Js::from($famJs) }},
                matches(f) {
                    const ty = this.type.length === 0 || this.type.includes(f.type);
                    const ln = this.line.length === 0 || (f.line && f.line.some(l => this.line.includes(l)));
                    return ty && ln;
                },
                get count() { return this.families.filter(f => this.matches(f)).length; },
                clearAll() { this.type = []; this.line = []; },
             }"
             class="grid grid-cols-1 lg:grid-cols-[260px_1fr] gap-8 lg:gap-10 items-start">

            {{-- LEFT: filter sidebar --}}
            <aside class="lg:sticky lg:top-28 self-start border border-gray-200 rounded-xl p-5">
                <div class="flex items-center justify-between">
                    <span class="font-heading font-bold text-navy text-xs uppercase tracking-[0.16em]">Filter Products</span>
                    <button @click="clearAll()" class="font-body text-xs text-[#148af4] hover:underline">Reset all</button>
                </div>

                {{-- Cabinet Type --}}
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <p class="font-heading font-bold text-navy text-sm mb-3">Cabinet Type</p>
                    <div class="space-y-2.5">
                        @foreach($typeOrder as $val)
                        @if(isset($typeOpts[$val]))
                        <label class="flex items-center justify-between cursor-pointer group">
                            <span class="flex items-center gap-2.5">
                                <input type="checkbox" value="{{ $val }}" x-model="type" class="w-4 h-4 rounded border-gray-300 accent-[#148af4] cursor-pointer">
                                <span class="font-body text-sm text-gray-600 group-hover:text-navy transition-colors">{{ $val }}</span>
                            </span>
                            <span class="font-body text-xs text-gray-400">{{ $typeOpts[$val] }}</span>
                        </label>
                        @endif
                        @endforeach
                    </div>
                </div>

                {{-- Product Line --}}
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <p class="font-heading font-bold text-navy text-sm mb-3">Product Line</p>
                    <div class="space-y-2.5">
                        @foreach($lineOrder as $val)
                        @if(isset($lineOpts[$val]))
                        <label class="flex items-center justify-between cursor-pointer group">
                            <span class="flex items-center gap-2.5">
                                <input type="checkbox" value="{{ $val }}" x-model="line" class="w-4 h-4 rounded border-gray-300 accent-[#148af4] cursor-pointer">
                                <span class="font-body text-sm text-gray-600 group-hover:text-navy transition-colors">{{ $val }}</span>
                            </span>
                            <span class="font-body text-xs text-gray-400">{{ $lineOpts[$val] }}</span>
                        </label>
                        @endif
                        @endforeach
                    </div>
                </div>

                {{-- Footer count + clear --}}
                <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between">
                    <span class="font-body text-sm text-navy font-bold"><span x-text="count"></span> <span x-text="count === 1 ? 'model' : 'models'"></span></span>
                    <button @click="clearAll()" class="font-body text-xs text-[#148af4] hover:underline">Clear filters</button>
                </div>
            </aside>

            {{-- RIGHT: product cards (floating images) --}}
            <div>
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-x-6 gap-y-10">
                    @foreach($cabinetFamilies as $f)
                    <div x-show="matches({{ \Illuminate\Support\Js::from(['type'=>$f['type'],'line'=>$f['line']]) }})" class="flex flex-col">
                        <a href="{{ route('equipment.product', ['category' => 'drying-cabinets', 'product' => $f['slug']]) }}" class="flex items-center justify-center h-44 lg:h-48 mb-5">
                            <img src="{{ $f['img'] }}" alt="{{ $f['name'] }}" class="max-h-full w-auto object-contain transition-transform duration-300 hover:-translate-y-1.5">
                        </a>
                        <p class="font-body text-xs mb-1.5"><span class="font-bold text-[#148af4]">{{ $f['cat'] }}</span></p>
                        <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2"><a href="{{ route('equipment.product', ['category' => 'drying-cabinets', 'product' => $f['slug']]) }}" class="hover:text-[#148af4] transition-colors">{{ $f['name'] }}</a></h3>
                        <p class="font-body text-gray-500 text-sm leading-relaxed mb-4">{{ $f['fit'] }}</p>
                        @if(!empty($f['line']))
                        <div class="flex flex-wrap gap-1.5 mb-5">
                            @foreach($f['line'] as $ln)
                            <span class="font-body text-[10px] font-bold uppercase tracking-wide text-[#148af4] bg-[#148af4]/10 px-2 py-1 rounded">{{ $ln }}</span>
                            @endforeach
                        </div>
                        @endif
                        <div class="mt-auto flex flex-col gap-2.5">
                            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/></svg>
                                Request Advice on This Model
                            </a>
                            <a href="{{ route('equipment.product', ['category' => 'drying-cabinets', 'product' => $f['slug']]) }}" class="inline-flex items-center justify-center gap-2 border border-gray-300 text-navy hover:border-navy font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                                View Details
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- Empty state --}}
                <div x-show="count === 0" x-cloak class="text-center py-16">
                    <p class="font-body text-gray-500 text-base">No cabinets match that combination. <button @click="clearAll()" class="text-[#148af4] font-bold hover:underline">Clear filters</button> or <a href="{{ route('contact') }}" class="text-[#148af4] font-bold hover:underline">talk to our team</a>.</p>
                </div>

                {{-- View full range --}}
                <div class="text-center mt-12">
                    <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 font-body font-bold text-[#148af4] hover:underline">
                        View full product range
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <p class="font-body text-gray-500 text-sm leading-relaxed mt-8 max-w-3xl">
            Choosing between cabinet models? Irish Laundry Systems reviews capacity, item type, room setup, rental, installation and aftercare before recommending the right option.
        </p>
    </div>
</section>

{{-- 9b. ACCESSORIES --}}
<section class="py-12 lg:py-16 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Accessories</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Make cabinet drying work for <span style="color:#148af4;">the items your site handles</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                The right accessories make a drying cabinet more useful. Instead of forcing every item into the same drying method, accessories let the cabinet support garments, shoes, gloves, boots and specialist workwear more effectively.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach([
                ['title' => 'Hanger sticks',          'copy' => 'For garments that need to hang properly while drying.'],
                ['title' => 'Shoe shelves',           'copy' => 'For shoes, boots and bulky footwear that should not be dried loose in a tumble dryer.'],
                ['title' => 'Glove hangers',          'copy' => 'For gloves, protective clothing and specialist workwear accessories.'],
                ['title' => 'Glove and boot dryer',   'copy' => 'For firefighter PPE, boots, gloves and protective garments that need practical drying support inside the cabinet.'],
            ] as $card)
            <div class="bg-bg border border-gray-100 rounded-2xl p-7 flex flex-col h-full">
                <div class="w-10 h-1 rounded-full bg-[#148af4] mb-4"></div>
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $card['copy'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="mt-8">
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                Ask About Accessories
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- 9c. PLANNING / ROOM FIT STRIP --}}
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.85) 15%, rgba(20,138,244,0.3) 55%, transparent 100%);"></div>
    </div>
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-12 lg:py-24 w-full max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Room Planning</p>
        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
            Plan cabinet drying around the <span style="color:#011E41;">items, room and energy priorities</span>
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6 max-w-xl">
            A drying cabinet should be chosen around what needs to dry, how often it is used, where it will sit, and whether the room can support the selected drying method. Heat Pump drying cabinets can reduce running cost pressure, but room conditions and ventilation should be reviewed before the final recommendation.
        </p>
        <div class="flex items-center flex-wrap gap-x-5 gap-y-2 mb-7">
            @foreach(['Item type', 'Daily drying demand', 'Room space', 'Ventilation review', 'Heat Pump suitability', 'Accessories'] as $i => $pt)
            @if($i > 0)<span class="text-white/40">|</span>@endif
            <span class="font-body text-white text-sm font-bold">{{ $pt }}</span>
            @endforeach
        </div>
        <a href="{{ route('request-assessment') }}"
           class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
            Request Equipment Advice
        </a>
    </div>
</section>

{{-- 9d. DOSING & LAUNDRY CONTROL --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal">Dosing &amp; Laundry Control</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">
            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    Protect textiles and cut waste with <span style="color:#148af4;">accurate dosing</span>
                </h2>
            </div>
            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                    Better drying starts earlier in the process. Accurate dosing keeps detergent use matched to the load, reducing waste and protecting textile quality before drying.
                </p>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    Ask About Dosing &amp; Laundry Control
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- 10. SUPPORT OPTIONS --}}
<section class="py-16 lg:py-20 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Service Support</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Keep drying cabinets supported <span style="color:#148af4;">after installation</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Irish Laundry Systems offers rental, planned servicing, repairs and aftercare for sites using drying cabinets every day.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                [
                    'title' => 'Equipment Rental',
                    'text'  => 'For sites considering lower upfront cost where rental is suitable for the selected equipment and site needs.',
                    'cta'   => 'See Rental Options',
                    'route' => route('rental'),
                    'img'   => '/images/healthcare/commercial-industrial.jpg',
                    'pos'   => 'center center',
                ],
                [
                    'title' => 'Preventive Maintenance',
                    'text'  => 'Planned servicing to reduce avoidable disruption and keep cabinet condition on track.',
                    'cta'   => 'View Preventive Maintenance',
                    'route' => route('service-contracts'),
                    'img'   => '/images/healthcare/service-contracts-hero.png',
                    'pos'   => '90% 35%',
                ],
                [
                    'title' => 'Repairs &amp; Call-outs',
                    'text'  => 'For drying cabinet faults, drying performance issues, control problems or service needs that require practical engineering support.',
                    'cta'   => 'Request a Repair',
                    'route' => route('repairs'),
                    'img'   => '/images/healthcare/repairs-callouts.jpg',
                    'pos'   => '50% 35%',
                ],
                [
                    'title' => 'Support &amp; Aftercare',
                    'text'  => 'For follow-up, service history, parts support where needed and clearer repair or replacement decisions.',
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

{{-- 11. RENTAL / CAPITAL PRESSURE STRIP --}}
@include('components.why-choose-strip', [
    'eyebrow'      => 'Rental Options',
    'headingLine1' => 'Keep specialist drying moving with',
    'headingLine2' => '<span style="color:#148af4;">lower upfront cost</span>',
    'body'         => 'For sites facing cabinet replacement, capacity needs or ageing equipment, rental can keep the laundry room moving without turning every equipment decision into one large capital purchase.',
    'miniPoints'   => ['Lower upfront<br>cost', 'Installation and<br>support available', 'Service and breakdown support<br>included under rental terms'],
    'miniNowrap'   => true,
])

{{-- 12. COMPACT AFTER-INSTALLATION SUPPORT BAND --}}
<section class="py-12 lg:py-16 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-7">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">After Installation</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                    Keep cabinet decisions <span style="color:#148af4;">connected after installation</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-5 max-w-2xl">
                    Irish Laundry Systems connects planned maintenance, service history, service and breakdown support and parts access where needed, so cabinet decisions stay clear after installation, rental, repair or inspection.
                </p>
                <div class="flex items-center flex-wrap gap-x-5 gap-y-2">
                    @foreach(['Planned maintenance', 'Service history', 'Service and breakdown support', 'Parts access where needed'] as $i => $pt)
                    @if($i > 0)<span class="text-gray-300">|</span>@endif
                    <span class="font-body text-navy text-sm font-bold">{{ $pt }}</span>
                    @endforeach
                </div>
            </div>
            <div class="lg:col-span-5 flex lg:justify-end">
                <a href="{{ route('parts-aftercare') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-heading font-bold text-sm px-6 py-4 rounded-lg transition-colors tracking-wide">
                    Explore Support &amp; Aftercare
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- 13. TESTIMONIAL MODULE --}}
@include('components.testimonials', [
    'eyebrow'    => 'Customer Trust',
    'heading'    => 'Trusted support behind <span style="color:#148af4;">commercial laundry decisions</span>',
    'subheading' => 'Drying cabinets affect item care, staff routines, daily drying needs and long-term running costs. Irish Laundry Systems is trusted by organisations that value clear communication, responsive service support and peace of mind after installation.',
])

{{-- 14. TRUSTED BY LOGO STRIP --}}
@include('components.proof-bar')

{{-- 15. RESOURCES --}}
<section class="py-16 lg:py-24 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Resources</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">Official Electrolux Professional <span style="color:#148af4;">drying cabinet information</span></h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Use official product information to review Standard Drying Cabinets, Heat Pump Drying Cabinets, accessories, energy proof and room requirements before making a final decision.
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach([
                [
                    'title' => 'Commercial Drying Cabinets PDF',
                    'copy'  => 'Official Electrolux Professional PDF covering drying cabinet benefits, automatic programmes, accessories, Heat Pump availability and fabric care.',
                    'cta'   => 'Download PDF',
                    'href'  => '',
                    'download' => true,
                ],
                [
                    'title' => 'Line 6000 laundry brochure',
                    'copy'  => 'Official Electrolux Professional brochure covering wider Line 6000 laundry technology, washers, dryers and performance proof.',
                    'cta'   => 'Download Brochure',
                    'href'  => '/pdfs/EPR-Line6000-DryersBrochure-01072025_EN.pdf',
                    'download' => true,
                ],
                [
                    'title' => 'Firefighters laundry solutions brochure',
                    'copy'  => 'Official Electrolux Professional resource covering emergency-service laundry, drying cabinets, PPE drying, glove and boot drying, Barrier Washers and protective workwear care.',
                    'cta'   => 'View brochure',
                    'href'  => '/pdfs/EPR_brochure_firefighters_16042025_EN.pdf',
                    'download' => true,
                ],
                [
                    'title' => 'Need to compare cabinet options?',
                    'copy'  => 'Irish Laundry Systems reviews the site, drying demand, item type, room conditions and budget before recommending a cabinet.',
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

{{-- 15c. RELATED EQUIPMENT --}}
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Related Equipment</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Other equipment that may support the <span style="color:#148af4;">same laundry room</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Drying cabinets often sit alongside washers, tumble dryers, dosing systems or specialist textile care equipment depending on what the site needs to dry and how the room is used.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach([
                ['title' => 'Commercial Washing Machines', 'copy' => 'For daily washing of workwear, towels, uniforms, bedding and mixed textiles.', 'cta' => 'View Washing Machine Options', 'route' => route('equipment.category', ['category' => 'washers']), 'img' => '/images/equipment/commercialwasher.webp'],
                ['title' => 'Commercial Tumble Dryers',    'copy' => 'For general drying demand where tumble drying is suitable for the load.', 'cta' => 'View Dryer Options', 'route' => route('equipment.category', ['category' => 'tumble-dryers']), 'img' => '/images/equipment/Tumble-dryers_Heat-Pump_1-1.webp'],
                ['title' => 'Dosing Systems',     'copy' => 'For detergent control, lower waste and more consistent wash results.', 'cta' => 'Ask About Dosing Systems', 'route' => route('contact'), 'img' => '/images/healthcare/MultisaveEQUIP.webp'],
                ['title' => 'Wet Cleaning',       'copy' => 'For specialist textile care where delicate garments, leathers or shoes need a different cleaning process.', 'cta' => 'Explore Wet Cleaning', 'route' => route('contact'), 'img' => '/images/healthcare/lagoon-advanced-care.webp'],
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

{{-- 15d. FAQ --}}
@include('components.faq', [
    'eyebrow' => 'Drying Cabinets FAQs',
    'heading' => 'Questions before choosing a <span style="color:#148af4;">commercial drying cabinet</span>',
    'faqs' => [
        ['question' => 'What is a commercial drying cabinet used for?', 'answer' => 'A commercial drying cabinet is used for garments and items that need controlled drying without tumble drying. This can include delicate fabrics, workwear, waterproof clothing, shoes, gloves, boots, helmets, PPE and bulky items.'],
        ['question' => 'How much can Heat Pump drying cabinets save?', 'answer' => 'Electrolux Professional states that Heat Pump technology and auto-stop programmes can reduce running costs by up to 40%.'],
        ['question' => 'How much energy do drying cabinets use?', 'answer' => 'Electrolux Professional states that drying cabinets can use just 0.33 kWh of energy per kg of laundry.'],
        ['question' => 'How fast can a drying cabinet dry a load?', 'answer' => 'Electrolux Professional states that drying cabinets can dry a 6 kg cotton load in less than 45 minutes.'],
        ['question' => 'When is a drying cabinet better than a tumble dryer?', 'answer' => 'A drying cabinet is useful when items should not be tumbled, when shape or functional details need protection, or when shoes, gloves, outdoor clothing, PPE or delicate garments need controlled drying.'],
        ['question' => 'Are Heat Pump drying cabinets available?', 'answer' => 'Yes. Heat Pump Drying Cabinets are part of the Electrolux Professional range. Irish Laundry Systems reviews whether a Heat Pump model is suitable for the room conditions, ventilation and daily drying needs.'],
        ['question' => 'What accessories are available?', 'answer' => 'Accessory options include hanger sticks, shoe shelves, glove hangers and glove or boot drying options for sites handling workwear, protective clothing or specialist items.'],
        ['question' => 'Can Irish Laundry Systems help with supply and installation?', 'answer' => 'Yes. Irish Laundry Systems supplies and installs drying cabinets, with rental, preventive maintenance, repairs and aftercare available where required.'],
    ],
])

{{-- 16. FINAL CTA --}}
@include('components.cta-downtime-form', [
    'pageSource'        => 'drying_cabinets_cta',
    'eyebrow'           => 'Request Equipment Advice',
    'heading'           => 'Ready to choose the <span style="color:#148af4;">right drying cabinet</span> for your site',
    'body'              => 'Talk to Irish Laundry Systems about what you need to dry, how often the cabinet will be used, room conditions, running costs, rental, maintenance and aftercare.',
    'formTitle'         => 'Request Drying Cabinet Advice',
    'buttonText'        => 'Request Drying Cabinet Advice',
    'showLocationField' => true,
    'equipmentLabel'    => 'Current laundry setup',
    'messageLabel'      => 'What do you need to dry?',
    'requestTypeLabel'  => 'Are you looking at equipment purchase, rental, repair or maintenance?',
])

@endsection
