<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;

Route::get('/', [PageController::Class, 'view'])->name('welcome');
Route::get('/articles', [ArticleController::Class, 'view'])->name('articles');
Route::get('/article/id={id}',[ArticleController::class,'show'])->name('article');
Route::get('/contact',[ContactController::class,'view'])->name('contact');
Route::get('/thankYou',[ContactController::class,'thankYou'])->name('thankYou');
Route::post('/save-contact',[ContactController::class,'save'])->name('save-contact');

