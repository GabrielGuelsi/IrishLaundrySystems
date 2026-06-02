@extends('layouts.app')

@section('meta')
<meta name="description" content="Built from electrical contracting roots and Electrolux Professional service experience. Irish Laundry Systems supports 38 client locations across Dublin and Ireland since 1987.">
@endsection

@section('content')

<!-- ══════════════════════════════════════════
     1. HERO
══════════════════════════════════════════ -->
<section class="relative overflow-hidden" style="height:720px; min-height:560px; background-color:#011E41;">

    <img src="{{ asset('images/about/heroaboutusimage.png') }}"
         alt="ILS engineering team"
         loading="eager" decoding="async"
         class="absolute inset-0 w-full h-full object-cover object-center">


    <div class="relative z-10 h-full flex items-center">
        <div class="max-w-screen-2xl mx-auto w-full px-6 sm:px-10 lg:px-20">
            <div class="max-w-5xl">
                <p class="font-heading font-bold text-[#148af4] text-xs uppercase tracking-widest mb-4">About Irish Laundry Systems</p>
                <h1 class="font-heading font-bold text-white text-5xl lg:text-6xl leading-tight mb-6">
                    <span class="whitespace-nowrap block"><span class="text-[#011E41]">Keeping</span> <span class="text-[#148af4]">commercial laundry</span></span>
                    <span class="whitespace-nowrap block text-[#148af4]">equipment, service and aftercare</span>
                    <span class="whitespace-nowrap block"><span class="text-[#148af4]">connected</span> <span class="text-[#011E41]">since 1987</span></span>
                </h1>
                <p class="font-body text-white/70 text-base lg:text-lg leading-relaxed mb-8 max-w-2xl">
                    Built from electrical contracting roots and Electrolux Professional<br>service experience, Irish Laundry Systems supports 38 client<br>locations across Dublin and Ireland with equipment supply, rental,<br>maintenance, repairs and aftercare for business-critical laundry rooms.
                </p>
                <div class="flex flex-wrap gap-4 mb-10">
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
                        Request Service Assessment
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center gap-2 border border-white/40 text-white font-heading font-bold text-sm px-6 py-3 rounded-lg hover:border-white transition-colors tracking-wide">
                        Talk to Our Team
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- 2. ELECTROLUX TRUST STRIP -->
@include('components.partner-strip')

<!-- ══════════════════════════════════════════
     3. WHY IRISH LAUNDRY SYSTEMS EXISTS
══════════════════════════════════════════ -->
<section class="bg-white py-20 lg:py-28">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24 items-start">

            <div>
                <p class="font-heading font-bold text-[#148af4] text-xs uppercase tracking-widest mb-4">Why Irish Laundry Systems Exists</p>
                <h2 class="font-heading font-bold text-navy text-5xl lg:text-6xl leading-tight">
                    Commercial laundry<br>decisions <span class="text-[#148af4]">do not stop<br>at the machine</span>
                </h2>
            </div>

            <div class="lg:pt-8 space-y-5">
                <p class="font-body text-gray-500 text-base leading-relaxed">
                    A laundry room depends on more than equipment supply. Sites need the right specification, installation route, rental option, maintenance plan, repair path and aftercare structure around the same machines, service history and daily pressure.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed">
                    Irish Laundry Systems was built for that connected role: helping healthcare, care home, hospitality and commercial laundry sites make clearer decisions before equipment is installed, while it is in use and when the next technical step is needed.
                </p>
                <div class="flex flex-wrap gap-4 pt-2">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center gap-2 bg-navy text-white font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-navy/90 transition-colors tracking-wide">
                        Talk to Our Team
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                    <a href="{{ route('electrolux') }}"
                       class="inline-flex items-center gap-2 border border-gray-300 text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:border-navy transition-colors tracking-wide">
                        Our Partnership
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     4. PROOF & SCALE
══════════════════════════════════════════ -->
<section class="bg-white py-16 lg:py-24 border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-12 reveal">
            <p class="font-heading font-bold text-[#148af4] text-xs uppercase tracking-widest mb-4">Proof & Scale</p>
            <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl leading-tight whitespace-nowrap">
                Technical work, recognised partners and <span class="text-[#148af4]">real sites served</span> over more than three decades
            </h2>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
            @foreach([
                ['1987', 'year',       'Since 1987',                      'Commercial laundry engineering roots in Ireland.'],
                ['38',   'locations',  '38 client locations',              'Commercial laundry locations served across Dublin and Ireland.'],
                ['/images/logo/electrolux-partner.png', 'partner', 'Electrolux Professional Partner', 'Authorised partner for a recognised professional laundry equipment platform.'],
                ['RGI',  'certified',  'Registered technical capability',  'Safe Electric registered and Registered Gas Installer (RGI) contractor capability.'],
            ] as [$num, $sub, $title, $desc])
            @php $isImg = str_starts_with($num, '/'); @endphp
            <div class="border-b border-gray-300 pb-5 reveal">
                @if($isImg)
                <div class="flex items-end gap-8 h-12 lg:h-[3.75rem] mb-3 overflow-visible">
                    <img src="{{ $num }}" alt="Electrolux Professional Partner" class="h-20 lg:h-24 w-auto object-contain object-left self-end -ml-3">
                    <p class="font-body text-gray-400 text-xs uppercase tracking-widest pb-1">{{ $sub }}</p>
                </div>
                @else
                <div class="flex items-end gap-3 mb-3">
                    <div class="font-heading font-bold text-navy text-5xl lg:text-6xl leading-none flex-shrink-0">{{ $num }}</div>
                    <p class="font-body text-gray-400 text-xs uppercase tracking-widest pb-1">{{ $sub }}</p>
                </div>
                @endif
                <p class="font-body font-bold text-navy text-sm mb-1">{{ $title }}</p>
                <p class="font-body text-gray-500 text-xs leading-relaxed">{{ $desc }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>

<!-- ══════════════════════════════════════════
     5. TECHNICAL FOUNDATIONS — navy bg
══════════════════════════════════════════ -->
<section class="bg-white py-20 lg:py-28">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <!-- 2-col: image left | content right -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <!-- Image -->
            <div class="overflow-hidden rounded-2xl reveal" style="height:520px;">
                <img src="{{ asset('images/about/about-engineers.jpg') }}"
                     alt="ILS engineering team on site"
                     class="w-full h-full object-cover object-center">
            </div>

            <!-- Content -->
            <div class="reveal">
                <p class="font-heading font-bold text-[#148af4] text-xs uppercase tracking-widest mb-5">Technical Foundations</p>
                <h2 class="font-heading font-bold text-navy text-3xl leading-tight mb-6">
                    <span class="text-[#148af4]">Electrical contracting roots</span><br>
                    <span class="text-[#148af4]">Commercial laundry equipment experience</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Irish Laundry Systems combines practical electrical knowledge, Electrolux Professional equipment experience and site-level laundry understanding. That background helps customers avoid disconnected decisions around specification, installation, maintenance, repairs and follow-up work.
                </p>

                <!-- Credential chips -->
                <div class="flex flex-wrap gap-2.5">
                    @foreach(['Safe Electric registered', 'Registered Gas Installer contractor capability', 'Electrolux Professional equipment experience', 'Installed-base knowledge'] as $chip)
                    <span class="font-body text-sm font-medium text-navy/70 border border-navy/20 rounded-full px-5 py-2.5">{{ $chip }}</span>
                    @endforeach
                </div>
            </div>

        </div>


    </div>
</section>

<!-- ══════════════════════════════════════════
     6. SITE, WORKFLOW & CAPACITY STRIP
══════════════════════════════════════════ -->
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.82) 8%, rgba(20,138,244,0.45) 28%, rgba(20,138,244,0.18) 48%, transparent 65%);"></div>
    </div>
    <div class="relative z-10 px-10 lg:px-16 py-10 lg:py-14" style="width:100%; max-width:60%;">
        <p class="font-heading font-bold text-white/60 text-xs uppercase tracking-widest mb-4">Site, Workflow & Capacity</p>
        <h2 class="font-heading font-bold leading-tight mb-4">
            <span class="text-3xl lg:text-5xl block"><span class="text-white">Designed around your </span><span style="color:#011E41;">site,</span></span>
            <span class="text-3xl lg:text-5xl block" style="color:#011E41;">workflow and capacity</span>
        </h2>
        <p class="font-body text-white text-base lg:text-lg leading-relaxed mb-6">
            Every laundry room has its own pressure points: space, utilities, equipment condition, workflow and daily volume. Irish Laundry Systems uses that site understanding to guide equipment supply, rental, maintenance, repairs and aftercare around what the room needs.
        </p>
        <div class="flex items-center flex-nowrap gap-0 mb-7">
            @foreach([
                ['icon' => 'ativo-20', 'label' => 'Room<br>conditions'],
                ['icon' => 'ativo-10', 'label' => 'Equipment<br>use'],
                ['icon' => 'ativo-21', 'label' => 'Capacity<br>pressure'],
                ['icon' => 'ativo-9',  'label' => 'Practical<br>next step'],
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

<!-- ══════════════════════════════════════════
     7. CONNECTED ROUTES — horizontal banners
══════════════════════════════════════════ -->
<section class="bg-white py-20 lg:py-28">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="mb-14 reveal">
            <p class="font-heading font-bold text-[#148af4] text-xs uppercase tracking-widest mb-4">Connected Routes</p>
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-5xl leading-tight">
                Equipment supply, service and aftercare<br>connected around <span class="text-[#148af4]">real site needs</span>
            </h2>
        </div>

        <!-- Bento grid — 3-col, 3 rows -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">

            {{-- Row 1, Col 1-2: dark text left + image right --}}
            <div class="lg:col-span-2 flex overflow-hidden rounded-2xl reveal" style="min-height:340px;">
                <div class="bg-navy p-8 lg:p-10 flex flex-col justify-start flex-shrink-0" style="width:45%;">
                    <div>
                        <h3 class="font-heading font-bold text-[#148af4] text-2xl lg:text-3xl leading-snug mb-4">Plan, Supply &amp; Install</h3>
                        <p class="font-body text-white/70 text-lg leading-relaxed">Site planning, equipment selection, supply, delivery, installation and commissioning for commercial laundry rooms.</p>
                    </div>
                </div>
                <div class="flex-1 overflow-hidden relative">
                    <img src="{{ asset('images/equipment/td6-multihousing-room.jpg') }}"
                         alt="Commercial laundry room"
                         class="w-full h-full object-cover object-center">
                    <div class="absolute inset-y-0 left-0 w-48 pointer-events-none" style="background:linear-gradient(to right,#011E41 0%,#011E41 20%,transparent 100%);"></div>
                </div>
            </div>

            {{-- Row 1, Col 3: white centred icon card — Rent & Maintain --}}
            <div class="bg-white border border-gray-200 shadow-md rounded-2xl p-8 lg:p-10 flex flex-col items-center justify-center text-center reveal" style="min-height:340px;">
                <div class="flex items-center justify-center mb-6">
                    <svg class="w-10 h-10 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-xl lg:text-2xl leading-snug mb-3">Rent &amp; Maintain</h3>
                <p class="font-body text-gray-500 text-lg leading-relaxed mb-0">Equipment rental, planned inspections, service contracts, maintenance records and ongoing care around equipment use.</p>
            </div>

            {{-- Row 2: white icon left + dark image card right (col-span-2) --}}
            <div class="bg-white border border-gray-200 shadow-md rounded-2xl p-8 lg:p-10 flex flex-col items-center justify-center text-center reveal" style="min-height:340px;">
                <div class="flex items-center justify-center mb-6">
                    <svg class="w-10 h-10 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-xl lg:text-2xl leading-snug mb-3">Repair &amp; Support</h3>
                <p class="font-body text-gray-500 text-lg leading-relaxed mb-0">Call-outs, fault diagnosis, parts route, technical assistance and follow-up after work is completed.</p>
            </div>
            <div class="lg:col-span-2 flex overflow-hidden rounded-2xl reveal" style="min-height:340px;">
                <div class="bg-navy p-8 lg:p-10 flex flex-col justify-start flex-shrink-0" style="width:45%;">
                    <div>
                        <h3 class="font-heading font-bold text-[#148af4] text-2xl lg:text-3xl leading-snug mb-3">38 client locations</h3>
                        <p class="font-body text-white/70 text-lg leading-relaxed">Commercial laundry sites supported across Dublin and Ireland with equipment, maintenance, repairs and aftercare since 1987.</p>
                    </div>
                </div>
                <div class="flex-1 overflow-hidden relative">
                    <img src="{{ asset('images/healthcare/repairs-hero.jpg') }}"
                         alt="ILS service team on site"
                         class="w-full h-full object-cover object-center">
                    <div class="absolute inset-y-0 left-0 w-48 pointer-events-none" style="background:linear-gradient(to right,#011E41 0%,#011E41 20%,transparent 100%);"></div>
                </div>
            </div>

            {{-- Row 3: dark image card left (col-span-2) + white icon right --}}
            <div class="lg:col-span-2 flex overflow-hidden rounded-2xl reveal" style="min-height:340px;">
                <div class="bg-navy p-8 lg:p-10 flex flex-col justify-start flex-shrink-0" style="width:45%;">
                    <div>
                        <h3 class="font-heading font-bold text-[#148af4] text-2xl lg:text-3xl leading-snug mb-3">Engineering roots since 1987</h3>
                        <p class="font-body text-white/70 text-lg leading-relaxed">Built from electrical contracting and Electrolux Professional service experience — registered technical capability combined with commercial laundry equipment knowledge.</p>
                    </div>
                </div>
                <div class="flex-1 overflow-hidden relative">
                    <img src="{{ asset('images/about/about-engineers.jpg') }}"
                         alt="ILS engineering team"
                         class="w-full h-full object-cover object-center">
                    <div class="absolute inset-y-0 left-0 w-48 pointer-events-none" style="background:linear-gradient(to right,#011E41 0%,#011E41 20%,transparent 100%);"></div>
                </div>
            </div>
            <div class="bg-white border border-gray-200 shadow-md rounded-2xl p-8 lg:p-10 flex flex-col items-center justify-center text-center reveal" style="min-height:340px;">
                <div class="flex items-center justify-center mb-6">
                    <svg class="w-10 h-10 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-xl lg:text-2xl leading-snug mb-3">Electrolux Professional Partner</h3>
                <p class="font-body text-gray-500 text-lg leading-relaxed">Authorised partner for equipment supply, genuine parts route and technical documentation across commercial laundry sites in Ireland.</p>
            </div>

        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     8. HOW OUR SITE ROUTE WORKS — 4 steps
══════════════════════════════════════════ -->
<section>
    {{-- Header: white bg, padded --}}
    <div class="bg-white pt-20 lg:pt-28 pb-12 lg:pb-14">
        <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
            <div class="max-w-3xl">
                <p class="font-heading font-bold text-[#148af4] text-xs uppercase tracking-widest mb-5">How We Work Around the Site</p>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-5xl leading-tight mb-6 whitespace-nowrap">
                    From site understanding to <span class="text-[#148af4]">the right next step</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed whitespace-nowrap">
                    Irish Laundry Systems starts with the room, the equipment and the pressure on the site. The aim is to choose the right route, keep records clear and make the next service decision easier.
                </p>
            </div>
        </div>
    </div>

    {{-- Full-width image strip — no container, no padding, edge to edge --}}
    @php
    $siteSteps = [
        ['num'=>'1','title'=>'Understand the site',     'desc'=>'Review equipment, utilities, access, workflow, capacity and pressure points.',                                                                    'img'=>'images/hero/hero-technician-inspection.png'],
        ['num'=>'2','title'=>'Define the route',        'desc'=>'Identify whether the site needs equipment supply, rental, planned maintenance, repair work or a wider aftercare path.',                           'img'=>'images/healthcare/plant-room.jpg'],
        ['num'=>'3','title'=>'Connect the work',        'desc'=>'Keep installation, servicing, reports and equipment history aligned around the same site.',                                                       'img'=>'images/healthcare/line-6000-solutions.jpg'],
        ['num'=>'4','title'=>'Keep the next step clear','desc'=>'Use call-outs, parts route, technical assistance and records to guide follow-up work.',                                                           'img'=>'images/healthcare/repairs-hero.jpg'],
    ];
    @endphp

    <div class="flex flex-col sm:flex-row items-stretch gap-0 overflow-hidden reveal" style="transition-delay:100ms;">
        @foreach($siteSteps as $i => $step)
        <div class="group flex-1 relative overflow-hidden" style="min-height:460px;">
            <img src="{{ asset($step['img']) }}" alt="{{ $step['title'] }}"
                 class="w-full h-full object-cover object-center absolute inset-0 transition-transform duration-700 group-hover:scale-105">
            {{-- Default gradient --}}
            <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                 style="background:linear-gradient(to top, rgba(1,30,65,0.88) 0%, rgba(1,30,65,0.55) 40%, rgba(1,30,65,0.25) 100%);"></div>
            {{-- Hover overlay --}}
            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                 style="background:rgba(1,30,65,0.88);"></div>
            @if($i > 0)
            <div class="absolute inset-y-0 left-0 w-px" style="background:rgba(255,255,255,0.12);"></div>
            @endif
            <div class="absolute inset-0 p-6 lg:p-8 flex flex-col justify-end z-10">
                <div class="font-heading font-bold text-[#148af4] leading-none mb-2" style="font-size:2.8rem;">
                    {{ str_pad($step['num'], 2, '0', STR_PAD_LEFT) }}.
                </div>
                {{-- Description slides up on hover --}}
                <div class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-40 group-hover:opacity-100 transition-all duration-500 mb-3">
                    <p class="font-body text-white/80 text-sm leading-relaxed">{{ $step['desc'] }}</p>
                </div>
                <div class="font-heading font-bold text-white text-base lg:text-lg leading-snug">
                    {{ $step['title'] }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- ══════════════════════════════════════════
     9. ELECTROLUX PROFESSIONAL PARTNERSHIP
══════════════════════════════════════════ -->
<section class="bg-white py-20 lg:py-28">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-24 items-center">

            {{-- Left: copy --}}
            <div>
                <p class="font-heading font-bold text-[#148af4] text-xs uppercase tracking-widest mb-4">Electrolux Professional Partnership</p>
                <h2 class="font-heading font-bold text-navy text-[2.1rem] leading-tight mb-6">
                    Electrolux Professional platform<br>Irish Laundry Systems <span class="text-[#148af4]">local execution</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Electrolux Professional delivers the equipment platform, engineering and genuine parts route. Irish Laundry Systems brings it to Irish commercial sites through installation, maintenance and aftercare.
                </p>
                <a href="{{ route('electrolux') }}"
                   class="inline-flex items-center gap-2 font-body font-bold text-[#148af4] hover:text-navy text-sm transition-colors">
                    About the Electrolux partnership
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            {{-- Right: styled card --}}
            <div>
                <div class="rounded-2xl border border-gray-200 overflow-hidden" style="background:#f0f4f8;">
                    {{-- Logo header row --}}
                    <div class="flex items-center gap-4 px-6 py-5">
                        <img src="/images/logo/electrolux-partner.png"
                             alt="Authorised Electrolux Professional Partner"
                             class="h-12 w-auto object-contain flex-shrink-0">
                        <p class="font-body font-bold text-navy text-sm leading-snug">
                            Irish Laundry Systems is an<br><strong>Authorised Electrolux Professional Partner</strong>.
                        </p>
                    </div>
                    {{-- Divider --}}
                    <div class="h-px bg-gray-300 mx-6"></div>
                    {{-- Checklist --}}
                    <ul class="px-6 py-5 space-y-3">
                        @foreach([
                            'Authorised partner',
                            'Equipment knowledge',
                            'Genuine parts route',
                            'Local execution',
                        ] as $item)
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10" stroke-width="1.5"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 12 2 2 4-4"/>
                            </svg>
                            <span class="font-body text-navy text-sm leading-relaxed">{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     10. RESPONSIBLE EQUIPMENT NOTE
══════════════════════════════════════════ -->
<section class="relative overflow-hidden" style="min-height:540px;">
    {{-- Background image --}}
    <img src="{{ asset('images/equipment/td6-multihousing-room.jpg') }}"
         alt="Commercial laundry equipment"
         class="absolute inset-0 w-full h-full object-cover object-center">
    {{-- Dark overlay --}}
    <div class="absolute inset-0" style="background:rgba(1,30,65,0.45);"></div>
    {{-- Two-column: logo left, card right --}}
    <div class="relative z-10 flex items-center px-6 lg:px-20 py-20 gap-10 lg:gap-16" style="min-height:580px;">
        {{-- Left: EcoVadis medal, huge, outside the card --}}
        <div class="hidden lg:flex flex-1 items-center justify-center">
            <img src="{{ asset('images/about/Ecovadis-Sustainability-Gold_2025_medal-1-e1773061619801-V3.png') }}"
                 alt="EcoVadis Sustainability Gold 2025"
                 class="w-[480px] xl:w-[560px] h-auto object-contain drop-shadow-2xl">
        </div>
        {{-- Right: dark card --}}
        <div class="rounded-2xl px-10 lg:px-14 py-12 lg:py-14 w-full lg:max-w-xl text-center reveal"
             style="background:rgba(1,30,65,0.82); backdrop-filter:blur(6px);">
            <p class="font-heading font-bold text-[#148af4] text-xs uppercase tracking-widest mb-4">Responsible Equipment</p>
            <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl leading-tight mb-6">
                <span class="text-[#148af4]">Efficient equipment choices,</span><br>planned around the site
            </h2>
            <p class="font-body text-white/70 text-base leading-relaxed mb-6">
                Electrolux Professional equipment can help improve water use, energy use and lifecycle performance compared with older laundry equipment. Irish Laundry Systems helps customers plan, install, maintain and replace equipment with site requirements, lifecycle cost and responsible disposal in mind.
            </p>
            <p class="font-body text-white/40 text-sm leading-relaxed border-l-2 border-[#148af4]/40 pl-4 text-left">
                Any sustainability credential, including EcoVadis, must be clearly attributed to Electrolux Professional Group, not to Irish Laundry Systems.
            </p>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     11. COMPANY HISTORY — timeline
══════════════════════════════════════════ -->
<style>
.ils-history-box { transition:background 0.35s ease; border-radius:0.75rem; }
.ils-history-box:hover { background:rgba(1,30,65,0.03); }
.ils-history-img { opacity:0; transform:translateY(-50%) scale(0.85); transition:opacity 0.45s ease, transform 0.45s ease; pointer-events:none; }
.ils-history-box:hover .ils-history-img { opacity:1; transform:translateY(-50%) scale(1); pointer-events:auto; }
</style>

<section class="py-24 lg:py-36 bg-white overflow-hidden">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24 items-start mb-16 reveal">
            <div>
                <p class="font-heading font-bold text-[#148af4] text-xs uppercase tracking-widest mb-4">Company History</p>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-5xl leading-tight">
                    From electrical contracting<br>to <span class="text-[#148af4]">commercial laundry expertise</span>
                </h2>
            </div>
            <div class="lg:pt-9">
                <p class="font-body text-gray-500 text-base leading-relaxed">
                    Irish Laundry Systems was not built as a generic equipment supplier. The company grew from practical electrical contracting and Electrolux service experience, then developed into a commercial laundry partner for sites that need equipment, maintenance, repairs and aftercare to stay aligned.
                </p>
            </div>
        </div>

        @php
        $history = [
            ['year'=>'1987',       'label'=>'year',    'title'=>'Electrical foundations',                          'body'=>'Maurice McDonagh started the company as an electrical contractor, establishing the technical base that still shapes the business.',                                                                          'img'=>'images/about/about-team.jpg'],
            ['year'=>'Electrolux', 'label'=>'roots',   'title'=>'Industrial laundry service experience',           'body'=>'Frank McDonagh brought more than 30 years of Electrolux experience, including service management and specialist industrial laundry knowledge.',                                                           'img'=>'images/logo/Electrolux_logo.svg.png', 'imgLogo'=>true],
            ['year'=>'Mid-1990s',  'label'=>'decade',  'title'=>'Irish Laundry Systems takes shape',               'body'=>'Maurice and Frank combined electrical contracting experience with commercial laundry equipment knowledge to form Irish Laundry Systems.',                                                                  'img'=>'images/about/about-team.jpg'],
            ['year'=>'Today',      'label'=>'ongoing', 'title'=>'Commercial laundry care around real site needs',  'body'=>'Today, Irish Laundry Systems works across equipment supply, rental, maintenance, repairs and aftercare for commercial laundry sites across Dublin and Ireland.',                                          'img'=>'images/about/about-engineers.jpg'],
        ];
        @endphp

        <div class="ils-history-list relative">
            <div class="hidden lg:block absolute top-16 bottom-16 w-px bg-navy/10 rounded-full" style="left:270px;"></div>
            @foreach($history as $i => $m)
            <div class="ils-history-box relative flex items-center py-14 px-4 lg:px-0 {{ !$loop->last ? 'border-b border-navy/8' : '' }} cursor-default reveal" style="transition-delay:{{ $i * 80 }}ms">
                <div class="hidden lg:block flex-shrink-0 text-right pr-10" style="width:270px;">
                    <div class="font-heading font-bold text-[#148af4] leading-none" style="font-size:2.5rem;line-height:1.1;word-break:break-word;">{{ $m['year'] }}</div>
                    <div class="font-body text-navy/35 text-xs uppercase tracking-widest mt-2">{{ $m['label'] }}</div>
                </div>
                <div class="hidden lg:block absolute flex-shrink-0 z-10" style="left:270px;transform:translateX(-50%);">
                    <div class="w-3 h-3 rounded-full bg-[#148af4]" style="box-shadow:0 0 0 5px rgba(20,138,244,0.18);"></div>
                </div>
                <div class="flex-1 lg:pl-16 relative z-10">
                    <div class="lg:hidden font-heading font-bold text-[#148af4] leading-none mb-3" style="font-size:2.5rem;">{{ $m['year'] }}</div>
                    <div class="font-heading font-bold text-navy text-xl lg:text-2xl mb-3">{{ $m['title'] }}</div>
                    <p class="font-body text-gray-500 text-sm lg:text-base leading-relaxed max-w-xl">{{ $m['body'] }}</p>
                </div>
                <div class="ils-history-img absolute hidden lg:block rounded-2xl overflow-hidden shadow-2xl" style="right:0;top:50%;width:18.5rem;height:20.5rem;z-index:20;{{ !empty($m['imgLogo']) ? 'background:#fff;' : '' }}">
                    <img src="{{ asset($m['img']) }}" alt="{{ $m['title'] }}" class="w-full h-full {{ !empty($m['imgLogo']) ? 'object-contain p-8' : 'object-cover' }}">
                </div>
            </div>
            @endforeach
        </div>

        <p class="font-body text-gray-400 text-xs mt-10 reveal">Irish Laundry Systems is the trading name of D.S.B. Electrical (Templeogue) Limited.</p>

    </div>
</section>

<!-- ══════════════════════════════════════════
     12. LONG-TERM TRUST / TESTIMONIALS
══════════════════════════════════════════ -->
@include('components.testimonials', ['heading' => 'Chosen by sites where laundry equipment<br><span class="text-[#148af4]">cannot be treated as an afterthought</span>', 'light' => false])

@include('components.proof-bar')

<!-- ══════════════════════════════════════════
     13. FINAL CTA
══════════════════════════════════════════ -->
@include('components.cta-downtime-form', ['pageSource' => 'about_cta'])

@endsection
