@extends('layouts.app')

@section('content')

<!-- HERO -->
<style>
@keyframes heroFadeUp {
    from { opacity: 0; transform: translateY(24px); }
    to   { opacity: 1; transform: translateY(0); }
}
.hero-title { animation: heroFadeUp 0.7s ease forwards; }
.hero-desc  { animation: heroFadeUp 0.7s ease 0.2s forwards; opacity: 0; }
.hero-btns  { animation: heroFadeUp 0.7s ease 0.4s forwards; opacity: 0; }
</style>

<section class="relative overflow-hidden flex flex-col" style="height: calc(100vh - 104px); max-height: 900px; min-height: 500px; background-color: #011E41;"
    x-data="{
        current: 0,
        playing: true,
        slides: [
            '/images/hero/hero-placeholder.jpg',
            '/images/healthcare/hero-main.jpg',
            '/images/about/about-engineers.jpg',
            '/images/about/about-equipment.jpg',
            '/images/healthcare/engineer.jpg'
        ],
        prev() { this.current = (this.current - 1 + this.slides.length) % this.slides.length },
        next() { this.current = (this.current + 1) % this.slides.length },
        init() { setInterval(() => { if (this.playing) this.next() }, 5000) }
    }">

    <!-- Slides -->
    <div class="absolute inset-0">
        <template x-for="(slide, index) in slides" :key="index">
            <img :src="slide"
                 alt="ILS commercial laundry"
                 class="absolute inset-0 w-full h-full object-cover object-right transition-opacity duration-1000 ease-in-out"
                 :class="current === index ? 'opacity-100' : 'opacity-0'">
        </template>
        <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(1,30,65,0.95) 0%, rgba(1,30,65,0.80) 40%, rgba(1,30,65,0.40) 60%, transparent 100%);"></div>
    </div>

    <!-- Text — vertically centered -->
    <div class="relative z-10 flex-1 flex items-center w-full" style="padding-top: 70px;">
        <div class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-2">
            <div style="max-width: 560px;">

                <div class="hero-title inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-1.5 mb-5">
                    <svg class="w-4 h-4 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 2.625c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125m16.5 5.625c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125"/>
                    </svg>
                    <span class="text-sm font-body text-gray-200">Equipment rental &amp; lease</span>
                </div>

                <h1 class="hero-desc font-heading font-bold text-white text-4xl lg:text-5xl leading-tight mb-4">
                    Equipment Rental &amp; Lease for Commercial Laundry
                </h1>
                <p class="font-body text-blue-200 text-lg mb-3 font-semibold">Managed equipment. Controlled costs. No capital outlay.</p>
                <p class="font-body text-gray-300 text-base leading-relaxed mb-7 max-w-xl">
                    Equipment rental and lease arrangements allow commercial laundry operators to access current Electrolux Professional equipment without significant capital investment — with planned maintenance built into the arrangement.
                </p>

                <div class="hero-btns">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-bold px-6 py-3.5 text-sm tracking-wide uppercase transition-colors duration-200 rounded-md">
                        Request Rental Assessment
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- Carousel controls -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-20 flex items-center gap-4">
        <button @click="prev()" aria-label="Previous slide"
                class="w-12 h-12 rounded-full bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white flex items-center justify-center transition-all duration-200">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <polyline points="15 18 9 12 15 6"/>
            </svg>
        </button>
        <div class="flex items-center gap-3 bg-white/10 backdrop-blur-sm rounded-full px-5 py-3">
            <button @click="playing = !playing" :aria-label="playing ? 'Pause' : 'Play'"
                    class="w-6 h-6 flex items-center justify-center text-white transition-opacity duration-200 hover:opacity-70">
                <svg x-show="playing" class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <rect x="6" y="4" width="4" height="16"/><rect x="14" y="4" width="4" height="16"/>
                </svg>
                <svg x-show="!playing" x-cloak class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <polygon points="5 3 19 12 5 21 5 3"/>
                </svg>
            </button>
            <template x-for="(slide, index) in slides" :key="index">
                <button @click="current = index" :aria-label="'Slide ' + (index + 1)"
                        class="h-2 rounded-full transition-all duration-300"
                        :class="current === index ? 'bg-white w-8' : 'bg-white/40 hover:bg-white/70 w-2'">
                </button>
            </template>
        </div>
        <button @click="next()" aria-label="Next slide"
                class="w-12 h-12 rounded-full bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white flex items-center justify-center transition-all duration-200">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <polyline points="9 18 15 12 9 6"/>
            </svg>
        </button>
    </div>

    <!-- Bottom strip — Electrolux partner showcase -->
    <div class="relative z-10 w-full bg-white/95 backdrop-blur-sm border-t border-white/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-2 py-4 flex items-center justify-between gap-6">
            <div class="flex items-center gap-5">
                <div class="flex-shrink-0">
                    <img src="/images/logo/EPR_Authorized_Partner_horizontal_positive_CMYK.jpg"
                         alt="Electrolux Professional Authorized Partner"
                         class="h-12 w-auto">
                </div>
                <div class="hidden sm:block border-l border-gray-300 pl-5">
                    <p class="text-[11px] font-body font-semibold text-navy uppercase tracking-[0.18em]">Official Authorised Partner</p>
                    <p class="text-[13px] font-body text-gray-600 mt-0.5">Electrolux Professional — Ireland</p>
                </div>
            </div>
            <a href="{{ route('electrolux') }}"
               class="flex-shrink-0 text-xs font-body font-semibold text-navy hover:text-orange uppercase tracking-wide transition-colors duration-200 flex items-center gap-1.5 whitespace-nowrap">
                Learn more
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>

</section>

<!-- PROOF BAR -->
@include('components.proof-bar')

<!-- RENTAL VS PURCHASE -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="text-center mb-12">
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-4">Rental vs Outright Purchase</h2>
            <p class="font-body text-gray-600 text-lg max-w-2xl mx-auto">Both have their place. Here's what makes rental the right choice for some operations.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-bg border-2 border-orange rounded-2xl p-6 lg:p-8">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-10 h-10 rounded-lg bg-orange/10 flex items-center justify-center">
                        <svg class="w-6 h-6 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-heading font-bold text-navy text-xl">Rental / Lease</h3>
                </div>
                <ul class="space-y-3">
                    @foreach ([
                        'No large capital outlay — preserve cash or budget allocation',
                        'Planned maintenance typically included in the arrangement',
                        'Predictable monthly cost — easier to budget and report',
                        'Access to current equipment without replacing owned assets outright',
                        'Suitable for temporary capacity increases or equipment replacement bridging',
                        'Can include service contract elements within a single arrangement',
                    ] as $item)
                    <li class="flex items-start gap-3 text-sm font-body">
                        <svg class="w-4 h-4 text-green-600 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                        </svg>
                        <span class="text-gray-700">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="bg-bg border border-border rounded-2xl p-6 lg:p-8">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-10 h-10 rounded-lg bg-navy/10 flex items-center justify-center">
                        <svg class="w-6 h-6 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/>
                        </svg>
                    </div>
                    <h3 class="font-heading font-bold text-navy text-xl">Outright Purchase</h3>
                </div>
                <ul class="space-y-3">
                    @foreach ([
                        'Full ownership of the equipment from day one',
                        'No monthly rental commitment',
                        'Capital asset on your balance sheet',
                        'Pair with an ILS service contract for managed maintenance',
                        'Better for operations with stable, long-term equipment requirements',
                        'Access to full Electrolux Professional range through ILS supply',
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
        </div>
    </div>
</section>

<!-- PACKAGES -->
@include('components.packages')

<!-- HOW IT WORKS -->
<section class="py-16 lg:py-24 bg-navy">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="text-center mb-12">
            <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl mb-4">How Rental Works</h2>
            <p class="font-body text-blue-200 text-lg max-w-xl mx-auto">Three steps from enquiry to equipment in place.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="w-14 h-14 rounded-full bg-orange flex items-center justify-center mx-auto mb-5 text-white font-heading font-bold text-xl">1</div>
                <h3 class="font-heading font-semibold text-white text-lg mb-3">Tell Us What You Need</h3>
                <p class="font-body text-gray-300 text-sm leading-relaxed">Equipment type, capacity requirements, sector and preferred rental term. We'll assess what's right for your operation.</p>
            </div>
            <div class="text-center">
                <div class="w-14 h-14 rounded-full bg-orange flex items-center justify-center mx-auto mb-5 text-white font-heading font-bold text-xl">2</div>
                <h3 class="font-heading font-semibold text-white text-lg mb-3">We Propose an Arrangement</h3>
                <p class="font-body text-gray-300 text-sm leading-relaxed">We'll put together a rental or lease proposal — including equipment spec, term, maintenance cover and what's included.</p>
            </div>
            <div class="text-center">
                <div class="w-14 h-14 rounded-full bg-orange flex items-center justify-center mx-auto mb-5 text-white font-heading font-bold text-xl">3</div>
                <h3 class="font-heading font-semibold text-white text-lg mb-3">Installation &amp; Commissioning</h3>
                <p class="font-body text-gray-300 text-sm leading-relaxed">ILS engineers install and commission the equipment. Ongoing maintenance is managed through the rental arrangement.</p>
            </div>
        </div>
    </div>
</section>

@include('components.partner-strip')
@include('components.proof-bar')

<!-- CTA BAND -->
@include('components.cta-band', [
    'heading' => 'Discuss rental or lease options',
    'subheading' => 'Tell us your equipment requirements and we will come back with a tailored rental proposal.',
    'primaryText' => 'Request Rental Discussion',
    'primaryHref' => '/contact',
])

@include('components.cta-combined-banner')

@endsection
