<?php 
    $items = 3;
    $cost = 100;
    $subtotal = $items * $cost;
    $tax = ( $subtotal / 100) * 20;
    $total = $subtotal + $tax;
    
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
    <h1 class="title"> Associative Arrays</h1>
    <div class="container">

    
        <div class="text">

            <h2>Arithmetic Operators</h2>
            <p> Items: <?=	$items ?></p>
            <p> Cost: <?= $cost ?> </p>
            <p> Subtotal <?= $subtotal ?></p>
            <p> Tax: <?= $tax ?></p>
            <p> Subtotal: <?=$subtotal?></p>
            <p> Total with taxes: <?=$total?></p>
        </div>
       

        <img class="img" src="img/candy.png" width="250" height="250" alt="image of candies">
    </div>

    
</body>
</html>