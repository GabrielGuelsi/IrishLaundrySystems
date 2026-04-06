@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="bg-navy py-20 lg:py-28">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-1.5 mb-6">
                <svg class="w-4 h-4 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                </svg>
                <span class="text-sm font-body text-white">Outcomes-first engineering</span>
            </div>
            <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-6">
                Outcomes-First Solutions for Critical Laundry Operations
            </h1>
            <p class="font-body text-white text-xl mb-4 font-semibold leading-relaxed">
                Structured, engineered and delivered around your operational requirements.
            </p>
            <p class="font-body text-white text-lg leading-relaxed mb-8 max-w-2xl">
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
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="text-center mb-12">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-4">What Operators Are Looking For</h2>
            <p class="font-body text-gray-600 text-lg max-w-2xl mx-auto">The outcomes that matter in critical laundry operations — and how ILS is structured to deliver them.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white border border-border rounded-2xl p-6 shadow-card">
                <div class="w-11 h-11 rounded-lg bg-green-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2">Predictable Uptime</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">Planned maintenance reduces unplanned stoppages. Service contracts give operations managers confidence in continuity.</p>
            </div>
            <div class="bg-white border border-border rounded-2xl p-6 shadow-card">
                <div class="w-11 h-11 rounded-lg bg-blue-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-steel" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2">Controlled Costs</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">Structured contracts and rental arrangements reduce unpredictable spend. Preferential parts and labour rates for contract customers.</p>
            </div>
            <div class="bg-white border border-border rounded-2xl p-6 shadow-card">
                <div class="w-11 h-11 rounded-lg bg-orange-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"/>
                    </svg>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2">Compliance Confidence</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">Documented maintenance records, service logs and compliance support for regulated environments including healthcare and care facilities.</p>
            </div>
            <div class="bg-white border border-border rounded-2xl p-6 shadow-card">
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

<!-- THREE PATHWAYS — stacked image cards -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <h2 class="font-heading font-bold text-navy text-3xl lg:text-5xl leading-tight mb-10 max-w-2xl">
            Three clear routes into<br>
            <span class="font-heading font-bold">the main commercial pathways.</span>
        </h2>

        <div class="space-y-5">

            <!-- Card 1: Equipment Supply — icon right -->
            <a href="{{ route('equipment') }}"
               class="group relative flex items-center overflow-hidden rounded-2xl min-h-[220px] lg:min-h-[240px]"
               style="background-image: url('/images/about/about-equipment.jpg'); background-size: cover; background-position: center;">
                <div class="absolute inset-0 bg-navy/80 group-hover:bg-navy/75 transition-colors duration-300"></div>
                <div class="relative z-10 flex items-center justify-between w-full px-8 lg:px-12 py-10 gap-8">
                    <div class="max-w-xl">
                        <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl mb-3">Equipment Supply</h3>
                        <p class="font-body text-white text-sm lg:text-base leading-relaxed">
                            Structured supply of commercial laundry equipment aligned with operational requirements. Selection considers capacity, workflow integration and long-term reliability.
                        </p>
                    </div>
                    <div class="flex-shrink-0 w-16 h-16 lg:w-20 lg:h-20 rounded-xl bg-navy flex items-center justify-center border border-white/20">
                        <svg class="w-8 h-8 lg:w-10 lg:h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 010 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.992l-1.004-.827a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Card 2: Service Contracts — icon left -->
            <a href="{{ route('service-contracts') }}"
               class="group relative flex items-center overflow-hidden rounded-2xl min-h-[220px] lg:min-h-[240px]"
               style="background-image: url('/images/about/about-engineers.jpg'); background-size: cover; background-position: center;">
                <div class="absolute inset-0 bg-navy/80 group-hover:bg-navy/75 transition-colors duration-300"></div>
                <div class="relative z-10 flex items-center justify-between w-full px-8 lg:px-12 py-10 gap-8">
                    <div class="flex-shrink-0 w-16 h-16 lg:w-20 lg:h-20 rounded-xl bg-navy flex items-center justify-center border border-white/20">
                        <svg class="w-8 h-8 lg:w-10 lg:h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25z"/>
                        </svg>
                    </div>
                    <div class="max-w-xl text-right">
                        <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl mb-3">Service Contracts</h3>
                        <p class="font-body text-white text-sm lg:text-base leading-relaxed">
                            Planned maintenance and priority response structured to your operation's risk profile. Three tiers — Core, Priority and Assured — with documented service records for audit and compliance.
                        </p>
                    </div>
                </div>
            </a>

            <!-- Card 3: Equipment Rental — icon right -->
            <a href="{{ route('rental') }}"
               class="group relative flex items-center overflow-hidden rounded-2xl min-h-[220px] lg:min-h-[240px]"
               style="background-image: url('/images/about/about-team.jpg'); background-size: cover; background-position: center;">
                <div class="absolute inset-0 bg-navy/80 group-hover:bg-navy/75 transition-colors duration-300"></div>
                <div class="relative z-10 flex items-center justify-between w-full px-8 lg:px-12 py-10 gap-8">
                    <div class="max-w-xl">
                        <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl mb-3">Equipment Rental</h3>
                        <p class="font-body text-white text-sm lg:text-base leading-relaxed">
                            Commercial laundry equipment on a structured rental arrangement — inclusive of maintenance and engineering support. Predictable monthly cost with no capital outlay.
                        </p>
                    </div>
                    <div class="flex-shrink-0 w-16 h-16 lg:w-20 lg:h-20 rounded-xl bg-navy flex items-center justify-center border border-white/20">
                        <svg class="w-8 h-8 lg:w-10 lg:h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/>
                        </svg>
                    </div>
                </div>
            </a>

        </div>
    </div>
</section>

<!-- PROOF MODULE -->
<section class="py-16 lg:py-20 bg-steel text-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            <div>
                <div class="font-heading font-bold text-white text-4xl mb-1">30+</div>
                <div class="font-body text-white text-sm">Years in the market</div>
            </div>
            <div>
                <div class="font-heading font-bold text-white text-4xl mb-1">ROI</div>
                <div class="font-body text-white text-sm">Nationwide coverage</div>
            </div>
            <div>
                <div class="font-heading font-bold text-white text-4xl mb-1">4</div>
                <div class="font-body text-white text-sm">Sectors supported</div>
            </div>
            <div>
                <div class="font-heading font-bold text-white text-4xl mb-1">3</div>
                <div class="font-body text-white text-sm">Contract tiers available</div>
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
