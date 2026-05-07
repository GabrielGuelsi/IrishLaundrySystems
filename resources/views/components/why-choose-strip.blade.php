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
                [
                    'icon' => '<span style="font-size:1.5rem;font-weight:700;color:white;line-height:1;">€</span>',
                    'label' => 'No upfront<br>investment',
                ],
                [
                    'icon' => '<svg style="width:1.6rem;height:1.6rem;" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75a4.5 4.5 0 0 1-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 8.684a2.548 2.548 0 1 1-3.586-3.586l8.684-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 0 1 6.336-4.486l-3.276 3.276a3.004 3.004 0 0 0 2.25 2.25l3.276-3.276c.256.565.398 1.192.398 1.852Z"/></svg>',
                    'label' => 'Installed and<br>supported',
                ],
                [
                    'icon' => '<svg style="width:1.6rem;height:1.6rem;" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/></svg>',
                    'label' => 'Flexible<br>terms',
                ],
            ] as $i => $feat)
            @if($i > 0)
                <div class="w-px h-10 bg-white/20 mx-5 flex-shrink-0"></div>
            @endif
            <div class="flex items-center gap-3">
                <div class="flex-shrink-0 flex items-center justify-center rounded-full"
                     style="width:52px;height:52px;border:2px dashed rgba(255,255,255,0.5);">
                    {!! $feat['icon'] !!}
                </div>
                <span class="font-body text-white text-xs font-semibold leading-snug">{!! $feat['label'] !!}</span>
            </div>
            @endforeach
        </div>

        <div class="w-full flex justify-start">
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
