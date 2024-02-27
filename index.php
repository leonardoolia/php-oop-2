<?php
require_once __DIR__ . '/data/products.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <ul>
        <?php foreach ($products as $product):?>
            <li><?=$product->getProductDetails() ?></li>
        <?php endforeach;?>
    </ul>
</body>
</html>