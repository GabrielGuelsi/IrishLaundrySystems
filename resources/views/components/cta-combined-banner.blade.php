<section class="relative overflow-hidden min-h-[160px]" style="background-color:#148af4;">

    {{-- Image pinned to the right half only --}}
    <div class="absolute inset-y-0 right-0 hidden lg:block" style="width:55%;">
        <img src="/images/Hospitallity/frontdeskstripe.png" alt="Hospitality front desk"
             class="w-full h-full object-cover object-center">
        {{-- Fade edge on the left so it blends into the blue --}}
        <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, rgba(20,138,244,0.6) 30%, rgba(20,138,244,0.1) 70%, transparent 100%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 flex flex-col justify-center px-10 lg:px-20 py-10 max-w-2xl">
        <h2 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-tight uppercase mb-6">
            We design the laundry equipment and solutions your business needs — together
        </h2>
        <div>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-full hover:bg-white/90 transition-colors tracking-wide">
                Contact an Expert
            </a>
        </div>
    </div>
</section>
