<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() 
    {
        return view('ourprod', [
            "title" => "Our Products",
            "products" => Product::all()
        ]);
    }

    public function show($slug)
    {
        return view('product', [
            "title" => "Details Product",
            "product" => Product::find($slug)
        ]);
    }
}
