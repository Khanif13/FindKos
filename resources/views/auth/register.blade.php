@extends('layouts.auth')
@section('title', 'Register')

@section('container')
    <div class="container section-padding">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card border-0 shadow p-4 rounded-4">
                    <h3 class="text-center mb-4">Welcome {{ ucfirst($role) }}</h3>

                    {{-- Success Message --}}
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    {{-- Error Message --}}
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <form action="{{ route('register.post', ['role' => $role]) }}" method="POST">
                        @csrf

                        {{-- Role --}}
                        <input type="hidden" name="role" value="{{ $role }}">

                        {{-- Name --}}
                        <div class="mb-3">
                            <label>Nama Lengkap</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white">
                                    <i class="bi bi-person"></i>
                                </span>
                                <input type="text" name="name" class="form-control form-control-lg"
                                    placeholder="Masukkan nama lengkap" required>
                            </div>
                        </div>

                        {{-- Username --}}
                        <div class="mb-3">
                            <label>Username</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white">
                                    <i class="bi bi-at"></i>
                                </span>
                                <input type="text" name="username" class="form-control form-control-lg"
                                    placeholder="Masukkan username" required>
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="mb-3">
                            <label>Email</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white">
                                    <i class="bi bi-envelope"></i>
                                </span>
                                <input type="email" name="email" class="form-control form-control-lg"
                                    placeholder="Masukkan email" required>
                            </div>
                        </div>

                        {{-- Password --}}
                        <div class="mb-3">
                            <label>Password</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white">
                                    <i class="bi bi-key"></i>
                                </span>

                                <input id="password" type="password" name="password" class="form-control form-control-lg"
                                    placeholder="Masukkan password" required>

                                <span class="input-group-text bg-white" onclick="togglePassword()" style="cursor: pointer;">
                                    <i id="toggleIcon" class="bi bi-eye"></i>
                                </span>
                            </div>
                        </div>

                        {{-- Submit --}}
                        <button class="btn btn-primary w-100 py-2 mt-2">Register</button>

                        <div class="text-center mt-3">
                            Sudah punya akun?
                            {{-- FIXED: Menggunakan route parameter, bukan query string --}}
                            <a href="{{ route('login', ['role' => $role]) }}" class="text-decoration-none">
                                Login
                            </a>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

    {{-- Toggle Password --}}
    <script>
        function togglePassword() {
            const input = document.getElementById("password");
            const icon = document.getElementById("toggleIcon");

            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove("bi-eye");
                icon.classList.add("bi-eye-slash");
            } else {
                input.type = "password";
                icon.classList.remove("bi-eye-slash");
                icon.classList.add("bi-eye");
            }
        }
    </script>
@endsection
