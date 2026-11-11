{{-- Product thumbnail: whole machine visible (contain), never cropped. --}}
@if ($src)
<img src="{{ $src }}" alt="{{ $alt }}" loading="lazy"
     class="rounded border bg-white" style="width:56px;height:56px;object-fit:contain;padding:2px;">
@else
<div class="bg-light rounded border d-flex align-items-center justify-content-center" style="width:56px;height:56px;">
    <i class="bi bi-image text-muted small"></i>
</div>
@endif
