<?php

require_once __DIR__ . '/Products.php';

class Clothing extends Product
{

    public $clothing;

    public function __construct($name, $brand, $price, $category, $image, $clothing)
    {
        parent::__construct($name, $brand, $price, $category, $image);
        $this->clothing = $clothing;
    }
}
