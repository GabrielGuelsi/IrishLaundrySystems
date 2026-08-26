@extends('layouts.app')

@section('pageTitle', 'Barrier Washing Machines | Electrolux Professional Barrier Washers | Irish Laundry Systems')

@section('meta')
<meta name="description" content="Electrolux Professional barrier washers for healthcare, care, pharmaceutical, food processing and specialist laundry. Irish Laundry Systems supplies, installs and supports dirty-side / clean-side barrier washer-extractors across Ireland.">
@endsection

@section('content')

{{-- 2. HERO --}}
<section class="relative overflow-hidden flex flex-col h-auto min-h-[480px] lg:h-[720px]" style="min-height:480px;">
    <img src="/images/pages/barrier-washers/barrierwashernewheropic.png" alt="Barrier washing machines"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.75) 42%, rgba(1,30,65,0.35) 65%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 sm:py-20 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-3xl lg:max-w-5xl">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Barrier Washers</p>
                <h1 class="font-heading font-bold text-white text-2xl sm:text-4xl lg:text-5xl leading-tight mb-6">
                    <span class="sm:block">Barrier washers for controlled</span>
                    <span class="sm:block" style="color:#148af4;">separation in hygiene-critical laundries</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-4xl">
                    <span class="lg:block">Irish Laundry Systems supplies, installs and supports Electrolux Professional barrier washers</span>
                    <span class="lg:block">for sites that require physical separation between soiled and clean laundry.</span>
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#barrier-form"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Barrier Washer Advice
                    </a>
                    <a href="#barrier-range"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white hover:border-white/70 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        View Barrier Washer Options
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
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Equipment Selection</p>
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_1fr] gap-8 lg:gap-8 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-[2rem] 2xl:text-[2.4rem] leading-tight">
                    <span class="sm:block">Choose barrier washers around</span>
                    <span class="sm:block" style="color:#148af4;">hygiene requirements and</span>
                    <span class="sm:block" style="color:#148af4;">daily laundry demand</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed">
                    <span class="lg:block">Barrier washers support laundries where soiled and clean loads</span>
                    <span class="lg:block">need to move through clearly separated sides of the process.</span>
                    <span class="lg:block">Capacity and workflow should reflect the textiles handled,</span>
                    <span class="lg:block">daily volume and the level of hygiene control required.</span>
                </p>
            </div>

        </div>
    </div>
</section>

{{-- 6. FINANCIAL / OPERATIONAL PERFORMANCE --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Financial Performance</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-3">
                Control the <span style="color:#148af4;">running cost of barrier washing</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Equipment choice and day-to-day operation can affect costs well beyond the initial purchase.
            </p>
        </div>

        @include('components.financial-metrics', ['items' => [
            ['icon'=>'7',              'prefix'=>'Up to', 'stat'=>'50%',                 'size'=>'text-4xl', 'label'=>'water saving', 'iconClass'=>'scale-[1.181] -translate-y-[13.2%]',                'body'=>'Double drain options can support water recycling and reduce water consumption where specified.'],
            ['icon'=>'199',            'prefix'=>'Up to', 'stat'=>'25%',                 'size'=>'text-4xl', 'label'=>'productivity increase', 'iconClass'=>'scale-[0.989] translate-y-[1.8%]',       'body'=>'Electrolux ergonomic material cites a 25% productivity increase, with fewer sick days and reduced strain.'],
            ['icon'=>'213',            'prefix'=>'',      'stat'=>'Better<br>loading',    'size'=>'text-2xl', 'label'=>'less resource waste',          'labelClass'=>'translate-y-2', 'iconClass'=>'scale-[1.026] translate-y-[0.4%]', 'body'=>'Integrated weighing supports better loading, reducing underloading, overloading and avoidable water and energy waste.'],
            ['icon'=>'dosing-control', 'prefix'=>'',      'stat'=>'Less dosing<br>waste', 'size'=>'text-2xl', 'label'=>'detergent and water control', 'labelClass'=>'translate-y-2', 'iconClass'=>'scale-[1.051] -translate-y-[7.5%]', 'body'=>'Efficient Dosing adjusts detergent and water to load weight, reducing waste and supporting process consistency.'],
            ['icon'=>'181',            'prefix'=>'',      'stat'=>'Lower<br>energy cost', 'size'=>'text-2xl', 'label'=>'after washing',               'labelClass'=>'translate-y-2', 'iconClass'=>'scale-[1.212] -translate-y-[1.8%]', 'body'=>'Power Balance supports stronger extraction and lower moisture retention, reducing pressure on the drying stage.'],
        ]])
    </div>
</section>

{{-- OnE CONNECTED / CONNECTED LAUNDRY INTELLIGENCE STRIP --}}
@include('components.one-connected-strip', ['ctaLabel' => 'Ask About Connected Washers'])

{{-- 7. TECHNICAL PROOF --}}
<section class="py-20 lg:py-28 bg-gray-50 border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Barrier Washer Technology</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-3 min-[1350px]:whitespace-nowrap">
                Technology for <span style="color:#148af4;">hygiene control and easier handling</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Selected Electrolux Professional features support separation, cycle control and easier loading and unloading.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-3">
            @foreach([
                ['title' => 'Hygiene Safeguard',        'copy' => 'Hygiene Watchdog prevents accidental door opening, helping protect the separation between dirty and clean laundry throughout the wash cycle.', 'img' => '/images/icons/Hygiene-Watchdog1.webp', 'imgClass' => 'w-24 h-24 object-contain'],
                ['title' => 'Easier Daily Handling',    'copy' => 'Ergocert 4-star design, ergonomic door handles and optimised door height make loading and unloading easier for operators.', 'img' => '/images/pages/barrier-washers/Easier%20Daily%20Handling.webp', 'imgClass' => 'w-full h-full object-cover rounded-xl'],
                ['title' => 'Easier Unloading',         'copy' => 'Auto Inner Door Opening pre-opens the drum doors at the end of the cycle, making wet linen easier to extract on equipped models.', 'img' => '/images/pages/barrier-washers/Easier%20Unloading.png', 'imgClass' => 'w-full h-full object-cover rounded-xl'],
                ['title' => 'Clearer Operator Control', 'copy' => 'On Pullman models, ClarusVibe provides self-explanatory programmes and displays on both sides, reducing unnecessary movement between dirty and clean zones.', 'img' => '/images/pages/barrier-washers/Clearer%20Operator%20Control.png', 'imgClass' => 'w-full h-full object-cover rounded-xl'],
                ['icon' => '175', 'title' => 'Cycle Visibility',        'copy' => 'Monitoring options can show cycle status, alarms and key process data for supported barrier washer setups.', 'imgClass' => 'w-24 h-24 object-contain scale-[1.07] -translate-y-[2.6%]'],
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

{{-- 8. OPERATOR COMFORT / ERGOCERT --}}
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- Heading + intro (full width) --}}
        <div class="mb-10 lg:mb-16 reveal reveal-left">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Operator Comfort</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-5">
                Reduce handling effort across <span style="color:#148af4;">daily loading and unloading</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                Selected Electrolux Professional features support easier door access, clearer programme selection and more comfortable repeated use.
            </p>
        </div>

        {{-- Infographic grid: proof + barrier washer + door panel + filter panel --}}
        <style>@media (min-width:1024px){.bw-grid{grid-template-columns:minmax(0,1.5fr) auto minmax(0,1fr) minmax(265px,1.2fr) !important;}.bw-ss{grid-column:2 / 4 !important;margin-left:1rem;margin-top:-6rem;}}</style>
        <div class="grid grid-cols-1 gap-6 lg:gap-8 items-start reveal bw-grid">

            {{-- COL 1: ERGOCERT proof + Pioneers + CompassPro --}}
            <div class="flex flex-col gap-6">
                <div class="flex flex-col sm:flex-row gap-5 items-start">
                    <div class="h-64 lg:h-72 flex-shrink-0 flex items-start justify-center">
                        <img src="/images/icons/ergocertnew.png" alt="ERGOCERT — Ergonomics Certifying Institute" class="h-full w-auto object-contain">
                    </div>
                    <div>
                        <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-2">Pioneers in usability</h3>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">Electrolux ergonomics material reports <strong class="text-navy font-bold">59%</strong> fewer work-related musculoskeletal disorders, <strong class="text-navy font-bold">75%</strong> fewer sick days and a <strong class="text-navy font-bold">25%</strong> productivity increase.</p>
                        <p class="font-body text-gray-400 text-xs mt-2">Washington State Department of Labor &amp; Industries</p>
                    </div>
                </div>

                {{-- ERGOCERT 4-star detail --}}
                <div class="border-t border-gray-200 pt-6">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="font-body text-gray-500 text-xs uppercase tracking-[0.18em]">Ergonomics Certified</span>
                        <span class="flex items-center gap-1 text-[#148af4]">
                            @for($s = 0; $s < 4; $s++)
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M11.48 3.5a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
                            @endfor
                        </span>
                    </div>
                    <p class="font-heading font-bold text-navy text-base mb-1">4-star ERGOCERT rating</p>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Certified ergonomic design for repeated daily use.</p>
                </div>

                {{-- CompassPro --}}
                <div class="border-t border-gray-200 pt-10">
                    <img src="/images/shared/Compass-Pro_1-300x88.webp" alt="CompassPro control platform" class="h-14 w-auto mb-3">
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Clear programme selection, preset programmes and language options for daily operation.</p>
                </div>
            </div>

            {{-- COL 2: barrier washer image (the big equipment image) --}}
            <div class="flex items-center justify-center py-2">
                <img src="/images/pages/barrier-washers/barrierwasheroperatorconfort.png" alt="Barrier washer operator comfort" class="w-auto h-auto max-h-[440px] object-contain">
            </div>

            {{-- COL 3: The door that makes the difference --}}
            <div class="rounded-2xl bg-white p-5 lg:p-6 flex flex-col" style="box-shadow: 0 10px 35px -10px rgba(1,30,65,0.10);">
                <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-4">Easier door handling</h3>
                <div class="space-y-3.5">
                    @foreach([
                        ['t' => 'Ideal height',  'img' => 'idealheight.svg',   'b' => 'Easier loading and unloading.'],
                        ['t' => 'Wide opening',  'd' => 'M13.5 10.5V6.75a4.5 4.5 0 1 1 9 0v3.75M3.75 21.75h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H3.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z', 'b' => 'Better access on both sides.'],
                        ['t' => 'Better grip',   'img' => 'abettergrip.svg',   'b' => 'Smoother opening and closing.'],
                        ['t' => 'Door options',  'd' => 'M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z', 'b' => 'Fits room layout and side access.'],
                    ] as $dp)
                    <div class="flex items-start gap-3">
                        @if(!empty($dp['img']))
                        <img src="/images/shared/{{ $dp['img'] }}" alt="{{ $dp['t'] }}" class="w-8 h-8 object-contain flex-shrink-0 mt-0.5">
                        @else
                        <svg class="w-7 h-7 text-[#010d44] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $dp['d'] }}"/></svg>
                        @endif
                        <div>
                            <h4 class="font-heading font-bold text-navy text-sm leading-snug mb-0.5">{{ $dp['t'] }}</h4>
                            <p class="font-body text-gray-500 text-xs leading-snug">{{ $dp['b'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- COL 4: filter drawer + Request Equipment Advice CTA --}}
            <div class="flex flex-col gap-5">
                <div class="rounded-2xl bg-white p-6 flex-1" style="box-shadow: 0 10px 35px -10px rgba(1,30,65,0.10);">
                    <div class="flex items-start justify-between gap-3 mb-2">
                        <h3 class="font-heading font-bold text-navy text-xl leading-snug">Lower handling effort</h3>
                        <img src="/images/shared/saferforusers.svg" alt="Safer handling" class="w-16 h-16 object-contain flex-shrink-0">
                    </div>
                    <p class="font-body font-bold text-[#148af4] text-sm mb-2">Maximum comfort</p>
                    <p class="font-body text-gray-500 text-sm leading-relaxed mb-3">A low <strong class="text-navy font-bold">40N</strong> opening force and automatic door handling reduce effort across repeated loading and unloading.</p>
                    <div class="flex flex-wrap gap-x-4 gap-y-1.5">
                        @foreach(['40N opening force', 'Auto door handling', 'Space-saving design'] as $pt)
                        <span class="inline-flex items-center gap-1.5 font-body text-navy text-xs font-semibold">
                            <svg class="w-3.5 h-3.5 text-[#148af4] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            {{ $pt }}
                        </span>
                        @endforeach
                    </div>
                </div>
                <a href="#barrier-form"
                   class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base whitespace-nowrap transition-colors duration-200">
                    Request Equipment Advice
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            {{-- Space-saving — spans the washer + door columns, aligned with the end of the left column --}}
            <div class="flex items-center gap-3 lg:px-6 lg:border-x lg:border-gray-200 reveal bw-ss">
                <span class="flex items-center justify-center w-10 h-10 rounded-xl border border-gray-200 flex-shrink-0">
                    <svg class="w-5 h-5 text-[#010d44]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15"/></svg>
                </span>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug">Space-saving design</h3>
                    <p class="font-body text-gray-500 text-xs leading-relaxed">Selected barrier washer formats keep soiled-side and clean-side access controlled without wasting floor space.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 9. SECTOR FIT / USE CASES --}}
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Where Barrier Washers Fit</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Built for sites that need <span style="color:#148af4;">controlled separation</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed lg:whitespace-nowrap">
                Barrier washers are most relevant where clean and soiled handling need to stay apart, supporting hygiene routines, staff handling and process control.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 reveal">
            @foreach([
                ['title' => 'Healthcare',                          'img' => '/images/pages/barrier-washers/Barrier_Washers_Healthcare.png',    'route' => route('sectors.healthcare'), 'pos' => 'center'],
                ['title' => 'Care facilities',                    'img' => '/images/pages/barrier-washers/Barrier_Washers_Care_facilitie_(1).png', 'route' => route('sectors.care'), 'pos' => 'center'],
                ['title' => 'Pharma & food',                       'img' => '/images/pages/barrier-washers/Pharmaceutical & food processing.png', 'route' => route('sectors.commercial')],
                ['title' => 'Protective workwear',                 'img' => '/images/pages/barrier-washers/firefighters.png',              'route' => route('request-assessment')],
            ] as $card)
            <div class="flex flex-col items-center text-center">
                <a href="{{ $card['route'] }}" class="block w-full overflow-hidden rounded-sm mb-5">
                    <img src="{{ $card['img'] }}" alt="{{ $card['title'] }}"
                         class="w-full object-cover transition-transform duration-500 hover:scale-105" style="height:320px; object-position: {{ $card['pos'] ?? 'center' }};">
                </a>
                <h3 class="font-heading font-bold text-navy text-xl mb-4">{{ $card['title'] }}</h3>
                <a href="{{ $card['route'] }}"
                   class="inline-flex items-center justify-center bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-3 rounded-full text-sm transition-colors duration-200">
                    Discover more
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 10. PLANNING / INSTALLATION STRIP --}}
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:300px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/shared/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.85) 15%, rgba(20,138,244,0.3) 55%, transparent 100%);"></div>
    </div>
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-10 lg:py-14 max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Room Planning</p>
        <h2 class="font-heading font-bold text-white text-2xl sm:text-4xl lg:text-5xl leading-tight mb-4">
            Plan the room around <br class="hidden sm:block"><span style="color:#011E41;">separation, access and connections</span>
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6">
            <span class="sm:block lg:whitespace-nowrap">Barrier washers need room planning before installation, including dirty / clean separation,</span>
            <span class="sm:block lg:whitespace-nowrap">site access, wall opening, water supply, power and drainage.</span>
        </p>
        <div class="flex items-center flex-wrap gap-x-4 gap-y-3 mb-7">
            @foreach([
                ['icon' => '183', 'label' => 'Dirty/Clean<br>Separation', 'blend' => true, 'sc' => 'scale-[0.923] translate-y-[0.7%]'],
                ['icon' => '166', 'label' => 'Wall<br>Opening', 'sc' => 'scale-[0.986] -translate-y-[3.2%]'],
                ['icon' => '184', 'label' => 'Power &amp;<br>Drainage', 'sc' => 'scale-[0.932] translate-y-[0.3%]'],
            ] as $pt)
            <span class="flex items-center gap-2 flex-shrink-0">
                <img src="/images/icons/{{ $pt['icon'] }}.png" alt="" aria-hidden="true" class="h-14 w-auto object-contain {{ $pt['sc'] ?? '' }}" style="{{ !empty($pt['blend']) ? 'mix-blend-mode:screen;' : 'filter:brightness(0) invert(1);' }}">
                <span class="font-body text-white text-sm font-bold leading-tight">{!! $pt['label'] !!}</span>
            </span>
            @endforeach
        </div>
        <a href="#barrier-form"
           class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
            Request Equipment Advice
        </a>
    </div>
</section>

{{-- white separator band between the blue strip and the resources bar --}}
<div class="bg-white h-8 lg:h-12"></div>

{{-- 12. PRODUCT FINDER / BARRIER WASHER RANGE (Option B — left filter) --}}
<section id="barrier-range" class="py-20 lg:py-28 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Barrier Washer Range</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Browse barrier washer models by <br class="hidden sm:block"><span style="color:#148af4;">product line and capacity</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-[1400px]">
                Filter the range, then open each model for full specifications, datasheets, brochures and manuals.
            </p>
        </div>

        @php
            // Barrier washer catalogue. NOTE: WB6 is the current real range; append further
            // products (Pullman, Cleanroom options, etc.) here when supplied — the filters auto-populate.
            // One card per WB6 model (same product across kg shares one image).
            $bwSites  = ['Healthcare','Care Facilities','Pharmaceutical','Food Processing','Commercial Laundry'];
            $bwBadges = ['ERGOCERT','Hygiene Watchdog','AIDO','Power Balance'];
            $bwFit    = 'Line 6000 Evolution barrier washer with clean/dirty separation, guided operation and long-term support.';
            $bwImg    = '/images/pages/barrier-washers/line6000-barrier-washer.webp';
            // Cards for models with their own photo; imageless sizes folded into the nearest card's range.
            $barrierFamilies = [
                ['name' => 'WB6-13',  'slug' => 'wb6-13',  'profile' => 'Line 6000 Evolution', 'capLabel' => '13–18 kg',  'kg' => ['13','18'],      'sites' => $bwSites, 'badges' => $bwBadges, 'fit' => $bwFit, 'img' => '/images/pages/barrier-washers/WB6-13.jpg'],
                ['name' => 'WB6-20',  'slug' => 'wb6-20',  'profile' => 'Line 6000 Evolution', 'capLabel' => '20–27 kg',  'kg' => ['20','27'],      'sites' => $bwSites, 'badges' => $bwBadges, 'fit' => $bwFit, 'img' => '/images/pages/barrier-washers/WB6-20.jpg'],
                ['name' => 'WB6-35',  'slug' => 'wb6-35',  'profile' => 'Line 6000 Evolution', 'capLabel' => '35–70 kg',  'kg' => ['35','50','70'], 'sites' => $bwSites, 'badges' => $bwBadges, 'fit' => $bwFit, 'img' => '/images/pages/barrier-washers/WB6-35.jpg'],
                ['name' => 'WB6-110', 'slug' => 'wb6-110', 'profile' => 'Line 6000 Evolution', 'capLabel' => '90–110 kg', 'kg' => ['90','110'],     'sites' => $bwSites, 'badges' => $bwBadges, 'fit' => $bwFit, 'img' => '/images/pages/barrier-washers/WB6-110.jpg'],
            ];
            $profileOpts = []; $capOpts = []; $siteOpts = [];
            foreach($barrierFamilies as $f) {
                $profileOpts[$f['profile']] = ($profileOpts[$f['profile']] ?? 0) + 1;
                foreach($f['kg'] as $k)   { $capOpts[$k]  = ($capOpts[$k]  ?? 0) + 1; }
                foreach($f['sites'] as $s){ $siteOpts[$s] = ($siteOpts[$s] ?? 0) + 1; }
            }
            $capOrder = ['13','18','20','27','35','50','70','90','110'];
            $famJs = array_map(fn($f) => ['profile' => $f['profile'], 'kg' => $f['kg'], 'sites' => $f['sites']], $barrierFamilies);
        @endphp

        <div x-data="{
                profile: [],
                capacity: [],
                site: [],
                families: {{ \Illuminate\Support\Js::from($famJs) }},
                matches(f) {
                    const pr = this.profile.length === 0 || this.profile.includes(f.profile);
                    const cp = this.capacity.length === 0 || (f.kg && f.kg.some(k => this.capacity.includes(k)));
                    const st = this.site.length === 0 || (f.sites && f.sites.some(s => this.site.includes(s)));
                    return pr && cp && st;
                },
                get count() { return this.families.filter(f => this.matches(f)).length; },
                clearAll() { this.profile = []; this.capacity = []; this.site = []; },
             }"
             class="grid grid-cols-1 lg:grid-cols-[260px_1fr] gap-8 lg:gap-10 items-start">

            {{-- LEFT: filter sidebar --}}
            <aside class="lg:sticky lg:top-28 self-start border border-gray-200 rounded-xl p-5">
                <div class="flex items-center justify-between">
                    <span class="font-heading font-bold text-navy text-xs uppercase tracking-[0.16em]">Filter Products</span>
                    <button @click="clearAll()" class="font-body text-xs text-[#148af4] hover:underline">Reset all</button>
                </div>

                {{-- Machine Profile --}}
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <p class="font-heading font-bold text-navy text-sm mb-3">Machine Profile</p>
                    <div class="space-y-2.5">
                        @foreach($profileOpts as $val => $cnt)
                        <label class="flex items-center justify-between cursor-pointer group">
                            <span class="flex items-center gap-2.5">
                                <input type="checkbox" value="{{ $val }}" x-model="profile" class="w-4 h-4 rounded border-gray-300 accent-[#148af4] cursor-pointer">
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
                                <span class="font-body text-sm text-gray-600 group-hover:text-navy transition-colors">{{ $k }} kg</span>
                            </span>
                            <span class="font-body text-xs text-gray-400">{{ $capOpts[$k] }}</span>
                        </label>
                        @endif
                        @endforeach
                    </div>
                </div>

                {{-- Site Type --}}
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <p class="font-heading font-bold text-navy text-sm mb-3">Site Type</p>
                    <div class="space-y-2.5">
                        @foreach($siteOpts as $val => $cnt)
                        <label class="flex items-center justify-between cursor-pointer group">
                            <span class="flex items-center gap-2.5">
                                <input type="checkbox" value="{{ $val }}" x-model="site" class="w-4 h-4 rounded border-gray-300 accent-[#148af4] cursor-pointer">
                                <span class="font-body text-sm text-gray-600 group-hover:text-navy transition-colors">{{ $val }}</span>
                            </span>
                            <span class="font-body text-xs text-gray-400">{{ $cnt }}</span>
                        </label>
                        @endforeach
                    </div>
                </div>

                {{-- Footer count + clear --}}
                <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between">
                    <span class="font-body text-sm text-navy font-bold"><span x-text="count"></span> <span x-text="count === 1 ? 'model' : 'models'"></span></span>
                    <button @click="clearAll()" class="font-body text-xs text-[#148af4] hover:underline">Clear filters</button>
                </div>
            </aside>

            {{-- RIGHT: product cards --}}
            <div>
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-x-6 gap-y-10">
                    @foreach($barrierFamilies as $f)
                    <div x-show="matches({{ \Illuminate\Support\Js::from(['profile'=>$f['profile'],'kg'=>$f['kg'],'sites'=>$f['sites']]) }})" class="flex flex-col">
                        <a href="{{ route('equipment.product', ['category' => 'barrier-washers', 'product' => $f['slug']]) }}" class="flex items-center justify-center h-44 lg:h-48 mb-5">
                            <img src="{{ $f['img'] }}" alt="{{ $f['name'] }}" class="max-h-full w-auto object-contain transition-transform duration-300 hover:-translate-y-1.5">
                        </a>
                        <p class="font-body text-xs mb-1.5"><span class="font-bold text-[#148af4]">{{ $f['profile'] }}</span><span class="text-gray-400"> &middot; {{ $f['capLabel'] }}</span></p>
                        <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2"><a href="{{ route('equipment.product', ['category' => 'barrier-washers', 'product' => $f['slug']]) }}" class="hover:text-[#148af4] transition-colors">{{ $f['name'] }}</a></h3>
                        <p class="font-body text-gray-500 text-sm leading-relaxed mb-4">{{ $f['fit'] }}</p>
                        @if(!empty($f['badges']))
                        <div class="flex flex-wrap gap-1.5 mb-5">
                            @foreach(array_slice($f['badges'], 0, 4) as $b)
                            <span class="font-body text-[10px] font-bold uppercase tracking-wide text-[#148af4] bg-[#148af4]/10 px-2 py-1 rounded">{{ $b }}</span>
                            @endforeach
                        </div>
                        @endif
                        <div class="mt-auto flex flex-col gap-2.5">
                            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/></svg>
                                Request Advice
                            </a>
                            <a href="{{ route('equipment.product', ['category' => 'barrier-washers', 'product' => $f['slug']]) }}" class="inline-flex items-center justify-center gap-2 border border-gray-300 text-navy hover:border-navy font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                                View Details
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- Empty state --}}
                <div x-show="count === 0" x-cloak class="text-center py-16">
                    <p class="font-body text-gray-500 text-base">No barrier washers match that combination. <button @click="clearAll()" class="text-[#148af4] font-bold hover:underline">Clear filters</button> or <a href="{{ route('contact') }}" class="text-[#148af4] font-bold hover:underline">talk to our team</a>.</p>
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

{{-- RESOURCES BAR (slim inline) — after the barrier washer range --}}
@include('components.resources-bar', ['groups' => [
    ['title' => 'Official Resources',  'links' => [['l' => 'Line 6000 Evolution brochure', 'h' => '/pdfs/EPR-brochure-Line 6000 Evolution Barrier Washers-20241119-EN.pdf'], ['l' => 'Pullman barrier washer leaflet', 'h' => '/pdfs/EPR-leaflet-pullman-barrier-washer-EN-20230919-LR.pdf'], ['l' => 'Cleaning solution white paper', 'h' => '/pdfs/Electrolux_WhitePaper_CleaningSolution.pdf'], ['l' => 'Firefighters laundry solutions brochure', 'h' => '/pdfs/EPR_brochure_firefighters_16042025_EN.pdf'], ['l' => 'Product resources', 'h' => route('resources')]]],
    ['title' => 'Related Equipment',   'links' => [['l' => 'Commercial Washers', 'h' => route('equipment.category', 'commercial-washers')], ['l' => 'Tumble Dryers', 'h' => route('equipment.category', 'tumble-dryers')], ['l' => 'Healthcare Laundry', 'h' => route('sectors.healthcare')]]],
    ['title' => 'Rental & Support',    'links' => [['l' => 'Equipment Rental', 'h' => route('rental')], ['l' => 'Preventive Maintenance', 'h' => route('service-contracts')], ['l' => 'Support & Aftercare', 'h' => route('parts-aftercare')]]],
]])

{{-- DOSING INTELLIGENCE (Alpine carousel — matches sector pages) --}}
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Dosing &amp; Wash Control</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-3">
                Match detergent use to <span style="color:#148af4;">each barrier washer load</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Electrolux Professional dosing options can help reduce detergent overuse and support more consistent wash results when matched to the equipment and site.
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

{{-- 12a. RENTAL / CAPITAL PRESSURE STRIP (after the washer range) --}}
@include('components.why-choose-strip', [
    'eyebrow'      => 'Equipment Rental',
    'image'        => '/images/pages/barrier-washers/rentalstripnewimage.png',
    'mirror'       => true,
    'gradientStrength' => 0.55,
    'headingSize'  => 'text-2xl sm:text-4xl lg:text-5xl',
    'headingLine1' => 'Replace equipment or add capacity',
    'headingLine2' => 'with <span style="color:#148af4;">lower upfront cost</span>',
    'body'         => 'Where suitable, Equipment Rental can support barrier washer replacement or added capacity, with service included under agreed terms.',
    'miniPoints'   => [
        ['icon' => 'healthcarerentalstrip1', 'label' => 'Budget<br>Control', 'iconClass' => 'scale-[0.986] translate-y-[0.4%]', 'iconStyle' => 'filter:brightness(0) invert(1);'],
        ['icon' => '146', 'label' => 'Service<br>Included', 'iconClass' => 'scale-[0.899] translate-y-[0.3%]', 'iconStyle' => 'filter:brightness(0) invert(1);'],
        ['icon' => '216', 'label' => 'Capacity<br>Planning', 'iconClass' => 'scale-[0.986] translate-y-[0.4%]', 'iconStyle' => 'filter:brightness(0) invert(1);'],
    ],
])

{{-- 13. CONNECTED SERVICE ROUTES --}}
<section class="py-20 lg:py-28 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Service Options</p>
            <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-[2.1rem] 2xl:text-[2.6rem] leading-tight mb-3">
                Engineering support <span style="color:#148af4;">throughout the barrier washer’s working life</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Ongoing support can be planned around the equipment, site requirements and maintenance needs.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                ['title' => 'Repairs &amp; Call-Outs', 'text' => 'Service and breakdown support when washer faults interrupt wash flow, staff routines or daily output.',                          'cta' => 'Request Call-Out',         'route' => route('repairs'),           'img' => '/images/shared/repairs-callouts.jpg',                   'pos' => '50% 35%'],
                ['title' => 'Preventive Maintenance',  'text' => 'Planned servicing to reduce surprise repair costs and keep equipment condition clear.',                                 'cta' => 'View Maintenance Options', 'route' => route('service-contracts'), 'img' => '/images/shared/service-contracts-hero.png',             'pos' => '90% 35%'],
                ['title' => 'Equipment Rental',        'text' => 'Lower upfront cost for barrier washer replacement, capacity planning or expansion where rental is the right fit.',          'cta' => 'See Equipment Rental Options', 'route' => route('rental'),            'img' => '/images/pages/barrier-washers/card-equipment-rental.png', 'pos' => 'center center'],
                ['title' => 'Support &amp; Aftercare', 'text' => 'Service history, follow-up guidance and parts access where needed after installation, rental, repair or inspection.',            'cta' => 'Explore Support &amp; Aftercare', 'route' => route('parts-aftercare'),   'img' => '/images/shared/services-overview-hero-portrait.jpg',     'pos' => 'center center'],
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

{{-- 15. COMPACT AFTER-INSTALLATION SUPPORT BAND --}}
<section class="relative overflow-hidden py-12 lg:py-16" style="background-color:#148af4;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:42%;">
        <img src="/images/pages/barrier-washers/after-installation-strip.png" alt="Irish Laundry Systems after-installation support"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.82) 8%, rgba(20,138,244,0.45) 30%, rgba(20,138,244,0.15) 52%, transparent 70%);"></div>
    </div>
    <div class="relative z-10 max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-7">
                <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">After Installation</p>
                <h2 class="font-heading font-bold text-white text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                    Keep barrier washer aftercare <br class="hidden sm:block"><span style="color:#011E41;">clear and easier to manage</span>
                </h2>
                <p class="font-body text-white/80 text-base leading-relaxed mb-5 max-w-2xl">
                    <span class="lg:block">Irish Laundry Systems supports maintenance planning, service records</span>
                    <span class="lg:block">and parts enquiries throughout the equipment’s working life.</span>
                </p>
                <div class="flex items-center flex-wrap gap-x-4 gap-y-3 mb-7">
                    @foreach([
                        ['icon' => '127', 'label' => 'Planned<br>Maintenance', 'sc' => '0.915'],
                        ['icon' => 'home-rental-maintained',  'label' => 'Service<br>Records', 'sc' => '0.932'],
                        ['icon' => '151', 'label' => 'Parts<br>Support', 'sc' => '0.84'],
                    ] as $pt)
                    <span class="flex items-center gap-2 flex-shrink-0">
                        <img src="/images/icons/{{ $pt['icon'] }}.png" alt="" aria-hidden="true" class="h-14 w-auto object-contain" style="filter:brightness(0) invert(1);transform:scale({{ $pt['sc'] ?? '1' }});">
                        <span class="font-body text-white text-sm font-bold leading-tight">{!! $pt['label'] !!}</span>
                    </span>
                    @endforeach
                </div>
                <a href="{{ route('parts-aftercare') }}"
                   class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
                    Explore Support &amp; Aftercare
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- 16. TESTIMONIAL MODULE --}}
@include('components.testimonials', [
    'eyebrow'    => 'Client Feedback',
    'heading'    => 'What clients say about <span style="color:#148af4;">Irish Laundry Systems</span>',
    'subheading' => 'Feedback from clients on service, technical knowledge and long-term support.',
])

{{-- 17. TRUSTED BY LOGO STRIP --}}
@include('components.proof-bar')

{{-- 18. FAQ --}}
@include('components.faq', [
    'eyebrow' => 'Barrier Washer FAQs',
    'heading' => 'Clear answers before the <span style="color:#148af4;">barrier washer decision</span>',
    'faqs' => [
        ['question' => 'What is a barrier washer?', 'answer' => 'A barrier washer is designed to separate soiled loading from clean unloading. Dirty linen enters from one side and clean linen exits from the other, supporting a more controlled hygiene flow.'],
        ['question' => 'Where are barrier washers normally used?', 'answer' => 'They are commonly used in healthcare sites, care facilities, pharmaceutical, food processing and specialist laundry environments where clean and soiled handling must stay apart.'],
        ['question' => 'Can barrier washers be used for firefighter PPE and protective workwear?', 'answer' => 'Yes. Barrier washers can support firefighter PPE, uniforms and protective workwear where soiled loading, clean-side unloading and controlled handling need to stay clearly separated.'],
        ['question' => 'Do barrier washers support RABC-led laundry planning?', 'answer' => 'Barrier washers can support RABC-aligned process thinking by helping separate clean and soiled handling. The full process still depends on room layout, workflow, staff practice and operating procedures.'],
        ['question' => 'What is Hygiene Watchdog?', 'answer' => 'Hygiene Watchdog supports hygiene process control by helping confirm that the wash cycle has completed as required.'],
        ['question' => 'Can barrier washers reduce water use?', 'answer' => 'Selected configurations, such as double drain options for water recycling, can support water savings where specified and suitable for the site.'],
        ['question' => 'Can I rent a barrier washer?', 'answer' => 'Yes. Rental may be suitable for sites looking for lower upfront cost, replacement support or capacity expansion. Service and breakdown support is included under rental terms.'],
        ['question' => 'Do you install and support barrier washers?', 'answer' => 'Yes. Irish Laundry Systems supplies, installs and supports commercial laundry equipment across Ireland, with planned maintenance, repairs and aftercare options available.'],
    ],
])

{{-- 19. FINAL CTA — embedded advice form --}}
<div id="barrier-form"></div>
@include('components.cta-downtime-form', [
    'pageSource'        => 'barrier_washers_cta',
    'eyebrow'           => 'Request Barrier Washer Advice',
    'headingSize'       => 'text-2xl sm:text-4xl lg:text-[2.625rem]',
    'heading'           => 'Discuss your barrier washer<br> requirements with <span style="color:#148af4;">our<br> engineering team</span>',
    'body'              => 'Share the main details about your site, capacity and installation requirements.<br class="hidden lg:block"> Our team will review them and contact you directly.',
    'formTitle'         => 'Request Barrier Washer Advice',
    'buttonText'        => 'Request Barrier Washer Advice',
    'showLocationField' => true,
    'equipmentLabel'    => 'Current laundry setup',
    'messageLabel'      => 'What do you need to wash?',
    'requestTypeLabel'  => 'Are you looking at equipment purchase, rental, repair or maintenance?',
])

@endsection
