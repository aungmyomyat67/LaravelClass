<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', function () {
 return 'Article List';
});
Route::get('/articles/detail', function () {
 return 'Article Detail';
});

Route::get('/articles/detail/{id}', function ( $id ) {
 return "Article Detail - $id";
});

Route::get('/articles/detail', function () {
 return 'Article Detail';
})->name('article.detail');


Route::get('/articles/more', function() {
 return redirect()->route('article.detail');
});