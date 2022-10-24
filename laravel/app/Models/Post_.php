<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul Post Pertama",
            "author" => "Hilman Sulaeman",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Reiciendis ullam quaerat iure harum officia mollitia porro itaque illum esse ut laboriosam ipsa in suscipit, 
            voluptate inventore officiis blanditiis vero laborum obcaecati sed doloribus. Consectetur impedit facere, 
            nobis quos molestiae sint. Ab nesciunt atque dolor, alias aut laboriosam earum ipsum libero, veniam eligendi 
            sint illo sapiente nobis voluptatibus praesentium cupiditate autem mollitia in quae dolores exercitationem. "
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $Posts = static::all();
        return $Posts->firstWhere('slug', $slug);
    }
}
