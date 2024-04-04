<?php

require_once __DIR__ . '/Products.php';

class Toy extends

Product

{

    public $toy;

    public function __construct($name, $brand, $price, $category, $image, $toy)

    {
        parent::__construct($name, $brand, $price, $category, $image);
        $this->toy = $toy;
    }
}
