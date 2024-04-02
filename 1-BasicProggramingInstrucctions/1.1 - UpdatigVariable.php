<?php 
    $name = "Alkapon";
    $age = 20;

    
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
    <h1 class="title"> Updating value</h1>
    <div class="container">

    
        <div class="text">

            <p> My dog is
                <?php echo $name ?>
            </p>
            <p> his age is
                <?php echo $age ?>
            </p>
        </div>
       

        <img class="img" src="img/candy.png" width="250" height="250" alt="Imagen">
    </div>

    
</body>
</html>