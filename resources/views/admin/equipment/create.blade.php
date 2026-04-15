@extends('admin.layouts.app')

@section('title', 'Add Equipment')
@section('page-title', 'Add Equipment')

@section('page-actions')
<a href="{{ route('admin.equipment.index') }}" class="btn btn-outline-secondary btn-sm">
    <i class="bi bi-arrow-left me-1"></i> Back to list
</a>
@endsection

@section('content')

<form method="POST" action="{{ route('admin.equipment.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="row g-4">

        {{-- Left column --}}
        <div class="col-lg-8">

            <div class="card shadow-sm mb-4">
                <div class="card-header fw-semibold">Basic Details</div>
                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label fw-semibold small">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" value="{{ old('name') }}" required
                               class="form-control @error('name') is-invalid @enderror"
                               placeholder="e.g. WH6-18 18kg Washer">
                        @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        <div class="form-text text-muted small">Slug is auto-generated from the name and cannot be changed later.</div>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold small">Category <span class="text-danger">*</span></label>
                            <select name="category" required
                                    class="form-select @error('category') is-invalid @enderror">
                                <option value="">Select category</option>
                                @foreach (['washers' => 'Washers', 'tumble-dryers' => 'Tumble Dryers', 'barrier-washers' => 'Barrier Washers', 'ironers' => 'Ironers'] as $val => $label)
                                <option value="{{ $val }}" {{ old('category') === $val ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @error('category')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold small">Capacity</label>
                            <input type="text" name="capacity" value="{{ old('capacity') }}"
                                   class="form-control"
                                   placeholder="e.g. 18kg">
                        </div>
                    </div>

                    <div class="mt-3">
                        <label class="form-label fw-semibold small">Summary</label>
                        <textarea name="summary" rows="4"
                                  class="form-control @error('summary') is-invalid @enderror"
                                  placeholder="Brief description shown on the product page...">{{ old('summary') }}</textarea>
                        @error('summary')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                </div>
            </div>

            {{-- Specs --}}
            <div class="card shadow-sm mb-4">
                <div class="card-header fw-semibold d-flex justify-content-between align-items-center">
                    Specifications
                    <button type="button" class="btn btn-sm btn-outline-secondary" id="add-spec-row">
                        <i class="bi bi-plus-lg me-1"></i> Add Row
                    </button>
                </div>
                <div class="card-body">
                    <input type="hidden" name="specs" id="specs-json" value="{{ old('specs', '[]') }}">
                    <div id="specs-rows" class="mb-2">
                        {{-- JS will render rows here --}}
                    </div>
                    <p class="text-muted small mb-0" id="specs-empty-hint">No specs added yet. Click "Add Row" to add key–value pairs.</p>
                </div>
            </div>

        </div>

        {{-- Right column --}}
        <div class="col-lg-4">

            <div class="card shadow-sm mb-4">
                <div class="card-header fw-semibold">Publish</div>
                <div class="card-body">
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" name="is_active" value="1" id="is_active"
                               {{ old('is_active', '1') === '1' ? 'checked' : '' }}>
                        <label class="form-check-label fw-semibold small" for="is_active">Active (visible on site)</label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold small">Sort Order</label>
                        <input type="number" name="sort_order" value="{{ old('sort_order', 0) }}"
                               class="form-control" min="0">
                        <div class="form-text text-muted small">Lower = appears first. Default: 0.</div>
                    </div>
                    <button type="submit" class="btn btn-warning w-100 fw-bold">
                        <i class="bi bi-save me-1"></i> Save Equipment
                    </button>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-header fw-semibold">Product Image</div>
                <div class="card-body">
                    <input type="file" name="image" id="image-input" accept="image/jpg,image/jpeg,image/png,image/webp"
                           class="form-control @error('image') is-invalid @enderror">
                    @error('image')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    <div class="form-text text-muted small">JPG, PNG or WebP. Max 2MB.</div>
                    <div id="image-preview" class="mt-2 d-none">
                        <img id="image-preview-img" src="" alt="Preview" class="img-fluid rounded" style="max-height:150px;">
                    </div>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-header fw-semibold">Sectors</div>
                <div class="card-body">
                    @foreach (['Healthcare', 'Hospitality', 'Care Facilities', 'Commercial'] as $sector)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="sectors[]"
                               value="{{ $sector }}" id="sector_{{ Str::slug($sector) }}"
                               {{ in_array($sector, old('sectors', [])) ? 'checked' : '' }}>
                        <label class="form-check-label small" for="sector_{{ Str::slug($sector) }}">{{ $sector }}</label>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

</form>

@endsection

@push('scripts')
<script>
(function () {
    const rowsContainer = document.getElementById('specs-rows');
    const specsInput    = document.getElementById('specs-json');
    const emptyHint     = document.getElementById('specs-empty-hint');
    let specs = [];

    try { specs = JSON.parse(specsInput.value) || []; } catch (e) { specs = []; }
    if (!Array.isArray(specs)) {
        specs = Object.entries(specs).map(([k, v]) => ({k, v}));
    }

    function render() {
        rowsContainer.innerHTML = '';
        emptyHint.classList.toggle('d-none', specs.length > 0);
        specs.forEach((row, i) => {
            const div = document.createElement('div');
            div.className = 'input-group mb-2';
            div.innerHTML = `
                <input type="text" class="form-control form-control-sm spec-key" placeholder="Key (e.g. Capacity)" value="${escHtml(row.k || '')}">
                <input type="text" class="form-control form-control-sm spec-val" placeholder="Value (e.g. 18kg)" value="${escHtml(row.v || '')}">
                <button type="button" class="btn btn-sm btn-outline-danger remove-spec" data-index="${i}">
                    <i class="bi bi-x"></i>
                </button>`;
            rowsContainer.appendChild(div);
        });
        sync();
    }

    function sync() {
        const keys = rowsContainer.querySelectorAll('.spec-key');
        const vals = rowsContainer.querySelectorAll('.spec-val');
        const obj  = {};
        keys.forEach((k, i) => { if (k.value.trim()) obj[k.value.trim()] = vals[i].value.trim(); });
        specsInput.value = JSON.stringify(obj);
    }

    function escHtml(s) { return s.replace(/&/g,'&amp;').replace(/"/g,'&quot;').replace(/</g,'&lt;').replace(/>/g,'&gt;'); }

    rowsContainer.addEventListener('input', sync);
    rowsContainer.addEventListener('click', function (e) {
        const btn = e.target.closest('.remove-spec');
        if (btn) {
            specs.splice(Number(btn.dataset.index), 1);
            render();
        }
    });

    document.getElementById('add-spec-row').addEventListener('click', function () {
        specs.push({k: '', v: ''});
        render();
    });

    // Image preview
    document.getElementById('image-input').addEventListener('change', function () {
        const preview = document.getElementById('image-preview');
        const img     = document.getElementById('image-preview-img');
        if (this.files && this.files[0]) {
            img.src = URL.createObjectURL(this.files[0]);
            preview.classList.remove('d-none');
        }
    });

    render();
})();
</script>
@endpush
