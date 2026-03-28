@extends('layouts.app')

@section('meta')
<meta name="description" content="ILS provides engineering-led commercial laundry support for healthcare operations across Ireland — service contracts, barrier washer maintenance and priority response.">
@endsection

@section('content')

<!-- 1. HERO -->
<section class="bg-navy py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl">
            <div class="flex items-center gap-2 mb-5">
                <a href="{{ route('sectors') }}" class="text-gray-400 hover:text-gray-200 text-sm font-body transition-colors">Sectors</a>
                <svg class="w-3 h-3 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                <span class="text-gray-300 text-sm font-body">Healthcare</span>
            </div>
            <p class="text-sm font-body font-semibold text-orange uppercase tracking-wide mb-4">Healthcare sector</p>
            <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-5">
                Healthcare laundry operations can't afford downtime.
            </h1>
            <p class="font-body text-gray-300 text-lg leading-relaxed mb-8">
                ILS understands the clinical governance expectations, hygiene standards and operational pressures that healthcare facilities operate under. Our service model is structured around that reality — prevention first, priority response when issues arise, and documented records throughout.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('request-assessment') }}"
                   class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200"
                   data-ga-cta="healthcare_request_assessment">
                    Request a Service Assessment
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

<!-- 3. HSE NOTE -->
<section class="py-8 bg-white border-b border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="border border-border rounded-xl p-5 lg:p-6 flex items-start gap-4">
            <svg class="w-5 h-5 text-navy flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/>
            </svg>
            <p class="font-body text-gray-600 text-sm leading-relaxed">
                <strong class="font-semibold text-navy">HSE and healthcare group operators:</strong> ILS has experience working with HSE sites and healthcare group procurement arrangements across the Republic of Ireland. If you have specific procurement or governance requirements, please mention this when you contact us and we will address them directly in our proposal.
            </p>
        </div>
    </div>
</section>

<!-- 4. PAIN POINTS + WHY UPTIME MATTERS -->
<section class="py-16 lg:py-24 bg-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">
            <div>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-5">What healthcare operators tell us</h2>
                <p class="font-body text-gray-500 leading-relaxed mb-6">
                    When facilities managers in healthcare come to ILS, they're typically dealing with one or more of these:
                </p>
                <ul class="space-y-4">
                    @foreach ([
                        'A breakdown during a busy period that disrupted ward linen or patient laundry workflow',
                        'A service provider that wasn\'t responsive enough or didn\'t understand the urgency of healthcare operations',
                        'No documented maintenance history to support audit or compliance review',
                        'Aging equipment generating increasing reactive repair costs',
                        'Multi-site contracts that are difficult to manage or inconsistently delivered',
                        'Lack of clarity about what is and isn\'t covered under existing arrangements',
                    ] as $item)
                    <li class="flex items-start gap-3">
                        <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-navy/40 mt-2"></span>
                        <span class="font-body text-gray-700 text-sm leading-relaxed">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-5">Why uptime matters in healthcare</h2>
                <p class="font-body text-gray-600 leading-relaxed mb-4">
                    In a hospital, nursing home or care facility, laundry is a hygiene-critical function. Patient linen, theatre textiles and staff uniforms must move through the laundry cycle to the required standard, without interruption.
                </p>
                <p class="font-body text-gray-600 leading-relaxed mb-4">
                    Equipment failure directly affects infection control workflows, patient dignity and — in some settings — regulatory compliance. This is not a sector where deferred response is acceptable.
                </p>
                <p class="font-body text-gray-600 leading-relaxed">
                    ILS structures our healthcare support — particularly at Priority and Assured tier — around the operational reality that laundry downtime in these environments carries real risk.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- 5. HOW ILS SUPPORTS HEALTHCARE -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-10">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-3">How ILS supports healthcare operations</h2>
            <p class="font-body text-gray-500 text-lg max-w-2xl">Our services mapped to the specific demands of healthcare laundry.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach ([
                ['Service Contracts', 'Scheduled preventive maintenance with documented service reports. Three tiers: Core, Priority and Assured — matched to your risk profile and operational dependency.', 'service-contracts'],
                ['Compliance Documentation', 'Written service records and maintenance logs for every visit — supporting audit, inspection and governance processes.', 'service-contracts'],
                ['Priority Response', 'Healthcare customers at Priority and Assured tiers receive priority triage and dispatch. We aim to be on-site within 24 hours (subject to location and parts availability).', 'repairs'],
                ['Multi-Site Contracts', 'Group service contracts covering multiple hospital or care sites under a single arrangement — consistent standards and reporting across all locations.', 'contact'],
                ['Genuine Parts', 'As an Authorised Electrolux Professional Partner, we have access to genuine OEM parts — important for equipment longevity and warranty purposes.', 'electrolux'],
                ['Barrier Washer Support', 'Specialist knowledge of barrier washer operation and maintenance — critical in healthcare environments for sluice and infection control workflows.', 'equipment'],
            ] as [$title, $desc, $link])
            <div class="bg-bg border border-border rounded-xl p-6 flex flex-col">
                <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center mb-4 flex-shrink-0">
                    <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">{{ $title }}</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- 6. PROOF — HEALTHCARE TESTIMONIAL -->
<section class="py-16 lg:py-20 bg-bg border-y border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-10">What healthcare customers say</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white border border-border rounded-xl p-6 lg:p-8 flex flex-col">
                <blockquote class="flex-1">
                    <p class="font-body text-gray-700 text-base leading-relaxed">
                        &ldquo;Clear communication and practical engineering support. They understand the pressure of healthcare operations and respond accordingly.&rdquo;
                    </p>
                </blockquote>
                <div class="mt-6 pt-5 border-t border-border">
                    <cite class="block text-sm font-body font-semibold text-navy not-italic">Operations Manager</cite>
                    <span class="text-xs text-gray-400 font-body">Healthcare Group, Republic of Ireland</span>
                </div>
            </div>
            <div class="bg-white border border-border rounded-xl p-6 lg:p-8 flex flex-col">
                <blockquote class="flex-1">
                    <p class="font-body text-gray-700 text-base leading-relaxed">
                        &ldquo;We've had service contracts with ILS for several years. They show up, they communicate clearly, and they know the equipment. That's what we need.&rdquo;
                    </p>
                </blockquote>
                <div class="mt-6 pt-5 border-t border-border">
                    <cite class="block text-sm font-body font-semibold text-navy not-italic">Facilities Manager</cite>
                    <span class="text-xs text-gray-400 font-body">Nursing Home Group, Munster</span>
                </div>
            </div>
            <div class="bg-white border border-border rounded-xl p-6 lg:p-8 flex flex-col">
                <blockquote class="flex-1">
                    <p class="font-body text-gray-700 text-base leading-relaxed">
                        &ldquo;No documented maintenance history was one of our biggest problems. ILS resolved that from the first visit — every service report is on file.&rdquo;
                    </p>
                </blockquote>
                <div class="mt-6 pt-5 border-t border-border">
                    <cite class="block text-sm font-body font-semibold text-navy not-italic">Compliance Lead</cite>
                    <span class="text-xs text-gray-400 font-body">Private Hospital Group, Leinster</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. FAQs -->
@php
$faqs = [
    [
        'question' => 'Do you work with HSE sites and public healthcare procurement?',
        'answer' => 'ILS has experience working with HSE sites and healthcare group procurement across the Republic of Ireland. If you have specific procurement requirements or approval processes, please mention this when you contact us and we will work within your framework.',
    ],
    [
        'question' => 'Can you support multiple hospital or care sites under one contract?',
        'answer' => 'Yes. ILS structures multi-site service contracts for healthcare groups — covering multiple facilities under a single arrangement, with consistent reporting and maintenance standards across all sites.',
    ],
    [
        'question' => 'How quickly can you respond to a healthcare breakdown?',
        'answer' => 'We aim to be on-site within 24 hours for reported breakdowns (subject to location and parts availability). Healthcare customers at Priority and Assured tiers receive priority triage and dispatch.',
    ],
];
@endphp
@include('components.faq', ['faqs' => $faqs, 'heading' => 'Healthcare laundry — common questions'])

<!-- 8. FINAL CTA -->
@include('components.cta-band', [
    'heading' => 'Supporting healthcare laundry operations since 1987',
    'subheading' => 'Request a service assessment and we will propose the right contract structure for your operation.',
    'primaryText' => 'Request a Service Assessment',
])

@endsection
