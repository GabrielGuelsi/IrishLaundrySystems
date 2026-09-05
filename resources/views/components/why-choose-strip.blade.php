@props([
    'eyebrow' => null,
    'mirror' => false,
    'image' => '/images/shared/rentalstripimage.jpg',
    'body' => 'Rental gives your site a practical route for replacement, expansion or continuity when buying outright is not the right next step.',
    'headingLine1' => 'Keep laundry moving',
    'headingLine2' => 'with <span style="color:#148af4;">capital control</span>',
    'miniPoints' => null,
    'miniNowrap' => false,
    'wideContent' => false,
    'gradientStrength' => 1,
    'imagePosition' => 'center 15%',
    'features' => [
        [
            'icon' => '<span style="font-size:2rem;font-weight:700;color:white;line-height:1;">€</span>',
            'label' => 'No capital<br>purchase',
        ],
        [
            'icon' => '<svg style="width:3.5rem;height:3.5rem;" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75a4.5 4.5 0 0 1-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 8.684a2.548 2.548 0 1 1-3.586-3.586l8.684-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 0 1 6.336-4.486l-3.276 3.276a3.004 3.004 0 0 0 2.25 2.25l3.276-3.276c.256.565.398 1.192.398 1.852Z"/></svg>',
            'label' => 'Installed and<br>maintained',
        ],
        [
            'icon' => '<svg style="width:3.5rem;height:3.5rem;" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/></svg>',
            'label' => 'Practical replacement<br>route',
        ],
    ],
])
{{-- "Why teams choose ILS" strip — image one side, content the other ($mirror flips them) --}}
<section class="relative overflow-hidden" style="background-color:#011E41; min-height:280px;">

    {{-- image pinned to 56% — left by default, right when mirrored --}}
    <div class="absolute inset-y-0 {{ $mirror ? 'right-0' : 'left-0' }} hidden lg:block" style="width:56%;">
        <img src="{{ $image }}" alt="Commercial laundry equipment rental"
             class="w-full h-full object-cover" style="object-position: {{ $imagePosition }};">
        {{-- Smoothstep fade — the plateau covers the text column, then eases out with no visible seam.
             $gradientStrength scales every stop past the plateau (1 = default, lower = more image showing). --}}
        @php
            $gradStops = [[0,1],[11,1],[16.31,0.989],[21.63,0.957],[26.94,0.908],[32.25,0.844],[37.56,0.768],[42.88,0.684],[48.19,0.593],[53.5,0.5],[58.81,0.407],[64.13,0.316],[69.44,0.232],[74.75,0.156],[80.06,0.092],[85.38,0.043],[90.69,0.011],[96,0]];
            $gradCss = implode(', ', array_map(function ($s) use ($gradientStrength) {
                $a = $s[0] <= 11 ? $s[1] : round($s[1] * $gradientStrength, 3);
                return "rgba(1,30,65,{$a}) {$s[0]}%";
            }, $gradStops));
        @endphp
        <div class="absolute inset-0" style="background: linear-gradient(to {{ $mirror ? 'right' : 'left' }}, {{ $gradCss }});"></div>
    </div>

    {{-- content — 50% width, right by default, left when mirrored --}}
    <div class="relative z-10 flex flex-col justify-center px-6 sm:px-10 {{ $wideContent ? 'lg:px-12' : ($mirror ? 'lg:px-20' : 'lg:px-16') }} py-10 lg:py-12 w-full {{ $wideContent ? 'lg:w-[58%]' : 'lg:w-1/2' }} {{ $mirror ? '' : ($wideContent ? 'lg:ml-[42%]' : 'lg:ml-[50%]') }}" style="box-sizing:border-box;">

        @php
            $miniHasIcons = is_array($miniPoints[0] ?? null);
            // the negative shift optically aligns the icon column in the default (content-right) layout;
            // mirrored, the content sits against the page gutter and must line up with the page grid instead
            $miniIconShift = ($miniHasIcons && !$mirror) ? 'lg:-ml-6 xl:-ml-8' : '';
            // optional per-page override — longer two-line headings can pass a smaller lg size so each line fits
            $headingSize = $headingSize ?? 'text-2xl sm:text-4xl lg:text-5xl';
        @endphp
        @if ($eyebrow)
        <p class="font-body font-bold text-white/70 text-xs uppercase tracking-[0.22em] mb-3 {{ $miniIconShift }}">{{ $eyebrow }}</p>
        @endif
        <h2 class="font-heading font-bold {{ $headingSize }} leading-tight text-balance mb-4 {{ $miniIconShift }}">
            <span class="text-white {{ $headingSize }}">{!! $headingLine1 !!}</span>
            <span class="{{ $headingSize }} text-white">{!! $headingLine2 !!}</span>
        </h2>

        <p class="font-body text-white/80 text-base leading-relaxed mb-6 {{ $miniIconShift }}">
            {!! $body !!}
        </p>

        @if($miniPoints)
        <div class="flex items-center flex-wrap 2xl:flex-nowrap gap-y-2 {{ $miniHasIcons ? 'gap-x-4 '.$miniIconShift : ($miniNowrap ? 'gap-x-3' : 'gap-x-5') }} mb-7">
            @foreach($miniPoints as $i => $pt)
            @if(is_array($pt))
            <span class="flex items-center gap-2 flex-shrink-0 {{ $pt['class'] ?? '' }}">
                @if(!empty($pt['icon']))
                <img src="/images/icons/{{ $pt['icon'] }}.png" alt="" aria-hidden="true" class="h-14 w-14 object-contain {{ $pt['iconClass'] ?? '' }}" style="{{ $pt['iconStyle'] ?? '' }}">
                @endif
                <span class="font-body text-white text-sm font-bold leading-tight">{!! $pt['label'] !!}</span>
            </span>
            @else
            <span class="font-body text-white {{ $miniNowrap ? 'text-[11px] lg:whitespace-nowrap' : 'text-sm' }} font-bold">{!! $pt !!}</span>
            @endif
            @endforeach
        </div>
        @else
        {{-- same icon size, label style and spacing as the miniPoints row above --}}
        <div class="flex items-center flex-wrap 2xl:flex-nowrap gap-x-4 gap-y-2 mb-7">
            @foreach($features as $feat)
            <div class="flex items-center gap-2 flex-shrink-0">
                <div class="flex-shrink-0" style="width:3.5rem;height:3.5rem;display:flex;align-items:center;justify-content:center;">
                    {!! $feat['icon'] !!}
                </div>
                <span class="font-body text-white text-sm font-bold leading-tight">{!! $feat['label'] !!}</span>
            </div>
            @endforeach
        </div>
        @endif

        <div class="w-full flex justify-start {{ $miniIconShift }}">
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
