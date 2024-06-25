<?php

use App\Models\user;
use App\Models\Category;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\AuthorController;


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
    return view('welcome', [
        'title' => 'Donation | we care',
    ]);
});

Route::get('/welcome', function () {
    return view('welcome', [
        'title' => 'Donation | we care',
    ]);
});


Route::get('/about', function () {
    return view('about', [
        'title' => '404 Page :(',
    ]);
});

Route::get('/gallery', function () {
    return view('gallery', [
        'title' => '404 Page :(',
    ]);
});

Route::get('/event', function () {
    return view('event', [
        'title' => '404 Page :(',
    ]);
});

Route::get('/donation', function () {
    return view('donation', [
        'title' => '404 Page :(',
    ]);
});

Route::get('/shop', function () {
    return view('shop', [
        'title' => '404 Page :(',
    ]);
});


Route::get('/article', [PostController::class, 'store']);

Route::get('/articles', [PostController::class, 'index'])->name('articles.index');
Route::post('/articles', [PostController::class, 'index'])->name('articles.search');

// routes/web.php
Route::get('/blog/{post}', 'App\Http\Controllers\PostController@show')->name('blog.show');
Route::get('/blog/{username}', 'PostController@showByUsername')->name('posts.showByUsername');







Route::get('/posts/{post}', 'PostController@show')->name('posts.show');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');


Route::get('/authors/{author:username}', [AuthorController::class, 'show']);

Route::get('/Category', function() {
    return view('Category', [
        'title' => 'Post Categories',
        'categories' => Category::all(),
    ]);
});

Route::get('/Categories/{category:slug}', function(Category $category) {
    return view('Categories', [
        'title' => $category->name,
        'posts' => $category->posts()->with('category', 'author')->paginate(10),
    ]);
});

Route::get('/Photos/{photos}', 'App\Http\Controllers\PhotoController@show')->name('photoUrl');


// Menampilkan halaman author berdasarkan username
