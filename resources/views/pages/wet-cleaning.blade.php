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

{{-- 6. TECHNICAL PROOF --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Technical Proof</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Advanced care <span style="color:#148af4;">without slowing the business down</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Lagoon Advanced Care combines controlled textile action, intelligent dosing, balanced extraction, moisture control and clear programme management.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-3">
            @foreach([
                ['icon' => '35', 'title' => "ProV'tex Hydraulic Action", 'copy' => 'Controlled water movement replaces harsh mechanical action, cleaning delicate textiles with less stress on the fabric.', 'imgClass' => 'w-24 h-24 object-contain scale-[1.348] -translate-y-[8.7%]'],
                ['icon' => '8',  'title' => 'Intelligent Dosing',        'copy' => 'Detergent and water levels are adjusted around the load, keeping each programme properly balanced.', 'imgClass' => 'w-24 h-24 object-contain scale-[1.348] -translate-y-[8.9%]'],
                ['icon' => '31', 'title' => 'Power Balance',             'copy' => 'Extraction force is adjusted to keep the load balanced and ready for safer drying.', 'imgClass' => 'w-24 h-24 object-contain scale-[1.348] -translate-y-[8.7%]'],
                ['icon' => '7',  'title' => 'Moisture Balance',          'copy' => 'Moisture levels are controlled so garments are dried safely without unnecessary over-drying.', 'imgClass' => 'w-24 h-24 object-contain scale-[1.55] -translate-y-[17.4%]'],
                ['icon' => '4',  'title' => 'ClarusVibe Controls',       'copy' => 'A clear touchscreen interface makes Lagoon programmes easier for staff to select and manage.', 'img' => '/images/icons/clarusvibe.jpeg', 'imgClass' => 'w-full h-24 object-cover rounded-lg'],
            ] as $card)
            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm {{ $loop->last ? 'col-span-2 lg:col-span-1' : 'col-span-1' }}">
                <div class="flex items-center justify-center h-32">
                    <img src="{{ $card['img'] ?? '/images/icons/'.$card['icon'].'.png' }}" alt="" class="{{ $card['imgClass'] ?? 'w-28 h-28 object-contain' }}">
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
                Wet cleaning works best when the washer, dryer, detergents and finishing support are matched to the garments, daily volume and room setup.
            </p>
        </div>

        {{-- Image slots (internal): 01 approved Lagoon Advanced Care washer · 02 matching Lagoon dryer · 03 Lagoon detergents, conditioner and prespotting products · 04 wet-cleaning ironing table / form finisher (not a rolling ironer) · 05 drying cabinet / Serenity Cabinet --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-5 reveal">
            @foreach([
                ['step' => '01', 'title' => 'Washer',                    'copy' => 'For professional wet cleaning of delicate garments, textiles and specialist loads.', 'img' => '/images/equipment/WS6 — Line 6000 High-Spin Washer.jpg'],
                ['step' => '02', 'title' => 'Dryer',                     'copy' => 'Matched to the wet cleaning process to help suitable garments dry without hang-drying.', 'img' => '/images/equipment/Tumble-dryers_Heat-Pump_1-1.webp'],
                ['step' => '03', 'title' => 'Detergents and prespotting', 'copy' => 'Dedicated detergents and prespotting products support consistent results across garment types.', 'img' => '/images/equipment/eco-detergents.webp'],
                ['step' => '04', 'title' => 'Finishing equipment',        'copy' => 'Ironing tables, form finishers and finishing support help prepare garments before they return to customers.', 'img' => '/images/equipment/FIT1-WC.jpg'],
                ['step' => '05', 'title' => 'Optional cabinet support',   'copy' => 'For selected garments that need additional drying or finishing support.', 'img' => '/images/equipment/Serenity Cabinet.jpg'],
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
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full border-2 border-[#148af4] text-[#148af4] font-heading font-bold text-[11px] mb-3">{{ $comp['step'] }}</span>
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $comp['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $comp['copy'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="mt-10 rounded-2xl bg-navy px-6 lg:px-10 py-7 flex flex-col lg:flex-row lg:items-center gap-6 lg:gap-8 reveal">
            @foreach([
                ['t' => 'One matched system',             'd' => 'Washer, dryer, detergents and finishing support planned together.',   'icon' => 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z'],
                ['t' => 'Less hang-drying pressure',      'd' => 'Drying and finishing support matched to suitable garment types.',      'icon' => 'M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z'],
                ['t' => 'Better care for delicate items', 'd' => 'Wet cleaning setup planned around garment finish and fabric care.',    'icon' => 'M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456z'],
            ] as $i => $b)
            <div class="flex items-start gap-4 lg:flex-1 {{ $i > 0 ? 'lg:border-l lg:border-white/15 lg:pl-8' : '' }}">
                <span class="flex-shrink-0 w-11 h-11 rounded-full border border-white/40 flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $b['icon'] }}"/></svg>
                </span>
                <span>
                    <span class="block font-heading font-bold text-white text-sm mb-1">{{ $b['t'] }}</span>
                    <span class="block font-body text-white/70 text-xs leading-relaxed">{{ $b['d'] }}</span>
                </span>
            </div>
            @endforeach
            <div class="flex items-start gap-4 lg:flex-1 lg:border-l lg:border-white/15 lg:pl-8">
                <span class="flex-shrink-0 w-11 h-11 rounded-full border border-white/40 flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/></svg>
                </span>
                <span>
                    <span class="block font-heading font-bold text-white text-sm mb-2">Need help planning the right setup?</span>
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
            Plan wet cleaning around <span style="color:#011E41;">garment volume, room fit and finishing</span>
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6 max-w-xl">
            Match the washer, dryer, detergents and finishing setup to daily garment volume, room conditions and aftercare before installation.
        </p>
        <div class="flex items-center flex-wrap gap-x-5 gap-y-2 mb-7">
            @foreach(['System size', 'Drying fit', 'Aftercare'] as $i => $pt)
            @if($i > 0)<span class="text-white/40">|</span>@endif
            <span class="font-body text-white text-sm font-bold">{{ $pt }}</span>
            @endforeach
        </div>
        <a href="{{ route('request-assessment') }}"
           class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
            Request Wet Cleaning Advice
        </a>
    </div>
</section>

{{-- 13. SMART DETERGENTS & PRESPOTTING — quick-scan chemistry flow --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Smart Detergents &amp; Prespotting</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                The right products <span style="color:#148af4;">built into the Lagoon process</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Dedicated detergents, fabric conditioner and prespotting agents work with Lagoon programmes to help protect fibres and improve garment finish.
            </p>
        </div>

        <div class="flex flex-wrap items-center gap-x-4 gap-y-4 mb-10 reveal">
            @foreach(['Prespotting agents', 'Dedicated detergents', 'Fabric conditioner', 'Lagoon programme + precise dosing', 'Softer, fresher, ready-to-wear finish'] as $step)
            @unless($loop->first)
            <svg class="w-8 h-4 text-[#148af4] flex-shrink-0" viewBox="0 0 48 24" fill="none"><path d="M2 12 L42 12 M34 5 L42 12 L34 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            @endunless
            <span class="inline-flex items-center rounded-full px-5 py-2.5 font-body font-bold text-sm {{ $loop->last ? 'bg-[#148af4] text-white' : 'bg-bg border border-gray-100 text-navy' }}">{{ $step }}</span>
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
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Dosing Intelligence</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3 xl:whitespace-nowrap">
                Keep wet cleaning <span style="color:#148af4;">consistent from load to load</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                The right detergent dose helps protect fabrics, reduce waste and support a consistent garment finish. Compatible Electrolux Professional washers can work with automatic dosing systems to keep dosing matched to the load.
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

{{-- 14. SERENITY CABINET SUPPORT — bento --}}
{{-- Asset notes (internal): lifestyle slot = garments being handled/tried on before return; video stays a small
     thumbnail (Serenity clip when available); no ghost mannequins or AI-generated garments in the reassurance card;
     right column stays lighter than the product side. --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-6 mb-10 reveal">
            <div class="max-w-3xl">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Serenity Cabinet Support</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
                    Add sanitising support<br class="hidden lg:block"> <span style="color:#148af4;">before garments return to customers</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed">
                    Serenity Cabinet supports selected garments with a fully automatic steam-based cycle, helping businesses add extra reassurance where garments are tried on, handled or returned to customers.
                </p>
            </div>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold text-sm px-6 py-3.5 rounded-lg transition-colors duration-200 whitespace-nowrap flex-shrink-0">
                Ask About Serenity Cabinet
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 reveal">

            {{-- Serenity Cabinet — large product visual --}}
            <div class="lg:col-span-4 flex flex-col items-center justify-end">
                <img src="/images/equipment/Serenity Cabinet.jpg" alt="Serenity Cabinet" loading="lazy" decoding="async"
                     class="w-full max-w-md h-auto object-contain" style="max-height:560px;">
                <p class="font-heading font-bold text-navy text-sm mt-4">Serenity Cabinet</p>
            </div>

            {{-- lifestyle + features --}}
            <div class="lg:col-span-4 flex flex-col gap-5">
                <img src="/images/equipment/serenitywomencabinet.png" alt="Garments prepared before returning to customers" loading="lazy" decoding="async"
                     class="w-full h-56 object-cover rounded-2xl">
                <div class="bg-white border border-gray-100 rounded-2xl px-6 py-2 shadow-sm flex-1">
                    <ul class="divide-y divide-gray-100">
                        @foreach([
                            ['t' => 'Up to 30 items per cycle',            'img' => '/images/icons/70.png', 'imgClass' => 'w-10 h-10 object-contain scale-[1.25]'],
                            ['t' => '6–10 minute cycles',                  'img' => '/images/icons/72.png', 'imgClass' => 'w-10 h-10 object-contain scale-[1.25]'],
                            ['t' => 'Programmes for different textiles',   'img' => '/images/icons/36.png', 'imgClass' => 'w-10 h-10 object-contain scale-[1.9]'],
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
                    <video class="w-full h-44 object-cover" controls preload="metadata" playsinline>
                        <source src="/images/equipment/EPR_lagoon_Advanced_Care_ENG_1-1_3.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="px-5 py-4">
                        <p class="font-heading font-bold text-white text-sm mb-0.5">See Serenity Cabinet in action</p>
                        <p class="font-body text-white/70 text-xs">Steam-based garment sanitising support</p>
                    </div>
                </div>
                <div class="bg-navy rounded-2xl p-5 flex items-start gap-4">
                    <img src="/images/icons/2.png" alt="" class="flex-shrink-0 w-10 h-10 object-contain scale-[1.34]">
                    <span>
                        <span class="block font-heading font-bold text-white text-sm mb-1">Steam-based sanitising support</span>
                        <span class="block font-body text-white/70 text-xs leading-relaxed">Extra reassurance for tried-on, handled or returned garments.</span>
                    </span>
                </div>
                <div class="bg-[#148af4]/10 rounded-2xl p-5 flex items-start gap-4 flex-1">
                    <img src="/images/icons/15.png" alt="" class="flex-shrink-0 w-10 h-10 object-contain scale-[1.27]">
                    <span>
                        <span class="block font-heading font-bold text-navy text-sm mb-1">Try-on reassurance</span>
                        <span class="block font-body text-gray-500 text-xs leading-relaxed">Ready to return with more confidence.</span>
                    </span>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- 15. SERVICE AND SUPPORT OPTIONS --}}
<section class="py-16 lg:py-20 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Service Support</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Wet cleaning support from <span style="color:#148af4;">installation to aftercare</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed xl:whitespace-nowrap">
                Irish Laundry Systems supports wet cleaning equipment after installation, with repairs, Preventive Maintenance, rental where suitable and long-term aftercare.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                [
                    'title' => 'Repairs &amp; Call-outs',
                    'text'  => 'For wet cleaning equipment issues that need assessment, repair support and clear next steps.',
                    'cta'   => 'View Repairs &amp; Call-outs',
                    'route' => route('repairs'),
                    'img'   => '/images/healthcare/repairs-callouts.jpg',
                    'pos'   => '50% 35%',
                ],
                [
                    'title' => 'Preventive Maintenance',
                    'text'  => 'Planned servicing to keep wet cleaning equipment checked, maintained and better protected against avoidable disruption.',
                    'cta'   => 'View Preventive Maintenance',
                    'route' => route('service-contracts'),
                    'img'   => '/images/healthcare/service-contracts-hero.png',
                    'pos'   => '90% 35%',
                ],
                [
                    'title' => 'Equipment Rental',
                    'text'  => 'Access selected Electrolux Professional equipment with lower upfront cost where rental is suitable.',
                    'cta'   => 'Ask About Equipment Rental',
                    'route' => route('rental'),
                    'img'   => '/images/healthcare/td6-11-multihousing-room-front.jpg',
                    'pos'   => '66% center',
                ],
                [
                    'title' => 'Support &amp; Aftercare',
                    'text'  => 'Keep service history, parts access and aftercare clear after the wet cleaning system is installed.',
                    'cta'   => 'Explore Support &amp; Aftercare',
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
                Equipment that supports <span style="color:#148af4;">wet cleaning, drying and garment finishing</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed xl:whitespace-nowrap">
                Some sites may need additional washers, dryers, finishing equipment or drying cabinets around the wet cleaning service they offer.
            </p>
        </div>

        {{-- All product shots front-facing, matching the home equipment teaser --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 reveal">
            @foreach([
                ['title' => 'Commercial Washing Machines', 'copy' => 'For higher general laundry volumes or mixed loads alongside wet cleaning.', 'cta' => 'View Washing Machine Options', 'route' => route('equipment.category', ['category' => 'washers']), 'img' => '/images/equipment/commercialwasher.webp', 'box' => 270],
                ['title' => 'Tumble Dryers',    'copy' => 'For commercial drying demand outside delicate wet cleaning loads.', 'cta' => 'View Dryer Options', 'route' => route('equipment.category', ['category' => 'tumble-dryers']), 'img' => '/images/equipment/line6000-tumble-dryer.webp', 'box' => 245],
                ['title' => 'Finishing Equipment',         'copy' => 'For pressing, form finishing and garment presentation after cleaning.', 'cta' => 'View Finishing Equipment', 'route' => route('equipment.category', ['category' => 'finishing-equipment']), 'img' => '/images/equipment/IB623_FRONT_NEW.jpg', 'box' => 300],
                ['title' => 'Drying Cabinets',             'copy' => 'For shoes, gloves and specialist items that need controlled drying without tumble action.', 'cta' => 'View Drying Cabinets', 'route' => route('equipment.category', ['category' => 'drying-cabinets']), 'img' => '/images/equipment/drying_cabinetscards.jpg', 'box' => 260],
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
@include('components.cta-downtime-form', [
    'pageSource' => 'wet_cleaning_cta',
    'eyebrow'    => 'Request Wet Cleaning Advice',
    'heading'    => 'Ready to build a <span style="color:#148af4;">professional wet cleaning service</span>?',
    'body'       => 'Tell Irish Laundry Systems what garments you handle, daily volume and the services you want to offer. Irish Laundry Systems reviews the washer, dryer, detergents, finishing, installation, rental where suitable, maintenance and aftercare around your site.',
    'formTitle'  => 'Request Wet Cleaning Equipment Advice',
    'buttonText' => 'Request Wet Cleaning Advice',
])

@endsection
