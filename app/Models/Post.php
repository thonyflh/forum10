<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static  $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "anthony",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium modi enim nostrum ipsum perferendis dolores esse porro reiciendis similique non autem distinctio, alias necessitatibus ut voluptas. Maxime cum repudiandae impedit."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "kevin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium modi enim nostrum ipsum perferendis dolores esse porro reiciendis similique non autem distinctio, alias necessitatibus ut voluptas. Maxime cum repudiandae impedit."
        ]

    ];

    public static function all()
    {
        return self::$blog_posts;
    }

    public static function find($slug)
    {
        $posts = self::$blog_posts;
        $post = [];
        foreach($posts as $p){
            if($p["slug"] === $slug){
                $post = $p;
            }
        }
        return $post;
    }
}
