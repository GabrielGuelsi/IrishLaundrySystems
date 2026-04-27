@extends('layouts.app')

@section('pageTitle', 'Service Contracts Built Around Uptime | Irish Laundry Systems')
@section('metaDescription', 'Prevent downtime risk. Improve predictability. We confirm scope and commitments per agreement.')

@section('content')

<!-- HERO -->
<section class="bg-navy py-20 lg:py-28">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-1.5 mb-6">
                <svg class="w-4 h-4 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"/>
                </svg>
                <span class="text-sm font-body text-gray-200">Planned maintenance &amp; structured support</span>
            </div>
            <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-5">
                Service Contracts Built Around Uptime
            </h1>
            <p class="font-body text-blue-200 text-xl mb-4 font-semibold">Prevent downtime risk. Improve predictability. Keep operations controlled.</p>
            <p class="font-body text-gray-300 text-lg leading-relaxed mb-8 max-w-2xl">
                A structured ILS service contract puts planned maintenance in place before problems occur. You get scheduled visits, documented service history, remote support and — depending on your tier — priority response when you need it most.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('request-assessment') }}"
                   class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 cursor-pointer">
                    Request Contract Review
                </a>
                <a href="tel:+353000000000"
                   class="inline-flex items-center justify-center gap-2 border-2 border-white/40 hover:border-white text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 cursor-pointer hover:bg-white/10">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                    </svg>
                    Talk to an Engineer
                </a>
            </div>
        </div>
    </div>
</section>

<!-- PARTNER STRIP + PROOF BAR -->
@include('components.partner-strip')
@include('components.proof-bar')

<!-- WHAT'S INCLUDED -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">
            <div>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-6">What's Included in a Service Contract</h2>
                <p class="font-body text-gray-600 leading-relaxed mb-8">
                    All ILS service contracts include a core set of structured support elements. Higher tiers add additional layers of priority, documentation and escalation support.
                </p>
                <ul class="space-y-4">
                    @foreach ([
                        ['Scheduled preventive maintenance visits', 'Regular planned visits to inspect, clean and service your laundry equipment — reducing the likelihood of unplanned breakdowns.'],
                        ['Service reporting', 'Written service records for every visit, giving you a documented maintenance history for compliance and governance purposes.'],
                        ['Remote support and phone triage', 'Access to ILS engineers by phone for troubleshooting guidance before dispatching on-site.'],
                        ['Preferential call-out rates', 'Contract customers receive preferential labour rates for reactive call-outs — helping control unexpected costs.'],
                    ] as [$title, $desc])
                    <li class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-8 h-8 rounded-full bg-green-100 flex items-center justify-center mt-0.5">
                            <svg class="w-4 h-4 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                            </svg>
                        </div>
                        <div>
                            <div class="font-heading font-semibold text-navy text-base mb-1">{{ $title }}</div>
                            <p class="font-body text-gray-600 text-sm leading-relaxed">{{ $desc }}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <div class="bg-bg border border-border rounded-2xl p-6 lg:p-8 mb-6">
                    <h3 class="font-heading font-bold text-navy text-lg mb-4">How Preventive Visits Work</h3>
                    <p class="font-body text-gray-600 text-sm leading-relaxed mb-4">
                        At each scheduled visit, our engineers will inspect all contracted equipment, carry out cleaning and lubrication tasks, check safety features, identify wear and replace consumable parts where appropriate.
                    </p>
                    <p class="font-body text-gray-600 text-sm leading-relaxed mb-4">
                        A service report is completed on-site and provided to your facilities or operations manager. This forms part of your ongoing service record.
                    </p>
                    <p class="font-body text-gray-600 text-sm leading-relaxed">
                        Visit frequency is agreed at the start of the contract and is based on your equipment type, usage profile and selected tier.
                    </p>
                </div>
                <div class="bg-amber-50 border border-amber-200 rounded-2xl p-5">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-amber-600 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/>
                        </svg>
                        <div>
                            <div class="font-heading font-semibold text-amber-800 text-sm mb-1">What's Not Included</div>
                            <p class="font-body text-amber-700 text-xs leading-relaxed">
                                Service contracts cover planned preventive maintenance and scheduled labour. Parts, major repairs, and damage resulting from misuse or third-party interference are separate to the contract. Your contract document will clearly state what is and is not covered.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- DOWNTIME FRAMING BLOCK -->
<section class="py-14 lg:py-18 bg-navy">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="max-w-3xl mx-auto text-center">
            <p class="text-orange font-body font-semibold text-sm uppercase tracking-widest mb-4">Operational Risk Management</p>
            <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl mb-5 leading-tight">
                Designed to Reduce Downtime Risk in Critical Laundry Operations
            </h2>
            <p class="font-body text-blue-200 text-lg leading-relaxed">
                Unplanned breakdowns in healthcare, care and regulated environments don't just cost money — they create operational pressure, compliance risk and reputational exposure. A structured service contract puts the engineering infrastructure in place before problems occur.
            </p>
        </div>
    </div>
</section>

<!-- PACKAGES -->
@include('components.packages')

<!-- HOW IT WORKS -->
<section class="py-16 lg:py-24 bg-navy">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="text-center mb-12">
            <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl mb-4">Getting a Contract in Place</h2>
            <p class="font-body text-blue-200 text-lg max-w-xl mx-auto">Three steps from first contact to service contract active.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="w-14 h-14 rounded-full bg-orange flex items-center justify-center mx-auto mb-5 text-white font-heading font-bold text-xl">1</div>
                <h3 class="font-heading font-semibold text-white text-lg mb-3">Tell Us About Your Equipment</h3>
                <p class="font-body text-gray-300 text-sm leading-relaxed">Submit an assessment request or call us. Tell us your equipment types, site count and any existing service arrangements.</p>
            </div>
            <div class="text-center">
                <div class="w-14 h-14 rounded-full bg-orange flex items-center justify-center mx-auto mb-5 text-white font-heading font-bold text-xl">2</div>
                <h3 class="font-heading font-semibold text-white text-lg mb-3">We Propose a Contract</h3>
                <p class="font-body text-gray-300 text-sm leading-relaxed">We'll recommend the right tier and structure for your operation and provide a written contract proposal. No obligation.</p>
            </div>
            <div class="text-center">
                <div class="w-14 h-14 rounded-full bg-orange flex items-center justify-center mx-auto mb-5 text-white font-heading font-bold text-xl">3</div>
                <h3 class="font-heading font-semibold text-white text-lg mb-3">Contract Activates</h3>
                <p class="font-body text-gray-300 text-sm leading-relaxed">Once agreed, we schedule the first preventive visit, set up service reporting and put your operation under cover.</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQs -->
@php
$faqs = [
    [
        'question' => 'Can I get a contract for multiple sites?',
        'answer' => 'Yes. ILS supports multi-site operations under group service contracts. If you manage a group of healthcare facilities, nursing homes or hotel properties, we can structure a single contract arrangement covering all sites. Contact us to discuss your requirements.',
    ],
    [
        'question' => 'What equipment is covered under a service contract?',
        'answer' => 'Contracts cover the specific equipment agreed at the time of signing — typically washers, dryers, barrier washers, ironers and drying cabinets. Equipment must be assessed before being added to a contract. We\'ll advise during the assessment process.',
    ],
    [
        'question' => 'Can I upgrade my contract tier if my needs change?',
        'answer' => 'Yes. You can review and upgrade your contract tier at any time. If your operation grows or your risk profile changes, we\'ll work with you to adjust the arrangement accordingly.',
    ],
    [
        'question' => 'What\'s the difference between Priority and Assured?',
        'answer' => 'Priority tier adds priority scheduling, genuine parts strategy and compliance documentation support over Core. Assured tier adds out-of-hours escalation, tighter escalation paths and dedicated service reporting — designed for high-dependency operations where laundry continuity is critical.',
    ],
];
@endphp
@include('components.faq', ['faqs' => $faqs, 'heading' => 'Service Contract FAQs'])

<!-- CTA BAND -->
@include('components.cta-band', [
    'heading' => 'Ready to put a contract in place?',
    'subheading' => 'Request a contract review and we will come back with a proposal tailored to your operation. No obligation.',
    'primaryText' => 'Request a Contract Review',
])

@include('components.cta-combined-banner')

@endsection
