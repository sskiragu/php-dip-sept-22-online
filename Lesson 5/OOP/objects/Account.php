<?php
class Account{
    // properties
    public $account_name;
    public $account_number;

    // constructor
    public function __construct($account_name, $account_number){
        $this->account_name = $account_name;
        $this->account_number = $account_number;
    }
}

// create an object
$account = new Account("Joy", "435467897654678");

// create an object
$account2 = new Account("Billy", "5463782909487567489");

// var_dump($account2);
echo $account->account_name;

