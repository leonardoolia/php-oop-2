<?php

require_once __DIR__ . '/Category.php';

class Product 
{
    public $id;
    public $name;
    public $price;
    public $category;

    public function __construct($id, $name, $price, Category $category)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    public function getProductDetails() {
        return "Nome prodotto: {$this->name}, Prezzo: {$this->price}€, Categoria: {$this->category->getName()}";
    }

}