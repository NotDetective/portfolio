<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'message' => $this->faker->text(),
            'read' => rand(0, 1) ? $this->faker->dateTimeBetween('-10 days', '-1 days') : null,
            'replied' => rand(0, 1) ? $this->faker->dateTimeBetween('-10 days', '-1 days') : null
        ];
    }
}