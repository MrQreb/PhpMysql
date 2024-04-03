<?php 

  declare( strict_types = 1);
  class Account{

    //Creating properties
    public int    $number;
    public string $type;
    protected float  $balance;
    public array  $accounts = [];
   
    //Creating constructor
    public function __construct( int $number, string $type, float $balance = 0.0)
    {
        $this-> number  = $number;
        $this-> type  = $type;
        $this-> balance  = $balance;
        $this-> accounts []= $this;
        $this->createdAt();
    }

    //Creating methods
    public function deposit(float $amount): void
    {
        $this->balance += $amount;
    }

    public function withdraw(float $amount): void
    {
        $this->balance -= $amount;
    }
    
    public function createdAt(): string
    {
        return date('Y-m-d');
    }

    // Getters and Setters 

    
   public function getBalance() :float {
         return $this->balance;
   }

   public function setBalance(float $balance): float {
        
        return $this->balance = $balance;
   }
   
   
  }
  
   // Creating objects
  $accounts = [
    ( $alkapon_account = new Account( 1234124, 'Checking', 1000.0) ),
    ( $bolillo_account = new Account(124213421, 'Saving', 5000.0) ) 
  ];

    $diego_account = new Account( 1234124, 'Checking', 1000.0);
   
  
  
  
  
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
         <h3 class="title-container">account balances</h3>
         
         <div class="div-accounts">         
            <h2>account number</h2>
            <h2>date</h2>
            <h2>checking</h2>
            <h2>saving</h2> 
            
            
         </div>
         <hr class="line">
         <?php 
            foreach( $accounts as $account => $value){
                
                $number = $value->number;
                $type = $value->type;
                $balance = $value->getBalance();
                $createdAt = $value->createdAt();

                echo '<div class="show-accounts">';
                echo "<p> $number </p>";
                echo "<p> $createdAt </p>";
                echo "<p> $type </p>"; 
                echo "<p> $balance </p>"; 
                echo '</div>';
                
            }
         ?>
         <p> <?=  $diego_account->getBalance() ?></p>
         <hr class="line">
        
         <div class="show-accounts">
                 <p> previous balance  </p>
                 <p> <?=  $diego_account->getBalance(); ?></p>
                 <p> new balance  </p> 
                 <p> <?= $diego_account->setBalance(250); ?> </p> 
        </div>

    </div>

    
   
    
</body>
</html>