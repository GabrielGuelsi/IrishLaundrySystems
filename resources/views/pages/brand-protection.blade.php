@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="bg-navy py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-1.5 mb-6">
            <svg class="w-4 h-4 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
            </svg>
            <span class="text-sm font-body text-gray-200">Official website</span>
        </div>
        <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl mb-5">Irish Laundry Systems (ILS) — Official Website</h1>
        <p class="font-body text-blue-200 text-lg max-w-2xl mx-auto leading-relaxed">
            This is the official website of Irish Laundry Systems, the commercial laundry engineering specialists based in the Republic of Ireland.
        </p>
    </div>
</section>

<!-- PROOF BAR -->
@include('components.proof-bar')

<!-- DISAMBIGUATION -->
<section class="py-16 lg:py-24 bg-bg">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="bg-white border border-border rounded-2xl p-8 lg:p-10 mb-8">
            <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-5">Disambiguation Statement</h2>
            <p class="font-body text-gray-600 leading-relaxed mb-4">
                The name "Irish Laundry Systems" and the abbreviation "ILS" are used to identify this specific commercial laundry engineering business, established in 1987, operating in the Republic of Ireland.
            </p>
            <p class="font-body text-gray-600 leading-relaxed mb-4">
                We are not affiliated with any other business operating under similar names. If you have been contacted by, or have made contact with, an organisation claiming to be Irish Laundry Systems that cannot be verified through this website, please contact us directly to confirm.
            </p>
            <p class="font-body text-gray-600 leading-relaxed">
                Our contact details and coverage area are stated clearly on our <a href="{{ route('contact') }}" class="text-steel hover:text-navy font-semibold transition-colors">contact page</a>. We cover the Republic of Ireland only (excluding Northern Ireland).
            </p>
        </div>

        <div class="bg-white border border-border rounded-2xl p-8 lg:p-10 mb-8">
            <h2 class="font-heading font-bold text-navy text-2xl mb-5">How to Reach the Real ILS</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-lg bg-navy flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="font-body font-semibold text-navy text-sm mb-1">Phone</div>
                        <a href="tel:+353000000000" class="font-body text-gray-600 text-sm hover:text-steel transition-colors">+353 (0) 00 000 0000</a>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-lg bg-navy flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                        </svg>
                    </div>
                    <div>
                        <div class="font-body font-semibold text-navy text-sm mb-1">Email</div>
                        <a href="mailto:info@irishlaunderysystems.ie" class="font-body text-gray-600 text-sm hover:text-steel transition-colors">info@irishlaunderysystems.ie</a>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-lg bg-navy flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/>
                        </svg>
                    </div>
                    <div>
                        <div class="font-body font-semibold text-navy text-sm mb-1">Website</div>
                        <span class="font-body text-gray-600 text-sm">irishlaunderysystems.ie</span>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-lg bg-navy flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="font-body font-semibold text-navy text-sm mb-1">Coverage</div>
                        <span class="font-body text-gray-600 text-sm">Republic of Ireland only (excl. Northern Ireland)</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- What we do -->
        <div class="bg-white border border-border rounded-2xl p-8 lg:p-10">
            <h2 class="font-heading font-bold text-navy text-2xl mb-6">What Irish Laundry Systems Does</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div class="text-center p-4">
                    <div class="w-12 h-12 rounded-2xl bg-steel/10 flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-steel" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"/>
                        </svg>
                    </div>
                    <h3 class="font-heading font-semibold text-navy text-sm mb-1">Service Contracts</h3>
                    <p class="font-body text-gray-600 text-xs leading-relaxed">Planned preventive maintenance and structured service support for commercial laundry operations.</p>
                </div>
                <div class="text-center p-4">
                    <div class="w-12 h-12 rounded-2xl bg-orange/10 flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/>
                        </svg>
                    </div>
                    <h3 class="font-heading font-semibold text-navy text-sm mb-1">Repairs &amp; Call-outs</h3>
                    <p class="font-body text-gray-600 text-xs leading-relaxed">Reactive breakdown repair and call-out support across the Republic of Ireland.</p>
                </div>
                <div class="text-center p-4">
                    <div class="w-12 h-12 rounded-2xl bg-navy/10 flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 2.625c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125m16.5 5.625c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125"/>
                        </svg>
                    </div>
                    <h3 class="font-heading font-semibold text-navy text-sm mb-1">Equipment &amp; Rental</h3>
                    <p class="font-body text-gray-600 text-xs leading-relaxed">Commercial laundry equipment supply, installation and rental/lease arrangements.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA BAND -->
@include('components.cta-band', [
    'heading' => 'Looking for a commercial laundry engineer?',
    'subheading' => 'You\'re in the right place. Request an assessment and we will respond within 24 hours.',
    'primaryText' => 'Request a Service Assessment',
])

@endsection
