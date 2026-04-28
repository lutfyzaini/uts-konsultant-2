<?php

namespace Database\Factories;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categories>
 */
class CategoriesFactory extends Factory
{
    protected $model = Categories::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $categories = [
            'IT & Coding',
            'Hukum & Legal',
            'Desain Interior',
            'Keuangan',
            'Marketing',
            'Manajemen Bisnis'
        ];

        static $used = [];

        // Get next unused category
        $available = array_diff($categories, $used);
        if (empty($available)) {
            $available = $categories;
            $used = [];
        }

        $name = array_values($available)[0];
        $used[] = $name;

        return [
            'name' => $name,
        ];
    }
}
