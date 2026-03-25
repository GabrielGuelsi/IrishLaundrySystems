{{--
    Proof Bar — "Trusted by" infinite logo loop
    CSS-only marquee (no JS). Pauses on hover. Fades at edges.
    Swap text badges for <img> tags when client logos are available.
--}}
<section class="bg-steel py-5 overflow-hidden relative" aria-label="Trusted by operations across Ireland">

    <style>
        @keyframes ils-marquee {
            from { transform: translateX(0); }
            to   { transform: translateX(-50%); }
        }
        .ils-marquee-track {
            animation: ils-marquee 32s linear infinite;
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
            background: linear-gradient(to right, #2d5f8a, transparent);
        }
        .ils-marquee-wrap::after {
            right: 0;
            background: linear-gradient(to left, #2d5f8a, transparent);
        }
        @media (prefers-reduced-motion: reduce) {
            .ils-marquee-track { animation: none; }
        }
    </style>

    <p class="text-center text-xs font-body text-blue-200 uppercase tracking-widest mb-4 px-4">
        Trusted by operations across Ireland
    </p>

    <div class="ils-marquee-wrap relative overflow-hidden">
        {{-- Track contains 2 identical lists — when list 1 scrolls off the left, list 2 is seamlessly in view --}}
        <div class="ils-marquee-track flex items-center w-max" role="list" aria-label="Partner and client sectors">

            @foreach([true, false] as $primary)
            <div class="flex items-center gap-14 px-7 flex-nowrap" @if(!$primary) aria-hidden="true" @endif role="presentation">

                {{-- Electrolux Professional --}}
                <div class="flex items-center gap-2.5 text-white font-body font-semibold text-sm whitespace-nowrap" @if($primary) role="listitem" title="Electrolux Professional — Authorised Partner" @endif>
                    <svg class="w-5 h-5 text-orange flex-shrink-0" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M13.5 2L4 13.5h7L7.5 22l12.5-12h-7L13.5 2z"/>
                    </svg>
                    <span>Electrolux Professional</span>
                    <span class="ml-0.5 text-xs text-blue-200 font-normal border border-blue-300/40 rounded px-1.5 py-0.5">Authorised Partner</span>
                </div>

                <span class="w-px h-5 bg-white/20 flex-shrink-0" aria-hidden="true"></span>

                {{-- Healthcare Networks --}}
                <div class="flex items-center gap-2 text-blue-100 font-body text-sm whitespace-nowrap" @if($primary) role="listitem" @endif>
                    <svg class="w-4 h-4 text-blue-300 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75"/>
                    </svg>
                    <span>Healthcare Networks</span>
                </div>

                <span class="w-px h-5 bg-white/20 flex-shrink-0" aria-hidden="true"></span>

                {{-- Hospitality Groups --}}
                <div class="flex items-center gap-2 text-blue-100 font-body text-sm whitespace-nowrap" @if($primary) role="listitem" @endif>
                    <svg class="w-4 h-4 text-blue-300 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21"/>
                    </svg>
                    <span>Hospitality Groups</span>
                </div>

                <span class="w-px h-5 bg-white/20 flex-shrink-0" aria-hidden="true"></span>

                {{-- Care Facilities --}}
                <div class="flex items-center gap-2 text-blue-100 font-body text-sm whitespace-nowrap" @if($primary) role="listitem" @endif>
                    <svg class="w-4 h-4 text-blue-300 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                    </svg>
                    <span>Care Facilities</span>
                </div>

                <span class="w-px h-5 bg-white/20 flex-shrink-0" aria-hidden="true"></span>

                {{-- Facilities Management --}}
                <div class="flex items-center gap-2 text-blue-100 font-body text-sm whitespace-nowrap" @if($primary) role="listitem" @endif>
                    <svg class="w-4 h-4 text-blue-300 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21"/>
                    </svg>
                    <span>Facilities Management</span>
                </div>

                <span class="w-px h-5 bg-white/20 flex-shrink-0" aria-hidden="true"></span>

                {{-- 30+ Years --}}
                <div class="flex items-center gap-2 text-blue-100 font-body text-sm whitespace-nowrap" @if($primary) role="listitem" @endif>
                    <svg class="w-4 h-4 text-orange flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Est. 1987 — 30+ Years</span>
                </div>

                <span class="w-px h-5 bg-white/20 flex-shrink-0" aria-hidden="true"></span>

                {{-- ROI Coverage --}}
                <div class="flex items-center gap-2 text-blue-100 font-body text-sm whitespace-nowrap" @if($primary) role="listitem" @endif>
                    <svg class="w-4 h-4 text-blue-300 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                    </svg>
                    <span>Republic of Ireland</span>
                </div>

                {{-- Gap before second copy --}}
                <span class="w-7 flex-shrink-0" aria-hidden="true"></span>

            </div>
            @endforeach

        </div>
    </div>

</section>
