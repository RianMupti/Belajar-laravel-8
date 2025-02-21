<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;


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
        'title' => 'Home',
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "active" => "about",
        "name" => "Rian Mupti Jauhari",
        "email" => "rianmupti@gmail.com",
        "image" => "coba.jpg",
        "title" => "About"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

// Halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);


Route::get('/categories', function(Category $category) {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all(),
    ]);
});


Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::get('/register', [RegisterController::class, 'index']);
});

Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::post('/register', [RegisterController::class, 'store']);


Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function() {
        return view('dashboard.index');
    });
    
    Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);
    Route::resource('/dashboard/posts', DashboardPostController::class);
    
});

    
// Route::get('categories/{category:slug}', function(Category $category) {
//     return view('posts', [
//         'title' => "Post By Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load(['category', 'author'])
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author) {
//     return view('posts', [
//         'title' => "Post By Author : $author->name",
//         'posts' => $author->posts->load(['author', 'category'])
//     ]);
// });