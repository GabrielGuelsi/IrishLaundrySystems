@props(['heading' => 'What our customers say', 'light' => false])

@php
$testimonials = [
    [
        'logo'    => null,
        'company' => 'Grace Healthcare',
        'pills'   => ['VALUED PARTNERSHIP', 'OPERATIONAL EXCELLENCE', 'RELIABILITY', 'QUICK RESOLUTION'],
        'headline'=> 'A trusted partner providing consistent commitment that makes a real difference.',
        'body'    => 'We have built a strong and valued partnership with Irish Laundry Systems over many years. Their consistent commitment to excellence has made a real difference to our operations, with service delivery always of the highest standard. What truly sets them apart is their reliability and responsiveness; they are a trusted partner always ready to resolve any issues quickly and effectively. This level of dedication gives us great confidence and peace of mind.',
        'name'    => 'Owen Brennan',
        'role'    => 'Head of Group Facilities at Grace Healthcare',
    ],
    [
        'logo'    => '/images/logo/HSE-Logo-Green-NEW-no-background.png',
        'company' => 'HSE',
        'pills'   => ['EXCELLENT CALLOUTS', 'ANNUAL MAINTENANCE', 'MINIMAL DISRUPTION', 'PEACE OF MIND'],
        'headline'=> 'Consistent, professional service that gives us real peace of mind.',
        'body'    => "We've worked with Irish Laundry Systems for a number of years at St. Mary's Hospital, and their service has been consistently reliable and professional. Their response times for callouts are excellent, and any issues are dealt with quickly and efficiently. Their annual maintenance support ensures our equipment runs smoothly with minimal disruption, giving us real peace of mind. We value the long-term relationship we've built and trust their team to deliver a high standard of service every time.",
        'name'    => 'Larry Jordan',
        'role'    => 'Operations at HSE Community Healthcare',
    ],
    [
        'logo'    => null,
        'company' => 'AbbVie',
        'pills'   => ['FAST RESPONSE', 'MAINTENANCE & REPAIR', 'SERVICE CONTRACT', 'DEPENDABLE SUPPORT'],
        'headline'=> 'They provide excellent support and a dependable experience we can always count on.',
        'body'    => 'Irish Laundry Systems continues to deliver a smooth, efficient experience from start to finish. The team is very knowledgeable, helpful, professional, and easy to work with. They provide excellent support and a dependable experience we can always count on. They are great to deal with, always quick to respond, and exceeded our expectations with their high-quality service and attention to detail. We would highly recommend them.',
        'name'    => 'Dermot Wilson',
        'role'    => 'Equipment Engineer at AbbVie',
    ],
];
$total = count($testimonials);
@endphp

@if($light)

{{-- ── LIGHT VARIANT (about page) — bg-[#f7f8fa], heading left-aligned ── --}}
<section class="py-16 lg:py-24 bg-[#f7f8fa] border-y border-border"
         x-data="{ active: 0, total: {{ $total }}, paused: false, start() { setInterval(() => { if (!this.paused) this.active = (this.active + 1) % this.total; }, 6000); } }"
         x-init="start()"
         @mouseenter="paused = true"
         @mouseleave="paused = false">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl mb-14">{{ $heading }}</h2>

        <div class="relative">
            <div class="overflow-hidden">
                <div class="flex transition-transform duration-500 ease-out"
                     :style="`transform: translateX(-${active * 100}%)`">
                    @foreach($testimonials as $t)
                    <div class="flex-shrink-0 w-full">
                        <div class="grid grid-cols-1 lg:grid-cols-[2fr_3fr] gap-10 lg:gap-16 items-start px-2 lg:px-12">

                            {{-- Left: Logo + Pills --}}
                            <div class="flex flex-col items-start gap-6 lg:pt-2">
                                @if($t['logo'])
                                    <img src="{{ $t['logo'] }}" alt="{{ $t['company'] }}"
                                         class="h-14 w-auto object-contain object-left">
                                @else
                                    <div class="inline-block border border-gray-200 bg-white rounded-xl px-5 py-3 shadow-sm">
                                        <span class="font-heading font-bold text-navy text-base tracking-tight">{{ $t['company'] }}</span>
                                    </div>
                                @endif

                                <div class="flex flex-wrap gap-2">
                                    @foreach($t['pills'] as $pill)
                                    <span class="inline-flex px-2.5 py-1 rounded-full text-[10px] font-bold bg-[#148af4]/10 text-[#148af4] uppercase tracking-widest whitespace-nowrap">{{ $pill }}</span>
                                    @endforeach
                                </div>
                            </div>

                            {{-- Right: Quote --}}
                            <div class="flex flex-col">
                                <svg class="w-8 h-8 text-[#148af4] mb-4" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                    <path d="M9.5 8c-3 0-5.5 2.5-5.5 5.5 0 2 1 3.7 2.5 4.6-.3 2.6-1.5 4.6-3.5 5.9l1 2c4-1.5 7-5 7-10v-2c0-3.3-.7-6-1.5-6zm14 0c-3 0-5.5 2.5-5.5 5.5 0 2 1 3.7 2.5 4.6-.3 2.6-1.5 4.6-3.5 5.9l1 2c4-1.5 7-5 7-10v-2c0-3.3-.7-6-1.5-6z"/>
                                </svg>
                                <p class="font-heading font-bold text-navy text-xl lg:text-2xl xl:text-3xl leading-tight mb-5">
                                    "{{ $t['headline'] }}"
                                </p>
                                <p class="font-body text-gray-500 text-sm lg:text-base leading-relaxed mb-6">
                                    {{ $t['body'] }}
                                </p>
                                <div class="w-10 h-px bg-[#148af4] mb-5"></div>
                                <div>
                                    <cite class="block font-body font-semibold text-[#148af4] text-sm not-italic mb-0.5">{{ $t['name'] }}</cite>
                                    <span class="font-heading font-bold text-navy text-sm">{{ $t['role'] }}</span>
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
            @foreach($testimonials as $i => $t)
            <button type="button" @click="active = {{ $i }}" aria-label="Go to testimonial {{ $i + 1 }}"
                    :class="active === {{ $i }} ? 'bg-[#148af4] w-8' : 'bg-gray-300 hover:bg-gray-400 w-2'"
                    class="h-2 rounded-full transition-all duration-300"></button>
            @endforeach
        </div>

    </div>
</section>

@else

{{-- ── DEFAULT VARIANT (all other pages) — bg-white, heading centred ── --}}
<section class="py-16 lg:py-24 bg-white"
         x-data="{ active: 0, total: {{ $total }}, paused: false, start() { setInterval(() => { if (!this.paused) this.active = (this.active + 1) % this.total; }, 6000); } }"
         x-init="start()"
         @mouseenter="paused = true"
         @mouseleave="paused = false">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">

        <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl text-center mb-14">{{ $heading }}</h2>

        <div class="relative">
            <div class="overflow-hidden">
                <div class="flex transition-transform duration-500 ease-out"
                     :style="`transform: translateX(-${active * 100}%)`">
                    @foreach($testimonials as $t)
                    <div class="flex-shrink-0 w-full">
                        <div class="grid grid-cols-1 lg:grid-cols-[2fr_3fr] gap-10 lg:gap-16 items-start px-2 lg:px-12">

                            {{-- Left: Logo + Pills --}}
                            <div class="flex flex-col items-start gap-6 lg:pt-2">
                                @if($t['logo'])
                                    <img src="{{ $t['logo'] }}" alt="{{ $t['company'] }}"
                                         class="h-14 w-auto object-contain object-left">
                                @else
                                    <div class="inline-block border border-gray-200 rounded-xl px-5 py-3 shadow-sm">
                                        <span class="font-heading font-bold text-navy text-base tracking-tight">{{ $t['company'] }}</span>
                                    </div>
                                @endif

                                <div class="flex flex-wrap gap-2">
                                    @foreach($t['pills'] as $pill)
                                    <span class="inline-flex px-2.5 py-1 rounded-full text-[10px] font-bold bg-[#148af4]/10 text-[#148af4] uppercase tracking-widest whitespace-nowrap">{{ $pill }}</span>
                                    @endforeach
                                </div>
                            </div>

                            {{-- Right: Quote --}}
                            <div class="flex flex-col">
                                <svg class="w-8 h-8 text-[#148af4] mb-4" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                    <path d="M9.5 8c-3 0-5.5 2.5-5.5 5.5 0 2 1 3.7 2.5 4.6-.3 2.6-1.5 4.6-3.5 5.9l1 2c4-1.5 7-5 7-10v-2c0-3.3-.7-6-1.5-6zm14 0c-3 0-5.5 2.5-5.5 5.5 0 2 1 3.7 2.5 4.6-.3 2.6-1.5 4.6-3.5 5.9l1 2c4-1.5 7-5 7-10v-2c0-3.3-.7-6-1.5-6z"/>
                                </svg>
                                <p class="font-heading font-bold text-navy text-xl lg:text-2xl xl:text-3xl leading-tight mb-5">
                                    "{{ $t['headline'] }}"
                                </p>
                                <p class="font-body text-gray-500 text-sm lg:text-base leading-relaxed mb-6">
                                    {{ $t['body'] }}
                                </p>
                                <div class="w-10 h-px bg-[#148af4] mb-5"></div>
                                <div>
                                    <cite class="block font-body font-semibold text-[#148af4] text-sm not-italic mb-0.5">{{ $t['name'] }}</cite>
                                    <span class="font-heading font-bold text-navy text-sm">{{ $t['role'] }}</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Prev / Next --}}
            <button type="button" @click="active = (active - 1 + total) % total" aria-label="Previous testimonial"
                    class="absolute top-1/2 -translate-y-1/2 -left-2 lg:-left-6 w-11 h-11 rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-200 flex items-center justify-center transition-colors z-10">
                <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"/>
                </svg>
            </button>
            <button type="button" @click="active = (active + 1) % total" aria-label="Next testimonial"
                    class="absolute top-1/2 -translate-y-1/2 -right-2 lg:-right-6 w-11 h-11 rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-200 flex items-center justify-center transition-colors z-10">
                <svg class="w-5 h-5 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
                </svg>
            </button>
        </div>

        {{-- Dots --}}
        <div class="flex justify-center gap-2 mt-12">
            @foreach($testimonials as $i => $t)
            <button type="button" @click="active = {{ $i }}" aria-label="Go to testimonial {{ $i + 1 }}"
                    :class="active === {{ $i }} ? 'bg-[#148af4] w-8' : 'bg-gray-300 hover:bg-gray-400 w-2'"
                    class="h-2 rounded-full transition-all duration-300"></button>
            @endforeach
        </div>

    </div>
</section>

@endif
