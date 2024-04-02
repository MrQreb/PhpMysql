
<?php 

    $candies = [
        'Candy' =>['price'=> 2.00, 'stock' => 12 ],
        'Mints' =>['price'=> 2.00, 'stock' => 48 ],
        'Fudge' =>['price'=> 4.80, 'stock' => 8 ]
    ];

    $tax = 20;

    function reorder_message ( int $quantity ) : string {
        $need_stock = ( $quantity > 10) 
        ? 'Yes'
        : 'No';

        return $need_stock;
    }

    function get_total( float $price, int $quantity ):float{
        return $total = $price * $quantity;
    }

    function get_tax_due( float $price, int $quantity , float $tax = 20 ):float{
        $total = $price * $quantity;

        return $total_tax =  $total *  ( $tax / 100);
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
        </div>
        <table>
            <th>Product</th>
            <th>Stock</th>
            <th>Re-Order</th>
            <th>Total_Value</th>
            <th>Tax due</th>
           
            <?php 
                foreach( $candies as $candy => $value ){
                    
                    //Candy is identifier
                    $name = $candy;

                    //value is value array
                    $price = $value['price'];
                    $stock = $value['stock'];
                    
                    $reorder = reorder_message($stock);
                    $total = get_total( $price, $stock);
                    $tax_due = get_tax_due( $price , $stock , $tax);

                    echo "<tr>"; 
                    echo "<td>{$name}</td>"; 
                    echo "<td>{$stock}</td>"; 
                    echo "<td>{$reorder}</td>"; 
                    echo "<td>{$total}</td>"; 
                    echo "<td>{$tax_due}</td>"; 
                    echo "</tr>";
                    
                }
            ?>
        </table>
        
        
    </div>

    <!-- Calling function -->
    <footer>
    
    </footer>
</body>
</html>