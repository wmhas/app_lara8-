<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Article::class;

    public function definition()
    {
        $name = $this->faker->sentence;
        $slug = $this->faker->slug;



        return [
            //

            'name' => $name,
            'slug' =>  $slug

        ];
    }
}
