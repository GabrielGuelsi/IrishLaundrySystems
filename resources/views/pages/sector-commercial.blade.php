@extends('layouts.app')

@section('meta')
<meta name="description" content="Commercial and industrial laundry support — equipment, rental, service contracts, repairs, parts and aftercare for high-demand laundry operations across Ireland.">
@endsection

@section('content')

<!-- 1. HERO -->
<section class="relative overflow-hidden flex flex-col" style="height:720px; min-height:560px;">
    <img src="/images/sectors/Line 6000 solutions products_72dpi.jpg" alt="Commercial laundry operation"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.88) 0%, rgba(1,30,65,0.72) 55%, rgba(1,30,65,0.45) 80%, rgba(1,30,65,0.15) 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-24 lg:py-32">
            <div class="flex-1 reveal reveal-left max-w-3xl">
                <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Commercial &amp; Industrial Laundry Support</p>
                <h1 class="font-heading font-bold text-white text-4xl lg:text-6xl leading-tight mb-6">
                    Keep <span style="color:#148af4;">high-demand laundry operations</span><br>under control
                </h1>
                <p class="font-body text-white/80 text-base lg:text-lg leading-relaxed mb-8 max-w-2xl">
                    Irish Laundry Systems supports commercial, industrial, institutional and specialist laundry sites with Electrolux Professional equipment, rental, maintenance, repairs and aftercare built around output, mixed textiles,<br>operating cost and equipment continuity.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#commercial-assessment"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Commercial Assessment
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
        <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3 reveal reveal-left">Built for Operational Sites</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight">
                    Commercial laundry support should be built around <span style="color:#148af4;">load</span>, <span style="color:#148af4;">workflow</span><br>and <span style="color:#148af4;">installed equipment</span>
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    Commercial and industrial laundry sites often run with heavier loads, mixed textiles, staff uniforms, mops, workwear, towels, bedding or specialist items moving through the same room. Poor equipment fit can increase utility cost, detergent waste, handling pressure, repair calls and replacement pressure.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Irish Laundry Systems helps sites connect equipment choice, rental, preventive maintenance, repairs and aftercare around how the laundry operation actually runs.
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

<!-- SEGMENT / APPLICATION CARDS -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-12 reveal">
            <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Where This Fits</p>
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight mb-4">
                Built for demanding commercial, <span style="color:#148af4;">shared-use</span><br><span style="color:#148af4;">and specialist</span> laundry environments
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                From high-volume commercial laundries to self-service, managed residential, leisure, public-sector, workwear and specialist sites,<br>the setup should match how the laundry is actually used every day.
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 reveal">
            @foreach([
                [
                    'title' => 'Heavy-Duty &amp; High-Volume Commercial Laundries',
                    'items' => ['Commercial laundries', 'Industrial laundries', 'Continuous-use laundry rooms'],
                    'icon'  => 'ativo-9',
                    'img'   => '/images/healthcare/commercial-industrial.jpg',
                    'pos'   => 'center center',
                ],
                [
                    'title' => 'Self-Service, Managed Residential, Leisure &amp; Wellness',
                    'items' => ['Laundromats and self-service sites', 'Apartment blocks and managed accommodation', 'Gyms, spas, wellness and leisure facilities'],
                    'icon'  => 'ativo-20',
                    'img'   => '/images/healthcare/services-overview-hero.jpg',
                    'pos'   => 'center center',
                ],
                [
                    'title' => 'Facility Management &amp; Public Sites',
                    'items' => ['Managed buildings and councils', 'Schools and public-sector institutions', 'Multi-use and shared-service environments'],
                    'icon'  => 'ativo-21',
                    'img'   => '/images/healthcare/line-6000-solutions.jpg',
                    'pos'   => 'center 30%',
                ],
                [
                    'title' => 'Workwear, Uniforms &amp; Mixed Textiles',
                    'items' => ['Staff uniforms and workwear', 'Towels, mats and bedding', 'Mixed garments in daily operational routines'],
                    'icon'  => 'ativo-11',
                    'img'   => '/images/healthcare/repairs-callouts.jpg',
                    'pos'   => 'center 35%',
                ],
                [
                    'title' => 'Safety, PPE &amp; Controlled Environments',
                    'items' => ['Fire brigade and emergency services', 'PPE, cleanroom and food processing', 'Contamination-sensitive laundry needs'],
                    'icon'  => 'ativo-7',
                    'img'   => '/images/healthcare/render-double-page_72dpi.jpg',
                    'pos'   => 'center center',
                ],
                [
                    'title' => 'Marine, Transport &amp; Remote Sites',
                    'items' => ['Onboard and offshore facilities', 'Transport and crew-support sites', 'Remote facilities where continuity matters'],
                    'icon'  => 'ativo-6',
                    'img'   => '/images/healthcare/services-overview-hero-portrait.jpg',
                    'pos'   => 'center center',
                ],
            ] as $card)
            <div class="group relative overflow-hidden rounded-2xl" style="height:380px;">
                <img src="{{ $card['img'] }}" alt="{{ strip_tags($card['title']) }}"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                     style="object-position: {{ $card['pos'] }};">
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background:linear-gradient(to top, rgba(1,30,65,0.95) 0%, rgba(1,30,65,0.45) 45%, rgba(1,30,65,0.05) 75%, transparent 100%);"></div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background:rgba(1,30,65,0.90);"></div>
                <div class="absolute inset-0 p-7 flex flex-col justify-end z-10">
                    <ul class="font-body text-white/80 text-sm space-y-2 overflow-hidden max-h-0 opacity-0 group-hover:max-h-40 group-hover:opacity-100 transition-all duration-500 mb-0 group-hover:mb-5">
                        @foreach($card['items'] as $item)
                        <li class="flex items-start gap-2.5">
                            <span class="flex-shrink-0 mt-1.5 w-1.5 h-1.5 rounded-full bg-white/60"></span>
                            <span>{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <h3 class="font-heading font-bold text-white text-xl leading-snug">{!! $card['title'] !!}</h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- TECHNICAL PROOF ICONS -->
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Operational Priorities</p>
            <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl leading-tight mb-3">
                Built around <span style="color:#148af4;">output</span>, <span style="color:#148af4;">equipment load</span> and operating rhythm
            </h2>
            <p class="font-body text-gray-500 text-sm leading-relaxed">
                The right setup helps teams manage volume, mixed textiles, turnaround pressure, utility use and service continuity around the installed base.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-3">

            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/16.png" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Throughput and daily load</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Equipment and service planning shaped around repeated use, shifts and steady output.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/34.png" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Load profile and fabric mix</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Planning for workwear, towels, uniforms, bedding, mops, PPE and specialist textiles.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/26.png" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Utility and dosing control</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Washer, dryer and dosing choices shaped around water, energy, detergent and cycle efficiency.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/5.png" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Operator handling and controls</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">ClarusVibe, CompassPro, ergonomic access and program setup help teams manage daily equipment use more clearly.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-2 lg:col-span-1">
                <div class="flex items-center justify-center h-24">
                    <img src="/images/icons/36.png" alt="" class="w-24 h-24 object-contain">
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Specialist process control</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Barrier, cleanroom, PPE, hygiene-sensitive or controlled-environment routes can be assessed where required.</p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Financial Performance Bento --}}
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Financial Performance</p>
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-[2.75rem] leading-tight mb-3 whitespace-nowrap">
                Stop high-use laundry equipment quietly increasing <span style="color:#148af4;">operating cost</span>
            </h2>
            <p class="font-body text-gray-500 text-sm leading-relaxed">
                In high-demand sites, laundry cost can build through energy use, water use, detergent waste, slow drying, handling pressure, reactive repairs and equipment decisions made too late.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-x-8 gap-y-10">

            {{-- Metric 1 --}}
            <div class="flex flex-col gap-2 col-span-1">
                <span class="font-body font-bold text-[#148af4] text-base invisible">Up to</span>
                <div class="flex items-center gap-3">
                    <div class="font-heading font-bold text-[#148af4] text-4xl leading-none">90%</div>
                    <img src="/images/icons/30.png" alt="" class="w-12 h-12 object-contain flex-shrink-0">
                </div>
                <h3 class="font-heading font-bold text-navy text-sm leading-snug">lifecycle cost pressure</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">Electrolux Professional highlights that upfront investment can be only 10% of washer or dryer cost, while water, energy and chemicals make up the majority of lifecycle cost.</p>
            </div>

            {{-- Metric 2 --}}
            <div class="flex flex-col gap-2 col-span-1">
                <span class="font-body font-bold text-[#148af4] text-base">Up to</span>
                <div class="flex items-center gap-3">
                    <div class="font-heading font-bold text-[#148af4] text-4xl leading-none">65%</div>
                    <img src="/images/icons/7.png" alt="" class="w-12 h-12 object-contain flex-shrink-0">
                </div>
                <h3 class="font-heading font-bold text-navy text-sm leading-snug">dryer energy saving</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">Electrolux Professional Heat Pump dryer technology can save up to 65% on energy consumption in suitable applications.</p>
            </div>

            {{-- Metric 3 --}}
            <div class="flex flex-col gap-2 col-span-1">
                <span class="font-body font-bold text-[#148af4] text-base">Over</span>
                <div class="flex items-center gap-3">
                    <div class="font-heading font-bold text-[#148af4] text-4xl leading-none">30%+</div>
                    <img src="/images/icons/10.png" alt="" class="w-12 h-12 object-contain flex-shrink-0">
                </div>
                <h3 class="font-heading font-bold text-navy text-sm leading-snug">detergent-cost saving</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">Efficient Dosing can save over 30% on detergent costs by helping use the right amount of detergent at each cycle.</p>
            </div>

            {{-- Qualitative 4 --}}
            <div class="flex flex-col gap-2 col-span-1">
                <div class="font-heading font-bold text-[#148af4] text-2xl leading-snug">Less</div>
                <div class="flex items-center gap-4">
                    <div class="font-heading font-bold text-[#148af4] text-2xl leading-snug">strain,</div>
                    <img src="/images/icons/4.png" alt="" class="w-12 h-12 object-contain flex-shrink-0">
                </div>
                <h3 class="font-heading font-bold text-navy text-sm leading-snug">better productivity</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">Electrolux Professional ergonomics material cites a 75% average decrease in sick days, alongside a 59% reduction in Work-related Musculoskeletal Disorders and a 25% productivity increase.</p>
            </div>

            {{-- Qualitative 5 --}}
            <div class="flex flex-col gap-2 col-span-2 lg:col-span-1">
                <div class="font-heading font-bold text-[#148af4] text-2xl leading-snug">Lower</div>
                <div class="flex items-center gap-4">
                    <div class="font-heading font-bold text-[#148af4] text-2xl leading-snug">reactive</div>
                    <img src="/images/icons/11.png" alt="" class="w-12 h-12 object-contain flex-shrink-0">
                </div>
                <h3 class="font-heading font-bold text-navy text-sm leading-snug">cost pressure</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">Irish Laundry Systems connects equipment, rental, preventive maintenance, repairs and aftercare so commercial sites are not forced to make every decision after something fails.</p>
            </div>

        </div>
    </div>
</section>

<!-- FOUR SERVICE CARDS -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-8">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Connected Routes</p>
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-3 whitespace-nowrap">
                Four ways we support <span style="color:#148af4;">commercial and industrial</span> laundry
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed">
                High-load sites often need equipment, rental, maintenance, response and aftercare to work around the same <span style="color:#148af4;">output, usage pressure</span> and installed equipment.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">

            @foreach([
                [
                    'title'  => 'Repairs &amp; Call-outs',
                    'text'   => 'For urgent equipment faults that can interrupt output, delay internal processes or increase pressure on staff.',
                    'cta'    => 'Request Call-out',
                    'route'  => route('repairs'),
                    'img'    => '/images/healthcare/repairs-callouts.jpg',
                    'pos'    => 'center 40%',
                ],
                [
                    'title'  => 'Equipment Rental',
                    'text'   => 'For sites that need professional laundry equipment without turning every upgrade into an upfront capital purchase.',
                    'cta'    => 'See Rental Options',
                    'route'  => route('rental'),
                    'img'    => '/images/healthcare/commercial-industrial.jpg',
                    'pos'    => 'center center',
                ],
                [
                    'title'  => 'Preventive Contracts',
                    'text'   => 'For sites that need planned visits, service visibility and fewer reactive maintenance decisions around high-use equipment.',
                    'cta'    => 'View Contracts',
                    'route'  => route('service-contracts'),
                    'img'    => '/images/healthcare/Service Contracts.png',
                    'pos'    => 'center 35%',
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
             class="w-full h-full object-cover"
             style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.85) 15%, rgba(20,138,244,0.3) 55%, transparent 100%);"></div>
    </div>

    <div class="relative z-10 px-10 lg:px-16 py-10 lg:py-14" style="width:100%; max-width:60%;">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Site Planning</p>
        <h2 class="font-heading font-bold leading-tight mb-4">
            <span class="text-white text-3xl lg:text-5xl block">Designed around your</span>
            <span class="text-3xl lg:text-5xl block" style="color:#011E41;">site, workflow and capacity.</span>
        </h2>
        <p class="font-body text-white text-base lg:text-lg leading-relaxed mb-6">
            Before equipment becomes a cost or service problem, load profile, room layout, utilities, access, daily use and service needs should be understood together.
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

<!-- EQUIPMENT ROUTES -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-16 reveal">
            <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Electrolux Professional Equipment</p>
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-4">
                Equipment routes for <span style="color:#148af4;">high-demand</span> laundry environments
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed whitespace-nowrap">
                The right equipment conversation depends on load profile, fabric mix, throughput pressure, drying demand, finishing needs, available space and the support behind the installed base.
            </p>
        </div>

        <div class="flex flex-col divide-y divide-gray-100">

            <!-- 1. COMMERCIAL WASHERS — image left, text right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal">
                <div class="flex flex-col lg:ml-28">
                    <img src="/images/equipment/commercialwasher.webp"
                         alt="Commercial Washer"
                         class="w-full h-96 object-contain object-top">
                </div>
                <div class="lg:-ml-20 lg:mt-10">
                    <h3 class="font-heading font-bold text-navy text-4xl lg:text-5xl mb-3">Commercial <strong>Washers</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Commercial washers support daily load across workwear, towels, uniforms, bedding, mops and mixed textiles where <span style="color:#148af4;">wash quality, capacity and cycle control</span> matter.
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
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Tumble dryers support <span style="color:#148af4;">post-wash flow</span> where drying time, residual moisture, energy use and fabric protection affect output through the day.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Up to 65% energy saving with Heat Pump technology',
                            'Moisture Balance to avoid overdrying',
                            'Adaptive Fan for energy and drying control',
                            'Smart Energy Management',
                            'Certified ergonomic design',
                            'Reduced drying-cost pressure',
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
                            <span class="font-heading font-bold text-navy text-lg">System Features: Heat Pump, Moisture Balance, Adaptive Fan</span>
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
                        <p class="font-body text-gray-500 text-sm leading-relaxed">All models have been user-tested to ensure operators will feel less tension and strain, so they and your laundry operation can thrive.</p>
                    </div>
                </div>
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
                            <span class="font-heading font-bold text-navy text-lg">System Features: DIAMMS, Hygiene Guard, FoldFlex, Ceramic Burner</span>
                            <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </button>
                    </div>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-4xl lg:text-5xl mb-3">Ironers &amp; <strong>Finishing</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Ironers and finishing equipment support flatwork flow, linen presentation, <span style="color:#148af4;">output consistency</span> and storage readiness where finishing quality matters.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Flatwork finishing',
                            'Output consistency',
                            'Linen presentation',
                            'Drying and finishing control',
                            'Support for repeated high-use environments',
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
                            Using DIAMMS™ technology, the Line 6000 Flatwork Ironers will automatically adapt the cylinder speed to the amount of moisture in the linen.
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

            <!-- 4. DRYING CABINETS / SPECIALIST ITEMS — text left, image right -->
            <div x-data="{ open: false }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="order-2 lg:order-1">
                    <h3 class="font-heading font-bold text-navy text-4xl lg:text-5xl mb-3">Drying Cabinets / <strong>Specialist Items</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Drying cabinets support gentle drying for workwear, protective clothing, bulky items, shoes, gloves and <span style="color:#148af4;">specialist items</span> where fabric protection matters.
                    </p>
                    <ul class="space-y-2 mb-6">
                        @foreach([
                            'Gentle non-mechanical drying',
                            'Dry 6 kg cotton load in less than 45 minutes',
                            'Heat Pump version available where suitable',
                            'Protection for bulky and specialist items',
                            'Useful for PPE, workwear and mixed garment needs',
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
                <h4 class="font-heading font-bold text-navy text-xl mb-4">Gentle drying for specialist items</h4>
                <div class="flex items-start gap-6 mb-8">
                    <div class="w-32 h-32 flex-shrink-0">
                        <img src="/images/healthcare/Drying-cabinets_image.webp" alt="Drying Cabinet" class="w-full h-full object-contain">
                    </div>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">
                        Drying cabinets provide gentle non-mechanical drying for workwear, PPE, protective clothing and bulky items. A Heat Pump version is available where suitable. A 6 kg cotton load can dry in less than 45 minutes, supporting mixed garment care and specialist textile needs.
                    </p>
                </div>
            </div>
            </div>

        </div>
    </div>
</section>

@include('components.why-choose-strip', [
    'body' => 'For commercial and industrial sites facing replacement pressure, expansion, ageing equipment or higher load demand, rental can keep laundry moving without turning every equipment decision into an immediate capital purchase.',
])

@include('components.equipment-categories', [
    'heading' => 'Equipment categories for commercial and industrial laundry.',
])

<!-- PROCESS BLOCK -->
<section class="py-14 lg:py-20 bg-white">
    <div class="max-w-screen-xl mx-auto px-6 sm:px-10 lg:px-20">

        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Process</p>
        <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-3">
            Our process keeps the <span style="color:#148af4;">next step</span> clear
        </h2>
        <p class="font-body text-gray-500 text-base mb-12 max-w-xl leading-relaxed">
            From site assessment through to equipment, rental, maintenance and aftercare, each step should make the next decision easier.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-10">

            @foreach([
                ['title' => 'Understand the site',              'text' => 'Review load profile, space, utilities, access, equipment pressure and operating priorities.',    'icon' => 'clipboard'],
                ['title' => 'Match the equipment',              'text' => 'Recommend the right washing, drying, finishing or specialist setup.',                            'icon' => 'Ativo%204'],
                ['title' => 'Preventive Maintenance Contracts', 'text' => 'Connect the installed base to planned maintenance, service history, parts access and practical aftercare.', 'icon' => 'Ativo%206'],
                ['title' => 'Move to assessment',               'text' => 'Turn the site, equipment route and support needs into a practical next step.',                    'icon' => 'Ativo%203'],
            ] as $i => $step)

            <div class="flex flex-col items-start text-left relative">
                @if($i < 3)
                <div class="hidden lg:block absolute -right-8 top-6 text-[#148af4]">
                    <svg class="w-16 h-8" viewBox="0 0 120 30" fill="none">
                        <path d="M0 15 L96 15 M78 4 L96 15 L78 26" stroke="#148af4" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                @endif
                <div class="w-full flex justify-center mb-4">
                    <img src="/images/icons/brand/{{ $step['icon'] }}.svg" alt=""
                         style="width:4rem;height:4rem;filter:brightness(0) saturate(100%) invert(35%) sepia(96%) saturate(1500%) hue-rotate(196deg) brightness(103%);">
                </div>
                <h3 class="font-heading font-bold text-navy text-sm lg:text-base mb-1">{{ $step['title'] }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $step['text'] }}</p>
            </div>

            @endforeach

        </div>
    </div>
</section>

@include('components.service-contracts-strip', [
    'headingLine1' => 'Keep equipment, service<br>history and aftercare',
    'headingLine2' => 'connected around daily output',
    'body'         => 'Planned maintenance, service history and aftercare help commercial and industrial sites keep high-use laundry equipment easier to manage after installation, rental, repair or replacement.',
])

@include('components.testimonials')

@include('components.proof-bar')

@include('components.faq', [
    'eyebrow' => 'Commercial Laundry FAQs',
    'heading' => 'Questions before requesting a commercial laundry assessment',
    'faqs' => [
        ['question' => 'What types of commercial and industrial sites do you support?',        'answer' => 'Irish Laundry Systems supports commercial laundries, self-service and shared-use laundry rooms, managed residential sites, leisure and wellness facilities, public-sector sites, facility management environments, workwear operations and specialist laundry environments where equipment continuity matters.'],
        ['question' => 'Can you help with high-volume or continuous-use laundry rooms?',       'answer' => 'Yes. We can review load profile, cycle demand, room layout, utilities, drying pressure, finishing needs and service history to recommend the right equipment and support route.'],
        ['question' => 'Can professional laundry equipment reduce running costs?',             'answer' => 'Selected Electrolux Professional technologies can help reduce energy, water and detergent use. Examples include Heat Pump drying, Automatic Savings, Integrated Savings, Intelligent Dosing and Efficient Dosing, depending on the equipment and site configuration.'],
        ['question' => 'Can you support specialist laundry requirements?',                     'answer' => 'Yes. We can advise on barrier washers, specialist washing, dosing systems, drying cabinets and other equipment routes where hygiene, workwear, PPE, mops, mixed textiles or process control are important.'],
        ['question' => 'Is rental available for commercial or industrial sites?',              'answer' => 'Yes. Equipment Rental can be discussed where a site needs replacement, expansion or continuity without immediate capital purchase.'],
        ['question' => 'What maintenance support is available?',                               'answer' => 'Preventive Maintenance Contracts can include scheduled visits, inspection, service reporting and technical follow-up. Support & Aftercare helps connect service history, parts access where needed and future equipment decisions.'],
        ['question' => 'Can you respond to urgent equipment faults?',                          'answer' => 'Yes. Repairs & Call-outs are available for urgent faults. Requests are handled based on urgency, equipment details, site pressure and service context.'],
        ['question' => 'Can you review an existing laundry setup before we replace equipment?', 'answer' => 'Yes. Irish Laundry Systems can assess the current equipment, utility pressure, usage pattern, maintenance history and whether repair, rental, replacement or a service contract is the right next step.'],
    ],
])

@include('components.cta-downtime-form', [
    'pageSource'  => 'commercial_cta',
    'heading'     => 'Ready to understand what your commercial laundry operation is costing you?',
    'body'        => 'Talk to Irish Laundry Systems about your site, equipment, load profile, service history and current pressure. We will help confirm the right next step.',
    'formTitle'   => 'Request a Commercial Laundry Assessment',
    'buttonText'  => 'Request Commercial Assessment',
])

@endsection
