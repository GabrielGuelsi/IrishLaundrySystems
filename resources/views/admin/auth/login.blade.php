<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login — ILS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0-rc2/dist/css/adminlte.min.css">
</head>
<body class="bg-body-secondary d-flex align-items-center justify-content-center min-vh-100">

<div class="card shadow" style="width: 100%; max-width: 400px;">
    <div class="card-body p-4">

        <div class="text-center mb-4">
            <i class="bi bi-gear-wide-connected fs-1 text-warning"></i>
            <h1 class="h4 fw-bold mt-2 mb-0">ILS Admin</h1>
            <p class="text-muted small">Irish Laundry Systems</p>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger py-2 px-3 small">
            <i class="bi bi-exclamation-triangle me-1"></i>
            {{ $errors->first() }}
        </div>
        @endif

        <form method="POST" action="{{ route('admin.login.post') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label fw-semibold small">Email address</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus
                           class="form-control @error('email') is-invalid @enderror"
                           placeholder="admin@example.com">
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold small">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                    <input type="password" name="password" required
                           class="form-control"
                           placeholder="Password">
                </div>
            </div>

            <button type="submit" class="btn btn-warning w-100 fw-bold">
                <i class="bi bi-box-arrow-in-right me-1"></i> Sign In
            </button>
        </form>

        <div class="text-center mt-3">
            <a href="{{ url('/') }}" class="text-muted small text-decoration-none">
                <i class="bi bi-arrow-left me-1"></i> Back to public site
            </a>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
