<?php
    require_once 'db/config.php';
    
    $username = $password = "";
    $username_err = $password_err = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
     
        // Check if username is empty
        if(empty(trim($_POST["username"]))){
            $username_err = 'Please enter username.';
        } else{
            $username = trim($_POST["username"]);
        }
        
        // Check if password is empty
        if(empty(trim($_POST['password']))){
            $password_err = 'Please enter your password.';
        } else{
            $password = trim($_POST['password']);
        }
        
        // Validate credentials
        if(empty($username_err) && empty($password_err)){
            $sql = "SELECT username, password FROM users WHERE username = ?";
            
            if($stmt = mysqli_prepare($mysqli, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_username);
                $param_username = $username;
                
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    
                    if(mysqli_stmt_num_rows($stmt) == 1){                    
                        mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                        
                        if(mysqli_stmt_fetch($stmt)){
                            
                            if(password_verify($password, $hashed_password)){
                                session_start();
                                $_SESSION['username'] = $username;  
                                $_SESSION['id'] = $id;
                                header("location: welcome.php");
                            }else{
                                $password_err = 'The password you entered was not valid.';
                            }
                        }
                    }else{
                        $username_err = 'No account found with that username.';
                    }
                }else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
            }
            mysqli_stmt_close($stmt);
        }
        mysqli_close($mysqli);
    }
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:500" rel="stylesheet">
</head>
<body>
    <div class="container flex-container centering">
        <div class="section-content">
            <h2 class="heading">Login</h2>
            <p>Please fill in your credentials to login.</p>
        
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                
                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <div class="form-width">
                        <label class="col-sm-4 control-label">Username:<sup>*</sup></label>
                        <div class="col-sm-8">
                            <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                            <span class="help-block"><?php echo $username_err; ?></span>
                        </div>
                    </div>
                </div>
                
                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <div class="form-width">
                        <label class="col-sm-4 control-label">Password:<sup>*</sup></label>
                        <div class="col-sm-8">
                            <input type="password" name="password" class="form-control">
                            <span class="help-block"><?php echo $password_err; ?></span>
                            <br>
                        </div>
                        <div>
                            <br>
                            <input type="submit" class="buttons btn btn-primary" value="Submit">
                            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
                        </div>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>