<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// inheritence
abstract class ProductModel1 extends Model

{
    protected $fillable = ['name','id','price','stock'];

    abstract public function calculateDiscount(): float;
    
    public function getFinalPriceAttribute(){
        return $this->price - $this->calculateDiscount();
    }

    public function inStock(): bool
    {
        return $this->stock > 0;
    }
}
