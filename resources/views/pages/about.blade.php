@extends('layouts.app')

@section('meta')
<meta name="description" content="Established 1987. Engineering-led commercial laundry support across Ireland — contracts, rental and breakdown response built around uptime.">
@endsection

@section('content')

<!-- 1. HERO -->
<section class="bg-navy py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl">
            <p class="text-sm font-body font-semibold text-orange uppercase tracking-wide mb-4">Established 1987</p>
            <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-5">
                Engineering-led Laundry Support Since 1987
            </h1>
            <p class="font-body text-gray-300 text-lg leading-relaxed mb-8">
                ILS has supported commercial laundry operations since 1987. Our approach is engineering-led: prevention first, structured response when issues arise, and clear communication throughout.
            </p>
            <p class="font-body text-gray-400 text-base leading-relaxed mb-8">
                Built around uptime, risk control and long-term operational continuity.
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

<!-- 2. PROOF BAR -->
@include('components.proof-bar')

<!-- 3. OUR STORY + WHAT WE STAND FOR -->
<section class="py-16 lg:py-24 bg-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">
            <div>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-6">Our Story</h2>
                <p class="font-body text-gray-600 leading-relaxed mb-4">
                    Irish Laundry Systems was founded in 1987, at a time when the commercial laundry sector in Ireland was growing rapidly — driven by expansion in healthcare, hospitality and institutional care. The founders recognised that these operations needed an engineering-led service provider that understood their environment, not just the equipment.
                </p>
                <p class="font-body text-gray-600 leading-relaxed mb-4">
                    Over the following decades, ILS built a reputation for technical depth and straight communication. When an ILS engineer says they'll be on-site by a certain time, they aim to be there. When a job is diagnosed, the customer understands what the problem is and what the options are.
                </p>
                <p class="font-body text-gray-600 leading-relaxed mb-8">
                    Today, ILS supports healthcare groups, hotel properties, care facilities and commercial operators across the Republic of Ireland — under structured service contracts, reactive call-out arrangements and equipment supply and rental agreements. Our <a href="{{ route('electrolux') }}" class="text-navy font-semibold underline underline-offset-2 hover:text-steel transition-colors">Authorised Electrolux Professional Partner</a> status reflects ongoing investment in the engineering capability behind that support.
                </p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white border border-border rounded-xl p-4 text-center">
                        <div class="font-heading font-bold text-navy text-3xl mb-1">1987</div>
                        <div class="text-xs font-body text-gray-500">Year founded</div>
                    </div>
                    <div class="bg-white border border-border rounded-xl p-4 text-center">
                        <div class="font-heading font-bold text-navy text-3xl mb-1">30+</div>
                        <div class="text-xs font-body text-gray-500">Years in commercial laundry</div>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="font-heading font-bold text-navy text-2xl mb-6">What We Stand For</h2>
                <div class="space-y-5">
                    @foreach ([
                        ['Engineering first', 'We are an engineering business. Every decision — from how we structure service contracts to how we respond to breakdowns — is made with technical competence at the centre.'],
                        ['Straight communication', 'Customers should know what is happening, what has been found and what comes next. We do not hide behind jargon or ambiguity.'],
                        ['Operational commitment', 'We aim to be where we say we will be, when we say we will be there. Subject to the practical realities of location and parts, we hold ourselves to that.'],
                        ['Sector understanding', 'Healthcare is not hospitality. Commercial laundry is not care. We take time to understand the operating environment before proposing solutions.'],
                        ['Long-term relationships', 'We do not optimise for one-off transactions. Our service model is built around long-term customer relationships — because that is how good engineering support works.'],
                    ] as [$title, $desc])
                    <div class="border-l-2 border-navy/20 pl-5">
                        <h3 class="font-heading font-semibold text-navy text-sm mb-1">{{ $title }}</h3>
                        <p class="font-body text-gray-600 text-sm leading-relaxed">{{ $desc }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. WHAT ENGINEERING-LED MEANS -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-4">What "engineering-led" means in practice</h2>
            <p class="font-body text-gray-500 text-lg mb-8">It means the engineering outcome — not the sales outcome — drives every recommendation we make.</p>
            <ul class="space-y-4">
                @foreach([
                    'Practical diagnosis before any proposal — we assess the equipment and environment first.',
                    'Prevention programmes structured to the site — not generic scheduled visits.',
                    'Configuration and commissioning support when new equipment is installed.',
                    'Evidence-led recommendations based on what we find, not what is easiest to sell.',
                ] as $item)
                <li class="flex items-start gap-4">
                    <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-orange mt-2.5"></span>
                    <p class="font-body text-gray-600 leading-relaxed">{{ $item }}</p>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

<!-- 5. SERVICE MODEL — 5 STEPS -->
<section class="py-16 lg:py-20 bg-bg border-y border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-10">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-3">How we engage</h2>
            <p class="font-body text-gray-500 text-lg">A structured process — from first contact to service in place.</p>
        </div>
        <div class="space-y-0">
            @foreach([
                ['01', 'Intro call', 'We take time to understand your operation — sector, site count, equipment types, current challenges and what you actually need.'],
                ['02', 'Stakeholder interview', 'We speak to the right people: facilities managers, operations leads, or whoever owns the laundry risk in your organisation.'],
                ['03', 'Technical evaluation', 'Where needed, we carry out an on-site assessment of equipment condition, usage patterns and maintenance history.'],
                ['04', 'Results review', 'We present what we found — clearly and without jargon — and discuss what options are appropriate for your operation.'],
                ['05', 'Proposal', 'A structured proposal matched to your site: contract tier, equipment recommendations, response levels and cost structure.'],
            ] as [$num, $title, $body])
            <div class="flex gap-6 items-start py-6 border-b border-border last:border-0">
                <div class="flex-shrink-0 w-10 pt-0.5">
                    <span class="font-heading font-bold text-orange text-sm">{{ $num }}</span>
                </div>
                <div class="flex-1">
                    <h3 class="font-heading font-semibold text-navy text-base mb-1">{{ $title }}</h3>
                    <p class="font-body text-gray-600 text-sm leading-relaxed">{{ $body }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <p class="mt-8 font-body text-gray-500 text-sm">
            We support sites across Ireland. Availability and next steps are confirmed once we understand location, urgency and constraints.
        </p>
    </div>
</section>

<!-- 6. ELECTROLUX CAPABILITY BLOCK -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div>
                <p class="text-sm font-body font-semibold text-orange uppercase tracking-wide mb-3">Electrolux Professional Partnership</p>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-5">Platform credibility. Local execution.</h2>
                <p class="font-body text-gray-600 leading-relaxed mb-4">
                    Electrolux Professional provides manufacturer-grade equipment standards, genuine parts access and technical documentation. ILS provides local engineering execution, field response, and operational understanding of Irish commercial sites.
                </p>
                <p class="font-body text-gray-600 leading-relaxed mb-8">
                    Together: lower friction, faster resolution, and lower downtime risk for critical operations across healthcare, hospitality and care.
                </p>
                <a href="{{ route('electrolux') }}" class="inline-flex items-center gap-2 text-navy font-body font-semibold hover:text-steel transition-colors text-sm">
                    About the Electrolux partnership
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>
            <div class="space-y-4">
                @foreach([
                    ['Electrolux', 'Platform, standards, manufacturer credibility.'],
                    ['ILS', 'Local execution, field response, operational understanding.'],
                    ['Together', 'Lower friction and lower downtime risk for critical sites.'],
                ] as [$label, $desc])
                <div class="bg-bg border border-border rounded-xl p-5 flex items-start gap-4">
                    <div class="flex-shrink-0 w-20 pt-0.5">
                        <span class="font-heading font-bold text-navy text-sm">{{ $label }}</span>
                    </div>
                    <p class="font-body text-gray-600 text-sm leading-relaxed">{{ $desc }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- 7. TIMELINE -->
<section class="py-16 lg:py-20 bg-bg border-y border-border">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-12">ILS Through the Years</h2>
        <div class="space-y-0">
            @foreach ([
                ['1987', 'Founded', 'Irish Laundry Systems established, providing commercial laundry engineering across the Republic of Ireland.'],
                ['1990s', 'Growth', 'Expanded support into healthcare and care facility sectors — recognising the critical nature of laundry in these environments.'],
                ['2000s', 'Infrastructure', 'Built out nationwide engineering coverage and deepened technical capability across the full range of commercial laundry equipment.'],
                ['2010s', 'Partnership', 'Achieved Authorised Electrolux Professional Partner status — reflecting investment in manufacturer training and genuine parts capability.'],
                ['Today', 'Continuing', 'Supporting healthcare groups, hospitality operations, care facilities and commercial operators across the Republic of Ireland.'],
            ] as [$year, $title, $body])
            <div class="flex gap-6 items-start py-6 border-b border-border last:border-0">
                <div class="flex-shrink-0 w-16 pt-0.5">
                    <span class="font-heading font-bold text-orange text-sm">{{ $year }}</span>
                </div>
                <div class="flex-1 pl-4 border-l-2 border-navy/10">
                    <h3 class="font-heading font-semibold text-navy text-base mb-1">{{ $title }}</h3>
                    <p class="font-body text-gray-600 text-sm leading-relaxed">{{ $body }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- 8. PROOF — LIGHT TESTIMONIALS -->
@include('components.testimonials', ['heading' => 'What long-term customers say', 'light' => true])

<!-- 9. FAQs -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-8">Common questions</h2>
        <div class="space-y-4">
            <div class="border border-border rounded-xl p-6">
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Do you only work with Electrolux equipment?</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">No. We support a range of commercial laundry equipment. We confirm support scope per model and site during the initial engagement.</p>
            </div>
            <div class="border border-border rounded-xl p-6">
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Do you support multi-site groups?</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">Yes. We can align programmes and reporting to governance needs across multiple sites. Scope is confirmed per agreement.</p>
            </div>
        </div>
    </div>
</section>

<!-- 10. FINAL CTA -->
@include('components.cta-band', [
    'heading' => 'Ready to work with ILS?',
    'subheading' => 'Request a service assessment and let us propose the right structure for your operation.',
    'primaryText' => 'Talk to an Expert',
    'primaryHref' => '/contact',
    'secondaryText' => 'Request a Service Assessment',
    'secondaryHref' => '/request-assessment',
])

@endsection
