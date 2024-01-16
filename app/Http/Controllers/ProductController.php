<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() 
    {
        return view('products', [
            'title' => 'Our Products',
            'active' => 'products',
            'products' => Product::latest()->filter(request(['search', 'category']))->paginate(12)->withQueryString(),
            'categories' => Category::all()
        ]);
    }

    public function show(Product $product)
    {
        return view('product', [
            'title' => 'Details Product',
            'active' => 'products',
            'product' => $product
        ]);
    }
}
