<?php
session_start();

if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="page-header">
        <h3>Hi, <b><?php echo $_SESSION['username']; ?></b>. Welcome to my site!</h3>
    </div>
    <a href="logout.php">Sign Out of Your Account</a>
    <br> <br> <br>
    <i class="fas fa-gamepad" style="font-size: 40px"></i> <br>
    <a href="quiz.php?q=1">Click here to test if you are addicted to video games.</a> <br> <br>
</div>
</body>
</html>