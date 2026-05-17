<?php

namespace Database\Factories;

use App\Models\JobLists;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<JobLists>
 */
class JobListsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'salary' => $this->faker->randomNumber(6),
            'job_description' => $this->faker->paragraph,
        ];
    }
}
