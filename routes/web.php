<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/posts', function () {
    return view('posts');
});

Route::post('/posts/addPost', function () {
    return view('addPost');
});
