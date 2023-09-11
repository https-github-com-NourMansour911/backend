<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookedSession>
 */
class BookedSessionFactory extends Factory
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
            'client_id' => fake()->numberBetween(1, 5),
            'plan_id' => fake()->numberBetween(1, 5),
            'start_date' => fake()->date(),
            'start_time' => fake()->time(),
        ];
    }
}
