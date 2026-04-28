<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Availbilities extends Model
{
    protected $fillable = ['expert_profile_id', 'day_of_week', 'start_time', 'end_time', 'is_active'];

    public function expertProfile() {
        return $this->belongsTo(ExpertProfile::class);
    }
}