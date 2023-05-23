<?php
$id =  $_GET['id'];

//connect to the database
include_once 'db-connect.php';

$sql = "DELETE FROM users WHERE id='$id'";
if ($database_connection->query($sql) === TRUE) {
    echo "Record deleted";
}else{
    echo "Failed";
}
?>