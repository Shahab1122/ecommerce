<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;



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
// ✅ Public products route
Route::get('/product', [AdminController::class, 'product']);
// ✅ Public products post data
Route::post('/uploadproduct', [AdminController::class, 'uploadproduct'])->name('uploadproduct');

