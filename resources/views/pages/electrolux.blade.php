@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="bg-navy py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 bg-orange/20 border border-orange/40 rounded-full px-4 py-1.5 mb-6">
                <svg class="w-4 h-4 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                </svg>
                <span class="text-sm font-body text-orange font-semibold">Authorised Electrolux Professional Partner</span>
            </div>
            <h1 class="font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-5">
                Why Irish Laundry Systems + Electrolux Professional Works
            </h1>
            <p class="font-body text-blue-200 text-xl mb-4 font-semibold">Manufacturer-backed support. Genuine parts. Engineering expertise.</p>
            <p class="font-body text-gray-300 text-lg leading-relaxed max-w-2xl">
                ILS is an Authorised Electrolux Professional Partner — which means our engineers are trained to manufacturer standards, we stock and source genuine OEM parts, and our customers get access to the full Electrolux Professional range of commercial laundry equipment.
            </p>
        </div>
    </div>
</section>

<!-- PROOF BAR -->
@include('components.proof-bar')

<!-- PARTNERSHIP OVERVIEW -->
<section class="py-16 lg:py-24 bg-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">
            <div>
                <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-6">What the Partnership Means</h2>
                <p class="font-body text-gray-600 leading-relaxed mb-4">
                    Electrolux Professional is one of the world's leading manufacturers of commercial laundry equipment. Their range covers washers, dryers, barrier washers, ironers and drying cabinets — used in healthcare, hospitality, care and commercial settings globally.
                </p>
                <p class="font-body text-gray-600 leading-relaxed mb-4">
                    Authorised Partner status means ILS has met Electrolux Professional's requirements for training, technical capability and parts access. It is not a standard commercial distributor arrangement — it reflects ongoing investment in the skills and support infrastructure required to represent the brand correctly.
                </p>
                <p class="font-body text-gray-600 leading-relaxed mb-6">
                    For customers, it means they are working with an engineer who knows the equipment to the level the manufacturer expects — not an engineer working from generic training and non-genuine parts.
                </p>
                <div class="bg-navy/5 border border-navy/10 rounded-xl p-5">
                    <p class="font-body text-navy font-semibold text-sm">
                        ILS only uses the text designation "Authorised Electrolux Professional Partner" — we do not reproduce Electrolux trademarks or logos. For information about Electrolux Professional's equipment range, please visit their official website.
                    </p>
                </div>
            </div>
            <div class="space-y-5">
                <h2 class="font-heading font-bold text-navy text-2xl mb-2">What Customers Get</h2>

                <!-- 3 benefit cards -->
                <div class="bg-white border border-border rounded-xl p-6">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg bg-orange/10 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-heading font-semibold text-navy text-base mb-1">Manufacturer-Trained Engineers</h3>
                            <p class="font-body text-gray-600 text-sm leading-relaxed">ILS engineers are trained to Electrolux Professional standards — meaning they diagnose and repair the equipment to the specification the manufacturer expects.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white border border-border rounded-xl p-6">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-heading font-semibold text-navy text-base mb-1">Genuine OEM Parts</h3>
                            <p class="font-body text-gray-600 text-sm leading-relaxed">We source and fit genuine Electrolux Professional parts — not generic alternatives. This matters for equipment longevity, warranty considerations and first-fix rate.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white border border-border rounded-xl p-6">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg bg-steel/10 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-steel" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 2.625c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125m16.5 5.625c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-heading font-semibold text-navy text-base mb-1">Full Equipment Range</h3>
                            <p class="font-body text-gray-600 text-sm leading-relaxed">Access to the full Electrolux Professional commercial laundry range — washers, dryers, barrier washers, ironers and drying cabinets — through ILS supply and installation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- GENUINE PARTS & AFTERCARE -->
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-4">Genuine Parts &amp; Aftercare</h2>
            <p class="font-body text-gray-600 text-lg max-w-2xl mx-auto">Why genuine parts matter — and what it means for your operation.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-bg border border-border rounded-xl p-6">
                <h3 class="font-heading font-semibold text-navy text-base mb-2">First-Fix Rate</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">Using genuine parts means the right component, correct specification, first time. This improves first-visit repair rates and reduces the time your equipment is out of service.</p>
            </div>
            <div class="bg-bg border border-border rounded-xl p-6">
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Equipment Longevity</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">Commercial laundry equipment is a significant investment. Genuine OEM parts maintain the manufacturer's tolerances and contribute to equipment longevity and reliability over time.</p>
            </div>
            <div class="bg-bg border border-border rounded-xl p-6">
                <h3 class="font-heading font-semibold text-navy text-base mb-2">Warranty &amp; Governance</h3>
                <p class="font-body text-gray-600 text-sm leading-relaxed">For new equipment under manufacturer warranty, genuine parts are generally required to maintain warranty status. In regulated environments, parts provenance can also be a governance consideration.</p>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
@include('components.testimonials', ['heading' => 'What customers say about our service'])

<!-- CTA BAND -->
@include('components.cta-band', [
    'heading' => 'Talk to an engineer about Electrolux Professional equipment',
    'subheading' => 'Supply, installation and long-term support — all from an Authorised Electrolux Professional Partner.',
    'primaryText' => 'Talk to an Engineer',
    'primaryHref' => '/contact',
])

@endsection
