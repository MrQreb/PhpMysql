<?php 

    //Class definition
    class Customer{
        public string $forename;
        public string $surname;
        public string $email;
        public string $password;
    }

    //Class definition
    class Account {

        public int    $number;
        public string $type;    
        public float  $balance;
    }
    
    //Creating objects
    $customer = new Customer();
    $account = new Account();

    //Assign proprieties
    $customer-> email = 'Alaponchas@hotmail.com';
    $account-> balance = 200.00; 
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
            <h2 class="text-container"> <span>Email:</span> <?= $customer->email ?></h2>
            <h2 class="text-container"> <span>Balance:</span>$<?= $account->balance ?>.00</h2>
    </div>

    
   
    
</body>
</html>