<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected  $model = Comment::class;

    public function definition()
    {
        return [
            //

            'comments' => $this->faker->sentence,
            //'article_id' =>  Article::factory()->create(),

        ];
    }
}
