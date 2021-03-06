<?php

namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller
{
    public function home()
    {
    	$products = Product::all()->sortBy("price");

    	return view('products.index', compact('products'));
    }

    public function index()
    {
    	$products = Product::all()->sortBy("price");

        if (\Auth::check()) {
    	   return view('products.products', compact('products'));
        }
    }
}
