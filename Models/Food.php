<?php

require_once __DIR__ . '/Products.php';

class Food extends Product
{

    public $food;

    public function __construct($name, $brand, $price, $category, $image, $food)
    {
        parent::__construct($name, $brand, $price, $category, $image);
        $this->food = $food;
    }
}
