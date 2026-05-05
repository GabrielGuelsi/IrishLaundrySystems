@extends('layouts.app')

@section('meta')
<meta name="description" content="Established 1987. Engineering-led commercial laundry support across Ireland — contracts, rental and breakdown response built around uptime.">
@endsection

@section('content')

<!-- ══════════════════════════════════════════
     1. HERO — full-width image with overlay
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
                <p class="font-heading font-bold text-[#148af4] text-xs uppercase tracking-widest mb-4">About ILS</p>
                <h1 class="font-heading font-bold text-white text-4xl lg:text-6xl xl:text-7xl leading-tight mb-6">
                    Engineering-led laundry support since 1987.
                </h1>

                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
                        Talk to an Engineer
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center gap-2 border border-white/40 text-white font-heading font-bold text-sm px-6 py-3 rounded-lg hover:border-white transition-colors tracking-wide">
                        Request Assessment
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>

@include('components.partner-strip')
@include('components.proof-bar')

<!-- ══════════════════════════════════════════
     2. WHO WE ARE — 2-col intro
══════════════════════════════════════════ -->
<section class="bg-white py-20 lg:py-28">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24 items-start">

            <div>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-5xl leading-tight">
                    A business built around <span style="color:#148af4;">keeping operations running.</span>
                </h2>
            </div>

            <div class="lg:pt-8">
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-8">
                    ILS was founded in 1987 to provide engineering-led support to commercial laundry operations in Ireland. Over more than three decades, we have built a nationwide capability that covers the full lifecycle — from equipment supply and installation through to planned maintenance, emergency response, and genuine OEM parts.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center gap-2 bg-navy text-white font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-navy/90 transition-colors tracking-wide">
                        Talk to an Engineer
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
     3. STATS — ILS at a glance
══════════════════════════════════════════ -->
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <p class="font-heading font-bold text-navy text-xs uppercase tracking-widest mb-10">ILS at a glance</p>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
            @foreach([
                ['37+',  'Years in commercial laundry'],
                ['4',    'Sectors — healthcare, hospitality, care, commercial'],
                ['26',   'Counties covered across Ireland'],
                ['1987', 'The year ILS was founded'],
            ] as [$num, $label])
            <div class="border-b border-gray-300 pb-5">
                <div class="flex items-center gap-4">
                    <div class="font-heading font-bold text-navy text-5xl lg:text-6xl leading-none flex-shrink-0">{{ $num }}</div>
                    <p class="font-body text-gray-500 text-sm leading-snug">{{ $label }}</p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

<!-- ══════════════════════════════════════════
     4. BOLD STATEMENT + HOW WE WORK
══════════════════════════════════════════ -->
<section class="py-20 lg:py-28" style="background-color:#011E41; background-image:linear-gradient(rgba(255,255,255,0.035) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.035) 1px, transparent 1px); background-size:52px 52px;">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <p class="font-heading font-bold text-white text-3xl lg:text-5xl leading-tight max-w-4xl mb-12 lg:mb-14">
            Critical laundry operations deserve proper engineering support —
            <span class="text-[#148af4]">not just reactive call-outs when something fails.</span>
        </p>

        {{-- HOW WE WORK — horizontal cards with corner brackets (ref style) --}}

        {{-- Centered header --}}
        <div class="text-center mb-10 reveal">
            <h3 class="font-heading font-bold text-white text-3xl lg:text-5xl">How it works</h3>
        </div>

        {{-- Cards row --}}
        <div class="flex flex-col sm:flex-row items-stretch gap-0 reveal" style="transition-delay:100ms;">

            @php
            $howSteps = [
                ['num'=>'1','title'=>'Request Assessment','body'=>'Share your site location, equipment type and urgency. We confirm next steps within the day.','img'=>'images/hero/hero-technician-inspection.png'],
                ['num'=>'2','title'=>'Site Survey','body'=>'We review your laundry setup, equipment condition and operational requirements in person.','img'=>'images/healthcare/plant-room.jpg'],
                ['num'=>'3','title'=>'Proposal','body'=>'Equipment supply, rental or service contract — we recommend what fits your operation.','img'=>'images/healthcare/line-6000-solutions.jpg'],
                ['num'=>'4','title'=>'Ongoing Support','body'=>'Engineering-led aftercare — planned maintenance, emergency response and genuine OEM parts.','img'=>'images/healthcare/repairs-hero.jpg'],
            ];
            @endphp

            @foreach($howSteps as $i => $step)

            {{-- Arrow between cards --}}
            @if($i > 0)
            <div class="hidden sm:flex items-center justify-center flex-shrink-0 px-1" style="margin-top:110px;">
                <svg class="w-5 h-5 text-[#148af4]/50" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </div>
            @endif

            {{-- Card --}}
            <div class="relative flex-1 flex flex-col border border-white/[0.1] overflow-hidden"
                 style="background:rgba(255,255,255,0.03);">

                {{-- Corner brackets --}}
                <span class="absolute top-2.5 left-2.5 w-3.5 h-3.5 border-t border-l border-white/30 pointer-events-none"></span>
                <span class="absolute top-2.5 right-2.5 w-3.5 h-3.5 border-t border-r border-white/30 pointer-events-none"></span>
                <span class="absolute bottom-2.5 left-2.5 w-3.5 h-3.5 border-b border-l border-white/30 pointer-events-none"></span>
                <span class="absolute bottom-2.5 right-2.5 w-3.5 h-3.5 border-b border-r border-white/30 pointer-events-none"></span>

                {{-- Image --}}
                <div class="overflow-hidden" style="height:200px;">
                    <img src="{{ asset($step['img']) }}" alt="{{ $step['title'] }}"
                         class="w-full h-full object-cover object-center transition-transform duration-700 hover:scale-105">
                </div>

                {{-- Divider line --}}
                <div class="w-full h-px bg-white/[0.08]"></div>

                {{-- Content --}}
                <div class="p-5 flex flex-col flex-1">
                    <p class="font-heading font-bold text-[#148af4] text-sm mb-2">
                        <span class="text-white/30">//</span>{{ $step['num'] }} {{ $step['title'] }}
                    </p>
                    <p class="font-body text-white/45 text-xs leading-relaxed">{{ $step['body'] }}</p>
                </div>

            </div>

            @endforeach

        </div>

        {{-- CTA --}}
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
     5. SUPPLY / SERVICE / SUPPORT — with images
══════════════════════════════════════════ -->
<section class="bg-white py-20 lg:py-28">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <p class="font-heading font-bold text-navy text-xs uppercase tracking-widest mb-16">What we do</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 lg:gap-16">

            {{-- Supply --}}
            <div class="flex flex-col reveal" style="transition-delay:0ms;">
                <div class="overflow-hidden rounded-2xl mb-8" style="height:280px;">
                    <img src="{{ asset('images/equipment/td6-multihousing-room.jpg') }}" alt="Equipment supply"
                         class="w-full h-full object-cover object-center hover:scale-105 transition-transform duration-700">
                </div>
                <div class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-none mb-4">Supply.</div>
                <p class="font-body text-gray-500 text-sm leading-relaxed">Commercial laundry equipment for every sector — washers, dryers, ironers, barrier machines. Authorised Electrolux Professional partner.</p>
                <a href="{{ route('equipment') }}" class="inline-flex items-center gap-1.5 font-body font-semibold text-navy hover:text-[#148af4] text-sm transition-colors mt-6">
                    View equipment
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            {{-- Service --}}
            <div class="flex flex-col reveal" style="transition-delay:150ms;">
                <div class="overflow-hidden rounded-2xl mb-8 md:mt-16" style="height:280px;">
                    <img src="{{ asset('images/healthcare/repairs-hero.jpg') }}" alt="Service and repairs"
                         class="w-full h-full object-cover object-center hover:scale-105 transition-transform duration-700">
                </div>
                <div class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-none mb-4">Service.</div>
                <p class="font-body text-gray-500 text-sm leading-relaxed">Planned maintenance contracts and same-day emergency call-outs across all 26 counties of the Republic of Ireland.</p>
                <a href="{{ route('service-contracts') }}" class="inline-flex items-center gap-1.5 font-body font-semibold text-navy hover:text-[#148af4] text-sm transition-colors mt-6">
                    Service contracts
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            {{-- Support --}}
            <div class="flex flex-col reveal" style="transition-delay:300ms;">
                <div class="overflow-hidden rounded-2xl mb-8" style="height:280px;">
                    <img src="{{ asset('images/about/about-team.jpg') }}" alt="Ongoing support"
                         class="w-full h-full object-cover object-center hover:scale-105 transition-transform duration-700">
                </div>
                <div class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-none mb-4">Support.</div>
                <p class="font-body text-gray-500 text-sm leading-relaxed">Ongoing aftercare, genuine OEM parts, and manufacturer-trained engineers. Built around uptime, not scheduling convenience.</p>
                <a href="{{ route('repairs') }}" class="inline-flex items-center gap-1.5 font-body font-semibold text-navy hover:text-[#148af4] text-sm transition-colors mt-6">
                    Repairs & call-outs
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     6. ELECTROLUX PARTNERSHIP
══════════════════════════════════════════ -->
<section class="bg-[#f7f8fa] py-20 lg:py-28">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-24 items-center">
            <div>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-5xl leading-tight mb-6">
                    Platform credibility.<br>Local execution.
                </h2>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-8">
                    Electrolux Professional provides manufacturer-grade standards, genuine parts and technical documentation. ILS provides local engineering execution, field response, and operational knowledge of Irish sites.
                </p>
                <a href="{{ route('electrolux') }}"
                   class="inline-flex items-center gap-2 font-body font-semibold text-navy hover:text-[#148af4] text-sm transition-colors">
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
     8. OUR HISTORY — timeline (UNCHANGED)
══════════════════════════════════════════ -->
<style>
.ils-history-box { transition:background 0.35s ease; border-radius:0.75rem; }
.ils-history-box:hover { background:rgba(1,30,65,0.03); }
.ils-history-img { opacity:0; transform:translateY(-50%) scale(0.85); transition:opacity 0.45s ease, transform 0.45s ease; pointer-events:none; }
.ils-history-box:hover .ils-history-img { opacity:1; transform:translateY(-50%) scale(1); pointer-events:auto; }
</style>

<section class="py-24 lg:py-36 bg-white overflow-hidden">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <h2 class="font-heading font-bold text-navy text-3xl lg:text-5xl mb-16 reveal">Our history</h2>

        @php
        $history = [
            ['year'=>'1987','label'=>'year','title'=>'Foundation','body'=>'Irish Laundry Systems established to serve a growing commercial laundry sector in Ireland — healthcare, hospitality, institutional care. The founders recognised these operations needed engineering-led support, not just equipment sales.','img'=>'images/about/about-team.jpg'],
            ['year'=>'1990s','label'=>'decade','title'=>'Healthcare & care expansion','body'=>'Extended support into healthcare and care facility sectors, recognising the critical nature of laundry in these environments — infection control, compliance, and continuity requirements far beyond standard commercial demands.','img'=>'images/about/about-engineers.jpg'],
            ['year'=>'2000s','label'=>'decade','title'=>'Nationwide engineering coverage','body'=>'Built nationwide engineering coverage and deepened technical capability across the full range of commercial equipment — establishing ILS as a reliable partner for operations across the Republic of Ireland.','img'=>'images/about/about-equipment.jpg'],
            ['year'=>'2010s','label'=>'decade','title'=>'Electrolux Professional Partnership','body'=>'Achieved Authorised Electrolux Professional Partner status — investment in manufacturer training, genuine OEM parts capability, and the technical documentation that backs every field visit with proper engineering resource.','img'=>'images/about/about-team.jpg'],
            ['year'=>'Today','label'=>'ongoing','title'=>'All sectors, nationwide','body'=>'Supporting healthcare groups, hospitality operations, care facilities and commercial operators across Ireland. Structured service contracts, equipment supply, and engineering response — built around uptime and continuity.','img'=>'images/about/about-engineers.jpg'],
        ];
        @endphp

        <div class="ils-history-list relative">
            <div class="hidden lg:block absolute top-16 bottom-16 w-px bg-navy/10 rounded-full" style="left:210px;"></div>
            @foreach($history as $i => $m)
            <div class="ils-history-box relative flex items-center py-14 px-4 lg:px-0 {{ !$loop->last ? 'border-b border-navy/8' : '' }} cursor-default reveal" style="transition-delay:{{ $i * 80 }}ms">
                <div class="hidden lg:block flex-shrink-0 text-right pr-10" style="width:210px;">
                    <div class="font-heading font-bold text-[#148af4] leading-none" style="font-size:3.75rem;line-height:1;">{{ $m['year'] }}</div>
                    <div class="font-body text-navy/35 text-xs uppercase tracking-widest mt-2">{{ $m['label'] }}</div>
                </div>
                <div class="hidden lg:block absolute flex-shrink-0 z-10" style="left:210px;transform:translateX(-50%);">
                    <div class="w-3 h-3 rounded-full bg-[#148af4]" style="box-shadow:0 0 0 5px rgba(20,138,244,0.18);"></div>
                </div>
                <div class="flex-1 lg:pl-16 relative z-10">
                    <div class="lg:hidden font-heading font-bold text-[#148af4] leading-none mb-3" style="font-size:3rem;">{{ $m['year'] }}</div>
                    <div class="font-heading font-bold text-navy text-xl lg:text-2xl mb-3">{{ $m['title'] }}</div>
                    <p class="font-body text-gray-500 text-sm lg:text-base leading-relaxed max-w-xl">{{ $m['body'] }}</p>
                </div>
                <div class="ils-history-img absolute hidden lg:block rounded-2xl overflow-hidden shadow-2xl" style="right:0;top:50%;width:18.5rem;height:20.5rem;z-index:20;">
                    <img src="{{ asset($m['img']) }}" alt="{{ $m['title'] }}" class="w-full h-full object-cover">
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>


<!-- ══════════════════════════════════════════
     10. TESTIMONIALS
══════════════════════════════════════════ -->
@include('components.testimonials', ['heading' => 'What long-term customers say', 'light' => true])

<!-- ══════════════════════════════════════════
     11. CTA
══════════════════════════════════════════ -->
@include('components.cta-downtime-form')

@endsection
