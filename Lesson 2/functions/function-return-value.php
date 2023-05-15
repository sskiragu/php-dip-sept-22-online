<?php

function compute_bal($deposit,$withdrawal ){
    $balance = $deposit - $withdrawal;
    return $balance;
}

echo compute_bal(40000,36000);//calling the function
echo "<br>";
$bal = compute_bal(300,100);
echo $bal;

?>