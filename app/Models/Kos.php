<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kos extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Setiap Kos dimiliki oleh satu Owner (User)
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Satu Kos bisa punya banyak Booking
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
