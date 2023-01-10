<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Tengku Muhammad Rafi Rahardiansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique labore esse accusamus suscipit eum aperiam repellat maiores, aut earum a fugiat mollitia voluptas eos beatae officia veritatis iusto nihil ipsum. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos soluta sint id ut ipsum eveniet maiores nam nemo esse! Iure!." 
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Yogi Puji Sastomo",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique labore esse accusamus suscipit eum aperiam repellat maiores, aut earum a fugiat mollitia voluptas eos beatae officia veritatis iusto nihil ipsum. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos soluta sint id ut ipsum eveniet maiores nam nemo esse! Iure!." 
        ]
    ];

    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Tengku Muhammad Rafi Rahardiansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique labore esse accusamus suscipit eum aperiam repellat maiores, aut earum a fugiat mollitia voluptas eos beatae officia veritatis iusto nihil ipsum. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos soluta sint id ut ipsum eveniet maiores nam nemo esse! Iure!." 
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Yogi Puji Sastomo",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique labore esse accusamus suscipit eum aperiam repellat maiores, aut earum a fugiat mollitia voluptas eos beatae officia veritatis iusto nihil ipsum. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos soluta sint id ut ipsum eveniet maiores nam nemo esse! Iure!." 
        ]
    ];

    $current_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $current_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $current_post
    ]);
});
