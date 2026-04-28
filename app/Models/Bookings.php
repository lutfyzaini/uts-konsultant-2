<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    protected $fillable = [
        'client_id', 'expert_profile_id', 'booking_date', 
        'start_time', 'end_time', 'status', 'total_price'
    ];

    // Relasi ke User (Klien yang memesan)
    public function client() {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function expertProfile() {
        return $this->belongsTo(ExpertProfile::class);
    }

    public function payment() {
        return $this->hasOne(Payments::class);
    }

    public function consultation() {
        return $this->hasOne(Consultation::class);
    }
}