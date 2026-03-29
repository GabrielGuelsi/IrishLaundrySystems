@extends('layouts.app')

@section('pageTitle', 'Commercial & Industrial Laundry Equipment Service | Irish Laundry Systems')
@section('metaDescription', 'Prevent throughput loss with engineered preventive maintenance and a structured response model.')

@section('content')

@include('components.sector-tabs')

<!-- HERO -->
<section class="bg-navy py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <div class="flex items-center gap-2 mb-4">
                <a href="{{ route('sectors') }}" class="text-gray-400 hover:text-gray-200 text-sm font-body transition-colors">Sectors</a>
                <svg class="w-3 h-3 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                <span class="text-gray-300 text-sm font-body">Commercial &amp; Industrial</span>
            </div>
            <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-5">
                Commercial Laundry Uptime for High-Throughput Sites
            </h1>
            <p class="font-body text-blue-200 text-xl mb-4 font-semibold">Reduce stoppages. Protect throughput. Control lifecycle cost with an engineering-led service model.</p>
            <p class="font-body text-gray-300 text-lg leading-relaxed mb-8 max-w-2xl">
                Commercial laundries and industrial operators run under different pressures to other sectors. Volume throughput, machine utilisation rates and lifecycle cost are the primary concerns. ILS provides engineering support structured around maximising availability.
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
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">
            <div>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-6">Engineering for Commercial Operations</h2>
                <p class="font-body text-gray-600 leading-relaxed mb-5">
                    Commercial laundry operations demand high machine utilisation and minimal unplanned downtime. A single machine failure on a busy production day can create a backlog that takes hours to recover from.
                </p>
                <p class="font-body text-gray-600 leading-relaxed mb-5">
                    ILS works with commercial operators to put structured preventive maintenance in place, reducing failure frequency and enabling better planning around machine availability.
                </p>
                <p class="font-body text-gray-600 leading-relaxed mb-6">
                    Where failures do occur, our reactive call-out service targets on-site attendance within 24 hours — with the parts availability to complete first-visit repairs wherever possible.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="bg-white border border-border rounded-xl p-4 text-center">
                        <div class="font-heading font-bold text-navy text-2xl mb-1">30+</div>
                        <div class="text-xs font-body text-gray-500">Years experience</div>
                    </div>
                    <div class="bg-white border border-border rounded-xl p-4 text-center">
                        <div class="font-heading font-bold text-navy text-2xl mb-1">ROI</div>
                        <div class="text-xs font-body text-gray-500">Nationwide coverage</div>
                    </div>
                    <div class="bg-white border border-border rounded-xl p-4 text-center">
                        <div class="font-heading font-bold text-navy text-2xl mb-1">3</div>
                        <div class="text-xs font-body text-gray-500">Contract tiers</div>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="font-heading font-bold text-navy text-2xl mb-5">What We Offer Commercial Operators</h2>
                <div class="space-y-4">
                    @foreach ([
                        ['Service Contracts', 'Structured preventive maintenance across three tiers. Reduces failure frequency and gives you documented maintenance history for each machine.'],
                        ['Reactive Repairs', 'Call-out and repair service for commercial laundry equipment across the Republic of Ireland. Fast triage, experienced engineers, genuine parts.'],
                        ['Equipment Supply', 'Commercial laundry equipment from the Electrolux Professional range — supplied, installed and commissioned. Spec advice available.'],
                        ['Lifecycle Support', 'As equipment ages, we help you plan maintenance investment versus replacement cost — reducing total cost of ownership over time.'],
                    ] as [$title, $desc])
                    <div class="bg-white border border-border rounded-xl p-5">
                        <h3 class="font-heading font-semibold text-navy text-base mb-2">{{ $title }}</h3>
                        <p class="font-body text-gray-600 text-sm leading-relaxed">{{ $desc }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA BAND -->
@include('components.cta-band', [
    'heading' => 'Engineering support built around throughput',
    'subheading' => 'Request a service assessment and we will propose the right maintenance structure for your commercial operation.',
    'primaryText' => 'Request a Service Assessment',
])

@endsection
