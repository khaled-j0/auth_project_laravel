<?php

namespace App\Models;


class BooksProduct extends ProductModel1
{
    protected $table = "books_products";

    public function calculateDiscount(): float{
        return $this->price * 0.08;
        
    }
}
