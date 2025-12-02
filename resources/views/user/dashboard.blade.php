@extends('layouts.admin')

@section('title', 'Dashboard')

@section('container')
    <nav class="navbar navbar-light bg-white shadow-sm rounded px-3 mb-4">
        <span class="navbar-brand mb-0 h5">Dashboard</span>
        <span class="text-secondary">Welcome, Admin!</span>
    </nav>

    <div class="row g-3">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6 class="card-title">Total Users</h6>
                    <h3>120</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6 class="card-title">Total Tour Packages</h6>
                    <h3>35</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6 class="card-title">Pending Booking</h6>
                    <h3>10</h3>
                </div>
            </div>
        </div>
    </div>
@endsection
