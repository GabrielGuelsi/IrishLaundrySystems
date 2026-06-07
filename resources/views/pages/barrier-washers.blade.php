@extends('layouts.app')

@section('pageTitle', 'Barrier Washing Machines | Electrolux Professional Barrier Washers | Irish Laundry Systems')

@section('meta')
<meta name="description" content="Electrolux Professional barrier washers for healthcare, care, pharmaceutical, food processing and specialist laundry. Irish Laundry Systems supplies, installs and supports dirty-side / clean-side barrier washer-extractors across Ireland.">
@endsection

@section('content')

{{-- 2. HERO --}}
<section class="relative overflow-hidden flex flex-col" style="height:720px; min-height:560px;">
    <img src="/images/sectors/Line 6000 solutions products_72dpi.jpg" alt="Barrier washing machines"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.75) 42%, rgba(1,30,65,0.35) 65%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-24 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-3xl">
                <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Barrier Washing Machines</p>
                <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight text-balance mb-6">
                    Control hygiene flow with <span style="color:#148af4;">dirty-side and clean-side separation</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    Irish Laundry Systems supplies, installs and supports Electrolux Professional barrier washers for healthcare, care, pharmaceutical, food processing and specialist laundry environments across Ireland. We connect barrier washer selection, room layout, clean/dirty separation, installation and aftercare around the way hygiene-critical laundry actually moves.
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
        <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Barrier Washer Planning</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance">
                    Barrier washer choice affects <span style="color:#148af4;">hygiene flow, staff handling and room control</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Where soiled and clean linen must stay separate, the washer decision becomes part of the whole laundry process. Irish Laundry Systems connects barrier equipment, room layout, loading and unloading flow, drying, finishing, maintenance and support into one clear plan.
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

{{-- 5. HYGIENE FLOW / BARRIER PROCESS FEATURE --}}
<section class="py-16 lg:py-24 overflow-hidden" style="background-color:#011E41;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            {{-- Left: copy --}}
            <div class="reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Hygiene Flow</p>
                <h2 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight text-balance mb-5">
                    Separate soiled and clean handling for <span style="color:#148af4;">controlled hygiene flow</span>
                </h2>
                <p class="font-body text-white/75 text-base leading-relaxed mb-7 max-w-xl">
                    Barrier washers support a controlled laundry flow by loading soiled linen from one side and unloading clean linen from the other. This physical separation supports cleaner process control where hygiene, staff routines and linen movement need to work together.
                </p>
                <div class="grid grid-cols-2 gap-x-6 gap-y-4 mb-8 max-w-lg">
                    @foreach([
                        ['t' => 'Dirty-side loading',      'd' => 'M12 4.5v15m0 0-6-6m6 6 6-6'],
                        ['t' => 'Clean-side unloading',    'd' => 'M12 19.5v-15m0 0-6 6m6-6 6 6'],
                        ['t' => 'Hygiene Watchdog',        'd' => 'M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.249-8.25-3.285Z'],
                        ['t' => 'RABC support where required', 'd' => 'M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z'],
                    ] as $mp)
                    <div class="flex items-center gap-2.5">
                        <span class="flex items-center justify-center w-9 h-9 rounded-full bg-[#148af4]/15 flex-shrink-0">
                            <svg class="w-5 h-5 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $mp['d'] }}"/></svg>
                        </span>
                        <span class="font-body text-white text-sm font-semibold leading-snug">{{ $mp['t'] }}</span>
                    </div>
                    @endforeach
                </div>
                <a href="{{ route('request-assessment') }}"
                   class="inline-flex items-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    Request Barrier Washer Advice
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            {{-- Right: dirty-side / clean-side diagram --}}
            <div class="reveal reveal-right">
                <div class="bg-white/5 border border-white/10 rounded-3xl p-6 lg:p-8">
                    <div class="grid grid-cols-[1fr_auto_1fr] items-stretch gap-0">
                        {{-- Soiled side --}}
                        <div class="rounded-l-2xl p-6 text-center" style="background-color:rgba(20,138,244,0.10);">
                            <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-[#148af4]/20 mb-3">
                                <svg class="w-6 h-6 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7"><path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498 4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 0 0-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0Z"/></svg>
                            </span>
                            <p class="font-heading font-bold text-white text-sm mb-0.5">Soiled side</p>
                            <p class="font-body text-white/60 text-xs">Dirty linen loaded in</p>
                        </div>
                        {{-- Barrier wall + arrow --}}
                        <div class="flex flex-col items-center justify-center px-2" style="background-color:rgba(255,255,255,0.04);">
                            <div class="w-px flex-1 bg-white/20"></div>
                            <span class="my-2 inline-flex items-center justify-center w-9 h-9 rounded-full bg-[#148af4] text-white flex-shrink-0">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                            </span>
                            <div class="w-px flex-1 bg-white/20"></div>
                        </div>
                        {{-- Clean side --}}
                        <div class="rounded-r-2xl p-6 text-center bg-white">
                            <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-[#148af4]/15 mb-3">
                                <svg class="w-6 h-6 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                            </span>
                            <p class="font-heading font-bold text-navy text-sm mb-0.5">Clean side</p>
                            <p class="font-body text-gray-500 text-xs">Clean linen unloaded</p>
                        </div>
                    </div>
                    <div class="mt-6 rounded-2xl overflow-hidden">
                        <img src="/images/equipment/line6000-barrier-washer.webp" alt="Electrolux Professional barrier washer" class="w-full h-56 object-contain bg-white p-4">
                    </div>
                    <p class="font-body text-white/50 text-xs text-center mt-4">Double-door barrier design — built into the wall between soiled and clean areas.</p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- 6. FINANCIAL / OPERATIONAL PERFORMANCE --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Financial Performance</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Choose barrier washers around <span style="color:#148af4;">water, productivity and process control</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Barrier washer decisions affect more than hygiene. Water use, detergent control, staff handling, drying pressure and process visibility all shape the cost of keeping hygiene-critical laundry moving.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-5">
            @foreach([
                ['stat' => 'Up to 50%', 'title' => 'water saving',                'copy' => 'Double drain options can support water recycling and reduce water consumption where specified.', 'd' => 'M12 21a6.75 6.75 0 0 1-6.75-6.75c0-3 3.5-7.5 6.75-11.25 3.25 3.75 6.75 8.25 6.75 11.25A6.75 6.75 0 0 1 12 21Z'],
                ['stat' => '25%',       'title' => 'productivity increase',       'copy' => 'Electrolux ergonomic material cites a 25% productivity increase, alongside fewer sick days and reduced work-related strain.', 'd' => 'M2.25 18 9 11.25l4.306 4.307a11.95 11.95 0 0 1 5.814-5.519l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941'],
                ['stat' => 'Integrated','title' => 'water, energy and load control', 'copy' => 'Integrated weighing supports better loading, reducing overloading, underloading and avoidable resource waste.', 'd' => 'M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.4 48.4 0 0 0 12 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52 2.62 10.726c.122.499-.106 1.028-.589 1.202a5.99 5.99 0 0 1-2.031.352 5.99 5.99 0 0 1-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971Zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0 2.62 10.726c.122.499-.106 1.028-.589 1.202a5.99 5.99 0 0 1-2.031.352 5.99 5.99 0 0 1-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971Z'],
                ['stat' => 'Efficient','title' => 'detergent and water control',  'copy' => 'Efficient Dosing adds detergent and water according to load weight, reducing waste and supporting process consistency.', 'd' => 'M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.3 24.3 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.3 48.3 0 0 1 12 21a48.3 48.3 0 0 1-8.135-.687c-1.717-.293-2.3-2.379-1.067-3.61L5 14.5'],
                ['stat' => 'Power',    'title' => 'time and money before drying',  'copy' => 'Power Balance supports stronger extraction and lower moisture retention, reducing pressure on the drying stage.', 'd' => 'm3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z'],
            ] as $card)
            <div class="bg-bg border border-gray-100 rounded-2xl p-6 flex flex-col h-full">
                <span class="inline-flex items-center justify-center w-11 h-11 rounded-xl bg-[#148af4]/10 mb-4">
                    <svg class="w-6 h-6 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $card['d'] }}"/></svg>
                </span>
                <p class="font-heading font-bold text-[#148af4] text-2xl leading-none mb-1">{{ $card['stat'] }}</p>
                <p class="font-heading font-bold text-navy text-sm leading-snug mb-2">{{ $card['title'] }}</p>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $card['copy'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 7. TECHNICAL PROOF --}}
<section class="py-16 lg:py-24 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Technical Proof</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Features that support <span style="color:#148af4;">separation, control and safer handling</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Selected Electrolux Professional barrier washer features support separation, guided operation, process visibility and easier loading and unloading when matched to the right room.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-5">
            @foreach([
                ['title' => 'Double-door barrier design', 'copy' => 'Soiled linen loads from one side and clean linen unloads from the other.',          'chip' => 'Barrier Separation',          'd' => 'M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21'],
                ['title' => 'Hygiene Watchdog',           'copy' => 'Supports full-cycle completion and hygiene process control.',                       'chip' => 'Hygiene Watchdog',           'd' => 'M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.249-8.25-3.285Z'],
                ['title' => 'ClarusVibe / Double Screen', 'copy' => 'Guided operation for dirty-side and clean-side control.',                          'chip' => 'ClarusVibe | Double Screen', 'd' => 'M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25'],
                ['title' => 'AIDO / Automatic Door Handling', 'copy' => 'Automatic inner door opening supports easier and faster unloading.',           'chip' => 'AIDO | Automatic Door Locking', 'd' => 'M13.5 10.5V6.75a4.5 4.5 0 1 1 9 0v3.75M3.75 21.75h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H3.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z'],
                ['title' => 'Clearer process control',    'copy' => 'Connected options can support monitoring, traceability and clearer service decisions.', 'chip' => 'CMIS | OnE Laundry where applicable', 'd' => 'M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6'],
            ] as $card)
            <div class="bg-white border border-gray-100 rounded-2xl p-6 flex flex-col h-full shadow-card">
                <span class="inline-flex items-center justify-center w-11 h-11 rounded-xl bg-[#148af4]/10 mb-4">
                    <svg class="w-6 h-6 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $card['d'] }}"/></svg>
                </span>
                <h3 class="font-heading font-bold text-navy text-base leading-snug mb-2">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-4">{{ $card['copy'] }}</p>
                <span class="mt-auto inline-block font-body text-[10px] font-bold uppercase tracking-wide text-[#148af4] bg-[#148af4]/10 px-2 py-1 rounded self-start">{{ $card['chip'] }}</span>
            </div>
            @endforeach
        </div>

        {{-- Secondary proof chips --}}
        <div class="flex flex-wrap gap-2 mt-8">
            @foreach(['CompassPro','Integrated Weighing','Efficient Dosing','Power Balance','Double Drain','Titration Valve','Cleanroom Construction','13 Detergent Signals'] as $chip)
            <span class="font-body text-xs font-semibold text-navy border border-gray-200 bg-white px-3 py-1.5 rounded-full">{{ $chip }}</span>
            @endforeach
        </div>
    </div>
</section>

{{-- 8. OPERATOR COMFORT / ERGOCERT --}}
<section class="py-16 lg:py-24 bg-white border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">

            <div class="lg:col-span-7 reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Operator Comfort</p>
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-5">
                    Barrier washer design built around <span style="color:#148af4;">daily handling and safer staff routines</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-7">
                    Barrier laundry work is repetitive. The right washer should support loading, unloading, door handling and operator confidence, especially where clean and soiled sides must stay controlled.
                </p>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-x-6 gap-y-5 mb-7">
                    @foreach([
                        ['s' => '4-star', 'l' => 'ERGOCERT certified'],
                        ['s' => '25%',    'l' => 'productivity increase'],
                        ['s' => '75%',    'l' => 'fewer sick days'],
                        ['s' => '59%',    'l' => 'fewer WMSDs'],
                        ['s' => '40N',    'l' => 'door opening force'],
                        ['s' => 'Auto',   'l' => 'door handling'],
                    ] as $pp)
                    <div>
                        <p class="font-heading font-bold text-[#148af4] text-2xl leading-none">{{ $pp['s'] }}</p>
                        <p class="font-body text-gray-500 text-xs leading-snug mt-1">{{ $pp['l'] }}</p>
                    </div>
                    @endforeach
                </div>
                <div class="flex items-center flex-wrap gap-x-5 gap-y-2 mb-8">
                    @foreach(['Optimal height', 'Wide-angle door opening', 'Left / right door options', 'Space-saving design where applicable'] as $i => $pt)
                    @if($i > 0)<span class="text-gray-300">|</span>@endif
                    <span class="font-body text-navy text-sm font-semibold">{{ $pt }}</span>
                    @endforeach
                </div>
                <a href="{{ route('request-assessment') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    Request Equipment Advice
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            {{-- ERGOCERT badge --}}
            <div class="lg:col-span-5 flex lg:justify-end reveal reveal-right">
                <div class="relative w-full max-w-xs bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    <div class="absolute top-0 right-0 z-10 bg-[#148af4] text-white text-[0.6rem] font-body font-bold uppercase tracking-[0.12em] px-3 py-1.5 rounded-bl-xl">Unique in the industry</div>
                    <div class="px-8 pt-10 pb-8 text-center">
                        <img src="/images/icons/6.png" alt="4-star ERGOCERT — Ergonomics Certifying Institute" class="w-44 h-auto mx-auto">
                        <div class="border-t border-gray-200 mt-5 pt-5">
                            <p class="font-body text-gray-500 text-xs uppercase tracking-[0.18em] mb-2.5">Ergonomics Certified</p>
                            <div class="flex items-center justify-center gap-1.5 text-[#148af4]">
                                @for($s = 0; $s < 4; $s++)
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M11.48 3.5a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
                                @endfor
                            </div>
                            <p class="font-heading font-bold text-navy text-lg mt-2.5">4-Star Rating</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- 9. SECTOR FIT / USE CASES --}}
<section class="py-16 lg:py-24 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Where Barrier Washers Fit</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Built for sites where <span style="color:#148af4;">clean and soiled handling must stay apart</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Barrier washers are most relevant where hygiene flow, staff routines and process control carry real operational risk.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach([
                ['title' => 'Healthcare and hospitals',          'copy' => 'For clinical laundry environments where linen flow, patient safety and clean/dirty separation matter.', 'd' => 'M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z'],
                ['title' => 'Care facilities',                   'copy' => 'For sites handling resident clothing, bedding and towels where laundry routines need clearer separation.', 'd' => 'M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z'],
                ['title' => 'Pharmaceutical and food processing','copy' => 'For environments where workwear, particles and process control need specialist laundry planning.', 'd' => 'M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.3 24.3 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.3 48.3 0 0 1 12 21a48.3 48.3 0 0 1-8.135-.687c-1.717-.293-2.3-2.379-1.067-3.61L5 14.5'],
                ['title' => 'Commercial laundries',              'copy' => 'For operators processing hygiene-sensitive textiles for clients who need controlled laundry flow.', 'd' => 'M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21'],
            ] as $card)
            <div class="bg-white border border-gray-100 rounded-2xl p-7 flex flex-col h-full shadow-card">
                <span class="inline-flex items-center justify-center w-11 h-11 rounded-xl bg-[#148af4]/10 mb-4">
                    <svg class="w-6 h-6 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $card['d'] }}"/></svg>
                </span>
                <h3 class="font-heading font-bold text-navy text-lg leading-snug mb-2">{{ $card['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $card['copy'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 10. PLANNING / INSTALLATION STRIP --}}
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.85) 15%, rgba(20,138,244,0.3) 55%, transparent 100%);"></div>
    </div>
    <div class="relative z-10 px-10 lg:px-16 py-14 lg:py-20" style="width:100%; max-width:60%;">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Room Planning</p>
        <h2 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight text-balance mb-4">
            Plan barrier laundry around the <span style="color:#011E41;">wall, workflow and hygiene route</span>
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6 max-w-xl">
            Barrier washers depend on more than machine capacity. Irish Laundry Systems connects room layout, wall opening, dirty-side access, clean-side unloading, utilities, drainage, drying flow and support before the equipment decision is made.
        </p>
        <div class="flex items-center flex-wrap gap-x-5 gap-y-2 mb-7">
            @foreach(['Dirty-side access', 'Clean-side unloading', 'Utilities and drainage', 'Drying and finishing flow'] as $i => $pt)
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

{{-- 11. RESOURCES / DOWNLOADS --}}
<section class="py-16 lg:py-24 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">

            {{-- Box 1 — Navy downloads --}}
            <div class="bg-navy rounded-2xl p-7 lg:p-9 flex flex-col">
                <h3 class="font-heading font-bold text-white text-xl lg:text-2xl mb-2">Official Electrolux Professional Downloads</h3>
                <p class="font-body text-white/70 text-sm leading-relaxed mb-6">Access selected product brochures, technical sheets and barrier washer resources before comparing models.</p>
                <ul class="space-y-3">
                    @foreach([
                        ['label' => 'Line 6000 Evolution Barrier Washers brochure', 'file' => 'EPR-brochure-Line 6000 Evolution Barrier Washers-20241119-EN.pdf'],
                        ['label' => 'Pullman Barrier Washers leaflet',              'file' => ''],
                        ['label' => 'WB6-20 / WB6-27 / WB6-35 product data sheet',   'file' => ''],
                        ['label' => 'Relevant barrier washer product resources',    'file' => ''],
                    ] as $pdf)
                    <li>
                        @if($pdf['file'])
                        <a href="/pdfs/{{ $pdf['file'] }}" target="_blank" download class="flex items-center gap-2.5 font-body text-sm text-white/85 hover:text-white transition-colors">
                            <svg class="w-4 h-4 flex-shrink-0 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                            {!! $pdf['label'] !!}
                        </a>
                        @else
                        <span class="flex items-center gap-2.5 font-body text-sm text-white/40">
                            <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                            {!! $pdf['label'] !!}
                        </span>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Box 2 — Related guidance --}}
            <div class="bg-white border border-gray-200 rounded-2xl p-7 lg:p-9 flex flex-col">
                <h3 class="font-heading font-bold text-navy text-xl lg:text-2xl mb-2">Related Equipment Guidance</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-6">Explore connected equipment and support routes before making a barrier washer decision.</p>
                <ul class="space-y-3">
                    @foreach([
                        ['label' => 'Healthcare Laundry Support',     'href' => route('sectors.healthcare')],
                        ['label' => 'Commercial Washing Machines',    'href' => route('equipment.category', 'washers')],
                        ['label' => 'Tumble Dryers',                  'href' => route('equipment.category', 'tumble-dryers')],
                        ['label' => 'Equipment Rental',               'href' => route('rental')],
                        ['label' => 'Preventive Maintenance',         'href' => route('service-contracts')],
                        ['label' => 'Support &amp; Aftercare',        'href' => route('parts-aftercare')],
                    ] as $link)
                    <li>
                        <a href="{{ $link['href'] }}" class="flex items-center gap-2.5 font-body text-sm text-navy hover:text-orange font-semibold transition-colors">
                            <svg class="w-4 h-4 flex-shrink-0 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                            {!! $link['label'] !!}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</section>

{{-- 12. PRODUCT FINDER / BARRIER WASHER RANGE (Option B — left filter) --}}
<section id="barrier-range" class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-10 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Barrier Washer Range</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Compare barrier washer options around <span style="color:#148af4;">capacity, hygiene flow and support</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-4xl">
                Start with capacity and room layout, then connect the barrier washer decision to hygiene flow, clean/dirty separation, utilities, installation and long-term support.
            </p>
        </div>

        @php
            // Barrier washer catalogue. NOTE: WB6 is the current real range; append further
            // products (Pullman, Cleanroom options, etc.) here when supplied — the filters auto-populate.
            $barrierFamilies = [
                [
                    'slug' => 'wb6',
                    'name' => 'WB6 — Line 6000 Evolution Barrier Washer',
                    'fit' => 'Barrier washer for hygiene-critical laundry rooms needing clean/dirty separation, guided operation and long-term support.',
                    'kg' => ['13','18','20','27','35','50','70','90','110'],
                    'capLabel' => '13–110 kg',
                    'models' => 'WB6-13 → WB6-110',
                    'profile' => 'Line 6000 Evolution',
                    'sites' => ['Healthcare','Care Facilities','Pharmaceutical','Food Processing','Commercial Laundry'],
                    'badges' => ['ERGOCERT','Hygiene Watchdog','AIDO','Power Balance'],
                    'img' => '/images/equipment/line6000-barrier-washer.webp',
                ],
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
                    <span class="font-body text-sm text-navy font-bold"><span x-text="count"></span> <span x-text="count === 1 ? 'range' : 'ranges'"></span></span>
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
                            <a href="{{ route('request-assessment') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
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
            Not sure which barrier washer fits? Irish Laundry Systems can assess capacity, room setup, hygiene flow, installation, rental and support options before a final recommendation.
        </p>
    </div>
</section>

{{-- 13. CONNECTED SERVICE ROUTES --}}
<section class="py-16 lg:py-20 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Connected Support</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
                Support routes that keep <span style="color:#148af4;">barrier laundry decisions moving</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Barrier washer performance depends on more than the first installation. Irish Laundry Systems connects equipment access, planned maintenance, repairs and aftercare around the way hygiene-critical laundry operates.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                ['title' => 'Equipment Rental',        'text' => 'Lower upfront cost for barrier washer replacement, capacity planning or expansion where rental is the right fit.',          'cta' => 'See Rental Options',       'route' => route('rental'),            'img' => '/images/healthcare/commercial-industrial.jpg',              'pos' => 'center center'],
                ['title' => 'Preventive Maintenance',  'text' => 'Planned servicing to reduce surprise repair pressure and keep equipment condition visible.',                                 'cta' => 'View Maintenance Options', 'route' => route('service-contracts'), 'img' => '/images/healthcare/service-contracts-hero.png',             'pos' => '90% 35%'],
                ['title' => 'Repairs &amp; Call-outs', 'text' => 'Service and breakdown support when washer faults interrupt hygiene flow, staff routines or daily output.',                       'cta' => 'Request Call-out',         'route' => route('repairs'),           'img' => '/images/healthcare/repairs-callouts.jpg',                   'pos' => '50% 35%'],
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
                    <h3 class="font-heading font-bold text-white text-xl lg:text-2xl leading-tight mb-4">{!! $card['title'] !!}</h3>
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
    'headingLine1' => 'Keep hygiene-critical laundry moving with',
    'headingLine2' => '<span style="color:#148af4;">lower upfront cost</span>',
    'body'         => 'For sites facing barrier washer replacement, hygiene-flow pressure or capacity needs, rental can keep the laundry room moving without turning every equipment decision into one large capital purchase.',
    'miniPoints'   => ['Lower upfront cost', 'Installation and support available', 'Service and breakdown support included under rental terms'],
    'miniNowrap'   => true,
])

{{-- 15. COMPACT AFTER-INSTALLATION SUPPORT BAND --}}
<section class="py-12 lg:py-16 bg-bg border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-7">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">After Installation</p>
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight text-balance mb-3">
                    Keep barrier washer decisions <span style="color:#148af4;">connected after installation</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-5 max-w-2xl">
                    Irish Laundry Systems connects planned maintenance, service history, service and breakdown support and parts access where needed, so barrier washer decisions stay clear after installation, rental, repair or inspection.
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
    'heading'    => 'Trusted support behind <span style="color:#148af4;">hygiene-critical laundry decisions</span>',
    'subheading' => 'Barrier washer decisions affect hygiene flow, staff routines, room planning and daily output. Irish Laundry Systems is trusted by organisations that need clear communication, responsive support and equipment knowledge after the machine is on site.',
])

{{-- 17. TRUSTED BY LOGO STRIP --}}
@include('components.proof-bar')

{{-- 18. FAQ --}}
@include('components.faq', [
    'eyebrow' => 'Barrier Washer FAQs',
    'heading' => 'Clear answers before the <span style="color:#148af4;">barrier washer decision</span>',
    'faqs' => [
        ['question' => 'What is a barrier washer?', 'answer' => 'A barrier washer is designed to separate soiled loading from clean unloading. Dirty linen enters from one side and clean linen exits from the other, supporting a more controlled hygiene flow.'],
        ['question' => 'Where are barrier washers normally used?', 'answer' => 'They are commonly used in healthcare, care, pharmaceutical, food processing and specialist laundry environments where clean and soiled handling must stay apart.'],
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
        <h2 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight text-balance mb-4 max-w-4xl mx-auto">
            Need the <span style="color:#148af4;">right barrier washer decision</span> for your laundry room?
        </h2>
        <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl mx-auto">
            Talk to Irish Laundry Systems about barrier washer capacity, hygiene flow, room layout, installation, rental, maintenance and support options.
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
