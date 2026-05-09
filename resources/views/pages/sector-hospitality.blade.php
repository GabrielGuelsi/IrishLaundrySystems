@extends('layouts.app')

@section('meta')
<meta name="description" content="Engineering-led commercial laundry support for hotels and hospitality — barrier washers, service contracts, and priority response across Ireland.">

@endsection

@section('content')

<!-- 1. HERO -->
<section class="relative overflow-hidden flex flex-col" style="height:720px; min-height:560px;">
    <!-- Background image -->
    <img src="/images/Hospitallity/HospitallityHero1.png" alt="Hospitality laundry installation"
         class="absolute inset-0 w-full h-full object-cover" style="object-position: 50% 20%;">
    <!-- Content -->
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-24 lg:py-32">
            <div class="max-w-2xl reveal reveal-left">
                <h1 class="font-heading font-bold text-navy text-4xl lg:text-6xl leading-tight mb-8">
                    Hygiene control and<br>operational continuity<br>for hospitality laundry.
                </h1>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#hospitality-assessment"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Hospitality Assessment
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 border-2 border-navy hover:border-navy/70 text-navy font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-navy/10">
                        Talk to an Engineer
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('components.partner-strip')

@include('components.proof-bar')

<!-- 3. SPLIT STATEMENT -->
<section class="py-16 lg:py-24 bg-gray-50 border-b border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-gray-900 text-4xl lg:text-5xl leading-tight">
                    We work with hotels and hospitality businesses across Ireland.
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-xl leading-relaxed mb-4">
                    With growing demand for quality guest experiences, you need laundry equipment that <span style="color:#148af4;">won't let you down.</span>
                </p>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-4">
                    Whether it's towels, bedding or staff uniforms, we know you need a <span style="color:#148af4;">consistently reliable laundry operation</span> for your guests — which is why we provide fast, expert support across the Republic of Ireland.
                </p>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-8">
                    We've been keeping hotel laundry rooms running for over <span style="color:#148af4;">37 years.</span> If you need assistance, our network of engineers is just a phone call away.
                </p>
                <a href="{{ route('sectors.hospitality') }}#hospitality-equipment"
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

<!-- PROCESS BLOCK -->
<section class="py-14 lg:py-20 bg-white">
    <div class="max-w-screen-xl mx-auto px-6 sm:px-10 lg:px-20 text-center">
        <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Process</p>
        <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-3">
            Our process keeps the <span style="color:#148af4;">next step</span> clear.
        </h2>
        <p class="font-body text-gray-500 text-base mb-12 max-w-xl mx-auto leading-relaxed">
            A clear four-step path from room review to the next practical recommendation.
        </p>
        <div class="relative grid grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="hidden lg:block absolute top-7 h-px z-0" style="left:12.5%; right:12.5%; background:#148af4; opacity:0.35;"></div>
            @foreach([
                ['title' => 'Assess the room',     'text' => 'Review linen flow, peak demand, housekeeping pressure and available space.',       'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/>'],
                ['title' => 'Match the equipment', 'text' => 'Recommend the right washing, drying, finishing or guest-laundry setup.',          'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z"/>'],
                ['title' => 'Keep support close',  'text' => 'Connect the installed base to service contracts, parts and practical aftercare.',   'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z"/>'],
                ['title' => 'Move to assessment',  'text' => 'Turn the property, equipment setup and support needs into a practical next step.',  'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>'],
            ] as $step)
            <div class="flex flex-col items-center relative z-10">
                <div class="w-14 h-14 rounded-full bg-white flex items-center justify-center mb-5 shadow-sm" style="border:1.5px solid rgba(20,138,244,0.25);">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="#148af4" stroke-width="1.6">
                        {!! $step['icon'] !!}
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-sm lg:text-base mb-1">{{ $step['title'] }}</h3>
                <p class="font-body text-gray-500 text-xs leading-relaxed max-w-[160px]">{{ $step['text'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- HOSPITALITY LAUNDRY PRIORITIES BENTO -->
<section class="py-12 lg:py-16" style="background:#f5f5f7;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Hospitality Laundry Priorities</p>
            <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl leading-tight mb-3">
                Hospitality laundry should protect <span style="color:#148af4;">guest experience</span>, not create pressure behind the scenes.
            </h2>
            <p class="font-body text-gray-500 text-sm leading-relaxed max-w-3xl">
                The right laundry setup helps hotels manage linen availability, housekeeping pressure, peak periods, finishing standards and support around the installed base.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-3">

            <div class="bg-white rounded-xl p-5 flex flex-col gap-3 col-span-1">
                <div class="flex items-center justify-center h-10">
                    <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="#148af4" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-sm leading-snug">Linen turnaround</h3>
                    <p class="font-body text-gray-500 text-xs leading-relaxed">Bedding, towels, robes and flatwork need to move back into use quickly during busy periods.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-3 col-span-1">
                <div class="flex items-center justify-center h-10">
                    <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="#148af4" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-sm leading-snug">Housekeeping pressure</h3>
                    <p class="font-body text-gray-500 text-xs leading-relaxed">Laundry flow affects room readiness, team workload and the rhythm of daily hotel service.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-3 col-span-1">
                <div class="flex items-center justify-center h-10">
                    <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="#148af4" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-sm leading-snug">Finishing and presentation</h3>
                    <p class="font-body text-gray-500 text-xs leading-relaxed">Ironing and flatwork quality support the visual standard guests notice in rooms and service areas.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-3 col-span-1">
                <div class="flex items-center justify-center h-10">
                    <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="#148af4" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-sm leading-snug">Peak occupancy planning</h3>
                    <p class="font-body text-gray-500 text-xs leading-relaxed">The laundry room should be planned around high-demand periods, not only average daily use.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-3 col-span-2 lg:col-span-1">
                <div class="flex items-center justify-center h-10">
                    <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="#148af4" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-sm leading-snug">Service and parts support</h3>
                    <p class="font-body text-gray-500 text-xs leading-relaxed">Maintenance, parts access and aftercare help keep equipment decisions connected after installation.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FOUR SERVICE CARDS -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-8">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-3">
                Four ways we support <span style="color:#148af4;">hospitality laundry</span>.
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-2xl">
                Hotels and hospitality sites often need equipment, maintenance, response and parts support to work together around linen flow and peak demand.
            </p>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                ['title' => 'Repairs &amp; Call-outs',  'text' => 'Engineering support when faults or breakdowns put laundry output, linen availability or room readiness under pressure.', 'cta' => 'Request Call-out',       'route' => route('repairs'),           'img' => '/images/healthcare/repairs-callouts.jpg',         'pos' => 'center 40%'],
                ['title' => 'Service Contracts',         'text' => 'Planned maintenance and service structure for sites that need better control over recurring issues and busy-period risk.',  'cta' => 'View Contracts',           'route' => route('service-contracts'), 'img' => '/images/healthcare/service-contracts-hero.jpg',   'pos' => 'center center'],
                ['title' => 'Equipment Rental',          'text' => 'A practical option for replacement pressure, expansion, seasonal demand or capital control, with equipment installed and supported.', 'cta' => 'See Rental Options',  'route' => route('rental'),            'img' => '/images/healthcare/equipment-rental-hero.jpg',    'pos' => 'center center'],
                ['title' => 'Parts &amp; Aftercare',     'text' => 'Genuine parts access, service history context and practical follow-up support around hospitality laundry equipment.',       'cta' => 'Explore Support Options',  'route' => route('contact'),           'img' => '/images/healthcare/Customer-Care_Line-6000-_001.jpg', 'pos' => '20% center'],
            ] as $card)
            <a href="{{ $card['route'] }}" class="group relative overflow-hidden rounded-2xl block" style="height:400px;">
                <img src="{{ $card['img'] }}" alt="{{ strip_tags($card['title']) }}" loading="lazy"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                     style="object-position: {{ $card['pos'] }};">
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.4) 45%, rgba(1,30,65,0.05) 75%, transparent 100%);"></div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background: rgba(1,30,65,0.88);"></div>
                <div class="absolute inset-0 p-6 flex flex-col justify-end z-10">
                    <div class="opacity-0 group-hover:opacity-100 translate-y-3 group-hover:translate-y-0 transition-all duration-300 mb-4">
                        <p class="font-body text-white/80 text-sm leading-relaxed mb-4">{!! $card['text'] !!}</p>
                        <span class="inline-flex items-center gap-2 bg-[#148af4] text-white font-heading font-bold text-xs px-4 py-2 rounded-lg">
                            {!! $card['cta'] !!}
                            <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </span>
                    </div>
                    <div class="flex items-end justify-between gap-3">
                        <h3 class="font-heading font-extrabold text-white text-2xl lg:text-3xl leading-tight">{!! $card['title'] !!}</h3>
                        <div class="flex-shrink-0 w-9 h-9 rounded-full bg-white/20 group-hover:bg-[#148af4] flex items-center justify-center transition-colors duration-300">
                            <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

@include('components.cta-combined-banner')

<!-- 5. BARRIER WASHERS PRODUCT BLOCK -->

{{-- A2: Navy intro block --}}

<!-- PRODUCTS: Barrier Washers / Tumble Dryers / Ironers -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <!-- Title -->
        <div class="mb-16 reveal">
            <h2 class="font-heading text-navy text-3xl lg:text-4xl leading-tight mb-2">
                Laundry and infection <strong>control solutions</strong>
            </h2>
            <p class="font-body text-navy text-base leading-relaxed">
                Irish Laundry Systems sell/rent , installs and maintains a range of CQC-compliant equipment including washers and dryers.<br>
                Take an extra load off your mind.
            </p>
        </div>

        <div class="flex flex-col divide-y divide-gray-100">

            <!-- 1. COMMERCIAL WASHERS — image left, text right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal">
                <div class="flex flex-col">
                    <img src="/images/equipment/commercialwasher.webp"
                         alt="Commercial Washer"
                         class="w-full h-96 object-contain object-top">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-4xl lg:text-5xl mb-3">Commercial <strong>Washers</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Commercial Washers, built for people and the planet. High productivity front-load washers designed to make laundry operations safe, fast and cost controlled.
                    </p>
                    <div class="flex flex-row flex-wrap items-center gap-4">
                        <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Go to Products
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Request Assessment
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2. Tumble Dryers — text left, image right -->
            <div x-data="{ open: false }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="order-2 lg:order-1">
                    <h3 class="font-heading font-bold text-navy text-4xl lg:text-5xl mb-3">
                        Precision <strong>drying</strong> for <strong>high-demand</strong> hospitality cycles.
                    </h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                        Post-wash flow, drying, flatwork handling, and support continuity all affect whether the clean route remains stable through the day.
                    </p>
                    <div class="flex flex-row flex-wrap items-center gap-4 mb-6">
                        <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Go to Products
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Request Assessment
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                    <div class="font-body text-gray-500 text-sm leading-relaxed">
                        <p class="font-body font-bold text-navy mb-1">Designed for humans, and the environment</p>
                        <p class="font-body">Our Tumble Dryers stand out for their energy efficiency, speed, and certified ergonomic design, while easing the physical strain on laundry operators.<br>
                        This unique combination distinguishes them from all other dryers on the market.</p>
                    </div>
                </div>
                <div class="flex flex-col order-1 lg:order-2">
                    <img src="/images/equipment/line6000-tumble-dryer.webp"
                         alt="Line 6000 Tumble Dryer"
                         class="w-full h-96 object-contain object-left-top">
                    <div class="mt-1 pt-3">
                        <button @click="open = !open"
                                class="w-full flex items-center justify-start gap-3 text-left group pl-[20px]">
                            <span class="font-heading font-bold text-navy text-lg">System Features — Moisture Balance</span>
                            <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div x-show="open" x-collapse class="py-6 border-t border-gray-100">
                <h4 class="font-heading font-bold text-navy text-xl mb-4">Dry not overdry</h4>
                <div class="flex items-start gap-6 mb-8">
                    <div class="w-32 h-32 flex-shrink-0">
                        <img src="/images/healthcare/MoistureBalance.png" alt="Moisture Balance" class="w-full h-full object-contain">
                    </div>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">
                        The Moisture Balance function measures the exact residual moisture level of the linen throughout the drying process and automatically <strong>stops the cycle</strong> once the desired level of hygienic dryness is achieved.
                    </p>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div class="relative w-full rounded-2xl overflow-hidden shadow-lg" style="padding-bottom: 56.25%;">
                        <iframe class="absolute inset-0 w-full h-full"
                                src="https://www.youtube.com/embed/Xm2CpX95zDM"
                                title="Tumble Dryers Ergonomics"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <div>
                        <h5 class="font-heading font-bold text-navy text-xl mb-3">Our dryers have earned the prestigious 4-star rating for ergonomics from ERGOCERT</h5>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">All models have been user-tested to ensure operators will feel less tension and strain, so they—and your hotel laundry—can thrive.</p>
                    </div>
                </div>
            </div>
            </div>

            <!-- 3. Ironers — image left, text right -->
            <div x-data="{ open: false, tab: 'diamms' }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="flex flex-col">
                    <img src="/images/equipment/line6000-ironer.webp"
                         alt="Line 6000 Ironer"
                         class="w-full h-80 object-contain object-top">
                    <div class="mt-1 pt-3 w-full">
                        <button @click="open = !open" class="w-full flex items-center justify-start gap-3 text-left group pl-[10px]">
                            <span class="font-heading font-bold text-navy text-lg">System Features — DIAMMS &amp; Hygiene Guard</span>
                            <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </button>
                    </div>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-4xl lg:text-5xl mb-3">Ironers</h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Deliver perfectly ironed linen to the highest hygiene standards
                    </p>
                    <div class="flex flex-row flex-wrap items-center gap-4">
                        <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Go to Products
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Request Assessment
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Ironers: collapsible features -->
                <div x-show="open" x-collapse class="py-6 border-t border-gray-100">
                    <!-- Tabs -->
                    <div class="flex gap-6 border-b border-gray-200 mb-8">
                        <button @click="tab = 'diamms'"
                                :class="tab === 'diamms' ? 'border-b-2 border-navy text-navy font-bold' : 'text-gray-400 hover:text-navy'"
                                class="font-heading text-sm pb-3 transition-colors">
                            DIAMMS
                        </button>
                        <button @click="tab = 'hygiene'"
                                :class="tab === 'hygiene' ? 'border-b-2 border-navy text-navy font-bold' : 'text-gray-400 hover:text-navy'"
                                class="font-heading text-sm pb-3 transition-colors">
                            Hygiene Guard
                        </button>
                    </div>

                    <!-- DIAMMS Tab -->
                    <div x-show="tab === 'diamms'">
                        <h4 class="font-heading font-bold text-navy text-xl mb-4">Maximum hygiene and performance</h4>
                        <div class="flex items-start gap-6 mb-8">
                            <div class="w-32 h-32 flex-shrink-0">
                                <img src="/images/healthcare/Diamms.png" alt="DIAMMS" class="w-full h-full object-contain">
                            </div>
                            <p class="font-body text-gray-500 text-sm leading-relaxed">
                                Using DIAMMS™ technology, the Line 6000 Flatwork Ironers will automatically adapt the cylinder speed to the amount of moisture in the linen.
                            </p>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                            <div class="relative w-full rounded-2xl overflow-hidden shadow-lg" style="padding-bottom: 56.25%;">
                                <iframe class="absolute inset-0 w-full h-full"
                                        src="https://www.youtube.com/embed/KER1S0tcqeE"
                                        title="Ironers DIAMMS"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                            <div>
                                <h5 class="font-heading font-bold text-navy text-xl mb-3">Extreme customization of the ironing and folding programs</h5>
                                <p class="font-body text-gray-500 text-sm leading-relaxed">FoldFlex ensures the highest quality at the end of the finishing process so that linen can be safely and securely stored, ready for the next bed.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Hygiene Guard Tab -->
                    <div x-show="tab === 'hygiene'">
                        <h4 class="font-heading font-bold text-navy text-xl mb-4">Pure Hygiene: Flawless Dry Linen Delivery</h4>
                        <div class="flex items-start gap-6 mb-8">
                            <div class="w-24 h-24 flex-shrink-0 bg-gray-100 rounded-xl flex items-center justify-center">
                                <span class="font-heading font-bold text-gray-500 text-xs text-center leading-tight">Hygiene<br>Guard</span>
                            </div>
                            <p class="font-body text-gray-500 text-sm leading-relaxed">
                                Hygiene Guard, in conjunction with DIAMMS™, will automatically reject any linen if it does not comply with the prescribed humidity parameters set by the RABC standards.
                            </p>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                            <div class="relative w-full rounded-2xl overflow-hidden shadow-lg" style="padding-bottom: 56.25%;">
                                <iframe class="absolute inset-0 w-full h-full"
                                        src="https://www.youtube.com/embed/KER1S0tcqeE"
                                        title="Ironers Hygiene Guard"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                            <div>
                                <h5 class="font-heading font-bold text-navy text-xl mb-3">Extreme customization of the ironing and folding programs</h5>
                                <p class="font-body text-gray-500 text-sm leading-relaxed">FoldFlex ensures the highest quality at the end of the finishing process so that linen can be safely and securely stored, ready for the next bed.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </div>
    </div>
</section>


<!-- AUTHORISED PARTNER -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 flex flex-col gap-12">


    </div>
</section>

@include('components.why-choose-strip')

@include('components.equipment-categories', ['equipment' => [
    ['img' => 'commercialwasher',         'name' => 'Commercial Washers',    'desc' => 'For broader wash routes and capacity planning.',                   'scale' => '1.75'],
    ['img' => 'line6000-tumble-dryer',    'name' => 'Tumble Dryers',         'desc' => 'For post-wash continuity and room flow.',                          'scale' => '1'],
    ['img' => 'ELS_PH_255x255_IB623_FRONT_NEW', 'ext' => 'jpg', 'name' => 'Ironers & Flatwork',    'desc' => 'For finishing, hygiene presentation, and clean-route continuity.', 'scale' => '1.4'],
    ['img' => 'line6000-barrier-washer',  'name' => 'Barrier Washers',       'desc' => 'For controlled dirty-side and clean-side handling.',               'scale' => '1.55'],
]])

@include('components.service-contracts-strip')

@include('components.testimonials')

@include('components.cta-downtime-form', ['pageSource' => 'hospitality_cta'])

@endsection
