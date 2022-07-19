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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Rian Mupti Jauhari",
        "email" => "rianmupti@gmail.com",
        "image" => "coba.jpg",
        "title" => "About"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
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
    
    return view('posts', [
        "title" => "posts",
        "posts" => $blog_posts
    ]);
});

// Halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
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

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});