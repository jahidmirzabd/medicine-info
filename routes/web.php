<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\ProductController;

// Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Products route
Route::middleware('auth')->name('admin.')->group(function () {
    Route::resource('products', ProductController::class);
});


// Profile management routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// User management routes
Route::resource('users', UserController::class);


// Medicine routes
//Route::get('/medicines', [MedicineController::class, 'index']);


// Home (Page routes)
Route::get('/', [PageController::class, 'index'])->name(name: 'pages.home.index');
// All Pages routes
Route::get('/features', [PageController::class, 'features'])->name('pages.features.index');
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/docs', [PageController::class, 'docs'])->name('docs');




require __DIR__.'/auth.php';