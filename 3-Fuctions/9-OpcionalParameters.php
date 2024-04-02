<?php 

declare(strict_types = 1 );

// '=' => define optional argument 
function calculate_cost( int $quantity, float $price, float $discount = 0) : float{
  
  $has_discount = $quantity >= 10
  ? $discount = 0.2
  : $discount = 0;

  $subtotal = $quantity * $price;
  $total = $subtotal - ($subtotal * $discount);
  return $total;
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
            <p>Total: <?php echo calculate_cost( 100, 5) ?> </p>
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