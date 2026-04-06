@extends('layouts.app')

@section('content')

<!-- BREADCRUMB + HERO -->
<section class="bg-navy py-16 lg:py-24">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-2 mb-4 flex-wrap">
            <a href="{{ route('equipment') }}" class="text-gray-400 hover:text-gray-200 text-sm font-body transition-colors">Equipment</a>
            <svg class="w-3 h-3 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
            <a href="{{ route('equipment.category', $categorySlug) }}" class="text-gray-400 hover:text-gray-200 text-sm font-body transition-colors">{{ $category }}</a>
            <svg class="w-3 h-3 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
            <span class="text-gray-300 text-sm font-body">{{ $product }}</span>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
            <div>
                @if (!empty($imagePath))
                <div class="aspect-video bg-navy-light border border-white/10 rounded-2xl overflow-hidden">
                    <img src="{{ asset('storage/' . $imagePath) }}" alt="{{ $product }}"
                         class="w-full h-full object-cover">
                </div>
                @else
                <!-- Placeholder product image -->
                <div class="aspect-video bg-navy-light border border-white/10 rounded-2xl flex items-center justify-center">
                    <svg class="w-24 h-24 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="0.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 010 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.992l-1.004-.827a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <p class="text-center text-xs text-gray-500 font-body mt-2">Product image for illustration — contact ILS for full specifications</p>
                @endif
            </div>
            <div>
                <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-3 py-1 mb-4">
                    <span class="text-xs font-body text-gray-300">{{ $category }}</span>
                </div>
                <h1 class="font-heading font-bold text-white text-3xl lg:text-4xl mb-4">{{ $product }}</h1>
                <p class="font-body text-gray-300 leading-relaxed mb-6">
                    {{ !empty($summary) ? $summary : 'Commercial laundry equipment from the Electrolux Professional range — supplied, installed and supported by Irish Laundry Systems. Engineering-led supply with long-term service capability built in.' }}
                </p>

                <!-- Electrolux Badge -->
                <div class="flex items-center gap-3 bg-white/10 border border-white/20 rounded-lg px-4 py-3 mb-6">
                    <svg class="w-6 h-6 text-orange flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                    </svg>
                    <span class="text-sm font-body text-gray-200">Authorised Electrolux Professional Partner — genuine parts &amp; manufacturer support</span>
                </div>

                <div class="flex flex-col sm:flex-row gap-3">
                    <a href="#quote-form"
                       class="inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-6 py-3.5 rounded-lg text-base transition-colors duration-200 cursor-pointer">
                        Request a Quote
                    </a>
                    <a href="{{ route('service-contracts') }}"
                       class="inline-flex items-center justify-center gap-2 border-2 border-white/30 text-white font-body font-semibold px-6 py-3.5 rounded-lg hover:bg-white/10 transition-colors cursor-pointer text-sm">
                        View Service Contracts
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROOF BAR -->
@include('components.proof-bar')

<!-- SPECS + FORM LAYOUT -->
<section class="py-16 lg:py-20 bg-bg">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- Specs & Info (left 2 cols) -->
            <div class="lg:col-span-2 space-y-6">

                <!-- Key Specs -->
                <div class="bg-white border border-border rounded-2xl p-6 lg:p-8">
                    <h2 class="font-heading font-bold text-navy text-xl mb-5">Key Specifications</h2>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm font-body">
                            <tbody class="divide-y divide-border">
                                <tr>
                                    <td class="py-3 pr-4 font-semibold text-navy w-1/3">Category</td>
                                    <td class="py-3 text-gray-600">{{ $category }}</td>
                                </tr>
                                <tr>
                                    <td class="py-3 pr-4 font-semibold text-navy w-1/3">Model</td>
                                    <td class="py-3 text-gray-600">{{ $product }}</td>
                                </tr>
                                @if (!empty($specs))
                                    @foreach ($specs as $key => $val)
                                    <tr>
                                        <td class="py-3 pr-4 font-semibold text-navy w-1/3">{{ $key }}</td>
                                        <td class="py-3 text-gray-600">{{ $val }}</td>
                                    </tr>
                                    @endforeach
                                @else
                                <tr>
                                    <td class="py-3 pr-4 font-semibold text-navy w-1/3">Specifications</td>
                                    <td class="py-3 text-gray-600">Contact ILS for full specification details</td>
                                </tr>
                                @endif
                                <tr>
                                    <td class="py-3 pr-4 font-semibold text-navy w-1/3">Supply</td>
                                    <td class="py-3 text-gray-600">Available for outright purchase or rental/lease</td>
                                </tr>
                                <tr>
                                    <td class="py-3 pr-4 font-semibold text-navy w-1/3">Installation</td>
                                    <td class="py-3 text-gray-600">By ILS engineers — included in supply price</td>
                                </tr>
                                <tr>
                                    <td class="py-3 pr-4 font-semibold text-navy w-1/3">Service contract</td>
                                    <td class="py-3 text-gray-600">Available — Core, Priority or Assured tier</td>
                                </tr>
                                <tr>
                                    <td class="py-3 pr-4 font-semibold text-navy w-1/3">Parts</td>
                                    <td class="py-3 text-gray-600">Genuine Electrolux Professional parts</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Options & Accessories -->
                <div class="bg-white border border-border rounded-2xl p-6 lg:p-8">
                    <h2 class="font-heading font-bold text-navy text-xl mb-4">Options &amp; Accessories</h2>
                    <ul class="space-y-2">
                        @foreach ([
                            'Various cycle programme configurations — contact ILS to discuss your requirements',
                            'Additional connection types available (gas/electric) where applicable',
                            'Stacking kits for space-constrained installations',
                            'Matching drying equipment available for throughput balancing',
                            'Service contract add-on — Core, Priority or Assured',
                        ] as $item)
                        <li class="flex items-start gap-3 text-sm font-body">
                            <svg class="w-4 h-4 text-steel flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                            </svg>
                            <span class="text-gray-700">{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Downloads -->
                <div class="bg-white border border-border rounded-2xl p-6 lg:p-8">
                    <h2 class="font-heading font-bold text-navy text-xl mb-4">Documentation</h2>
                    <p class="font-body text-gray-600 text-sm leading-relaxed mb-4">Product datasheets and technical documentation are available on request. Contact ILS with your specific model requirements.</p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 text-steel font-body font-semibold text-sm hover:text-navy transition-colors">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/>
                        </svg>
                        Request documentation
                    </a>
                </div>

            </div>

            <!-- Quote Form (right col) -->
            <div id="quote-form" class="lg:col-span-1">
                <div class="bg-white border border-border rounded-2xl p-6 sticky top-24">
                    <h3 class="font-heading font-bold text-navy text-lg mb-2">Request a Quote</h3>
                    <p class="font-body text-gray-500 text-xs mb-5 leading-relaxed">Tell us your requirements and we'll come back with a proposal.</p>
                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4" data-utm>
                        @csrf
                        <input type="hidden" name="request_type" value="equipment_quote">
                        {{-- UTM tracking fields (populated by JS) --}}
                        <input type="hidden" name="utm_source">
                        <input type="hidden" name="utm_medium">
                        <input type="hidden" name="utm_campaign">
                        <input type="hidden" name="utm_content">
                        <input type="hidden" name="utm_term">
                        <input type="hidden" name="page_source">
                        <div>
                            <label class="block text-xs font-body font-semibold text-navy mb-1">Name <span class="text-red-500">*</span></label>
                            <input type="text" name="name" required placeholder="Your name"
                                   class="w-full border border-border rounded-lg px-3 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-xs font-body font-semibold text-navy mb-1">Company <span class="text-red-500">*</span></label>
                            <input type="text" name="company" required placeholder="Company name"
                                   class="w-full border border-border rounded-lg px-3 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-xs font-body font-semibold text-navy mb-1">Email <span class="text-red-500">*</span></label>
                            <input type="email" name="email" required placeholder="you@company.ie"
                                   class="w-full border border-border rounded-lg px-3 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-xs font-body font-semibold text-navy mb-1">Phone <span class="text-red-500">*</span></label>
                            <input type="tel" name="phone" required placeholder="+353..."
                                   class="w-full border border-border rounded-lg px-3 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-xs font-body font-semibold text-navy mb-1">Location / County <span class="text-red-500">*</span></label>
                            <input type="text" name="location" required placeholder="County / site location"
                                   class="w-full border border-border rounded-lg px-3 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-xs font-body font-semibold text-navy mb-1">Sector <span class="text-red-500">*</span></label>
                            <select name="sector" required class="w-full border border-border rounded-lg px-3 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent cursor-pointer">
                                <option value="">Select sector</option>
                                <option value="healthcare">Healthcare</option>
                                <option value="hospitality">Hospitality</option>
                                <option value="care">Care Facilities</option>
                                <option value="commercial">Commercial &amp; Industrial</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-body font-semibold text-navy mb-1">Urgency <span class="text-red-500">*</span></label>
                            <select name="urgency" required class="w-full border border-border rounded-lg px-3 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent cursor-pointer">
                                <option value="">Select urgency</option>
                                <option value="today">Today</option>
                                <option value="24_48h">24-48 hours</option>
                                <option value="this_week">This week</option>
                                <option value="planning">Planning stage</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-body font-semibold text-navy mb-1">Message</label>
                            <textarea name="message" rows="3" placeholder="Additional requirements or questions..."
                                      class="w-full border border-border rounded-lg px-3 py-2.5 text-sm font-body text-gray-800 focus:outline-none focus:ring-2 focus:ring-steel focus:border-transparent resize-none"></textarea>
                        </div>
                        @if (session('success'))
                        <div class="bg-green-50 border border-green-200 rounded-lg p-3 text-sm font-body text-green-800">
                            {{ session('success') }}
                        </div>
                        @endif
                        <button type="submit"
                                class="w-full bg-orange hover:bg-orange-dark text-white font-body font-bold px-6 py-3 rounded-lg text-sm transition-colors duration-200 cursor-pointer">
                            Send Quote Request
                        </button>
                        <p class="text-center text-xs text-gray-400 font-body">We aim to respond within 24 hours</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROOF: Electrolux + Testimonial -->
<section class="py-16 bg-white border-t border-border">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div class="bg-bg border border-border rounded-2xl p-6">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-navy flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-heading font-bold text-navy text-base mb-2">Authorised Electrolux Professional Partner</h3>
                        <p class="font-body text-gray-600 text-sm leading-relaxed">ILS is an Authorised Electrolux Professional Partner — meaning genuine OEM parts, manufacturer-trained engineers and access to the full range of equipment and aftercare support.</p>
                        <a href="{{ route('electrolux') }}" class="inline-flex items-center gap-1 text-steel font-body font-semibold text-xs mt-3 hover:text-navy transition-colors">
                            About our partnership <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="bg-navy-dark border border-white/10 rounded-2xl p-6">
                <div class="flex gap-1 mb-3">
                    @for ($i = 0; $i < 5; $i++)<svg class="w-4 h-4 text-orange" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>@endfor
                </div>
                <p class="font-body text-gray-300 text-sm leading-relaxed italic mb-3">
                    &ldquo;The equipment was installed quickly and professionally. ILS engineers know what they're doing — and having a service contract already in place from day one gave us peace of mind immediately.&rdquo;
                </p>
                <cite class="text-xs text-gray-400 font-body not-italic">— Facilities Manager, Care Group, Republic of Ireland</cite>
            </div>
        </div>
    </div>
</section>

@endsection
