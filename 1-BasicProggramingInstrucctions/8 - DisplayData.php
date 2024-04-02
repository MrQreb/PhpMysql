<?php 
   
   $name = 'Eduardo';
   $prefix = 'Welcome';
   $greeting = $prefix  . ' ' . ',' . $name;

   $offer = [
     'item' => 'Chocolate',
     'quantity' => 5,
     'price' => 10,
     'discount' => 5
   ];

   $offer_price = $offer['quantity'] * $offer['discount'] ;
   $usual_price = $offer['quantity'] * $offer['price'] ;
   $saving = $usual_price - $offer_price;
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
           <p><?= $greeting ?></p> 
           <p>You will buy:<?= $offer['item'] ?></p>
           <p>Original price:<?= $offer['price']  ?></p>
           <p>Offer price:<?= $offer['discount']  ?></p>
           <p>You will save: <?= $saving  ?></p>
           <p>Total:<?= $offer_price ?></p>
        </div>
       

        <img class="img" src="img/candy.png" width="250" height="250" alt="image of candies">
    </div>

    
</body>
</html>