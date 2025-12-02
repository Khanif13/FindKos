<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Booking milik satu User (Penyewa)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Booking terkait dengan satu Kos
    public function kos()
    {
        return $this->belongsTo(Kos::class);
    }
}
