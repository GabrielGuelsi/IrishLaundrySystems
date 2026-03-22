@extends('admin.layouts.app')

@section('title', 'Contact Submissions')
@section('page-title', 'Contact Submissions')

@section('content')

@if ($submissions->isEmpty())
<div class="card">
    <div class="card-body text-center py-5">
        <i class="bi bi-envelope fs-1 text-muted mb-3 d-block"></i>
        <h5 class="text-muted">No submissions yet</h5>
        <p class="text-muted small mb-0">Contact form leads will appear here.</p>
    </div>
</div>
@else
<div class="card shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Company</th>
                        <th>Request Type</th>
                        <th>Urgency</th>
                        <th>Sector</th>
                        <th class="text-end">View</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($submissions as $sub)
                    <tr>
                        <td class="align-middle small text-muted">
                            {{ $sub->created_at->format('d M Y') }}<br>
                            <span class="text-muted" style="font-size:0.75rem;">{{ $sub->created_at->format('H:i') }}</span>
                        </td>
                        <td class="align-middle">
                            <div class="fw-semibold small">{{ $sub->name }}</div>
                            <div class="text-muted" style="font-size:0.75rem;">{{ $sub->email }}</div>
                        </td>
                        <td class="align-middle small">{{ $sub->company }}</td>
                        <td class="align-middle">
                            @php
                            $typeLabels = [
                                'contract'        => ['label' => 'Contract',       'color' => 'primary'],
                                'rental'          => ['label' => 'Rental',         'color' => 'info'],
                                'breakdown'       => ['label' => 'Breakdown',      'color' => 'danger'],
                                'parts'           => ['label' => 'Parts',          'color' => 'secondary'],
                                'equipment_quote' => ['label' => 'Equipment Quote','color' => 'warning'],
                            ];
                            $type = $typeLabels[$sub->request_type] ?? ['label' => $sub->request_type, 'color' => 'secondary'];
                            @endphp
                            <span class="badge bg-{{ $type['color'] }}">{{ $type['label'] }}</span>
                        </td>
                        <td class="align-middle">
                            @php
                            $urgencyLabels = [
                                'today'     => ['label' => 'Today',      'color' => 'danger'],
                                '24_48h'    => ['label' => '24–48h',     'color' => 'warning'],
                                'this_week' => ['label' => 'This week',  'color' => 'info'],
                                'planning'  => ['label' => 'Planning',   'color' => 'secondary'],
                            ];
                            $urg = $urgencyLabels[$sub->urgency] ?? ['label' => $sub->urgency, 'color' => 'secondary'];
                            @endphp
                            <span class="badge bg-{{ $urg['color'] }}">{{ $urg['label'] }}</span>
                        </td>
                        <td class="align-middle small text-muted">{{ ucfirst($sub->sector) }}</td>
                        <td class="align-middle text-end">
                            <a href="{{ route('admin.submissions.show', $sub) }}"
                               class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-eye me-1"></i> View
                            </a>
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
