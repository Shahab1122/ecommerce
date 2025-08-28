<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // ✅ Protected redirect route
    Route::get('/redirect', [HomeController::class, 'redirect'])->name('redirect');
});

// ✅ Public home route
Route::get('/', [HomeController::class, 'index'])->name('index');
