<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('', [HomeController::class, 'index'])->name('admin-index');
});

