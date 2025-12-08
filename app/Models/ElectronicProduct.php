<?php

namespace App\Models;


class ElectronicProduct extends ProductModel1
{
    protected $table = "electronic_products";

    public function calculateDiscount ():float{
        return $this->price * 0.06;
    }
}
