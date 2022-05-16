<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\ContextFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { 

        
       //Category::factory(1)->create();
        //Post::factory(1)->create();
        //Article::factory(1)->create();
        //Comment::factory(1)->create();

        Category::factory(5)->create()->each(function ($cat) {

            $cat->posts()->saveMany(
                Post::factory(10)->create(['category_id'=> $cat->id])
            );

        });


        Article::factory(5)->create()->each(function ($article) {

            $article->comments()->saveMany(
                Comment::factory(10)->create(['article_id'=> $article->id])
            );

        });
            

        
    }
    
}
