<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PageController::Class, 'view'])->name('welcome');
Route::get('/articles', [ArticleController::Class, 'view'])->name('articles');
Route::get('/article/id={id}',[ArticleController::class,'show'])->name('article');

