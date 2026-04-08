@props([
    'label' => '',
    'color' => '#148af4',
])

<div class="inline-flex items-center mb-5">
    <span class="px-3 py-1.5 text-xs font-body font-bold uppercase tracking-widest text-white rounded-lg"
          style="background-color: {{ $color }};">{{ $label }}</span>
</div>
