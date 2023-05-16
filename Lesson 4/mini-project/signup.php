<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<?php include_once "navbar.php"; ?>

<!-- Signup form -->
<div>
    <h1>Signup Page</h1>
    <form action="signup.php" method="post">
        <div><input type="text" name="username" placeholder="Enter username"></div>
        <div><input type="email" name="email" placeholder="Enter email"></div>
        <div><input type="password" name="password" placeholder="Enter password"></div>
        <div><input type="submit" name="signup" value="Signup"></div>
    </form>
</div>
</body>
</html>
<?php
if (isset($_POST['signup'])) {
    
    // Getting the form values
    $username =  $_POST['username'];
    $email =  $_POST['email'];
    $password = $_POST['password'];

    //Create a connection to the database
   $database_connection = new mysqli("localhost", "root", "", "kcb");
   if ($database_connection->connect_error) {
    echo $database_connection->error;
   }else{
    echo "Database connection successfull.";
   }

    // Inser the values
    $sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
    $database_connection->query($sql);
    echo "<br>";
    if($database_connection->query($sql) === TRUE){
        echo "Signup successfull";
    }else{
        echo "Signup failed";
    }

}
?>