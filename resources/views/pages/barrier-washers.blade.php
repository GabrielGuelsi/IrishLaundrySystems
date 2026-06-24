@extends('layouts.app')

@section('pageTitle', 'Barrier Washing Machines | Electrolux Professional Barrier Washers | Irish Laundry Systems')

@section('meta')
<meta name="description" content="Electrolux Professional barrier washers for healthcare, care, pharmaceutical, food processing and specialist laundry. Irish Laundry Systems supplies, installs and supports dirty-side / clean-side barrier washer-extractors across Ireland.">
@endsection

@section('content')

{{-- 2. HERO --}}
<section class="relative overflow-hidden flex flex-col h-auto min-h-[480px] lg:h-[720px]" style="min-height:480px;">
    <img src="/images/sectors/Line 6000 solutions products_72dpi.jpg" alt="Barrier washing machines"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.75) 42%, rgba(1,30,65,0.35) 65%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 sm:py-20 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-3xl">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Barrier Washers</p>
                <h1 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-6">
                    Control hygiene flow with<br><span style="color:#148af4;">dirty-side and clean-side separation</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8">
                    Irish Laundry Systems supplies, installs and supports Electrolux Professional barrier washers for healthcare, care, pharmaceutical, food processing and specialist laundry environments across Ireland. Plan clean/dirty separation, room layout, installation, rental and aftercare around hygiene-critical laundry routines.
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
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Barrier Washer Planning</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    Barrier washer choice affects <span style="color:#148af4;">hygiene flow, staff handling and room control</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Where clean and soiled handling must stay apart, the room, workflow and support plan need to protect that separation from day one. Irish Laundry Systems reviews capacity, wall opening, loading, unloading, drying, finishing, maintenance and aftercare before equipment is selected.
                </p>
                <a href="#barrier-range"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    See the barrier washer options we provide
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

{{-- 5. CLEAN / DIRTY SEPARATION / BARRIER PROCESS FEATURE --}}
<section class="py-12 lg:py-24 bg-white overflow-hidden">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- Centered eyebrow + heading + body --}}
        <div class="text-center mx-auto max-w-4xl lg:max-w-5xl reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Clean / Dirty Separation</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight mb-5">
                Separate soiled and clean handling<br>for <span style="color:#148af4;">controlled hygiene</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-3xl mx-auto">
                Barrier washers load soiled items from one side and unload clean items from the other. This physical separation supports safer routines where hygiene control, staff handling and room layout matter.
            </p>
        </div>

        {{-- 4 points — icon-above-label grid (matches the repairs "Fault Details" design) --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-10 mt-12 lg:mt-16 reveal">
            @foreach([
                ['t' => 'Dirty loading',               'd' => 'M12 4.5v15m0 0-6-6m6 6 6-6'],
                ['t' => 'Clean unloading',             'd' => 'M12 19.5v-15m0 0-6 6m6-6 6 6'],
                ['t' => 'Hygiene Watchdog',            'd' => 'M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.249-8.25-3.285Z'],
                ['t' => 'RABC support',                'd' => 'M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z'],
            ] as $mp)
            <div class="flex flex-col items-center text-center">
                <svg class="w-14 h-14 text-[#148af4] mb-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $mp['d'] }}"/></svg>
                <span class="font-body font-bold text-navy text-sm">{{ $mp['t'] }}</span>
            </div>
            @endforeach
        </div>

        {{-- Centered CTA --}}
        <div class="text-center mt-8">
            <a href="{{ route('request-assessment') }}"
               class="inline-flex items-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                Request Barrier Washer Advice
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

        {{-- Sub-heading above the visual (separation layouts) --}}
        <div class="mb-10 reveal mt-12 lg:mt-16">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Separation Layouts</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                See how <span style="color:#148af4;">dirty-side and clean-side</span> separation works
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Where stronger separation is required, Electrolux Professional barrier washer layouts separate soiled loading from clean unloading. The visual shows the basic process.
            </p>
        </div>

        {{-- Workflow illustration + barrier-concept video, side by side on white --}}
        <div class="reveal grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center mt-8 lg:mt-10">
            <div class="rounded-2xl overflow-hidden bg-white border border-gray-100 shadow-card p-3 lg:p-4">
                <img src="/images/healthcare/Electrolux-Barrier-infografica-LOW.webp"
                     alt="Barrier laundry workflow — controlled flow from dirty zone to clean zone"
                     class="w-full h-auto object-contain">
            </div>
            <div>
                <div class="relative w-full rounded-2xl overflow-hidden shadow-card" style="padding-bottom:56.25%;">
                    <iframe class="absolute inset-0 w-full h-full"
                            src="https://www.youtube.com/embed/26g9u4GPRVc"
                            title="Line 6000 laundry solutions — The barrier concept in the healthcare sector"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <a href="https://www.youtube.com/watch?v=26g9u4GPRVc" target="_blank" rel="noopener"
                   class="inline-flex items-start gap-2 text-navy hover:text-[#148af4] font-heading font-bold text-sm mt-4 transition-colors">
                    Watch workflow video
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>

    </div>
</section>

{{-- 6. FINANCIAL / OPERATIONAL PERFORMANCE --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Financial Performance</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Choose barrier washers around <span style="color:#148af4;">water, productivity and process control</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Barrier washer decisions affect more than hygiene. Water use, detergent control, staff handling, drying pressure and process visibility all shape the cost of keeping hygiene-critical laundry moving.
            </p>
        </div>

        @include('components.financial-metrics', ['items' => [
            ['icon'=>'7',  'prefix'=>'Up to', 'stat'=>'50%',         'size'=>'text-4xl', 'label'=>'water saving',                   'body'=>'Double drain options can support water recycling and reduce water consumption where specified.'],
            ['icon'=>'9',  'prefix'=>'Up to', 'stat'=>'25%',         'size'=>'text-4xl', 'label'=>'productivity increase',          'body'=>'Electrolux ergonomic proof links improved usability with a 25% productivity increase, fewer sick days and reduced strain.'],
            ['icon'=>'26', 'prefix'=>'',      'stat'=>'Water,<br>energy', 'size'=>'text-2xl', 'label'=>'and load control', 'labelClass'=>'translate-y-2', 'body'=>'Integrated weighing supports better loading, reducing overloading, underloading and avoidable resource waste.'],
            ['icon'=>'dosing-control', 'prefix'=>'', 'stat'=>'Efficient control', 'size'=>'text-2xl', 'label'=>'detergent and water control', 'labelClass'=>'translate-y-2', 'body'=>'Efficient Dosing adds detergent and water according to load weight, reducing waste and supporting process consistency.'],
            ['icon'=>'31', 'prefix'=>'',      'stat'=>'Power Balance','size'=>'text-2xl', 'label'=>'save time and money',            'labelClass'=>'translate-y-2', 'body'=>'Power Balance supports stronger extraction and lower moisture retention, reducing pressure on the drying stage.'],
        ]])
    </div>
</section>

{{-- 6b. OnE CONNECTED / CONNECTED LAUNDRY INTELLIGENCE STRIP --}}
<section class="relative overflow-hidden" style="background-color:#011E41; min-height:300px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/healthcare/stripOneconnected.png" alt="OnE Connected laundry dashboard"
             class="w-full h-full object-cover" style="object-position: center center;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #011E41 0%, rgba(1,30,65,0.85) 18%, rgba(1,30,65,0.35) 55%, transparent 100%);"></div>
    </div>
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-10 lg:py-14 max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">OnE Connected</p>
        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight mb-4">
            Turn barrier laundry data into<br><span style="color:#148af4;">clearer daily oversight</span>
        </h2>
        <p class="font-body text-white/80 text-base leading-relaxed mb-6 max-w-2xl">
            OnE Connected shows compatible Electrolux Professional equipment status, cycles, consumption, alerts and service needs in one digital dashboard. For barrier laundry, this supports better oversight of daily operation, resource use and process records.
        </p>
        <div class="flex items-center flex-wrap gap-x-5 gap-y-2 mb-7">
            @foreach(['Live equipment status', 'Consumption insight', 'Cycle data', 'Service alerts'] as $i => $pt)
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
                Ask About Connected Equipment
            </a>
        </div>
    </div>
</section>

{{-- 7. TECHNICAL PROOF --}}
<section class="py-12 lg:py-24 bg-gray-50 border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Technical Proof</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Features that support <span style="color:#148af4;">separation, control and safer handling</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Selected Electrolux Professional barrier washer features support separation, guided operation, process visibility and easier loading and unloading when matched to the right room.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-3">
            @foreach([
                ['icon' => '2',  'title' => 'Double-door barrier design',     'copy' => 'Soiled linen loads from one side and clean linen unloads from the other.',          'badge' => 'Barrier Separation'],
                ['icon' => '96', 'title' => 'Hygiene Watchdog',               'copy' => 'Supports full-cycle completion and hygiene process control.',                       'badge' => 'Hygiene Watchdog', 'img' => '/images/icons/Hygiene-Watchdog1.webp'],
                ['icon' => '4',  'title' => 'ClarusVibe',     'copy' => 'Guided operation for dirty-side and clean-side control.',                          'badge' => 'ClarusVibe | Double Screen', 'img' => '/images/icons/clarusvibe.jpeg', 'imgClass' => 'w-full h-28 object-cover'],
                ['icon' => '95', 'title' => 'Automatic Door Handling', 'copy' => 'Automatic inner door opening supports easier and faster unloading.',               'badge' => 'AIDO | Automatic Door Locking'],
                ['icon' => '11', 'title' => 'Clearer process control',        'copy' => 'Connected options can support monitoring, traceability and clearer service decisions.', 'badge' => 'CMIS | OnE Laundry where applicable'],
            ] as $card)
            <div class="bg-white rounded-2xl p-6 flex flex-col gap-4 border border-gray-100 shadow-sm {{ $loop->last ? 'col-span-2 lg:col-span-1' : 'col-span-1' }}">
                <div class="flex items-center justify-center h-32">
                    <img src="{{ $card['img'] ?? '/images/icons/'.$card['icon'].'.png' }}" alt="" class="{{ $card['imgClass'] ?? 'w-28 h-28 object-contain' }}">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">{{ $card['title'] }}</h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed">{{ $card['copy'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 8. OPERATOR COMFORT / ERGOCERT --}}
<section class="py-12 lg:py-24 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- Heading + intro (full width) --}}
        <div class="mb-10 lg:mb-16 reveal reveal-left">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Operator Comfort</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-5">
                Barrier washer design built around <span style="color:#148af4;">daily handling and safer staff routines</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-3xl">
                Barrier laundry work is repetitive. The right washer should support loading, unloading, door handling and operator confidence, especially where clean and soiled sides must stay controlled.
            </p>
        </div>

        {{-- Infographic grid: proof + barrier washer + door panel + filter panel --}}
        <style>@media (min-width:1024px){.bw-grid{grid-template-columns:minmax(0,1.5fr) auto minmax(0,1fr) minmax(0,1fr) !important;}.bw-ss{grid-column:2 / 4 !important;margin-left:-2rem;}}</style>
        <div class="grid grid-cols-1 gap-6 lg:gap-8 items-start reveal bw-grid">

            {{-- COL 1: ERGOCERT proof + Pioneers + CompassPro --}}
            <div class="flex flex-col gap-6">
                <div class="flex flex-col sm:flex-row gap-5 items-start">
                    <img src="/images/icons/5.png" alt="ERGOCERT — Ergonomics Certifying Institute" class="w-44 lg:w-52 h-auto flex-shrink-0">
                    <div>
                        <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-2">Pioneers in usability</h3>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">Ergonomic interventions can reduce work-related musculoskeletal disorders (WMSDs) by <strong class="text-navy font-bold">59%</strong>, with an average decrease of <strong class="text-navy font-bold">75%</strong> in sick days and a <strong class="text-navy font-bold">25%</strong> increase in productivity.</p>
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
                    <p class="font-heading font-bold text-navy text-base mb-1">4-Star Rating — unique in the industry</p>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">4-star ERGOCERT recognition for safer repetitive use.</p>
                </div>

                {{-- CompassPro --}}
                <div class="border-t border-gray-200 pt-6">
                    <img src="/images/healthcare/Compass-Pro_1-300x88.webp" alt="CompassPro control platform" class="h-14 w-auto mb-3">
                    <p class="font-body text-gray-500 text-sm leading-relaxed">CompassPro comes with a new design and improved user experience. Flexible and customisable, comes with preset programmes as well as free programme slots. Up to 18 languages available.</p>
                </div>
            </div>

            {{-- COL 2: barrier washer image (the big equipment image) --}}
            <div class="flex items-center justify-center py-2">
                <img src="/images/equipment/WB6-20cutted.JPG" alt="Line 6000 Evolution Barrier Washer" class="w-auto h-auto max-h-[560px] object-contain">
            </div>

            {{-- COL 3: The door that makes the difference --}}
            <div class="rounded-2xl bg-white p-5 lg:p-6 flex flex-col" style="box-shadow: 0 10px 35px -10px rgba(1,30,65,0.10);">
                <h3 class="font-heading font-bold text-navy text-xl leading-snug mb-4">The door that makes the difference</h3>
                <div class="space-y-3.5">
                    @foreach([
                        ['t' => 'Ideal height',              'img' => 'idealheight.svg',   'b' => 'The door is positioned at the most ergonomically suitable height, making a real difference for loading soiled linen and unloading clean linen.'],
                        ['t' => 'Wide-angle door opening',   'd' => 'M13.5 10.5V6.75a4.5 4.5 0 1 1 9 0v3.75M3.75 21.75h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H3.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z', 'b' => 'A wide-angle opening with automatic inner door handling (AIDO) supports easier, faster loading and unloading on both sides.'],
                        ['t' => 'A better grip',             'img' => 'abettergrip.svg',   'b' => 'Open and shut the door smoothly thanks to the handle design and easy-close magnetic door.'],
                        ['t' => 'Left / right door options', 'd' => 'M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z', 'b' => 'Left or right door configurations let the barrier washer suit the room layout and keep clean and soiled sides controlled.'],
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
            </div>

            {{-- COL 4: filter drawer + Request Equipment Advice CTA --}}
            <div class="flex flex-col gap-5">
                <div class="rounded-2xl bg-white p-6 flex-1" style="box-shadow: 0 10px 35px -10px rgba(1,30,65,0.10);">
                    <div class="flex items-start justify-between gap-3 mb-2">
                        <h3 class="font-heading font-bold text-navy text-lg leading-snug">Safer for users, lighter to handle</h3>
                        <img src="/images/equipment/saferforusers.svg" alt="Safer handling" class="w-16 h-16 object-contain flex-shrink-0">
                    </div>
                    <p class="font-body font-bold text-[#148af4] text-sm mb-2">Maximum comfort</p>
                    <p class="font-body text-gray-500 text-xs leading-relaxed mb-3">A low <strong class="text-navy font-bold">40N</strong> door-opening force and automatic door handling take the strain out of repeated loading and unloading, so barrier laundry routines stay safer and more consistent.</p>
                    <div class="flex flex-wrap gap-x-4 gap-y-1.5">
                        @foreach(['40N door opening force', 'Auto door handling', 'Space-saving design'] as $pt)
                        <span class="inline-flex items-center gap-1.5 font-body text-navy text-xs font-semibold">
                            <svg class="w-3.5 h-3.5 text-[#148af4] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            {{ $pt }}
                        </span>
                        @endforeach
                    </div>
                </div>
                <a href="{{ route('request-assessment') }}"
                   class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
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
                    <p class="font-body text-gray-500 text-xs leading-relaxed">Selected barrier washer formats are built to fit the room, keeping dirty-side and clean-side access controlled without wasting floor space.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 9. SECTOR FIT / USE CASES --}}
<section class="py-16 lg:py-24 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Where Barrier Washers Fit</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Built for sites where <span style="color:#148af4;">clean and soiled handling must stay apart</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Barrier washers are most relevant where controlled separation, staff routines and process control matter every day.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 reveal">
            @foreach([
                ['title' => 'Healthcare and hospitals',           'img' => '/images/healthcare/healthcarehero.png',                'route' => route('sectors.healthcare'), 'pos' => '75% center'],
                ['title' => 'Care facilities',                    'img' => '/images/CareFacilities/carefacilitiesheroimage.jpg',   'route' => route('sectors.care'), 'pos' => '75% center'],
                ['title' => 'Pharmaceutical and food processing', 'img' => '/images/healthcare/render-double-page_72dpi.jpg',      'route' => route('sectors.commercial')],
                ['title' => 'Firefighters & protective workwear', 'img' => '/images/healthcare/commercial-industrial.jpg',     'route' => route('request-assessment')],
            ] as $card)
            <div class="flex flex-col items-center text-center">
                <a href="{{ $card['route'] }}" class="block w-full overflow-hidden rounded-sm mb-5">
                    <img src="{{ $card['img'] }}" alt="{{ $card['title'] }}"
                         class="w-full object-cover transition-transform duration-500 hover:scale-105" style="height:320px; object-position: {{ $card['pos'] ?? 'center' }};">
                </a>
                <h3 class="font-heading font-bold text-navy text-xl lg:text-2xl mb-4">{{ $card['title'] }}</h3>
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
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.85) 15%, rgba(20,138,244,0.3) 55%, transparent 100%);"></div>
    </div>
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-10 lg:py-14 max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Room Planning</p>
        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
            Plan barrier laundry around <span style="color:#011E41;">wall fit, clean-side access and utilities</span>
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6">
            Barrier washers need the room planned around wall opening, dirty-side loading, clean-side unloading, utilities and drainage before installation.
        </p>
        <div class="flex items-center flex-wrap gap-x-5 gap-y-2 mb-7">
            @foreach(['Dirty side', 'Clean side', 'Utilities'] as $i => $pt)
            @if($i > 0)<span class="text-white/40">|</span>@endif
            <span class="font-body text-white text-sm font-bold">{{ $pt }}</span>
            @endforeach
        </div>
        <a href="{{ route('request-assessment') }}"
           class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
            Request Equipment Advice
        </a>
    </div>
</section>

{{-- 11. COMPACT RESOURCES BAR (low, light, supporting — matches commercial washers) --}}
<section class="pt-14 pb-8 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 lg:gap-10">
            @foreach([
                ['title' => 'Official Resources',  'links' => [['l' => 'Line 6000 Evolution brochure', 'h' => '/pdfs/EPR-brochure-Line 6000 Evolution Barrier Washers-20241119-EN.pdf'], ['l' => 'Firefighters laundry solutions brochure', 'h' => '/pdfs/EPR_brochure_firefighters_16042025_EN.pdf'], ['l' => 'Product resources', 'h' => route('resources')]]],
                ['title' => 'Related Equipment',   'links' => [['l' => 'Commercial Washers', 'h' => route('equipment.category', 'washers')], ['l' => 'Tumble Dryers', 'h' => route('equipment.category', 'tumble-dryers')], ['l' => 'Healthcare Laundry', 'h' => route('sectors.healthcare')]]],
                ['title' => 'Rental & Support',    'links' => [['l' => 'Equipment Rental', 'h' => route('rental')], ['l' => 'Preventive Maintenance', 'h' => route('service-contracts')], ['l' => 'Support & Aftercare', 'h' => route('parts-aftercare')]]],
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

{{-- 12. PRODUCT FINDER / BARRIER WASHER RANGE (Option B — left filter) --}}
<section id="barrier-range" class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Barrier Washer Range</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Compare barrier washer options around <span style="color:#148af4;">capacity, separation and support</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-[1400px]">
                Start with capacity and room layout, then match the washer to clean/dirty separation, utilities, installation and long-term support.
            </p>
        </div>

        @php
            // Barrier washer catalogue. NOTE: WB6 is the current real range; append further
            // products (Pullman, Cleanroom options, etc.) here when supplied — the filters auto-populate.
            // One card per WB6 model (same product across kg shares one image).
            $bwSites  = ['Healthcare','Care Facilities','Pharmaceutical','Food Processing','Commercial Laundry'];
            $bwBadges = ['ERGOCERT','Hygiene Watchdog','AIDO','Power Balance'];
            $bwFit    = 'Line 6000 Evolution barrier washer with clean/dirty separation, guided operation and long-term support.';
            $bwImg    = '/images/equipment/line6000-barrier-washer.webp';
            // Cards for models with their own photo; imageless sizes folded into the nearest card's range.
            $barrierFamilies = [
                ['name' => 'WB6-13',  'slug' => 'wb6-13',  'profile' => 'Line 6000 Evolution', 'capLabel' => '13–18 kg',  'kg' => ['13','18'],      'sites' => $bwSites, 'badges' => $bwBadges, 'fit' => $bwFit, 'img' => '/images/equipment/WB6-13.jpg'],
                ['name' => 'WB6-20',  'slug' => 'wb6-20',  'profile' => 'Line 6000 Evolution', 'capLabel' => '20–27 kg',  'kg' => ['20','27'],      'sites' => $bwSites, 'badges' => $bwBadges, 'fit' => $bwFit, 'img' => '/images/equipment/WB6-20.jpg'],
                ['name' => 'WB6-35',  'slug' => 'wb6-35',  'profile' => 'Line 6000 Evolution', 'capLabel' => '35–70 kg',  'kg' => ['35','50','70'], 'sites' => $bwSites, 'badges' => $bwBadges, 'fit' => $bwFit, 'img' => '/images/equipment/WB6-35.jpg'],
                ['name' => 'WB6-110', 'slug' => 'wb6-110', 'profile' => 'Line 6000 Evolution', 'capLabel' => '90–110 kg', 'kg' => ['90','110'],     'sites' => $bwSites, 'badges' => $bwBadges, 'fit' => $bwFit, 'img' => '/images/equipment/WB6-110.jpg'],
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
                                Request Advice on This Model
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

        <p class="font-body text-gray-500 text-sm leading-relaxed mt-10 max-w-3xl">
            Not sure which barrier washer fits? Irish Laundry Systems reviews capacity, room setup, clean/dirty separation, installation, rental and support before recommending the right option.
        </p>
    </div>
</section>

{{-- DOSING INTELLIGENCE (Alpine carousel — matches sector pages) --}}
<section class="py-12 lg:py-16 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Dosing Intelligence</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight mb-3">
                Control detergent use before <span style="color:#148af4;">every barrier cycle starts</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Accurate dosing keeps detergent use matched to the load, reducing waste and protecting wash consistency in hygiene-critical laundry rooms.
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

{{-- 12a. RENTAL / CAPITAL PRESSURE STRIP (after the washer range) --}}
@include('components.why-choose-strip', [
    'eyebrow'      => 'Equipment Rental',
    'headingSize'  => 'text-3xl sm:text-4xl lg:text-4xl',
    'headingLine1' => 'Keep hygiene-critical laundry<br>',
    'headingLine2' => 'moving with <span style="color:#148af4;">lower upfront cost</span>',
    'body'         => 'Rental can support barrier washer replacement, capacity planning or ageing equipment without one large upfront purchase.',
    'miniPoints'   => [
        ['icon' => 'healthcarerentalstrip1', 'label' => 'Lower<br>cost'],
        ['icon' => 'healthcarerentalstrip2', 'label' => 'Included<br>support'],
        ['icon' => 'healthcarerentalstrip3', 'label' => 'Capacity<br>planning'],
    ],
])

{{-- 13. CONNECTED SERVICE ROUTES --}}
<section class="py-16 lg:py-20 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Connected Support</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Support routes that keep <span style="color:#148af4;">barrier laundry decisions moving</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Barrier washer performance depends on the right support after the equipment is in place. Irish Laundry Systems offers rental, planned maintenance, repairs and aftercare for hygiene-critical laundry rooms.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                ['title' => 'Repairs &amp; Call-outs', 'text' => 'Service and breakdown support when washer faults interrupt wash flow, staff routines or daily output.',                          'cta' => 'Request Call-out',         'route' => route('repairs'),           'img' => '/images/healthcare/repairs-callouts.jpg',                   'pos' => '50% 35%'],
                ['title' => 'Preventive Maintenance',  'text' => 'Planned servicing to reduce surprise repair costs and keep equipment condition clear.',                                 'cta' => 'View Maintenance Options', 'route' => route('service-contracts'), 'img' => '/images/healthcare/service-contracts-hero.png',             'pos' => '90% 35%'],
                ['title' => 'Equipment Rental',        'text' => 'Lower upfront cost for barrier washer replacement, capacity planning or expansion where rental is the right fit.',          'cta' => 'See Rental Options',       'route' => route('rental'),            'img' => '/images/healthcare/td6-11-multihousing-room-front.jpg',     'pos' => '66% center'],
                ['title' => 'Support &amp; Aftercare', 'text' => 'Service history, follow-up guidance and parts access where needed after installation, rental, repair or inspection.',            'cta' => 'Explore Support Options',  'route' => route('parts-aftercare'),   'img' => '/images/healthcare/services-overview-hero-portrait.jpg',     'pos' => 'center center'],
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

{{-- 15. COMPACT AFTER-INSTALLATION SUPPORT BAND --}}
<section class="py-12 lg:py-16" style="background-color:#148af4;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-7">
                <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">After Installation</p>
                <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                    Keep barrier washer decisions <span style="color:#011E41;">connected after installation</span>
                </h2>
                <p class="font-body text-white/80 text-base leading-relaxed mb-5 max-w-2xl">
                    Track maintenance, service history, breakdown support and parts access after installation, rental, repair or inspection.
                </p>
                <div class="flex items-center flex-wrap gap-x-4 gap-y-3">
                    @foreach([
                        ['icon' => 'aftercarehealthcarestrip1', 'label' => 'Planned<br>maintenance'],
                        ['icon' => 'aftercarehealthcarestrip2', 'label' => 'Service<br>history'],
                        ['icon' => 'aftercarehealthcarestrip3', 'label' => 'Parts access<br>where needed'],
                    ] as $pt)
                    <span class="flex items-center gap-2 flex-shrink-0">
                        <img src="/images/icons/{{ $pt['icon'] }}.png" alt="" aria-hidden="true" class="h-14 w-auto object-contain">
                        <span class="font-body text-white text-sm font-bold leading-tight">{!! $pt['label'] !!}</span>
                    </span>
                    @endforeach
                </div>
            </div>
            <div class="lg:col-span-5 flex lg:justify-end">
                <a href="{{ route('parts-aftercare') }}"
                   class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-4 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
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
    'heading'    => 'Trusted support behind <span style="color:#148af4;">hygiene-critical laundry</span>',
    'subheading' => 'Barrier washers affect controlled separation, staff routines, room planning and daily output. Irish Laundry Systems is trusted by organisations that value clear communication, responsive service support and peace of mind after equipment is installed.',
    'subheadingClass' => 'max-w-5xl mx-auto',
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

{{-- 19. FINAL CTA --}}
<section class="py-16 lg:py-24" style="background-color:#011E41;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 text-center">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Equipment Advice</p>
        <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4 max-w-4xl mx-auto">
            Need the right barrier washer for <span style="color:#148af4;">your laundry room?</span>
        </h2>
        <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl mx-auto">
            Talk to Irish Laundry Systems about barrier washer capacity, clean/dirty separation, room layout, installation, rental, maintenance and support options.
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
