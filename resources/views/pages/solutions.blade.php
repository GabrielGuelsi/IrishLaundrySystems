@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="bg-navy py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-1.5 mb-6">
                <svg class="w-4 h-4 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                </svg>
                <span class="text-sm font-body text-gray-200">Outcomes-first engineering</span>
            </div>
            <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-6">
                Outcomes-First Solutions for Critical Laundry Operations
            </h1>
            <p class="font-body text-blue-200 text-xl mb-4 font-semibold leading-relaxed">
                Structured, engineered and delivered around your operational requirements.
            </p>
            <p class="font-body text-gray-300 text-lg leading-relaxed mb-8 max-w-2xl">
                Irish Laundry Systems doesn't sell products — we deliver service outcomes. Everything we offer is built around keeping commercial laundry operations running with confidence.
            </p>
            <a href="{{ route('request-assessment') }}"
               class="inline-flex items-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-8 py-4 rounded-lg text-base transition-colors duration-200 cursor-pointer">
                Request a Service Assessment
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- PROOF BAR -->
@include('components.proof-bar')

<!-- OUTCOME CARDS -->
<section class="py-16 lg:py-24 bg-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-4">What Operators Are Looking For</h2>
            <p class="font-body text-gray-600 text-lg max-w-2xl mx-auto">The outcomes that matter in critical laundry operations — and how ILS is structured to deliver them.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white border border-border rounded-xl p-6 shadow-card">
                <div class="w-11 h-11 rounded-lg bg-green-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2">Predictable Uptime</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">Planned maintenance reduces unplanned stoppages. Service contracts give operations managers confidence in continuity.</p>
            </div>
            <div class="bg-white border border-border rounded-xl p-6 shadow-card">
                <div class="w-11 h-11 rounded-lg bg-blue-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-steel" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2">Controlled Costs</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">Structured contracts and rental arrangements reduce unpredictable spend. Preferential parts and labour rates for contract customers.</p>
            </div>
            <div class="bg-white border border-border rounded-xl p-6 shadow-card">
                <div class="w-11 h-11 rounded-lg bg-orange-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2">Compliance Confidence</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">Documented maintenance records, service logs and compliance support for regulated environments including healthcare and care facilities.</p>
            </div>
            <div class="bg-white border border-border rounded-xl p-6 shadow-card">
                <div class="w-11 h-11 rounded-lg bg-navy/10 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2">Clear Communication</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">From first call to job completion — engineers who communicate clearly and operations managers who aren't chasing updates.</p>
            </div>
        </div>
    </div>
</section>

<!-- SOLUTION ENGINES -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-4">Three Service Engines</h2>
            <p class="font-body text-gray-600 text-lg max-w-2xl mx-auto">The three core services that underpin every ILS customer relationship.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="border-t-4 border-steel bg-bg rounded-xl p-6 lg:p-8">
                <h3 class="font-heading font-bold text-navy text-xl mb-3">Planned Maintenance</h3>
                <p class="font-body text-gray-600 leading-relaxed mb-5">Structured service contracts with scheduled preventive visits, service reporting and remote support. Three tiers to match your operation's risk profile and requirements.</p>
                <a href="{{ route('service-contracts') }}" class="inline-flex items-center gap-2 text-steel font-body font-semibold text-sm hover:text-navy transition-colors">
                    View contracts <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            <div class="border-t-4 border-orange bg-bg rounded-xl p-6 lg:p-8">
                <h3 class="font-heading font-bold text-navy text-xl mb-3">Reactive Support</h3>
                <p class="font-body text-gray-600 leading-relaxed mb-5">Call-outs and emergency repairs across the Republic of Ireland. Experienced engineers, genuine parts and clear communication — aiming to be on-site within 24 hours (subject to location and parts availability).</p>
                <a href="{{ route('repairs') }}" class="inline-flex items-center gap-2 text-steel font-body font-semibold text-sm hover:text-navy transition-colors">
                    Repairs &amp; call-outs <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            <div class="border-t-4 border-navy bg-bg rounded-xl p-6 lg:p-8">
                <h3 class="font-heading font-bold text-navy text-xl mb-3">Equipment &amp; Rental</h3>
                <p class="font-body text-gray-600 leading-relaxed mb-5">Commercial laundry equipment supplied, installed and supported — including the full Electrolux Professional range. Rental and lease options for managed cost and maintenance.</p>
                <a href="{{ route('equipment') }}" class="inline-flex items-center gap-2 text-steel font-body font-semibold text-sm hover:text-navy transition-colors">
                    Equipment hub <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- PROOF MODULE -->
<section class="py-16 lg:py-20 bg-steel text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            <div>
                <div class="font-heading font-bold text-white text-4xl mb-1">30+</div>
                <div class="font-body text-blue-200 text-sm">Years in the market</div>
            </div>
            <div>
                <div class="font-heading font-bold text-white text-4xl mb-1">ROI</div>
                <div class="font-body text-blue-200 text-sm">Nationwide coverage</div>
            </div>
            <div>
                <div class="font-heading font-bold text-white text-4xl mb-1">4</div>
                <div class="font-body text-blue-200 text-sm">Sectors supported</div>
            </div>
            <div>
                <div class="font-heading font-bold text-white text-4xl mb-1">3</div>
                <div class="font-body text-blue-200 text-sm">Contract tiers available</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA BAND -->
@include('components.cta-band', [
    'heading' => 'Start with the right conversation',
    'subheading' => 'Tell us about your operation and we will recommend the right service structure. No obligation, no pressure.',
])

@endsection
