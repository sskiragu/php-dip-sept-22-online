<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="./images/pic.jpg" class="card-img-top img-thumbnail" width="50px" height="50px" alt="Profile Photo">
        <div class="card-body">
        <?php
          //connect to the database
          include_once 'db-connect.php';
          $sql = "SELECT * FROM users WHERE username='john'";
          $result = $database_connection->query($sql);
          $row = $result->fetch_assoc();
        ?>
        <div><form action="profile.php" method="post"><input type="text" name="username" value="<?php echo $row['username'] ?> "> <input type="submit" name="update" value="Update"></form> </div>
        <?php
          if (isset($_POST['update'])) {
            $username =  $_POST['username'];
             //connect to the database
            include_once 'db-connect.php';
            $sql = "UPDATE users SET username='$username' WHERE id='6'";
            if ($database_connection->query($sql) === TRUE) {
              echo "Username updated";
            }else{
              echo "Failed to update username";
            }
          }
        ?>
        <h6><?php echo $row['email'] ?> <span><a href="">Edit</a></h6>
        <h6>Reset password</h6>
        <h6><span><a href="delete.php?id=<?php echo $row['id'] ?>">Delete Account</a></span></h6>
        </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>