@extends('layouts.app')

@section('meta')
<meta name="description" content="Irish Laundry Systems supplies, installs and supports Electrolux Professional commercial laundry equipment across Dublin and Ireland — equipment, rental, maintenance, repairs and aftercare since 1987.">
@endsection

@section('content')

<!-- ══════════════════════════════════════════
     1. HERO
══════════════════════════════════════════ -->
<section class="relative overflow-hidden lg:!h-[720px]" style="height:auto; min-height:540px; background-color:#011E41;">

    <img src="{{ asset('images/about/heroaboutusimage.webp') }}"
         alt="ILS engineering team"
         loading="eager" decoding="async"
         class="absolute inset-0 w-full h-full object-cover object-center">

    {{-- Gradient overlay for headline legibility --}}
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.72) 35%, rgba(1,30,65,0.30) 60%, transparent 82%);"></div>

    <div class="relative z-10 h-full flex items-center py-16 lg:py-0">
        <div class="max-w-screen-2xl mx-auto w-full px-6 sm:px-10 lg:px-20">
            <div class="max-w-4xl">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">About Irish Laundry Systems</p>
                <h1 class="font-heading font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-tight mb-6 text-balance">
                    Commercial laundry equipment, service and aftercare shaped by <span class="text-[#148af4]">Irish engineering since&nbsp;1987</span>
                </h1>
                <p class="font-body text-white/80 text-base leading-relaxed mb-8 max-w-2xl text-pretty">
                    Irish Laundry Systems supplies, installs and supports Electrolux Professional laundry equipment across Ireland. Customers work with us for equipment advice, rental, Preventive Maintenance, repairs and aftercare from people who know the machinery.
                </p>
                <div class="flex flex-wrap gap-4 mb-10">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center gap-2 bg-white text-navy font-body font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors">
                        Talk to Our Team
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                    <a href="{{ route('services') }}"
                       class="inline-flex items-center gap-2 border border-white/40 text-white font-body font-bold text-sm px-6 py-3 rounded-lg hover:border-white transition-colors">
                        Explore Services
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
                    A long-term partner for <span class="text-[#148af4]">commercial laundry&nbsp;operations</span>,<br class="hidden lg:block"> not just equipment supply
                </h2>
            </div>

            <div class="lg:pt-8 space-y-5">
                <p class="font-body text-gray-500 text-base leading-relaxed text-pretty">
                    A commercial laundry depends on the decisions made before, during and after installation.
                </p>
                <p class="font-body text-gray-500 text-base leading-relaxed text-pretty">
                    Irish Laundry Systems keeps those decisions practical, supported and easier to manage over the lifetime of the equipment.
                </p>
                <div class="flex flex-wrap gap-4 pt-2">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center gap-2 bg-navy text-white font-body font-bold text-sm px-6 py-3 rounded-lg hover:bg-navy/90 transition-colors">
                        Talk to Our Team
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                    <a href="{{ route('electrolux') }}"
                       class="inline-flex items-center gap-2 border border-gray-300 text-navy font-body font-bold text-sm px-6 py-3 rounded-lg hover:border-navy transition-colors">
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
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Proof & Scale</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                Long-standing experience, real scale and<br class="hidden lg:block"> <span class="text-[#148af4]">recognised equipment partnership</span>
            </h2>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
            @foreach([
                ['1987',       'since 1987', 'Irish engineering since 1987',    'Commercial laundry support built on electrical contracting roots and long-term equipment experience.'],
                ['100+',       'clients',    'Clients supported',               'Commercial laundry customers supported across Dublin and Ireland.'],
                ['1,000+',     'installed',  'Machines installed',              'Professional laundry machines installed for commercial sites across Ireland.'],
                ['Authorised', 'partner',    'Electrolux Professional Partner', 'Official partner status for Electrolux Professional commercial laundry equipment.'],
            ] as [$num, $sub, $title, $desc])
            <div class="border-b border-gray-300 pb-5 reveal">
                <div class="flex items-end gap-3 mb-3">
                    <div class="font-heading font-bold text-navy text-4xl sm:text-5xl lg:text-6xl leading-none flex-shrink-0">{{ $num }}</div>
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
     5. TECHNICAL FOUNDATIONS
══════════════════════════════════════════ -->
<section class="bg-white py-20 lg:py-28">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <!-- 2-col: image left | content right -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <!-- Image -->
            <div class="overflow-hidden rounded-2xl reveal h-[320px] sm:h-[420px] lg:h-[520px]">
                <img src="{{ asset('images/about/about-engineers.jpg') }}"
                     alt="ILS engineering team on site"
                     class="w-full h-full object-cover object-center">
            </div>

            <!-- Content -->
            <div class="reveal">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Technical Foundations</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                    Technical knowledge behind <span class="text-[#148af4]">installation, service and&nbsp;aftercare</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-6 text-pretty">
                    Irish Laundry Systems works with commercial laundry equipment in daily use, from setup and installation to servicing, repairs and aftercare. The team stays current through product updates, manufacturer workshops and ongoing equipment training.
                </p>

                <!-- Credential chips -->
                <div class="flex flex-wrap gap-2.5 mb-8">
                    @foreach([
                        'Registered Electrical Contractor',
                        'Registered Gas Installer contractors',
                        'Electrolux Professional equipment knowledge',
                        'Ongoing training and workshops',
                        'Installation, service and repair experience',
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
     6. ROOM PLANNING
══════════════════════════════════════════ -->
<section class="relative overflow-hidden" style="background-color:#148af4; min-height:320px;">
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/Strip1.jpeg" alt="ILS laundry engineering"
             class="w-full h-full object-cover" style="object-position: center 30%;">
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.82) 8%, rgba(20,138,244,0.45) 28%, rgba(20,138,244,0.18) 48%, transparent 65%);"></div>
    </div>
    <div class="relative z-10 px-6 sm:px-10 lg:px-16 py-12 lg:py-14 w-full max-w-full lg:max-w-[60%]">
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3">Room Planning</p>
        <h2 class="font-heading font-bold text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
            <span class="text-white">Advice shaped around </span><span style="color:#011E41;">the room,</span><br class="hidden lg:block"> <span style="color:#011E41;">the equipment and daily&nbsp;use</span>
        </h2>
        <p class="font-body text-white text-base leading-relaxed mb-6 text-pretty">
            Every laundry space has its own mix of access, utilities, workload, equipment condition and service needs. Irish Laundry Systems reviews those details before recommending equipment, rental, Preventive Maintenance, repairs or aftercare.
        </p>
        <div class="flex items-center flex-wrap sm:flex-nowrap gap-x-5 gap-y-4 mb-7">
            @foreach([
                ['icon' => 'ativo-20', 'label' => 'Room<br>fit'],
                ['icon' => 'ativo-10', 'label' => 'Equipment<br>use'],
                ['icon' => 'ativo-21', 'label' => 'Capacity<br>needs'],
                ['icon' => 'ativo-9',  'label' => 'Service<br>history'],
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
           class="inline-flex items-center gap-2 bg-white text-navy font-body font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors">
            Talk to Our Team
        </a>
    </div>
</section>

<!-- ══════════════════════════════════════════
     7. SUPPORT OVERVIEW — hub + five pillars
══════════════════════════════════════════ -->
<style>
.support-hub-wrap { position: relative; width: 100%; max-width: 640px; margin: 0 auto; aspect-ratio: 1 / 1; }
.support-hub-line { stroke: #148af4; stroke-width: 0.5; opacity: 0.35; }
.support-centre {
    position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
    width: 13.5rem; z-index: 3;
}
.support-pillar {
    position: absolute; transform: translate(-50%, -50%); z-index: 2;
    white-space: nowrap;
}
</style>

<section class="bg-white py-20 lg:py-28">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="max-w-3xl mb-14 reveal">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Support Overview</p>
            <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">
                One clear support system around<br class="hidden lg:block"> <span class="text-[#148af4]">the equipment your site depends&nbsp;on</span>
            </h2>
            <p class="font-body text-gray-500 text-base leading-relaxed text-pretty">
                Irish Laundry Systems supports commercial laundry sites through equipment supply, setup, rental, repairs, maintenance and aftercare.
            </p>
        </div>

        {{-- Radial hub (lg and up) --}}
        <div class="hidden lg:block reveal">
            <div class="support-hub-wrap">
                {{-- Connector lines --}}
                <svg viewBox="0 0 100 100" preserveAspectRatio="none" class="absolute inset-0 w-full h-full" style="z-index:1;" aria-hidden="true">
                    <line class="support-hub-line" x1="50" y1="50" x2="50"   y2="10"/>
                    <line class="support-hub-line" x1="50" y1="50" x2="88"   y2="37.6"/>
                    <line class="support-hub-line" x1="50" y1="50" x2="73.5" y2="82.4"/>
                    <line class="support-hub-line" x1="50" y1="50" x2="26.5" y2="82.4"/>
                    <line class="support-hub-line" x1="50" y1="50" x2="12"   y2="37.6"/>
                </svg>

                {{-- Centre --}}
                <div class="support-centre">
                    <div class="bg-navy rounded-2xl px-6 py-6 text-center shadow-xl ring-1 ring-white/10">
                        <p class="font-heading font-bold text-[#148af4] text-lg leading-snug mb-2">Irish Laundry Systems</p>
                        <p class="font-body text-white/70 text-xs leading-relaxed">Equipment, service and aftercare around the same laundry operation</p>
                    </div>
                </div>

                {{-- Five pillar labels --}}
                @foreach([
                    ['label' => 'Equipment Supply',      'top' => '10%',   'left' => '50%'],
                    ['label' => 'Installation & Setup',  'top' => '37.6%', 'left' => '88%'],
                    ['label' => 'Equipment Rental',      'top' => '82.4%', 'left' => '73.5%'],
                    ['label' => 'Repairs & Call-Outs',   'top' => '82.4%', 'left' => '26.5%'],
                    ['label' => 'Maintenance & Aftercare','top' => '37.6%','left' => '12%'],
                ] as $pillar)
                <div class="support-pillar" style="top:{{ $pillar['top'] }}; left:{{ $pillar['left'] }};">
                    <span class="inline-block bg-white border border-gray-200 shadow-md rounded-full px-5 py-3 font-heading font-bold text-navy text-sm">{{ $pillar['label'] }}</span>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Stacked (below lg) --}}
        <div class="lg:hidden">
            <div class="bg-navy rounded-2xl px-6 py-6 text-center shadow-xl mb-6">
                <p class="font-heading font-bold text-[#148af4] text-lg leading-snug mb-2">Irish Laundry Systems</p>
                <p class="font-body text-white/70 text-sm leading-relaxed">Equipment, service and aftercare around the same laundry operation</p>
            </div>
            <div class="flex flex-wrap justify-center gap-3">
                @foreach(['Equipment Supply', 'Installation & Setup', 'Equipment Rental', 'Repairs & Call-Outs', 'Maintenance & Aftercare'] as $pillar)
                <span class="inline-block bg-white border border-gray-200 shadow-sm rounded-full px-5 py-3 font-heading font-bold text-navy text-sm">{{ $pillar }}</span>
                @endforeach
            </div>
        </div>

        {{-- Proof chips --}}
        <div class="flex flex-wrap items-center justify-center gap-x-3 gap-y-3 mt-12 lg:mt-16">
            @foreach(['Electrolux Professional equipment', 'Irish engineering expertise', 'Service history', 'Parts support'] as $chip)
            <span class="font-body text-sm font-medium text-navy/70 bg-bg border border-gray-200 rounded-full px-5 py-2">{{ $chip }}</span>
            @endforeach
        </div>

        <div class="flex justify-center mt-10">
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 bg-navy text-white font-body font-bold text-sm px-6 py-3 rounded-lg hover:bg-navy/90 transition-colors">
                Talk to Our Team
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
            <div class="max-w-3xl">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">How We Work</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                    Clear support from first review to <span class="text-[#148af4]">aftercare</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed text-pretty">
                    A simple process for choosing, installing and supporting commercial laundry equipment without leaving the next step unclear.
                </p>
            </div>
        </div>
    </div>

    {{-- Full-width image strip — no container, no padding, edge to edge --}}
    @php
    $siteSteps = [
        ['num'=>'1','title'=>'Review the operation',        'desc'=>'Review the equipment, access, utilities, usage, service history and priorities.',                       'img'=>'images/hero/hero-technician-inspection.png'],
        ['num'=>'2','title'=>'Recommend the right support', 'desc'=>'Confirm whether equipment supply, rental, repair, Preventive Maintenance or aftercare is needed.',       'img'=>'images/healthcare/plant-room.jpg'],
        ['num'=>'3','title'=>'Plan the work',               'desc'=>'Coordinate delivery, installation, servicing, reports and follow-up around the equipment in use.',       'img'=>'images/healthcare/line-6000-solutions.jpg'],
        ['num'=>'4','title'=>'Keep support clear',          'desc'=>'Use service records, parts support and aftercare to guide future service or replacement needs.',        'img'=>'images/healthcare/repairs-hero.jpg'],
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
                    Global professional laundry equipment<br class="hidden lg:block"> with <span class="text-[#148af4]">Irish service behind&nbsp;it</span>
                </h2>
                <div class="space-y-5 mb-8">
                    <p class="font-body text-gray-500 text-base leading-relaxed text-pretty">
                        Irish Laundry Systems is an Authorised Electrolux Professional Partner, giving customers access to a recognised professional laundry range, product knowledge and equipment support through a local Irish team.
                    </p>
                    <p class="font-body text-gray-500 text-base leading-relaxed text-pretty">
                        The partnership reflects a shared standard: professional Electrolux equipment, selected and supported by people who work with commercial laundry equipment every day.
                    </p>
                </div>
                <a href="{{ route('electrolux') }}"
                   class="inline-flex items-center gap-2 font-body font-bold text-[#148af4] hover:text-navy text-sm transition-colors">
                    About the Electrolux Partnership
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
                            <strong>Authorised Electrolux Professional Partner</strong>
                        </p>
                    </div>
                    {{-- Divider --}}
                    <div class="h-px bg-gray-300 mx-6"></div>
                    {{-- Checklist --}}
                    <ul class="px-6 py-5 space-y-3">
                        @foreach([
                            'Professional laundry equipment',
                            'Product knowledge',
                            'Equipment and parts support',
                            'Irish installation and aftercare',
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
     10. RESPONSIBLE EQUIPMENT — compact strip
══════════════════════════════════════════ -->
<section class="bg-[#f7f8fa] py-16 lg:py-20 border-t border-gray-100">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-[auto,1fr] gap-10 lg:gap-16 items-center">

            {{-- EcoVadis medal — reduced --}}
            <div class="flex justify-center lg:justify-start">
                <img src="{{ asset('images/about/Ecovadis-Sustainability-Gold_2025_medal-1-e1773061619801-V3.png') }}"
                     alt="EcoVadis Sustainability Gold 2025"
                     class="w-36 lg:w-44 h-auto object-contain" loading="lazy" decoding="async">
            </div>

            {{-- Content --}}
            <div>
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Responsible Equipment</p>
                <h2 class="font-heading font-bold text-navy text-2xl sm:text-3xl lg:text-4xl leading-tight text-balance mb-3">
                    Efficient equipment choices with <span class="text-[#148af4]">lower consumption in&nbsp;mind</span>
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-5 max-w-3xl text-pretty">
                    Electrolux Professional laundry technologies can reduce energy, water and detergent use when matched to the right equipment and site. Irish Laundry Systems includes those technologies in equipment advice, installation planning and aftercare.
                </p>
                <div class="flex flex-wrap gap-2.5 mb-4">
                    @foreach(['Energy use', 'Water control', 'Detergent control', 'Electrolux Professional Group credentials'] as $chip)
                    <span class="font-body text-sm font-medium text-navy/70 bg-white border border-gray-200 rounded-full px-5 py-2">{{ $chip }}</span>
                    @endforeach
                </div>
                <p class="font-body text-gray-400 text-xs leading-relaxed border-l-2 border-[#148af4]/40 pl-4">
                    Awards, ratings and sustainability credentials shown in this section relate to Electrolux Professional Group.
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

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24 items-start mb-16 reveal">
            <div>
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Company History</p>
                <h2 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight text-balance">
                    From electrical contracting<br class="hidden lg:block"> to <span class="text-[#148af4]">commercial laundry expertise</span>
                </h2>
            </div>
            <div class="lg:pt-9">
                <p class="font-body text-gray-500 text-base leading-relaxed text-pretty">
                    Irish Laundry Systems grew from practical electrical contracting and Electrolux service experience into a commercial laundry partner for sites that need equipment, maintenance, repairs and aftercare they can rely on.
                </p>
            </div>
        </div>

        @php
        $history = [
            ['year'=>'1987',       'label'=>'year',    'title'=>'Electrical foundations',                  'body'=>'Maurice McDonagh started the company as an electrical contractor, establishing the practical technical base that still shapes Irish Laundry Systems today.', 'icon'=>'45',                                                                          'img'=>'images/about/about-team.jpg'],
            ['year'=>'Electrolux', 'label'=>'roots',   'title'=>'Industrial laundry service experience',   'body'=>'Frank McDonagh brought more than 30 years of Electrolux experience, including service management and specialist industrial laundry knowledge.',                                                           'img'=>'images/logo/Electrolux_logo.svg.png', 'imgLogo'=>true],
            ['year'=>'Mid-1990s',  'label'=>'decade',  'title'=>'Irish Laundry Systems takes shape',       'body'=>'Maurice and Frank combined electrical contracting experience with commercial laundry equipment knowledge to build Irish Laundry Systems.', 'icon'=>'46',                                                                  'img'=>'images/about/about-team.jpg'],
            ['year'=>'Today',      'label'=>'ongoing', 'title'=>'Commercial laundry support across Ireland','body'=>'Today, Irish Laundry Systems supports commercial laundry sites across equipment supply, rental, maintenance, repairs and aftercare.',                                          'img'=>'images/about/about-engineers.jpg'],
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
@include('components.cta-downtime-form', [
    'pageSource' => 'about_cta',
    'eyebrow'    => 'Talk to Irish Laundry Systems',
    'heading'    => 'Ready to talk about <span class="text-[#148af4]">equipment, service or&nbsp;aftercare</span>?',
    'body'       => 'Share what your site needs, from equipment advice or rental to Preventive Maintenance, repairs and aftercare. Irish Laundry Systems will point the request to the right equipment, rental, service or aftercare support.',
    'formTitle'  => 'Request a Service Assessment',
    'formIntro'  => 'We aim to respond within 24 hours.',
    'buttonText' => 'Request Service Assessment',
])

@endsection
