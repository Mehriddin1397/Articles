<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;


//Route::get('/',[PageController::class,'index'])->name('index');
Route::get('/contact',[PageController::class,'contact'])->name('contact');


Route::get('/', [\App\Http\Controllers\Web\ScientistWebController::class, 'index'])->name('web.scientists.index');
Route::get('/scientists/{id}', [\App\Http\Controllers\Web\ScientistWebController::class, 'show'])->name('web.scientists.show');
Route::get('/article/{id}', [\App\Http\Controllers\Web\ArticleWebController::class, 'show'])->name('web.articles.show');



