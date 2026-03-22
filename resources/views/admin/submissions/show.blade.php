@extends('admin.layouts.app')

@section('title', 'Submission: ' . $sub->name)
@section('page-title', 'Submission: ' . $sub->name)

@section('page-actions')
<a href="{{ route('admin.submissions.index') }}" class="btn btn-outline-secondary btn-sm">
    <i class="bi bi-arrow-left me-1"></i> Back to list
</a>
@endsection

@section('content')

<div class="row g-4">

    <div class="col-lg-8">
        <div class="card shadow-sm mb-4">
            <div class="card-header fw-semibold">Contact Details</div>
            <div class="card-body">
                <dl class="row mb-0">
                    <dt class="col-sm-4 small text-muted">Name</dt>
                    <dd class="col-sm-8 fw-semibold">{{ $sub->name }}</dd>

                    <dt class="col-sm-4 small text-muted">Company</dt>
                    <dd class="col-sm-8">{{ $sub->company }}</dd>

                    <dt class="col-sm-4 small text-muted">Email</dt>
                    <dd class="col-sm-8"><a href="mailto:{{ $sub->email }}">{{ $sub->email }}</a></dd>

                    <dt class="col-sm-4 small text-muted">Phone</dt>
                    <dd class="col-sm-8"><a href="tel:{{ $sub->phone }}">{{ $sub->phone }}</a></dd>

                    <dt class="col-sm-4 small text-muted">Location</dt>
                    <dd class="col-sm-8">{{ $sub->location }}</dd>

                    <dt class="col-sm-4 small text-muted">Sector</dt>
                    <dd class="col-sm-8">{{ ucfirst($sub->sector) }}</dd>
                </dl>
            </div>
        </div>

        <div class="card shadow-sm mb-4">
            <div class="card-header fw-semibold">Request Details</div>
            <div class="card-body">
                <dl class="row mb-0">
                    <dt class="col-sm-4 small text-muted">Request Type</dt>
                    <dd class="col-sm-8">{{ str_replace('_', ' ', ucfirst($sub->request_type)) }}</dd>

                    <dt class="col-sm-4 small text-muted">Urgency</dt>
                    <dd class="col-sm-8">{{ $sub->urgency }}</dd>

                    @if ($sub->equipment)
                    <dt class="col-sm-4 small text-muted">Equipment</dt>
                    <dd class="col-sm-8">{{ $sub->equipment }}</dd>
                    @endif

                    @if ($sub->message)
                    <dt class="col-sm-4 small text-muted">Message</dt>
                    <dd class="col-sm-8" style="white-space: pre-wrap;">{{ $sub->message }}</dd>
                    @endif
                </dl>
            </div>
        </div>

    </div>

    <div class="col-lg-4">
        <div class="card shadow-sm mb-4">
            <div class="card-header fw-semibold">Submission Meta</div>
            <div class="card-body">
                <dl class="row mb-0 small">
                    <dt class="col-sm-5 text-muted">Received</dt>
                    <dd class="col-sm-7">{{ $sub->created_at->format('d M Y H:i') }}</dd>

                    @if ($sub->page_source)
                    <dt class="col-sm-5 text-muted">Page Source</dt>
                    <dd class="col-sm-7 text-break">{{ $sub->page_source }}</dd>
                    @endif
                </dl>
            </div>
        </div>

        @if ($sub->utm_source || $sub->utm_medium || $sub->utm_campaign)
        <div class="card shadow-sm">
            <div class="card-header fw-semibold">UTM Tracking</div>
            <div class="card-body">
                <dl class="row mb-0 small">
                    @foreach (['utm_source' => 'Source', 'utm_medium' => 'Medium', 'utm_campaign' => 'Campaign', 'utm_content' => 'Content', 'utm_term' => 'Term'] as $field => $label)
                    @if ($sub->$field)
                    <dt class="col-sm-5 text-muted">{{ $label }}</dt>
                    <dd class="col-sm-7">{{ $sub->$field }}</dd>
                    @endif
                    @endforeach
                </dl>
            </div>
        </div>
        @endif
    </div>

</div>

@endsection
