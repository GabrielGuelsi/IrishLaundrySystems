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
<p class="text-muted small mb-3">
    Grouped like the public category pages: one bold row per card on the site, with the sizes shown inside that card listed under it.
    Range and tags are read-only (set in the site code).
</p>

@foreach ($groups as $group)
<div class="card shadow-sm mb-4">
    <div class="card-header fw-semibold d-flex justify-content-between">
        <span>{{ $group['label'] }}</span>
        @if ($group['cards'])
        <span class="text-muted small fw-normal">{{ count($group['cards']) }} {{ Str::plural('card', count($group['cards'])) }} in the page's product list</span>
        @endif
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th style="width:60px">Order</th>
                        <th style="width:60px">Image</th>
                        <th>Name</th>
                        <th>Range <span class="fw-normal text-muted small">(on site)</span></th>
                        <th>Tags <span class="fw-normal text-muted small">(on site)</span></th>
                        <th>Capacity</th>
                        <th>Status</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($group['cards'] as $row)
                        @if ($row['item'])
                            @include('admin.equipment._row', ['item' => $row['item'], 'kind' => 'card', 'card' => $row['card']])
                        @else
                            {{-- A card on the site with no product of its own in this category --}}
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="align-middle">
                                    <span class="fw-bold">{{ $row['card']['card'] }}</span>
                                    <div class="text-muted small">
                                        @if ($row['sameAs'])
                                            Opens the same product as {{ $row['sameAs'] }}
                                        @elseif ($row['card']['href'])
                                            Links to {{ parse_url($row['card']['href'], PHP_URL_PATH) }}
                                        @else
                                            No product of its own in the admin
                                        @endif
                                    </div>
                                </td>
                                <td class="align-middle small">{{ $row['card']['range'] }}</td>
                                <td class="align-middle" style="max-width:260px">
                                    @foreach ($row['card']['tags'] as $tag)
                                    <span class="badge rounded-pill text-bg-light border fw-normal">{{ $tag }}</span>
                                    @endforeach
                                </td>
                                <td colspan="3"></td>
                            </tr>
                        @endif
                        @foreach ($row['sizes'] as $item)
                            @include('admin.equipment._row', ['item' => $item, 'kind' => 'size', 'card' => $row['card']])
                        @endforeach
                    @endforeach

                    @if ($group['noCard'])
                        <tr class="table-warning">
                            <td colspan="8" class="small">
                                <span class="fw-semibold">Not in the category page's product list</span>
                                <span class="text-muted">— no card of their own (some still have a product page or appear elsewhere on the page)</span>
                            </td>
                        </tr>
                        @foreach ($group['noCard'] as $item)
                            @include('admin.equipment._row', ['item' => $item, 'kind' => 'none', 'card' => null])
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endforeach
@endif

@endsection
