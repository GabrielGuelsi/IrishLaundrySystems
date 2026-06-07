@extends('layouts.app')

@section('pageTitle', 'Commercial Tumble Dryers | Electrolux Professional Dryers | Irish Laundry Systems')

@section('meta')
<meta name="description" content="Commercial tumble dryers selected around energy use, linen turnaround and long-term support. Irish Laundry Systems supplies, installs and supports Electrolux Professional commercial tumble dryers across Ireland.">
@endsection

@section('content')

{{-- 2. HERO --}}
<section class="relative overflow-hidden flex flex-col" style="height:720px; min-height:560px;">
    <img src="/images/sectors/Line 6000 solutions products_72dpi.jpg" alt="Commercial tumble dryers"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.75) 42%, rgba(1,30,65,0.35) 65%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-24 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-3xl">
                <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Commercial Tumble Dryers</p>
                <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight text-balance mb-6">
                    Choose commercial dryers around <span style="color:#148af4;">energy use, linen turnaround and long-term support</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    Irish Laundry Systems supplies, installs and supports Electrolux Professional commercial tumble dryers for hotels, healthcare sites, care facilities and commercial laundries across Ireland. We connect drying capacity, room setup, energy pressure and after-installation support around the way your laundry actually operates.
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
        <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Dryer Planning</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance">
                    Dryer choice affects <span style="color:#148af4;">energy cost, linen flow and support after installation</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    The wrong dryer fit can create daily pressure through energy use, slow turnaround, overdrying, room heat, installation limits and service calls. Irish Laundry Systems connects dryer selection, room layout, installation, rental, maintenance, repairs and aftercare into one clear equipment decision.
                </p>
                <a href="#dryer-range"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    See the dryer options we provide
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

{{-- 5. HEAT PUMP ENERGY FEATURE --}}
<section class="py-16 lg:py-24 overflow-hidden bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            {{-- Left: copy --}}
            <div class="reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Energy Performance</p>
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-5">
                    Save <span style="color:#148af4;">65% on energy consumption</span> with Heat Pump Dryer technology
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8 max-w-xl">
                    Heat Pump Dryer technology can reduce drying energy pressure while supporting strong drying performance. For sites where the room setup is suitable, it can also reduce installation pressure by avoiding the need for exhaust or a water cooling system.
                </p>
                <a href="#dryer-range"
                   class="inline-flex items-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    Explore Heat Pump Dryers
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            {{-- Right: proof card --}}
            <div class="reveal reveal-right">
                <div class="bg-bg border border-gray-100 rounded-3xl p-8 lg:p-10">
                    <div class="flex items-baseline gap-3 mb-2">
                        <span class="font-heading font-bold text-[#148af4] text-7xl lg:text-8xl leading-none">65%</span>
                        <span class="font-heading font-bold text-navy text-xl lg:text-2xl leading-tight">energy<br>saving</span>
                    </div>
                    <p class="font-body text-gray-500 text-sm mb-8">Heat Pump Dryer technology in suitable applications</p>
                    <div class="space-y-4">
                        @foreach([
                            ['t' => 'No exhaust needed', 'd' => 'M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636'],
                            ['t' => 'No water cooling system', 'd' => 'M12 21a6.75 6.75 0 01-6.75-6.75c0-3 3.5-7.5 6.75-11.25 3.25 3.75 6.75 8.25 6.75 11.25A6.75 6.75 0 0112 21z'],
                            ['t' => 'Lower installation pressure', 'd' => 'M2.25 6 9 12.75l4.286-4.286a11.948 11.948 0 014.306 6.43l.776 2.898m0 0 3.182-5.511m-3.182 5.51-5.511-3.181'],
                        ] as $mp)
                        <div class="flex items-center gap-3">
                            <span class="flex items-center justify-center w-9 h-9 rounded-full bg-[#148af4]/15 flex-shrink-0">
                                <svg class="w-5 h-5 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $mp['d'] }}"/></svg>
                            </span>
                            <span class="font-body font-semibold text-navy text-base">{{ $mp['t'] }}</span>
                        </div>
                        @endforeach
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
                Choose dryers around the <span style="color:#148af4;">energy and turnaround pressure your laundry room carries every day</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                A dryer decision affects more than the drying cycle. Energy use, drying speed, installation pressure, linen care and rental options all shape the real cost of keeping laundry moving.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-4">
            @foreach([
                ['title' => '35 min drying cycles',       'copy' => 'Heat Pump Dryer performance can protect turnaround time in busy laundry rooms where linen needs to move quickly.'],
                ['title' => '33% lower CO₂ per cycle',     'copy' => 'Heat Pump Dryer technology can reduce greenhouse gas emissions per drying cycle where the equipment and setup are suitable.'],
                ['title' => 'No exhaust / water cooling',  'copy' => 'Selected Heat Pump Dryer options can reduce installation pressure where the room and ventilation setup allow.'],
                ['title' => 'Dry not overdry',             'copy' => 'Moisture Balance protects linen value and reduces wasted energy by stopping at the selected dryness level.'],
                ['title' => 'Lower upfront cost',          'copy' => 'Rental can support dryer replacement, expansion or capacity planning without turning every equipment decision into one large capital purchase.'],
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
                Dryer features that support <span style="color:#148af4;">energy control, fabric care and drying performance</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Selected Electrolux Professional dryer features support lower energy pressure, better fabric protection, clearer operation and more consistent drying when matched to the right laundry room.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-4">
            @foreach([
                ['icon' => '7',  'title' => 'Heat Pump technology',        'copy' => 'Energy-efficient drying with strong drying performance and lower running-cost pressure.', 'badge' => 'Heat Pump'],
                ['icon' => '16', 'title' => 'Moisture Balance',            'copy' => 'Stops at the selected dryness level to protect garments and reduce wasted energy.',        'badge' => 'Moisture Balance'],
                ['icon' => '26', 'title' => 'Drum Speed',                  'copy' => 'Controls fabric movement and mechanical action for different textile types.',             'badge' => 'Drum Speed'],
                ['icon' => '34', 'title' => 'Adaptive Fan',                'copy' => 'Adjusts airflow to the load where available, supporting even drying and lower energy use.', 'badge' => 'Adaptive Fan'],
                ['icon' => '5',  'title' => 'Smart Energy Management',     'copy' => 'Supports energy regulation, clearer programmes and day-to-day operator control.',          'badge' => 'CompassPro'],
            ] as $card)
            <div class="bg-white border border-gray-100 rounded-2xl p-6 flex flex-col items-center text-center gap-3 shadow-card col-span-1">
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

{{-- 8. OPERATOR COMFORT / ERGOCERT --}}
<section class="py-16 lg:py-24 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- Intro + ERGOCERT badge --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center mb-12 lg:mb-16">

            <div class="lg:col-span-7 reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Operator Comfort</p>
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-5">
                    Dryer design built around <span style="color:#148af4;">daily handling, space and operator comfort</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    Drying is repeated work. The right dryer should support loading, unloading, filter access and everyday handling, not just drying capacity.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-7">
                    Line 6000 Tumble Dryers are designed for <strong class="font-bold text-navy">safe, repetitive operation</strong> and are the only dryer range to receive the Ergocert 4-star ergonomic rating.
                </p>
                <a href="{{ route('request-assessment') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    Request Equipment Advice
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            {{-- ERGOCERT logo — frameless, huge --}}
            <div class="lg:col-span-5 flex justify-center lg:justify-end items-center reveal reveal-right">
                <img src="/images/icons/6.png" alt="4-star ERGOCERT — Ergonomics Certifying Institute" class="w-full max-w-sm lg:max-w-md h-auto">
            </div>

        </div>

        {{-- Detailed ergonomic features (2×2) --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 lg:gap-x-16 gap-y-8 lg:gap-y-10 reveal">
            @foreach([
                ['t' => 'Ideal door height',          'd' => 'M8.25 6.75 12 3m0 0 3.75 3.75M12 3v18m-3.75-3.75L12 21l3.75-3.75', 'b' => 'The door sits at an ergonomically suitable height, making a real difference when loading and unloading throughout the day.'],
                ['t' => 'A better grip',               'd' => 'M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75', 'b' => 'The handle design and easy-close magnetic door let operators open and shut the door smoothly, every time.'],
                ['t' => 'Safer insulated glass door',  'd' => 'M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z', 'b' => 'The insulated glass door stays cool on the outside, so there is no risk of burned fingers or hands.'],
                ['t' => 'Easy-access filter drawer',   'd' => 'M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z', 'b' => 'The filter drawer is oriented horizontally for easy access and effortless cleaning, with no need to stoop or bend down.'],
            ] as $pp)
            <div class="flex items-start gap-4">
                <span class="flex items-center justify-center w-12 h-12 rounded-xl bg-[#148af4]/10 flex-shrink-0">
                    <svg class="w-6 h-6 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $pp['d'] }}"/></svg>
                </span>
                <div>
                    <h3 class="font-heading font-bold text-navy text-lg lg:text-xl leading-snug mb-1.5">{{ $pp['t'] }}</h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed">{{ $pp['b'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 9. RANGE TEASERS CAROUSEL --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-2">Dryer Range Starting Points</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Drying paths <span style="color:#148af4;">worth a closer look</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-3xl">
                Start with the dryer route that fits the pressure of your laundry room, then connect the decision to energy use, capacity, installation, rental and long-term support.
            </p>
        </div>

        @php
        $rangeCards = [
            ['name' => 'Line 6000 Tumble Dryers',      'copy' => 'Core commercial dryer range for drying performance, capacity, controls and long-term support.', 'cta' => 'View Dryer Range', 'img' => '/images/equipment/line6000-tumble-dryer.webp'],
            ['name' => 'Heat Pump Dryers',             'copy' => 'For sites focused on reducing energy pressure and installation complexity.', 'cta' => 'Explore Heat Pump Dryers', 'img' => '/images/equipment/line6000-tumble-dryer.webp'],
            ['name' => 'Drying Cabinets',              'copy' => 'For bulky, sensitive or specialist items that need drying without mechanical action.', 'cta' => 'Explore Drying Cabinets', 'img' => '/images/healthcare/Drying-cabinets_image.webp'],
            ['name' => 'myPRO / Semi-Professional Dryers', 'copy' => 'For smaller sites that need more than domestic drying equipment.', 'cta' => 'Discover myPRO', 'img' => '/images/equipment/line6000-tumble-dryer.webp'],
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

{{-- 10. PLANNING / INSTALLATION STRIP --}}
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.85) 15%, rgba(20,138,244,0.3) 55%, transparent 100%);"></div>
    </div>
    <div class="relative z-10 px-10 lg:px-16 py-16 lg:py-24" style="width:100%; max-width:60%;">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Room Planning</p>
        <h2 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight text-balance mb-4">
            Plan drying around the <span style="color:#011E41;">room, energy use</span> and <span style="color:#011E41;">linen flow</span>
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6 max-w-xl">
            A dryer should fit the room, the utilities and the pressure placed on it every day. Irish Laundry Systems connects capacity, ventilation, access, energy use, installation and support before the equipment decision is made.
        </p>
        <div class="flex items-center flex-wrap gap-x-5 gap-y-2 mb-7">
            @foreach(['Room fit', 'Ventilation and utilities', 'Drying capacity and turnaround'] as $i => $pt)
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

{{-- 11. RESOURCES / DOWNLOADS (before the Product Finder) --}}
<section class="py-16 lg:py-24 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">

            {{-- Box 1 — Navy downloads --}}
            <div class="bg-navy rounded-2xl p-7 lg:p-9 flex flex-col">
                <h3 class="font-heading font-bold text-white text-xl lg:text-2xl mb-2">Official Electrolux Professional Downloads</h3>
                <p class="font-body text-white/70 text-sm leading-relaxed mb-6">Access selected product brochures and technical resources before comparing dryer options.</p>
                <ul class="space-y-3 mb-2">
                    @foreach([
                        ['label' => 'Line 6000 Dryers brochure',            'file' => 'EPR-Line6000-DryersBrochure-01072025_EN.pdf'],
                        ['label' => 'Line 6000 Heat Pump Dryers brochure',  'file' => ''],
                        ['label' => 'TD6-11 Heat Pump leaflet',             'file' => ''],
                        ['label' => 'Line 6000 Washers &amp; Dryers brochure', 'file' => 'EPR-brochure-Line 6000 Evolution Barrier Washers-20241119-EN.pdf'],
                    ] as $pdf)
                    <li>
                        @if($pdf['file'])
                        <a href="/pdfs/{{ $pdf['file'] }}" target="_blank" download class="flex items-center gap-2.5 font-body text-sm text-white/85 hover:text-white transition-colors">
                            <svg class="w-4 h-4 flex-shrink-0 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                            {!! $pdf['label'] !!}
                        </a>
                        @else
                        <span class="flex items-center gap-2.5 font-body text-sm text-white/40">
                            <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                            {!! $pdf['label'] !!} <span class="text-[10px] uppercase tracking-wide">(on request)</span>
                        </span>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Box 2 — Related guidance --}}
            <div class="bg-white border border-gray-200 rounded-2xl p-7 lg:p-9 flex flex-col">
                <h3 class="font-heading font-bold text-navy text-xl lg:text-2xl mb-2">Related Equipment Guidance</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-6">Explore connected equipment and support routes before making a dryer decision.</p>
                <ul class="space-y-3">
                    @foreach([
                        ['label' => 'Equipment Rental',            'href' => route('rental')],
                        ['label' => 'Preventive Maintenance',      'href' => route('service-contracts')],
                        ['label' => 'Support &amp; Aftercare',     'href' => route('parts-aftercare')],
                        ['label' => 'Commercial Washing Machines', 'href' => route('equipment.category', 'washers')],
                        ['label' => 'Drying Cabinets',             'href' => route('equipment.category', 'drying-cabinets')],
                    ] as $link)
                    <li>
                        <a href="{{ $link['href'] }}" class="flex items-center gap-2.5 font-body text-sm text-navy hover:text-orange font-semibold transition-colors">
                            <svg class="w-4 h-4 flex-shrink-0 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                            {!! $link['label'] !!}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</section>

{{-- 12. PRODUCT FINDER / DRYER RANGE --}}
<section id="dryer-range" class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Commercial Dryer Range</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Compare dryer options around <span style="color:#148af4;">capacity, energy and support</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Start with drying capacity, then connect the dryer decision to room layout, utilities, energy pressure, fabric care, installation and long-term support.
            </p>
        </div>

        {{-- Dryer families — one card/image per range, filterable by type and capacity (curated by ILS) --}}
        @php
            $dryerFamilies = [
                ['name' => 'TD6 — Line 6000 Tumble Dryer', 'fit' => 'The core Line 6000 commercial tumble dryer, available across the full capacity range for everyday to high-output laundry rooms.', 'kg' => ['6','7','11','14','16','20','30','37','45','60'], 'capLabel' => '6–60 kg', 'models' => 'TD6-6 → TD6-60 (incl. LAC & SLD variants)', 'type' => 'Line 6000', 'img' => '/images/equipment/line6000-tumble-dryer.webp'],
                ['name' => 'Stacked Tumble Dryers', 'fit' => 'Two dryers in one footprint — keeps drying capacity up where floor space is tight.', 'kg' => ['17','24'], 'capLabel' => 'Stacked', 'models' => 'TD6-17S, TD6-24S', 'type' => 'Stacked', 'img' => '/images/equipment/line6000-tumble-dryer.webp'],
                ['name' => 'T-Series Industrial Dryers', 'fit' => 'High-capacity industrial tumble dryers for heavy, continuous daily throughput.', 'kg' => ['45','60'], 'capLabel' => '45–60 kg', 'models' => 'T4900CR, T41200CR', 'type' => 'Industrial', 'img' => '/images/equipment/line6000-tumble-dryer.webp'],
                ['name' => 'Quick & Compact Dryers', 'fit' => 'Compact and quick-dry options for smaller sites and fast turnaround.', 'kg' => [], 'capLabel' => 'Compact', 'models' => 'Quickdry Condense, QuickDry QDC, PD9C', 'type' => 'Compact', 'img' => '/images/equipment/line6000-tumble-dryer.webp'],
            ];

            // derive facet option arrays with counts from the family data (no new copy)
            $typeOpts = []; $capOpts = [];
            foreach($dryerFamilies as $df) {
                $typeOpts[$df['type']] = ($typeOpts[$df['type']] ?? 0) + 1;
                foreach($df['kg'] as $k) { $capOpts[$k] = ($capOpts[$k] ?? 0) + 1; }
            }
            $capOrder = ['6','7','11','14','16','17','20','24','30','37','45','60'];
            $famJs = array_map(fn($df) => ['type' => $df['type'], 'kg' => $df['kg']], $dryerFamilies);
        @endphp

        <div x-data="{
                type: [],
                capacity: [],
                families: {{ \Illuminate\Support\Js::from($famJs) }},
                matches(f) {
                    const t   = this.type.length === 0 || this.type.includes(f.type);
                    const cap = this.capacity.length === 0 || (f.kg && f.kg.some(k => this.capacity.includes(k)));
                    return t && cap;
                },
                get count() { return this.families.filter(f => this.matches(f)).length; },
                clearAll() { this.type = []; this.capacity = []; },
             }"
             class="grid grid-cols-1 lg:grid-cols-[260px_1fr] gap-8 lg:gap-10 items-start">

            {{-- LEFT: filter sidebar --}}
            <aside class="lg:sticky lg:top-28 self-start border border-gray-200 rounded-xl p-5">
                <div class="flex items-center justify-between">
                    <span class="font-heading font-bold text-navy text-xs uppercase tracking-[0.16em]">Filter Products</span>
                    <button @click="clearAll()" class="font-body text-xs text-[#148af4] hover:underline">Reset all</button>
                </div>

                {{-- Dryer Type --}}
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <p class="font-heading font-bold text-navy text-sm mb-3">Dryer Type</p>
                    <div class="space-y-2.5">
                        @foreach($typeOpts as $val => $cnt)
                        <label class="flex items-center justify-between cursor-pointer group">
                            <span class="flex items-center gap-2.5">
                                <input type="checkbox" value="{{ $val }}" x-model="type" class="w-4 h-4 rounded border-gray-300 accent-[#148af4] cursor-pointer">
                                <span class="font-body text-sm text-gray-600 group-hover:text-navy transition-colors">{{ $val }}</span>
                            </span>
                            <span class="font-body text-xs text-gray-400">{{ $cnt }}</span>
                        </label>
                        @endforeach
                    </div>
                </div>

                {{-- Capacity --}}
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <p class="font-heading font-bold text-navy text-sm mb-3">Capacity</p>
                    <div class="space-y-2.5">
                        @foreach($capOrder as $k)
                        @if(isset($capOpts[$k]))
                        <label class="flex items-center justify-between cursor-pointer group">
                            <span class="flex items-center gap-2.5">
                                <input type="checkbox" value="{{ $k }}" x-model="capacity" class="w-4 h-4 rounded border-gray-300 accent-[#148af4] cursor-pointer">
                                <span class="font-body text-sm text-gray-600 group-hover:text-navy transition-colors">{{ $k.' kg' }}</span>
                            </span>
                            <span class="font-body text-xs text-gray-400">{{ $capOpts[$k] }}</span>
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
                    @foreach($dryerFamilies as $f)
                    <div x-show="matches({{ \Illuminate\Support\Js::from(['type'=>$f['type'],'kg'=>$f['kg']]) }})" class="flex flex-col">
                        <div class="flex items-center justify-center h-44 lg:h-48 mb-5">
                            <img src="{{ $f['img'] }}" alt="{{ $f['name'] }}" class="max-h-full w-auto object-contain transition-transform duration-300 hover:-translate-y-1.5">
                        </div>
                        <p class="font-body text-xs mb-1.5"><span class="font-bold text-[#148af4]">{{ $f['type'] }}</span><span class="text-gray-400"> &middot; {{ $f['capLabel'] }}</span></p>
                        <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $f['name'] }}</h3>
                        <p class="font-body text-gray-500 text-sm leading-relaxed mb-4">{{ $f['fit'] }}</p>
                        @if(count($f['kg']))
                        <div class="flex flex-wrap gap-1.5 mb-3">
                            @foreach($f['kg'] as $k)
                            <span class="font-body text-[10px] font-bold uppercase tracking-wide text-[#148af4] bg-[#148af4]/10 px-2 py-1 rounded">{{ $k.' kg' }}</span>
                            @endforeach
                        </div>
                        @endif
                        <p class="font-body text-xs text-gray-400 mb-5">{{ $f['models'] }}</p>
                        <div class="mt-auto flex flex-col gap-2.5">
                            <a href="{{ route('request-assessment') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/></svg>
                                Request Advice on This Model
                            </a>
                            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 border border-gray-300 text-navy hover:border-navy font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                                View Details
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- Empty state --}}
                <div x-show="count === 0" x-cloak class="text-center py-16">
                    <p class="font-body text-gray-500 text-base">No dryers match that combination. <button @click="clearAll()" class="text-[#148af4] font-bold hover:underline">Clear filters</button> or <a href="{{ route('contact') }}" class="text-[#148af4] font-bold hover:underline">talk to our team</a>.</p>
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
            Not sure which dryer fits? Irish Laundry Systems can assess capacity, room setup, installation, rental and support options before a final recommendation.
        </p>
    </div>
</section>

{{-- 13. CONNECTED SERVICE ROUTES --}}
<section class="py-16 lg:py-20 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Connected Support</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Support routes that keep <span style="color:#148af4;">dryer decisions moving</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Commercial dryer performance depends on more than the first installation. Irish Laundry Systems connects equipment access, planned maintenance, repairs and aftercare around the way the laundry room operates.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                [
                    'title' => 'Equipment Rental',
                    'text'  => 'Lower upfront cost for dryer replacement, capacity planning or expansion where rental is the right fit.',
                    'cta'   => 'See Rental Options',
                    'route' => route('rental'),
                    'img'   => '/images/healthcare/commercial-industrial.jpg',
                    'pos'   => 'center center',
                ],
                [
                    'title' => 'Preventive Maintenance',
                    'text'  => 'Planned dryer servicing to reduce surprise repair pressure and keep filter, ventilation and service needs visible.',
                    'cta'   => 'View Maintenance Options',
                    'route' => route('service-contracts'),
                    'img'   => '/images/healthcare/service-contracts-hero.png',
                    'pos'   => '90% 35%',
                ],
                [
                    'title' => 'Repairs &amp; Call-outs',
                    'text'  => 'Service and breakdown support when dryer faults interrupt linen flow, drying capacity or daily turnaround.',
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

{{-- 14. RENTAL / CAPITAL PRESSURE STRIP --}}
@include('components.why-choose-strip', [
    'headingLine1' => 'Keep drying performance moving with',
    'headingLine2' => '<span style="color:#148af4;">lower upfront cost</span>',
    'body'         => 'For sites facing dryer replacement, capacity needs or ageing equipment, rental can keep laundry moving without turning every equipment decision into one large capital purchase.',
    'miniPoints'   => ['Lower upfront cost', 'Installation and support available', 'Service and breakdown support included under rental terms'],
    'miniNowrap'   => true,
])

{{-- 15. COMPACT AFTER-INSTALLATION SUPPORT BAND --}}
<section class="py-12 lg:py-16 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-7">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">After Installation</p>
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
                    Keep dryer decisions <span style="color:#148af4;">connected after installation</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-5 max-w-2xl">
                    Irish Laundry Systems connects planned maintenance, service history, service and breakdown support and parts access where needed, so dryer decisions stay clear after installation, rental, repair or inspection.
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

{{-- 16. TESTIMONIAL MODULE --}}
@include('components.testimonials', [
    'eyebrow'    => 'Customer Trust',
    'heading'    => 'Trusted support behind <span style="color:#148af4;">commercial laundry decisions</span>',
    'subheading' => 'Commercial tumble dryer decisions affect energy use, linen flow, staff routines and daily output. Irish Laundry Systems is trusted by organisations that need clear communication, responsive support and equipment knowledge after the machine is on site.',
])

{{-- 17. TRUSTED BY LOGO STRIP --}}
@include('components.proof-bar')

{{-- 18. FAQ --}}
@include('components.faq', [
    'eyebrow' => 'Commercial Dryer FAQs',
    'heading' => 'Clear answers before the <span style="color:#148af4;">dryer decision</span>',
    'faqs' => [
        ['question' => 'What size commercial tumble dryer do I need?', 'answer' => 'The right size depends on daily laundry volume, washer capacity, textile type, peak demand, room layout, utilities and required turnaround time. Irish Laundry Systems can assess the site before recommending a dryer range or model.'],
        ['question' => 'Can Heat Pump Dryers reduce energy use?', 'answer' => 'Yes. Selected Heat Pump Dryer options can reduce energy consumption significantly compared with traditional vented dryers, while supporting strong drying performance.'],
        ['question' => 'Do Heat Pump Dryers need exhaust or water cooling?', 'answer' => 'Selected Heat Pump Dryer options can reduce the need for exhaust or water cooling, depending on the room setup and ventilation conditions.'],
        ['question' => 'What is Moisture Balance?', 'answer' => 'Moisture Balance measures the moisture level during drying and stops at the selected dryness level, protecting fabrics and reducing wasted energy.'],
        ['question' => 'Can dryer choice protect linen quality?', 'answer' => 'Yes. Features such as Moisture Balance and Drum Speed can support better fabric care by reducing overdrying and controlling mechanical action.'],
        ['question' => 'Can I rent a commercial tumble dryer?', 'answer' => 'Yes. Rental may be suitable for sites looking for lower upfront cost, replacement support or capacity expansion. Service and breakdown support is included under rental terms.'],
        ['question' => 'Do you install and support commercial tumble dryers?', 'answer' => 'Yes. Irish Laundry Systems supplies, installs and supports commercial laundry equipment across Ireland, with planned maintenance, repairs and aftercare options available.'],
    ],
])

{{-- 19. FINAL CTA --}}
<section class="py-16 lg:py-24" style="background-color:#011E41;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 text-center">
        <h2 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight text-balance mb-4 max-w-4xl mx-auto">
            Need the <span style="color:#148af4;">right dryer decision</span> for your laundry room?
        </h2>
        <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl mx-auto">
            Talk to Irish Laundry Systems about dryer capacity, energy pressure, installation, rental, maintenance and support options.
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
