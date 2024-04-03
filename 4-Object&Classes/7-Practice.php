<?php 

//Get classes files
include('./classes/Account.php');
include('./classes/Customer.php');

//Creating Objects
$accounts1 = [
    new Account(12421,'saving',100.00),
    new Account(1412,'checking',50.00),
];

$accounts2 = [
    new ChildAccount(12421,'saving',100.00)
];

$customer1 = new Customer('Alkapon','AD','alkaponchas@gmail.com','123',$accounts1);
$customer2 = new Customer('Bolillo','AD','bolillo@gmail.com','123',$accounts2);



  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
   
    <?php include_once './includes/header.php' ?>
        
    <div class="container">
         <h3 class="title-container"><?= $customer1->getFullName() ?></h3>
         
         <div class="div-accounts">         
            <h2>account number</h2>
            <h2>account type</h2>
            <h2>balance</h2>
            <h2></h2> 
            
            
         </div>
         <hr class="line">
         <?php 
         //Del objeto customer1, acceder a su valor cuentas
            foreach( $customer1-> accounts as $account){
              
                $type = $account->type;
                $number = $account->number;
                $balance = $account->getBalance();

              
                echo '<div class="show-accounts">';
                echo "<p>$number</p>";
                echo "<p>$type</p>";
                echo "<p> $balance </p>"; 
                echo "<p>  </p>"; 
                echo '</div>';
                
            }
         ?>
        
         <hr class="line">
            
    <div class="container">
         <h3 class="title-container"><?= $customer2->getFullName() ?></h3>
         
         <div class="div-accounts">         
            <h2>account number</h2>
            <h2>account type</h2>
            <h2>balance</h2>
            <h2></h2> 
            
            
         </div>
         <hr class="line">
         <?php 
            foreach($customer2->accounts as $account ){
                
                $type = $account->type;
                $number = $account->number;
                $balance = $account->getBalance();

                echo '<div class="show-accounts">';
                echo "<p>$number</p>";
                echo "<p>$type</p>";
                echo "<p>$balance</p>"; 
                
                echo '</div>';
            }
         ?>
        
       

    </div>

    
   
    
</body>
</html>