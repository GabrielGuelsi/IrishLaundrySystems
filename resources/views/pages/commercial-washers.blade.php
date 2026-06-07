@extends('layouts.app')

@section('pageTitle', 'Commercial Washing Machines | Electrolux Professional Washers | Irish Laundry Systems')

@section('meta')
<meta name="description" content="Commercial washing machines selected around daily demand, running costs and long-term support. Irish Laundry Systems supplies, installs and supports Electrolux Professional commercial washers across Ireland.">
@endsection

@section('content')

{{-- 2. HERO --}}
<section class="relative overflow-hidden flex flex-col" style="height:720px; min-height:560px;">
    <img src="/images/sectors/Line 6000 solutions products_72dpi.jpg" alt="Commercial washing machines"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.75) 42%, rgba(1,30,65,0.35) 65%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-24 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-3xl">
                <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Commercial Washing Machines</p>
                <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-6">
                    Choose commercial washers around <span style="color:#148af4;">daily demand, running costs and long-term support</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    Irish Laundry Systems supplies, installs and supports Electrolux Professional commercial washing machines for hotels, healthcare sites, care facilities and commercial laundries across Ireland. We connect washer capacity, room setup, staff routines and after-installation support around the way your laundry actually operates.
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
        <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Washer Planning</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance">
                    Washer choice affects <span style="color:#148af4;">cost control, laundry flow and support after installation</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    The wrong washer fit can create daily pressure through water use, detergent waste, drying delays, staff routines, service calls and replacement pressure. Irish Laundry Systems connects washer selection, room layout, installation, rental, maintenance, repairs and aftercare into one clear equipment decision.
                </p>
                <a href="#washer-range"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    See the washer options we provide
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

{{-- 5. LIFE-CYCLE COST FEATURE — washer + iceberg infographic --}}
<section class="py-16 lg:py-24 bg-white overflow-x-hidden">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-8">

        {{-- Title + intro (original copy) --}}
        <div class="reveal max-w-3xl mb-12 lg:mb-14">
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-5">
                <span style="color:#148af4;">Look beyond purchase price</span> to the costs that keep repeating
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Purchase price is only the first part of a washer decision. Over the life of the equipment, chemicals, energy and water carry the larger cost pressure, so the right washer choice should be made around daily use, not just initial purchase.
            </p>
        </div>

        {{-- Washer image + iceberg infographic --}}
        <div class="reveal grid grid-cols-1 lg:grid-cols-[420px_1fr] gap-10 lg:gap-12 items-center">

            {{-- Auto-rotating equipment slideshow (images passing by every 3s, no controls) --}}
            <div x-data="{
                    cur: 0,
                    imgs: [
                        '/images/equipment/commercialwasher.webp',
                        '/images/equipment/line6000-tumble-dryer.webp',
                        '/images/equipment/line6000-ironer.webp',
                        '/images/equipment/line6000-barrier-washer.webp',
                        '/images/healthcare/lagoon-advanced-care.webp',
                    ],
                    init() { setInterval(() => { this.cur = (this.cur + 1) % this.imgs.length }, 3000); }
                 }"
                 class="relative w-full">
                <div class="relative flex items-center justify-center" style="height: 440px;">
                    <template x-for="(img, i) in imgs" :key="i">
                        <img :src="img" alt="Commercial laundry equipment"
                             class="absolute inset-0 m-auto w-full h-auto max-h-full object-contain transition-opacity duration-700 ease-in-out"
                             :class="cur === i ? 'opacity-100' : 'opacity-0'">
                    </template>
                </div>
            </div>

            {{-- Iceberg infographic: left callouts | iceberg | right callouts --}}
            <div class="grid grid-cols-1 lg:grid-cols-[minmax(0,1fr)_auto_minmax(0,1fr)] gap-y-10 gap-x-5 items-center">

                {{-- LEFT column --}}
                <div class="order-2 lg:order-1 flex flex-col lg:text-right lg:items-end gap-8">
                    <div class="bg-[#eaf4fc] rounded-lg p-6 lg:max-w-[230px]">
                        <h3 class="font-heading font-bold text-navy text-xl leading-tight mb-3">Our &ldquo;iceberg&rdquo; is slim</h3>
                        <p class="font-body text-navy/70 text-sm leading-relaxed">
                            While other washers and dryers have <span class="font-bold text-navy">extensive lifetime costs,</span> we can represent ours with a slimmer iceberg shape because of the savings you will achieve thanks to its <span class="font-bold text-navy">money-saving features</span> and robust engineering.
                        </p>
                    </div>
                    <div class="lg:max-w-[230px]">
                        <h3 class="font-heading font-bold text-navy text-lg leading-tight mb-2">Competitors&rsquo; life cycle costs*</h3>
                        <p class="font-body text-navy/70 text-sm leading-relaxed">
                            Here is a representation of what other brands cost over the life of their washers and dryers.
                        </p>
                        <p class="font-body text-navy/50 text-xs italic mt-3">*Data available on request</p>
                    </div>
                </div>

                {{-- ICEBERG --}}
                <div class="order-1 lg:order-2 flex justify-center">
                    <img src="/images/iceberg.png" alt="Life-cycle cost iceberg" class="w-48 sm:w-56 h-auto lg:h-[440px] lg:w-auto">
                </div>

                {{-- RIGHT column --}}
                <div class="order-3 lg:order-3 flex flex-col gap-8">
                    <div>
                        <div class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-none">10%</div>
                        <div class="font-body font-semibold text-navy text-sm mt-1">Up-front investment</div>
                    </div>
                    <div class="border border-dotted border-gray-400 rounded-lg p-6 lg:max-w-[280px]">
                        <div class="font-heading font-bold text-navy text-5xl lg:text-6xl leading-none">90%</div>
                        <div class="font-body font-semibold text-navy text-sm mt-1 mb-2">Life cycle costs</div>
                        <p class="font-body text-navy/70 text-sm leading-relaxed mb-4">
                            These costs make up <span class="font-bold text-navy">the bulk of your expenses</span> during the lifetime of your washer or dryer.
                        </p>
                        <div class="flex items-center gap-5 mb-4 text-navy">
                            @foreach([
                                'M10 3h4v3l3 6.5V19a2 2 0 01-2 2H9a2 2 0 01-2-2v-6.5L10 6V3z',
                                'M13 3 4 14h7l-1 7 9-11h-7l1-7z',
                                'M12 3c4 5 6 8 6 11a6 6 0 11-12 0c0-3 2-6 6-11z',
                            ] as $d)
                            <svg class="w-6 h-6 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $d }}"/></svg>
                            @endforeach
                        </div>
                        <ul class="space-y-1.5">
                            @foreach(['Chemicals', 'Energy', 'Water'] as $li)
                            <li class="font-body font-semibold text-navy text-sm flex items-center gap-2">
                                <span class="text-[#148af4]">&#9656;</span> {{ $li }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- 6. FINANCIAL / OPERATIONAL PERFORMANCE --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Financial Performance</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Choose washers around the <span style="color:#148af4;">costs your laundry room carries every day</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                A washer decision affects more than the wash cycle. Operational expenditure, detergent use, water and energy waste, drying pressure and staff productivity all shape the real cost of keeping laundry moving.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-4">
            @foreach([
                ['title' => 'Up to 40% lower operational expenditure', 'copy' => 'Electrolux Professional Line 6000 washer technologies can reduce operational expenditure by up to 40% through better utilisation.'],
                ['title' => 'Over 30% detergent cost savings',         'copy' => 'Efficient Dosing can reduce detergent cost pressure where specified, while supporting better control of the wash process.'],
                ['title' => 'Water, energy and load control',          'copy' => 'Automatic Savings and Integrated Savings support better load control, reducing water, energy and cycle waste.'],
                ['title' => 'Time and money saved before drying',      'copy' => 'Power Balance lowers moisture retention before drying, reducing pressure on the drying stage and helping protect laundry flow.'],
                ['title' => '25% productivity increase',               'copy' => 'Electrolux ergonomic material cites a 25% productivity increase, alongside a 75% decrease in sick days and 59% reduction in work-related musculoskeletal disorders.'],
            ] as $card)
            <div class="bg-bg border border-gray-100 rounded-2xl p-6 flex flex-col h-full col-span-1">
                <div class="w-10 h-1 rounded-full bg-[#148af4] mb-4"></div>
                <h3 class="font-heading font-bold text-navy text-base leading-snug mb-2">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $card['copy'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 7. TECHNICAL PROOF --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Technical Proof</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Washer features that support <span style="color:#148af4;">capacity, control and daily handling</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Selected Electrolux Professional features support load control, detergent accuracy, clearer operation, stronger extraction and easier daily handling when matched to the right laundry room.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-4">
            @foreach([
                ['icon' => '30', 'title' => 'Automatic Savings',              'copy' => 'Water intake adjusted to the actual load.', 'badge' => 'Automatic Savings'],
                ['icon' => '34', 'title' => 'Integrated Savings',             'copy' => 'Real-time load visibility to avoid underloading and overloading.', 'badge' => 'Integrated Savings'],
                ['icon' => '26', 'title' => 'Intelligent / Efficient Dosing', 'copy' => 'Detergent control linked to load weight and cycle needs.', 'badge' => 'Efficient Dosing'],
                ['icon' => '16', 'title' => 'Power Balance',                  'copy' => 'Real-time extraction control for stronger dewatering and lower moisture retention before drying.', 'badge' => 'Power Balance'],
                ['icon' => '5',  'title' => 'ClarusVibe and CompassPro',       'copy' => 'Clearer programme selection, editable programmes and easier operator control.', 'badge' => 'CompassPro'],
            ] as $card)
            <div class="p-6 flex flex-col items-center text-center gap-3 col-span-1">
                <div class="flex items-center justify-center h-16">
                    <img src="/images/icons/{{ $card['icon'] }}.png" alt="" class="w-16 h-16 object-contain">
                </div>
                <h3 class="font-heading font-bold text-navy text-sm leading-snug">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-500 text-xs leading-relaxed flex-1">{{ $card['copy'] }}</p>
                <span class="font-body text-[10px] font-bold uppercase tracking-wide text-[#148af4] bg-[#148af4]/10 px-2.5 py-1 rounded-full">{{ $card['badge'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 8. PLANNING / INSTALLATION STRIP (before the selection journey) --}}
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.85) 15%, rgba(20,138,244,0.3) 55%, transparent 100%);"></div>
    </div>
    <div class="relative z-10 px-10 lg:px-16 py-16 lg:py-24" style="width:100%; max-width:60%;">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Room Planning</p>
        <h2 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight text-balance mb-4">
            Build the washer decision around the <span style="color:#011E41;">room, workflow and support</span>
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6 max-w-xl">
            A washer should fit the room, the workflow and the pressure placed on it every day. Irish Laundry Systems connects capacity, utilities, access, drying pressure, installation and support before the equipment decision is made.
        </p>
        <div class="flex items-center flex-wrap gap-x-5 gap-y-2 mb-7">
            @foreach(['Room fit', 'Utilities and access', 'Capacity and drying pressure'] as $i => $pt)
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

{{-- 9. RANGE TEASERS CAROUSEL (Equipment Hub visual — commercial chamarizes, not the real grid) --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-2">Washer Range Starting Points</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Equipment paths <span style="color:#148af4;">worth a closer look</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-3xl">
                Start with the washer route that fits the pressure of your laundry room, then connect the decision to capacity, installation, rental and long-term support.
            </p>
        </div>

        @php
        $rangeCards = [
            ['name' => 'Line 6000 Commercial Washers', 'copy' => 'Main commercial washer range for busy laundry rooms where capacity, controls, dosing, high spin and support need to work together.', 'cta' => 'View Washer Range', 'route' => '#washer-range', 'img' => '/images/equipment/commercialwasher.webp'],
            ['name' => 'myPRO / myPRO XL',             'copy' => 'For smaller sites that need more than domestic equipment without moving straight into a full commercial laundry setup.', 'cta' => 'Discover myPRO', 'route' => route('equipment'), 'img' => '/images/equipment/commercialwasher.webp'],
            ['name' => 'Barrier Washers',               'copy' => 'For hygiene-critical laundry rooms where soiled and clean handling must stay separate.', 'cta' => 'Explore Barrier Washers', 'route' => route('equipment.category', 'barrier-washers'), 'img' => '/images/equipment/line6000-barrier-washer.webp'],
            ['name' => 'Lagoon Advanced Care',          'copy' => 'For specialist wet cleaning and textile care where delicate garments, leathers or shoes need a different process.', 'cta' => 'Explore Wet Cleaning', 'route' => route('equipment'), 'img' => '/images/healthcare/lagoon-advanced-care.webp'],
        ];
        @endphp

        <div
            x-data="{
                active: 0,
                count: {{ count($rangeCards) }},
                perView: 2,
                timer: null,
                animate: true,
                setPerView() { this.perView = window.innerWidth < 1024 ? 1 : 2; },
                advance() {
                    this.active++;
                    if (this.active >= this.count) {
                        setTimeout(() => {
                            this.animate = false;
                            this.active = 0;
                            this.$nextTick(() => requestAnimationFrame(() => requestAnimationFrame(() => { this.animate = true; })));
                        }, 520);
                    }
                },
                next() { this.advance(); this.restart(); },
                prev() {
                    if (this.active <= 0) {
                        this.animate = false;
                        this.active = this.count;
                        this.$nextTick(() => requestAnimationFrame(() => requestAnimationFrame(() => { this.animate = true; this.active--; })));
                    } else {
                        this.active--;
                    }
                    this.restart();
                },
                go(i) { this.active = i; this.restart(); },
                restart() { clearInterval(this.timer); this.timer = setInterval(() => this.advance(), 6000); },
                init() {
                    this.setPerView();
                    window.addEventListener('resize', () => this.setPerView());
                    this.timer = setInterval(() => this.advance(), 6000);
                },
            }"
            class="relative"
        >
            <div class="overflow-hidden">
                <div class="flex -mx-3"
                     :class="animate ? 'transition-transform duration-500 ease-out' : ''"
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
                                <a href="{{ $p['route'] }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-3 rounded-full text-sm transition-colors duration-200 w-fit">
                                    {{ $p['cta'] }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- Cloned cards for a seamless infinite loop --}}
                    @foreach($rangeCards as $i => $p)
                    <div class="flex-shrink-0 w-full lg:w-1/2 px-3" aria-hidden="true">
                        <div class="grid grid-cols-1 sm:grid-cols-[160px_1fr] lg:grid-cols-[180px_1fr] gap-4 lg:gap-6 items-center bg-white border border-gray-200 rounded-xl p-6 lg:p-8 h-full" style="min-height:300px;">
                            <div class="flex items-center justify-center">
                                <img src="{{ $p['img'] }}" alt="" class="w-full h-44 lg:h-52 object-contain">
                            </div>
                            <div class="flex flex-col">
                                <h3 class="font-heading font-bold text-navy text-xl lg:text-2xl leading-tight mb-3">{{ $p['name'] }}</h3>
                                <p class="font-body text-gray-500 text-sm leading-relaxed mb-6">{{ $p['copy'] }}</p>
                                <a href="{{ $p['route'] }}" tabindex="-1" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-3 rounded-full text-sm transition-colors duration-200 w-fit">
                                    {{ $p['cta'] }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="relative mt-8 flex items-center justify-center">
                <div class="flex items-center gap-2">
                    @foreach($rangeCards as $i => $p)
                    <button @click="go({{ $i }})"
                            :class="(active % count) === {{ $i }} ? 'bg-navy w-2.5 h-2.5' : 'bg-navy/25 hover:bg-navy/50 w-2.5 h-2.5'"
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

{{-- 10. COMPACT RESOURCES BAR (low, light, supporting — before the Product Finder) --}}
<section class="py-8 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 lg:gap-10">
            @foreach([
                ['title' => 'Official Resources',  'links' => [['l' => 'Line 6000 brochure', 'h' => '/pdfs/EPR-Line6000-DryersBrochure-01072025_EN.pdf'], ['l' => 'Product resources', 'h' => route('resources')]]],
                ['title' => 'Chemicals & Dosing',  'links' => [['l' => 'Efficient Dosing', 'h' => route('equipment')], ['l' => 'Dosing Systems', 'h' => route('equipment')]]],
                ['title' => 'Related Equipment',   'links' => [['l' => 'Tumble Dryers', 'h' => route('equipment.category', 'tumble-dryers')], ['l' => 'Barrier Washers', 'h' => route('equipment.category', 'barrier-washers')], ['l' => 'Wet Cleaning', 'h' => route('equipment')]]],
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

{{-- 11. PRODUCT FINDER / WASHER RANGE (Option B — left sidebar, Line 6000 core range) --}}
<section id="washer-range" class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Commercial Washer Range</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Compare washer options around <span style="color:#148af4;">capacity, cost and support</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Start with capacity, then connect the washer decision to room layout, utilities, detergent use, drying pressure, installation and long-term support.
            </p>
        </div>

        @php
            // Commercial washer range — WS6, WN6, W4-Series, Quickwash QWC, PW9C (WH line excluded).
            $washerFamilies = [
                ['name' => 'WS6 — Line 6000 High-Spin Washer', 'slug' => 'ws6', 'line' => 'Line 6000', 'topLine' => 'Line 6000 · High Spin · 8–35 kg', 'ranges' => ['8–14 kg','20–35 kg'], 'fit' => 'High-spin Line 6000 washer range for busy laundry rooms needing faster extraction and lower drying pressure.', 'badges' => ['Automatic Savings','Power Balance','ClarusVibe','ERGOCERT'], 'tech' => ['Automatic Savings','Power Balance','ClarusVibe','ERGOCERT'], 'img' => '/images/equipment/commercialwasher.webp'],
                ['name' => 'WN6 — Line 6000 Normal-Spin Washer', 'slug' => 'wn6', 'line' => 'Line 6000', 'topLine' => 'Line 6000 · Normal Spin · 8–35 kg', 'ranges' => ['8–14 kg','20–35 kg'], 'fit' => 'Normal-spin Line 6000 washer range where wash performance, room fit and long-term support need to stay connected.', 'badges' => ['Automatic Savings','Integrated Savings','CompassPro','ERGOCERT'], 'tech' => ['Automatic Savings','Integrated Savings','CompassPro','ERGOCERT'], 'img' => '/images/equipment/commercialwasher.webp'],
                ['name' => 'W4-Series — Heavy Duty Washer-Extractors', 'slug' => 'w4-series', 'line' => 'W4-Series Heavy Duty', 'topLine' => 'W4-Series · Heavy Duty · 40–110 kg', 'ranges' => ['40 kg+'], 'fit' => 'Heavy-duty washer-extractors for high-throughput and industrial loads where capacity and robust build lead.', 'badges' => ['High Capacity','Power Balance','Robust Build'], 'tech' => ['Power Balance'], 'img' => '/images/equipment/commercialwasher.webp'],
                ['name' => 'Quickwash QWC', 'slug' => 'quickwash-qwc', 'line' => 'Quickwash', 'topLine' => 'Quickwash · Fast cycle', 'ranges' => ['8–14 kg'], 'fit' => 'Quick-cycle washer for fast turnaround where short wash times and high availability matter most.', 'badges' => ['Fast Cycle','Compact'], 'tech' => [], 'img' => '/images/equipment/commercialwasher.webp'],
                ['name' => 'PW9C', 'slug' => 'pw9c', 'line' => 'PW9C', 'topLine' => 'PW9C · Professional', 'ranges' => ['8–14 kg'], 'fit' => 'Professional washer for standard commercial laundry duties and dependable everyday performance.', 'badges' => ['Professional','Reliable'], 'tech' => [], 'img' => '/images/equipment/commercialwasher.webp'],
            ];
            $lineOrder  = ['Line 6000','W4-Series Heavy Duty','Quickwash','PW9C'];
            $rangeOrder = ['8–14 kg','20–35 kg','40 kg+'];
            $techOrder  = ['Automatic Savings','Integrated Savings','CompassPro','Power Balance','ClarusVibe','ERGOCERT'];
            $lineOpts = []; $rangeOpts = []; $techOpts = [];
            foreach($washerFamilies as $f) {
                $lineOpts[$f['line']] = ($lineOpts[$f['line']] ?? 0) + 1;
                foreach($f['ranges'] as $r) { $rangeOpts[$r] = ($rangeOpts[$r] ?? 0) + 1; }
                foreach($f['tech'] as $t)   { $techOpts[$t]  = ($techOpts[$t]  ?? 0) + 1; }
            }
            $famJs = array_map(fn($f) => ['line' => $f['line'], 'ranges' => $f['ranges'], 'tech' => $f['tech']], $washerFamilies);
        @endphp

        <div x-data="{
                line: [],
                range: [],
                tech: [],
                moreOpen: false,
                families: {{ \Illuminate\Support\Js::from($famJs) }},
                matches(f) {
                    const ln = this.line.length === 0 || this.line.includes(f.line);
                    const rg = this.range.length === 0 || (f.ranges && f.ranges.some(r => this.range.includes(r)));
                    const tc = this.tech.length === 0 || (f.tech && f.tech.some(t => this.tech.includes(t)));
                    return ln && rg && tc;
                },
                get count() { return this.families.filter(f => this.matches(f)).length; },
                clearAll() { this.line = []; this.range = []; this.tech = []; },
             }"
             class="grid grid-cols-1 lg:grid-cols-[260px_1fr] gap-8 lg:gap-10 items-start">

            {{-- LEFT: Option B filter sidebar --}}
            <aside class="lg:sticky lg:top-28 self-start border border-gray-200 rounded-xl p-5">
                <div class="flex items-center justify-between">
                    <span class="font-heading font-bold text-navy text-xs uppercase tracking-[0.16em]">Filter washer range</span>
                    <button @click="clearAll()" class="font-body text-xs text-[#148af4] hover:underline">Reset all</button>
                </div>

                {{-- Product Line (open) --}}
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

                {{-- Capacity / Range (open) --}}
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <p class="font-heading font-bold text-navy text-sm mb-3">Capacity / Range</p>
                    <div class="space-y-2.5">
                        @foreach($rangeOrder as $val) @if(isset($rangeOpts[$val]))
                        <label class="flex items-center justify-between cursor-pointer group">
                            <span class="flex items-center gap-2.5">
                                <input type="checkbox" value="{{ $val }}" x-model="range" class="w-4 h-4 rounded border-gray-300 accent-[#148af4] cursor-pointer">
                                <span class="font-body text-sm text-gray-600 group-hover:text-navy transition-colors">{{ $val }}</span>
                            </span>
                            <span class="font-body text-xs text-gray-400">{{ $rangeOpts[$val] }}</span>
                        </label>
                        @endif @endforeach
                    </div>
                </div>

                {{-- More filters (collapsed) → Control / Technology --}}
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <button @click="moreOpen = !moreOpen" class="w-full flex items-center justify-between font-heading font-bold text-navy text-sm">
                        <span>More filters</span>
                        <svg class="w-4 h-4 transition-transform duration-200" :class="moreOpen ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/></svg>
                    </button>
                    <div x-show="moreOpen" class="mt-3" style="display:none">
                        <p class="font-body font-semibold text-gray-400 text-xs uppercase tracking-wide mb-2.5">Control / Technology</p>
                        <div class="space-y-2.5">
                            @foreach($techOrder as $val) @if(isset($techOpts[$val]))
                            <label class="flex items-center justify-between cursor-pointer group">
                                <span class="flex items-center gap-2.5">
                                    <input type="checkbox" value="{{ $val }}" x-model="tech" class="w-4 h-4 rounded border-gray-300 accent-[#148af4] cursor-pointer">
                                    <span class="font-body text-sm text-gray-600 group-hover:text-navy transition-colors">{{ $val }}</span>
                                </span>
                                <span class="font-body text-xs text-gray-400">{{ $techOpts[$val] }}</span>
                            </label>
                            @endif @endforeach
                        </div>
                    </div>
                </div>

                {{-- Footer count + clear --}}
                <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between">
                    <span class="font-body text-sm text-navy font-bold"><span x-text="count"></span> <span x-text="count === 1 ? 'range' : 'ranges'"></span></span>
                    <button @click="clearAll()" class="font-body text-xs text-[#148af4] hover:underline">Clear filters</button>
                </div>
            </aside>

            {{-- RIGHT: product tiles --}}
            <div>
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-x-6 gap-y-10">
                    @foreach($washerFamilies as $f)
                    <div x-show="matches({{ \Illuminate\Support\Js::from(['line' => $f['line'], 'ranges' => $f['ranges'], 'tech' => $f['tech']]) }})" class="flex flex-col">
                        <a href="{{ route('equipment.product', ['category' => 'washers', 'product' => $f['slug']]) }}" class="flex items-center justify-center h-48 lg:h-56 mb-5">
                            <img src="{{ $f['img'] }}" alt="{{ $f['name'] }}" class="max-h-full w-auto object-contain transition-transform duration-300 hover:-translate-y-1.5">
                        </a>
                        <p class="font-body text-xs font-bold text-[#148af4] mb-1.5">{{ $f['topLine'] }}</p>
                        <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2"><a href="{{ route('equipment.product', ['category' => 'washers', 'product' => $f['slug']]) }}" class="hover:text-[#148af4] transition-colors">{{ $f['name'] }}</a></h3>
                        <p class="font-body text-gray-500 text-sm leading-relaxed mb-4">{{ $f['fit'] }}</p>
                        <div class="flex flex-wrap gap-1.5 mb-5">
                            @foreach(array_slice($f['badges'], 0, 4) as $b)
                            <span class="font-body text-[10px] font-bold uppercase tracking-wide text-[#148af4] bg-[#148af4]/10 px-2 py-1 rounded">{{ $b }}</span>
                            @endforeach
                        </div>
                        <div class="mt-auto flex flex-col gap-2.5">
                            <a href="{{ route('request-assessment') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/></svg>
                                Request Advice
                            </a>
                            <a href="{{ route('equipment.product', ['category' => 'washers', 'product' => $f['slug']]) }}" class="inline-flex items-center justify-center gap-2 border border-gray-300 text-navy hover:border-navy font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                                View Details
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div x-show="count === 0" class="text-center py-16" style="display:none">
                    <p class="font-body text-gray-500 text-base">No washers match that combination. <button @click="clearAll()" class="text-[#148af4] font-bold hover:underline">Clear filters</button> or <a href="{{ route('contact') }}" class="text-[#148af4] font-bold hover:underline">talk to our team</a>.</p>
                </div>

                <div class="text-center mt-12">
                    <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 font-body font-bold text-[#148af4] hover:underline">
                        View full product range
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>

                <p class="font-body text-gray-500 text-sm leading-relaxed mt-10 max-w-3xl">
                    Not sure which model fits? Irish Laundry Systems can assess capacity, room setup, rental, installation and support options before a final recommendation.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- 12. CONNECTED SERVICE ROUTES --}}
<section class="py-16 lg:py-20 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Connected Support</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Support routes that keep <span style="color:#148af4;">washer decisions moving</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Commercial washer performance depends on more than the first installation. Irish Laundry Systems connects equipment access, planned maintenance, repairs and aftercare around the way the laundry room operates.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                [
                    'title' => 'Equipment Rental',
                    'text'  => 'Lower upfront cost for washer replacement, capacity planning or expansion where rental is the right fit.',
                    'cta'   => 'See Rental Options',
                    'route' => route('rental'),
                    'img'   => '/images/healthcare/commercial-industrial.jpg',
                    'pos'   => 'center center',
                ],
                [
                    'title' => 'Preventive Maintenance',
                    'text'  => 'Planned washer servicing to reduce surprise repair pressure and keep equipment condition visible.',
                    'cta'   => 'View Maintenance Options',
                    'route' => route('service-contracts'),
                    'img'   => '/images/healthcare/service-contracts-hero.png',
                    'pos'   => '90% 35%',
                ],
                [
                    'title' => 'Repairs &amp; Call-outs',
                    'text'  => 'Service and breakdown support when washer faults interrupt wash flow, staff routines or daily output.',
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

{{-- 13. RENTAL / CAPITAL PRESSURE STRIP --}}
@include('components.why-choose-strip', [
    'headingLine1' => 'Keep laundry moving with',
    'headingLine2' => '<span style="color:#148af4;">lower upfront cost</span>',
    'body'         => 'For sites facing washer replacement, capacity needs or ageing equipment, rental can keep the laundry room moving without turning every equipment decision into one large capital purchase.',
    'miniPoints'   => ['Lower upfront cost', 'Installation and support available', 'Service and breakdown support included under rental terms'],
    'miniNowrap'   => true,
])

{{-- 14. COMPACT AFTER-INSTALLATION SUPPORT BAND --}}
<section class="py-12 lg:py-16 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-7">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">After Installation</p>
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
                    Keep washer decisions <span style="color:#148af4;">connected after installation</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-5 max-w-2xl">
                    Irish Laundry Systems connects planned maintenance, service history, service and breakdown support and parts access where needed, so washer decisions stay clear after installation, rental, repair or inspection.
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

{{-- 15. TESTIMONIAL MODULE --}}
@include('components.testimonials', [
    'eyebrow'    => 'Customer Trust',
    'heading'    => 'Trusted support behind <span style="color:#148af4;">commercial laundry decisions</span>',
    'subheading' => 'Commercial washing machine decisions affect cost, workflow, staff routines and daily output. Irish Laundry Systems is trusted by organisations that need clear communication, responsive support and equipment knowledge after the machine is on site.',
])

{{-- 16. TRUSTED BY LOGO STRIP --}}
@include('components.proof-bar')

{{-- 17. FAQ --}}
@include('components.faq', [
    'eyebrow' => 'Commercial Washer FAQs',
    'heading' => 'Clear answers before the <span style="color:#148af4;">washer decision</span>',
    'faqs' => [
        ['question' => 'What size commercial washing machine do I need?', 'answer' => 'The right size depends on daily laundry volume, textile type, peak demand, room layout, utilities and drying capacity. Irish Laundry Systems can assess the site before recommending a washer range or model.'],
        ['question' => 'Can I rent a commercial washing machine?', 'answer' => 'Yes. Rental may be suitable for sites looking for lower upfront cost, replacement support or capacity expansion. Service and breakdown support is included under rental terms.'],
        ['question' => 'Do you install commercial washing machines?', 'answer' => 'Yes. Irish Laundry Systems supplies, installs and supports commercial laundry equipment across Ireland.'],
        ['question' => 'Do you provide service and breakdown support?', 'answer' => 'Yes. Service and breakdown support is available, with planned maintenance and aftercare options for equipment already on site.'],
        ['question' => 'What is the difference between Automatic Savings and Integrated Savings?', 'answer' => 'Automatic Savings adjusts water intake to the actual load. Integrated Savings shows the load in real time to avoid underloading and overloading.'],
        ['question' => 'Can washer choice reduce drying pressure?', 'answer' => 'Yes. High-spin washer selection and Power Balance can reduce moisture retention before drying, protecting laundry flow and reducing pressure on the drying stage.'],
        ['question' => 'Are Line 6000 washers suitable for healthcare or care facilities?', 'answer' => 'Selected Line 6000 washer options can support hygiene-focused and high-demand laundry environments when matched to the correct process, room setup and support plan.'],
    ],
])

{{-- 18. FINAL CTA --}}
<section class="py-16 lg:py-24" style="background-color:#011E41;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 text-center">
        <h2 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight text-balance mb-4 max-w-4xl mx-auto">
            Need the <span style="color:#148af4;">right washer decision</span> for your laundry room?
        </h2>
        <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl mx-auto">
            Talk to Irish Laundry Systems about washer capacity, running cost pressure, installation, rental, maintenance and support options.
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
