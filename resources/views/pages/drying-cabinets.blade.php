@extends('layouts.app')

@section('pageTitle', 'Commercial Drying Cabinets | Electrolux Professional | Irish Laundry Systems')

@section('meta')
<meta name="description" content="Commercial drying cabinets selected around gentle drying, capacity and long-term support. Irish Laundry Systems supplies, installs and supports Electrolux Professional drying cabinets for garments, mops and PPE across Ireland.">
@endsection

@section('content')

{{-- 2. HERO --}}
<section class="relative overflow-hidden flex flex-col" style="height:720px; min-height:560px;">
    <img src="/images/sectors/Line 6000 solutions products_72dpi.jpg" alt="Commercial drying cabinets"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.75) 42%, rgba(1,30,65,0.35) 65%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-24 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-3xl">
                <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Drying Cabinets</p>
                <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-6">
                    Choose drying cabinets around <span style="color:#148af4;">gentle drying, capacity and long-term support</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    Irish Laundry Systems supplies, installs and supports Electrolux Professional drying cabinets for hotels, healthcare sites, care facilities and commercial laundries across Ireland. We connect drying capacity, the items being dried, energy use, room setup and after-installation support around the way your laundry actually operates.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Equipment Advice
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

{{-- 3. UNIVERSAL THIN ELECTROLUX TRUST STRIP --}}
@include('components.partner-strip')

{{-- 4. INTRO / BRIDGE --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Drying Cabinet Planning</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance">
                    Cabinet choice affects <span style="color:#148af4;">gentle drying, capacity and support after installation</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    The wrong cabinet fit can create daily pressure through slow drying, garment damage, energy use, staff routines, service calls and replacement pressure. Irish Laundry Systems connects cabinet selection, room layout, installation, rental, maintenance, repairs and aftercare into one clear equipment decision.
                </p>
                <a href="#cabinet-range"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    See the drying cabinet options we provide
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

{{-- 5. FINANCIAL / OPERATIONAL PERFORMANCE --}}
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Financial Performance</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Choose cabinets around the <span style="color:#148af4;">costs your laundry room carries every day</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                A drying cabinet decision affects more than the drying time. Energy, garment care, the items being dried, staff routines and long-term support all shape the real cost of keeping laundry moving.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach([
                ['title' => '10% up-front. 90% life cycle costs',          'copy' => 'Purchase price is only part of the cabinet decision. Energy and running costs carry the larger cost over the life of the equipment.'],
                ['title' => 'Dry what you cannot tumble',                  'copy' => 'Gently dries garments, footwear, mops and PPE that tumble dryers can damage or cannot handle at all.'],
                ['title' => 'Protect garments and linen life',             'copy' => 'Hanger drying without tumbling reduces wear and extends the life of clothing, uniforms and delicate textiles.'],
                ['title' => 'Lower replacement pressure',                  'copy' => 'Gentle drying protects residents\' clothing and uniforms, reducing damage and the cost of replacement.'],
                ['title' => 'Energy-aware drying',                         'copy' => 'Controlled airflow and heat pump options reduce energy pressure across daily use.'],
                ['title' => 'Fewer surprise repairs',                      'copy' => 'Connected planning, maintenance and aftercare reduce reactive repair pressure on high-use cabinets.'],
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

{{-- 6. TECHNICAL PROOF --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Technical Proof</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Cabinet features that support <span style="color:#148af4;">gentle drying, control and daily handling</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Selected Electrolux Professional features support gentle hanger drying, moisture-aware control, clearer operation and easier daily handling when matched to the right laundry room.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach([
                ['icon' => '26', 'title' => 'Gentle hanger drying',           'copy' => 'Dries garments on hangers without the wear of tumbling.'],
                ['icon' => '16', 'title' => 'Sensor / moisture drying',       'copy' => 'Dries to the right point and stops, avoiding overdrying.'],
                ['icon' => '7',  'title' => 'Heat pump options',              'copy' => 'Energy-efficient drying where the room and setup fit.'],
                ['icon' => '30', 'title' => 'Energy-efficient heating',       'copy' => 'Controlled airflow and heat reduce energy pressure across daily use.'],
                ['icon' => '5',  'title' => 'Clear controls',                 'copy' => 'Simple programme selection and easier operator control.'],
                ['icon' => '4',  'title' => 'ERGOCERT operator handling',      'copy' => 'Certified ergonomic design for daily loading and unloading.'],
            ] as $card)
            <div class="bg-white border border-gray-100 rounded-2xl p-7 flex flex-col items-center text-center gap-4 shadow-card">
                <div class="flex items-center justify-center h-20">
                    <img src="/images/icons/{{ $card['icon'] }}.png" alt="" class="w-20 h-20 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">{{ $card['title'] }}</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $card['copy'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 7. RANGE TEASERS CAROUSEL --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-2">Drying Cabinet Range Starting Points</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Equipment paths <span style="color:#148af4;">worth a closer look</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-3xl">
                Start with the range that fits the pressure of your laundry room, then connect the decision to capacity, installation, rental and long-term support.
            </p>
        </div>

        @php
        $rangeCards = [
            ['name' => 'Line 6000 Drying Cabinets',    'copy' => 'General-purpose drying cabinets for garments and linen dried gently on hangers.', 'cta' => 'View Cabinet Range', 'img' => '/images/healthcare/Drying-cabinets_image.webp'],
            ['name' => 'Heat Pump Drying Cabinets',    'copy' => 'For sites looking to reduce drying energy while keeping garments gently dried.', 'cta' => 'Explore Heat Pump Drying', 'img' => '/images/healthcare/Drying-cabinets_image.webp'],
            ['name' => 'Mop & PPE Drying Cabinets',    'copy' => 'Specialist drying for mops, cloths, PPE and footwear that tumble dryers cannot handle.', 'cta' => 'Explore Specialist Drying', 'img' => '/images/healthcare/Drying-cabinets_image.webp'],
            ['name' => 'Compact Drying Cabinets',      'copy' => 'Smaller cabinets for tight laundry rooms that still need gentle drying.', 'cta' => 'Discover Compact Cabinets', 'img' => '/images/healthcare/Drying-cabinets_image.webp'],
        ];
        @endphp

        <div
            x-data="{
                active: 0,
                count: {{ count($rangeCards) }},
                perView: 2,
                timer: null,
                get maxIndex() { return Math.max(0, this.count - this.perView); },
                next()  { this.active = this.active >= this.maxIndex ? 0 : this.active + 1; this.restart(); },
                prev()  { this.active = this.active <= 0 ? this.maxIndex : this.active - 1; this.restart(); },
                go(i)   { this.active = Math.min(i, this.maxIndex); this.restart(); },
                restart() { clearInterval(this.timer); this.timer = setInterval(() => this.next(), 6000); },
                init() {
                    this.perView = window.innerWidth < 1024 ? 1 : 2;
                    window.addEventListener('resize', () => {
                        this.perView = window.innerWidth < 1024 ? 1 : 2;
                        if (this.active > this.maxIndex) this.active = this.maxIndex;
                    });
                    this.timer = setInterval(() => this.next(), 6000);
                },
            }"
            class="relative"
        >
            {{-- Track --}}
            <div class="overflow-hidden">
                <div class="flex transition-transform duration-500 ease-out -mx-3"
                     :style="`transform: translateX(-${active * (100 / perView)}%)`">
                    @foreach($rangeCards as $i => $p)
                    <div class="flex-shrink-0 w-full lg:w-1/2 px-3">
                        <div class="grid grid-cols-1 sm:grid-cols-[160px_1fr] lg:grid-cols-[180px_1fr] gap-4 lg:gap-6 items-center bg-white border border-gray-200 rounded-xl p-6 lg:p-8 h-full" style="min-height:300px;">
                            <div class="flex items-center justify-center">
                                <img src="{{ $p['img'] }}" alt="{{ $p['name'] }}" class="w-full h-44 lg:h-52 object-contain">
                            </div>
                            <div class="flex flex-col">
                                <h3 class="font-heading font-bold text-navy text-xl lg:text-2xl leading-tight mb-3">{{ $p['name'] }}</h3>
                                <p class="font-body text-gray-500 text-sm leading-relaxed mb-6">{{ $p['copy'] }}</p>
                                <a href="{{ route('equipment') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-3 rounded-full text-sm transition-colors duration-200 w-fit">
                                    {{ $p['cta'] }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Dots centered + arrows bottom-right --}}
            <div class="relative mt-8 flex items-center justify-center">
                <div class="flex items-center gap-2">
                    @foreach($rangeCards as $i => $p)
                    <button @click="go({{ $i }})"
                            x-show="{{ $i }} <= maxIndex"
                            :class="active === {{ $i }} ? 'bg-navy w-2.5 h-2.5' : 'bg-navy/25 hover:bg-navy/50 w-2.5 h-2.5'"
                            class="rounded-full transition-all duration-300" aria-label="Go to slide {{ $i + 1 }}"></button>
                    @endforeach
                </div>
                <div class="absolute right-0 flex gap-2">
                    <button @click="prev()"
                            class="w-11 h-11 rounded-full bg-gray-200 text-navy hover:bg-navy hover:text-white transition-colors flex items-center justify-center" aria-label="Previous">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
                    </button>
                    <button @click="next()"
                            class="w-11 h-11 rounded-full bg-navy text-white hover:bg-navy/90 transition-colors flex items-center justify-center" aria-label="Next">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 8. PLANNING / INSTALLATION STRIP --}}
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.85) 15%, rgba(20,138,244,0.3) 55%, transparent 100%);"></div>
    </div>
    <div class="relative z-10 px-10 lg:px-16 py-16 lg:py-24" style="width:100%; max-width:60%;">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Room Planning</p>
        <h2 class="font-heading font-bold text-4xl lg:text-5xl leading-tight text-balance mb-4">
            <span class="text-white text-4xl lg:text-5xl">Build the cabinet decision</span>
            <span class="text-white text-4xl lg:text-5xl">around the <span style="color:#011E41;">room, workflow</span></span>
            <span class="text-white text-4xl lg:text-5xl">and <span style="color:#011E41;">support</span></span>
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6 max-w-xl">
            A drying cabinet should fit the room, the workflow and the items being dried every day. Irish Laundry Systems connects capacity, utilities, access, load type, installation and support before the equipment decision is made.
        </p>
        <div class="flex items-center flex-wrap gap-x-5 gap-y-2 mb-7">
            @foreach(['Room fit', 'Utilities and access', 'Capacity and load type'] as $i => $pt)
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

{{-- 9. PRODUCT FINDER / CABINET RANGE --}}
<section id="cabinet-range" class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Commercial Drying Cabinet Range</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Compare cabinet options around <span style="color:#148af4;">capacity, gentle drying and support</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Start with capacity and the items being dried, then connect the cabinet decision to room layout, utilities, energy use, installation and long-term support.
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
                            <a href="{{ route('request-assessment') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
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

{{-- 10. CONNECTED SERVICE ROUTES --}}
<section class="py-16 lg:py-20 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Connected Support</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Support routes that keep <span style="color:#148af4;">cabinet decisions moving</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Commercial drying cabinet performance depends on more than the first installation. Irish Laundry Systems connects equipment access, planned maintenance, repairs and aftercare around the way the laundry room operates.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                [
                    'title' => 'Equipment Rental',
                    'text'  => 'Lower upfront cost for cabinet replacement, capacity planning or expansion where rental is the right fit.',
                    'cta'   => 'See Rental Options',
                    'route' => route('rental'),
                    'img'   => '/images/healthcare/commercial-industrial.jpg',
                    'pos'   => 'center center',
                ],
                [
                    'title' => 'Preventive Maintenance',
                    'text'  => 'Planned cabinet servicing to reduce surprise repair pressure and keep equipment condition visible.',
                    'cta'   => 'View Maintenance Options',
                    'route' => route('service-contracts'),
                    'img'   => '/images/healthcare/service-contracts-hero.png',
                    'pos'   => '90% 35%',
                ],
                [
                    'title' => 'Repairs &amp; Call-outs',
                    'text'  => 'Service and breakdown support when cabinet faults interrupt drying flow, staff routines or daily output.',
                    'cta'   => 'Request Call-out',
                    'route' => route('repairs'),
                    'img'   => '/images/healthcare/repairs-callouts.jpg',
                    'pos'   => '50% 35%',
                ],
                [
                    'title' => 'Support &amp; Aftercare',
                    'text'  => 'Service history, follow-up guidance and parts access where needed after installation, rental, repair or inspection.',
                    'cta'   => 'Explore Support Options',
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
                    <h3 class="font-heading font-bold text-white text-xl lg:text-2xl leading-tight mb-4">{!! $card['title'] !!}</h3>
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
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
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

{{-- 15. FAQ --}}
@include('components.faq', [
    'eyebrow' => 'Drying Cabinet FAQs',
    'heading' => 'Clear answers before the <span style="color:#148af4;">cabinet decision</span>',
    'faqs' => [
        ['question' => 'What is a drying cabinet used for?', 'answer' => 'A drying cabinet dries garments, linen, mops, cloths, PPE and footwear gently on hangers or shelves, without the wear of tumbling. It is useful for items that cannot or should not be tumble dried.'],
        ['question' => 'What size drying cabinet do I need?', 'answer' => 'The right size depends on daily volume, the items being dried and the space available. Irish Laundry Systems can assess the site before recommending a cabinet range or model.'],
        ['question' => 'Can I rent a drying cabinet?', 'answer' => 'Yes. Rental may be suitable for sites looking for lower upfront cost, replacement support or capacity expansion. Service and breakdown support is included under rental terms.'],
        ['question' => 'Do you install drying cabinets?', 'answer' => 'Yes. Irish Laundry Systems supplies, installs and supports commercial laundry equipment across Ireland.'],
        ['question' => 'Are drying cabinets gentle on clothing?', 'answer' => 'Yes. Drying on hangers without tumbling reduces wear, which helps protect residents\' clothing, uniforms and delicate textiles and extends their life.'],
        ['question' => 'Can a drying cabinet dry mops and PPE?', 'answer' => 'Yes. Specialist cabinets are designed to dry mops, cloths, PPE and footwear that tumble dryers cannot handle.'],
        ['question' => 'Are drying cabinets suitable for healthcare or care facilities?', 'answer' => 'Yes. Drying cabinets are widely used in care and healthcare settings for gentle, hygienic drying of residents\' clothing, uniforms and specialist items when matched to the right room setup and support plan.'],
    ],
])

{{-- 15b. RESOURCES — Download + Discover --}}
<section class="py-16 lg:py-24 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Resources</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance">Brochures, guides and useful reading</h2>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">

            {{-- Download --}}
            <div class="bg-navy rounded-2xl p-6 lg:p-8">
                <h4 class="font-heading font-bold text-white text-base mb-4">Download</h4>
                <ul class="space-y-4">
                    @foreach([
                        ['label' => 'Line 6000 Drying Cabinets brochure',                'file' => ''],
                        ['label' => 'Discover the full range of Ecolabel Detergents',       'file' => ''],
                        ['label' => 'Line 6000 Washers &amp; Dryers brochure',             'file' => 'EPR-brochure-Line 6000 Evolution Barrier Washers-20241119-EN.pdf'],
                    ] as $pdf)
                    <li>
                        @if($pdf['file'])
                        <a href="/pdfs/{{ $pdf['file'] }}" target="_blank" download class="flex items-start gap-2 font-body text-sm text-white/80 hover:text-white transition-colors">
                            <svg class="w-4 h-4 flex-shrink-0 mt-0.5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                            {!! $pdf['label'] !!}
                        </a>
                        @else
                        <span class="flex items-start gap-2 font-body text-sm text-white/40">
                            <svg class="w-4 h-4 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                            {!! $pdf['label'] !!}
                        </span>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Discover --}}
            <div class="bg-white border border-gray-200 rounded-2xl p-6 lg:p-8">
                <h4 class="font-heading font-bold text-navy text-base mb-4">Discover</h4>
                <ul class="space-y-4">
                    @foreach([
                        ['label' => 'Gentle drying for delicate garments and PPE',          'href' => '#'],
                        ['label' => 'Ensuring Profitability With Efficient On-Premises Laundry', 'href' => '#'],
                        ['label' => 'Essentia: the heart of customer service',                'href' => route('contact')],
                    ] as $link)
                    <li>
                        <a href="{{ $link['href'] }}" class="flex items-start gap-2 font-body text-sm text-navy hover:text-orange font-bold transition-colors">
                            <svg class="w-4 h-4 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                            {{ $link['label'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</section>

{{-- 16. FINAL CTA --}}
<section class="py-16 lg:py-24" style="background-color:#011E41;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 text-center">
        <h2 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight text-balance mb-4 max-w-4xl mx-auto">
            Need the <span style="color:#148af4;">right drying cabinet</span> for your laundry room?
        </h2>
        <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl mx-auto">
            Talk to Irish Laundry Systems about cabinet capacity, gentle drying, the items being dried, installation, rental, maintenance and support options.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}"
               class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                Talk to Our Team
            </a>
            <a href="{{ route('request-assessment') }}"
               class="inline-flex items-center justify-center gap-2 border-2 border-white/60 hover:border-white text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                Request Equipment Advice
            </a>
        </div>
    </div>
</section>

@endsection
