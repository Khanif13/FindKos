<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('kode_booking')->unique();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('kos_id')->constrained('kos');
            $table->date('tanggal_masuk');
            $table->string('durasi_sewa');
            $table->decimal('total_harga', 10, 2);
            $table->enum('status', ['menunggu_konfirmasi', 'lunas', 'dibatalkan'])->default('menunggu_konfirmasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
