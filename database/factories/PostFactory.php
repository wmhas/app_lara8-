<?php

namespace Database\Factories;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Post::class;

    public function definition()
    {
        return [
         
            'title' => $this->faker->sentence,
           // 'category_id' =>  Category::factory()->create(),

            'category_id' => $this->faker->numberBetween(1,10),


        ];
    }
}
