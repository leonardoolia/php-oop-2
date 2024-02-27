<?php

require_once __DIR__ . '/../models/Category.php';

$categories = [
    'dog' => new Category('Cani', 'fa-solid fa-dog'),
    'cat' => new Category('Gatti', 'fa-solid fa-cat'),
    'bird' => new Category('Bird', 'fa-solid fa-dove'),
    'fish' => new Category('Fish', 'fa-solid fa-fish'), 
];