<?php 
    
    // Creating Functions with parameters

    function calculate_subtotal( $price, $quantity){
        $subtotal = $price * $quantity;
        return $subtotal;
    }

    function calculate_total ( $subtotal, $quantity ){
            
        $discount = ( $subtotal / 100 ) * ( $quantity * 3 ); 
        
        if( ( $quantity >= 5 ) && ( $quantity <= 50 ) ){
            $total = $subtotal - $discount;
            $has_discount = "Yes";
        }else{
            $total = $subtotal;
            $has_discount = "No";
        }
    
        return [$total, $has_discount];
    }

    $products = [
        [
            'name' => 'Chocolate Bar',
            'price' => 3,
            'quantity' => 5
        ],
        [
            'name' => 'Gummy Bears',
            'price' => 2,
            'quantity' => 10
        ],
        [
            'name' => 'Lollipop',
            'price' => 1,
            'quantity' => 8
        ],
        [
            'name' => 'Sour Patch Kids',
            'price' => 4,
            'quantity' => 3
        ],
        [
            'name' => 'Jelly Beans',
            'price' => 2.5,
            'quantity' => 6
        ]
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
       
        <table class="table">
            <tr>
                <td class="td-titles">Product</td>
                <td class="td-titles">Price</td>
                <td class="td-titles">Quantity</td>
                <td class="td-titles">Subtotal</td>
                <td class="td-titles">Total</td>
                <td class="td-titles">Discount</td>
            </tr>
            
            <?php 
                foreach( $products as $key => $product){
                    
                    //Recuperando valores arreglo
                    $name = $product['name'];
                    $price = $product['price'];
                    $quantity = $product['quantity'];
                    
                    //Calculando el costo sin descuento
                    $subtotal = calculate_subtotal( $price, $quantity );
                    
                    //Calculando el costo con descuento
                    [ $total, $has_discount ] = calculate_total( $subtotal, $quantity );

                    //Imprimiendo en pantalla
                    echo "<tr class='tr'>";    
                        echo "<td class='td-item td-border'> $name </td>";
                        echo "<td class='td-border'> $price </td>";   
                        echo "<td class='td-border'> $quantity </td>";
                        echo "<td class='td-border'> $subtotal </td>";
                        echo "<td class='td-border'> $total </td>";
                        echo "<td class='td-border'> $has_discount </td>";
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