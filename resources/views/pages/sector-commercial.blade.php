@extends('layouts.app')

@section('meta')
<meta name="description" content="Engineering-led commercial and industrial laundry support — service contracts, reactive repairs, equipment supply and lifecycle planning across Ireland.">

@endsection

@section('content')

<!-- 1. HERO -->
<section class="relative overflow-hidden flex flex-col" style="height:720px; min-height:560px;">
    <img src="/images/sectors/Line 6000 solutions products_72dpi.jpg" alt="Commercial laundry operation"
         class="absolute inset-0 w-full h-full object-cover object-center">
    {{-- Extend gradient further right so the logo card area stays legible --}}
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.88) 0%, rgba(1,30,65,0.72) 55%, rgba(1,30,65,0.45) 80%, rgba(1,30,65,0.15) 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-24 lg:py-32">

            {{-- Two-column on desktop: text left, logo+button right --}}
            <div class="flex flex-col lg:flex-row lg:items-start lg:gap-16 xl:gap-24">

                {{-- Left: tag + title + body + CTAs --}}
                <div class="flex-1 reveal reveal-left">
                    <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-4">Commercial &amp; Industrial Laundry Support</p>
                    <h1 class="font-heading font-bold text-white text-4xl lg:text-6xl leading-tight mb-6">
                        <span style="color:#148af4;">High-throughput</span> laundry engineering<br>for <span style="color:#148af4;">commercial and industrial</span> operations.
                    </h1>
                    <p class="font-body text-white/80 text-base lg:text-lg leading-relaxed mb-8 max-w-2xl">
                        Irish Laundry Systems supports high-load laundry sites with equipment selection, installation, rental, service contracts, repairs, parts access and practical aftercare for operations where output, equipment load and continuity matter.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#commercial-assessment"
                           class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                            Request Commercial Assessment
                        </a>
                        <a href="{{ route('contact') }}"
                           class="inline-flex items-center justify-center gap-2 border-2 border-white hover:border-white/70 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                            Talk to an Engineer
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

@include('components.partner-strip')

<!-- INTRO COMMERCIAL BLOCK -->
<section class="py-16 lg:py-24 bg-[#f4f6f9]">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <div class="reveal reveal-left">
                <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Built for Commercial &amp; Industrial Sites</p>
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight">
                    Laundry support built around <span style="color:#148af4;">load</span>, <span style="color:#148af4;">workflow</span><br>and <span style="color:#148af4;">installed equipment</span>.
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-base leading-relaxed mb-4">
                    Commercial and industrial laundry operations demand more than equipment. The right route depends on daily load, fabric mix, available space, utilities, operator handling and the support behind the installed base.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Irish Laundry Systems connects equipment selection, installation, service contracts, call-outs, rental, parts and aftercare into one practical support plan for the site.
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

<!-- OPERATING ENVIRONMENTS MATRIX -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="mb-12 reveal">
            <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Where This Fits</p>
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-4">
                Built for sites with <span style="color:#148af4;">high laundry load</span>,<br>mixed textiles or <span style="color:#148af4;">continuous use</span>.
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-2xl">
                Commercial and industrial support should match the operating environment, not just the machine list.
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 reveal">
            @foreach([
                [
                    'title' => 'High-volume laundry rooms',
                    'items' => ['Commercial laundries', 'Industrial laundries', 'Continuous-use laundry rooms'],
                    'icon'  => 'ativo-9',
                    'img'   => '/images/healthcare/commercial-industrial.jpg',
                    'pos'   => 'center center',
                ],
                [
                    'title' => 'Public and institutional sites',
                    'items' => ['Education sites', 'Accommodation sites', 'Public-sector environments'],
                    'icon'  => 'ativo-20',
                    'img'   => '/images/healthcare/line-6000-solutions.jpg',
                    'pos'   => 'center 30%',
                ],
                [
                    'title' => 'Specialist operating environments',
                    'items' => ['Workwear and staff laundry', 'Controlled-use laundry rooms', 'Sites with specific process needs'],
                    'icon'  => 'ativo-11',
                    'img'   => '/images/healthcare/repairs-callouts.jpg',
                    'pos'   => 'center 35%',
                ],
                [
                    'title' => 'Mixed-textile facilities',
                    'items' => ['Gyms and leisure sites', 'Spas and wellness sites', 'Towels, uniforms and mixed linen'],
                    'icon'  => 'towels',
                    'img'   => '/images/healthcare/services-overview-hero.jpg',
                    'pos'   => 'center center',
                ],
            ] as $card)
            <div class="group relative overflow-hidden rounded-2xl" style="height:420px;">
                <img src="{{ $card['img'] }}" alt="{{ $card['title'] }}"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                     style="object-position: {{ $card['pos'] }};">
                {{-- Default gradient: lighter top so image shows, dark bottom for title --}}
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background:linear-gradient(to top, rgba(1,30,65,0.95) 0%, rgba(1,30,65,0.45) 45%, rgba(1,30,65,0.05) 75%, transparent 100%);"></div>
                {{-- Hover overlay: solid dark so bullets are readable --}}
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background:rgba(1,30,65,0.90);"></div>
                <div class="absolute inset-0 p-7 flex flex-col justify-end z-10">
                    {{-- Bullets: hidden by default, slide in on hover --}}
                    <ul class="font-body text-white/80 text-sm space-y-2 overflow-hidden max-h-0 opacity-0 group-hover:max-h-40 group-hover:opacity-100 transition-all duration-500 mb-0 group-hover:mb-5">
                        @foreach($card['items'] as $item)
                        <li class="flex items-start gap-2.5">
                            <span class="flex-shrink-0 mt-1.5 w-1.5 h-1.5 rounded-full bg-white/60"></span>
                            <span>{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>
                    {{-- Icon circle: always visible, just above title --}}
                    <div class="w-16 h-16 rounded-full flex items-center justify-center flex-shrink-0 mb-4"
                         style="background:rgba(255,255,255,0.15); border:1.5px solid rgba(255,255,255,0.35);">
                        <img src="/images/icons/brand-white/{{ $card['icon'] }}.svg" alt=""
                             style="width:2.2rem;height:2.2rem;">
                    </div>
                    {{-- Title: always visible at bottom --}}
                    <h3 class="font-heading font-bold text-white text-xl leading-snug">{{ $card['title'] }}</h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>



{{-- D: Enhanced Usability — Apple-style horizontal scroll cards --}}
<style>
.ils-apple-wrap { display:flex; gap:10px; overflow-x:auto; scroll-snap-type:x mandatory; -webkit-overflow-scrolling:touch; padding-bottom:4px; scrollbar-width:none; cursor:grab; }
.ils-apple-wrap:active { cursor:grabbing; }
.ils-apple-wrap::-webkit-scrollbar { display:none; }
.ils-apple-card { flex:0 0 320px; scroll-snap-align:start; background:#fff; border-radius:18px; padding:26px 26px 70px 26px; min-height:500px; display:flex; flex-direction:column; position:relative; overflow:hidden; }
.ils-apple-label { font-size:0.72rem; font-weight:300; color:#6e6e73; letter-spacing:0.03em; margin-bottom:10px; font-family:'Inter',system-ui,sans-serif; text-transform:uppercase; }
.ils-apple-title { font-size:1.3rem; font-weight:700; color:#1d1d1f; line-height:1.25; margin-bottom:10px; font-family:'Inter',system-ui,sans-serif; }
.ils-apple-body { font-size:0.83rem; color:#6e6e73; line-height:1.65; font-family:'Inter',system-ui,sans-serif; }
.ils-apple-img { flex:1; display:flex; align-items:flex-end; justify-content:center; padding-top:24px; }
.ils-apple-img img { max-height:200px; width:auto; max-width:100%; object-fit:contain; }
.ils-apple-plus { position:absolute; bottom:22px; right:22px; width:38px; height:38px; background:#1d1d1f; border-radius:50%; display:flex; align-items:center; justify-content:center; cursor:pointer; border:none; transition:background 0.2s; flex-shrink:0; }
.ils-apple-plus:hover { background:#011E41; }
.ils-apple-plus svg { width:15px; height:15px; stroke:#fff; stroke-width:2.5; transition:transform 0.3s ease; flex-shrink:0; }
.ils-apple-plus.open svg { transform:rotate(45deg); }
.ils-apple-overlay { position:absolute; inset:0; background:#011E41; border-radius:18px; padding:26px; display:flex; flex-direction:column; opacity:0; pointer-events:none; transition:opacity 0.3s ease; z-index:10; }
.ils-apple-overlay.open { opacity:1; pointer-events:auto; }
.ils-apple-overlay h4 { font-size:1.15rem; font-weight:700; color:#fff; margin-bottom:14px; font-family:'Inter',system-ui,sans-serif; line-height:1.3; }
.ils-apple-overlay p, .ils-apple-overlay li { font-size:0.83rem; color:rgba(255,255,255,0.72); line-height:1.7; font-family:'Inter',system-ui,sans-serif; }
.ils-apple-overlay ul { padding-left:0; list-style:none; }
.ils-apple-overlay li { display:flex; gap:8px; margin-bottom:8px; }
.ils-apple-overlay li::before { content:'–'; color:#148af4; flex-shrink:0; font-weight:700; }
.ils-apple-close { position:absolute; bottom:22px; right:22px; width:38px; height:38px; background:rgba(255,255,255,0.15); border-radius:50%; display:flex; align-items:center; justify-content:center; cursor:pointer; border:none; }
.ils-apple-close svg { width:15px; height:15px; stroke:#fff; stroke-width:2.5; transform:rotate(45deg); }
</style>

<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- Header --}}
        <div class="mb-8 reveal">
            <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl leading-tight mb-3">
                Built around <span style="color:#148af4;">output</span>, <span style="color:#148af4;">equipment load</span> and operating rhythm.
            </h2>
            <p class="font-body text-gray-500 text-sm leading-relaxed max-w-3xl">
                The right setup helps teams manage volume, mixed textiles, turnaround pressure, utility use and service continuity around the installed base.
            </p>
        </div>

        {{-- 5-card grid --}}
        <div class="grid grid-cols-2 lg:grid-cols-5 gap-3">

            {{-- Card 1: Throughput --}}
            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-14">
                    <svg class="w-14 h-14" fill="none" viewBox="0 0 24 24" stroke="#148af4" stroke-width="1.3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Throughput and daily load</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Equipment and support planned around volume, shifts, turnaround needs and repeated use.</p>
                </div>
            </div>

            {{-- Card 2: Load profile --}}
            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-14">
                    <svg class="w-14 h-14" fill="none" viewBox="0 0 24 24" stroke="#148af4" stroke-width="1.3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75 2.25 12l4.179 2.25m0-4.5 5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0 4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0-5.571 3-5.571-3"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Load profile and fabric mix</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Planning that considers workwear, towels, uniforms, bedding, flatwork, specialist items and mixed textiles.</p>
                </div>
            </div>

            {{-- Card 3: Utility --}}
            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-14">
                    <svg class="w-14 h-14" fill="none" viewBox="0 0 24 24" stroke="#148af4" stroke-width="1.3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Utility and operating cost control</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Washer, dryer and dosing decisions shaped around water, energy, detergent use and cycle efficiency.</p>
                </div>
            </div>

            {{-- Card 4: Operator --}}
            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-1">
                <div class="flex items-center justify-center h-14">
                    <svg class="w-14 h-14" fill="none" viewBox="0 0 24 24" stroke="#148af4" stroke-width="1.3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Operator handling and controls</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Loading access, clear controls and practical ergonomics that help teams work with less friction.</p>
                </div>
            </div>

            {{-- Card 5: Service --}}
            <div class="bg-white rounded-xl p-5 flex flex-col gap-4 col-span-2 lg:col-span-1">
                <div class="flex items-center justify-center h-14">
                    <svg class="w-14 h-14" fill="none" viewBox="0 0 24 24" stroke="#148af4" stroke-width="1.3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-navy text-base leading-snug mb-1.5">Service and parts continuity</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Maintenance, parts access and aftercare connected to the installed base before small issues become larger problems.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FOUR SERVICE CARDS -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <!-- Heading -->
        <div class="mb-8">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-3">
                Four ways we support<br><span style="color:#148af4;">commercial and industrial</span> laundry.
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-2xl">
                High-load sites often need equipment, maintenance, response and parts support to work together around output pressure and installed equipment.
            </p>
        </div>

        <!-- 4-column card grid -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">

            @foreach([
                [
                    'title'  => 'Repairs &amp; Call-outs',
                    'text'   => 'Fault response and practical engineering support when equipment issues put the laundry operation under pressure.',
                    'cta'    => 'Request Call-out',
                    'route'  => route('repairs'),
                    'img'    => '/images/healthcare/repairs-callouts.jpg',
                    'pos'    => 'center 40%',
                ],
                [
                    'title'  => 'Equipment Rental',
                    'text'   => 'Flexible rental agreements that remove upfront capital cost. Equipment supplied, maintained and supported without the ownership burden.',
                    'cta'    => 'See Rental Options',
                    'route'  => route('rental'),
                    'img'    => '/images/healthcare/commercial-industrial.jpg',
                    'pos'    => 'center center',
                ],
                [
                    'title'  => 'Service Contracts',
                    'text'   => 'Planned maintenance and service structure for commercial sites that need better control over the installed base and fewer unplanned stoppages.',
                    'cta'    => 'View Contracts',
                    'route'  => route('service-contracts'),
                    'img'    => '/images/healthcare/Service Contracts.png',
                    'pos'    => 'center 35%',
                ],
                [
                    'title'  => 'Parts &amp; Aftercare',
                    'text'   => 'Genuine parts access, consumables and practical aftercare support connected to the installed base — the right component to the right machine without delay.',
                    'cta'    => 'Enquire Now',
                    'route'  => route('contact'),
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
                {{-- Default gradient --}}
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.4) 45%, rgba(1,30,65,0.05) 75%, transparent 100%);"></div>
                {{-- Hover overlay --}}
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background: rgba(1,30,65,0.88);"></div>
                {{-- Content --}}
                <div class="absolute inset-0 p-6 flex flex-col justify-end z-10">
                    {{-- Description (slides up on hover) --}}
                    <div class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-40 group-hover:opacity-100 transition-all duration-500 mb-4">
                        <p class="font-body text-white/80 text-sm leading-relaxed">{!! $card['text'] !!}</p>
                    </div>
                    {{-- Title (always visible) --}}
                    <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-tight mb-4">{!! $card['title'] !!}</h3>
                    {{-- Button (always visible) --}}
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

@include('components.cta-combined-banner')

<!-- PRODUCTS: Commercial Washers / Tumble Dryers / Ironers / Barrier Washers -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <!-- Title -->
        <div class="mb-16 reveal">
            <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Electrolux Professional Equipment</p>
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-4">
                Equipment for <span style="color:#148af4;">high-throughput</span> laundry environments.
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-2xl">
                The right equipment plan depends on load profile, fabric mix, throughput pressure, drying demand, finishing needs, available space and the support behind the installed base.
            </p>
        </div>

        <div class="flex flex-col divide-y divide-gray-100">

            <!-- COMMERCIAL WASHERS — image left, text right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal">
                <div class="flex flex-col lg:ml-28">
                    <img src="/images/equipment/commercialwasher.webp"
                         alt="Commercial Washer"
                         class="w-full h-96 object-contain object-top">
                </div>
                <div class="lg:-ml-20 lg:mt-10">
                    <h3 class="font-heading font-bold text-navy text-4xl lg:text-5xl mb-3">Commercial <strong>Washers</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Commercial washers support daily loads across workwear, towels, uniforms, bedding and mixed textiles where wash quality, capacity and cycle control matter.
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
                        Tumble <strong>Dryers</strong>
                    </h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                        Tumble dryers support post-wash flow where drying time, residual moisture, operator handling and room throughput can affect the pace of the day.
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
                </div>
                <div class="flex flex-col order-1 lg:order-2 lg:ml-20">
                    <img src="/images/equipment/line6000-tumble-dryer.webp"
                         alt="Line 6000 Tumble Dryer"
                         class="w-full h-96 object-contain object-left-top">
                    <div class="mt-1 pt-3">
                        <button @click="open = !open"
                                class="w-full flex items-center justify-start gap-3 text-left group pl-[20px]">
                            <span class="font-heading font-bold text-navy text-lg">System Features, Moisture Balance</span>
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

            <!-- 3. Ironers & Finishing — image left, text right -->
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
                        Ironers and finishing equipment support flatwork flow, linen presentation, output consistency and storage readiness where finishing quality matters.
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
                    <div x-show="tab === 'diamms'">
                        <h4 class="font-heading font-bold text-navy text-xl mb-4">Maximum hygiene and performance</h4>
                        <div class="flex items-start gap-6 mb-8">
                            <div class="w-32 h-32 flex-shrink-0">
                                <img src="/images/healthcare/Diamms.png" alt="DIAMMS" class="w-full h-full object-contain">
                            </div>
                            <p class="font-body text-gray-500 text-sm leading-relaxed">
                                Electrolux Professional finishing features such as the DIAMMS moisture-control feature and Hygiene Guard are designed to support moisture-aware finishing and linen handling where the selected ironer configuration includes those capabilities.
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
                                <p class="font-body text-gray-500 text-sm leading-relaxed">FoldFlex ensures the highest quality at the end of the finishing process so that linen can be safely and securely stored, ready for the next use.</p>
                            </div>
                        </div>
                    </div>
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
                                <p class="font-body text-gray-500 text-sm leading-relaxed">FoldFlex ensures the highest quality at the end of the finishing process so that linen can be safely and securely stored, ready for the next use.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. Barrier Washers / Specialist Washing — image left, text right -->
            <div x-data="{ open: false }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start py-12 lg:py-16 reveal lg:pl-[10%]">
                <div class="flex flex-col">
                    <img src="/images/equipment/line6000-barrier-washer.webp"
                         alt="Line 6000 Barrier Washer"
                         class="w-full h-[440px] object-contain object-center">
                    <div class="mt-1 pt-3 w-full">
                        <button @click="open = !open" class="w-full flex items-center justify-start gap-3 text-left group pl-[76px]">
                            <span class="font-heading font-bold text-navy text-lg">System Features, AIDO &amp; Specialist Handling</span>
                            <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="lg:pt-10">
                    <h3 class="font-heading font-bold text-navy text-4xl lg:text-5xl mb-3">Barrier Washers / <strong>Specialist Washing</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
                        Barrier washers and specialist washing routes support sites where separation, hygiene-sensitive handling or specialist textile care is required as part of the laundry setup.
                    </p>
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
                    Electrolux Professional barrier washer features such as Automatic Inner Door Opening (AIDO) are designed to support controlled loading and unloading where the selected barrier configuration includes those capabilities. Specialist washing routes should be matched to the site, textile type and handling requirement.
                </p>
            </div>
            </div>

        </div>
    </div>
</section>

@include('components.why-choose-strip')

@include('components.equipment-categories')

<!-- PROCESS BLOCK -->
<section class="py-14 lg:py-20 bg-[#f4f6f9]">
    <div class="max-w-screen-xl mx-auto px-6 sm:px-10 lg:px-20 text-center">

        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Process</p>
        <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-3">
            Our process keeps the <span style="color:#148af4;">next step</span> clear.
        </h2>
        <p class="font-body text-gray-500 text-base mb-12 max-w-xl mx-auto leading-relaxed">
            A clear four-step path from site review to the next practical recommendation.
        </p>

        <div class="flex flex-col sm:flex-row items-start justify-between">

            @foreach([
                ['title' => 'Assess the site',     'text' => 'Review load profile, space, utilities, access, equipment pressure and operating priorities.', 'icon' => 'clipboard'],
                ['title' => 'Match the equipment', 'text' => 'Recommend the right washing, drying, finishing or specialist route.',                          'icon' => 'Ativo%204'],
                ['title' => 'Keep support close',  'text' => 'Connect the installed base to service contracts, parts and practical aftercare.',               'icon' => 'Ativo%206'],
                ['title' => 'Move to assessment',  'text' => 'Turn the site, equipment route and support needs into a practical next step.',                  'icon' => 'Ativo%203'],
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

@include('components.service-contracts-strip')

@include('components.testimonials')

@include('components.proof-bar')

@include('components.faq', [
    'heading' => 'Commercial Laundry FAQs',
    'faqs' => [
        ['question' => 'What types of commercial sites do you support?',             'answer' => 'We support a wide range of commercial and industrial laundry sites including commercial laundries, industrial facilities, public-sector buildings, universities, emergency-service sites, gyms, spas and mixed-textile operations. Each site is assessed individually to match the right equipment and support structure.'],
        ['question' => 'Can you supply and install equipment for high-volume operations?', 'answer' => 'Yes. We supply and install Electrolux Professional commercial washers, tumble dryers, ironers and barrier washers for high-throughput environments. Equipment selection is matched to load profile, fabric mix, available utilities and the daily operating rhythm of the site.'],
        ['question' => 'What does a service contract cover for a commercial site?',  'answer' => 'Service contracts cover planned maintenance visits, priority call-out response, access to genuine parts and a service history record for the installed base. The structure is tailored to the site, equipment type and the level of cover required.'],
        ['question' => 'How quickly can you respond to a breakdown call-out?',        'answer' => 'Response times depend on site location, contract level and the nature of the fault. Priority response is available under service contract. We aim to minimise downtime for commercial sites where equipment output directly affects daily operations.'],
        ['question' => 'Is equipment rental available for commercial operations?',    'answer' => 'Yes. Equipment rental is available as an alternative to capital purchase. Rental agreements cover supply, installation and ongoing support under a single arrangement, which can suit sites managing cash flow, planned replacement or expansion without upfront capital commitment.'],
    ],
])

@include('components.cta-downtime-form', ['pageSource' => 'commercial_cta'])

@endsection
