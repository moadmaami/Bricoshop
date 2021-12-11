<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'title' => $this->faker->word(),
            'slug' => $this->faker->unique()->slug(),
            'description' => $this->faker->sentences(3),
            'photo' => $this->faker->imageUrl('100','100'),
            'parent_id' => $this->faker->randomElement(Category::pluck('id')->toArray()),
            'is_parent' => $this->faker->randomElement([true,false]),
            'status' => $this->faker->randomElement(['active','inactive'])
        ];
    }
}
