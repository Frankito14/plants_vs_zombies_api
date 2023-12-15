<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Planta>
 */
class PlantaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->lastName(),
            'cost' => $this->faker->randomElement([25, 50, 100, 125, 150]),
            'damage' => $this->faker->randomNumber(3, true),
            'description' => $this->faker->sentence(),
            'image' => $this->faker->sentence()
        ];
    }
}
