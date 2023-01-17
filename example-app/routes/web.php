<?php

use App\Http\Controllers\CategoriesController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// menggunakan closure
Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Tengku Muhammad Rafi Rahardiansyah",
        "email" => "t.mrr39@gmail.com"
    ]); 
});

// menggunakan controller
Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', [CategoriesController::class, 'index']);

Route::get('/categories/{category:slug}', [CategoriesController::class, 'show']);

Route::get('/authors/{author:username}', function (User $author) {
    return view ('posts', [
        "title" => "Post By Author : $author->name",
        "posts" => $author->posts->load(['category', 'author']) // load() digunakan untuk menghindari N+1 problem
    ]);
});
