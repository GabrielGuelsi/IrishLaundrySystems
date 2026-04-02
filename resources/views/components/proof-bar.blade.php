{{--
    Proof Bar — "Trusted by" infinite logo loop
    CSS-only marquee (no JS). Pauses on hover. Fades at edges.
    Placeholder logo loop (ILS + Electrolux) with continuous marquee.
--}}
<section class="bg-steel py-1 overflow-hidden relative" aria-label="Trusted by operations across Ireland">

    <style>
        @keyframes ils-marquee {
            from { transform: translateX(0); }
            to   { transform: translateX(-50%); }
        }
        .ils-marquee-track {
            animation: ils-marquee 18s linear infinite;
            will-change: transform;
            user-select: none;
        }
        .ils-marquee-track:hover {
            animation-play-state: paused;
        }
        .ils-marquee-wrap::before,
        .ils-marquee-wrap::after {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            width: 80px;
            pointer-events: none;
            z-index: 10;
        }
        .ils-marquee-wrap::before {
            left: 0;
            background: linear-gradient(to right, #148af4, transparent);
        }
        .ils-marquee-wrap::after {
            right: 0;
            background: linear-gradient(to left, #148af4, transparent);
        }
        @media (prefers-reduced-motion: reduce) {
            .ils-marquee-track { animation: none; }
        }
    </style>

    <p class="text-center text-[10px] font-body text-blue-100 uppercase tracking-[0.18em] mb-1 px-4">
        Trusted by operations across Ireland
    </p>

    @php
        $logos = [
            [
                'src' => '/images/logo/ILS-LOGO-HORIZONTAL-WHITE.png',
                'alt' => 'Irish Laundry Systems',
                'class' => 'h-7 md:h-8',
            ],
            [
                'src' => '/images/logo/Electrolux_logo.svg.png',
                'alt' => 'Electrolux Professional',
                'class' => 'h-6 md:h-7',
            ],
            [
                'src' => '/images/logo/HSE-Logo-Green-NEW-no-background.png',
                'alt' => 'Health Service Executive',
                'class' => 'h-6 md:h-7',
            ],
        ];
    @endphp

    <div class="ils-marquee-wrap relative overflow-hidden">
        {{-- Track contains 2 identical lists — when list 1 scrolls off the left, list 2 is seamlessly in view --}}
        <div class="ils-marquee-track flex items-center w-max" role="list" aria-label="Partner logos">

            @foreach([true, false] as $primary)
            <div class="flex items-center gap-8 px-6 flex-nowrap" @if(!$primary) aria-hidden="true" @endif role="presentation">

                @foreach([1, 2, 3] as $repeat)
                    @foreach($logos as $logo)
                    <div class="flex items-center justify-center h-7 px-2" @if($primary) role="listitem" @endif>
                        <img src="{{ $logo['src'] }}" alt="{{ $logo['alt'] }}" class="h-5 w-auto opacity-80 grayscale brightness-0 invert" loading="lazy" decoding="async">
                    </div>
                    @endforeach
                @endforeach

            </div>
            @endforeach

        </div>
    </div>

</section>

