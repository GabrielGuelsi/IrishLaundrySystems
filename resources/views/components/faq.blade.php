@props(['faqs' => [], 'heading' => 'Frequently Asked Questions'])

<section class="py-16 lg:py-20 bg-bg">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-heading font-bold text-navy text-3xl lg:text-4xl text-center mb-10">{{ $heading }}</h2>

        <div class="space-y-3" x-data="{ open: null }">
            @foreach ($faqs as $i => $faq)
            <div class="bg-white border border-border rounded-xl overflow-hidden shadow-card">
                <button
                    @click="open === {{ $i }} ? open = null : open = {{ $i }}"
                    class="w-full flex items-center justify-between gap-4 px-6 py-4 text-left cursor-pointer hover:bg-bg transition-colors duration-150 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-orange focus-visible:ring-offset-2"
                    :aria-expanded="open === {{ $i }}"
                    aria-controls="faq-{{ $i }}">
                    <span class="font-heading font-semibold text-navy text-base leading-snug">{{ $faq['question'] }}</span>
                    <span class="flex-shrink-0 w-6 h-6 text-steel transition-transform duration-200" :class="open === {{ $i }} ? 'rotate-180' : ''">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </span>
                </button>
                <div
                    id="faq-{{ $i }}"
                    x-show="open === {{ $i }}"
                    x-cloak
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-1"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="px-6 pb-5 border-t border-border">
                    <p class="font-body text-gray-600 leading-relaxed pt-4 text-base">{{ $faq['answer'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-10 text-center">
            <p class="font-body text-gray-500 text-sm mb-4">Have a different question? We're happy to help.</p>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 bg-navy hover:bg-navy-dark text-white font-body font-semibold px-6 py-3 rounded-lg transition-colors duration-200 cursor-pointer text-sm">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/>
                </svg>
                Ask a Question
            </a>
        </div>
    </div>
</section>
