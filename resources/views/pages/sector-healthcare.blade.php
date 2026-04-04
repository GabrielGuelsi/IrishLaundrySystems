@extends('layouts.app')

@section('meta')
<meta name="description" content="Engineering-led commercial laundry support for healthcare — barrier washers, service contracts, and priority response across Ireland.">
@endsection

@section('content')

@include('components.sector-tabs')

<!-- 1. HERO -->
<section class="bg-navy py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <div class="reveal reveal-left">
                <x-pretitle label="Healthcare Laundry Support" />
                <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-6">
                    Healthcare laundry systems designed around hygiene control, workflow discipline, and operational continuity.
                </h1>
                <p class="font-body text-gray-300 text-lg leading-relaxed mb-8">
                    Barrier washer solutions, service contracts, and engineering support — built for environments where hygiene and uptime are non-negotiable.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 mb-10">
                    <a href="#healthcare-assessment"
                       class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Request Healthcare Assessment
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white/40 hover:border-white text-white font-body font-semibold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        Talk to an Engineer
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-3 reveal reveal-right">
                <div class="col-span-2 rounded-2xl overflow-hidden h-56">
                    <img src="/images/healthcare/hero-main.jpg" alt="Healthcare laundry installation" class="w-full h-full object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden h-40">
                    <img src="/images/healthcare/hero-panel.jpg" alt="Machine control panel" class="w-full h-full object-cover">
                </div>
                <div class="bg-white/5 border border-white/10 rounded-2xl p-5 flex flex-col justify-center h-40">
                    <p class="font-heading font-bold text-white text-sm leading-snug">Built for sites where contamination control and continuity cannot be treated casually.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 2. PROOF BAR -->
@include('components.proof-bar')

<!-- 3. SPLIT STATEMENT -->
<section class="py-16 lg:py-24 bg-white border-b border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <div class="reveal reveal-left">
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-6xl leading-tight">
                    We'll keep your critical laundry equipment running.
                </h2>
            </div>

            <div class="reveal reveal-right">
                <p class="font-body text-gray-700 text-xl leading-relaxed mb-4">
                    ILS supports healthcare operations across Ireland — reducing breakdown risk, improving hygiene compliance, and keeping laundry systems operational.
                </p>
                <p class="font-body text-gray-500 leading-relaxed mb-8">
                    Whatever the site requires, we'll take care of it.
                </p>
                <a href="{{ route('sectors.healthcare') }}#healthcare-equipment"
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

<!-- 4. WHY HEALTHCARE IS DIFFERENT -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <!-- Left: headline + bullets + CTA -->
            <div class="reveal reveal-left">
                <x-pretitle label="Why Healthcare Laundry Is Different" />
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-5xl leading-tight mb-3">
                    Why do so many healthcare facilities choose an on-premise laundry?
                </h2>
                <p class="font-body text-gray-500 text-sm mb-8">The main reasons are:</p>

                <ul class="space-y-5 mb-10">
                    @foreach([
                        'Guarantees greater control over hygiene and quality throughout every wash cycle.',
                        'Reduces the risk of cross-infection and contamination between wards.',
                        'Improves operational efficiency with layouts tailored to your facility.',
                        'Cuts costs and removes dependency on external laundry providers.',
                        'Includes expert engineering support at every stage — from installation to maintenance.',
                    ] as $point)
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-[#148af4] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                        </svg>
                        <span class="font-body text-gray-600 text-sm leading-relaxed">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>

                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2 border-2 border-navy text-navy hover:bg-navy hover:text-white font-body font-bold px-7 py-3.5 rounded-lg text-sm transition-colors duration-200">
                    Talk to our team for a customised solution
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            <!-- Right: image grid — 2 stacked left, 1 tall right -->
            <div class="grid grid-cols-2 gap-3 reveal reveal-right">
                <div class="flex flex-col gap-3">
                    <div class="rounded-2xl overflow-hidden h-52">
                        <img src="/images/healthcare/operator.jpg" alt="Healthcare operator" class="w-full h-full object-cover">
                    </div>
                    <div class="rounded-2xl overflow-hidden h-52">
                        <img src="/images/healthcare/contamination.jpg" alt="Contamination control" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="rounded-2xl overflow-hidden h-full min-h-[424px]">
                    <img src="/images/healthcare/engineer.jpg" alt="ILS engineer on site" class="w-full h-full object-cover">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- STATEMENT SECTION -->
<section class="relative min-h-[480px] flex items-center py-20 lg:py-28 overflow-hidden">
    <div class="absolute inset-0">
        <img src="/images/healthcare/plant-room.jpg" alt="" class="w-full h-full object-cover object-center">
        <div class="absolute inset-0" style="background:linear-gradient(90deg,rgba(1,30,65,0.93) 0%,rgba(1,30,65,0.80) 55%,rgba(1,30,65,0.30) 100%);"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="max-w-2xl reveal reveal-left">
            <h2 class="font-heading font-bold text-white text-4xl lg:text-6xl leading-tight mb-8">
                Laundry is a direct cost.<br>Get it wrong and it becomes a clinical risk.
            </h2>
            <ul class="space-y-4 mb-10">
                @foreach([
                    'Full control over hygiene discipline and contamination separation.',
                    'No hidden charges or unexpected price rises from outsourcing.',
                    'Engineering support and response built around your operation.',
                    'Compliance and HACCP requirements met from day one.',
                ] as $point)
                <li class="flex items-start gap-3 font-body text-gray-300 text-base leading-relaxed">
                    <span class="mt-1.5 w-2 h-2 rounded-full bg-[#148af4] flex-shrink-0"></span>
                    {{ $point }}
                </li>
                @endforeach
            </ul>
            <a href="#healthcare-assessment"
               class="inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                Request a Healthcare Assessment
            </a>
        </div>
    </div>
</section>

<!-- 5. BARRIER WORKFLOW — 10-step Electrolux-style cards -->
<section class="py-16 lg:py-24 bg-white border-y border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="max-w-2xl mb-12 reveal">
            <x-pretitle label="Barrier Workflow Logic" />
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-3">
                Controlled dirty-to-clean flow. The central proof of a properly engineered healthcare laundry.
            </h2>
            <p class="font-body text-gray-500 leading-relaxed">
                From ward collection to clean delivery — every step controlled, documented, and traceable.
            </p>
        </div>

        @php
        $steps = [
            ['num'=>'1',  'zone'=>'dirty',   'label'=>'Dirty Zone',  'title'=>'From the ward',                        'desc'=>'Linen collected from beds and patient areas — the starting point of contamination control.'],
            ['num'=>'2',  'zone'=>'dirty',   'label'=>'Dirty Zone',  'title'=>'Collection and pre-sorting',           'desc'=>'Each bag colour refers to a textile family — limiting cross-contamination and reducing odour.'],
            ['num'=>'3',  'zone'=>'dirty',   'label'=>'Dirty Zone',  'title'=>'Transport to laundry',                 'desc'=>'Contaminated linen transported in correct sealed bags — protecting patients and staff.'],
            ['num'=>'4',  'zone'=>'dirty',   'label'=>'Dirty Zone',  'title'=>'Final sorting and batch preparation',  'desc'=>'Last check before washing — remove undesired objects that could damage linen or equipment.'],
            ['num'=>'5',  'zone'=>'barrier', 'label'=>'Barrier',     'title'=>'Barrier wash process',                 'desc'=>'Correct temperature, chemistry, and cycle for each textile family — fully monitored.'],
            ['num'=>'6',  'zone'=>'clean',   'label'=>'Clean Zone',  'title'=>'Drying',                               'desc'=>'Clean wet linen dried within 2 hours — preventing bacteria proliferation after the wash.'],
            ['num'=>'7',  'zone'=>'clean',   'label'=>'Clean Zone',  'title'=>'Ironing and finishing',                'desc'=>'Finished to hygiene standards — DIAMMS™ technology rejects linen that fails humidity parameters.'],
            ['num'=>'8',  'zone'=>'clean',   'label'=>'Clean Zone',  'title'=>'Protected packing',                    'desc'=>'Clean linen packed and protected immediately — preventing recontamination before delivery.'],
            ['num'=>'9',  'zone'=>'clean',   'label'=>'Clean Zone',  'title'=>'Transport back to wards',              'desc'=>'Clean linen moved through clean zones only — never crossing dirty routes.'],
            ['num'=>'10', 'zone'=>'clean',   'label'=>'Clean Zone',  'title'=>'Back to the ward',                     'desc'=>'Ready for patient use — the full cycle completed under controlled, documented conditions.'],
        ];
        $zoneStyles = [
            'dirty'   => ['bg'=>'bg-red-50',   'badge'=>'bg-red-100 text-red-700',   'dot'=>'bg-red-500'],
            'barrier' => ['bg'=>'bg-blue-50',  'badge'=>'bg-blue-100 text-[#148af4]','dot'=>'bg-[#148af4]'],
            'clean'   => ['bg'=>'bg-green-50', 'badge'=>'bg-green-100 text-green-700','dot'=>'bg-green-500'],
        ];
        @endphp

        <!-- Carousel — left-aligned, steps 1–10, no loop -->
        <div id="hc-viewport" class="relative overflow-hidden mb-6 select-none" style="cursor:grab;">
            <div id="hc-track" style="display:flex;gap:14px;will-change:transform;"></div>
        </div>

        <!-- Numbered circles -->
        <div id="hc-dots" class="flex items-center gap-2 mb-10 flex-wrap"></div>


        <script>
        (function(){
            var steps   = @json($steps);
            var N       = steps.length;
            var CARD_W  = 190;
            var CARD_H  = 250;
            var GAP     = 14;
            var SLOT    = CARD_W + GAP;

            var dotColors = { dirty:'#ef4444', barrier:'#148af4', clean:'#22c55e' };

            var viewport    = document.getElementById('hc-viewport');
            var track       = document.getElementById('hc-track');
            var dotsWrap    = document.getElementById('hc-dots');
            var activeIndex = 0;
            var isAnimating = false;

            // ── Build portrait cards (image only, no number inside) ──────────
            steps.forEach(function(step, i) {
                var div = document.createElement('div');
                div.dataset.idx = i;
                div.style.cssText =
                    'flex-shrink:0;width:' + CARD_W + 'px;border-radius:14px;overflow:hidden;' +
                    'cursor:pointer;transition:opacity 0.35s ease,transform 0.35s ease;' +
                    'background:#e5e7eb;box-shadow:0 2px 8px rgba(0,0,0,0.07);';
                div.innerHTML =
                    '<div style="height:' + CARD_H + 'px;overflow:hidden;">' +
                        '<img src="/images/healthcare/steps/step-' + step.num + '.jpg"' +
                             ' style="width:100%;height:100%;object-fit:cover;display:block;"' +
                             ' onerror="this.parentElement.style.background=\'#d1d5db\'">' +
                    '</div>';
                div.addEventListener('click', function(){ if (!isAnimating) activate(i); });
                track.appendChild(div);
            });

            // ── Build numbered circles ────────────────────────────────────────
            var circles = [];
            steps.forEach(function(step, i) {
                var btn = document.createElement('button');
                btn.textContent = step.num;
                btn.style.cssText =
                    'width:32px;height:32px;border-radius:50%;border:1.5px solid #d1d5db;' +
                    'background:#fff;font-size:11px;font-weight:700;color:#9ca3af;' +
                    'cursor:pointer;flex-shrink:0;transition:background 0.2s,color 0.2s,border-color 0.2s;' +
                    'display:flex;align-items:center;justify-content:center;';
                btn.addEventListener('click', function(){ if (!isAnimating) activate(i); });
                circles.push(btn);
                dotsWrap.appendChild(btn);
            });

            // ── Scroll offset ─────────────────────────────────────────────────
            function calcOffset(idx) {
                var ideal  = (idx - 1) * SLOT;
                var maxOff = Math.max(0, N * SLOT - viewport.offsetWidth);
                return Math.max(0, Math.min(maxOff, ideal));
            }

            function setTrack(offset, animated) {
                track.style.transition = animated ? 'transform 0.45s cubic-bezier(0.25,0.46,0.45,0.94)' : 'none';
                track.style.transform  = 'translateX(-' + offset + 'px)';
            }

            // ── Update visual states ──────────────────────────────────────────
            function updateCards() {
                track.querySelectorAll('[data-idx]').forEach(function(c) {
                    var active = parseInt(c.dataset.idx) === activeIndex;
                    c.style.opacity   = active ? '1'         : '0.30';
                    c.style.transform = active ? 'scale(1)'  : 'scale(0.95)';
                });
            }

            function updateCircles() {
                circles.forEach(function(btn, i) {
                    if (i === activeIndex) {
                        btn.style.background   = '#011E41';
                        btn.style.color        = '#fff';
                        btn.style.borderColor  = '#011E41';
                    } else {
                        btn.style.background   = '#fff';
                        btn.style.color        = '#9ca3af';
                        btn.style.borderColor  = '#d1d5db';
                    }
                });
            }

            // ── Activate step ─────────────────────────────────────────────────
            function activate(i) {
                if (isAnimating) return;
                isAnimating = true;
                activeIndex = Math.max(0, Math.min(N - 1, i));
                setTrack(calcOffset(activeIndex), true);
                updateCards();
                updateCircles();
                setTimeout(function(){ isAnimating = false; }, 480);
            }

            // Init
            setTrack(0, false);
            updateCards();
            updateCircles();

            // Keyboard
            document.addEventListener('keydown', function(e){
                if (e.key === 'ArrowRight') activate(activeIndex + 1);
                if (e.key === 'ArrowLeft')  activate(activeIndex - 1);
            });

            // Drag / swipe
            var dragStartX = 0, dragging = false;
            viewport.addEventListener('mousedown', function(e){ dragging=true; dragStartX=e.clientX; viewport.style.cursor='grabbing'; });
            document.addEventListener('mousemove', function(e){ if(dragging && Math.abs(e.clientX-dragStartX)>4) viewport.style.cursor='grabbing'; });
            document.addEventListener('mouseup',   function(e){
                if(!dragging) return; dragging=false; viewport.style.cursor='grab';
                var d=dragStartX-e.clientX;
                if(Math.abs(d)>40) activate(activeIndex+(d>0?1:-1));
            });
            viewport.addEventListener('touchstart', function(e){ dragStartX=e.touches[0].clientX; },{passive:true});
            viewport.addEventListener('touchend',   function(e){
                var d=dragStartX-e.changedTouches[0].clientX;
                if(Math.abs(d)>40) activate(activeIndex+(d>0?1:-1));
            },{passive:true});

            window.addEventListener('resize', function(){ setTrack(calcOffset(activeIndex), false); });
        })();
        </script>


    </div>
</section>

<!-- 6. ERGONOMICS + PRODUCTIVITY -->
<section class="py-16 lg:py-24 bg-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">

            <div class="bg-white border border-border rounded-2xl p-8 reveal reveal-left">
                <div class="flex items-center gap-2 mb-4">
                    <span class="w-2 h-2 rounded-full bg-[#148af4] flex-shrink-0"></span>
                    <span class="font-body text-xs font-bold uppercase tracking-widest text-gray-400">Usability and Ergonomics</span>
                </div>
                <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-4">
                    Operator handling, access, and safety — made commercially visible.
                </h2>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-6">
                    Door opening, loading height, and unloading flow affect every shift. These are buying arguments, not footnotes.
                </p>
                <div class="grid grid-cols-2 gap-3 mb-6">
                    <div class="bg-bg rounded-2xl overflow-hidden h-36"></div>
                    <div class="bg-bg rounded-2xl overflow-hidden h-36">
                        <img src="/images/healthcare/hero-panel.jpg" alt="Door access detail" class="w-full h-full object-cover">
                    </div>
                    <div class="bg-bg rounded-2xl overflow-hidden h-36">
                        <img src="/images/healthcare/operator.jpg" alt="Operator at machine" class="w-full h-full object-cover">
                    </div>
                    <div class="bg-bg rounded-2xl overflow-hidden h-36">
                        <img src="/images/healthcare/engineer.jpg" alt="Control panel detail" class="w-full h-full object-cover">
                    </div>
                </div>
                <ul class="space-y-2.5">
                    @foreach([
                        'Reduced strain and better operator experience',
                        'Safer unloading and clearer workflow',
                        'More usable healthcare laundry environment',
                    ] as $item)
                    <li class="flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-[#148af4] flex-shrink-0"></span>
                        <span class="font-body text-gray-600 text-sm">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="bg-navy rounded-2xl p-8 reveal reveal-right">
                <div class="flex items-center gap-2 mb-4">
                    <span class="w-2 h-2 rounded-full bg-[#148af4] flex-shrink-0"></span>
                    <span class="font-body text-xs font-bold uppercase tracking-widest text-gray-400">Productivity and Control</span>
                </div>
                <h2 class="font-heading font-bold text-white text-2xl lg:text-3xl mb-4">
                    Output, uptime, and process consistency — not just hygiene compliance.
                </h2>
                <p class="font-body text-gray-400 text-sm leading-relaxed mb-6">
                    Shorter handling friction, stronger cycle control, and service routes that support uptime.
                </p>
                <ul class="space-y-2.5 mb-6">
                    @foreach([
                        'Cycle and process discipline',
                        'Consistent healthcare linen results',
                        'Visibility that supports maintenance planning',
                        'Commercial route into assessment and support',
                    ] as $item)
                    <li class="flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-[#148af4] flex-shrink-0"></span>
                        <span class="font-body text-gray-300 text-sm">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
                <div class="rounded-2xl overflow-hidden h-52 bg-white/5">
                    <img src="/images/healthcare/plant-room.jpg" alt="Healthcare plant room" class="w-full h-full object-cover">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 7. HEALTHCARE EQUIPMENT -->
<section class="py-16 lg:py-24 bg-bg border-y border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-10 reveal">
            <div class="max-w-2xl">
                <x-pretitle label="Healthcare Equipment" />
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl">
                    Everything your healthcare laundry needs, in a single partner.
                </h2>
            </div>
            <a href="{{ route('equipment') }}"
               class="flex-shrink-0 inline-flex items-center gap-2 bg-navy hover:bg-steel text-white font-body font-semibold px-6 py-3 rounded-lg text-sm transition-colors duration-200">
                Browse all equipment
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                ['barrier-washer',      'Barrier Washer-Extractors', 'Physical separation of soiled and clean zones — essential for infection control in hospitals and care facilities.'],
                ['high-capacity-washer','High-Capacity Washers',      'Throughput-matched machines for high-volume linen cycles in larger healthcare sites and laundry rooms.'],
                ['commercial-dryer',    'Commercial Tumble Dryers',   '4-star ERGOCERT rating. Moisture Balance for precise drying without overdrying.'],
                ['flatwork-ironer',     'Flatwork Ironers',           'High-performance finishing with DIAMMS™ technology and Hygiene Guard compliance.'],
                ['chest-ironer',        'Chest & Roller Ironers',     'Compact and flexible ironing solutions for smaller healthcare laundry rooms.'],
                ['washer-extractor',    'Washer-Extractors',          'High-spin extraction for faster drying cycles and lower energy consumption.'],
            ] as [$img, $name, $desc])
            <div class="group reveal">
                <div class="mb-4">
                    <img src="/images/equipment/{{ $img }}.jpg"
                         alt="{{ $name }}"
                         class="w-full object-contain group-hover:scale-105 transition-transform duration-500">
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-1.5">{{ $name }}</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-3">{{ $desc }}</p>
                <a href="{{ route('equipment') }}" class="inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    View equipment
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            @endforeach
        </div>

    </div>
</section>

<!-- 8. HEALTHCARE ROUTE -->
<section class="py-16 lg:py-24 bg-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mb-12 reveal">
            <x-pretitle label="Healthcare Route Within ILS" />
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl">
                Equipment, contracts, and response — one healthcare support system.
            </h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

            <div class="bg-white border border-border rounded-2xl p-6 flex flex-col card-hover reveal" style="transition-delay: 0.1s;">
                <p class="text-xs font-body font-bold uppercase tracking-widest text-gray-400 mb-3">Equipment Route</p>
                <h3 class="font-heading font-bold text-navy text-lg mb-2">Barrier washers and healthcare-ready equipment</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed flex-1">Machine categories matched to healthcare-specific applications.</p>
                <a href="{{ route('equipment') }}" class="mt-6 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Explore Healthcare Equipment
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <div class="bg-white border border-border rounded-2xl p-6 flex flex-col card-hover reveal" style="transition-delay: 0.2s;">
                <p class="text-xs font-body font-bold uppercase tracking-widest text-gray-400 mb-3">Service Route</p>
                <h3 class="font-heading font-bold text-navy text-lg mb-2">Planned support for continuity and controlled maintenance</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed flex-1">Preventive maintenance and service contracts — part of the proposition, not an afterthought.</p>
                <a href="{{ route('service-contracts') }}" class="mt-6 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Request Contract Review
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <div class="bg-white border border-border rounded-2xl p-6 flex flex-col card-hover reveal" style="transition-delay: 0.3s;">
                <p class="text-xs font-body font-bold uppercase tracking-widest text-gray-400 mb-3">Engineering Route</p>
                <h3 class="font-heading font-bold text-navy text-lg mb-2">Site assessment, review, and response</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed flex-1">A direct path into an engineering conversation — no generic copy in the way.</p>
                <a href="{{ route('contact') }}" class="mt-6 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Talk to an Engineer
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- 9. ASSESSMENT FORM -->
<section id="healthcare-assessment" class="py-16 lg:py-24 bg-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 items-stretch">

            <div class="bg-navy rounded-2xl p-8 flex flex-col reveal reveal-left">
                <div class="flex items-center gap-2 mb-5">
                    <span class="w-2 h-2 rounded-full bg-[#148af4] flex-shrink-0"></span>
                    <span class="font-body text-xs font-bold uppercase tracking-widest text-gray-400">Healthcare Assessment</span>
                </div>
                <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl mb-4">
                    Request a healthcare laundry assessment.
                </h2>
                <p class="font-body text-gray-400 text-sm leading-relaxed mb-8 flex-1">
                    Site context, hygiene requirements, equipment logic, and the right support structure — one conversation.
                </p>
                <div class="flex flex-col sm:flex-row gap-3">
                    <button form="healthcare-form" type="submit"
                        class="inline-flex items-center justify-center bg-[#148af4] hover:bg-blue-600 text-white font-body font-bold px-6 py-3 rounded-lg text-sm transition-colors duration-200">
                        Submit Request
                    </button>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center border border-white/30 hover:border-white text-white font-body font-semibold px-6 py-3 rounded-lg text-sm transition-colors duration-200 hover:bg-white/10">
                        Talk to an Engineer
                    </a>
                </div>
            </div>

            <div class="bg-white border border-border rounded-2xl p-8 reveal reveal-right">
                <h3 class="font-heading font-bold text-navy text-xl mb-1">Request Healthcare Assessment</h3>
                <p class="font-body text-gray-500 text-sm mb-6">Only the information needed — context, site, and follow-up priority.</p>
                <form id="healthcare-form" action="{{ route('contact') }}" method="POST" class="space-y-3">
                    @csrf
                    <div class="grid grid-cols-2 gap-3">
                        <input type="text" name="name" required placeholder="Full Name"
                            class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors">
                        <input type="text" name="organisation" placeholder="Organisation"
                            class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors">
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <input type="email" name="email" required placeholder="Email Address"
                            class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors">
                        <input type="tel" name="phone" placeholder="Phone Number"
                            class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors">
                    </div>
                    <input type="text" name="site_type" placeholder="Site Type / Healthcare Context"
                        class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors">
                    <textarea name="message" rows="3" placeholder="What do you need help with?"
                        class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors resize-none"></textarea>
                    <textarea name="context" rows="2" placeholder="Operational Context / Hygiene Requirement / Urgency"
                        class="w-full border border-border rounded-lg px-4 py-3 font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:border-navy transition-colors resize-none"></textarea>
                    <button type="submit"
                        class="w-full bg-navy hover:bg-steel text-white font-body font-bold px-8 py-3.5 rounded-lg text-sm transition-colors duration-200">
                        Submit Request
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection
