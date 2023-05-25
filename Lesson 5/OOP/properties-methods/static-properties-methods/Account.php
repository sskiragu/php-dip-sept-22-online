<?php
class Account{
    // properties
    public $account_name;
    public $account_number;
    static $status = "active";

    // constructor
    public function __construct($account_name, $account_number){
        $this->account_name = $account_name;
        $this->account_number = $account_number;
    }

    // method
    function get_status(){
        echo self::$status;
    }
}

// create an object
$account = new Account("Joy", "435467897654678");

$account->get_status();//calling the function

