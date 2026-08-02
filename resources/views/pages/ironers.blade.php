@extends('layouts.app')

@section('pageTitle', 'Commercial Ironers, Roller Ironing & Finishing Equipment | Electrolux Professional | Irish Laundry Systems')

@section('meta')
<meta name="description" content="Commercial ironers, roller ironing advice and finishing equipment chosen around linen finish, output, room layout and long-term support. Irish Laundry Systems supplies, installs, rents and supports Electrolux Professional ironers across Ireland.">
@endsection

@section('content')

{{-- 2. HERO --}}
<section class="relative overflow-hidden flex flex-col h-auto min-h-[480px] lg:h-[720px]" style="min-height:480px;">
    <img src="/images/pages/ironers/heroironers-wide.jpg" alt="Commercial ironers and flatwork finishing"
         class="absolute inset-0 w-full h-full object-cover" style="object-position: 72% center; transform: scale(1.25);">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.75) 42%, rgba(1,30,65,0.35) 65%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 sm:py-20 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-3xl lg:max-w-4xl">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Commercial Ironers</p>
                <h1 class="font-heading font-bold text-white text-2xl sm:text-4xl lg:text-5xl leading-tight mb-6">
                    <span class="sm:block">Commercial ironers for <span style="color:#148af4;">consistent</span></span>
                    <span class="block" style="color:#148af4;">flatwork finishing and easier handling</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    Irish Laundry Systems supplies, installs and supports Electrolux Professional ironers for sheets, table linen and other flatwork.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('request-assessment') }}"
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
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Ironer Planning</p>
        <div class="grid grid-cols-1 lg:grid-cols-[3fr_2fr] gap-12 lg:gap-16 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight">
                    <span class="sm:block">Plan the ironing setup for</span>
                    <span class="block" style="color:#148af4;">your flatwork, volume and available space</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed">
                    We review flatwork sizes, working width, delivery direction and any feeding or folding requirements before recommending a configuration.
                </p>
            </div>

        </div>
    </div>
</section>

{{-- 5. IRONING & FINISHING OPTIONS --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Ironing &amp; Finishing Options</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Select the equipment category for <span style="color:#148af4;">the items your site needs to finish</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                ['title' => 'Flatwork Ironers', 'copy' => 'For sheets, table linen and other flatwork that needs a consistent finish at higher volumes.', 'cta' => 'Explore Flatwork Ironers', 'href' => '#ironer-range', 'img' => '/images/pages/ironers/flatwork-iv64821ffs.jpg'],
                ['title' => 'Roller / Rotary Ironers',         'copy' => 'For sites that need a practical ironing setup for regular flatwork without a larger finishing line.', 'cta' => 'View Roller Ironing Advice', 'href' => '#ironer-range', 'img' => '/images/pages/ironers/roller-ic63316.jpg'],
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
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Financial Performance</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Review the factors that shape <span style="color:#148af4;">ironing cost, output and handling</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Energy use, daily capacity, delivery options and automation vary across ironer configurations.
            </p>
        </div>

        @include('components.financial-metrics', ['labelDrop' => true, 'items' => [
            ['icon'=>'220', 'iconClass'=>'scale-[1.213] translate-y-[0.4%]', 'prefix'=>'Up to', 'stat'=>'20%',                'size'=>'text-4xl', 'label'=>'Gas Savings',       'body'=>'Ceramic Burner technology can reduce gas use on suitable models.'],
            ['icon'=>'199', 'prefix'=>'Up to', 'stat'=>'30%',                'size'=>'text-4xl', 'label'=>'Higher Output', 'iconClass'=>'scale-[0.985] translate-y-[1.2%]',      'body'=>'Dubixium technology supports higher productivity and even heat distribution.'],
            ['icon'=>'221', 'prefix'=>'Up to', 'stat'=>'600<br>sheets',      'size'=>'text-2xl', 'label'=>'Daily Capacity', 'iconClass'=>'scale-[1.067] translate-y-[0.4%]',                 'body'=>'Selected feeding, folding and stacking options support high-volume flatwork.'],
            ['icon'=>'222', 'prefix'=>'',      'stat'=>'Staffing<br>Efficiency', 'size'=>'text-2xl', 'label'=>'Less Handling', 'iconClass'=>'scale-[1.124] translate-y-[5.6%]', 'body'=>'Automation options reduce repeated manual handling across daily production.'],
            ['icon'=>'200', 'prefix'=>'',      'stat'=>'Better<br>Room Fit', 'size'=>'text-2xl', 'label'=>'Delivery Options', 'iconClass'=>'scale-[1.088] translate-y-[1.1%]',  'body'=>'Front or rear delivery helps match the ironer to the available room layout.'],
        ]])
    </div>
</section>

{{-- OnE CONNECTED / CONNECTED LAUNDRY INTELLIGENCE STRIP --}}
@include('components.one-connected-strip', ['ctaLabel' => 'Ask About Connected Ironers'])

{{-- 7. ELECTROLUX PROFESSIONAL PROOF --}}
<section class="py-12 lg:py-16 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Technical Performance</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Technology that supports <span style="color:#148af4;">controlled ironing performance</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Available features vary by ironer configuration.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-3">
            @foreach([
                ['icon' => '223', 'imgClass' => 'w-24 h-24 object-contain scale-[1.273] translate-y-[0.5%]', 'title' => 'DIAMMS / Moisture Control', 'copy' => 'Adjusts ironer speed to residual moisture for consistent drying and controlled thermal treatment.', 'badge' => 'DIAMMS'],
                ['icon' => '198', 'imgClass' => 'w-24 h-24 object-contain scale-[1.938] translate-y-[5.2%]', 'title' => 'Dubixium',                     'copy' => 'Distributes heat evenly across the cylinder for a consistent finish with less local overheating.', 'badge' => 'Dubixium'],
                ['icon' => '224', 'imgClass' => 'w-full h-full object-contain scale-[1.32]', 'title' => 'ERGOCERT 4-star', 'copy' => 'Ergonomics-certified design supports safer and more comfortable repeated operation.', 'badge' => 'ERGOCERT'],
                ['icon' => 'FeedNow', 'imgClass' => 'w-24 h-24 object-contain scale-[1.414] translate-y-[1.2%]', 'title' => 'Feed Now / Feed Alone',        'copy' => 'Simplifies flatwork loading and reduces repeated operator handling.', 'badge' => 'Feeding'],
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

{{-- 8. IRONER LAYOUT --}}
<section class="py-16 lg:py-24 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 lg:mb-12 reveal reveal-left">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Ironer Layout</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-3">
                Front or rear delivery for <span style="color:#148af4;">room layout and collection</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Delivery direction determines where finished flatwork is collected and how loading and collection are organised.
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

        <a href="{{ route('request-assessment') }}"
           class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
            Plan the Right Ironer Layout
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
        </a>
    </div>
</section>

{{-- 9. ROOM PLANNING STRIP --}}
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:300px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/shared/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.82) 8%, rgba(20,138,244,0.45) 28%, rgba(20,138,244,0.18) 48%, transparent 65%);"></div>
    </div>
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-10 lg:py-14 w-full max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Room Planning</p>
        <h2 class="font-heading font-bold text-white text-2xl sm:text-4xl lg:text-5xl leading-tight mb-4">
            <span class="sm:block">Plan the complete ironer</span>
            <span class="sm:block">setup around <span style="color:#011E41;">your space</span></span>
            <span class="block" style="color:#011E41;">and daily demand</span>
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6 max-w-xl">
            ILS reviews working width, heating, access and output needs before recommending the right ironer and installation approach.
        </p>
        <div class="flex items-center flex-wrap gap-x-4 gap-y-2 mb-7">
            @foreach([
                ['icon' => '56', 'label' => 'Room<br>Fit', 'sc' => 'scale-[1.035] translate-y-[2.2%]'],
                ['icon' => '225', 'label' => 'Linen<br>Volume', 'sc' => 'scale-[1.025] translate-y-[0.4%]'],
                ['icon' => '226', 'label' => 'Heating<br>Choice', 'sc' => 'scale-[1.139] translate-y-[1.2%]'],
            ] as $pt)
            <span class="flex items-center gap-2 flex-shrink-0">
                <img src="/images/icons/{{ $pt['icon'] }}.png" alt="" aria-hidden="true" class="h-14 w-auto object-contain {{ $pt['sc'] ?? '' }}" style="filter:brightness(0) invert(1);">
                <span class="font-body text-white text-sm font-bold leading-tight">{!! $pt['label'] !!}</span>
            </span>
            @endforeach
        </div>
        <a href="{{ route('request-assessment') }}"
           class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
            Request Ironer Advice
        </a>
    </div>
</section>

{{-- white spacer between the Room Planning strip and the Resources bar --}}
<div class="bg-white h-12 lg:h-16"></div>

{{-- 10. FILTER PRODUCTS / PRODUCT GRID --}}
<section id="ironer-range" class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Ironer Range Finder</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Browse ironer ranges for <span style="color:#148af4;">your flatwork operation</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                Filter by range type, cylinder diameter and automation level, then open each range for specifications and model details.
            </p>
        </div>

        {{-- Ironer families — one card/image per range, filterable by cylinder and automation (like the washers page) --}}
        @php
            $ironerFamilies = [
                ['name' => 'Line 6000 Flatwork Ironers', 'slug' => 'line-6000-flatwork', 'fit' => 'Large flatwork ironers for sheets and table linen, with an optional integrated feeder for higher output.', 'auto' => ['No automation','Feeding'], 'capLabel' => '2.5–3.3 m', 'models' => 'IB5725, IB5730, IB5733 (+ -F feeder)', 'roll' => 'Flatwork', 'img' => '/images/pages/ironers/flatwork-ib57.jpg'],
                ['name' => 'Ø 480 mm Cylinder Ironers', 'slug' => 'cylinder-480mm', 'fit' => 'The main cylinder ironer range — front or rear delivery, from basic up to feeding, folding and stacking.', 'auto' => ['No automation','Length folding','Feeding','Folding & stacking'], 'capLabel' => 'Ø 480 mm', 'models' => 'IC648 21 / 25 / 32 series, IV648', 'roll' => 'Ø 480 mm', 'img' => '/images/pages/ironers/cylinder-480-ic648.jpg'],
                ['name' => 'Ø 330 mm Cylinder Ironers', 'slug' => 'cylinder-330mm', 'fit' => 'Mid-size cylinder ironers for steady on-premise finishing.', 'auto' => ['No automation'], 'capLabel' => 'Ø 330 mm', 'models' => 'IC63316, IC63320', 'roll' => 'Ø 330 mm', 'img' => '/images/pages/ironers/cylinder-330-ic633.jpg'],
                ['name' => 'Ø 230 mm Bed-type Ironers', 'slug' => 'bed-230mm', 'fit' => 'Compact bed-type ironers for smaller laundry rooms and lighter finishing volume.', 'auto' => ['No automation'], 'capLabel' => 'Ø 230 mm', 'models' => 'IB62310, IB62314, IB62316', 'roll' => 'Ø 230 mm', 'img' => '/images/pages/ironers/bed-230-ib623.jpg'],
            ];
        @endphp

        @php
            // derive facet option arrays + counts from the family data (no new copy / catalogue change)
            $rollOpts = []; $autoOpts = [];
            foreach($ironerFamilies as $f) {
                $rollOpts[$f['roll']] = ($rollOpts[$f['roll']] ?? 0) + 1;
                foreach($f['auto'] as $a) { $autoOpts[$a] = ($autoOpts[$a] ?? 0) + 1; }
            }
            $rollOrder = ['Flatwork','Ø 480 mm','Ø 330 mm','Ø 230 mm'];
            $autoOrder = ['No automation','Feeding','Length folding','Folding & stacking'];
            $famJs = array_map(fn($f) => ['roll' => $f['roll'], 'auto' => $f['auto']], $ironerFamilies);
        @endphp

        <div x-data="{
                roll: [],
                auto: [],
                families: {{ \Illuminate\Support\Js::from($famJs) }},
                matches(f) {
                    const r = this.roll.length === 0 || this.roll.includes(f.roll);
                    const a = this.auto.length === 0 || (f.auto && f.auto.some(x => this.auto.includes(x)));
                    return r && a;
                },
                get count() { return this.families.filter(f => this.matches(f)).length; },
                clearAll() { this.roll = []; this.auto = []; },
             }"
             class="grid grid-cols-1 lg:grid-cols-[260px_1fr] gap-8 lg:gap-10 items-start">

            {{-- LEFT: filter sidebar --}}
            <aside class="lg:sticky lg:top-28 self-start border border-gray-200 rounded-xl p-5">
                <div class="flex items-center justify-between">
                    <span class="font-heading font-bold text-navy text-xs uppercase tracking-[0.16em]">Filter Ranges</span>
                    <button @click="clearAll()" class="font-body text-xs text-[#148af4] hover:underline">Reset all</button>
                </div>

                {{-- Type --}}
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <p class="font-heading font-bold text-navy text-sm mb-3">Type</p>
                    <div class="space-y-2.5">
                        @foreach($rollOrder as $val)
                        @if(isset($rollOpts[$val]))
                        <label class="flex items-center justify-between cursor-pointer group">
                            <span class="flex items-center gap-2.5">
                                <input type="checkbox" value="{{ $val }}" x-model="roll" class="w-4 h-4 rounded border-gray-300 accent-[#148af4] cursor-pointer">
                                <span class="font-body text-sm text-gray-600 group-hover:text-navy transition-colors">{{ $val }}</span>
                            </span>
                            <span class="font-body text-xs text-gray-400">{{ $rollOpts[$val] }}</span>
                        </label>
                        @endif
                        @endforeach
                    </div>
                </div>

                {{-- Automation --}}
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <p class="font-heading font-bold text-navy text-sm mb-3">Automation level</p>
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
                    <span class="font-body text-sm text-navy font-bold"><span x-text="count"></span> <span x-text="count === 1 ? 'range' : 'ranges'"></span></span>
                    <button @click="clearAll()" class="font-body text-xs text-[#148af4] hover:underline">Clear filters</button>
                </div>
            </aside>

            {{-- RIGHT: product cards (floating images) --}}
            <div>
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-x-6 gap-y-10">
                    @foreach($ironerFamilies as $f)
                    <div x-show="matches({{ \Illuminate\Support\Js::from(['roll'=>$f['roll'],'auto'=>$f['auto']]) }})" class="flex flex-col">
                        <a href="{{ route('equipment.product', ['category' => 'ironers', 'product' => $f['slug']]) }}" class="flex items-center justify-center h-44 lg:h-48 mb-5">
                            <img src="{{ $f['img'] }}" alt="{{ $f['name'] }}" class="max-h-full w-auto object-contain transition-transform duration-300 hover:-translate-y-1.5">
                        </a>
                        <p class="font-body text-xs mb-1.5"><span class="font-bold text-[#148af4]">{{ $f['roll'] }}</span>@if($f['capLabel'] !== $f['roll'])<span class="text-gray-400"> &middot; {{ $f['capLabel'] }}</span>@endif</p>
                        <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2"><a href="{{ route('equipment.product', ['category' => 'ironers', 'product' => $f['slug']]) }}" class="hover:text-[#148af4] transition-colors">{{ $f['name'] }}</a></h3>
                        <p class="font-body text-gray-500 text-sm leading-relaxed mb-4">{{ $f['fit'] }}</p>
                        @if(!empty($f['auto']))
                        <div class="flex flex-wrap gap-1.5 mb-5">
                            @foreach($f['auto'] as $a)
                            <span class="font-body text-[10px] font-bold uppercase tracking-wide text-[#148af4] bg-[#148af4]/10 px-2 py-1 rounded">{{ $a }}</span>
                            @endforeach
                        </div>
                        @endif
                        <div class="mt-auto flex flex-col gap-2.5">
                            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/></svg>
                                Request Ironer Advice
                            </a>
                            <a href="{{ route('equipment.product', ['category' => 'ironers', 'product' => $f['slug']]) }}" class="inline-flex items-center justify-center gap-2 border border-gray-300 text-navy hover:border-navy font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                                View Details
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
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

{{-- RESOURCES BAR (slim inline) --}}
@include('components.resources-bar', ['groups' => [
    ['title' => 'Official Resources',  'links' => [['l' => 'Hot Cylinder Ironers brochure', 'h' => '/pdfs/EPR-Brochure%20Line%206000-Hot_Cylinder_Ironers-ENG-2023_LR.pdf'], ['l' => 'Ironer FFS leaflet', 'h' => '/pdfs/EPR-leaflet-IronerFFS-EN-20231122-LR-singlePage.pdf'], ['l' => 'Product resources', 'h' => route('resources')]]],
    ['title' => 'Finishing Equipment', 'links' => [['l' => 'Ironing tables & presses', 'h' => route('equipment.category', 'finishing-equipment')], ['l' => 'Ask about finishing', 'h' => route('contact')]]],
    ['title' => 'Related Equipment',   'links' => [['l' => 'Commercial Washers', 'h' => route('equipment.category', 'commercial-washers')], ['l' => 'Tumble Dryers', 'h' => route('equipment.category', 'tumble-dryers')], ['l' => 'Drying Cabinets', 'h' => route('equipment.category', 'drying-cabinets')]]],
]])

{{-- 11. FINISHING EQUIPMENT BAND --}}
<section id="finishing-equipment" class="pt-12 lg:pt-16 pb-20 lg:pb-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-[7fr_5fr] gap-8 lg:gap-16 items-center">
            <div class="reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Finishing Equipment</p>
                <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-3">
                    <span class="sm:block">Finishing equipment for</span>
                    <span class="sm:block">garments, <span style="color:#148af4;">uniforms</span></span>
                    <span class="block" style="color:#148af4;">and shaped items</span>
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
            <div class="reveal reveal-right flex items-center justify-center">
                <div class="w-full rounded-2xl overflow-hidden bg-white">
                    <img src="/images/pages/finishing-equipment/FIT1.jpg"
                         alt="Finishing equipment — ironing tables, steam irons and presses"
                         class="w-full h-[240px] sm:h-[260px] lg:h-[285px] object-contain object-center">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 11b. EQUIPMENT RENTAL STRIP (moved before Connected Support) --}}
@include('components.why-choose-strip', [
    'eyebrow'      => 'Equipment Rental',
    'image'        => '/images/pages/ironers/equipment-rental-strip.jpg',
    'imagePosition' => '62% 15%',
    'headingLine1' => 'Replace equipment or expand ironing capacity with',
    'headingLine2' => '<span style="color:#148af4;">lower upfront cost</span>',
    'body'         => 'Equipment Rental gives your site access to commercial ironers and selected finishing equipment without one large upfront purchase.',
    'miniPoints'   => [
        ['icon' => 'healthcarerentalstrip1', 'label' => 'Lower<br>Outlay'],
        ['icon' => '166', 'label' => 'Budget<br>Control', 'iconStyle' => 'filter:brightness(0) invert(1);'],
        ['icon' => '146', 'label' => 'Included<br>Support'],
    ],
])

{{-- 12. CONNECTED SUPPORT --}}
<section class="py-16 lg:py-20 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Service Support</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Commercial ironer support from <span style="color:#148af4;">repair through to aftercare</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Irish Laundry Systems provides repairs, preventive maintenance, equipment rental and ongoing aftercare.
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
    'heading'    => 'What customers say about <span style="color:#148af4;">working with Irish Laundry Systems</span>',
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

{{-- 19. FINAL CTA --}}
<section class="py-16 lg:py-24" style="background-color:#011E41;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 text-center">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Request Ironer Advice</p>
        <h2 class="font-heading font-bold text-white text-2xl sm:text-4xl lg:text-5xl leading-tight mb-4 max-w-4xl mx-auto">
            <span class="sm:block">Discuss commercial ironer requirements for</span>
            <span class="block" style="color:#148af4;">your flatwork, volume and available space</span>
        </h2>
        <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl mx-auto">
            Tell us what you process, the expected daily volume and the space available. Irish Laundry Systems will review the requirements and advise on suitable ironer options.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('request-assessment') }}"
               class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                Request Ironer Advice
            </a>
        </div>
    </div>
</section>

@endsection
