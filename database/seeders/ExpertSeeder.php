<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;
// use App\Models\Categories;
use App\Models\Expert;

class ExpertSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat Kategori dulu (Pondasi)
        $it = Categories::create(['name' => 'IT & Coding']);
        $hukum = Categories::create(['name' => 'Hukum & Legal']);

        // 2. Buat Data Ahli (Barangnya)
        Expert::create([
            'category_id' => $it->id,
            'name' => 'Siska Amelia, S.Kom',
            'hourly_rate' => 150000,
            'rating_avg' => 4.8,
            'image_url' => 'https://ui-avatars.com/api/?name=Siska+Amelia'
        ]);

        Expert::create([
            'category_id' => $hukum->id,
            'name' => 'Dr. Andi Hermawan',
            'hourly_rate' => 250000,
            'rating_avg' => 4.9,
            'image_url' => 'https://ui-avatars.com/api/?name=Andi+Hermawan'
        ]);
    }
}