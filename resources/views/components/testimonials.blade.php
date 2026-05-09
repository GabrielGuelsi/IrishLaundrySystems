@props(['heading' => 'What our customers say', 'light' => false])

{{-- Single approved testimonial — used on home + sector pages.
     'light' variant: light gray bg, navy heading. Default: white bg.
     Both render the same approved quote: Facilities Manager, Nursing Home Group, Munster. --}}

<section class="py-16 lg:py-24 {{ $light ? 'bg-[#f7f8fa] border-y border-border' : 'bg-white' }}">
    <div class="max-w-7xl 2xl:max-w-[1600px] mx-auto px-6 sm:px-10 lg:px-8 2xl:px-16">

        <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl text-center mb-14">{{ $heading }}</h2>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center max-w-5xl mx-auto px-2 lg:px-0">

            {{-- Image side --}}
            <div class="relative rounded-2xl overflow-hidden aspect-[4/3]">
                <img src="/images/about/testimonial-2.jpg" alt="Facilities Manager"
                     class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/10"></div>
            </div>

            {{-- Text side --}}
            <div class="flex flex-col">
                <svg class="w-12 h-12 text-orange mb-4" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                    <path d="M9.5 8c-3 0-5.5 2.5-5.5 5.5 0 2 1 3.7 2.5 4.6-.3 2.6-1.5 4.6-3.5 5.9l1 2c4-1.5 7-5 7-10v-2c0-3.3-.7-6-1.5-6zm14 0c-3 0-5.5 2.5-5.5 5.5 0 2 1 3.7 2.5 4.6-.3 2.6-1.5 4.6-3.5 5.9l1 2c4-1.5 7-5 7-10v-2c0-3.3-.7-6-1.5-6z"/>
                </svg>

                <blockquote class="font-heading text-navy text-2xl lg:text-3xl xl:text-4xl leading-tight mb-8">
                    <p>They show up, they communicate clearly, and <span class="font-bold">they know the equipment</span>.</p>
                </blockquote>

                <div>
                    <cite class="block font-body font-bold text-orange text-base lg:text-lg not-italic mb-1">Facilities Manager</cite>
                    <span class="font-heading font-bold text-navy text-base">Nursing Home Group, Munster</span>
                </div>
            </div>

        </div>
    </div>
</section>
