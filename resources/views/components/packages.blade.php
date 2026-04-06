<section class="py-16 lg:py-20 bg-bg">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-4">Service Contract Tiers</h2>
            <p class="font-body text-gray-600 text-lg max-w-2xl mx-auto leading-relaxed">
                Three structured tiers — designed to match your operational requirements and risk profile. No hidden extras.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 items-stretch">

            <!-- CORE -->
            <div class="bg-white rounded-2xl border border-border shadow-card flex flex-col">
                <div class="p-6 lg:p-8 border-b border-border">
                    <div class="inline-block bg-muted text-navy text-xs font-heading font-semibold px-3 py-1 rounded-full mb-3 uppercase tracking-wider">Core</div>
                    <h3 class="font-heading font-bold text-navy text-2xl mb-2">Core Cover</h3>
                    <p class="font-body text-gray-600 text-sm leading-relaxed">
                        Structured preventive maintenance and baseline service support for operations with lower throughput or in-house engineering resource.
                    </p>
                </div>
                <div class="p-6 lg:p-8 flex-1">
                    <ul class="space-y-3">
                        @php
                        $coreFeatures = [
                            ['Preventive maintenance visits', true],
                            ['Service reporting', true],
                            ['Remote support / phone triage', true],
                            ['Preferential call-out rates', true],
                            ['Priority triage & dispatch', false],
                            ['Priority scheduling', false],
                            ['Genuine parts strategy', false],
                            ['Compliance documentation support', false],
                            ['Out-of-hours escalation', false],
                            ['Tighter escalation paths', false],
                            ['Dedicated service reporting', false],
                        ];
                        @endphp
                        @foreach ($coreFeatures as [$label, $included])
                        <li class="flex items-start gap-3 text-sm font-body">
                            @if ($included)
                            <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                            </svg>
                            <span class="text-gray-700">{{ $label }}</span>
                            @else
                            <svg class="w-5 h-5 text-gray-300 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                            <span class="text-gray-400">{{ $label }}</span>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="p-6 lg:p-8 pt-0">
                    <a href="{{ route('request-assessment') }}"
                       class="block w-full text-center border-2 border-navy text-navy hover:bg-navy hover:text-white font-body font-semibold px-6 py-3 rounded-lg transition-colors duration-200 cursor-pointer text-sm">
                        Request Contract Review
                    </a>
                </div>
            </div>

            <!-- PRIORITY (highlighted) -->
            <div class="bg-white rounded-2xl border-2 border-navy shadow-card-hover flex flex-col relative">
                <div class="absolute -top-3 left-1/2 -translate-x-1/2">
                    <span class="bg-orange text-white text-xs font-heading font-bold px-4 py-1 rounded-full uppercase tracking-wider shadow">Most Popular</span>
                </div>
                <div class="p-6 lg:p-8 border-b border-border mt-3">
                    <div class="inline-block bg-navy text-white text-xs font-heading font-semibold px-3 py-1 rounded-full mb-3 uppercase tracking-wider">Priority</div>
                    <h3 class="font-heading font-bold text-navy text-2xl mb-2">Priority Cover</h3>
                    <p class="font-body text-gray-600 text-sm leading-relaxed">
                        Enhanced scheduling, parts strategy and compliance support — for operations where laundry continuity is operationally critical.
                    </p>
                </div>
                <div class="p-6 lg:p-8 flex-1">
                    <ul class="space-y-3">
                        @php
                        $priorityFeatures = [
                            ['Preventive maintenance visits', true],
                            ['Service reporting', true],
                            ['Remote support / phone triage', true],
                            ['Preferential call-out rates', true],
                            ['Priority triage & dispatch', true],
                            ['Priority scheduling', true],
                            ['Genuine parts strategy', true],
                            ['Compliance documentation support', true],
                            ['Out-of-hours escalation', false],
                            ['Tighter escalation paths', false],
                            ['Dedicated service reporting', false],
                        ];
                        @endphp
                        @foreach ($priorityFeatures as [$label, $included])
                        <li class="flex items-start gap-3 text-sm font-body">
                            @if ($included)
                            <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                            </svg>
                            <span class="text-gray-700 font-medium">{{ $label }}</span>
                            @else
                            <svg class="w-5 h-5 text-gray-300 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                            <span class="text-gray-400">{{ $label }}</span>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="p-6 lg:p-8 pt-0">
                    <a href="{{ route('request-assessment') }}"
                       class="block w-full text-center bg-navy hover:bg-navy-dark text-white font-body font-semibold px-6 py-3 rounded-lg transition-colors duration-200 cursor-pointer text-sm">
                        Request Contract Review
                    </a>
                </div>
            </div>

            <!-- ASSURED -->
            <div class="bg-white rounded-2xl border border-border shadow-card flex flex-col">
                <div class="p-6 lg:p-8 border-b border-border">
                    <div class="inline-block bg-steel text-white text-xs font-heading font-semibold px-3 py-1 rounded-full mb-3 uppercase tracking-wider">Assured</div>
                    <h3 class="font-heading font-bold text-navy text-2xl mb-2">Assured Cover</h3>
                    <p class="font-body text-gray-600 text-sm leading-relaxed">
                        Our most comprehensive tier — dedicated reporting, out-of-hours escalation and tighter response paths for high-dependency operations.
                    </p>
                </div>
                <div class="p-6 lg:p-8 flex-1">
                    <ul class="space-y-3">
                        @php
                        $assuredFeatures = [
                            ['Preventive maintenance visits', true],
                            ['Service reporting', true],
                            ['Remote support / phone triage', true],
                            ['Preferential call-out rates', true],
                            ['Priority triage & dispatch', true],
                            ['Priority scheduling', true],
                            ['Genuine parts strategy', true],
                            ['Compliance documentation support', true],
                            ['Out-of-hours escalation', true],
                            ['Tighter escalation paths', true],
                            ['Dedicated service reporting', true],
                        ];
                        @endphp
                        @foreach ($assuredFeatures as [$label, $included])
                        <li class="flex items-start gap-3 text-sm font-body">
                            @if ($included)
                            <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                            </svg>
                            <span class="text-gray-700">{{ $label }}</span>
                            @else
                            <svg class="w-5 h-5 text-gray-300 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                            <span class="text-gray-400">{{ $label }}</span>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="p-6 lg:p-8 pt-0">
                    <a href="{{ route('request-assessment') }}"
                       class="block w-full text-center border-2 border-navy text-navy hover:bg-navy hover:text-white font-body font-semibold px-6 py-3 rounded-lg transition-colors duration-200 cursor-pointer text-sm">
                        Request Contract Review
                    </a>
                </div>
            </div>

        </div>

        <!-- No prices note -->
        <p class="text-center mt-8 text-sm text-gray-500 font-body">
            Pricing is tailored to your operation — number of machines, site count, and contract tier. Request a review to get a detailed proposal.
        </p>
    </div>
</section>
