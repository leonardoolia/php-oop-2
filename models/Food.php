<?php

require_once __DIR__ . '/Product.php';

class Food extends Product 
{
    public $taste;
    public $ingredients;
    public static $type = 'food';


    public function __construct($id, $name, $price, Category $category, $taste, $ingredients)
    {
        parent::__construct($id, $name, $price, $category);
        $this->taste = $taste;
        $this->ingredients = $ingredients;
    }
}