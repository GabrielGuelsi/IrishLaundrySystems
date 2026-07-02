@extends('layouts.app')

@section('pageTitle', 'Wet Cleaning Equipment Ireland | Lagoon Advanced Care | Irish Laundry Systems')

@section('meta')
<meta name="description" content="Professional wet cleaning equipment for dry cleaners, garment care businesses and textile care sites. Lagoon Advanced Care supplied and supported by Irish Laundry Systems.">
@endsection

@section('content')

{{-- 1. HERO --}}
<section class="relative overflow-hidden flex flex-col lg:!h-[720px]" style="height:auto; min-height:560px;">
    <img src="/images/sectors/Line 6000 solutions products_72dpi.jpg" alt="Wet cleaning equipment"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.75) 42%, rgba(1,30,65,0.35) 65%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 sm:py-20 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-3xl">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Wet Cleaning Equipment</p>
                <h1 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-6">
                    Professional wet cleaning for<br class="hidden lg:block"> <span style="color:#148af4;">delicate garments and solvent-free textile care</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    Irish Laundry Systems supplies, installs and supports Lagoon Advanced Care for dry cleaners and garment care businesses moving beyond traditional solvent-based cleaning.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Wet Cleaning Advice
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white hover:border-white/70 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        Ask About Lagoon Advanced Care
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 2. UNIVERSAL THIN ELECTROLUX TRUST STRIP --}}
@include('components.partner-strip')

{{-- 3. INTRO / BRIDGE --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Professional Textile Care</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    Care for more items with <span style="color:#148af4;">a gentler wet cleaning process</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    Lagoon Advanced Care supports professional cleaning for delicate garments, selected leathers, shoes and specialist textiles.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Irish Laundry Systems matches the setup to garment type, volume, drying, detergents and finishing needs.
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

{{-- 4. WET CLEANING BUSINESS CASE --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Business Case</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Build a stronger garment care offer with <span style="color:#148af4;">fast, solvent-free wet cleaning</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Lagoon Advanced Care helps professional cleaners care for delicate garments, selected leathers and shoes with a faster wet cleaning process and no traditional solvent-based cleaning.
            </p>
        </div>

        {{-- Card photos are placeholders until the approved Canva images land --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 reveal mb-8">
            @foreach([
                ['title' => 'Fast results',           'copy' => 'Dry-to-Dry in 1 hour helps garments move through the process faster, with no hang-drying required.',        'img' => '/images/healthcare/lagoon-advanced-care-internal.jpg', 'pos' => 'center center'],
                ['title' => 'Premium garment care',   'copy' => 'Designed for delicate garments, fine textiles, selected leathers and shoes.',                                'img' => '/images/healthcare/services-overview-hero.jpg',        'pos' => 'center center'],
                ['title' => 'Solvent-free process',   'copy' => 'A water-based process for businesses moving beyond traditional solvent-based cleaning.',                      'img' => '/images/equipment/eco-detergents.webp',                'pos' => 'center center'],
                ['title' => 'Stronger service offer', 'copy' => 'Helps dry cleaners and garment care businesses offer more specialist textile care in-house.',                 'img' => '/images/healthcare/render-double-page_72dpi.jpg',      'pos' => 'center center'],
            ] as $card)
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden flex flex-col">
                <img src="{{ $card['img'] }}" alt="{{ $card['title'] }}" loading="lazy" decoding="async"
                     class="w-full h-44 object-cover" style="object-position: {{ $card['pos'] }};">
                <div class="p-6">
                    <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $card['title'] }}</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $card['copy'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="reveal">
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                Explore Wet Cleaning Options
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

{{-- 5. FINANCIAL & OPERATIONAL PROOF --}}
<section class="py-12 lg:py-16 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Financial &amp; Operational Proof</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Help your wet cleaning business save time and process more garments with <span style="color:#148af4;">faster cycles, higher capacity and less manual work</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Lagoon Advanced Care helps professional cleaners reduce waiting time, use load capacity more effectively and move more suitable garments through the service each day.
            </p>
        </div>

        {{-- Card 4 uses icon 7 until the specified 45.png is added to /images/icons --}}
        @include('components.financial-metrics', ['items' => [
            ['icon'=>'39',  'prefix'=>'', 'stat'=>'Save<br>time',           'size'=>'text-2xl', 'label'=>'55 min process', 'labelClass'=>'translate-y-2', 'iconClass'=>'scale-[1.105] -translate-y-[10.1%]', 'body'=>'Suitable garments can move through washing and drying in 55 minutes, helping reduce hang-drying and waiting time.'],
            ['icon'=>'31',  'prefix'=>'', 'stat'=>'Use more<br>capacity',   'size'=>'text-2xl', 'label'=>'up to 75% loading', 'labelClass'=>'translate-y-2', 'iconClass'=>'scale-[1.028] -translate-y-[6.6%]', 'body'=>'Higher loading factor helps suitable loads use more drum capacity while keeping movement gentle for delicate textiles.'],
            ['icon'=>'188', 'prefix'=>'', 'stat'=>'Produce<br>more',        'size'=>'text-2xl', 'label'=>'up to 50% increase', 'labelClass'=>'translate-y-2', 'iconClass'=>'scale-[0.953]', 'body'=>'The Lagoon process can help increase production from each load, so the business can handle more garments with the right setup.'],
            ['icon'=>'7',   'prefix'=>'', 'stat'=>'Lower<br>utility use',   'size'=>'text-2xl', 'label'=>'water, energy and detergents', 'labelClass'=>'translate-y-2', 'iconClass'=>'scale-[1.181] -translate-y-[13.2%]', 'body'=>'Lagoon Advanced Care supports efficient use of equipment and utilities, helping wet cleaning businesses control water, energy and detergent use.'],
            ['icon'=>'16',  'prefix'=>'', 'stat'=>'70–400<br>items',        'size'=>'text-2xl', 'label'=>'per day', 'labelClass'=>'translate-y-2', 'iconClass'=>'scale-[1.707] -translate-y-[36.1%]', 'body'=>'Choose the Lagoon Advanced Care equipment combination around your expected garment volume, from smaller wet cleaning operations to higher-volume setups.'],
        ]])
    </div>
</section>

{{-- 6. CERTIFIED TEXTILE CARE --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Certified Textile Care</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Smart care, <span style="color:#148af4;">certified results</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Lagoon Advanced Care brings recognised textile care proof for garments customers value.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 reveal">
            @foreach([
                ['title' => 'Woolmark approved',          'copy' => 'Lagoon Advanced Care wool programmes have been approved by The Woolmark Company for dry-clean-only Woolmark garments in specified markets.'],
                ['title' => 'Tested by Hohenstein',        'copy' => 'Independent Hohenstein Institute testing showed comparable results to solvent cleaning for textile wear, dimensional change and colour loss after repeated cycles.'],
                ['title' => 'Ergonomics certified by ErgoCert', 'copy' => 'Lagoon Advanced Care washers and dryers are designed around safe, comfortable operator use.'],
                ['title' => 'Leather to sneakers',         'copy' => 'Lagoon Advanced Care can clean and revitalise leather shoes, jackets, bags, accessories and most leather items, helping preserve softness, colour and shape.'],
            ] as $card)
            <div class="bg-white border border-gray-100 rounded-2xl p-7 flex flex-col h-full shadow-sm">
                <div class="w-10 h-1 rounded-full bg-[#148af4] mb-4"></div>
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $card['copy'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 7. LAGOON PROCESS / INFOGRAPHIC + VIDEO --}}
<section class="py-16 lg:py-24 bg-gray-50 overflow-x-hidden">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        @php
            // Official process infographic (Trello asset) — becomes the main piece once saved to this path.
            $lagoonInfographic = file_exists(public_path('images/equipment/lagoon-process-infographic.webp'));
        @endphp
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">

            <div class="lg:col-span-5 reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Lagoon Process</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-5">
                    See how garments move through <span style="color:#148af4;">a faster wet cleaning process</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-5">
                    Lagoon Advanced Care brings prespotting, cleaning, drying and finishing into one controlled process, helping suitable garments move from received to ready without hang-drying.
                </p>
                <p class="font-body text-gray-400 text-xs italic mb-7">Leathers and shoes may require longer drying time.</p>
                <a href="#lagoon-process-video"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                    Watch the Lagoon Advanced Care process
                </a>
            </div>

            <div class="lg:col-span-7 reveal reveal-right">
                @if($lagoonInfographic)
                <img src="/images/equipment/lagoon-process-infographic.webp" alt="Lagoon Advanced Care process — from received to ready"
                     class="w-full h-auto rounded-2xl mb-6">
                <div id="lagoon-process-video" class="relative rounded-2xl overflow-hidden bg-navy max-w-sm">
                    <video class="w-full h-full object-cover" controls preload="metadata" playsinline>
                        <source src="/images/equipment/EPR_lagoon_Advanced_Care_ENG_1-1_3.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                @else
                <div id="lagoon-process-video" class="relative rounded-2xl overflow-hidden bg-navy max-w-xl mx-auto">
                    <video class="w-full h-full object-cover" controls preload="metadata" playsinline>
                        <source src="/images/equipment/EPR_lagoon_Advanced_Care_ENG_1-1_3.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                @endif
            </div>

        </div>
    </div>
</section>

{{-- 8. SYSTEM COMPONENTS --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Complete Wet Cleaning Setup</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Build the setup around <span style="color:#148af4;">washing, drying, detergents and finishing</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Lagoon Advanced Care works best when each part of the setup is matched to the garments, volume and room.
            </p>
        </div>

        {{-- Equipment photos are placeholders until the approved Canva images (pages 42–44) land --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-5 reveal">
            @foreach([
                ['step' => '01', 'title' => 'Washer',                    'copy' => 'Use Lagoon Advanced Care washer models such as WH6-6 LAC, WH6-14 LAC, WH6-20 LAC, WH6-27 LAC or WH6-33 LAC, matched to garment volume.', 'img' => '/images/equipment/WS6 — Line 6000 High-Spin Washer.jpg'],
                ['step' => '02', 'title' => 'Dryer',                     'copy' => 'Use Lagoon Advanced Care dryer models such as TD6-7 LAC, TD6-14 LAC, TD6-20 LAC, TD6-30 LAC or TD6-37 LAC, matched to the washer and drying need.', 'img' => '/images/equipment/Tumble-dryers_Heat-Pump_1-1.webp'],
                ['step' => '03', 'title' => 'Detergents and prespotting', 'copy' => 'Use Lagoon detergents and prespotting products such as Sensitive Detergent, Delicate Detergent and Sensitive Conditioner.', 'img' => '/images/equipment/eco-detergents.webp'],
                ['step' => '04', 'title' => 'Finishing equipment',        'copy' => 'Use ironing tables and finishing equipment such as FIT7, FIT1-2 WC and FFT-WC where the setup needs finishing support.', 'img' => '/images/equipment/line6000-ironer.webp'],
                ['step' => '05', 'title' => 'Optional cabinet support',   'copy' => 'Use Serenity Cabinet where selected garments, leathers or shoes need additional cabinet support.', 'img' => '/images/healthcare/Drying-cabinets_image.webp'],
            ] as $comp)
            <div class="flex flex-col h-full">
                <div class="w-full flex items-end justify-center mb-5" style="height:240px;">
                    <img src="{{ $comp['img'] }}" alt="{{ $comp['title'] }}" loading="lazy" decoding="async" class="max-h-full w-auto object-contain">
                </div>
                <span class="font-heading font-bold text-[#148af4] text-xs tracking-[0.2em] mb-2">{{ $comp['step'] }}</span>
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $comp['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $comp['copy'] }}</p>
            </div>
            @endforeach
        </div>

        <p class="font-body text-gray-500 text-sm leading-relaxed mt-10 reveal">
            Irish Laundry Systems matches the Lagoon setup to garment type, expected volume, drying need, finishing requirements and available room.
        </p>
    </div>
</section>

{{-- 9. CAPACITY PLANNING / VOLUME ACCORDION --}}
<section class="py-12 lg:py-16 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Capacity Planning</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Choose the Lagoon setup around<br class="hidden lg:block"> <span style="color:#148af4;">garment volume, room space and growth</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Start with expected items per day, then match the washer, dryer, finishing equipment and optional cabinet support.
            </p>
        </div>

        <div x-data="{ open: 0 }" class="max-w-4xl reveal">
            @foreach([
                ['volume' => '70',  'summary' => 'For smaller wet cleaning starts or lower daily garment volume.',                 'washer' => 'WH6-6 LAC',  'dryer' => 'TD6-7 LAC',  'table' => '1 × FIT7',  'finisher' => '–',      'cabinet' => 'Serenity Cabinet'],
                ['volume' => '110', 'summary' => 'For growing garment care operations with more regular wet cleaning demand.',     'washer' => 'WH6-14 LAC', 'dryer' => 'TD6-14 LAC', 'table' => 'FIT7',      'finisher' => 'FFT-WC', 'cabinet' => 'Serenity Cabinet'],
                ['volume' => '240', 'summary' => 'For established wet cleaning operations handling higher daily volume.',          'washer' => 'WH6-20 LAC', 'dryer' => 'TD6-20 LAC', 'table' => 'FIT1-2 WC', 'finisher' => 'FFT-WC', 'cabinet' => 'Serenity Cabinet'],
                ['volume' => '320', 'summary' => 'For larger garment care businesses needing more capacity and finishing support.', 'washer' => 'WH6-27 LAC', 'dryer' => 'TD6-30 LAC', 'table' => 'FIT1-2 WC', 'finisher' => 'FFT-WC', 'cabinet' => 'Serenity Cabinet'],
                ['volume' => '400', 'summary' => 'For high-volume wet cleaning operations with greater daily throughput.',          'washer' => 'WH6-33 LAC', 'dryer' => 'TD6-37 LAC', 'table' => 'FIT1-2 WC', 'finisher' => 'FFT-WC', 'cabinet' => 'Serenity Cabinet'],
            ] as $i => $tier)
            <div class="bg-white border border-gray-100 rounded-2xl shadow-sm mb-3 overflow-hidden">
                <button type="button" @click="open = open === {{ $i }} ? null : {{ $i }}" :aria-expanded="open === {{ $i }}"
                        class="w-full flex items-center justify-between gap-6 text-left px-6 sm:px-8 py-5">
                    <span class="flex flex-col lg:flex-row lg:items-baseline gap-1 lg:gap-5 min-w-0">
                        <span class="font-heading font-bold text-navy text-xl sm:text-2xl whitespace-nowrap"><span style="color:#148af4;">{{ $tier['volume'] }}</span> items per day</span>
                        <span class="font-body text-gray-500 text-sm leading-snug">{{ $tier['summary'] }}</span>
                    </span>
                    <svg :class="open === {{ $i }} ? 'rotate-180' : ''" class="w-5 h-5 text-[#148af4] flex-shrink-0 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </button>
                <div x-show="open === {{ $i }}" @if($i > 0) style="display:none" @endif>
                    <div class="px-6 sm:px-8 pb-6 pt-5 border-t border-gray-100 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-x-6 gap-y-4">
                        @foreach([['Washer', $tier['washer']], ['Dryer', $tier['dryer']], ['Ironing table', $tier['table']], ['Form finisher', $tier['finisher']], ['Optional cabinet', $tier['cabinet']]] as [$lbl, $val])
                        <div>
                            <p class="font-body font-bold text-[#148af4] text-[11px] uppercase tracking-[0.14em] mb-1">{{ $lbl }}</p>
                            <p class="font-heading font-bold text-navy text-base leading-snug">{{ $val }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
            <p class="font-body text-gray-400 text-xs italic mt-4">Items per day are based on an average 8-hour working day.</p>
        </div>

        <div class="mt-8 reveal">
            <a href="{{ route('request-assessment') }}"
               class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                Plan Your Wet Cleaning Setup
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- 10. WHERE WET CLEANING FITS / CAROUSEL --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Where It Fits</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Useful for businesses built around<br class="hidden lg:block"> <span style="color:#148af4;">specialist garment care and customer trust</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Wet cleaning fits businesses where delicate garments, specialist items and visible garment quality matter.
            </p>
        </div>

        {{-- Card photos are placeholders until the approved Canva images land (same card order as the Canva file) --}}
        <div x-data class="relative reveal">
            <div x-ref="track" class="flex gap-4 overflow-x-auto snap-x snap-mandatory scroll-smooth pb-2 [-ms-overflow-style:none] [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
                @foreach([
                    ['title' => 'Delicate garments',        'copy' => 'For garments that need professional wet cleaning with gentler fabric care.',            'img' => '/images/healthcare/services-overview-hero.jpg',          'pos' => 'center center'],
                    ['title' => 'Leathers',                 'copy' => 'For selected leather items that need specialist cleaning and revitalising.',            'img' => '/images/healthcare/services-overview-hero-portrait.jpg', 'pos' => 'center center'],
                    ['title' => 'Wool and silk',            'copy' => 'For delicate fibres that need careful programme control.',                              'img' => '/images/healthcare/line-6000-solutions.jpg',             'pos' => 'center 30%'],
                    ['title' => 'Cotton, linen and viscose', 'copy' => 'For common garment fabrics that need consistent professional care.',                    'img' => '/images/healthcare/render-double-page_72dpi.jpg',        'pos' => 'center center'],
                    ['title' => 'Dry-clean-only garments',  'copy' => 'For Woolmark garments labelled as dry-clean only, where approved programmes apply.',    'img' => '/images/healthcare/commercial-industrial.jpg',           'pos' => 'center center'],
                    ['title' => 'Shoes',                    'copy' => 'For selected shoes that can be treated through the Lagoon process.',                     'img' => '/images/healthcare/lagoon-advanced-care-internal.jpg',   'pos' => 'center center'],
                ] as $card)
                <div class="relative overflow-hidden rounded-2xl flex-shrink-0 snap-start w-[280px] sm:w-[320px]" style="height:400px;">
                    <img src="{{ $card['img'] }}" alt="{{ $card['title'] }}" loading="lazy" decoding="async"
                         class="absolute inset-0 w-full h-full object-cover" style="object-position: {{ $card['pos'] }};">
                    <div class="absolute inset-0"
                         style="background:linear-gradient(to top, rgba(1,30,65,0.95) 0%, rgba(1,30,65,0.5) 40%, rgba(1,30,65,0.05) 75%, transparent 100%);"></div>
                    <div class="absolute inset-0 p-7 flex flex-col justify-end z-10">
                        <h3 class="font-heading font-bold text-white text-xl leading-snug mb-2">{{ $card['title'] }}</h3>
                        <p class="font-body text-white/80 text-sm leading-relaxed">{{ $card['copy'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <button type="button" @click="$refs.track.scrollBy({left: -336, behavior: 'smooth'})" aria-label="Previous"
                    class="hidden lg:flex absolute -left-5 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full bg-white border border-gray-200 shadow-md items-center justify-center text-navy hover:text-[#148af4] transition-colors">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
            </button>
            <button type="button" @click="$refs.track.scrollBy({left: 336, behavior: 'smooth'})" aria-label="Next"
                    class="hidden lg:flex absolute -right-5 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full bg-white border border-gray-200 shadow-md items-center justify-center text-navy hover:text-[#148af4] transition-colors">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
            </button>
        </div>
    </div>
</section>

{{-- 11. SYSTEM PLANNING / SITE FIT STRIP — the page's ONLY full-width blue strip --}}
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.82) 8%, rgba(20,138,244,0.45) 28%, rgba(20,138,244,0.18) 48%, transparent 65%);"></div>
    </div>
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-10 lg:py-14 max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">System Planning</p>
        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
            Plan wet cleaning around <span style="color:#011E41;">volume, room fit and finishing</span>
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6 max-w-xl">
            A wet cleaning system should match garment type, daily volume, drying needs, utilities, finishing and budget. Irish Laundry Systems plans the washer, dryer, detergents and aftercare around the site.
        </p>
        <div class="flex items-center flex-wrap lg:flex-nowrap gap-x-5 gap-y-3 lg:gap-0 mb-7">
            @foreach([
                ['icon' => 'ativo-20', 'label' => 'Choose the right<br>system size'],
                ['icon' => 'ativo-8',  'label' => 'Build the<br>full process'],
                ['icon' => 'ativo-4',  'label' => 'Keep the equipment<br>supported'],
            ] as $i => $feat)
            @if($i > 0)
            @endif
            <div class="flex items-center gap-3">
                <img src="/images/icons/brand-white/{{ $feat['icon'] }}.svg" style="width:3.5rem;height:3.5rem;flex-shrink:0;" alt="">
                <span class="font-body text-white text-sm font-bold leading-snug">{!! $feat['label'] !!}</span>
            </div>
            @endforeach
        </div>
        <a href="{{ route('request-assessment') }}"
           class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
            Request Wet Cleaning Advice
        </a>
    </div>
</section>

{{-- 12. TECHNICAL PROOF --}}
<section class="py-12 lg:py-16 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Technical Proof</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Advanced care <span style="color:#148af4;">without slowing the business down</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed xl:whitespace-nowrap">
                Lagoon Advanced Care combines gentle textile action, load control, dosing, drying balance and intuitive controls for consistent garment care.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-4">
            @foreach([
                ['icon' => '35', 'title' => "ProV'tex hydraulic action",                'copy' => "Gentle hydraulic action replaces harsher mechanical action for effective cleaning and higher loading.", 'imgClass' => 'w-24 h-24 object-contain scale-[1.348] -translate-y-[8.7%]'],
                ['icon' => '8',  'title' => 'Integrated Savings and Intelligent Dosing', 'copy' => 'Defines the effective load and adjusts detergent and water levels, supporting cost control and consistent results.', 'imgClass' => 'w-24 h-24 object-contain scale-[1.348] -translate-y-[8.9%]'],
                ['icon' => '31', 'title' => 'Power Balance',                             'copy' => 'Activates the correct extraction force for the load to improve drying performance.', 'imgClass' => 'w-24 h-24 object-contain scale-[1.348] -translate-y-[8.7%]'],
                ['icon' => '7',  'title' => 'Moisture Balance',                          'copy' => 'Defines the right moisture level so garments are dried safely, reducing the risk of over-drying, shrinkage and wrinkles.', 'imgClass' => 'w-24 h-24 object-contain scale-[1.55] -translate-y-[17.4%]'],
                ['icon' => '4',  'title' => 'ClarusVibe',                                'copy' => 'A clear control interface makes Lagoon programmes easier to manage.', 'img' => '/images/icons/clarusvibe.jpeg', 'imgClass' => 'w-full h-24 object-cover rounded-lg'],
            ] as $card)
            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="{{ $card['img'] ?? '/images/icons/'.$card['icon'].'.png' }}" alt="" class="{{ $card['imgClass'] ?? 'w-28 h-28 object-contain' }}">
                </div>
                <h3 class="font-heading font-bold text-navy text-sm leading-snug">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-500 text-xs leading-relaxed flex-1">{{ $card['copy'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 13. DETERGENTS, PRESPOTTING & CONSUMABLES --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-start">

            <div class="reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Garment Care Chemistry</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-5">
                    Detergents for <span style="color:#148af4;">softer, fresher, ready-to-wear garments</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    Lagoon Advanced Care uses dedicated detergents, conditioners and prespotting products within the wet cleaning process.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    The right chemistry protects fibres, improves consistency and supports the garment finish customers expect.
                </p>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    Ask About Detergents and Consumables
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <div class="reveal reveal-right">
                <div class="bg-bg border border-gray-100 rounded-2xl p-7 lg:p-9">
                    <ul class="space-y-4">
                        @foreach(['Dedicated detergents', 'Sensitive conditioner', 'Prespotting support', 'Better finish control'] as $pt)
                        <li class="flex items-center gap-3">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-[#148af4]/10 flex items-center justify-center">
                                <svg class="w-4 h-4 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            </span>
                            <span class="font-body font-bold text-navy text-base">{{ $pt }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- DOSING INTELLIGENCE (Alpine carousel — matches sector pages) --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Dosing Intelligence</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3 xl:whitespace-nowrap">
                Use <span style="color:#148af4;">the correct amount,</span> every time
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed xl:whitespace-nowrap">
                Wet cleaning depends on the right detergent, dose and programme. Keep dosing matched to the load to reduce waste, protect garment quality and improve consistency.
            </p>
        </div>

        @php
        $dosingProducts = [
            [
                'name'   => 'Intelligent Dosing',
                'label'  => 'Dosing based on the load',
                'body'   => 'Intelligent Dosing adds detergent according to the load inside the drum, helping reduce overuse while protecting wash consistency.',
                'points' => ['Load-based dosing', 'Less waste', 'Better consistency', 'ClarusVibe where applicable'],
                'img'    => '/images/healthcare/efficientDosing_equip.webp',
            ],
            [
                'name'   => 'Multisave',
                'label'  => 'One dosing unit for multiple washers',
                'body'   => 'Multisave can connect up to 7 washing machines with one unit, supporting accurate consumption control in multi-washer laundry rooms.',
                'points' => ['Up to 7 washers', 'Lower setup complexity', 'Low running costs', 'Multi-machine control'],
                'img'    => '/images/healthcare/MultisaveEQUIP.webp',
            ],
            [
                'name'   => 'JETSAVE',
                'label'  => 'Lower upkeep with water-powered dosing',
                'body'   => 'JETSAVE uses water-powered pumps with no moving parts or squeeze tubes to replace, supporting reliable dosage and easier long-term upkeep.',
                'points' => ['Water-powered dosing', 'No squeeze tubes', 'Reliable dosage', 'Less maintenance'],
                'img'    => '/images/healthcare/JetsaveEQUIP.webp',
            ],
            [
                'name'   => 'DOSAVE',
                'label'  => 'Straightforward dosing setup',
                'body'   => 'DOSAVE uses peristaltic technology with easy installation and programming, supporting accurate dosing where this system is the best fit.',
                'points' => ['Easy installation', 'Easy programming', 'Accurate dosing', 'Savings-focused setup'],
                'img'    => '/images/healthcare/DOSAVEEQUIP.webp',
            ],
            [
                'name'   => 'Efficient Dosing',
                'label'  => 'Detergent control for selected CompassPro setups',
                'body'   => 'Efficient Dosing uses the correct amount of detergent for each cycle, supporting lower detergent costs and more controlled wash results.',
                'points' => ['Correct amount each cycle', 'Over 30% detergent cost saving where suitable', 'CompassPro', 'Cost control'],
                'img'    => '/images/healthcare/efficientDosing_equip.webp',
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

{{-- 14. OPTIONAL SERENITY CABINET --}}
<section class="py-12 lg:py-16 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-start">

            <div class="reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Optional Final Touch</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-5">
                    More than just <span style="color:#148af4;">clean and revitalised fibres</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    The Serenity Cabinet supports final touch, hygiene care and efficient drying for selected leathers and shoes within Lagoon Advanced Care.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    It is an optional specialist addition for businesses extending garment care before items return to customers.
                </p>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    Ask About Serenity Cabinet
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <div class="reveal reveal-right">
                <div class="bg-white border border-gray-100 rounded-2xl p-7 lg:p-9 shadow-sm">
                    <ul class="space-y-4">
                        @foreach(['Final touch support', 'Extra hygiene', 'Leathers and shoes', 'Premium garment care'] as $pt)
                        <li class="flex items-center gap-3">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-[#148af4]/10 flex items-center justify-center">
                                <svg class="w-4 h-4 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            </span>
                            <span class="font-body font-bold text-navy text-base">{{ $pt }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- 15. SERVICE AND SUPPORT OPTIONS --}}
<section class="py-16 lg:py-20 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">ILS Support</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Wet cleaning support from <span style="color:#148af4;">installation to aftercare</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed xl:whitespace-nowrap">
                Irish Laundry Systems supports Lagoon Advanced Care sites with equipment advice, installation, rental where suitable, Preventive Maintenance, repairs and aftercare.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                [
                    'title' => 'Equipment advice',
                    'text'  => 'Choose Lagoon Advanced Care around garment volume, room space, drying needs and budget.',
                    'cta'   => 'Request Advice',
                    'route' => route('request-assessment'),
                    'img'   => '/images/healthcare/services-overview-hero-portrait.jpg',
                    'pos'   => 'center center',
                ],
                [
                    'title' => 'Preventive Maintenance',
                    'text'  => 'Planned support to help keep the wet cleaning system easier to manage over time.',
                    'cta'   => 'View Preventive Maintenance',
                    'route' => route('service-contracts'),
                    'img'   => '/images/healthcare/service-contracts-hero.png',
                    'pos'   => '90% 35%',
                ],
                [
                    'title' => 'Equipment Rental',
                    'text'  => 'For businesses considering lower upfront cost where rental is suitable for the selected equipment and site needs.',
                    'cta'   => 'Ask About Equipment Rental',
                    'route' => route('rental'),
                    'img'   => '/images/healthcare/td6-11-multihousing-room-front.jpg',
                    'pos'   => '66% center',
                ],
                [
                    'title' => 'Repairs &amp; Aftercare',
                    'text'  => 'Follow-up care, service history and parts access where needed.',
                    'cta'   => 'Explore Support &amp; Aftercare',
                    'route' => route('parts-aftercare'),
                    'img'   => '/images/healthcare/repairs-callouts.jpg',
                    'pos'   => '50% 35%',
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

{{-- 16. COMPACT RESOURCES BAR (matches accessories/semi-professional design) --}}
<section class="py-8 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 lg:gap-10">
            @foreach([
                ['title' => 'Official Resources', 'links' => [
                    ['l' => 'Electrolux cleaning solution white paper', 'h' => '/pdfs/Electrolux_WhitePaper_CleaningSolution.pdf'],
                    ['l' => 'Lagoon Advanced Care resources', 'h' => route('resources')],
                    ['l' => 'Lagoon process video', 'h' => route('resources')],
                ]],
                ['title' => 'Related Equipment', 'links' => [
                    ['l' => 'Washing Machines', 'h' => route('equipment.category', ['category' => 'washers'])],
                    ['l' => 'Tumble Dryers', 'h' => route('equipment.category', ['category' => 'tumble-dryers'])],
                    ['l' => 'Finishing Equipment', 'h' => route('equipment.category', ['category' => 'finishing-equipment'])],
                    ['l' => 'Drying Cabinets', 'h' => route('equipment.category', ['category' => 'drying-cabinets'])],
                ]],
                ['title' => 'Advice & Support', 'links' => [
                    ['l' => 'Request advice', 'h' => route('request-assessment')],
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

{{-- 17. RELATED EQUIPMENT --}}
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Related Equipment</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Equipment for <span style="color:#148af4;">the wider textile care site</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed xl:whitespace-nowrap">
                Some wet cleaning sites may also need larger washers, dryers, finishing equipment or drying cabinets depending on the service they offer.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 reveal">
            @foreach([
                ['title' => 'Washing Machines', 'copy' => 'For larger laundry capacity, heavier use or wider commercial laundry demand.', 'cta' => 'View Washing Machine Options', 'route' => route('equipment.category', ['category' => 'washers']), 'img' => '/images/equipment/commercialwasher.webp', 'box' => 270],
                ['title' => 'Tumble Dryers',    'copy' => 'For drying demand that needs commercial capacity, control and reliability.', 'cta' => 'View Dryer Options', 'route' => route('equipment.category', ['category' => 'tumble-dryers']), 'img' => '/images/equipment/Tumble-dryers_Heat-Pump_1-1.webp', 'box' => 245],
                ['title' => 'Finishing Equipment',         'copy' => 'For ironing, form finishing, pressing and final presentation support.', 'cta' => 'View Finishing Equipment', 'route' => route('equipment.category', ['category' => 'finishing-equipment']), 'img' => '/images/equipment/IB623_FRONT_NEW.jpg', 'box' => 300],
                ['title' => 'Drying Cabinets',             'copy' => 'For garments, shoes, gloves and items that need controlled drying rather than tumble drying.', 'cta' => 'View Drying Cabinets', 'route' => route('equipment.category', ['category' => 'drying-cabinets']), 'img' => '/images/healthcare/Drying-cabinets_image.webp', 'box' => 260],
            ] as $card)
            <div class="flex flex-col gap-6 h-full">
                <div style="min-height:112px;">
                    <p class="font-heading font-bold text-navy text-2xl leading-snug mb-2">{{ $card['title'] }}</p>
                    <p class="font-body text-gray-600 text-base leading-relaxed">{{ $card['copy'] }}</p>
                </div>
                <div class="w-full flex items-end justify-center" style="height:300px;">
                    <img src="{{ $card['img'] }}" alt="{{ $card['title'] }}" loading="lazy" decoding="async"
                         class="transition-transform duration-500 hover:-translate-y-2"
                         style="width:{{ $card['box'] }}px; max-width:100%; height:{{ $card['box'] }}px; object-fit:contain;">
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

{{-- 18. FAQ --}}
@include('components.faq', [
    'eyebrow' => 'Wet Cleaning FAQs',
    'heading' => 'Questions before choosing <span style="color:#148af4;">Lagoon Advanced Care</span>',
    'faqs' => [
        ['question' => 'What is professional wet cleaning?', 'answer' => 'Professional wet cleaning is a garment care process that uses water, specialist detergents, controlled mechanical action, drying and finishing to clean delicate garments and textiles without traditional solvent-based cleaning.'],
        ['question' => 'Is Lagoon Advanced Care a dry cleaning alternative?', 'answer' => 'Yes. Electrolux Professional positions Lagoon Advanced Care as a wet cleaning system for delicate garments, leathers and shoes, and as a serious alternative to traditional solvent-based cleaning.'],
        ['question' => 'How fast is the Lagoon Advanced Care process?', 'answer' => 'The Lagoon Advanced Care process is built around a 55-minute benchmark for suitable garments, combining prespotting, cleaning, drying and finishing. Leathers and shoes may require longer drying time.'],
        ['question' => 'What types of garments can Lagoon Advanced Care handle?', 'answer' => 'Lagoon Advanced Care is designed for delicate garments and textiles, including wool, silk, cashmere, coats, formalwear, uniforms and many specialist items. It can also treat most leathers and shoes with the right process.'],
        ['question' => 'What proof supports Lagoon Advanced Care?', 'answer' => "Lagoon Advanced Care carries Woolmark approval, Hohenstein Institute testing, ErgoCert ergonomic certification and Electrolux Professional technologies including ProV'tex, Integrated Savings, Intelligent Dosing, Power Balance and Moisture Balance."],
        ['question' => 'Can Irish Laundry Systems help plan the full wet cleaning setup?', 'answer' => 'Yes. Irish Laundry Systems reviews garment volume, room layout, drying needs, finishing requirements, utilities and budget before recommending the right wet cleaning setup.'],
        ['question' => 'Can wet cleaning equipment be rented?', 'answer' => 'Rental may be available where the selected equipment and site needs are suitable. Irish Laundry Systems can advise whether rental, purchase or another equipment option is the better fit.'],
    ],
])

{{-- 19. FINAL CTA / FORM --}}
@include('components.cta-downtime-form', [
    'pageSource' => 'wet_cleaning_cta',
    'heading'    => 'Ready to build a stronger garment care service <span style="color:#148af4;">for your business</span>?',
    'body'       => 'Tell Irish Laundry Systems what you clean, how many items you process each day and what you want to offer. We\'ll review Lagoon Advanced Care, installation, rental, maintenance and aftercare around your site.',
    'formTitle'  => 'Request Wet Cleaning Equipment Advice',
    'buttonText' => 'Request Wet Cleaning Advice',
])

@endsection
