{{-- Ready to Reduce Downtime Risk — final CTA + short form (shared across all sector pages) --}}
<section class="py-16 lg:py-24 bg-navy">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <div>
                <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl mb-4 leading-tight">
                    Ready to Reduce Downtime Risk?
                </h2>
                <p class="font-body text-blue-200 text-lg leading-relaxed mb-8">
                    Talk to an ILS engineer about service contracts, repairs or equipment. Tell us about your operation and we will confirm the right next step.
                </p>
                <div class="space-y-4">
                    <a href="tel:+353000000000" class="flex items-center gap-3 text-gray-200 hover:text-white transition-colors group">
                        <div class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-white/20 transition-colors">
                            <x-icon class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/>
                            </x-icon>
                        </div>
                        <div>
                            <p class="font-body font-semibold text-white text-sm">+353 01 123 4567</p>
                            <p class="font-body text-gray-400 text-xs">Mon–Fri, 8am–5pm</p>
                        </div>
                    </a>
                    <a href="{{ route('electrolux') }}" class="inline-flex items-center gap-2 text-steel-light hover:text-white font-body text-sm transition-colors">
                        Authorised Electrolux Professional Partner
                        <x-icon class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                        </x-icon>
                    </a>
                </div>
            </div>
            <div class="bg-white rounded-xl p-6 lg:p-8 shadow-card">
                <h3 class="font-heading font-bold text-navy text-lg mb-1">Request a Service Assessment</h3>
                <p class="font-body text-gray-500 text-sm mb-6">We aim to respond within 24 hours.</p>
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="cta_name" class="block text-sm font-body font-medium text-navy mb-1.5">Name <span class="text-red-500">*</span></label>
                            <input type="text" id="cta_name" name="name" required
                                   class="w-full px-3.5 py-2.5 border border-border rounded-lg font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-steel/30 focus:border-steel transition-colors"
                                   placeholder="Your name">
                        </div>
                        <div>
                            <label for="cta_company" class="block text-sm font-body font-medium text-navy mb-1.5">Organisation <span class="text-red-500">*</span></label>
                            <input type="text" id="cta_company" name="company" required
                                   class="w-full px-3.5 py-2.5 border border-border rounded-lg font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-steel/30 focus:border-steel transition-colors"
                                   placeholder="Company or organisation">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="cta_phone" class="block text-sm font-body font-medium text-navy mb-1.5">Phone <span class="text-red-500">*</span></label>
                            <input type="tel" id="cta_phone" name="phone" required
                                   class="w-full px-3.5 py-2.5 border border-border rounded-lg font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-steel/30 focus:border-steel transition-colors"
                                   placeholder="+353...">
                        </div>
                        <div>
                            <label for="cta_sector" class="block text-sm font-body font-medium text-navy mb-1.5">Sector <span class="text-red-500">*</span></label>
                            <select id="cta_sector" name="sector" required
                                    class="w-full px-3.5 py-2.5 border border-border rounded-lg font-body text-sm text-navy focus:outline-none focus:ring-2 focus:ring-steel/30 focus:border-steel transition-colors bg-white">
                                <option value="" disabled selected>Select sector</option>
                                <option value="healthcare">Healthcare</option>
                                <option value="hospitality">Hospitality</option>
                                <option value="care">Care Facilities</option>
                                <option value="commercial">Commercial &amp; Industrial</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="cta_request_type" class="block text-sm font-body font-medium text-navy mb-1.5">Request Type <span class="text-red-500">*</span></label>
                        <select id="cta_request_type" name="request_type" required
                                class="w-full px-3.5 py-2.5 border border-border rounded-lg font-body text-sm text-navy focus:outline-none focus:ring-2 focus:ring-steel/30 focus:border-steel transition-colors bg-white">
                            <option value="" disabled selected>What do you need?</option>
                            <option value="contract">Service Contract</option>
                            <option value="rental">Equipment Rental</option>
                            <option value="breakdown">Breakdown / Repair</option>
                            <option value="parts">Parts &amp; Aftercare</option>
                            <option value="equipment_quote">Equipment Quote</option>
                        </select>
                    </div>
                    <div class="flex items-start gap-2.5">
                        <input type="checkbox" id="cta_gdpr" name="gdpr_consent" value="1" required
                               class="mt-0.5 w-4 h-4 rounded border-border text-steel focus:ring-steel/30 cursor-pointer flex-shrink-0">
                        <label for="cta_gdpr" class="font-body text-gray-500 text-xs leading-relaxed cursor-pointer">
                            I consent to ILS storing and using my data to respond to this request. <a href="{{ route('privacy') }}" class="text-steel underline hover:text-navy">Privacy policy</a>. <span class="text-red-500">*</span>
                        </label>
                    </div>
                    <input type="hidden" name="utm_source" id="cta_utm_source">
                    <input type="hidden" name="utm_medium" id="cta_utm_medium">
                    <input type="hidden" name="utm_campaign" id="cta_utm_campaign">
                    <input type="hidden" name="page_source" value="{{ $pageSource ?? 'sector_cta' }}">
                    <button type="submit"
                            class="w-full bg-[#148af4] hover:bg-[#148af4]/90 text-white font-body font-bold py-3.5 px-6 rounded-lg text-base transition-colors duration-200 cursor-pointer">
                        Request Service Assessment
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
