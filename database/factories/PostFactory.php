<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(10);
        return [
            'title' => $title,
            'slug' => str::slug($title),
            'content' => $this->faker->text(),
            'user_created_id' => rand(1,3),
            'category_id' => rand(1,3),
            'user_updated_id' => rand(1,3),
            'status' => rand(0,1),
            'user_updated_id' => rand(1,5),
            'view_count' => rand(50,100),

        ];
    }
}
