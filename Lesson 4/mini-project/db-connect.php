<?php
 //Create a connection to the database
 $database_connection = new mysqli("localhost", "root", "", "kcb");
 if ($database_connection->connect_error) {
  echo $database_connection->error;
 }else{
  echo "Database connection successfull.";
 }
?>