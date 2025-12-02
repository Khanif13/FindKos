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
        Schema::create('kos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('nama_kos');
            $table->string('slug')->unique();
            $table->string('lokasi');
            $table->text('alamat_lengkap');
            $table->text('deskripsi');
            $table->string('fasilitas');
            $table->decimal('harga', 10, 2);
            $table->string('tipe_kos');
            $table->integer('sisa_kamar');
            $table->string('foto_utama')->nullable();
            $table->enum('status', ['pending', 'aktif', 'ditolak'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kos');
    }
};
