<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExpertProfile extends Model
{
    use HasFactory;

    // SESUAIKAN: Pastikan ini 'expert_profiles' sesuai file migrasi kamu
    protected $table = 'expert_profiles'; 

    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Categories::class, 'category_id');
    }
}