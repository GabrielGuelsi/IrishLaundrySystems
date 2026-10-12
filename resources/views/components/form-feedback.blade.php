{{-- Result of a contact form send (same box as the main CTA form). $target = id of the form wrapper to scroll back to. --}}
@if (session('success'))
<div data-form-feedback role="status" class="mb-6 rounded-lg border border-green-200 bg-green-50 p-4 flex gap-3">
    <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
    <p class="font-body text-sm text-green-800 leading-relaxed">{{ session('success') }}</p>
</div>
@elseif ($errors->any())
<div data-form-feedback role="alert" class="mb-6 rounded-lg border border-red-200 bg-red-50 p-4">
    <p class="font-body font-bold text-sm text-red-800 mb-1">Please check the form:</p>
    <ul class="font-body text-sm text-red-700 list-disc pl-5 space-y-0.5">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if (session('success') || $errors->any())
<script>
    // After the redirect back, bring the visitor to the form so they see the result.
    window.addEventListener('load', function () {
        var box = document.getElementById(@json($target));
        if (!box) return;
        var jump = function () { box.scrollIntoView({ block: 'start', behavior: 'instant' }); };
        jump();
        setTimeout(jump, 400);
    });
</script>
@endif
