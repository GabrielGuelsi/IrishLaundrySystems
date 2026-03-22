<footer class="bg-navy text-white">
    <!-- Testimonial strip -->
    <div class="bg-navy-dark border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <blockquote class="text-center">
                <p class="font-body text-gray-300 text-base italic leading-relaxed max-w-2xl mx-auto">
                    &ldquo;Reliable, clear communication and practical engineering support. They understand the pressure of healthcare operations and respond accordingly.&rdquo;
                </p>
                <cite class="block mt-2 text-sm text-steel-light font-body not-italic">— Operations Manager, Healthcare Group, Republic of Ireland</cite>
            </blockquote>
        </div>
    </div>

    <!-- Main footer grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">

            <!-- Col 1: Brand -->
            <div class="lg:col-span-1">
                <div class="mb-4">
                    <span class="font-heading font-bold text-white text-xl">Irish Laundry Systems</span>
                    <span class="block text-steel-light text-sm font-body mt-0.5">Commercial Laundry Engineering</span>
                </div>
                <div class="space-y-2 text-sm font-body text-gray-400 mb-5">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-orange flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Established 1987
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-orange flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Ireland-wide coverage (ROI)
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-orange flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Authorised Electrolux Professional Partner
                    </div>
                </div>
                <!-- Trust badge -->
                <div class="inline-flex items-center gap-2 bg-navy-light border border-white/20 rounded-lg px-3 py-2">
                    <svg class="w-5 h-5 text-orange flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                    </svg>
                    <span class="text-xs font-body text-gray-300">Electrolux Professional Partner</span>
                </div>

                <p class="mt-4 text-xs text-gray-500 font-body leading-relaxed">
                    We aim to be on-site within 24 hours (subject to location and parts availability).
                </p>
            </div>

            <!-- Col 2: Services -->
            <div>
                <h3 class="font-heading font-semibold text-white text-sm uppercase tracking-wider mb-4">Services</h3>
                <ul class="space-y-2.5 font-body text-sm">
                    <li><a href="{{ route('service-contracts') }}" class="text-gray-400 hover:text-white transition-colors">Service Contracts</a></li>
                    <li><a href="{{ route('repairs') }}" class="text-gray-400 hover:text-white transition-colors">Repairs &amp; Call-outs</a></li>
                    <li><a href="{{ route('rental') }}" class="text-gray-400 hover:text-white transition-colors">Equipment Rental</a></li>
                    <li><a href="{{ route('equipment') }}" class="text-gray-400 hover:text-white transition-colors">Equipment Sales</a></li>
                    <li><a href="{{ route('solutions') }}" class="text-gray-400 hover:text-white transition-colors">Solutions Hub</a></li>
                    <li><a href="{{ route('electrolux') }}" class="text-gray-400 hover:text-white transition-colors">Electrolux Partnership</a></li>
                </ul>
            </div>

            <!-- Col 3: Sectors -->
            <div>
                <h3 class="font-heading font-semibold text-white text-sm uppercase tracking-wider mb-4">Sectors</h3>
                <ul class="space-y-2.5 font-body text-sm">
                    <li><a href="{{ route('sectors.healthcare') }}" class="text-gray-400 hover:text-white transition-colors">Healthcare</a></li>
                    <li><a href="{{ route('sectors.hospitality') }}" class="text-gray-400 hover:text-white transition-colors">Hospitality</a></li>
                    <li><a href="{{ route('sectors.care') }}" class="text-gray-400 hover:text-white transition-colors">Care Facilities</a></li>
                    <li><a href="{{ route('sectors.commercial') }}" class="text-gray-400 hover:text-white transition-colors">Commercial &amp; Industrial</a></li>
                    <li><a href="{{ route('sectors') }}" class="text-gray-400 hover:text-white transition-colors">All Sectors</a></li>
                </ul>
            </div>

            <!-- Col 4: Company + Response -->
            <div>
                <h3 class="font-heading font-semibold text-white text-sm uppercase tracking-wider mb-4">Company</h3>
                <ul class="space-y-2.5 font-body text-sm mb-6">
                    <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white transition-colors">About ILS</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white transition-colors">Contact Us</a></li>
                    <li><a href="{{ route('resources') }}" class="text-gray-400 hover:text-white transition-colors">Resources</a></li>
                    <li><a href="{{ route('brand-protection') }}" class="text-gray-400 hover:text-white transition-colors">Brand Protection</a></li>
                    <li><a href="{{ route('request-assessment') }}" class="text-gray-400 hover:text-white transition-colors">Request Assessment</a></li>
                </ul>

                <!-- Response statement -->
                <div class="bg-navy-light border border-white/10 rounded-lg p-3">
                    <div class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-orange flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <p class="text-xs text-gray-400 font-body leading-relaxed">
                            We aim to be on-site within 24 hours (subject to location and parts availability). Republic of Ireland only.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom bar -->
    <div class="border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5 flex flex-col sm:flex-row items-center justify-between gap-3">
            <p class="text-sm text-gray-500 font-body">
                &copy; {{ date('Y') }} Irish Laundry Systems. All rights reserved.
            </p>
            <div class="flex items-center gap-4">
                <a href="#" class="text-sm text-gray-500 hover:text-gray-300 font-body transition-colors">Privacy Policy</a>
                <span class="text-gray-700">|</span>
                <a href="#" class="text-sm text-gray-500 hover:text-gray-300 font-body transition-colors">Cookie Policy</a>
                <span class="text-gray-700">|</span>
                <a href="{{ route('brand-protection') }}" class="text-sm text-gray-500 hover:text-gray-300 font-body transition-colors">Official Site</a>
            </div>
        </div>
    </div>
</footer>
