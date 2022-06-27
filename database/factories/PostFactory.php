<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(20),
            'slug' => $this->faker->slug,
            'excerpt' => $this->faker->text(50),
            'body' => $this->faker->text(150),
            'category_id' => Category::factory()->create()->id,
        ];
    }
}
