@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="bg-navy py-16 lg:py-20">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="max-w-2xl">
            <div class="inline-flex items-center gap-2 bg-orange/20 border border-orange/40 rounded-full px-4 py-1.5 mb-5">
                <svg class="w-4 h-4 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                </svg>
                <span class="text-sm font-body text-orange font-semibold">No obligation assessment</span>
            </div>
            <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-4">Request a Service Assessment</h1>
            <p class="font-body text-blue-200 text-lg leading-relaxed mb-2">
                Tell us about your operation and we'll come back with the right recommendation — contract tier, equipment advice or call-out support.
            </p>
            <p class="font-body text-gray-400 text-sm">We aim to respond within 24 hours. Republic of Ireland only (excluding Northern Ireland).</p>
        </div>
    </div>
</section>

<!-- PARTNER STRIP + PROOF BAR -->
@include('components.partner-strip')
@include('components.proof-bar')

<!-- FORM -->
<section class="py-16 lg:py-20 bg-bg">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">

            <!-- Form -->
            <div class="lg:col-span-2">
                <div class="bg-white border border-border rounded-2xl p-6 lg:p-8">
                    <h2 class="font-heading font-bold text-navy text-xl mb-2">Assessment Request Form</h2>
                    <p class="font-body text-gray-500 text-sm mb-6 leading-relaxed">Fill in what you know. The more context you provide, the better we can tailor our response. Fields marked * are required.</p>

                    @if (session('success'))
                    <div class="bg-green-50 border border-green-200 rounded-2xl p-5 mb-6 flex items-start gap-3">
                        <svg class="w-6 h-6 text-green-600 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <div>
                            <div class="font-heading font-semibold text-green-800 text-base mb-1">Assessment Request Received</div>
                            <p class="font-body text-green-700 text-sm leading-relaxed">{{ session('success') }}</p>
                        </div>
                    </div>
                    @endif

                    @if ($errors->any())
                    <div class="bg-red-50 border border-red-200 rounded-2xl p-4 mb-6">
                        <div class="font-heading font-semibold text-red-800 text-sm mb-2">Please correct the following:</div>
                        <ul class="space-y-1">
                            @foreach ($errors->all() as $error)
                            <li class="font-body text-red-700 text-sm flex items-start gap-2">
                                <svg class="w-4 h-4 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/></svg>
                                {{ $error }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6" data-utm>
                        @csrf
                        {{-- UTM tracking fields (populated by JS) --}}
                        <input type="hidden" name="utm_source">
                        <input type="hidden" name="utm_medium">
                        <input type="hidden" name="utm_campaign">
                        <input type="hidden" name="utm_content">
                        <input type="hidden" name="utm_term">
                        <input type="hidden" name="page_source">

                        <!-- Basic info -->
                        <fieldset>
                            <legend class="font-heading font-bold text-navy text-sm uppercase tracking-wider mb-4 pb-2 border-b border-border w-full">Your Details</legend>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label for="name" class="block text-sm font-body font-semibold text-navy mb-1.5">Name <span class="text-red-500">*</span></label>
                                    <input type="text" id="name" name="name" required value="{{ old('name') }}" placeholder="Your full name"
                                           class="w-full border border-border rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                                </div>
                                <div>
                                    <label for="company" class="block text-sm font-body font-semibold text-navy mb-1.5">Company / Organisation <span class="text-red-500">*</span></label>
                                    <input type="text" id="company" name="company" required value="{{ old('company') }}" placeholder="Company or facility name"
                                           class="w-full border border-border rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-body font-semibold text-navy mb-1.5">Email <span class="text-red-500">*</span></label>
                                    <input type="email" id="email" name="email" required value="{{ old('email') }}" placeholder="you@company.ie"
                                           class="w-full border border-border rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                                </div>
                                <div>
                                    <label for="phone" class="block text-sm font-body font-semibold text-navy mb-1.5">Phone <span class="text-red-500">*</span></label>
                                    <input type="tel" id="phone" name="phone" required value="{{ old('phone') }}" placeholder="+353 (0)..."
                                           class="w-full border border-border rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                                </div>
                            </div>
                        </fieldset>

                        <!-- Operation details -->
                        <fieldset>
                            <legend class="font-heading font-bold text-navy text-sm uppercase tracking-wider mb-4 pb-2 border-b border-border w-full">About Your Operation</legend>
                            <div class="space-y-5">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                    <div>
                                        <label for="sector" class="block text-sm font-body font-semibold text-navy mb-1.5">Sector <span class="text-red-500">*</span></label>
                                        <select id="sector" name="sector" required class="w-full border border-border rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent cursor-pointer">
                                            <option value="">Select sector</option>
                                            <option value="healthcare" {{ old('sector') === 'healthcare' ? 'selected' : '' }}>Healthcare</option>
                                            <option value="hospitality" {{ old('sector') === 'hospitality' ? 'selected' : '' }}>Hospitality</option>
                                            <option value="care" {{ old('sector') === 'care' ? 'selected' : '' }}>Care Facilities</option>
                                            <option value="commercial" {{ old('sector') === 'commercial' ? 'selected' : '' }}>Commercial &amp; Industrial</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="location" class="block text-sm font-body font-semibold text-navy mb-1.5">Site Location(s) / County <span class="text-red-500">*</span></label>
                                        <input type="text" id="location" name="location" required value="{{ old('location') }}" placeholder="County / counties / region"
                                               class="w-full border border-border rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                                    </div>
                                </div>

                                <!-- Number of sites -->
                                <div>
                                    <label class="block text-sm font-body font-semibold text-navy mb-2">Number of Sites</label>
                                    <div class="flex flex-wrap gap-3">
                                        @foreach ([['1', '1 site'], ['2-5', '2–5 sites'], ['6+', '6+ sites']] as [$val, $label])
                                        <label class="cursor-pointer">
                                            <input type="radio" name="site_count" value="{{ $val }}" class="sr-only peer" {{ old('site_count') === $val ? 'checked' : '' }}>
                                            <div class="border-2 border-border rounded-lg px-4 py-2 text-sm font-body font-semibold text-gray-600 peer-checked:border-navy peer-checked:bg-navy peer-checked:text-white hover:border-navy transition-all cursor-pointer">
                                                {{ $label }}
                                            </div>
                                        </label>
                                        @endforeach
                                    </div>
                                </div>

                                <div>
                                    <label for="equipment" class="block text-sm font-body font-semibold text-navy mb-1.5">Equipment Summary (brands / models if known)</label>
                                    <input type="text" id="equipment" name="equipment" value="{{ old('equipment') }}"
                                           placeholder="e.g. 3x Electrolux washers, 2x dryers — or 'unknown, please advise'"
                                           class="w-full border border-border rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400">
                                </div>
                            </div>
                        </fieldset>

                        <!-- What you need -->
                        <fieldset>
                            <legend class="font-heading font-bold text-navy text-sm uppercase tracking-wider mb-4 pb-2 border-b border-border w-full">What You Need</legend>
                            <div class="space-y-5">
                                <div>
                                    <label class="block text-sm font-body font-semibold text-navy mb-2">What Are You Looking For? <span class="text-red-500">*</span></label>
                                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-2">
                                        @foreach ([
                                            ['contract', 'Service Contract'],
                                            ['rental', 'Equipment Rental'],
                                            ['breakdown', 'Repair / Call-Out'],
                                            ['equipment_quote', 'Equipment Quote'],
                                            ['parts', 'Parts Enquiry'],
                                        ] as [$val, $label])
                                        <label class="cursor-pointer">
                                            <input type="radio" name="request_type" value="{{ $val }}" class="sr-only peer" {{ old('request_type', 'contract') === $val ? 'checked' : '' }}>
                                            <div class="border-2 border-border rounded-lg px-3 py-2.5 text-center text-xs font-body font-semibold text-gray-600 peer-checked:border-steel peer-checked:bg-steel peer-checked:text-white hover:border-steel transition-all cursor-pointer leading-tight">
                                                {{ $label }}
                                            </div>
                                        </label>
                                        @endforeach
                                    </div>
                                </div>

                                <div>
                                    <label for="urgency" class="block text-sm font-body font-semibold text-navy mb-2">Urgency <span class="text-red-500">*</span></label>
                                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                                        @foreach ([
                                            ['today', 'Today'],
                                            ['24_48h', '24–48 hours'],
                                            ['this_week', 'This week'],
                                            ['planning', 'Planning ahead'],
                                        ] as [$val, $label])
                                        <label class="cursor-pointer">
                                            <input type="radio" name="urgency" value="{{ $val }}" class="sr-only peer" {{ old('urgency') === $val ? 'checked' : '' }}>
                                            <div class="border-2 border-border rounded-lg px-3 py-2.5 text-center text-xs font-body font-semibold text-gray-600 peer-checked:border-orange peer-checked:bg-orange peer-checked:text-white hover:border-orange transition-all cursor-pointer">
                                                {{ $label }}
                                            </div>
                                        </label>
                                        @endforeach
                                    </div>
                                </div>

                                <div>
                                    <label for="message" class="block text-sm font-body font-semibold text-navy mb-1.5">Additional Notes (optional)</label>
                                    <textarea id="message" name="message" rows="4" placeholder="Any other context — existing contracts, renewal dates, specific requirements, or questions."
                                              class="w-full border border-border rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent placeholder-gray-400 resize-none leading-relaxed">{{ old('message') }}</textarea>
                                </div>
                            </div>
                        </fieldset>

                        <div class="space-y-3 pt-2">
                            <label class="flex items-start gap-3 cursor-pointer">
                                <input type="checkbox" name="gdpr_consent" required value="1" {{ old('gdpr_consent') ? 'checked' : '' }}
                                       class="mt-0.5 w-4 h-4 rounded border-border text-steel focus:ring-steel flex-shrink-0 cursor-pointer">
                                <span class="font-body text-sm text-gray-600 leading-relaxed">
                                    I agree to ILS processing my details to respond to this assessment request. <a href="{{ route('privacy') }}" class="text-steel underline hover:text-navy transition-colors" target="_blank">Privacy Policy</a>. <span class="text-red-500">*</span>
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

                        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pt-2 border-t border-border">
                            <p class="text-xs font-body text-gray-400 leading-relaxed">
                                Republic of Ireland only. We aim to respond within 24 hours.
                            </p>
                            <button type="submit"
                                    class="flex-shrink-0 inline-flex items-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-8 py-4 rounded-lg text-sm transition-colors duration-200 cursor-pointer">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                </svg>
                                Submit Assessment Request
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right sidebar -->
            <div class="lg:col-span-1 space-y-5">
                <div class="bg-navy text-white rounded-2xl p-6">
                    <h3 class="font-heading font-bold text-white text-lg mb-3">What Happens Next</h3>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <div class="w-7 h-7 rounded-full bg-orange flex items-center justify-center flex-shrink-0 font-heading font-bold text-white text-xs mt-0.5">1</div>
                            <p class="font-body text-gray-300 text-sm leading-relaxed">We receive your request and review it against your operation type and requirements.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-7 h-7 rounded-full bg-orange flex items-center justify-center flex-shrink-0 font-heading font-bold text-white text-xs mt-0.5">2</div>
                            <p class="font-body text-gray-300 text-sm leading-relaxed">An ILS engineer contacts you within 24 hours — by your preferred method — to discuss your requirements.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-7 h-7 rounded-full bg-orange flex items-center justify-center flex-shrink-0 font-heading font-bold text-white text-xs mt-0.5">3</div>
                            <p class="font-body text-gray-300 text-sm leading-relaxed">We provide a written proposal or recommendation — no obligation, no pressure.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-border rounded-2xl p-5">
                    <h3 class="font-heading font-semibold text-navy text-base mb-3">Prefer to call?</h3>
                    <a href="tel:+353000000000" class="flex items-center gap-3 text-navy hover:text-steel transition-colors">
                        <div class="w-9 h-9 rounded-lg bg-navy flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="font-body font-semibold text-navy text-sm">+353 (0) 00 000 0000</div>
                            <div class="text-xs text-gray-400 font-body">Mon–Fri, 8am–5pm</div>
                        </div>
                    </a>
                </div>

                <div class="bg-steel text-white rounded-2xl p-5">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-orange flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                        </svg>
                        <div>
                            <div class="font-heading font-semibold text-white text-sm mb-1">Authorised Electrolux Professional Partner</div>
                            <p class="font-body text-blue-200 text-xs leading-relaxed">Genuine parts, manufacturer-trained engineers and access to the full Electrolux Professional equipment range.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-bg border border-border rounded-2xl p-5">
                    <div class="flex items-start gap-2 mb-2">
                        <svg class="w-4 h-4 text-gray-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                        </svg>
                        <div class="font-body font-semibold text-navy text-xs">Coverage</div>
                    </div>
                    <p class="text-xs font-body text-gray-500 leading-relaxed">Republic of Ireland only. We do not provide services in Northern Ireland.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('components.cta-combined-banner')

@endsection
