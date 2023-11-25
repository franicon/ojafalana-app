<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    $posts = Post::latest();
    return view('portfolio', [
        'posts' => $posts->get()
    ]);
});

Route::get('/impacts', function () {
    return view('impacts');
});

Route::get('/initiatives', function () {
    $posts = Post::latest();
    return view('initiative', [
        'posts' => $posts->get()
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/press-releases', [PostController::class, 'index']);
Route::get('/press-releases/{post:slug}', [PostController::class, 'show']);

// Admin

Route::get('/main/dashboard', function () {
    return view('admin/index');
});

Route::get('/main/blog/create', [PostController::class, 'create']);
Route::post('admin/posts', [PostController::class, 'store']);
