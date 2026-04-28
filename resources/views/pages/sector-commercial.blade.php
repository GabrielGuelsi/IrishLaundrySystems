@extends('layouts.app')

@section('meta')
<meta name="description" content="Engineering-led commercial and industrial laundry support — service contracts, reactive repairs, equipment supply and lifecycle planning across Ireland.">

@endsection

@section('content')

@include('components.sector-tabs')

<!-- 1. HERO -->
<section class="relative overflow-hidden flex flex-col" style="height:720px; min-height:560px;">
    <!-- Background image -->
    <img src="/images/about/about-equipment.jpg" alt="Commercial laundry operation"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0 bg-navy/60"></div>
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

<!-- FROM ROOM REVIEW — Scroll-pinned with changing images -->
<style>
.comm-scroll-section { position: relative; overflow: hidden; }
.comm-scroll-inner {
    position: relative;
    display: flex;
    align-items: center;
    height: 75vh;
    min-height: 480px;
    max-height: 720px;
    width: 100%;
    overflow: hidden;
}
.comm-scroll-card {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: flex-end;
}
.comm-scroll-img {
    position: absolute;
    inset: 0;
    overflow: hidden;
}
.comm-scroll-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}
.comm-scroll-img::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to right, rgba(1,30,65,0.9) 0%, rgba(1,30,65,0.55) 45%, rgba(1,30,65,0.2) 100%);
}
.comm-scroll-title {
    position: relative;
    z-index: 20;
    width: 40%;
    flex-shrink: 0;
}
.comm-scroll-cards-wrap {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    z-index: 10;
}
.comm-card-inner {
    width: 40%;
    max-width: 440px;
    margin-right: 5%;
    background: rgba(248, 249, 251, 0.97);
    border-radius: 1.25rem;
    padding: 2rem 2.25rem;
    box-shadow: 0 16px 48px rgba(0,0,0,0.22);
}
@media (max-width: 1024px) {
    .comm-scroll-title { display: none; }
    .comm-card-inner { width: 88%; max-width: none; margin: 0 auto; }
    .comm-scroll-card { justify-content: center; }
}
</style>

<section class="comm-scroll-section">
    <div class="comm-scroll-inner" id="comm-scroll-inner">

        {{-- Fixed left title (sits above the stacked cards) --}}
        <div class="comm-scroll-title" style="position:relative;z-index:20;padding-left:max(5%,calc((100vw - 1536px)/2 + 5rem));">
            <h2 class="font-heading font-bold text-white leading-tight mb-3" style="font-size:clamp(1.5rem,2.6vw,2.4rem);">
                From room review to the right next step
            </h2>
            <p class="font-body text-white/60 text-sm leading-relaxed">
                Commercial laundry rooms work better when the equipment path and support model are aligned from the start.
            </p>
        </div>

        {{-- Stacked cards with individual backgrounds --}}
        <div class="comm-scroll-cards-wrap">

            {{-- Card 1 — about-equipment.jpg --}}
            <div class="comm-scroll-card">
                <div class="comm-scroll-img">
                    <img src="/images/about/about-equipment.jpg" alt="Commercial laundry equipment">
                </div>
                <div class="comm-card-inner">
                    <span class="inline-flex items-center justify-center w-9 h-9 rounded-full bg-navy text-white font-heading font-bold text-sm mb-4">01</span>
                    <h3 class="font-heading font-bold text-navy mb-2" style="font-size:1.45rem;line-height:1.2;">Assess the room</h3>
                    <p class="font-body text-gray-500 leading-relaxed text-sm">Review flow, hygiene handling, throughput pressure, and the practical layout of the room.</p>
                </div>
            </div>

            {{-- Card 2 — plant-room.jpg --}}
            <div class="comm-scroll-card">
                <div class="comm-scroll-img">
                    <img src="/images/healthcare/plant-room.jpg" alt="Plant room">
                </div>
                <div class="comm-card-inner">
                    <span class="inline-flex items-center justify-center w-9 h-9 rounded-full bg-navy text-white font-heading font-bold text-sm mb-4">02</span>
                    <h3 class="font-heading font-bold text-navy mb-2" style="font-size:1.45rem;line-height:1.2;">Match the equipment</h3>
                    <p class="font-body text-gray-500 leading-relaxed text-sm">Match the room logic to the right barrier, washing, drying, and finishing route.</p>
                </div>
            </div>

            {{-- Card 3 — about-engineers.jpg --}}
            <div class="comm-scroll-card">
                <div class="comm-scroll-img">
                    <img src="/images/about/about-engineers.jpg" alt="Engineers">
                </div>
                <div class="comm-card-inner">
                    <span class="inline-flex items-center justify-center w-9 h-9 rounded-full bg-navy text-white font-heading font-bold text-sm mb-4">03</span>
                    <h3 class="font-heading font-bold text-navy mb-2" style="font-size:1.45rem;line-height:1.2;">Keep support close</h3>
                    <p class="font-body text-gray-500 leading-relaxed text-sm">Keep the installed base connected to service contracts, repairs, and aftercare.</p>
                </div>
            </div>

            {{-- Card 4 — workflow.jpg --}}
            <div class="comm-scroll-card">
                <div class="comm-scroll-img">
                    <img src="/images/healthcare/workflow.jpg" alt="Laundry workflow">
                </div>
                <div class="comm-card-inner">
                    <span class="inline-flex items-center justify-center w-9 h-9 rounded-full bg-navy text-white font-heading font-bold text-sm mb-4">04</span>
                    <h3 class="font-heading font-bold text-navy mb-2" style="font-size:1.45rem;line-height:1.2;">Move to assessment</h3>
                    <p class="font-body text-gray-500 leading-relaxed text-sm">Turn the room, the equipment path, and the support model into one practical next step.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
(function () {
    function initCommScroll() {
        if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
        gsap.registerPlugin(ScrollTrigger);
        var inner = document.getElementById('comm-scroll-inner');
        if (!inner) return;
        var cards = inner.querySelectorAll('.comm-card-inner');
        var imgs  = inner.querySelectorAll('.comm-scroll-img');

        // Initial state: card 1 + img 1 visible, rest hidden
        for (var i = 1; i < cards.length; i++) {
            gsap.set(cards[i], { opacity: 0, y: 60 });
            gsap.set(imgs[i],  { opacity: 0 });
        }

        var tl = gsap.timeline({
            scrollTrigger: {
                trigger: inner,
                pin: true,
                scrub: 0.4,
                start: 'center center',
                end: 'top+=3000 center',
                anticipatePin: 1,
            }
        });

        // Card 1 → 2 (image + card swap)
        tl.to(cards[0], { opacity: 0, y: -60, duration: 0.5 }, 0)
          .to(imgs[0],   { opacity: 0,         duration: 0.8 }, 0)
          .to(imgs[1],   { opacity: 1,         duration: 0.8 }, 0)
          .to(cards[1],  { opacity: 1, y: 0,   duration: 0.5 }, 0.4)
        // Card 2 → 3
          .to(cards[1], { opacity: 0, y: -60, duration: 0.5 }, 1.4)
          .to(imgs[1],  { opacity: 0,         duration: 0.8 }, 1.4)
          .to(imgs[2],  { opacity: 1,         duration: 0.8 }, 1.4)
          .to(cards[2], { opacity: 1, y: 0,   duration: 0.5 }, 1.8)
        // Card 3 → 4
          .to(cards[2], { opacity: 0, y: -60, duration: 0.5 }, 2.8)
          .to(imgs[2],  { opacity: 0,         duration: 0.8 }, 2.8)
          .to(imgs[3],  { opacity: 1,         duration: 0.8 }, 2.8)
          .to(cards[3], { opacity: 1, y: 0,   duration: 0.5 }, 3.2);
    }
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initCommScroll);
    } else {
        initCommScroll();
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
               class="inline-flex items-center gap-2 border-2 border-[#148af4] text-white hover:bg-[#148af4] font-heading font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                Speak to us about your requirements
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
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
            <div class="ils-apple-card">
                <p class="ils-apple-label">Hygiene</p>
                <h3 class="ils-apple-title">Maximise hygiene in commercial applications</h3>
                <p class="ils-apple-body">Robust infection prevention measures to eliminate contamination risk between dirty and clean zones — protecting staff and maintaining standards at every wash stage.</p>
                <div class="ils-apple-img">
                    <img src="/images/healthcare/hygiene-icon.png" alt="Hygiene">
                </div>
                <button class="ils-apple-plus" onclick="ilsCardToggle(this)" aria-label="More info">
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
            <div class="ils-apple-card">
                <p class="ils-apple-label">Productivity</p>
                <h3 class="ils-apple-title">Operator support in high-output laundries</h3>
                <p class="ils-apple-body">Dual-partition drum and auto-positioning for easy handling of heavy loads — reducing operator strain on busy commercial and industrial laundry shifts.</p>
                <div class="ils-apple-img">
                    <img src="/images/healthcare/operator-icon.png" alt="Operator support">
                </div>
                <button class="ils-apple-plus" onclick="ilsCardToggle(this)" aria-label="More info">
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
            <div class="ils-apple-card">
                <p class="ils-apple-label">Control</p>
                <h3 class="ils-apple-title">Intelligent control</h3>
                <p class="ils-apple-body">Intuitive interface managing dirty and clean zones independently — ensuring failsafe disinfection and a complete audit trail for compliance records.</p>
                <div class="ils-apple-img">
                    <img src="/images/healthcare/control-icon.png" alt="Intelligent control">
                </div>
                <button class="ils-apple-plus" onclick="ilsCardToggle(this)" aria-label="More info">
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
            <div class="ils-apple-card">
                <p class="ils-apple-label">ERGOCERT Certified</p>
                <h3 class="ils-apple-title">Experience 4-star ergonomics</h3>
                <p class="ils-apple-body">The highest international ergonomics certification available — our entire Line 6000 range has earned the prestigious 4-star ERGOCERT rating.</p>
                <div class="ils-apple-img" style="justify-content:flex-start;align-items:center;padding-top:32px;">
                    <div class="flex gap-2">
                        @for($s = 0; $s < 4; $s++)
                        <svg style="width:40px;height:40px;color:#148af4;" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        @endfor
                    </div>
                </div>
                <button class="ils-apple-plus" onclick="ilsCardToggle(this)" aria-label="More info">
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
            <div class="ils-apple-card">
                <p class="ils-apple-label">AIDO System</p>
                <h3 class="ils-apple-title">Increasingly secure doors for greater productivity</h3>
                <p class="ils-apple-body">Automatic drum positioning and outer door locking — large openings for easy inner drum handling with auto pre-opening at end of wash cycle.</p>
                <div class="ils-apple-img">
                    <img src="/images/healthcare/Foto-web-BW.jpg" alt="AIDO door system" style="max-height:200px;border-radius:12px;object-fit:cover;width:100%;">
                </div>
                <button class="ils-apple-plus" onclick="ilsCardToggle(this)" aria-label="More info">
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
            <div class="ils-apple-card">
                <p class="ils-apple-label">Hygiene Watchdog</p>
                <h3 class="ils-apple-title">Total safety with excellent results</h3>
                <p class="ils-apple-body">Ensures full cycle completion so all laundry is fully washed and thoroughly decontaminated — the maximum defence against cross contamination.</p>
                <div class="ils-apple-img">
                    <img src="/images/healthcare/illustration-barrier-washers-1.webp" alt="Hygiene Watchdog">
                </div>
                <button class="ils-apple-plus" onclick="ilsCardToggle(this)" aria-label="More info">
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
            <div class="ils-apple-card">
                <p class="ils-apple-label">Efficiency & Throughput</p>
                <h3 class="ils-apple-title">Built for operators running high-volume commercial cycles every day</h3>
                <p class="ils-apple-body">The right equipment supports throughput, operator efficiency, and compliance — every shift, every day.</p>
                <div class="ils-apple-img" style="align-items:flex-start;padding-top:20px;flex-direction:column;gap:12px;">
                    @foreach([
                        ['title'=>'High-capacity cycle management','body'=>'Optimised drum sizes and programme flexibility for volume demands.'],
                        ['title'=>'Operator-friendly controls','body'=>'Readable interfaces designed for repeated use across long industrial shifts.'],
                        ['title'=>'Compliance audit trail','body'=>'Cycle logs and documentation built into every wash programme.'],
                    ] as $pt)
                    <div class="flex gap-2 items-start">
                        <span style="width:6px;height:6px;border-radius:50%;background:#148af4;flex-shrink:0;margin-top:6px;"></span>
                        <div>
                            <p style="font-size:0.8rem;font-weight:700;color:#1d1d1f;font-family:'Inter',system-ui,sans-serif;">{{ $pt['title'] }}</p>
                            <p style="font-size:0.75rem;color:#6e6e73;line-height:1.55;font-family:'Inter',system-ui,sans-serif;">{{ $pt['body'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="ils-apple-plus" onclick="ilsCardToggle(this)" aria-label="More info">
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
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <!-- Header -->
        <div class="mb-10 reveal">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-5xl leading-tight max-w-2xl">
                Three clear routes into<br>
                <span class="font-bold">commercial laundry support.</span>
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
                        Planned support built around installed commercial equipment, continuity targets, and the daily pressure of the room.
                    </p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 self-start bg-white/15 hover:bg-white/25 border border-white/30 text-white font-heading font-bold text-sm px-4 py-2 rounded-lg transition-colors">
                        Review contract options
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            <!-- Card 2: Repairs & Call-outs -->
            <div class="relative rounded-2xl overflow-hidden aspect-square reveal">
                <img src="/images/healthcare/Repairsandcallouts.jpeg" alt="Repairs & Call-outs" class="absolute inset-0 w-full h-full object-cover object-center">
                <div class="absolute inset-0 bg-gradient-to-t from-navy/90 via-navy/40 to-transparent"></div>
                <div class="absolute inset-0 flex flex-col justify-end p-8">
                    <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-snug mb-3">Repairs &amp; Call-outs</h3>
                    <p class="font-body text-gray-200 text-sm leading-relaxed mb-5">
                        Urgent response path when breakdowns, performance issues, or pressure points interrupt commercial laundry operations.
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
                        Lifecycle support for wear items, parts planning, and continuity around the installed commercial base.
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
                Irish Laundry Systems sell/rent , installs and maintains a range of industry-standard equipment including washers and dryers.<br>
                Take an extra load off your mind.
            </p>
        </div>

        <div class="flex flex-col divide-y divide-gray-100">

            <!-- 1. Barrier Washers — text left, image right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center py-12 lg:py-16 reveal">
                <div class="text-center">
                    <h3 class="font-heading text-navy text-3xl lg:text-4xl mb-4">Barrier <strong>washers</strong></h3>
                    <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                        Barrier washers sit at the centre of commercial laundry rooms where controlled dirty-side loading and clean-side unloading are part of the process logic.
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
                <div class="relative flex justify-center">
                    <img src="/images/equipment/line6000-barrier-washer.webp"
                         alt="Line 6000 Barrier Washer"
                         class="w-full h-96 object-contain">
                    <div class="absolute bottom-4 right-4 flex items-center gap-2">
                        <img src="/images/healthcare/Auto%20Inner%20Door%20Opening%20(AIDO)%20System.png" alt="AIDO"
                             style="width:64px;height:64px;object-fit:fill;flex-shrink:0;">
                        <img src="/images/healthcare/HygieneWatchdog.webp" alt="Hygiene Watchdog"
                             style="width:52px;height:52px;object-fit:fill;flex-shrink:0;">
                    </div>
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
                <div class="relative flex justify-center order-1 lg:order-2">
                    <img src="/images/equipment/line6000-tumble-dryer.webp"
                         alt="Line 6000 Tumble Dryer"
                         class="w-full h-96 object-contain">
                    <div class="absolute bottom-4 right-4">
                        <div class="w-16 h-16 flex items-center justify-center">
                            <img src="/images/healthcare/MoistureBalance.png" alt="Moisture Balance" class="w-full h-full object-contain">
                        </div>
                    </div>
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
                            <p class="font-body text-gray-500 text-sm leading-relaxed">All models have been user-tested to ensure operators will feel less tension and strain, so they—and your commercial laundry—can thrive.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. Ironers — image left, text right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center py-12 lg:py-16 reveal">
                <div class="flex flex-col items-start gap-4">
                    <img src="/images/equipment/line6000-ironer.webp"
                         alt="Line 6000 Ironer"
                         class="w-full h-80 object-contain">
                    <div class="flex items-center gap-3">
                        <div class="w-16 h-16 flex items-center justify-center">
                            <img src="/images/healthcare/Diamms.png" alt="DIAMMS" class="w-full h-full object-contain">
                        </div>
                        <div class="w-16 h-16 flex items-center justify-center">
                            <img src="/images/healthcare/HygieneGuard.png" alt="Hygiene Guard" class="w-full h-full object-contain">
                        </div>
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


    </div>
</section>

@include('components.partner-strip')
@include('components.proof-bar')

<!-- SUGGESTED EQUIPMENT -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- Header --}}
        <div class="mb-10 text-center reveal">
            <h2 class="font-heading font-bold text-gray-900 text-3xl lg:text-5xl leading-tight mb-4">Find the right solutions for your commercial and industrial operations</h2>
            <p class="font-body text-gray-500 text-base leading-relaxed max-w-xl mx-auto">Our laundry solutions will save you time and energy, keeping your operation running at full capacity.</p>
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
<section id="commercial-assessment" class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="bg-navy rounded-3xl overflow-hidden reveal">
            <div class="grid grid-cols-1 lg:grid-cols-2">

                {{-- Left: heading + bullets --}}
                <div class="p-10 lg:p-14 flex flex-col justify-between">
                    <div>
                        <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl leading-tight mb-6">
                            Bring the commercial laundry room, the support route, and the equipment discussion into one next step
                        </h2>
                        <p class="font-body text-white/60 text-sm leading-relaxed mb-8">
                            Use this route to review room layout, barrier relevance, current equipment route, installed-base pressure, and the support model around the commercial laundry room.
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
                    <h3 class="font-heading font-bold text-navy text-xl mb-1">Request Commercial Assessment</h3>
                    <p class="font-body text-gray-500 text-sm mb-4">Tell us about the environment, the current setup, and what needs review.</p>
                    <form id="commercial-form" action="{{ route('contact') }}" method="POST" class="flex flex-col gap-2">
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
                                Request Commercial Assessment
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
