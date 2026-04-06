@extends('layouts.app')

@section('pageTitle', 'Contact Irish Laundry Systems | Request a Service Assessment')
@section('metaDescription', 'Request an assessment for service contracts, rental options, breakdown support or equipment planning. We confirm next steps and availability once we have site details.')

@section('content')

<!-- HERO -->
<section class="bg-navy py-16 lg:py-20">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl mb-4">Request a Service Assessment</h1>
        <p class="font-body text-blue-200 text-lg max-w-xl mx-auto leading-relaxed">
            Share site location(s), equipment type/brand and urgency. We will confirm next steps and availability.
        </p>
    </div>
</section>

<!-- WHAT HAPPENS NEXT -->
<section class="py-10 lg:py-12 bg-white border-b border-border">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
            <div class="flex flex-col items-center">
                <div class="w-10 h-10 rounded-full bg-navy flex items-center justify-center text-white font-heading font-bold text-base mb-3">1</div>
                <h3 class="font-heading font-semibold text-navy text-base mb-1">We review your details</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">We read every request and review your site, sector and equipment details before responding.</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-10 h-10 rounded-full bg-navy flex items-center justify-center text-white font-heading font-bold text-base mb-3">2</div>
                <h3 class="font-heading font-semibold text-navy text-base mb-1">We may ask triage questions</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">Depending on your request, we may follow up by phone or email to clarify scope before confirming availability.</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-10 h-10 rounded-full bg-navy flex items-center justify-center text-white font-heading font-bold text-base mb-3">3</div>
                <h3 class="font-heading font-semibold text-navy text-base mb-1">We confirm next steps and availability</h3>
                <p class="font-body text-gray-500 text-sm leading-relaxed">We'll come back with a clear next step — a proposal, a scheduled visit, or a call-out confirmation.</p>
            </div>
        </div>
    </div>
</section>

<!-- MAIN CONTENT -->
<section class="py-16 lg:py-20 bg-bg">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">

            <!-- LEFT: Contact info + map -->
            <div class="lg:col-span-1 space-y-6">
                <!-- Contact details -->
                <div class="bg-white border border-border rounded-2xl p-6">
                    <h2 class="font-heading font-bold text-navy text-lg mb-5">Get in Touch</h2>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <div class="w-9 h-9 rounded-lg bg-navy flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-body font-semibold text-navy text-sm">Phone</div>
                                <a href="tel:+353000000000" class="font-body text-gray-600 text-sm hover:text-steel transition-colors">+353 (0) 00 000 0000</a>
                                <div class="text-xs text-gray-400 font-body mt-0.5">Mon–Fri, 8am–5pm</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-9 h-9 rounded-lg bg-navy flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-body font-semibold text-navy text-sm">Email</div>
                                <a href="mailto:info@irishlaunderysystems.ie" class="font-body text-gray-600 text-sm hover:text-steel transition-colors">info@irishlaunderysystems.ie</a>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-9 h-9 rounded-lg bg-navy flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-body font-semibold text-navy text-sm">Coverage Area</div>
                                <div class="font-body text-gray-600 text-sm">Republic of Ireland</div>
                                <div class="text-xs text-gray-400 font-body mt-0.5">Excluding Northern Ireland</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Response statement -->
                <div class="bg-steel text-white rounded-2xl p-5">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-orange flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <div>
                            <div class="font-heading font-semibold text-white text-sm mb-1">Response Times</div>
                            <p class="font-body text-blue-200 text-xs leading-relaxed">
                                We aim to respond to enquiries within 24 hours. For emergency breakdowns, please call directly. On-site attendance typically within 24 hours (subject to location and parts availability).
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Map placeholder -->
                <div class="bg-white border border-border rounded-2xl overflow-hidden">
                    <div class="bg-muted h-48 flex items-center justify-center">
                        <div class="text-center">
                            <svg class="w-10 h-10 text-gray-300 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                            </svg>
                            <p class="text-xs font-body text-gray-400">Republic of Ireland</p>
                            <p class="text-xs font-body text-gray-400">Republic of Ireland coverage</p>
                        </div>
                    </div>
                    <div class="p-3 bg-bg border-t border-border">
                        <p class="text-xs font-body text-gray-500 text-center">ILS covers the Republic of Ireland. We do not provide services in Northern Ireland.</p>
                    </div>
                </div>

                <!-- Electrolux badge -->
                <div class="bg-navy rounded-2xl p-4 flex items-center gap-3">
                    <svg class="w-8 h-8 text-orange flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                    </svg>
                    <div>
                        <div class="font-heading font-semibold text-white text-sm">Authorised Electrolux Professional Partner</div>
                        <div class="text-xs text-gray-400 font-body">Genuine parts &amp; manufacturer-trained engineers</div>
                    </div>
                </div>
            </div>

            <!-- RIGHT: Contact Form -->
            <div class="lg:col-span-2">
                <div class="bg-white border border-border rounded-2xl p-6 lg:p-8">
                    <h2 class="font-heading font-bold text-navy text-xl mb-2">Send a Request</h2>
                    <p class="font-body text-gray-500 text-sm mb-6">Fill in as much detail as you can — the more context you provide, the better we can respond.</p>

                    @if (session('success'))
                    <div class="bg-green-50 border border-green-200 rounded-2xl p-4 mb-6 flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <p class="font-body text-green-800 text-sm leading-relaxed">{{ session('success') }}</p>
                    </div>
                    @endif

                    @if ($errors->any())
                    <div class="bg-red-50 border border-red-200 rounded-2xl p-4 mb-6">
                        <ul class="space-y-1">
                            @foreach ($errors->all() as $error)
                            <li class="font-body text-red-700 text-sm">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-5" data-utm>
                        @csrf
                        {{-- UTM tracking fields (populated by JS) --}}
                        <input type="hidden" name="utm_source">
                        <input type="hidden" name="utm_medium">
                        <input type="hidden" name="utm_campaign">
                        <input type="hidden" name="utm_content">
                        <input type="hidden" name="utm_term">
                        <input type="hidden" name="page_source">

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="name" class="block text-sm font-body font-semibold text-navy mb-1.5">Name <span class="text-red-500">*</span></label>
                                <input type="text" id="name" name="name" required value="{{ old('name') }}"
                                       placeholder="Your full name"
                                       class="w-full border border-border rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400 transition-shadow">
                            </div>
                            <div>
                                <label for="company" class="block text-sm font-body font-semibold text-navy mb-1.5">Company / Organisation <span class="text-red-500">*</span></label>
                                <input type="text" id="company" name="company" required value="{{ old('company') }}"
                                       placeholder="Company or facility name"
                                       class="w-full border border-border rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400 transition-shadow">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="email" class="block text-sm font-body font-semibold text-navy mb-1.5">Email <span class="text-red-500">*</span></label>
                                <input type="email" id="email" name="email" required value="{{ old('email') }}"
                                       placeholder="you@company.ie"
                                       class="w-full border border-border rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-body font-semibold text-navy mb-1.5">Phone <span class="text-red-500">*</span></label>
                                <input type="tel" id="phone" name="phone" required value="{{ old('phone') }}"
                                       placeholder="+353 (0)..."
                                       class="w-full border border-border rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                            </div>
                        </div>

                        <div>
                            <label for="location" class="block text-sm font-body font-semibold text-navy mb-1.5">Site Location(s) / County <span class="text-red-500">*</span></label>
                            <input type="text" id="location" name="location" required value="{{ old('location') }}"
                                   placeholder="e.g. Dublin, Cork, Galway — or multiple counties"
                                   class="w-full border border-border rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="sector" class="block text-sm font-body font-semibold text-navy mb-1.5">Sector <span class="text-red-500">*</span></label>
                                <select id="sector" name="sector" required
                                        class="w-full border border-border rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent cursor-pointer">
                                    <option value="">Select your sector</option>
                                    <option value="healthcare" {{ old('sector') === 'healthcare' ? 'selected' : '' }}>Healthcare</option>
                                    <option value="hospitality" {{ old('sector') === 'hospitality' ? 'selected' : '' }}>Hospitality</option>
                                    <option value="care" {{ old('sector') === 'care' ? 'selected' : '' }}>Care Facilities</option>
                                    <option value="commercial" {{ old('sector') === 'commercial' ? 'selected' : '' }}>Commercial &amp; Industrial</option>
                                </select>
                            </div>
                            <div>
                                <label for="request_type" class="block text-sm font-body font-semibold text-navy mb-1.5">Request Type <span class="text-red-500">*</span></label>
                                <select id="request_type" name="request_type" required
                                        class="w-full border border-border rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent cursor-pointer">
                                    <option value="">What are you looking for?</option>
                                    <option value="contract" {{ old('request_type') === 'contract' ? 'selected' : '' }}>Service Contract</option>
                                    <option value="rental" {{ old('request_type') === 'rental' ? 'selected' : '' }}>Equipment Rental / Lease</option>
                                    <option value="breakdown" {{ old('request_type') === 'breakdown' ? 'selected' : '' }}>Breakdown / Repair</option>
                                    <option value="parts" {{ old('request_type') === 'parts' ? 'selected' : '' }}>Parts Enquiry</option>
                                    <option value="equipment_quote" {{ old('request_type') === 'equipment_quote' ? 'selected' : '' }}>Equipment Quote</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="equipment" class="block text-sm font-body font-semibold text-navy mb-1.5">Equipment Type(s) &amp; Brand (if known)</label>
                            <input type="text" id="equipment" name="equipment" value="{{ old('equipment') }}"
                                   placeholder="e.g. Electrolux WH6-18, washers and dryers x4..."
                                   class="w-full border border-border rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                        </div>

                        <div>
                            <label for="urgency" class="block text-sm font-body font-semibold text-navy mb-1.5">Urgency <span class="text-red-500">*</span></label>
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                                @foreach ([
                                    ['today', 'Today'],
                                    ['24_48h', '24–48 hours'],
                                    ['this_week', 'This week'],
                                    ['planning', 'Planning ahead'],
                                ] as [$val, $label])
                                <label class="cursor-pointer">
                                    <input type="radio" name="urgency" value="{{ $val }}" class="sr-only peer" {{ old('urgency') === $val ? 'checked' : '' }}>
                                    <div class="border-2 border-border rounded-lg px-3 py-2.5 text-center text-xs font-body font-semibold text-gray-600 peer-checked:border-steel peer-checked:bg-steel peer-checked:text-white hover:border-steel transition-all cursor-pointer">
                                        {{ $label }}
                                    </div>
                                </label>
                                @endforeach
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-body font-semibold text-navy mb-1.5">Message / Problem Description</label>
                            <textarea id="message" name="message" rows="4"
                                      placeholder="Describe the problem, what the machine is doing or not doing, any error codes, and any other context that will help us respond appropriately."
                                      class="w-full border border-border rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400 resize-none leading-relaxed">{{ old('message') }}</textarea>
                        </div>

                        <div class="space-y-3 pt-2">
                            <label class="flex items-start gap-3 cursor-pointer">
                                <input type="checkbox" name="gdpr_consent" required value="1" {{ old('gdpr_consent') ? 'checked' : '' }}
                                       class="mt-0.5 w-4 h-4 rounded border-border text-steel focus:ring-steel flex-shrink-0 cursor-pointer">
                                <span class="font-body text-sm text-gray-600 leading-relaxed">
                                    I agree to ILS processing my details to respond to this enquiry. <a href="{{ route('privacy') }}" class="text-steel underline hover:text-navy transition-colors" target="_blank">Privacy Policy</a>. <span class="text-red-500">*</span>
                                </span>
                            </label>
                            <label class="flex items-start gap-3 cursor-pointer">
                                <input type="checkbox" name="marketing_consent" value="1" {{ old('marketing_consent') ? 'checked' : '' }}
                                       class="mt-0.5 w-4 h-4 rounded border-border text-steel focus:ring-steel flex-shrink-0 cursor-pointer">
                                <span class="font-body text-sm text-gray-500 leading-relaxed">
                                    I'm happy to receive occasional service updates and relevant information from ILS. (Optional)
                                </span>
                            </label>
                        </div>

                        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pt-2">
                            <p class="text-xs font-body text-gray-400 leading-relaxed max-w-xs">
                                Republic of Ireland only (excluding Northern Ireland). We aim to respond within 24 hours.
                            </p>
                            <button type="submit"
                                    class="flex-shrink-0 inline-flex items-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-8 py-3.5 rounded-lg text-sm transition-colors duration-200 cursor-pointer">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5"/>
                                </svg>
                                Send Request
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
