@extends('layouts.app')

@section('pageTitle', 'Commercial Drying Cabinets | Electrolux Professional | Irish Laundry Systems')

@section('meta')
<meta name="description" content="Commercial drying cabinets selected around gentle drying, capacity and long-term support. Irish Laundry Systems supplies, installs and supports Electrolux Professional drying cabinets for garments, mops and PPE across Ireland.">
@endsection

@section('content')

{{-- 2. HERO --}}
<section class="relative overflow-hidden flex flex-col min-h-[520px] lg:h-[720px]" style="min-height:520px;">
    <img src="/images/pages/drying-cabinets/drying-cabinets-hero.jpg" alt="Commercial drying cabinets"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.75) 42%, rgba(1,30,65,0.35) 65%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-24 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-3xl">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Drying Cabinets</p>
                <h1 class="font-heading font-bold text-white text-2xl sm:text-4xl lg:text-5xl leading-tight mb-6 text-balance">
                    <span class="sm:block">Protect specialist garments and</span>
                    <span class="sm:block">gear with <span style="color:#148af4;">gentle cabinet drying</span></span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-3xl">
                    <span class="lg:block">For PPE, workwear, footwear and delicate items where tumble drying is unsuitable,</span>
                    <span class="lg:block">Irish Laundry Systems supplies and installs Electrolux Professional drying cabinets across Ireland.</span>
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Drying Cabinet Advice
                    </a>
                    <a href="#cabinet-range"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white hover:border-white/70 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        View Drying Cabinets
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 3. UNIVERSAL THIN ELECTROLUX TRUST STRIP --}}
@include('components.partner-strip')

{{-- 4. INTRO / BRIDGE --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Equipment Selection</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-8 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-[2rem] 2xl:text-[2.4rem] leading-tight">
                    <span class="sm:block">Choose drying cabinets around</span>
                    <span class="sm:block" style="color:#148af4;">the items you handle</span>
                    <span class="sm:block" style="color:#148af4;">and daily drying demand</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed">
                    <span class="lg:block">Specialist garments and equipment can place different demands</span>
                    <span class="lg:block">on how drying is managed throughout the day.</span>
                    <span class="lg:block">The right cabinet choice starts with what needs to be dried,</span>
                    <span class="lg:block">how much is handled and how often it is used.</span>
                </p>
            </div>

        </div>
    </div>
</section>

{{-- 4b. DRYING CABINET PERFORMANCE (combined financial + technical) --}}
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Drying Cabinet Technology</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-3">
                Drying cabinet technology for <span style="color:#148af4;">easier specialist drying</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                See how Electrolux Professional features support the practical demands of specialist drying applications.
            </p>
        </div>

        @include('components.financial-metrics', ['labelDrop' => true, 'items' => [
            ['icon'=>'169', 'prefix'=>'', 'stat'=>'Flexible<br>Loading',   'size'=>'text-2xl', 'label'=>'Mixed Items', 'iconClass'=>'translate-y-[0.6%]',        'body'=>'Dry garments, PPE, footwear, gloves and bulky items together within one practical cabinet setup.'],
            ['icon'=>'191', 'prefix'=>'', 'stat'=>'Faster<br>Drying',     'size'=>'text-2xl', 'label'=>'45 Minutes', 'iconClass'=>'scale-[1.059]',       'body'=>'Dry a 6 kg cotton load in under 45 minutes, helping items return to use sooner.'],
            ['icon'=>'192', 'prefix'=>'', 'stat'=>'Energy<br>Savings',    'size'=>'text-2xl', 'label'=>'Dryness Control', 'iconClass'=>'scale-[1.207] translate-y-[3.1%]',   'body'=>'Programmes stop when the load is dry, reducing unnecessary drying time and energy use.'],
            ['icon'=>'193', 'prefix'=>'', 'stat'=>'Gentle<br>Drying',     'size'=>'text-2xl', 'label'=>'No Tumbling', 'iconClass'=>'scale-[1.271]',       'body'=>'Protect delicate fabrics, coatings, reflective strips and specialist items without tumble action.'],
            ['icon'=>'194', 'prefix'=>'', 'stat'=>'Simple<br>Controls',   'size'=>'text-2xl', 'label'=>'Daily Operation', 'iconClass'=>'scale-[1.037]',       'body'=>'Clear controls and practical cabinet access make everyday loading and programme selection easier.'],
        ]])
    </div>
</section>

{{-- 6b. WHERE DRYING CABINETS FIT --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Where They Fit</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-3">
                Drying cabinets for <span style="color:#148af4;">specialist laundry needs</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Explore common applications to see how cabinet drying is used across different garments, gear and laundry environments.
            </p>
        </div>

        @php
        $fitCards = [
            ['title' => 'Delicate Garments',        'copy' => 'For silk, wool, velvet and other items that need drying without mechanical action.', 'img' => '/images/pages/drying-cabinets/Delicate%20fabrics%20and%20fine%20clothing.png', 'pos' => 'center 50%',   'sc' => '1.47'],
            ['title' => 'Hotels &amp; Laundries',   'copy' => 'For hotels and professional laundries handling delicate, bulky or specialist garments that need cabinet drying.', 'img' => '/images/pages/drying-cabinets/Private%20residences%20%26%20wardrobe%20rooms.png', 'pos' => '46% 48%',    'sc' => '1.58'],
            ['title' => 'Multi-Housing',            'copy' => 'For apartment buildings, student homes and shared laundries handling everyday garments and bulky items.', 'img' => '/images/pages/drying-cabinets/Multi-housing.png', 'pos' => 'center 50%',   'sc' => '1.53'],
            ['title' => 'Construction &amp; Workwear', 'copy' => 'For workwear, overalls, boots and gloves used across construction and outdoor working environments.', 'img' => '/images/pages/drying-cabinets/Construction%20%26%20workwear.png', 'pos' => '48% 50%',    'sc' => '1.46'],
            ['title' => 'Firefighters &amp; PPE',   'copy' => 'For protective clothing, gloves, boots and specialist PPE that needs controlled drying after cleaning.', 'img' => '/images/pages/drying-cabinets/Firefighters%20%26%20PPE.png', 'pos' => '46% 50%',    'sc' => '1.48'],
            ['title' => 'Schools &amp; Childcare',  'copy' => 'For coats, outdoor clothing, gloves and everyday items used across schools and childcare settings.', 'img' => '/images/pages/drying-cabinets/schools-childcare.webp', 'pos' => 'center center'],
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
                                 class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 {{ empty($card['sc']) ? 'group-hover:scale-105' : '' }}"
                                 style="object-position: {{ $card['pos'] ?? 'center center' }};@if(!empty($card['sc'])) transform: scale({{ $card['sc'] }});@endif">
                            <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                                 style="background:linear-gradient(to top, rgba(1,30,65,0.75) 0%, rgba(1,30,65,0.28) 45%, rgba(1,30,65,0.02) 75%, transparent 100%);"></div>
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
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Drying Cabinet Options</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-3 min-[1350px]:whitespace-nowrap">
                Compare drying cabinet types for <span style="color:#148af4;">different drying needs</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Consider the items, available space and running-cost priorities before selecting equipment.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach([
                [
                    'name'       => 'Standard Drying Cabinets',
                    'img'        => '/images/pages/drying-cabinets/standard-dc6-14.jpg',
                    'copy'       => 'For garments, workwear, gloves, boots and bulky items that need drying without mechanical action.',
                    'highlights' => ['No Mechanical Action', 'Multiple Item Types', 'Automatic Programmes', 'Flexible Loading'],
                    'cta'        => 'Explore Standard Drying Cabinets',
                ],
                [
                    'name'       => 'Heat Pump Drying Cabinets',
                    'img'        => '/images/pages/drying-cabinets/heatpump-dc7-10hp.jpg',
                    'copy'       => 'For sites prioritising lower running costs through heat pump technology and automatic programmes that stop when the load is dry.',
                    'highlights' => ['Up to 40% Lower Running Costs', '0.33 kWh/kg', 'Auto-Stop Programmes', 'Heat Pump Technology'],
                    'cta'        => 'Explore Heat Pump Drying Cabinets',
                ],
                [
                    'name'       => 'Workwear & PPE Drying',
                    'img'        => '/images/pages/drying-cabinets/workwear-dc6-15ww.jpg',
                    'copy'       => 'For protective clothing, workwear, boots and gloves used in construction, firefighting and outdoor working environments.',
                    'highlights' => ['Workwear', 'PPE', 'Boots', 'Gloves'],
                    'cta'        => 'Explore Workwear Drying',
                ],
            ] as $p)
            <div class="bg-white border border-gray-200 rounded-2xl p-6 lg:p-8 flex flex-col h-full">
                <div class="flex items-center justify-center h-56 mb-5">
                    <img src="{{ $p['img'] ?? '/images/pages/drying-cabinets/Drying-cabinets_image.webp' }}" alt="{{ $p['name'] }}" class="max-h-full w-auto object-contain">
                </div>
                <h3 class="font-heading font-bold text-navy text-xl leading-tight mb-3">{{ $p['name'] }}</h3>
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
    </div>
</section>

{{-- 9. PRODUCT FINDER / CABINET RANGE --}}
<section id="cabinet-range" class="py-20 lg:py-32 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Drying Cabinet Range</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Browse standard and heat pump <span style="color:#148af4;">drying cabinet models</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Filter by cabinet type, then open each model for full product details.
            </p>
        </div>

        {{-- Drying cabinet families — one card/image per range, filterable by type and line (like the washers page) --}}
        @php
            // One card per model; same product across kg shares one image.
            $cabinetFamilies = [
                ['name' => 'DC6-4',    'cat' => 'Standard Drying Cabinets',    'slug' => 'dc6-4',   'type' => 'Standard',  'fit' => 'Single-door drying cabinet, 600 mm wide.',  'img' => '/images/pages/drying-cabinets/Standard%20Drying%20Cabinets.jpg'],
                ['name' => 'DC6-8',    'cat' => 'Standard Drying Cabinets',    'slug' => 'dc6-8',   'type' => 'Standard',  'fit' => 'Two-door drying cabinet, 1200 mm wide.',    'img' => '/images/pages/drying-cabinets/Standard%20Drying%20CabinetsDC6-8.jpg'],
                ['name' => 'DC6-14',   'cat' => 'Standard Drying Cabinets',    'slug' => 'dc6-14',  'type' => 'Standard',  'fit' => 'Two-door drying cabinet, 1800 mm wide.',    'img' => '/images/pages/drying-cabinets/standard-dc6-14.jpg'],
                ['name' => 'DC6-15WW', 'cat' => 'Standard Drying Cabinets',    'slug' => 'workwear-drying-cabinet',  'type' => 'Standard',  'fit' => 'Drying cabinet for workwear, work suits, shoes, gloves and flat drying.', 'img' => '/images/pages/drying-cabinets/workwear-dc6-15ww.jpg'],
                ['name' => 'DC7-4HP',  'cat' => 'Drying Cabinets – Heat Pump', 'slug' => 'dc7-4hp', 'type' => 'Heat Pump', 'fit' => 'Single-door heat pump drying cabinet, 600 mm wide.', 'img' => '/images/pages/drying-cabinets/Drying%20Cabinets%20-%20Heat%20Pumpdc7-4hp.jpg'],
                ['name' => 'DC7-4HPh', 'cat' => 'Drying Cabinets – Heat Pump', 'slug' => 'dc7-4hph','type' => 'Heat Pump', 'fit' => 'Single-door heat pump drying cabinet, 600 mm wide, with condensate tank.', 'img' => '/images/pages/drying-cabinets/Drying%20Cabinets%20-%20Heat%20PumpDC7-4HPH.jpg'],
                ['name' => 'DC7-8HP',  'cat' => 'Drying Cabinets – Heat Pump', 'slug' => 'dc7-8hp', 'type' => 'Heat Pump', 'fit' => 'Two-door heat pump drying cabinet, 1200 mm wide.', 'img' => '/images/pages/drying-cabinets/heatpump-dc7-10hp.jpg'],
                ['name' => 'DC7-10HP', 'cat' => 'Drying Cabinets – Heat Pump', 'slug' => 'dc7-10hp','type' => 'Heat Pump', 'fit' => 'Two-door heat pump drying cabinet, 1395 mm wide.', 'img' => '/images/pages/drying-cabinets/heatpump-dc7-10hp.jpg'],
                ['name' => 'DC6-14HP', 'cat' => 'Drying Cabinets – Heat Pump', 'slug' => 'dc6-14hp','type' => 'Heat Pump', 'fit' => 'Two-door heat pump drying cabinet, 1800 mm wide.', 'img' => '/images/pages/drying-cabinets/Drying%20Cabinets%20-%20Heat%20Pumpdc6-14hp.jpg'],
            ];
        @endphp

        @php
            // derive facet option arrays with counts from the family data (no new copy)
            $typeOpts = [];
            foreach($cabinetFamilies as $cf) {
                $typeOpts[$cf['type']] = ($typeOpts[$cf['type']] ?? 0) + 1;
            }
            $typeOrder = ['Standard','Heat Pump'];
            $famJs = array_map(fn($cf) => ['type' => $cf['type']], $cabinetFamilies);
        @endphp

        <div x-data="{
                type: [],
                families: {{ \Illuminate\Support\Js::from($famJs) }},
                matches(f) {
                    return this.type.length === 0 || this.type.includes(f.type);
                },
                get count() { return this.families.filter(f => this.matches(f)).length; },
                clearAll() { this.type = []; },
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
                    <div x-show="matches({{ \Illuminate\Support\Js::from(['type'=>$f['type']]) }})" class="flex flex-col">
                        <a href="{{ route('equipment.product', ['category' => 'drying-cabinets', 'product' => $f['slug']]) }}" class="flex items-center justify-center h-44 lg:h-48 mb-5">
                            <img src="{{ $f['img'] }}" alt="{{ $f['name'] }}" class="max-h-full w-auto object-contain transition-transform duration-300 hover:-translate-y-1.5">
                        </a>
                        <p class="font-body text-xs mb-1.5"><span class="font-bold text-[#148af4]">{{ $f['cat'] }}</span></p>
                        <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2"><a href="{{ route('equipment.product', ['category' => 'drying-cabinets', 'product' => $f['slug']]) }}" class="hover:text-[#148af4] transition-colors">{{ $f['name'] }}</a></h3>
                        <p class="font-body text-gray-500 text-sm leading-relaxed mb-5">{{ $f['fit'] }}</p>
                        <div class="mt-auto flex flex-col gap-2.5">
                            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/></svg>
                                Request Advice
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

            </div>
        </div>
    </div>
</section>

{{-- 9b. ACCESSORIES --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Accessories</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-3">
                <span class="sm:block">Configure cabinet drying for</span>
                <span class="sm:block" style="color:#148af4;">garments, footwear</span>
                <span class="sm:block" style="color:#148af4;">and gloves</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                <span class="lg:block">Choose accessories for the articles each</span>
                <span class="lg:block">drying cabinet needs to accommodate.</span>
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 max-w-4xl mx-auto">
            @foreach([
                ['title' => 'Hanging Bars',   'copy' => 'For garments that need to remain properly suspended throughout drying.', 'img' => '/images/pages/drying-cabinets/hangerSticks.webp'],
                ['title' => 'Shoe Racks',     'copy' => 'For shoes and boots that need stable placement inside the cabinet.', 'img' => '/images/pages/drying-cabinets/Shoe%20shelves.webp'],
                ['title' => 'Glove Hangers',  'copy' => 'For gloves, hats and smaller PPE items that need open spacing while drying.', 'img' => '/images/pages/drying-cabinets/Glove%20hangers.webp'],
            ] as $card)
            <div class="flex flex-col h-full items-center text-center">
                <div class="h-40 flex items-center justify-center mb-4 overflow-hidden">
                    <img src="{{ $card['img'] }}" alt="{{ $card['title'] }}" class="max-h-full w-auto object-contain {{ $card['imgClass'] ?? '' }}">
                </div>
                <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-2">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed max-w-[260px]">{{ $card['copy'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                Ask About Accessories
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- RESOURCES BAR (slim inline) — after Accessories --}}
@include('components.resources-bar', ['groups' => [
    ['title' => 'Official Resources',  'links' => [['l' => 'Drying Cabinets leaflet', 'h' => '/pdfs/EPR-Drying Cabinets Leaflet-20250710-EN.pdf'], ['l' => 'Line 6000 Washers & Dryers brochure', 'h' => '/pdfs/EPR_Line 6000 Washers and Dryers brochure-01072025_EN.pdf'], ['l' => 'Firefighters laundry brochure', 'h' => '/pdfs/EPR_brochure_firefighters_16042025_EN.pdf'], ['l' => 'Product resources', 'h' => route('resources')]]],
    ['title' => 'Chemicals & Dosing',  'links' => [['l' => 'Efficient Dosing', 'h' => route('equipment')], ['l' => 'Dosing Systems', 'h' => route('equipment')]]],
    ['title' => 'Related Equipment',   'links' => [['l' => 'Commercial Washers', 'h' => route('equipment.category', 'commercial-washers')], ['l' => 'Tumble Dryers', 'h' => route('equipment.category', 'tumble-dryers')], ['l' => 'Wet Cleaning', 'h' => route('equipment')]]],
]])

{{-- White breathing space around the resources bar and the room-planning strip --}}
<div class="h-16 lg:h-28 bg-white"></div>

{{-- 9c. PLANNING / ROOM FIT STRIP --}}
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:300px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/shared/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.85) 15%, rgba(20,138,244,0.3) 55%, transparent 100%);"></div>
    </div>
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-10 lg:py-14 w-full max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Room Planning</p>
        <h2 class="font-heading font-bold text-white text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
            Plan the right cabinet setup for <br class="hidden sm:block"><span style="color:#011E41;">your space and daily use</span>
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6 max-w-xl">
            ILS checks access, ventilation, available space and drying demand before recommending the cabinet and installation approach.
        </p>
        <div class="flex items-center flex-wrap gap-x-4 gap-y-3 mb-7">
            @foreach([
                ['icon' => '195', 'label' => 'Item type', 'sc' => 'scale-[1.324] translate-y-[2.1%]'],
                ['icon' => '56', 'label' => 'Room fit', 'sc' => 'scale-[1.054] translate-y-[1.7%]'],
                ['icon' => '196', 'label' => 'Cabinet choice', 'sc' => 'scale-[0.991]'],
            ] as $pt)
            <span class="flex items-center gap-2 flex-shrink-0">
                <img src="/images/icons/{{ $pt['icon'] }}.png" alt="" aria-hidden="true" class="h-14 w-auto object-contain {{ $pt['sc'] ?? '' }}" style="filter:brightness(0) invert(1);">
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
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Service Options</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-[2.6rem] 2xl:text-5xl leading-tight mb-3">
                Keep drying cabinets <span style="color:#148af4;">supported beyond installation</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Choose the service option that best fits your equipment, site and current support needs.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                [
                    'title' => 'Repairs &amp; Call-Outs',
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
                    'img'   => '/images/pages/drying-cabinets/equipmentrentalcards.png',
                    'pos'   => '40% center',
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

{{-- 13. TESTIMONIAL MODULE --}}
@include('components.testimonials', [
    'eyebrow'    => 'Client Feedback',
    'heading'    => 'What clients say about <span style="color:#148af4;">Irish Laundry Systems</span>',
    'subheading' => 'Feedback from clients on service, technical knowledge and long-term support.',
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
<div id="drying-cabinet-form"></div>
@include('components.cta-downtime-form', [
    'pageSource'        => 'drying_cabinets_cta',
    'eyebrow'           => 'Request Drying Cabinet Advice',
    'headingSize'       => 'text-2xl sm:text-4xl lg:text-[2.625rem]',
    'heading'           => 'Discuss your drying cabinet<br> requirements with <span style="color:#148af4;">our<br> engineering team</span>',
    'body'              => 'Tell us what you need from the equipment and your site.<br class="hidden lg:block"> We’ll review the requirements and contact you directly.',
    'formTitle'         => 'Request Drying Cabinet Advice',
    'buttonText'        => 'Request Drying Cabinet Advice',
    'showLocationField' => true,
    'equipmentLabel'    => 'Current laundry setup',
    'messageLabel'      => 'What do you need to dry?',
    'requestTypeLabel'  => 'Are you looking at equipment purchase, rental, repair or maintenance?',
])

@endsection
