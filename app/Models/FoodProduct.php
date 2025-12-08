<?php

namespace App\Models;


class FoodProduct extends ProductModel1
{
    protected $table = "food_products";

    public function calculateDiscount ():float{
        return $this->price * 0.10;
    }

    
}
