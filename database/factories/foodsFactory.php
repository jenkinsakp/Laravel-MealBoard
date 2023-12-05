<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class foodsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => fake()->randomElement([1, 2]),
            //            'user_id' => fake()->randomElement($user),
            'name' => fake()->name(),
            'body' => fake()->sentence(),
            'status' => fake()->randomElement([0, 1, 0, 1, 0]),

        ];
    }
}
