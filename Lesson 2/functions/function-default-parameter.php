<?php

function compute_bal($deposit,$withdrawal = 0 ){
    $balance = $deposit - $withdrawal;
    return $balance;
}

echo compute_bal(40000);//calling the function


?>