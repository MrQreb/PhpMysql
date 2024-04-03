<?php 
declare( strict_types = 1);

class Account{
    
    public    int    $number;
    public    string $type;
    protected float  $balance;
    
    public function __construct( int $number, string $type, float $balance = 0)
    {
        $this-> number   = $number;
        $this-> type     = $type;            	
        $this-> balance  = $balance;
    }

    public function deposit ( float $amount ):string{
        $this->balance += $amount;
        return 'Your new balance is:' . $this->balance;
        
    }

    //Protected para que pueda hacer depositios quien herede
    protected function withDraw( float $amount) : string{
        $this->balance -= $amount;
        return 'Your new balance is:' . $this->balance;
        
    }

    public function getBalance(){
        return $this->balance;
    }

    public function setBalance( float $balance) : float{
        return $this->balance = $balance;
    }

}

class ChildAccount extends Account{
    public function __construct( int $number, string $type, float $balance = 0 )
    {
        //Herede del padre valores del constructor
        parent::__construct( $number, $type, $balance + 20);
    }

   
}

?>