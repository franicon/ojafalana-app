<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('portfolio');
});

//Route::get('/about', function () {
//});

Route::get('/impacts', function () {
    return view('impacts');
});

Route::get('/initiatives', function () {
    return view('initiative');
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

