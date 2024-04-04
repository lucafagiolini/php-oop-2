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
$Salopette = new Clothing("salopette", "gucci", 1000, $dog, "https://petmusestudio.com/4983-medium_default_2x/-leopard-print-design-dog-harness-leash-collar-set.jpg", "cotton",);
$SnackBeef = new Food("snack beef", "purina", 5, $dog, "https://d1l1wvvratuue4.cloudfront.net/img/premium-joint-care-140g/premium-joint-care-front.jpg?83822624", "dry");
$AnanasToy = new Toy("ananas", "kong", 10, $dog, "https://zoobar.shop/cdn/shop/products/product-image-1779180199.jpg?v=1709504601&width=990", "rubber");
$AdidasCollar = new Clothing("collar", "adidas", 20, $cat, "https://m.media-amazon.com/images/I/71zVyHe5JyL._AC_SL1500_.jpg", "leather");
$SnackSalmon = new Food("snack salmon", "purina", 5, $cat, "https://arcaplanet.vtexassets.com/arquivos/ids/225218/hi-fish-gatto-snack-cubetti-salmone.jpg?v=637454750553400000", "dry");
$MouseToy = new Toy("mouse", "kong", 10, $cat, "https://arcaplanet.vtexassets.com/arquivos/ids/286484/b8cfe583612a38996bafc1e35ba216e4ed2991d5_804230279411227a9fca8fb3f6756d14e91de825--1-.jpg?v=638209612297970000", "plastic");



$products = [$Salopette, $SnackBeef, $AnanasToy, $AdidasCollar, $SnackSalmon, $MouseToy];
