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
</head>
<body>
    <div class="container flex-container centering">
        <div class="section-content">
            <div>
                <p><h1 class="heading">Hi, <b><?php echo $_SESSION['username'];?></b>. Welcome to Character Creator.</h1></p>
            </div>
            <div class="welcome-options">
                <p><a href="insert.php" class="buttons btn btn-primary">Add a Character</a></p>
                <p><a href="include/viewtest.php" class="buttons btn btn-primary">View Your Characters</a></p>
                <p><a href="include/viewcharacters.php" class="buttons btn btn-warning">Character Database</a></p>
                <br><br>
                <p><a href="logout.php" class="buttons btn btn-danger">Sign Out of Your Account</a></p>
            </div>
        </div>
        <div class="footer">
            <p>
                <a href="https://github.com/silverpiir" target="_blank"><img src="img/github.png" /></a>
                <a href="https://www.linkedin.com/in/silver-piir-b1a149146/" target="_blank"><img src="img/linkedin-logo.png" /></a>
                <a href="mailto:silverpiir@gmail.com"><img src="img/mail.png" /></a>
            </p>
            <p>Copyright © 2018 Silver Piir.</p>
        </div>
    </div>
</body>
</html>