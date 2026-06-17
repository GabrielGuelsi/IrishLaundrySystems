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
                    Professional wet cleaning for delicate garments,<br class="hidden lg:block"> <span style="color:#148af4;">faster turnaround and solvent-free textile care</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    Lagoon Advanced Care gives dry cleaners, garment care businesses and textile care sites a serious step forward from traditional solvent-based cleaning. Irish Laundry Systems supplies, installs and supports Electrolux Professional wet cleaning equipment for businesses that need premium garment care, faster processing and a stronger customer offer.
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
                    A better way to clean <span style="color:#148af4;">garments customers care about</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    Wet cleaning gives professional cleaners a solvent-free way to care for delicate garments, uniforms, formalwear, shoes, selected leathers and specialist textiles.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Irish Laundry Systems plans Lagoon Advanced Care around garment type, daily volume, drying needs, detergents, finishing and aftercare.
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
                More than clean garments — <span style="color:#148af4;">a stronger service offer</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Lagoon Advanced Care gives professional cleaners a stronger way to process specialist garments with faster turnaround, solvent-free cleaning and easier finishing.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 reveal mb-8">
            @foreach([
                ['icon' => '34', 'title' => 'Faster garment turnaround'],
                ['icon' => '35', 'title' => 'Premium textile care'],
                ['icon' => '30', 'title' => 'Solvent-free process'],
                ['icon' => '25', 'title' => 'Stronger customer offer'],
            ] as $mp)
            <div class="bg-bg rounded-2xl p-7 flex items-center gap-4 border border-gray-100">
                <img src="/images/icons/{{ $mp['icon'] }}.png" alt="" class="w-12 h-12 object-contain flex-shrink-0">
                <h3 class="font-heading font-bold text-navy text-base leading-snug">{{ $mp['title'] }}</h3>
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
                <span style="color:#148af4;">Speed, output and cost control</span> built into the process
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Lagoon Advanced Care combines washing, drying, detergents and finishing for faster turnaround, higher loading and more controlled garment care.
            </p>
        </div>

        @include('components.financial-metrics', ['items' => [
            ['icon'=>'31', 'prefix'=>'',       'stat'=>'55 min',           'size'=>'text-4xl', 'label'=>'Dry-to-Dry in 55 minutes',              'body'=>'Lagoon Advanced Care is built around a fast garment care process, so suitable garments can return quickly without hang-drying.'],
            ['icon'=>'25', 'prefix'=>'Up to',  'stat'=>'75%',              'size'=>'text-4xl', 'label'=>'Higher loading factor',                'body'=>"ProV'tex hydraulic action allows the machine to be loaded up to 75% of capacity while keeping cleaning gentle on delicate textiles."],
            ['icon'=>'30', 'prefix'=>'Up to',  'stat'=>'50%',              'size'=>'text-4xl', 'label'=>'More production from each load',        'body'=>'Electrolux Professional material shows Lagoon Advanced Care technology can support up to 50% more production from each load.'],
            ['icon'=>'35', 'prefix'=>'',       'stat'=>'Less<br>time',     'size'=>'text-2xl', 'label'=>'Less prespotting, easier finishing',   'body'=>'Lagoon Advanced Care reduces manual pressure around prespotting and finishing so garments move through the process faster.'],
            ['icon'=>'16', 'prefix'=>'',       'stat'=>'70–400',           'size'=>'text-4xl', 'label'=>'items per day to plan around',         'body'=>'The Lagoon Advanced Care range supports system planning from smaller setups through to higher daily garment volumes.'],
        ]])
    </div>
</section>

{{-- 5b. OnE CONNECTED / CONNECTED LAUNDRY INTELLIGENCE STRIP --}}
<section class="relative overflow-hidden" style="background-color:#011E41; min-height:340px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:42%;">
        <img src="/images/healthcare/line-6000-solutions.jpg" alt="Connected commercial laundry equipment"
             class="w-full h-full object-cover" style="object-position: center center;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #011E41 0%, rgba(1,30,65,0.85) 18%, rgba(1,30,65,0.35) 55%, transparent 100%);"></div>
    </div>
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-12 sm:py-16 lg:py-24 w-full max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">OnE Connected</p>
        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
            Washer and dryer data <span style="color:#148af4;">in one connected view</span>
        </h2>
        <p class="font-body text-white/80 text-base leading-relaxed mb-6 max-w-xl">
            OnE Connected shows compatible Electrolux Professional washer and dryer status, cycles, consumption, alerts and service needs in one digital dashboard.<br>
            For wet cleaning sites, this provides clearer oversight of daily use, running costs and service needs where compatible.
        </p>
        <div class="flex items-center flex-wrap gap-x-5 gap-y-2 mb-7">
            @foreach(['Status insight', 'Consumption data', 'Service alerts'] as $i => $pt)
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
                Check Compatibility
            </a>
        </div>
    </div>
</section>

{{-- 6. DRY-TO-DRY PROCESS / VIDEO --}}
<section class="py-16 lg:py-24 bg-white border-t border-gray-100 overflow-x-hidden">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            <div class="reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Lagoon Process</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-5">
                    Dry-to-Dry in <span style="color:#148af4;">55 minutes</span> for faster garment turnaround
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    The Lagoon Advanced Care process is designed for speed without giving up garment quality. Prespotting, cleaning, drying and finishing work together so suitable garments can be ready to deliver in a faster, cleaner and more controlled process.
                </p>

                <ol class="space-y-3 mb-7">
                    @foreach([
                        ['t' => 'Prespotting',       'd' => '5 min'],
                        ['t' => 'Lagoon clean',      'd' => '25 min'],
                        ['t' => 'Lagoon dry',        'd' => '20 min'],
                        ['t' => 'Finishing',         'd' => '5 min'],
                        ['t' => 'Ready to deliver',  'd' => '55 min total process time'],
                    ] as $i => $step)
                    <li class="flex items-center gap-4">
                        <span class="flex-shrink-0 w-9 h-9 rounded-full bg-[#148af4]/10 text-[#148af4] font-heading font-bold text-sm flex items-center justify-center">{{ $i + 1 }}</span>
                        <span class="font-heading font-bold text-navy text-base flex-1">{{ $step['t'] }}</span>
                        <span class="font-body font-bold text-[#148af4] text-sm whitespace-nowrap">{{ $step['d'] }}</span>
                    </li>
                    @endforeach
                </ol>

                <p class="font-body text-gray-400 text-xs italic mb-6">Leathers and shoes may require longer drying time.</p>

                {{-- Video CTA — placeholder, no Lagoon process video asset on site yet --}}
                <a href="{{ route('resources') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-2.25 1.313M21 7.5v2.25m0-2.25l-2.25-1.313M3 7.5l2.25 1.313M3 7.5l2.25-1.313M3 7.5v2.25m9 3l2.25-1.313M12 12.75l-2.25-1.313M12 12.75V15m0 6.75l2.25-1.313M12 21.75V19.5m0 2.25l-2.25-1.313m0-16.875L12 2.25l2.25 1.313M21 14.25v2.25l-2.25 1.313m-13.5 0L3 16.5v-2.25"/></svg>
                    Watch the Lagoon Advanced Care process
                </a>
            </div>

            <div class="reveal reveal-right">
                {{-- Lagoon Advanced Care process video --}}
                <div class="relative rounded-2xl overflow-hidden bg-navy aspect-video">
                    <video class="w-full h-full object-cover" controls preload="metadata" playsinline
                           poster="/images/healthcare/lagoon-advanced-care.webp">
                        <source src="/images/equipment/EPR_lagoon_Advanced_Care_ENG_1-1_2.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- 7. CERTIFIED TEXTILE CARE --}}
<section class="py-12 lg:py-16 bg-gray-50">
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

{{-- 8. SYSTEM COMPONENTS --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Complete Wet Cleaning Setup</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Washer, dryer, detergents and finishing <span style="color:#148af4;">working together</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Wet cleaning works best when washing, drying, detergents, finishing and garment handling are matched to daily volume and the garments handled. Irish Laundry Systems plans Lagoon Advanced Care around the site and room.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-5 reveal">
            @foreach([
                ['step' => '01', 'title' => 'Washer',                    'copy' => 'Professional wet cleaning washer setup for delicate garments, textiles and specialist loads.'],
                ['step' => '02', 'title' => 'Dryer',                     'copy' => 'Drying performance matched to the wet cleaning process, helping reduce delays and avoid hang-drying where suitable.'],
                ['step' => '03', 'title' => 'Detergents and prespotting', 'copy' => 'Dedicated detergents, conditioners and prespotting products support consistent results across different garment types.'],
                ['step' => '04', 'title' => 'Finishing equipment',        'copy' => 'Ironing tables, form finishers and finishing support help complete the garment care process before items return to customers.'],
                ['step' => '05', 'title' => 'Optional Serenity Cabinet',  'copy' => 'A specialist cabinet option for final touch, hygiene care and efficient drying for selected leathers and shoes.'],
            ] as $comp)
            <div class="bg-bg rounded-2xl p-7 flex flex-col h-full border border-gray-100">
                <span class="font-heading font-bold text-[#148af4] text-xs tracking-[0.2em] mb-3">{{ $comp['step'] }}</span>
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $comp['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $comp['copy'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 9. CAPACITY & GROWTH PLANNING --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 text-center reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Capacity Planning</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Start small, then <span style="color:#148af4;">grow as demand increases</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-3xl mx-auto">
                Lagoon Advanced Care can be planned around daily garment volume, room space, drying needs, finishing and future growth.
            </p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6 lg:gap-8 reveal mb-10">
            @foreach([
                ['stat' => '70',  'label' => 'items per day'],
                ['stat' => '110', 'label' => 'items per day'],
                ['stat' => '240', 'label' => 'items per day'],
                ['stat' => '320', 'label' => 'items per day'],
                ['stat' => '400', 'label' => 'items per day'],
            ] as $marker)
            <div class="flex flex-col items-center text-center gap-2">
                <p class="font-heading font-bold text-[#148af4] text-3xl sm:text-4xl leading-none">{{ $marker['stat'] }}</p>
                <p class="font-body font-semibold text-navy text-sm leading-snug">{{ $marker['label'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="flex items-center justify-center flex-wrap gap-x-5 gap-y-2 mb-9 reveal">
            @foreach(['Daily garment volume', 'Room space', 'Drying demand', 'Finishing needs', 'Growth planning'] as $i => $pt)
            @if($i > 0)<span class="text-gray-300">|</span>@endif
            <span class="font-body text-navy text-sm font-bold">{{ $pt }}</span>
            @endforeach
        </div>

        <div class="text-center reveal">
            <a href="{{ route('request-assessment') }}"
               class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                Plan Your Wet Cleaning Setup
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- 10. WHERE WET CLEANING FITS --}}
<section class="py-12 lg:py-16 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Where It Fits</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                For businesses built around<br class="hidden lg:block"> <span style="color:#148af4;">garment care, presentation and trust</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Wet cleaning is a strong fit where customers expect careful handling, fast return and visible garment quality.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 reveal">
            @foreach([
                ['title' => 'Dry cleaners and garment care businesses',  'copy' => 'For businesses ready to add or expand a solvent-free textile care process with strong garment protection and professional results.', 'points' => ['Delicates', 'Formalwear', 'Daily customer garments']],
                ['title' => 'Bridal, formalwear and alterations',        'copy' => 'For high-value garments where shape, colour, fibre care and presentation matter.', 'points' => ['Wedding dresses', 'Suits', 'Specialist garments']],
                ['title' => 'Hotels and guest garment care',             'copy' => 'For properties that want greater control over guest clothing, staff uniforms and premium textile care.', 'points' => ['Guest garments', 'Uniforms', 'Presentation standards']],
                ['title' => 'Leather, shoes and accessories',            'copy' => 'For businesses that want to clean and refresh selected leathers, shoes, sneakers, bags and accessories with the right process.', 'points' => ['Leathers', 'Shoes', 'Accessories']],
                ['title' => 'Textile care and specialist laundry',       'copy' => 'For sites handling delicate fibres, premium items, regular laundry and specialist garment categories.', 'points' => ['Wool', 'Silk', 'Cashmere']],
                ['title' => 'New wet cleaning businesses',               'copy' => 'For operators building a new service offer who need a scalable system that can grow with customer demand.', 'points' => ['Start small', 'Add capacity', 'Grow services']],
            ] as $fit)
            <div class="bg-white border border-gray-100 rounded-2xl p-7 flex flex-col h-full shadow-sm">
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $fit['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-5">{{ $fit['copy'] }}</p>
                <ul class="mt-auto space-y-1.5">
                    @foreach($fit['points'] as $pt)
                    <li class="font-body font-semibold text-navy text-sm flex items-center gap-2">
                        <span class="text-[#148af4]">&#9656;</span> {{ $pt }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 11. SYSTEM PLANNING / SITE FIT STRIP — the page's ONLY full-width blue strip --}}
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.85) 15%, rgba(20,138,244,0.3) 55%, transparent 100%);"></div>
    </div>
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-12 sm:py-16 lg:py-24 w-full max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">System Planning</p>
        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
            Plan wet cleaning around <span style="color:#011E41;">volume, room fit and finishing</span>
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6 max-w-xl">
            A wet cleaning system should match garment type, daily volume, drying needs, utilities, finishing and budget. Irish Laundry Systems plans the washer, dryer, detergents and aftercare around the site.
        </p>
        <div class="flex flex-wrap items-center gap-x-6 gap-y-3 mb-7">
            @foreach([
                ['t' => 'Choose the right system size', 'd' => 'M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75'],
                ['t' => 'Build the full process',       'd' => 'M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z'],
                ['t' => 'Keep the equipment supported', 'd' => 'M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085'],
            ] as $pt)
            <span class="inline-flex items-center gap-2">
                <svg class="w-4 h-4 text-white flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $pt['d'] }}"/></svg>
                <span class="font-body text-white text-sm font-bold">{{ $pt['t'] }}</span>
            </span>
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
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Lagoon Advanced Care combines gentle textile action, load control, dosing, drying balance and intuitive controls for consistent garment care.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-4">
            @foreach([
                ['icon' => '35', 'title' => "ProV'tex hydraulic action",                'copy' => "Gentle hydraulic action replaces harsher mechanical action for effective cleaning and higher loading."],
                ['icon' => '8',  'title' => 'Integrated Savings and Intelligent Dosing', 'copy' => 'Defines the effective load and adjusts detergent and water levels, supporting cost control and consistent results.'],
                ['icon' => '31', 'title' => 'Power Balance',                             'copy' => 'Activates the correct extraction force for the load to improve drying performance.'],
                ['icon' => '7',  'title' => 'Moisture Balance',                          'copy' => 'Defines the right moisture level so garments are dried safely, reducing the risk of over-drying, shrinkage and wrinkles.'],
                ['icon' => '4',  'title' => 'ClarusVibe',                                'copy' => 'A clear control interface makes Lagoon programmes easier to manage.'],
            ] as $card)
            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm col-span-1">
                <div class="flex items-center justify-center h-32">
                    <img src="/images/icons/{{ $card['icon'] }}.png" alt="" class="w-28 h-28 object-contain">
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

        <div class="mb-10 reveal max-w-3xl">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Dosing Intelligence</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Use <span style="color:#148af4;">the correct amount</span>, every time
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
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
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
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
                    'title' => 'Equipment Rental',
                    'text'  => 'For businesses considering lower upfront cost where rental is suitable for the selected equipment and site needs.',
                    'cta'   => 'Ask About Equipment Rental',
                    'route' => route('rental'),
                    'img'   => '/images/healthcare/commercial-industrial.jpg',
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

{{-- 16. RESOURCES --}}
<section class="py-16 lg:py-24 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Resources</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Official <span style="color:#148af4;">Lagoon Advanced Care information</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Review official Electrolux Professional resources or ask Irish Laundry Systems to review the right wet cleaning setup for your site.
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach([
                [
                    'title' => 'Lagoon Advanced Care brochure',
                    'copy'  => 'Official Electrolux Professional brochure covering the Lagoon Advanced Care process, technologies, capacity planning and system components.',
                    'cta'   => 'Download Brochure',
                    'type'  => 'download',
                    'href'  => '',
                ],
                [
                    'title' => 'Lagoon process video',
                    'copy'  => 'Watch how the wet cleaning process moves from garment received to ready to deliver.',
                    'cta'   => 'Watch Video',
                    'type'  => 'video',
                    'href'  => route('resources'),
                ],
                [
                    'title' => 'Planning a wet cleaning service?',
                    'copy'  => 'Irish Laundry Systems can review your garment types, daily volume, room layout and budget before recommending the right setup.',
                    'cta'   => 'Request Advice',
                    'type'  => 'link',
                    'href'  => route('request-assessment'),
                ],
            ] as $res)
            <div class="bg-white border border-gray-200 rounded-2xl p-6 lg:p-8 flex flex-col h-full">
                <div class="w-10 h-1 rounded-full bg-[#148af4] mb-4"></div>
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $res['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-5">{{ $res['copy'] }}</p>
                @if($res['type'] === 'download' && $res['href'])
                <a href="{{ $res['href'] }}" target="_blank" download class="mt-auto inline-flex items-center gap-2 font-body font-bold text-[#148af4] hover:underline text-sm w-fit">
                    {{ $res['cta'] }}
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                </a>
                @elseif($res['type'] === 'download')
                <span class="mt-auto inline-flex items-center gap-2 font-body font-bold text-gray-400 text-sm w-fit cursor-not-allowed" aria-disabled="true" title="Brochure coming soon">
                    {{ $res['cta'] }}
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                </span>
                @elseif($res['type'] === 'video')
                <a href="{{ $res['href'] }}" class="mt-auto inline-flex items-center gap-2 font-body font-bold text-[#148af4] hover:underline text-sm w-fit">
                    {{ $res['cta'] }}
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z"/><path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </a>
                @else
                <a href="{{ $res['href'] }}" class="mt-auto inline-flex items-center gap-2 font-body font-bold text-[#148af4] hover:underline text-sm w-fit">
                    {{ $res['cta'] }}
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
                @endif
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
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Some wet cleaning sites may also need larger washers, dryers, finishing equipment or drying cabinets depending on the service they offer.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach([
                ['title' => 'Commercial Washing Machines', 'copy' => 'For larger laundry capacity, heavier use or wider commercial laundry demand.', 'cta' => 'View Washing Machine Options', 'route' => route('equipment.category', ['category' => 'washers']), 'img' => '/images/equipment/commercialwasher.webp'],
                ['title' => 'Commercial Tumble Dryers',    'copy' => 'For drying demand that needs commercial capacity, control and reliability.', 'cta' => 'View Dryer Options', 'route' => route('equipment.category', ['category' => 'tumble-dryers']), 'img' => '/images/equipment/Tumble-dryers_Heat-Pump_1-1.webp'],
                ['title' => 'Finishing Equipment',         'copy' => 'For ironing, form finishing, pressing and final presentation support.', 'cta' => 'View Finishing Equipment', 'route' => route('equipment.category', ['category' => 'finishing-equipment']), 'img' => '/images/equipment/IB623_FRONT_NEW.jpg'],
                ['title' => 'Drying Cabinets',             'copy' => 'For garments, shoes, gloves and items that need controlled drying rather than tumble drying.', 'cta' => 'View Drying Cabinets', 'route' => route('equipment.category', ['category' => 'drying-cabinets']), 'img' => '/images/healthcare/Drying-cabinets_image.webp'],
            ] as $card)
            <div class="bg-bg border border-gray-100 rounded-2xl overflow-hidden flex flex-col h-full">
                <div class="bg-white flex items-center justify-center p-5 border-b border-gray-100" style="height:170px;">
                    <img src="{{ $card['img'] }}" alt="{{ $card['title'] }}" class="max-h-full w-auto object-contain">
                </div>
                <div class="p-7 flex flex-col flex-1">
                    <div class="w-10 h-1 rounded-full bg-[#148af4] mb-4"></div>
                    <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $card['title'] }}</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed mb-5">{{ $card['copy'] }}</p>
                    <a href="{{ $card['route'] }}" class="mt-auto inline-flex items-center gap-2 font-body font-bold text-[#148af4] hover:underline text-sm">
                        {{ $card['cta'] }}
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
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
