<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    return view('home');
});

// PILIH ROLE
Route::get('/pilih-role', [AuthController::class, 'roleView'])->name('role.select');

// REGISTER
Route::get('/register/{role}', [AuthController::class, 'registerView'])->name('register');
Route::post('/register/{role}', [AuthController::class, 'register'])->name('register.post');

// LOGIN
Route::get('/login/{role}', [AuthController::class, 'loginView'])->name('login');
Route::post('/login/{role}', [AuthController::class, 'login'])->name('login.post');

// BLOCK direct /login => redirect ke pilih-role
Route::get('/login', function () {
    return redirect()->route('role.select');
});

// PROTECTED ROUTE
Route::middleware('auth')->group(function () {

    // --- Dashboard USER ---
    Route::middleware('role:user')->group(function () {
        Route::get('/dashboard-user', function () {
            return view('user.dashboard');
        });
    });

    // --- Dashboard OWNER ---
    Route::middleware('role:owner')->group(function () {
        Route::get('/dashboard-owner', function () {
            return view('owner.dashboard');
        });
    });

    // Dashboard ADMIN
    Route::middleware('role:admin')->group(function () {

        // Halaman (View)
        Route::get('/dashboard-admin', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/userManagement', [AdminController::class, 'userManagement'])->name('admin.users');
        Route::get('/validasiKos', [AdminController::class, 'validasiKos'])->name('admin.validasi');
        Route::get('/dataKos', [AdminController::class, 'dataKos'])->name('admin.datakos');
        Route::get('/dataPesanan', [AdminController::class, 'dataPesanan'])->name('admin.pesanan');

        // --- AKSI (Action) ---

        // Validasi Kos (Approve/Reject)
        Route::patch('/kos/{id}/approve', [AdminController::class, 'approveKos'])->name('admin.kos.approve');
        Route::patch('/kos/{id}/reject', [AdminController::class, 'rejectKos'])->name('admin.kos.reject');

        // Hapus User
        Route::delete('/users/{id}', [AdminController::class, 'destroyUser'])->name('admin.users.delete');
    });

});

// LOGOUT
Route::post('/logout', function () {
    Auth::logout();

    return redirect('/pilih-role');
})->name('logout');
