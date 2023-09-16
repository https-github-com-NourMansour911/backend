<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CoachPlan>
 */
class CoachPlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'plan_name' => fake()->name(),
            'price' => fake()->numberBetween(10, 100),
            'duration' => fake()->numberBetween(1, 12),
            'coach_id' => fake()->numberBetween(1, 10),
        ];
    }
}
