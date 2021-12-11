<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'slug' => $this->faker->unique()->slug(),
            'description' => $this->faker->sentences(3),
            'photo' => $this->faker->imageUrl('100','100'),
            'status' => $this->faker->randomElement(['active','inactive']),
            'condition' => $this->faker->randomElement(['banner','promo']),
        ];
    }
}
