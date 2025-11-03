<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MedicineController;

// Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin Product Routes without prefix, protected by auth
Route::middleware(['auth', 'verified'])->name('admin.')->group(function () {
    Route::resource('products', ProductController::class);
});


// Frontend Product Routes single show
Route::get('/features/{id}', [PageController::class, 'show'])->name('pages.features.show');


// Profile management routes (authenticated users)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// User management routes
Route::resource('users', UserController::class);

// Medicine routes (currently commented out)
// Route::get('/medicines', [MedicineController::class, 'index']);

// Static Pages Routes
Route::get('/', [PageController::class, 'index'])->name('pages.home.index');
Route::get('/features', [PageController::class, 'features'])->name('pages.features.index');
Route::get('/pricing', [PageController::class, 'pricing'])->name('pages.pricing.price');
Route::get('/docs', [PageController::class, 'docs'])->name('docs');






// Buy Now POST route to handle form submissions
Route::post('/buynow', [FormsController::class, 'process'])->name('forms.buynow');






require __DIR__.'/auth.php';