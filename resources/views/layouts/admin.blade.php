<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'FindKos Admin')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
</head>

<body>

    <div class="sidebar">
        {{-- LOGO: Tetap arahkan ke Dashboard agar Admin tidak bingung --}}
        <a href="{{ url('/dashboard-admin') }}" class="d-block text-center text-white fw-bold mb-4"
            style="text-decoration: none; font-size: 18px; letter-spacing: 1px;">
            FINDKOS <span style="color: var(--accent-color);">ADMIN</span>
        </a>

        {{-- Menu Items --}}
        <div class="px-2">

            {{-- [BARU] Tombol ke Halaman Home --}}
            <a href="{{ url('/home') }}" class="mb-3 text-warning">
                <i class="bi bi-arrow-left-circle me-2"></i> Lihat Website
            </a>

            <a href="/dashboard-admin" class="{{ Request::is('dashboard-admin') ? 'active' : '' }}">
                <i class="bi bi-grid-fill me-2"></i> Dashboard
            </a>

            <a href="/userManagement" class="{{ Request::is('userManagement*') ? 'active' : '' }}">
                <i class="bi bi-people-fill me-2"></i> User Management
            </a>

            <a href="/dataKos" class="{{ Request::is('dataKos*') ? 'active' : '' }}">
                <i class="bi bi-houses-fill me-2"></i> Data Kos
            </a>

            <a href="/validasiKos" class="{{ Request::is('validasiKos*') ? 'active' : '' }}">
                <i class="bi bi-check-circle-fill me-2"></i> Validasi Kos
            </a>

            <a href="/dataPesanan" class="{{ Request::is('dataPesanan*') ? 'active' : '' }}">
                <i class="bi bi-receipt me-2"></i> Data Pesanan
            </a>

            <hr class="text-white opacity-25 my-3 mx-3">

            {{-- Logout --}}
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="text-danger">
                <i class="bi bi-box-arrow-left me-2"></i> Logout
            </a>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>

    <div class="content">
        @yield('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
