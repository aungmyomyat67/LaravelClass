<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ArticleController;

use App\Http\Controllers\Movie\MovieController;

Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');
Route::post('/movies', [Movieontroller::class, 'store'])->name('movies.store');
Route::get('/movies/{id}/edit', [MovieController::class, 'edit'])->name('movies.edit');
Route::put('/movies/{id}', [MovieController::class, 'update'])->name('movies.update');
Route::delete('/movies/{id}', [MovieController::class, 'destroy'])->name('movies.destroy');


// Route::get('/movies', [MovieController::class, 'index']);


// Route::get('/articles', [ArticleController::class, 'index']);
// Route::get('/articles/detail/{id}', [ArticleController::class, 'detail']);


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/articles', function () {
//  return 'Article List';
// });
// Route::get('/articles/detail', function () {
//  return 'Article Detail';
// });

// // Dynamic Route
// Route::get('/articles/detail/{id}', function ( $id ) {
//  return "Article Detail - $id";
// });

// // Route Names
// Route::get('/articles/detail', function () {
//  return 'Article Detail';
// })->name('article.detail');

// Route::get('/articles/more', function() {
//  return redirect('/articles/detail');
// });

// Route::get('/articles/more', function() {
//  return redirect()->route('article.detail');
// });

// routes/web.php

// use App\Models\Article;

// Route::get('/test-dd', function () {
//     $articles= Article::all();
//     dd($articles);   // Dump and Die here
// });