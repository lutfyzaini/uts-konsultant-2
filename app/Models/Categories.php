<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Relasi: Satu kategori bisa punya banyak ahli
    public function expertProfiles()
    {
        return $this->hasMany(ExpertProfile::class);
    }
}