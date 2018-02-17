<?php
    session_start();
    
    if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
      header("location: login.php");
      exit;
    }
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:500" rel="stylesheet">
    <style type="text/css">
        body{text-align: center; }
    </style>
</head>
<body>
    <div class="container flex-container">
        <div class="section-content">
        <div>
            <p><h1 class="heading">Hi, <b><?php echo $_SESSION['username'];?></b>. Welcome to Character Creator.</h1></p>
        </div>
        <div class="welcome-options">
            <p><a href="insert.php" class="buttons btn btn-primary">Add a character</a></p>
            <p><a href="include/viewtest.php" class="buttons btn btn-primary">View your characters</a></p>
            <p><a href="include/viewcharacters.php" class="buttons btn btn-warning">Character Database</a></p>
            <br><br>
            <p><a href="logout.php" class="buttons btn btn-danger">Sign Out of Your Account</a></p>
        </div>
    </div>
    </div>
</body>
</html>