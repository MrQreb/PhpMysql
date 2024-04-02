<?php 
    
   //Impuesto global
   $tax_rate = 0.4;
   function calculate_running_total( $price, $quantity){
        
        //Tiene el valor de 0.2
        global $tax_rate;
        
        //Variable estatica => mantiene su valor entre llamadas
        static $running_total = 0;
        
        echo "<p> Tax rate: $running_total </p>";

        //Calculo del total
        $total = $price * $quantity;
        
        //Calculo del impuesto
        $tax = $total * $tax_rate;
        
        
        //Suma del total y el impuesto
        $running_total = $running_total + $total + $tax;

        return $running_total;
   }

   $products = [

    [
        'name' => 'Mints',
        'price' => 2,
        'quantity' => 5
    ],
    [
        'name' => 'Toffee',
        'price' => 3,
        'quantity' => 5
    ],
    [
        'name' => 'Fudge',
        'price' => 5,
        'quantity' => 4
    ],

   ];
    
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
       
        <table>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Running Total</th>
            </tr>
            
            <?php 
                foreach( $products as $item => $value){
                    
                    $name = $value['name'];
                    $price = $value['price'];
                    $quantity = $value['quantity'];
                    
                    $total = calculate_running_total($price, $quantity);
                    echo "<tr>";
                    echo "<td>$name</td>";
                    echo "<td>$price</td>";
                    echo "<td>$quantity</td>";
                    echo "<td>$total</td>";
                    echo "</tr>";
                    
                }
            ?>
           
        </table>
        
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