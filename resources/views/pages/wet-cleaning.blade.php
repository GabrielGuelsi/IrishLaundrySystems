@extends('layouts.app')

@section('pageTitle', 'Wet Cleaning Equipment Ireland | Lagoon Advanced Care | Irish Laundry Systems')

@section('meta')
<meta name="description" content="Professional wet cleaning equipment for dry cleaners, garment care businesses and textile care sites. Lagoon Advanced Care supplied and supported by Irish Laundry Systems.">
@endsection

@section('content')

{{-- 1. HERO --}}
<section class="relative overflow-hidden flex flex-col lg:!h-[720px]" style="height:auto; min-height:560px;">
    <img src="/images/pages/wet-cleaning/lagoon-advanced-care-internal.jpg" alt="Wet cleaning equipment"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.75) 42%, rgba(1,30,65,0.35) 65%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 sm:py-20 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-3xl">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Wet Cleaning Equipment</p>
                <h1 class="font-heading font-bold text-white text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-6">
                    <span class="sm:block">Professional wet cleaning for delicate garments</span>
                    <span class="sm:block">and <span style="color:#148af4;">specialist textile care</span></span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8">
                    <span class="sm:block lg:whitespace-nowrap">Irish Laundry Systems supplies, installs and supports Electrolux Professional lagoon® Advanced Care across Ireland</span>
                    <span class="sm:block lg:whitespace-nowrap">for dry cleaners and professional garment care businesses.</span>
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Wet Cleaning Advice
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white hover:border-white/70 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        Explore lagoon® Advanced Care
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 2. UNIVERSAL THIN ELECTROLUX TRUST STRIP --}}
@include('components.partner-strip')

{{-- 3. INTRO / BRIDGE --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Wet Cleaning Planning</p>
        <div class="grid grid-cols-1 lg:grid-cols-[3fr_2fr] gap-12 lg:gap-16 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-[2rem] 2xl:text-[2.4rem] leading-tight">
                    <span class="sm:block">Plan the wet-cleaning system around</span>
                    <span class="sm:block">garment mix, daily volume</span>
                    <span class="sm:block">and <span style="color:#148af4;">finishing requirements</span></span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    Washer and dryer capacity, detergent requirements and finishing equipment all influence how the system is configured.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed">
                    Reviewing them together gives a clearer basis for equipment selection and installation.
                </p>
            </div>

        </div>
    </div>
</section>

{{-- 4. WET CLEANING BUSINESS CASE --}}
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Business Case</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-[2rem] 2xl:text-[2.4rem] leading-tight text-balance mb-3">
                Expand your garment care offer with <span style="color:#148af4;">fast, solvent-free wet cleaning</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Faster turnaround, specialist garment care and more work handled in-house.
            </p>
        </div>

        {{-- Card photos are placeholders until the approved Canva images land --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 reveal mb-8">
            @foreach([
                ['title' => 'Fast results',           'copy' => 'Dry-to-Dry in 1 hour helps garments move through the process faster, with no hang-drying required.',        'img' => '/images/pages/wet-cleaning/lagoon-advanced-care-internal.jpg', 'pos' => 'center center'],
                ['title' => 'Delicate Garment Care',  'copy' => 'Designed for delicate garments, fine textiles, selected leathers and shoes.',                                'img' => '/images/pages/services/services-overview-hero.jpg',        'pos' => 'center center'],
                ['title' => 'Solvent-free process',   'copy' => 'A water-based process for businesses moving beyond traditional solvent-based cleaning.',                      'img' => '/images/pages/accessories/eco-detergents.webp',                'pos' => 'center center'],
                ['title' => 'More Services In-House',  'copy' => 'Handle more specialist textile care in-house.',                 'img' => '/images/shared/render-double-page_72dpi.jpg',      'pos' => 'center center'],
            ] as $card)
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden flex flex-col">
                <img src="{{ $card['img'] }}" alt="{{ $card['title'] }}" loading="lazy" decoding="async"
                     class="w-full h-44 object-cover" style="object-position: {{ $card['pos'] }};">
                <div class="p-6">
                    <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-2">{{ $card['title'] }}</h3>
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
<section class="py-20 lg:py-28 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Financial Performance</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Balance processing capacity with <span style="color:#148af4;">running-cost control</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Lagoon Advanced Care helps professional cleaners use time, load capacity and resources more effectively.
            </p>
        </div>

        @include('components.financial-metrics', ['items' => [
            ['icon'=>'202',  'prefix'=>'',      'stat'=>'55<br>Minutes',        'size'=>'text-2xl', 'label'=>'Faster Process', 'labelClass'=>'translate-y-2', 'iconClass'=>'scale-[1.213] translate-y-[3%]', 'body'=>'For many garments, the complete lagoon® process can take 55 minutes.'],
            ['icon'=>'221',  'prefix'=>'Up to', 'stat'=>'75%<br>Loading',       'size'=>'text-2xl', 'label'=>'More Capacity', 'labelClass'=>'translate-y-2', 'iconClass'=>'scale-[1.067] translate-y-[0.4%]', 'body'=>'Higher loading factors make better use of available drum space.'],
            ['icon'=>'162', 'prefix'=>'Up to',  'stat'=>'50%<br>Increase',      'size'=>'text-2xl', 'label'=>'Production Increase', 'labelClass'=>'translate-y-2', 'iconClass'=>'scale-[0.928]', 'body'=>'Correct drum loading can increase production by up to 50% per load.'],
            ['icon'=>'37',   'prefix'=>'',      'stat'=>'Lower<br>Consumption', 'size'=>'text-2xl', 'label'=>'Resource Control', 'labelClass'=>'translate-y-2', 'iconClass'=>'scale-[1.067] -translate-y-[1.1%]', 'body'=>'Control water, energy and detergent use across daily wet cleaning.'],
            ['icon'=>'23',  'prefix'=>'',       'stat'=>'70–400<br>Items',      'size'=>'text-2xl', 'label'=>'Daily Capacity', 'labelClass'=>'translate-y-2', 'iconClass'=>'scale-[0.785] translate-y-[1.4%]', 'statClass'=>'translate-x-3', 'body'=>'Selected system combinations support 70–400 items per average 8-hour working day.'],
        ]])
    </div>
</section>

{{-- 6. TECHNICAL PROOF --}}
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Wet Cleaning Technology</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Technology for <span style="color:#148af4;">controlled delicate textile care</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                lagoon® Advanced Care combines reduced mechanical action, dedicated programmes and precise detergent dosing for wool, silk and other delicate textiles.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-3">
            @foreach([
                ['icon' => '193', 'title' => "ProV'tex Hydraulic Action", 'copy' => 'Controlled water movement replaces harsh mechanical action, cleaning delicate textiles with less stress on the fabric.', 'imgClass' => 'w-24 h-24 object-contain scale-[1.083] translate-y-[0.6%]'],
                ['icon' => 'dosing-control',  'title' => 'Intelligent Dosing',        'copy' => 'Detergent and water levels are adjusted around the load, keeping each programme properly balanced.', 'imgClass' => 'w-24 h-24 object-contain scale-[0.892] -translate-y-[9.3%]'],
                ['icon' => '213', 'title' => 'Power Balance',             'copy' => 'Extraction force is adjusted to keep the load balanced and ready for safer drying.', 'imgClass' => 'w-24 h-24 object-contain scale-[0.875] translate-y-[0.5%]'],
                ['icon' => '7',  'title' => 'Moisture Balance',          'copy' => 'Moisture levels are controlled so garments are dried safely without unnecessary over-drying.', 'imgClass' => 'w-24 h-24 object-contain scale-[1.008] -translate-y-[17.4%]'],
                ['icon' => '4',  'title' => 'ClarusVibe Controls',       'copy' => 'A clear touchscreen interface makes Lagoon programmes easier for staff to select and manage.', 'img' => '/images/icons/clarusvibe.jpeg', 'imgClass' => 'w-full h-24 object-cover rounded-lg'],
            ] as $card)
            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm {{ $loop->last ? 'col-span-2 lg:col-span-1' : 'col-span-1' }}">
                <div class="flex items-center justify-center h-32">
                    <img src="{{ $card['img'] ?? '/images/icons/'.$card['icon'].'.png' }}" alt="" class="{{ $card['imgClass'] ?? 'w-24 h-24 object-contain' }}">
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

{{-- 7. CERTIFIED TEXTILE CARE --}}
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Tested &amp; Certified</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Recognised proof for <span style="color:#148af4;">textile care and equipment design</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Lagoon Advanced Care brings recognised textile care proof for garments customers value.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 reveal">
            @foreach([
                ['title' => 'Woolmark Approved',          'img' => '/images/pages/wet-cleaning/woolmark-approved.png',    'copy' => 'Approved programmes support professional care for eligible wool garments in specified markets.'],
                ['title' => 'Tested by Hohenstein',        'img' => '/images/pages/wet-cleaning/tested-by-hohenstein.png', 'copy' => 'Independent testing assessed textile wear, dimensional change and colour loss after repeated cycles.'],
                ['title' => 'ErgoCert Certified',          'img' => '/images/icons/227.png', 'imgClass' => 'scale-[1.25]',  'copy' => 'Washer and dryer design supports safer, more comfortable operator use.'],
            ] as $card)
            <div class="bg-white border border-gray-100 rounded-2xl p-7 flex flex-col h-full shadow-sm text-center">
                <div class="h-32 flex items-center justify-center mb-4">
                    <img src="{{ $card['img'] }}" alt="{{ $card['title'] }}" class="max-h-32 w-auto object-contain {{ $card['imgClass'] ?? '' }}">
                </div>
                <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-2">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $card['copy'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 7. LAGOON PROCESS / INFOGRAPHIC + VIDEO --}}
<section class="py-20 lg:py-28 bg-gray-50 overflow-x-hidden">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        @php
            // Official process infographic (Trello asset) — becomes the main piece once saved to this path.
            $lagoonInfographic = file_exists(public_path('images/pages/wet-cleaning/lagoon-process-infographic.webp'));
        @endphp
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">

            <div class="lg:col-span-5 reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Lagoon Process</p>
                <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-5">
                    See how garments move through <span style="color:#148af4;">a faster wet cleaning process</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed">
                    Lagoon Advanced Care brings prespotting, cleaning, drying and finishing into one controlled process, helping suitable garments move from received to ready without hang-drying.
                </p>
            </div>

            <div class="lg:col-span-7 reveal reveal-right">
                @if($lagoonInfographic)
                <img src="/images/pages/wet-cleaning/lagoon-process-infographic.webp" alt="Lagoon Advanced Care process — from received to ready"
                     class="w-full h-auto rounded-2xl mb-6">
                <div id="lagoon-process-video" class="relative rounded-2xl overflow-hidden bg-navy max-w-sm">
                    <video class="w-full h-full object-cover" controls preload="metadata" playsinline>
                        <source src="/images/pages/wet-cleaning/EPR_lagoon_Advanced_Care_ENG_1-1_3.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                @else
                <div id="lagoon-process-video" class="relative rounded-2xl overflow-hidden bg-navy max-w-xl mx-auto">
                    <video class="w-full h-full object-cover" controls preload="metadata" playsinline>
                        <source src="/images/pages/wet-cleaning/EPR_lagoon_Advanced_Care_ENG_1-1_3.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                @endif
            </div>

        </div>
    </div>
</section>

{{-- 8. SYSTEM COMPONENTS --}}
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Complete Wet Cleaning Setup</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Plan the complete wet cleaning setup around <span style="color:#148af4;">garments, volume and finishing needs</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                Match each part of the setup to the garments, daily volume and available space.
            </p>
        </div>

        {{-- Image slots (internal): 01 approved Lagoon Advanced Care washer · 02 matching Lagoon dryer · 03 Lagoon detergents, conditioner and prespotting products · 04 wet-cleaning ironing table / form finisher (not a rolling ironer) · 05 drying cabinet / Serenity Cabinet --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-5 reveal">
            @foreach([
                ['step' => '01', 'title' => 'Washer',                    'copy' => 'Professional wet cleaning for delicate garments and specialist textiles.', 'img' => '/images/pages/commercial-washers/WS6 — Line 6000 High-Spin Washer.jpg'],
                ['step' => '02', 'title' => 'Dryer',                     'copy' => 'Dry suitable garments without relying on hang-drying.', 'img' => '/images/pages/dryers/TD6-14.jpg'],
                ['step' => '03', 'title' => 'Detergents',                'copy' => 'Dedicated products support consistent care across garment types.', 'img' => '/images/pages/accessories/prespotting-prebrushing-agents.png'],
                ['step' => '04', 'title' => 'Finishing Equipment',       'copy' => 'Tables and finishers prepare garments for return to customers.', 'img' => '/images/pages/finishing-equipment/FIT1-WC.jpg'],
                ['step' => '05', 'title' => 'Optional Serenity Cabinet',   'copy' => 'Optional cabinet finishing for selected garments and specialist items.', 'img' => '/images/pages/finishing-equipment/FC48.jpg'],
            ] as $comp)
            <div class="relative flex flex-col h-full">
                @unless($loop->last)
                <div class="hidden xl:block absolute top-[104px] -right-7 z-10">
                    <svg class="w-9 h-5 text-[#148af4]" viewBox="0 0 48 24" fill="none"><path d="M2 12 L42 12 M34 5 L42 12 L34 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                @endunless
                <div class="w-full flex items-end justify-center mb-5" style="height:240px;">
                    <img src="{{ $comp['img'] }}" alt="{{ $comp['title'] }}" loading="lazy" decoding="async" class="max-h-full w-auto object-contain">
                </div>
                <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-2">{{ $comp['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $comp['copy'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="mt-10 rounded-2xl bg-navy px-6 lg:px-10 py-7 flex flex-col lg:flex-row lg:items-start gap-6 lg:gap-8 reveal">
            @foreach([
                ['t' => 'One matched system',             'd' => 'Washer, dryer, detergents and finishing support planned together.',   'img' => '205', 'sc' => 'scale-[1.43]'],
                ['t' => 'Less hang-drying pressure',      'd' => 'Drying and finishing support matched to suitable garment types.',      'img' => '228', 'sc' => 'scale-[1.914]'],
                ['t' => 'Better care for delicate items', 'd' => 'Wet cleaning setup planned around garment finish and fabric care.',    'img' => '229', 'sc' => 'scale-[1.667]'],
            ] as $i => $b)
            <div class="flex items-start gap-4 lg:flex-1 {{ $i > 0 ? 'lg:border-l lg:border-white/15 lg:pl-8' : '' }}">
                <span class="flex-shrink-0 flex items-center justify-center">
                    @if(!empty($b['img']))
                    <img src="/images/icons/{{ $b['img'] }}.png" alt="" aria-hidden="true" class="w-14 h-14 object-contain" style="filter:brightness(0) invert(1);">
                    @else
                    <svg class="w-14 h-14 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $b['icon'] }}"/></svg>
                    @endif
                </span>
                <span>
                    <span class="block font-heading font-bold text-white text-sm mb-1">{{ $b['t'] }}</span>
                    <span class="block font-body text-white/70 text-xs leading-relaxed">{{ $b['d'] }}</span>
                </span>
            </div>
            @endforeach
            <div class="flex items-start gap-4 lg:flex-1 lg:border-l lg:border-white/15 lg:pl-8">
                <span class="flex-shrink-0 flex items-center justify-center">
                    <img src="/images/icons/230.png" alt="" aria-hidden="true" class="w-14 h-14 object-contain" style="filter:brightness(0) invert(1);">
                </span>
                <span>
                    <span class="block font-heading font-bold text-white text-sm mb-2">Need setup advice?</span>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold text-sm px-5 py-2.5 rounded-lg transition-colors duration-200">
                        Get in touch
                    </a>
                </span>
            </div>
        </div>
    </div>
</section>

{{-- 9. CAPACITY PLANNING / VOLUME ACCORDION --}}
<section class="py-20 lg:py-28 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Capacity Planning</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-[2rem] 2xl:text-[2.4rem] leading-tight text-balance mb-3">
                Plan the Lagoon setup around <span style="color:#148af4;">daily volume and available space</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Match the washer, dryer, finishing equipment and optional cabinet support to your expected items per day.
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
                            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-1">{{ $lbl }}</p>
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
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Where It Fits</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-[2rem] 2xl:text-[2.4rem] leading-tight text-balance mb-3">
                Explore garments and fabrics suited to <span style="color:#148af4;">professional wet cleaning</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                Garment type, fabric and care requirements determine the programme used for each item.
            </p>
        </div>

        @php
        $fitCards = [
            ['title' => 'Delicate garments',         'copy' => 'For garments that need professional wet cleaning with gentler fabric care.',         'img' => '/images/pages/wet-cleaning/103.png', 'pos' => 'center center'],
            ['title' => 'Leathers',                  'copy' => 'For selected leather items that need specialist cleaning and revitalising.',         'img' => '/images/pages/wet-cleaning/104.png', 'pos' => 'center center'],
            ['title' => 'Wool and silk',             'copy' => 'For delicate fibres that need careful programme control.',                           'img' => '/images/pages/wet-cleaning/105.png', 'pos' => 'center center'],
            ['title' => 'Cotton, linen and viscose', 'copy' => 'For common garment fabrics that need consistent professional care.',                  'img' => '/images/pages/wet-cleaning/106.png', 'pos' => 'center center'],
            ['title' => 'Dry-clean-only garments',   'copy' => 'For Woolmark garments labelled as dry-clean only, where approved programmes apply.', 'img' => '/images/pages/wet-cleaning/107.png', 'pos' => 'center center'],
            ['title' => 'Shoes',                     'copy' => 'For selected shoes that can be treated through the Lagoon process.',                  'img' => '/images/pages/wet-cleaning/108.png', 'pos' => 'center center'],
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
                        <div class="group relative overflow-hidden rounded-2xl aspect-square">
                            <img src="{{ $card['img'] }}" alt="{{ strip_tags($card['title']) }}"
                                 class="absolute inset-0 w-full h-full object-cover scale-[1.65] transition-transform duration-700 group-hover:scale-[1.73]"
                                 style="object-position: {{ $card['pos'] ?? 'center center' }};">
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

{{-- 11. SYSTEM PLANNING / SITE FIT STRIP — the page's ONLY full-width blue strip --}}
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/shared/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.82) 8%, rgba(20,138,244,0.45) 28%, rgba(20,138,244,0.18) 48%, transparent 65%);"></div>
    </div>
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-10 lg:py-14 max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">System Planning</p>
        <h2 class="font-heading font-bold text-white text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
            Plan wet cleaning around <span style="color:#011E41;">garment volume, room fit and finishing</span>
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6 max-w-xl">
            Match the washer, dryer, detergents and finishing setup to daily garment volume, room conditions and aftercare before installation.
        </p>
        <div class="flex items-center flex-wrap gap-x-4 gap-y-2 mb-7">
            @foreach([
                ['icon' => 'aftercarehealthcarestrip2', 'label' => 'System<br>size', 'sc' => 'scale-[0.932] translate-y-[0.3%]'],
                ['icon' => '231', 'label' => 'Drying<br>fit', 'sc' => 'scale-[0.967] translate-y-[1%]'],
                ['icon' => '151', 'label' => 'Aftercare<br>support', 'sc' => 'scale-[0.84] -translate-y-[0.9%]'],
            ] as $pt)
            <span class="flex items-center gap-2 flex-shrink-0">
                <img src="/images/icons/{{ $pt['icon'] }}.png" alt="" aria-hidden="true" class="h-14 w-auto object-contain {{ $pt['sc'] ?? '' }}" style="filter:brightness(0) invert(1);">
                <span class="font-body text-white text-sm font-bold leading-tight">{!! $pt['label'] !!}</span>
            </span>
            @endforeach
        </div>
        <a href="{{ route('request-assessment') }}"
           class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
            Request Wet Cleaning Advice
        </a>
    </div>
</section>

{{-- 13. SMART DETERGENTS & PRESPOTTING — quick-scan chemistry flow --}}
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Smart Detergents &amp; Prespotting</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Dedicated products for <span style="color:#148af4;">controlled wet cleaning results</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                lagoon® detergents, conditioner and prespotting products work with programmed dosing for consistent textile care.
            </p>
        </div>

        {{-- Product flow: prespotting + detergents + conditioner + dosing = finish (joined by plus signs at mid-height, equals before the result) --}}
        @php
        $lagoonFlow = [
            ['step' => '01', 'label' => 'Prespotting Range',       'imgs' => ['/images/pages/accessories/prespotting-prebrushing-agents.png'], 'imgClass' => 'max-h-[200px]'],
            ['step' => '02', 'label' => 'Dedicated Detergents',    'imgs' => ['/images/pages/accessories/lagoon-w01-sensitive-detergent.png'], 'imgClass' => 'max-h-[200px]'],
            ['step' => '03', 'label' => 'Fabric Conditioner',      'imgs' => ['/images/pages/accessories/lagoon-w03-sensitive-conditioner.png'], 'imgClass' => 'max-h-[200px]'],
            ['step' => '04', 'label' => 'Programme &amp; Dosing',  'imgs' => ['/images/shared/DOSAVEEQUIP.webp'], 'imgClass' => 'max-h-[200px]'],
            ['step' => '05', 'label' => 'Consistent Care &amp; Finish', 'imgs' => ['/images/pages/wet-cleaning/consistent-care-finish.png'], 'imgClass' => 'max-h-[200px]'],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-10 lg:gap-14 mb-10 reveal">
            @foreach($lagoonFlow as $s)
            <div class="flex flex-col items-center text-center">
                <div class="relative w-full flex flex-col items-center justify-center gap-2 mb-5" style="height:220px;">
                    @unless($loop->last)
                    <div class="hidden lg:flex absolute inset-y-0 items-center justify-center w-14" style="right:-56px;" aria-hidden="true">
                        <span class="font-heading font-bold text-navy text-4xl leading-none select-none">{{ $loop->iteration === 4 ? '=' : '+' }}</span>
                    </div>
                    @endunless
                    @foreach($s['imgs'] as $img)
                    <img src="{{ $img }}" alt="{{ strip_tags($s['label']) }}" loading="lazy" decoding="async" class="{{ $s['imgClass'] }} w-auto object-contain">
                    @endforeach
                </div>
                <span class="font-heading font-bold text-[#148af4] text-sm mb-1">{{ $s['step'] }}</span>
                <h3 class="font-heading font-bold text-navy text-xl">{!! $s['label'] !!}</h3>
            </div>
            @endforeach
        </div>

        <div class="reveal">
            <a href="{{ route('request-assessment') }}"
               class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                Request Wet Cleaning Advice
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- DOSING INTELLIGENCE (Alpine carousel — matches sector pages) --}}
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Dosing Intelligence</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Keep wet cleaning <span style="color:#148af4;">consistent from load to load</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Automatic dosing controls detergent use for consistent textile care with less waste.
            </p>
        </div>

        @php
        $dosingProducts = [
            [
                'name'   => 'Intelligent Dosing',
                'label'  => 'Dosing based on the load',
                'body'   => 'Intelligent Dosing adds detergent according to the load inside the drum, helping reduce overuse while protecting wash consistency.',
                'points' => ['Load-based dosing', 'Less waste', 'Better consistency', 'ClarusVibe where applicable'],
                'logos'  => ['clarusvibe'],
                'img'    => '/images/shared/efficientDosing_equip.webp',
            ],
            [
                'name'   => 'Multisave',
                'label'  => 'One unit for multiple washers',
                'body'   => 'Connects up to seven washing machines with one unit for simpler dosing control.',
                'points' => ['Up to 7 washers', 'Multi-machine control', 'Controlled consumption'],
                'logos'  => ['clarusvibe', 'compasspro'],
                'img'    => '/images/shared/MultisaveEQUIP.webp',
                'scene'  => '/images/pages/accessories/MULTISAVE.png',
            ],
            [
                'name'   => 'JETSAVE',
                'label'  => 'Lower-maintenance dosing control',
                'body'   => 'Uses water-powered pumps with no moving parts or squeeze tubes to replace.',
                'points' => ['Water-powered pumps', 'Fewer wear points', 'Lower maintenance'],
                'logos'  => ['clarusvibe'],
                'img'    => '/images/shared/JetsaveEQUIP.webp',
                'scene'  => '/images/pages/accessories/JETSAVE.png',
            ],
            [
                'name'   => 'DOSAVE',
                'label'  => 'Programmable dosing support',
                'body'   => 'A peristaltic dosing option for easy connection, programming and controlled detergent delivery.',
                'points' => ['Peristaltic pumps', 'Easy programming', 'Controlled delivery'],
                'logos'  => ['clarusvibe'],
                'img'    => '/images/shared/DOSAVEEQUIP.webp',
                'scene'  => '/images/pages/accessories/DOSAVE.jpg',
            ],
            [
                'name'   => 'Efficient Dosing',
                'label'  => 'Adjust detergent to the real load',
                'body'   => 'Measures the load at the start of the programme and adjusts detergent use to match the cycle.',
                'points' => ['Real load measured', 'Less overuse', 'Cost control'],
                'logos'  => ['compasspro'],
                'img'    => '/images/shared/efficientDosing_equip.webp',
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
                            <img src="{{ $p['scene'] ?? '/images/shared/Laundry-Double-Banner-965x965-1.webp' }}"
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
                                        @if(in_array('clarusvibe', $p['logos'] ?? []))
                                        <img src="/images/shared/clarusvibeicon.webp" alt="ClarusVibe" class="h-12 w-auto object-contain opacity-80">
                                        @endif
                                        @if(in_array('compasspro', $p['logos'] ?? []))
                                        <img src="/images/shared/Compass-Pro_1-300x88.webp" alt="CompassPro" class="h-12 w-auto object-contain opacity-80">
                                        @endif
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

{{-- 14. SERENITY CABINET SUPPORT — bento --}}
{{-- Asset notes (internal): lifestyle slot = garments being handled/tried on before return; video stays a small
     thumbnail (Serenity clip when available); no ghost mannequins or AI-generated garments in the reassurance card;
     right column stays lighter than the product side. --}}
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Optional Serenity Cabinet</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-[2rem] 2xl:text-[2.4rem] leading-tight text-balance mb-4">
                Add an <span style="color:#148af4;">optional sanitising step</span> before garments are returned
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                Serenity Cabinet provides a fully automatic steam-based cycle for selected garments.
            </p>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold text-sm px-6 py-3.5 rounded-lg transition-colors duration-200 whitespace-nowrap mt-6">
                Ask About Serenity Cabinet
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 reveal">

            {{-- Serenity Cabinet — large product visual overlapping the RISE / SARS-CoV-2 proof panel (image pops in front, panel peeks from behind) --}}
            <div class="lg:col-span-4 flex flex-col">
                <div class="relative">
                    {{-- RISE panel behind, indented left so the cabinet image overlaps it --}}
                    <div class="ml-24 sm:ml-28 bg-white border border-gray-100 shadow-sm rounded-2xl pl-28 sm:pl-32 pr-5 py-6 min-h-[280px] flex flex-col justify-center">
                        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-2">RISE Confirmed</p>
                        <p class="font-heading font-bold text-navy text-lg leading-snug mb-2">Log 6 SARS-CoV-2 Reduction</p>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">RISE confirmed reduced SARS-CoV-2 infectivity on textiles treated in the Serenity Cabinet.</p>
                    </div>
                    {{-- Cabinet image in front, large, popping out on the left and top/bottom --}}
                    <img src="/images/pages/wet-cleaning/Serenity Cabinet.jpg" alt="Serenity Cabinet" loading="lazy" decoding="async"
                         class="absolute left-0 top-1/2 -translate-y-1/2 w-52 sm:w-56 h-auto object-contain z-10 drop-shadow-xl">
                </div>
                <p class="font-heading font-bold text-navy text-sm mt-4 pl-2">Serenity Cabinet</p>
            </div>

            {{-- lifestyle + features --}}
            <div class="lg:col-span-4 flex flex-col gap-5">
                <img src="/images/pages/wet-cleaning/serenitywomencabinet3.png" alt="Garments prepared before returning to customers" loading="lazy" decoding="async"
                     class="w-full aspect-video object-cover rounded-2xl">
                <div class="bg-white border border-gray-100 rounded-2xl px-6 py-2 shadow-sm flex-1">
                    <ul class="divide-y divide-gray-100">
                        @foreach([
                            ['t' => 'Up to 30 items per cycle',            'img' => '/images/icons/234.png', 'imgClass' => 'w-10 h-10 object-contain scale-[1.988] translate-y-[0.7%]'],
                            ['t' => '6–10 minute cycles',                  'img' => '/images/icons/202.png', 'imgClass' => 'w-10 h-10 object-contain scale-[1.591] translate-y-[4%]'],
                            ['t' => 'Programmes for different textiles',   'img' => '/images/icons/232.png', 'imgClass' => 'w-10 h-10 object-contain scale-[1.667] translate-y-[0.6%]'],
                        ] as $feat)
                        <li class="flex items-center gap-4 py-4">
                            <img src="{{ $feat['img'] }}" alt="" class="flex-shrink-0 {{ $feat['imgClass'] }}">
                            <span class="font-body font-bold text-navy text-sm">{{ $feat['t'] }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            {{-- video thumbnail + reassurance microcards --}}
            <div class="lg:col-span-4 flex flex-col gap-5">
                <div class="rounded-2xl overflow-hidden bg-navy">
                    <div class="relative w-full aspect-video">
                        <iframe class="absolute inset-0 w-full h-full"
                                src="https://www.youtube.com/embed/PCxXGazXIoU"
                                title="See Serenity Cabinet in action"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <div class="px-5 py-4">
                        <p class="font-heading font-bold text-white text-sm mb-0.5">See Serenity Cabinet in action</p>
                        <p class="font-body text-white/70 text-xs">Steam-based garment sanitising support</p>
                    </div>
                </div>
                <div class="bg-navy rounded-2xl p-5 flex items-start gap-4">
                    <img src="/images/icons/2.png" alt="" class="flex-shrink-0 w-14 h-14 object-contain">
                    <span>
                        <span class="block font-heading font-bold text-white text-sm mb-1">Steam-based sanitising support</span>
                        <span class="block font-body text-white/70 text-xs leading-relaxed">Extra reassurance for tried-on, handled or returned garments.</span>
                    </span>
                </div>
                <div class="bg-[#148af4]/10 rounded-2xl p-5 flex items-start gap-4 flex-1">
                    <img src="/images/icons/233.png" alt="" class="flex-shrink-0 w-14 h-14 object-contain">
                    <span>
                        <span class="block font-heading font-bold text-navy text-sm mb-1">Before Customer Return</span>
                        <span class="block font-body text-gray-500 text-xs leading-relaxed">An additional sanitising step for selected garments before collection.</span>
                    </span>
                </div>
            </div>

        </div>

        {{-- Serenity Cabinet brochure --}}
        <div class="mt-10 rounded-2xl bg-navy px-6 lg:px-10 py-7 flex flex-col sm:flex-row sm:items-center gap-5 reveal">
            <div class="flex items-center gap-4 flex-1">
                <img src="/images/icons/230.png" alt="" aria-hidden="true" class="w-12 h-12 object-contain flex-shrink-0" style="filter:brightness(0) invert(1);">
                <div>
                    <p class="font-heading font-bold text-white text-base mb-0.5">Serenity Cabinet brochure</p>
                    <p class="font-body text-white/70 text-sm">Full product details, specifications and programmes (PDF).</p>
                </div>
            </div>
            <a href="/pdfs/EPR_Serenity_Cabinet_leaflet_ENG_LR.pdf" target="_blank" rel="noopener"
               class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold text-sm px-6 py-3.5 rounded-lg transition-colors duration-200 flex-shrink-0 whitespace-nowrap">
                Download Brochure (PDF)
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v11m0 0l4-4m-4 4l-4-4M4.5 19.5h15"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- 15. SERVICE AND SUPPORT OPTIONS --}}
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Service Support</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Wet cleaning support from <span style="color:#148af4;">installation to aftercare</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed xl:whitespace-nowrap">
                Irish Laundry Systems supports wet cleaning equipment after installation, with repairs, Preventive Maintenance, rental where suitable and long-term aftercare.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                [
                    'title' => 'Repairs &amp; Call-Outs',
                    'text'  => 'For wet cleaning equipment issues that need assessment, repair support and clear next steps.',
                    'cta'   => 'View Repairs &amp; Call-Outs',
                    'route' => route('repairs'),
                    'img'   => '/images/shared/repairs-callouts.jpg',
                    'pos'   => '50% 35%',
                ],
                [
                    'title' => 'Preventive Maintenance',
                    'text'  => 'Planned servicing to keep wet cleaning equipment checked, maintained and better protected against avoidable disruption.',
                    'cta'   => 'View Preventive Maintenance',
                    'route' => route('service-contracts'),
                    'img'   => '/images/shared/service-contracts-hero.png',
                    'pos'   => '90% 35%',
                ],
                [
                    'title' => 'Equipment Rental',
                    'text'  => 'Access selected Electrolux Professional equipment with lower upfront cost where rental is suitable.',
                    'cta'   => 'Ask About Equipment Rental',
                    'route' => route('rental'),
                    'img'   => '/images/shared/td6-11-multihousing-room-front.jpg',
                    'pos'   => '66% center',
                ],
                [
                    'title' => 'Support &amp; Aftercare',
                    'text'  => 'Keep service history, parts access and aftercare clear after the wet cleaning system is installed.',
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

{{-- RESOURCES BAR (slim inline) --}}
@include('components.resources-bar', ['groups' => [
                ['title' => 'Official Resources', 'links' => [
                    ['l' => 'Electrolux cleaning solution white paper', 'h' => '/pdfs/Electrolux_WhitePaper_CleaningSolution.pdf'],
                    ['l' => 'Lagoon Advanced Care resources', 'h' => route('resources')],
                    ['l' => 'Lagoon process video', 'h' => route('resources')],
                ]],
                ['title' => 'Related Equipment', 'links' => [
                    ['l' => 'Washing Machines', 'h' => route('equipment.category', ['category' => 'commercial-washers'])],
                    ['l' => 'Tumble Dryers', 'h' => route('equipment.category', ['category' => 'tumble-dryers'])],
                    ['l' => 'Finishing Equipment', 'h' => route('equipment.category', ['category' => 'finishing-equipment'])],
                    ['l' => 'Drying Cabinets', 'h' => route('equipment.category', ['category' => 'drying-cabinets'])],
                ]],
                ['title' => 'Advice & Support', 'links' => [
                    ['l' => 'Request advice', 'h' => route('request-assessment')],
                    ['l' => 'Support & Aftercare', 'h' => route('parts-aftercare')],
                    ['l' => 'Talk to our team', 'h' => route('contact')],
                ]],
]])

{{-- 17. RELATED EQUIPMENT --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Other Laundry Needs</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Explore equipment beyond <span style="color:#148af4;">wet cleaning</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed xl:whitespace-nowrap">
                Washers, dryers, finishing equipment and drying cabinets for other laundry tasks.
            </p>
        </div>

        {{-- All product shots front-facing, matching the home equipment teaser --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 reveal">
            @foreach([
                ['title' => 'Commercial Washing Machines', 'copy' => 'For higher general laundry volumes or mixed loads alongside wet cleaning.', 'cta' => 'View Washing Machine Options', 'route' => route('equipment.category', ['category' => 'commercial-washers']), 'img' => '/images/pages/commercial-washers/commercialwasher.webp', 'box' => 270],
                ['title' => 'Tumble Dryers',    'copy' => 'For commercial drying demand outside delicate wet cleaning loads.', 'cta' => 'View Dryer Options', 'route' => route('equipment.category', ['category' => 'tumble-dryers']), 'img' => '/images/pages/dryers/line6000-tumble-dryer.webp', 'box' => 245],
                ['title' => 'Finishing Equipment',         'copy' => 'For pressing, form finishing and garment presentation after cleaning.', 'cta' => 'View Finishing Equipment', 'route' => route('equipment.category', ['category' => 'finishing-equipment']), 'img' => '/images/pages/ironers/IB623_FRONT_NEW.jpg', 'box' => 300],
                ['title' => 'Drying Cabinets',             'copy' => 'For shoes, gloves and specialist items that need controlled drying without tumble action.', 'cta' => 'View Drying Cabinets', 'route' => route('equipment.category', ['category' => 'drying-cabinets']), 'img' => '/images/shared/drying_cabinetscards.jpg', 'box' => 260],
            ] as $card)
            <div class="flex flex-col gap-6 h-full">
                <div style="min-height:112px;">
                    <p class="font-heading font-bold text-navy text-xl leading-snug mb-2">{{ $card['title'] }}</p>
                    <p class="font-body text-gray-600 text-sm leading-relaxed">{{ $card['copy'] }}</p>
                </div>
                <div class="w-full flex items-end justify-center" style="height:300px;">
                    <img src="{{ $card['img'] }}" alt="{{ $card['title'] }}" loading="lazy" decoding="async"
                         class="transition-transform duration-500 hover:-translate-y-2"
                         style="width:{{ $card['box'] }}px; max-width:100%; height:{{ $card['box'] }}px; object-fit:contain;">
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

{{-- 18. FAQ --}}
@include('components.faq', [
    'eyebrow' => 'Wet Cleaning FAQs',
    'heading' => 'Questions before choosing <span style="color:#148af4;">professional wet cleaning</span>',
    'faqs' => [
        ['question' => 'What is professional wet cleaning?', 'answer' => 'Professional wet cleaning uses specialist washers, dryers, detergents and controlled programmes to clean delicate garments with water-based care instead of traditional solvent-based dry cleaning.'],
        ['question' => 'Is wet cleaning an alternative to dry cleaning?', 'answer' => 'For many garments, yes. A wet cleaning system can support delicate garment care, specialist textiles and selected dry-clean-only items when the right process is used.'],
        ['question' => 'Can wet cleaning be used for dry-clean-only garments?', 'answer' => 'Selected Woolmark garments labelled as dry-clean only can be treated through approved Lagoon programmes where the garment and care requirements match the process.'],
        ['question' => 'What garments can wet cleaning handle?', 'answer' => 'Wet cleaning can support delicate garments, wool, silk, cotton, linen, viscose, selected leathers, selected shoes and specialist textile items.'],
        ['question' => 'Will wet cleaning shrink or damage garments?', 'answer' => 'The right wet cleaning setup uses controlled programmes, detergents, drying and finishing to protect garment shape, fabric care and presentation. Suitability still depends on the item.'],
        ['question' => 'What equipment is needed for wet cleaning?', 'answer' => 'A wet cleaning system usually needs the right washer, dryer, detergents and finishing setup, planned around garment type, daily volume, drying needs and room fit.'],
        ['question' => 'Can wet cleaning equipment be rented?', 'answer' => 'Where suitable, selected Electrolux Professional equipment may be available through rental, with installation, service and aftercare included under the agreement.'],
    ],
])

{{-- 19. FINAL CTA / FORM --}}
<div id="wet-cleaning-form"></div>
@include('components.cta-downtime-form', [
    'pageSource' => 'wet_cleaning_cta',
    'eyebrow'    => 'Request Wet Cleaning Advice',
    'heading'     => '<span class="sm:block">Discuss your wet cleaning</span> <span class="sm:block">requirements</span> <span class="sm:block">with <span style="color:#148af4;">our engineering team</span></span>',
    'headingSize' => 'text-3xl sm:text-4xl lg:text-[1.9rem] xl:text-[2.45rem] 2xl:text-[2.9rem]',
    'body'       => 'Tell us what garments you handle, your daily volume and the space available. We’ll review the requirements and contact you directly.',
    'formTitle'  => 'Request Wet Cleaning Equipment Advice',
    'buttonText' => 'Request Wet Cleaning Advice',
])

@endsection
