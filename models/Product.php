<?php

require_once __DIR__ . '/Animal.php';
require_once __DIR__ . '/Category.php';

class Product{
    public $id;
    public $img;
    public $title;
    public $price;
    public $category;
    public $species;

    function __construct($id,$img, $name, $price, Category $category, Animal $species){
        $this->id = $id;
        $this->img = $img;
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->species = $species;
    }
}

?>