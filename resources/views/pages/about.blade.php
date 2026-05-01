@extends('layouts.app')

@section('meta')
<meta name="description" content="Established 1987. Engineering-led commercial laundry support across Ireland — contracts, rental and breakdown response built around uptime.">
@endsection

@section('content')

<!-- ══════════════════════════════════════════
     1. HERO
══════════════════════════════════════════ -->
<section class="relative flex flex-col" style="min-height:720px;">
    <img src="/images/about/about-team.jpg" alt="ILS engineering team"
         class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0"
         style="background:linear-gradient(90deg, rgba(1,30,65,0.97) 0%, rgba(1,30,65,0.85) 50%, rgba(1,30,65,0.30) 100%);"></div>
    <div class="relative z-10 flex-1 flex items-center w-full">
        <div class="w-full max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-24 lg:py-32">
            <div class="max-w-3xl reveal reveal-left">
                <h1 class="font-heading font-bold text-white text-4xl lg:text-6xl leading-tight mb-8">
                    Engineering-led laundry<br>support since 1987.
                </h1>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200">
                        Talk to an Expert
                    </a>
                    <a href="{{ route('request-assessment') }}"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white/40 hover:border-white text-white font-body font-semibold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                        Request a Service Assessment
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>

@include('components.partner-strip')
@include('components.proof-bar')

<!-- ══════════════════════════════════════════
     3. STATS — four huge numbers
══════════════════════════════════════════ -->
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-2 lg:grid-cols-4 divide-x divide-border">
            @foreach([
                ['37+',        'Years in commercial laundry'],
                ['4',          'Sectors — healthcare, hospitality, care, commercial'],
                ['26',         'Counties covered across Ireland'],
                ['1987',       'The year ILS was founded'],
            ] as [$num, $label])
            <div class="px-6 lg:px-10 first:pl-0 last:pr-0 py-4">
                <div class="font-heading font-bold text-navy text-5xl lg:text-7xl leading-none mb-3">{{ $num }}</div>
                <p class="font-body text-gray-500 text-sm leading-snug max-w-[140px]">{{ $label }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     4. BOLD STATEMENT
══════════════════════════════════════════ -->
<section class="bg-navy py-20 lg:py-32">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <p class="font-heading font-bold text-white text-3xl lg:text-5xl leading-tight max-w-4xl">
            Critical laundry operations deserve proper engineering support —
            <span class="text-[#148af4]">not just reactive call-outs when something fails.</span>
        </p>
    </div>
</section>

<!-- ══════════════════════════════════════════
     5. WHAT WE DO — three columns
══════════════════════════════════════════ -->
<section class="bg-white py-16 lg:py-24 border-b border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-border">
            @foreach([
                ['Supply',   'Commercial laundry equipment for every sector — washers, dryers, ironers, barrier machines. Authorised Electrolux Professional partner.'],
                ['Service',  'Planned maintenance contracts and same-day emergency call-outs across all 26 counties of the Republic of Ireland.'],
                ['Support',  'Ongoing aftercare, genuine OEM parts, and manufacturer-trained engineers. Built around uptime, not scheduling convenience.'],
            ] as [$title, $desc])
            <div class="py-10 md:py-0 md:px-10 first:pl-0 last:pr-0">
                <div class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-none mb-6">{{ $title }}.</div>
                <p class="font-body text-gray-500 text-sm leading-relaxed max-w-xs">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════
     7. SECOND FULL-WIDTH PHOTO
══════════════════════════════════════════ -->
<div class="w-full overflow-hidden" style="height:55vh;min-height:360px;">
    <img src="{{ asset('images/about/about-equipment.jpg') }}"
         alt="ILS laundry equipment"
         class="w-full h-full object-cover object-center">
</div>

<!-- ══════════════════════════════════════════
     8. ELECTROLUX — short statement
══════════════════════════════════════════ -->
<section class="bg-white py-16 lg:py-24 border-b border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">
            <div>
                <p class="font-heading font-bold text-navy text-3xl lg:text-5xl leading-tight">
                    Platform credibility.<br>Local execution.
                </p>
            </div>
            <div>
                <p class="font-body text-gray-500 text-base leading-relaxed mb-6">
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
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     9. OUR HISTORY — timeline (unchanged)
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

@include('components.cta-downtime-form')

@endsection
