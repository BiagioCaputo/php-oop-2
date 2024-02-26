<?php

//classe per la categoria del prodotto (cibo, giocattoli, etc...)

class Category{
    public $name;

    function __construct($name){
        $this->name = $name;
    }
}

?>