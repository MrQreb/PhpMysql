<?php 
//Dollar price
  $us_price = 4;

  
  $rates = [

    'usd' => 1,
    'eur' => 0.93,
    'gbp' => 0.8,
    'cad' => 1.4,
    'aud' => 1.5,
    'jpy' => 110.5,
    'cny' => 7.0
  ];

  function convert_currency($usd, $rates){
    
   
    // Create an empty array to store the prices
    foreach( $rates as $rate => $value ){
        
        // Multiply the rate by the usd value
        $prices[$rate] = $usd *  $value;
    }
    
    // Return the prices
    return $prices;
    
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
            <p>Dollars:<?= $us_price ?></p>
            <?php 
                //Calling the function
                $converted_prices = convert_currency($us_price, $rates);
                
                echo "<p>";
                foreach($converted_prices as $rate => $price){
                    echo  "$rate  $price | ";
                }
                echo "</p>";
            ?>
            
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