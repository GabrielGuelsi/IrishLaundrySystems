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
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Commercial Drying Cabinets</p>
                <h1 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight mb-6">
                    <span style="color:#148af4;">Fast, efficient drying</span><br class="hidden lg:block"> for bulky and sensitive items
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    Commercial drying cabinets give sites a controlled way to dry garments, workwear, PPE, shoes, gloves, outdoor clothing and delicate items that should not be tumble dried. Irish Laundry Systems supplies, installs and supports drying cabinet options for businesses that need faster drying, lower running cost pressure and better garment care.
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
                    Not every item belongs in a tumble dryer. Delicate fabrics, waterproof clothing, workwear, protective garments, shoes, helmets and gloves can need a gentler drying method that protects shape, finish and functional details.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    Drying cabinets help reduce open drying space, shorten drying delays and give staff a better way to handle items that are awkward, sensitive or unsuitable for tumble drying.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Irish Laundry Systems will review the room, ventilation, item type, daily drying demand and budget before recommending the right drying cabinet option.
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
                The strongest proof should be <span style="color:#148af4;">visible at first glance</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                For drying cabinets, the commercial case is clear: lower running cost pressure, visible energy use per kilo, fast drying times and one cabinet for many specialist items.
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
                Drying cabinets that show the<br class="hidden lg:block"> <span style="color:#148af4;">saving, speed and operating value</span> clearly
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                A drying cabinet decision is about more than adding another machine. It can reduce pressure on open drying space, protect items that need gentle handling, and support faster return to use for garments, uniforms and specialist items.
            </p>
        </div>

        @include('components.financial-metrics', ['items' => [
            ['icon'=>'30', 'prefix'=>'Save up to', 'stat'=>'40%',          'size'=>'text-4xl', 'label'=>'lower running costs',       'body'=>'Heat Pump technology and auto-stop programmes can reduce drying cabinet running costs by up to 40%.'],
            ['icon'=>'6',  'prefix'=>'',           'stat'=>'0.33 kWh/kg',  'size'=>'text-2xl', 'label'=>'lower energy per kilo',     'body'=>'Uses just 0.33 kWh of energy per kg of laundry, making the energy story easy to understand.'],
            ['icon'=>'34', 'prefix'=>'Under',      'stat'=>'45 min',       'size'=>'text-4xl', 'label'=>'faster return to use',      'body'=>'Dry a 6 kg cotton load in less than 45 minutes, helping garments and workwear return to use faster.'],
            ['icon'=>'4',  'prefix'=>'',           'stat'=>'Auto-stop',    'size'=>'text-2xl', 'label'=>'less wasted running time',  'body'=>'Programmes stop when the load is dry, helping keep cycle time and running costs under control.'],
            ['icon'=>'35', 'prefix'=>'',           'stat'=>'One<br>unit',  'size'=>'text-2xl', 'label'=>'more drying needs covered', 'body'=>'Dry anything from skiwear to silk, plus PPE, workwear, shoes, gloves and bulky items without relying on open drying.'],
        ]])
    </div>
</section>

{{-- 6. TECHNICAL PROOF --}}
<section class="py-12 lg:py-16 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Technical Proof</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                The technology behind<br class="hidden lg:block"> <span style="color:#148af4;">lower running cost</span> and <span style="color:#148af4;">better garment care</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Selected Electrolux Professional drying cabinet features support easier use, controlled drying and better care for items that need a different drying method.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
            @foreach([
                ['icon' => '26', 'stat' => 'Heat Pump',            'title' => 'Energy-saving drying technology', 'copy' => 'Heat Pump models provide the technical base behind the running cost saving claim.'],
                ['icon' => '21', 'stat' => 'Auto-stop programmes', 'title' => 'Stops when the load is dry',      'copy' => 'Automatic programmes stop drying when the desired moisture level is reached.'],
                ['icon' => '7',  'stat' => 'Non-mechanical drying','title' => 'Gentle fabric protection',        'copy' => 'Drying without tumbling helps protect delicate fabrics, outdoor clothing, workwear and bulky items.'],
                ['icon' => '20', 'stat' => 'PPE accessories',      'title' => 'Built around real item types',    'copy' => 'Hanger sticks, shoe shelves, glove hangers and glove or boot drying options support practical daily use.'],
                ['icon' => '30', 'stat' => 'Standard + Heat Pump', 'title' => 'Category range choice',           'copy' => 'Standard drying cabinets and Heat Pump drying cabinets give sites different options depending on room, item type and running cost priorities.'],
            ] as $card)
            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/{{ $card['icon'] }}.png" alt="" class="w-28 h-28 object-contain">
                </div>
                <div>
                    <div class="font-heading font-bold text-[#148af4] text-xl leading-tight mb-1.5">{{ $card['stat'] }}</div>
                    <h3 class="font-heading font-bold text-navy text-sm leading-snug mb-1.5">{{ $card['title'] }}</h3>
                    <p class="font-body text-gray-500 text-xs leading-relaxed">{{ $card['copy'] }}</p>
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
                Drying cabinets are especially useful where sites need to dry items that are too delicate, too bulky or too specialist for standard tumble drying.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach([
                ['title' => 'Multi-housing and shared laundry',         'copy' => 'For apartment laundry rooms and shared facilities where users need fast, efficient drying without leaving wet items around the space.'],
                ['title' => 'On-premises laundries',                    'copy' => 'For hotels, guesthouses, leisure sites and laundries handling garments, uniforms, robes, outdoor clothing or delicate items.'],
                ['title' => 'Schools, childcare and sports sites',      'copy' => 'For jackets, outdoor clothing, shoes, sportswear and wet items that need to dry between uses.'],
                ['title' => 'Firefighters, PPE and workwear',           'copy' => 'For protective garments, boots, gloves, helmets, waterproof clothing and high-visibility workwear where controlled drying matters.'],
                ['title' => 'Delicate garment and textile care',        'copy' => 'For silk, wool, velvet, linen, long dresses, curtains and specialist garments that can be damaged by mechanical drying action.'],
            ] as $card)
            <div class="bg-bg border border-gray-100 rounded-2xl p-7 flex flex-col h-full">
                <div class="w-10 h-1 rounded-full bg-[#148af4] mb-4"></div>
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $card['copy'] }}</p>
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
                Standard and Heat Pump drying cabinets for <span style="color:#148af4;">different site needs</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Irish Laundry Systems supplies and supports drying cabinet options from Electrolux Professional&rsquo;s Line 6000 range. The range includes Standard Drying Cabinets and Heat Pump Drying Cabinets, with different formats for different item types, room conditions and running cost priorities.
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
                Drying cabinet options for <span style="color:#148af4;">different site needs</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Electrolux Professional Line 6000 Drying Cabinets include vented and Heat Pump options across selected models. Irish Laundry Systems can advise on the cabinet type, size, ventilation requirements, accessories and support needed for the site.
            </p>
        </div>

        {{-- Drying cabinet families — one card/image per range, filterable by type and line (like the washers page) --}}
        @php
            $cabinetFamilies = [
                ['name' => 'Standard Drying Cabinets', 'slug' => 'standard-drying-cabinets', 'fit' => 'Gentle hang-drying cabinets for garments and linen across the standard range.', 'line' => ['Line 6000'], 'capLabel' => 'Standard', 'models' => 'DC6-4, DC6-8, DC6-14', 'type' => 'Standard', 'img' => '/images/healthcare/Drying-cabinets_image.webp'],
                ['name' => 'Heat Pump Drying Cabinets', 'slug' => 'heat-pump-drying-cabinets', 'fit' => 'Energy-saving heat pump drying cabinets that cut drying energy while protecting fabrics.', 'line' => ['Line 6000','Line 7000'], 'capLabel' => 'Heat Pump', 'models' => 'DC6-4HP, DC6-8HP, DC6-10HP, DC6-14HP, DC7-4HP', 'type' => 'Heat Pump', 'img' => '/images/healthcare/Drying-cabinets_image.webp'],
                ['name' => 'Workwear Drying Cabinet', 'slug' => 'workwear-drying-cabinet', 'fit' => 'Specialist cabinet for drying workwear, PPE and heavier garments.', 'line' => ['Line 6000'], 'capLabel' => 'Workwear', 'models' => 'DC6-15WW', 'type' => 'Workwear', 'img' => '/images/healthcare/Drying-cabinets_image.webp'],
            ];
        @endphp

        @php
            // derive facet option arrays with counts from the family data (no new copy)
            $typeOpts = []; $lineOpts = [];
            foreach($cabinetFamilies as $cf) {
                $typeOpts[$cf['type']] = ($typeOpts[$cf['type']] ?? 0) + 1;
                foreach($cf['line'] as $ln) { $lineOpts[$ln] = ($lineOpts[$ln] ?? 0) + 1; }
            }
            $typeOrder = ['Standard','Heat Pump','Workwear'];
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
                    <span class="font-body text-sm text-navy font-bold"><span x-text="count"></span> <span x-text="count === 1 ? 'range' : 'ranges'"></span></span>
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
                        <p class="font-body text-xs mb-1.5"><span class="font-bold text-[#148af4]">{{ $f['type'] }}</span><span class="text-gray-400"> &middot; {{ $f['capLabel'] }}</span></p>
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
            Not sure which model fits? Irish Laundry Systems can assess capacity, the items being dried, room setup, rental, installation and support options before a final recommendation.
        </p>
    </div>
</section>

{{-- 9b. ACCESSORIES --}}
<section class="py-12 lg:py-16 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Accessories</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Make cabinet drying <span style="color:#148af4;">fit the items</span> your site handles
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
                ['title' => 'Glove and boot dryer',   'copy' => 'For sites with regular boot, glove or protective workwear drying needs.'],
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

{{-- 10. SUPPORT OPTIONS --}}
<section class="py-16 lg:py-20 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Support Options</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Support options for <span style="color:#148af4;">drying cabinets</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                The right equipment choice should be backed by clear support. Irish Laundry Systems supports drying cabinet sites with repairs, preventive maintenance, rental options and aftercare around the way the cabinet is used every day.
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
                    'text'  => 'For sites that want planned support to reduce avoidable disruption and keep drying equipment easier to manage over time.',
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
    'headingLine1' => 'Keep laundry moving with',
    'headingLine2' => '<span style="color:#148af4;">lower upfront cost</span>',
    'body'         => 'For sites facing cabinet replacement, capacity needs or ageing equipment, rental can keep the laundry room moving without turning every equipment decision into one large capital purchase.',
    'miniPoints'   => ['Lower upfront cost', 'Installation and support available', 'Service and breakdown support included under rental terms'],
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
    'subheading' => 'Commercial drying cabinet decisions affect cost, workflow, staff routines and daily output. Irish Laundry Systems is trusted by organisations that need clear communication, responsive support and equipment knowledge after the machine is on site.',
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
                    'title' => 'Need advice before choosing?',
                    'copy'  => 'Irish Laundry Systems will review the site, drying demand, item type, room conditions and budget before recommending a cabinet.',
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
                ['title' => 'Commercial Washing Machines', 'copy' => 'For daily washing of workwear, towels, uniforms, bedding and mixed textiles.', 'cta' => 'View Washing Machine Options', 'route' => route('equipment.category', ['category' => 'washers'])],
                ['title' => 'Commercial Tumble Dryers',    'copy' => 'For general drying demand where tumble drying is suitable for the load.', 'cta' => 'View Dryer Options', 'route' => route('equipment.category', ['category' => 'tumble-dryers'])],
                ['title' => 'Dosing Systems',     'copy' => 'For detergent control, lower waste and more consistent wash results.', 'cta' => 'Ask About Dosing Systems', 'route' => route('contact')],
                ['title' => 'Wet Cleaning',       'copy' => 'For specialist textile care where delicate garments, leathers or shoes need a different cleaning process.', 'cta' => 'Explore Wet Cleaning', 'route' => route('contact')],
            ] as $card)
            <div class="bg-bg border border-gray-100 rounded-2xl p-7 flex flex-col h-full">
                <div class="w-10 h-1 rounded-full bg-[#148af4] mb-4"></div>
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-5">{{ $card['copy'] }}</p>
                <a href="{{ $card['route'] }}" class="mt-auto inline-flex items-center gap-2 font-body font-bold text-[#148af4] hover:underline text-sm">
                    {{ $card['cta'] }}
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
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
        ['question' => 'Are Heat Pump drying cabinets available?', 'answer' => 'Yes. Heat Pump Drying Cabinets are part of the Electrolux Professional range. Irish Laundry Systems will review whether a Heat Pump model is suitable for the room, ventilation and daily drying demand.'],
        ['question' => 'What accessories are available?', 'answer' => 'Accessory options include hanger sticks, shoe shelves, glove hangers and glove or boot drying options for sites handling workwear, protective clothing or specialist items.'],
        ['question' => 'Can Irish Laundry Systems help with supply and installation?', 'answer' => 'Yes. Irish Laundry Systems supports drying cabinet selection, equipment quote, supply, installation, rental discussion, preventive maintenance, repairs and aftercare.'],
    ],
])

{{-- 16. FINAL CTA --}}
@include('components.cta-downtime-form', [
    'pageSource'        => 'drying_cabinets_cta',
    'eyebrow'           => 'Request Equipment Advice',
    'heading'           => 'Ready to choose the <span style="color:#148af4;">right drying cabinet</span> for your site',
    'body'              => 'Tell us what you need to dry, how often the cabinet will be used, what energy priorities you have and what room conditions you are working with. Irish Laundry Systems will guide you toward the right drying cabinet advice, equipment quote, rental, preventive maintenance, repair or aftercare support.',
    'formTitle'         => 'Request Drying Cabinet Advice',
    'buttonText'        => 'Request Drying Cabinet Advice',
    'showLocationField' => true,
    'equipmentLabel'    => 'Current laundry setup',
    'messageLabel'      => 'What do you need to dry?',
    'requestTypeLabel'  => 'Are you looking at equipment purchase, rental, repair or maintenance?',
])

@endsection
