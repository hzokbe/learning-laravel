<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::redirect('/home', '/');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/hello/{name}/{last_name}', [HelloController::class, 'index'])->where('name', '[A-Za-z]+')->where('last_name', '[A-Za-z]+');

Route::get('/login', function () {
    return 'Login!';
})->name('login');

Route::prefix('/app')->group(function () {
    Route::get('/products', function () {
        return 'Products!';
    })->name('app.products');

    Route::get('/customers', function () {
        return 'Customers!';
    })->name('app.customers');
});

Route::fallback(function () {
    return view('not-found');
});
