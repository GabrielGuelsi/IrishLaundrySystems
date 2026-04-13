<footer class="bg-navy-dark text-white">

    <!-- Proof slot: testimonial + logo strip -->
    <div class="border-b border-white/10">
        <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-10">

            <!-- Testimonial -->
            <blockquote class="text-center max-w-2xl mx-auto mb-8">
                <p class="font-body text-gray-300 text-base italic leading-relaxed">
                    &ldquo;Reliable, clear communication and practical engineering support. They understand the pressure of healthcare operations and respond accordingly.&rdquo;
                </p>
                <cite class="block mt-3 text-sm text-steel-light font-body not-italic">— Operations Manager, Healthcare Group, Republic of Ireland</cite>
            </blockquote>

            <!-- Logo strip -->
            <div class="flex flex-wrap items-center justify-center gap-28">
                <img src="/images/logo/HSE-Logo-Green-NEW-no-background.png" alt="HSE" class="h-8 object-contain brightness-0 invert opacity-60">
                <img src="/images/healthcare/stvincent.png" alt="St. Vincent's Healthcare" class="h-8 object-contain brightness-0 invert opacity-60">
                <img src="/images/healthcare/stjameshospital.png" alt="St James's Hospital" class="h-8 object-contain brightness-0 invert opacity-60">
                <img src="/images/healthcare/TheMaterhospital.png" alt="The Mater Hospital" class="h-8 object-contain brightness-0 invert opacity-60">
                <img src="/images/healthcare/maryfieldlogo.png" alt="Maryfield Nursing Home" class="h-8 object-contain brightness-0 invert opacity-60">
            </div>
        </div>
    </div>

    <!-- Main footer -->
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 lg:gap-16">

            <!-- Trust block -->
            <div>
                <img src="/images/logo/ILS-LOGO-HORIZONTAL-WHITE.svg"
                     alt="Irish Laundry Systems"
                     class="h-10 w-auto mb-5"
                     onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
                <span style="display:none" class="font-heading font-bold text-white text-xl tracking-tight block mb-5">Irish Laundry Systems</span>

                <ul class="space-y-2.5 text-sm font-body text-gray-400">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-orange flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Since 1987 — 30+ years experience
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-orange flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Service coverage across the Republic of Ireland (excluding Northern Ireland)
                    </li>
                </ul>

                <!-- Electrolux badge -->
                <div class="inline-flex items-center gap-2 bg-white/5 border border-white/10 rounded-lg px-3 py-2 mt-5">
                    <svg class="w-4 h-4 text-orange flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75l2.25 2.25L15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                    </svg>
                    <span class="text-xs font-body text-gray-300">Electrolux Professional Partner</span>
                </div>
            </div>

            <!-- Quick links -->
            <div>
                <h3 class="font-heading font-semibold text-white text-xs uppercase tracking-widest mb-5 pb-2 border-b border-white/10">Quick Links</h3>
                <ul class="space-y-3 font-body text-sm">
                    <li><a href="{{ route('service-contracts') }}" class="text-gray-400 hover:text-white transition-colors">Service Contracts</a></li>
                    <li><a href="{{ route('repairs') }}" class="text-gray-400 hover:text-white transition-colors">Repairs &amp; Call-outs</a></li>
                    <li><a href="{{ route('rental') }}" class="text-gray-400 hover:text-white transition-colors">Rental</a></li>
                    <li><a href="{{ route('equipment') }}" class="text-gray-400 hover:text-white transition-colors">Equipment</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                </ul>
            </div>

            <!-- CTA -->
            <div>
                <h3 class="font-heading font-semibold text-white text-xs uppercase tracking-widest mb-5 pb-2 border-b border-white/10">Need a fast response?</h3>
                <p class="text-sm font-body text-gray-400 mb-5 leading-relaxed">We aim to be on-site within 24 hours (subject to location and parts availability).</p>
                <a href="{{ route('request-assessment') }}"
                   class="inline-flex items-center gap-2 bg-orange hover:bg-orange-dark text-white font-heading font-semibold text-sm px-5 py-3 rounded-lg transition-colors"
                   data-ga-cta="footer_request_assessment">
                    Request a Service Assessment
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>

    <!-- Legal bar -->
    <div class="border-t border-white/10 bg-black/20">
        <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-4 flex flex-col sm:flex-row items-center justify-between gap-3">
            <p class="text-xs text-gray-600 font-body">
                &copy; {{ date('Y') }} Irish Laundry Systems Ltd. All rights reserved.
            </p>
            <div class="flex items-center gap-5">
                <a href="#" class="text-xs text-gray-600 hover:text-gray-400 font-body transition-colors">Privacy Policy</a>
                <a href="#" class="text-xs text-gray-600 hover:text-gray-400 font-body transition-colors">Cookie Policy</a>
            </div>
        </div>
    </div>

</footer>
