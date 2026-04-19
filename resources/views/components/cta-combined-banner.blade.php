<section class="py-8 lg:py-10 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20">
        <div class="rounded-2xl overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2">

                {{-- Left half: dark navy + product image (screenshot 2 style) --}}
                <div class="bg-navy flex items-center gap-6 px-8 py-8">
                    <img src="/images/equipment/line6000-barrier-washer.webp"
                         alt="Electrolux Professional Equipment"
                         class="w-28 h-28 object-contain flex-shrink-0">
                    <div>
                        <p class="font-body text-xs text-[#148af4] uppercase tracking-widest mb-2">Electrolux Professional</p>
                        <h3 class="font-heading font-bold text-white text-lg leading-snug mb-2">Is Your Equipment Missing Something?</h3>
                        <p class="font-body text-white/60 text-sm leading-relaxed">Find accessories and consumables for all your Electrolux Professional needs.</p>
                    </div>
                </div>

                {{-- Right half: blue + CTA text (screenshot 1 style) --}}
                <div class="flex flex-col justify-center px-10 py-8" style="background-color: #148af4;">
                    <h2 class="font-heading font-bold text-white text-xl lg:text-2xl leading-tight uppercase mb-6">
                        We design the laundry equipment and solutions your business needs — together
                    </h2>
                    <div>
                        <a href="{{ route('contact') }}"
                           class="inline-flex items-center gap-2 bg-white text-navy font-heading font-bold text-sm px-6 py-3 rounded-full hover:bg-white/90 transition-colors tracking-wide">
                            Contact an Expert
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
