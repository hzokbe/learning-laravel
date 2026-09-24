<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            'First product',
            'Second product',
            'Third product',
        ];

        return view('products')->with('products', $products);
    }
}
