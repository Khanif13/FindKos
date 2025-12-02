<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Kos;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DummyDataSeeder extends Seeder
{
    public function run(): void
    {
        $owner1 = User::create([
            'name' => 'Budi Santoso',
            'username' => 'juraganbudi',
            'email' => 'owner1@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'owner',
        ]);

        $owner2 = User::create([
            'name' => 'Siti Aminah',
            'username' => 'ibusiti',
            'email' => 'owner2@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'owner',
        ]);

        User::create([
            'name' => 'Rahmat Hidayat',
            'username' => 'pakrahmat',
            'email' => 'owner3@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'owner',
        ]);

        $user1 = User::create([
            'name' => 'Dimas Anggara',
            'username' => 'dimas_mhs',
            'email' => 'user1@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'Fitriani',
            'username' => 'fitripipit',
            'email' => 'user2@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);

        // Kos 1: Status AKTIF (Sudah divalidasi admin)
        $kos1 = Kos::create([
            'user_id' => $owner1->id,
            'nama_kos' => 'Kos Melati Indah',
            'slug' => 'kos-melati-indah',
            'lokasi' => 'Jakarta Selatan',
            'alamat_lengkap' => 'Jl. Mawar No. 10, Jaksel',
            'deskripsi' => 'Kos nyaman dekat kampus, fasilitas lengkap.',
            'fasilitas' => 'AC, WiFi, K.Mandi Dalam',
            'harga' => 1500000,
            'tipe_kos' => 'Campur',
            'sisa_kamar' => 5,
            'status' => 'aktif', // <--- Sudah Aktif
        ]);

        // Kos 2: Status AKTIF
        $kos2 = Kos::create([
            'user_id' => $owner2->id,
            'nama_kos' => 'Wisma Mawar',
            'slug' => 'wisma-mawar',
            'lokasi' => 'Bandung',
            'alamat_lengkap' => 'Jl. Dago Atas No. 22',
            'deskripsi' => 'Udara sejuk, parkir luas.',
            'fasilitas' => 'WiFi, Parkir Motor',
            'harga' => 800000,
            'tipe_kos' => 'Putri',
            'sisa_kamar' => 2,
            'status' => 'aktif',
        ]);

        // Kos 3: Status PENDING (Masuk antrian validasi admin)
        Kos::create([
            'user_id' => $owner1->id,
            'nama_kos' => 'Kos Grand Wisata',
            'slug' => 'kos-grand-wisata',
            'lokasi' => 'Jakarta Barat',
            'alamat_lengkap' => 'Jl. Panjang No. 88',
            'deskripsi' => 'Bangunan baru jadi.',
            'fasilitas' => 'AC, TV, Water Heater',
            'harga' => 2500000,
            'tipe_kos' => 'Putra',
            'sisa_kamar' => 10,
            'status' => 'pending', // <--- Perlu Validasi
        ]);

        // Kos 4: Status PENDING
        Kos::create([
            'user_id' => $owner2->id,
            'nama_kos' => 'Pondok Damai',
            'slug' => 'pondok-damai',
            'lokasi' => 'Yogyakarta',
            'alamat_lengkap' => 'Jl. Kaliurang Km 5',
            'deskripsi' => 'Murah meriah untuk mahasiswa.',
            'fasilitas' => 'Kasur, Lemari',
            'harga' => 500000,
            'tipe_kos' => 'Putra',
            'sisa_kamar' => 4,
            'status' => 'pending',
        ]);

        // 4. Buat Data BOOKING (Transaksi)

        // Booking 1: Lunas
        Booking::create([
            'kode_booking' => 'BK-'.rand(1000, 9999),
            'user_id' => $user1->id, // Dimas menyewa
            'kos_id' => $kos1->id,   // Kos Melati
            'tanggal_masuk' => now()->addDays(3),
            'durasi_sewa' => '3 Bulan',
            'total_harga' => 4500000,
            'status' => 'lunas',
        ]);

        // Booking 2: Menunggu Konfirmasi
        Booking::create([
            'kode_booking' => 'BK-'.rand(1000, 9999),
            'user_id' => $user1->id,
            'kos_id' => $kos2->id,   // Wisma Mawar
            'tanggal_masuk' => now()->addDays(7),
            'durasi_sewa' => '1 Bulan',
            'total_harga' => 800000,
            'status' => 'menunggu_konfirmasi',
        ]);
    }
}
