@extends('layouts.app')

@section('pageTitle', 'Laundry Dosing Systems Ireland | Detergents & Accessories')

@section('meta')
<meta name="description" content="Control detergent use, wash results and daily laundry costs with Electrolux Professional dosing systems, eco-detergents, storage and accessories, supplied and supported by Irish Laundry Systems.">
@endsection

@section('content')

{{-- 1. HERO --}}
<section class="relative overflow-hidden flex flex-col lg:!h-[600px]" style="height:auto; min-height:520px;">
    <img src="/images/pages/accessories/heroaccesories.png" alt="Laundry dosing systems, detergents and accessories"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.75) 42%, rgba(1,30,65,0.35) 65%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 sm:py-20 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-3xl">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Accessories &amp; Consumables</p>
                <h1 class="font-heading font-bold text-white text-2xl sm:text-4xl lg:text-5xl leading-tight mb-6">
                    <span class="sm:block">Smarter laundry essentials for</span>
                    <span class="sm:block" style="color:#148af4;">better everyday control</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    <span class="lg:block">From automatic dosing and certified detergents to safe storage and accessories,</span>
                    <span class="lg:block">choose what best suits your equipment, textiles and wash requirements.</span>
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#dosing-systems"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Explore Dosing Systems
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white hover:border-white/70 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        Request Product Advice
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 2. THIN ELECTROLUX TRUST STRIP --}}
@include('components.partner-strip')

{{-- 3. INTRO / BRIDGE --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Product Selection</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-8 items-center">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-[2rem] 2xl:text-[2.4rem] leading-tight">
                    <span class="sm:block">The right products support</span>
                    <span class="sm:block" style="color:#148af4;">consistent wash quality</span>
                    <span class="sm:block" style="color:#148af4;">and better cost control</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed">
                    <span class="lg:block">Automatic dosing, the right detergents and safe storage</span>
                    <span class="lg:block">can help reduce waste and protect textiles and equipment,</span>
                    <span class="lg:block">while practical accessories help keep the laundry room</span>
                    <span class="lg:block">organised and make handling easier for staff.</span>
                </p>
            </div>

        </div>
    </div>
</section>

{{-- 4. FINANCIAL & OPERATIONAL PROOF --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Cost Control Proof</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
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
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-12 lg:mb-14 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Detergent Control</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
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
                <h3 class="font-heading font-bold text-navy text-xl mb-2">{{ $s['label'] }}</h3>
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
<section id="dosing-systems" class="py-16 lg:py-28 bg-white border-t border-gray-100 scroll-mt-28">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Dosing System Options</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-3">
                Better dosing control, <span style="color:#148af4;">less detergent waste</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Match the right dosing system to your washer setup to reduce detergent overuse and support consistent wash results.
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
                'logos' => ['clarusvibe'],
                'cta'   => 'Ask About Intelligent Dosing',
                'img'   => '/images/shared/efficientDosing_equip.webp',
            ],
            [
                'name'  => 'Efficient Dosing',
                'small' => 'Suitable washer extractors',
                'title' => 'Adjust detergent to the real load',
                'body'  => 'Measures the load at the start of the programme and adjusts detergent use to match the cycle.',
                'chips' => ['Real load measured', 'Less overuse', 'Cost control'],
                'logos' => ['compasspro'],
                'cta'   => 'Ask About Efficient Dosing',
                'img'   => '/images/shared/efficientDosing_equip.webp',
            ],
            [
                'name'  => 'Multisave',
                'small' => 'Multi-washer laundry rooms',
                'title' => 'One unit for multiple washers',
                'body'  => 'Connects up to seven washing machines with one unit for simpler dosing control.',
                'chips' => ['Up to 7 washers', 'Multi-machine control', 'Controlled consumption'],
                'logos' => ['clarusvibe', 'compasspro'],
                'cta'   => 'Ask About Multisave',
                'img'   => '/images/shared/MultisaveEQUIP.webp',
                'scene' => '/images/pages/accessories/MULTISAVE.png',
            ],
            [
                'name'  => 'JETSAVE',
                'small' => 'Water-powered dosing',
                'title' => 'Lower-maintenance dosing control',
                'body'  => 'Uses water-powered pumps with no moving parts or squeeze tubes to replace.',
                'chips' => ['Water-powered pumps', 'Fewer wear points', 'Lower maintenance'],
                'logos' => ['clarusvibe'],
                'cta'   => 'Ask About JETSAVE',
                'img'   => '/images/shared/JetsaveEQUIP.webp',
                'scene' => '/images/pages/accessories/JETSAVE.png',
            ],
            [
                'name'  => 'DOSAVE',
                'small' => 'Peristaltic dosing',
                'title' => 'Programmable dosing support',
                'body'  => 'A peristaltic dosing option for easy connection, programming and controlled detergent delivery.',
                'chips' => ['Peristaltic pumps', 'Easy programming', 'Controlled delivery'],
                'logos' => ['clarusvibe'],
                'cta'   => 'Ask About DOSAVE',
                'img'   => '/images/shared/DOSAVEEQUIP.webp',
                'scene' => '/images/pages/accessories/DOSAVE.jpg',
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
                            <img src="{{ $p['scene'] ?? '/images/shared/Laundry-Double-Banner-965x965-1.webp' }}"
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
                                    <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-2">{{ $p['small'] }}</p>
                                    <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-3">{{ $p['title'] }}</h3>
                                    <p class="font-body text-gray-600 text-sm leading-relaxed mb-5">{{ $p['body'] }}</p>
                                    <div class="flex flex-wrap gap-2 mb-6">
                                        @foreach($p['chips'] as $chip)
                                        <span class="font-body text-xs font-bold uppercase tracking-wide text-navy/70 bg-navy/[0.06] px-3 py-1.5 rounded-full">{{ $chip }}</span>
                                        @endforeach
                                    </div>
                                    @if(!empty($p['logos']))
                                    <div class="flex items-center gap-6 mb-6">
                                        @if(in_array('clarusvibe', $p['logos']))
                                        <img src="/images/shared/clarusvibeicon.webp" alt="ClarusVibe" class="h-10 w-auto object-contain opacity-80">
                                        @endif
                                        @if(in_array('compasspro', $p['logos']))
                                        <img src="/images/shared/Compass-Pro_1-300x88.webp" alt="CompassPro" class="h-10 w-auto object-contain opacity-80">
                                        @endif
                                    </div>
                                    @endif
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

        {{-- CTA --}}
        <div class="mt-10 text-center">
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-8 py-4 rounded-lg text-sm transition-colors duration-200">
                Ask About Dosing Systems
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- 7. PRODUCT / RANGE SECTION --}}
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Product Categories</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-[2rem] 2xl:text-[2.4rem] leading-tight text-balance mb-3">
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
                'imgMax'  => 400,
            ],
        ];
        @endphp

        <div class="space-y-16 lg:space-y-24">
            @foreach($rangeCards as $i => $card)
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center reveal">

                {{-- Text side --}}
                <div class="{{ $i % 2 === 1 ? 'lg:order-2' : '' }}">
                    <p class="font-body text-xs font-bold uppercase tracking-[0.22em] text-[#148af4] mb-3">{{ $card['topLine'] }}</p>
                    <h3 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">{{ $card['name'] }}</h3>
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
                         class="w-auto object-contain" style="max-height:{{ $card['imgMax'] ?? 300 }}px; max-width:100%;">
                </div>

            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 8. FAMILY 1 — LINE 6000 ECO-RANGE (core detergents + stain care & descaling) --}}
<section class="py-20 lg:py-28 bg-gray-50 border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-10 lg:mb-14 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Line 6000 Eco-Range</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-5">
                Certified detergents for <span style="color:#148af4;">quality wash results</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed mb-6 lg:whitespace-nowrap">
                Electrolux Professional Line 6000 eco-range detergents are developed for high-quality, safe and effective washing while helping reduce environmental impact.
            </p>
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

        <div class="mt-12 reveal">
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                Ask About Eco-Detergents
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

{{-- 8d. CUSTOMER-FACING CERTIFICATE BLOCK --}}
<section class="py-20 lg:py-28 bg-gray-50 border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            <div class="reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Customer-Facing Confidence</p>
                <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-5">
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

{{-- 8b. FAMILY 2 — myPRO CLEANSTAR CONSUMABLES --}}
<section id="detergents-by-laundry-setup" class="py-16 lg:py-28 bg-white border-t border-gray-100 scroll-mt-28">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">myPRO Cleanstar Consumables</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-3">
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
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">lagoon Advanced Care Products</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-3">
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

{{-- 9. ACCESSORIES MINI GRID --}}
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Laundry Room Accessories</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Practical accessories for <span style="color:#148af4;">sorting, transport and storage</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Support everyday laundry handling with trolleys, racks, bags, nets and textile-care accessories.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 reveal">
            @foreach([
                ['title' => 'Trolleys &amp; Carts',          'copy' => 'For moving clean and soiled laundry safely around the site.',                        'img' => '/images/pages/accessories/trolley_.webp',            'mw' => '86%', 'align' => 'justify-start', 'href' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_Trolleys_438918404_EN.pdf?version=1736598854', 'link' => 'View Trolleys Data Sheet'],
                ['title' => 'Racks &amp; Shelving',          'copy' => 'For organising, separating and preparing laundry before or after processing.',       'img' => '/images/pages/accessories/Racks%20%26%20Shelvingimage.png', 'href' => 'https://www.electroluxprofessional.com/gb/commercial-laundry-equipment/auxiliaries/garment-rack-RACKGARM/', 'link' => 'View Garment Racks'],
                ['title' => 'Laundry Bags &amp; Nets',       'copy' => 'For separating loads and protecting selected items during handling and washing.',     'img' => '/images/pages/accessories/laundrybagannets.png', 'href' => 'https://www.electroluxprofessional.com/gb/commercial-laundry-equipment/auxiliaries/laundry-net-and-bags-WASHNET/', 'link' => 'View Nets &amp; Bags'],
                ['title' => 'Dryer Balls &amp; Care Items',  'copy' => 'For practical textile care and everyday drying requirements.',                       'img' => '/images/pages/accessories/dryer-balls.png',          'href' => 'https://www.electroluxprofessional.com/gb/accessories-consumables/', 'link' => 'View Care Items'],
            ] as $acc)
            <div class="flex flex-col gap-6 h-full">
                <div style="min-height:112px;">
                    <p class="font-heading font-bold text-navy text-xl leading-snug mb-2">{!! $acc['title'] !!}</p>
                    <p class="font-body text-gray-600 text-sm leading-relaxed">{{ $acc['copy'] }}</p>
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

{{-- BROCHURES BAR (slim inline) — every accessories/consumables document in one strip --}}
@include('components.resources-bar', ['groups' => [
                ['title' => 'Product Resources', 'links' => [
                    ['l' => 'Detergents, Dosing Systems & Storage leaflet', 'h' => '/pdfs/EPR-leaflet-DetergentsDosingSystems-Storage_singlepageview.pdf'],
                    ['l' => 'Detergent Storage — Product Data Sheet', 'h' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_Detergent storage_438918186_EN.pdf?version=1750533471'],
                    ['l' => 'lagoon Advanced Care overview', 'h' => route('equipment.category', 'wet-cleaning')],
                ]],
                ['title' => 'Laundry Accessories', 'links' => [
                    ['l' => 'Detergents, Dosing Systems & Storage leaflet', 'h' => '/pdfs/EPR-leaflet-DetergentsDosingSystems-Storage_singlepageview.pdf'],
                    ['l' => 'Detergent Storage — Product Data Sheet', 'h' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_Detergent storage_438918186_EN.pdf?version=1750533471'],
                    ['l' => 'Ask about accessories', 'h' => route('contact')],
                ]],
                ['title' => 'Detergent Range', 'links' => [
                    ['l' => 'L00 Laundry Eco Degreaser', 'h' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2022/02/COMBINED-L00-Laundry-Eco-Degreaser.pdf'],
                    ['l' => 'L01 Laundry Eco Powder',    'h' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2021/11/COMBINED-L01-Laundry-Eco-Powder.pdf'],
                    ['l' => 'L02 Laundry Eco Wash',      'h' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2021/11/COMBINED-L02-Laundry-Eco-Wash.pdf'],
                    ['l' => 'L03 Laundry Eco Booster',   'h' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2021/11/COMBINED-L03-Laundry-Eco-Booster.pdf'],
                    ['l' => 'L04 Laundry Eco Bleach',    'h' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2021/11/COMBINED-L04-Laundry-Eco-Bleach.pdf'],
                    ['l' => 'L05 Laundry Eco Softener',  'h' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2021/11/COMBINED-L05-Laundry-Eco-Softener.pdf'],
                ]],
                ['title' => 'Advice & Support', 'links' => [
                    ['l' => 'Request product advice', 'h' => route('contact')],
                    ['l' => 'Support & Aftercare', 'h' => route('parts-aftercare')],
                    ['l' => 'Talk to our team', 'h' => route('contact')],
                    ['l' => 'All documents', 'h' => route('resources')],
                ]],
]])

{{-- 9b. LAUNDRY MANAGEMENT & CONNECTIVITY --}}
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Laundry Management &amp; Connectivity</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Digital tools for <span style="color:#148af4;">better oversight and control</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed [@media(min-width:1350px)]:whitespace-nowrap">
                Monitor compatible equipment, configure programmes and manage performance, payment and booking needs through Electrolux Professional systems.
            </p>
        </div>

        @php
            $lmcDocLink = 'inline-flex items-center gap-1.5 font-body font-bold text-[#148af4] text-sm hover:underline';
            $lmcBadge   = 'inline-flex items-center font-body text-navy/70 text-xs bg-[#148af4]/[0.07] border border-[#148af4]/20 rounded-full px-3 py-1.5';
            // Secondary systems — image swaps in via 'img' once the official assets are uploaded
            $lmcCards = [
                [
                    'title'  => 'Laundry Program Manager',
                    'sub'    => '',
                    'body'   => 'Create and organise compatible washer and dryer programmes from a PC.',
                    'badges' => ['Programme Setup', 'Washers &amp; Dryers', 'PC Tool'],
                    'doc'    => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_LPM_438919528_EN.pdf?version=1740422870',
                    'img'    => '/images/pages/accessories/Laundry%20Program%20Managerimage.png',
                ],
                [
                    'title'  => 'CMIS 5',
                    'sub'    => 'Certus Management Information System',
                    'body'   => 'Review machine use, performance, service data and maintenance needs.',
                    'badges' => ['Performance Data', 'Service Statistics', 'Maintenance Planning'],
                    'doc'    => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_CMIS_438919493_EN.pdf?version=1758366943',
                    'img'    => '/images/pages/accessories/CMIS%205image.png',
                ],
                [
                    'title'  => 'Payment &amp; Booking Systems',
                    'sub'    => '',
                    'body'   => 'Add payment, access and booking options for shared and self-service laundries.',
                    'badges' => ['Payment Options', 'User Access', 'Booking Systems'],
                    'doc'    => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2017/05/Payment-Systems-2017.pdf',
                    'img'    => '/images/pages/accessories/Payment%20%26%20Booking%20Systemsimage.png',
                ],
            ];
        @endphp

        {{-- Featured platform — OnE Connected --}}
        <div class="rounded-2xl border border-gray-100 shadow-sm overflow-hidden bg-white reveal mb-6">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="order-2 lg:order-1 p-6 lg:p-8 flex flex-col justify-center">
                    <span class="font-body font-bold text-[#148af4] text-sm uppercase tracking-[0.22em] mb-2">Featured Platform</span>
                    <h3 class="font-heading font-bold text-navy text-2xl lg:text-3xl leading-snug mb-2">OnE Connected</h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-4 max-w-md">
                        Monitor compatible equipment, machine status, usage and alerts remotely.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-5">
                        @foreach(['Remote Monitoring', 'Machine Status', 'Alerts'] as $badge)
                        <span class="{{ $lmcBadge }}">{{ $badge }}</span>
                        @endforeach
                    </div>
                    <div class="flex flex-wrap items-center gap-3 mb-4">
                        <a href="{{ route('equipment.category', 'one-connected') }}"
                           class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold text-sm px-6 py-3 rounded-lg transition-colors">
                            View OnE Connected
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}"
                           class="inline-flex items-center gap-2 border border-navy/25 hover:border-navy text-navy font-body font-bold text-sm px-6 py-3 rounded-lg transition-colors">
                            Request Advice
                        </a>
                    </div>
                </div>
                <div class="order-1 lg:order-2 min-h-[200px] lg:min-h-[280px]">
                    <img src="/images/pages/accessories/Featured%20Platformimage.png" alt="OnE Connected dashboard"
                         class="w-full h-full object-cover" loading="lazy" decoding="async">
                </div>
            </div>
        </div>

        {{-- Secondary systems --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 reveal">
            @foreach($lmcCards as $c)
            <div class="rounded-2xl border border-gray-100 shadow-sm overflow-hidden bg-white flex flex-col">
                <div class="bg-gray-50 flex items-center justify-center" style="height:200px;">
                    @if(!empty($c['img']))
                    <img src="{{ $c['img'] }}" alt="{{ strip_tags($c['title']) }}" class="w-full h-full object-cover" loading="lazy" decoding="async">
                    @else
                    <svg class="w-14 h-14 text-navy/15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.2"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z"/></svg>
                    @endif
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-1">{!! $c['title'] !!}</h3>
                    @if($c['sub'])<p class="font-body text-gray-400 text-xs mb-2">{{ $c['sub'] }}</p>@endif
                    <p class="font-body text-gray-500 text-sm leading-relaxed mb-4">{{ $c['body'] }}</p>
                    <div class="flex flex-wrap gap-2 mb-5">
                        @foreach($c['badges'] as $badge)
                        <span class="{{ $lmcBadge }}">{!! $badge !!}</span>
                        @endforeach
                    </div>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 border border-navy/25 hover:border-navy text-navy font-body font-bold text-sm px-6 py-3 rounded-lg transition-colors mb-3 mt-auto">
                        Request Advice
                    </a>
                    <a href="{{ $c['doc'] }}" target="_blank" rel="noopener" class="{{ $lmcDocLink }}">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v2.625a2.625 2.625 0 0 1-2.625 2.625H7.125A2.625 2.625 0 0 1 4.5 16.875V14.25M12 15V3.75m0 11.25-3.75-3.75M12 15l3.75-3.75"/></svg>
                        View Product Data Sheet
                    </a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

{{-- 10. SERVICE AND SUPPORT OPTIONS (image-cards) --}}
<section class="py-20 lg:py-28 bg-gray-50 border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Service Options</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-3">
                Choose the <span style="color:#148af4;">right service</span> for your laundry equipment
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Find the right level of support for what your site needs now and as requirements change.
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
                    'img'   => '/images/pages/accessories/equipmentrentalcard.png',
                    'pos'   => 'center center',
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
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Equipment Range</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
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
                    <p class="font-heading font-bold text-navy text-xl leading-snug mb-2">{{ $card['title'] }}</p>
                    <p class="font-body text-gray-600 text-sm leading-relaxed">{{ $card['copy'] }}</p>
                </div>
                <div class="w-full flex items-end justify-center" style="height:300px;">
                    <img src="{{ $card['img'] }}" alt="{{ $card['title'] }}"
                         class="transition-transform duration-500 hover:-translate-y-2"
                         style="width:{{ $card['box'] }}px; max-width:100%; height:{{ $card['box'] }}px; object-fit:contain; object-position:bottom;">
                </div>
                <a href="{{ $card['route'] }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy-dark text-white font-heading font-bold text-sm px-5 py-4 rounded-lg transition-colors mt-auto">
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
        ['question' => 'What could automatic dosing save our laundry?', 'answer' => 'Automatic dosing can help reduce detergent overuse, improve consistency and give better control of chemical costs. Actual savings depend on your equipment, wash programmes, load profile and current dosing method.'],
        ['question' => 'Which detergent range suits our equipment and textiles?', 'answer' => 'Line 6000 eco-range detergents suit commercial laundry sites, myPRO Cleanstar consumables suit semi-professional setups, and lagoon Advanced Care products suit specialist wet cleaning. The right range depends on the equipment, the textiles handled and the wash results needed.'],
        ['question' => 'Do we need dedicated detergent storage?', 'answer' => 'Not always. It depends on your setup, available space and how detergents are supplied. Dedicated storage can help keep products organised, contained and easier for staff to manage.'],
        ['question' => 'Which accessories suit our laundry room?', 'answer' => 'Trolleys, racks, bags, nets and textile-care items are chosen around sorting, transport and handling. The right combination depends on how laundry moves through the room and what makes daily work easier for staff.'],
        ['question' => 'Can Irish Laundry Systems review the complete setup?', 'answer' => 'Yes. We can review dosing, detergents, storage, accessories and laundry management and connectivity alongside your equipment and site requirements.'],
    ],
])

{{-- 14. FINAL CTA / FORM --}}
<div id="dosing-advice-form"></div>
@include('components.cta-downtime-form', [
    'pageSource' => 'accessories_cta',
    'heading'    => '<span class="sm:block">Match the right products</span> <span class="sm:block">and accessories to your</span> <span class="sm:block" style="color:#148af4;">laundry room setup</span>',
    'headingSize' => 'text-2xl sm:text-4xl lg:text-[2.625rem]',
    'body'       => 'Tell us what equipment you use and what you wash. We&rsquo;ll recommend suitable dosing,<br class="hidden lg:block"> detergents, storage and accessories.',
    'formTitle'  => 'Request Product & Accessories Advice',
    'buttonText' => 'Request Advice',
])

@endsection
