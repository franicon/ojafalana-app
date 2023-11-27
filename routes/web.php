<?php

use App\Http\Controllers\SessionController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminPostController;


Route::get('/', function () {
    $posts = Post::latest();
    return view('portfolio', [
        'posts' => $posts->get()
    ]);
});

Route::get('/impact', function () {
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

Route::get('main/posts', [AdminPostController::class, 'index'])->middleware('admin');
Route::get('main/posts/{post:id}/edit', [AdminPostController::class, 'edit'])->middleware('admin');
Route::get('main/post/create', [AdminPostController::class, 'create'])->middleware('admin');
Route::post('admin/posts', [AdminPostController::class, 'store'])->middleware('admin');
Route::patch('admin/posts/{post:id}/edit', [AdminPostController::class, 'update'])->middleware('admin');
Route::delete('admin/posts/{post:id}', [AdminPostController::class, 'destroy'])->middleware('admin');


Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionController::class, 'create']);
Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');
Route::post('auth', [SessionController::class, 'store']);
