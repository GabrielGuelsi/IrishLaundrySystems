{{-- "Why teams choose ILS" strip — image left, content right --}}
<section class="relative overflow-hidden" style="background-color:#011E41; min-height:340px;">

    {{-- LEFT: image pinned --}}
    <div class="absolute inset-y-0 left-0 hidden lg:block" style="width:48%;">
        <img src="/images/equipment/strip2.jpeg" alt="ILS engineer with equipment"
             class="w-full h-full object-cover" style="object-position: center 15%;">
        <div class="absolute inset-0" style="background: linear-gradient(to left, #011E41 0%, rgba(1,30,65,0.3) 30%, transparent 70%);"></div>
    </div>

    {{-- RIGHT: content --}}
    <div class="relative z-10 flex flex-col justify-center px-10 lg:px-14 py-16" style="margin-left:48%;">

        <h2 class="font-heading font-bold text-white text-xl lg:text-2xl leading-tight mb-2">
            Keep operations running <span style="color:#22d3ee;">without capital pressure</span>
        </h2>

        <p class="font-body text-white/70 text-xs leading-relaxed mb-3 max-w-xs hidden lg:block">
            Rental supports replacement, expansion and operational continuity.
        </p>

        <div class="flex items-center gap-0 mb-4">
            @foreach([
                ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M14.25 7.756a4.5 4.5 0 1 0 0 8.488M7.5 10.5h5.25m-5.25 3h5.25M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>', 'label' => 'No upfront investment'],
                ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766m0 0 3.024 3.024c.37-.14.716-.363 1.002-.67L21 11.25a2.25 2.25 0 0 0-2.25-2.25H15M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63"/>', 'label' => 'Installed and supported'],
                ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/>', 'label' => 'Flexible terms'],
            ] as $i => $feat)
            @if($i > 0)<div class="w-px h-5 bg-white/20 mx-4 flex-shrink-0"></div>@endif
            <div class="flex items-center gap-1.5">
                <div class="w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0" style="border:1.5px dashed rgba(255,255,255,0.35);">
                    <svg class="w-3 h-3 text-white/80" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">{!! $feat['icon'] !!}</svg>
                </div>
                <span class="font-body text-white/80 text-xs font-semibold whitespace-nowrap">{{ $feat['label'] }}</span>
            </div>
            @endforeach
        </div>

        <a href="{{ route('rental') }}"
           class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-xs px-5 py-2.5 rounded-full hover:bg-white/90 transition-colors tracking-wide w-fit">
            Explore Equipment Rental
            <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
            </svg>
        </a>

    </div>

</section>
