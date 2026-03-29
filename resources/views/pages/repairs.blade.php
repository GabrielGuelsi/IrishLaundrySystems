@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="bg-navy py-20 lg:py-28 relative overflow-hidden">
    <!-- Urgency accent line -->
    <div class="absolute top-0 left-0 right-0 h-1 bg-orange"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 bg-orange/20 border border-orange/40 rounded-full px-4 py-1.5 mb-6">
                <svg class="w-4 h-4 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/>
                </svg>
                <span class="text-sm font-body text-orange font-semibold">Breakdown? Call us now</span>
            </div>
            <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-5">
                Repairs and Call-outs When Breakdowns Happen
            </h1>
            <p class="font-body text-blue-200 text-xl mb-4 font-semibold">Experienced engineers. Genuine parts. Clear communication.</p>
            <p class="font-body text-gray-300 text-lg leading-relaxed mb-8 max-w-2xl">
                When commercial laundry equipment fails, you need engineers who know the equipment, carry the right parts and can communicate clearly about what they've found and what comes next. ILS provides reactive repair and call-out support across the Republic of Ireland.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 cursor-pointer">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    Request a Call-Out
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

<!-- PROOF BAR -->
@include('components.proof-bar')

<!-- RESPONSE STATEMENT -->
<section class="py-8 bg-orange">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <svg class="w-8 h-8 text-white flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <div>
                    <div class="font-heading font-bold text-white text-lg">We aim to be on-site within 24 hours</div>
                    <div class="text-orange-100 text-sm font-body">Subject to location and parts availability. Contract customers receive priority scheduling.</div>
                </div>
            </div>
            <a href="tel:+353000000000" class="flex-shrink-0 bg-white text-orange font-body font-bold px-6 py-3 rounded-lg text-sm hover:bg-orange-50 transition-colors cursor-pointer">
                Call Now
            </a>
        </div>
    </div>
</section>

<!-- WHAT TO EXPECT -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-4">What to Expect from an ILS Call-Out</h2>
            <p class="font-body text-gray-600 text-lg max-w-2xl mx-auto">A clear, professional process — from your first call to the job being resolved.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @php $steps = [
                ['1', 'Contact Us', 'Call our engineer line or submit a repair request online. Tell us the machine type, fault symptoms and your location. We triage from there.', 'text-orange'],
                ['2', 'Engineer Dispatch', 'We schedule the nearest available engineer and confirm an estimated arrival window. Contract customers receive priority triage.', 'text-orange'],
                ['3', 'On-Site Diagnosis', 'Our engineer diagnoses the fault and advises on repair options — clearly, without technical jargon. If parts are needed, we confirm availability.', 'text-orange'],
                ['4', 'Repair & Report', 'Repair is completed where possible on the first visit. A service report is provided. If further work is needed, we agree the next steps with you.', 'text-orange'],
            ]; @endphp
            @foreach ($steps as [$num, $title, $body, $color])
            <div class="bg-bg border border-border rounded-xl p-6">
                <div class="w-10 h-10 rounded-full bg-navy flex items-center justify-center mb-4 text-white font-heading font-bold">{{ $num }}</div>
                <h3 class="font-heading font-semibold text-navy text-base mb-2">{{ $title }}</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">{{ $body }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CONTRACT UPSELL -->
<section class="py-16 lg:py-20 bg-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-navy rounded-2xl p-8 lg:p-12 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <div>
                <div class="inline-flex items-center gap-2 bg-orange/20 border border-orange/30 rounded-full px-3 py-1 mb-5">
                    <svg class="w-4 h-4 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="text-xs text-orange font-body font-semibold">Reduce reactive costs</span>
                </div>
                <h2 class="font-heading font-bold text-white text-2xl lg:text-3xl mb-4">Already dealing with repeat breakdowns?</h2>
                <p class="font-body text-gray-300 leading-relaxed mb-4">
                    Reactive call-outs are more expensive than planned maintenance. If you're regularly paying for emergency repairs, a service contract may cost less — while also reducing the frequency and impact of failures.
                </p>
                <p class="font-body text-gray-400 text-sm leading-relaxed">
                    Contract customers also receive preferential call-out rates and priority scheduling — meaning faster response when breakdowns do occur.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row lg:flex-col gap-4">
                <a href="{{ route('service-contracts') }}"
                   class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-semibold px-6 py-3 rounded-lg text-sm transition-colors cursor-pointer">
                    View Service Contracts
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
                <a href="{{ route('request-assessment') }}"
                   class="inline-flex items-center justify-center gap-2 border-2 border-white/30 hover:border-white text-white font-body font-semibold px-6 py-3 rounded-lg text-sm transition-colors cursor-pointer hover:bg-white/10">
                    Request Assessment
                </a>
            </div>
        </div>
    </div>
</section>

<!-- FAQs -->
@php
$faqs = [
    [
        'question' => 'Do you repair all brands of commercial laundry equipment?',
        'answer' => 'We work with a range of commercial laundry brands. As an Authorised Electrolux Professional Partner, we have particular expertise in the Electrolux Professional range. For other brands, please contact us to confirm we can support your specific equipment.',
    ],
    [
        'question' => 'What information do I need when I call about a breakdown?',
        'answer' => 'If possible, have the machine make, model and serial number to hand, along with a description of the fault — error codes, unusual sounds, what the machine is or isn\'t doing. This helps us triage efficiently and advise on likely parts needed before arriving.',
    ],
    [
        'question' => 'Can you repair equipment you didn\'t supply?',
        'answer' => 'Yes, in most cases. Our engineers work on a range of commercially available laundry equipment. Where parts availability may affect turnaround, we\'ll advise before proceeding.',
    ],
    [
        'question' => 'Is there a call-out charge?',
        'answer' => 'Standard call-out charges apply. Contract customers at Priority and Assured tiers benefit from preferential call-out rates. Please contact us for current rate information for your specific situation.',
    ],
];
@endphp
@include('components.faq', ['faqs' => $faqs, 'heading' => 'Repairs &amp; Call-out FAQs'])

<!-- CTA BAND -->
@include('components.cta-band', [
    'heading' => 'Need an engineer today?',
    'subheading' => 'Call us directly or submit a repair request. We aim to be on-site within 24 hours (subject to location and parts availability).',
    'primaryText' => 'Request a Call-Out',
    'primaryHref' => '/contact',
    'secondaryText' => 'Talk to an Engineer',
    'secondaryHref' => 'tel:+353000000000',
])

@endsection
