<?php

require './Models/Products.php';
require './Models/Category.php';
require './Models/Food.php';
require './Models/Clothing.php';
require './Models/Toy.php';


// category
$cat = new Category("cat", "fa-cat");
$dog = new Category("dog", "fa-dog");

// products
$Salopette = new Clothing("salopette", "gucci", 1000, $dog, "https://www.gucci.com/images/ecommerce/styles_new/1600x1600_1200x1200/662586_ZA9QG_1000_001_100_0000_Light-Gucci-Logo-Embroidered-Denim-Jumpsuit.jpg", "cotton",);
$SnackBeef = new Food("snack beef", "purina", 5, $dog, "https://www.purina.fr/sites/g/files/auxxlc391/files/styles/product/public/2020-01/ProPlan_Snack_Beef_0.png?itok=3Z9Z9Z9Z", "dry");
$AnanasToy = new Toy("ananas", "kong", 10, $dog, "https://www.kongcompany.com/wp-content/uploads/2019/12/Classic-Dog-Toy-Red-1.png", "rubber");

var_dump($Salopette);
var_dump($SnackBeef);
var_dump($AnanasToy);
