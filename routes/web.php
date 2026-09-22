<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::redirect('/home', '/');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/hello/{name}/{age}', function (string $name, int $age) {
    return "<h1>Hello, $name!<h1>\n<p>Your age is $age</p>";
})->where('name', '[A-Za-z]+')->whereNumber('age');

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
