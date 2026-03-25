@extends('layouts.app')

@section('content')

@include('components.sector-tabs')

<!-- HERO -->
<section class="bg-navy py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <div class="flex items-center gap-2 mb-4">
                <a href="{{ route('sectors') }}" class="text-gray-400 hover:text-gray-200 text-sm font-body transition-colors">Sectors</a>
                <svg class="w-3 h-3 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                <span class="text-gray-300 text-sm font-body">Care Facilities</span>
            </div>
            <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-1.5 mb-6">
                <svg class="w-4 h-4 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                </svg>
                <span class="text-sm font-body text-gray-200">Care facilities sector</span>
            </div>
            <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-5">
                Laundry Reliability for Care Homes &amp; Facilities
            </h1>
            <p class="font-body text-blue-200 text-xl mb-4 font-semibold">Continuity, safety and confidence.</p>
            <p class="font-body text-gray-300 text-lg leading-relaxed mb-8 max-w-2xl">
                In residential and nursing care, laundry is a daily operational need — resident dignity, hygiene and infection control all depend on it running reliably. ILS provides the structured support and rapid response that care operators require.
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

<!-- CONTENT -->
<section class="py-16 lg:py-24 bg-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
            <div>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-6">Why Care Facilities Choose ILS</h2>
                <p class="font-body text-gray-600 leading-relaxed mb-4">
                    Care homes and nursing homes typically run laundry seven days a week. Equipment failure affects resident wellbeing and creates immediate operational pressure for care staff. It can also have implications for infection control and regulatory compliance.
                </p>
                <p class="font-body text-gray-600 leading-relaxed mb-6">
                    ILS understands that care facility operators need a service provider that responds quickly, communicates clearly and doesn't make a difficult situation harder. Our service contracts are structured to reduce the frequency of failures, and our call-out response targets on-site attendance within 24 hours when breakdowns do occur.
                </p>
                <ul class="space-y-3">
                    @foreach ([
                        'Scheduled preventive maintenance — reducing failure frequency',
                        'Service reports for each visit — supporting inspection and audit readiness',
                        'Priority call-out response for contract customers',
                        'Barrier washer maintenance — sluice and infection control support',
                        'Multi-site contracts for care groups managing multiple properties',
                        'Equipment supply, installation and rental options',
                    ] as $item)
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                        </svg>
                        <span class="font-body text-gray-700 text-sm leading-relaxed">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="space-y-5">
                <div class="bg-white border border-border rounded-xl p-6">
                    <h3 class="font-heading font-semibold text-navy text-base mb-3">Inspection &amp; Compliance Readiness</h3>
                    <p class="font-body text-gray-600 text-sm leading-relaxed">
                        Care facilities are subject to HIQA inspection and other regulatory oversight. Having documented maintenance records for all laundry equipment supports your readiness for inspection. ILS service contracts at Priority and Assured tier include compliance documentation support.
                    </p>
                </div>
                <div class="bg-white border border-border rounded-xl p-6">
                    <h3 class="font-heading font-semibold text-navy text-base mb-3">Barrier Washers in Care Settings</h3>
                    <p class="font-body text-gray-600 text-sm leading-relaxed">
                        Barrier washers (pass-through washers) are commonly used in nursing home and care settings to separate soiled linen handling from clean linen. ILS has specific experience with barrier washer installation, maintenance and repair in care environments.
                    </p>
                </div>
                <div class="bg-white border border-border rounded-xl p-6">
                    <h3 class="font-heading font-semibold text-navy text-base mb-3">Response Time Expectations</h3>
                    <p class="font-body text-gray-600 text-sm leading-relaxed">
                        We aim to be on-site within 24 hours for reported breakdowns (subject to location and parts availability). Contract customers at Priority and Assured tiers receive priority triage and scheduling.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PACKAGES -->
@include('components.packages')

<!-- CTA BAND -->
@include('components.cta-band', [
    'heading' => 'Laundry reliability your residents depend on',
    'subheading' => 'Request an assessment and we will propose the right contract structure for your care facility.',
    'primaryText' => 'Request a Service Assessment',
])

@endsection
