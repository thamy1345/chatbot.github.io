<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['admin.basic'])->prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('admin.dashboard');
});
