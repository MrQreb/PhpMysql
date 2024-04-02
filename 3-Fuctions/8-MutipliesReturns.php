<?php 
  
  declare(strict_types = 1 );

  $stock = 0;
  $products = [
    
    [
      'name' => 'Chocolate',
      'stock' => 10,
      'message' => '',
    ],
    [
      'name' => 'Candy Bars',
      'stock' => 9,
      'message' => '',
    ],
    [
      'name' => 'Tamarindo',
      'stock' => 0,
      'message' => '',
    ],
  ];

  function get_stock_message( int $stock) : string {
    
    if( $stock > 10){
      return "In stock";
    }elseif($stock <= 10 && $stock > 0){
      return "Low stock";
    }

    return "Out of stock";
}


function products_stock_messages(array $products): array {
   
    //& is used to modify the original array
    foreach ($products as &$product) {
      
        $stock = $product['stock'];
        if ($stock > 10) {
            $product['message'] = 'In stock';
        } elseif ($stock <= 10 && $stock > 0) {
            $product['message'] = 'Low stock';
        } else {
            $product['message'] = 'Sold out';
        }
    }
    return $products;
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

            <h2>Chocolates Stock</h2>
            <p>Stock is: <?php echo $stock = get_stock_message($stock) ?></p>
            <p>Other products: 
             
                <?php 
                $products = products_stock_messages($products);
                foreach ($products as $product) {
                    $name = $product['name'];
                    $stock = $product['stock'];
                    $message = $product['message'];
                    echo "<p> $name in $message </p> ";
                }
                ?>
            </p>
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