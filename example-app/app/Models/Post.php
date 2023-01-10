<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        $current_post = [];
        foreach ($posts as $post) {
            if ($post["slug"] === $slug) {
                $current_post = $post;
            }
        }

        return $current_post;
    }
}
