<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index ()
    {   
        return view('posts', [
            "title" => "Blog",
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString(),
            "total" => Post::latest()->filter(request(['search', 'category', 'author']))->count(),
            "categories" => Category::all()
        ]);
    }

    public function show (Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post->load(['category', 'author']),
        ]);
    }
}
