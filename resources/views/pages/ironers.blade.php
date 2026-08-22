@extends('layouts.app')

@section('pageTitle', 'Commercial Ironers, Roller Ironing & Finishing Equipment | Electrolux Professional | Irish Laundry Systems')

@section('meta')
<meta name="description" content="Commercial ironers, roller ironing advice and finishing equipment chosen around linen finish, output, room layout and long-term support. Irish Laundry Systems supplies, installs, rents and supports Electrolux Professional ironers across Ireland.">
@endsection

@section('content')

{{-- 2. HERO --}}
<section class="relative overflow-hidden lg:!h-[720px]" style="height:auto; min-height:540px; background-color:#011E41;">

    <img src="/images/pages/ironers/ironers-hero-new.png" alt="Commercial ironers and flatwork finishing"
         loading="eager" decoding="async"
         class="absolute inset-0 w-full h-full object-cover" style="object-position: center 60%;">

    <div class="absolute inset-0" style="background: linear-gradient(90deg, #011E41 0%, #011E41 26%, rgba(1,30,65,0.88) 40%, rgba(1,30,65,0.60) 54%, rgba(1,30,65,0.30) 68%, rgba(1,30,65,0.10) 80%, transparent 90%);"></div>

    <div class="relative z-10 h-full flex items-center py-16 lg:py-0">
        <div class="max-w-screen-2xl mx-auto w-full px-6 sm:px-10 lg:px-20">
            <div class="max-w-4xl">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Commercial Ironers</p>
                <h1 class="font-heading font-bold text-white text-2xl sm:text-4xl lg:text-5xl leading-tight mb-6">
                    <span class="sm:block">Commercial ironers for</span>
                    <span class="sm:block" style="color:#148af4;">consistent ironing results</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    Irish Laundry Systems supplies, installs and supports Electrolux Professional ironers across Ireland for sheets, table linen and other flatwork.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#ironer-form"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Ironer Advice
                    </a>
                    <a href="#ironer-range"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white hover:border-white/70 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        Explore Ironer Options
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 3. UNIVERSAL THIN ELECTROLUX TRUST STRIP --}}
@include('components.partner-strip')

{{-- 4. INTRO / BRIDGE --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Choosing an Ironer</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-8 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-[2rem] 2xl:text-[2.4rem] leading-tight">
                    <span class="sm:block">The <span style="color:#148af4;">right ironer</span> depends</span>
                    <span class="sm:block">on what you process and</span>
                    <span class="sm:block">the volume you handle</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed">
                    <span class="lg:block">Working width, feeding and folding options, and the level</span>
                    <span class="lg:block">of automation can be considered around the flatwork mix,</span>
                    <span class="lg:block">expected output and how much operator input makes sense</span>
                    <span class="lg:block">for the way your laundry runs.</span>
                </p>
            </div>

        </div>
    </div>
</section>

{{-- 5. IRONING & FINISHING OPTIONS --}}
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Ironing &amp; Finishing Options</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-[2.5rem] 2xl:text-5xl leading-tight mb-3">
                Compare equipment types for <span style="color:#148af4;">different finishing needs</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Different formats suit different items, processing volumes and levels of operator input.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                ['title' => 'Flatwork Ironers', 'copy' => 'For sheets, table linen and other flatwork that needs a consistent finish at higher volumes.', 'cta' => 'Explore Flatwork Ironers', 'href' => '#ironer-range', 'img' => '/images/pages/ironers/flatwork-iv64821ffs.jpg'],
                ['title' => 'Steam Ironers',         'copy' => 'For smaller operations handling regular flatwork in a compact format.', 'cta' => 'Explore Steam Ironers', 'href' => route('equipment.category', 'semi-professional'), 'img' => '/images/pages/ironers/roller-ic63316.jpg'],
                ['title' => 'Finishing Equipment',             'copy' => 'For garments, uniforms, resident clothing and smaller items that need hand finishing or extra care.', 'cta' => 'View Finishing Equipment', 'href' => route('equipment.category', 'finishing-equipment'), 'img' => '/images/pages/ironers/finishing-fit1.jpg'],
            ] as $card)
            <div class="flex flex-col gap-6 h-full">
                <div style="min-height:130px;">
                    <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-2">{{ $card['title'] }}</h3>
                    <p class="font-body text-gray-600 text-sm leading-relaxed">{{ $card['copy'] }}</p>
                </div>
                <div class="w-full flex items-end justify-center" style="height:280px;">
                    <img src="{{ $card['img'] }}" alt="{{ $card['title'] }}"
                         class="transition-transform duration-500 hover:-translate-y-2"
                         style="max-width:100%; max-height:280px; object-fit:contain;">
                </div>
                <a href="{{ $card['href'] }}" class="inline-flex items-center justify-center gap-1.5 bg-navy hover:bg-navy/90 text-white font-heading font-bold text-sm px-4 py-3 rounded-lg transition-colors mt-auto w-fit mx-auto">
                    {{ $card['cta'] }}
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 6. OPERATIONAL PERFORMANCE --}}
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Financial Performance</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-3">
                Balance running costs with <span style="color:#148af4;">productive ironing capacity</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Energy use, labour input and available space all influence the day-to-day cost of processing linen.
            </p>
        </div>

        @include('components.financial-metrics', ['labelDrop' => true, 'items' => [
            ['icon'=>'220', 'iconClass'=>'scale-[1.213] translate-y-[0.4%]', 'prefix'=>'Up to', 'stat'=>'20%',                'size'=>'text-4xl', 'label'=>'Gas Savings',       'body'=>'Ceramic Burner technology can reduce gas use on suitable models.'],
            ['icon'=>'199', 'prefix'=>'Up to', 'stat'=>'30%',                'size'=>'text-4xl', 'label'=>'Higher Output', 'iconClass'=>'scale-[0.985] translate-y-[1.2%]',      'body'=>'Dubixium technology supports higher productivity and even heat distribution.'],
            ['icon'=>'221', 'prefix'=>'Up to', 'stat'=>'600<br>sheets',      'size'=>'text-2xl', 'label'=>'Daily Capacity', 'iconClass'=>'scale-[1.067] translate-y-[0.4%]',                 'body'=>'Selected feeding, folding and stacking options support high-volume flatwork.'],
            ['icon'=>'222', 'prefix'=>'',      'stat'=>'Staffing<br>Efficiency', 'size'=>'text-2xl', 'label'=>'Less Handling', 'iconClass'=>'scale-[1.124] translate-y-[5.6%]', 'body'=>'Automation options reduce repeated manual handling across daily production.'],
            ['icon'=>'200', 'prefix'=>'',      'stat'=>'Better<br>Room Fit', 'size'=>'text-2xl', 'label'=>'Delivery Options', 'iconClass'=>'scale-[0.95] translate-y-[1.1%]',  'body'=>'Front or rear delivery helps match the ironer to the available room layout.'],
        ]])
    </div>
</section>

{{-- 7. ELECTROLUX PROFESSIONAL PROOF --}}
<section class="py-20 lg:py-28 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Ironer Technology</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-3">
                Ironer technology for <span style="color:#148af4;">greater control in daily use</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Available features vary by configuration, allowing the ironer specification to reflect different operating requirements.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-3">
            @foreach([
                ['icon' => '223', 'imgClass' => 'w-24 h-24 object-contain scale-[1.273] translate-y-[0.5%]', 'title' => 'DIAMMS / Moisture Control', 'copy' => 'Automatically adjusts cylinder speed to residual moisture, supporting consistent ironing results and controlled final moisture.', 'badge' => 'DIAMMS'],
                ['icon' => '198', 'imgClass' => 'w-24 h-24 object-contain scale-[1.938] translate-y-[5.2%]', 'title' => 'Dubixium',                     'copy' => 'Distributes heat evenly across the cylinder for a consistent finish with less local overheating.', 'badge' => 'Dubixium'],
                ['icon' => '224', 'imgClass' => 'w-full h-full object-contain scale-[1.32]', 'title' => 'ERGOCERT 4-star', 'copy' => 'Ergonomics-certified design supports more comfortable repeated operation and reduced operator strain.', 'badge' => 'ERGOCERT'],
                ['icon' => 'FeedNow', 'imgClass' => 'w-24 h-24 object-contain scale-[1.414] translate-y-[1.2%]', 'title' => 'Feed Now / Feed Alone',        'copy' => 'Supports easier, more consistent feeding, with features designed to reduce operator input on equipped configurations.', 'badge' => 'Feeding'],
                ['icon' => 'FoldFlex', 'imgClass' => 'w-24 h-24 object-contain scale-[1.353]', 'title' => 'FoldFlex / Hygiene Guard',      'copy' => 'Supports customised folding, moisture checks and linen rejection for high-volume finishing.', 'badge' => 'FoldFlex'],
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

{{-- OnE CONNECTED / CONNECTED LAUNDRY INTELLIGENCE STRIP (moved below technical cards) --}}
@include('components.one-connected-strip', ['ctaLabel' => 'Ask About Connected Ironers'])

{{-- 8. IRONER LAYOUT --}}
<section class="py-20 lg:py-28 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 lg:mb-12 reveal reveal-left">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Ironer Layout</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-3">
                Front or rear delivery for <span style="color:#148af4;">room layout and collection</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Delivery direction affects where finished linen is collected and how operators use the space around the ironer.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-10">

            {{-- Front delivery --}}
            <div class="rounded-2xl bg-white p-7 lg:p-8 flex flex-col h-full reveal reveal-left" style="box-shadow: 0 10px 35px -10px rgba(1,30,65,0.10);">
                <div class="flex items-start gap-4 mb-4">
                    <span class="flex-shrink-0 flex items-center justify-center w-12 h-12 rounded-xl bg-[#148af4]/10">
                        <svg class="w-6 h-6 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75"/></svg>
                    </span>
                    <div>
                        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-1">Front Delivery</p>
                        <h3 class="font-heading font-bold text-navy text-xl leading-snug">For compact layouts</h3>
                    </div>
                </div>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-6" style="min-height:78px;">
                    Front delivery returns finished linen to the front of the ironer, helping sites use a more compact room layout.
                </p>
                <div class="border-t border-gray-100 pt-6 pb-6">
                    <div class="w-full aspect-square rounded-xl overflow-hidden" style="clip-path: inset(0 round 12px);">
                        <img src="/images/pages/ironers/Front Delivery.png"
                             alt="Front delivery ironer layout diagram — top-down view showing linen flow and operator positions at the ironer and folding table"
                             class="w-full h-full object-cover" style="transform:translateY(2.31%) scale(1.086);">
                    </div>
                </div>
                <div class="mt-auto border-t border-gray-100 pt-4 flex flex-wrap items-center gap-x-5 gap-y-2">
                    @foreach(['Space-saving layout', 'Front collection', 'Suits compact rooms'] as $pt)
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-[#148af4] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                        <span class="font-body text-navy text-sm font-bold">{{ $pt }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Rear delivery --}}
            <div class="rounded-2xl bg-white p-7 lg:p-8 flex flex-col h-full reveal reveal-right" style="box-shadow: 0 10px 35px -10px rgba(1,30,65,0.10);">
                <div class="flex items-start gap-4 mb-4">
                    <span class="flex-shrink-0 flex items-center justify-center w-12 h-12 rounded-xl bg-[#148af4]/10">
                        <svg class="w-6 h-6 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7"><path stroke-linecap="round" stroke-linejoin="round" d="M3 7.5L7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5"/></svg>
                    </span>
                    <div>
                        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-1">Rear Delivery</p>
                        <h3 class="font-heading font-bold text-navy text-xl leading-snug">For separate collection</h3>
                    </div>
                </div>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-6" style="min-height:78px;">
                    Rear delivery sends finished linen to the back of the ironer, helping separate loading and collection where the room allows it.
                </p>
                <div class="border-t border-gray-100 pt-6 pb-6">
                    <div class="w-full aspect-square rounded-xl overflow-hidden">
                        <img src="/images/pages/ironers/Rear Delivery.png"
                             alt="Rear delivery ironer layout diagram — top-down view showing linen exiting to the rear with operator positions at the front"
                             class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="mt-auto border-t border-gray-100 pt-4 flex flex-wrap items-center gap-x-5 gap-y-2">
                    @foreach(['Rear collection', 'Separate loading and collection', 'Less crossover between tasks'] as $pt)
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-[#148af4] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                        <span class="font-body text-navy text-sm font-bold">{{ $pt }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

        <div class="mt-12 lg:mt-14 flex justify-center">
            <a href="#ironer-form"
               class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                Plan Your Ironer Layout
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- 9. ROOM PLANNING STRIP --}}
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:300px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/shared/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.82) 8%, rgba(20,138,244,0.45) 28%, rgba(20,138,244,0.18) 48%, transparent 65%);"></div>
    </div>
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-10 lg:py-14 max-w-full lg:max-w-[68%]">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Room Planning</p>
        <h2 class="font-heading font-bold text-white text-2xl sm:text-4xl lg:text-5xl leading-tight mb-4">
            <span class="sm:block">Plan the ironer configuration around</span>
            <span class="sm:block" style="color:#011E41;">your space and daily demand</span>
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6 max-w-none">
            <span class="lg:block">Irish Laundry Systems reviews working width, heating requirements and site access</span>
            <span class="lg:block">before recommending the ironer and installation approach.</span>
        </p>
        <div class="flex items-center flex-wrap gap-x-4 gap-y-3 mb-7">
            @foreach([
                ['icon' => '56', 'label' => 'Room<br>Layout', 'sc' => 'scale-[1.035] translate-y-[2.2%]'],
                ['icon' => '225', 'label' => 'Linen<br>Volume', 'sc' => 'scale-[1.025] translate-y-[0.4%]'],
                ['icon' => '226', 'label' => 'Heating<br>Choice', 'sc' => 'scale-[1.139] translate-y-[1.2%]'],
            ] as $pt)
            <span class="flex items-center gap-2 flex-shrink-0">
                <img src="/images/icons/{{ $pt['icon'] }}.png" alt="" aria-hidden="true" class="h-14 w-auto object-contain {{ $pt['sc'] ?? '' }}" style="filter:brightness(0) invert(1);">
                <span class="font-body text-white text-sm font-bold leading-tight">{!! $pt['label'] !!}</span>
            </span>
            @endforeach
        </div>
        <a href="#ironer-form"
           class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
            Request Ironer Advice
        </a>
    </div>
</section>

{{-- white spacer between the Room Planning strip and the Resources bar --}}
<div class="bg-white h-12 lg:h-16"></div>

{{-- 10. FILTER PRODUCTS / PRODUCT GRID --}}
<section id="ironer-range" class="py-20 lg:py-32 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Ironer Range</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-[2.5rem] 2xl:text-5xl leading-tight mb-3">
                Browse ironers by <span style="color:#148af4;">cylinder size and automation</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Use the filters to compare configurations and view the available size options.
            </p>
        </div>

        {{-- Ironer configurations — 8 buyer-facing cards; Ø480 cards list their available widths inside the card --}}
        @php
            $ironerCards = [
                ['cyl' => 'Ø330 mm', 'delivery' => null, 'auto' => null,
                 'name' => 'Ø330 mm Cylinder Ironers', 'slug' => 'cylinder-330mm', 'img' => '/images/pages/ironers/cylinder-330-ic633.jpg',
                 'fit' => 'Mid-size cylinder ironers for steady on-premise finishing.',
                 'widths' => [['w' => '1600 mm', 'm' => 'IC63316'], ['w' => '2000 mm', 'm' => 'IC63320']]],

                ['cyl' => 'Ø480 mm', 'delivery' => 'Front Delivery', 'auto' => 'No Automation',
                 'name' => 'Ø480 Front Delivery — No Automation', 'slug' => 'cylinder-480mm', 'img' => '/images/pages/ironers/cylinder-480-ic648.jpg',
                 'fit' => 'Front-delivery ironing without automation, returned to the front of the machine.',
                 'widths' => [['w' => '2100 mm', 'm' => 'IC64821'], ['w' => '2500 mm', 'm' => 'IC64825'], ['w' => '3200 mm', 'm' => 'IC64832']]],

                ['cyl' => 'Ø480 mm', 'delivery' => 'Front Delivery', 'auto' => 'Length Folding',
                 'name' => 'Ø480 Front Delivery — Length Folding', 'slug' => 'cylinder-480mm', 'img' => '/images/pages/ironers/cylinder-480-ic648.jpg',
                 'fit' => 'Front delivery with length folding for finished, folded flatwork.',
                 'widths' => [['w' => '2100 mm', 'm' => 'IC64821LF'], ['w' => '2500 mm', 'm' => 'IC64825LF'], ['w' => '3200 mm', 'm' => 'IC64832LF']]],

                ['cyl' => 'Ø480 mm', 'delivery' => 'Front Delivery', 'auto' => 'Feeding & Length Folding',
                 'name' => 'Ø480 Front Delivery — Feeding & Length Folding', 'slug' => 'cylinder-480mm', 'img' => '/images/pages/ironers/cylinder-480-ic648.jpg',
                 'fit' => 'Front delivery with feeding and length folding to reduce handling.',
                 'widths' => [['w' => '2100 mm', 'm' => 'IC64821FLF'], ['w' => '2500 mm', 'm' => 'IC64825FLF'], ['w' => '3200 mm', 'm' => 'IC64832FLF']]],

                ['cyl' => 'Ø480 mm', 'delivery' => 'Front Delivery', 'auto' => 'Feeding, Folding & Stacking',
                 'name' => 'Ø480 Front Delivery — Feeding, Folding & Stacking', 'slug' => 'cylinder-480mm', 'img' => '/images/pages/ironers/cylinder-480-ic648.jpg',
                 'fit' => 'Front delivery with feeding, folding and stacking for high-volume output.',
                 'widths' => [['w' => '2100 mm', 'm' => 'IV64821FFS'], ['w' => '2500 mm', 'm' => 'IV64825FFS'], ['w' => '3200 mm', 'm' => 'IV64832FFS']]],

                ['cyl' => 'Ø480 mm', 'delivery' => 'Rear Delivery', 'auto' => 'No Automation',
                 'name' => 'Ø480 Rear Delivery — No Automation', 'slug' => 'cylinder-480mm', 'img' => '/images/pages/ironers/cylinder-480-ic648.jpg',
                 'fit' => 'Rear-delivery ironing without automation, separating loading and collection.',
                 'widths' => [['w' => '2100 mm', 'm' => 'IC64821R'], ['w' => '2500 mm', 'm' => 'IC64825R'], ['w' => '3200 mm', 'm' => 'IC64832R']]],

                ['cyl' => 'Ø480 mm', 'delivery' => 'Rear Delivery', 'auto' => 'Length Folding',
                 'name' => 'Ø480 Rear Delivery — Length Folding', 'slug' => 'cylinder-480mm', 'img' => '/images/pages/ironers/cylinder-480-ic648.jpg',
                 'fit' => 'Rear delivery with length folding for finished, folded flatwork.',
                 'widths' => [['w' => '2100 mm', 'm' => 'IC64821RLF'], ['w' => '2500 mm', 'm' => 'IC64825RLF'], ['w' => '3200 mm', 'm' => 'IC64832RLF']]],

                ['cyl' => 'Ø480 mm', 'delivery' => 'Rear Delivery', 'auto' => 'Length Folding & Integrated Feeder',
                 'name' => 'Ø480 Rear Delivery — Length Folding & Integrated Feeder', 'slug' => 'cylinder-480mm', 'img' => '/images/pages/ironers/cylinder-480-ic648.jpg',
                 'fit' => 'Rear delivery with length folding and an integrated feeder for higher output.',
                 'widths' => [['w' => '2100 mm', 'm' => 'IC64821FRL'], ['w' => '2500 mm', 'm' => 'IC64825FRL'], ['w' => '3200 mm', 'm' => 'IC64832FRL']]],
            ];

            // facet option lists (fixed order) + counts derived from the cards
            $cylOrder = ['Ø330 mm', 'Ø480 mm'];
            $deliveryOrder = ['Front Delivery', 'Rear Delivery'];
            $autoOrder = ['No Automation', 'Length Folding', 'Feeding & Length Folding', 'Feeding, Folding & Stacking', 'Length Folding & Integrated Feeder'];
            $cylOpts = []; $deliveryOpts = []; $autoOpts = [];
            foreach($ironerCards as $c) {
                $cylOpts[$c['cyl']] = ($cylOpts[$c['cyl']] ?? 0) + 1;
                if($c['delivery']) $deliveryOpts[$c['delivery']] = ($deliveryOpts[$c['delivery']] ?? 0) + 1;
                if($c['auto']) $autoOpts[$c['auto']] = ($autoOpts[$c['auto']] ?? 0) + 1;
            }
        @endphp

        <div x-data="{
                cyl: [],
                delivery: [],
                auto: [],
                matches(c) {
                    if (c.cyl === 'Ø330 mm') {
                        return (this.cyl.length === 0 || this.cyl.includes('Ø330 mm')) && this.delivery.length === 0 && this.auto.length === 0;
                    }
                    const cy = this.cyl.length === 0 || this.cyl.includes(c.cyl);
                    const d  = this.delivery.length === 0 || this.delivery.includes(c.delivery);
                    const a  = this.auto.length === 0 || this.auto.includes(c.auto);
                    return cy && d && a;
                },
                cards: {{ \Illuminate\Support\Js::from(array_map(fn($c) => ['cyl'=>$c['cyl'],'delivery'=>$c['delivery'],'auto'=>$c['auto']], $ironerCards)) }},
                get count() { return this.cards.filter(c => this.matches(c)).length; },
                clearAll() { this.cyl = []; this.delivery = []; this.auto = []; },
             }"
             class="grid grid-cols-1 lg:grid-cols-[260px_1fr] gap-8 lg:gap-10 items-start">

            {{-- LEFT: filter sidebar --}}
            <aside class="lg:sticky lg:top-28 self-start border border-gray-200 rounded-xl p-5">
                <div class="flex items-center justify-between">
                    <span class="font-heading font-bold text-navy text-xs uppercase tracking-[0.16em]">Filter Configurations</span>
                    <button @click="clearAll()" class="font-body text-xs text-[#148af4] hover:underline">Reset all</button>
                </div>

                {{-- Cylinder Size --}}
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <p class="font-heading font-bold text-navy text-sm mb-3">Cylinder Size</p>
                    <div class="space-y-2.5">
                        @foreach($cylOrder as $val)
                        @if(isset($cylOpts[$val]))
                        <label class="flex items-center justify-between cursor-pointer group">
                            <span class="flex items-center gap-2.5">
                                <input type="checkbox" value="{{ $val }}" x-model="cyl" class="w-4 h-4 rounded border-gray-300 accent-[#148af4] cursor-pointer">
                                <span class="font-body text-sm text-gray-600 group-hover:text-navy transition-colors">{{ $val }}</span>
                            </span>
                            <span class="font-body text-xs text-gray-400">{{ $cylOpts[$val] }}</span>
                        </label>
                        @endif
                        @endforeach
                    </div>
                </div>

                {{-- Delivery (Ø480 only) --}}
                <div class="mt-4 pt-4 border-t border-gray-100" x-show="cyl.length === 0 || cyl.includes('Ø480 mm')">
                    <p class="font-heading font-bold text-navy text-sm mb-3">Delivery</p>
                    <div class="space-y-2.5">
                        @foreach($deliveryOrder as $val)
                        @if(isset($deliveryOpts[$val]))
                        <label class="flex items-center justify-between cursor-pointer group">
                            <span class="flex items-center gap-2.5">
                                <input type="checkbox" value="{{ $val }}" x-model="delivery" class="w-4 h-4 rounded border-gray-300 accent-[#148af4] cursor-pointer">
                                <span class="font-body text-sm text-gray-600 group-hover:text-navy transition-colors">{{ $val }}</span>
                            </span>
                            <span class="font-body text-xs text-gray-400">{{ $deliveryOpts[$val] }}</span>
                        </label>
                        @endif
                        @endforeach
                    </div>
                </div>

                {{-- Automation (Ø480 only) --}}
                <div class="mt-4 pt-4 border-t border-gray-100" x-show="cyl.length === 0 || cyl.includes('Ø480 mm')">
                    <p class="font-heading font-bold text-navy text-sm mb-3">Automation</p>
                    <div class="space-y-2.5">
                        @foreach($autoOrder as $val)
                        @if(isset($autoOpts[$val]))
                        <label class="flex items-center justify-between cursor-pointer group">
                            <span class="flex items-center gap-2.5">
                                <input type="checkbox" value="{{ $val }}" x-model="auto" class="w-4 h-4 rounded border-gray-300 accent-[#148af4] cursor-pointer">
                                <span class="font-body text-sm text-gray-600 group-hover:text-navy transition-colors">{{ $val }}</span>
                            </span>
                            <span class="font-body text-xs text-gray-400">{{ $autoOpts[$val] }}</span>
                        </label>
                        @endif
                        @endforeach
                    </div>
                </div>

                {{-- Footer count + clear --}}
                <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between">
                    <span class="font-body text-sm text-navy font-bold"><span x-text="count"></span> <span x-text="count === 1 ? 'configuration' : 'configurations'"></span></span>
                    <button @click="clearAll()" class="font-body text-xs text-[#148af4] hover:underline">Clear filters</button>
                </div>
            </aside>

            {{-- RIGHT: configuration cards (widths listed inside each card) --}}
            <div>
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-x-6 gap-y-10">
                    @foreach($ironerCards as $c)
                    <div x-show="matches({{ \Illuminate\Support\Js::from(['cyl'=>$c['cyl'],'delivery'=>$c['delivery'],'auto'=>$c['auto']]) }})" class="flex flex-col">
                        <div class="flex items-center justify-center h-44 lg:h-48 mb-5">
                            <img src="{{ $c['img'] }}" alt="{{ $c['name'] }}" class="max-h-full w-auto object-contain transition-transform duration-300 hover:-translate-y-1.5">
                        </div>
                        <p class="font-body text-xs mb-1.5"><span class="font-bold text-[#148af4]">{{ $c['cyl'] }}</span>@if($c['delivery'])<span class="text-gray-400"> &middot; {{ $c['delivery'] }}</span>@endif</p>
                        <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-3">{{ $c['name'] }}</h3>
                        <p class="font-body text-gray-500 text-sm leading-relaxed mb-4">{{ $c['fit'] }}</p>

                        {{-- Available sizes (widths) as options inside the card --}}
                        <p class="font-body font-bold text-navy text-xs uppercase tracking-[0.16em] mb-2">Available sizes</p>
                        <div class="flex flex-wrap gap-1.5 mb-5">
                            @foreach($c['widths'] as $wd)
                            <span class="font-body text-[11px] font-bold text-navy bg-gray-100 px-2.5 py-1 rounded">{{ $wd['w'] }} <span class="text-gray-400 font-normal">· {{ $wd['m'] }}</span></span>
                            @endforeach
                        </div>

                        <div class="mt-auto">
                            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors w-full">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/></svg>
                                Request Ironer Advice
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- Empty state --}}
                <div x-show="count === 0" x-cloak class="text-center py-16">
                    <p class="font-body text-gray-500 text-base">No ironers match that combination. <button @click="clearAll()" class="text-[#148af4] font-bold hover:underline">Clear filters</button> or <a href="{{ route('contact') }}" class="text-[#148af4] font-bold hover:underline">talk to our team</a>.</p>
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
    </div>
</section>

{{-- 11. FINISHING EQUIPMENT BAND --}}
<section id="finishing-equipment" class="pt-12 lg:pt-16 pb-20 lg:pb-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-[3fr_3fr] gap-8 lg:gap-10 items-start">
            <div class="reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Finishing Equipment</p>
                <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-3">
                    <span class="sm:block">Finishing equipment for</span>
                    <span class="sm:block">garments, <span style="color:#148af4;">uniforms</span></span>
                    <span class="sm:block" style="color:#148af4;">and shaped items</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed max-w-2xl mb-6">
                    <span class="sm:block lg:whitespace-nowrap">Explore ironing tables, presses and automated finishing options</span>
                    <span class="sm:block">for different production volumes.</span>
                </p>
                <div class="flex flex-col sm:flex-row gap-3">
                    <a href="{{ route('equipment.category', 'finishing-equipment') }}"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                        View Finishing Equipment
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 border border-gray-300 text-navy hover:border-navy font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Finishing Advice
                    </a>
                </div>
            </div>
            <div class="reveal reveal-right lg:-mt-2 lg:self-start lg:translate-x-4">
                <div class="grid grid-cols-3 gap-1 sm:gap-2 bg-white rounded-2xl">
                    @foreach(['FIT2B', 'FPM-WC', 'FFT6-WC'] as $prod)
                    <div class="relative flex items-start justify-center h-[190px] sm:h-[230px] lg:h-[290px]">
                        <img src="/images/pages/ironers/{{ $prod }}.jpg" alt=""
                             class="relative z-10 w-full max-h-full object-contain" style="mix-blend-mode:multiply;">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- RESOURCES BAR (slim inline) — after Finishing Equipment --}}
<div class="bg-white h-8 lg:h-12"></div>
@include('components.resources-bar', ['groups' => [
    ['title' => 'Official Resources',  'links' => [['l' => 'Hot Cylinder Ironers brochure', 'h' => '/pdfs/EPR-Brochure%20Line%206000-Hot_Cylinder_Ironers-ENG-2023_LR.pdf'], ['l' => 'Ironer FFS leaflet', 'h' => '/pdfs/EPR-leaflet-IronerFFS-EN-20231122-LR-singlePage.pdf'], ['l' => 'Product resources', 'h' => route('resources')]]],
    ['title' => 'Finishing Equipment', 'links' => [['l' => 'Ironing tables & presses', 'h' => route('equipment.category', 'finishing-equipment')], ['l' => 'Ask about finishing', 'h' => route('contact')]]],
    ['title' => 'Related Equipment',   'links' => [['l' => 'Commercial Washers', 'h' => route('equipment.category', 'commercial-washers')], ['l' => 'Tumble Dryers', 'h' => route('equipment.category', 'tumble-dryers')], ['l' => 'Drying Cabinets', 'h' => route('equipment.category', 'drying-cabinets')]]],
]])

<div class="bg-white h-8 lg:h-12"></div>

{{-- 11b. EQUIPMENT RENTAL STRIP (moved before Connected Support) --}}
@include('components.why-choose-strip', [
    'eyebrow'      => 'Equipment Rental',
    'mirror'       => true,
    'image'        => '/images/pages/ironers/equipment-rental-strip.jpg',
    'imagePosition' => '62% 15%',
    'wideContent'  => true,
    'headingSize'  => 'text-2xl sm:text-4xl lg:text-[1.75rem] 2xl:text-[2.1rem]',
    'headingLine1' => 'Replace equipment or expand ironing capacity',
    'headingLine2' => 'with <span style="color:#148af4;">lower upfront cost</span>',
    'body'         => 'Equipment Rental can support ironer replacement or additional capacity without one large capital purchase, with service included under agreed terms.',
    'miniPoints'   => [
        ['icon' => 'healthcarerentalstrip1', 'label' => 'Lower<br>Outlay'],
        ['icon' => '166', 'label' => 'Budget<br>Control', 'iconStyle' => 'filter:brightness(0) invert(1);'],
        ['icon' => '146', 'label' => 'Included<br>Support'],
    ],
])

<div class="bg-white h-8 lg:h-12"></div>

{{-- 12. CONNECTED SUPPORT --}}
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Service Support</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-[2.5rem] 2xl:text-5xl leading-tight mb-3">
                Keep commercial ironers <span style="color:#148af4;">supported beyond installation</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Choose the support your site needs to keep ironers running and manage maintenance needs over time.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                [
                    'title' => 'Repairs &amp; Call-Outs',
                    'text'  => 'Service and breakdown support when ironer faults interrupt linen finishing or daily operation.',
                    'cta'   => 'Request Support',
                    'route' => route('repairs'),
                    'img'   => '/images/shared/repairs-callouts.jpg',
                    'pos'   => '50% 35%',
                ],
                [
                    'title' => 'Preventive Maintenance',
                    'text'  => 'Planned servicing to help keep ironer condition, safety checks and maintenance needs organised.',
                    'cta'   => 'View Maintenance Support',
                    'route' => route('service-contracts'),
                    'img'   => '/images/shared/service-contracts-hero.png',
                    'pos'   => '90% 35%',
                ],
                [
                    'title' => 'Equipment Rental',
                    'text'  => 'Lower upfront cost where suitable, with selected ironer equipment installed and supported under Equipment Rental terms.',
                    'cta'   => 'Explore Equipment Rental',
                    'route' => route('rental'),
                    'img'   => '/images/shared/td6-11-multihousing-room-front.jpg',
                    'pos'   => '66% center',
                ],
                [
                    'title' => 'Support &amp; Aftercare',
                    'text'  => 'Service history, aftercare and parts support after installation, rental, repair or inspection.',
                    'cta'   => 'View Support &amp; Aftercare',
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

{{-- 13. (Rental Options strip moved up — now before Connected Support, §11b) --}}

{{-- 15. CUSTOMER CONFIDENCE --}}
@include('components.testimonials', [
    'eyebrow'    => 'Customer Experience',
    'heading'    => 'What customers say about <span style="color:#148af4;">Irish Laundry Systems</span>',
    'subheading' => '',
])

{{-- 16. TRUSTED BY LOGO STRIP --}}
@include('components.proof-bar')

{{-- 17. FAQ --}}
@include('components.faq', [
    'eyebrow' => 'Commercial Ironer FAQs',
    'heading' => 'Clear answers before the <span style="color:#148af4;">ironer decision</span>',
    'faqs' => [
        ['question' => 'What is the difference between a hot cylinder ironer and a roller ironer?', 'answer' => 'Many customers use terms like roller ironer, rotary ironer, dryer ironer and flatwork ironer when looking for commercial ironing equipment. Irish Laundry Systems can help confirm which option fits the linen type, room space, working width and output required.'],
        ['question' => 'When should a site consider a hot cylinder or flatwork ironer?', 'answer' => 'Hot cylinder and flatwork ironers are a strong fit where linen finish, output, hygiene control and consistent flatwork processing matter every day.'],
        ['question' => 'Does Irish Laundry Systems supply ironing tables and finishing equipment?', 'answer' => 'Yes. Finishing Equipment is a separate option for ironing tables, steam irons, presses and hand-finishing support. This can be useful where a full hot cylinder ironer is not the right first step.'],
        ['question' => 'What does front or rear delivery mean?', 'answer' => 'Front and rear delivery describe where finished linen exits after ironing. Front delivery returns linen to the front. Rear delivery sends linen to the back, separating feeding and collection where the room allows.'],
        ['question' => 'Can DIAMMS support bacteria-free linen?', 'answer' => 'Yes. DIAMMS supports bacteria-free linen through controlled moisture management and automatic ironer speed adjustment where the correct Electrolux Professional process is used.'],
        ['question' => 'Is the 20% gas saving available on every ironer?', 'answer' => 'No. The 20% gas energy saving applies to suitable gas-heated models using Electrolux Professional Ceramic Burner technology.'],
        ['question' => 'Can commercial ironers be rented?', 'answer' => 'Where suitable, selected equipment may be available through rental. Irish Laundry Systems reviews whether rental, purchase or another route is the better fit for the site.'],
    ],
])

{{-- 18. Resources moved up into the COMPACT RESOURCES BAR (§9b, before the Product Finder) — matches other equipment pages --}}

{{-- 19. FINAL CTA — embedded advice form --}}
<div id="ironer-form"></div>
@include('components.cta-downtime-form', [
    'pageSource'        => 'ironers_cta',
    'eyebrow'           => 'Request Ironer Advice',
    'headingSize'       => 'text-2xl sm:text-4xl lg:text-[2.625rem]',
    'heading'           => 'Discuss your commercial ironer<br> requirements with <span style="color:#148af4;">our<br> engineering team</span>',
    'body'              => 'Tell us what you process, your expected volume and the space available.<br class="hidden lg:block"> We’ll review the requirements and contact you directly.',
    'formTitle'         => 'Request Ironer Advice',
    'buttonText'        => 'Request Ironer Advice',
    'showLocationField' => true,
    'equipmentLabel'    => 'Current laundry setup',
    'messageLabel'      => 'What do you need to iron / finish?',
    'requestTypeLabel'  => 'Are you looking at equipment purchase, rental, repair or maintenance?',
])

@endsection
