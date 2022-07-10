<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'storyline' => $this->faker->paragraph,
            'language' => $this->faker->languageCode,
            'release_date' => $this->faker->numberBetween(2015,2025),
            'box_office' => $this->faker->randomNumber(6),
            'rating' => $this->faker->randomFloat(1, 0, 10),
            'runtime' => $this->faker->randomNumber(2),
        ];
    }
}
