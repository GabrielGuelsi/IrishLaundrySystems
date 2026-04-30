<section class="relative overflow-hidden min-h-[160px]">
    {{-- Background image (full width) --}}
    <img src="/images/about/about-team.jpg" alt="Support team"
         class="absolute inset-0 w-full h-full object-cover object-center hidden lg:block">

    {{-- Gradient overlay: solid blue on left, fades to transparent on right --}}
    <div class="absolute inset-0 hidden lg:block"
         style="background: linear-gradient(to right, #148af4 40%, rgba(20,138,244,0.85) 60%, rgba(20,138,244,0.3) 80%, transparent 100%);"></div>

    {{-- Mobile solid background --}}
    <div class="absolute inset-0 lg:hidden" style="background-color: #148af4;"></div>

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
