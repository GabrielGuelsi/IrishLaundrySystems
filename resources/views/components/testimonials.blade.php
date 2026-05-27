@props([
    'heading'    => 'What our customers say.',
    'eyebrow'    => null,
    'subheading' => null,
    'light'      => false,
    'single'     => null,
])

@php
$testimonials = [
    'grace' => [
        'logo'      => '/images/sectors/3.png',
        'logoClass' => 'h-[240px] w-auto object-contain',
        'name'      => 'Grace Healthcare',
        'pills'     => ['Valued Partnership', 'Operational Excellence', 'Reliability', 'Quick Resolution'],
        'headline'  => 'A trusted partner providing consistent commitment that makes a real difference.',
        'body'      => 'We have built a strong and valued partnership with Irish Laundry Systems over many years. Their consistent commitment to excellence has made a real difference to our operations, with service delivery always of the highest standard. What truly sets them apart is their reliability and responsiveness; they are a trusted partner always ready to resolve any issues quickly and effectively. This level of dedication gives us great confidence and peace of mind.',
        'cite_name' => 'Owen Brennan',
        'cite_role' => 'Head of Group Facilities at Grace Healthcare',
    ],
    'hse' => [
        'logo'      => '',
        'image'     => '/images/sectors/St-Marys-Hospital-Phooenix-Park-Dublin-Rainwater-System-old-Building.webp',
        'name'      => 'St. Mary\'s Hospital Dublin',
        'pills'     => ['Excellent Callouts', 'Annual Maintenance', 'Minimal Disruption', 'Peace of Mind'],
        'headline'  => 'Consistent, professional service that gives us real peace of mind.',
        'body'      => 'We\'ve worked with Irish Laundry Systems for a number of years at St. Mary\'s Hospital, and their service has been consistently reliable and professional. Their response times for callouts are excellent, and any issues are dealt with quickly and efficiently. Their annual maintenance support ensures our equipment runs smoothly with minimal disruption, giving us real peace of mind. We value the long-term relationship we\'ve built and trust their team to deliver a high standard of service every time.',
        'cite_name' => 'Larry Jordan',
        'cite_role' => 'Operations at St. Mary\'s Hospital',
    ],
    'charlemont' => [
        'logo'      => '/images/sectors/charlemontgroup.png',
        'logoClass' => 'h-[280px] w-auto object-contain',
        'name'      => 'Charlemont Group',
        'pills'     => ['Long-Term Partnership', 'Reliable Service', 'Fast Response', 'Minimal Disruption'],
        'headline'  => 'A reliable partner we can always count on to keep our operations running smoothly.',
        'body'      => 'Irish Laundry Systems has been an outstanding partner for Charlemont Group. Their team consistently delivers a professional and efficient service, with response times that are second to none. Whether it is routine maintenance or an urgent callout, they handle everything with care and expertise. We have complete confidence in their ability to support our laundry operations and would not hesitate to recommend them.',
        'cite_name' => 'Contact Name',
        'cite_role' => 'Facilities Manager at Charlemont Group',
    ],
    'laundryonline' => [
        'logo'      => '/images/sectors/laundryonlinesquare.png',
        'logoClass' => 'h-[280px] w-auto object-contain',
        'name'      => 'Laundry Online',
        'pills'     => ['Equipment Supply', 'Quick Turnaround', 'Dependable Support', 'Service Contract'],
        'headline'  => 'Professional, knowledgeable and always quick to respond when it matters most.',
        'body'      => 'Working with Irish Laundry Systems has been a straightforward and positive experience from the start. Their knowledge of commercial laundry equipment is excellent and their aftercare support has been dependable throughout. Any issues are resolved quickly and efficiently, and the team is always easy to reach. We value the relationship we have built and look forward to continuing to work together.',
        'cite_name' => 'Contact Name',
        'cite_role' => 'Operations Manager at Laundry Online',
    ],
    'abbvie' => [
        'logo'      => '/images/logo/abbvie.png',
        'logoClass' => 'h-[160px] w-auto object-contain',
        'name'      => 'AbbVie',
        'pills'     => ['Fast Response', 'Maintenance & Repair', 'Service Contract', 'Dependable Support'],
        'headline'  => 'They provide excellent support and a dependable experience we can always count on.',
        'body'      => 'Irish Laundry Systems continues to deliver a smooth, efficient experience from start to finish. The team is very knowledgeable, helpful, professional, and easy to work with. They provide excellent support and a dependable experience we can always count on. They are great to deal with, always quick to respond, and exceeded our expectations with their high-quality service and attention to detail. We would highly recommend them.',
        'cite_name' => 'Dermot Wilson',
        'cite_role' => 'Equipment Engineer at AbbVie',
    ],
];

$order  = ['grace', 'hse', 'charlemont', 'laundryonline', 'abbvie'];
$slides = $single && isset($testimonials[$single])
    ? [$testimonials[$single]]
    : array_map(fn ($k) => $testimonials[$k], $order);

$showChrome = ! $single && count($slides) > 1;
@endphp

<section class="py-16 lg:py-24 {{ $light ? 'bg-[#f7f8fa] border-y border-border' : 'bg-white' }}">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 2xl:px-16">

        @if (! $single && ! empty($heading))
            <div class="text-center mb-14">
                @if($eyebrow)
                    <p class="font-body font-bold text-[#148af4] text-xs uppercase tracking-[0.22em] mb-3">{{ $eyebrow }}</p>
                @endif
                <h2 class="font-heading font-bold text-navy text-4xl lg:text-5xl leading-tight">{!! $heading !!}</h2>
                @if($subheading)
                    <p class="font-body text-gray-500 text-base leading-relaxed mt-4 max-w-3xl mx-auto">{!! $subheading !!}</p>
                @endif
            </div>
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
            class="relative"
            role="region"
            aria-roledescription="carousel"
            aria-label="Customer testimonials"
            aria-live="polite"
        >
            {{-- Slides stacked in the same grid cell --}}
            <div class="grid [&>*]:[grid-area:1/1]">
                @foreach ($slides as $i => $t)
                    <article
                        role="group"
                        aria-roledescription="slide"
                        aria-label="{{ $i + 1 }} of {{ count($slides) }}"
                        :aria-hidden="active !== {{ $i }}"
                        class="transition-opacity duration-500 rounded-2xl overflow-hidden border border-navy/[0.07] shadow-sm"
                        :class="active === {{ $i }} ? 'opacity-100' : 'opacity-0 pointer-events-none'"
                    >
                        <div class="grid grid-cols-1 lg:grid-cols-12">

                            {{-- ── LEFT PANEL: logo + pills ── --}}
                            <aside class="lg:col-span-4 bg-white border-b lg:border-b-0 lg:border-r border-navy/[0.07] flex flex-col items-center justify-center gap-6 p-8 lg:p-10">

                                {{-- Logo / Image --}}
                                <div class="w-full flex items-center justify-center">
                                    @if (!empty($t['logo']))
                                        @php $logoFallback = $t['name']; @endphp
                                        <img
                                            src="{{ $t['logo'] }}"
                                            alt="{{ $t['name'] }} logo"
                                            class="{{ $t['logoClass'] ?? 'h-16 w-auto object-contain' }}"
                                            onerror="this.outerHTML='<div class=&quot;font-heading font-bold uppercase tracking-wider text-navy text-sm px-5 py-3 rounded-lg bg-white border border-navy/10&quot;>{{ $logoFallback }}</div>'"
                                        >
                                    @elseif (!empty($t['image']))
                                        <div class="flex flex-col items-center gap-3">
                                            <img
                                                src="{{ $t['image'] }}"
                                                alt="{{ $t['name'] }}"
                                                class="w-72 h-64 rounded-xl object-cover flex-shrink-0"
                                            >
                                            <p class="font-body font-bold text-navy text-sm text-center">{{ $t['name'] }}</p>
                                        </div>
                                    @endif
                                </div>

                                {{-- Mini Pills --}}
                                <div class="flex flex-wrap gap-2 justify-center">
                                    @foreach ($t['pills'] as $pill)
                                        <span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-body font-bold uppercase tracking-wider bg-[#148af4]/10 text-[#148af4]">
                                            {{ $pill }}
                                        </span>
                                    @endforeach
                                </div>

                            </aside>

                            {{-- ── RIGHT PANEL: pull-quote ── --}}
                            <div class="lg:col-span-8 bg-white flex flex-col justify-center p-8 lg:p-12 xl:p-14">

                                {{-- Opening quote mark (light blue) --}}
                                <svg class="w-10 h-10 mb-5" fill="#148af4" viewBox="0 0 32 32" aria-hidden="true" style="transform: rotate(180deg);">
                                    <path d="M9.5 8c-3 0-5.5 2.5-5.5 5.5 0 2 1 3.7 2.5 4.6-.3 2.6-1.5 4.6-3.5 5.9l1 2c4-1.5 7-5 7-10v-2c0-3.3-.7-6-1.5-6zm14 0c-3 0-5.5 2.5-5.5 5.5 0 2 1 3.7 2.5 4.6-.3 2.6-1.5 4.6-3.5 5.9l1 2c4-1.5 7-5 7-10v-2c0-3.3-.7-6-1.5-6z"/>
                                </svg>

                                {{-- Headline (navy, bold, large) --}}
                                <blockquote class="font-heading font-bold text-navy text-2xl lg:text-3xl leading-tight mb-5">
                                    {{ rtrim($t['headline'], '.') }}
                                </blockquote>

                                {{-- Body (grey) + closing quote mark (inline blue) --}}
                                <p class="font-body text-gray-500 text-base lg:text-lg leading-relaxed mb-8">
                                    {{ $t['body'] }}<svg display="inline" style="display:inline; vertical-align:middle; margin-left:4px;" width="36" height="36" fill="#148af4" viewBox="0 0 32 32" aria-hidden="true"><path d="M9.5 8c-3 0-5.5 2.5-5.5 5.5 0 2 1 3.7 2.5 4.6-.3 2.6-1.5 4.6-3.5 5.9l1 2c4-1.5 7-5 7-10v-2c0-3.3-.7-6-1.5-6zm14 0c-3 0-5.5 2.5-5.5 5.5 0 2 1 3.7 2.5 4.6-.3 2.6-1.5 4.6-3.5 5.9l1 2c4-1.5 7-5 7-10v-2c0-3.3-.7-6-1.5-6z"/></svg>
                                </p>

                                {{-- Divider --}}
                                <div class="border-t border-navy/[0.07] mb-6"></div>

                                {{-- Signature: avatar + name (blue) + role (navy) --}}
                                <cite class="not-italic flex items-center gap-4">
                                    <div class="w-10 h-10 rounded-full bg-[#148af4]/10 flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="#148af4" stroke-width="1.5" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="block font-body font-bold text-[#148af4] text-base">{{ $t['cite_name'] }}</span>
                                        <span class="block font-heading font-bold text-navy text-sm">{{ $t['cite_role'] }}</span>
                                    </div>
                                </cite>

                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            {{-- Carousel controls --}}
            @if ($showChrome)
                <div class="mt-8 flex items-center justify-between">

                    {{-- Dot pager --}}
                    <div class="flex items-center gap-2">
                        @foreach ($slides as $i => $t)
                            <button
                                type="button"
                                @click="go({{ $i }})"
                                :class="active === {{ $i }} ? 'bg-[#148af4] w-6' : 'bg-navy/20 hover:bg-navy/40 w-2'"
                                class="h-2 rounded-full transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#148af4] focus-visible:ring-offset-2"
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
                            class="w-11 h-11 rounded-full border border-navy/15 bg-white text-navy hover:bg-navy hover:text-white transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#148af4] focus-visible:ring-offset-2 flex items-center justify-center"
                            aria-label="Previous testimonial"
                        >
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </button>
                        <button
                            type="button"
                            @click="next()"
                            class="w-11 h-11 rounded-full border border-navy/15 bg-white text-navy hover:bg-navy hover:text-white transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#148af4] focus-visible:ring-offset-2 flex items-center justify-center"
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
