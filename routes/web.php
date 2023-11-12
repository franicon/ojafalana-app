<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('portfolio');
});

//Route::get('/about', function () {
//});

Route::get('/impacts', function () {
    return view('social-event');
});

Route::get('/initiatives', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});


// Admin

Route::get('/dashboard', function () {
    return view('admin/index');
});

