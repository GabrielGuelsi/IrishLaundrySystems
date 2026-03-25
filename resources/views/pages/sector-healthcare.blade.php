@extends('layouts.app')

@section('content')

@include('components.sector-tabs')

<!-- HERO -->
<section class="bg-navy py-20 lg:py-28 relative">
    <div class="absolute top-0 left-0 right-0 h-1 bg-red-600"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <div class="flex items-center gap-2 mb-4">
                <a href="{{ route('sectors') }}" class="text-gray-400 hover:text-gray-200 text-sm font-body transition-colors">Sectors</a>
                <svg class="w-3 h-3 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                <span class="text-gray-300 text-sm font-body">Healthcare</span>
            </div>
            <div class="inline-flex items-center gap-2 bg-red-600/20 border border-red-600/40 rounded-full px-4 py-1.5 mb-6">
                <svg class="w-4 h-4 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
                </svg>
                <span class="text-sm font-body text-red-300">Healthcare sector</span>
            </div>
            <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-5">
                Healthcare Laundry Systems You Can Rely On
            </h1>
            <p class="font-body text-blue-200 text-xl mb-4 font-semibold">Uptime, hygiene and governance — without the noise.</p>
            <p class="font-body text-gray-300 text-lg leading-relaxed mb-8 max-w-2xl">
                Laundry in healthcare environments is not an optional service. ILS understands the clinical governance expectations, hygiene standards and operational pressures that healthcare facilities operate under — and we structure our support accordingly.
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

<!-- HSE SUPPORT NOTE -->
<section class="py-10 bg-white border-b border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-blue-50 border border-blue-200 rounded-xl p-5 lg:p-6 flex items-start gap-4">
            <svg class="w-6 h-6 text-steel flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/>
            </svg>
            <div>
                <p class="font-body text-steel text-base leading-relaxed">
                    <strong class="font-semibold">HSE and healthcare group operators:</strong> ILS has experience working with HSE sites and healthcare group procurement arrangements across the Republic of Ireland. If you have specific procurement or governance requirements, please mention this when you contact us and we will address them directly in our proposal.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- PAIN POINTS -->
<section class="py-16 lg:py-24 bg-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-6">What Healthcare Operators Tell Us</h2>
                <p class="font-body text-gray-600 leading-relaxed mb-6">
                    When facilities managers in healthcare come to ILS, they're typically dealing with one or more of these challenges:
                </p>
                <ul class="space-y-4">
                    @foreach ([
                        'A breakdown during a busy period that disrupted ward linen or patient laundry workflow',
                        'A service provider that wasn\'t responsive enough or didn\'t understand the urgency of healthcare operations',
                        'No documented maintenance history to support audit or compliance review',
                        'Aging equipment that is generating increasing reactive repair costs',
                        'Multi-site contracts that are difficult to manage or inconsistently delivered',
                        'Lack of clarity about what is covered and what is not under existing arrangements',
                    ] as $item)
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/>
                        </svg>
                        <span class="font-body text-gray-700 text-sm leading-relaxed">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-6">Why Uptime Matters in Healthcare</h2>
                <p class="font-body text-gray-600 leading-relaxed mb-4">
                    In a hospital, nursing home or care facility, laundry is a hygiene-critical function. Patient linen, theatre textiles and staff uniforms must move through the laundry cycle reliably and to the required standard.
                </p>
                <p class="font-body text-gray-600 leading-relaxed mb-4">
                    Equipment failure directly affects infection control workflows, patient dignity and — in some settings — regulatory compliance. This is not a sector where "we'll get to it next week" is acceptable.
                </p>
                <p class="font-body text-gray-600 leading-relaxed">
                    ILS structures our healthcare support — particularly at Priority and Assured tier — around the operational reality that laundry downtime in these environments carries real risk.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- HOW ILS SUPPORTS HEALTHCARE -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-4">How ILS Supports Healthcare Operations</h2>
            <p class="font-body text-gray-600 text-lg max-w-2xl mx-auto">Our services mapped to the specific demands of healthcare laundry.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ([
                ['Service Contracts', 'Scheduled preventive maintenance with documented service reports. Three tiers: Core, Priority and Assured — matched to your risk profile and operational dependency.', 'service-contracts', 'bg-blue-100 text-steel'],
                ['Compliance Documentation', 'Written service records and maintenance logs for every visit — supporting audit, inspection and governance processes.', 'service-contracts', 'bg-green-100 text-green-700'],
                ['Priority Response', 'Healthcare operations at Priority and Assured tiers receive priority triage and dispatch for reactive call-outs. We aim to be on-site within 24 hours (subject to location and parts availability).', 'repairs', 'bg-red-100 text-red-700'],
                ['Multi-Site Contracts', 'Group service contracts covering multiple hospital or care sites under a single arrangement — with consistent standards and reporting.', 'contact', 'bg-purple-100 text-purple-700'],
                ['Genuine Parts', 'As an Authorised Electrolux Professional Partner, we have access to genuine OEM parts — important for equipment reliability and warranty purposes.', 'electrolux', 'bg-orange-100 text-orange'],
                ['Barrier Washer Support', 'Specialist knowledge of barrier washer operation and maintenance — critical in healthcare environments for sluice and infection control workflows.', 'equipment', 'bg-navy/10 text-navy'],
            ] as [$title, $desc, $link, $iconClass])
            <div class="bg-bg border border-border rounded-xl p-6">
                <div class="w-10 h-10 rounded-lg {{ $iconClass }} flex items-center justify-center mb-4">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">{{ $title }}</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- FAQs -->
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
        'answer' => 'We aim to be on-site within 24 hours for reported breakdowns (subject to location and parts availability). Healthcare customers at Priority and Assured tiers receive priority triage and dispatch — meaning they are at the front of the scheduling queue when a call-out is logged.',
    ],
];
@endphp
@include('components.faq', ['faqs' => $faqs, 'heading' => 'Healthcare Laundry FAQs'])

<!-- CTA BAND -->
@include('components.cta-band', [
    'heading' => 'Supporting healthcare laundry since 1987',
    'subheading' => 'Request a service assessment and we will propose the right contract structure for your operation.',
    'primaryText' => 'Request a Service Assessment',
])

@endsection
