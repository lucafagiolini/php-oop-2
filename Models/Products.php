<?php

class product

{

    public $name;
    public $brand;
    public $price;
    public $category;
    public $image;

    function __construct($name, $brand, $price, $category, $image)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->price = $price;
        $this->category = $category;
        $this->image = $image;
    }
}
