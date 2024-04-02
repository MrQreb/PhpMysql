<?php 
    $offers = [
        [ "name" => "Milk", "price" => 10 ],
        [ "name" => "Bread", "price" => 5 ],
        [ "name" => "Butter", "price" => 15 ],
        
    ];

    $nutrition["fat"]  = 100;
    $nutrition["salt"] = 100;
    
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

            <h2>Offers</h2>
            <p>
                <?php echo $offers[0]['name'] ?> - $
                <?php  echo $offers[0]['price'] ?> 
            </p>
            <p>
                <?php echo $offers[1]['name'] ?> - $    
                <?php echo $offers[1]['price'] ?>
            </p>
            <p>
                <?php echo $offers[2]['name'] ?> - $                        
                <?php echo $offers[2]['price'] ?>
            </p>
        </div>
       

        <img class="img" src="img/candy.png" width="250" height="250" alt="image of candies">
    </div>

    
</body>
</html>