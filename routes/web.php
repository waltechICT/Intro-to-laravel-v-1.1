<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TrainingController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('services', [ServicesController::class, 'index'])->name('services');
Route::get('training', [TrainingController::class, 'index'])->name('training');
Route::get('home', [HomeController::class, 'index'])->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
