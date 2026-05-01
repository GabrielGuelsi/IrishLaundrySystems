@extends('layouts.app')

@section('pageTitle', 'Contact Irish Laundry Systems | Get in Touch')
@section('metaDescription', 'Contact ILS for emergency call-outs, service contracts, equipment rental, or general enquiries. Republic of Ireland coverage. Authorised Electrolux Professional partner.')

@section('content')

<!-- ═══════════════════════════════════════════════════
     CONTACT — Notion-style clean layout
═══════════════════════════════════════════════════ -->
<section class="bg-white py-20 lg:py-28">
    <div class="max-w-5xl mx-auto px-6 sm:px-10">

        <!-- Heading -->
        <div class="mb-14">
            <h1 class="font-heading font-bold text-navy text-5xl lg:text-6xl mb-4">Contact us</h1>
            <p class="font-body text-gray-500 text-lg max-w-lg leading-relaxed">
                Talk directly with our engineering team. We cover the Republic of Ireland and aim to respond within 24 hours.
            </p>
        </div>

        <!-- Two columns -->
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-16 lg:gap-20">

            <!-- LEFT: contact info (2/5) -->
            <div class="lg:col-span-2 space-y-10">

                <div>
                    <h3 class="font-heading font-bold text-navy text-sm uppercase tracking-widest mb-4">Call us</h3>
                    <a href="tel:+353000000000"
                       class="font-body text-gray-700 text-base hover:text-navy transition-colors block mb-1">
                        +353 (0) 00 000 0000
                    </a>
                    <p class="font-body text-gray-400 text-sm">Mon – Fri, 8am – 5pm</p>
                    <p class="font-body text-gray-400 text-sm">Emergency line available</p>
                </div>

                <div class="w-12 h-px bg-gray-200"></div>

                <div>
                    <h3 class="font-heading font-bold text-navy text-sm uppercase tracking-widest mb-4">Email us</h3>
                    <a href="mailto:info@irishlaunderysystems.ie"
                       class="font-body text-gray-700 text-base hover:text-navy transition-colors block mb-1">
                        info@irishlaunderysystems.ie
                    </a>
                    <p class="font-body text-gray-400 text-sm">We respond within 24 hours</p>
                </div>

                <div class="w-12 h-px bg-gray-200"></div>

                <div>
                    <h3 class="font-heading font-bold text-navy text-sm uppercase tracking-widest mb-4">Coverage</h3>
                    <p class="font-body text-gray-700 text-base mb-1">Republic of Ireland</p>
                    <p class="font-body text-gray-400 text-sm">All 26 counties</p>
                </div>

                <div class="w-12 h-px bg-gray-200"></div>

                <div>
                    <h3 class="font-heading font-bold text-navy text-sm uppercase tracking-widest mb-4">Response times</h3>
                    <div class="space-y-2">
                        <div class="flex items-center justify-between">
                            <span class="font-body text-gray-500 text-sm">Emergency call-out</span>
                            <span class="font-body text-navy font-semibold text-sm">Same day</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="font-body text-gray-500 text-sm">General enquiry</span>
                            <span class="font-body text-gray-700 text-sm">Within 24 hours</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="font-body text-gray-500 text-sm">Equipment quote</span>
                            <span class="font-body text-gray-700 text-sm">2 – 3 business days</span>
                        </div>
                    </div>
                </div>

                <div class="w-12 h-px bg-gray-200"></div>

                <div>
                    <img src="/images/logo/electrolux-partner.png"
                         alt="Authorised Electrolux Professional Partner"
                         class="h-28 w-auto object-contain">
                </div>

            </div>

            <!-- RIGHT: form (3/5) -->
            <div class="lg:col-span-3">

                @if (session('success'))
                <div class="bg-green-50 border border-green-200 rounded-xl p-4 mb-7 flex items-start gap-3">
                    <svg class="w-4 h-4 text-green-600 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <p class="font-body text-green-800 text-sm">{{ session('success') }}</p>
                </div>
                @endif

                @if ($errors->any())
                <div class="bg-red-50 border border-red-200 rounded-xl p-4 mb-7">
                    <ul class="space-y-1">
                        @foreach ($errors->all() as $error)
                        <li class="font-body text-red-600 text-sm flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-red-500 flex-shrink-0"></span>{{ $error }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-5" data-utm>
                    @csrf
                    <input type="hidden" name="utm_source">
                    <input type="hidden" name="utm_medium">
                    <input type="hidden" name="utm_campaign">
                    <input type="hidden" name="utm_content">
                    <input type="hidden" name="utm_term">
                    <input type="hidden" name="page_source">

                    {{-- Name + Company --}}
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block font-body text-sm font-medium text-gray-700 mb-1.5">
                                Full name <span class="text-red-400">*</span>
                            </label>
                            <input type="text" name="name" required value="{{ old('name') }}"
                                   placeholder="Your name"
                                   class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800
                                          focus:outline-none focus:ring-2 focus:ring-navy/20
                                          placeholder-gray-400 transition-all">
                        </div>
                        <div>
                            <label class="block font-body text-sm font-medium text-gray-700 mb-1.5">
                                Company <span class="text-red-400">*</span>
                            </label>
                            <input type="text" name="company" required value="{{ old('company') }}"
                                   placeholder="Company name"
                                   class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800
                                          focus:outline-none focus:ring-2 focus:ring-navy/20
                                          placeholder-gray-400 transition-all">
                        </div>
                    </div>

                    {{-- Email + Phone --}}
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block font-body text-sm font-medium text-gray-700 mb-1.5">
                                Email <span class="text-red-400">*</span>
                            </label>
                            <input type="email" name="email" required value="{{ old('email') }}"
                                   placeholder="you@company.ie"
                                   class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800
                                          focus:outline-none focus:ring-2 focus:ring-navy/20
                                          placeholder-gray-400 transition-all">
                        </div>
                        <div>
                            <label class="block font-body text-sm font-medium text-gray-700 mb-1.5">
                                Phone <span class="text-red-400">*</span>
                            </label>
                            <input type="tel" name="phone" required value="{{ old('phone') }}"
                                   placeholder="+353 (0)..."
                                   class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800
                                          focus:outline-none focus:ring-2 focus:ring-navy/20
                                          placeholder-gray-400 transition-all">
                        </div>
                    </div>

                    {{-- Enquiry type + Sector --}}
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block font-body text-sm font-medium text-gray-700 mb-1.5">
                                Enquiry type <span class="text-red-400">*</span>
                            </label>
                            <select name="request_type" required
                                    class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800
                                           focus:outline-none focus:ring-2 focus:ring-navy/20 cursor-pointer transition-all">
                                <option value="">Select type</option>
                                <option value="breakdown"       {{ old('request_type') === 'breakdown'       ? 'selected' : '' }}>Breakdown / Repair</option>
                                <option value="contract"        {{ old('request_type') === 'contract'        ? 'selected' : '' }}>Service Contract</option>
                                <option value="rental"          {{ old('request_type') === 'rental'          ? 'selected' : '' }}>Equipment Rental</option>
                                <option value="equipment_quote" {{ old('request_type') === 'equipment_quote' ? 'selected' : '' }}>Equipment Quote</option>
                                <option value="parts"           {{ old('request_type') === 'parts'           ? 'selected' : '' }}>Parts Enquiry</option>
                                <option value="other"           {{ old('request_type') === 'other'           ? 'selected' : '' }}>General Enquiry</option>
                            </select>
                        </div>
                        <div>
                            <label class="block font-body text-sm font-medium text-gray-700 mb-1.5">
                                Sector <span class="text-red-400">*</span>
                            </label>
                            <select name="sector" required
                                    class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800
                                           focus:outline-none focus:ring-2 focus:ring-navy/20 cursor-pointer transition-all">
                                <option value="">Select sector</option>
                                <option value="healthcare"  {{ old('sector') === 'healthcare'  ? 'selected' : '' }}>Healthcare</option>
                                <option value="hospitality" {{ old('sector') === 'hospitality' ? 'selected' : '' }}>Hospitality</option>
                                <option value="care"        {{ old('sector') === 'care'        ? 'selected' : '' }}>Care Facilities</option>
                                <option value="commercial"  {{ old('sector') === 'commercial'  ? 'selected' : '' }}>Commercial &amp; Industrial</option>
                            </select>
                        </div>
                    </div>

                    {{-- Location + Equipment --}}
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block font-body text-sm font-medium text-gray-700 mb-1.5">
                                Site location / county <span class="text-red-400">*</span>
                            </label>
                            <input type="text" name="location" required value="{{ old('location') }}"
                                   placeholder="e.g. Dublin, Cork..."
                                   class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800
                                          focus:outline-none focus:ring-2 focus:ring-navy/20
                                          placeholder-gray-400 transition-all">
                        </div>
                        <div>
                            <label class="block font-body text-sm font-medium text-gray-700 mb-1.5">
                                Equipment <span class="text-gray-400 font-normal text-xs">(if known)</span>
                            </label>
                            <input type="text" name="equipment" value="{{ old('equipment') }}"
                                   placeholder="Brand / model"
                                   class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800
                                          focus:outline-none focus:ring-2 focus:ring-navy/20
                                          placeholder-gray-400 transition-all">
                        </div>
                    </div>

                    {{-- Message --}}
                    <div>
                        <label class="block font-body text-sm font-medium text-gray-700 mb-1.5">
                            Message
                        </label>
                        <textarea name="message" rows="5"
                                  placeholder="Describe the issue or what you need — the more context the better."
                                  class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800
                                         focus:outline-none focus:ring-2 focus:ring-navy/20
                                         placeholder-gray-400 resize-none leading-relaxed transition-all">{{ old('message') }}</textarea>
                    </div>

                    {{-- GDPR --}}
                    <div class="space-y-2">
                        <label class="flex items-start gap-3 cursor-pointer">
                            <input type="checkbox" name="gdpr_consent" required value="1"
                                   {{ old('gdpr_consent') ? 'checked' : '' }}
                                   class="mt-0.5 w-4 h-4 rounded border-gray-300 text-navy focus:ring-navy/30 flex-shrink-0 cursor-pointer">
                            <span class="font-body text-xs text-gray-500 leading-relaxed">
                                I agree to ILS processing my details to respond to this enquiry. <span class="text-red-400">*</span>
                                <a href="{{ route('privacy') }}" class="underline hover:text-navy transition-colors" target="_blank">Privacy Policy</a>.
                            </span>
                        </label>
                        <label class="flex items-start gap-3 cursor-pointer">
                            <input type="checkbox" name="marketing_consent" value="1"
                                   {{ old('marketing_consent') ? 'checked' : '' }}
                                   class="mt-0.5 w-4 h-4 rounded border-gray-300 text-navy focus:ring-navy/30 flex-shrink-0 cursor-pointer">
                            <span class="font-body text-xs text-gray-400 leading-relaxed">
                                I'm happy to receive occasional updates from ILS. (Optional)
                            </span>
                        </label>
                    </div>

                    {{-- Submit --}}
                    <div class="pt-1">
                        <button type="submit"
                                class="inline-flex items-center gap-2 bg-navy hover:bg-[#0a2550]
                                       text-white font-body font-semibold px-8 py-3.5 rounded-lg text-sm
                                       transition-colors duration-200 cursor-pointer">
                            Send message
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</section>


@endsection
