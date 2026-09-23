{{-- Cookie consent banner — drives Google Consent Mode v2 (analytics_storage). --}}
@if(config('services.google_analytics.measurement_id'))
<div id="cookie-consent"
     class="hidden fixed bottom-0 inset-x-0 z-[60] bg-navy text-white shadow-2xl"
     role="dialog" aria-live="polite" aria-label="Cookie consent">
    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-20 py-5 flex flex-col lg:flex-row lg:items-center gap-4 lg:gap-8">
        <p class="font-body text-sm leading-relaxed text-white/85 flex-1">
            We use cookies to measure how the site is used and improve it. You can accept analytics
            cookies or decline. See our <a href="{{ route('privacy') }}" class="underline hover:text-[#148af4]">Cookie Policy</a>.
        </p>
        <div class="flex gap-3 flex-shrink-0">
            <button type="button" data-consent="decline"
                    class="inline-flex items-center justify-center border border-white/50 hover:border-white text-white font-heading font-bold text-sm px-6 py-3 rounded-lg hover:bg-white/10 transition-colors">
                Decline
            </button>
            <button type="button" data-consent="accept"
                    class="inline-flex items-center justify-center bg-[#148af4] hover:bg-blue-600 text-white font-heading font-bold text-sm px-6 py-3 rounded-lg transition-colors">
                Accept
            </button>
        </div>
    </div>
</div>
<script>
    (function () {
        var el = document.getElementById('cookie-consent');
        if (!el) return;
        var stored = null;
        try { stored = localStorage.getItem('cookie_consent'); } catch (e) {}
        if (!stored) { el.classList.remove('hidden'); }

        function decide(value) {
            try { localStorage.setItem('cookie_consent', value); } catch (e) {}
            if (value === 'granted' && typeof gtag === 'function') {
                gtag('consent', 'update', {
                    ad_storage: 'granted',
                    ad_user_data: 'granted',
                    ad_personalization: 'granted',
                    analytics_storage: 'granted'
                });
            }
            el.classList.add('hidden');
        }

        el.querySelector('[data-consent="accept"]').addEventListener('click', function () { decide('granted'); });
        el.querySelector('[data-consent="decline"]').addEventListener('click', function () { decide('denied'); });
    })();
</script>
@endif
