@extends('layouts.app')

@section('pageTitle', 'Contact Irish Laundry Systems | Get in Touch')
@section('metaDescription', 'Contact ILS for emergency call-outs, service contracts, equipment rental, or general enquiries. Republic of Ireland coverage. Authorised Electrolux Professional partner.')

@section('content')

<!-- ═══════════════════════════════════════════════════
     MAIN — Left info + Right floating form card
═══════════════════════════════════════════════════ -->
<section class="bg-[#eaf0f8] py-20 lg:py-28">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <!-- ── LEFT: info ── -->
            <div>
                <h1 class="font-heading font-bold text-navy text-5xl lg:text-6xl mb-5 leading-tight">Contact Us</h1>
                <p class="font-body text-gray-600 text-base leading-relaxed mb-8 max-w-sm">
                    37 years serving Irish laundry operations. Whether you need emergency support or want to plan ahead — talk directly with our engineering team.
                </p>

                <div class="space-y-3 mb-10">
                    <a href="tel:+353000000000"
                       class="flex items-center gap-2 font-body text-navy font-semibold text-base hover:text-[#148af4] transition-colors">
                        <svg class="w-4 h-4 text-[#148af4] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                        </svg>
                        +353 (0) 00 000 0000
                    </a>
                    <a href="mailto:info@irishlaunderysystems.ie"
                       class="flex items-center gap-2 font-body text-navy font-semibold text-base hover:text-[#148af4] transition-colors">
                        <svg class="w-4 h-4 text-[#148af4] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                        </svg>
                        info@irishlaunderysystems.ie
                    </a>
                </div>

                <!-- 3 info columns -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 pt-8 border-t border-[#d0daea]">
                    @foreach([
                        [
                            'title' => 'Emergency Call-Out',
                            'body'  => 'For breakdowns, calling is always the fastest route. We aim for same-day response across the Republic of Ireland.',
                        ],
                        [
                            'title' => 'Service Contracts',
                            'body'  => 'Ask about planned maintenance packages to keep your laundry operation running without disruption.',
                        ],
                        [
                            'title' => 'Equipment &amp; Rental',
                            'body'  => 'Looking for new machines or a flexible rental solution? We\'ll find the right fit for your operation.',
                        ],
                    ] as $col)
                    <div>
                        <h3 class="font-heading font-bold text-navy text-sm mb-2">{{ $col['title'] }}</h3>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">{!! $col['body'] !!}</p>
                    </div>
                    @endforeach
                </div>

                <!-- Response times -->
                <div class="mt-8 bg-navy rounded-2xl p-5">
                    <div class="flex items-center gap-2 mb-4">
                        <svg class="w-4 h-4 text-[#148af4] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <div class="font-heading font-bold text-white text-sm">Response Times</div>
                    </div>
                    <div class="space-y-3">
                        @foreach([
                            ['Emergency call-out',  'Same day',          'text-orange'],
                            ['General enquiry',     'Within 24 hours',   'text-white/90'],
                            ['Equipment quote',     '2–3 business days', 'text-white/90'],
                        ] as [$type, $time, $cls])
                        <div class="flex items-center justify-between border-b border-white/10 last:border-0 pb-2 last:pb-0">
                            <span class="font-body text-white/65 text-xs">{{ $type }}</span>
                            <span class="font-body {{ $cls }} font-bold text-xs">{{ $time }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>

            <!-- ── RIGHT: floating form card ── -->
            <div class="bg-white rounded-3xl shadow-2xl p-8 lg:p-10">

                <h2 class="font-heading font-bold text-navy text-2xl mb-1">Get in Touch</h2>
                <p class="font-body text-gray-500 text-sm mb-7">The more context you give us, the better we can respond.</p>

                @if (session('success'))
                <div class="bg-green-50 border border-green-200 rounded-xl p-4 mb-5 flex items-start gap-3">
                    <svg class="w-4 h-4 text-green-600 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <p class="font-body text-green-800 text-sm">{{ session('success') }}</p>
                </div>
                @endif

                @if ($errors->any())
                <div class="bg-red-50 border border-red-200 rounded-xl p-4 mb-5">
                    <ul class="space-y-1">
                        @foreach ($errors->all() as $error)
                        <li class="font-body text-red-700 text-xs flex items-center gap-2">
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

                    {{-- Request type --}}
                    <div>
                        <label class="block text-xs font-body font-bold text-navy uppercase tracking-wide mb-2.5">
                            What do you need? <span class="text-red-500">*</span>
                        </label>
                        <div class="grid grid-cols-3 gap-2">
                            @foreach([
                                ['breakdown',       'Breakdown / Repair'],
                                ['contract',        'Service Contract'],
                                ['rental',          'Equipment Rental'],
                                ['equipment_quote', 'Equipment Quote'],
                                ['parts',           'Parts Enquiry'],
                                ['other',           'General Enquiry'],
                            ] as [$val, $lbl])
                            <label class="cursor-pointer">
                                <input type="radio" name="request_type" value="{{ $val }}"
                                       class="sr-only peer"
                                       {{ old('request_type') === $val ? 'checked' : '' }}>
                                <div class="border-2 border-gray-200 rounded-xl px-3 py-3 text-center bg-[#f8fafc]
                                            peer-checked:border-[#148af4] peer-checked:bg-[#148af4]/5
                                            hover:border-gray-300 transition-all cursor-pointer select-none">
                                    <div class="font-body font-semibold text-navy text-xs leading-tight">{{ $lbl }}</div>
                                </div>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    {{-- Name + Company --}}
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <input type="text" name="name" required value="{{ old('name') }}"
                                   placeholder="Full name"
                                   class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm font-body text-gray-800
                                          focus:outline-none focus:ring-2 focus:ring-[#148af4] focus:border-transparent
                                          placeholder-gray-400 bg-[#f8fafc]">
                        </div>
                        <div>
                            <input type="text" name="company" required value="{{ old('company') }}"
                                   placeholder="Company name"
                                   class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm font-body text-gray-800
                                          focus:outline-none focus:ring-2 focus:ring-[#148af4] focus:border-transparent
                                          placeholder-gray-400 bg-[#f8fafc]">
                        </div>
                    </div>

                    {{-- Email + Phone --}}
                    <div class="grid grid-cols-2 gap-3">
                        <div class="relative">
                            <div class="absolute left-3.5 top-1/2 -translate-y-1/2 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                                </svg>
                            </div>
                            <input type="email" name="email" required value="{{ old('email') }}"
                                   placeholder="Your email"
                                   class="w-full border border-gray-200 rounded-xl pl-10 pr-4 py-3 text-sm font-body text-gray-800
                                          focus:outline-none focus:ring-2 focus:ring-[#148af4] focus:border-transparent
                                          placeholder-gray-400 bg-[#f8fafc]">
                        </div>
                        <div class="relative">
                            <div class="absolute left-3.5 top-1/2 -translate-y-1/2 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                                </svg>
                            </div>
                            <input type="tel" name="phone" required value="{{ old('phone') }}"
                                   placeholder="Phone number"
                                   class="w-full border border-gray-200 rounded-xl pl-10 pr-4 py-3 text-sm font-body text-gray-800
                                          focus:outline-none focus:ring-2 focus:ring-[#148af4] focus:border-transparent
                                          placeholder-gray-400 bg-[#f8fafc]">
                        </div>
                    </div>

                    {{-- Location + Sector --}}
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <input type="text" name="location" required value="{{ old('location') }}"
                                   placeholder="Site location / county"
                                   class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm font-body text-gray-800
                                          focus:outline-none focus:ring-2 focus:ring-[#148af4] focus:border-transparent
                                          placeholder-gray-400 bg-[#f8fafc]">
                        </div>
                        <div>
                            <select name="sector" required
                                    class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm font-body text-gray-800
                                           focus:outline-none focus:ring-2 focus:ring-[#148af4] focus:border-transparent
                                           bg-[#f8fafc] cursor-pointer">
                                <option value="">Select sector</option>
                                <option value="healthcare"  {{ old('sector') === 'healthcare'  ? 'selected' : '' }}>Healthcare</option>
                                <option value="hospitality" {{ old('sector') === 'hospitality' ? 'selected' : '' }}>Hospitality</option>
                                <option value="care"        {{ old('sector') === 'care'        ? 'selected' : '' }}>Care Facilities</option>
                                <option value="commercial"  {{ old('sector') === 'commercial'  ? 'selected' : '' }}>Commercial &amp; Industrial</option>
                            </select>
                        </div>
                    </div>

                    {{-- Equipment --}}
                    <div>
                        <input type="text" name="equipment" value="{{ old('equipment') }}"
                               placeholder="Equipment type / brand (if known)"
                               class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm font-body text-gray-800
                                      focus:outline-none focus:ring-2 focus:ring-[#148af4] focus:border-transparent
                                      placeholder-gray-400 bg-[#f8fafc]">
                    </div>

                    {{-- Urgency --}}
                    <div>
                        <label class="block text-xs font-body font-bold text-navy uppercase tracking-wide mb-2.5">
                            Urgency <span class="text-red-500">*</span>
                        </label>
                        <div class="grid grid-cols-4 gap-2">
                            @foreach([
                                ['today',     'Today'],
                                ['24_48h',    '24–48 hrs'],
                                ['this_week', 'This week'],
                                ['planning',  'Planning ahead'],
                            ] as [$val, $lbl])
                            <label class="cursor-pointer">
                                <input type="radio" name="urgency" value="{{ $val }}"
                                       class="sr-only peer"
                                       {{ old('urgency') === $val ? 'checked' : '' }}>
                                <div class="border-2 border-gray-200 rounded-xl px-2 py-3 text-center bg-[#f8fafc]
                                            peer-checked:border-[#148af4] peer-checked:bg-[#148af4]/5
                                            hover:border-gray-300 transition-all cursor-pointer select-none">
                                    <div class="text-xs font-body font-semibold text-navy leading-tight">{{ $lbl }}</div>
                                </div>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    {{-- Message --}}
                    <div>
                        <textarea name="message" rows="4"
                                  placeholder="Describe the issue — machine type, error codes, site details, anything that helps us respond faster."
                                  class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm font-body text-gray-800
                                         focus:outline-none focus:ring-2 focus:ring-[#148af4] focus:border-transparent
                                         placeholder-gray-400 bg-[#f8fafc] resize-none leading-relaxed">{{ old('message') }}</textarea>
                    </div>

                    {{-- GDPR --}}
                    <div class="space-y-2 pt-1 border-t border-gray-100">
                        <label class="flex items-start gap-3 cursor-pointer mt-3">
                            <input type="checkbox" name="gdpr_consent" required value="1"
                                   {{ old('gdpr_consent') ? 'checked' : '' }}
                                   class="mt-0.5 w-4 h-4 rounded border-gray-300 text-[#148af4] focus:ring-[#148af4] flex-shrink-0 cursor-pointer">
                            <span class="font-body text-xs text-gray-500 leading-relaxed">
                                I agree to ILS processing my details to respond to this enquiry. <span class="text-red-500">*</span>
                                <a href="{{ route('privacy') }}" class="text-[#148af4] underline hover:text-navy transition-colors" target="_blank">Privacy Policy</a>.
                            </span>
                        </label>
                        <label class="flex items-start gap-3 cursor-pointer">
                            <input type="checkbox" name="marketing_consent" value="1"
                                   {{ old('marketing_consent') ? 'checked' : '' }}
                                   class="mt-0.5 w-4 h-4 rounded border-gray-300 text-[#148af4] focus:ring-[#148af4] flex-shrink-0 cursor-pointer">
                            <span class="font-body text-xs text-gray-400 leading-relaxed">
                                I'm happy to receive occasional service updates from ILS. (Optional)
                            </span>
                        </label>
                    </div>

                    {{-- Submit --}}
                    <button type="submit"
                            class="w-full inline-flex items-center justify-center gap-2 bg-[#148af4] hover:bg-blue-500
                                   text-white font-body font-bold px-6 py-4 rounded-xl text-sm
                                   transition-colors duration-200 cursor-pointer shadow-sm">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5"/>
                        </svg>
                        Send Request
                    </button>

                </form>
            </div>

        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════
     BOTTOM — Map + Coverage info
═══════════════════════════════════════════════════ -->
<section class="bg-white border-t border-border">
    <div class="max-w-screen-2xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2">

            <!-- Map -->
            <div class="relative min-h-[400px]">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2383268.748993682!2d-10.669706950000001!3d53.17472295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x485ea58a54396f3d%3A0xa70fdfc2c0f6deb3!2sRepublic%20of%20Ireland!5e0!3m2!1sen!2sie!4v1700000000000"
                    class="absolute inset-0 w-full h-full border-0 block" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <!-- Coverage info -->
            <div class="px-8 sm:px-12 lg:px-16 py-14 lg:py-20 flex flex-col justify-center">
                <p class="font-body text-[#148af4] font-semibold text-sm uppercase tracking-widest mb-3">Our Coverage</p>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl leading-tight mb-4">
                    Serving Ireland,<br>Near and Far
                </h2>
                <p class="font-body text-gray-500 text-sm leading-relaxed mb-8 max-w-xs">
                    Based in Ireland and covering all 26 counties. We install, service, and support commercial laundry equipment wherever you are.
                </p>

                <div class="space-y-5">
                    @foreach([
                        [
                            'icon'  => 'M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z',
                            'label' => 'Phone',
                            'value' => '+353 (0) 00 000 0000',
                            'href'  => 'tel:+353000000000',
                        ],
                        [
                            'icon'  => 'M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75',
                            'label' => 'Email',
                            'value' => 'info@irishlaunderysystems.ie',
                            'href'  => 'mailto:info@irishlaunderysystems.ie',
                        ],
                        [
                            'icon'  => 'M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z',
                            'label' => 'Hours',
                            'value' => 'Monday – Friday: 8:00am – 5:00pm',
                            'href'  => null,
                        ],
                        [
                            'icon'  => 'M15 10.5a3 3 0 11-6 0 3 3 0 016 0zM19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z',
                            'label' => 'Coverage',
                            'value' => 'Republic of Ireland — all 26 counties',
                            'href'  => null,
                        ],
                    ] as $item)
                    <div class="flex items-start gap-3.5">
                        <div class="w-8 h-8 rounded-lg bg-navy flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}"/>
                            </svg>
                        </div>
                        <div>
                            <div class="font-body font-bold text-navy text-xs uppercase tracking-wide mb-0.5">{{ $item['label'] }}</div>
                            @if($item['href'])
                            <a href="{{ $item['href'] }}" class="font-body text-gray-600 text-sm hover:text-[#148af4] transition-colors">{{ $item['value'] }}</a>
                            @else
                            <div class="font-body text-gray-600 text-sm">{{ $item['value'] }}</div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Electrolux logo -->
                <div class="mt-10 pt-8 border-t border-border">
                    <img src="/images/logo/electrolux-partner.png" alt="Authorised Electrolux Professional Partner" class="h-12 w-auto object-contain">
                </div>
            </div>

        </div>
    </div>
</section>

@include('components.partner-strip')

@endsection
