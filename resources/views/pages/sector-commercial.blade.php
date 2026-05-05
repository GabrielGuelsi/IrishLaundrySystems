@extends('layouts.app')

@section('meta')
<meta name="description" content="Engineering-led commercial and industrial laundry support — service contracts, reactive repairs, equipment supply and lifecycle planning across Ireland.">

@endsection

@section('content')

<!-- 1. HERO -->
<section class="relative overflow-hidden flex flex-col" style="height:720px; min-height:560px;">
    <!-- Background image -->
    <img src="/images/healthcare/service-contracts-hero.jpg" alt="Commercial laundry operation"
         class="absolute inset-0 w-full h-full object-cover object-[center_25%]">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.75) 0%, rgba(1,30,65,0.4) 50%, transparent 100%);"></div>
    <!-- Content -->
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-24 lg:py-32">
            <div class="max-w-3xl reveal reveal-left">
                <h1 class="font-heading font-bold text-white text-4xl lg:text-6xl leading-tight mb-8">
                    High-throughput laundry<br>engineering for commercial<br>and industrial operations.
                </h1>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#commercial-assessment"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Commercial Assessment
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

<!-- SPLIT STATEMENT -->
<section class="py-16 lg:py-24 bg-[#f4f6f9] border-b border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight">
                    We work with commercial and industrial laundry operations across Ireland.
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-500 text-xl leading-relaxed mb-4">
                    High-throughput environments need equipment and support that <span style="color:#148af4;">won't let you down.</span>
                </p>
                <p class="font-body text-gray-500 leading-relaxed mb-4">
                    Whether it's a linen hire operation, on-premises laundry or industrial facility, we know you need a <span style="color:#148af4;">consistently reliable laundry operation</span> — which is why we provide fast, expert support across the Republic of Ireland.
                </p>
                <p class="font-body text-gray-500 leading-relaxed mb-8">
                    We've been keeping commercial laundry rooms running for over <span style="color:#148af4;">37 years.</span> If you need assistance, our network of engineers is just a phone call away.
                </p>
                <a href="{{ route('equipment') }}"
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

<!-- COMMERCIAL ROUTE — Gallery style -->
<style>
.ils-gallery-card {
    position: relative;
    overflow: hidden;
    min-height: 520px;
    flex: 1 1 25%;
}
.ils-gallery-card img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    transition: transform 0.6s ease;
}
.ils-gallery-card:hover img {
    transform: scale(1.06);
}
.ils-gallery-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(1,30,65,0.90) 0%, rgba(1,30,65,0.35) 55%, rgba(1,30,65,0.10) 100%);
    z-index: 1;
    transition: opacity 0.4s;
}
.ils-gallery-card::after {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(1,30,65,0.90);
    z-index: 2;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.4s, visibility 0.4s;
}
.ils-gallery-card:hover::before { opacity: 0; }
.ils-gallery-card:hover::after  { opacity: 1; visibility: visible; }

/* Default caption — bottom-left */
.ils-gcap1 {
    position: absolute;
    bottom: 28px;
    left: 32px;
    z-index: 3;
    transition: opacity 0.35s ease, transform 0.35s ease;
}
.ils-gcap1 .ils-num {
    color: #148af4;
    font-size: 2.6rem;
    font-weight: 700;
    line-height: 1;
    display: block;
    margin-bottom: 6px;
    font-family: 'Inter', system-ui, sans-serif;
}
.ils-gcap1 h4 {
    color: #fff;
    font-size: 1rem;
    font-weight: 700;
    line-height: 1.3;
    margin: 0;
    font-family: 'Inter', system-ui, sans-serif;
}
.ils-gallery-card:hover .ils-gcap1 {
    opacity: 0;
    transform: translateY(16px);
}

/* Hover caption — vertically centered */
.ils-gcap2 {
    position: absolute;
    top: 50%;
    left: 32px;
    right: 32px;
    transform: translateY(-40%);
    z-index: 5;
    opacity: 0;
    transition: opacity 0.4s ease, transform 0.4s ease;
}
.ils-gallery-card:hover .ils-gcap2 {
    opacity: 1;
    transform: translateY(-50%);
}
.ils-gcap2 .ils-num {
    color: #148af4;
    font-size: 2.6rem;
    font-weight: 700;
    line-height: 1;
    display: block;
    margin-bottom: 12px;
    font-family: 'Inter', system-ui, sans-serif;
}
.ils-gcap2 h4 {
    color: #fff;
    font-size: 1.1rem;
    font-weight: 700;
    margin-bottom: 12px;
    font-family: 'Inter', system-ui, sans-serif;
}
.ils-gcap2 p {
    color: rgba(255,255,255,0.72);
    font-size: 0.85rem;
    line-height: 1.65;
    font-family: 'Inter', system-ui, sans-serif;
}

@media (max-width: 767px) {
    .ils-gallery-card { min-height: 300px; flex: 1 1 50%; }
}
@media (max-width: 479px) {
    .ils-gallery-card { min-height: 260px; flex: 1 1 100%; }
}
</style>

<section class="w-full overflow-hidden">
    <div style="display:flex; flex-wrap:wrap;">
        @foreach([
            [
                'num'   => '01.',
                'title' => 'Assess the room',
                'body'  => 'Review flow, hygiene handling, throughput pressure, and the practical layout of the room.',
                'img'   => '/images/about/about-equipment.jpg',
            ],
            [
                'num'   => '02.',
                'title' => 'Match the equipment',
                'body'  => 'Match the room logic to the right barrier, washing, drying, and finishing route.',
                'img'   => '/images/healthcare/plant-room.jpg',
            ],
            [
                'num'   => '03.',
                'title' => 'Keep support close',
                'body'  => 'Keep the installed base connected to service contracts, repairs, and aftercare.',
                'img'   => '/images/healthcare/Customer-Care_Line-6000-_001.jpg',
                'pos'   => '20% center',
            ],
            [
                'num'   => '04.',
                'title' => 'Move to assessment',
                'body'  => 'Turn the room, the equipment path, and the support model into one practical next step.',
                'img'   => '/images/healthcare/repairs-callouts.jpg',
            ],
        ] as $card)
        <div class="ils-gallery-card">
            <img src="{{ asset(ltrim($card['img'], '/')) }}" alt="{{ $card['title'] }}" loading="lazy"
                 @if(!empty($card['pos'])) style="object-position: {{ $card['pos'] }};" @endif>
            <!-- Default caption -->
            <div class="ils-gcap1">
                <span class="ils-num">{{ $card['num'] }}</span>
                <h4>{{ $card['title'] }}</h4>
            </div>
            <!-- Hover caption -->
            <div class="ils-gcap2">
                <span class="ils-num">{{ $card['num'] }}</span>
                <h4>{{ $card['title'] }}</h4>
                <p>{{ $card['body'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>

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



{{-- D: Enhanced Usability — Apple-style horizontal scroll cards --}}
<style>
.ils-apple-wrap { display:flex; gap:10px; overflow-x:auto; scroll-snap-type:x mandatory; -webkit-overflow-scrolling:touch; padding-bottom:4px; scrollbar-width:none; cursor:grab; }
.ils-apple-wrap:active { cursor:grabbing; }
.ils-apple-wrap::-webkit-scrollbar { display:none; }
.ils-apple-card { flex:0 0 320px; scroll-snap-align:start; background:#fff; border-radius:18px; padding:26px 26px 70px 26px; min-height:500px; display:flex; flex-direction:column; position:relative; overflow:hidden; }
.ils-apple-label { font-size:0.72rem; font-weight:600; color:#6e6e73; letter-spacing:0.03em; margin-bottom:10px; font-family:'Inter',system-ui,sans-serif; text-transform:uppercase; }
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

<section class="py-14 lg:py-20" style="background:#f5f5f7;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <div class="flex items-end justify-between mb-8 reveal">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight">
                Enhanced usability,<br>superior safety
            </h2>
        </div>

        <div class="ils-apple-wrap" id="ils-apple-wrap-commercial">

            {{-- Card 1: Hygiene --}}
            <div class="ils-apple-card" style="background:none;padding:0;overflow:hidden;">
                <div style="position:absolute;inset:0;">
                    <img src="/images/healthcare/contamination.jpg" style="width:100%;height:100%;object-fit:cover;object-position:center;">
                    <div style="position:absolute;inset:0;background:linear-gradient(to bottom, rgba(1,30,65,0.82) 0%, rgba(1,30,65,0.25) 50%, rgba(1,30,65,0.75) 100%);"></div>
                </div>
                <div style="position:relative;z-index:2;padding:26px 26px 70px 26px;display:flex;flex-direction:column;height:100%;">
                    <p class="ils-apple-label" style="color:rgba(255,255,255,0.6);">Hygiene</p>
                    <h3 class="ils-apple-title" style="color:#fff;">Maximise hygiene in commercial applications</h3>
                </div>
                <button class="ils-apple-plus" onclick="ilsCardToggle(this)" aria-label="More info" style="position:absolute;bottom:22px;right:22px;z-index:3;background:rgba(255,255,255,0.2);">
                    <svg fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                </button>
                <div class="ils-apple-overlay">
                    <h4>Maximise hygiene in commercial applications</h4>
                    <ul>
                        <li>Dirty-side to clean-side contamination prevention at every wash stage</li>
                        <li>Failsafe disinfection cycle — no partial completions passing through</li>
                        <li>Full audit trail and cycle logging for operational compliance</li>
                    </ul>
                    <button class="ils-apple-close" onclick="ilsCardToggle(this.closest('.ils-apple-card').querySelector('.ils-apple-plus'))" aria-label="Close">
                        <svg fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                    </button>
                </div>
            </div>

            {{-- Card 2: Productivity --}}
            <div class="ils-apple-card" style="background:none;padding:0;overflow:hidden;">
                <div style="position:absolute;inset:0;">
                    <img src="/images/healthcare/operator.jpg" style="width:100%;height:100%;object-fit:cover;object-position:center;">
                    <div style="position:absolute;inset:0;background:linear-gradient(to bottom, rgba(1,30,65,0.82) 0%, rgba(1,30,65,0.25) 50%, rgba(1,30,65,0.75) 100%);"></div>
                </div>
                <div style="position:relative;z-index:2;padding:26px 26px 70px 26px;display:flex;flex-direction:column;height:100%;">
                    <p class="ils-apple-label" style="color:rgba(255,255,255,0.6);">Productivity</p>
                    <h3 class="ils-apple-title" style="color:#fff;">Operator support in high-output laundries</h3>
                </div>
                <button class="ils-apple-plus" onclick="ilsCardToggle(this)" aria-label="More info" style="position:absolute;bottom:22px;right:22px;z-index:3;background:rgba(255,255,255,0.2);">
                    <svg fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                </button>
                <div class="ils-apple-overlay">
                    <h4>Operator support in high-output laundries</h4>
                    <ul>
                        <li>Dual-partition drum for balanced heavy-load handling</li>
                        <li>Auto-positioning reduces manual repositioning between cycles</li>
                        <li>Large door openings designed around operator throughput</li>
                    </ul>
                    <button class="ils-apple-close" onclick="ilsCardToggle(this.closest('.ils-apple-card').querySelector('.ils-apple-plus'))" aria-label="Close">
                        <svg fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                    </button>
                </div>
            </div>

            {{-- Card 3: Control --}}
            <div class="ils-apple-card" style="background:none;padding:0;overflow:hidden;">
                <div style="position:absolute;inset:0;">
                    <img src="/images/healthcare/plant-room.jpg" style="width:100%;height:100%;object-fit:cover;object-position:center;">
                    <div style="position:absolute;inset:0;background:linear-gradient(to bottom, rgba(1,30,65,0.82) 0%, rgba(1,30,65,0.25) 50%, rgba(1,30,65,0.75) 100%);"></div>
                </div>
                <div style="position:relative;z-index:2;padding:26px 26px 70px 26px;display:flex;flex-direction:column;height:100%;">
                    <p class="ils-apple-label" style="color:rgba(255,255,255,0.6);">Control</p>
                    <h3 class="ils-apple-title" style="color:#fff;">Intelligent control</h3>
                </div>
                <button class="ils-apple-plus" onclick="ilsCardToggle(this)" aria-label="More info" style="position:absolute;bottom:22px;right:22px;z-index:3;background:rgba(255,255,255,0.2);">
                    <svg fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                </button>
                <div class="ils-apple-overlay">
                    <h4>Intelligent control</h4>
                    <ul>
                        <li>Independent zone control — dirty and clean side managed separately</li>
                        <li>Readable panel across full shift conditions</li>
                        <li>Cycle data logging for compliance and operational audit records</li>
                    </ul>
                    <button class="ils-apple-close" onclick="ilsCardToggle(this.closest('.ils-apple-card').querySelector('.ils-apple-plus'))" aria-label="Close">
                        <svg fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                    </button>
                </div>
            </div>

            {{-- Card 4: ERGOCERT --}}
            <div class="ils-apple-card" style="background:none;padding:0;overflow:hidden;">
                <div style="position:absolute;inset:0;">
                    <img src="/images/healthcare/engineer.jpg" style="width:100%;height:100%;object-fit:cover;object-position:center;">
                    <div style="position:absolute;inset:0;background:linear-gradient(to bottom, rgba(1,30,65,0.82) 0%, rgba(1,30,65,0.25) 50%, rgba(1,30,65,0.75) 100%);"></div>
                </div>
                <div style="position:relative;z-index:2;padding:26px 26px 70px 26px;display:flex;flex-direction:column;height:100%;">
                    <p class="ils-apple-label" style="color:rgba(255,255,255,0.6);">ERGOCERT Certified</p>
                    <h3 class="ils-apple-title" style="color:#fff;">Experience 4-star ergonomics</h3>
                </div>
                <button class="ils-apple-plus" onclick="ilsCardToggle(this)" aria-label="More info" style="position:absolute;bottom:22px;right:22px;z-index:3;background:rgba(255,255,255,0.2);">
                    <svg fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                </button>
                <div class="ils-apple-overlay">
                    <h4>4-star ERGOCERT — the highest level</h4>
                    <ul>
                        <li>Certified for reduced operator strain across full working shifts</li>
                        <li>Door and drum geometry designed for repeated handling tasks</li>
                        <li>Recognised internationally as the benchmark for laundry ergonomics</li>
                    </ul>
                    <button class="ils-apple-close" onclick="ilsCardToggle(this.closest('.ils-apple-card').querySelector('.ils-apple-plus'))" aria-label="Close">
                        <svg fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                    </button>
                </div>
            </div>

            {{-- Card 5: AIDO --}}
            <div class="ils-apple-card" style="background:none;padding:0;overflow:hidden;">
                <div style="position:absolute;inset:0;">
                    <img src="/images/healthcare/Foto-web-BW.jpg" style="width:100%;height:100%;object-fit:cover;object-position:center;">
                    <div style="position:absolute;inset:0;background:linear-gradient(to bottom, rgba(1,30,65,0.82) 0%, rgba(1,30,65,0.25) 50%, rgba(1,30,65,0.75) 100%);"></div>
                </div>
                <div style="position:relative;z-index:2;padding:26px 26px 70px 26px;display:flex;flex-direction:column;height:100%;">
                    <p class="ils-apple-label" style="color:rgba(255,255,255,0.6);">AIDO System</p>
                    <h3 class="ils-apple-title" style="color:#fff;">Increasingly secure doors for greater productivity</h3>
                </div>
                <button class="ils-apple-plus" onclick="ilsCardToggle(this)" aria-label="More info" style="position:absolute;bottom:22px;right:22px;z-index:3;background:rgba(255,255,255,0.2);">
                    <svg fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                </button>
                <div class="ils-apple-overlay">
                    <div class="flex items-center gap-3 mb-4">
                        <img src="/images/healthcare/Auto%20Inner%20Door%20Opening%20(AIDO)%20System.png" alt="AIDO" style="width:40px;height:40px;object-fit:fill;flex-shrink:0;">
                        <span style="font-size:0.75rem;font-weight:700;color:#148af4;text-transform:uppercase;letter-spacing:0.05em;">Auto Inner Door Opening</span>
                    </div>
                    <h4>Increasingly secure doors</h4>
                    <ul>
                        <li>Automatic drum positioning and outer door locking</li>
                        <li>Large door openings for easy inner drum handling</li>
                        <li>Auto inner-drum door pre-opening at end of wash cycle</li>
                    </ul>
                    <button class="ils-apple-close" onclick="ilsCardToggle(this.closest('.ils-apple-card').querySelector('.ils-apple-plus'))" aria-label="Close">
                        <svg fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                    </button>
                </div>
            </div>

            {{-- Card 6: Hygiene Watchdog --}}
            <div class="ils-apple-card" style="background:none;padding:0;overflow:hidden;">
                <div style="position:absolute;inset:0;">
                    <img src="/images/about/about-equipment.jpg" style="width:100%;height:100%;object-fit:cover;object-position:center;">
                    <div style="position:absolute;inset:0;background:linear-gradient(to bottom, rgba(1,30,65,0.82) 0%, rgba(1,30,65,0.25) 50%, rgba(1,30,65,0.75) 100%);"></div>
                </div>
                <div style="position:relative;z-index:2;padding:26px 26px 70px 26px;display:flex;flex-direction:column;height:100%;">
                    <p class="ils-apple-label" style="color:rgba(255,255,255,0.6);">Hygiene Watchdog</p>
                    <h3 class="ils-apple-title" style="color:#fff;">Total safety with excellent results</h3>
                </div>
                <button class="ils-apple-plus" onclick="ilsCardToggle(this)" aria-label="More info" style="position:absolute;bottom:22px;right:22px;z-index:3;background:rgba(255,255,255,0.2);">
                    <svg fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                </button>
                <div class="ils-apple-overlay">
                    <div class="flex items-center gap-3 mb-4">
                        <img src="/images/healthcare/HygieneWatchdog.webp" alt="Hygiene Watchdog" style="width:36px;height:36px;object-fit:fill;flex-shrink:0;">
                        <span style="font-size:0.75rem;font-weight:700;color:#148af4;text-transform:uppercase;letter-spacing:0.05em;">Hygiene Watchdog</span>
                    </div>
                    <h4>Total safety with excellent results</h4>
                    <ul>
                        <li>Full cycle completion monitoring — no partial wash passes</li>
                        <li>Maximum defence against microorganism spread and cross contamination</li>
                        <li>Compatible with operational documentation and audit requirements</li>
                    </ul>
                    <button class="ils-apple-close" onclick="ilsCardToggle(this.closest('.ils-apple-card').querySelector('.ils-apple-plus'))" aria-label="Close">
                        <svg fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                    </button>
                </div>
            </div>

            {{-- Card 7: Efficiency & Throughput --}}
            <div class="ils-apple-card" style="background:none;padding:0;overflow:hidden;">
                <div style="position:absolute;inset:0;">
                    <img src="/images/healthcare/commercial-industrial.jpg" style="width:100%;height:100%;object-fit:cover;object-position:center;">
                    <div style="position:absolute;inset:0;background:linear-gradient(to bottom, rgba(1,30,65,0.82) 0%, rgba(1,30,65,0.25) 50%, rgba(1,30,65,0.75) 100%);"></div>
                </div>
                <div style="position:relative;z-index:2;padding:26px 26px 70px 26px;display:flex;flex-direction:column;height:100%;">
                    <p class="ils-apple-label" style="color:rgba(255,255,255,0.6);">Efficiency &amp; Throughput</p>
                    <h3 class="ils-apple-title" style="color:#fff;">Built for operators running high-volume commercial cycles every day</h3>
                </div>
                <button class="ils-apple-plus" onclick="ilsCardToggle(this)" aria-label="More info" style="position:absolute;bottom:22px;right:22px;z-index:3;background:rgba(255,255,255,0.2);">
                    <svg fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                </button>
                <div class="ils-apple-overlay">
                    <h4>Efficiency and throughput built in</h4>
                    <ul>
                        <li>High-capacity drum and programme flexibility for commercial volume</li>
                        <li>Equipment specified to your room layout and operational demand</li>
                        <li>ERGOCERT 4-star rating confirms real-world usability for laundry operators</li>
                        <li>Readable controls designed for visibility across full working shifts</li>
                    </ul>
                    <button class="ils-apple-close" onclick="ilsCardToggle(this.closest('.ils-apple-card').querySelector('.ils-apple-plus'))" aria-label="Close">
                        <svg fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                    </button>
                </div>
            </div>

        </div>{{-- end apple-wrap --}}

    </div>
</section>

<script>
function ilsCardToggle(btn) {
    var card = btn.closest('.ils-apple-card');
    var overlay = card.querySelector('.ils-apple-overlay');
    var isOpen = overlay.classList.contains('open');
    document.querySelectorAll('.ils-apple-overlay.open').forEach(function(o) {
        o.classList.remove('open');
        o.closest('.ils-apple-card').querySelector('.ils-apple-plus').classList.remove('open');
    });
    if (!isOpen) { overlay.classList.add('open'); btn.classList.add('open'); }
}
(function() {
    var wrap = document.getElementById('ils-apple-wrap-commercial');
    if (!wrap) return;
    var isDown = false, startX, scrollLeft;
    wrap.addEventListener('mousedown', function(e) { isDown = true; startX = e.pageX - wrap.offsetLeft; scrollLeft = wrap.scrollLeft; });
    wrap.addEventListener('mouseleave', function() { isDown = false; });
    wrap.addEventListener('mouseup', function() { isDown = false; });
    wrap.addEventListener('mousemove', function(e) { if (!isDown) return; e.preventDefault(); wrap.scrollLeft = scrollLeft - (e.pageX - wrap.offsetLeft - startX); });
})();
</script>

<!-- SUPPORT ROUTES -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">

        <!-- Heading -->
        <div class="mb-10">
            <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight">
                Three clear routes into<br>
                <span class="text-orange">the main commercial pathways</span>.
            </h2>
        </div>

        <!-- 3-column card grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">

            <!-- Card 1 — Repairs & Call-outs -->
            <div class="group relative overflow-hidden h-[520px] lg:h-[560px] rounded-2xl cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <img src="/images/healthcare/repairs-callouts.jpg" alt="Repairs and Call-outs"
                     class="absolute inset-0 w-full h-full object-cover object-[center_40%] transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.55) 30%, rgba(1,30,65,0.1) 60%, transparent 80%);"></div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background: rgba(1,30,65,0.96);"></div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end">
                    <div class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-64 group-hover:opacity-100 transition-all duration-500">
                        <p class="font-body text-white text-sm leading-relaxed mb-4">
                            Urgent support for breakdowns and performance issues where operational pressure demands a fast, practical route.
                        </p>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-center gap-2 font-body text-white text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>
                                Triage-first breakdown support
                            </li>
                            <li class="flex items-center gap-2 font-body text-white text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>
                                Fast route into contact and follow-up
                            </li>
                            <li class="flex items-center gap-2 font-body text-white text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>
                                Built for critical laundry environments
                            </li>
                        </ul>
                    </div>
                    <h3 class="font-heading font-extrabold text-white text-4xl lg:text-5xl leading-[1.05] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-5">Repairs &amp; <span class="whitespace-nowrap">Call-outs</span></h3>
                    <div class="flex justify-end">
                        <a href="{{ route('repairs') }}"
                           class="inline-flex items-center justify-center bg-orange hover:bg-orange-dark text-white font-body font-semibold px-5 py-2.5 rounded-md text-sm transition-colors duration-200 whitespace-nowrap">
                            Request Call-out
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2 — Equipment Rental -->
            <div class="group relative overflow-hidden h-[520px] lg:h-[560px] rounded-2xl cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <img src="/images/healthcare/commercial-industrial.jpg" alt="Equipment Rental"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.55) 30%, rgba(1,30,65,0.1) 60%, transparent 80%);"></div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background: rgba(1,30,65,0.96);"></div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end">
                    <div class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-64 group-hover:opacity-100 transition-all duration-500">
                        <p class="font-body text-white text-sm leading-relaxed mb-4">
                            Electrolux Professional equipment supplied, installed and supported. Structured rental with maintenance included — managed cost and operational continuity.
                        </p>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-center gap-2 font-body text-white text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>
                                Equipment with service built in
                            </li>
                            <li class="flex items-center gap-2 font-body text-white text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>
                                Predictable monthly cost
                            </li>
                            <li class="flex items-center gap-2 font-body text-white text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>
                                Electrolux Professional standard
                            </li>
                        </ul>
                    </div>
                    <h3 class="font-heading font-extrabold text-white text-4xl lg:text-5xl leading-[1.05] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-5">Equipment Rental</h3>
                    <div class="flex justify-end">
                        <a href="{{ route('rental') }}"
                           class="inline-flex items-center justify-center bg-orange hover:bg-orange-dark text-white font-body font-semibold px-5 py-2.5 rounded-md text-sm transition-colors duration-200 whitespace-nowrap">
                            See Rental Options
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3 — Service Contracts -->
            <div class="group relative overflow-hidden h-[520px] lg:h-[560px] rounded-2xl cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <img src="/images/healthcare/Service%20Contracts.png" alt="Service Contracts"
                     class="absolute inset-0 w-full h-full object-cover object-[center_35%] transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0"
                     style="background: linear-gradient(to top, rgba(1,30,65,0.92) 0%, rgba(1,30,65,0.55) 30%, rgba(1,30,65,0.1) 60%, transparent 80%);"></div>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background: rgba(1,30,65,0.96);"></div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end">
                    <div class="max-h-0 overflow-hidden opacity-0 group-hover:max-h-64 group-hover:opacity-100 transition-all duration-500">
                        <p class="font-body text-white text-sm leading-relaxed mb-4">
                            Structured preventive maintenance across three tiers — Core, Priority and Assured. Predictable costs, documented history, fewer unplanned stoppages.
                        </p>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-center gap-2 font-body text-white text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>
                                Three maintenance tiers
                            </li>
                            <li class="flex items-center gap-2 font-body text-white text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>
                                Documented service records
                            </li>
                            <li class="flex items-center gap-2 font-body text-white text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#148af4] flex-shrink-0"></span>
                                Fewer unplanned stoppages
                            </li>
                        </ul>
                    </div>
                    <h3 class="font-heading font-extrabold text-white text-4xl lg:text-5xl leading-[1.05] tracking-tight drop-shadow-[0_4px_12px_rgba(0,0,0,0.45)] mb-5">Service Contracts</h3>
                    <div class="flex justify-end">
                        <a href="{{ route('service-contracts') }}"
                           class="inline-flex items-center justify-center bg-orange hover:bg-orange-dark text-white font-body font-semibold px-5 py-2.5 rounded-md text-sm transition-colors duration-200 whitespace-nowrap">
                            View Contracts
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@include('components.service-contracts-strip')

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
                Irish Laundry Systems sell/rent , installs and maintains a range of industry-standard equipment including washers and dryers.<br>
                Take an extra load off your mind.
            </p>
        </div>

        <div class="flex flex-col divide-y divide-gray-100">

            <!-- COMMERCIAL WASHERS — image left, text right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-start py-12 lg:py-16 reveal">
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
            <div x-data="{ open: false }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-start py-12 lg:py-16 reveal">
                <div class="order-2 lg:order-1">
                    <h3 class="font-heading font-normal text-navy text-2xl lg:text-3xl leading-tight mb-4">
                        Precision <strong class="font-bold">drying</strong> for <strong class="font-bold">high-demand</strong> commercial cycles.
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
                <div class="flex flex-col order-1 lg:order-2">
                    <img src="/images/equipment/line6000-tumble-dryer.webp"
                         alt="Line 6000 Tumble Dryer"
                         class="w-full h-96 object-contain">
                    <div class="mt-1 pt-3 border-t border-gray-100">
                        <button @click="open = !open"
                                class="w-full flex items-center justify-start gap-3 text-left group">
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
                        <p class="font-body text-gray-500 text-sm leading-relaxed">All models have been user-tested to ensure operators will feel less tension and strain, so they—and your commercial laundry—can thrive.</p>
                    </div>
                </div>
            </div>
            </div>

            <!-- 3. Ironers — image left, text right -->
            <div x-data="{ open: false, tab: 'diamms' }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-start py-12 lg:py-16 reveal">
                <div class="flex flex-col items-start gap-4">
                    <img src="/images/equipment/line6000-ironer.webp"
                         alt="Line 6000 Ironer"
                         class="w-full h-80 object-contain">
                    <div class="mt-1 pt-3 border-t border-gray-100 w-full">
                        <button @click="open = !open" class="w-full flex items-center justify-start gap-3 text-left group">
                            <span class="font-heading font-bold text-navy text-lg">System Features — DIAMMS &amp; Hygiene Guard</span>
                            <span class="flex-shrink-0 text-navy transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </button>
                    </div>
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
</section>


@include('components.why-choose-strip')

@include('components.equipment-categories')

@include('components.testimonials')

@include('components.cta-downtime-form', ['pageSource' => 'commercial_cta'])

@endsection
