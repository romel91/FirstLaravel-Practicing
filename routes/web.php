<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiddlewaretestController;
use App\Http\Middleware\SimpleMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/public', [MiddlewaretestController::class, 'publicMessage']);
// Route::get('/private', [MiddlewaretestController::class, 'privateMessage']) ->middleware('auth');
// Route::get('/secret', [MiddlewaretestController::class, 'secretMessage']);

Route::middleware('auth')->group(function () {
    Route::get('/private', [MiddlewaretestController::class, 'privateMessage']);
    Route::get('/secret', [MiddlewaretestController::class, 'secretMessage']);
});//auth is built in middleware in laravel

Route::get('/download', [MiddlewaretestController::class, 'downloadFile'])->middleware('throttle:2,1');//throttle is built in middleware in laravel

Route::get('/message', [MiddlewaretestController::class, 'simpleMessage'])->middleware(SimpleMiddleware::class);