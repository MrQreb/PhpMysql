<?php 
    
   $product = 'Candy bar';
   $stock = '10';
   $price = '1.50';
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

         
            <?php 
                for( $i = 1; $i <= $stock; $i++){
                    $cost = $i * $price;
                    echo "<p> $product $i costs: $cost </p>";
                    echo '<br>';
                }
            ?>
               
           
        </div>
       

        <img class="img" src="img/candy.png" width="250" height="250" alt="image of candies">
    </div>

    
</body>
</html>