@extends('layouts.app')

@section('pageTitle', 'Laundry Dosing Systems Ireland | Detergents & Accessories')

@section('meta')
<meta name="description" content="Control detergent use, wash results and daily laundry costs with Electrolux Professional dosing systems, eco-detergents, storage and accessories, supplied and supported by Irish Laundry Systems.">
@endsection

@section('content')

{{-- 1. HERO --}}
<section class="relative overflow-hidden flex flex-col lg:!h-[720px]" style="height:auto; min-height:560px;">
    <img src="/images/shared/Line 6000 solutions products_72dpi.jpg" alt="Laundry dosing systems, detergents and accessories"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.75) 42%, rgba(1,30,65,0.35) 65%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 sm:py-20 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-3xl">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Laundry Cost Control</p>
                <h1 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-6">
                    Control detergent use, wash quality and <span style="color:#148af4;">daily laundry costs</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    Irish Laundry Systems helps commercial laundry rooms choose the right dosing, detergent and accessory support for everyday use.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Laundry Control Advice
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white hover:border-white/70 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        Ask About Dosing Systems
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
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Why It Matters</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    Small dosing mistakes<br>can create<br><span style="color:#148af4;">bigger laundry costs</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    Too much detergent, the wrong product or poor storage can lead to wasted product, inconsistent wash quality, repeat washing, textile damage and avoidable service pressure.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Irish Laundry Systems helps match dosing systems, eco-detergents, storage and accessories to the way your laundry is used every day.
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

{{-- 4. FINANCIAL & OPERATIONAL PROOF --}}
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Cost Control Proof</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Control the costs <span style="color:#148af4;">built into every wash</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                Detergent use, water, energy, repeat washing, textile quality and maintenance all affect the real cost of a laundry room over time.
            </p>
        </div>

        @include('components.financial-metrics', ['items' => [
            ['icon'=>'30', 'prefix'=>'Up to',     'stat'=>'90%',                'size'=>'text-4xl', 'label'=>'Life-cycle cost sits in use', 'iconClass'=>'scale-[1.03] -translate-y-[6.7%]', 'body'=>'Electrolux links this cost to energy, water and chemicals over machine life.'],
            ['icon'=>'dosing-control', 'prefix'=>'Up to',  'stat'=>'30%',       'size'=>'text-4xl', 'label'=>'Detergent cost savings', 'iconClass'=>'scale-[1.051] -translate-y-[7.5%]', 'body'=>'Efficient Dosing helps reduce detergent costs on suitable Electrolux Professional setups.'],
            ['icon'=>'164','prefix'=>'',          'stat'=>'Wash<br>Quality',    'size'=>'text-2xl', 'label'=>'Cycle Consistency', 'iconClass'=>'scale-[0.836] translate-y-[0.3%]', 'body'=>'The right dose for each programme helps maintain consistent wash results across daily loads.'],
            ['icon'=>'239','prefix'=>'',          'stat'=>'Lower<br>Maintenance','size'=>'text-2xl', 'label'=>'Fewer Parts', 'iconClass'=>'scale-[1.108] -translate-y-[1.2%]', 'body'=>'Water-powered pumps reduce moving parts and replacement needs.'],
            ['icon'=>'193','prefix'=>'',          'stat'=>'Textile<br>Care',    'size'=>'text-2xl', 'label'=>'Equipment Protection', 'iconClass'=>'scale-[1.273] -translate-y-[0.2%]', 'body'=>'Controlled detergent use helps protect textiles and equipment.'],
        ]])
    </div>
</section>

{{-- 5. LAUNDRY CONTROL SETUP (dose + detergent + storage + support) --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-12 lg:mb-14 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Detergent Control</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3 lg:whitespace-nowrap">
                Plan detergent control across <span style="color:#148af4;">the complete wash setup</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                Washer data, automatic dosing, selected detergents and safe storage work together to control chemical use and wash costs.
            </p>
        </div>

        {{-- Setup flow mirroring the Electrolux slide: washer + dosing unit + detergents (stacked) + storage cabinet, joined by plus signs at mid-height --}}
        @php
        $setupSteps = [
            ['n' => '01', 'label' => 'Washer',        'body' => 'Load weight and programme data provide the basis for accurate detergent dosing.',        'imgs' => ['/images/pages/commercial-washers/commercialwasher.webp'], 'imgClass' => 'max-h-full'],
            ['n' => '02', 'label' => 'Dosing System', 'body' => 'Calculates and delivers the right detergent quantity for each load.',                     'imgs' => ['/images/pages/accessories/dosing-unit.png'], 'imgClass' => 'max-h-[110px]'],
            ['n' => '03', 'label' => 'Detergents',    'body' => 'Selected products support the textiles, hygiene requirements and wash results needed.',   'imgs' => ['/images/pages/accessories/l02-laundry-eco-wash.webp', '/images/pages/accessories/l06-laundry-swan-wash.jpg'], 'imgClass' => 'max-h-[118px]'],
            ['n' => '04', 'label' => 'Safe Storage',  'body' => 'Keeps dosing equipment and detergent containers organised, contained and accessible.',    'imgs' => ['/images/pages/accessories/dispenseringreycabinet.png'], 'imgClass' => 'max-h-full'],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-14 reveal">
            @foreach($setupSteps as $s)
            <div class="flex flex-col items-center text-center">
                <div class="relative w-full flex flex-col items-center justify-center gap-2 mb-5" style="height:260px;">
                    @unless($loop->last)
                    <div class="hidden lg:flex absolute inset-y-0 items-center justify-center w-14" style="right:-56px;" aria-hidden="true">
                        <span class="font-heading font-bold text-navy text-4xl leading-none select-none">+</span>
                    </div>
                    @endunless
                    @foreach($s['imgs'] as $img)
                    <img src="{{ $img }}" alt="{{ $s['label'] }}" loading="lazy" decoding="async" class="{{ $s['imgClass'] }} w-auto object-contain">
                    @endforeach
                </div>
                <p class="font-heading font-bold text-[#148af4] text-sm tracking-[0.16em] mb-1">{{ $s['n'] }}</p>
                <h3 class="font-heading font-bold text-navy text-lg mb-2">{{ $s['label'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed max-w-[260px]">{{ $s['body'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="mt-10 reveal">
            <a href="{{ route('request-assessment') }}"
               class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                Plan Your Detergent Setup
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

{{-- 6. DOSING SYSTEM OPTIONS / TABS (Alpine carousel) --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Dosing System Options</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3 lg:whitespace-nowrap">
                Compare dosing systems by <span style="color:#148af4;">washer setup and control needs</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                Review Electrolux Professional options for single or multiple washers, load-based dosing and simpler detergent management.
            </p>
        </div>

        @php
        $dosingProducts = [
            [
                'name'  => 'Intelligent Dosing',
                'small' => 'Compatible ClarusVibe washers',
                'title' => 'Dose by the load inside the drum',
                'body'  => 'Automatically adjusts detergent and chemicals to the load weight on compatible Electrolux Professional washers.',
                'chips' => ['Load-weight based', 'Consistent quality', 'Less manual judgement'],
                'cta'   => 'Ask About Intelligent Dosing',
                'img'   => '/images/shared/efficientDosing_equip.webp',
            ],
            [
                'name'  => 'Efficient Dosing',
                'small' => 'Suitable washer extractors',
                'title' => 'Adjust detergent to the real load',
                'body'  => 'Measures the load at the start of the programme and adjusts detergent use to match the cycle.',
                'chips' => ['Real load measured', 'Less overuse', 'Cost control'],
                'cta'   => 'Ask About Efficient Dosing',
                'img'   => '/images/shared/efficientDosing_equip.webp',
            ],
            [
                'name'  => 'Multisave',
                'small' => 'Multi-washer laundry rooms',
                'title' => 'One unit for multiple washers',
                'body'  => 'Connects up to seven washing machines with one unit for simpler dosing control.',
                'chips' => ['Up to 7 washers', 'Multi-machine control', 'Controlled consumption'],
                'cta'   => 'Ask About Multisave',
                'img'   => '/images/shared/MultisaveEQUIP.webp',
            ],
            [
                'name'  => 'JETSAVE',
                'small' => 'Water-powered dosing',
                'title' => 'Lower-maintenance dosing control',
                'body'  => 'Uses water-powered pumps with no moving parts or squeeze tubes to replace.',
                'chips' => ['Water-powered pumps', 'Fewer wear points', 'Lower maintenance'],
                'cta'   => 'Ask About JETSAVE',
                'img'   => '/images/shared/JetsaveEQUIP.webp',
            ],
            [
                'name'  => 'DOSAVE',
                'small' => 'Peristaltic dosing',
                'title' => 'Programmable dosing support',
                'body'  => 'A peristaltic dosing option for easy connection, programming and controlled detergent delivery.',
                'chips' => ['Peristaltic pumps', 'Easy programming', 'Controlled delivery'],
                'cta'   => 'Ask About DOSAVE',
                'img'   => '/images/shared/DOSAVEEQUIP.webp',
            ],
        ];
        @endphp

        <div
            x-data="{
                active: 0,
                count: 5,
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
                    @if($i > 0) x-cloak @endif
                >
                    <div class="grid grid-cols-1 lg:grid-cols-12" style="min-height:420px;">

                        {{-- Left: context photo --}}
                        <div class="lg:col-span-3 overflow-hidden pt-8 lg:pt-10" style="align-self:start;">
                            <img src="/images/shared/Laundry-Double-Banner-965x965-1.webp"
                                 alt="Electrolux Professional laundry equipment"
                                 class="w-full object-cover object-center" style="height:260px;">
                        </div>

                        {{-- Right: tabs indicator + copy + unit image --}}
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
                                    <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.18em] mb-2">{{ $p['small'] }}</p>
                                    <h3 class="font-heading font-bold text-navy text-2xl leading-snug mb-3">{{ $p['title'] }}</h3>
                                    <p class="font-body text-gray-600 text-base leading-relaxed mb-5">{{ $p['body'] }}</p>
                                    <div class="flex flex-wrap gap-2 mb-6">
                                        @foreach($p['chips'] as $chip)
                                        <span class="font-body text-xs font-bold uppercase tracking-wide text-navy/70 bg-navy/[0.06] px-3 py-1.5 rounded-full">{{ $chip }}</span>
                                        @endforeach
                                    </div>
                                    <a href="{{ route('contact') }}"
                                       class="inline-flex items-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-heading font-bold text-sm px-5 py-3 rounded-lg transition-colors">
                                        {{ $p['cta'] }}
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                                    </a>
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

        {{-- Compatibility note --}}
        <p class="font-body text-gray-400 text-sm mt-6 text-center reveal">
            Compatibility depends on washer model, control system, laundry room layout and existing setup. Irish Laundry Systems can advise which dosing route is suitable.
        </p>

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

{{-- 7. PRODUCT / RANGE SECTION --}}
<section class="py-16 lg:py-24 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Product Range</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Explore detergents, storage and <span style="color:#148af4;">laundry room accessories</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                Browse products for detergent use, chemical organisation and everyday laundry room handling.
            </p>
        </div>

        @php
        $rangeCards = [
            [
                'name'    => 'Eco-Detergents',
                'topLine' => 'For quality wash results and textile care',
                'copy'    => 'Electrolux Professional eco-range detergents support high-quality wash results, textile care and lower environmental impact where applicable.',
                'badges'  => ['EU Ecolabel', 'Dermatologically tested', 'Textile care'],
                'cta'     => 'Ask About Detergents',
                'img'     => '/images/pages/accessories/eco-detergents.webp',
            ],
            [
                'name'    => 'Detergent Storage',
                'topLine' => 'For safer chemical organisation',
                'copy'    => 'Electrolux Professional Detergent Storage helps keep canisters, dosing pumps and relevant items organised, safer and easier to manage.',
                'badges'  => ['Canister storage', 'Pump support', 'Safer handling'],
                'cta'     => 'Ask About Storage',
                'img'     => '/images/pages/accessories/dispenseringreycabinet.png',
            ],
            [
                'name'    => 'Laundry Room Accessories',
                'topLine' => 'For daily laundry room support',
                'copy'    => 'Electrolux Professional accessories and consumables support sorting, transport, handling and everyday laundry room use.',
                'badges'  => ['Baskets', 'Racks & trolleys', 'Cleaning essentials'],
                'cta'     => 'Ask About Accessories',
                'img'     => '/images/pages/accessories/trolleys-and-racks.webp',
            ],
        ];
        @endphp

        <div class="space-y-16 lg:space-y-24">
            @foreach($rangeCards as $i => $card)
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center reveal">

                {{-- Text side --}}
                <div class="{{ $i % 2 === 1 ? 'lg:order-2' : '' }}">
                    <p class="font-body text-xs font-bold uppercase tracking-[0.18em] text-[#148af4] mb-3">{{ $card['topLine'] }}</p>
                    <h3 class="font-heading font-bold text-navy text-3xl sm:text-4xl leading-tight text-balance mb-4">{{ $card['name'] }}</h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6 max-w-xl">{{ $card['copy'] }}</p>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-2.5 mb-8 max-w-xl">
                        @foreach($card['badges'] as $b)
                        <li class="flex items-center gap-2 font-body text-gray-600 text-base">
                            <svg class="w-5 h-5 text-[#148af4] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            {{ $b }}
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-heading font-bold text-sm px-6 py-3.5 rounded-lg transition-colors">
                            {{ $card['cta'] }}
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('request-assessment') }}" class="inline-flex items-center justify-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-heading font-bold text-sm px-6 py-3.5 rounded-lg transition-colors">
                            Request Advice
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>

                {{-- Image side --}}
                <div class="{{ $i % 2 === 1 ? 'lg:order-1' : '' }} flex items-center justify-center">
                    <img src="{{ $card['img'] }}" alt="{{ $card['name'] }}" loading="lazy" decoding="async"
                         class="w-auto object-contain" style="max-height:300px; max-width:100%;">
                </div>

            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 7a. COMPACT RESOURCES BAR (detergent brochures + quick links, follows the product range) --}}
<section class="py-8 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 lg:gap-10">
            @foreach([
                ['title' => 'Detergent Brochures', 'links' => [
                    ['l' => 'Detergents, Dosing Systems & Storage leaflet', 'h' => '/pdfs/EPR-leaflet-DetergentsDosingSystems-Storage_singlepageview.pdf'],
                    ['l' => 'L00 Laundry Eco Degreaser', 'h' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2022/02/COMBINED-L00-Laundry-Eco-Degreaser.pdf'],
                    ['l' => 'L01 Laundry Eco Powder',    'h' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2021/11/COMBINED-L01-Laundry-Eco-Powder.pdf'],
                    ['l' => 'L02 Laundry Eco Wash',      'h' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2021/11/COMBINED-L02-Laundry-Eco-Wash.pdf'],
                    ['l' => 'L03 Laundry Eco Booster',   'h' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2021/11/COMBINED-L03-Laundry-Eco-Booster.pdf'],
                    ['l' => 'L04 Laundry Eco Bleach',    'h' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2021/11/COMBINED-L04-Laundry-Eco-Bleach.pdf'],
                    ['l' => 'L05 Laundry Eco Softener',  'h' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2021/11/COMBINED-L05-Laundry-Eco-Softener.pdf'],
                ]],
                ['title' => 'Dosing & Storage', 'links' => [
                    ['l' => 'Dosing Systems', 'h' => route('contact')],
                    ['l' => 'Detergent Storage', 'h' => route('contact')],
                    ['l' => 'Product resources', 'h' => route('resources')],
                ]],
                ['title' => 'Advice & Support', 'links' => [
                    ['l' => 'Request dosing advice', 'h' => route('request-assessment')],
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

{{-- 8. FAMILY 1 — LINE 6000 ECO-RANGE (core detergents + stain care & descaling) --}}
<section class="py-12 lg:py-16 bg-gray-50 border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-10 lg:mb-14 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Line 6000 Eco-Range</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-5">
                Certified detergents for <span style="color:#148af4;">quality wash results and textile care</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed mb-6 lg:whitespace-nowrap">
                Electrolux Professional Line 6000 eco-range detergents are developed for high-quality, safe and effective washing while helping reduce environmental impact.
            </p>
            <div class="flex flex-wrap gap-2 mb-8">
                @foreach(['EU Ecolabel', 'Dermatologically tested', 'Hypoallergenic', 'Textile care'] as $proof)
                <span class="font-body text-xs font-bold uppercase tracking-wide text-navy/70 bg-navy/[0.06] px-3 py-1.5 rounded-full">{{ $proof }}</span>
                @endforeach
            </div>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                Ask About Eco-Detergents
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>

        @php
        $detergentGroups = [
            [
                'label' => 'Core Detergents',
                'body'  => 'A practical eco-detergent range for commercial laundry sites that need washing, degreasing, boosting, bleaching and softening support.',
                'certs' => [
                    ['icon' => 'eu-ecolabel-logo.png',             'label' => 'EU Ecolabel'],
                    ['icon' => 'icon-dermatologically-tested.png', 'label' => 'Dermatologically tested'],
                    ['icon' => 'icon-hypoallergenic.png',          'label' => 'Hypoallergenic'],
                ],
                'cols' => 'lg:grid-cols-3',
                'products' => [
                    ['name' => 'L00 – Laundry Eco Degreaser', 'sheet' => 'L00 Product & Safety Sheet', 'img' => 'l00-laundry-eco-degreaser.webp', 'href' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2022/02/COMBINED-L00-Laundry-Eco-Degreaser.pdf'],
                    ['name' => 'L01 – Laundry Eco Powder',    'sheet' => 'L01 Product & Safety Sheet', 'img' => 'l01-laundry-eco-powder.webp',    'href' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2021/11/COMBINED-L01-Laundry-Eco-Powder.pdf'],
                    ['name' => 'L02 – Laundry Eco Wash',      'sheet' => 'L02 Product & Data Sheet',   'img' => 'l02-laundry-eco-wash.webp',      'href' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2021/11/COMBINED-L02-Laundry-Eco-Wash.pdf'],
                    ['name' => 'L03 – Laundry Eco Booster',   'sheet' => 'L03 Product & Safety Sheet', 'img' => 'l03-laundry-eco-booster.webp',   'href' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2021/11/COMBINED-L03-Laundry-Eco-Booster.pdf'],
                    ['name' => 'L04 – Laundry Eco Bleach',    'sheet' => 'L04 Product & Safety Sheet', 'img' => 'l04-laundry-eco-bleach.webp',    'href' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2021/11/COMBINED-L04-Laundry-Eco-Bleach.pdf'],
                    ['name' => 'L05 – Laundry Eco Softener',  'sheet' => 'L05 Product & Safety Sheet', 'img' => 'l05-laundry-eco-softener.webp',  'href' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2021/11/COMBINED-L05-Laundry-Eco-Softener.pdf'],
                ],
            ],
            [
                'label' => 'Stain Care &amp; Descaling',
                'body'  => 'Selected laundry care products can support stain treatment, prebrushing and descaling as part of a wider laundry setup.',
                'certs' => [],
                'cols' => 'lg:grid-cols-3',
                'products' => [
                    ['name' => 'Prespotting and Prebrushing agents', 'img' => 'prespotting-prebrushing-agents.png'],
                    ['name' => 'Descaling agent',                    'img' => 'descaling-agent.png'],
                ],
            ],
        ];
        @endphp

        <div class="space-y-8">
            @foreach($detergentGroups as $grp)
            <div class="bg-white rounded-2xl border border-gray-100 p-6 sm:p-8 lg:p-10 reveal">

                {{-- Group header: label + body + certification labels --}}
                <div class="mb-8">
                    <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">{!! $grp['label'] !!}</p>
                    <p class="font-body text-gray-500 text-base leading-relaxed {{ empty($grp['certs']) ? '' : 'mb-6' }} lg:whitespace-nowrap">{{ $grp['body'] }}</p>
                    <div class="flex flex-wrap items-start justify-center gap-x-14 gap-y-6">
                        @foreach($grp['certs'] as $cert)
                        <div class="flex flex-col items-center text-center gap-3">
                            <img src="{{ asset('images/pages/accessories/'.$cert['icon']) }}" alt="{{ $cert['label'] }}"
                                 loading="lazy" decoding="async" class="h-20 lg:h-24 w-auto object-contain">
                            <span class="font-body font-bold text-navy/70 text-sm uppercase tracking-wide">{{ $cert['label'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Product grid — image and label sizing mirrors the Electrolux reference (3 columns, large canisters) --}}
                <div class="grid grid-cols-2 sm:grid-cols-3 {{ $grp['cols'] }} gap-x-6 gap-y-10">
                    @foreach($grp['products'] as $prod)
                    @if(!empty($prod['href']))
                    <a href="{{ $prod['href'] }}" target="_blank" rel="noopener" class="group flex flex-col items-center text-center">
                    @else
                    <div class="flex flex-col items-center text-center">
                    @endif
                        <div class="flex items-end justify-center h-40 lg:h-48 mb-4">
                            <img src="{{ asset('images/pages/accessories/'.$prod['img']) }}" alt="{{ $prod['name'] }}"
                                 loading="lazy" decoding="async"
                                 class="max-h-full w-auto object-contain transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <p class="font-heading font-bold text-navy text-base lg:text-lg leading-snug">{{ $prod['name'] }}</p>
                        @if(!empty($prod['href']))
                        <span class="font-body font-semibold text-[#148af4] text-sm mt-1.5 group-hover:underline">{{ $prod['sheet'] }}</span>
                        @endif
                    @if(!empty($prod['href']))
                    </a>
                    @else
                    </div>
                    @endif
                    @endforeach
                </div>

            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 8b. FAMILY 2 — myPRO CLEANSTAR CONSUMABLES --}}
<section id="detergents-by-laundry-setup" class="py-12 lg:py-16 bg-white border-t border-gray-100 scroll-mt-28">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">myPRO Cleanstar Consumables</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight mb-3 lg:whitespace-nowrap">
                Detergents for <span style="color:#148af4;">semi-professional laundry</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                For smaller myPRO laundry setups that need suitable detergents for everyday washing, garment care and semi-professional use.
            </p>
        </div>

        <div class="space-y-8">

            <div class="reveal">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
                    @foreach([
                        ['name' => 'Gentle Wash',  'img' => 'cleanstar-gentle-wash.png',  'spec' => 'With its formulation derived from vegetable raw material, Cleanstar Gentle Wash gently cleans delicate garments restoring their original softness.'],
                        ['name' => 'Soft Touch',   'img' => 'cleanstar-soft-touch.png',   'spec' => 'Cleanstar Soft Touch restores elasticity and softness to the fibres of your garments; it makes ironing easier and prevents buildup of static electricity.'],
                        ['name' => 'Green liquid', 'img' => 'cleanstar-green-liquid.png', 'spec' => 'Biodegradable, Cleanstar Green Liquid is an innovative detergent containing vegetal raw material surfactants; it efficiently removes stains while preserving colours and being gentle to the fibres.'],
                        ['name' => 'Wash liquid',  'img' => 'cleanstar-wash-liquid.png',  'spec' => 'With its formulation derived from vegetable raw material, Cleanstar Wash Liquid cleans everyday garments while staying gentle on fabrics.'],
                        ['name' => 'Magic white',  'img' => 'cleanstar-magic-white.png',  'spec' => 'Already active at low temperature, Cleanstar Magic White removes stains and whitens your garments without damaging them.'],
                        ['name' => 'Wash powder',  'img' => 'cleanstar-wash-powder.png',  'spec' => 'Thanks to its enhanced formulation that combines surfactants and active oxygen, Cleanstar Wash Powder removes the most stubborn stains.'],
                    ] as $cs)
                    <div class="bg-white rounded-xl border border-gray-100 p-6 lg:p-8 flex flex-col items-center text-center">
                        <div class="flex items-center justify-center h-28 lg:h-32 mb-4">
                            <img src="{{ asset('images/pages/accessories/'.$cs['img']) }}" alt="Cleanstar {{ $cs['name'] }}"
                                 loading="lazy" decoding="async" class="max-h-24 lg:max-h-28 w-auto object-contain">
                        </div>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $cs['spec'] }}</p>
                    </div>
                    @endforeach
                </div>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    Ask About myPRO Consumables
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

{{-- 8c. FAMILY 3 — lagoon ADVANCED CARE PRODUCTS --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">lagoon Advanced Care Products</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight mb-3 lg:whitespace-nowrap">
                Products for <span style="color:#148af4;">professional wet cleaning</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                For specialist wet cleaning setups that need dedicated detergents, conditioner, stain-care products and colour transfer support.
            </p>
        </div>

        <div class="space-y-8">

            <div class="reveal">

                {{-- Subgroups side by side — column widths track the product count (5 / 3 / 1) --}}
                <div class="grid grid-cols-1 lg:grid-cols-9 gap-y-10 mb-10">
                    @foreach([
                        ['step' => 'Prespotting agents', 'span' => 'lg:col-span-5', 'items' => [
                            ['name' => 'A01 – lagoon Pre-Treatment',           'img' => 'lagoon-a01-pre-treatment.png'],
                            ['name' => 'P01 – lagoon Protein Stain Remover',   'img' => 'lagoon-p01-protein-stain-remover.png'],
                            ['name' => 'P02 – lagoon Tannin Stain Remover',    'img' => 'lagoon-p02-tannin-stain-remover.png'],
                            ['name' => 'P03 – lagoon Grease Stain Remover',    'img' => 'lagoon-p03-grease-stain-remover.png'],
                            ['name' => 'P04 – lagoon Ink Stain Remover',       'img' => 'lagoon-p04-ink-stain-remover.png'],
                        ]],
                        ['step' => 'Dedicated detergents', 'span' => 'lg:col-span-3', 'items' => [
                            ['name' => 'W01 – lagoon Sensitive Detergent',     'img' => 'lagoon-w01-sensitive-detergent.png'],
                            ['name' => 'W02 – lagoon Delicate Detergent',      'img' => 'lagoon-w02-delicate-detergent.png'],
                            ['name' => 'A02 – lagoon Colour Transfer Reducer', 'img' => 'lagoon-a02-colour-transfer-reducer.png'],
                        ]],
                        ['step' => 'Fabric conditioner', 'span' => 'lg:col-span-1', 'items' => [
                            ['name' => 'W03 – lagoon Sensitive Conditioner',   'img' => 'lagoon-w03-sensitive-conditioner.png'],
                        ]],
                    ] as $lgrp)
                    <div class="{{ $lgrp['span'] }} px-0 lg:px-6 {{ $loop->first ? '' : 'lg:border-l lg:border-gray-200' }}">
                        <p class="font-heading font-bold text-navy text-base mb-4">{!! $lgrp['step'] !!}</p>
                        <div class="flex flex-wrap gap-x-7 gap-y-6">
                            @foreach($lgrp['items'] as $it)
                            <div class="flex flex-col items-center text-center w-28">
                                <div class="flex items-end justify-center h-32 mb-2">
                                    <img src="{{ asset('images/pages/accessories/'.$it['img']) }}" alt="{{ $it['name'] }}"
                                         loading="lazy" decoding="async" class="h-full w-auto object-contain">
                                </div>
                                <p class="font-heading font-bold text-navy text-xs leading-snug">{{ $it['name'] }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="text-center">
                    <a href="{{ route('equipment.category', 'wet-cleaning') }}"
                       class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                        Ask About Lagoon Products
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- 8d. CUSTOMER-FACING CERTIFICATE BLOCK --}}
<section class="py-12 lg:py-16 bg-gray-50 border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            <div class="reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Customer-Facing Confidence</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-5">
                    Show customers your laundry uses <span style="color:#148af4;">certified eco-detergents</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Sites using Line 6000 eco-range detergents may be able to communicate their detergent choice with customer-facing certification material.
                </p>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    Ask About Eco-Detergent Certification
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            <div class="reveal reveal-right flex justify-center lg:justify-end">
                <img src="{{ asset('images/pages/accessories/line6000-chemicals-certificate.jpg') }}"
                     alt="Electrolux Professional Line 6000 eco-range detergents certificate"
                     loading="lazy" decoding="async"
                     class="w-full max-w-md rounded-xl shadow-lg object-contain">
            </div>

        </div>
    </div>
</section>

{{-- 9. ACCESSORIES MINI GRID --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Laundry Room Accessories</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Practical accessories for <span style="color:#148af4;">sorting, transport and storage</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Support everyday laundry handling with trolleys, racks, bags, nets and textile-care accessories.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 reveal">
            @foreach([
                ['title' => 'Trolleys &amp; Carts',          'copy' => 'For moving clean and soiled laundry safely around the site.',                        'img' => '/images/pages/accessories/trolley_.webp',            'mw' => '86%', 'align' => 'justify-start', 'href' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_Trolleys_438918404_EN.pdf?version=1736598854', 'link' => 'View Trolleys Data Sheet'],
                ['title' => 'Racks &amp; Shelving',          'copy' => 'For organising, separating and preparing laundry before or after processing.',       'img' => '/images/pages/accessories/ELS_PH_415x415_RACKGARM.jpg', 'href' => 'https://www.electroluxprofessional.com/gb/commercial-laundry-equipment/auxiliaries/garment-rack-RACKGARM/', 'link' => 'View Garment Racks'],
                ['title' => 'Laundry Bags &amp; Nets',       'copy' => 'For separating loads and protecting selected items during handling and washing.',     'img' => '/images/pages/accessories/ELS_PH_415x415_WASHNET.jpg', 'href' => 'https://www.electroluxprofessional.com/gb/commercial-laundry-equipment/auxiliaries/laundry-net-and-bags-WASHNET/', 'link' => 'View Nets &amp; Bags'],
                ['title' => 'Dryer Balls &amp; Care Items',  'copy' => 'For practical textile care and everyday drying requirements.',                       'img' => '/images/pages/accessories/dryer-balls.png',          'href' => 'https://www.electroluxprofessional.com/gb/accessories-consumables/', 'link' => 'View Care Items'],
            ] as $acc)
            <div class="flex flex-col gap-6 h-full">
                <div style="min-height:112px;">
                    <p class="font-heading font-bold text-navy text-2xl leading-snug mb-2">{!! $acc['title'] !!}</p>
                    <p class="font-body text-gray-600 text-base leading-relaxed">{{ $acc['copy'] }}</p>
                </div>
                <div class="w-full flex items-end {{ $acc['align'] ?? 'justify-center' }}" style="height:300px;">
                    @if(!empty($acc['img']))
                    <img src="{{ $acc['img'] }}" alt="{{ strip_tags($acc['title']) }}" loading="lazy" decoding="async"
                         class="transition-transform duration-500 hover:-translate-y-2"
                         style="max-width:{{ $acc['mw'] ?? '100%' }}; max-height:280px; width:auto; object-fit:contain;">
                    @endif
                </div>
                <a href="{{ $acc['href'] }}" target="_blank" rel="noopener"
                   class="inline-flex items-center gap-2 font-body font-bold text-[#148af4] text-sm hover:underline">
                    {!! $acc['link'] !!}
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            @endforeach
        </div>

        {{-- Single section CTA (per copy direction: avoid four repeated buttons) --}}
        <div class="mt-10 reveal">
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                Ask About Laundry Accessories
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

{{-- 10. SERVICE AND SUPPORT OPTIONS (image-cards) --}}
<section class="py-16 lg:py-20 bg-gray-50 border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Service Support</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Support beyond installation for <span style="color:#148af4;">dosing and laundry equipment</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Repairs, planned maintenance, Equipment Rental and aftercare for the equipment already in use.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                [
                    'title' => 'Repairs &amp; Call-Outs',
                    'text'  => 'For faults or issues affecting laundry equipment, dosing systems or day-to-day operation.',
                    'cta'   => 'Request a Repair',
                    'route' => route('repairs'),
                    'img'   => '/images/shared/repairs-callouts.jpg',
                    'pos'   => 'center 40%',
                ],
                [
                    'title' => 'Preventive Maintenance',
                    'text'  => 'Planned support to help keep equipment, dosing and laundry room systems working properly.',
                    'cta'   => 'View Maintenance Support',
                    'route' => route('service-contracts'),
                    'img'   => '/images/shared/service-contracts-hero.png',
                    'pos'   => '88% 35%',
                ],
                [
                    'title' => 'Equipment Rental',
                    'text'  => 'Rental options where a site needs laundry equipment flexibility without a full purchase route.',
                    'cta'   => 'Ask About Rental',
                    'route' => route('rental'),
                    'img'   => '/images/shared/td6-11-multihousing-room-front.jpg',
                    'pos'   => '66% center',
                ],
                [
                    'title' => 'Support &amp; Aftercare',
                    'text'  => 'Ongoing advice for parts, accessories, detergents, storage and equipment support after installation.',
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

{{-- 12. RELATED EQUIPMENT --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Equipment Range</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Explore equipment for <span style="color:#148af4;">washing, drying and finishing</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                Browse commercial washers, tumble dryers, wet cleaning systems and ironers.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 reveal">
            @foreach([
                ['title' => 'Commercial Washing Machines', 'copy' => 'For washer setups where detergent choice, dosing accuracy and load type directly affect wash results.', 'cta' => 'View Washing Machines', 'route' => route('equipment.category', 'commercial-washers'), 'img' => '/images/pages/commercial-washers/WH6-27.jpg', 'box' => 270],
                ['title' => 'Commercial Tumble Dryers',    'copy' => 'For drying capacity planned around the wash process, textile care and daily laundry demand.', 'cta' => 'View Dryers', 'route' => route('equipment.category', 'tumble-dryers'), 'img' => '/images/pages/dryers/line6000-tumble-dryer.webp', 'box' => 270],
                ['title' => 'Wet Cleaning Equipment',      'copy' => 'For specialist garment care where detergents, stain treatment, drying and finishing need to work together.', 'cta' => 'View Wet Cleaning', 'route' => route('equipment.category', 'wet-cleaning'), 'img' => '/images/pages/wet-cleaning/WH6-27LAC.jpg', 'box' => 270],
                ['title' => 'Commercial Ironers',          'copy' => 'For finishing and flatwork where wash quality, fabric care and handling affect the final result.', 'cta' => 'View Ironers', 'route' => route('equipment.category', 'ironers'), 'img' => '/images/pages/ironers/IB623_FRONT_NEW.jpg', 'box' => 300],
            ] as $card)
            <div class="flex flex-col gap-6 h-full">
                <div style="min-height:112px;">
                    <p class="font-heading font-bold text-navy text-2xl leading-snug mb-2">{{ $card['title'] }}</p>
                    <p class="font-body text-gray-600 text-base leading-relaxed">{{ $card['copy'] }}</p>
                </div>
                <div class="w-full flex items-end justify-center" style="height:300px;">
                    <img src="{{ $card['img'] }}" alt="{{ $card['title'] }}"
                         class="transition-transform duration-500 hover:-translate-y-2"
                         style="width:{{ $card['box'] }}px; max-width:100%; height:{{ $card['box'] }}px; object-fit:contain; object-position:bottom;">
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

{{-- 13. FAQ --}}
@include('components.faq', [
    'eyebrow' => 'Accessories & Consumables FAQs',
    'heading' => 'Questions about <span style="color:#148af4;">compatibility, products and setup</span>',
    'faqs' => [
        ['question' => 'Can automatic dosing work with our existing washers?', 'answer' => 'It depends on the washer and the control system installed. Electrolux Professional dosing integrates with suitable washers and controls, so Irish Laundry Systems will review the equipment already on site before confirming which dosing route applies.'],
        ['question' => 'What could automatic dosing save our laundry?', 'answer' => 'Automatic dosing matches the detergent quantity to the actual load weight and programme. That helps control chemical use, reduce overuse and waste, and keep running costs easier to plan across daily washing.'],
        ['question' => 'Which detergent range suits our equipment and textiles?', 'answer' => 'Line 6000 eco-range detergents suit commercial laundry sites, myPRO Cleanstar consumables suit semi-professional setups, and lagoon Advanced Care products suit specialist wet cleaning. The right range depends on the equipment, the textiles handled and the wash results needed.'],
        ['question' => 'Do we need dedicated detergent storage?', 'answer' => 'Detergent Storage keeps canisters, pumps and dosing equipment organised, contained and easier to reach. It helps where the laundry room needs safer handling, clearer space and more practical refilling.'],
        ['question' => 'Which accessories suit our laundry room?', 'answer' => 'Trolleys, racks, bags, nets and textile-care items are chosen around sorting, transport and handling. The right combination depends on how laundry moves through the room and what makes daily work easier for staff.'],
        ['question' => 'Can Irish Laundry Systems review the complete setup?', 'answer' => 'Yes. Irish Laundry Systems can review compatibility, products, available space and the equipment already installed, then advise on suitable dosing, detergents, storage and accessories for the site.'],
    ],
])

{{-- 14. FINAL CTA / FORM --}}
@include('components.cta-downtime-form', [
    'pageSource' => 'accessories_cta',
    'heading'    => 'Match products and accessories to <span style="color:#148af4;">your laundry room</span>',
    'body'       => 'Tell us what equipment you use and what you wash. We\'ll recommend suitable dosing, detergents, storage and accessories.',
    'formTitle'  => 'Request Dosing, Detergent & Storage Advice',
    'buttonText' => 'Request Advice',
])

@endsection
