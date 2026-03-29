@extends('layouts.app')

@section('pageTitle', 'About Irish Laundry Systems | Engineering-led Commercial Laundry Partner')
@section('metaDescription', 'Established 1987. Engineering-led commercial laundry support across Ireland — contracts, rental and breakdown response built around uptime.')

@section('content')

<!-- HERO -->
<section class="bg-navy py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-1.5 mb-6">
                <svg class="w-4 h-4 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span class="text-sm font-body text-gray-200">Established 1987</span>
            </div>
            <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-5">
                Engineering-led Laundry Support Since 1987
            </h1>
            <p class="font-body text-blue-200 text-xl mb-4 font-semibold">Built around uptime, risk control and long-term operational continuity.</p>
            <p class="font-body text-gray-300 text-lg leading-relaxed max-w-2xl">
                Irish Laundry Systems was founded in 1987 with a straightforward purpose: to provide commercial laundry operators across Ireland with engineering-first service that actually works. Over three decades later, that purpose hasn't changed.
            </p>
        </div>
    </div>
</section>

<!-- PROOF BAR -->
@include('components.proof-bar')

<!-- FOUNDED STORY -->
<section class="py-16 lg:py-24 bg-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">
            <div>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-6">Our Story</h2>
                <p class="font-body text-gray-600 leading-relaxed mb-4">
                    Irish Laundry Systems was founded in 1987, at a time when the commercial laundry sector in Ireland was growing rapidly — driven by expansion in healthcare, hospitality and institutional care. The founders recognised that these operations needed an engineering-led service provider that understood their environment, not just the equipment.
                </p>
                <p class="font-body text-gray-600 leading-relaxed mb-4">
                    Over the following decades, ILS built a reputation for technical depth, operational reliability and straight communication. When an ILS engineer says they'll be on-site by a certain time, they aim to be there. When a job is diagnosed, the customer understands what the problem is and what the options are.
                </p>
                <p class="font-body text-gray-600 leading-relaxed mb-6">
                    Today, ILS supports healthcare groups, hotel properties, care facilities and commercial operators across the Republic of Ireland — under structured service contracts, reactive call-out arrangements and equipment supply and rental agreements. Our Authorised Electrolux Professional Partner status reflects our ongoing investment in the engineering capability behind that support.
                </p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white border border-border rounded-xl p-4 text-center">
                        <div class="font-heading font-bold text-navy text-3xl mb-1">1987</div>
                        <div class="text-xs font-body text-gray-500">Year founded</div>
                    </div>
                    <div class="bg-white border border-border rounded-xl p-4 text-center">
                        <div class="font-heading font-bold text-navy text-3xl mb-1">30+</div>
                        <div class="text-xs font-body text-gray-500">Years of experience</div>
                    </div>
                    <div class="bg-white border border-border rounded-xl p-4 text-center">
                        <div class="font-heading font-bold text-navy text-3xl mb-1">ROI</div>
                        <div class="text-xs font-body text-gray-500">Nationwide coverage</div>
                    </div>
                    <div class="bg-white border border-border rounded-xl p-4 text-center">
                        <div class="font-heading font-bold text-navy text-3xl mb-1">4</div>
                        <div class="text-xs font-body text-gray-500">Sectors served</div>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="font-heading font-bold text-navy text-2xl mb-5">What We Stand For</h2>
                <div class="space-y-4">
                    @foreach ([
                        ['Engineering first', 'We are an engineering business. Every decision — from how we structure service contracts to how we respond to breakdowns — is made with technical competence at the centre.'],
                        ['Straight communication', 'Customers should know what is happening, what has been found and what comes next. We do not hide behind jargon or ambiguity.'],
                        ['Reliability you can depend on', 'We aim to be where we say we will be, when we say we will be there. Subject to the practical realities of location and parts, we hold ourselves to that.'],
                        ['Understanding your sector', 'Healthcare is not hospitality. Commercial laundry is not care. We take time to understand the operating environment before proposing solutions.'],
                        ['Long-term relationships', 'We do not optimise for one-off transactions. Our service model is built around long-term customer relationships — because that is how good engineering support works.'],
                    ] as [$title, $desc])
                    <div class="bg-bg border border-border rounded-xl p-5 flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-orange flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-heading font-semibold text-navy text-sm mb-1">{{ $title }}</h3>
                            <p class="font-body text-gray-600 text-sm leading-relaxed">{{ $desc }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TIMELINE -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl text-center mb-12">ILS Through the Years</h2>
        <div class="relative">
            <!-- Timeline line -->
            <div class="absolute left-6 top-0 bottom-0 w-0.5 bg-border lg:left-1/2"></div>
            <div class="space-y-8">
                @foreach ([
                    ['1987', 'Founded', 'Irish Laundry Systems established, providing commercial laundry engineering across the Republic of Ireland.'],
                    ['1990s', 'Growth', 'Expanded support into healthcare and care facility sectors — recognising the critical nature of laundry in these environments.'],
                    ['2000s', 'Infrastructure', 'Built out nationwide engineering coverage and deepened technical capability across the full range of commercial laundry equipment.'],
                    ['2010s', 'Partnership', 'Achieved Authorised Electrolux Professional Partner status — reflecting investment in manufacturer training and genuine parts capability.'],
                    ['Today', 'Continuing', 'Supporting healthcare groups, hospitality operations, care facilities and commercial operators across the Republic of Ireland with contracts, repairs and equipment.'],
                ] as $i => [$year, $title, $body])
                <div class="relative flex items-start gap-6 lg:gap-0 {{ $i % 2 === 0 ? 'lg:flex-row' : 'lg:flex-row-reverse' }}">
                    <div class="flex-shrink-0 w-12 h-12 rounded-full bg-navy flex items-center justify-center text-white font-heading font-bold text-xs z-10 relative lg:absolute lg:left-1/2 lg:-translate-x-1/2 lg:top-1">
                        <span class="text-center leading-tight text-[10px]">{{ substr($year,0,4) }}</span>
                    </div>
                    <div class="{{ $i % 2 === 0 ? 'lg:pr-12 lg:text-right lg:w-1/2' : 'lg:pl-12 lg:ml-auto lg:w-1/2' }} ml-6 lg:ml-0 bg-bg border border-border rounded-xl p-5">
                        <div class="font-heading font-bold text-orange text-base mb-1">{{ $year }} — {{ $title }}</div>
                        <p class="font-body text-gray-600 text-sm leading-relaxed">{{ $body }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- HOW WE WORK -->
<section class="py-16 lg:py-20 bg-steel text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl mb-4">How We Work</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div>
                <div class="w-14 h-14 rounded-full bg-white/20 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-white text-lg mb-2">We Listen First</h3>
                <p class="font-body text-blue-200 text-sm leading-relaxed">Before proposing anything, we take time to understand your operation — sector, equipment, constraints and what you actually need.</p>
            </div>
            <div>
                <div class="w-14 h-14 rounded-full bg-white/20 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-white text-lg mb-2">We Engineer Solutions</h3>
                <p class="font-body text-blue-200 text-sm leading-relaxed">Our proposals are engineered, not generic. We match the service structure — contract tier, equipment spec, response levels — to what your operation actually needs.</p>
            </div>
            <div>
                <div class="w-14 h-14 rounded-full bg-white/20 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-white text-lg mb-2">We Deliver and Stay</h3>
                <p class="font-body text-blue-200 text-sm leading-relaxed">Service doesn't end at installation or contract signing. We manage the relationship, report on visits, respond to issues and continue to earn the trust we're given.</p>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
@include('components.testimonials', ['heading' => 'What long-term customers say'])

<!-- CTA BAND -->
@include('components.cta-band', [
    'heading' => 'Ready to work with ILS?',
    'subheading' => 'Request a service assessment and let us propose the right structure for your operation.',
    'primaryText' => 'Request a Service Assessment',
])

@endsection
