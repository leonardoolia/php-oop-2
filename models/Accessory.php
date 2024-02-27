<?php

require_once __DIR__ . '/Product.php';

class Accessory extends Product 
{
    public $color;
    public $materials;
    public static $type = 'Accessory';


    public function __construct($id, $name, $price, Category $category, $color, $materials)
    {
        parent::__construct($id, $name, $price, $category);
        $this->color = $color;
        $this->materials = $materials;
    }
}