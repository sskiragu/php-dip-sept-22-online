<?php

function compute_bal($deposit,$withdrawal ){
    $balance = $deposit - $withdrawal;
    echo $balance;
}
compute_bal(40000,36000);//calling the function
echo "<br>";
compute_bal(300,100);

// Assign create a function that can compute the bmi
?>