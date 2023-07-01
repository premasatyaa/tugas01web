<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Blog 1",
            "slug" => "judul-post-pertama",
            "author" => "Ngurah Gede",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum porro, iste perferendis repudiandae modi mollitia aperiam magnam dicta voluptate voluptatibus."
        ],
        [
            "title" => "Judul Blog Prema",
            "slug" => "judul-post-kedua",
            "author" => "Prema Satya",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, veniam!"
        ],
    ]; 

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
