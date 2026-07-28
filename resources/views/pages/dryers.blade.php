@extends('layouts.app')

@section('pageTitle', 'Commercial Tumble Dryers | Electrolux Professional Dryers | Irish Laundry Systems')

@section('meta')
<meta name="description" content="Commercial tumble dryers selected around energy use, linen turnaround and long-term support. Irish Laundry Systems supplies, installs and supports Electrolux Professional commercial tumble dryers across Ireland.">
@endsection

@section('content')

{{-- 2. HERO --}}
<section class="relative overflow-hidden flex flex-col h-auto min-h-[480px] lg:h-[720px]" style="min-height:480px;">
    <img src="/images/pages/dryers/tumbledryershero.png" alt="Commercial tumble dryers"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.75) 42%, rgba(1,30,65,0.35) 65%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 sm:py-20 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-3xl lg:max-w-5xl">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Commercial Tumble Dryers</p>
                <h1 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight mb-6">
                    <span class="block">Choose commercial tumble dryers</span>
                    <span class="block">to balance <span style="color:#148af4;">daily demand</span></span>
                    <span class="block" style="color:#148af4;">and energy use</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl lg:max-w-3xl text-pretty">
                    Irish Laundry Systems supplies Electrolux Professional tumble dryers across Ireland, with advice on capacity, dryer type, room requirements and installation.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Dryer Advice
                    </a>
                    <a href="#dryer-range"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white hover:border-white/70 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        View Dryer Options
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
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Dryer Planning</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight">
                    <span class="block">Plan dryer capacity around</span>
                    <span class="block" style="color:#148af4;">space, ventilation and</span>
                    <span class="block" style="color:#148af4;">daily demand</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed">
                    Room layout, access and utility connections need to be reviewed before the dryer and installation approach are confirmed.
                </p>
            </div>

        </div>
    </div>
</section>

{{-- 5. HEAT PUMP ENERGY FEATURE --}}
<section class="py-16 lg:py-24 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        {{-- Full-width heading + intro so the title and body both sit wide, above the panels --}}
        <div class="reveal reveal-left mb-10 lg:mb-12">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Energy Performance</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-5">
                Cut drying energy use with <span style="color:#148af4;">heat pump dryer technology</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Where suitable, Electrolux Professional Line 6000 Heat Pump Dryers can reduce energy consumption by up to 65% compared with vented dryers, without exhaust or water cooling.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">

            {{-- LEFT: dryer lineup + CTA --}}
            <div class="reveal reveal-left">
                <div class="mb-8 flex items-center justify-center h-[300px] lg:h-[440px]">
                    <img src="/images/pages/dryers/heat-pump-dryer-lineup.png" alt="Line 6000 Heat Pump Dryer range" class="max-w-full max-h-full w-auto h-auto object-contain">
                </div>
                <a href="#dryer-range"
                   class="inline-flex items-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-7 py-3.5 rounded-lg text-base transition-colors duration-200">
                    Explore Heat Pump Dryers
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            {{-- RIGHT: two spec panels --}}
            <div class="reveal reveal-right">
                <div class="grid grid-cols-1 sm:grid-cols-[minmax(0,0.85fr)_minmax(0,1.15fr)] gap-6 items-stretch">

                    {{-- Panel A: 65% + feature list (dashed border) --}}
                    <div class="rounded-2xl border border-dashed border-gray-300 bg-white p-6 lg:p-7 flex flex-col">
                        <div class="pb-3">
                            <div class="flex items-center gap-3 mb-1">
                                <span class="flex items-center justify-center w-10 h-10 rounded-xl bg-[#148af4]/10 flex-shrink-0">
                                    <svg class="w-5 h-5 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
                                </span>
                                <div class="leading-none">
                                    <div class="font-heading font-bold text-navy text-xs uppercase tracking-wide mb-0.5">Up to</div>
                                    <div class="font-heading font-bold text-[#148af4] text-5xl lg:text-6xl leading-none">65%</div>
                                </div>
                            </div>
                            <div class="font-heading font-bold text-navy text-base mt-2">lower energy consumption</div>
                            <div class="font-body text-gray-400 text-xs mt-1">Compared with a vented dryer.</div>
                        </div>
                        <div class="divide-y divide-gray-200 border-t border-gray-200 flex-1 flex flex-col justify-between mt-2">
                            @foreach([
                                ['t' => 'No exhaust needed',          'd' => 'M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636'],
                                ['t' => 'No water cooling system',     'd' => 'M12 21a6.75 6.75 0 01-6.75-6.75c0-3 3.5-7.5 6.75-11.25 3.25 3.75 6.75 8.25 6.75 11.25A6.75 6.75 0 0112 21z'],
                                ['t' => 'Simpler Installation', 'd' => 'M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3'],
                                ['t' => 'Easier filter access',        'd' => 'M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z'],
                            ] as $f)
                            <div class="flex items-center gap-3 py-4">
                                <span class="flex-shrink-0 flex items-center justify-center w-10 h-10 rounded-full border border-[#148af4]">
                                    <svg class="w-5 h-5 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $f['d'] }}"/></svg>
                                </span>
                                <span class="font-heading font-bold text-navy text-sm leading-snug">{{ $f['t'] }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Panel B: illustration on plain background (no card) + spec notes in a subtle panel --}}
                    <div class="flex flex-col">
                        <img src="/images/pages/dryers/Asset-1.webp" alt="No exhaust duct or water cooling connection required" class="w-full h-auto mix-blend-multiply mb-5">
                        <div class="rounded-xl bg-[#f3f6fb] p-5 space-y-3">
                            <p class="font-body text-gray-500 text-sm leading-relaxed">Low footprint, ultra-quiet 56 dB operation and plug &amp; play capability.</p>
                            <p class="font-body text-gray-500 text-sm leading-relaxed">Works in ambient temperatures from +10&deg;C to +45&deg;C.</p>
                            <p class="font-body text-gray-500 text-sm leading-relaxed">Horizontal filter drawer for easier access, cleaning and servicing.</p>
                        </div>
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
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Control dryer costs across <span style="color:#148af4;">energy, output and upfront spend</span>
            </h2>
        </div>

        @include('components.financial-metrics', ['labelDrop' => true, 'items' => [
            ['icon'=>'6', 'prefix'=>'',      'stat'=>'Energy<br>Savings',          'size'=>'text-2xl', 'label'=>'lower running cost', 'iconClass'=>'scale-[1.173] -translate-y-[12.6%]',  'body'=>'Electrolux Professional dryer technology can reduce energy use where the equipment and setup are suitable.'],
            ['icon'=>'199', 'prefix'=>'',    'stat'=>'Daily<br>Output',            'size'=>'text-2xl', 'label'=>'more loads per day', 'iconClass'=>'scale-[0.989] translate-y-[1.8%]',  'body'=>'Fast drying cycles can help busy laundry rooms process more loads during the day.'],
            ['icon'=>'217', 'prefix'=>'',    'stat'=>'Smart<br>Drying',            'size'=>'text-2xl', 'label'=>'over daily use', 'iconClass'=>'scale-[0.988] translate-y-[0.4%]',     'body'=>'Efficient drying, correct setup and planned support can reduce running cost pressure over time.'],
            ['icon'=>'132', 'prefix'=>'',    'stat'=>'Cost<br>Control',            'size'=>'text-2xl', 'label'=>'less wasted energy', 'iconClass'=>'scale-[0.914] -translate-y-[1.5%]',  'body'=>'Moisture Balance stops at the selected dryness level, helping protect textiles and avoid unnecessary drying.'],
            ['icon'=>'rental-gain-115', 'prefix'=>'', 'stat'=>'Lower<br>Outlay',   'size'=>'text-2xl', 'label'=>'Equipment Rental', 'iconClass'=>'scale-[0.875] translate-y-[0.3%]',    'body'=>'Equipment Rental can support replacement or added capacity without one large upfront purchase.'],
        ]])
    </div>
</section>

{{-- OnE CONNECTED / CONNECTED LAUNDRY INTELLIGENCE STRIP --}}
@include('components.one-connected-strip', ['ctaLabel' => 'Ask About Connected Equipment'])

{{-- 7. TECHNICAL PROOF --}}
<section class="py-12 lg:py-16 bg-gray-50 border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Dryer Technology</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Dryer features that support <span style="color:#148af4;">fabric care and easier daily use</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Selected features and configurations are available across different models in the Electrolux Professional dryer range.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-3">
            @foreach([
                ['icon' => null, 'img' => '/images/shared/MoistureBalance.png', 'imgClass' => 'w-24 h-24 object-contain scale-[1.029]', 'title' => 'Moisture Balance', 'copy' => 'Stops at the selected dryness level to protect textiles and avoid over-drying.',  'badge' => 'Moisture Balance'],
                ['icon' => '213', 'title' => 'Drum Speed',                  'copy' => 'Controls fabric movement and mechanical action for different textile types.',             'badge' => 'Drum Speed', 'imgClass' => 'w-24 h-24 object-contain scale-[1.356]'],
                ['icon' => '186', 'title' => 'Adaptive Fan Control',        'copy' => 'Adjusts fan speed to the load, supporting even drying and lower energy use on supported models.', 'badge' => 'Adaptive Fan', 'imgClass' => 'w-24 h-24 object-contain scale-[1.295] -translate-y-[1.7%]'],
                ['icon' => null, 'img' => '/images/shared/Compass-Pro_1-300x88.webp', 'imgClass' => 'w-auto h-20 object-contain translate-y-2', 'title' => 'Compass Pro Control', 'copy' => 'Clear programme selection and daily operation for busy laundry teams.', 'badge' => 'CompassPro Control'],
                ['icon' => '188', 'title' => 'Stacked options',             'copy' => 'Stacked dryer formats can add drying capacity while using less floor space.',              'badge' => 'Stacked options', 'imgClass' => 'w-24 h-24 object-contain scale-[1.263] translate-y-[0.5%]'],
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
<section class="py-16 lg:py-24 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- Heading + intro (full width) --}}
        <div class="mb-12 lg:mb-16 reveal reveal-left">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Operator Comfort</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-5">
                Reduce effort across <span style="color:#148af4;">loading, unloading and cleaning</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Selected Electrolux Professional features support easier door access, clear programme selection and routine filter cleaning.
            </p>
        </div>

        {{-- Infographic grid: proof + dryer + door panel + filter panel --}}
        <style>@media (min-width:1024px){.dh-grid{grid-template-columns:minmax(0,1.5fr) auto minmax(0,1fr) minmax(0,1fr) !important;}.dh-ss{grid-column:2 / 4 !important;margin-left:-2rem;}}</style>
        <div class="grid grid-cols-1 gap-6 lg:gap-8 reveal dh-grid">

            {{-- COL 1: ERGOCERT proof + Pioneers + CompassPro --}}
            <div class="flex flex-col gap-6 justify-between">
                <div class="flex flex-col sm:flex-row gap-5 items-start">
                    <div class="h-52 lg:h-60 flex-shrink-0 flex items-start justify-center">
                        <img src="/images/icons/ergocertnew.png" alt="ERGOCERT — Ergonomics Certifying Institute" class="h-full w-auto object-contain">
                    </div>
                    <div>
                        <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-2">Pioneers in usability</h3>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">Line 6000 Tumble Dryers have received the ERGOCERT 4-star rating for ergonomic design.</p>
                    </div>
                </div>
                <div class="border-t border-gray-200 pt-6">
                    <img src="/images/shared/Compass-Pro_1-300x88.webp" alt="CompassPro control platform" class="h-20 w-auto mb-3">
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Clear controls, preset programmes and up to 18 languages for daily operation.</p>
                </div>
            </div>

            {{-- COL 2: dryer image (the big equipment image) --}}
            <div class="flex items-start justify-center">
                <img src="/images/pages/dryers/Tumble-dryers_Heat-Pump_1-2.PNG" alt="Line 6000 Tumble Dryer" class="w-auto h-auto max-h-[440px] object-contain">
            </div>

            {{-- COL 3: The door that makes the difference --}}
            <div class="rounded-2xl bg-white px-5 pb-5 lg:px-6 lg:pb-6 flex flex-col" style="box-shadow: 0 10px 35px -10px rgba(1,30,65,0.10);">
                <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-4">The door that makes<br>the difference</h3>
                <div class="space-y-3.5">
                    @foreach([
                        ['t' => 'Ideal height',        'img' => 'idealheight.svg',   'b' => 'Easier loading and unloading.'],
                        ['t' => 'Sturdy and reliable', 'd' => 'M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z', 'b' => 'Built for long-term daily use.'],
                        ['t' => 'A better grip',       'img' => 'abettergrip.svg',   'b' => 'Smooth opening and closing.'],
                        ['t' => 'Safer for users',     'img' => 'saferforusers.svg', 'b' => 'Insulated glass stays cool on the outside.'],
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
                <p class="font-body text-gray-400 text-[11px] leading-snug mt-auto pt-4">*The insulated glass door and space-saving design are specific features of TD6-14 and TD6-20.</p>
            </div>

            {{-- COL 4: filter drawer --}}
            <div class="flex flex-col gap-5">
                <div class="rounded-2xl overflow-hidden bg-[#eef3f9] aspect-[3/2]">
                    <img src="/images/pages/dryers/equipment2.jpg" alt="Line 6000 horizontal filter drawer pulled out for easy access and cleaning" class="w-full h-full object-cover object-bottom">
                </div>
                <div class="rounded-2xl bg-white p-6 flex-1" style="box-shadow: 0 10px 35px -10px rgba(1,30,65,0.10);">
                    <div class="flex items-start justify-between gap-3 mb-2">
                        <h3 class="font-heading font-bold text-navy text-xl leading-snug">Filter access where you need it</h3>
                        <img src="/images/shared/filterdrawer.svg" alt="Horizontal filter drawer" class="w-16 h-16 object-contain flex-shrink-0">
                    </div>
                    <p class="font-body font-bold text-[#148af4] text-sm mb-2">Maximum comfort</p>
                    <p class="font-body text-gray-500 text-xs leading-relaxed">Horizontal filter drawer supports easier cleaning without bending down.</p>
                </div>
            </div>

            {{-- Space-saving — spans the dryer + door columns, aligned with the end of the left column --}}
            <div class="flex items-center gap-3 lg:px-6 lg:border-x lg:border-gray-200 reveal dh-ss">
                <span class="flex items-center justify-center w-10 h-10 rounded-xl border border-gray-200 flex-shrink-0">
                    <svg class="w-5 h-5 text-[#010d44]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15"/></svg>
                </span>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug">Space-saving</h3>
                    <p class="font-body text-gray-500 text-xs leading-relaxed">Selected dryer formats can use less than one square metre of floor space, depending on model and setup.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 9. PLANNING / INSTALLATION STRIP (before the selection journey) --}}
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:300px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/shared/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.82) 8%, rgba(20,138,244,0.45) 28%, rgba(20,138,244,0.18) 48%, transparent 65%);"></div>
    </div>
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-10 lg:py-14 max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Room Planning</p>
        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
            Plan the dryer setup around<br><span style="color:#011E41;">space, ventilation and access</span>
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6">
            Irish Laundry Systems reviews room dimensions, utility connections and expected drying demand before recommending dryer type, capacity and installation.
        </p>
        <div class="flex items-center flex-wrap gap-x-4 gap-y-3 mb-7">
            @foreach([
                ['icon' => 'home-planning-fit',  'label' => 'Space &amp; Access', 'sc' => 'scale-[1.035] translate-y-[2.2%]'],
                ['icon' => '248', 'label' => 'Ventilation Needs', 'sc' => 'scale-[1.025] translate-y-[0.4%]'],
                ['icon' => '218', 'label' => 'Capacity &amp; Stacking', 'sc' => 'scale-[0.923] translate-y-[0.7%]'],
            ] as $pt)
            <span class="flex items-center gap-2 flex-shrink-0">
                <img src="/images/icons/{{ $pt['icon'] }}.png" alt="" aria-hidden="true" class="h-14 w-auto object-contain {{ $pt['sc'] ?? '' }}" style="filter:brightness(0) invert(1);">
                <span class="font-body text-white text-sm font-bold leading-tight">{!! $pt['label'] !!}</span>
            </span>
            @endforeach
        </div>
        <a href="{{ route('request-assessment') }}"
           class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
            Request Dryer Advice
        </a>
    </div>
</section>

{{-- 10. RANGE TEASERS CAROUSEL (Equipment Hub visual — drying-route chamarizes, not the full grid) --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Dryer Options</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Choose the dryer range for <span style="color:#148af4;">your site and level of use</span>
            </h2>
        </div>

        @php
        $rangeCards = [
            ['name' => 'Line 6000 Tumble Dryers', 'copy' => 'Main commercial dryer range for busy laundry rooms where drying performance, controls and fabric care matter every day.', 'cta' => 'View Dryer Range', 'route' => '#dryer-range', 'img' => '/images/pages/dryers/TD6-14.jpg', 'sc' => 'scale-[0.854]'],
            ['name' => 'Heat Pump Dryers',        'copy' => 'For sites looking to reduce drying energy use where room setup and installation conditions are suitable.', 'cta' => 'Explore Heat Pump Dryers', 'route' => route('equipment.product', ['category' => 'tumble-dryers', 'product' => 'heat-pump']), 'img' => '/images/pages/dryers/Tumble-dryers_Heat-Pump_1-1.webp', 'sc' => 'scale-[0.966]'],
            ['name' => 'Drying Cabinets',         'copy' => 'For bulky, sensitive or specialist items that need drying without standard tumble action.', 'cta' => 'Explore Drying Cabinets', 'route' => route('equipment.category', 'drying-cabinets'), 'img' => '/images/pages/drying-cabinets/Drying%20Cabinets%20-%20Heat%20Pump%201LZS03.jpg', 'sc' => 'scale-[1.164]'],
            ['name' => 'myPRO / Semi-Professional Dryers', 'copy' => 'For smaller sites that need more than domestic drying without a full commercial laundry setup.', 'cta' => 'Discover myPRO', 'route' => route('equipment.product', ['category' => 'semi-professional', 'product' => 'mypro-dryer']), 'img' => '/images/pages/dryers/myprotumbledryer.jpg', 'sc' => 'scale-[1.09]'],
        ];
        @endphp

        <div
            x-data="{
                active: 0,
                count: {{ count($rangeCards) }},
                perView: 2,
                timer: null,
                animate: true,
                setPerView() { this.perView = window.innerWidth < 1024 ? 1 : 2; },
                advance() {
                    this.active++;
                    if (this.active >= this.count) {
                        setTimeout(() => {
                            this.animate = false;
                            this.active = 0;
                            this.$nextTick(() => requestAnimationFrame(() => requestAnimationFrame(() => { this.animate = true; })));
                        }, 520);
                    }
                },
                next() { this.advance(); this.restart(); },
                prev() {
                    if (this.active <= 0) {
                        this.animate = false;
                        this.active = this.count;
                        this.$nextTick(() => requestAnimationFrame(() => requestAnimationFrame(() => { this.animate = true; this.active--; })));
                    } else {
                        this.active--;
                    }
                    this.restart();
                },
                go(i) { this.active = i; this.restart(); },
                restart() { clearInterval(this.timer); this.timer = setInterval(() => this.advance(), 6000); },
                init() {
                    this.setPerView();
                    window.addEventListener('resize', () => this.setPerView());
                    this.timer = setInterval(() => this.advance(), 6000);
                },
            }"
            class="relative"
        >
            <div class="overflow-hidden">
                <div class="flex -mx-3"
                     :class="animate ? 'transition-transform duration-500 ease-out' : ''"
                     :style="`transform: translateX(-${active * (100 / perView)}%)`">
                    @foreach($rangeCards as $i => $p)
                    <div class="flex-shrink-0 w-full lg:w-1/2 px-3">
                        <div class="grid grid-cols-1 sm:grid-cols-[190px_1fr] lg:grid-cols-[215px_1fr] gap-4 lg:gap-6 items-center bg-white border border-gray-200 rounded-xl p-6 lg:p-8 h-full" style="min-height:300px;">
                            <div class="flex items-center justify-center overflow-hidden">
                                <img src="{{ $p['img'] }}" alt="{{ $p['name'] }}" class="w-full h-52 lg:h-60 object-contain {{ $p['sc'] ?? '' }}">
                            </div>
                            <div class="flex flex-col">
                                <h3 class="font-heading font-bold text-navy text-xl leading-tight mb-3">{{ $p['name'] }}</h3>
                                <p class="font-body text-gray-500 text-sm leading-relaxed mb-6">{{ $p['copy'] }}</p>
                                <a href="{{ $p['route'] }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-3 rounded-full text-sm transition-colors duration-200 w-fit">
                                    {{ $p['cta'] }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- Cloned cards for a seamless infinite loop --}}
                    @foreach($rangeCards as $i => $p)
                    <div class="flex-shrink-0 w-full lg:w-1/2 px-3" aria-hidden="true">
                        <div class="grid grid-cols-1 sm:grid-cols-[190px_1fr] lg:grid-cols-[215px_1fr] gap-4 lg:gap-6 items-center bg-white border border-gray-200 rounded-xl p-6 lg:p-8 h-full" style="min-height:300px;">
                            <div class="flex items-center justify-center overflow-hidden">
                                <img src="{{ $p['img'] }}" alt="" class="w-full h-52 lg:h-60 object-contain {{ $p['sc'] ?? '' }}">
                            </div>
                            <div class="flex flex-col">
                                <h3 class="font-heading font-bold text-navy text-xl leading-tight mb-3">{{ $p['name'] }}</h3>
                                <p class="font-body text-gray-500 text-sm leading-relaxed mb-6">{{ $p['copy'] }}</p>
                                <a href="{{ $p['route'] }}" tabindex="-1" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-3 rounded-full text-sm transition-colors duration-200 w-fit">
                                    {{ $p['cta'] }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="relative mt-8 flex items-center justify-center">
                <div class="flex items-center gap-2">
                    @foreach($rangeCards as $i => $p)
                    <button @click="go({{ $i }})"
                            :class="(active % count) === {{ $i }} ? 'bg-navy w-2.5 h-2.5' : 'bg-navy/25 hover:bg-navy/50 w-2.5 h-2.5'"
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

{{-- 11. RESOURCES BAR (slim inline) --}}
@include('components.resources-bar', ['groups' => [
    ['title' => 'Official Resources',              'links' => [['l' => 'TD6-11 Heat Pump dryer leaflet', 'h' => '/pdfs/EPR-TD6-11-with-Heat-Pump-Leaflet_04092024_EN-singlepage.pdf'], ['l' => 'Heat Pump dryer leaflet', 'h' => '/pdfs/EPR-leaflet-heat-pump-dryer-04092024-EN-one page view.pdf'], ['l' => 'Line 6000 dryers brochure', 'h' => '/pdfs/EPR-Line6000-DryersBrochure-01072025_EN.pdf'], ['l' => 'Product resources', 'h' => route('resources')]]],
    ['title' => 'Energy & Installation Guidance',  'links' => [['l' => 'Heat Pump Dryer technology', 'h' => '#dryer-range'], ['l' => 'Ventilation and room planning', 'h' => route('request-assessment')], ['l' => 'Energy performance', 'h' => route('resources')]]],
    ['title' => 'Related Equipment',               'links' => [['l' => 'Commercial Washers', 'h' => route('equipment.category', 'commercial-washers')], ['l' => 'Drying Cabinets', 'h' => route('equipment.category', 'drying-cabinets')], ['l' => 'myPRO Dryers', 'h' => route('equipment')]]],
]])

{{-- 12. PRODUCT FINDER / DRYER RANGE (Option B — left sidebar, core commercial dryer range) --}}
<section id="dryer-range" class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Commercial Dryer Range</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight mb-3">
                <span class="block">Browse commercial dryer models by</span><span class="block" style="color:#148af4;">capacity and dryer type</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Use the filters to narrow the range, then view each model for full product details.
            </p>
        </div>

        @php
            // One card per dryer model (photo where available); imageless sizes/variants fold into the nearest card's range.
            $dryerFamilies = [
                ['name' => 'TD6-6',    'slug' => 'td6-6', 'line' => 'Single Pocket Dryers', 'topLine' => 'Line 6000 · 6–7 kg',   'ranges' => ['6–10 kg'],  'fit' => 'Single pocket commercial tumble dryer (6–7 kg) with Moisture Balance and CompassPro control.', 'badges' => ['Moisture Balance','Drum Speed','CompassPro','ERGOCERT'], 'tech' => ['Moisture Balance','Drum Speed','CompassPro','ERGOCERT'], 'img' => '/images/pages/dryers/TD6-6.jpg'],
                ['name' => 'TD6-11',   'slug' => 'td6-11', 'line' => 'Single Pocket Dryers', 'topLine' => 'Line 6000 · 11 kg',    'ranges' => ['11–20 kg'], 'fit' => 'Single pocket commercial tumble dryer for 11 kg loads.', 'badges' => ['Moisture Balance','Drum Speed','CompassPro','ERGOCERT'], 'tech' => ['Moisture Balance','Drum Speed','CompassPro','ERGOCERT'], 'img' => '/images/pages/dryers/TD6-11.jpg'],
                ['name' => 'TD6-14',   'slug' => 'td6-14', 'line' => 'Single Pocket Dryers', 'topLine' => 'Line 6000 · 14 kg',    'ranges' => ['11–20 kg'], 'fit' => 'Single pocket commercial tumble dryer for 14 kg loads.', 'badges' => ['Moisture Balance','Drum Speed','CompassPro','ERGOCERT'], 'tech' => ['Moisture Balance','Drum Speed','CompassPro','ERGOCERT'], 'img' => '/images/pages/dryers/TD6-14.jpg'],
                ['name' => 'TD6-16',   'slug' => 'td6-16', 'line' => 'Single Pocket Dryers', 'topLine' => 'Line 6000 · 16–20 kg', 'ranges' => ['11–20 kg'], 'fit' => 'Single pocket commercial tumble dryer for 16–20 kg loads.', 'badges' => ['Moisture Balance','Drum Speed','CompassPro','ERGOCERT'], 'tech' => ['Moisture Balance','Drum Speed','CompassPro','ERGOCERT'], 'img' => '/images/pages/dryers/TD6-16.jpg'],
                ['name' => 'TD6-30',   'slug' => 'td6-30', 'line' => 'Single Pocket Dryers', 'topLine' => 'Line 6000 · 30–37 kg', 'ranges' => ['30–37 kg'], 'fit' => 'Single pocket commercial tumble dryer for 30–37 kg loads.', 'badges' => ['Moisture Balance','Drum Speed','CompassPro','ERGOCERT'], 'tech' => ['Moisture Balance','Drum Speed','CompassPro','ERGOCERT'], 'img' => '/images/pages/dryers/TD6-30.jpg'],
                ['name' => 'TD6-45',   'slug' => 'td6-45', 'line' => 'Single Pocket Dryers', 'topLine' => 'Line 6000 · 45 kg',    'ranges' => ['45–60 kg'], 'fit' => 'Single pocket commercial tumble dryer for 45 kg loads.', 'badges' => ['Moisture Balance','Drum Speed','CompassPro','ERGOCERT'], 'tech' => ['Moisture Balance','Drum Speed','CompassPro','ERGOCERT'], 'img' => '/images/pages/dryers/TD6-45.jpg'],
                ['name' => 'TD6-45SLD','slug' => 'td6-45sld', 'line' => 'Single Pocket Dryers', 'topLine' => 'Line 6000 · 45–60 kg (SLD)', 'ranges' => ['45–60 kg'], 'fit' => 'Large single pocket dryer (SLD, 45–60 kg) for high-volume drying.', 'badges' => ['Moisture Balance','High Capacity','CompassPro','ERGOCERT'], 'tech' => ['Moisture Balance','CompassPro','ERGOCERT'], 'img' => '/images/pages/dryers/TD6-45SLD.jpg'],
                ['name' => 'TD6-LAC',  'slug' => 'td6-lac', 'line' => 'Lagoon Advanced Care', 'topLine' => 'Lagoon Advanced Care · 7–37 kg', 'ranges' => ['11–20 kg','30–37 kg'], 'fit' => 'Lagoon Advanced Care dryer variants (TD6-7/14/20/30/37 LAC) for specialist textile care.', 'badges' => ['Lagoon Advanced Care','Textile Care','Moisture Balance','CompassPro'], 'tech' => ['Moisture Balance','CompassPro'], 'img' => '/images/pages/dryers/line6000-tumble-dryer.webp'],
                ['name' => 'TD6-17S',  'slug' => 'stacked-dryers', 'line' => 'Stacked Dryers', 'topLine' => 'Stacked · 17–24 kg', 'ranges' => ['Stacked formats'], 'fit' => 'Stacked tumble dryer (17–24 kg) — two dryers in one footprint to protect floor space.', 'badges' => ['Stacked Format','Space Saving','Commercial Drying'], 'tech' => ['Moisture Balance'], 'img' => '/images/pages/dryers/TD6-17S.jpg'],
                ['name' => 'Quickdry Condense', 'slug' => 'quickdry-condense', 'line' => 'Compact / Small Business', 'topLine' => 'Compact', 'ranges' => ['Compact / small-site drying'], 'fit' => 'Condense dryer for compact and small-site professional drying.', 'badges' => ['Condense Drying','Compact Fit','Small Business'], 'tech' => [], 'img' => '/images/pages/dryers/Quickdry%20Condense.jpg'],
                ['name' => 'PD9C',     'slug' => 'pd9c', 'line' => 'Compact / Small Business', 'topLine' => 'Compact · 9 kg', 'ranges' => ['Compact / small-site drying'], 'fit' => 'Compact professional dryer (9 kg) for smaller sites needing more than domestic drying.', 'badges' => ['Compact Fit','Professional Drying','Small Site'], 'tech' => [], 'img' => '/images/pages/dryers/PD9C.jpg'],
                ['name' => 'T4900CR',  'slug' => 't-series', 'line' => 'Heavy-Duty Dryers', 'topLine' => 'Heavy Duty · 45–60 kg', 'ranges' => ['45–60 kg'], 'fit' => 'Heavy-duty tumble dryer (T4900CR / T41200CR, 45–60 kg) for high-volume laundry drying throughput.', 'badges' => ['High Capacity','Heavy Duty','Commercial Drying'], 'tech' => [], 'img' => '/images/pages/dryers/T4900CR.jpg'],
            ];
            $lineOrder  = ['Single Pocket Dryers','Lagoon Advanced Care','Stacked Dryers','Heavy-Duty Dryers','Compact / Small Business'];
            $rangeOrder = ['6–10 kg','11–20 kg','30–37 kg','45–60 kg','Stacked formats','Compact / small-site drying'];
            $techOrder  = ['Moisture Balance','Drum Speed','CompassPro','ERGOCERT'];
            $lineOpts = []; $rangeOpts = []; $techOpts = [];
            foreach($dryerFamilies as $f) {
                $lineOpts[$f['line']] = ($lineOpts[$f['line']] ?? 0) + 1;
                foreach($f['ranges'] as $r) { $rangeOpts[$r] = ($rangeOpts[$r] ?? 0) + 1; }
                foreach($f['tech'] as $t)   { $techOpts[$t]  = ($techOpts[$t]  ?? 0) + 1; }
            }
            $famJs = array_map(fn($f) => ['line' => $f['line'], 'ranges' => $f['ranges'], 'tech' => $f['tech']], $dryerFamilies);
        @endphp

        <div x-data="{
                line: [],
                range: [],
                tech: [],
                moreOpen: false,
                families: {{ \Illuminate\Support\Js::from($famJs) }},
                matches(f) {
                    const ln = this.line.length === 0 || this.line.includes(f.line);
                    const rg = this.range.length === 0 || (f.ranges && f.ranges.some(r => this.range.includes(r)));
                    const tc = this.tech.length === 0 || (f.tech && f.tech.some(t => this.tech.includes(t)));
                    return ln && rg && tc;
                },
                get count() { return this.families.filter(f => this.matches(f)).length; },
                clearAll() { this.line = []; this.range = []; this.tech = []; },
             }"
             class="grid grid-cols-1 lg:grid-cols-[260px_1fr] gap-8 lg:gap-10 items-start">

            {{-- LEFT: Option B filter sidebar --}}
            <aside class="lg:sticky lg:top-28 self-start border border-gray-200 rounded-xl p-5">
                <div class="flex items-center justify-between">
                    <span class="font-heading font-bold text-navy text-xs uppercase tracking-[0.16em]">Filter dryer range</span>
                    <button @click="clearAll()" class="font-body text-xs text-[#148af4] hover:underline">Reset all</button>
                </div>

                {{-- Product Line (open) --}}
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <p class="font-heading font-bold text-navy text-sm mb-3">Product Line</p>
                    <div class="space-y-2.5">
                        @foreach($lineOrder as $val) @if(isset($lineOpts[$val]))
                        <label class="flex items-center justify-between cursor-pointer group">
                            <span class="flex items-center gap-2.5">
                                <input type="checkbox" value="{{ $val }}" x-model="line" class="w-4 h-4 rounded border-gray-300 accent-[#148af4] cursor-pointer">
                                <span class="font-body text-sm text-gray-600 group-hover:text-navy transition-colors">{{ $val }}</span>
                            </span>
                            <span class="font-body text-xs text-gray-400">{{ $lineOpts[$val] }}</span>
                        </label>
                        @endif @endforeach
                    </div>
                </div>

                {{-- Capacity / Range (open) --}}
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <p class="font-heading font-bold text-navy text-sm mb-3">Capacity / Range</p>
                    <div class="space-y-2.5">
                        @foreach($rangeOrder as $val) @if(isset($rangeOpts[$val]))
                        <label class="flex items-center justify-between cursor-pointer group">
                            <span class="flex items-center gap-2.5">
                                <input type="checkbox" value="{{ $val }}" x-model="range" class="w-4 h-4 rounded border-gray-300 accent-[#148af4] cursor-pointer">
                                <span class="font-body text-sm text-gray-600 group-hover:text-navy transition-colors">{{ $val }}</span>
                            </span>
                            <span class="font-body text-xs text-gray-400">{{ $rangeOpts[$val] }}</span>
                        </label>
                        @endif @endforeach
                    </div>
                </div>

                {{-- More filters (collapsed) → Control / Technology --}}
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <button @click="moreOpen = !moreOpen" class="w-full flex items-center justify-between font-heading font-bold text-navy text-sm">
                        <span>More filters</span>
                        <svg class="w-4 h-4 transition-transform duration-200" :class="moreOpen ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/></svg>
                    </button>
                    <div x-show="moreOpen" class="mt-3" style="display:none">
                        <p class="font-body font-semibold text-gray-400 text-xs uppercase tracking-wide mb-2.5">Control / Technology</p>
                        <div class="space-y-2.5">
                            @foreach($techOrder as $val) @if(isset($techOpts[$val]))
                            <label class="flex items-center justify-between cursor-pointer group">
                                <span class="flex items-center gap-2.5">
                                    <input type="checkbox" value="{{ $val }}" x-model="tech" class="w-4 h-4 rounded border-gray-300 accent-[#148af4] cursor-pointer">
                                    <span class="font-body text-sm text-gray-600 group-hover:text-navy transition-colors">{{ $val }}</span>
                                </span>
                                <span class="font-body text-xs text-gray-400">{{ $techOpts[$val] }}</span>
                            </label>
                            @endif @endforeach
                        </div>
                    </div>
                </div>

                {{-- Footer count + clear --}}
                <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between">
                    <span class="font-body text-sm text-navy font-bold"><span x-text="count"></span> <span x-text="count === 1 ? 'range' : 'ranges'"></span></span>
                    <button @click="clearAll()" class="font-body text-xs text-[#148af4] hover:underline">Clear filters</button>
                </div>
            </aside>

            {{-- RIGHT: product tiles --}}
            <div>
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-x-6 gap-y-10">
                    @foreach($dryerFamilies as $f)
                    <div x-show="matches({{ \Illuminate\Support\Js::from(['line' => $f['line'], 'ranges' => $f['ranges'], 'tech' => $f['tech']]) }})" class="flex flex-col">
                        <a href="{{ route('equipment.product', ['category' => 'tumble-dryers', 'product' => $f['slug']]) }}" class="flex items-center justify-center h-48 lg:h-56 mb-5">
                            <img src="{{ $f['img'] }}" alt="{{ $f['name'] }}" class="max-h-full w-auto object-contain transition-transform duration-300 hover:-translate-y-1.5">
                        </a>
                        <p class="font-body text-xs font-bold text-[#148af4] mb-1.5">{{ $f['topLine'] }}</p>
                        <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2"><a href="{{ route('equipment.product', ['category' => 'tumble-dryers', 'product' => $f['slug']]) }}" class="hover:text-[#148af4] transition-colors">{{ $f['name'] }}</a></h3>
                        <p class="font-body text-gray-500 text-sm leading-relaxed mb-4">{{ $f['fit'] }}</p>
                        <div class="flex flex-wrap gap-1.5 mb-5">
                            @foreach(array_slice($f['badges'], 0, 4) as $b)
                            <span class="font-body text-[10px] font-bold uppercase tracking-wide text-[#148af4] bg-[#148af4]/10 px-2 py-1 rounded">{{ $b }}</span>
                            @endforeach
                        </div>
                        <div class="mt-auto flex flex-col gap-2.5">
                            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/></svg>
                                Request Advice
                            </a>
                            <a href="{{ route('equipment.product', ['category' => 'tumble-dryers', 'product' => $f['slug']]) }}" class="inline-flex items-center justify-center gap-2 border border-gray-300 text-navy hover:border-navy font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                                View Details
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div x-show="count === 0" class="text-center py-16" style="display:none">
                    <p class="font-body text-gray-500 text-base">No dryers match that combination. <button @click="clearAll()" class="text-[#148af4] font-bold hover:underline">Clear filters</button> or <a href="{{ route('contact') }}" class="text-[#148af4] font-bold hover:underline">talk to our team</a>.</p>
                </div>

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

{{-- 12c. RENTAL / CAPITAL STRIP (moved below dosing) --}}
@include('components.why-choose-strip', [
    'eyebrow'      => 'Equipment Rental',
    'headingSize'  => 'text-3xl sm:text-4xl lg:text-5xl',
    'headingLine1' => 'Replace or add dryer capacity with<br>',
    'headingLine2' => '<span style="color:#148af4;">lower upfront cost</span>',
    'body'         => 'Where suitable, Equipment Rental can support dryer replacement or added capacity, with service included under agreed rental terms.',
    'miniPoints'   => [
        ['icon' => 'healthcarerentalstrip1', 'label' => 'Lower<br>upfront cost', 'iconClass' => 'scale-[0.986] translate-y-[0.4%]'],
        ['icon' => '146', 'label' => 'Included<br>support', 'iconClass' => 'scale-[0.899] translate-y-[0.3%]'],
        ['icon' => '61', 'label' => 'Capacity<br>planning', 'iconClass' => 'scale-[0.932] translate-y-[0.3%]'],
    ],
])

{{-- 13. CONNECTED SERVICE ROUTES --}}
<section class="py-16 lg:py-20 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Dryer Support</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Support options for <span style="color:#148af4;">commercial dryers in daily use</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Select the option that fits the equipment and site.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                [
                    'title' => 'Repairs &amp; Call-Outs',
                    'text'  => 'Service and breakdown support when dryer faults interrupt drying capacity or daily output.',
                    'cta'   => 'Request Call-Out',
                    'route' => route('repairs'),
                    'img'   => '/images/shared/repairs-callouts.jpg',
                    'pos'   => '50% 35%',
                ],
                [
                    'title' => 'Preventive Maintenance',
                    'text'  => 'Planned dryer servicing to reduce unexpected repairs and keep equipment condition visible.',
                    'cta'   => 'View Maintenance Options',
                    'route' => route('service-contracts'),
                    'img'   => '/images/shared/service-contracts-hero.png',
                    'pos'   => '90% 35%',
                ],
                [
                    'title' => 'Equipment Rental',
                    'text'  => 'Lower upfront cost for dryer replacement, capacity planning or expansion where rental is the right fit.',
                    'cta'   => 'See Rental Options',
                    'route' => route('rental'),
                    'img'   => '/images/shared/td6-11-multihousing-room-front.jpg',
                    'pos'   => '66% center',
                ],
                [
                    'title' => 'Support &amp; Aftercare',
                    'text'  => 'Service history, follow-up support and parts access where needed after installation, rental, repair or inspection.',
                    'cta'   => 'Explore Support Options',
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

{{-- 15. COMPACT AFTER-INSTALLATION SUPPORT BAND --}}
<section class="relative overflow-hidden py-12 lg:py-16" style="background-color:#148af4;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:42%;">
        <img src="/images/shared/after-installation-tumble-dryers-strip.jpg" alt="Irish Laundry Systems dryer support after installation"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.82) 8%, rgba(20,138,244,0.45) 30%, rgba(20,138,244,0.15) 52%, transparent 70%);"></div>
    </div>
    <div class="relative z-10 max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-7">
                <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">After Installation</p>
                <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                    Make future dryer servicing easier with<br><span style="color:#011E41;">clear equipment records</span>
                </h2>
                <p class="font-body text-white/80 text-base leading-relaxed mb-5 max-w-2xl">
                    Model details, previous service work and parts information help our team identify what is needed when maintenance or repairs arise.
                </p>
                <div class="flex items-center flex-wrap gap-x-4 gap-y-3 mb-7">
                    @foreach([
                        ['icon' => '189', 'label' => 'Service<br>Records', 'sc' => 'scale-[0.84] -translate-y-[2.1%]'],
                        ['icon' => 'healthcarerentalstrip3', 'label' => 'Maintenance<br>planning', 'sc' => 'scale-[0.891] -translate-y-[1.3%]'],
                        ['icon' => '151', 'label' => 'Parts<br>support', 'sc' => 'scale-[0.84] -translate-y-[0.9%]'],
                    ] as $pt)
                    <span class="flex items-center gap-2 flex-shrink-0">
                        <img src="/images/icons/{{ $pt['icon'] }}.png" alt="" aria-hidden="true" class="h-14 w-auto object-contain {{ $pt['sc'] ?? '' }}">
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
    'eyebrow'    => 'Customer Experience',
    'heading'    => 'What customers say about<br><span style="color:#148af4;">working with Irish Laundry Systems</span>',
    'subheading' => '',
])

{{-- 17. TRUSTED BY LOGO STRIP --}}
@include('components.proof-bar')

{{-- 18. FAQ --}}
@include('components.faq', [
    'eyebrow' => 'Commercial Dryer FAQs',
    'heading' => 'Clear answers before <span style="color:#148af4;">your dryer choice</span>',
    'faqs' => [
        ['question' => 'What size commercial tumble dryer do I need?', 'answer' => 'The right size depends on daily laundry volume, washer capacity, textile type, peak demand, room layout, utilities and required drying capacity. Irish Laundry Systems can assess the site before recommending a dryer range or model.'],
        ['question' => 'Can Heat Pump Dryers reduce energy use?', 'answer' => 'Yes. Selected Heat Pump Dryer options can reduce energy consumption significantly compared with traditional vented dryers, while supporting strong drying performance.'],
        ['question' => 'Do Heat Pump Dryers need exhaust or water cooling?', 'answer' => 'Selected Heat Pump Dryer options can reduce the need for exhaust or water cooling, depending on the room setup and ventilation conditions.'],
        ['question' => 'What is Moisture Balance?', 'answer' => 'Moisture Balance measures the moisture level during drying and stops at the selected dryness level, protecting fabrics and reducing wasted energy.'],
        ['question' => 'Can dryer choice protect textile quality?', 'answer' => 'Yes. Features such as Moisture Balance and Drum Speed can support better fabric care by reducing overdrying and controlling mechanical action.'],
        ['question' => 'Can I rent a commercial tumble dryer?', 'answer' => 'Yes. Rental may be suitable for sites looking for lower upfront cost, replacement support or capacity expansion. Service and breakdown support is included under rental terms.'],
        ['question' => 'Do you install and support commercial tumble dryers?', 'answer' => 'Yes. Irish Laundry Systems supplies, installs and supports commercial laundry equipment across Ireland, with planned maintenance, repairs and aftercare options available.'],
    ],
])

{{-- 19. FINAL CTA --}}
<section class="py-16 lg:py-24" style="background-color:#011E41;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 text-center">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Dryer Advice</p>
        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4 max-w-4xl mx-auto">
            Discuss your commercial dryer requirements<br>with <span style="color:#148af4;">our engineering team</span>
        </h2>
        <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl mx-auto">
            Share the main details about your site, drying demand and existing equipment. Our team will review what is needed and contact you directly.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('request-assessment') }}"
               class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                Request Dryer Advice
            </a>
        </div>
    </div>
</section>

@endsection
