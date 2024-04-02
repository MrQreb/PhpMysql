<?php 
  declare(strict_types = 1 );

  $price = 5;
  $quantity = 5;

  function calculate_total( int $price, int $quantity ) : float {
    return $price * $quantity;
  }

  function sum(int $a, int $b): int {
    return $a + $b;
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

            <h2>Chocolates prices</h2>
            <p>Total: <?php echo calculate_total( $price, 'a') ?> </p>
        </div>
       
        
        
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