<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController
{
    public function showProducts()
    {
        // نجلب كل المنتجات
        $products = Product::getAllProducts();

        // إذا تم إرسال بحث
        $search = $_GET['search'] ?? '';

        if ($search !== '') {
            $products = array_filter($products, function($product) use ($search) {
                return stripos($product->name, $search) !== false;
            });
        }

        return view('products', compact('products','search'));
    }
}
