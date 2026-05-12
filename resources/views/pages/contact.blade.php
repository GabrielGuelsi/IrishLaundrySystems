@extends('layouts.app')

@section('pageTitle', 'Contact Irish Laundry Systems | Request a Service Assessment')
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

        <p class="font-body font-semibold text-[#148af4] text-xs uppercase tracking-widest mb-3">Request received</p>
        <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl mb-4">We'll be in touch shortly.</h2>
        <p class="font-body text-gray-500 text-base leading-relaxed max-w-md mb-12">
            Your request has been sent. One of our engineers will review your details and confirm the next step with you.
        </p>

        {{-- What happens next --}}
        <div class="w-full rounded-xl overflow-hidden mb-10">
            <div class="px-8 lg:px-16 py-10" style="background:#eef5fd;">
                <div class="flex items-center justify-center gap-2 mb-8">
                    <div class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background:rgba(20,138,244,0.15);">
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="#148af4" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                        </svg>
                    </div>
                    <p class="font-heading font-bold text-navy text-xs uppercase tracking-widest">What happens next</p>
                </div>
                <div class="flex gap-0">
                    @foreach([
                        ['num' => '1', 'title' => 'We review your details',      'desc' => 'Your request is assessed against site, equipment and urgency.'],
                        ['num' => '2', 'title' => 'We may ask triage questions', 'desc' => 'A quick follow-up if we need to clarify scope or access.'],
                        ['num' => '3', 'title' => 'We confirm next steps',       'desc' => 'We confirm approach, availability and what to expect from there.'],
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
           class="inline-flex items-center gap-2 text-navy font-heading font-bold text-sm hover:text-[#148af4] transition-colors tracking-wide">
            <svg class="w-4 h-4 rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
            </svg>
            Back to homepage
        </a>

    </div>
</section>

@else

{{-- HERO IMAGE --}}
<section class="relative overflow-hidden" style="height:480px; min-height:360px; background-color:#011E41;">

    <img src="/images/hero/hero-technician-inspection.png"
         alt="ILS engineer performing a service assessment on commercial laundry equipment"
         loading="eager" decoding="async"
         class="absolute inset-0 w-full h-full object-cover object-center">

    {{-- Gradient overlay --}}
    <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.95) 0%, rgba(1,30,65,0.80) 40%, rgba(1,30,65,0.30) 70%, transparent 100%);"></div>

    {{-- Content --}}
    <div class="relative z-10 h-full flex items-center">
        <div class="max-w-5xl mx-auto w-full px-6 sm:px-10">
            <div class="max-w-xl">
                <p class="font-heading font-bold text-[#148af4] text-xs uppercase tracking-widest mb-3">Service Assessment</p>
                <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl xl:text-6xl leading-tight mb-5">
                    Request a Service<br>Assessment
                </h1>
                <p class="font-body text-white/75 text-lg leading-relaxed mb-8">
                    Share site location(s), equipment type/brand and urgency. We will confirm next steps and availability.
                </p>
                <div class="flex flex-wrap items-center gap-4">
                    <a href="#contact-form"
                       class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
                        Send Request
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                    <a href="tel:+353000000000"
                       class="inline-flex items-center gap-2 border border-white/40 text-white font-heading font-bold text-sm px-6 py-3 rounded-lg hover:border-white transition-colors tracking-wide">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/>
                        </svg>
                        Call an Engineer
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>

{{-- FORM + SIDEBAR --}}
<section id="contact-form" class="bg-white pt-14 pb-24 lg:pb-32">
    <div class="max-w-5xl mx-auto px-6 sm:px-10">

        {{-- Infographic strip --}}
        <div class="rounded-2xl overflow-hidden mb-10" style="box-shadow:0 1px 3px rgba(0,0,0,0.08);">

            {{-- PART 1: What to include — horizontal flow --}}
            <div class="bg-navy px-8 lg:px-14 py-10 lg:py-12">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">

                    {{-- Left: heading --}}
                    <div class="lg:col-span-3">
                        <h2 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-tight mb-3">
                            What to <span class="text-[#148af4]">include</span>.
                        </h2>
                        <p class="font-body text-white/60 text-sm leading-relaxed">
                            Share these details to get the most accurate and fastest response.
                        </p>
                    </div>

                    {{-- Right: 4-step horizontal flow --}}
                    <div class="lg:col-span-9 flex items-start justify-between gap-2 sm:gap-3 flex-wrap sm:flex-nowrap">

                        {{-- Step 1: Site location(s) --}}
                        <div class="flex-1 min-w-[110px] text-center">
                            <div class="flex justify-center mb-4">
                                <svg class="w-14 h-14" fill="none" viewBox="0 0 24 24" stroke="#148af4" stroke-width="1.4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/>
                                </svg>
                            </div>
                            <p class="font-heading font-bold text-white text-sm lg:text-base mb-1">Site location(s)</p>
                            <p class="font-body text-white/55 text-xs lg:text-sm leading-snug">County, address or&nbsp;region</p>
                        </div>

                        {{-- Arrow --}}
                        <div class="hidden sm:flex flex-shrink-0 items-center pt-6">
                            <svg class="w-10 lg:w-14 h-3" viewBox="0 0 80 12" fill="none">
                                <path d="M2 6 L70 6 M62 1 L70 6 L62 11" stroke="rgba(20,138,244,0.55)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>

                        {{-- Step 2: Equipment type & brand --}}
                        <div class="flex-1 min-w-[110px] text-center">
                            <div class="flex justify-center mb-4">
                                <img src="/images/icons/brand/Ativo%2010.svg"
                                     class="w-14 h-14"
                                     style="filter:brightness(0) saturate(100%) invert(35%) sepia(96%) saturate(1500%) hue-rotate(196deg) brightness(103%);"
                                     alt="">
                            </div>
                            <p class="font-heading font-bold text-white text-sm lg:text-base mb-1">Equipment type &amp; brand</p>
                            <p class="font-body text-white/55 text-xs lg:text-sm leading-snug">Make, model and age if&nbsp;known</p>
                        </div>

                        {{-- Arrow --}}
                        <div class="hidden sm:flex flex-shrink-0 items-center pt-6">
                            <svg class="w-10 lg:w-14 h-3" viewBox="0 0 80 12" fill="none">
                                <path d="M2 6 L70 6 M62 1 L70 6 L62 11" stroke="rgba(20,138,244,0.55)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>

                        {{-- Step 3: Symptoms & urgency --}}
                        <div class="flex-1 min-w-[110px] text-center">
                            <div class="flex justify-center mb-4">
                                <svg class="w-14 h-14" fill="none" viewBox="0 0 24 24" stroke="#148af4" stroke-width="1.4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"/>
                                </svg>
                            </div>
                            <p class="font-heading font-bold text-white text-sm lg:text-base mb-1">Symptoms &amp; urgency</p>
                            <p class="font-body text-white/55 text-xs lg:text-sm leading-snug">What's happening and how soon it's&nbsp;needed</p>
                        </div>

                        {{-- Arrow --}}
                        <div class="hidden sm:flex flex-shrink-0 items-center pt-6">
                            <svg class="w-10 lg:w-14 h-3" viewBox="0 0 80 12" fill="none">
                                <path d="M2 6 L70 6 M62 1 L70 6 L62 11" stroke="rgba(20,138,244,0.55)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>

                        {{-- Step 4: Number of machines --}}
                        <div class="flex-1 min-w-[110px] text-center">
                            <div class="flex justify-center mb-4">
                                <img src="/images/icons/brand/Ativo%2017.svg"
                                     class="w-14 h-14"
                                     style="filter:brightness(0) saturate(100%) invert(35%) sepia(96%) saturate(1500%) hue-rotate(196deg) brightness(103%);"
                                     alt="">
                            </div>
                            <p class="font-heading font-bold text-white text-sm lg:text-base mb-1">Number of machines</p>
                            <p class="font-body text-white/55 text-xs lg:text-sm leading-snug">How many units on site or&nbsp;affected</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>

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
                            <label class="block font-body text-sm font-light text-gray-700 mb-1.5">
                                Full name <span class="text-red-400">*</span>
                            </label>
                            <input type="text" name="name" required value="{{ old('name') }}"
                                   placeholder="Your name"
                                   class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800
                                          focus:outline-none focus:ring-2 focus:ring-navy/20
                                          placeholder-gray-400 transition-all">
                        </div>
                        <div>
                            <label class="block font-body text-sm font-light text-gray-700 mb-1.5">
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
                            <label class="block font-body text-sm font-light text-gray-700 mb-1.5">
                                Email <span class="text-red-400">*</span>
                            </label>
                            <input type="email" name="email" required value="{{ old('email') }}"
                                   placeholder="you@company.ie"
                                   class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800
                                          focus:outline-none focus:ring-2 focus:ring-navy/20
                                          placeholder-gray-400 transition-all">
                        </div>
                        <div>
                            <label class="block font-body text-sm font-light text-gray-700 mb-1.5">
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
                            <label class="block font-body text-sm font-light text-gray-700 mb-1.5">
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
                            <label class="block font-body text-sm font-light text-gray-700 mb-1.5">
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

                    {{-- Urgency --}}
                    <div>
                        <label class="block font-body text-sm font-medium text-gray-700 mb-1.5">
                            Urgency <span class="text-red-400">*</span>
                        </label>
                        <select name="urgency" required
                                class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800
                                       focus:outline-none focus:ring-2 focus:ring-navy/20 cursor-pointer transition-all">
                            <option value="">How soon do you need this?</option>
                            <option value="today"      {{ old('urgency') === 'today'      ? 'selected' : '' }}>Today — emergency</option>
                            <option value="24_48h"     {{ old('urgency') === '24_48h'     ? 'selected' : '' }}>Within 24–48 hours</option>
                            <option value="this_week"  {{ old('urgency') === 'this_week'  ? 'selected' : '' }}>This week</option>
                            <option value="planning"   {{ old('urgency') === 'planning'   ? 'selected' : '' }}>Planning ahead</option>
                        </select>
                    </div>

                    {{-- Location + Equipment --}}
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block font-body text-sm font-light text-gray-700 mb-1.5">
                                Site location / county <span class="text-red-400">*</span>
                            </label>
                            <input type="text" name="location" required value="{{ old('location') }}"
                                   placeholder="e.g. Dublin, Cork..."
                                   class="w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800
                                          focus:outline-none focus:ring-2 focus:ring-navy/20
                                          placeholder-gray-400 transition-all">
                        </div>
                        <div>
                            <label class="block font-body text-sm font-light text-gray-700 mb-1.5">
                                Equipment <span class="text-gray-400 font-light text-xs">(if known)</span>
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
                        <label class="block font-body text-sm font-light text-gray-700 mb-1.5">
                            Details <span class="text-gray-400 font-light text-xs">(symptoms, number of machines, urgency/impact)</span>
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
                    <div class="flex flex-wrap items-center gap-4 pt-1">
                        <button type="submit"
                                class="inline-flex items-center gap-2 bg-navy hover:bg-[#0a2550]
                                       text-white font-heading font-bold px-8 py-3.5 rounded-lg text-sm
                                       transition-colors duration-200 cursor-pointer tracking-wide">
                            Send Request
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                        </button>
                        <a href="tel:+353000000000"
                           class="inline-flex items-center gap-2 text-navy font-heading font-bold text-sm hover:text-[#148af4] transition-colors tracking-wide">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/>
                            </svg>
                            Call an Engineer
                        </a>
                    </div>

                </form>

            </div>

            {{-- RIGHT: Sidebar (2/5) --}}
            <div class="lg:col-span-2 space-y-10">

                {{-- Contact info --}}
                <div>
                    <h3 class="font-heading font-bold text-navy text-xs uppercase tracking-widest mb-5">Contact</h3>
                    <div class="space-y-4">
                        <div>
                            <a href="tel:+353000000000"
                               class="font-body text-gray-700 text-base hover:text-navy transition-colors block font-bold">
                                +353 (0) 00 000 0000
                            </a>
                            <p class="font-body text-gray-400 text-sm mt-0.5">Mon – Fri, 8am – 5pm · Emergency line available</p>
                        </div>
                        <div>
                            <a href="mailto:info@irishlaunderysystems.ie"
                               class="font-body text-gray-700 text-sm hover:text-navy transition-colors block">
                                info@irishlaunderysystems.ie
                            </a>
                        </div>
                        <div>
                            <p class="font-body text-gray-500 text-sm">Republic of Ireland — all 26 counties</p>
                        </div>
                    </div>
                </div>

                <div class="w-10 h-px bg-gray-200"></div>

                {{-- FAQs --}}
                <div x-data="{ open: null }">
                    <h3 class="font-heading font-bold text-navy text-xs uppercase tracking-widest mb-5">FAQs</h3>
                    <div class="space-y-0 divide-y divide-gray-100">

                        @foreach([
                            [
                                'q' => 'What information should I include?',
                                'a' => 'Site location(s), equipment type/brand, symptoms, number of machines affected, and urgency/impact.',
                            ],
                            [
                                'q' => 'Do you offer contracts and rental?',
                                'a' => 'Yes. We confirm the best next step after assessment.',
                            ],
                            [
                                'q' => 'How quickly will you respond?',
                                'a' => 'We aim to respond within 24 hours. Emergency call-outs can be same day depending on location and availability.',
                            ],
                            [
                                'q' => 'What sectors do you cover?',
                                'a' => 'Healthcare, hospitality, care facilities, and commercial & industrial laundry operations across the Republic of Ireland.',
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

                {{-- Partner badge --}}
                <div>
                    <img src="/images/logo/electrolux-partner.png"
                         alt="Authorised Electrolux Professional Partner"
                         class="h-24 w-auto object-contain">
                </div>

            </div>

        </div>

        {{-- What happens next --}}
        <div class="mt-10 rounded-xl overflow-hidden">
            <div class="px-8 lg:px-12 py-10" style="background:#eef5fd;">
                <div class="flex items-center gap-2 mb-6">
                    <div class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background:rgba(20,138,244,0.15);">
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="#148af4" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                        </svg>
                    </div>
                    <p class="font-heading font-bold text-navy text-sm uppercase tracking-widest">What happens next</p>
                </div>
                <div class="flex gap-0">
                    @php $nextSteps = [
                        ['num' => '1', 'title' => 'We review your details',      'desc' => 'Your request is assessed against site, equipment and urgency.'],
                        ['num' => '2', 'title' => 'We may ask triage questions', 'desc' => 'A quick follow-up if we need to clarify scope or access.'],
                        ['num' => '3', 'title' => 'We confirm next steps',       'desc' => 'We confirm approach, availability and what to expect from there.'],
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
