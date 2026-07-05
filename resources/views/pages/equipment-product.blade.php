@extends('layouts.app')

@section('content')

{{-- ============ PRODUCT HEADER ============ --}}
<section class="bg-white pt-10 lg:pt-14">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-8">

        {{-- Breadcrumb --}}
        <nav class="flex items-center gap-2 flex-wrap mb-8 font-body text-sm">
            <a href="{{ route('equipment') }}" class="text-gray-400 hover:text-navy transition-colors">Equipment</a>
            <svg class="w-3 h-3 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
            <a href="{{ route('equipment.category', $categorySlug) }}" class="text-gray-400 hover:text-navy transition-colors">{{ $category }}</a>
            <svg class="w-3 h-3 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
            <span class="text-navy font-semibold">{{ $product }}</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center pb-12 lg:pb-16">

            {{-- Left: title / model / description / actions --}}
            <div class="order-2 lg:order-1 lg:pl-4">
                <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">{{ $item->title ?? $product }}</p>
                <h1 class="font-heading font-bold text-navy text-3xl sm:text-4xl lg:text-5xl leading-tight mb-6">{{ $product }}</h1>
                <p class="font-body text-navy/70 text-sm leading-relaxed mb-8 max-w-md">{{ $summary }}</p>

                <div class="flex flex-wrap items-center gap-3">
                    <button type="button"
                            class="inline-flex items-center gap-2 bg-[#eaf1f8] text-navy font-body font-bold text-xs uppercase tracking-wide px-5 py-3 rounded-full hover:bg-[#dce8f4] transition-colors">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                        Compare
                    </button>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center bg-navy text-white font-body font-bold text-xs uppercase tracking-wide px-6 py-3 rounded-full hover:bg-navy/90 transition-colors">
                        Where to Buy
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center bg-navy text-white font-body font-bold text-xs uppercase tracking-wide px-6 py-3 rounded-full hover:bg-navy/90 transition-colors">
                        Product Registration
                    </a>
                </div>
            </div>

            {{-- Right: product image --}}
            <div class="order-1 lg:order-2 flex justify-center lg:justify-end">
                <img src="{{ asset($imagePath) }}" alt="{{ $product }}" class="max-h-[300px] lg:max-h-[420px] w-auto object-contain">
            </div>

        </div>
    </div>
</section>

{{-- ============ SPECIFICATIONS + DOCUMENTS ============ --}}
<section class="bg-white py-12 lg:py-16 border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20" x-data="{ openSpec: null, openDoc: null }">

            {{-- Specifications --}}
            <div>
                <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-6">Specifications</h2>
                <div class="divide-y divide-gray-200 border-t border-gray-200">
                    @foreach($specs as $groupName => $rows)
                    <div>
                        <button type="button" @click="openSpec = openSpec === {{ $loop->index }} ? null : {{ $loop->index }}"
                                class="w-full flex items-center justify-between py-5 text-left">
                            <span class="font-body text-navy text-base">{{ $groupName }}</span>
                            <svg class="w-5 h-5 text-navy transition-transform duration-200" :class="openSpec === {{ $loop->index }} ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/></svg>
                        </button>
                        <div x-show="openSpec === {{ $loop->index }}" style="display:none" class="pb-5">
                            <dl class="divide-y divide-gray-100">
                                @foreach($rows as $label => $value)
                                <div class="flex justify-between gap-3 sm:gap-6 py-2.5">
                                    <dt class="font-body text-gray-500 text-sm">{{ $label }}</dt>
                                    <dd class="font-body text-navy text-sm font-semibold text-right">{{ $value }}</dd>
                                </div>
                                @endforeach
                            </dl>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Documents --}}
            <div>
                <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-6">Documents</h2>
                <div class="divide-y divide-gray-200 border-t border-gray-200">
                    @php
                        $documents = $documents ?? [];
                        // canonical order, but only show the types this product actually declares
                        $docOrder = ['Brochures', 'CAD Drawings', 'Data Sheet', 'Wall Instructions', 'BIM/Revit', 'User Manuals'];
                        $docTypes = array_values(array_filter($docOrder, fn($t) => array_key_exists($t, $documents)));
                    @endphp
                    @forelse($docTypes as $i => $doc)
                    @php $files = $documents[$doc] ?? []; @endphp
                    <div>
                        <button type="button" @click="openDoc = openDoc === {{ $i }} ? null : {{ $i }}"
                                class="w-full flex items-center justify-between py-5 text-left">
                            <span class="font-body text-navy text-base flex items-center gap-2">
                                {{ $doc }}
                                @if(!empty($files))<span class="font-body text-[10px] font-bold text-[#148af4] bg-[#148af4]/10 px-2 py-0.5 rounded-full">{{ count($files) }}</span>@endif
                            </span>
                            <svg class="w-5 h-5 text-navy transition-transform duration-200" :class="openDoc === {{ $i }} ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/></svg>
                        </button>
                        <div x-show="openDoc === {{ $i }}" style="display:none" class="pb-5">
                            @if(!empty($files))
                            <ul class="space-y-2.5">
                                @foreach($files as $f)
                                <li>
                                    <a href="{{ str_replace(' ', '%20', $f['url']) }}" target="_blank" rel="noopener"
                                       class="inline-flex items-center gap-2.5 font-body text-[#148af4] text-sm font-semibold hover:underline">
                                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v2.625a2.625 2.625 0 0 1-2.625 2.625H7.125A2.625 2.625 0 0 1 4.5 16.875V14.25M12 15V3.75m0 11.25-3.75-3.75M12 15l3.75-3.75"/></svg>
                                        {{ $f['label'] }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            @else
                            <p class="font-body text-gray-500 text-sm leading-relaxed">
                                {{ $doc }} for the {{ $product }} are available on request.
                                <a href="{{ route('contact') }}" class="text-[#148af4] font-semibold hover:underline">Contact our team</a>
                                and we'll send the latest documents for your configuration.
                            </p>
                            @endif
                        </div>
                    </div>
                    @empty
                    <div class="py-5">
                        <p class="font-body text-gray-500 text-sm leading-relaxed">
                            Documents for the {{ $product }} are available on request.
                            <a href="{{ route('contact') }}" class="text-[#148af4] font-semibold hover:underline">Contact our team</a>
                            and we'll send the latest brochures, data sheets and manuals for your configuration.
                        </p>
                    </div>
                    @endforelse
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============ ACCESSORIES BANNER + REQUEST FORM ============ --}}
<section class="bg-white py-12 lg:py-16">
    <div class="max-w-5xl mx-auto px-6 sm:px-10">

        {{-- Accessories banner --}}
        <div class="grid grid-cols-1 md:grid-cols-2 rounded-xl overflow-hidden shadow-sm mb-14">
            <div class="min-h-[200px] bg-gray-100">
                <img src="{{ asset('images/shared/strip2.jpeg') }}" alt="Accessories and consumables" class="w-full h-full object-cover">
            </div>
            <div class="bg-navy p-8 lg:p-10 flex flex-col justify-center">
                <h3 class="font-heading font-bold text-white text-2xl leading-tight mb-3">Shop our Accessories and Consumables</h3>
                <p class="font-body text-white/75 text-sm leading-relaxed mb-6">
                    Rigorously tested, our accessories and consumables help keep your equipment performing at its best.
                </p>
                <a href="{{ route('resources') }}"
                   class="inline-flex w-fit items-center bg-white text-navy font-body font-bold text-xs uppercase tracking-wide px-6 py-3 rounded-full hover:bg-white/90 transition-colors">
                    Shop Now
                </a>
            </div>
        </div>

        {{-- Request form --}}
        <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl text-center text-balance mb-10">Complete the form below to request more information</h2>

        <div class="max-w-2xl mx-auto">
            <div class="space-y-5">
                @php
                    $field = 'relative border border-gray-300 rounded-md px-4 pt-5 pb-2';
                    $lbl   = 'absolute -top-2.5 left-3 bg-white px-1 font-body text-xs font-bold text-navy';
                    $inp   = 'w-full font-body text-navy text-sm outline-none bg-transparent';
                @endphp

                <div class="{{ $field }}"><label class="{{ $lbl }}">Request type *</label>
                    <select class="{{ $inp }}"><option>Select an option</option><option>Product information</option><option>Request a quote</option><option>Rental</option></select>
                </div>
                <div class="{{ $field }}"><label class="{{ $lbl }}">Surname *</label><input type="text" class="{{ $inp }}"></div>
                <div class="{{ $field }}"><label class="{{ $lbl }}">Email *</label><input type="email" class="{{ $inp }}"></div>
                <div class="{{ $field }}"><label class="{{ $lbl }}">Company name *</label><input type="text" class="{{ $inp }}"></div>
                <div class="{{ $field }}"><label class="{{ $lbl }}">Business type *</label>
                    <select class="{{ $inp }}"><option>Select an option</option><option>Healthcare</option><option>Hospitality</option><option>Care facility</option><option>Commercial laundry</option></select>
                </div>
                <div class="{{ $field }}"><label class="{{ $lbl }}">Country *</label>
                    <select class="{{ $inp }}"><option>Select an option</option><option>Ireland</option><option>United Kingdom</option><option>Other</option></select>
                </div>
                <div class="{{ $field }}"><label class="{{ $lbl }}">Request</label>
                    <textarea rows="3" class="{{ $inp }} resize-none">I would like to find out more about {{ $product }}. Please get in touch with me.</textarea>
                </div>

                <div class="space-y-3 pt-2">
                    <label class="flex items-start gap-3 cursor-pointer">
                        <input type="checkbox" class="mt-0.5 w-4 h-4 rounded border-gray-300 accent-[#148af4]">
                        <span class="font-body text-sm text-navy underline">Please read and agree to our Terms &amp; Conditions *</span>
                    </label>
                    <label class="flex items-start gap-3 cursor-pointer">
                        <input type="checkbox" class="mt-0.5 w-4 h-4 rounded border-gray-300 accent-[#148af4]">
                        <span class="font-body text-sm text-navy/80">Yes, I agree to receive marketing communications regarding products, services, and events.</span>
                    </label>
                    <label class="flex items-start gap-3 cursor-pointer">
                        <input type="checkbox" class="mt-0.5 w-4 h-4 rounded border-gray-300 accent-[#148af4]">
                        <span class="font-body text-sm text-navy/80">Yes, I agree to receive marketing communications in line with my preferences.</span>
                    </label>
                </div>

                <a href="{{ route('contact') }}"
                   class="inline-flex items-center bg-navy text-white font-body font-bold text-xs uppercase tracking-wide px-8 py-3.5 rounded-full hover:bg-navy/90 transition-colors mt-2">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ============ 4-ICON SUPPORT ROW ============ --}}
<section class="bg-[#eef2f7] py-14">
    <div class="max-w-6xl mx-auto px-6 sm:px-10">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 lg:gap-10">
            @foreach([
                ['t' => 'Explore our Service Network', 'h' => route('service-contracts'), 'd' => 'M11.48 3.5a.56.56 0 011.04 0l2.12 4.78 5.2.46c.5.04.7.66.32 1l-3.94 3.45 1.17 5.1c.11.49-.42.87-.85.61L12 17.7l-4.54 2.7c-.43.26-.96-.12-.85-.61l1.17-5.1L3.84 9.74c-.38-.34-.18-.96.32-1l5.2-.46L11.48 3.5z'],
                ['t' => 'Where to buy this product', 'h' => route('contact'), 'd' => 'M15 10.5a3 3 0 11-6 0 3 3 0 016 0z M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z'],
                ['t' => 'Download user manuals', 'h' => route('resources'), 'd' => 'M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5A3.375 3.375 0 0010.125 2.25H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z'],
                ['t' => 'Register your products', 'h' => route('contact'), 'd' => 'M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75'],
            ] as $card)
            <a href="{{ $card['h'] }}" class="flex flex-col items-center text-center group">
                <span class="flex items-center justify-center w-16 h-16 rounded-full border border-navy/30 mb-4 group-hover:border-navy group-hover:bg-navy/5 transition-colors">
                    <svg class="w-7 h-7 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $card['d'] }}"/></svg>
                </span>
                <span class="font-heading font-bold text-navy text-base leading-tight mb-3 max-w-[160px]">{{ $card['t'] }}</span>
                <span class="inline-flex items-center gap-1.5 font-body font-bold text-navy text-xs uppercase tracking-wide">
                    Discover More
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </span>
            </a>
            @endforeach
        </div>
    </div>
</section>

@endsection
