<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { 

        
        Category::factory(10)->create();
        Post::factory(100)->create();
        Article::factory(10)->create();
            

        
    }
    
}
