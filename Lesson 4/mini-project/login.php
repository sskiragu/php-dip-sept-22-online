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

<!-- Login form -->
<div>
    <h1>Login Here.</h1>
    <form action="login.php" method="post">
        <div>
            <input type="text" name="username" placeholder="Enter username">
        </div>
        <div>
            <input type="password" name="password" placeholder="Enter password">
        </div>
        <div>
            <input type="submit" name="login" value="login">
        </div>
    </form>
</div>
</body>
</html>
<?php
if (isset($_POST['login'])) {

    //Getting the form values
    $username =  $_POST['username'];
    echo "<br>";
    $password =  $_POST['password'];

    //connect to the database
    include_once 'db-connect.php';

   //select the user
   $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
   $result = $database_connection->query($sql);
//    var_dump($result);
   if ($result->num_rows > 0) {
    header("Location: dashboard.php");
   }else{
    echo "User not available";
   }
}
?>