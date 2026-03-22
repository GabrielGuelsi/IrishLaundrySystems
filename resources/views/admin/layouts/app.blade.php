<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin') — ILS</title>
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- AdminLTE 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0-rc2/dist/css/adminlte.min.css">
    <style>
        .sidebar-brand { font-weight: 700; font-size: 1rem; }
        .nav-sidebar .nav-link.active { background-color: rgba(255,255,255,.1); }
    </style>
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">

    {{-- Top Navbar --}}
    <nav class="app-header navbar navbar-expand bg-body">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                        <i class="bi bi-list fs-5"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}" target="_blank">
                        <i class="bi bi-box-arrow-up-right me-1"></i> Public Site
                    </a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('admin.logout') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="nav-link btn btn-link text-danger px-3">
                            <i class="bi bi-box-arrow-right me-1"></i> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    {{-- Sidebar --}}
    <aside class="app-sidebar bg-dark sidebar-dark-primary shadow" data-bs-theme="dark">
        <div class="sidebar-brand">
            <a href="{{ route('admin.equipment.index') }}" class="brand-link text-white text-decoration-none d-flex align-items-center gap-2 px-3 py-3">
                <i class="bi bi-gear-wide-connected text-warning fs-5"></i>
                <span class="fw-bold">ILS Admin</span>
            </a>
        </div>

        <div class="sidebar-wrapper">
            <nav class="mt-2">
                <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu">

                    <li class="nav-item">
                        <a href="{{ route('admin.equipment.index') }}"
                           class="nav-link {{ request()->routeIs('admin.equipment.*') ? 'active' : '' }}">
                            <i class="nav-icon bi bi-box-seam"></i>
                            <p>Equipment</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.submissions.index') }}"
                           class="nav-link {{ request()->routeIs('admin.submissions.*') ? 'active' : '' }}">
                            <i class="nav-icon bi bi-envelope"></i>
                            <p>Contact Submissions</p>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
    </aside>

    {{-- Main Content --}}
    <main class="app-main">
        <div class="app-content-header py-3 px-4 border-bottom bg-body">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <h1 class="h4 mb-0 fw-semibold">@yield('page-title', 'Dashboard')</h1>
                @yield('page-actions')
            </div>
        </div>

        <div class="app-content py-4">
            <div class="container-fluid">

                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-triangle me-2"></i>{{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                @endif

                @yield('content')

            </div>
        </div>
    </main>

    <footer class="app-footer">
        <div class="float-end d-none d-sm-inline">Irish Laundry Systems</div>
        <strong>ILS Admin Panel</strong>
    </footer>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0-rc2/dist/js/adminlte.min.js"></script>
@stack('scripts')
</body>
</html>
