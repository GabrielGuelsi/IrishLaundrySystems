@props([
    'pageSource'    => 'contact',
    'buttonText'    => 'Send Request',
    'showSiteCount' => false,
])
{{-- Shared enquiry form — used by /contact and /request-assessment.
     Field values match the ContactController validation exactly. --}}
@php $inp = 'w-full bg-[#f7f7f5] border-0 rounded-lg px-4 py-3 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-navy/20 placeholder-gray-400 transition-all'; @endphp
<form action="{{ route('contact.submit') }}" method="POST" class="space-y-5" data-utm>
    @csrf
    <input type="hidden" name="page_source" value="{{ $pageSource }}">
    <input type="hidden" name="utm_source">
    <input type="hidden" name="utm_medium">
    <input type="hidden" name="utm_campaign">
    <input type="hidden" name="utm_content">
    <input type="hidden" name="utm_term">

    {{-- Name + Company --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Full name <span class="text-red-400">*</span></label>
            <input type="text" name="name" required value="{{ old('name') }}" placeholder="Your name" class="{{ $inp }}">
        </div>
        <div>
            <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Company <span class="text-red-400">*</span></label>
            <input type="text" name="company" required value="{{ old('company') }}" placeholder="Company or organisation" class="{{ $inp }}">
        </div>
    </div>

    {{-- Email + Phone --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Email <span class="text-red-400">*</span></label>
            <input type="email" name="email" required value="{{ old('email') }}" placeholder="you@company.ie" class="{{ $inp }}">
        </div>
        <div>
            <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Phone <span class="text-red-400">*</span></label>
            <input type="tel" name="phone" required value="{{ old('phone') }}" placeholder="+353 (0)..." class="{{ $inp }}">
        </div>
    </div>

    {{-- Enquiry type + Sector --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Enquiry type <span class="text-red-400">*</span></label>
            <select name="request_type" required class="{{ $inp }} cursor-pointer">
                <option value="">Select enquiry type</option>
                <option value="contract"        {{ old('request_type') === 'contract'        ? 'selected' : '' }}>Preventive maintenance contract</option>
                <option value="rental"          {{ old('request_type') === 'rental'          ? 'selected' : '' }}>Equipment rental</option>
                <option value="breakdown"       {{ old('request_type') === 'breakdown'       ? 'selected' : '' }}>Repairs &amp; call-outs</option>
                <option value="equipment_quote" {{ old('request_type') === 'equipment_quote' ? 'selected' : '' }}>New equipment / quote</option>
                <option value="parts"           {{ old('request_type') === 'parts'           ? 'selected' : '' }}>Support, parts &amp; aftercare</option>
                <option value="other"           {{ old('request_type') === 'other'           ? 'selected' : '' }}>General enquiry</option>
            </select>
        </div>
        <div>
            <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Sector <span class="text-red-400">*</span></label>
            <select name="sector" required class="{{ $inp }} cursor-pointer">
                <option value="">Select sector</option>
                <option value="healthcare"  {{ old('sector') === 'healthcare'  ? 'selected' : '' }}>Healthcare</option>
                <option value="hospitality" {{ old('sector') === 'hospitality' ? 'selected' : '' }}>Hospitality</option>
                <option value="care"        {{ old('sector') === 'care'        ? 'selected' : '' }}>Care facilities</option>
                <option value="commercial"  {{ old('sector') === 'commercial'  ? 'selected' : '' }}>Commercial &amp; industrial</option>
            </select>
        </div>
    </div>

    {{-- Timeframe + Location --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Timeframe <span class="text-red-400">*</span></label>
            <select name="urgency" required class="{{ $inp }} cursor-pointer">
                <option value="">When do you need this?</option>
                <option value="today"     {{ old('urgency') === 'today'     ? 'selected' : '' }}>Urgent / today</option>
                <option value="24_48h"    {{ old('urgency') === '24_48h'    ? 'selected' : '' }}>Within 24&ndash;48 hours</option>
                <option value="this_week" {{ old('urgency') === 'this_week' ? 'selected' : '' }}>This week</option>
                <option value="planning"  {{ old('urgency') === 'planning'  ? 'selected' : '' }}>Planning ahead</option>
            </select>
        </div>
        <div>
            <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Site location / county <span class="text-red-400">*</span></label>
            <input type="text" name="location" required value="{{ old('location') }}" placeholder="e.g. Dublin, Cork..." class="{{ $inp }}">
        </div>
    </div>

    @if ($showSiteCount)
    {{-- Number of sites --}}
    <div>
        <label class="block font-body text-sm font-light text-gray-700 mb-2">Number of sites</label>
        <div class="flex flex-wrap gap-3">
            @foreach ([['1', '1 site'], ['2-5', '2–5 sites'], ['6+', '6+ sites']] as [$val, $label])
            <label class="cursor-pointer">
                <input type="radio" name="site_count" value="{{ $val }}" class="sr-only peer" {{ old('site_count') === $val ? 'checked' : '' }}>
                <div class="border-2 border-gray-200 rounded-lg px-4 py-2 text-sm font-body font-bold text-gray-600 peer-checked:border-navy peer-checked:bg-navy peer-checked:text-white hover:border-navy transition-all cursor-pointer">{{ $label }}</div>
            </label>
            @endforeach
        </div>
    </div>
    @endif

    {{-- Equipment --}}
    <div>
        <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Equipment details <span class="text-gray-400 font-light text-xs">(if known)</span></label>
        <input type="text" name="equipment" value="{{ old('equipment') }}" placeholder="Type, brand or model" class="{{ $inp }}">
    </div>

    {{-- Message --}}
    <div>
        <label class="block font-body text-sm font-light text-gray-700 mb-1.5">Request details</label>
        <textarea name="message" rows="5" placeholder="Tell us what you need, any equipment details and the effect on your operation, if relevant." class="{{ $inp }} resize-none leading-relaxed">{{ old('message') }}</textarea>
    </div>

    {{-- GDPR + marketing --}}
    <div class="space-y-2">
        <label class="flex items-start gap-3 cursor-pointer">
            <input type="checkbox" name="gdpr_consent" required value="1" {{ old('gdpr_consent') ? 'checked' : '' }} class="mt-0.5 w-4 h-4 rounded border-gray-300 text-navy focus:ring-navy/30 flex-shrink-0 cursor-pointer">
            <span class="font-body text-xs text-gray-500 leading-relaxed">
                I agree to the Privacy Policy and to Irish Laundry Systems using my details to respond to this enquiry. <span class="text-red-400">*</span>
                <a href="{{ route('privacy') }}" class="underline hover:text-navy transition-colors" target="_blank">Privacy Policy</a>.
            </span>
        </label>
        <label class="flex items-start gap-3 cursor-pointer">
            <input type="checkbox" name="marketing_consent" value="1" {{ old('marketing_consent') ? 'checked' : '' }} class="mt-0.5 w-4 h-4 rounded border-gray-300 text-navy focus:ring-navy/30 flex-shrink-0 cursor-pointer">
            <span class="font-body text-xs text-gray-400 leading-relaxed">I would like to receive occasional updates from Irish Laundry Systems. Optional.</span>
        </label>
    </div>

    {{-- Submit --}}
    <div class="pt-1">
        <button type="submit" class="inline-flex items-center gap-2 bg-navy hover:bg-[#0a2550] text-white font-body font-bold px-8 py-3.5 rounded-lg text-sm transition-colors duration-200 cursor-pointer">
            {{ $buttonText }}
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
        </button>
    </div>
</form>
