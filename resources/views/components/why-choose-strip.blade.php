{{-- "Why teams choose ILS" strip — image left, content right --}}
<section class="relative overflow-hidden" style="background-color:#011E41; min-height:320px;">

    {{-- LEFT: image pinned to 40% --}}
    <div class="absolute inset-y-0 left-0 hidden lg:block" style="width:40%;">
        <img src="/images/equipment/strip2.jpeg" alt="ILS engineer with equipment"
             class="w-full h-full object-cover" style="object-position: center 15%;">
        <div class="absolute inset-0" style="background: linear-gradient(to left, #011E41 0%, rgba(1,30,65,0.4) 40%, transparent 100%);"></div>
    </div>

    {{-- RIGHT: content — 50% width --}}
    <div class="relative z-10 flex flex-col justify-center px-10 lg:px-16 py-12 lg:py-14" style="margin-left:50%; width:50%; box-sizing:border-box;">

        <h2 class="font-heading font-bold leading-tight mb-4">
            <span class="text-white text-3xl lg:text-5xl block">Keep operations running</span>
            <span class="text-3xl lg:text-5xl block" style="color:#22d3ee;">without capital pressure</span>
        </h2>

        <p class="font-body text-white/80 text-base lg:text-lg leading-relaxed mb-6">
            Rental supports replacement, expansion and operational<br>continuity — no upfront investment required.
        </p>

        <div class="flex items-center flex-nowrap gap-0 mb-7">
            @foreach([
                ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M14.25 7.756a4.5 4.5 0 1 0 0 8.488M7.5 10.5h5.25m-5.25 3h5.25M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>', 'label' => 'No upfront investment'],
                ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766m0 0 3.024 3.024c.37-.14.716-.363 1.002-.67L21 11.25a2.25 2.25 0 0 0-2.25-2.25H15M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63"/>', 'label' => 'Installed and supported'],
                ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/>', 'label' => 'Flexible terms'],
            ] as $i => $feat)
            @if($i > 0)
                <div class="w-px h-7 bg-white/20 mx-4 flex-shrink-0"></div>
            @endif
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 flex-shrink-0 text-white/80" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    {!! $feat['icon'] !!}
                </svg>
                <span class="font-body text-white text-xs font-semibold whitespace-nowrap">{{ $feat['label'] }}</span>
            </div>
            @endforeach
        </div>

        <div class="w-full flex" style="justify-content: center; padding-left: 33%;">
            <a href="{{ route('rental') }}"
               class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/90 transition-colors tracking-wide">
                Explore Equipment Rental
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>

    </div>

</section>
