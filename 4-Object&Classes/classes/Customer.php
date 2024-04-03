<?php 

declare( strict_types = 1);

class Customer{

    protected string $forename;
    protected string $surname;
    protected string $email;
    private   string $password;
    public    array  $accounts;


    
    public function __construct( string $forename, string $surname, string $email, string $password, array  $accounts)
    {
        $this->forename = $forename; 
        $this->surname  = $surname; 
        $this->email    = $email; 
        $this->password = $password; 
        $this->accounts = $accounts; 
    }

    public function getFullName(){
        return " $this->forename $this->surname ";
    }

    public function changePassword( string $oldPassword, string $newPassword ):string{
        
        if( $oldPassword === $this->password ){
            $this->password = $newPassword;
            return 'password changed';
        }else{
            return 'old password is wrong';

        }
    }

    public function getEmail(){
        return $this->email;
    }
}

?>