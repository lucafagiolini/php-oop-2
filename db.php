<?php

require './Models/Products.php';
require './Models/Category.php';

// category
$cat = new Category("cat", "fa-cat");
$dog = new Category("dog", "fa-dog");

// prducts
$newProduct = new Product("salopette", "barbour", 200, $dog, "https://www.barbour.com/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/m/s/msl0001ny91_1.jpg");

var_dump($newProduct);
