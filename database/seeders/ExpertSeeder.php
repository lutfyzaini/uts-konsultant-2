<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\ExpertProfile;
use App\Models\Categories;

class ExpertSeeder extends Seeder
{
    public function run(): void
    {
        // Create 6 categories
        Categories::factory()
            ->count(6)
            ->create();

        // Create 10 users with 'expert' role
        $users = User::factory()
            ->count(10)
            ->state(['roles' => 'expert'])
            ->create();

        // Create 10 experts with relationships to users and categories
        $categories = Categories::all();
        
        foreach ($users as $user) {
            ExpertProfile::create([
                'user_id' => $user->id,
                'category_id' => $categories->random()->id,
                'title' => fake()->randomElement([
                    'Senior Developer',
                    'Full Stack Engineer',
                    'Frontend Specialist',
                    'Backend Expert',
                    'DevOps Consultant',
                    'Mobile Developer',
                    'Data Scientist',
                    'UI/UX Designer',
                    'Business Analyst',
                    'Financial Advisor'
                ]),
                'bio' => fake()->paragraph(),
                'hourly_rate' => fake()->numberBetween(100000, 500000),
                'location' => fake()->city(),
                'experience_years' => fake()->numberBetween(1, 15),
            ]);
        }
    }
}