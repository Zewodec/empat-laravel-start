<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', [BlogController::class, 'blogPage']);

Route::get('/blog/{id}', [BlogController::class, 'blogItemInfo']);

Route::get('/add-blog', function () {
    return view('add-blog');
});

Route::post('/add-blog', [BlogController::class, 'createBlog']);

