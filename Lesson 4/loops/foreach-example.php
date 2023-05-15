<?php
// indexed array
$laptop_brands = array("Toshiba", "Acer", "HP", "Dell");
var_dump($laptop_brands);

echo "<br>";

foreach ($laptop_brands as $key => $value) {
    echo $key." ". $value.", ";
}

echo "<br>";

// associaitive
$form_inputs = array("username" => "john", "email" => "john@gmail.com", "password" => "test123");
var_dump($form_inputs);

echo "<br>";

foreach($form_inputs as $key=>$value){
   echo $key. " : ". $value."<br>"; 
}
?>