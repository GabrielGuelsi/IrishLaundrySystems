@extends('layouts.app')

@section('pageTitle', 'Commercial Drying Cabinets | Electrolux Professional | Irish Laundry Systems')

@section('meta')
<meta name="description" content="Commercial drying cabinets selected around gentle drying, capacity and long-term support. Irish Laundry Systems supplies, installs and supports Electrolux Professional drying cabinets for garments, mops and PPE across Ireland.">
@endsection

@section('content')

{{-- 2. HERO --}}
<section class="relative overflow-hidden flex flex-col min-h-[520px] lg:h-[720px]" style="min-height:520px;">
    <img src="/images/shared/Line 6000 solutions products_72dpi.jpg" alt="Commercial drying cabinets"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.75) 42%, rgba(1,30,65,0.35) 65%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-24 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-3xl">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Drying Cabinets</p>
                <h1 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight mb-6">
                    <span class="block lg:whitespace-nowrap">Dry items that should not go through</span>
                    <span class="block lg:whitespace-nowrap" style="color:#148af4;">standard tumble drying</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    <span class="block lg:whitespace-nowrap">Irish Laundry Systems supplies, installs and supports Electrolux Professional</span>
                    <span class="block lg:whitespace-nowrap">drying cabinets for PPE, workwear, shoes, gloves, bulky items and delicate</span>
                    <span class="block lg:whitespace-nowrap">garments across Ireland.</span>
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Drying Cabinet Advice
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white hover:border-white/70 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        Ask About Purchase or Equipment Rental
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
                    Drying cabinets are designed for items that need air movement, hanging space or shelf drying instead of tumble action.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Irish Laundry Systems reviews item type, room fit, drying capacity and running cost before recommending the right setup.
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

{{-- 4b. DRYING CABINET PERFORMANCE (combined financial + technical) --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Drying Cabinet Performance</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Drying cabinets that support <span style="color:#148af4;">flexibility, speed and item care</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed xl:whitespace-nowrap">
                Drying cabinets give sites a controlled way to dry delicate, bulky and specialist items without standard tumble action.
            </p>
        </div>

        @include('components.financial-metrics', ['labelDrop' => true, 'items' => [
            ['icon'=>'169', 'prefix'=>'', 'stat'=>'Outstanding<br>flexibility',   'size'=>'text-2xl', 'label'=>'skiwear to silk', 'iconClass'=>'translate-y-[0.6%]',        'body'=>'Dry delicate garments, outdoor clothing, PPE, shoes, gloves and bulky items in one cabinet setup.'],
            ['icon'=>'191', 'prefix'=>'', 'stat'=>'Save<br>time',                'size'=>'text-2xl', 'label'=>'under 45 minutes', 'iconClass'=>'scale-[1.059]',       'body'=>'Dry a 6 kg cotton load in less than 45 minutes for faster item return to use.'],
            ['icon'=>'192', 'prefix'=>'', 'stat'=>'Save, money and<br>energy',   'size'=>'text-2xl', 'label'=>'auto-stop programmes', 'iconClass'=>'scale-[1.207] translate-y-[3.1%]',   'body'=>'Programmes stop when the load is dry, helping reduce wasted time and running cost.'],
            ['icon'=>'193', 'prefix'=>'', 'stat'=>'Gentle<br>textile care',      'size'=>'text-2xl', 'label'=>'no tumble action', 'iconClass'=>'scale-[1.271]',       'body'=>'Cabinet drying protects delicate fabrics, coatings, reflective strips and bulky items.'],
            ['icon'=>'194', 'prefix'=>'', 'stat'=>'User-friendly<br>operation',  'size'=>'text-2xl', 'label'=>'simple daily use', 'iconClass'=>'scale-[1.037]',       'body'=>'Clear controls and practical cabinet access support easier day-to-day drying.'],
        ]])
    </div>
</section>

{{-- 6b. WHERE DRYING CABINETS FIT --}}
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Where They Fit</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Useful where sites dry <span style="color:#148af4;">sensitive, bulky or specialist items</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed xl:whitespace-nowrap">
                Drying cabinets are useful where garments, PPE, workwear, shoes, gloves or delicate textiles need controlled drying without standard tumble action.
            </p>
        </div>

        @php
        $fitCards = [
            ['title' => 'Delicate fabrics and fine clothing',    'copy' => 'For garments that need gentle drying, shape protection and careful handling after washing or wear.', 'img' => '/images/pages/drying-cabinets/Delicate%20fabrics%20and%20fine%20clothing.png', 'pos' => 'center center'],
            ['title' => 'Private residences &amp; wardrobe rooms', 'copy' => 'For premium homes, dressing rooms or private garment care spaces where fine clothing needs controlled drying.', 'img' => '/images/pages/drying-cabinets/Private%20residences%20%26%20wardrobe%20rooms.png', 'pos' => 'center center'],
            ['title' => 'Multi-housing',                          'copy' => 'For shared laundry rooms where residents need practical drying for everyday garments, bulky items and outdoor clothing.', 'img' => '/images/pages/drying-cabinets/Multi-housing.png', 'pos' => 'center center'],
            ['title' => 'Construction &amp; workwear',            'copy' => 'For workwear, boots, gloves and outdoor clothing used in demanding working environments.', 'img' => '/images/pages/drying-cabinets/Construction%20%26%20workwear.png', 'pos' => 'center center'],
            ['title' => 'Firefighters &amp; PPE',                 'copy' => 'For protective clothing and specialist items that need controlled drying after use.', 'img' => '/images/pages/drying-cabinets/Firefighters%20%26%20PPE.png', 'pos' => 'center center'],
            ['title' => 'Schools &amp; childcare',                'copy' => 'For coats, uniforms, outdoor clothing and daily items that need to return to use quickly.', 'img' => '/images/shared/FacilityManagementandPublicSites.png', 'pos' => 'center center'],
        ];
        @endphp

        <div
            x-data="{
                active: 0,
                count: {{ count($fitCards) }},
                perView: 4,
                timer: null,
                get maxIndex() { return Math.max(0, this.count - this.perView); },
                next()  { this.active = this.active >= this.maxIndex ? 0 : this.active + 1; this.restart(); },
                prev()  { this.active = this.active <= 0 ? this.maxIndex : this.active - 1; this.restart(); },
                go(i)   { this.active = Math.min(i, this.maxIndex); this.restart(); },
                restart() { clearInterval(this.timer); this.timer = setInterval(() => this.next(), 6000); },
                init() {
                    const calc = () => { this.perView = window.innerWidth < 640 ? 1 : (window.innerWidth < 1024 ? 2 : 4); if (this.active > this.maxIndex) this.active = this.maxIndex; };
                    calc();
                    window.addEventListener('resize', calc);
                    this.timer = setInterval(() => this.next(), 6000);
                },
            }"
            class="relative reveal"
        >
            <div class="overflow-hidden">
                <div class="flex transition-transform duration-500 ease-out -mx-2.5"
                     :style="`transform: translateX(-${active * (100 / perView)}%)`">
                    @foreach($fitCards as $card)
                    <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/4 px-2.5">
                        <div class="group relative overflow-hidden rounded-2xl" style="height:320px;">
                            <img src="{{ $card['img'] }}" alt="{{ strip_tags($card['title']) }}"
                                 class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                 style="object-position: {{ $card['pos'] ?? 'center center' }};">
                            <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                                 style="background:linear-gradient(to top, rgba(1,30,65,0.95) 0%, rgba(1,30,65,0.45) 45%, rgba(1,30,65,0.05) 75%, transparent 100%);"></div>
                            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                 style="background:rgba(1,30,65,0.90);"></div>
                            <div class="absolute inset-0 p-7 flex flex-col justify-end z-10">
                                <p class="font-body text-white/80 text-sm leading-relaxed overflow-hidden max-h-0 opacity-0 group-hover:max-h-40 group-hover:opacity-100 transition-all duration-500 mb-0 group-hover:mb-4">{{ $card['copy'] }}</p>
                                <h3 class="font-heading font-bold text-white text-xl leading-snug">{!! $card['title'] !!}</h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Dots centered + arrows bottom-right --}}
            <div class="relative mt-8 flex items-center justify-center">
                <div class="flex items-center gap-2">
                    <template x-for="i in (maxIndex + 1)" :key="i">
                        <button @click="go(i - 1)"
                                :class="active === (i - 1) ? 'bg-navy w-2.5 h-2.5' : 'bg-navy/25 hover:bg-navy/50 w-2.5 h-2.5'"
                                class="rounded-full transition-all duration-300"></button>
                    </template>
                </div>
                <div class="absolute right-0 flex gap-2">
                    <button @click="prev()"
                            class="w-11 h-11 rounded-full bg-navy text-white hover:bg-navy/90 transition-colors flex items-center justify-center">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
                    </button>
                    <button @click="next()"
                            class="w-11 h-11 rounded-full bg-navy text-white hover:bg-navy/90 transition-colors flex items-center justify-center">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 7. RANGE OVERVIEW --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Drying Cabinet Options</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Choose the cabinet type around <span style="color:#148af4;">items, room fit and running cost</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Irish Laundry Systems supplies Electrolux Professional drying cabinets for different item types, room conditions and running cost priorities.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach([
                [
                    'name'       => 'Standard Drying Cabinets',
                    'img'        => '/images/pages/drying-cabinets/Standard%20Drying%20CabinetsDC6-8.jpg',
                    'copy'       => 'For sites that need controlled cabinet drying for garments, workwear, shoes, gloves and bulky items.',
                    'highlights' => ['Controlled drying', 'Multiple item types', 'Practical daily use', 'Range choice'],
                    'cta'        => 'Ask About Standard Drying Cabinets',
                ],
                [
                    'name'       => 'Heat Pump Drying Cabinets',
                    'copy'       => 'For sites focused on lower running costs where Heat Pump technology suits the room, item type and daily use.',
                    'highlights' => ['Save up to 40%', '0.33 kWh/kg', 'Auto-stop programmes', 'Energy-focused drying'],
                    'cta'        => 'Ask About Heat Pump Cabinets',
                ],
                [
                    'name'       => 'Glove and Boot Drying',
                    'img'        => '/images/pages/drying-cabinets/Drying%20Cabinets%20-%20Heat%20Pumpdc7-4hp.jpg',
                    'copy'       => 'For workwear-heavy sites, emergency services and outdoor working environments that need practical drying for boots, gloves and protective clothing.',
                    'highlights' => ['Gloves', 'Boots', 'PPE', 'Outdoor workwear'],
                    'cta'        => 'Ask About Workwear Drying',
                ],
            ] as $p)
            <div class="bg-white border border-gray-200 rounded-2xl p-6 lg:p-8 flex flex-col h-full">
                <div class="flex items-center justify-center h-40 mb-5">
                    <img src="{{ $p['img'] ?? '/images/pages/drying-cabinets/Drying-cabinets_image.webp' }}" alt="{{ $p['name'] }}" class="max-h-full w-auto object-contain">
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

        <p class="font-body text-gray-500 text-sm leading-relaxed mt-8 xl:whitespace-nowrap">
            Irish Laundry Systems will assess the room, ventilation, item type, daily drying demand and budget before recommending the right drying cabinet.
        </p>
    </div>
</section>

{{-- 8. COMPACT RESOURCES BAR (low, light, supporting — before the Product Finder) --}}
<section class="py-8 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 lg:gap-10">
            @foreach([
                ['title' => 'Official Resources',  'links' => [['l' => 'Drying Cabinets leaflet', 'h' => '/pdfs/EPR-Drying Cabinets Leaflet-20250710-EN.pdf'], ['l' => 'Line 6000 Washers & Dryers brochure', 'h' => '/pdfs/EPR_Line 6000 Washers and Dryers brochure-01072025_EN.pdf'], ['l' => 'Firefighters laundry brochure', 'h' => '/pdfs/EPR_brochure_firefighters_16042025_EN.pdf'], ['l' => 'Product resources', 'h' => route('resources')]]],
                ['title' => 'Chemicals & Dosing',  'links' => [['l' => 'Efficient Dosing', 'h' => route('equipment')], ['l' => 'Dosing Systems', 'h' => route('equipment')]]],
                ['title' => 'Related Equipment',   'links' => [['l' => 'Commercial Washers', 'h' => route('equipment.category', 'washers')], ['l' => 'Tumble Dryers', 'h' => route('equipment.category', 'tumble-dryers')], ['l' => 'Wet Cleaning', 'h' => route('equipment')]]],
            ] as $grp)
            <div class="{{ !$loop->last ? 'sm:border-r sm:border-gray-200 sm:pr-6 lg:pr-10' : '' }}">
                <p class="font-heading font-bold text-navy text-xs uppercase tracking-[0.16em] mb-3">{{ $grp['title'] }}</p>
                <div class="flex flex-wrap gap-x-4 gap-y-2">
                    @foreach($grp['links'] as $lk)
                    <a href="{{ $lk['h'] }}" class="inline-flex items-center gap-1.5 font-body text-sm text-gray-600 hover:text-[#148af4] transition-colors">
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

{{-- 9. PRODUCT FINDER / CABINET RANGE --}}
<section id="cabinet-range" class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Line 6000 Drying Cabinets</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Compare drying cabinet models around <span style="color:#148af4;">item type, room fit and energy use</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed xl:whitespace-nowrap">
                Start with what needs to dry, then compare cabinet type, capacity, room setup, ventilation, Heat Pump suitability and accessories.
            </p>
        </div>

        {{-- Drying cabinet families — one card/image per range, filterable by type and line (like the washers page) --}}
        @php
            // One card per model; same product across kg shares one image.
            $cabinetFamilies = [
                ['name' => 'DC6-4',    'cat' => 'Standard Drying Cabinets',    'slug' => 'dc6-4',  'type' => 'Standard',  'line' => ['Line 6000'], 'fit' => 'Standard drying cabinet for gentle hang-drying of garments and linen.',          'img' => '/images/pages/drying-cabinets/Standard%20Drying%20Cabinets.jpg'],
                ['name' => 'DC6-8',    'cat' => 'Standard Drying Cabinets',    'slug' => 'dc6-8',  'type' => 'Standard',  'line' => ['Line 6000'], 'fit' => 'Standard drying cabinet for gentle hang-drying of garments and linen.',          'img' => '/images/pages/drying-cabinets/Standard%20Drying%20CabinetsDC6-8.jpg'],
                ['name' => 'DC6-14',   'cat' => 'Standard Drying Cabinets',    'slug' => 'dc6-14', 'type' => 'Standard',  'line' => ['Line 6000'], 'fit' => 'Standard drying cabinet for gentle hang-drying of garments and linen.',          'img' => '/images/pages/drying-cabinets/Standard%20Drying%20CabinetsDC6-14.jpg'],
                ['name' => 'DC6-15WW', 'cat' => 'Standard Drying Cabinets',    'slug' => 'workwear-drying-cabinet',  'type' => 'Standard',  'line' => ['Line 6000'], 'fit' => 'Drying cabinet suited to workwear, PPE and heavier garments.',                    'img' => '/images/pages/drying-cabinets/Drying%20Cabinets%20-%20Heat%20PumpDC6-15WW.jpg'],
                ['name' => 'DC6-14HP', 'cat' => 'Drying Cabinets - Heat Pump', 'slug' => 'dc6-14hp','type' => 'Heat Pump', 'line' => ['Line 6000'], 'fit' => 'Heat pump drying cabinet that cuts drying energy while protecting fabrics.',      'img' => '/images/pages/drying-cabinets/Drying%20Cabinets%20-%20Heat%20Pumpdc6-14hp.jpg'],
                ['name' => 'DC7-4HP',  'cat' => 'Drying Cabinets - Heat Pump', 'slug' => 'dc7-4hp', 'type' => 'Heat Pump', 'line' => ['Line 7000'], 'fit' => 'Heat pump drying cabinet that cuts drying energy while protecting fabrics.',      'img' => '/images/pages/drying-cabinets/Drying%20Cabinets%20-%20Heat%20Pumpdc7-4hp.jpg'],
                ['name' => 'DC7-4HPh', 'cat' => 'Drying Cabinets - Heat Pump', 'slug' => 'dc7-4hph','type' => 'Heat Pump', 'line' => ['Line 7000'], 'fit' => 'Heat pump drying cabinet that cuts drying energy while protecting fabrics.',      'img' => '/images/pages/drying-cabinets/Drying%20Cabinets%20-%20Heat%20PumpDC7-4HPH.jpg'],
                ['name' => '1LZS03',   'cat' => 'Drying Cabinets - Heat Pump', 'slug' => '1lzs03',  'type' => 'Heat Pump', 'line' => ['Line 7000'], 'fit' => 'Heat pump drying cabinet that cuts drying energy while protecting fabrics.',      'img' => '/images/pages/drying-cabinets/Drying%20Cabinets%20-%20Heat%20Pump%201LZS03.jpg'],
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
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Accessories</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Adapt cabinet drying to <span style="color:#148af4;">the items your site handles</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Accessories help drying cabinets handle garments, shoes, gloves, boots and specialist workwear without forcing every item into the same drying method.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach([
                ['title' => 'Hanger sticks',          'copy' => 'For garments that need to hang properly while drying.', 'img' => '/images/pages/drying-cabinets/hangerSticks.webp'],
                ['title' => 'Shoe shelves',           'copy' => 'For shoes, boots and bulky footwear that should not dry loose.', 'img' => '/images/pages/drying-cabinets/Shoe%20shelves.webp'],
                ['title' => 'Glove hangers',          'copy' => 'For gloves, PPE and specialist workwear.', 'img' => '/images/pages/drying-cabinets/Glove%20hangers.webp'],
                ['title' => 'Glove and boot drying',  'copy' => 'For workwear, emergency services and outdoor teams drying gloves, boots and protective clothing.', 'img' => '/images/pages/drying-cabinets/Glove%20and%20boot%20drying.webp', 'imgClass' => 'scale-125'],
            ] as $card)
            <div class="flex flex-col h-full">
                <div class="h-40 flex items-center justify-center mb-4 overflow-hidden">
                    <img src="{{ $card['img'] }}" alt="{{ $card['title'] }}" class="max-h-full w-auto object-contain {{ $card['imgClass'] ?? '' }}">
                </div>
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
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:300px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/shared/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.85) 15%, rgba(20,138,244,0.3) 55%, transparent 100%);"></div>
    </div>
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-10 lg:py-14 w-full max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Room Planning</p>
        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
            Plan cabinet drying around <span style="color:#011E41;">item type, room fit and cabinet choice</span>
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6 max-w-xl">
            Irish Laundry Systems reviews what needs to dry, where the cabinet will sit and whether Standard or Heat Pump drying is the right fit for the room.
        </p>
        <div class="flex items-center flex-wrap gap-x-6 gap-y-3 mb-7">
            @foreach([
                ['icon' => '195', 'label' => 'Item type', 'iconClass' => 'h-20'],
                ['icon' => '56', 'label' => 'Room fit'],
                ['icon' => '196', 'label' => 'Cabinet choice'],
            ] as $pt)
            <span class="flex items-center gap-2 flex-shrink-0">
                <img src="/images/icons/{{ $pt['icon'] }}.png" alt="" aria-hidden="true" class="{{ $pt['iconClass'] ?? 'h-12' }} w-auto object-contain">
                <span class="font-body text-white text-sm font-bold leading-tight">{{ $pt['label'] }}</span>
            </span>
            @endforeach
        </div>
        <a href="{{ route('request-assessment') }}"
           class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
            Request Equipment Advice
        </a>
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
                    'title' => 'Repairs &amp; Call-outs',
                    'text'  => 'For drying cabinet faults, drying performance issues, control problems or service needs that require practical engineering support.',
                    'cta'   => 'Request a Repair',
                    'route' => route('repairs'),
                    'img'   => '/images/shared/repairs-callouts.jpg',
                    'pos'   => '50% 35%',
                ],
                [
                    'title' => 'Preventive Maintenance',
                    'text'  => 'Planned servicing to reduce avoidable disruption and keep cabinet condition on track.',
                    'cta'   => 'View Preventive Maintenance',
                    'route' => route('service-contracts'),
                    'img'   => '/images/shared/service-contracts-hero.png',
                    'pos'   => '90% 35%',
                ],
                [
                    'title' => 'Equipment Rental',
                    'text'  => 'For sites considering lower upfront cost where rental is suitable for the selected equipment and site needs.',
                    'cta'   => 'See Rental Options',
                    'route' => route('rental'),
                    'img'   => '/images/shared/td6-11-multihousing-room-front.jpg',
                    'pos'   => '66% center',
                ],
                [
                    'title' => 'Support &amp; Aftercare',
                    'text'  => 'For follow-up, service history, parts support where needed and clearer repair or replacement decisions.',
                    'cta'   => 'Explore Support &amp; Aftercare',
                    'route' => route('parts-aftercare'),
                    'img'   => '/images/shared/services-overview-hero-portrait.jpg',
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

{{-- 13. TESTIMONIAL MODULE --}}
@include('components.testimonials', [
    'eyebrow'    => 'Customer Trust',
    'heading'    => 'Trusted support behind<br class="hidden lg:block"> <span style="color:#148af4;">specialist drying decisions</span>',
    'subheading' => 'Drying cabinets affect item care, daily routines, running costs and return to use. Irish Laundry Systems supports sites that value clear communication, responsive service and peace of mind after installation.',
])

{{-- 14. TRUSTED BY LOGO STRIP --}}
@include('components.proof-bar')

{{-- 15 / 15c. Resources + Related Equipment moved up into the COMPACT RESOURCES BAR (§8, before the Product Finder) — matches other equipment pages --}}

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
