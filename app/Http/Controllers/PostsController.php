<?php

namespace App\Http\Controllers;

use App\Event\UserCreatedEvent;
use App\Models\Category;
use App\Models\Post;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Debugbar::addMessage('test debug', 'info');

        //$posts = Post::all();

        $posts = Post::with('category')->get();

        $cats = Category::withCount('posts')->get();

        $posts_selective = Post::with('category')->get(['id', 'title']);

        $posts_condition = Post::where('created_at', '<=', now())->get();


        return view('posts_index', compact('posts', 'cats', 'posts_condition', 'posts_selective'));

    }

    public function testEvent() {

        //dispatch event

        event (new UserCreatedEvent("abc@gmail.com"));
    }

    public function test1()
    {



        $time_start = microtime(true);

        $post = Post::with('category')->get();

        $time_end = microtime(true);
        $time = $time_end - $time_start;

        return "Did nothing in $time seconds\n";


    }
}


