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
    new Product(uniqid(), "https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg", "Almo Nature Holistic",5 , $food, $dog ),
    new Product(uniqid(), "https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg", "Almo Nature Cat",3 , $food, $cat ),
    new Product(uniqid(), "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg", "Mangime Guppy",10 , $food, $fish ),
    new Product(uniqid(), "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg", "Voliera Wilma",40 , $utilities, $bird ),
    new Product(uniqid(), "https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg", "Cartucce filtranti",4 , $utilities, $fish ),
    new Product(uniqid(), "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg", "Kong classic",3 , $toys, $dog ),
    new Product(uniqid(), "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg", "Topini di peluche",8 , $toys, $cat ),
];