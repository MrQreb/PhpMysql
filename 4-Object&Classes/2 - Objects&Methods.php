<?php 

    //Class definition
	class Account{
	    
        //Properties 
        public int $number;
	    public string $type;
	    public float $balance;
	
        //class functions
	    public function withDraw( float $amount) : float{
            $this->balance -= $amount;
             return $this->balance;
	    }

        public function deposit( float $amount ) : float {
            $this->balance += $amount;
            return $this->balance ;
        }

       
	}

    //Creating object
    $account = new Account();

    //Assigning properties
    $account->balance = 100.2;
  
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
            <!-- <h2 class="text-container"> <span>Email:</span> </h2> -->
            <h2 class="text-container"> <span>deposit: <?php echo $account->deposit(20.00)  ?></span>$.00</h2>
            <h2 class="text-container"> <span>with draw : <?= $account->withDraw(50) ?></span>$.00</h2>
    </div>

    
   
    
</body>
</html>