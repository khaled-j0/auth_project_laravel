<?php

namespace App\Models;

class Product
{
    public $name;
    public $price;
    public $description;
    public $image;

    public function __construct($name, $price, $description, $image)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->image = $image;
    }

    public static function getAllProducts()
    {
        return [
            new Product("هاتف ذكي", 999, "هاتف بمواصفات ممتازة وسعر مناسب.", "data:image/jpeg;base64,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"),
            new Product("سماعة بلوتوث", 150, "صوت واضح وشحن سريع.", "https://cdn.pixabay.com/photo/2016/11/29/03/53/black-1867050_1280.jpg"),
            new Product("حاسوب محمول", 2500, "جهاز مثالي للطلاب والمبرمجين.", "https://cdn.pixabay.com/photo/2014/05/02/21/50/home-office-336378_1280.jpg"),
            new Product("ساعة ذكية", 300, "تتبع اللياقة والنوم.", "https://cdn.pixabay.com/photo/2015/09/05/20/02/apple-925490_1280.jpg"),
        ];
    }
}
