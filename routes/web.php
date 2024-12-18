<?php

use App\Http\Controllers\DestinationController;

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Menampilkan halaman index destinasi
Route::get('/destinations', [DestinationController::class, 'index'])->name('destinations.index');

// Menambahkan route untuk edit dan delete
Route::get('/destinations/create', [DestinationController::class, 'create'])->name('destinations.create');
Route::get('/destinations/{destination}/edit', [DestinationController::class, 'edit'])->name('destinations.edit');
Route::delete('/destinations/{destination}', [DestinationController::class, 'destroy'])->name('destinations.destroy');




