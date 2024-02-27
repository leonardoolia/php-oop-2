<?php

require_once __DIR__ . '/../models/Food.php';
require_once __DIR__ . '/../models/Toy.php';
require_once __DIR__ . '/../models/Accessory.php';
require_once __DIR__ . '/categories.php';

$products = [
    new Food(uniqid(),'Royal Canin Mini Adult', 20, $categories['dog'], 'terra', ['pollo', 'tacchino']),
    new Food(uniqid(),'Almo Nature Holistic Maintenance Medium Large', 15, $categories['dog'], 'mare', ['tonno', 'riso']),
    new Food(uniqid(),'Almo Nature Cat Daily Lattina', 25, $categories['cat'], 'terra', ['vitello', 'verdure']),
    new Food(uniqid(),'Mangime per Pesci Guppy in Fiocchi', 18, $categories['fish'], 'mare', ['mangime completo']),    
];

