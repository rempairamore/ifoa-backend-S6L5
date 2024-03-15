<?php

namespace Database\Factories;

use App\Models\Activity;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->unique()->text(20),
            'pages' => fake()->numberBetween(100, 300),
            'year' => fake()->numberBetween(2010, 2023),
            'activities_id' => Activity::get()->random()->id,
            'users_id' => User::get()->random()->id,
            'created_at' => fake()->datetime()
        ];
    }
}
