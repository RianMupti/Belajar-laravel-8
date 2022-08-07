<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // dd(request('search'));

        // $posts = Post::latest();

        // if(request('search')) {
        //     $posts->where('title', 'like', '%' . request('search') . '%')
        //           ->orWhere('body', 'like', '%' . request('search') . '%');
        // }

        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        };

        if(request('authors')) {
            $author = User::firstWhere('username', request('authors'));
            $title = ' by ' . $author->name;
        };

        // ambil data get dari "request"
        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => "posts",
            // "posts" => Post::all()
            // "posts" => Post::latest()->Saring(request(['search', 'category', 'authors']))->get()
            
            // pagination
            "posts" => Post::latest()->Saring(request(['search', 'category', 'authors']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
