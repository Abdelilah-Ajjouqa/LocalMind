<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/posts', function () {
//     return view('posts');
// });

// Route::post('/posts/addPost', function () {
//     return view('addPost');
// });


Route::get('/', [PostController::class, 'index']);
