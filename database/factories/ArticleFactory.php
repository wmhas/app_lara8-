<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $name = ucwords($this->faker->word);
        $slug = Str::slug($name);



        return [
            //

            'name' => $name,
            'slug' =>  $slug

        ];
    }
}
