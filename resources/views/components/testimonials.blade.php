@props([
    'heading' => 'What our customers say.',
    'light' => false,
    'single' => null,
])

@php
$testimonials = [
    'grace' => [
        'logo'      => '/images/logo/grace-healthcare.png',
        'name'      => 'Grace Healthcare',
        'pills'     => ['Valued Partnership', 'Operational Excellence', 'Reliability', 'Quick Resolution'],
        'headline'  => 'A trusted partner providing consistent commitment that makes a real difference.',
        'body'      => 'We have built a strong and valued partnership with Irish Laundry Systems over many years. Their consistent commitment to excellence has made a real difference to our operations, with service delivery always of the highest standard. What truly sets them apart is their reliability and responsiveness; they are a trusted partner always ready to resolve any issues quickly and effectively. This level of dedication gives us great confidence and peace of mind.',
        'cite_name' => 'Owen Brennan',
        'cite_role' => 'Head of Group Facilities at Grace Healthcare',
    ],
    'hse' => [
        'logo'      => '/images/logo/HSE-Logo-Green-NEW-no-background.png',
        'name'      => 'HSE St. Mary\'s Hospital',
        'pills'     => ['Excellent Callouts', 'Annual Maintenance', 'Minimal Disruption', 'Peace of Mind'],
        'headline'  => 'Consistent, professional service that gives us real peace of mind.',
        'body'      => 'We\'ve worked with Irish Laundry Systems for a number of years at St. Mary\'s Hospital, and their service has been consistently reliable and professional. Their response times for callouts are excellent, and any issues are dealt with quickly and efficiently. Their annual maintenance support ensures our equipment runs smoothly with minimal disruption, giving us real peace of mind. We value the long-term relationship we\'ve built and trust their team to deliver a high standard of service every time.',
        'cite_name' => 'Larry Jordan',
        'cite_role' => 'Operations at HSE Community Healthcare',
    ],
    'abbvie' => [
        'logo'      => '/images/logo/abbvie.png',
        'name'      => 'AbbVie',
        'pills'     => ['Fast Response', 'Maintenance & Repair', 'Service Contract', 'Dependable Support'],
        'headline'  => 'They provide excellent support and a dependable experience we can always count on.',
        'body'      => 'Irish Laundry Systems continues to deliver a smooth, efficient experience from start to finish. The team is very knowledgeable, helpful, professional, and easy to work with. They provide excellent support and a dependable experience we can always count on. They are great to deal with, always quick to respond, and exceeded our expectations with their high-quality service and attention to detail. We would highly recommend them.',
        'cite_name' => 'Dermot Wilson',
        'cite_role' => 'Equipment Engineer at AbbVie',
    ],
];

$order  = ['grace', 'hse', 'abbvie'];
$slides = $single && isset($testimonials[$single])
    ? [$testimonials[$single]]
    : array_map(fn ($k) => $testimonials[$k], $order);

$showChrome = ! $single && count($slides) > 1;
@endphp

<section class="py-16 lg:py-24 {{ $light ? 'bg-[#f7f8fa] border-y border-border' : 'bg-white' }}">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">

        @if (! $single)
            <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl text-center mb-14">{{ $heading }}</h2>
        @endif

        <div
            x-data="{
                active: 0,
                count: {{ count($slides) }},
                next() { this.active = (this.active + 1) % this.count; },
                prev() { this.active = (this.active - 1 + this.count) % this.count; },
                go(i)  { this.active = i; },
            }"
            @keydown.arrow-right.window="next()"
            @keydown.arrow-left.window="prev()"
            class="relative max-w-6xl mx-auto"
            role="region"
            aria-roledescription="carousel"
            aria-label="Customer testimonials"
            aria-live="polite"
        >
            <div class="grid [&>*]:[grid-area:1/1]">
                @foreach ($slides as $i => $t)
                    <article
                        role="group"
                        aria-roledescription="slide"
                        aria-label="{{ $i + 1 }} of {{ count($slides) }}"
                        :aria-hidden="active !== {{ $i }}"
                        class="transition-opacity duration-500 rounded-2xl bg-white shadow-sm border border-navy/5 p-8 lg:p-12"
                        :class="active === {{ $i }} ? 'opacity-100' : 'opacity-0 pointer-events-none'"
                    >
                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">

                            {{-- LEFT: logo + pills --}}
                            <aside class="lg:col-span-4">
                                <img
                                    src="{{ $t['logo'] }}"
                                    alt="{{ $t['name'] }} logo"
                                    class="h-14 lg:h-16 w-auto object-contain"
                                    onerror="this.outerHTML='<div class=&quot;inline-flex items-center h-14 lg:h-16 px-5 rounded-md bg-[#f7f8fa] border border-navy/10 font-heading font-bold uppercase tracking-wider text-navy text-sm&quot;>{{ $t['name'] }}</div>'"
                                >
                                <div class="mt-6 flex flex-wrap gap-2">
                                    @foreach ($t['pills'] as $pill)
                                        <span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-body font-bold uppercase tracking-wider bg-[#148af4]/10 text-[#148af4]">
                                            {{ $pill }}
                                        </span>
                                    @endforeach
                                </div>
                            </aside>

                            {{-- RIGHT: quote icon, headline, body, signature --}}
                            <div class="lg:col-span-8">
                                <svg class="w-10 h-10 text-[#148af4] mb-4" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                    <path d="M9.5 8c-3 0-5.5 2.5-5.5 5.5 0 2 1 3.7 2.5 4.6-.3 2.6-1.5 4.6-3.5 5.9l1 2c4-1.5 7-5 7-10v-2c0-3.3-.7-6-1.5-6zm14 0c-3 0-5.5 2.5-5.5 5.5 0 2 1 3.7 2.5 4.6-.3 2.6-1.5 4.6-3.5 5.9l1 2c4-1.5 7-5 7-10v-2c0-3.3-.7-6-1.5-6z"/>
                                </svg>

                                <blockquote class="font-heading font-bold text-navy text-2xl lg:text-3xl xl:text-4xl leading-tight mb-6">
                                    <p>&ldquo;{{ $t['headline'] }}&rdquo;</p>
                                </blockquote>

                                <p class="font-body text-gray-600 text-base lg:text-lg leading-relaxed mb-8">
                                    {{ $t['body'] }}
                                </p>

                                <cite class="not-italic block">
                                    <span class="block font-body font-bold text-[#148af4] text-base lg:text-lg">{{ $t['cite_name'] }}</span>
                                    <span class="block font-heading font-bold text-navy text-sm lg:text-base">{{ $t['cite_role'] }}</span>
                                </cite>
                            </div>

                        </div>
                    </article>
                @endforeach
            </div>

            @if ($showChrome)
                <div class="mt-8 flex items-center justify-between">
                    {{-- Dot pager --}}
                    <div class="flex items-center gap-2">
                        @foreach ($slides as $i => $t)
                            <button
                                type="button"
                                @click="go({{ $i }})"
                                :class="active === {{ $i }} ? 'bg-[#148af4] w-6' : 'bg-navy/20 hover:bg-navy/40 w-2'"
                                class="h-2 rounded-full transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#148af4] focus-visible:ring-offset-2"
                                aria-label="Go to slide {{ $i + 1 }}"
                                :aria-current="active === {{ $i }} ? 'true' : 'false'"
                            ></button>
                        @endforeach
                    </div>

                    {{-- Prev / Next --}}
                    <div class="flex items-center gap-2">
                        <button
                            type="button"
                            @click="prev()"
                            class="w-11 h-11 rounded-full border border-navy/15 bg-white text-navy hover:bg-navy hover:text-white transition focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#148af4] focus-visible:ring-offset-2 flex items-center justify-center"
                            aria-label="Previous testimonial"
                        >
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </button>
                        <button
                            type="button"
                            @click="next()"
                            class="w-11 h-11 rounded-full border border-navy/15 bg-white text-navy hover:bg-navy hover:text-white transition focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#148af4] focus-visible:ring-offset-2 flex items-center justify-center"
                            aria-label="Next testimonial"
                        >
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>
                </div>
            @endif
        </div>

    </div>
</section>
