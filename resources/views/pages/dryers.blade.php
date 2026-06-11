@extends('layouts.app')

@section('pageTitle', 'Commercial Tumble Dryers | Electrolux Professional Dryers | Irish Laundry Systems')

@section('meta')
<meta name="description" content="Commercial tumble dryers selected around energy use, linen turnaround and long-term support. Irish Laundry Systems supplies, installs and supports Electrolux Professional commercial tumble dryers across Ireland.">
@endsection

@section('content')

{{-- 2. HERO --}}
<section class="relative overflow-hidden flex flex-col h-auto min-h-[480px] lg:h-[720px]" style="min-height:480px;">
    <img src="/images/sectors/Line 6000 solutions products_72dpi.jpg" alt="Commercial tumble dryers"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.75) 42%, rgba(1,30,65,0.35) 65%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 sm:py-20 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-3xl">
                <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Commercial Tumble Dryers</p>
                <h1 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-6">
                    Choose commercial dryers around <span style="color:#148af4;">energy use, linen turnaround and long-term support</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    Irish Laundry Systems supplies, installs and supports Electrolux Professional commercial tumble dryers for hotels, healthcare sites, care facilities and commercial laundries across Ireland. We connect drying capacity, room setup, energy pressure and after-installation support around the way your laundry actually operates.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Equipment Advice
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white hover:border-white/70 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        Talk to Our Team
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
        <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Dryer Planning</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    Dryer choice affects <span style="color:#148af4;">energy cost, linen flow and support after installation</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    The wrong dryer fit can create daily pressure through energy use, slow turnaround, overdrying, room heat, installation limits and service calls. Irish Laundry Systems connects dryer selection, room layout, installation, rental, maintenance, repairs and aftercare into one clear equipment decision.
                </p>
                <a href="#dryer-range"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    See the dryer options we provide
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
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
                <span style="color:#148af4;">Save 65% on energy consumption</span> with Heat Pump Dryer technology
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-5xl">
                Heat Pump Dryer technology can reduce drying energy pressure while supporting strong drying performance. For sites where the room setup is suitable, it can also reduce installation pressure by avoiding the need for exhaust or a water cooling system.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">

            {{-- LEFT: dryer lineup + CTA --}}
            <div class="reveal reveal-left">
                <div class="mb-8 flex items-center justify-center h-[300px] lg:h-[440px]">
                    <img src="/images/equipment/heat-pump-dryer-lineup.png" alt="Line 6000 Heat Pump Dryer range" class="max-w-full max-h-full w-auto h-auto object-contain">
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
                                <div class="font-heading font-bold text-[#148af4] text-5xl lg:text-6xl leading-none">65%</div>
                            </div>
                            <div class="font-heading font-bold text-navy text-base mt-2">energy saving</div>
                            <div class="font-body text-gray-500 text-xs mt-1">on your energy consumption</div>
                        </div>
                        <div class="divide-y divide-gray-200 border-t border-gray-200 flex-1 flex flex-col justify-between mt-2">
                            @foreach([
                                ['t' => 'No exhaust needed',          'd' => 'M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636'],
                                ['t' => 'No water cooling system',     'd' => 'M12 21a6.75 6.75 0 01-6.75-6.75c0-3 3.5-7.5 6.75-11.25 3.25 3.75 6.75 8.25 6.75 11.25A6.75 6.75 0 0112 21z'],
                                ['t' => 'Lower installation pressure', 'd' => 'M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3'],
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
                        <img src="/images/equipment/Asset-1.webp" alt="No exhaust duct or water cooling connection required" class="w-full h-auto mix-blend-multiply mb-5">
                        <div class="rounded-xl bg-[#f3f6fb] p-5 space-y-3">
                            <p class="font-body text-gray-500 text-sm leading-relaxed">Low footprint, ultra-quiet 56dB operation and &lsquo;plug &amp; play&rsquo; capabilities.</p>
                            <p class="font-body text-gray-500 text-sm leading-relaxed">Units operate in ambient temperatures from +10&deg;C to +45&deg;C.</p>
                            <p class="font-body text-gray-500 text-sm leading-relaxed">A horizontal filter drawer allows for easy maintenance and machine servicing.</p>
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
                Choose dryers around the <span style="color:#148af4;">energy and turnaround pressure your laundry room carries every day</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                A dryer decision affects more than the drying cycle. Energy use, drying speed, installation pressure, linen care and rental options all shape the real cost of keeping laundry moving.
            </p>
        </div>

        @include('components.financial-metrics', ['items' => [
            ['icon'=>'34', 'prefix'=>'',     'stat'=>'35 min',              'size'=>'text-4xl', 'label'=>'drying cycles',           'body'=>'Heat Pump Dryer performance can protect turnaround time in busy laundry rooms where linen needs to move quickly.'],
            ['icon'=>'26', 'prefix'=>'',     'stat'=>'-33%',                'size'=>'text-4xl', 'label'=>'CO₂ per cycle',           'body'=>'Heat Pump Dryer technology can reduce greenhouse gas emissions per drying cycle where the equipment and setup are suitable.'],
            ['icon'=>'96', 'prefix'=>'',     'stat'=>'No<br>exhaust',       'size'=>'text-2xl', 'label'=>'or water cooling',        'body'=>'Selected Heat Pump Dryer options can reduce installation pressure where the room and ventilation setup allow.'],
            ['icon'=>'21', 'prefix'=>'',     'stat'=>'Dry not<br>overdry',  'size'=>'text-2xl', 'label'=>'Moisture Balance',        'body'=>'Moisture Balance protects linen value and reduces wasted energy by stopping at the selected dryness level.'],
            ['icon'=>'30', 'prefix'=>'',     'stat'=>'Lower<br>upfront cost','size'=>'text-2xl','label'=>'rental where suitable',   'body'=>'Rental can support dryer replacement, expansion or capacity planning without turning every equipment decision into one large capital purchase.'],
        ]])
    </div>
</section>

{{-- 7. TECHNICAL PROOF --}}
<section class="py-12 lg:py-16 bg-gray-50 border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Technical Proof</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Dryer features that support <span style="color:#148af4;">energy control, fabric care and drying performance</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Selected Electrolux Professional dryer features support lower energy pressure, better fabric protection, clearer operation and more consistent drying when matched to the right laundry room.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
            @foreach([
                ['icon' => '7',  'title' => 'Heat Pump technology',        'copy' => 'Energy-efficient drying with strong drying performance and lower running-cost pressure.', 'badge' => 'Heat Pump'],
                ['icon' => '16', 'title' => 'Moisture Balance',            'copy' => 'Stops at the selected dryness level to protect garments and reduce wasted energy.',        'badge' => 'Moisture Balance'],
                ['icon' => '26', 'title' => 'Drum Speed',                  'copy' => 'Controls fabric movement and mechanical action for different textile types.',             'badge' => 'Drum Speed'],
                ['icon' => '34', 'title' => 'Adaptive Fan',                'copy' => 'Adjusts airflow to the load where available, supporting even drying and lower energy use.', 'badge' => 'Adaptive Fan'],
                ['icon' => '4',  'title' => 'Smart Energy Management',     'copy' => 'Supports energy regulation, clearer programmes and day-to-day operator control.',          'badge' => 'CompassPro'],
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

{{-- 8. OPERATOR COMFORT / ERGOCERT --}}
<section class="py-16 lg:py-24 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- Heading + intro (full width) --}}
        <div class="max-w-4xl mb-12 lg:mb-16 reveal reveal-left">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Daily Handling</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-5">
                Dryer design built around <span style="color:#148af4;">daily handling, space and operator comfort</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-3xl">
                Drying is repeated work. Line 6000 Tumble Dryers support easier daily handling. ERGOCERT 4-star ergonomic proof supports safer, repetitive operation.
            </p>
        </div>

        {{-- Infographic grid: proof + dryer + door panel + filter panel --}}
        <style>@media (min-width:1024px){.dh-grid{grid-template-columns:minmax(0,1.5fr) auto minmax(0,1fr) minmax(0,1fr) !important;}.dh-ss{grid-column:2 / 4 !important;margin-left:-2rem;}}</style>
        <div class="grid grid-cols-1 gap-6 lg:gap-8 items-start reveal dh-grid">

            {{-- COL 1: ERGOCERT proof + Pioneers + CompassPro --}}
            <div class="flex flex-col gap-6">
                <div class="flex flex-col sm:flex-row gap-5 items-start">
                    <img src="/images/icons/EGOCERT.png" alt="ERGOCERT — Ergonomics Certifying Institute" class="w-44 lg:w-52 h-auto flex-shrink-0">
                    <div>
                        <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-2">Pioneers in usability</h3>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">Ergonomic interventions can reduce work-related musculoskeletal disorders (WMSDs) by <strong class="text-navy font-bold">59%</strong>, with an average decrease of <strong class="text-navy font-bold">75%</strong> in sick days and a <strong class="text-navy font-bold">25%</strong> increase in productivity.</p>
                        <p class="font-body text-gray-400 text-xs mt-2">Washington State Department of Labor &amp; Industries</p>
                    </div>
                </div>
                <div class="border-t border-gray-200 pt-6">
                    <img src="/images/healthcare/Compass-Pro_1-300x88.webp" alt="CompassPro control platform" class="h-14 w-auto mb-3">
                    <p class="font-body text-gray-500 text-sm leading-relaxed">CompassPro comes with a new design and improved user experience. Flexible and customisable, comes with preset programmes as well as free programme slots. Up to 18 languages available.</p>
                </div>
            </div>

            {{-- COL 2: dryer image (the big equipment image) --}}
            <div class="flex items-center justify-center py-2">
                <img src="/images/equipment/Tumble-dryers_Heat-Pump_1-2.PNG" alt="Line 6000 Tumble Dryer" class="w-auto h-auto max-h-[560px] object-contain">
            </div>

            {{-- COL 3: The door that makes the difference --}}
            <div class="rounded-2xl bg-white p-5 lg:p-6 flex flex-col" style="box-shadow: 0 10px 35px -10px rgba(1,30,65,0.10);">
                <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-4">The door that makes the difference</h3>
                <div class="space-y-3.5">
                    @foreach([
                        ['t' => 'Ideal height',        'img' => 'idealheight.svg',   'b' => 'The door is positioned at the most ergonomically suitable height. This makes a real difference for loading and unloading.'],
                        ['t' => 'Sturdy and reliable', 'd' => 'M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z', 'b' => 'Because the door is built to last, it will optimize performance throughout the life of the dryer.'],
                        ['t' => 'A better grip',       'img' => 'abettergrip.svg',   'b' => 'Open and shut the door smoothly thanks to the handle design and easy-close magnetic door.'],
                        ['t' => 'Safer for users',     'img' => 'saferforusers.svg', 'b' => 'The insulated glass door stays cool on the outside so there is no risk of burned fingers or hands. It also keeps the heat inside, so the room temperature is not affected.'],
                    ] as $dp)
                    <div class="flex items-start gap-3">
                        @if(!empty($dp['img']))
                        <img src="/images/equipment/{{ $dp['img'] }}" alt="{{ $dp['t'] }}" class="w-8 h-8 object-contain flex-shrink-0 mt-0.5">
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
                <p class="font-body text-gray-400 text-[11px] leading-snug mt-4">*The insulated glass door and space saving are specific features of TD6-14 and TD6-20.</p>
            </div>

            {{-- COL 4: filter drawer --}}
            <div class="flex flex-col gap-5">
                <div class="rounded-2xl overflow-hidden bg-[#eef3f9]">
                    <img src="/images/equipment/equipment2.jpg" alt="Line 6000 horizontal filter drawer pulled out for easy access and cleaning" class="w-full h-auto object-cover">
                </div>
                <div class="rounded-2xl bg-white p-6 flex-1" style="box-shadow: 0 10px 35px -10px rgba(1,30,65,0.10);">
                    <div class="flex items-start justify-between gap-3 mb-2">
                        <h3 class="font-heading font-bold text-navy text-lg leading-snug">A filter drawer right where you need it</h3>
                        <img src="/images/equipment/filterdrawer.svg" alt="Horizontal filter drawer" class="w-20 h-20 object-contain flex-shrink-0">
                    </div>
                    <p class="font-body font-bold text-[#148af4] text-sm mb-2">Maximum comfort</p>
                    <p class="font-body text-gray-500 text-xs leading-relaxed">The horizontal filter drawer is positioned for easy access and cleaning without the need to bend down. Human-centred design down to the smallest details takes the stress out of a physically demanding job.</p>
                </div>
            </div>

            {{-- Space-saving — spans the dryer + door columns, aligned with the end of the left column --}}
            <div class="flex items-center gap-3 lg:px-6 lg:border-x lg:border-gray-200 reveal dh-ss">
                <span class="flex items-center justify-center w-10 h-10 rounded-xl border border-gray-200 flex-shrink-0">
                    <svg class="w-5 h-5 text-[#010d44]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15"/></svg>
                </span>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug">Space-saving</h3>
                    <p class="font-body text-gray-500 text-xs leading-relaxed">The new range takes less than one square meter of floor space, regardless of heating system (gas, electric, steam or heat pump).</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 9. PLANNING / INSTALLATION STRIP (before the selection journey) --}}
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.85) 15%, rgba(20,138,244,0.3) 55%, transparent 100%);"></div>
    </div>
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-12 lg:py-24 w-full max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Room Planning</p>
        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
            Plan drying around the <span style="color:#011E41;">room, energy use and linen flow</span>
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6 max-w-xl">
            A dryer should fit the room, the utilities and the pressure placed on linen flow every day. Irish Laundry Systems connects drying capacity, ventilation, access, energy use, installation and support before the equipment decision is made.
        </p>
        <div class="flex flex-wrap items-center gap-x-6 gap-y-3 mb-7">
            @foreach([
                ['t' => 'Room fit',                        'd' => 'M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75'],
                ['t' => 'Ventilation and utilities',       'd' => 'M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5'],
                ['t' => 'Drying capacity and turnaround',  'd' => 'M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z'],
            ] as $pt)
            <span class="inline-flex items-center gap-2">
                <svg class="w-4 h-4 text-white flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $pt['d'] }}"/></svg>
                <span class="font-body text-white text-sm font-bold">{{ $pt['t'] }}</span>
            </span>
            @endforeach
        </div>
        <a href="{{ route('request-assessment') }}"
           class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
            Request Equipment Advice
        </a>
    </div>
</section>

{{-- 10. RANGE TEASERS CAROUSEL (Equipment Hub visual — drying-route chamarizes, not the full grid) --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-2">Dryer Range Starting Points</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Drying paths <span style="color:#148af4;">worth a closer look</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-3xl">
                Start with the drying route that fits the pressure of your laundry room, then connect the decision to energy use, turnaround, installation and long-term support.
            </p>
        </div>

        @php
        $rangeCards = [
            ['name' => 'Line 6000 Tumble Dryers', 'copy' => 'Main commercial dryer range for busy laundry rooms where drying performance, controls, fabric care and support need to work together.', 'cta' => 'View Dryer Range', 'route' => '#dryer-range', 'img' => '/images/equipment/line6000-tumble-dryer.webp'],
            ['name' => 'Heat Pump Dryers',        'copy' => 'For sites looking to reduce drying energy pressure while avoiding exhaust and water cooling requirements where the room setup is suitable.', 'cta' => 'Explore Heat Pump Dryers', 'route' => route('equipment.product', ['category' => 'tumble-dryers', 'product' => 'heat-pump']), 'img' => '/images/equipment/line6000-tumble-dryer.webp'],
            ['name' => 'Drying Cabinets',         'copy' => 'For bulky, sensitive or specialist items that need drying support without standard tumble action.', 'cta' => 'Explore Drying Cabinets', 'route' => route('equipment.category', 'drying-cabinets'), 'img' => '/images/healthcare/Drying-cabinets_image.webp'],
            ['name' => 'myPRO / Semi-Professional Dryers', 'copy' => 'For smaller sites that need more than domestic drying equipment without moving straight into a full commercial laundry setup.', 'cta' => 'Discover myPRO', 'route' => route('equipment.product', ['category' => 'semi-professional', 'product' => 'mypro-dryer']), 'img' => '/images/equipment/line6000-tumble-dryer.webp'],
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
                        <div class="grid grid-cols-1 sm:grid-cols-[160px_1fr] lg:grid-cols-[180px_1fr] gap-4 lg:gap-6 items-center bg-white border border-gray-200 rounded-xl p-6 lg:p-8 h-full" style="min-height:300px;">
                            <div class="flex items-center justify-center">
                                <img src="{{ $p['img'] }}" alt="{{ $p['name'] }}" class="w-full h-44 lg:h-52 object-contain">
                            </div>
                            <div class="flex flex-col">
                                <h3 class="font-heading font-bold text-navy text-xl lg:text-2xl leading-tight mb-3">{{ $p['name'] }}</h3>
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
                        <div class="grid grid-cols-1 sm:grid-cols-[160px_1fr] lg:grid-cols-[180px_1fr] gap-4 lg:gap-6 items-center bg-white border border-gray-200 rounded-xl p-6 lg:p-8 h-full" style="min-height:300px;">
                            <div class="flex items-center justify-center">
                                <img src="{{ $p['img'] }}" alt="" class="w-full h-44 lg:h-52 object-contain">
                            </div>
                            <div class="flex flex-col">
                                <h3 class="font-heading font-bold text-navy text-xl lg:text-2xl leading-tight mb-3">{{ $p['name'] }}</h3>
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

{{-- 11. COMPACT RESOURCES BAR (low, light, supporting — before the Product Finder) --}}
<section class="py-8 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 lg:gap-10">
            @foreach([
                ['title' => 'Official Resources',              'links' => [['l' => 'Line 6000 dryers brochure', 'h' => '/pdfs/EPR-Line6000-DryersBrochure-01072025_EN.pdf'], ['l' => 'Heat Pump Dryer brochure', 'h' => '/pdfs/EPR-Line6000-DryersBrochure-01072025_EN.pdf'], ['l' => 'Product resources', 'h' => route('resources')]]],
                ['title' => 'Energy & Installation Guidance',  'links' => [['l' => 'Heat Pump Dryer technology', 'h' => '#dryer-range'], ['l' => 'Ventilation and room planning', 'h' => route('request-assessment')], ['l' => 'Energy performance', 'h' => route('resources')]]],
                ['title' => 'Related Equipment',               'links' => [['l' => 'Commercial Washers', 'h' => route('equipment.category', 'washers')], ['l' => 'Drying Cabinets', 'h' => route('equipment.category', 'drying-cabinets')], ['l' => 'myPRO Dryers', 'h' => route('equipment')]]],
            ] as $grp)
            <div class="{{ !$loop->last ? 'sm:border-r sm:border-gray-200 sm:pr-6 lg:pr-10' : '' }}">
                <p class="font-heading font-bold text-navy text-xs uppercase tracking-[0.16em] mb-3">{{ $grp['title'] }}</p>
                <div class="flex flex-wrap gap-x-4 gap-y-2">
                    @foreach($grp['links'] as $lk)
                    <a href="{{ $lk['h'] }}" class="inline-flex items-center gap-1.5 font-body text-sm text-gray-600 hover:text-[#148af4] transition-colors">
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

{{-- 12. PRODUCT FINDER / DRYER RANGE (Option B — left sidebar, core commercial dryer range) --}}
<section id="dryer-range" class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Commercial Dryer Range</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Compare dryer options around <span style="color:#148af4;">energy use, turnaround and support</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Start with drying demand, then connect the dryer decision to room layout, ventilation, energy use, linen flow, installation and long-term support.
            </p>
        </div>

        @php
            // Core commercial tumble dryer range (Drying Cabinets and myPRO stay as teasers, not tiles here).
            $dryerFamilies = [
                ['name' => 'TD6 — Line 6000 Single Pocket Tumble Dryer', 'slug' => 'td6', 'line' => 'Line 6000 Single Pocket Dryers', 'topLine' => 'Line 6000 · 6–37 kg', 'ranges' => ['6–10 kg','14–20 kg','30–37 kg'], 'fit' => 'Commercial tumble dryer range for busy laundry rooms needing drying performance, fabric care and long-term support.', 'badges' => ['Moisture Balance','Drum Speed','CompassPro','ERGOCERT'], 'tech' => ['Moisture Balance','Drum Speed','CompassPro','ERGOCERT'], 'img' => '/images/equipment/line6000-tumble-dryer.webp'],
                ['name' => 'Line 6000 Heat Pump Dryer Variants', 'slug' => 'heat-pump', 'line' => 'Line 6000 Heat Pump Dryers', 'topLine' => 'Heat Pump · selected Line 6000 formats', 'ranges' => ['6–10 kg','14–20 kg'], 'fit' => 'Heat Pump Dryer route for sites looking to reduce drying energy pressure where the room setup is suitable.', 'badges' => ['Heat Pump','65% Energy Saving','No Exhaust','No Water Cooling'], 'tech' => ['Heat Pump','Adaptive Fan','No exhaust needed','No water cooling system'], 'img' => '/images/equipment/line6000-tumble-dryer.webp'],
                ['name' => 'Line 6000 Stacked Dryer Variants', 'slug' => 'stacked-dryers', 'line' => 'Line 6000 Stacked Dryers', 'topLine' => 'Stacked Drying', 'ranges' => ['Stacked formats'], 'fit' => 'Stacked dryer route for sites that need drying capacity while protecting floor space.', 'badges' => ['Stacked Format','Space Saving','Commercial Drying','Support Available'], 'tech' => ['Moisture Balance'], 'img' => '/images/equipment/line6000-tumble-dryer.webp'],
                ['name' => 'TD6-LAC — Lagoon Advanced Care Dryer Variants', 'slug' => 'td6-lac', 'line' => 'Lagoon Advanced Care Dryer Variants', 'topLine' => 'Lagoon Advanced Care variants', 'ranges' => ['6–10 kg','14–20 kg'], 'fit' => 'Dryer variants connected to specialist textile care where fabric handling and process control matter.', 'badges' => ['Lagoon Advanced Care','Textile Care','Moisture Balance','CompassPro'], 'tech' => ['Moisture Balance','CompassPro'], 'img' => '/images/healthcare/lagoon-advanced-care.webp'],
                ['name' => 'Quickdry Condense', 'slug' => 'quickdry-condense', 'line' => 'Compact / Small Business', 'topLine' => 'Compact / Small Business', 'ranges' => ['Compact / small-site drying'], 'fit' => 'Condense dryer option for smaller sites that need professional drying performance in a compact setup.', 'badges' => ['Condense Drying','Compact Fit','Small Business','Easy Operation'], 'tech' => [], 'img' => '/images/equipment/line6000-tumble-dryer.webp'],
                ['name' => 'PD9C Compact Dryer', 'slug' => 'pd9c', 'line' => 'Compact / Small Business', 'topLine' => 'Compact · 9 kg', 'ranges' => ['Compact / small-site drying','6–10 kg'], 'fit' => 'Compact professional dryer for smaller sites needing more than domestic drying equipment.', 'badges' => ['Compact Fit','Professional Drying','Small Site','Support Available'], 'tech' => [], 'img' => '/images/equipment/line6000-tumble-dryer.webp'],
            ];
            $lineOrder  = ['Line 6000 Single Pocket Dryers','Line 6000 Heat Pump Dryers','Line 6000 Stacked Dryers','Lagoon Advanced Care Dryer Variants','Compact / Small Business'];
            $rangeOrder = ['Compact / small-site drying','6–10 kg','14–20 kg','30–37 kg','Stacked formats'];
            $techOrder  = ['Heat Pump','Moisture Balance','Drum Speed','Adaptive Fan','CompassPro','ERGOCERT','No exhaust needed','No water cooling system'];
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

                <p class="font-body text-gray-500 text-sm leading-relaxed mt-10 max-w-3xl">
                    Drying Cabinets and myPRO / Semi-Professional Dryers are shown as related drying routes in the teasers above. Full specifications, capacities, dimensions and documents live on each product detail page.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- 13. CONNECTED SERVICE ROUTES --}}
<section class="py-16 lg:py-20 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Connected Support</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Support routes that keep <span style="color:#148af4;">dryer decisions moving</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Commercial dryer performance depends on more than the first installation. Irish Laundry Systems connects equipment access, planned maintenance, repairs and aftercare around the way the laundry room operates.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                [
                    'title' => 'Equipment Rental',
                    'text'  => 'Lower upfront cost for dryer replacement, capacity planning or expansion where rental is the right fit.',
                    'cta'   => 'See Rental Options',
                    'route' => route('rental'),
                    'img'   => '/images/healthcare/commercial-industrial.jpg',
                    'pos'   => 'center center',
                ],
                [
                    'title' => 'Preventive Maintenance',
                    'text'  => 'Planned dryer servicing to reduce surprise repair pressure and keep filter, ventilation and service needs visible.',
                    'cta'   => 'View Maintenance Options',
                    'route' => route('service-contracts'),
                    'img'   => '/images/healthcare/service-contracts-hero.png',
                    'pos'   => '90% 35%',
                ],
                [
                    'title' => 'Repairs &amp; Call-outs',
                    'text'  => 'Service and breakdown support when dryer faults interrupt linen flow, drying capacity or daily turnaround.',
                    'cta'   => 'Request Call-out',
                    'route' => route('repairs'),
                    'img'   => '/images/healthcare/repairs-callouts.jpg',
                    'pos'   => '50% 35%',
                ],
                [
                    'title' => 'Support &amp; Aftercare',
                    'text'  => 'Service history, follow-up guidance and parts access where needed after installation, rental, repair or inspection.',
                    'cta'   => 'Explore Support Options',
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

{{-- 14. RENTAL / CAPITAL PRESSURE STRIP --}}
@include('components.why-choose-strip', [
    'headingLine1' => 'Keep drying performance moving with',
    'headingLine2' => '<span style="color:#148af4;">lower upfront cost</span>',
    'body'         => 'For sites facing dryer replacement, capacity needs or ageing equipment, rental can keep laundry moving without turning every equipment decision into one large capital purchase.',
    'miniPoints'   => ['Lower upfront cost', 'Installation and support available', 'Service and breakdown support included under rental terms'],
    'miniNowrap'   => true,
])

{{-- 15. COMPACT AFTER-INSTALLATION SUPPORT BAND --}}
<section class="py-12 lg:py-16 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-7">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">After Installation</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                    Keep dryer decisions <span style="color:#148af4;">connected after installation</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-5 max-w-2xl">
                    Irish Laundry Systems connects planned maintenance, service history, service and breakdown support and parts access where needed, so dryer decisions stay clear after installation, rental, repair or inspection.
                </p>
                <div class="flex items-center flex-wrap gap-x-5 gap-y-2">
                    @foreach(['Planned maintenance', 'Service history', 'Service and breakdown support', 'Parts access where needed'] as $i => $pt)
                    @if($i > 0)<span class="text-gray-300">|</span>@endif
                    <span class="font-body text-navy text-sm font-bold">{{ $pt }}</span>
                    @endforeach
                </div>
            </div>
            <div class="lg:col-span-5 flex lg:justify-end">
                <a href="{{ route('parts-aftercare') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-heading font-bold text-sm px-6 py-4 rounded-lg transition-colors tracking-wide">
                    Explore Support &amp; Aftercare
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- 16. TESTIMONIAL MODULE --}}
@include('components.testimonials', [
    'eyebrow'    => 'Customer Trust',
    'heading'    => 'Trusted support behind <span style="color:#148af4;">commercial laundry decisions</span>',
    'subheading' => 'Commercial tumble dryer decisions affect energy use, linen flow, staff routines and daily output. Irish Laundry Systems is trusted by organisations that need clear communication, responsive support and equipment knowledge after the machine is on site.',
])

{{-- 17. TRUSTED BY LOGO STRIP --}}
@include('components.proof-bar')

{{-- 18. FAQ --}}
@include('components.faq', [
    'eyebrow' => 'Commercial Dryer FAQs',
    'heading' => 'Clear answers before the <span style="color:#148af4;">dryer decision</span>',
    'faqs' => [
        ['question' => 'What size commercial tumble dryer do I need?', 'answer' => 'The right size depends on daily laundry volume, washer capacity, textile type, peak demand, room layout, utilities and required turnaround time. Irish Laundry Systems can assess the site before recommending a dryer range or model.'],
        ['question' => 'Can Heat Pump Dryers reduce energy use?', 'answer' => 'Yes. Selected Heat Pump Dryer options can reduce energy consumption significantly compared with traditional vented dryers, while supporting strong drying performance.'],
        ['question' => 'Do Heat Pump Dryers need exhaust or water cooling?', 'answer' => 'Selected Heat Pump Dryer options can reduce the need for exhaust or water cooling, depending on the room setup and ventilation conditions.'],
        ['question' => 'What is Moisture Balance?', 'answer' => 'Moisture Balance measures the moisture level during drying and stops at the selected dryness level, protecting fabrics and reducing wasted energy.'],
        ['question' => 'Can dryer choice protect linen quality?', 'answer' => 'Yes. Features such as Moisture Balance and Drum Speed can support better fabric care by reducing overdrying and controlling mechanical action.'],
        ['question' => 'Can I rent a commercial tumble dryer?', 'answer' => 'Yes. Rental may be suitable for sites looking for lower upfront cost, replacement support or capacity expansion. Service and breakdown support is included under rental terms.'],
        ['question' => 'Do you install and support commercial tumble dryers?', 'answer' => 'Yes. Irish Laundry Systems supplies, installs and supports commercial laundry equipment across Ireland, with planned maintenance, repairs and aftercare options available.'],
    ],
])

{{-- 19. FINAL CTA --}}
<section class="py-16 lg:py-24" style="background-color:#011E41;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 text-center">
        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4 max-w-4xl mx-auto">
            Need the <span style="color:#148af4;">right dryer decision</span> for your laundry room?
        </h2>
        <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl mx-auto">
            Talk to Irish Laundry Systems about dryer capacity, energy pressure, installation, rental, maintenance and support options.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}"
               class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                Talk to Our Team
            </a>
            <a href="{{ route('request-assessment') }}"
               class="inline-flex items-center justify-center gap-2 border-2 border-white/60 hover:border-white text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                Request Equipment Advice
            </a>
        </div>
    </div>
</section>

@endsection
