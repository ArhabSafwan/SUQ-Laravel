<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;


Route::controller(LandingPageController::class)->group(function () {
    Route::get('/', 'index')->name('pages.index');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



