<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HardwareController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HardwareController::class, 'index'])->name('hardware.index');
Route::get('/hardware/create', [HardwareController::class, 'create'])->middleware(['auth', 'verified'])->name('hardware.create');
Route::get('/hardware/{hardware}/edit', [HardwareController::class, 'edit'])->middleware(['auth', 'verified'])->name('hardware.edit');
Route::get('/hardware/{hardware}', [HardwareController::class, 'show'])->middleware(['auth', 'verified'])->name('hardware.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
