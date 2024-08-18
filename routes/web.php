<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('about', [PageController::class, 'about'])
  ->name('about.index');
Route::get('articles', [ArticleController::class, 'index'])
  ->name('articles.index');
Route::get('articles/{id}', [ArticleController::class, 'show'])
  ->name('articles.show');