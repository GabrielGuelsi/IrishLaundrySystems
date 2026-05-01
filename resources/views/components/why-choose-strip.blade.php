{{-- "Why teams choose Irish Laundry Systems" strip --}}
<section class="relative overflow-hidden min-h-[200px]" style="background-color: #0d1f3c;">

    {{-- Background image (full width, desktop only) --}}
    <img src="/images/about/about-engineers.jpg" alt="ILS Service Team"
         class="absolute inset-0 w-full h-full object-cover object-center hidden lg:block">

    {{-- Gradient overlay: solid navy on left, fades to transparent on right --}}
    <div class="absolute inset-0 hidden lg:block"
         style="background: linear-gradient(to right, #0d1f3c 40%, rgba(13,31,60,0.85) 60%, rgba(13,31,60,0.3) 80%, transparent 100%);"></div>

    {{-- Content --}}
    <div class="relative z-10 flex flex-col justify-center px-10 lg:px-20 py-10 max-w-2xl">

        {{-- Icon + heading --}}
        <div class="flex items-center gap-3 mb-5">
            <div class="w-9 h-9 rounded-full border-2 border-[#148af4] flex items-center justify-center flex-shrink-0">
                <svg class="w-4 h-4 text-[#148af4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                </svg>
            </div>
            <h2 class="font-heading text-white text-xl lg:text-2xl leading-tight">
                <span class="italic font-normal">Why </span><span class="font-bold">teams</span>
                <span class="font-normal"> choose </span><span class="font-bold">Irish Laundry Systems</span>
            </h2>
        </div>

        {{-- Bullet points --}}
        <ul class="flex flex-col gap-2.5 mb-7">
            @foreach([
                'Engineering-led — not sales-led',
                'Same-day emergency response across Ireland',
                'Authorised Electrolux Professional partner',
            ] as $point)
            <li class="flex items-center gap-2.5">
                <svg class="w-4 h-4 text-[#148af4] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                </svg>
                <span class="font-body text-white/90 text-sm">{{ $point }}</span>
            </li>
            @endforeach
        </ul>

        {{-- CTA button --}}
        <div>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 text-white font-heading font-bold text-sm px-6 py-3 rounded-lg transition-colors" style="background-color:#f97316;">
                Explore Service Contracts
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>

    </div>

</section>
