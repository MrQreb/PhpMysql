<?php 
    
   $product = 'Candy Bar';
   $ordered = 3;
   $stock = 10;
   
  $message = '';
  if( $stock > 20){
    $message = $product . ' is in stock';
  }elseif( $ordered > 1){
    $message = 'You order of ' . $product . ' coming soon';
  }else{
    $message = 'Sold out!';
  
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
            <p> <?= $message ?></p>
            
        </div>
       

        <img class="img" src="img/candy.png" width="250" height="250" alt="image of candies">
    </div>

    
</body>
</html>