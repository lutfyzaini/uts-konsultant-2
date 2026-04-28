<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $fillable = ['booking_id', 'type', 'meeting_link', 'summary', 'status'];

    public function booking() {
        return $this->belongsTo(Bookings::class);
    }
}