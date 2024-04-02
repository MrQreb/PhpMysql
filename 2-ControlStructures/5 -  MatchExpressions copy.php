<?php 
    
   $day = 'Thursday';
   $offer_day = $day . ' offer';
   
   //Match expressions is to similar to switch statement
   $offer = match($day) {
        'Monday' => ' offer: 10% off all candies',
        'Tuesday', 'Thursday' => ' offer: 20% Chocolates Bar',
        default => ' buy 3 Chocolates get 1 free',
   }
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
    <h1 class="title"> Candy Shop</h1>
    <div class="container">

    
        <div class="text">

            <h2>Candy Store</h2>
            <p> <?= $offer_day ?></p>
            <p><?= $offer ?></p>
        </div>
       

        <img class="img" src="img/candy.png" width="250" height="250" alt="image of candies">
    </div>

    
</body>
</html>