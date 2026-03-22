@extends('admin.layouts.app')

@section('title', 'Equipment')
@section('page-title', 'Equipment')

@section('page-actions')
<a href="{{ route('admin.equipment.create') }}" class="btn btn-warning btn-sm fw-semibold">
    <i class="bi bi-plus-lg me-1"></i> Add Equipment
</a>
@endsection

@section('content')

@if ($equipment->isEmpty())
<div class="card">
    <div class="card-body text-center py-5">
        <i class="bi bi-box-seam fs-1 text-muted mb-3 d-block"></i>
        <h5 class="text-muted">No equipment yet</h5>
        <p class="text-muted small mb-3">Add your first product to get started.</p>
        <a href="{{ route('admin.equipment.create') }}" class="btn btn-warning">
            <i class="bi bi-plus-lg me-1"></i> Add Equipment
        </a>
    </div>
</div>
@else
<div class="card shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th style="width:60px">Order</th>
                        <th style="width:60px">Image</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Capacity</th>
                        <th>Status</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($equipment as $item)
                    <tr>
                        <td class="text-muted small align-middle">{{ $item->sort_order }}</td>
                        <td class="align-middle">
                            @if ($item->image_path)
                            <img src="{{ asset('storage/' . $item->image_path) }}"
                                 alt="{{ $item->name }}"
                                 class="rounded" style="width:48px;height:36px;object-fit:cover;">
                            @else
                            <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                 style="width:48px;height:36px;">
                                <i class="bi bi-image text-muted small"></i>
                            </div>
                            @endif
                        </td>
                        <td class="align-middle">
                            <div class="fw-semibold">{{ $item->name }}</div>
                            <div class="text-muted small font-monospace">{{ $item->slug }}</div>
                        </td>
                        <td class="align-middle">
                            <span class="badge bg-secondary">{{ $item->category }}</span>
                        </td>
                        <td class="align-middle small text-muted">{{ $item->capacity ?? '—' }}</td>
                        <td class="align-middle">
                            <form method="POST" action="{{ route('admin.equipment.toggle', $item) }}" class="d-inline">
                                @csrf
                                @method('PATCH')
                                <button type="submit"
                                        class="badge border-0 {{ $item->is_active ? 'bg-success' : 'bg-secondary' }}"
                                        title="Click to toggle">
                                    {{ $item->is_active ? 'Active' : 'Inactive' }}
                                </button>
                            </form>
                        </td>
                        <td class="align-middle text-end">
                            <a href="{{ route('admin.equipment.edit', $item) }}"
                               class="btn btn-sm btn-outline-primary me-1">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form method="POST" action="{{ route('admin.equipment.destroy', $item) }}"
                                  class="d-inline"
                                  onsubmit="return confirm('Delete {{ addslashes($item->name) }}? This cannot be undone.')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endif

@endsection
