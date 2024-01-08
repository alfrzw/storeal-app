<?php

namespace App\Models;

class Product
{
    private static $products = [
        [
            "product" => "Hoodie Black Abstract Rainbow V1.0",
            "slug" => "product-1",
            "img" => "product1.png",
            "category" => "1",
            "price" => "2000000",
            "stock" => "23"
        ],
        [
            "product" => "Hoodie Gray Cassete Tape Colorful",
            "slug" => "product-2",
            "img" => "product2.png",
            "category" => "1",
            "price" => "3500000",
            "stock" => "27"
        ],
        [
            "product" => "Hoodie Dark Gray Mushroom",
            "slug" => "product-3",
            "img" => "product3.png",
            "category" => "1",
            "price" => "1890000",
            "stock" => "12"
        ],
        [
            "product" => "Hoodie Black Splash Paint",
            "slug" => "product-4",
            "img" => "product4.png",
            "category" => "1",
            "price" => "3300000",
            "stock" => "18"
        ],
        [
            "product" => "Hoodie Gray Mushroom V2.1",
            "slug" => "product-5",
            "img" => "product3.png",
            "category" => "1",
            "price" => "3300000",
            "stock" => "18"
        ],
        [
            "product" => "Hoodie Gray Casette Tape Vintage Limited Edition",
            "slug" => "product-6",
            "img" => "product2.png",
            "category" => "1",
            "price" => "3300000",
            "stock" => "18"
        ],
    ];

    public static function all()
    {
        return collect(self::$products);
    }

    public static function find($slug)
    {
        $products = static::all();
        return $products->firstWhere('slug', $slug);
    }
}
