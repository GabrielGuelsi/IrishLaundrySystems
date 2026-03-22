@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="bg-navy py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <div class="flex items-center gap-2 mb-4">
                <a href="{{ route('sectors') }}" class="text-gray-400 hover:text-gray-200 text-sm font-body transition-colors">Sectors</a>
                <svg class="w-3 h-3 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                <span class="text-gray-300 text-sm font-body">Hospitality</span>
            </div>
            <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-1.5 mb-6">
                <svg class="w-4 h-4 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z"/>
                </svg>
                <span class="text-sm font-body text-gray-200">Hospitality sector</span>
            </div>
            <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-5">
                Laundry Support for Hotels &amp; Hospitality
            </h1>
            <p class="font-body text-blue-200 text-xl mb-4 font-semibold">Protect guest operations with predictable uptime.</p>
            <p class="font-body text-gray-300 text-lg leading-relaxed mb-8 max-w-2xl">
                Laundry failure in a hotel or hospitality property affects housekeeping schedules, room turnaround, guest experience and your reputation. ILS keeps your in-house laundry operation running with structured maintenance and rapid reactive support.
            </p>
            <a href="{{ route('request-assessment') }}"
               class="inline-flex items-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 cursor-pointer">
                Request a Service Assessment
            </a>
        </div>
    </div>
</section>

<!-- PROOF BAR -->
@include('components.proof-bar')

<!-- WHAT MATTERS IN HOSPITALITY -->
<section class="py-16 lg:py-24 bg-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">
            <div>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-6">What Matters in Hospitality Laundry</h2>
                <p class="font-body text-gray-600 leading-relaxed mb-5">
                    Hotels and hospitality operators running in-house laundry face consistent pressure: rooms need to be turned around quickly, linen must be presented to standard, and the laundry room can't become a bottleneck.
                </p>
                <p class="font-body text-gray-600 leading-relaxed mb-6">
                    For a property with in-house laundry, equipment downtime translates directly into operational impact — delayed room readiness, additional outsourcing cost and staff pressure. For hotels with limited backup capacity, a single machine failure can cascade quickly.
                </p>
                <ul class="space-y-3">
                    @foreach ([
                        'Planned maintenance reduces the likelihood of equipment failure during peak occupancy periods',
                        'Fast response to breakdowns — we aim to be on-site within 24 hours (subject to location and parts availability)',
                        'Genuine parts for Electrolux Professional equipment — faster first-fix rates',
                        'Service records maintained for each piece of equipment',
                        'Options for equipment rental where additional capacity is needed',
                    ] as $item)
                    <li class="flex items-start gap-3 text-sm font-body">
                        <svg class="w-5 h-5 text-steel flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                        </svg>
                        <span class="text-gray-700">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="space-y-4">
                <h2 class="font-heading font-bold text-navy text-2xl mb-4">Recommended Approach</h2>
                <div class="bg-white border border-border rounded-xl p-6">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg bg-steel/10 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-steel" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-heading font-semibold text-navy text-base mb-1">Priority Service Contract</h3>
                            <p class="font-body text-gray-600 text-sm leading-relaxed">For most hotel operations, our Priority tier provides the right balance — scheduled preventive maintenance, priority scheduling and compliance documentation support.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white border border-border rounded-xl p-6">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg bg-orange/10 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-heading font-semibold text-navy text-base mb-1">Reactive Call-Out Support</h3>
                            <p class="font-body text-gray-600 text-sm leading-relaxed">When breakdowns occur, call us. We dispatch engineers quickly, communicate clearly and work to resolve the fault on first visit where possible.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white border border-border rounded-xl p-6">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 2.625c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125m16.5 5.625c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-heading font-semibold text-navy text-base mb-1">Equipment &amp; Rental</h3>
                            <p class="font-body text-gray-600 text-sm leading-relaxed">New or replacement equipment — supplied, installed and commissioned. Rental options for temporary capacity or phased replacement.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
@include('components.testimonials', ['heading' => 'What hospitality operators say'])

<!-- CTA BAND -->
@include('components.cta-band', [
    'heading' => 'Keep your laundry room running',
    'subheading' => 'Request an assessment and we will propose the right service structure for your property.',
    'primaryText' => 'Request a Service Assessment',
])

@endsection
