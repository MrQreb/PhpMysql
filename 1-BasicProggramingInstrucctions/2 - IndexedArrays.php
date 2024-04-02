<?php 
    $best_sellers = [ 'Bread', 'Milk', 'Candy Bar', 'Water', 'Soda' ];
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

            <h2>Candy Bar</h2>
           <p> <?php echo $best_sellers[0] ?></p>
           <p> <?php echo $best_sellers[1] ?></p>
           <p> <?php echo $best_sellers[2] ?></p>
           <p> <?php echo $best_sellers[3] ?></p>
           <p> <?php echo $best_sellers[0] ?></p>
           
        </div>
       

        <img class="img" src="img/candy.png" width="250" height="250" alt="image of candies">
    </div>

    
</body>
</html>