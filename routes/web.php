<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/',[PageController::class,'index'])->name('index');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::get('/articles',[PageController::class,'articles'])->name('articles');
Route::get('/articles_show',[PageController::class,'articles_show'])->name('articles_show');

