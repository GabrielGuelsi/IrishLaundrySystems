@props(['heading' => 'What our customers say', 'light' => false])

@if($light)
@php
    $lightItems = [
        [
            'img'       => '/images/about/testimonial-1.jpg',
            'alt'       => 'Operations Manager',
            'headline'  => 'They understand the pressure of healthcare operations and',
            'highlight' => 'respond accordingly.',
            'body'      => 'Reliable, clear communication and practical engineering support. We can plan around them.',
            'name'      => 'Operations Manager',
            'role'      => 'Healthcare Group, Republic of Ireland',
        ],
        [
            'img'       => '/images/about/testimonial-2.jpg',
            'alt'       => 'Facilities Manager',
            'headline'  => 'They show up, they communicate clearly, and',
            'highlight' => 'they know the equipment.',
            'body'      => "We've had service contracts with ILS for several years. That's what we need from a service partner.",
            'name'      => 'Facilities Manager',
            'role'      => 'Nursing Home Group, Munster',
        ],
        [
            'img'       => '/images/about/testimonial-3.jpg',
            'alt'       => 'Hotel General Manager',
            'headline'  => 'Fast response when we had an unexpected breakdown —',
            'highlight' => 'minimal disruption to our operation.',
            'body'      => 'Professionally handled during a busy period. Would recommend ILS without hesitation.',
            'name'      => 'Hotel General Manager',
            'role'      => '4-Star Hotel, Leinster',
        ],
    ];
@endphp
<section class="py-16 lg:py-24 bg-[#f7f8fa] border-y border-border"
         x-data="{ active: 0, total: {{ count($lightItems) }}, paused: false, timer: null, start() { this.timer = setInterval(() => { if (!this.paused) this.active = (this.active + 1) % this.total; }, 6000); } }"
         x-init="start()"
         @mouseenter="paused = true"
         @mouseleave="paused = false">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-14">{{ $heading }}</h2>

        <div class="relative">
            <div class="overflow-hidden">
                <div class="flex transition-transform duration-500 ease-out"
                     :style="`transform: translateX(-${active * 100}%)`">
                    @foreach($lightItems as $t)
                    <div class="flex-shrink-0 w-full">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center px-2 lg:px-12">

                            {{-- Image --}}
                            <div class="relative rounded-2xl overflow-hidden aspect-[4/3] group cursor-pointer">
                                <img src="{{ $t['img'] }}" alt="{{ $t['alt'] }}"
                                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                <div class="absolute inset-0 bg-black/10 transition-colors group-hover:bg-black/20"></div>
                            </div>

                            {{-- Text --}}
                            <div class="flex flex-col">
                                <svg class="w-10 h-10 text-orange mb-5" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                    <path d="M9.5 8c-3 0-5.5 2.5-5.5 5.5 0 2 1 3.7 2.5 4.6-.3 2.6-1.5 4.6-3.5 5.9l1 2c4-1.5 7-5 7-10v-2c0-3.3-.7-6-1.5-6zm14 0c-3 0-5.5 2.5-5.5 5.5 0 2 1 3.7 2.5 4.6-.3 2.6-1.5 4.6-3.5 5.9l1 2c4-1.5 7-5 7-10v-2c0-3.3-.7-6-1.5-6z"/>
                                </svg>
                                <p class="font-heading text-navy text-2xl lg:text-3xl xl:text-4xl leading-tight mb-6">
                                    {{ $t['headline'] }} <span class="font-bold">{{ $t['highlight'] }}</span>
                                </p>
                                <p class="font-body text-gray-600 text-base lg:text-lg leading-relaxed mb-8">
                                    {{ $t['body'] }}
                                </p>
                                <div>
                                    <cite class="block font-body font-semibold text-orange text-base not-italic mb-0.5">{{ $t['name'] }}</cite>
                                    <span class="font-body font-bold text-navy text-sm">{{ $t['role'] }}</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Prev / Next --}}
            <button type="button" @click="active = (active - 1 + total) % total" aria-label="Previous"
                    class="absolute top-1/2 -translate-y-1/2 -left-2 lg:-left-6 w-11 h-11 rounded-full bg-white hover:bg-gray-50 border border-border shadow-sm flex items-center justify-center transition-colors z-10">
                <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"/>
                </svg>
            </button>
            <button type="button" @click="active = (active + 1) % total" aria-label="Next"
                    class="absolute top-1/2 -translate-y-1/2 -right-2 lg:-right-6 w-11 h-11 rounded-full bg-white hover:bg-gray-50 border border-border shadow-sm flex items-center justify-center transition-colors z-10">
                <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
                </svg>
            </button>
        </div>

        {{-- Dots --}}
        <div class="flex justify-center gap-2 mt-12">
            @foreach($lightItems as $i => $t)
            <button type="button" @click="active = {{ $i }}" aria-label="Go to testimonial {{ $i + 1 }}"
                    :class="active === {{ $i }} ? 'bg-orange w-8' : 'bg-gray-300 hover:bg-gray-400 w-2'"
                    class="h-2 rounded-full transition-all duration-300"></button>
            @endforeach
        </div>

    </div>
</section>
@else
@php
    $items = [
        [
            'img'       => '/images/about/testimonial-1.jpg',
            'alt'       => 'Operations Manager',
            'headline'  => 'They understand the pressure of healthcare operations and',
            'highlight' => 'respond accordingly.',
            'body'      => 'Reliable, clear communication and practical engineering support. We can plan around them.',
            'name'      => 'Operations Manager',
            'role'      => 'Healthcare Group, Republic of Ireland',
        ],
        [
            'img'       => '/images/about/testimonial-2.jpg',
            'alt'       => 'Facilities Manager',
            'headline'  => 'They show up, they communicate clearly, and',
            'highlight' => 'they know the equipment.',
            'body'      => "We've had service contracts with ILS for several years. That's what we need from a service partner.",
            'name'      => 'Facilities Manager',
            'role'      => 'Nursing Home Group, Munster',
        ],
        [
            'img'       => '/images/about/testimonial-3.jpg',
            'alt'       => 'Hotel General Manager',
            'headline'  => 'Fast response when we had an unexpected breakdown —',
            'highlight' => 'minimal disruption to our operation.',
            'body'      => 'Professionally handled during a busy period. Would recommend ILS without hesitation.',
            'name'      => 'Hotel General Manager',
            'role'      => '4-Star Hotel, Leinster',
        ],
    ];
@endphp
<section class="py-16 lg:py-24 bg-white"
         x-data="{ active: 0, total: {{ count($items) }}, paused: false, timer: null, start() { this.timer = setInterval(() => { if (!this.paused) this.active = (this.active + 1) % this.total; }, 6000); } }"
         x-init="start()"
         @mouseenter="paused = true"
         @mouseleave="paused = false">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-6 sm:px-10 lg:px-8 2xl:px-16">
        <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl text-center mb-14">{{ $heading }}</h2>

        <div class="relative">
            {{-- Carousel viewport --}}
            <div class="overflow-hidden">
                <div class="flex transition-transform duration-500 ease-out"
                     :style="`transform: translateX(-${active * 100}%)`">
                    @foreach($items as $t)
                    <div class="flex-shrink-0 w-full">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center px-2 lg:px-12">
                            {{-- Image side with play overlay --}}
                            <div class="relative rounded-2xl overflow-hidden aspect-[4/3] group cursor-pointer">
                                <img src="{{ $t['img'] }}" alt="{{ $t['alt'] }}"
                                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                <div class="absolute inset-0 bg-black/15 transition-colors group-hover:bg-black/25"></div>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="w-20 h-20 rounded-full border-2 border-white/80 backdrop-blur-sm bg-white/10 flex items-center justify-center transition-transform duration-300 group-hover:scale-110">
                                        <svg class="w-7 h-7 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8 5v14l11-7z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            {{-- Text side --}}
                            <div class="flex flex-col">
                                {{-- Decorative quote mark --}}
                                <svg class="w-12 h-12 text-orange mb-4" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                    <path d="M9.5 8c-3 0-5.5 2.5-5.5 5.5 0 2 1 3.7 2.5 4.6-.3 2.6-1.5 4.6-3.5 5.9l1 2c4-1.5 7-5 7-10v-2c0-3.3-.7-6-1.5-6zm14 0c-3 0-5.5 2.5-5.5 5.5 0 2 1 3.7 2.5 4.6-.3 2.6-1.5 4.6-3.5 5.9l1 2c4-1.5 7-5 7-10v-2c0-3.3-.7-6-1.5-6z"/>
                                </svg>

                                {{-- Headline quote with bold emphasis --}}
                                <p class="font-heading text-navy text-2xl lg:text-3xl xl:text-4xl leading-tight mb-6">
                                    {{ $t['headline'] }} <span class="font-bold">{{ $t['highlight'] }}</span>
                                </p>

                                {{-- Body --}}
                                <p class="font-body text-navy/70 text-base lg:text-lg leading-relaxed mb-8">
                                    {{ $t['body'] }}
                                </p>

                                {{-- Attribution --}}
                                <div>
                                    <cite class="block font-body font-semibold text-orange text-base lg:text-lg not-italic mb-1">{{ $t['name'] }}</cite>
                                    <span class="font-heading font-bold text-navy text-base">{{ $t['role'] }}</span>
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
                    class="absolute top-1/2 -translate-y-1/2 -left-2 lg:-left-6 w-11 h-11 rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-200 flex items-center justify-center transition-colors z-10">
                <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"/>
                </svg>
            </button>
            <button type="button"
                    @click="active = (active + 1) % total"
                    aria-label="Next testimonial"
                    class="absolute top-1/2 -translate-y-1/2 -right-2 lg:-right-6 w-11 h-11 rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-200 flex items-center justify-center transition-colors z-10">
                <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
                </svg>
            </button>
        </div>

        {{-- Dot indicators --}}
        <div class="flex justify-center gap-2 mt-12">
            @foreach($items as $i => $t)
            <button type="button"
                    @click="active = {{ $i }}"
                    aria-label="Go to testimonial {{ $i + 1 }}"
                    :class="active === {{ $i }} ? 'bg-orange w-8' : 'bg-gray-300 hover:bg-gray-400 w-2'"
                    class="h-2 rounded-full transition-all duration-300"></button>
            @endforeach
        </div>
    </div>
</section>
@endif
