@extends('layouts.app')

@section('meta')
<meta name="description" content="Engineering-led commercial laundry support for hotels and hospitality — barrier washers, service contracts, and priority response across Ireland.">

@endsection

@section('content')

@include('components.sector-tabs')

<!-- 1. HERO -->
<section class="relative min-h-[600px] lg:min-h-[680px] flex flex-col overflow-hidden">
    <!-- Background image -->
    <img src="/images/Hospitallity/HeroHospitallity.png" alt="Hospitality laundry installation"
         class="absolute inset-0 w-full h-full object-cover object-[80%_20%]">
    <!-- Content -->
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-24 lg:py-32">
            <div class="max-w-3xl reveal reveal-left">
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
    <!-- Partner strip -->
    <div class="relative z-10 w-full bg-white/95 backdrop-blur-sm border-t border-white/20">
        <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-4 flex items-center justify-between gap-6">
            <div class="flex items-center gap-5">
                <div class="flex-shrink-0">
                    <img src="/images/logo/EPR_Authorized_Partner_horizontal_positive_CMYK.jpg"
                         alt="Electrolux Professional Authorized Partner"
                         class="h-12 w-auto">
                </div>
                <div class="hidden sm:block border-l border-gray-300 pl-5">
                    <p class="text-[11px] font-body font-semibold text-navy uppercase tracking-[0.18em]">Official Authorised Partner</p>
                    <p class="text-[13px] font-body text-gray-600 mt-0.5">Electrolux Professional — Ireland</p>
                </div>
            </div>
            <a href="{{ route('electrolux') }}"
               class="flex-shrink-0 text-xs font-body font-semibold text-navy hover:text-orange uppercase tracking-wide transition-colors duration-200 flex items-center gap-1.5 whitespace-nowrap">
                Learn more
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
    <!-- Trusted by strip -->
    <div class="relative z-10 w-full bg-white border-t border-gray-100">
        <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-3 flex flex-wrap items-center gap-10">
            <p class="font-body text-[10px] text-gray-400 uppercase tracking-widest flex-shrink-0">trusted by</p>
            <div class="w-px h-4 bg-gray-200 flex-shrink-0 hidden sm:block"></div>
            <img src="/images/logo/HSE-Logo-Green-NEW-no-background.png" alt="HSE" class="h-7 object-contain opacity-60">
            <img src="/images/healthcare/stvincent.png" alt="St. Vincent's Healthcare" class="h-7 object-contain opacity-60">
            <img src="/images/healthcare/stjameshospital.png" alt="St James's Hospital" class="h-7 object-contain opacity-60">
            <img src="/images/healthcare/TheMaterhospital.png" alt="The Mater Hospital" class="h-7 object-contain opacity-60">
            <img src="/images/healthcare/maryfieldlogo.png" alt="Maryfield Nursing Home" class="h-7 object-contain opacity-60">
        </div>
    </div>
</section>

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

<!-- FROM ROOM REVIEW — Scroll-pinned Hajster-style -->
<style>
.hosp-scroll-section { position: relative; overflow: hidden; }
.hosp-scroll-inner {
    position: relative;
    display: flex;
    align-items: center;
    height: 100vh;
    min-height: 560px;
    max-height: 860px;
    width: 100%;
    overflow: hidden;
}
.hosp-scroll-bg {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
}
.hosp-scroll-bg img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center 20%;
}
.hosp-scroll-bg::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to right, rgba(1,30,65,0.88) 0%, rgba(1,30,65,0.55) 50%, rgba(1,30,65,0.25) 100%);
}
.hosp-scroll-title {
    position: relative;
    z-index: 20;
    width: 42%;
    flex-shrink: 0;
    padding: 3rem 4rem 3rem 0;
}
.hosp-scroll-cards {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    z-index: 10;
}
.hosp-scroll-card {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    padding-right: 5%;
}
.hosp-scroll-card-inner {
    width: 42%;
    max-width: 480px;
    background: rgba(248, 249, 251, 0.97);
    border-radius: 1.25rem;
    padding: 2.5rem;
    box-shadow: 0 20px 60px rgba(0,0,0,0.25);
}
@media (max-width: 1024px) {
    .hosp-scroll-title { display: none; }
    .hosp-scroll-card-inner { width: 88%; max-width: none; }
    .hosp-scroll-card { padding-right: 0; justify-content: center; }
}
</style>

<section class="hosp-scroll-section">
    <div class="hosp-scroll-inner" id="hosp-scroll-inner">

        {{-- Background image --}}
        <div class="hosp-scroll-bg">
            <img src="/images/Hospitallity/HeroHospitallity.png" alt="Hospitality laundry">
        </div>

        {{-- Left: fixed title --}}
        <div class="hosp-scroll-title" style="padding-left: max(5%, calc((100vw - 1536px)/2 + 5rem));">
            <h2 class="font-heading font-bold text-white leading-tight mb-4" style="font-size: clamp(1.75rem, 3vw, 2.75rem);">
                From room review to the right next step
            </h2>
            <p class="font-body text-white/60 text-sm leading-relaxed">
                Hospitality laundry rooms work better when the equipment path and support model are aligned from the start.
            </p>
        </div>

        {{-- Stacked cards --}}
        <div class="hosp-scroll-cards">

            {{-- Card 1 --}}
            <div class="hosp-scroll-card">
                <div class="hosp-scroll-card-inner">
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-navy text-white font-heading font-bold text-sm mb-5">01</span>
                    <h3 class="font-heading font-bold text-navy mb-3" style="font-size:1.6rem; line-height:1.2;">Assess the room</h3>
                    <p class="font-body text-gray-500 leading-relaxed" style="font-size:0.95rem;">Review flow, hygiene handling, throughput pressure, and the practical layout of the room.</p>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="hosp-scroll-card">
                <div class="hosp-scroll-card-inner">
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-navy text-white font-heading font-bold text-sm mb-5">02</span>
                    <h3 class="font-heading font-bold text-navy mb-3" style="font-size:1.6rem; line-height:1.2;">Match the equipment</h3>
                    <p class="font-body text-gray-500 leading-relaxed" style="font-size:0.95rem;">Match the room logic to the right barrier, washing, drying, and finishing route.</p>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="hosp-scroll-card">
                <div class="hosp-scroll-card-inner">
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-navy text-white font-heading font-bold text-sm mb-5">03</span>
                    <h3 class="font-heading font-bold text-navy mb-3" style="font-size:1.6rem; line-height:1.2;">Keep support close</h3>
                    <p class="font-body text-gray-500 leading-relaxed" style="font-size:0.95rem;">Keep the installed base connected to service contracts, repairs, and aftercare.</p>
                </div>
            </div>

            {{-- Card 4 --}}
            <div class="hosp-scroll-card">
                <div class="hosp-scroll-card-inner">
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-navy text-white font-heading font-bold text-sm mb-5">04</span>
                    <h3 class="font-heading font-bold text-navy mb-3" style="font-size:1.6rem; line-height:1.2;">Move to assessment</h3>
                    <p class="font-body text-gray-500 leading-relaxed" style="font-size:0.95rem;">Turn the room, the equipment path, and the support model into one practical next step.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
(function () {
    function initHospScroll() {
        if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
        gsap.registerPlugin(ScrollTrigger);
        var inner = document.getElementById('hosp-scroll-inner');
        if (!inner) return;
        var cards = inner.querySelectorAll('.hosp-scroll-card-inner');
        if (cards.length < 2) return;

        // Initial state: only card 1 visible
        for (var i = 1; i < cards.length; i++) {
            gsap.set(cards[i], { opacity: 0, y: 80 });
        }

        var tl = gsap.timeline({
            scrollTrigger: {
                trigger: inner,
                pin: true,
                scrub: 0.4,
                start: 'center center',
                end: 'top+=2800 center',
                anticipatePin: 1,
            }
        });

        // Card 1 → 2
        tl.to(cards[0], { opacity: 0, y: -80, duration: 0.5 }, 0)
          .to(cards[1], { opacity: 1, y: 0,   duration: 0.5 }, 0.25)
        // Card 2 → 3
          .to(cards[1], { opacity: 0, y: -80, duration: 0.5 }, 1.25)
          .to(cards[2], { opacity: 1, y: 0,   duration: 0.5 }, 1.5)
        // Card 3 → 4
          .to(cards[2], { opacity: 0, y: -80, duration: 0.5 }, 2.5)
          .to(cards[3], { opacity: 1, y: 0,   duration: 0.5 }, 2.75);
    }
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initHospScroll);
    } else {
        initHospScroll();
    }
})();
</script>

<!-- KEEP THE SUPPORT MATCHED -->
<section class="py-16 lg:py-24 bg-white border-b border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 items-start">

            {{-- Left: heading + description --}}
            <div class="lg:col-span-1 reveal">
                <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl leading-tight mb-4">
                    Keep the support matched to the equipment
                </h2>
                <p class="font-body text-gray-500 text-sm leading-relaxed">
                    The right support answer has to account for installed-base reality, operational continuity, and the next commercial step.
                </p>
            </div>

            {{-- Right: 4 service cards --}}
            <div class="lg:col-span-4 grid grid-cols-2 lg:grid-cols-4 gap-5 reveal">
                @foreach([
                    [
                        'img'   => '/images/healthcare/Service%20Network.png',
                        'title' => 'Service Network',
                        'bold'  => 'You can count on',
                        'body'  => 'more than 2,200 authorised service partners, always available, always on duty — committed to support you with a service network that makes your operations easier.',
                    ],
                    [
                        'img'   => '/images/healthcare/Service%20Agreements.png',
                        'title' => 'Service Agreements',
                        'bold'  => 'You can choose from',
                        'body'  => 'flexible tailored packages, according to your business needs, offering a variety of products maintenance and support services.',
                    ],
                    [
                        'img'   => '/images/healthcare/Accessories%20%26%20Consumables.png',
                        'title' => 'Accessories & Consumables',
                        'bold'  => 'You can rely on',
                        'body'  => 'original Accessories & Consumables, rigorously tested by Electrolux Professional experts to ensure efficiency, durability, and the safety of your users.',
                    ],
                    [
                        'img'   => '/images/healthcare/Lifecycle%20Support.png',
                        'title' => 'Lifecycle Support',
                        'bold'  => 'You can plan ahead',
                        'body'  => 'with structured lifecycle continuity — keeping your installed base connected to repairs, call-outs, parts, and aftercare across Ireland.',
                    ],
                ] as $card)
                <div class="flex flex-col">
                    <div class="flex justify-center mb-[-60px] relative z-10">
                        <div class="w-48 h-48 rounded-full overflow-hidden border-4 border-white shadow-md relative">
                            <img src="{{ $card['img'] }}" alt="{{ $card['title'] }}" class="w-full h-full object-cover">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="w-24 h-24 rounded-full flex items-center justify-center text-center" style="background-color: rgba(100,160,210,0.65);">
                                    <h4 class="font-heading font-bold text-white text-xs leading-snug px-2">{{ $card['title'] }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-[#deeaf6] rounded-2xl pt-20 pb-6 px-5 flex-1">
                        <p class="font-body text-navy/80 text-sm leading-relaxed">
                            <strong class="font-bold text-navy">{{ $card['bold'] }}</strong> {{ $card['body'] }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

<!-- OUR EXPERTS WILL TAKE CARE OF IT -->
<section class="relative py-20 lg:py-28 overflow-hidden">
    <!-- Background image -->
    <img src="/images/healthcare/engineer.jpg" alt="ILS engineer"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <!-- Dark overlay -->
    <div class="absolute inset-0 bg-navy/75"></div>

    <div class="relative z-10 max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="max-w-xl reveal">
            <h2 class="font-heading font-bold text-white text-3xl lg:text-5xl leading-tight mb-6">
                Our experts will take care of it
            </h2>
            <p class="font-body text-white/80 text-base leading-relaxed mb-4">
                Our dedicated team of engineers are here to give you peace of mind. Partnering with ILS takes the stress and hassle away from breakdowns.
            </p>
            <p class="font-body text-white/80 text-base leading-relaxed mb-8">
                Whatever the job calls for, we'll take <span class="text-[#148af4] font-semibold">care</span> of it.
            </p>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-heading font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                Speak to us about your requirements
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

{{-- D: Enhanced Usability — 4-card hover grid --}}
<section class="bg-white border-t border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="py-10 lg:py-14">
            <h2 class="font-heading font-bold text-navy text-xl lg:text-2xl mb-8 reveal">
                Enhanced usability, superior safety
            </h2>

            {{-- 4-card horizontal grid — homepage card style --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 reveal">
                @foreach([
                    ['icon' => '/images/healthcare/hygiene-icon.png',  'alt' => 'Hygiene icon',  'title' => 'Maximise hygiene in hospitality applications', 'body' => 'Robust infection prevention measures to eliminate contamination risk between dirty and clean zones at every stage of the wash cycle.'],
                    ['icon' => '/images/healthcare/operator-icon.png', 'alt' => 'Operator icon', 'title' => 'Operator support in high-output laundries',     'body' => 'Dual-partition drum and auto-positioning for easy manual handling of heavy loads — reducing operator strain on busy hotel laundry shifts.'],
                    ['icon' => '/images/healthcare/control-icon.png',  'alt' => 'Control icon',  'title' => 'Intelligent control',                           'body' => 'Intuitive interface managing dirty and clean zones independently — ensuring failsafe disinfection and full audit trail compliance.'],
                ] as $feature)
                <div class="group relative overflow-hidden rounded-2xl h-64 cursor-pointer bg-navy">
                    <img src="{{ $feature['icon'] }}" alt="" class="absolute inset-0 w-full h-full object-contain p-10 opacity-10 transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                         style="background: linear-gradient(to top, rgba(1,30,65,1) 0%, rgba(1,30,65,0.4) 60%, transparent 100%);"></div>
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                         style="background: rgba(1,30,65,0.92);"></div>
                    <div class="absolute inset-0 p-6 flex flex-col justify-end group-hover:justify-start transition-all duration-300">
                        <h3 class="font-heading font-bold text-white text-lg leading-tight mb-0 group-hover:mb-3 transition-all duration-300">{{ $feature['title'] }}</h3>
                        <div class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-64 group-hover:opacity-100 transition-all duration-[900ms]">
                            <p class="font-body text-white/75 text-sm leading-relaxed">{{ $feature['body'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach

                {{-- 4th card: ERGOCERT --}}
                <div class="group relative overflow-hidden rounded-2xl h-64 cursor-pointer bg-navy">
                    <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                         style="background: linear-gradient(to top, rgba(1,30,65,1) 0%, rgba(1,30,65,0.4) 60%, transparent 100%);"></div>
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                         style="background: rgba(1,30,65,0.92);"></div>
                    <div class="absolute inset-0 p-6 flex flex-col justify-end group-hover:justify-start transition-all duration-300">
                        <div class="flex gap-1 mb-2">
                            @for($s = 0; $s < 4; $s++)
                            <svg class="w-4 h-4 text-[#148af4]" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            @endfor
                        </div>
                        <p class="font-heading font-bold text-white text-xl leading-tight mb-0 group-hover:mb-3 transition-all duration-300">Experience<br>4-stars</p>
                        <div class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-64 group-hover:opacity-100 transition-all duration-[900ms]">
                            <p class="font-body text-white/75 text-sm leading-relaxed">Our entire Line 6000 range has earned the prestigious <strong class="text-white">4-star ERGOCERT rating for ergonomics</strong> — the highest international certification available.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Download + Discover row --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mt-6 reveal">
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
                            <a href="/pdfs/{{ $pdf['file'] }}" target="_blank" download class="flex items-center gap-2 font-body text-sm text-white/80 hover:text-white transition-colors">
                                <svg class="w-4 h-4 flex-shrink-0 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                                {{ $pdf['label'] }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="bg-bg border border-border rounded-2xl p-6">
                    <h4 class="font-heading font-bold text-navy text-base mb-4">Discover</h4>
                    <ul class="space-y-3">
                        @foreach([
                            ['label' => 'Service & Maintenance Contracts', 'route' => 'service-contracts'],
                            ['label' => 'Full Equipment Range',            'route' => 'equipment'],
                            ['label' => 'Request a Site Assessment',       'route' => 'contact'],
                        ] as $link)
                        <li>
                            <a href="{{ route($link['route']) }}" class="flex items-center gap-2 font-body text-sm text-navy hover:text-orange font-bold transition-colors">
                                <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
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

<!-- SUPPORT ROUTES -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <!-- Header -->
        <div class="mb-10 reveal">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-5xl leading-tight max-w-2xl">
                Three clear routes into<br>
                <span class="font-bold">hospitality laundry support.</span>
            </h2>
        </div>

        <!-- Square Cards Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5">

            <!-- Card 1: Service Contracts -->
            <div class="relative rounded-2xl overflow-hidden aspect-square reveal">
                <img src="/images/healthcare/Service%20Contracts.png" alt="Service Contracts" class="absolute inset-0 w-full h-full object-cover object-center">
                <div class="absolute inset-0 bg-gradient-to-t from-navy/90 via-navy/40 to-transparent"></div>
                <div class="absolute inset-0 flex flex-col justify-end p-8">
                    <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-snug mb-3">Service Contracts</h3>
                    <p class="font-body text-gray-200 text-sm leading-relaxed mb-5">
                        Planned support built around installed hospitality equipment, continuity targets, and the daily pressure of the room.
                    </p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 self-start bg-white/15 hover:bg-white/25 border border-white/30 text-white font-heading font-bold text-sm px-4 py-2 rounded-lg transition-colors">
                        Review contract options
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            <!-- Card 2: Repairs & Call-outs -->
            <div class="relative rounded-2xl overflow-hidden aspect-square reveal">
                <img src="/images/healthcare/Repairs%20%26%20Call-outs.png" alt="Repairs & Call-outs" class="absolute inset-0 w-full h-full object-cover object-center">
                <div class="absolute inset-0 bg-gradient-to-t from-navy/90 via-navy/40 to-transparent"></div>
                <div class="absolute inset-0 flex flex-col justify-end p-8">
                    <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-snug mb-3">Repairs &amp; Call-outs</h3>
                    <p class="font-body text-gray-200 text-sm leading-relaxed mb-5">
                        Urgent response path when breakdowns, performance issues, or pressure points interrupt hospitality laundry operations.
                    </p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 self-start bg-white/15 hover:bg-white/25 border border-white/30 text-white font-heading font-bold text-sm px-4 py-2 rounded-lg transition-colors">
                        Request support route
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            <!-- Card 3: Parts & Aftercare -->
            <div class="relative rounded-2xl overflow-hidden aspect-square reveal">
                <img src="/images/healthcare/Parts%20%26%20Aftercare.png" alt="Parts & Aftercare" class="absolute inset-0 w-full h-full object-cover object-center">
                <div class="absolute inset-0 bg-gradient-to-t from-navy/90 via-navy/40 to-transparent"></div>
                <div class="absolute inset-0 flex flex-col justify-end p-8">
                    <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-snug mb-3">Parts &amp; Aftercare</h3>
                    <p class="font-body text-gray-200 text-sm leading-relaxed mb-5">
                        Lifecycle support for wear items, parts planning, and continuity around the installed hospitality base.
                    </p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 self-start bg-white/15 hover:bg-white/25 border border-white/30 text-white font-heading font-bold text-sm px-4 py-2 rounded-lg transition-colors">
                        Discuss parts &amp; aftercare
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                    </a>
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
            <h2 class="font-heading text-navy text-3xl lg:text-4xl leading-tight mb-2">
                Laundry and infection <strong>control solutions</strong>
            </h2>
            <p class="font-body text-navy text-base leading-relaxed">
                Irish Laundry Systems sell/rent , installs and maintains a range of CQC-compliant equipment including washers and dryers.<br>
                Take an extra load off your mind.
            </p>
        </div>

        <div class="flex flex-col divide-y divide-gray-100">

            <!-- 1. Barrier Washers — text left, image right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center py-12 lg:py-16 reveal">
                <div class="text-center">
                    <h3 class="font-heading text-navy text-3xl lg:text-4xl mb-4">Barrier <strong>washers</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                        Barrier washers sit at the centre of hospitality laundry rooms where controlled dirty-side loading and clean-side unloading are part of the process logic.
                    </p>
                    <div class="flex flex-col items-center gap-3">
                        <a href="{{ route('equipment') }}" class="w-full max-w-xs bg-navy text-white font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-navy/90 transition-colors tracking-wide">
                            VIEW EQUIPMENT
                        </a>
                        <a href="{{ route('contact') }}" class="w-full max-w-xs bg-[#148af4] text-white font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-[#148af4]/90 transition-colors tracking-wide">
                            REQUEST ASSESSMENT
                        </a>
                    </div>
                </div>
                <div class="flex justify-center">
                    <img src="/images/equipment/line6000-barrier-washer.webp"
                         alt="Line 6000 Barrier Washer"
                         class="w-full h-96 object-contain">
                </div>
            </div>

            <!-- Barrier Washer: AIDO + Watchdog collapsible -->
            <div x-data="{ open: false, tab: 'aido' }" class="py-6 border-t border-gray-100">
                <button @click="open = !open"
                        class="w-full flex items-center justify-end gap-3 text-right group">
                    <span class="font-heading font-bold text-navy text-lg">System Features — AIDO &amp; Hygiene Watchdog</span>
                    <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </button>

                <div x-show="open" x-collapse class="mt-6">
                    <!-- Tabs -->
                    <div class="flex gap-6 border-b border-gray-200 mb-8">
                        <button @click="tab = 'aido'"
                                :class="tab === 'aido' ? 'border-b-2 border-navy text-navy font-bold' : 'text-gray-400 hover:text-navy'"
                                class="font-heading text-sm pb-3 transition-colors">
                            AIDO System
                        </button>
                        <button @click="tab = 'watchdog'"
                                :class="tab === 'watchdog' ? 'border-b-2 border-navy text-navy font-bold' : 'text-gray-400 hover:text-navy'"
                                class="font-heading text-sm pb-3 transition-colors">
                            Watchdog System
                        </button>
                    </div>

                    <!-- AIDO Tab -->
                    <div x-show="tab === 'aido'">
                        <h4 class="font-heading font-bold text-navy text-xl mb-4">Auto Inner Door Opening (AIDO) System</h4>
                        <div class="flex items-start gap-6 mb-8">
                            <div class="w-32 h-32 flex-shrink-0">
                                <img src="/images/healthcare/Auto%20Inner%20Door%20Opening%20(AIDO)%20System.png" alt="AIDO System" class="w-full h-full object-contain">
                            </div>
                            <p class="font-body text-gray-500 text-sm leading-relaxed">
                                Our large inner-drum doors make loading and unloading the washer exceptionally easy, while our innovative opening mechanism pre-opens <strong>the inner-drum doors automatically at the end</strong> of the wash cycle. This enables the easy manual handling of large loads of wet linen while minimizing potential strain for the operator.
                            </p>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                            <div class="relative w-full rounded-2xl overflow-hidden shadow-lg" style="padding-bottom: 56.25%;">
                                <iframe class="absolute inset-0 w-full h-full"
                                        src="https://www.youtube.com/embed/4MAlhxGZj88"
                                        title="AIDO System"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                            <div>
                                <h5 class="font-heading font-bold text-navy text-xl mb-3">Operator wellbeing is our top priority</h5>
                                <p class="font-body text-gray-500 text-sm leading-relaxed">Whatever your technological requirements, our machines are designed to help your operators work in a safe and ergonomic way.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Watchdog Tab -->
                    <div x-show="tab === 'watchdog'">
                        <h4 class="font-heading font-bold text-navy text-xl mb-4">Hygiene Watchdog</h4>
                        <div class="flex items-start gap-6 mb-8">
                            <div class="w-32 h-32 flex-shrink-0">
                                <img src="/images/healthcare/HygieneWatchdog.webp" alt="Hygiene Watchdog" class="w-full h-full object-contain">
                            </div>
                            <p class="font-body text-gray-500 text-sm leading-relaxed">
                                <strong>Your Hygiene Partner:</strong> The Electrolux Professional Hygiene Watchdog (HW) ensures full-cycle completion so that all linen is <strong>fully washed and thoroughly decontaminated</strong>. This provides the maximum defense against the spread of microorganisms and cross-contamination, keeping germs at bay and your mind at rest.
                            </p>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                            <div class="relative w-full rounded-2xl overflow-hidden shadow-lg" style="padding-bottom: 56.25%;">
                                <iframe class="absolute inset-0 w-full h-full"
                                        src="https://www.youtube.com/embed/4MAlhxGZj88"
                                        title="Hygiene Watchdog"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                            <div>
                                <h5 class="font-heading font-bold text-navy text-xl mb-3">Operator wellbeing is our top priority</h5>
                                <p class="font-body text-gray-500 text-sm leading-relaxed">Whatever your technological requirements, our machines are designed to help your operators work in a safe and ergonomic way.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- COMMERCIAL WASHERS — image left, text right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center py-12 lg:py-16 reveal">
                <div class="flex justify-center">
                    <img src="/images/equipment/commercialwasher.webp"
                         alt="Commercial Washer"
                         class="w-full h-96 object-contain">
                </div>
                <div class="text-center">
                    <h3 class="font-heading text-navy text-3xl lg:text-4xl mb-4">Commercial <strong>Washers</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                        Commercial Washers, built for people and the planet. High productivity front-load washers designed to make laundry operations safe, fast and cost controlled.
                    </p>
                    <div class="flex flex-col items-center gap-3">
                        <a href="{{ route('equipment') }}" class="w-full max-w-xs bg-navy text-white font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-navy/90 transition-colors tracking-wide">
                            GO TO PRODUCTS
                        </a>
                        <a href="{{ route('contact') }}" class="w-full max-w-xs bg-[#148af4] text-white font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-[#148af4]/90 transition-colors tracking-wide">
                            REQUEST ASSESSMENT
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2. Tumble Dryers — text left, image right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center py-12 lg:py-16 reveal">
                <div class="order-2 lg:order-1">
                    <h3 class="font-heading font-normal text-navy text-2xl lg:text-3xl leading-tight mb-4">
                        Precision <strong class="font-bold">drying</strong> for <strong class="font-bold">high-demand</strong> hospitality cycles.
                    </h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                        Post-wash flow, drying, flatwork handling, and support continuity all affect whether the clean route remains stable through the day.
                    </p>
                    <div class="flex flex-col gap-3 mb-6">
                        <a href="{{ route('equipment') }}" class="w-full max-w-xs bg-navy text-white font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-navy/90 transition-colors tracking-wide text-center">
                            GO TO PRODUCTS
                        </a>
                        <a href="{{ route('contact') }}" class="w-full max-w-xs bg-[#148af4] text-white font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-[#148af4]/90 transition-colors tracking-wide text-center">
                            REQUEST ASSESSMENT
                        </a>
                    </div>
                    <div class="font-body text-gray-500 text-sm leading-relaxed">
                        <p class="font-body font-bold text-navy mb-1">Designed for humans, and the environment</p>
                        <p class="font-body">Our Tumble Dryers stand out for their energy efficiency, speed, and certified ergonomic design, while easing the physical strain on laundry operators.<br>
                        This unique combination distinguishes them from all other dryers on the market.</p>
                    </div>
                </div>
                <div class="flex justify-center order-1 lg:order-2">
                    <img src="/images/equipment/line6000-tumble-dryer.webp"
                         alt="Line 6000 Tumble Dryer"
                         class="w-full h-96 object-contain">
                </div>
            </div>

            <!-- Tumble Dryers: collapsible features -->
            <div x-data="{ open: false }" class="py-6 border-t border-gray-100">
                <button @click="open = !open"
                        class="w-full flex items-center justify-start gap-3 text-left group">
                    <span class="font-heading font-bold text-navy text-lg">System Features — Moisture Balance</span>
                    <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </button>

                <div x-show="open" x-collapse class="mt-6">
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
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center py-12 lg:py-16 reveal">
                <div class="flex justify-center">
                    <img src="/images/equipment/line6000-ironer.webp"
                         alt="Line 6000 Ironer"
                         class="w-full h-80 object-contain">
                </div>
                <div class="text-center">
                    <h3 class="font-heading text-navy text-3xl lg:text-4xl mb-6">Ironers</h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                        Deliver perfectly ironed linen to the highest hygiene standards
                    </p>
                    <div class="flex flex-col items-center gap-3">
                        <a href="{{ route('equipment') }}" class="w-full max-w-xs bg-navy text-white font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-navy/90 transition-colors tracking-wide">
                            GO TO PRODUCTS
                        </a>
                        <a href="{{ route('contact') }}" class="w-full max-w-xs bg-[#148af4] text-white font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-[#148af4]/90 transition-colors tracking-wide">
                            REQUEST ASSESSMENT
                        </a>
                    </div>
                </div>
            </div>

            <!-- Ironers: collapsible features -->
            <div x-data="{ open: false, tab: 'diamms' }" class="py-6 border-t border-gray-100">
                <button @click="open = !open"
                        class="w-full flex items-center justify-end gap-3 text-right group">
                    <span class="font-heading font-bold text-navy text-lg">System Features — DIAMMS &amp; Hygiene Guard</span>
                    <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </button>

                <div x-show="open" x-collapse class="mt-6">
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
</section>


<!-- AUTHORISED PARTNER -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 flex flex-col gap-12">

        <!-- Authorised Partner -->
        <div class="border-t border-gray-200 pt-10 reveal">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-0 divide-y lg:divide-y-0 lg:divide-x divide-gray-200 items-center">
                <!-- Left: logo + badge -->
                <div class="flex flex-col items-center justify-center gap-3 pb-6 lg:pb-0 lg:pr-8">
                    <img src="/images/logo/EPR_Authorized_Partner_horizontal_positive_CMYK.jpg" alt="Electrolux Professional Authorized Partner" class="h-16 object-contain">
                    <p class="font-heading font-bold text-xs tracking-widest text-gray-400 uppercase">Authorized Partner</p>
                </div>
                <!-- Middle: title + description -->
                <div class="py-6 lg:py-0 lg:px-8">
                    <p class="font-heading font-bold text-navy text-base leading-snug mb-2">Electrolux Professional Authorized Partner</p>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Irish Laundry Systems combines local engineering support in Ireland with manufacturer-grade equipment standards, lifecycle continuity, and a more structured route into service and lifecycle support.</p>
                </div>
                <!-- Right: 3 feature tiles -->
                <div class="pt-6 lg:pt-0 lg:pl-8 grid grid-cols-3 gap-4">
                    @foreach([
                        ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/>',
                          'label' => 'Local engineering execution'],
                        ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"/>',
                          'label' => 'Lifecycle support route'],
                        ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>',
                          'label' => 'Genuine parts continuity'],
                    ] as $feat)
                    <div class="flex flex-col items-center text-center gap-2">
                        <div class="w-12 h-12 rounded-xl bg-gray-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">{!! $feat['icon'] !!}</svg>
                        </div>
                        <p class="font-body text-gray-500 text-xs leading-tight">{{ $feat['label'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</section>

<!-- SUGGESTED EQUIPMENT -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- Header --}}
        <div class="mb-10 text-center reveal">
            <h2 class="font-heading font-bold text-gray-900 text-3xl lg:text-5xl leading-tight mb-4">Find the right solutions for your hotel and spa</h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-xl mx-auto">Our laundry solutions will save you time and energy, leaving you to focus on your guests.</p>
        </div>

        {{-- 4 equipment cards --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 reveal">
            @foreach([
                ['img' => 'line6000-barrier-washer',  'name' => 'Barrier Washers',      'desc' => 'For controlled dirty-side and clean-side handling.'],
                ['img' => 'commercialwasher',         'name' => 'Commercial Washers',    'desc' => 'For broader wash routes and capacity planning.'],
                ['img' => 'line6000-tumble-dryer',    'name' => 'Tumble Dryers',         'desc' => 'For post-wash continuity and room flow.'],
                ['img' => 'line6000-ironer',          'name' => 'Ironers & Flatwork',    'desc' => 'For finishing, hygiene presentation, and clean-route continuity.'],
            ] as $eq)
            <div class="bg-white border border-gray-100 rounded-xl p-5 flex flex-col gap-4">
                <div>
                    <p class="font-heading font-bold text-navy text-base leading-snug mb-1">{{ $eq['name'] }}</p>
                    <p class="font-body text-[#148af4] text-sm leading-relaxed">{{ $eq['desc'] }}</p>
                </div>
                <div class="flex items-center justify-center h-56 rounded-lg overflow-hidden bg-white">
                    <img src="/images/equipment/{{ $eq['img'] }}.webp" alt="{{ $eq['name'] }}" class="max-h-full max-w-full object-contain p-4">
                </div>
                <a href="{{ route('equipment') }}" class="inline-flex items-center justify-center gap-2 bg-navy hover:bg-navy-dark text-white font-heading font-bold text-sm px-4 py-2.5 rounded-lg transition-colors {{ $eq['img'] === 'line6000-tumble-dryer' ? 'mt-auto' : '' }}">
                    View Equipment
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>
            @endforeach
        </div>

    </div>
</section>

<!-- ESSENTIA BAND -->
<section class="py-6 bg-[#eaeff5]">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="flex flex-col lg:flex-row items-center gap-6 lg:gap-10">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <img src="/images/healthcare/essentia-logo.png" alt="Essentia" class="w-20 h-20 object-contain">
            </div>
            <!-- Text -->
            <div class="flex-1 text-center lg:text-left">
                <p class="font-heading font-bold text-navy text-base mb-1">Essentia: the heart of customer service</p>
                <p class="font-body text-gray-500 text-sm leading-relaxed max-w-lg">Providing you with the support you need, taking care of your processes with a reliable service network, a range of tailored-made exclusive services and an innovative technology.</p>
            </div>
            <!-- Button -->
            <div class="flex-shrink-0">
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-navy text-white font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-navy/90 transition-colors tracking-wide">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                    Discover Essentia
                </a>
            </div>
        </div>
    </div>
</section>

@include('components.cta-combined-banner')

<!-- 9. ASSESSMENT FORM -->
<section id="hospitality-assessment" class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="bg-navy rounded-3xl overflow-hidden reveal">
            <div class="grid grid-cols-1 lg:grid-cols-2">

                {{-- Left: heading + bullets --}}
                <div class="p-10 lg:p-14 flex flex-col justify-between">
                    <div>
                        <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl leading-tight mb-6">
                            Bring the hospitality laundry room, the support route, and the equipment discussion into one next step
                        </h2>
                        <p class="font-body text-white/60 text-sm leading-relaxed mb-8">
                            Use this route to review room layout, barrier relevance, current equipment route, installed-base pressure, and the support model around the hospitality laundry room.
                        </p>
                        <div class="flex flex-col gap-3">
                            @foreach([
                                'Review room layout, workflow, and dirty-side / clean-side handling requirements.',
                                'Assess barrier washer relevance alongside washers, dryers, ironers, and flatwork handling.',
                                'Connect the installed base to Service Contracts, Repairs & Call-outs, and Parts & Aftercare where needed.',
                            ] as $point)
                            <div class="bg-white/10 rounded-xl px-5 py-3">
                                <p class="font-body text-white text-sm leading-relaxed">{{ $point }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Right: form card --}}
                <div class="bg-white rounded-2xl m-2 p-6 flex flex-col">
                    <h3 class="font-heading font-bold text-navy text-xl mb-1">Request Hospitality Assessment</h3>
                    <p class="font-body text-gray-500 text-sm mb-4">Tell us about the environment, the current setup, and what needs review.</p>
                    <form id="hospitality-form" action="{{ route('contact') }}" method="POST" class="flex flex-col gap-2">
                        @csrf
                        <div class="grid grid-cols-2 gap-2">
                            <input type="text" name="name" required placeholder="Full name"
                                class="w-full border border-gray-200 rounded-xl px-4 py-2.5 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors">
                            <input type="text" name="organisation" placeholder="Organisation"
                                class="w-full border border-gray-200 rounded-xl px-4 py-2.5 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors">
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <input type="email" name="email" required placeholder="Email"
                                class="w-full border border-gray-200 rounded-xl px-4 py-2.5 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors">
                            <input type="tel" name="phone" placeholder="Phone"
                                class="w-full border border-gray-200 rounded-xl px-4 py-2.5 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors">
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <input type="text" name="site_type" placeholder="Site type"
                                class="w-full border border-gray-200 rounded-xl px-4 py-2.5 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors">
                            <input type="text" name="review_needed" placeholder="What do you need reviewed?"
                                class="w-full border border-gray-200 rounded-xl px-4 py-2.5 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors">
                        </div>
                        <input type="text" name="current_setup" placeholder="Current setup or requirement"
                            class="w-full border border-gray-200 rounded-xl px-4 py-2.5 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors">
                        <div class="flex flex-col gap-2 mt-3">
                            <button type="submit"
                                class="w-full bg-[#148af4] hover:bg-blue-600 text-white font-heading font-bold px-8 py-3 rounded-xl text-sm transition-colors duration-200">
                                Request Hospitality Assessment
                            </button>
                            <a href="{{ route('contact') }}"
                               class="w-full text-center border border-gray-200 hover:border-navy text-navy font-heading font-bold px-8 py-3 rounded-xl text-sm transition-colors duration-200">
                                Talk to an Engineer
                            </a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
