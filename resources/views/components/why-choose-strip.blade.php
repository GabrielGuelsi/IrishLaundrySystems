{{-- "Why teams choose Irish Laundry Systems" strip --}}
<section class="relative overflow-hidden" style="background-color: #0d1f3c;">
    <div class="grid grid-cols-1 lg:grid-cols-2 min-h-[200px]">

        {{-- Left: icon + heading + bullets + button --}}
        <div class="flex flex-col justify-center px-10 lg:px-20 py-10 z-10 relative">

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
                    'Global Equipment Expertise',
                    'Coinless, heavy-duty design',
                    'Data-driven spare parts supply',
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
                   class="inline-flex items-center gap-2 bg-orange hover:bg-orange-dark text-white font-heading font-bold text-sm px-6 py-3 rounded-lg transition-colors" style="background-color:#f97316;">
                    Explore Service Contracts
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>
        </div>

        {{-- Right: background image with diagonal clip + dark overlay --}}
        <div class="hidden lg:block relative">
            <div class="absolute inset-0" style="clip-path: polygon(10% 0, 100% 0, 100% 100%, 0% 100%);">
                <img src="/images/about/about-engineers.jpg" alt="ILS Service Team" class="w-full h-full object-cover">
                <div class="absolute inset-0" style="background: linear-gradient(to right, #0d1f3c 0%, rgba(13,31,60,0.5) 40%, rgba(13,31,60,0.2) 100%);"></div>
            </div>
        </div>

    </div>
</section>
