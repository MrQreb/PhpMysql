<?php 
    
   $product = [
         'Candy bar' => 1.50,
         'Soda' => 2.00,
         'Chips' => 1.25,
         'Cookies' => 1.00,
         'Gum' => 0.50
   ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles1.css">
</head>
<body>
    
    <h1 class="title"> Candy Shop</h1>
    <?php require_once 'includes/header.php' ?>
    <div class="container">

    
        <table class="table">
        <tr>
            <th class="title-table">Product</th>
            <th class="title-table">Price</th>
        </tr>
            <?php 
                foreach ($product as $item => $price) {
                        echo "<tr class'tr'>"; // Nueva fila para cada elemento
                        echo "<td class='item'>$item</td>"; // Cada producto en una celda con la clase 'item'
                        echo "<td class='item'>$$price.00</td>"; // Cada precio en una celda con la clase 'item'
                        echo "</tr>"; // Termina la fila
                }
            ?>
        </table>
       

        <img class="img" src="img/candy.png" width="250" height="250" alt="image of candies">
    </div>


    <?php require 'includes/footer.php' ?>
</body>
</html>