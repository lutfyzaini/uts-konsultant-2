<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $fillable = ['booking_id', 'invoice_no', 'amount', 'method', 'status', 'paid_at'];

    public function booking() {
        return $this->belongsTo(Bookings::class);
    }
}