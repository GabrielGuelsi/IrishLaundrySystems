@extends('layouts.app')

@section('meta')
<meta name="description" content="Engineering-led commercial laundry support for healthcare — barrier washers, service contracts, and priority response across Ireland.">
@endsection

@section('content')

@include('components.sector-tabs')

<!-- 1. HERO -->
<section class="relative min-h-[600px] lg:min-h-[680px] flex items-center overflow-hidden">
    <!-- Background image -->
    <img src="/images/healthcare/heathcarehero.avif" alt="Healthcare laundry installation"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <!-- Content -->
    <div class="relative z-10 w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-24 lg:py-32">
        <div class="max-w-3xl reveal reveal-left">
            <x-pretitle label="Healthcare Laundry Support" />
            <h1 class="font-heading font-bold text-navy text-4xl lg:text-6xl leading-tight mb-8">
                Hygiene control and<br>operational continuity<br>for healthcare laundry.
            </h1>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="#healthcare-assessment"
                   class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                    Request Healthcare Assessment
                </a>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center gap-2 border-2 border-navy hover:border-navy/70 text-navy font-body font-semibold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-navy/10">
                    Talk to an Engineer
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 2. PROOF BAR -->
@include('components.proof-bar')

<!-- 3. SPLIT STATEMENT -->
<section class="py-16 lg:py-24 bg-white border-b border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-6xl leading-tight">
                    We'll keep your critical laundry equipment <span style="color:#148af4;">running.</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-700 text-xl leading-relaxed mb-4">
                    ILS supports healthcare operations across Ireland — reducing <span style="color:#148af4;">breakdown risk</span>, improving hygiene compliance, and keeping laundry systems operational.
                </p>
                <p class="font-body text-gray-500 leading-relaxed mb-8">
                    Whatever the site requires, <span style="color:#148af4;">we'll take care of it.</span>
                </p>
                <a href="{{ route('sectors.healthcare') }}#healthcare-equipment"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy-dark text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    See the equipment we provide
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- WORKING ROUTE SECTION -->
<section class="relative py-20 lg:py-28 overflow-hidden">
    <img src="/images/healthcare/workflow.jpg" alt="Healthcare laundry workflow" class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0 bg-navy/85"></div>
    <div class="relative z-10 max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <!-- Title -->
        <div class="text-center mb-14 reveal">
            <h2 class="font-heading font-bold text-white text-3xl lg:text-5xl leading-tight">
                Built around how healthcare laundry rooms
                <span style="color:#148af4;">actually operate</span>
            </h2>
        </div>

        <!-- Steps -->
        <div class="flex flex-col lg:flex-row items-start justify-center gap-0 reveal">

            @foreach([
                [
                    'n' => 1,
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"/>',
                    'label' => 'Dirty-side and clean-side handling discipline',
                ],
                [
                    'n' => 2,
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498 4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 0 0-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0Z"/>',
                    'label' => 'Room-aware equipment route',
                ],
                [
                    'n' => 3,
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5m.75-9 3-3 2.148 2.148A12.061 12.061 0 0 1 16.5 7.605"/>',
                    'label' => 'Capacity and throughput pressure',
                ],
                [
                    'n' => 4,
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l5.653-4.655m5.873-4.025a3 3 0 1 1 4.243 4.243"/>',
                    'label' => 'Service route from the start',
                ],
            ] as $i => $step)

            <!-- Step -->
            <div class="flex flex-col items-center text-center flex-1 px-6 lg:px-10">
                <!-- Circle icon -->
                <div class="relative w-24 h-24 rounded-full bg-white/10 border-2 border-white/20 flex items-center justify-center mb-5">
                    <svg class="w-10 h-10 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        {!! $step['icon'] !!}
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-white text-lg lg:text-xl mb-2">{{ $step['label'] }}</h3>
            </div>

            @if($i < 3)
            <!-- Arrow -->
            <div class="hidden lg:flex items-center self-center pb-16">
                <svg class="w-8 h-8 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </div>
            @endif

            @endforeach

        </div>

    </div>
</section>

<!-- SUPPORT ROUTES -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <!-- Header -->
        <div class="mb-10 reveal">
            <x-pretitle label="Support Routes" />
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-5xl leading-tight max-w-2xl">
                Three clear routes into<br>
                <span class="font-extrabold">healthcare laundry support.</span>
            </h2>
        </div>

        <!-- Banner Cards -->
        <div class="flex flex-col gap-5">

            <!-- Banner 1: text left, icon right -->
            <div class="relative rounded-2xl overflow-hidden h-52 lg:h-56 reveal">
                <img src="/images/healthcare/engineer.jpg" alt="Service Contracts" class="absolute inset-0 w-full h-full object-cover object-center">
                <div class="absolute inset-0 flex">
                    <!-- Navy overlay on text side -->
                    <div class="w-full lg:w-3/5 bg-navy/85 flex flex-col justify-center px-8 lg:px-12 py-8">
                        <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-snug mb-3">Service Contracts</h3>
                        <p class="font-body text-gray-200 text-sm lg:text-base leading-relaxed max-w-lg mb-5">
                            Planned support built around installed healthcare equipment, continuity targets, and the daily pressure of the room.
                        </p>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 self-start bg-white/15 hover:bg-white/25 border border-white/30 text-white font-heading font-semibold text-sm px-4 py-2 rounded-lg transition-colors">
                            Review contract options
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                    <!-- Icon side -->
                    <div class="hidden lg:flex flex-1 items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Banner 2: icon left, text right -->
            <div class="relative rounded-2xl overflow-hidden h-52 lg:h-56 reveal">
                <img src="/images/healthcare/workflow.jpg" alt="Repairs & Call-outs" class="absolute inset-0 w-full h-full object-cover object-center">
                <div class="absolute inset-0 flex flex-row-reverse">
                    <!-- Navy overlay on text side -->
                    <div class="w-full lg:w-3/5 bg-navy/85 flex flex-col justify-center px-8 lg:px-12 py-8">
                        <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-snug mb-3">Repairs &amp; Call-outs</h3>
                        <p class="font-body text-gray-200 text-sm lg:text-base leading-relaxed max-w-lg mb-5">
                            Urgent response path when breakdowns, performance issues, or pressure points interrupt healthcare laundry operations.
                        </p>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 self-start bg-white/15 hover:bg-white/25 border border-white/30 text-white font-heading font-semibold text-sm px-4 py-2 rounded-lg transition-colors">
                            Request support route
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                    <!-- Icon side -->
                    <div class="hidden lg:flex flex-1 items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Banner 3: text left, icon right -->
            <div class="relative rounded-2xl overflow-hidden h-52 lg:h-56 reveal">
                <img src="/images/healthcare/plant-room.jpg" alt="Parts & Aftercare" class="absolute inset-0 w-full h-full object-cover object-center">
                <div class="absolute inset-0 flex">
                    <!-- Navy overlay on text side -->
                    <div class="w-full lg:w-3/5 bg-navy/85 flex flex-col justify-center px-8 lg:px-12 py-8">
                        <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-snug mb-3">Parts &amp; Aftercare</h3>
                        <p class="font-body text-gray-200 text-sm lg:text-base leading-relaxed max-w-lg mb-5">
                            Lifecycle support for wear items, parts planning, and continuity around the installed healthcare base.
                        </p>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 self-start bg-white/15 hover:bg-white/25 border border-white/30 text-white font-heading font-semibold text-sm px-4 py-2 rounded-lg transition-colors">
                            Discuss parts &amp; aftercare
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                    <!-- Icon side -->
                    <div class="hidden lg:flex flex-1 items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                        </svg>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 4. LAUNDRY CYCLE MANAGEMENT + VIDEO -->
<section class="py-16 lg:py-24 bg-white border-y border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="max-w-3xl mb-10 reveal">
            <x-pretitle label="Laundry Cycle Management" />
            <p class="font-body text-gray-600 text-lg leading-relaxed mb-6">
                Effective laundry cycle management for hospitals and healthcare sites combines proper sorting, transport, washing, drying, finishing and storage to keep infection at bay while maximizing the safety of both patients and staff.
            </p>
            <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl leading-tight">
                Maximized hygiene guaranteed with Line 6000 laundry solutions
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center reveal">

            <!-- Infographic -->
            <div>
                <img src="/images/healthcare/Electrolux-Barrier-infografica-LOW.webp"
                     alt="Healthcare laundry cycle management"
                     class="w-full h-auto object-contain">
            </div>

            <!-- Video -->
            <div>
                <div class="relative w-full rounded-2xl overflow-hidden shadow-2xl" style="padding-bottom: 56.25%;">
                    <iframe class="absolute inset-0 w-full h-full"
                            src="https://www.youtube.com/embed/26g9u4GPRVc"
                            title="Laundry Cycle Management"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- 5. BARRIER WASHERS PRODUCT BLOCK -->

{{-- A2: Navy intro block --}}

<!-- PRODUCTS: Barrier Washers / Tumble Dryers / Ironers -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <!-- Title -->
        <div class="mb-16 reveal">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-2">
                Control, traceability, and day-to-day continuity in the healthcare laundry room
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                Post-wash flow, drying, flatwork handling, and support continuity all affect whether the clean route remains stable through the day.
            </p>
        </div>

        <div class="flex flex-col divide-y divide-gray-100">

            <!-- 1. Barrier Washers — image left, text right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center py-12 lg:py-16 reveal">
                <div class="flex justify-center">
                    <img src="/images/equipment/line6000-barrier-washer.webp"
                         alt="Line 6000 Barrier Washer"
                         class="w-full h-96 object-contain">
                </div>
                <div>
                    <x-pretitle label="Line 6000 Barrier Washers" />
                    <h3 class="font-heading font-bold text-navy text-2xl lg:text-3xl leading-tight mb-4">
                        Hygiene separation built into the machine design.
                    </h3>
                    <hr class="border-gray-200 mb-6">
                    <p class="font-body text-gray-600 text-base leading-relaxed mb-4">
                        <strong>A physical barrier between dirty and clean laundry zones, sitting flush with the wall for easy cleaning.</strong>
                    </p>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                        Line 6000 Barrier Washers prevent cross-contamination through effective and repeatable laundry cycle management — designed specifically for healthcare environments where segregation is non-negotiable.
                    </p>
                    <a href="{{ route('equipment') }}"
                       class="inline-flex items-center gap-2 bg-navy text-white hover:bg-navy/90 font-body font-bold px-6 py-3 rounded-lg text-sm transition-colors duration-200">
                        Get a quote today
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
            </div>

            <!-- 2. Tumble Dryers — text left, image right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center py-12 lg:py-16 reveal">
                <div class="order-2 lg:order-1">
                    <x-pretitle label="Line 6000 Tumble Dryers" />
                    <h3 class="font-heading font-bold text-navy text-2xl lg:text-3xl leading-tight mb-4">
                        Precision drying for high-demand healthcare cycles.
                    </h3>
                    <hr class="border-gray-200 mb-6">
                    <p class="font-body text-gray-600 text-base leading-relaxed mb-4">
                        <strong>Automatic moisture sensing that stops the cycle exactly when hygienic dryness is reached.</strong>
                    </p>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                        The Line 6000 Tumble Dryer range protects textile integrity across high-volume linen cycles, reduces energy consumption, and supports the continuous throughput healthcare laundry demands around the clock.
                    </p>
                    <a href="{{ route('equipment') }}"
                       class="inline-flex items-center gap-2 bg-navy text-white hover:bg-navy/90 font-body font-bold px-6 py-3 rounded-lg text-sm transition-colors duration-200">
                        Get a quote today
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
                <div class="flex justify-center order-1 lg:order-2">
                    <img src="/images/equipment/line6000-tumble-dryer.webp"
                         alt="Line 6000 Tumble Dryer"
                         class="w-full h-96 object-contain">
                </div>
            </div>

            <!-- 3. Ironers — image left, text right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center py-12 lg:py-16 reveal">
                <div class="flex justify-center">
                    <img src="/images/equipment/line6000-ironer.webp"
                         alt="Line 6000 Ironer"
                         class="w-full h-80 object-contain">
                </div>
                <div>
                    <x-pretitle label="Line 6000 Ironers" />
                    <h3 class="font-heading font-bold text-navy text-2xl lg:text-3xl leading-tight mb-4">
                        Finishing equipment built for healthcare throughput.
                    </h3>
                    <hr class="border-gray-200 mb-6">
                    <p class="font-body text-gray-600 text-base leading-relaxed mb-4">
                        <strong>Consistent output, shift after shift, with certified hygiene standards for linen finishing.</strong>
                    </p>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                        Equipped with DIAMMS™ and Hygiene Guard certification, the Line 6000 Ironer range adjusts roller pressure and speed in real time to the textile being processed — meeting the hygiene standards required in clinical and care environments.
                    </p>
                    <a href="{{ route('equipment') }}"
                       class="inline-flex items-center gap-2 bg-navy text-white hover:bg-navy/90 font-body font-bold px-6 py-3 rounded-lg text-sm transition-colors duration-200">
                        Get a quote today
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- D: Features + Download/Discover --}}
<section class="py-16 lg:py-24 bg-white border-t border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-10 reveal">
            Enhanced usability, superior safety
        </h2>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            {{-- Left: 3 features with individual icons --}}
            <div class="lg:col-span-2 flex flex-col gap-8">
                @foreach([
                    [
                        'icon'  => '/images/healthcare/hygiene-icon.png',
                        'alt'   => 'Hygiene icon',
                        'title' => 'Maximise hygiene in healthcare applications',
                        'body'  => 'Robust infection prevention measures to eliminate contamination risk between dirty and clean zones at every stage of the wash cycle.',
                    ],
                    [
                        'icon'  => '/images/healthcare/operator-icon.png',
                        'alt'   => 'Operator icon',
                        'title' => 'Operator support in high-output laundries',
                        'body'  => 'Dual-partition drum and auto-positioning for easy manual handling of heavy loads — reducing operator strain on busy hospital laundry shifts.',
                    ],
                    [
                        'icon'  => '/images/healthcare/control-icon.png',
                        'alt'   => 'Control icon',
                        'title' => 'Intelligent control',
                        'body'  => 'Intuitive interface managing dirty and clean zones independently — ensuring failsafe disinfection and full audit trail compliance.',
                    ],
                ] as $feature)
                <div class="flex items-center gap-6 reveal">
                    <div class="flex-shrink-0">
                        <img src="{{ $feature['icon'] }}" alt="{{ $feature['alt'] }}" class="w-36 h-36 object-contain">
                    </div>
                    <div>
                        <h3 class="font-heading font-bold text-navy text-xl lg:text-2xl mb-2">{{ $feature['title'] }}</h3>
                        <p class="font-body text-gray-500 text-base leading-relaxed">{{ $feature['body'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Right: Download + Discover stacked --}}
            <div class="flex flex-col gap-5 reveal reveal-right">

                {{-- Download box --}}
                <div class="bg-navy rounded-2xl p-6">
                    <h4 class="font-heading font-bold text-white text-base mb-4">Download</h4>
                    <ul class="space-y-3">
                        @foreach([
                            ['label' => 'Line 6000 Evolution Barrier Washers',    'file' => 'EPR-brochure-Line 6000 Evolution Barrier Washers-20241119-EN.pdf'],
                            ['label' => 'Line 6000 Pullman Barrier Washers',      'file' => 'EPR-leaflet-pullman-barrier-washer-EN-20230919-LR.pdf'],
                            ['label' => 'Clean, Sanitize, Decontaminate Brochure','file' => 'Electrolux_WhitePaper_CleaningSolution.pdf'],
                            ['label' => 'Line 6000 Tumble Dryers',                'file' => 'EPR-Line6000-DryersBrochure-01072025_EN.pdf'],
                            ['label' => 'Line 6000 Hot Cylinder Ironers',         'file' => 'EPR-Brochure Line 6000-Hot_Cylinder_Ironers-ENG-2023_LR.pdf'],
                        ] as $pdf)
                        <li>
                            @if($pdf['file'])
                            <a href="/pdfs/{{ $pdf['file'] }}" target="_blank" download class="flex items-center gap-2 font-body text-sm text-white/80 hover:text-white transition-colors">
                                <svg class="w-4 h-4 flex-shrink-0 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                                {{ $pdf['label'] }}
                            </a>
                            @else
                            <span class="flex items-center gap-2 font-body text-sm text-white/30">
                                <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                                {{ $pdf['label'] }}
                            </span>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Discover box --}}
                <div class="bg-bg border border-border rounded-2xl p-6">
                    <h4 class="font-heading font-bold text-navy text-base mb-4">Discover</h4>
                    <ul class="space-y-3">
                        @foreach([
                            ['label' => 'Service & Maintenance Contracts', 'route' => 'service-contracts'],
                            ['label' => 'Full Equipment Range',            'route' => 'equipment'],
                            ['label' => 'Request a Site Assessment',       'route' => 'contact'],
                        ] as $link)
                        <li>
                            <a href="{{ route($link['route']) }}" class="flex items-center gap-2 font-body text-sm text-navy hover:text-orange font-semibold transition-colors">
                                <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                                </svg>
                                {{ $link['label'] }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>



<!-- ERGOCERT 4-STAR BAND -->
<section class="bg-navy border-y border-border overflow-hidden">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-5 min-h-[480px]">

            {{-- Left panel --}}
            <div class="lg:col-span-2 flex flex-col justify-center py-16 lg:py-20 lg:pr-12 lg:border-r border-white/10">
                <p class="font-body text-xs font-bold uppercase tracking-widest text-[#148af4] mb-4">ERGOCERT 4-Star Certified</p>
                <p class="font-heading font-bold text-white text-5xl lg:text-6xl leading-none mb-1">Experience</p>
                <p class="font-heading font-bold text-white text-6xl lg:text-7xl leading-none mb-4">4-stars</p>
                <div class="flex gap-1 mb-6">
                    @for($s = 0; $s < 4; $s++)
                    <svg class="w-7 h-7 text-[#148af4]" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    @endfor
                </div>
                <p class="font-body text-gray-300 text-base leading-relaxed mb-3">
                    Our entire Line 6000 range — Barrier Washers, Tumble Dryers, and Ironers — has earned the prestigious <strong class="text-white">4-star ERGOCERT rating for ergonomics</strong>, the highest international certification available.
                </p>
                <p class="font-body text-gray-300 text-sm leading-relaxed mb-4">
                    Processing an average of <strong class="text-white">600 sheets daily</strong> means actions are repeated constantly. A user-friendly and intuitive solution greatly contributes to achieving the best output with the least effort from the operator's side.
                </p>
                <p class="font-body text-[#148af4] text-sm leading-relaxed">
                    Every product has been user-tested to ensure your operators feel reduced tension and strain — so they, and your business, can thrive.
                </p>
            </div>

            {{-- Right panel: 4 icon rows --}}
            <div class="lg:col-span-3 flex flex-col justify-center py-16 lg:py-20 lg:pl-12 divide-y divide-white/10">
                @foreach([
                    ['icon' => 'International standards.png', 'title' => 'Designed with international standards of excellence in mind', 'body' => 'to achieve the highest level of safety and technical certifications.'],
                    ['icon' => 'Musculoskeletal.png',         'title' => 'Proven to reduce musculoskeletal disorders',                   'body' => 'as a result of body analysis trials whilst operating machinery.'],
                    ['icon' => 'User-appliance synergy.png',  'title' => 'User-appliance synergy',                                       'body' => 'based on years of testing the interaction between operator and appliance to create an intuitive and effortless experience.'],
                    ['icon' => 'Human-centered design.png',   'title' => '360° human-centered certified design',                         'body' => 'at the core of the rigorous development process.'],
                ] as $star)
                <div class="flex items-start gap-5 py-6 first:pt-0 last:pb-0">
                    <div class="w-14 h-14 rounded-xl overflow-hidden flex-shrink-0 border border-white/10">
                        <img src="/images/healthcare/{{ $star['icon'] }}" alt="{{ $star['title'] }}" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <p class="font-heading font-bold text-white text-base mb-1">{{ $star['title'] }}</p>
                        <p class="font-body text-gray-300 text-sm leading-relaxed">{{ $star['body'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

<!-- 7. HEALTHCARE EQUIPMENT -->
<section class="py-16 lg:py-24 bg-white border-y border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-10 reveal">
            <div class="max-w-2xl">
                <x-pretitle label="Suggested Equipment" />
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl">
                    Suggested equipment through the healthcare route
                </h2>
            </div>
            <a href="{{ route('equipment') }}"
               class="flex-shrink-0 inline-flex items-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-semibold px-6 py-3 rounded-lg text-sm transition-colors duration-200">
                Browse all equipment
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

        @php $items = [
            [
                'img'     => 'line6000-barrier-washer',
                'name'    => 'Line 6000 Barrier Washers',
                'heading' => 'Hygienic separation without compromise.',
                'body'    => 'The Line 6000 Barrier Washer range is the first commercial washer to achieve third-party ERGOCERT ergonomic certification — engineered to ease operator strain while maintaining the strictest hygiene standards. The clean/dirty barrier is built into the machine itself, not managed by procedure. Physical separation of soiled and clean zones eliminates cross-contamination risk at source — the standard required by healthcare environments operating under infection control protocols.',
            ],
            [
                'img'     => 'line6000-tumble-dryer',
                'name'    => 'Line 6000 Tumble Dryers',
                'heading' => 'Precision drying for high-demand healthcare cycles.',
                'body'    => 'The Line 6000 Tumble Dryer range carries a 4-star ERGOCERT rating and features Moisture Balance technology — automatically sensing residual moisture in each load and adjusting the cycle to dry precisely without overdrying. This protects textile integrity across high-volume linen cycles, reduces energy consumption, and supports the continuous throughput healthcare laundry demands around the clock.',
            ],
            [
                'img'     => 'line6000-ironer',
                'name'    => 'Line 6000 Ironers',
                'heading' => 'Finishing equipment built for healthcare throughput.',
                'body'    => 'The Line 6000 Ironer range is equipped with DIAMMS™ — Direct Adaptive Ironing Motor Management System — which adjusts roller pressure and speed in real time to the textile being processed. Hygiene Guard certification confirms the system meets the hygiene standards required for linen finishing in clinical and care environments. Designed for consistent output, shift after shift.',
            ],
        ]; @endphp

        <div class="border-t border-gray-100">
            @foreach($items as $i => $item)
            <div x-data="{ open: false }" class="border-b border-gray-100">

                {{-- Accordion header --}}
                <button @click="open = !open"
                        class="w-full flex items-center justify-between py-6 text-left group">
                    <span class="font-heading font-bold text-navy text-lg lg:text-xl">{{ $item['name'] }}</span>
                    <span class="ml-4 flex-shrink-0 text-gray-400 group-hover:text-navy transition-colors duration-200">
                        <svg x-show="!open" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                        <svg x-show="open" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15"/></svg>
                    </span>
                </button>

                {{-- Accordion body --}}
                <div x-show="open" x-collapse class="pb-10">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                        <div>
                            <h3 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-5">{{ $item['heading'] }}</h3>
                            <p class="font-body text-gray-600 leading-relaxed mb-8">{{ $item['body'] }}</p>
                            <a href="{{ route('equipment') }}"
                               class="inline-flex items-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-semibold px-6 py-3 rounded-lg text-sm transition-colors">
                                View equipment
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                            </a>
                        </div>
                        <div class="flex items-center justify-center h-80">
                            <img src="/images/equipment/{{ $item['img'] }}.webp"
                                 alt="{{ $item['name'] }}"
                                 class="max-h-full max-w-full object-contain">
                        </div>
                    </div>

                    @if($i === 2)
                    {{-- Ironers: left patches + right benefits --}}
                    <div class="mt-8 bg-white rounded-2xl border border-gray-100 p-8">
                        <div class="flex flex-col">
                            {{-- Left: 3 ironer patches --}}
                            <div class="flex flex-col h-full divide-y divide-gray-100">
                                <div class="flex items-center gap-5 py-5 first:pt-0 flex-1">
                                    <img src="/images/healthcare/HygieneGuard.png" alt="Hygiene Guard" class="w-24 h-24 object-contain flex-shrink-0">
                                    <div>
                                        <p class="font-heading font-bold text-navy text-base leading-snug mb-1">Maximum hygiene and performance</p>
                                        <p class="font-body text-gray-600 text-sm leading-relaxed">Using <strong class="text-navy">DIAMMS™</strong> technology, the Line 6000 Flatwork Ironers automatically adapt the cylinder speed to the moisture in the linen. <strong class="text-navy">Hygiene Guard</strong> will automatically reject any linen that does not comply with the prescribed humidity parameters set by RABC standards.</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-5 py-5 flex-1">
                                    <img src="/images/healthcare/Diamms.png" alt="DIAMMS" class="w-24 h-24 object-contain flex-shrink-0">
                                    <div>
                                        <p class="font-heading font-bold text-navy text-base leading-snug mb-1">Pure Hygiene: Flawless Dry Linen Delivery</p>
                                        <p class="font-body text-gray-600 text-sm leading-relaxed"><strong class="text-navy">Hygiene Guard</strong>, in conjunction with DIAMMS™, will automatically reject any linen if it does not comply with the prescribed humidity parameters set by the RABC standards.</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-5 py-5 flex-1">
                                    <img src="/images/healthcare/Dubixium.png" alt="Dubixium" class="w-24 h-24 object-contain flex-shrink-0">
                                    <div>
                                        <p class="font-heading font-bold text-navy text-base leading-snug mb-1">+30% extra productivity and unique performance</p>
                                        <p class="font-body text-gray-600 text-sm leading-relaxed">No more overheating, no loss of production ever again, thanks to the <strong class="text-navy">Dubixium™</strong> cylinder. Heat is always evenly distributed throughout the length of your ironer by means of a patented thermal oil flow inside the cylinder. No need for steam for brilliant results.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if($i === 0)
                    {{-- Enhanced usability block — barrier washers only --}}
                    <div class="mt-8 bg-white rounded-2xl border border-gray-100 p-8">
                        <div class="flex flex-col">
                            {{-- Left: 3 patches --}}
                            <div class="flex flex-col h-full divide-y divide-gray-100">
                                <div class="flex items-center gap-5 py-5 flex-1">
                                    <img src="/images/healthcare/automatic-door-locking.png" alt="Automatic Door Locking" class="w-24 h-24 object-contain flex-shrink-0">
                                    <div>
                                        <p class="font-heading font-bold text-navy text-base leading-snug mb-1">Lightening the workload</p>
                                        <p class="font-body text-gray-600 text-sm leading-relaxed">Our external door handle with built-in locking device <strong class="text-navy">locks/unlocks automatically before/after the washing cycle</strong> — making loading and unloading much easier.</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-5 py-5 flex-1">
                                    <img src="/images/healthcare/HygieneWatchdog.png" alt="Hygiene Watchdog" class="w-24 h-24 object-contain flex-shrink-0">
                                    <div>
                                        <p class="font-heading font-bold text-navy text-base leading-snug mb-1">Your Hygiene Partner</p>
                                        <p class="font-body text-gray-600 text-sm leading-relaxed">The Electrolux Professional Hygiene Watchdog (HW) ensures full-cycle completion so that all laundry is <strong class="text-navy">fully washed and thoroughly decontaminated</strong>. This guarantees maximum defence against the spread of microorganisms and cross infections.</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-5 py-5 flex-1">
                                    <img src="/images/healthcare/EfficientDosing.png" alt="Efficient Dosing" class="w-24 h-24 object-contain flex-shrink-0">
                                    <div>
                                        <p class="font-heading font-bold text-navy text-base leading-snug mb-1">Precision dosage</p>
                                        <p class="font-body text-gray-600 text-sm leading-relaxed">Reduce detergent consumption to a minimum for maximum efficiency. The precise amount of <strong class="text-navy">detergent and water needed will be added automatically in proportion to the weight of the load</strong>, eliminating waste and boosting performance.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if($i === 1)
                    {{-- Tumble Dryers: 3 feature patches --}}
                    <div class="mt-8 bg-white rounded-2xl border border-gray-100 p-8">
                        <div class="flex flex-col divide-y divide-gray-100">

                            <div class="flex items-center gap-5 py-5 first:pt-0">
                                <img src="/images/healthcare/MoistureBalance.png" alt="Moisture Balance" class="w-24 h-24 object-contain flex-shrink-0">
                                <div>
                                    <p class="font-heading font-bold text-navy text-base leading-snug mb-1">Moisture Balance</p>
                                    <p class="font-body text-gray-600 text-sm leading-relaxed">The <strong class="text-navy">Moisture Balance</strong> function measures the exact residual moisture level of the linen throughout the drying process and automatically stops the cycle once the desired level of hygienic dryness is achieved.</p>
                                </div>
                            </div>

                            <div class="flex items-center gap-5 py-5">
                                <img src="/images/healthcare/DrumSpeed.png" alt="Drum Speed" class="w-24 h-24 object-contain flex-shrink-0">
                                <div>
                                    <p class="font-heading font-bold text-navy text-base leading-snug mb-1">Best result with all fabrics</p>
                                    <p class="font-body text-gray-600 text-sm leading-relaxed">Maximize throughput using the <strong class="text-navy">Drum Speed</strong> feature. It adapts the speed of the drum and mechanical action to the fabric type to dry garments as quickly as possible.</p>
                                </div>
                            </div>

                            <div class="flex items-center gap-5 py-5 last:pb-0">
                                <img src="/images/healthcare/AdaptativeFan.png" alt="Adaptive Fan" class="w-24 h-24 object-contain flex-shrink-0">
                                <div>
                                    <p class="font-heading font-bold text-navy text-base leading-snug mb-1">High performance, less noise</p>
                                    <p class="font-body text-gray-600 text-sm leading-relaxed">The <strong class="text-navy">Adaptive Fan control</strong> function automatically adjusts the fan speed to the weight of the load. This not only saves energy but ensures an even drying result.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endif
                </div>

            </div>
            @endforeach
        </div>

    </div>
</section>

<!-- 9. ASSESSMENT FORM -->
<section id="healthcare-assessment" class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 items-stretch">

            <div class="bg-navy rounded-2xl p-8 flex flex-col reveal reveal-left">
                <div class="flex items-center gap-2 mb-5">
                    <span class="w-2 h-2 rounded-full bg-[#148af4] flex-shrink-0"></span>
                    <span class="font-body text-xs font-bold uppercase tracking-widest text-gray-400">Healthcare Assessment</span>
                </div>
                <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl mb-4">
                    Request a healthcare laundry assessment.
                </h2>
                <p class="font-body text-gray-400 text-sm leading-relaxed mb-8 flex-1">
                    Site context, hygiene requirements, equipment logic, and the right support structure — one conversation.
                </p>
                <div class="flex flex-col sm:flex-row gap-3">
                    <button form="healthcare-form" type="submit"
                        class="inline-flex items-center justify-center bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-6 py-3 rounded-lg text-sm transition-colors duration-200">
                        Submit Request
                    </button>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center border border-white/30 hover:border-white text-white font-body font-semibold px-6 py-3 rounded-lg text-sm transition-colors duration-200 hover:bg-white/10">
                        Talk to an Engineer
                    </a>
                </div>
            </div>

            <div class="bg-white border border-border rounded-2xl p-8 reveal reveal-right">
                <h3 class="font-heading font-bold text-navy text-xl mb-1">Request Healthcare Assessment</h3>
                <p class="font-body text-gray-500 text-sm mb-6">Only the information needed — context, site, and follow-up priority.</p>
                <form id="healthcare-form" action="{{ route('contact') }}" method="POST" class="space-y-3">
                    @csrf
                    <div class="grid grid-cols-2 gap-3">
                        <input type="text" name="name" required placeholder="Full Name"
                            class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors">
                        <input type="text" name="organisation" placeholder="Organisation"
                            class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors">
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <input type="email" name="email" required placeholder="Email Address"
                            class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors">
                        <input type="tel" name="phone" placeholder="Phone Number"
                            class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors">
                    </div>
                    <input type="text" name="site_type" placeholder="Site Type / Healthcare Context"
                        class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors">
                    <textarea name="message" rows="3" placeholder="What do you need help with?"
                        class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors resize-none"></textarea>
                    <textarea name="context" rows="2" placeholder="Operational Context / Hygiene Requirement / Urgency"
                        class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors resize-none"></textarea>
                    <button type="submit"
                        class="w-full bg-navy hover:bg-steel text-white font-body font-bold px-8 py-3.5 rounded-lg text-sm transition-colors duration-200">
                        Submit Request
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection
