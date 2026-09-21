<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return '<h1>Hello, world!</h1>';
});

Route::get('/about', function () {
    return '<h1>About</h1>';
});
