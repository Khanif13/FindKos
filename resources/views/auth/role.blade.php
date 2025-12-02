@extends('layouts.app')

@section('container')
    <style>
        .role-container {
            min-height: 100vh;
            background: url("{{ asset('assets/img/bg-login.jpg') }}") center/cover no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .role-container::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .role-box {
            z-index: 2;
            background: rgba(255, 255, 255, 0.12);
            border-radius: 16px;
            padding: 40px 30px;
            width: 90%;
            max-width: 420px;
            backdrop-filter: blur(12px);
            text-align: center;
            color: white;
        }

        .role-btn {
            width: 100%;
            padding: 14px;
            border-radius: 10px;
            margin-top: 15px;
            font-size: 16px;
            transition: 0.3s;
            text-decoration: none;
            display: block;
            font-weight: 600;
        }

        .btn-pencari {
            background: #0077ff;
            color: white;
        }

        .btn-pencari:hover {
            background: #005fcc;
        }

        .btn-owner {
            background: #d4a26b;
            color: white;
        }

        .btn-owner:hover {
            background: #bd8f5e;
        }

        .role-title {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 20px;
        }
    </style>

    <div class="role-container">
        <div class="role-box" data-aos="zoom-in">
            <div class="role-title">Masuk Sebagai</div>

            <a href="{{ url('/register/user') }}" class="role-btn btn-pencari">
                🧑‍💼 Pencari Kos
            </a>

            <a href="{{ url('/register/owner') }}" class="role-btn btn-owner">
                🏠 Pemilik Kos
            </a>

        </div>
    </div>
@endsection
