@extends('layouts.app')

@section('meta')
<meta name="description" content="Commercial laundry equipment selected around your operation — selected Electrolux Professional washers, dryers, ironers and more, with supply, commissioning and aftercare from Irish Laundry Systems.">
@endsection

@section('content')

<!-- 1. HERO -->
<style>
@keyframes eqHeroFadeUp {
    from { opacity: 0; transform: translateY(24px); }
    to   { opacity: 1; transform: translateY(0); }
}
.eq-hero-title { animation: eqHeroFadeUp 0.7s ease forwards; }
.eq-hero-desc  { animation: eqHeroFadeUp 0.7s ease 0.2s forwards; opacity: 0; }
.eq-hero-btns  { animation: eqHeroFadeUp 0.7s ease 0.4s forwards; opacity: 0; }
@media (prefers-reduced-motion: reduce) {
    .eq-hero-title, .eq-hero-desc, .eq-hero-btns { animation: none; opacity: 1; transform: none; }
}
</style>

<section class="relative overflow-hidden h-auto min-h-[520px] lg:h-[720px]" style="background-color:#011E41;">

    <img src="/images/hero/HOMEHERO2.jpg" alt="Irish Laundry Systems engineering team on site"
         loading="eager" decoding="async"
         class="absolute inset-0 w-full h-full object-cover object-center">

    {{-- Gradient overlay — same fade as the Repairs & Call-Outs hero --}}
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,1.00) 0%, rgba(1,30,65,0.92) 30%, rgba(1,30,65,0.50) 50%, rgba(1,30,65,0.10) 65%, transparent 75%);"></div>

    <div class="relative z-10 h-full flex items-center w-full py-16 lg:py-0">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16">
            <div style="max-width: 820px;">

                <p class="eq-hero-title font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Equipment Guidance</p>

                <h1 class="eq-hero-title font-heading font-bold text-white leading-tight tracking-tight mb-6 text-3xl sm:text-4xl lg:text-[44px] text-balance">
                    Commercial laundry equipment<br class="hidden lg:block"> <span class="text-[#148af4]">supplied, installed and&nbsp;supported</span>
                </h1>

                <p class="eq-hero-desc font-body text-white/80 leading-relaxed mb-8 text-base max-w-2xl text-pretty">
                    Irish Laundry Systems supports commercial laundry sites with equipment selection, quotation, supply, installation, rental advice and aftercare, including Electrolux Professional laundry equipment options.
                </p>

                <div class="eq-hero-btns flex flex-col sm:flex-row gap-4">
                    <a href="#equipment-quote"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-[#0e79d8] text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 whitespace-nowrap">
                        Request Equipment Quote
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 border border-white/50 hover:border-white text-white font-body font-bold px-7 py-4 rounded-md text-base transition-colors duration-200 hover:bg-white/10 whitespace-nowrap">
                        Ask About Purchase or Rental
                    </a>
                </div>

                {{-- Trust indicators --}}
                <div class="eq-hero-btns flex flex-wrap items-center gap-x-5 gap-y-2 mt-8 font-body text-white/70 text-xs">
                    <span class="whitespace-nowrap">Engineering-led since 1987</span>
                    <span class="w-px h-3 bg-white/25 hidden sm:block" aria-hidden="true"></span>
                    <span class="whitespace-nowrap">Electrolux Professional Partner</span>
                    <span class="w-px h-3 bg-white/25 hidden sm:block" aria-hidden="true"></span>
                    <span class="whitespace-nowrap">Supply, installation &amp; aftercare</span>
                </div>

            </div>
        </div>
    </div>

</section>

<!-- 2. THIN ELECTROLUX TRUST STRIP -->
@include('components.partner-strip')

<!-- 3. INTRO / BRIDGE -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Choosing Equipment</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    A better equipment fit can mean <span style="color:#148af4;">less waste</span>, less pressure and <span style="color:#148af4;">smoother laundry flow</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    The right equipment choice can save time, reduce waste, improve linen flow and support lower energy and water use where suitable.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Irish Laundry Systems looks at the room, workload, workflow and support needs before guiding the next equipment decision, whether the right step is purchase, rental where suitable, installation and commissioning or follow-up care.
                </p>
                <a href="#equipment-categories"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    Explore Equipment
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- 4. ELECTROLUX SOLUTION TEASERS -->
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Electrolux Professional Lines</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Explore equipment lines built for <span style="color:#148af4;">different laundry needs</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                <span>The available Electrolux Professional range includes options for high-use laundry rooms, smaller professional sites and specialist textile care.</span>
                <span>Irish Laundry Systems helps match the right option to the site and the next step.</span>
            </p>
        </div>
    </div>

    <div>

        @php
        $teasers = [
            [
                'eyebrow'  => 'Line 6000',
                'headline' => 'Energy-saving options for professional laundry',
                'subline'  => 'Line 6000 equipment options for sites looking to manage energy use, water use and daily laundry demand.',
                'points'   => ['Control running costs', 'Use less water and energy', 'Built for daily demand'],
                'cta'      => 'Explore Line 6000 Options',
                'route'    => route('equipment.category', 'washers'),
                'img'      => '/images/sectors/Line 6000 solutions products_72dpi.jpg',
            ],
            [
                'eyebrow'  => 'myPROzip',
                'headline' => 'High speed, long life and flexibility for smaller sites',
                'subline'  => 'myPROzip washer and dryer options for operations that need more than domestic equipment in a compact professional setup.',
                'points'   => ['More than domestic', 'Smaller-site fit', 'Faster turnaround'],
                'cta'      => 'Explore myPRO Options',
                'route'    => route('equipment.category', 'semi-professional'),
                'img'      => '/images/equipment/myPRO-8K-washer.webp',
            ],
            [
                'eyebrow'  => 'lagoon Advanced Care',
                'headline' => 'Specialist textile care where the fabric needs more',
                'subline'  => 'lagoon Advanced Care and wet cleaning options for garments and textiles that need a different approach.',
                'points'   => ['Protect textile quality', 'Handle specialist garments', 'Reduce outsourcing where suitable'],
                'cta'      => 'Explore Wet Cleaning',
                'route'    => route('equipment.category', 'wet-cleaning'),
                'img'      => '/images/Hospitallity/hospitallityhero.png',
            ],
        ];
        @endphp

        <div
            x-data="{
                active: 0,
                count: 3,
                timer: null,
                next()  { this.active = (this.active + 1) % this.count; this.restart(); },
                prev()  { this.active = (this.active - 1 + this.count) % this.count; this.restart(); },
                go(i)   { this.active = i; this.restart(); },
                restart() { clearInterval(this.timer); this.timer = setInterval(() => this.next(), 6000); },
            }"
            x-init="timer = setInterval(() => next(), 6000)"
            class="relative"
        >
            <div class="grid [&>*]:[grid-area:1/1] overflow-hidden">
                @foreach($teasers as $i => $t)
                <div
                    class="transition-opacity duration-500"
                    :class="active === {{ $i }} ? 'opacity-100' : 'opacity-0 pointer-events-none'"
                >
                    <div class="relative" style="min-height:540px;">
                        <img src="{{ $t['img'] }}" alt="{{ $t['eyebrow'] }}"
                             class="absolute inset-0 w-full h-full object-cover object-center">
                        <div class="absolute inset-0" style="background: linear-gradient(to right, rgba(1,30,65,0.7) 0%, rgba(1,30,65,0.32) 28%, rgba(1,30,65,0.05) 52%, transparent 72%);"></div>
                        <div class="relative z-10 flex items-end" style="min-height:540px;">
                            <div class="p-8 lg:p-14 max-w-2xl">
                                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">{{ $t['eyebrow'] }}</p>
                                <h3 class="font-heading font-bold text-white text-2xl sm:text-3xl lg:text-4xl leading-tight mb-4">{{ $t['headline'] }}</h3>
                                <p class="font-body text-white/80 text-base leading-relaxed mb-5 max-w-xl">{{ $t['subline'] }}</p>
                                <div class="flex flex-wrap items-center gap-x-5 gap-y-2 mb-7">
                                    @foreach($t['points'] as $pt)
                                    <span class="font-body text-white/90 text-sm">{{ $pt }}</span>
                                    @if(!$loop->last)<span class="text-white/30">|</span>@endif
                                    @endforeach
                                </div>
                                <a href="{{ $t['route'] }}"
                                   class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
                                    {{ $t['cta'] }}
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                {{-- Prev / Next circular arrows, bottom-right --}}
                <div class="self-end justify-self-end z-20 flex gap-2 p-6">
                    <button @click="prev()"
                            class="w-11 h-11 rounded-full bg-white/90 hover:bg-white text-navy shadow flex items-center justify-center transition-colors">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
                    </button>
                    <button @click="next()"
                            class="w-11 h-11 rounded-full bg-white/90 hover:bg-white text-navy shadow flex items-center justify-center transition-colors">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                    </button>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 5. HIGHLIGHTED EQUIPMENT -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Highlighted Equipment</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Equipment options <span style="color:#148af4;">worth a closer look</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                These equipment options can help sites handle common laundry demands around output, drying performance, space and professional-grade use.
            </p>
        </div>
        @php
        $highlighted = [
            [
                'title' => 'High Spin Commercial Washers',
                'text'  => 'For sites that need stronger wash performance, better load handling and more control around daily laundry output.',
                'cta'   => 'View Washer Options',
                'route' => route('equipment.category', 'washers'),
                'img'   => '/images/equipment/commercialwasher.webp',
            ],
            [
                'title' => 'Heat Pump Dryers',
                'text'  => 'For sites looking to reduce energy pressure while keeping drying performance strong for busy laundry demand.',
                'cta'   => 'View Dryer Options',
                'route' => route('equipment.category', 'tumble-dryers'),
                'img'   => '/images/equipment/Tumble-dryers_Heat-Pump_1-1.webp',
            ],
            [
                'title' => 'myPRO Washers &amp; Dryers',
                'text'  => 'For smaller operations that need more than domestic equipment without moving straight into a full commercial laundry setup.',
                'cta'   => 'View myPRO Options',
                'route' => route('equipment.category', 'semi-professional'),
                'img'   => '/images/equipment/myPRO-8K-washer.webp',
            ],
        ];
        @endphp

        <div
            x-data="{
                active: 0,
                count: {{ count($highlighted) }},
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
                    @foreach($highlighted as $i => $card)
                    <div class="flex-shrink-0 w-full lg:w-1/2 px-3">
                        <div class="grid grid-cols-1 sm:grid-cols-[160px_1fr] lg:grid-cols-[180px_1fr] gap-4 lg:gap-6 items-center bg-white border border-gray-200 rounded-xl p-6 lg:p-8 h-full" style="min-height:300px;">
                            <div class="flex items-center justify-center">
                                <img src="{{ $card['img'] }}" alt="{{ strip_tags($card['title']) }}" class="w-full h-44 lg:h-52 object-contain">
                            </div>
                            <div class="flex flex-col">
                                <h3 class="font-heading font-bold text-navy text-xl lg:text-2xl leading-tight mb-3">{!! $card['title'] !!}</h3>
                                <p class="font-body text-gray-500 text-sm leading-relaxed mb-6">{{ $card['text'] }}</p>
                                <a href="{{ $card['route'] }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-3 rounded-full text-sm transition-colors duration-200 w-fit">
                                    Discover more
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
                    @foreach($highlighted as $i => $card)
                    <button @click="go({{ $i }})"
                            x-show="{{ $i }} <= maxIndex"
                            :class="active === {{ $i }} ? 'bg-navy w-2.5 h-2.5' : 'bg-navy/25 hover:bg-navy/50 w-2.5 h-2.5'"
                            class="rounded-full transition-all duration-300"></button>
                    @endforeach
                </div>
                <div class="absolute right-0 flex gap-2">
                    <button @click="prev()"
                            class="w-11 h-11 rounded-full bg-gray-200 text-navy hover:bg-navy hover:text-white transition-colors flex items-center justify-center">
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

<!-- 6. EQUIPMENT CATEGORIES -->
<section id="equipment-categories" class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-12 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Equipment Categories</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Browse commercial laundry equipment <span style="color:#148af4;">by category</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Browse commercial laundry equipment available for quotation, supply, installation, rental discussion and ongoing support through Irish Laundry Systems.
            </p>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">

            @foreach([
                ['title' => 'Washing Machines',             'route' => route('equipment.category', 'washers'),          'img' => '/images/equipment/commercialwasher.webp'],
                ['title' => 'Barrier Washers',              'route' => route('equipment.category', 'barrier-washers'),  'img' => '/images/equipment/line6000-barrier-washer.webp'],
                ['title' => 'Dryers',                       'route' => route('equipment.category', 'tumble-dryers'),    'img' => '/images/equipment/line6000-tumble-dryer.webp'],
                ['title' => 'Drying Cabinets',              'route' => route('equipment.category', 'drying-cabinets'),  'img' => '/images/healthcare/Drying-cabinets_image.webp'],
                ['title' => 'Hot Cylinder Ironers',         'route' => route('equipment.category', 'ironers'),          'img' => '/images/equipment/line6000-ironer.webp'],
                ['title' => 'Wet Cleaning',                 'route' => route('equipment.category', 'wet-cleaning'),     'img' => '/images/equipment/FC48.jpg'],
                ['title' => 'Semi-Professional',            'route' => route('equipment.category', 'semi-professional'),'img' => '/images/equipment/myPRO-8K-washer.webp'],
                ['title' => 'Accessories &amp; Consumables','route' => route('equipment.category', 'accessories'),      'img' => '/images/equipment/IntegratedSavings.png'],
            ] as $cat)
            <a href="{{ $cat['route'] }}" class="group relative rounded-xl overflow-hidden block aspect-square border border-gray-100 bg-white">
                <img src="{{ $cat['img'] }}" alt="{{ strip_tags($cat['title']) }}"
                     class="absolute inset-0 w-full h-full object-contain p-6 transition-transform duration-500 group-hover:scale-105">
                <div class="absolute inset-x-0 bottom-0 h-2/5" style="background: linear-gradient(to top, rgba(1,30,65,0.88) 0%, rgba(1,30,65,0.45) 55%, transparent 100%);"></div>
                <div class="absolute inset-x-0 bottom-0 p-5 z-10">
                    <h3 class="font-heading font-bold text-white text-lg lg:text-xl leading-snug">{!! $cat['title'] !!}</h3>
                </div>
            </a>
            @endforeach

        </div>

        {{-- Finishing Equipment — secondary equipment route strip (after Categories, before Access) --}}
        <div class="mt-12 lg:mt-16 rounded-2xl border border-gray-200 bg-[#f7f9fc] overflow-hidden reveal">
            <div class="grid grid-cols-1 lg:grid-cols-12">

                {{-- LEFT: copy (~40%) --}}
                <div class="lg:col-span-5 p-8 lg:p-10 flex flex-col justify-center">
                    <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Finishing Equipment</p>
                    <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl leading-tight text-balance mb-3">
                        Add <span style="color:#148af4;">professional finishing support</span> for daily linen and garment presentation
                    </h2>
                    <p class="font-body text-gray-500 text-sm lg:text-base leading-relaxed mb-5">
                        For care homes, nursing homes, hospitality sites and small-scale operations that need ironing tables, steam irons or hand-finishing support for linen, garments, uniforms and everyday presentation.
                    </p>
                    <div class="flex flex-wrap items-center gap-x-3 gap-y-2 mb-6">
                        <span class="font-body font-bold text-navy text-xs">Better presentation</span>
                        <span class="text-gray-300">|</span>
                        <span class="font-body font-bold text-navy text-xs">Easier daily finishing</span>
                        <span class="text-gray-300">|</span>
                        <span class="font-body font-bold text-navy text-xs">Practical room fit</span>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="{{ route('equipment.category', 'ironers') }}"
                           class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-5 py-3 rounded-lg text-sm transition-colors duration-200">
                            View Finishing Equipment
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}"
                           class="inline-flex items-center justify-center gap-2 border border-navy/20 hover:border-navy text-navy font-body font-bold px-5 py-3 rounded-lg text-sm transition-all duration-200">
                            Ask About Ironing Tables
                        </a>
                    </div>
                </div>

                {{-- RIGHT: finishing route cards (~60%) — TODO swap icon placeholders for real product photos --}}
                <div class="lg:col-span-7 bg-white p-6 lg:p-8 lg:border-l border-gray-200">
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 h-full">
                        @foreach([
                            ['t' => 'Ironing Tables',                'b' => 'Professional ironing table support for everyday linen, garments, uniforms and smaller items that need a cleaner final finish.', 'cta' => 'View Ironing Tables',      'href' => route('equipment.category', 'ironers'), 'img' => 'FIT1.jpg'],
                            ['t' => 'Steam Irons',                   'b' => 'Flexible hand-finishing support for touch-ups, resident clothing, guest garments, uniforms and daily presentation work.',          'cta' => 'Ask About Steam Irons',    'href' => route('contact'),                       'img' => 'FSU1.jpg'],
                            ['t' => 'Presses &amp; Form Finishers',  'b' => 'Selected finishing options for shirts, garments and presentation-led laundry where a stronger, more consistent finish is needed.',  'cta' => 'Explore Finishing Options', 'href' => route('equipment.category', 'ironers'), 'img' => 'FF1.jpg'],
                        ] as $fc)
                        <div class="rounded-xl border border-gray-200 bg-white p-4 flex flex-col">
                            <div class="rounded-lg bg-white border border-gray-100 overflow-hidden h-32 mb-3 flex items-center justify-center">
                                <img src="/images/equipment/{{ $fc['img'] }}" alt="{{ strip_tags($fc['t']) }}" class="w-full h-full object-contain p-2">
                            </div>
                            <h3 class="font-heading font-bold text-navy text-sm leading-snug mb-1">{!! $fc['t'] !!}</h3>
                            <p class="font-body text-gray-500 text-xs leading-snug mb-3 flex-1">{{ $fc['b'] }}</p>
                            <a href="{{ $fc['href'] }}" class="inline-flex items-center gap-1 text-[#148af4] font-body font-bold text-xs hover:gap-2 transition-all">
                                {{ $fc['cta'] }}
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- 7. EQUIPMENT ACCESS & VALUE STRIP -->
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:340px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry equipment supply"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.82) 8%, rgba(20,138,244,0.45) 28%, rgba(20,138,244,0.18) 48%, transparent 65%);"></div>
    </div>
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-12 lg:py-16 w-full max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Equipment Access</p>
        <h2 class="font-heading font-bold leading-tight text-balance mb-4">
            <span class="text-white text-3xl sm:text-4xl lg:text-5xl">Choose whether to</span>
            <span class="text-3xl sm:text-4xl lg:text-5xl whitespace-nowrap" style="color:#011E41;">purchase or rent</span>
            <span class="text-white text-3xl sm:text-4xl lg:text-5xl">equipment</span>
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6 max-w-2xl">
            Whether the right decision is purchase or rental, Irish Laundry Systems can guide your site toward the equipment option that fits the room, workload, budget and support needs.
        </p>
        <div class="flex flex-wrap items-center gap-x-6 gap-y-2 mb-8">
            @foreach(['Outright purchase', 'Rental where suitable', 'Supplied and commissioned'] as $i => $pt)
            @if($i > 0)<span class="text-white/40">|</span>@endif
            <span class="font-body text-white font-bold text-sm">{{ $pt }}</span>
            @endforeach
        </div>
        <div class="flex flex-wrap gap-3">
            <a href="#equipment-quote"
               class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
                Request Equipment Quote
            </a>
            <a href="{{ route('rental') }}"
               class="inline-flex items-center gap-2 border border-white/60 text-white font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/10 transition-colors tracking-wide">
                Ask About Equipment Rental
            </a>
        </div>
    </div>
</section>

<!-- 8. INSTALLATION, COMMISSIONING & HANDOVER -->
<section class="py-14 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-12 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 text-center">Installation &amp; Handover</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3 text-center">
                From equipment choice to <span style="color:#148af4;">ready for daily use</span>
            </h2>
            <p class="font-body text-gray-500 text-base mb-2 max-w-2xl leading-relaxed text-center mx-auto">
                A good equipment decision does not stop at the quote. Irish Laundry Systems can support the site review, supply, installation, commissioning and handover steps that help put the selected equipment into operation.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-20">
            @foreach([
                ['title' => 'Review the site',          'text' => 'Look at the room, access, utilities, workload, staff flow and current laundry demand.',                 'icon' => 'clipboard'],
                ['title' => 'Confirm the equipment',    'text' => 'Match the equipment category, capacity and purchase or rental fit to the site and laundry demand.',     'icon' => 'Ativo%204'],
                ['title' => 'Supply and commission',    'text' => 'Arrange equipment supply, positioning, installation, commissioning and test cycles where required.',    'icon' => 'Ativo%206'],
                ['title' => 'Handover and next steps',  'text' => 'Give the site clearer guidance on use, support options and follow-up care where needed.',               'icon' => 'Ativo%203'],
            ] as $i => $step)
            <div class="flex flex-col items-center text-center relative">
                @if($i < 3)
                <div class="hidden lg:block absolute -right-16 top-8 text-[#148af4]">
                    <svg class="w-24 h-10" viewBox="0 0 120 30" fill="none">
                        <path d="M0 15 L96 15 M78 4 L96 15 L78 26" stroke="#148af4" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                @endif
                <div class="w-full flex justify-center items-center mb-4" style="height:8rem;">
                    <img src="/images/icons/{{ 125 + $i }}.png" alt=""
                         style="width:7rem;height:7rem;filter:brightness(0) saturate(100%) invert(35%) sepia(96%) saturate(1500%) hue-rotate(196deg) brightness(103%);">
                </div>
                <h3 class="font-heading font-bold text-navy text-sm lg:text-base mb-1">{{ $step['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $step['text'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- 9. SUPPORT AFTER INSTALLATION -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">After Installation</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Keep the <span style="color:#148af4;">next support step clear</span> after installation
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Once equipment is in place, Irish Laundry Systems can help your site choose the right follow-up support, from planned maintenance to call-out support and aftercare.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">

            @foreach([
                [
                    'title'  => 'Preventive Maintenance',
                    'text'   => 'For sites that need planned visits, fewer reactive maintenance decisions and better control around essential laundry equipment.',
                    'cta'    => 'View Contracts',
                    'route'  => route('service-contracts'),
                    'img'    => '/images/healthcare/Service Contracts.png',
                    'pos'    => 'center 35%',
                ],
                [
                    'title'  => 'Repairs &amp; Call-outs',
                    'text'   => 'Engineering support when faults or breakdowns put laundry output, linen availability or daily routines under pressure.',
                    'cta'    => 'Request Call-out',
                    'route'  => route('repairs'),
                    'img'    => '/images/healthcare/repairs-callouts.jpg',
                    'pos'    => 'center 40%',
                ],
                [
                    'title'  => 'Support &amp; Aftercare',
                    'text'   => 'For service history, genuine parts access where applicable and clearer repair, rental or replacement decisions after installation or inspection.',
                    'cta'    => 'Explore Support Options',
                    'route'  => route('parts-aftercare'),
                    'img'    => '/images/healthcare/services-overview-hero-portrait.jpg',
                    'pos'    => 'center center',
                ],
            ] as $card)
            <a href="{{ $card['route'] }}"
               class="group relative overflow-hidden rounded-2xl block"
               style="height:400px;">
                <img src="{{ $card['img'] }}" alt="{{ strip_tags($card['title']) }}"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                     style="object-position: {{ $card['pos'] }};">
                {{-- Default gradient --}}
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.4) 45%, rgba(1,30,65,0.05) 75%, transparent 100%);"></div>
                {{-- Hover overlay --}}
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background: rgba(1,30,65,0.88);"></div>
                {{-- Content --}}
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

<!-- 10. EQUIPMENT FOR DIFFERENT LAUNDRY ENVIRONMENTS -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="text-center mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Site Fit</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Match equipment to the way <span style="color:#148af4;">each laundry room works</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-2xl mx-auto">
                A hotel, care facility, healthcare site, commercial laundry and shared-use laundry room may each need a different balance of capacity, hygiene flow, drying performance, finishing, space and support.
            </p>
        </div>

        @php
        $environments = [
            ['env' => 'Healthcare',                      'route' => route('sectors.healthcare'),   'img' => '/images/healthcare/healthcarehero.png',                'pos' => '75% center'],
            ['env' => 'Care Facilities',                 'route' => route('sectors.care'),         'img' => '/images/CareFacilities/carefacilitiesheroimage.jpg',   'pos' => '75% center'],
            ['env' => 'Hospitality',                     'route' => route('sectors.hospitality'),  'img' => '/images/Hospitallity/hospitallityhero.png',           'pos' => '75% center'],
            ['env' => 'Commercial &amp; Industrial',     'route' => route('sectors.commercial'),   'img' => '/images/healthcare/commercial-industrial.jpg'],
            ['env' => 'Multi Housing',                   'route' => route('sectors'),              'img' => '/images/sectors/Line 6000 solutions products_72dpi.jpg'],
        ];
        @endphp

        <div
            x-data="{
                active: 0,
                count: {{ count($environments) }},
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
            class="relative"
        >
            <div class="overflow-hidden">
                <div class="flex transition-transform duration-500 ease-out -mx-3"
                     :style="`transform: translateX(-${active * (100 / perView)}%)`">
                    @foreach($environments as $i => $env)
                    <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/4 px-3">
                        <div class="flex flex-col items-center text-center">
                            <a href="{{ $env['route'] }}" class="block w-full overflow-hidden rounded-sm mb-5">
                                <img src="{{ $env['img'] }}" alt="{{ strip_tags($env['env']) }}"
                                     class="w-full object-cover transition-transform duration-500 hover:scale-105" style="height:320px; object-position: {{ $env['pos'] ?? 'center' }};">
                            </a>
                            <h3 class="font-heading font-bold text-navy text-xl lg:text-2xl mb-4">{!! $env['env'] !!}</h3>
                            <a href="{{ $env['route'] }}"
                               class="inline-flex items-center justify-center bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-3 rounded-full text-sm transition-colors duration-200">
                                Discover more
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Dots centered + arrows bottom-right --}}
            <div class="relative mt-10 flex items-center justify-center">
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

<!-- 11. TRUSTED BY / CLIENT LOGO STRIP -->
@include('components.proof-bar')

<!-- 12. EQUIPMENT FAQs -->
@include('components.faq', [
    'eyebrow' => 'Equipment FAQs',
    'heading' => 'Questions before choosing <span style="color:#148af4;">commercial laundry equipment</span>',
    'faqs' => [
        ['question' => 'What equipment categories do you supply?',           'answer' => 'Irish Laundry Systems supplies selected Electrolux Professional commercial laundry equipment, including commercial washers, barrier washers, tumble dryers, drying cabinets, hot cylinder ironers, wet cleaning equipment, semi-professional equipment and accessories or consumables where suitable.'],
        ['question' => 'Can you help choose the right equipment size?',       'answer' => 'Yes. Irish Laundry Systems can review the room, workload, daily laundry demand, access, utilities and support needs before recommending the right equipment option.'],
        ['question' => 'Do you only supply Electrolux Professional equipment?', 'answer' => 'Irish Laundry Systems supplies selected Electrolux Professional equipment. The team can also review existing mixed-brand laundry rooms where service, maintenance or support is needed.'],
        ['question' => 'Is installation included with equipment supply?',     'answer' => 'Equipment proposals can include delivery, installation and commissioning. Irish Laundry Systems will confirm the agreed scope in the quote, including any additional site works that may need to be handled separately.'],
        ['question' => 'Can new equipment be rented?',                        'answer' => 'Rental may be available where the selected Electrolux Professional equipment range, site requirements and agreement terms are a good fit. Rental has a minimum term of 3 years.'],
        ['question' => 'Can equipment be purchased outright?',                'answer' => 'Yes. Outright purchase is available for sites that want full ownership of the equipment from day one.'],
        ['question' => 'Do new machines include warranty?',                   'answer' => 'New equipment purchases include a 12-month parts warranty. Service, maintenance or follow-up support can be discussed separately.'],
        ['question' => 'Can you support the equipment after installation?',   'answer' => 'Yes. Irish Laundry Systems can discuss Preventive Maintenance Contracts, Repairs & Call-outs and Support & Aftercare options depending on the equipment and site needs.'],
        ['question' => 'Can you review an existing laundry room?',            'answer' => 'Yes. Irish Laundry Systems can review an existing laundry room and advise whether replacement equipment, rental, maintenance or service support is the right next step.'],
        ['question' => 'What is the best next step?',                         'answer' => 'Request an Equipment Quote or Talk to Our Team. Share the site type, equipment need, current laundry setup and whether you are considering purchase or rental.'],
    ],
])

<!-- 13. FINAL EQUIPMENT QUOTE FORM -->
<div id="equipment-quote"></div>
@include('components.cta-downtime-form', [
    'pageSource'  => 'equipment_cta',
    'eyebrow'     => 'Request an Equipment Quote',
    'heading'     => 'Talk to the team before you <span style="color:#148af4;">buy or rent</span> laundry equipment',
    'body'        => 'Tell us about your site, workload, room and budget pressure. Irish Laundry Systems will guide you toward the right equipment quote, purchase option, rental discussion or aftercare support.',
    'formTitle'   => 'Request an Equipment Quote',
    'formIntro'   => 'Share the details that help direct the enquiry properly.',
    'buttonText'  => 'Request Equipment Advice',
])

@endsection
