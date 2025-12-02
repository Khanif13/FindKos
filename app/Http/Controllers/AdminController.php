<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Kos;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // 1. Halaman Dashboard Utama
    public function index()
    {
        // Menghitung data untuk Stats Card
        $totalPencari = User::where('role', 'user')->count();
        $totalOwner = User::where('role', 'owner')->count();
        $totalKos = Kos::count();
        $kosPending = Kos::where('status', 'pending')->count();

        // Mengambil 5 Kos terbaru untuk tabel
        $latestKos = Kos::with('owner')->latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalPencari',
            'totalOwner',
            'totalKos',
            'kosPending',
            'latestKos'
        ));
    }

    // 2. Halaman User Management
    public function userManagement()
    {
        // Ambil semua user urut dari yang paling baru daftar
        $users = User::latest()->get();

        return view('admin.userManagement', compact('users'));
    }

    // 3. Halaman Validasi Kos
    public function validasiKos()
    {
        // Hanya ambil kos yang statusnya 'pending'
        $pendingKos = Kos::with('owner')->where('status', 'pending')->get();

        return view('admin.validasiKos', compact('pendingKos'));
    }

    // 4. Halaman Data Semua Kos
    public function dataKos()
    {
        // Ambil kos yang sudah aktif saja
        $kos = Kos::with('owner')->where('status', 'aktif')->latest()->get();

        return view('admin.dataKos', compact('kos'));
    }

    // 5. Halaman Data Pesanan
    public function dataPesanan()
    {
        // Ambil booking beserta data penyewa (user) dan kos-nya
        $bookings = Booking::with(['user', 'kos'])->latest()->get();

        return view('admin.dataPesanan', compact('bookings'));
    }

    // ... (method index, userManagement, dll biarkan saja)

    // --- FITUR BARU ---

    // 1. Setujui Kos (Ubah status jadi aktif)
    public function approveKos($id)
    {
        $kos = Kos::findOrFail($id);
        $kos->update(['status' => 'aktif']);

        return back()->with('success', 'Kos berhasil disetujui dan sekarang Aktif.');
    }

    // 2. Tolak Kos (Ubah status jadi ditolak)
    public function rejectKos($id)
    {
        $kos = Kos::findOrFail($id);
        $kos->update(['status' => 'ditolak']);

        return back()->with('success', 'Kos telah ditolak.');
    }

    // 3. Hapus User
    public function destroyUser($id)
    {
        $user = User::findOrFail($id);

        // Opsional: Cegah admin menghapus dirinya sendiri
        // GANTI: auth()->id() MENJADI Auth::id()
        if ($user->id == Auth::id()) {
            return back()->with('error', 'Anda tidak bisa menghapus akun sendiri!');
        }

        $user->delete();

        return back()->with('success', 'Pengguna berhasil dihapus.');
    }
}
