@props([
    'eyebrow'           => null,
    'heading'           => 'Ready to understand what your healthcare laundry room is costing you?',
    'body'              => 'Talk to Irish Laundry Systems about your site, equipment, service history and laundry pressure. We will help confirm the right next step.',
    'formTitle'         => 'Request a Healthcare Laundry Assessment',
    'formIntro'         => 'We aim to respond within 24 hours.',
    'buttonText'        => 'Request Healthcare Assessment',
    'showLocationField' => false,
    'equipmentLabel'    => null,
    'messageLabel'      => 'Message / Requirement',
    'messageRequired'   => false,
    'requestTypeLabel'  => 'Request Type',
])
{{-- Ready to Reduce Downtime Risk — final CTA + contact info + map + short form --}}
<section class="py-16 lg:py-24 bg-navy">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-stretch">

            {{-- LEFT: heading + contact methods + electrolux + map --}}
            <div class="flex flex-col">
                @if ($eyebrow)
                <p class="font-body font-bold text-orange text-xs uppercase tracking-[0.22em] mb-4">{{ $eyebrow }}</p>
                @endif
                <h2 class="font-heading font-bold text-white text-2xl sm:text-3xl lg:text-5xl mb-4 leading-tight">
                    {!! $heading !!}
                </h2>
                <p class="font-body text-blue-200 text-base leading-relaxed mb-8">
                    {{ $body }}
                </p>

                <div class="space-y-4 mb-8">
                    {{-- Phone --}}
                    <a href="tel:+35314910402" class="flex items-center gap-3 text-gray-200 hover:text-white transition-colors group">
                        <div class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-white/20 transition-colors">
                            <x-icon class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/>
                            </x-icon>
                        </div>
                        <div>
                            <p class="font-body font-bold text-white text-sm">+353 1 491 0402</p>
                            <p class="font-body text-gray-400 text-xs">Mon–Fri, 8am–5pm</p>
                        </div>
                    </a>

                    {{-- Email --}}
                    <a href="mailto:contact@irishlaundrysystems.com" class="flex items-center gap-3 text-gray-200 hover:text-white transition-colors group">
                        <div class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-white/20 transition-colors">
                            <x-icon class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/>
                            </x-icon>
                        </div>
                        <div>
                            <p class="font-body font-bold text-white text-sm">contact@irishlaundrysystems.com</p>
                            <p class="font-body text-gray-400 text-xs">We aim to respond within 24 hours</p>
                        </div>
                    </a>

                    {{-- Address --}}
                    <div class="flex items-start gap-3 text-gray-200">
                        <div class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <x-icon class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/>
                            </x-icon>
                        </div>
                        <div>
                            <p class="font-body font-bold text-white text-sm">Irish Laundry Systems</p>
                            <p class="font-body text-gray-400 text-xs leading-relaxed">Dublin, Ireland</p>
                        </div>
                    </div>
                </div>

                <a href="{{ route('electrolux') }}" class="inline-flex items-center gap-2 text-steel-light hover:text-white font-body text-sm transition-colors mb-6">
                    Authorised Electrolux Professional Partner
                    <x-icon class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                    </x-icon>
                </a>

                {{-- Map --}}
                <div class="rounded-xl overflow-hidden mt-auto" style="height: 200px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d152524.01771227377!2d-6.385785697656249!3d53.32480523015786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e80ea27ac2f%3A0xa00c7a9973171a0!2sDublin%2C%20Ireland!5e0!3m2!1sen!2sie!4v1715000000000!5m2!1sen!2sie"
                        width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" title="Irish Laundry Systems location">
                    </iframe>
                </div>
            </div>

            {{-- RIGHT: Form --}}
            <div class="bg-white rounded-xl p-6 lg:p-8 shadow-card">
                <h3 class="font-heading font-bold text-navy text-lg mb-1">{{ $formTitle }}</h3>
                <p class="font-body text-gray-500 text-sm mb-6">{{ $formIntro }}</p>
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="cta_name" class="block text-sm font-body font-light text-navy mb-1.5">Name <span class="text-red-500">*</span></label>
                            <input type="text" id="cta_name" name="name" required
                                   class="w-full px-3.5 py-2.5 border border-border rounded-lg font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-steel/30 focus:border-steel transition-colors"
                                   placeholder="Your name">
                        </div>
                        <div>
                            <label for="cta_company" class="block text-sm font-body font-light text-navy mb-1.5">Organisation <span class="text-red-500">*</span></label>
                            <input type="text" id="cta_company" name="company" required
                                   class="w-full px-3.5 py-2.5 border border-border rounded-lg font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-steel/30 focus:border-steel transition-colors"
                                   placeholder="Company or organisation">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="cta_phone" class="block text-sm font-body font-light text-navy mb-1.5">Phone <span class="text-red-500">*</span></label>
                            <input type="tel" id="cta_phone" name="phone" required
                                   class="w-full px-3.5 py-2.5 border border-border rounded-lg font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-steel/30 focus:border-steel transition-colors"
                                   placeholder="+353...">
                        </div>
                        <div>
                            <label for="cta_email" class="block text-sm font-body font-light text-navy mb-1.5">Email <span class="text-red-500">*</span></label>
                            <input type="email" id="cta_email" name="email" required
                                   class="w-full px-3.5 py-2.5 border border-border rounded-lg font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-steel/30 focus:border-steel transition-colors"
                                   placeholder="you@company.ie">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="cta_sector" class="block text-sm font-body font-light text-navy mb-1.5">Sector <span class="text-red-500">*</span></label>
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
                        <div>
                            <label for="cta_request_type" class="block text-sm font-body font-light text-navy mb-1.5">{{ $requestTypeLabel }} <span class="text-red-500">*</span></label>
                            <select id="cta_request_type" name="request_type" required
                                    class="w-full px-3.5 py-2.5 border border-border rounded-lg font-body text-sm text-navy focus:outline-none focus:ring-2 focus:ring-steel/30 focus:border-steel transition-colors bg-white">
                                <option value="" disabled selected>What do you need?</option>
                                <option value="contract">Preventive Maintenance</option>
                                <option value="rental">Equipment Rental</option>
                                <option value="breakdown">Breakdown / Repair</option>
                                <option value="parts">Support &amp; Aftercare</option>
                                <option value="equipment_quote">Equipment Purchase / Quote</option>
                            </select>
                        </div>
                    </div>
                    @if ($showLocationField)
                    <div>
                        <label for="cta_location" class="block text-sm font-body font-light text-navy mb-1.5">Site location <span class="text-red-500">*</span></label>
                        <input type="text" id="cta_location" name="location" required
                               class="w-full px-3.5 py-2.5 border border-border rounded-lg font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-steel/30 focus:border-steel transition-colors"
                               placeholder="Town / county">
                    </div>
                    @endif
                    @if ($equipmentLabel)
                    <div>
                        <label for="cta_equipment" class="block text-sm font-body font-light text-navy mb-1.5">{{ $equipmentLabel }}</label>
                        <input type="text" id="cta_equipment" name="equipment" maxlength="500"
                               class="w-full px-3.5 py-2.5 border border-border rounded-lg font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-steel/30 focus:border-steel transition-colors"
                               placeholder="What is on site today?">
                    </div>
                    @endif
                    <div>
                        <label for="cta_message" class="block text-sm font-body font-light text-navy mb-1.5">{{ $messageLabel }}@if ($messageRequired) <span class="text-red-500">*</span>@endif</label>
                        <textarea id="cta_message" name="message" rows="3" @if ($messageRequired) required @endif
                                  class="w-full px-3.5 py-2.5 border border-border rounded-lg font-body text-sm text-navy placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-steel/30 focus:border-steel transition-colors resize-none"
                                  placeholder="Tell us what is under pressure, what equipment is involved and what needs to happen next."></textarea>
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
                    @unless ($showLocationField)
                    <input type="hidden" name="location" value="Not specified">
                    @endunless
                    <input type="hidden" name="urgency" value="this_week">
                    <input type="hidden" name="page_source" value="{{ $pageSource ?? 'sector_cta' }}">
                    <button type="submit"
                            class="w-full bg-[#148af4] hover:bg-[#148af4]/90 text-white font-body font-bold py-3.5 px-6 rounded-lg text-base transition-colors duration-200 cursor-pointer">
                        {{ $buttonText }}
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>
