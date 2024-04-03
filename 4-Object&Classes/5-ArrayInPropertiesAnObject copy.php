<?php 

  declare( strict_types = 1);
  class Account{

    //Creating properties
    public    array  $numbers;
    public    string $type;
    protected float  $balance;
    public    array  $accounts = [];
   
    //Creating constructor
    public function __construct( array $numbers, string $type, float $balance = 0.0)
    {
        $this-> numbers  = $numbers;
        $this-> type  = $type;
        $this-> balance  = $balance;
        $this-> accounts [] = $this;
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
  
  $numbers = [
    'account_number' => 1234124,
    'routing_number' => 4523455,
  ];
 
  $eduar_account = new Account( $numbers, 'saving', 1000.00);
  
  
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
         <div class="show-accounts">
                 <p>Account number</p>
                 <p> <?= $eduar_account->numbers['account_number'] ?>  </p>
                 <p> routing number</p>
                 <p> <?= $eduar_account->numbers['routing_number'] ?> </p> 
                 <p> Balance </p> 
                 <p><?= $eduar_account->getBalance() ?></p>
        </div>
         <hr class="line">
        
         

    </div>

    
   
    
</body>
</html>