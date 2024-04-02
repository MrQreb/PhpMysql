<?php 
    
    // Creating Functions with return

    function write_copyright_notice(){

        $year = date('y');
        $message = ' All rights reserved. Candy Shop  &copy' . $year;
        
        return $message;
    }
  
    function write_logo(){
        $image = '<img class="img" src="img/candy.png" width="250" height="250" alt="image of candies">';
        return $image;
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
            
            
        </div>
       
        
        <!-- Calling Function -->
        <?php 
            $image = write_logo();
            echo $image;
        ?>
    </div>

    <!-- Calling function -->
    <footer>
    <?php 
        $write_copyright = write_copyright_notice();
        echo "<p> $write_copyright </p>";
        
    ?>
    </footer>
</body>
</html>