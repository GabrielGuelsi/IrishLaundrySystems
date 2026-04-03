{{--
    Consistent icon wrapper — enforces Heroicons v2 outline standard across the site.
    All icons: viewBox="0 0 24 24", fill="none", stroke-width="1.5", stroke="currentColor"

    Usage:
        <x-icon class="w-5 h-5 text-steel">
            <path stroke-linecap="round" stroke-linejoin="round" d="..." />
        </x-icon>

    For multi-path icons, just include multiple <path> elements in the slot.
--}}
@props(['class' => 'w-5 h-5'])

<svg xmlns="http://www.w3.org/2000/svg"
     fill="none"
     viewBox="0 0 24 24"
     stroke-width="1.5"
     stroke="currentColor"
     class="{{ $class }}"
     aria-hidden="true">
    {{ $slot }}
</svg>
