<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts', [PostsController::class, 'index']);

Route::get('/test1', [PostsController::class, 'test1']);

Route::get('/testEvent', [PostsController::class, 'testEvent']);

Route::get('/test2', [PostsController::class, 'test2']);



