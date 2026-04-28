<?php

namespace Database\Factories;

use App\Models\ExpertProfile;
use App\Models\User;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ExpertProfile>
 */
class ExpertProfileFactory extends Factory
{
    protected $model = ExpertProfile::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titles = [
            'Senior Laravel Developer',
            'Full Stack Developer',
            'Frontend Developer',
            'Backend Developer',
            'DevOps Engineer',
            'Mobile Developer',
            'Data Scientist',
            'UI/UX Designer',
            'Business Consultant',
            'Financial Advisor'
        ];

        return [
            'user_id' => User::factory(),
            'category_id' => Categories::factory(),
            'title' => fake()->randomElement($titles),
            'bio' => fake()->sentence(15),
            'hourly_rate' => fake()->numberBetween(100000, 500000),
            'location' => fake()->city(),
            'experience_years' => fake()->numberBetween(1, 15),
        ];
    }
}
