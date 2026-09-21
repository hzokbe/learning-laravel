<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/hello/{name}/{age}', function (string $name, int $age) {
    return "<h1>Hello, $name!<h1>\n<p>Your age is $age</p>";
})->whereNumber('age');
