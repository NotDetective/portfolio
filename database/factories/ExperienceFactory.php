<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startDate = fake()->dateTimeBetween('-4 years', '-1 year');
        $endDate = (clone $startDate)->modify('+' . rand(6, 8) . ' days');
        return [
            'title' => fake()->sentence(6),
            'location' => fake()->city(),
            'description' => fake()->text(),

            'start_date' => $startDate,
            'end_date' => $endDate
        ];
    }
}
