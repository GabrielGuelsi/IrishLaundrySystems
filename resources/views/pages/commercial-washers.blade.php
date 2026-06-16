@extends('layouts.app')

@section('pageTitle', 'Commercial Washing Machines | Electrolux Professional Washers | Irish Laundry Systems')

@section('meta')
<meta name="description" content="Commercial washing machines selected around daily demand, running costs and long-term support. Irish Laundry Systems supplies, installs and supports Electrolux Professional commercial washers across Ireland.">
@endsection

@section('content')

{{-- 2. HERO --}}
<section class="relative overflow-hidden flex flex-col lg:!h-[720px]" style="height:auto; min-height:560px;">
    <img src="/images/sectors/Line 6000 solutions products_72dpi.jpg" alt="Commercial washing machines"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.75) 42%, rgba(1,30,65,0.35) 65%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 sm:py-20 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-3xl">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Commercial Washing Machines</p>
                <h1 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-6">
                    Choose commercial washers around <span style="color:#148af4;">daily demand, running cost and support</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    Irish Laundry Systems supplies, installs and supports Electrolux Professional commercial washers for hotels, healthcare sites, care facilities and commercial laundries across Ireland. Since 1987, our team has helped sites match washer capacity, room layout, detergent use, drying pressure and after-installation support around the way their laundry actually works.
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
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Washer Planning</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    Get the right washer for <span style="color:#148af4;">your room, workload and budget</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-5">
                    A commercial washer decision affects more than wash capacity. The right setup should fit the room, utilities, access, detergent control, drying pressure, purchase or rental needs and long-term support before money is spent.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Irish Laundry Systems connects expert advice, Electrolux Professional washer technology, installation knowledge and aftercare, so your site can choose with more confidence.
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
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- Title + intro (original copy) --}}
        <div class="reveal max-w-3xl mb-12 lg:mb-14">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Life-Cycle Cost</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-5">
                Look beyond the purchase price to see<br><span style="color:#148af4;">where washer costs really sit</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                The upfront cost is only one part of a commercial washer decision. Over the life of the equipment, water, energy and detergent use can create far more cost pressure. Electrolux Professional washer technologies are designed to reduce that pressure and support lower long-term running costs.
            </p>
        </div>

        {{-- Washer image + iceberg infographic --}}
        <div class="reveal grid grid-cols-1 lg:grid-cols-[420px_1fr] gap-10 lg:gap-12 items-center">

            {{-- Auto-rotating equipment slideshow (images passing by every 3s, no controls) --}}
            <div x-data="{
                    cur: 0,
                    imgs: [
                        '/images/equipment/commercialwasher.webp',
                        '/images/equipment/WS6%20%E2%80%94%20Line%206000%20High-Spin%20Washer.jpg',
                        '/images/equipment/WN6%20%E2%80%94%20Line%206000%20Normal-Spin%20Washer.jpg',
                        '/images/equipment/W4-Series%20Washer-Extractors.png',
                        '/images/equipment/PW9C.jpg',
                        '/images/equipment/Quickwash%20QWC.jpg',
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
                        <h3 class="font-heading font-bold text-navy text-xl leading-tight mb-3">A smaller lifetime cost profile</h3>
                        <p class="font-body text-navy/70 text-sm leading-relaxed">
                            Water, energy and chemicals make up the larger share of washer lifetime cost. Choosing the right washer technology can help reduce that cost pressure across daily operation.
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
                        <div class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-none">10%</div>
                        <div class="font-body font-semibold text-navy text-sm mt-1">Up-front investment</div>
                    </div>
                    <div class="border border-dotted border-gray-400 rounded-lg p-6 lg:max-w-[280px]">
                        <div class="font-heading font-bold text-navy text-4xl sm:text-5xl lg:text-6xl leading-none">90%</div>
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
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Choose washers around <span style="color:#148af4;">daily cost control</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                A washer decision affects more than the wash cycle. Operational expenditure, detergent use, water and energy waste, drying pressure and staff productivity all shape the real cost of keeping laundry moving.
            </p>
        </div>

        @include('components.financial-metrics', ['labelDrop' => true, 'items' => [
            ['icon'=>'30', 'prefix'=>'Up to', 'stat'=>'40%',               'size'=>'text-4xl', 'label'=>'lower operational expenditure', 'body'=>'Electrolux Professional Line 6000 washer technologies can reduce operational expenditure by up to 40% through better utilisation.'],
            ['icon'=>'39', 'prefix'=>'Over',  'stat'=>'30%',               'size'=>'text-4xl', 'label'=>'detergent cost savings',        'body'=>'Efficient Dosing can reduce detergent cost pressure where specified, while supporting better control of the wash process.'],
            ['icon'=>'7',  'prefix'=>'',      'stat'=>'Water,<br>energy',  'size'=>'text-2xl', 'label'=>'and load control',              'body'=>'Automatic Savings and Integrated Savings support better load control, reducing water, energy and cycle waste.'],
            ['icon'=>'31', 'prefix'=>'',      'stat'=>'Time and<br>money', 'size'=>'text-2xl', 'label'=>'saved before drying',           'body'=>'Power Balance lowers moisture retention before drying, reducing pressure on the drying stage and helping protect laundry flow.'],
            ['icon'=>'3',  'prefix'=>'',      'stat'=>'25%',               'size'=>'text-4xl', 'label'=>'productivity increase',         'body'=>'Electrolux ergonomic material cites a 25% productivity increase, alongside a 75% decrease in sick days and 59% reduction in work-related musculoskeletal disorders.'],
        ]])
    </div>
</section>

{{-- 6b. OnE CONNECTED / CONNECTED LAUNDRY INTELLIGENCE STRIP --}}
<section class="relative overflow-hidden" style="background-color:#011E41; min-height:340px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:42%;">
        <img src="/images/healthcare/line-6000-solutions.jpg" alt="Connected commercial laundry equipment"
             class="w-full h-full object-cover" style="object-position: center center;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #011E41 0%, rgba(1,30,65,0.85) 18%, rgba(1,30,65,0.35) 55%, transparent 100%);"></div>
    </div>
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-12 sm:py-16 lg:py-24 w-full max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">OnE Connected</p>
        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
            Turn washer data into <span style="color:#148af4;">better control over cost, waste and performance</span>
        </h2>
        <p class="font-body text-white/80 text-base leading-relaxed mb-6 max-w-xl">
            OnE Connected gives laundry teams clearer visibility over equipment status, load activity, consumption, alerts and service needs through one digital dashboard. For compatible Electrolux Professional washers, that means better decisions around productivity, running cost, detergent use and laundry flow.
        </p>
        <div class="flex items-center flex-wrap gap-x-5 gap-y-2 mb-7">
            @foreach(['Live equipment visibility', 'Consumption insight', 'Load and cycle data', 'Service alerts'] as $i => $pt)
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
                Ask About Connected Washers
            </a>
        </div>
    </div>
</section>

{{-- 7. TECHNICAL PROOF --}}
<section class="py-12 lg:py-16 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Electrolux Washer Technology</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Features that support <span style="color:#148af4;">capacity, control and daily handling</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Selected Electrolux Professional washer features support load control, detergent accuracy, clearer operation, stronger extraction and easier daily handling when matched to the right laundry room.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-3">
            @foreach([
                ['icon' => '7', 'title' => 'Automatic Savings',              'copy' => 'Water intake adjusted to the actual load.', 'badge' => 'Automatic Savings'],
                ['icon' => '25', 'title' => 'Integrated Savings',             'copy' => 'Real-time load visibility to avoid underloading and overloading.', 'badge' => 'Integrated Savings'],
                ['icon' => '8', 'title' => 'Intelligent / Efficient Dosing', 'copy' => 'Detergent control linked to load weight and cycle needs.', 'badge' => 'Efficient Dosing'],
                ['icon' => '31', 'title' => 'Power Balance',                  'copy' => 'Real-time extraction control for stronger dewatering and lower moisture retention before drying.', 'badge' => 'Power Balance'],
                ['icon' => '4',  'title' => 'ClarusVibe and CompassPro',       'copy' => 'Clearer programme selection, editable programmes and easier operator control.', 'badge' => 'CompassPro'],
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

{{-- 8. PLANNING / INSTALLATION STRIP (before the selection journey) --}}
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.85) 15%, rgba(20,138,244,0.3) 55%, transparent 100%);"></div>
    </div>
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-12 sm:py-16 lg:py-24 w-full max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Room Planning</p>
        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
            Build the washer setup around <span style="color:#011E41;">room, workflow and support</span>
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6 max-w-xl">
            A washer should fit the room, the workflow and the pressure placed on it every day. Irish Laundry Systems connects capacity, utilities, access, drying pressure, installation and support before the equipment decision is made.
        </p>
        <div class="flex flex-wrap items-center gap-x-6 gap-y-3 mb-7">
            @foreach([
                ['t' => 'Room fit',                     'd' => 'M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75'],
                ['t' => 'Utilities and access',         'd' => 'M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z'],
                ['t' => 'Capacity and drying pressure', 'd' => 'M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z'],
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

{{-- 9. RANGE TEASERS CAROUSEL (Equipment Hub visual — commercial chamarizes, not the real grid) --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Washer Range Starting Points</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Start with the washer option for <span style="color:#148af4;">your daily demand</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-3xl">
                Use these key washer options to narrow the conversation before capacity, installation, rental and support are confirmed.
            </p>
        </div>

        @php
        $rangeCards = [
            ['name' => 'Line 6000 Commercial Washers', 'copy' => 'Main commercial washer range for busy laundry rooms where capacity, controls, dosing, high spin and support need to work together.', 'cta' => 'View Washer Range', 'route' => '#washer-range', 'img' => '/images/equipment/commercialwasher.webp'],
            ['name' => 'myPRO / myPRO XL',             'copy' => 'For smaller sites that need more than domestic equipment without moving straight into a full commercial laundry setup.', 'cta' => 'Discover myPRO', 'route' => route('equipment.product', ['category' => 'semi-professional', 'product' => 'mypro-washer']), 'img' => '/images/equipment/myPRO-8K-washer.webp'],
            ['name' => 'Barrier Washers',               'copy' => 'For hygiene-critical laundry rooms where soiled and clean handling must stay separate.', 'cta' => 'Explore Barrier Washers', 'route' => route('equipment.category', 'barrier-washers'), 'img' => '/images/equipment/line6000-barrier-washer.webp'],
            ['name' => 'Lagoon Advanced Care',          'copy' => 'For specialist wet cleaning and textile care where delicate garments, leathers or shoes need a different process.', 'cta' => 'Explore Wet Cleaning', 'route' => route('equipment.product', ['category' => 'wet-cleaning', 'product' => 'lagoon-advanced-care']), 'img' => '/images/healthcare/lagoon-advanced-care.webp'],
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

{{-- 11. PRODUCT FINDER / WASHER RANGE (Option B — left sidebar, full washer universe in 3 groups) --}}
<section id="washer-range" class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Commercial Washer Range</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Compare washer options around <span style="color:#148af4;">capacity, cost and support</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Start with capacity, then connect the washer choice to room layout, utilities, detergent use, drying pressure, installation and long-term support.
            </p>
        </div>

        @php
            // Full washer universe relevant to ILS, in three groups. Only the WH6 standard line is excluded;
            // WH6-CV / WH6-LAC / WH6-LAG variants are included (ClarusVibe, Lagoon Advanced Care, specialist washing).
            $washerFamilies = [
                // Core Line 6000 Washer Range
                ['group' => 'Core Line 6000 Washer Range', 'name' => 'WS6 — Line 6000 High-Spin Washer', 'slug' => 'ws6', 'route' => route('equipment.product', ['category' => 'washers', 'product' => 'ws6']), 'line' => 'Line 6000 High Spin', 'topLine' => 'Line 6000 · 8–35 kg', 'ranges' => ['6–9 kg','11–14 kg','20–35 kg'], 'fit' => 'High-spin washer range for busy laundry rooms needing faster extraction and lower drying pressure.', 'badges' => ['Automatic Savings','Power Balance','ClarusVibe','ERGOCERT'], 'tech' => ['Automatic Savings','Power Balance','ClarusVibe','ERGOCERT'], 'img' => '/images/equipment/WS6 — Line 6000 High-Spin Washer.jpg'],
                ['group' => 'Core Line 6000 Washer Range', 'name' => 'WN6 — Line 6000 Normal-Spin Washer', 'slug' => 'wn6', 'route' => route('equipment.product', ['category' => 'washers', 'product' => 'wn6']), 'line' => 'Line 6000 Normal Spin', 'topLine' => 'Line 6000 · 8–35 kg', 'ranges' => ['6–9 kg','11–14 kg','20–35 kg'], 'fit' => 'Normal-spin washer range for sites where wash performance, room fit and long-term support need to stay connected.', 'badges' => ['Automatic Savings','Integrated Savings','CompassPro','ERGOCERT'], 'tech' => ['Automatic Savings','Integrated Savings','CompassPro','ERGOCERT'], 'img' => '/images/equipment/WN6 — Line 6000 Normal-Spin Washer.jpg'],
                ['group' => 'Core Line 6000 Washer Range', 'name' => 'WH6-CV — ClarusVibe Washer Variants', 'slug' => 'wh6-cv', 'route' => route('equipment.product', ['category' => 'washers', 'product' => 'wh6-cv']), 'line' => 'ClarusVibe Variants', 'topLine' => 'Line 6000 · ClarusVibe variants · 7–33 kg', 'ranges' => ['6–9 kg','11–14 kg','20–35 kg'], 'fit' => 'ClarusVibe washer variants for sites that need clearer programme control and a more guided operator experience.', 'badges' => ['ClarusVibe','Automatic Savings','Integrated Savings','ERGOCERT'], 'tech' => ['ClarusVibe','Automatic Savings','Integrated Savings','Intelligent Dosing','ERGOCERT'], 'img' => '/images/equipment/commercialwasher.webp'],
                ['group' => 'Core Line 6000 Washer Range', 'name' => 'WH6-LAC — Lagoon Advanced Care Washer Variants', 'slug' => 'wh6-lac', 'route' => route('equipment.product', ['category' => 'washers', 'product' => 'wh6-lac']), 'line' => 'Lagoon / Wet Cleaning Variants', 'topLine' => 'Line 6000 · Lagoon Advanced Care variants · 6–33 kg', 'ranges' => ['6–9 kg','11–14 kg','20–35 kg'], 'fit' => 'Washer variants connected to Lagoon Advanced Care for specialist wet cleaning and textile care.', 'badges' => ['Lagoon Advanced Care','Efficient Dosing','ClarusVibe','Textile Care'], 'tech' => ['Efficient Dosing','ClarusVibe'], 'img' => '/images/equipment/commercialwasher.webp'],
                ['group' => 'Core Line 6000 Washer Range', 'name' => 'WH6-LAG — Lagoon Washer Variants', 'slug' => 'wh6-lag', 'route' => route('equipment.product', ['category' => 'washers', 'product' => 'wh6-lag']), 'line' => 'Lagoon / Wet Cleaning Variants', 'topLine' => 'Line 6000 · Lagoon variant · 14 kg', 'ranges' => ['11–14 kg'], 'fit' => 'Lagoon washer variant for sites managing delicate garments and specialist care processes.', 'badges' => ['Lagoon','Textile Care','ClarusVibe','Efficient Dosing'], 'tech' => ['ClarusVibe','Efficient Dosing'], 'img' => '/images/equipment/commercialwasher.webp'],
                // Compact / Heavy-Duty Washer Options
                ['group' => 'Compact / Heavy-Duty Washer Options', 'name' => 'Quickwash QWC', 'slug' => 'quickwash-qwc', 'route' => route('equipment.product', ['category' => 'washers', 'product' => 'quickwash-qwc']), 'line' => 'Compact / Small Business', 'topLine' => 'Compact / Small Business', 'ranges' => ['6–9 kg'], 'fit' => 'Compact washer option for sites that need professional laundry performance in a smaller footprint.', 'badges' => ['Compact Fit','Professional Wash','Small Business','Easy Operation'], 'tech' => [], 'img' => '/images/equipment/Quickwash QWC.jpg'],
                ['group' => 'Compact / Heavy-Duty Washer Options', 'name' => 'PW9C Compact Washer', 'slug' => 'pw9c', 'route' => route('equipment.product', ['category' => 'washers', 'product' => 'pw9c']), 'line' => 'Compact / Small Business', 'topLine' => 'Compact · 9 kg', 'ranges' => ['6–9 kg'], 'fit' => 'Compact professional washer for smaller sites needing more than domestic laundry equipment.', 'badges' => ['Compact Fit','Professional Wash','Small Site','Support Available'], 'tech' => [], 'img' => '/images/equipment/PW9C.jpg'],
                ['group' => 'Compact / Heavy-Duty Washer Options', 'name' => 'W4-Series Washer-Extractors', 'slug' => 'w4-series', 'route' => route('equipment.product', ['category' => 'washers', 'product' => 'w4-series']), 'line' => 'Heavy-Duty Washer-Extractors', 'topLine' => 'Heavy Duty · 40 kg+', 'ranges' => ['40 kg+'], 'fit' => 'Heavy-duty washer-extractor route for large-volume laundry rooms needing strong throughput and long-term support.', 'badges' => ['High Capacity','Heavy Duty','Service Support','Long-Term Use'], 'tech' => [], 'img' => '/images/equipment/W4-Series Washer-Extractors.png'],
                // Specialist Washing Routes
                ['group' => 'Specialist Washing Routes', 'name' => 'myPRO / myPRO XL', 'slug' => 'mypro', 'route' => route('equipment.product', ['category' => 'semi-professional', 'product' => 'mypro-washer']), 'line' => 'Semi-Professional', 'topLine' => 'Semi-Professional', 'ranges' => ['6–9 kg'], 'fit' => 'Semi-professional washer route for smaller sites needing more than domestic equipment.', 'badges' => ['Small Site','Professional Wash','Compact Fit','Support Available'], 'tech' => [], 'img' => '/images/equipment/myPRO-8K-washer.webp'],
                ['group' => 'Specialist Washing Routes', 'name' => 'Barrier Washers', 'slug' => 'barrier', 'route' => route('equipment.category', 'barrier-washers'), 'line' => 'Barrier Washers', 'topLine' => 'Hygiene-Critical Laundry', 'ranges' => ['11–14 kg','20–35 kg','40 kg+'], 'fit' => 'Barrier washer route for laundry rooms where soiled and clean handling must stay separate.', 'badges' => ['Clean / Dirty Separation','Hygiene Watchdog','ERGOCERT','AIDO'], 'tech' => ['ERGOCERT'], 'img' => '/images/equipment/line6000-barrier-washer.webp'],
                ['group' => 'Specialist Washing Routes', 'name' => 'Lagoon Advanced Care', 'slug' => 'lagoon', 'route' => route('equipment.product', ['category' => 'wet-cleaning', 'product' => 'lagoon-advanced-care']), 'line' => 'Lagoon / Wet Cleaning Variants', 'topLine' => 'Specialist Wet Cleaning', 'ranges' => ['11–14 kg','20–35 kg'], 'fit' => 'Specialist wet cleaning route for delicate garments, textile care and advanced fabric handling.', 'badges' => ['Wet Cleaning','Textile Care','Efficient Dosing','Lagoon'], 'tech' => ['Efficient Dosing'], 'img' => '/images/healthcare/lagoon-advanced-care.webp'],
            ];
            $groupOrder = ['Core Line 6000 Washer Range', 'Compact / Heavy-Duty Washer Options', 'Specialist Washing Routes'];
            $lineOrder  = ['Line 6000 High Spin','Line 6000 Normal Spin','ClarusVibe Variants','Lagoon / Wet Cleaning Variants','Compact / Small Business','Heavy-Duty Washer-Extractors','Semi-Professional','Barrier Washers'];
            $rangeOrder = ['6–9 kg','11–14 kg','20–35 kg','40 kg+'];
            $techOrder  = ['ClarusVibe','CompassPro','Automatic Savings','Integrated Savings','Power Balance','Efficient Dosing','Intelligent Dosing','ERGOCERT'];
            $lineOpts = []; $rangeOpts = []; $techOpts = [];
            foreach($washerFamilies as $f) {
                $lineOpts[$f['line']] = ($lineOpts[$f['line']] ?? 0) + 1;
                foreach($f['ranges'] as $r) { $rangeOpts[$r] = ($rangeOpts[$r] ?? 0) + 1; }
                foreach($f['tech'] as $t)   { $techOpts[$t]  = ($techOpts[$t]  ?? 0) + 1; }
            }
            $famJs = array_map(fn($f) => ['group' => $f['group'], 'line' => $f['line'], 'ranges' => $f['ranges'], 'tech' => $f['tech']], $washerFamilies);
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
                groupShown(g) { return this.families.some(f => f.group === g && this.matches(f)); },
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
                    <span class="font-body text-sm text-navy font-bold"><span x-text="count"></span> <span x-text="count === 1 ? 'option' : 'options'"></span></span>
                    <button @click="clearAll()" class="font-body text-xs text-[#148af4] hover:underline">Clear filters</button>
                </div>
            </aside>

            {{-- RIGHT: grouped product tiles --}}
            <div>
                @foreach($groupOrder as $gName)
                @php $groupItems = array_values(array_filter($washerFamilies, fn($f) => $f['group'] === $gName)); @endphp
                <div x-show="groupShown('{{ $gName }}')" class="mb-12 last:mb-0">
                    <h3 class="font-heading font-bold text-navy text-lg mb-6 pb-2 border-b border-gray-200">{{ $gName }}</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-x-6 gap-y-10">
                        @foreach($groupItems as $f)
                        <div x-show="matches({{ \Illuminate\Support\Js::from(['line' => $f['line'], 'ranges' => $f['ranges'], 'tech' => $f['tech']]) }})" class="flex flex-col">
                            <a href="{{ $f['route'] }}" class="flex items-center justify-center h-48 lg:h-56 mb-5">
                                <img src="{{ $f['img'] }}" alt="{{ $f['name'] }}" class="max-h-full w-auto object-contain transition-transform duration-300 hover:-translate-y-1.5">
                            </a>
                            <p class="font-body text-xs font-bold text-[#148af4] mb-1.5">{{ $f['topLine'] }}</p>
                            <h4 class="font-heading font-bold text-navy text-lg leading-snug mb-2"><a href="{{ $f['route'] }}" class="hover:text-[#148af4] transition-colors">{{ $f['name'] }}</a></h4>
                            <p class="font-body text-gray-500 text-sm leading-relaxed mb-4">{{ $f['fit'] }}</p>
                            <div class="flex flex-wrap gap-1.5 mb-5">
                                @foreach(array_slice($f['badges'], 0, 4) as $b)
                                <span class="font-body text-[10px] font-bold uppercase tracking-wide text-[#148af4] bg-[#148af4]/10 px-2 py-1 rounded">{{ $b }}</span>
                                @endforeach
                            </div>
                            <div class="mt-auto flex flex-col gap-2.5">
                                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/></svg>
                                    Request Advice
                                </a>
                                <a href="{{ $f['route'] }}" class="inline-flex items-center justify-center gap-2 border border-gray-300 text-navy hover:border-navy font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
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
                    <p class="font-body text-gray-500 text-base">No washers match that combination. <button @click="clearAll()" class="text-[#148af4] font-bold hover:underline">Clear filters</button> or <a href="{{ route('contact') }}" class="text-[#148af4] font-bold hover:underline">talk to our team</a>.</p>
                </div>

                <div class="text-center mt-12">
                    <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 font-body font-bold text-[#148af4] hover:underline">
                        View full product range
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>

                <p class="font-body text-gray-500 text-sm leading-relaxed mt-10">
                    Full specifications, capacities, dimensions, technical documents, brochures and manuals live on each product or sub-range detail page.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- 11b. DOSING & LAUNDRY CONTROL (Alpine carousel — sector module) --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal max-w-3xl">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Dosing &amp; Laundry Control</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Cut detergent waste with<br><span style="color:#148af4;">smarter dosing and wash control</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Automatic dosing supports commercial laundry rooms by using the right amount of detergent for each cycle. That can reduce waste, lower chemical overuse, protect textile quality and support more consistent wash results over time.
            </p>
        </div>

        @php
        $dosingProducts = [
            [
                'name'   => 'Multisave',
                'label'  => 'Multi-tank dosing with water saving',
                'body'   => 'Multisave combines dosing control with cylinder-to-cylinder water saving across multi-tank machines. It reduces the volume of water and detergent used per cycle without compromising wash quality or hygiene standards.',
                'points' => ['Multi-tank machine compatible', 'Reduces water and detergent per cycle', 'Supports wash cycle optimisation'],
                'img'    => '/images/healthcare/MultisaveEQUIP.webp',
            ],
            [
                'name'   => 'DOSAVE',
                'label'  => 'Precise dosing for consistent results',
                'body'   => 'DOSAVE delivers accurate detergent dosing for each wash cycle, reducing chemical overuse and waste. It supports more consistent wash quality while lowering detergent running cost over time.',
                'points' => ['Accurate cycle-by-cycle dosing', 'Reduces chemical waste', 'Lowers detergent running cost'],
                'img'    => '/images/healthcare/DOSAVEEQUIP.webp',
            ],
            [
                'name'   => 'JETSAVE',
                'label'  => 'Jet-based dosing with integrated saving',
                'body'   => 'JETSAVE uses a water jet to mix and deliver detergent precisely into the drum. It is designed to reduce both water and detergent consumption while maintaining consistent wash performance across cycles.',
                'points' => ['Jet-based detergent delivery', 'Water and detergent saving', 'Compatible with CompassPro control'],
                'img'    => '/images/healthcare/JetsaveEQUIP.webp',
            ],
            [
                'name'   => 'Efficient Dosing',
                'label'  => 'Integrated dosing through CompassPro',
                'body'   => 'Efficient Dosing integrates directly with CompassPro to ensure the correct amount of detergent is used in every cycle. It removes manual dosing decisions and supports lower chemical costs over time.',
                'points' => ['Integrated with CompassPro', 'Removes manual dosing errors', 'Lower detergent cost per cycle'],
                'img'    => '/images/healthcare/efficientDosing_equip.webp',
            ],
        ];
        @endphp

        <div
            x-data="{
                active: 0,
                count: 4,
                timer: null,
                next()  { this.active = (this.active + 1) % this.count; this.restart(); },
                prev()  { this.active = (this.active - 1 + this.count) % this.count; this.restart(); },
                go(i)   { this.active = i; this.restart(); },
                restart() { clearInterval(this.timer); this.timer = setInterval(() => this.next(), 5000); },
            }"
            x-init="timer = setInterval(() => next(), 5000)"
            class="relative reveal"
        >
            {{-- Slides --}}
            <div class="grid [&>*]:[grid-area:1/1]">
                @foreach($dosingProducts as $i => $p)
                <div
                    class="transition-opacity duration-500"
                    :class="active === {{ $i }} ? 'opacity-100' : 'opacity-0 pointer-events-none'"
                >
                    <div class="grid grid-cols-1 lg:grid-cols-12" style="min-height:420px;">

                        {{-- Left: context photo --}}
                        <div class="lg:col-span-3 overflow-hidden pt-8 lg:pt-10" style="align-self:start;">
                            <img src="/images/healthcare/Laundry-Double-Banner-965x965-1.webp"
                                 alt="Electrolux Professional laundry equipment"
                                 class="w-full object-cover object-center" style="height:260px;">
                        </div>

                        {{-- Right: product name + tabs indicator + description + unit image --}}
                        <div class="lg:col-span-9 flex flex-col justify-between p-6 sm:p-8 lg:p-10">

                            {{-- Tab indicators (product selector) --}}
                            <div class="flex gap-1 border-b border-gray-100 mb-6 overflow-x-auto">
                                @foreach($dosingProducts as $j => $tab)
                                <button @click="go({{ $j }})"
                                        :class="active === {{ $j }} ? 'border-b-2 border-navy text-navy font-bold' : 'text-gray-400 hover:text-navy'"
                                        class="font-heading text-sm pb-3 pr-6 transition-colors whitespace-nowrap">
                                    {{ $tab['name'] }}
                                </button>
                                @endforeach
                            </div>

                            {{-- Content + unit image side by side --}}
                            <div class="flex flex-col sm:flex-row gap-6 items-start flex-1">

                                {{-- Copy --}}
                                <div class="flex-1">
                                    <p class="font-body font-bold text-[#148af4] text-sm mb-2">{{ $p['label'] }}</p>
                                    <p class="font-body text-gray-600 text-base leading-relaxed mb-5">{{ $p['body'] }}</p>
                                    <div class="flex items-center gap-8">
                                        <img src="/images/healthcare/clarusvibeicon.webp" alt="ClarusVibe" class="h-12 w-auto object-contain opacity-80">
                                        <img src="/images/healthcare/Compass-Pro_1-300x88.webp" alt="CompassPro" class="h-12 w-auto object-contain opacity-80">
                                    </div>
                                </div>

                                {{-- Unit image --}}
                                @if($p['img'])
                                <div class="flex-shrink-0 w-full max-w-[220px] sm:max-w-none sm:w-56 lg:w-80 mx-auto flex items-center justify-center">
                                    <img src="{{ $p['img'] }}" alt="{{ $p['name'] }}"
                                         class="w-full h-auto object-contain">
                                </div>
                                @endif

                            </div>

                        </div>

                    </div>
                </div>
                @endforeach
            </div>

            {{-- Prev / Next buttons --}}
            <button @click="prev()"
                    class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-2 lg:-translate-x-14 w-10 h-10 rounded-full bg-white border border-navy/15 shadow text-navy hover:bg-navy hover:text-white transition-colors flex items-center justify-center z-10">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
            </button>
            <button @click="next()"
                    class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-2 lg:translate-x-14 w-10 h-10 rounded-full bg-white border border-navy/15 shadow text-navy hover:bg-navy hover:text-white transition-colors flex items-center justify-center z-10">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
            </button>

            {{-- Dot navigation --}}
            <div class="flex items-center justify-center gap-2 mt-3">
                @foreach($dosingProducts as $i => $p)
                <button
                    @click="go({{ $i }})"
                    :class="active === {{ $i }} ? 'bg-[#148af4] w-6' : 'bg-navy/20 hover:bg-navy/40 w-2'"
                    class="h-2 rounded-full transition-all duration-300">
                </button>
                @endforeach
            </div>

        </div>

        {{-- CTA --}}
        <div class="mt-4 text-center">
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-8 py-4 rounded-lg text-sm transition-colors duration-200">
                Ask About Dosing Systems
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

    </div>
</section>

{{-- 12. CONNECTED WASHER SUPPORT --}}
<section class="py-16 lg:py-20 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Connected Washer Support</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Keep washer performance supported <span style="color:#148af4;">after the first decision</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Commercial washer performance depends on more than the first installation. Irish Laundry Systems connects equipment access, planned maintenance, repairs and aftercare around the way the laundry room operates.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
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

{{-- 13. RENTAL / CAPITAL PRESSURE STRIP --}}
@include('components.why-choose-strip', [
    'eyebrow'      => 'Rental Options',
    'headingLine1' => 'Keep laundry moving with',
    'headingLine2' => '<span style="color:#148af4;">lower upfront cost</span>',
    'body'         => 'For sites facing washer replacement, capacity needs or ageing equipment, rental can keep the laundry room moving without turning every equipment decision into one large capital purchase.',
    'miniPoints'   => ['Lower upfront<br>cost', 'Installation and<br>support available', 'Service and breakdown support<br>included under rental terms'],
    'miniNowrap'   => true,
])

{{-- 14. COMPACT AFTER-INSTALLATION SUPPORT BAND --}}
<section class="py-12 lg:py-16 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-7">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">After Installation</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                    Keep equipment supported with <span style="color:#148af4;">clear next steps</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-5 max-w-2xl">
                    Once equipment is in place, Irish Laundry Systems can guide your site toward the right follow-up support, from planned maintenance and service history to call-out support and aftercare.
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
    'subheading' => 'Commercial washer choices affect cost, workflow, staff routines and daily output. Irish Laundry Systems is trusted by organisations that need clear communication, responsive support and equipment knowledge after the equipment is on site.',
])

{{-- 16. TRUSTED BY LOGO STRIP --}}
@include('components.proof-bar')

{{-- 17. FAQ --}}
@include('components.faq', [
    'eyebrow' => 'Commercial Washer FAQs',
    'heading' => 'Clear answers before <span style="color:#148af4;">your washer decision</span>',
    'faqs' => [
        ['question' => 'What size commercial washer do I need?', 'answer' => 'The right size depends on daily laundry volume, textile type, peak demand, room layout, utilities and drying capacity. Irish Laundry Systems can review the site before recommending a washer range or model.'],
        ['question' => 'Can I rent a commercial washer?', 'answer' => 'Yes. Equipment Rental may be suitable for sites looking for lower upfront cost, replacement support or capacity expansion. Service and breakdown support is included under rental terms.'],
        ['question' => 'Do you install commercial washers?', 'answer' => 'Yes. Irish Laundry Systems supplies, installs and supports commercial laundry equipment across Ireland.'],
        ['question' => 'Do you provide service and breakdown support?', 'answer' => 'Yes. Service and breakdown support is available, with planned maintenance and aftercare options for equipment already on site.'],
        ['question' => 'What is the difference between Automatic Savings and Integrated Savings?', 'answer' => 'Automatic Savings adjusts water intake to the actual load. Integrated Savings shows the load in real time to help avoid underloading and overloading.'],
        ['question' => 'Can washer choice reduce drying pressure?', 'answer' => 'Yes. High-spin washer selection and Power Balance can reduce moisture retention before drying, protecting laundry flow and reducing pressure on the drying stage.'],
        ['question' => 'Can connected washer data support better laundry control?', 'answer' => 'Where compatible equipment is in place, OnE Connected can give clearer visibility over equipment status, load activity, consumption, alerts and service needs.'],
        ['question' => 'Can dosing reduce detergent waste?', 'answer' => 'Yes. Compatible dosing systems and Electrolux Professional dosing features can help use the right amount of detergent for each cycle, reducing chemical overuse and supporting more consistent wash results.'],
        ['question' => 'Are Line 6000 washers suitable for healthcare or care facilities?', 'answer' => 'Selected Line 6000 washer options can support hygiene-focused and high-demand laundry environments when matched to the correct process, room setup and support plan.'],
    ],
])

{{-- 18. FINAL CTA --}}
<section class="py-16 lg:py-24" style="background-color:#011E41;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 text-center">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Equipment Advice</p>
        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4 max-w-4xl mx-auto">
            Need the right washer for <span style="color:#148af4;">your laundry room?</span>
        </h2>
        <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl mx-auto">
            Talk to Irish Laundry Systems about washer capacity, running cost pressure, detergent control, installation, rental, maintenance and support options.
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
