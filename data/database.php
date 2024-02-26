<?php

require_once __DIR__ . '/../models/Animal.php';
require_once __DIR__ . '/../models/Category.php';
require_once __DIR__ . '/../models/Product.php';

//categorie
$food = new Category("Food");
$toys = new Category("Toys");
$utilities = new Category("Utilities");

//specie
$dog = new Animal("Dog");
$cat = new Animal("Cat");
$bird = new Animal("Bird");
$fish = new Animal("Fish");

//array dei prodotti
$products = [
    new Product(uniqid(), "https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000", "Royal canin",3 , $food, $dog ),
    new Product(uniqid(), "https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000", "Royal canin",3 , $food, $dog ),
];