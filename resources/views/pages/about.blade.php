@extends('layouts.app')

@section('meta')
<meta name="description" content="Built from electrical contracting roots and Electrolux Professional service experience. Irish Laundry Systems supports 38 client locations across Dublin and Ireland since 1987.">
@endsection

@section('content')

<!-- ══════════════════════════════════════════
     1. HERO
══════════════════════════════════════════ -->
<section class="relative overflow-hidden" style="height:720px; min-height:560px; background-color:#011E41;">

    <img src="{{ asset('images/about/about-team.jpg') }}"
         alt="ILS engineering team"
         loading="eager" decoding="async"
         class="absolute inset-0 w-full h-full object-cover object-center">

    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,1.00) 0%, rgba(1,30,65,0.88) 35%, rgba(1,30,65,0.45) 60%, transparent 80%);"></div>

    <div class="relative z-10 h-full flex items-center">
        <div class="max-w-screen-2xl mx-auto w-full px-6 sm:px-10 lg:px-20">
            <div class="max-w-2xl">
                <p class="font-heading font-bold text-[#148af4] text-xs uppercase tracking-widest mb-4">About Irish Laundry Systems</p>
                <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl xl:text-6xl leading-tight mb-6">
                    Keeping <span class="text-[#148af4]">commercial laundry equipment,
                    service and aftercare connected</span> since 1987.
                </h1>
                <p class="font-body text-white/70 text-base lg:text-lg leading-relaxed mb-8 max-w-xl">
                    Built from electrical contracting roots and Electrolux Professional service experience, Irish Laundry Systems supports 38 client locations across Dublin and Ireland with equipment supply, rental, maintenance, repairs and aftercare for business-critical laundry rooms.
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
                <!-- Trust indicators -->
                <div class="flex flex-wrap items-center gap-x-5 gap-y-2">
                    @foreach(['Engineering-led since 1987', '38 client locations', 'Authorised Electrolux Professional Partner'] as $i => $trust)
                    @if($i > 0)<span class="text-white/25 hidden sm:inline">|</span>@endif
                    <span class="font-body text-white/50 text-xs">{{ $trust }}</span>
                    @endforeach
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
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-5xl leading-tight">
                    Commercial laundry decisions <span class="text-[#148af4]">do not stop at the machine.</span>
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
            <h2 class="font-heading font-bold text-navy text-2xl lg:text-4xl leading-tight max-w-2xl">
                Technical work, recognised partners and <span class="text-[#148af4]">real sites served</span> over more than three decades.
            </h2>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
            @foreach([
                ['1987', 'year',       'Since 1987',                      'Commercial laundry engineering roots in Ireland.'],
                ['38',   'locations',  '38 client locations',              'Commercial laundry locations served across Dublin and Ireland.'],
                ['EP',   'partner',    'Electrolux Professional Partner',  'Authorised partner for a recognised professional laundry equipment platform.'],
                ['RGI',  'certified',  'Registered technical capability',  'Safe Electric registered and Registered Gas Installer (RGI) contractor capability.'],
            ] as [$num, $sub, $title, $desc])
            <div class="border-b border-gray-300 pb-5 reveal">
                <div class="flex items-end gap-3 mb-3">
                    <div class="font-heading font-bold text-navy text-5xl lg:text-6xl leading-none flex-shrink-0">{{ $num }}</div>
                    <p class="font-body text-gray-400 text-xs uppercase tracking-widest pb-1">{{ $sub }}</p>
                </div>
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
<section class="py-20 lg:py-28" style="background-color:#011E41; background-image:linear-gradient(rgba(255,255,255,0.035) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.035) 1px, transparent 1px); background-size:52px 52px;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <!-- 2-col: image left | content right -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center mb-16">

            <!-- Image -->
            <div class="overflow-hidden rounded-2xl reveal" style="height:520px;">
                <img src="{{ asset('images/about/about-engineers.jpg') }}"
                     alt="ILS engineering team on site"
                     class="w-full h-full object-cover object-center">
            </div>

            <!-- Content -->
            <div class="reveal">
                <p class="font-heading font-bold text-[#148af4] text-xs uppercase tracking-widest mb-5">Technical Foundations</p>
                <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl leading-tight mb-6">
                    <span class="text-[#148af4]">Electrical contracting roots.</span><br>
                    <span class="text-[#148af4]">Commercial laundry equipment experience.</span>
                </h2>
                <p class="font-body text-white/60 text-base leading-relaxed mb-8">
                    Irish Laundry Systems combines practical electrical knowledge, Electrolux Professional equipment experience and site-level laundry understanding. That background helps customers avoid disconnected decisions around specification, installation, maintenance, repairs and follow-up work.
                </p>

                <!-- Credential chips -->
                <div class="flex flex-wrap gap-2.5">
                    @foreach(['Safe Electric registered', 'Registered Gas Installer contractor capability', 'Electrolux Professional equipment experience', 'Installed-base knowledge'] as $chip)
                    <span class="font-body text-xs font-medium text-white/70 border border-white/20 rounded-full px-4 py-2" style="background:rgba(255,255,255,0.05);">{{ $chip }}</span>
                    @endforeach
                </div>
            </div>

        </div>

        <!-- 3 Proof Cards — full width below -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            @foreach([
                ['num' => '1', 'title' => 'Registered technical work',  'body' => 'Electrical and gas contractor capability for commercial laundry installation, servicing and safety-led work.'],
                ['num' => '2', 'title' => 'Equipment knowledge',         'body' => 'Experience around washers, dryers, barrier washers, ironers and installed laundry rooms.'],
                ['num' => '3', 'title' => 'Site-level judgement',        'body' => 'Understanding of utilities, access, usage pressure, service history, parts route and practical next steps.'],
            ] as $i => $card)
            <div class="relative border border-white/[0.1] p-6 lg:p-8 flex flex-col reveal" style="background:rgba(255,255,255,0.03); transition-delay:{{ $i * 100 }}ms;">
                <span class="absolute top-2.5 left-2.5 w-3.5 h-3.5 border-t border-l border-white/30 pointer-events-none"></span>
                <span class="absolute top-2.5 right-2.5 w-3.5 h-3.5 border-t border-r border-white/30 pointer-events-none"></span>
                <span class="absolute bottom-2.5 left-2.5 w-3.5 h-3.5 border-b border-l border-white/30 pointer-events-none"></span>
                <span class="absolute bottom-2.5 right-2.5 w-3.5 h-3.5 border-b border-r border-white/30 pointer-events-none"></span>
                <p class="font-heading font-bold text-[#148af4]/60 text-xs mb-3"><span class="text-white/20">//</span>{{ $card['num'] }}</p>
                <div class="font-heading font-bold text-white text-lg mb-3">{{ $card['title'] }}</div>
                <p class="font-body text-white/50 text-sm leading-relaxed">{{ $card['body'] }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>

<!-- ══════════════════════════════════════════
     6. SITE, WORKFLOW & CAPACITY STRIP
══════════════════════════════════════════ -->
<section class="py-20 lg:py-28" style="background-color:#148af4;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24 items-start">

            <div>
                <p class="font-heading font-bold text-white/60 text-xs uppercase tracking-widest mb-4">Site, Workflow & Capacity</p>
                <h2 class="font-heading font-bold text-white text-3xl lg:text-5xl leading-tight">
                    Designed around your <span class="text-white/80">site, workflow and capacity.</span>
                </h2>
            </div>

            <div class="lg:pt-10 space-y-6">
                <p class="font-body text-white/80 text-base leading-relaxed">
                    Every laundry room has its own pressure points: space, utilities, equipment condition, workflow and daily volume. Irish Laundry Systems uses that site understanding to guide equipment supply, rental, maintenance, repairs and aftercare around what the room actually needs.
                </p>
                <div class="flex flex-wrap gap-3">
                    @foreach(['Room conditions', 'Equipment use', 'Capacity pressure', 'Practical next step'] as $point)
                    <span class="font-body text-xs font-medium text-white border border-white/40 rounded-full px-4 py-2" style="background:rgba(255,255,255,0.15);">{{ $point }}</span>
                    @endforeach
                </div>
            </div>

        </div>
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
                Equipment supply, service and aftercare<br>connected around <span class="text-[#148af4]">real site needs.</span>
            </h2>
        </div>

        <!-- Stacked horizontal banner cards -->
        <div class="flex flex-col gap-4">

            @php
            $routes = [
                [
                    'num'   => '1',
                    'title' => 'Plan, Supply & Install',
                    'body'  => 'Site planning, equipment selection, supply, delivery, installation and commissioning for commercial laundry rooms.',
                    'cta'   => 'View equipment',
                    'href'  => route('equipment'),
                    'img'   => 'images/equipment/td6-multihousing-room.jpg',
                ],
                [
                    'num'   => '2',
                    'title' => 'Rent & Maintain',
                    'body'  => 'Equipment rental, planned inspections, service contracts, maintenance records and ongoing care around equipment use.',
                    'cta'   => 'Service contracts',
                    'href'  => route('service-contracts'),
                    'img'   => 'images/healthcare/repairs-hero.jpg',
                ],
                [
                    'num'   => '3',
                    'title' => 'Repair & Support',
                    'body'  => 'Call-outs, fault diagnosis, parts route, technical assistance and follow-up after work is completed.',
                    'cta'   => 'Repairs & call-outs',
                    'href'  => route('repairs'),
                    'img'   => 'images/healthcare/Service Contracts.png',
                ],
            ];
            @endphp

            @foreach($routes as $i => $route)
            <div class="relative overflow-hidden rounded-2xl reveal group" style="height:220px; transition-delay:{{ $i * 80 }}ms;">

                {{-- Background image --}}
                <img src="{{ asset($route['img']) }}" alt="{{ $route['title'] }}"
                     class="absolute inset-0 w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105">

                {{-- Gradient overlay: dark left → transparent right --}}
                <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.95) 0%, rgba(1,30,65,0.80) 35%, rgba(1,30,65,0.45) 60%, transparent 85%);"></div>

                {{-- Content --}}
                <div class="relative z-10 h-full flex items-center px-8 lg:px-12">
                    <div class="max-w-lg">
                        <p class="font-heading font-bold text-[#148af4] text-xs mb-2">
                            <span class="text-white/30">// </span>{{ $route['num'] }}
                        </p>
                        <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-snug mb-2">{{ $route['title'] }}</h3>
                        <p class="font-body text-white/60 text-sm leading-relaxed mb-4 max-w-sm">{{ $route['body'] }}</p>
                        <a href="{{ $route['href'] }}"
                           class="inline-flex items-center gap-2 font-body font-bold text-white hover:text-[#148af4] text-sm transition-colors">
                            {{ $route['cta'] }}
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
            @endforeach

        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     8. HOW OUR SITE ROUTE WORKS — 4 steps
══════════════════════════════════════════ -->
<section class="py-20 lg:py-28" style="background-color:#011E41; background-image:linear-gradient(rgba(255,255,255,0.035) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.035) 1px, transparent 1px); background-size:52px 52px;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <p class="font-heading font-bold text-[#148af4] text-xs uppercase tracking-widest mb-5">How We Work Around the Site</p>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mb-14">
            <h2 class="font-heading font-bold text-white text-3xl lg:text-5xl leading-tight">
                From site understanding to the <span class="text-[#148af4]">right next step.</span>
            </h2>
            <div class="lg:pt-4">
                <p class="font-body text-white/55 text-base leading-relaxed">
                    Irish Laundry Systems starts with the room, the equipment and the pressure on the site. The aim is to choose the right route, keep records clear and make the next service decision easier.
                </p>
            </div>
        </div>

        <div class="flex flex-col sm:flex-row items-stretch gap-0 reveal" style="transition-delay:100ms;">

            @php
            $siteSteps = [
                ['num'=>'1','title'=>'Understand the site',     'body'=>'Review equipment, utilities, access, workflow, capacity and pressure points.',                                                              'img'=>'images/hero/hero-technician-inspection.png'],
                ['num'=>'2','title'=>'Define the route',        'body'=>'Identify whether the site needs equipment supply, rental, planned maintenance, repair work or a wider aftercare path.',                     'img'=>'images/healthcare/plant-room.jpg'],
                ['num'=>'3','title'=>'Connect the work',        'body'=>'Keep installation, servicing, reports and equipment history aligned around the same site.',                                                  'img'=>'images/healthcare/line-6000-solutions.jpg'],
                ['num'=>'4','title'=>'Keep the next step clear','body'=>'Use call-outs, parts route, technical assistance and records to guide follow-up work.',                                                     'img'=>'images/healthcare/repairs-hero.jpg'],
            ];
            @endphp

            @foreach($siteSteps as $i => $step)

            @if($i > 0)
            <div class="hidden sm:flex items-center justify-center flex-shrink-0 px-1" style="margin-top:110px;">
                <svg class="w-5 h-5 text-[#148af4]/50" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </div>
            @endif

            <div class="relative flex-1 flex flex-col border border-white/[0.1] overflow-hidden" style="background:rgba(255,255,255,0.03);">
                <span class="absolute top-2.5 left-2.5 w-3.5 h-3.5 border-t border-l border-white/30 pointer-events-none"></span>
                <span class="absolute top-2.5 right-2.5 w-3.5 h-3.5 border-t border-r border-white/30 pointer-events-none"></span>
                <span class="absolute bottom-2.5 left-2.5 w-3.5 h-3.5 border-b border-l border-white/30 pointer-events-none"></span>
                <span class="absolute bottom-2.5 right-2.5 w-3.5 h-3.5 border-b border-r border-white/30 pointer-events-none"></span>
                <div class="overflow-hidden" style="height:200px;">
                    <img src="{{ asset($step['img']) }}" alt="{{ $step['title'] }}"
                         class="w-full h-full object-cover object-center transition-transform duration-700 hover:scale-105">
                </div>
                <div class="w-full h-px bg-white/[0.08]"></div>
                <div class="p-5 flex flex-col flex-1">
                    <p class="font-heading font-bold text-[#148af4] text-sm mb-2">
                        <span class="text-white/30">//</span>{{ $step['num'] }} {{ $step['title'] }}
                    </p>
                    <p class="font-body text-white/45 text-xs leading-relaxed">{{ $step['body'] }}</p>
                </div>
            </div>

            @endforeach

        </div>

        <div class="text-center mt-12 reveal" style="transition-delay:200ms;">
            <a href="{{ route('request-assessment') }}"
               class="inline-flex items-center gap-2 font-heading font-bold text-navy bg-white text-sm px-8 py-3.5 rounded-full hover:bg-[#148af4] hover:text-white transition-colors duration-300">
                Request Assessment
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>

    </div>
</section>

<!-- ══════════════════════════════════════════
     9. ELECTROLUX PROFESSIONAL PARTNERSHIP
══════════════════════════════════════════ -->
<section class="bg-white py-20 lg:py-28">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-24 items-center">
            <div>
                <p class="font-heading font-bold text-[#148af4] text-xs uppercase tracking-widest mb-4">Electrolux Professional Partnership</p>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-5xl leading-tight mb-6">
                    Electrolux Professional platform.<br>Irish Laundry Systems <span class="text-[#148af4]">local execution.</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Electrolux Professional provides the equipment platform, product engineering, technical documentation and genuine parts route. Irish Laundry Systems brings that platform into Irish commercial laundry sites through assessment, installation, maintenance, repairs and aftercare.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-10">
                    @foreach(['Authorised partner', 'Equipment knowledge', 'Genuine parts route', 'Local execution'] as $point)
                    <div class="flex items-center gap-2.5">
                        <svg class="w-4 h-4 text-[#148af4] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/>
                        </svg>
                        <span class="font-body text-navy text-sm font-medium">{{ $point }}</span>
                    </div>
                    @endforeach
                </div>

                <a href="{{ route('electrolux') }}"
                   class="inline-flex items-center gap-2 font-body font-bold text-navy hover:text-[#148af4] text-sm transition-colors">
                    About the partnership
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>
            <div class="flex items-center justify-center lg:justify-end">
                <img src="/images/logo/electrolux-partner.png"
                     alt="Authorised Electrolux Professional Partner"
                     class="h-32 lg:h-40 w-auto object-contain">
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     10. RESPONSIBLE EQUIPMENT NOTE
══════════════════════════════════════════ -->
<section class="bg-[#f7f8fa] py-20 lg:py-28">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24 items-start">

            <div>
                <p class="font-heading font-bold text-[#148af4] text-xs uppercase tracking-widest mb-4">Responsible Equipment</p>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-5xl leading-tight">
                    <span class="text-[#148af4]">Efficient equipment choices,</span><br>planned around the site.
                </h2>
            </div>

            <div class="lg:pt-10 space-y-6">
                <p class="font-body text-gray-500 text-base leading-relaxed">
                    Electrolux Professional equipment can help improve water use, energy use and lifecycle performance compared with older laundry equipment. Irish Laundry Systems helps customers plan, install, maintain and replace equipment with site requirements, lifecycle cost and responsible disposal in mind.
                </p>
                <p class="font-body text-gray-400 text-sm leading-relaxed border-l-2 border-[#148af4]/30 pl-4">
                    Any sustainability credential, including EcoVadis, must be clearly attributed to Electrolux Professional Group, not to Irish Laundry Systems.
                </p>
            </div>

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

        <div class="mb-6 reveal">
            <p class="font-heading font-bold text-[#148af4] text-xs uppercase tracking-widest mb-4">Company History</p>
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-5xl leading-tight">
                From electrical contracting<br>to <span class="text-[#148af4]">commercial laundry expertise.</span>
            </h2>
        </div>

        <p class="font-body text-gray-500 text-base leading-relaxed max-w-2xl mb-16 reveal">
            Irish Laundry Systems was not built as a generic equipment supplier. The company grew from practical electrical contracting and Electrolux service experience, then developed into a commercial laundry partner for sites that need equipment, maintenance, repairs and aftercare to stay aligned.
        </p>

        @php
        $history = [
            ['year'=>'1987',       'label'=>'year',    'title'=>'Electrical foundations',                          'body'=>'Maurice McDonagh started the company as an electrical contractor, establishing the technical base that still shapes the business.',                                                                          'img'=>'images/about/about-team.jpg'],
            ['year'=>'Electrolux', 'label'=>'roots',   'title'=>'Industrial laundry service experience',           'body'=>'Frank McDonagh brought more than 30 years of Electrolux experience, including service management and specialist industrial laundry knowledge.',                                                           'img'=>'images/about/about-engineers.jpg'],
            ['year'=>'Mid-1990s',  'label'=>'decade',  'title'=>'Irish Laundry Systems takes shape',               'body'=>'Maurice and Frank combined electrical contracting experience with commercial laundry equipment knowledge to form Irish Laundry Systems.',                                                                  'img'=>'images/about/about-team.jpg'],
            ['year'=>'Today',      'label'=>'ongoing', 'title'=>'Commercial laundry care around real site needs',  'body'=>'Today, Irish Laundry Systems works across equipment supply, rental, maintenance, repairs and aftercare for commercial laundry sites across Dublin and Ireland.',                                          'img'=>'images/about/about-engineers.jpg'],
        ];
        @endphp

        <div class="ils-history-list relative">
            <div class="hidden lg:block absolute top-16 bottom-16 w-px bg-navy/10 rounded-full" style="left:210px;"></div>
            @foreach($history as $i => $m)
            <div class="ils-history-box relative flex items-center py-14 px-4 lg:px-0 {{ !$loop->last ? 'border-b border-navy/8' : '' }} cursor-default reveal" style="transition-delay:{{ $i * 80 }}ms">
                <div class="hidden lg:block flex-shrink-0 text-right pr-10" style="width:210px;">
                    <div class="font-heading font-bold text-[#148af4] leading-none" style="font-size:3rem;line-height:1;">{{ $m['year'] }}</div>
                    <div class="font-body text-navy/35 text-xs uppercase tracking-widest mt-2">{{ $m['label'] }}</div>
                </div>
                <div class="hidden lg:block absolute flex-shrink-0 z-10" style="left:210px;transform:translateX(-50%);">
                    <div class="w-3 h-3 rounded-full bg-[#148af4]" style="box-shadow:0 0 0 5px rgba(20,138,244,0.18);"></div>
                </div>
                <div class="flex-1 lg:pl-16 relative z-10">
                    <div class="lg:hidden font-heading font-bold text-[#148af4] leading-none mb-3" style="font-size:2.5rem;">{{ $m['year'] }}</div>
                    <div class="font-heading font-bold text-navy text-xl lg:text-2xl mb-3">{{ $m['title'] }}</div>
                    <p class="font-body text-gray-500 text-sm lg:text-base leading-relaxed max-w-xl">{{ $m['body'] }}</p>
                </div>
                <div class="ils-history-img absolute hidden lg:block rounded-2xl overflow-hidden shadow-2xl" style="right:0;top:50%;width:18.5rem;height:20.5rem;z-index:20;">
                    <img src="{{ asset($m['img']) }}" alt="{{ $m['title'] }}" class="w-full h-full object-cover">
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
@include('components.testimonials', ['heading' => 'Chosen by sites where laundry equipment cannot be treated as an afterthought.', 'light' => true])

@include('components.proof-bar')

<!-- ══════════════════════════════════════════
     13. FINAL CTA
══════════════════════════════════════════ -->
@include('components.cta-downtime-form', ['pageSource' => 'about_cta'])

@endsection
