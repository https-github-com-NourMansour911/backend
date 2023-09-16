<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coach>
 */
class CoachFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
            'username' => fake()->unique()->userName(),
            'bio' => fake()->paragraph(),
            'img' => 'https://techtitans.puiux.org/Images/Coaches/default.png',
            'category' => fake()->randomElement(['fitness', 'nutrition', 'yoga', 'meditation', 'therapy']),
            'gender'=>fake()->randomElement(['male','female']),
        ];
    }
}
