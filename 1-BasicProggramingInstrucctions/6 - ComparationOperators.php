<?php 
    $name = 'Chocolate';
    $stock = 2;
    $wanted = 4;
    $deliver = true;
    $can_buy = ( ( $deliver === true) && ( $stock < $wanted) );
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1 class="title"> Comparison operators</h1>
    <div class="container">

    
        <div class="text">

            <h2 class="subtitle">Shopping Cart</h2>
            <p>Name: <?= $name ?></p>
            <p>Stock:<?= $stock ?></p>
            <p>Wanted: <?= $wanted ?></p>
            <p>Can buy : <?= $can_buy ?></p>
        </div>
       

        <img class="img" src="img/candy.png" width="250" height="250" alt="image of candies">
    </div>

    
</body>
</html>