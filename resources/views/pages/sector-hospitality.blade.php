@extends('layouts.app')

@section('meta')
<meta name="description" content="Hospitality laundry support for hotels and hospitality sites — equipment selection, installation, service contracts, repairs, parts and aftercare across Ireland.">
@endsection

@section('content')

<!-- 1. HERO -->
<section class="relative overflow-hidden flex flex-col" style="height:720px; min-height:560px;">
    <img src="/images/Hospitallity/HospitallityHero1.png" alt="Hospitality laundry installation"
         class="absolute inset-0 w-full h-full object-cover" style="object-position: 50% 20%;">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.75) 0%, rgba(1,30,65,0.4) 50%, transparent 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto w-full px-4 sm:px-6 lg:px-8 2xl:px-16 py-24 lg:py-32">
            <div class="max-w-5xl reveal reveal-left">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Hospitality Laundry Support</p>
                <h1 class="font-heading font-bold text-white text-3xl lg:text-5xl leading-tight mb-4">
                    Protect <span style="color:#148af4;">guest standards</span> when linen flow,<br>housekeeping and peak periods<br>are under pressure
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl">
                    Hotels, guesthouses and hospitality sites depend on clean towels, bedding, robes, uniforms and guest items moving on time. Irish Laundry Systems helps properties specify, rent, maintain and support Electrolux Professional laundry equipment around guest standards, operating cost and daily service pressure.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#hospitality-assessment"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Hospitality Assessment
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

@include('components.partner-strip')

<!-- INTRO COMMERCIAL BLOCK -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Built for Hospitality</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight">
                    Hospitality laundry is not only a housekeeping task. It is a <span style="color:#148af4;">guest-standard and cost-control issue</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    Towels, bedding, robes, table linen, uniforms and guest items all affect room readiness, housekeeping rhythm and guest perception. Poor equipment fit can increase energy use, water use, detergent waste, linen delays, staff pressure, outsourcing cost and replacement pressure.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Irish Laundry Systems helps hospitality sites connect equipment choice, rental, preventive maintenance, repairs and aftercare around how the property actually runs.
                </p>
                <a href="{{ route('equipment') }}"
                   class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-base transition-colors duration-200">
                    See the equipment we provide
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- HOSPITALITY LAUNDRY PRIORITIES BENTO -->
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Hospitality Priorities</p>
            <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl leading-tight mb-3">
                Hospitality laundry should protect <span style="color:#148af4;">guest experience</span>, not create pressure behind the scenes
            </h2>
            <p class="font-body text-gray-500 text-sm leading-relaxed whitespace-nowrap">
                The right laundry setup helps hotels manage linen availability, housekeeping pressure, peak periods, finishing standards and support around the installed base.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-3">

            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/Linen turnaround.jpg" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Linen turnaround</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Support for bedding, towels, robes, table linen, uniforms and guest items moving through daily service.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/Housekeeping pressure.jpg" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Guest-facing quality</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Controlled washing, drying and finishing help protect linen feel, presentation and room standards.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/Finishing and presentation.jpg" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Peak-period capacity</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Equipment matched to occupancy pressure, housekeeping rhythm and daily linen demand.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/Peak occupancy planning.jpg" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Energy and dosing control</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Automatic Savings, Integrated Savings, Efficient Dosing and Heat Pump technology support lower running pressure.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-2 lg:col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/Service and parts support.jpg" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Operator-friendly use</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">CompassPro, ClarusVibe and ergonomic design support easier use, training and staff routines.</p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Financial Performance Bento: metric cards --}}
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Financial Performance</p>
            <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl leading-tight mb-3 whitespace-nowrap">
                Stop hotel laundry costs quietly building into the <span style="color:#148af4;">guest experience</span>
            </h2>
            <p class="font-body text-gray-500 text-sm leading-relaxed">
                In hospitality, laundry cost can build through energy use, detergent waste, linen replacement, outsourcing, slow turnaround, staff time and reactive repairs.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-x-8 gap-y-10">

            {{-- Metric 1 --}}
            <div class="flex flex-col gap-2 col-span-1">
                <span class="font-body font-bold text-[#148af4] text-base">Up to</span>
                <div class="flex items-center gap-3">
                    <div class="font-heading font-bold text-[#148af4] text-4xl leading-none">65%</div>
                    <svg class="w-7 h-7 text-[#148af4] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-sm leading-snug">dryer energy saving</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">Electrolux Professional Heat Pump dryer technology can save up to 65% on energy consumption in suitable applications.</p>
            </div>

            {{-- Metric 2 --}}
            <div class="flex flex-col gap-2 col-span-1">
                <span class="font-body font-bold text-[#148af4] text-base">Over</span>
                <div class="flex items-center gap-3">
                    <div class="font-heading font-bold text-[#148af4] text-4xl leading-none">30%+</div>
                    <svg class="w-7 h-7 text-[#148af4] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z"/></svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-sm leading-snug">detergent-cost saving</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">Efficient Dosing can save over 30% on detergent costs by helping use only the right amount of detergent at each cycle.</p>
            </div>

            {{-- Metric 3 --}}
            <div class="flex flex-col gap-2 col-span-1">
                <span class="font-body font-bold text-[#148af4] text-base invisible">Up to</span>
                <div class="flex items-center gap-3">
                    <div class="font-heading font-bold text-[#148af4] text-4xl leading-none">90%</div>
                    <svg class="w-7 h-7 text-[#148af4] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/></svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-sm leading-snug">lifecycle cost pressure</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">Electrolux Professional highlights that upfront investment can be only 10% of washer or dryer cost, while water, energy and chemicals make up the majority of lifecycle cost.</p>
            </div>

            {{-- Metric 4 --}}
            <div class="flex flex-col gap-2 col-span-1">
                <span class="font-body font-bold text-[#148af4] text-base invisible">Up to</span>
                <div class="flex items-center gap-3">
                    <div class="font-heading font-bold text-[#148af4] text-4xl leading-none">35<span class="text-2xl">min</span></div>
                    <svg class="w-7 h-7 text-[#148af4] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-sm leading-snug">Heat Pump drying cycle</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">Line 6000 Heat Pump Dryers can complete a cycle in 35 minutes, supporting faster linen movement during busy service periods.</p>
            </div>

            {{-- Business 5 --}}
            <div class="flex flex-col gap-2 col-span-2 lg:col-span-1">
                <div class="flex items-center gap-2">
                    <h3 class="font-heading font-bold text-[#148af4] leading-snug">
                        <span class="text-2xl">Lower<br>outsourcing</span><br>
                        <span class="text-base">and delay pressure</span>
                    </h3>
                    <svg class="w-6 h-6 text-[#148af4] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                </div>
                <p class="font-body text-gray-500 text-sm leading-relaxed">Irish Laundry Systems connects equipment, rental, maintenance, repairs and aftercare so hotels are not forced to manage laundry only when linen flow is already under pressure.</p>
            </div>

        </div>
    </div>
</section>

<!-- FOUR SERVICE CARDS -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Connected Routes</p>
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-3">
                Four ways we support hospitality laundry
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed whitespace-nowrap">
                Hotels and hospitality sites often need equipment, maintenance, response and aftercare to work around the same <span style="color:#148af4;">linen flow</span>, guest standards and busy-period pressure.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach([
                [
                    'title'  => 'Repairs &amp; Call-outs',
                    'text'   => 'For urgent equipment faults that can delay linen turnaround, increase housekeeping pressure or affect guest-facing service.',
                    'cta'    => 'Request Call-out',
                    'route'  => route('repairs'),
                    'img'    => '/images/healthcare/repairs-callouts.jpg',
                    'pos'    => '50% 35%',
                ],
                [
                    'title'  => 'Preventive Contracts',
                    'text'   => 'For hotels that need planned visits, service visibility and fewer reactive maintenance decisions around essential laundry equipment.',
                    'cta'    => 'View Contracts',
                    'route'  => route('service-contracts'),
                    'img'    => '/images/healthcare/Service Contracts.png',
                    'pos'    => 'center 35%',
                ],
                [
                    'title'  => 'Equipment Rental',
                    'text'   => 'For properties that need professional laundry equipment without turning every upgrade into an upfront capital purchase.',
                    'cta'    => 'See Rental Options',
                    'route'  => route('rental'),
                    'img'    => '/images/healthcare/commercial-industrial.jpg',
                    'pos'    => 'center center',
                ],
                [
                    'title'  => 'Support &amp; Aftercare',
                    'text'   => 'For service history, parts access where needed, technical follow-up and clearer maintain, repair, rent or replace decisions.',
                    'cta'    => 'Explore Support Options',
                    'route'  => route('service-contracts'),
                    'img'    => '/images/healthcare/services-overview-hero-portrait.jpg',
                    'pos'    => 'center center',
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

<!-- PLANNING STRIP -->
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.82) 8%, rgba(20,138,244,0.45) 28%, rgba(20,138,244,0.18) 48%, transparent 65%);"></div>
    </div>
    <div class="relative z-10 px-10 lg:px-16 py-10 lg:py-14" style="width:100%; max-width:60%;">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Site Planning</p>
        <h2 class="font-heading font-bold leading-tight mb-4">
            <span class="text-white text-3xl lg:text-5xl block">Designed around your</span>
            <span class="text-3xl lg:text-5xl block" style="color:#011E41;">property, workflow and capacity.</span>
        </h2>
        <p class="font-body text-white text-base lg:text-lg leading-relaxed mb-6">
            Before equipment becomes a cost or service problem, linen volume, laundry room space, housekeeping rhythm, utilities, peak demand and service needs should be understood together.
        </p>
        <div class="flex items-center flex-nowrap gap-0 mb-7">
            @foreach([
                ['icon' => 'ativo-20', 'label' => 'Workflow &amp;<br>layout'],
                ['icon' => 'ativo-10', 'label' => 'Equipment<br>selection'],
                ['icon' => 'ativo-21', 'label' => 'Capacity<br>planning'],
                ['icon' => 'ativo-9',  'label' => 'Service<br>structure'],
            ] as $i => $feat)
            @if($i > 0)
                <div class="w-px h-10 bg-white/30 mx-5 hidden sm:block flex-shrink-0"></div>
            @endif
            <div class="flex items-center gap-3">
                <img src="/images/icons/brand-white/{{ $feat['icon'] }}.svg"
                     style="width:2.4rem;height:2.4rem;flex-shrink:0;" alt="">
                <span class="font-body text-white text-sm font-bold leading-snug">{!! $feat['label'] !!}</span>
            </div>
            @endforeach
        </div>
        <a href="{{ route('contact') }}"
           class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
            Talk to Our Team
        </a>
    </div>
</section>

<!-- DETAILED EQUIPMENT SECTION -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-16 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Electrolux Professional Equipment</p>
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-4">
                Equipment for <span style="color:#148af4;">hospitality laundry</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed whitespace-nowrap">
                The right equipment plan depends on linen volume, turnaround pressure, finishing standards, available space,<br>guest-facing requirements and the support behind the installed base.
            </p>
        </div>

        <div class="flex flex-col divide-y divide-gray-100">

            <!-- 1. COMMERCIAL WASHERS — image left, text right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal">
                <div class="flex flex-col lg:ml-28">
                    <img src="/images/equipment/commercialwasher.webp"
                         alt="Commercial Washer"
                         class="w-full h-96 object-contain object-left-top">
                </div>
                <div class="lg:-ml-20 lg:mt-10">
                    <h3 class="font-heading font-bold text-navy text-4xl lg:text-5xl mb-3">Commercial <strong>Washers</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Commercial washers support bedding, towels, robes, uniforms, guest items and food and beverage linen where wash quality, capacity and repeatable results matter.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Automatic Savings',
                            'Integrated Savings',
                            'Intelligent Dosing',
                            'Efficient Dosing',
                            'Power Balance',
                            'Reduced water, energy and detergent waste',
                        ] as $point)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="font-body text-gray-500 text-sm leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
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

            <!-- 2. TUMBLE DRYERS — text left, image right -->
            <div x-data="{ open: false }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="order-2 lg:order-1">
                    <h3 class="font-heading font-bold text-navy text-4xl lg:text-5xl mb-3">Tumble <strong>Dryers</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                        Tumble dryers support linen turnaround where <span style="color:#148af4;">drying time</span>, residual moisture, energy use and fabric protection affect housekeeping flow through the day.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Up to 65% energy saving with Heat Pump technology',
                            '35-minute Heat Pump drying cycle in suitable applications',
                            'Moisture Balance to avoid overdrying',
                            'Smart Energy Management',
                            'Adaptive Fan for energy and drying control',
                            'Certified ergonomic design',
                        ] as $point)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="font-body text-gray-500 text-sm leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
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
                </div>
                <div class="flex flex-col order-1 lg:order-2 lg:ml-20">
                    <img src="/images/equipment/Tumble-dryers_Heat-Pump_1-1.webp"
                         alt="Line 6000 Tumble Dryer"
                         class="w-full h-96 object-contain object-left-top">
                    <div class="mt-1 pt-3">
                        <button @click="open = !open"
                                class="w-full flex items-center justify-start gap-3 text-left group pl-[20px]">
                            <span class="font-heading font-bold text-navy text-lg">System Features, Moisture Control</span>
                            <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div x-show="open" x-collapse class="py-6 border-t border-gray-100">
                <p class="font-body text-gray-500 text-sm leading-relaxed max-w-2xl">
                    Moisture control helps manage residual moisture through the drying process, supporting fabric care and helping avoid unnecessary over-drying where the selected dryer configuration includes that capability.
                </p>
            </div>
            </div>

            <!-- 3. IRONERS & FINISHING — image left, text right -->
            <div x-data="{ open: false, tab: 'diamms' }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="flex flex-col">
                    <img src="/images/equipment/line6000-ironer.webp"
                         alt="Line 6000 Ironer"
                         class="w-full h-80 object-contain object-left-top">
                    <div class="mt-1 pt-3 w-full">
                        <button @click="open = !open" class="w-full flex items-center justify-start gap-3 text-left group pl-[10px]">
                            <span class="font-heading font-bold text-navy text-lg">System Features, DIAMMS &amp; Hygiene Guard</span>
                            <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </button>
                    </div>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-4xl lg:text-5xl mb-3">Ironers &amp; <strong>Finishing</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Ironers and finishing equipment support <span style="color:#148af4;">linen presentation</span>, flatwork flow, table linen, bedding standards and storage readiness for hospitality service.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Flatwork finishing',
                            'Linen presentation',
                            'Drying consistency',
                            'DIAMMS',
                            'Hygiene Guard',
                            'Finishing quality before storage or return to use',
                        ] as $point)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="font-body text-gray-500 text-sm leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
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
            <div x-show="open" x-collapse class="py-6 border-t border-gray-100">
                <div class="flex gap-6 border-b border-gray-200 mb-8">
                    <button @click="tab = 'diamms'"
                            :class="tab === 'diamms' ? 'border-b-2 border-navy text-navy font-bold' : 'text-gray-400 hover:text-navy'"
                            class="font-heading text-sm pb-3 transition-colors">DIAMMS</button>
                    <button @click="tab = 'hygiene'"
                            :class="tab === 'hygiene' ? 'border-b-2 border-navy text-navy font-bold' : 'text-gray-400 hover:text-navy'"
                            class="font-heading text-sm pb-3 transition-colors">Hygiene Guard</button>
                </div>
                <div x-show="tab === 'diamms'">
                    <h4 class="font-heading font-bold text-navy text-xl mb-4">Maximum hygiene and performance</h4>
                    <div class="flex items-start gap-6 mb-8">
                        <div class="w-32 h-32 flex-shrink-0">
                            <img src="/images/healthcare/Diamms.png" alt="DIAMMS" class="w-full h-full object-contain">
                        </div>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">
                            Electrolux Professional finishing features such as DIAMMS and Hygiene Guard are designed to support moisture-aware finishing and linen handling where the selected ironer configuration includes those capabilities.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                        <div class="relative w-full rounded-2xl overflow-hidden shadow-lg" style="padding-bottom: 56.25%;">
                            <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/KER1S0tcqeE" title="Ironers DIAMMS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div>
                            <h5 class="font-heading font-bold text-navy text-xl mb-3">Extreme customization of the ironing and folding programs</h5>
                            <p class="font-body text-gray-500 text-sm leading-relaxed">FoldFlex ensures the highest quality at the end of the finishing process so that linen can be safely and securely stored, ready for the next use.</p>
                        </div>
                    </div>
                </div>
                <div x-show="tab === 'hygiene'">
                    <h4 class="font-heading font-bold text-navy text-xl mb-4">Pure Hygiene: Flawless Dry Linen Delivery</h4>
                    <div class="flex items-start gap-6 mb-8">
                        <div class="w-32 h-32 flex-shrink-0">
                            <img src="/images/healthcare/HygieneGuard.png" alt="Hygiene Guard" class="w-full h-full object-contain">
                        </div>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">
                            Hygiene Guard, in conjunction with DIAMMS™, will automatically reject any linen if it does not comply with the prescribed humidity parameters set by the RABC standards.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                        <div class="relative w-full rounded-2xl overflow-hidden shadow-lg" style="padding-bottom: 56.25%;">
                            <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/KER1S0tcqeE" title="Ironers Hygiene Guard" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div>
                            <h5 class="font-heading font-bold text-navy text-xl mb-3">Extreme customization of the ironing and folding programs</h5>
                            <p class="font-body text-gray-500 text-sm leading-relaxed">FoldFlex ensures the highest quality at the end of the finishing process so that linen can be safely and securely stored, ready for the next use.</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <!-- 4. DRYING CABINETS — text left, image right -->
            <div x-data="{ open: false }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="order-2 lg:order-1">
                    <h3 class="font-heading font-bold text-navy text-4xl lg:text-5xl mb-3">Drying <strong>Cabinets</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Drying cabinets support gentle drying for delicate garments, outdoor clothing, bulky items, shoes, staff items and guest garments where <span style="color:#148af4;">fabric care</span> matters.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Gentle non-mechanical drying',
                            'Dry 6 kg cotton load in less than 45 minutes',
                            'Heat Pump version available where suitable',
                            'Protection for delicate and bulky items',
                        ] as $point)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="font-body text-gray-500 text-sm leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
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
                <div class="flex flex-col order-1 lg:order-2 lg:ml-20">
                    <img src="/images/healthcare/Drying-cabinets_image.webp"
                         alt="Drying Cabinet"
                         class="w-full h-96 object-contain object-left-top">
                    <div class="mt-1 pt-3">
                        <button @click="open = !open"
                                class="w-full flex items-center justify-start gap-3 text-left group pl-[20px]">
                            <span class="font-heading font-bold text-navy text-sm">System features: Gentle drying, Heat Pump options, garment protection</span>
                            <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div x-show="open" x-collapse class="py-6 border-t border-gray-100">
                <p class="font-body text-gray-500 text-sm leading-relaxed max-w-2xl">
                    Drying cabinets provide gentle non-mechanical drying for delicate and bulky items. A Heat Pump version is available where suitable. A 6 kg cotton load can dry in less than 45 minutes, supporting guest services, staff garments and premium textile care needs.
                </p>
            </div>
            </div>

            <!-- 6. BARRIER WASHERS — image left, text right -->
            <div x-data="{ open: false, tab: 'aido' }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="flex flex-col">
                    <img src="/images/equipment/line6000-barrier-washer.webp"
                         alt="Line 6000 Barrier Washer"
                         class="w-full h-[440px] object-contain object-left-top">
                    <div class="mt-1 pt-3 w-full flex justify-center">
                        <button @click="open = !open" class="inline-flex items-center gap-3 text-left group">
                            <span class="font-heading font-bold text-navy text-lg">System Features, AIDO &amp; Hygiene Watchdog</span>
                            <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="lg:pt-10">
                    <h3 class="font-heading font-bold text-navy text-4xl lg:text-5xl mb-3">Barrier <strong>Washers</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Barrier washers support hospitality sites where controlled dirty-side loading and clean-side unloading are required for specific handling or separation needs.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Dirty-side and clean-side separation',
                            'AIDO controlled loading and unloading',
                            'Hygiene Watchdog full-cycle completion',
                            'Double-drain water recycling where suitable',
                            'Process support for controlled laundry routes',
                        ] as $point)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="font-body text-gray-500 text-sm leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="flex flex-row flex-wrap items-center gap-4">
                        <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy/90 text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            View Equipment
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 border border-[#148af4] text-[#148af4] hover:bg-[#148af4] hover:text-white font-body font-bold px-7 py-4 rounded-lg text-sm transition-colors duration-200 w-fit">
                            Request Assessment
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div x-show="open" x-collapse class="py-6 border-t border-gray-100">
                <p class="font-body text-gray-500 text-sm leading-relaxed max-w-2xl">
                    Electrolux Professional barrier washer features such as Automatic Inner Door Opening (AIDO) and Hygiene Watchdog are designed to support controlled handling, cycle completion and operator access in barrier laundry environments.
                </p>
            </div>
            </div>

        </div>
    </div>
</section>

@include('components.why-choose-strip', [
    'body' => 'For hotels facing replacement pressure, expansion, seasonal demand or outsourcing cost, rental can keep laundry moving without turning every equipment decision into an immediate capital purchase.',
])

@include('components.equipment-categories', [
    'heading'   => 'Equipment categories for hospitality laundry.',
    'equipment' => [
        ['img' => 'commercialwasher',        'name' => 'Commercial Washers',   'desc' => 'For bedding, towels, robes, uniforms, guest items and food-and-beverage linen.',                          'box' => 270],
        ['img' => 'Tumble-dryers_Heat-Pump_1-1',   'name' => 'Tumble Dryers',        'desc' => 'For drying flow, energy control and steady linen turnaround through the day.',                            'box' => 245],
        ['img' => 'IB623_FRONT_NEW', 'ext' => 'jpg', 'name' => 'Ironers &amp; Flatwork', 'desc' => 'For linen finishing, presentation and storage readiness in hospitality service.'],
        ['img' => 'drying-cabinet', 'src' => '/images/healthcare/Drying-cabinets_image.webp', 'name' => 'Drying Cabinets', 'desc' => 'For delicate garments, bulky items, shoes, guest items and fabric-care needs.', 'box' => 260],
        ['img' => 'line6000-barrier-washer', 'name' => 'Barrier Washers',      'desc' => 'For sites where dirty-side and clean-side handling need controlled separation.',                          'box' => 270],
    ],
])

<!-- PROCESS BLOCK -->
<section class="py-14 lg:py-20 bg-white">
    <div class="max-w-screen-xl mx-auto px-6 sm:px-10 lg:px-20 text-center">
        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Process</p>
        <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-3">
            Our process keeps the <span style="color:#148af4;">next step</span> clear
        </h2>
        <p class="font-body text-gray-500 text-base mb-12 max-w-xl mx-auto leading-relaxed">
            From the first property assessment through to equipment, rental, maintenance and aftercare, each step should make the next decision easier.
        </p>
        <div class="flex flex-col sm:flex-row items-start justify-between">

            @foreach([
                ['title' => 'Understand the property laundry flow',          'text' => 'Review linen volume, room space, housekeeping rhythm, peak demand, utilities and current pressure points.',              'icon' => 'clipboard'],
                ['title' => 'Match equipment to guest standards and cost pressure', 'text' => 'Recommend the right washer, dryer, finishing setup, rental route, textile-care option or replacement plan.',    'icon' => 'Ativo%204'],
                ['title' => 'Connect service, rental and aftercare',         'text' => 'Link the installed equipment to preventive maintenance, repairs, service history and follow-up.',                       'icon' => 'Ativo%206'],
                ['title' => 'Move to assessment',                            'text' => 'Turn the property, equipment setup and service model into a practical next step.',                                       'icon' => 'Ativo%203'],
            ] as $i => $step)

            @if($i > 0)
            <div class="hidden sm:flex flex-shrink-0 items-center pt-6 lg:pt-8 px-1 lg:px-2">
                <svg class="w-10 lg:w-14 h-3" viewBox="0 0 80 12" fill="none">
                    <path d="M2 6 L70 6 M62 1 L70 6 L62 11" stroke="#148af4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            @endif

            <div class="flex flex-col items-center flex-1 min-w-0 mb-8 sm:mb-0">
                <img src="/images/icons/brand/{{ $step['icon'] }}.svg" alt=""
                     class="mx-auto mb-4"
                     style="width:2.8rem;height:2.8rem;filter:brightness(0) saturate(100%) invert(35%) sepia(96%) saturate(1500%) hue-rotate(196deg) brightness(103%);">
                <h3 class="font-heading font-bold text-navy text-sm lg:text-base mb-1">{{ $step['title'] }}</h3>
                <p class="font-body text-gray-500 text-xs leading-relaxed max-w-[150px] mx-auto">{{ $step['text'] }}</p>
            </div>

            @endforeach

        </div>
    </div>
</section>

@include('components.service-contracts-strip', [
    'headingLine1' => 'Keep equipment,<br>service history and aftercare',
    'headingLine2' => 'connected around guest standards',
    'body'         => 'Planned maintenance, service history and aftercare help hospitality sites keep laundry equipment easier to manage after installation, rental, repair or replacement.',
])

@include('components.testimonials')

@include('components.proof-bar')

@include('components.faq', [
    'eyebrow' => 'Hospitality Laundry FAQs',
    'heading' => 'Questions before requesting a hospitality laundry assessment',
    'faqs' => [
        ['question' => 'What types of hospitality sites do you work with?',            'answer' => 'Irish Laundry Systems works with hotels, guesthouses, serviced apartments, hostels and hospitality sites where linen flow, guest standards, housekeeping rhythm and laundry equipment continuity matter.'],
        ['question' => 'Can you help us decide whether in-house laundry makes sense?', 'answer' => 'Yes. We can review linen volume, outsourcing pressure, room space, utilities, staffing rhythm, equipment needs and service requirements to understand whether purchase, rental or a phased approach is the right route.'],
        ['question' => 'Can professional laundry equipment reduce operating costs?',   'answer' => 'Selected Electrolux Professional technologies can help reduce energy, water and detergent use. Examples include Heat Pump drying, Automatic Savings, Integrated Savings, Intelligent Dosing and Efficient Dosing, depending on the equipment and site configuration.'],
        ['question' => 'Can you support busy hotels during peak periods?',             'answer' => 'Yes. Irish Laundry Systems can help match equipment capacity, drying speed, finishing needs and service support to periods where occupancy, linen turnaround and housekeeping pressure are higher.'],
        ['question' => 'Is rental an option instead of purchasing equipment outright?', 'answer' => 'Yes. Equipment Rental can be discussed where a hospitality site needs replacement, expansion or continuity without immediate capital purchase.'],
        ['question' => 'Can you support guest laundry or self-service laundry areas?', 'answer' => 'Yes. We can advise on suitable equipment for guest laundry areas, including easy-to-use machines, payment options where relevant, space planning and support needs.'],
        ['question' => 'Do you support premium garment care or valet laundry?',        'answer' => 'Yes. Electrolux Professional options such as lagoon Advanced Care and Drying Cabinets can support delicate garments, guest items, uniforms, leathers, shoes and premium textile-care needs where suitable for the property.'],
        ['question' => 'What happens after installation?',                             'answer' => 'Support can continue through Preventive Maintenance Contracts, Repairs & Call-outs, Equipment Rental support and Support & Aftercare, including service history, technical follow-up and parts access where needed.'],
    ],
])

@include('components.cta-downtime-form', [
    'pageSource'  => 'hospitality_cta',
    'heading'     => 'Ready to understand what your hotel laundry is costing you?',
    'body'        => 'Talk to Irish Laundry Systems about your property, linen volume, current equipment, outsourcing pressure and service needs. We will help confirm the right next step.',
    'formTitle'   => 'Request a Hospitality Laundry Assessment',
    'buttonText'  => 'Request Hospitality Assessment',
])

@endsection
