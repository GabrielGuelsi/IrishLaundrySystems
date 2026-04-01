@props([
    'label'  => '',
    'color'  => '#148af4',
])

<div class="inline-flex items-center gap-0 mb-5">
    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="28" viewBox="0 0 12 28" fill="none" aria-hidden="true">
        <path d="M10.8938 0C7.98518 0 5.00052 2.31783 4.33706 5.19756L0.202258 22.8024C-0.461211 25.6822 0.483614 28 3.39223 28C7 28 9.90184 28 12 28V0H10.8938Z" fill="{{ $color }}"/>
    </svg>
    <span class="px-3 py-1 text-xs font-body font-bold uppercase tracking-widest text-white" style="background-color: {{ $color }};">{{ $label }}</span>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 16 28" fill="none" aria-hidden="true">
        <path d="M0.000512362 0C-0.000247399 9.33333 0.000258656 18.6667 0 28C5 28 0.808931 28 1.49954 28H3.33152C6.24013 28 9.2514 25.6822 9.91487 22.8024L15.196 2.42889e-06L0.000512362 0Z" fill="{{ $color }}"/>
    </svg>
</div>
