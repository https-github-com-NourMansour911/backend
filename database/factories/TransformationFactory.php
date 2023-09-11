<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transformation>
 */
class TransformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'coach_id' => fake()->numberBetween(1, 5),
            'img' => fake()->imageUrl(),
            'client_age' => fake()->numberBetween(10, 100),
            'client_name' => fake()->name(),
        ];
    }
}
