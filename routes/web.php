<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Movie\MovieController;
//Route::get('/', function () {
   // return view('welcome');
//});

//Route::get('/articles/detail', function () {
 //return 'Article Detail';
//});

//Route::get('/articles/details', function () {
 //return 'Article Details';
//})->name('article.details');

//Route::get('/articles/more', function() {
 //return redirect()->route('article.details');
//});

Route::get('/movies',[MovieController::class,'index']);

Route::get('/articles',[ArticleController::class,'index']);

Route::get('/articles/detail',[ArticleController::class,'detail']);