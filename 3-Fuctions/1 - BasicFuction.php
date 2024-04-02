<?php 
    
    // Creating Functions

    function write_copyright_notice(){

        $year = date('Y');
        $message = ' All rights reserved. Candy Shop  &copy' . $year;
        
        echo '<footer>';
        echo '<p class="footer">' . $message . '</p>';
        echo '</footer>';
    }
  
    function write_logo(){
        echo '<img class="img" src="img/candy.png" width="250" height="250" alt="image of candies">';
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
    <h1 class="title"> Basic Functions</h1>
    <div class="container">

    
        <div class="text">

            <h2>Candy Store</h2>
            <p> <?= $message ?></p>
            
        </div>
       
        
        <!-- Calling Function -->
        <?php 
            write_logo();
        ?>
    </div>

    <!-- Calling function -->
    <?php 
        write_copyright_notice();
    ?>
    
</body>
</html>