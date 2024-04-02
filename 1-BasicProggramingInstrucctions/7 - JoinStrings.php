<?php 
   $name = 'Eduardo';
   $prefix = 'thank you';
   $message = $prefix  . ' ' . ',' . $name;
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
            <p><?= $name ?>'s Store</p>
            <p> <?=	$message ?></p>
            
        </div>
       

        <img class="img" src="img/candy.png" width="250" height="250" alt="image of candies">
    </div>

    
</body>
</html>