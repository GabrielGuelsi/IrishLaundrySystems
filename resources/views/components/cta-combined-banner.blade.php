<section class="relative overflow-hidden" style="background-color: #148af4;">
    <div class="grid grid-cols-1 lg:grid-cols-2 min-h-[160px]">
        {{-- Left: text + button --}}
        <div class="flex flex-col justify-center px-10 lg:px-20 py-10 z-10 relative">
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
        {{-- Right: image with diagonal clip --}}
        <div class="hidden lg:block relative">
            <div class="absolute inset-0" style="clip-path: polygon(10% 0, 100% 0, 100% 100%, 0% 100%);">
                <img src="/images/about/about-team.jpg" alt="Support team" class="w-full h-full object-cover opacity-80">
                <div class="absolute inset-0" style="background: linear-gradient(to right, #148af4 0%, transparent 30%);"></div>
            </div>
        </div>
    </div>
</section>
