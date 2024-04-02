<?php 
    
    $name = 'Alkapon';
    

    if( $name ===''){
        $greeting = 'Welcome Guest';
    }else{
        $greeting = 'Welcome' . $name;
    }
   
    $product = 'Candy bar';
    $price = 1.50;
    
    for( $i = 1 ; $i <= 3;  $i++){
        
        
        $subtotal = $price * $i;

        $exist_discount = ($i >=2 && $i <= 20)          //Rango del descuento
        ?  $discount = ( $subtotal / 100 ) * ( $i * 4)  //4% de por pieza
        :  $discount = 0;                               //Sin descuento si no esta en el rango
       
        $total = round( ( $subtotal - $discount) , 2 );
        $totals[$i] = $total;
    }

    
    

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
            foreach( $totals as $item => $price){
               echo "<tr>";
               echo "<td class='td'>$item</td>";
               echo "<td class='td'>$price</td>";
               echo "</tr>";
            }
        ?>
        </table>
       
       

        <img class="img" src="img/candy.png" width="250" height="250" alt="image of candies">
    </div>


    <?php require_once 'includes/footer.php' ?>
</body>
</html>