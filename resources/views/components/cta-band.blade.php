@props([
    'heading'     => 'Ready to reduce downtime risk?',
    'subheading'  => 'Talk to an ILS engineer about service contracts, repairs or equipment. We cover the Republic of Ireland.',
    'primaryText' => 'Request a Service Assessment',
    'primaryHref' => '/request-assessment',
    'secondaryText' => 'Talk to an Engineer',
    'secondaryHref' => 'tel:+353000000000',
    'dark'        => true,
])

<section class="{{ $dark ? 'bg-navy' : 'bg-steel' }} py-16 lg:py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-heading font-bold text-white text-3xl lg:text-4xl mb-4 leading-tight">
            {{ $heading }}
        </h2>
        <p class="font-body text-blue-200 text-lg mb-8 leading-relaxed max-w-2xl mx-auto">
            {{ $subheading }}
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="{{ $primaryHref }}"
               class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-orange hover:bg-orange-dark text-white font-body font-semibold px-8 py-4 rounded-lg text-base transition-colors duration-200 cursor-pointer"
               data-ga-cta="cta_band_{{ Str::slug($primaryText) }}">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                </svg>
                {{ $primaryText }}
            </a>
            <a href="{{ $secondaryHref }}"
               class="w-full sm:w-auto inline-flex items-center justify-center gap-2 border-2 border-white/40 hover:border-white text-white font-body font-semibold px-8 py-4 rounded-lg text-base transition-colors duration-200 cursor-pointer hover:bg-white/10">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                </svg>
                {{ $secondaryText }}
            </a>
        </div>
        <p class="mt-6 text-sm text-blue-300 font-body">
            We aim to respond within 24 hours. Republic of Ireland only (excluding Northern Ireland).
        </p>
    </div>
</section>
