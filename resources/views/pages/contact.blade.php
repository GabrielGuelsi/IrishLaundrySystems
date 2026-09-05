@extends('layouts.app')

@section('pageTitle', 'Contact Irish Laundry Systems | Request an Assessment')
@section('metaDescription', 'Request an assessment for service contracts, rental options, breakdown support or equipment planning. We confirm next steps and availability once we have site details.')

@section('content')

{{-- ═══════════════════════════════════════════════════
     CONTACT — Request a Service Assessment
═══════════════════════════════════════════════════ --}}

@if (session('success'))

{{-- ── SUCCESS PAGE (replaces entire page) ── --}}
<section class="bg-white min-h-screen flex items-center">
    <div class="max-w-3xl mx-auto px-6 sm:px-10 py-24 w-full flex flex-col items-center text-center">

        <div class="w-20 h-20 rounded-full flex items-center justify-center mb-6" style="background:#eef5fd;">
            <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="#148af4" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
            </svg>
        </div>

        <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">Request received</p>
        <h2 class="font-heading font-bold text-navy text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-4">We'll be in touch shortly</h2>
        <p class="font-body text-gray-500 text-base leading-relaxed max-w-md mb-12">
            Your request has been sent. One of our engineers will review your details and confirm the next step with you.
        </p>

        {{-- What happens next --}}
        <div class="w-full rounded-xl overflow-hidden mb-10">
            <div class="px-6 sm:px-8 lg:px-16 py-10" style="background:#eef5fd;">
                <div class="flex items-center justify-center gap-2 mb-8">
                    <div class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background:rgba(20,138,244,0.15);">
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="#148af4" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                        </svg>
                    </div>
                    <p class="font-body font-bold text-navy text-xs uppercase tracking-[0.22em]">What happens next</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-6 sm:gap-0">
                    @foreach([
                        ['num' => '1', 'title' => 'We review your request',  'desc' => 'We assess the site, enquiry and any equipment information provided.'],
                        ['num' => '2', 'title' => 'We clarify the details',    'desc' => 'We contact you if we need more information about the equipment, access or timing.'],
                        ['num' => '3', 'title' => 'We confirm next steps',     'desc' => 'We confirm the recommended action, availability and expected timing.'],
                    ] as $i => $step)
                    <div class="flex-1 flex flex-col items-center text-center px-4">
                        <div class="flex items-center w-full mb-4">
                            @if($i > 0)<div class="flex-1 h-px" style="background:rgba(20,138,244,0.25);"></div>@else<div class="flex-1"></div>@endif
                            <div class="w-10 h-10 rounded-full bg-[#148af4] flex items-center justify-center flex-shrink-0" style="min-width:2.5rem;">
                                <span class="font-heading font-bold text-white text-sm">{{ $step['num'] }}</span>
                            </div>
                            @if($i < 2)<div class="flex-1 h-px" style="background:rgba(20,138,244,0.25);"></div>@else<div class="flex-1"></div>@endif
                        </div>
                        <p class="font-heading font-bold text-navy text-sm leading-snug mb-1">{{ $step['title'] }}</p>
                        <p class="font-body text-gray-500 text-sm leading-relaxed max-w-[180px]">{{ $step['desc'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <a href="{{ route('home') }}"
           class="inline-flex items-center gap-2 text-navy font-body font-bold text-sm hover:text-[#148af4] transition-colors">
            <svg class="w-4 h-4 rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
            </svg>
            Back to homepage
        </a>

    </div>
</section>

@else

{{-- HERO — typographic, navy, no image --}}
<section class="relative overflow-hidden" style="background-color:#011E41;">
    <img src="/images/logo/electrolux-partner.png" alt="Authorised Electrolux Professional Partner"
         class="hidden lg:block absolute top-1/2 -translate-y-1/2 right-40 z-10 w-[320px] h-auto object-contain"
         style="filter:brightness(0) invert(1);">
    <div class="relative max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-16 lg:py-[72px]">
        <div class="max-w-[640px] reveal reveal-left">
            <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-[15px]">Contact</p>
            <h1 class="font-heading font-bold text-white text-2xl sm:text-4xl lg:text-5xl leading-tight mb-[23px]">
                Request an Assessment
            </h1>
            <p class="font-body text-white/80 text-base leading-relaxed mb-[30px] max-w-[600px]">
                For equipment, equipment rental, preventive maintenance, repairs or aftercare, share a few details and our team will confirm the next step.
            </p>
            <div class="flex flex-wrap items-center gap-4">
                <a href="#contact-form"
                   class="inline-flex items-center gap-2 bg-white text-navy font-body font-bold text-base px-6 py-3 rounded-lg hover:bg-white/90 transition-colors">
                    Send Request
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
                <a href="tel:+35314910402"
                   class="inline-flex items-center gap-2 border border-white/40 text-white font-body font-bold text-base px-6 py-3 rounded-lg hover:border-white transition-colors">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/>
                    </svg>
                    Call Our Team
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Spacer between hero and strip --}}
<div class="bg-white h-6 lg:h-7"></div>

{{-- FULL-WIDTH What to include strip --}}
<div class="bg-navy px-6 sm:px-10 lg:px-20 py-11 lg:py-12">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">

                    {{-- Left: heading --}}
                    <div class="lg:col-span-3">
                        <h2 class="font-heading font-bold text-white text-2xl sm:text-4xl lg:text-5xl leading-tight text-balance mb-3">
                            What to <span class="text-[#148af4]">include</span>
                        </h2>
                        <p class="font-body text-white/60 text-base leading-relaxed">
                            Share a few details so we can understand your request and respond with the right information.
                        </p>
                    </div>

                    {{-- Right: 4 categories (no arrows) --}}
                    <div class="lg:col-span-9 grid grid-cols-2 lg:grid-cols-4 gap-x-4 gap-y-8 lg:gap-6">

                        {{-- 1. Site details --}}
                        <div class="text-center">
                            <div class="flex justify-center mb-4">
                                <img src="{{ asset('images/icons/287.png') }}" alt="" class="w-14 h-14 object-contain">
                            </div>
                            <p class="font-heading font-bold text-white text-sm lg:text-base mb-1">Site details</p>
                            <p class="font-body text-white/55 text-xs lg:text-sm leading-snug">Location and sector</p>
                        </div>

                        {{-- 2. Enquiry type --}}
                        <div class="text-center">
                            <div class="flex justify-center mb-4">
                                <img src="{{ asset('images/icons/288.png') }}" alt="" class="w-14 h-14 object-contain">
                            </div>
                            <p class="font-heading font-bold text-white text-sm lg:text-base mb-1">Enquiry type</p>
                            <p class="font-body text-white/55 text-xs lg:text-sm leading-snug">Equipment, equipment rental, contracts, repairs or aftercare</p>
                        </div>

                        {{-- 3. Equipment details --}}
                        <div class="text-center">
                            <div class="flex justify-center mb-4">
                                <img src="{{ asset('images/icons/289.png') }}" alt="" class="w-14 h-14 object-contain">
                            </div>
                            <p class="font-heading font-bold text-white text-sm lg:text-base mb-1">Equipment details</p>
                            <p class="font-body text-white/55 text-xs lg:text-sm leading-snug">Type, brand, model and quantity if known</p>
                        </div>

                        {{-- 4. Timing & priorities --}}
                        <div class="text-center">
                            <div class="flex justify-center mb-4">
                                <img src="{{ asset('images/icons/290.png') }}" alt="" class="w-14 h-14 object-contain">
                            </div>
                            <p class="font-heading font-bold text-white text-sm lg:text-base mb-1">Timing &amp; priorities</p>
                            <p class="font-body text-white/55 text-xs lg:text-sm leading-snug">Preferred timeframe and any operational impact</p>
                        </div>

                    </div>
                </div>
</div>

{{-- FORM + SIDEBAR --}}
<section id="contact-form" class="bg-white pt-14 pb-24 lg:pb-32">
    <div class="max-w-5xl mx-auto px-6 sm:px-10">

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-16 lg:gap-20">

            {{-- LEFT: Form (3/5) --}}
            <div class="lg:col-span-3">

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

                @include('components.enquiry-form', ['pageSource' => 'contact', 'buttonText' => 'Send Request'])

            </div>

            {{-- RIGHT: Sidebar (2/5) --}}
            <div class="lg:col-span-2 space-y-10">

                {{-- Contact info --}}
                <div>
                    <h3 class="font-body font-bold text-navy text-xs uppercase tracking-[0.22em] mb-5">Contact Details</h3>
                    <div class="space-y-4">
                        <div>
                            <a href="tel:+35314910402"
                               class="font-body text-gray-700 text-base hover:text-navy transition-colors block font-bold">
                                +353 1 491 0402
                            </a>
                            <p class="font-body text-gray-400 text-sm mt-0.5">Mon–Fri, 8:00–17:00 · Emergency line available</p>
                        </div>
                        <div>
                            <a href="mailto:contact@irishlaundrysystems.com"
                               class="font-body text-gray-700 text-sm hover:text-navy transition-colors block">
                                contact@irishlaundrysystems.com
                            </a>
                        </div>
                        <div>
                            <p class="font-body text-gray-700 text-sm font-bold mb-1">Address</p>
                            <address class="font-body text-gray-500 text-sm not-italic leading-relaxed">
                                95 Ranelagh Village<br>
                                Ranelagh<br>
                                Dublin 6, D06 VTW5<br>
                                Dublin, Ireland
                            </address>
                        </div>
                    </div>
                </div>

                <div class="w-10 h-px bg-gray-200"></div>

                {{-- FAQs --}}
                <div x-data="{ open: null }">
                    <h3 class="font-body font-bold text-navy text-xs uppercase tracking-[0.22em] mb-5">FAQs</h3>
                    <div class="space-y-0 divide-y divide-gray-100">

                        @foreach([
                            [
                                'q' => 'What information should I include?',
                                'a' => 'Include the site location, enquiry type, preferred timeframe and any equipment details you have, such as type, brand, model and quantity. For a breakdown, also include the symptoms and how the issue is affecting the operation.',
                            ],
                            [
                                'q' => 'Do you offer service contracts and equipment rental?',
                                'a' => 'Yes. Irish Laundry Systems provides preventive maintenance contracts and equipment rental alongside new equipment, installation, repairs and aftercare.',
                            ],
                            [
                                'q' => 'How quickly will you respond?',
                                'a' => 'Urgent breakdowns are prioritised. For equipment down or an immediate service requirement, call our emergency line on +353 1 491 0402. Other enquiries are reviewed according to the request, location and preferred timeframe.',
                            ],
                            [
                                'q' => 'Which sectors do you support?',
                                'a' => 'We support healthcare, care facilities, hospitality and commercial and industrial sites across Ireland.',
                            ],
                        ] as $i => $faq)
                        <div>
                            <button @click="open = open === {{ $i }} ? null : {{ $i }}"
                                    class="w-full flex items-start justify-between gap-4 py-4 text-left group">
                                <span class="font-body font-bold text-navy text-sm leading-snug">{{ $faq['q'] }}</span>
                                <span class="flex-shrink-0 text-gray-400 transition-transform duration-200 mt-0.5"
                                      :class="open === {{ $i }} ? 'rotate-45' : ''">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                                    </svg>
                                </span>
                            </button>
                            <div x-show="open === {{ $i }}" x-collapse>
                                <p class="font-body text-gray-500 text-sm leading-relaxed pb-4">{{ $faq['a'] }}</p>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

                <div class="w-10 h-px bg-gray-200"></div>

                {{-- Coverage map --}}
                <div>
                    <h3 class="font-body font-bold text-navy text-xs uppercase tracking-[0.22em] mb-4">Coverage area</h3>
                    <div class="rounded-xl overflow-hidden border border-gray-100" style="height:200px;">
                        <iframe
                            src="https://www.openstreetmap.org/export/embed.html?bbox=-10.7%2C51.3%2C-5.8%2C55.5&amp;layer=mapnik"
                            width="100%"
                            height="200"
                            style="border:0; display:block;"
                            loading="lazy"
                            title="Republic of Ireland coverage area">
                        </iframe>
                    </div>
                    <p class="font-body text-gray-400 text-xs mt-2">Republic of Ireland, all 26 counties</p>
                </div>

            </div>

        </div>

        {{-- What happens next --}}
        <div class="mt-16 lg:mt-20 rounded-xl overflow-hidden">
            <div class="px-6 sm:px-8 lg:px-12 py-10" style="background:#eef5fd;">
                <div class="flex items-center gap-2 mb-6">
                    <div class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background:rgba(20,138,244,0.15);">
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="#148af4" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                        </svg>
                    </div>
                    <p class="font-body font-bold text-navy text-xs uppercase tracking-[0.22em]">What happens next</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-6 sm:gap-0">
                    @php $nextSteps = [
                        ['num' => '1', 'title' => 'We review your request',  'desc' => 'We assess the site, enquiry and any equipment information provided.'],
                        ['num' => '2', 'title' => 'We clarify the details',    'desc' => 'We contact you if we need more information about the equipment, access or timing.'],
                        ['num' => '3', 'title' => 'We confirm next steps',     'desc' => 'We confirm the recommended action, availability and expected timing.'],
                    ]; @endphp
                    @foreach($nextSteps as $i => $step)
                    <div class="flex-1 flex flex-col items-center text-center px-4">
                        <div class="flex items-center w-full mb-3">
                            @if($i > 0)
                            <div class="flex-1 h-px" style="background:rgba(20,138,244,0.25);"></div>
                            @else
                            <div class="flex-1"></div>
                            @endif
                            <div class="w-8 h-8 rounded-full bg-[#148af4] flex items-center justify-center flex-shrink-0 mx-auto" style="min-width:2rem;">
                                <span class="font-heading font-bold text-white text-xs">{{ $step['num'] }}</span>
                            </div>
                            @if($i < count($nextSteps) - 1)
                            <div class="flex-1 h-px" style="background:rgba(20,138,244,0.25);"></div>
                            @else
                            <div class="flex-1"></div>
                            @endif
                        </div>
                        <p class="font-heading font-bold text-navy text-sm leading-snug mb-1">{{ $step['title'] }}</p>
                        <p class="font-body text-gray-500 text-sm leading-relaxed">{{ $step['desc'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</section>

@endif

@endsection
