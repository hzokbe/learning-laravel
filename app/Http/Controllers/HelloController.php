<?php

namespace App\Http\Controllers;

class HelloController extends Controller
{
    public function index(string $name, string $last_name)
    {
        return view('hello')->with('name', $name)->with('last_name', $last_name);
    }
}
