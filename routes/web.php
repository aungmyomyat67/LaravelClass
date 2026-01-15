<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

// Public routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');

// Protected routes (require authentication)
Route::middleware('auth')->group(function () {
    // Articles routes
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');
    
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['verified'])->name('dashboard');
    
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Admin routes
    Route::get('/admin', function () {
        return 'Admin Page - Only admin can access';
    })->middleware('check.email');
    
    Route::get('/spy', function () {
        return 'Spy Page - access by password';
    })->middleware('check.password');
});

// Guest routes (forgot password)
Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');



    Route::get('/articles', [ArticleController::class, 'index']);

    Route::get('/articles/edit/{id}', [ArticleController::class, 'edit']);
    Route::put('/articles/update/{id}', [ArticleController::class, 'update']);

    Route::delete('/articles/{id}', [ArticleController::class, 'destroy']);


   

require __DIR__.'/auth.php';