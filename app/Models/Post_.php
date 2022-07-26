<?php

namespace App\Models;

Class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rian Mupti Jauhari",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil earum debitis blanditiis qui veritatis numquam corrupti minima ipsam aperiam. Nobis quis impedit quibusdam? Placeat est eum totam, laboriosam iste fugit ratione et deserunt quod? Excepturi commodi fuga nesciunt dolorum dolorem, similique quis culpa qui deserunt velit quisquam. Beatae dolorem porro excepturi veniam amet ducimus aliquid, expedita doloremque iste repellendus nam saepe deserunt non rem vel, eaque nesciunt cum quos veritatis labore. Ullam nostrum doloribus impedit animi amet. Velit minima similique fuga omnis. Quo quam enim maiores eum aspernatur, incidunt doloribus!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Yusup Maulana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil earum debitis blanditiis qui veritatis numquam corrupti minima ipsam aperiam. Nobis quis impedit quibusdam? Placeat est eum totam, laboriosam iste fugit ratione et deserunt quod? Excepturi commodi fuga nesciunt dolorum dolorem, similique quis culpa qui deserunt velit quisquam. Beatae dolorem porro excepturi veniam amet ducimus aliquid, expedita doloremque iste repellendus nam saepe deserunt non rem vel, eaque nesciunt cum quos veritatis labore. Ullam nostrum doloribus impedit animi amet. Velit minima similique fuga omnis. Quo quam enim maiores eum aspernatur, incidunt doloribus!"
        ]
        ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $new_post = [];
        // foreach($posts as $post) {
        //     if($post["slug"] === $slug) {
        //         $new_post = $post;
        //     }
        // }

        // return $posts->first();
        return $posts->firstWhere('slug',$slug);
    }
}
