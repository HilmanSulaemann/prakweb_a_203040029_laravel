<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use PhpParser\Node\Stmt\Return_;

use Illuminate\Support\Facades\Route;
use function PHPUnit\Framework\returnValue;


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
        "name" => "Hilman Sulaeman",
        "email" => "hilmansulaeman0504@gmail.com",
        "image" => "foto.jpg"
    ]);
});



Route::get('/blog', [PostController::class, 'index']);

//halaman single post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});
