<?php
// 1. int
$age = 20;
var_dump($age);
echo "<br>";
# 2. float
$deposit = 50000.50;
var_dump($deposit);
echo "<br>";
// 3. string
$msg = "Hello world";
var_dump($msg);
echo "<br>";
// 4. bool
$is_logged_in = true;
var_dump($is_logged_in);
echo "<br>";
// 5. null
$test = null;
var_dump($test);
echo "<br>";
// 6. Array
$items = array("Sugar", "C.Fat", "Maize Flour", "Others");
var_dump($items);
echo "<br>";
// 7. Object
class PaymentGateway{

}
$payment_getway_obj = new PaymentGateway();
var_dump($payment_getway_obj);
?>