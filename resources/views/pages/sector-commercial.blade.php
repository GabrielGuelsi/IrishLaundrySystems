@extends('layouts.app')

@section('meta')
<meta name="description" content="ILS provides engineering-led commercial laundry support for high-throughput and industrial operations across Ireland — service contracts, reactive repairs, equipment supply and lifecycle planning.">
@endsection

@section('content')

@include('components.sector-tabs')

<!-- 1. HERO -->
<section class="bg-navy py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl">
            <div class="flex items-center gap-2 mb-5">
                <a href="{{ route('sectors') }}" class="text-gray-400 hover:text-gray-200 text-sm font-body transition-colors">Sectors</a>
                <svg class="w-3 h-3 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                <span class="text-gray-300 text-sm font-body">Commercial &amp; Industrial</span>
            </div>
            <p class="text-sm font-body font-semibold text-orange uppercase tracking-wide mb-4">Commercial &amp; Industrial sector</p>
            <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-5">
                Commercial laundry downtime has a direct cost to throughput and output.
            </h1>
            <p class="font-body text-gray-300 text-lg leading-relaxed mb-8">
                Structured preventive maintenance, fast breakdown response and equipment lifecycle planning — built around the throughput demands and cost pressures of commercial and industrial laundry operations.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200"
                   data-ga-cta="commercial_talk_to_engineer">
                    Talk to an Engineer
                </a>
                <a href="tel:+353000000000"
                   class="inline-flex items-center justify-center gap-2 border-2 border-white/40 hover:border-white text-white font-body font-semibold px-8 py-4 rounded-lg text-base transition-colors duration-200 hover:bg-white/10">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                    </svg>
                    Call an Engineer
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 2. PROOF BAR -->
@include('components.proof-bar')

<!-- 3. PAIN POINTS + CONTINUITY LOGIC -->
<section class="py-16 lg:py-24 bg-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-12">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-5">What commercial operators tell us</h2>
            <p class="font-body text-gray-500 leading-relaxed mb-8">
                When commercial laundry and industrial site managers come to ILS, they are typically dealing with one or more of these:
            </p>
            <ul class="space-y-4">
                @foreach ([
                    'A machine failure on a high-volume production day that created a backlog taking hours to recover from',
                    'Reactive-only maintenance — no prevention programme, just repairs when things break',
                    'Rising repair costs on aging equipment with no clear picture of when maintaining stops making sense',
                    'A service provider without the technical depth to work on high-throughput commercial equipment',
                    'No documented maintenance history — making equipment lifecycle decisions harder to justify internally',
                    'Multi-site operations with inconsistent service standards and no single point of contact',
                ] as $item)
                <li class="flex items-start gap-3">
                    <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-navy/40 mt-2"></span>
                    <span class="font-body text-gray-700 text-sm leading-relaxed">{{ $item }}</span>
                </li>
                @endforeach
            </ul>
        </div>

        <div class="border-t border-border pt-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">
                <div>
                    <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-5">Throughput is the metric that matters</h2>
                    <p class="font-body text-gray-600 leading-relaxed mb-4">
                        In a commercial or industrial laundry operation, machine utilisation drives output. Unplanned downtime doesn't just stop one machine — it creates a backlog across the entire operation that takes time and cost to recover from.
                    </p>
                    <p class="font-body text-gray-600 leading-relaxed">
                        ILS works with commercial operators to put structured prevention in place — reducing failure frequency, extending equipment service life, and enabling better capacity planning around machine availability.
                    </p>
                </div>
                <div>
                    <p class="font-body text-gray-600 leading-relaxed mb-4">
                        As equipment ages, the maintenance versus replacement decision becomes a real financial question. Continuing to repair a machine that is failing more frequently may cost more over twelve months than replacing it — but without a documented service history, that calculation is difficult to make with confidence.
                    </p>
                    <p class="font-body text-gray-600 leading-relaxed">
                        ILS helps commercial operators build that picture — service records per machine, failure frequency data, and engineering assessment of when replacement makes more sense than continued repair.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. SERVICE-PATHWAY FIT BLOCK — 2×2 grid -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-10">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-3">How ILS supports commercial operations</h2>
            <p class="font-body text-gray-500 text-lg max-w-2xl">Our services mapped to the throughput, lifecycle and operational demands of commercial and industrial laundry.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

            <!-- Service Contracts -->
            <div class="bg-bg border border-border rounded-xl p-6 flex flex-col card-hover">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Service Contracts</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">Structured preventive maintenance across three tiers — reducing failure frequency, producing documented maintenance history per machine, and giving operations managers the data they need to plan around equipment availability and lifecycle cost.</p>
                <a href="{{ route('service-contracts') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    View service contracts
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <!-- Repairs & Call-outs -->
            <div class="bg-bg border border-border rounded-xl p-6 flex flex-col card-hover">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Repairs &amp; Call-outs</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">Fast triage and engineer dispatch when breakdowns occur. Experienced engineers carrying genuine Electrolux Professional parts — focused on first-visit resolution to get your operation back to full throughput without the extended backlog a slow response creates.</p>
                <a href="{{ route('repairs') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Repairs &amp; call-outs
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <!-- Equipment Supply -->
            <div class="bg-bg border border-border rounded-xl p-6 flex flex-col card-hover">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Equipment Supply</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">Commercial laundry equipment from the Electrolux Professional range — supplied, installed and commissioned for your site. Specification advice available from engineers who understand high-throughput operational requirements, not just product brochures.</p>
                <a href="{{ route('equipment') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Browse equipment
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

            <!-- Equipment Rental -->
            <div class="bg-bg border border-border rounded-xl p-6 flex flex-col card-hover">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Equipment Rental</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">A structured rental arrangement gives commercial operators access to new equipment without capital outlay — inclusive of maintenance support. For sites with aging machines where the repair versus replace calculation is shifting, rental is a practical alternative worth considering.</p>
                <a href="{{ route('rental') }}" class="mt-4 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                    Equipment rental
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- 5. LIFECYCLE COST CALLOUT -->
<section class="py-12 bg-bg border-y border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white border border-border rounded-xl p-8 lg:p-10">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                <div class="lg:col-span-2">
                    <h2 class="font-heading font-bold text-navy text-xl lg:text-2xl mb-3">When does maintaining stop making sense?</h2>
                    <p class="font-body text-gray-600 text-sm leading-relaxed mb-4">
                        Aging commercial laundry equipment rarely fails once and gets replaced. It fails more frequently over time — each repair costing less than a replacement, until the cumulative cost of repairs over twelve months exceeds the cost of a new machine. Without a documented service history, that crossover point is invisible.
                    </p>
                    <p class="font-body text-gray-600 text-sm leading-relaxed">
                        ILS service contracts produce a maintenance record per machine. Over time, that record shows failure frequency, parts replaced, and engineer time per visit — giving operations managers and procurement teams the data to make a justified replacement decision rather than guessing.
                    </p>
                </div>
                <div class="flex flex-col gap-4">
                    @foreach([
                        'Service history documented per machine',
                        'Failure frequency visible over time',
                        'Engineering assessment of maintain vs. replace',
                        'Rental available as a capex-free replacement path',
                    ] as $point)
                    <div class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-navy flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                        </svg>
                        <span class="font-body text-gray-700 text-sm leading-relaxed">{{ $point }}</span>
                    </div>
                    @endforeach
                    <a href="{{ route('contact') }}" class="mt-2 inline-flex items-center gap-1 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
                        Talk to an engineer
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. PROOF — COMMERCIAL TESTIMONIALS ⚠️ PLACEHOLDER — replace with real approved quotes before go-live -->
<section class="py-16 lg:py-20 bg-navy">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-heading font-bold text-white text-2xl lg:text-3xl mb-10">What commercial operators say</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div class="bg-navy-light border border-white/10 rounded-xl p-6 lg:p-8 flex flex-col">
                <blockquote class="flex-1">
                    <p class="font-body text-gray-300 text-base leading-relaxed">
                        &ldquo;We were running on reactive repairs — no maintenance programme, just calling someone when something broke. ILS put a service contract in place and the failure frequency dropped significantly within the first year.&rdquo;
                    </p>
                </blockquote>
                <div class="mt-6 pt-5 border-t border-white/10">
                    <cite class="block text-sm font-body font-semibold text-white not-italic">Operations Manager</cite>
                    <span class="text-xs text-gray-400 font-body">Commercial Laundry, Leinster</span>
                </div>
            </div>

            <div class="bg-navy-light border border-white/10 rounded-xl p-6 lg:p-8 flex flex-col">
                <blockquote class="flex-1">
                    <p class="font-body text-gray-300 text-base leading-relaxed">
                        &ldquo;We needed an engineer who understood high-throughput equipment — not a general appliance repair service. ILS knew the machines, had the parts, and got us back running the same day.&rdquo;
                    </p>
                </blockquote>
                <div class="mt-6 pt-5 border-t border-white/10">
                    <cite class="block text-sm font-body font-semibold text-white not-italic">Site Manager</cite>
                    <span class="text-xs text-gray-400 font-body">Industrial Laundry Facility, Munster</span>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 7. EQUIPMENT RELEVANCE BLOCK -->
<section class="py-16 lg:py-20 bg-bg border-y border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-10">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-3">Equipment built for commercial throughput</h2>
            <p class="font-body text-gray-500 text-lg">ILS supplies and supports commercial laundry equipment matched to the volume demands and operational intensity of high-throughput sites.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-10">
            @foreach([
                ['High-Capacity Washers', 'Large-format washer-extractors designed for continuous high-volume operation — matched to the throughput and cycle requirements of commercial laundry sites running full shift patterns.'],
                ['Industrial Tumble Dryers', 'High-capacity dryers to maintain linen flow at production pace — keeping throughput consistent and preventing bottlenecks at the drying stage during peak operational periods.'],
                ['Finishing & Ironing Equipment', 'Flatwork ironers and finishing systems for commercial-scale linen processing — supporting throughput at the final stage of the laundry cycle without creating a queue.'],
            ] as [$title, $desc])
            <div class="bg-white border border-border rounded-xl p-6">
                <h3 class="font-heading font-semibold text-navy text-base mb-2">{{ $title }}</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
        <p class="font-body text-gray-500 text-sm mb-6">ILS is an Authorised Electrolux Professional Partner — providing access to manufacturer-grade equipment, genuine OEM parts and technical support. Equipment specification is confirmed per site during the assessment process.</p>
        <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 text-navy font-body font-semibold text-sm hover:text-steel transition-colors">
            Browse the equipment library
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
        </a>
    </div>
</section>

<!-- 8. CROSS-LINKS -->
<section class="py-12 bg-white border-b border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="font-heading font-semibold text-navy text-lg mb-6">Also relevant for commercial operators</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <a href="{{ route('electrolux') }}" class="group flex items-start gap-5 bg-bg border border-border rounded-xl p-6 hover:border-navy/30 transition-colors">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-heading font-semibold text-navy text-base mb-1 group-hover:text-steel transition-colors">Electrolux Partnership</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Why ILS plus Electrolux Professional works for commercial operations — genuine OEM parts, manufacturer-grade technical support, and equipment backed by an authorised partner.</p>
                </div>
            </a>
            <a href="{{ route('rental') }}" class="group flex items-start gap-5 bg-bg border border-border rounded-xl p-6 hover:border-navy/30 transition-colors">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-heading font-semibold text-navy text-base mb-1 group-hover:text-steel transition-colors">Equipment Rental</h3>
                    <p class="font-body text-gray-500 text-sm leading-relaxed">Commercial laundry equipment on a structured rental arrangement — inclusive of maintenance support. A capex-free path for sites where the maintain versus replace calculation is shifting.</p>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- 9. FINAL CTA -->
@include('components.cta-band', [
    'heading'     => 'Talk to an ILS engineer about your commercial operation.',
    'subheading'  => 'We will assess your site, review your current maintenance arrangements and equipment profile, and help you build a service structure that reduces downtime and controls lifecycle cost.',
    'primaryText' => 'Talk to an Engineer',
    'primaryHref' => route('contact'),
])

@endsection
