@extends('layouts.app')

@section('meta')
<meta name="description" content="Irish Laundry Systems supplies, installs and supports Electrolux Professional commercial laundry equipment across Dublin and Ireland — equipment, rental, maintenance, repairs and aftercare since 1987.">
@endsection

@section('content')

<!-- ══════════════════════════════════════════
     1. HERO
══════════════════════════════════════════ -->
<section class="relative overflow-hidden lg:!h-[720px]" style="height:auto; min-height:540px; background-color:#011E41;">

    <img src="{{ asset('images/pages/about/aboutimagehero.png') }}"
         alt="ILS engineering team"
         loading="eager" decoding="async"
         class="absolute inset-y-0 right-0 h-full w-auto max-w-none object-cover object-right"
         style="transform: scale(1.12); transform-origin: right center;">

    {{-- Gradient overlay: navy fills the left and fades smoothly so the seam is invisible --}}
    <div class="absolute inset-0" style="background: linear-gradient(90deg, #011E41 0%, #011E41 26%, rgba(1,30,65,0.88) 40%, rgba(1,30,65,0.60) 54%, rgba(1,30,65,0.30) 68%, rgba(1,30,65,0.10) 80%, transparent 90%);"></div>

    <div class="relative z-10 h-full flex items-center py-16 lg:py-0">
        <div class="max-w-screen-2xl mx-auto w-full px-6 sm:px-10 lg:px-20">
            <div class="max-w-4xl">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">About Irish Laundry Systems</p>
                <h1 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight mb-6 text-balance">
                    Commercial laundry equipment and service expertise<br class="hidden lg:block"> <span class="text-[#148af4]">across Ireland since 1987</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl text-pretty">
                    Irish Laundry Systems supplies, installs and supports Electrolux Professional laundry equipment for commercial operations across Ireland.
                </p>
                <div class="flex flex-wrap gap-4 mb-10">
                    <a href="{{ route('services') }}"
                       class="inline-flex items-center gap-2 bg-white text-navy font-body font-bold text-base px-6 py-3 rounded-lg hover:bg-white/90 transition-colors">
                        Explore Our Services
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                    <a href="#company-history"
                       class="inline-flex items-center gap-2 border border-white/40 text-white font-body font-bold text-base px-6 py-3 rounded-lg hover:border-white transition-colors">
                        Our Story
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- 2. ELECTROLUX TRUST STRIP -->
@include('components.partner-strip')

<!-- ══════════════════════════════════════════
     3. WHY IRISH LAUNDRY SYSTEMS
══════════════════════════════════════════ -->
<section class="bg-white py-20 lg:py-28">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24 items-start">

            <div>
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Why Irish Laundry Systems</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    Engineering knowledge that continues<br class="hidden lg:block"> <span class="text-[#148af4]">after installation</span>
                </h2>
            </div>

            <div class="lg:pt-8 space-y-5">
                <p class="font-body text-gray-500 text-base leading-relaxed text-pretty">
                    From planning and installation to maintenance, repairs and aftercare, customers deal with people who know the equipment.
                </p>
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
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Experience & Scale</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                Commercial laundry experience <span class="text-[#148af4]">backed by proven scale</span>
            </h2>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
            @foreach([
                ['Since 1987', '',                         'Irish Engineering Heritage',         'Commercial laundry experience built on Irish electrical contracting and engineering roots.', null],
                ['100+',       'Clients',                  'Long-standing Relationships',        'Commercial laundry customers supported across Dublin and throughout Ireland.', null],
                ['1,000+',     'Equipments Installations', 'Installation Experience',            'Professional laundry equipment supplied and installed for commercial sites across Ireland.', null],
                ['Authorised', 'Authorised Partner',       'Electrolux Professional Partnership', 'Authorised local supply, installation and aftercare for Electrolux Professional laundry equipment.', 'images/logo/electrolux-partner.png'],
            ] as [$num, $sub, $title, $desc, $logo])
            <div class="border-b border-gray-300 pb-5 reveal">
                @if($logo)
                <div class="flex items-end gap-3 mb-3" style="min-height:6.5rem;">
                    <img src="{{ asset($logo) }}" alt="{{ $title }}" class="h-24 lg:h-[6.5rem] w-auto object-contain -ml-1" style="transform:translateY(26.8%);" loading="lazy" decoding="async">
                    @if($sub)<p class="font-body text-gray-400 text-xs uppercase tracking-widest pb-1">{{ $sub }}</p>@endif
                </div>
                @else
                <div class="flex items-end gap-3 mb-3" style="min-height:6.5rem;">
                    <div class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-none flex-shrink-0">{{ $num }}</div>
                    @if($sub)<p class="font-body text-gray-400 text-xs uppercase tracking-widest pb-1">{{ $sub }}</p>@endif
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
     5. TECHNICAL FOUNDATIONS
══════════════════════════════════════════ -->
<section class="bg-white py-20 lg:py-28">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <!-- 2-col: image left | content right -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <!-- Image -->
            <div class="overflow-hidden rounded-2xl reveal h-[320px] sm:h-[420px] lg:h-[520px]">
                <img src="{{ asset('images/pages/about/Technical%20Standardsimage.png') }}"
                     alt="ILS engineering team on site"
                     class="w-full h-full object-cover object-center">
            </div>

            <!-- Content -->
            <div class="reveal">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Technical Standards</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                    Professional standards<br class="hidden lg:block">from <span class="text-[#148af4]">planning<br class="hidden lg:block">through aftercare</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-6 text-pretty">
                    Professional registrations, manufacturer training and ongoing technical development help keep product knowledge current and technical standards consistent.
                </p>

                <!-- Proof-point chips -->
                <div class="flex flex-wrap gap-2.5 mb-8">
                    @foreach([
                        'Professional Registrations',
                        'Manufacturer Training',
                        'Ongoing Development',
                        'Planning to Aftercare',
                    ] as $chip)
                    <span class="font-body text-sm font-medium text-navy/70 border border-navy/20 rounded-full px-5 py-2.5">{{ $chip }}</span>
                    @endforeach
                </div>

                <!-- Certification badges -->
                <div class="flex flex-wrap items-center gap-6 pt-2">
                    <img src="{{ asset('images/logo/safe-electric.png') }}"
                         alt="Registered Electrical Contractor — Safe Electric"
                         class="h-16 lg:h-20 w-auto object-contain" loading="lazy" decoding="async">
                    <img src="{{ asset('images/logo/rgi-logo.png') }}"
                         alt="Registered Gas Installer"
                         class="h-16 lg:h-20 w-auto object-contain" loading="lazy" decoding="async">
                </div>
            </div>

        </div>


    </div>
</section>

<!-- ══════════════════════════════════════════
     6. SUPPORT OVERVIEW — radial hub (white, logo centre)
══════════════════════════════════════════ -->
<section class="bg-white py-20 lg:py-28 overflow-hidden">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        @php
        // 6 nodes clockwise from top-left, matching the segmented ring (darkest segment = top-right)
        $ringNodes = [
            ['icon' => 'rental-gain-119', 'sc' => '0.871', 'label' => 'Equipment Supply',       'left' => '37.4%',  'top' => '20.1%', 'side' => 'left'],
            ['icon' => '302', 'label' => 'Installation & Setup',   'left' => '62.6%',  'top' => '20.1%', 'side' => 'right'],
            ['icon' => '300', 'label' => 'Equipment Rental',       'left' => '74.05%', 'top' => '50%',   'side' => 'right'],
            ['icon' => '180', 'label' => 'Repairs & Call-Outs',    'left' => '62.6%',  'top' => '79.9%', 'side' => 'right'],
            ['icon' => '301', 'label' => 'Preventive Maintenance', 'left' => '37.4%',  'top' => '79.9%', 'side' => 'left'],
            ['icon' => 'aftercare-connected-94', 'sc' => '1.22', 'label' => 'Support & Aftercare',    'left' => '25.95%', 'top' => '50%',   'side' => 'left'],
        ];
        $blueFilter = 'filter:brightness(0) saturate(100%) invert(35%) sepia(96%) saturate(1500%) hue-rotate(196deg) brightness(103%);';
        @endphp

        {{-- Header --}}
        <div class="max-w-4xl mx-auto text-center mb-8 lg:mb-6 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Support Overview</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-5">
                One complete support system around<br class="hidden lg:block"> <span class="text-[#148af4]">your laundry operation</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed text-pretty">
                Keep equipment supply, installation and long-term service under one local provider throughout the equipment life cycle.
            </p>
        </div>

        {{-- Desktop: segmented ring with logo centre --}}
        <div class="hidden lg:block reveal" style="transition-delay:100ms;">
            <div class="relative mx-auto" style="max-width:1040px; aspect-ratio:1040 / 760;">

                {{-- segmented ring --}}
                <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2" style="width:54%;">
                    <svg viewBox="0 0 800 800" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true" class="w-full h-auto"><defs><filter id="segShadow" x="-15%" y="-15%" width="130%" height="130%"><feDropShadow dx="0" dy="7" stdDeviation="10" flood-color="#011E41" flood-opacity="0.14"/></filter></defs><g filter="url(#segShadow)"><path d="M 165.21 233.22 A 288 288 0 0 1 372.96 113.27 A 12 12 0 0 1 385.56 124.38 L 388.28 176.31 A 12 12 0 0 1 376.95 189.26 A 212 212 0 0 0 229.02 274.66 A 12 12 0 0 1 212.14 278 L 168.53 249.68 A 12 12 0 0 1 165.21 233.22 Z" fill="#FFFFFF" stroke="#C9D4DE" stroke-width="5"/><path d="M 427.04 113.27 A 288 288 0 0 1 634.79 233.22 A 12 12 0 0 1 631.47 249.68 L 587.86 278 A 12 12 0 0 1 570.98 274.66 A 212 212 0 0 0 423.05 189.26 A 12 12 0 0 1 411.72 176.31 L 414.44 124.38 A 12 12 0 0 1 427.04 113.27 Z" fill="#FFFFFF" stroke="#011E41" stroke-width="5"/><path d="M 661.83 280.05 A 288 288 0 0 1 661.83 519.95 A 12 12 0 0 1 645.92 525.3 L 599.59 501.69 A 12 12 0 0 1 594.04 485.41 A 212 212 0 0 0 594.04 314.59 A 12 12 0 0 1 599.59 298.31 L 645.92 274.7 A 12 12 0 0 1 661.83 280.05 Z" fill="#FFFFFF" stroke="#24436B" stroke-width="5"/><path d="M 634.79 566.78 A 288 288 0 0 1 427.04 686.73 A 12 12 0 0 1 414.44 675.62 L 411.72 623.69 A 12 12 0 0 1 423.05 610.74 A 212 212 0 0 0 570.98 525.34 A 12 12 0 0 1 587.86 522 L 631.47 550.32 A 12 12 0 0 1 634.79 566.78 Z" fill="#FFFFFF" stroke="#4A6A8E" stroke-width="5"/><path d="M 372.96 686.73 A 288 288 0 0 1 165.21 566.78 A 12 12 0 0 1 168.53 550.32 L 212.14 522 A 12 12 0 0 1 229.02 525.34 A 212 212 0 0 0 376.95 610.74 A 12 12 0 0 1 388.28 623.69 L 385.56 675.62 A 12 12 0 0 1 372.96 686.73 Z" fill="#FFFFFF" stroke="#7590AB" stroke-width="5"/><path d="M 138.17 519.95 A 288 288 0 0 1 138.17 280.05 A 12 12 0 0 1 154.08 274.7 L 200.41 298.31 A 12 12 0 0 1 205.96 314.59 A 212 212 0 0 0 205.96 485.41 A 12 12 0 0 1 200.41 501.69 L 154.08 525.3 A 12 12 0 0 1 138.17 519.95 Z" fill="#FFFFFF" stroke="#A0B4C6" stroke-width="5"/></g><g><circle cx="256" cy="150.58" r="17" fill="#FFFFFF" stroke="#011E41" stroke-width="5.5"/><circle cx="256" cy="150.58" r="6.5" fill="#011E41"/><circle cx="544" cy="150.58" r="17" fill="#FFFFFF" stroke="#011E41" stroke-width="5.5"/><circle cx="544" cy="150.58" r="6.5" fill="#011E41"/><circle cx="688" cy="400" r="17" fill="#FFFFFF" stroke="#011E41" stroke-width="5.5"/><circle cx="688" cy="400" r="6.5" fill="#011E41"/><circle cx="544" cy="649.42" r="17" fill="#FFFFFF" stroke="#011E41" stroke-width="5.5"/><circle cx="544" cy="649.42" r="6.5" fill="#011E41"/><circle cx="256" cy="649.42" r="17" fill="#FFFFFF" stroke="#011E41" stroke-width="5.5"/><circle cx="256" cy="649.42" r="6.5" fill="#011E41"/><circle cx="112" cy="400" r="17" fill="#FFFFFF" stroke="#011E41" stroke-width="5.5"/><circle cx="112" cy="400" r="6.5" fill="#011E41"/></g></svg>
                </div>

                {{-- centre: ILS logo + tagline (inside the ring's white circle) --}}
                <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-col items-center text-center" style="width:16rem;">
                    <img src="/images/pages/about/ILSLOGO2.png" alt="Irish Laundry Systems"
                         class="w-52 h-auto object-contain">
                </div>

                {{-- icon + label nodes around the ring --}}
                @foreach($ringNodes as $n)
                <div class="absolute flex items-center gap-3 -translate-y-1/2 {{ $n['side'] === 'left' ? '-translate-x-full' : '' }}"
                     style="left:{{ $n['left'] }}; top:{{ $n['top'] }};">
                    @if($n['side'] === 'left')
                    <span class="font-body font-bold text-navy text-sm leading-snug text-right max-w-[8.5rem]">{{ $n['label'] }}</span>
                    <img src="/images/icons/{{ $n['icon'] }}.png" alt="" class="w-24 h-24 object-contain flex-shrink-0" style="{{ $blueFilter }}{{ isset($n['sc']) ? 'transform:scale('.$n['sc'].');' : '' }}">
                    @else
                    <img src="/images/icons/{{ $n['icon'] }}.png" alt="" class="w-24 h-24 object-contain flex-shrink-0" style="{{ $blueFilter }}{{ isset($n['sc']) ? 'transform:scale('.$n['sc'].');' : '' }}">
                    <span class="font-body font-bold text-navy text-sm leading-snug max-w-[8.5rem]">{{ $n['label'] }}</span>
                    @endif
                </div>
                @endforeach

            </div>
        </div>

        {{-- Mobile: logo chip + dotted-circle nodes --}}
        <div class="lg:hidden reveal">
            <div class="flex justify-center mb-8">
                <img src="/images/pages/about/ILSLOGO2.png" alt="Irish Laundry Systems" class="w-48 h-auto object-contain">
            </div>
            <div class="flex flex-wrap justify-center gap-4">
                @foreach($ringNodes as $n)
                <div class="flex flex-col items-center justify-center text-center rounded-full bg-white"
                     style="width:8.5rem; height:8.5rem; border:2px dotted rgba(1,30,65,0.30);">
                    <img src="/images/icons/{{ $n['icon'] }}.png" alt="" class="w-14 h-14 object-contain mb-1.5" style="{{ $blueFilter }}{{ isset($n['sc']) ? 'transform:scale('.$n['sc'].');' : '' }}">
                    <span class="font-body font-bold text-navy text-xs leading-tight px-3">{{ $n['label'] }}</span>
                </div>
                @endforeach
            </div>
        </div>

        {{-- CTA --}}
        <div class="flex justify-center mt-6 lg:mt-4 reveal">
            <a href="{{ route('services') }}"
               class="inline-flex items-center gap-2 bg-navy text-white font-body font-bold text-sm px-6 py-3 rounded-lg hover:bg-navy/90 transition-colors">
                Explore Our Services
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>

    </div>
</section>

<!-- ══════════════════════════════════════════
     8. HOW WE WORK — 4 steps
══════════════════════════════════════════ -->
<section>
    {{-- Header: white bg, padded --}}
    <div class="bg-white pt-20 lg:pt-28 pb-12 lg:pb-14">
        <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
            <div class="max-w-5xl">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">How We Work</p>
                <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight mb-3 text-balance">
                    <span class="sm:block">A clear process from first review</span>
                    <span class="sm:block text-[#148af4]">through installation and aftercare</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed text-pretty">
                    Each stage is agreed before work begins, with clear information retained for future service.
                </p>
            </div>
        </div>
    </div>

    {{-- Full-width image strip — no container, no padding, edge to edge --}}
    @php
    $siteSteps = [
        ['num'=>'1','title'=>'Review the Operation',    'desc'=>'Review equipment, access, utilities, usage and service history.',                                       'img'=>'images/pages/about/Review%20the%20operation.png'],
        ['num'=>'2','title'=>'Confirm the Requirement', 'desc'=>'Agree the equipment or service work needed and what it must cover.',                                     'img'=>'images/pages/about/keepsupportclear.png'],
        ['num'=>'3','title'=>'Plan the Work',           'desc'=>'Coordinate delivery, installation or servicing around access and agreed timing.',                       'img'=>'images/shared/line-6000-solutions.jpg'],
        ['num'=>'4','title'=>'Keep Records Clear',      'desc'=>'Maintain service history and parts information for future maintenance, repair or replacement.',          'img'=>'images/shared/repairs-hero.jpg'],
    ];
    @endphp

    <div class="flex flex-col sm:flex-row items-stretch gap-0 overflow-hidden reveal" style="transition-delay:100ms;">
        @foreach($siteSteps as $i => $step)
        <div class="group flex-1 relative overflow-hidden min-h-[300px] sm:!min-h-[460px]">
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
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Electrolux Professional Partnership</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                    Global Electrolux<br class="hidden lg:block">Professional scale<br class="hidden lg:block"> <span class="text-[#148af4]">with Irish expertise<br class="hidden lg:block">since 1987</span>
                </h2>
                <div class="space-y-5 mb-8">
                    <p class="font-body text-gray-500 text-base leading-relaxed text-pretty">
                        Through a partnership established in 1987, Irish Laundry Systems gives customers local access to Electrolux Professional laundry equipment, genuine parts and product knowledge.
                    </p>
                </div>
                <a href="{{ route('electrolux') }}"
                   class="inline-flex items-center gap-2 font-body font-bold text-[#148af4] hover:text-navy text-sm transition-colors">
                    Explore the Electrolux Partnership
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            {{-- Right: styled card --}}
            <div>
                <div class="rounded-2xl border border-gray-200 overflow-hidden" style="background:#f0f4f8;">
                    {{-- Logo header row --}}
                    <div class="flex items-center gap-5 px-6 py-6">
                        <img src="/images/logo/electrolux-partner.png"
                             alt="Authorised Electrolux Professional Partner"
                             class="h-20 lg:h-24 w-auto object-contain flex-shrink-0">
                        <div>
                            <p class="font-heading font-bold text-navy text-base leading-snug">Authorised Electrolux Professional Partner</p>
                            <p class="font-body text-gray-500 text-sm mt-1">Working together since 1987</p>
                        </div>
                    </div>
                    {{-- Divider --}}
                    <div class="h-px bg-gray-300 mx-6"></div>
                    {{-- Proof points --}}
                    <ul class="px-6 py-5 space-y-3">
                        @foreach([
                            'Global Professional Range',
                            'Genuine Parts Access',
                            'Manufacturer Knowledge',
                            'Irish Installation & Aftercare',
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
                    {{-- Global proof line --}}
                    <div class="px-6 pb-6 pt-1">
                        <p class="font-body text-gray-500 text-xs leading-relaxed">Solutions sold in 110 countries &middot; 55,000 spare parts in stock &middot; 24&ndash;48-hour worldwide parts dispatch</p>
                    </div>
                </div>
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

<section id="company-history" class="py-24 lg:py-36 bg-white overflow-hidden">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="max-w-4xl mb-16 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Company History</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-5">
                From electrical contracting to <span class="text-[#148af4]">commercial laundry expertise</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed text-pretty">
                Irish Laundry Systems grew from electrical contracting and long-standing Electrolux service experience into a specialist commercial laundry equipment and service company.
            </p>
        </div>

        @php
        $history = [
            ['year'=>'1987',       'label'=>'Foundations',    'title'=>'Electrical Foundations',                     'body'=>'Maurice McDonagh established the electrical contracting business that created the technical base for Irish Laundry Systems.', 'img'=>'images/icons/SAFEELECTRIC.png', 'imgLogo'=>true],
            ['year'=>'Electrolux', 'label'=>'Service Roots',  'title'=>'Specialist Laundry Knowledge',               'body'=>'Frank McDonagh brought more than 30 years of Electrolux service management and industrial laundry experience to the business.', 'img'=>'images/logo/electrolux-partner.png', 'imgLogo'=>true],
            ['year'=>'Mid-1990s',  'label'=>'Company Growth', 'title'=>'Irish Laundry Systems Takes Shape',          'body'=>'Maurice and Frank combined electrical contracting, Electrolux product knowledge and commercial laundry service experience to build Irish Laundry Systems.', 'img'=>'images/pages/about/ILSLOGO2.png', 'imgLogo'=>true],
            ['year'=>'Today',      'label'=>'Ongoing',        'title'=>'Commercial Laundry Expertise Across Ireland','body'=>'Irish Laundry Systems provides commercial laundry equipment and long-term service for customers across Ireland.', 'img'=>'images/about/about-engineers.jpg'],
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
                    <div class="font-heading font-bold text-navy text-xl mb-3">{{ $m['title'] }}</div>
                    <p class="font-body text-gray-500 text-sm lg:text-base leading-relaxed max-w-xl">{{ $m['body'] }}</p>
                </div>
                <div class="ils-history-img absolute hidden lg:block rounded-2xl overflow-hidden shadow-2xl" style="right:0;top:50%;width:18.5rem;height:20.5rem;z-index:20;{{ (!empty($m['imgLogo']) || !empty($m['icon'])) ? 'background:#fff;' : '' }}">
                    @if(!empty($m['icon']))
                    <img src="/images/icons/{{ $m['icon'] }}.png" alt="{{ $m['title'] }}" class="w-full h-full object-contain p-10">
                    @else
                    <img src="{{ asset($m['img']) }}" alt="{{ $m['title'] }}" class="w-full h-full {{ !empty($m['imgLogo']) ? 'object-contain p-8' : 'object-cover' }}">
                    @endif
                </div>
            </div>
            @endforeach
        </div>


    </div>
</section>


<!-- ══════════════════════════════════════════
     10. RESPONSIBLE EQUIPMENT — compact strip
══════════════════════════════════════════ -->
<section class="relative overflow-hidden bg-navy">
    {{-- Background image (right side) --}}
    <img src="{{ asset('images/pages/about/responsible-equipment.png') }}"
         alt="Responsible equipment choices"
         class="absolute inset-y-0 right-0 w-full lg:w-[62%] h-full object-cover object-center">
    {{-- Navy gradient: solid on the left, fading to reveal the image on the right --}}
    <div class="absolute inset-0" style="background:linear-gradient(to right, #011e41 0%, #011e41 34%, rgba(1,30,65,0.75) 50%, rgba(1,30,65,0.15) 68%, rgba(1,30,65,0) 82%);"></div>
    {{-- Content: left-aligned text --}}
    <div class="relative z-10 max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 lg:py-24">
        <div class="max-w-2xl reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Responsible Equipment Choices</p>
            <h2 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-[2.6rem] leading-tight mb-4 lg:whitespace-nowrap">
                Better equipment choices for<br> <span class="text-[#148af4]">lower resource use and running costs</span>
            </h2>
            <p class="font-body text-white/80 text-base leading-relaxed max-w-2xl">
                Irish Laundry Systems recommends equipment, technologies and services that support more sustainable laundry operations through lower energy, water and detergent use, supported by Electrolux Professional resource-efficient solutions.
            </p>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     12. LONG-TERM TRUST / TESTIMONIALS
══════════════════════════════════════════ -->
@include('components.testimonials', ['eyebrow' => 'Customer Experience', 'heading' => 'What customers say about<br><span class="text-[#148af4]">working with Irish Laundry Systems</span>', 'subheading' => '', 'light' => false])

@include('components.proof-bar')

<!-- ══════════════════════════════════════════
     13. FINAL CTA
══════════════════════════════════════════ -->
@include('components.cta-downtime-form', [
    'pageSource' => 'about_cta',
    'eyebrow'    => 'Talk to Irish Laundry Systems',
    'heading'    => 'Tell us what your laundry<br class="hidden lg:block">operation needs from<br class="hidden lg:block"> <span class="text-[#148af4]">equipment to aftercare</span>',
    'body'       => 'Share the main details about your site and what you need help with. Our team will review the enquiry and contact you directly.',
    'formTitle'  => 'Equipment & Service Enquiry',
    'formIntro'  => 'Provide the main details below. We aim to respond within 24 hours.',
    'buttonText' => 'Request an Assessment',
])

@endsection
