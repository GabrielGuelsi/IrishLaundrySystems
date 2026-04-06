@extends('layouts.app')

@section('meta')
<meta name="description" content="Established 1987. Engineering-led commercial laundry support across Ireland — contracts, rental and breakdown response built around uptime.">
@endsection

@section('content')

<!-- 1. HERO — DARK with background image -->
<section
    class="py-20 lg:py-32 relative overflow-hidden"
    style="background-color: #011E41; background-image: linear-gradient(90deg, rgba(1,30,65,0.97) 0%, rgba(1,30,65,0.85) 50%, rgba(1,30,65,0.30) 100%), url('/images/about/about-team.jpg'); background-size: cover; background-position: right center; background-repeat: no-repeat;">

    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-2xl">
            @include('components.pretitle', ['label' => 'About ILS', 'color' => '#148af4'])
            <h1 class="font-heading font-bold text-white text-4xl lg:text-6xl leading-tight mb-6">
                Engineering-led laundry support since 1987.
            </h1>
            <p class="font-body text-white text-xl leading-relaxed mb-8">
                Irish Laundry Systems was built around one principle: critical laundry operations deserve proper engineering support — not just reactive call-outs when something fails.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200"
                   data-ga-cta="about_talk_to_expert">
                    Talk to an Expert
                </a>
                <a href="{{ route('request-assessment') }}"
                   class="inline-flex items-center justify-center gap-2 border-2 border-white/40 hover:border-white text-white font-body font-semibold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                    Request a Service Assessment
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 2. METRICS STRIP — DARK -->
<section class="bg-navy border-t border-white/10 py-10">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-0 lg:divide-x lg:divide-white/10">

            <div class="text-center lg:px-8 reveal" style="transition-delay:0ms">
                <div class="font-heading font-bold text-white text-3xl lg:text-4xl mb-1">35+</div>
                <div class="font-body text-white text-sm">Years in commercial laundry</div>
            </div>

            <div class="text-center lg:px-8 reveal" style="transition-delay:100ms">
                <div class="font-heading font-bold text-white text-3xl lg:text-4xl mb-1">4</div>
                <div class="font-body text-white text-sm">Sectors — healthcare, hospitality, care, commercial</div>
            </div>

            <div class="text-center lg:px-8 reveal" style="transition-delay:200ms">
                <div class="font-heading font-bold text-white text-xl lg:text-2xl mb-1">Electrolux</div>
                <div class="font-body text-white text-sm">Authorised Professional Partner</div>
            </div>

            <div class="text-center lg:px-8 reveal" style="transition-delay:300ms">
                <div class="font-heading font-bold text-white text-xl lg:text-2xl mb-1">Nationwide</div>
                <div class="font-body text-white text-sm">Engineering coverage across Ireland</div>
            </div>

        </div>
    </div>
</section>

<!-- 3. PROOF BAR — LIGHT -->
@include('components.proof-bar')

<!-- 4. WHAT DRIVES US — split layout -->
<section class="bg-navy py-16 lg:py-24">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            <!-- Left: text + bullets -->
            <div class="reveal reveal-left">
                @include('components.pretitle', ['label' => 'What Drives Us', 'color' => '#148af4'])
                <h2 class="font-heading font-bold text-white text-3xl lg:text-5xl leading-tight mb-8">
                    The engineering outcome is the only outcome that matters.
                </h2>
                <ul class="space-y-4">
                    @foreach([
                        'Founded in 1987 to serve healthcare, hospitality, and care operations across Ireland.',
                        'Built on technical depth and straight communication — engineers who show up and explain the problem clearly.',
                        'Authorised Electrolux Professional Partner — genuine parts, manufacturer standards, and technical support.',
                        'Supporting healthcare groups, hotel properties, care facilities, and commercial operators nationwide.',
                    ] as $point)
                    <li class="flex items-start gap-3">
                        <span class="mt-1.5 w-2 h-2 rounded-full bg-[#148af4] flex-shrink-0"></span>
                        <span class="font-body text-white leading-relaxed">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Right: image -->
            <div class="rounded-2xl overflow-hidden reveal reveal-right" style="height:480px;">
                <img src="{{ asset('images/about/about-engineers.jpg') }}"
                     alt="ILS engineer at work"
                     class="w-full h-full object-cover object-center">
            </div>

        </div>
    </div>
</section>

<!-- 5. WHY CHOOSE ILS — LIGHT -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="reveal">
            @include('components.pretitle', ['label' => 'What Sets Us Apart'])
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-5xl leading-tight mb-12 max-w-3xl">
                Why operators across Ireland choose ILS as their laundry partner.
            </h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">

            @foreach([
                ['Engineering First', 'Every recommendation is driven by what the equipment and site actually require — not by what is easiest to sell. Diagnosis before proposals. Evidence before action.', 'M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z'],
                ['Rapid Response', 'When critical operations call with a breakdown, we triage fast and dispatch engineers. We aim to be on site and working — not acknowledging a ticket. Downtime in healthcare or hospitality is not a scheduling matter.', 'M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z'],
                ['Sector Knowledge', 'Healthcare is not hospitality. Care facilities are not commercial operators. We take time to understand the operating environment — compliance, throughput, risk — before proposing anything.', 'M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z'],
                ['Authorised Partnership', 'As an Authorised Electrolux Professional Partner, ILS has access to manufacturer training, genuine OEM parts and technical documentation — backing every field visit with the right resources to resolve faults properly.', 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z'],
            ] as $i => [$title, $desc, $icon])
            <div class="bg-bg border border-border rounded-2xl p-7 flex flex-col reveal card-hover" style="transition-delay: {{ $i * 120 }}ms">
                <div class="mb-5">
                    <svg class="w-10 h-10 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $icon }}"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-lg mb-3">{{ $title }}</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">{{ $desc }}</p>
            </div>
            @endforeach

        </div>
    </div>
</section>

<!-- 6. ELECTROLUX CAPABILITY — DARK, full gradient image overlay -->
<section class="relative min-h-[520px] flex items-center py-20 lg:py-24">
    <!-- Background image -->
    <div class="absolute inset-0">
        <img src="{{ asset('images/about/about-equipment.jpg') }}"
             alt=""
             class="w-full h-full object-cover object-center">
        <!-- Navy gradient: solid right → transparent left -->
        <div class="absolute inset-0" style="background: linear-gradient(270deg, rgba(1,30,65,0.96) 0%, rgba(1,30,65,0.80) 45%, rgba(1,30,65,0.20) 100%);"></div>
    </div>
    <!-- Content aligned right -->
    <div class="relative max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="max-w-xl ml-auto reveal reveal-right">
            @include('components.pretitle', ['label' => 'Electrolux Professional Partnership', 'color' => '#148af4'])
            <h2 class="font-heading font-bold text-white text-3xl lg:text-5xl leading-tight mb-6">
                Platform credibility. Local execution.
            </h2>
            <p class="font-body text-white text-lg leading-relaxed mb-4">
                Electrolux Professional provides manufacturer-grade equipment standards, genuine parts access and technical documentation. ILS provides local engineering execution, field response, and operational understanding of Irish commercial sites.
            </p>
            <p class="font-body text-white leading-relaxed mb-8">
                Together: lower friction, faster resolution, and lower downtime risk for critical operations across healthcare, hospitality and care.
            </p>
            <a href="{{ route('electrolux') }}" class="inline-flex items-center gap-2 text-white font-body font-semibold hover:text-white transition-colors">
                About the Electrolux partnership
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- 7. HOW WE ENGAGE — LIGHT -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12 reveal">
            @include('components.pretitle', ['label' => 'Our Process'])
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-5xl leading-tight max-w-2xl">
                From first contact to service in place.
            </h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-x-8 gap-y-10">
            @foreach([
                ['01', 'Intro call', 'We take time to understand your operation — sector, site count, equipment types and current challenges.'],
                ['02', 'Stakeholder interview', 'We speak to the right people: facilities managers, operations leads, or whoever owns the laundry risk.'],
                ['03', 'Technical evaluation', 'Where needed, we carry out an on-site assessment of equipment condition, usage patterns and history.'],
                ['04', 'Results review', 'We present what we found — clearly and without jargon — and discuss the right options for your operation.'],
                ['05', 'Proposal', 'A structured proposal matched to your site: contract tier, equipment recommendations, response levels and cost.'],
            ] as [$num, $title, $body])
            <div class="reveal" style="transition-delay: {{ $loop->index * 100 }}ms">
                <div class="font-heading font-bold text-navy text-5xl lg:text-6xl leading-none mb-4">{{ $num }}</div>
                <div class="border-t-2 border-navy/15 pt-4">
                    <h3 class="font-heading font-bold text-navy text-sm mb-2">{{ $title }}</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $body }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <p class="font-body text-gray-400 text-sm mt-12 border-t border-border pt-6">We support sites across Ireland. Availability and next steps are confirmed once we understand location, urgency and constraints.</p>
    </div>
</section>

<!-- 8. TIMELINE — interactive JLA-style -->
<section class="py-16 lg:py-24 bg-navy overflow-hidden">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">

        @php
        $milestones = [
            ['year'=>'1987', 'title'=>'Founded',          'subtitle'=>'Irish Laundry Systems established.',        'body'=>'ILS was founded to serve a growing commercial laundry sector in Ireland — healthcare, hospitality, institutional care. The founders recognised these operations needed engineering-led support, not just equipment sales.',       'img'=>'/images/about/about-team.jpg'],
            ['year'=>'1990s','title'=>'Sector expansion',  'subtitle'=>'Into healthcare and care facilities.',      'body'=>'Extended support into healthcare and care facility sectors, recognising the critical nature of laundry in these environments — infection control, compliance, and continuity requirements far beyond standard commercial demands.',    'img'=>'/images/about/about-engineers.jpg'],
            ['year'=>'2000s','title'=>'National reach',    'subtitle'=>'Nationwide engineering coverage.',          'body'=>'Built nationwide engineering coverage and deepened technical capability across the full range of commercial equipment — establishing ILS as a reliable partner for operations across the Republic of Ireland.',                       'img'=>'/images/about/about-equipment.jpg'],
            ['year'=>'2010s','title'=>'Partnership',       'subtitle'=>'Authorised Electrolux Professional Partner.','body'=>'Achieved Authorised Electrolux Professional Partner status — investment in manufacturer training, genuine OEM parts capability, and the technical documentation that backs every field visit with proper engineering resource.',   'img'=>'/images/about/about-team.jpg'],
            ['year'=>'Today','title'=>'Continuing',        'subtitle'=>'Across all sectors, nationwide.',           'body'=>'Supporting healthcare groups, hospitality operations, care facilities and commercial operators across Ireland. Structured service contracts, equipment supply, and engineering response — built around uptime and continuity.',   'img'=>'/images/about/about-engineers.jpg'],
        ];
        @endphp

        <!-- Slides -->
        <div id="tl-slides" class="relative min-h-[360px] lg:min-h-[340px]">
            @foreach($milestones as $i => $m)
            <div class="tl-slide absolute inset-0 grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center transition-opacity duration-500 {{ $i === 0 ? 'opacity-100 pointer-events-auto' : 'opacity-0 pointer-events-none' }}">

                <!-- Left: year + text -->
                <div>
                    <div class="font-heading font-bold text-[#148af4] text-6xl lg:text-8xl leading-none mb-2">{{ $m['year'] }}</div>
                    <div class="w-12 h-1 bg-[#148af4] mb-6 rounded-full"></div>
                    <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl mb-1">
                        {{ $m['title'] }}
                        <span class="text-white font-normal"> — {{ $m['subtitle'] }}</span>
                    </h3>
                    <p class="font-body text-white text-base leading-relaxed mt-4 max-w-lg">{{ $m['body'] }}</p>
                </div>

                <!-- Right: circular image — hidden on mobile -->
                <div class="hidden lg:flex justify-end">
                    <div class="w-80 h-80 rounded-full overflow-hidden border-4 border-white/10 flex-shrink-0">
                        <img src="{{ $m['img'] }}" alt="{{ $m['title'] }}" class="w-full h-full object-cover">
                    </div>
                </div>

            </div>
            @endforeach
        </div>

        <!-- Prev / Next + Year bar -->
        <div class="mt-12">
            <div class="flex items-center gap-0 mb-6">
                @foreach($milestones as $i => $m)
                <button class="tl-dot flex-1 group flex flex-col items-center gap-2 py-2 cursor-pointer" data-index="{{ $i }}">
                    <span class="tl-dot-label font-body font-bold text-xs sm:text-sm text-white transition-colors" style="{{ $i !== 0 ? 'opacity:0.5' : '' }}">{{ $m['year'] }}</span>
                    <span class="tl-dot-pip w-3 h-3 rounded-full border-2 transition-all {{ $i === 0 ? 'border-[#148af4] bg-[#148af4]' : 'border-white/30 bg-transparent group-hover:border-white/60' }}"></span>
                </button>
                @if(!$loop->last)
                <div class="tl-line flex-1 h-px bg-white/20 mb-2"></div>
                @endif
                @endforeach
            </div>
            <div class="flex items-center gap-4">
                <button id="tl-prev" aria-label="Previous"
                    class="w-11 h-11 rounded-full border border-white/30 bg-white/5 hover:bg-white/15 flex items-center justify-center transition-colors flex-shrink-0">
                    <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <button id="tl-next" aria-label="Next"
                    class="w-11 h-11 rounded-full border border-white/30 bg-white/5 hover:bg-white/15 flex items-center justify-center transition-colors flex-shrink-0">
                    <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>

    </div>
</section>

<script>
(function(){
    var slides  = document.querySelectorAll('.tl-slide');
    var dots    = document.querySelectorAll('.tl-dot');
    var labels  = document.querySelectorAll('.tl-dot-label');
    var pips    = document.querySelectorAll('.tl-dot-pip');
    var current = 0;
    var total   = slides.length;

    function goTo(n) {
        slides[current].classList.replace('opacity-100','opacity-0');
        slides[current].classList.replace('pointer-events-auto','pointer-events-none');

        labels[current].style.opacity = '0.5';
        pips[current].classList.remove('border-[#148af4]','bg-[#148af4]');
        pips[current].classList.add('border-white/30','bg-transparent');

        current = (n + total) % total;

        slides[current].classList.replace('opacity-0','opacity-100');
        slides[current].classList.replace('pointer-events-none','pointer-events-auto');

        labels[current].style.opacity = '1';
        pips[current].classList.add('border-[#148af4]','bg-[#148af4]');
        pips[current].classList.remove('border-white/30','bg-transparent');
    }

    document.getElementById('tl-prev').addEventListener('click', function(){ goTo(current - 1); });
    document.getElementById('tl-next').addEventListener('click', function(){ goTo(current + 1); });

    dots.forEach(function(btn) {
        btn.addEventListener('click', function(){ goTo(parseInt(btn.dataset.index)); });
    });
})();
</script>

<!-- 9. PROOF — TESTIMONIALS — LIGHT -->
@include('components.testimonials', ['heading' => 'What long-term customers say', 'light' => true])

<!-- 10. FINAL CTA — DARK -->
@include('components.cta-band', [
    'heading'       => 'Ready to work with ILS?',
    'subheading'    => 'Request a service assessment and let us propose the right structure for your operation.',
    'primaryText'   => 'Talk to an Expert',
    'primaryHref'   => route('contact'),
    'secondaryText' => 'Request a Service Assessment',
    'secondaryHref' => route('request-assessment'),
])

@endsection
