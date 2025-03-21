<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brick>
 */
class BrickFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => "Ladrillo " . fake()->word(),
            'description' => fake()->sentence(8),
            'length_mm' => fake()->numberBetween(220, 260),
            'height_mm' => fake()->numberBetween(130, 160),
            'width_mm' => fake()->numberBetween(80, 110),
            "is_produced" => fake()->boolean(70),
        ];
    }
}
