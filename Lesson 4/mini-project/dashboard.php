<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .dashboard ul li{
            display: inline;
        }
    </style>
</head>
<body>
    <nav>
        <div class="dashboard">
            <?php echo "Welcome ".$_SESSION['username'];?>
            <ul>
                <li><a href="dashboard.php?id=profile">Profile</a></li>
                <li><a href="dashboard.php?id=statements">View Statements</a></li>
                <li><a href="dashboard.php?id=loan">Apply Loan</a></li>
                <li><a href="dashboard.php?id=reports">Reports</a></li>
                <li><a href="dashboard.php?id=logout">Logout</a></li>
            </ul>
        </div>
    </nav>
</body>
</html>
<?php
if (isset($_GET['id'])) {
    $selected = $_GET['id'];
    switch ($selected) {
        case 'profile':
            include_once 'profile.php';
            break;
        case 'statements':
            echo "You selected statements";
            break;
        case 'loan':
            echo "You selected loans";
            break;
        case 'reports':
            echo "You selected reports";
            break;
        case 'logout':
            include_once "logout.php";
            break;
        
        default:
            echo "404 Page not found";
            break;
    }
}
?>