<header id="header" class="header d-flex align-items-center fixed-top">
    <div
        class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="/home" class="logo d-flex align-items-center me-auto me-xl-0">
            <h1 class="sitename">FindKos</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="/home" class="{{ Request::is('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Cari Apa?</a></li>
                <li><a href="#">Blog</a></li>

                {{-- Contoh Dropdown (Bisa disesuaikan nanti) --}}
                <li class="dropdown"><a href="#"><span>More Pages</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Destination Details</a></li>
                        <li><a href="#">Tour Details</a></li>
                    </ul>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        {{-- LOGIKA TOMBOL AUTH --}}
        @auth
            {{-- Jika User SUDAH Login --}}
            <div class="d-flex gap-2">
                {{-- Tombol ke Dashboard sesuai Role --}}
                <a class="btn-getstarted" href="{{ url('/dashboard-' . Auth::user()->role) }}">
                    <i class="bi bi-speedometer2 me-1"></i> Dashboard
                </a>

                {{-- (Opsional) Tombol Logout kecil disampingnya jika mau --}}
                {{-- 
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger" style="border-radius: 50px; padding: 8px 20px;">
                        Logout
                    </button>
                </form> 
                --}}
            </div>
        @else
            {{-- Jika User BELUM Login (Tamu) --}}
            <a class="btn-getstarted" href="{{ route('role.select') }}">Get Started</a>
        @endauth

    </div>
</header>
