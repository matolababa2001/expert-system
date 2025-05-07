<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\RequestServiceController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home page
Route::get('/', function () {
    return view('welcome');
});

// Laravel Breeze Auth routes
require __DIR__.'/auth.php';

// Authenticated user dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Search Experts
|--------------------------------------------------------------------------
*/
Route::get('/search', [SearchController::class, 'index'])->name('search');

/*
|--------------------------------------------------------------------------
| Service Request (authenticated users only)
|--------------------------------------------------------------------------
*/
Route::post('/request-service', [RequestServiceController::class, 'store'])
    ->middleware('auth')
    ->name('request.service');

/*
|--------------------------------------------------------------------------
| Review an Expert (authenticated users only)
|--------------------------------------------------------------------------
*/
Route::post('/review', [ReviewController::class, 'store'])
    ->middleware('auth')
    ->name('expert.review');

/*
|--------------------------------------------------------------------------
| Profile Update Routes (authenticated users only)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});

/*
|--------------------------------------------------------------------------
| Admin Routes (authenticated admin users only)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/users', [AdminController::class, 'manageUsers'])->name('admin.users');
    Route::get('/experts', [AdminController::class, 'manageExperts'])->name('admin.experts');
});
