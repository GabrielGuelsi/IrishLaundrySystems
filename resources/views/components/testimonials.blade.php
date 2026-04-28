@props(['heading' => 'What our customers say', 'light' => false])

@if($light)
<section class="py-16 lg:py-20 bg-bg border-y border-border">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <h2 class="font-heading font-bold text-navy text-2xl lg:text-3xl mb-10">{{ $heading }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">

            <div class="bg-white border border-border rounded-2xl flex flex-col overflow-hidden">
                <img src="/images/about/testimonial-1.jpg" alt="Operations Manager" class="w-full h-52 object-cover object-top">
                <div class="p-6 lg:p-8 flex flex-col flex-1">
                    <blockquote class="flex-1">
                        <p class="font-body text-gray-700 text-base leading-relaxed">
                            &ldquo;Clear communication and practical engineering support. They understand the pressure of healthcare operations and respond accordingly.&rdquo;
                        </p>
                    </blockquote>
                    <div class="mt-6 pt-5 border-t border-border">
                        <cite class="block text-sm font-body font-semibold text-navy not-italic">Operations Manager</cite>
                        <span class="text-xs text-gray-400 font-body">Healthcare Group, Republic of Ireland</span>
                    </div>
                </div>
            </div>

            <div class="bg-white border border-border rounded-2xl flex flex-col overflow-hidden">
                <img src="/images/about/testimonial-2.jpg" alt="Facilities Manager" class="w-full h-52 object-cover object-top">
                <div class="p-6 lg:p-8 flex flex-col flex-1">
                    <blockquote class="flex-1">
                        <p class="font-body text-gray-700 text-base leading-relaxed">
                            &ldquo;We've had service contracts with ILS for several years. They show up, they communicate clearly, and they know the equipment. That's what we need.&rdquo;
                        </p>
                    </blockquote>
                    <div class="mt-6 pt-5 border-t border-border">
                        <cite class="block text-sm font-body font-semibold text-navy not-italic">Facilities Manager</cite>
                        <span class="text-xs text-gray-400 font-body">Nursing Home Group, Munster</span>
                    </div>
                </div>
            </div>

            <div class="bg-white border border-border rounded-2xl flex flex-col overflow-hidden">
                <img src="/images/about/testimonial-3.jpg" alt="Hotel General Manager" class="w-full h-52 object-cover object-top">
                <div class="p-6 lg:p-8 flex flex-col flex-1">
                    <blockquote class="flex-1">
                        <p class="font-body text-gray-700 text-base leading-relaxed">
                            &ldquo;Fast response when we had an unexpected breakdown during a busy period. Professionally handled — minimal disruption to our operation.&rdquo;
                        </p>
                    </blockquote>
                    <div class="mt-6 pt-5 border-t border-border">
                        <cite class="block text-sm font-body font-semibold text-navy not-italic">Hotel General Manager</cite>
                        <span class="text-xs text-gray-400 font-body">4-Star Hotel, Leinster</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@else
@php
    $items = [
        [
            'img'   => '/images/about/testimonial-1.jpg',
            'alt'   => 'Operations Manager',
            'quote' => 'Reliable, clear communication and practical engineering support. They understand the pressure of healthcare operations and respond accordingly.',
            'name'  => 'Operations Manager',
            'role'  => 'Healthcare Group, Republic of Ireland',
        ],
        [
            'img'   => '/images/about/testimonial-2.jpg',
            'alt'   => 'Facilities Manager',
            'quote' => "We've had service contracts with ILS for several years. They show up, they communicate clearly, and they know the equipment. That's what we need.",
            'name'  => 'Facilities Manager',
            'role'  => 'Nursing Home Group, Munster',
        ],
        [
            'img'   => '/images/about/testimonial-3.jpg',
            'alt'   => 'Hotel General Manager',
            'quote' => 'Fast response when we had an unexpected breakdown during a busy period. Professionally handled — minimal disruption to our operation. Would recommend without hesitation.',
            'name'  => 'Hotel General Manager',
            'role'  => '4-Star Hotel, Leinster',
        ],
    ];
@endphp
<section class="py-16 lg:py-20 bg-navy"
         x-data="{ active: 0, total: {{ count($items) }}, paused: false, timer: null, start() { this.timer = setInterval(() => { if (!this.paused) this.active = (this.active + 1) % this.total; }, 6000); } }"
         x-init="start()"
         @mouseenter="paused = true"
         @mouseleave="paused = false">
    <div class="max-w-3xl mx-auto px-6 sm:px-10 lg:px-8">
        <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl text-center mb-12">{{ $heading }}</h2>

        <div class="relative">
            {{-- Carousel viewport --}}
            <div class="overflow-hidden rounded-2xl">
                <div class="flex transition-transform duration-500 ease-out"
                     :style="`transform: translateX(-${active * 100}%)`">
                    @foreach($items as $t)
                    <div class="flex-shrink-0 w-full">
                        <div class="bg-navy-light border border-white/10 rounded-2xl flex flex-col md:flex-row overflow-hidden">
                            <img src="{{ $t['img'] }}" alt="{{ $t['alt'] }}" class="w-full md:w-1/3 h-52 md:h-auto object-cover object-top">
                            <div class="p-6 lg:p-10 flex flex-col flex-1">
                                <div class="flex gap-1 mb-4">
                                    @for ($i = 0; $i < 5; $i++)
                                    <svg class="w-4 h-4 text-orange" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    @endfor
                                </div>
                                <blockquote class="flex-1">
                                    <p class="font-body text-gray-200 text-lg leading-relaxed italic">
                                        &ldquo;{{ $t['quote'] }}&rdquo;
                                    </p>
                                </blockquote>
                                <div class="mt-6 pt-5 border-t border-white/10">
                                    <cite class="block text-base font-body font-semibold text-white not-italic">{{ $t['name'] }}</cite>
                                    <span class="text-sm text-gray-400 font-body">{{ $t['role'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Prev / Next buttons --}}
            <button type="button"
                    @click="active = (active - 1 + total) % total"
                    aria-label="Previous testimonial"
                    class="absolute top-1/2 -translate-y-1/2 -left-4 lg:-left-12 w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 border border-white/20 flex items-center justify-center transition-colors">
                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"/>
                </svg>
            </button>
            <button type="button"
                    @click="active = (active + 1) % total"
                    aria-label="Next testimonial"
                    class="absolute top-1/2 -translate-y-1/2 -right-4 lg:-right-12 w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 border border-white/20 flex items-center justify-center transition-colors">
                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
                </svg>
            </button>
        </div>

        {{-- Dot indicators --}}
        <div class="flex justify-center gap-2 mt-8">
            @foreach($items as $i => $t)
            <button type="button"
                    @click="active = {{ $i }}"
                    aria-label="Go to testimonial {{ $i + 1 }}"
                    :class="active === {{ $i }} ? 'bg-orange w-8' : 'bg-white/30 hover:bg-white/50 w-2'"
                    class="h-2 rounded-full transition-all duration-300"></button>
            @endforeach
        </div>
    </div>
</section>
@endif
