<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(string $name, string $last_name) {
        return "Hello, $name $last_name!";
    }
}
