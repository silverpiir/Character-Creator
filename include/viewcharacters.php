<?php
    /*
    include_once '../db/config.php';
    session_start();
        //$mysqli = 
        
        $userid = $_SESSION['username'];
        
        //table set to test!!
        if($stmt = $mysqli->prepare('SELECT * FROM rpg.characters_test WHERE userid = ?;')){
            $stmt->bind_param('s',$userid);
            if($stmt->execute()){
                header("Refresh: 0; url=../success.php");  //Todo = suunamine õnnestumise lehele, kus logout, add another, vaata olemasolevaid jne.
                exit();
            }else{
                die('Oops. Something went wrong.'. mysqli_error($mysqli));
                header('../welcome.php');
            }
        }
    $mysqli->close();
    return $response;
    */
    include_once '../db/config.php';
    session_start();
    
    $query = 'SELECT name,class,race,gender,strength,dexterity,intelligence,wisdom,charisma,luck FROM rpg.characters_test WHERE userid = "'. $_SESSION['username'] .'";';
    //$result = mysqli_query($db,$query);
    $result = $mysqli->query($query);
    //var_dump($result);
    
    echo '<table class="table"><tr>';
    while($thfield = $result->fetch_field()){
        echo '<th scope="col">'. ucfirst($thfield->name) .'</th>';
    }
    echo '<th>Action</th>';
    echo '</tr>';
    while($row = $result->fetch_assoc()){
        echo '<tr scope="row">';
        foreach($row as $field){
            echo '<td>'. $field .'</td>';
        }
        
        echo '</tr>';
        
    }
    echo '</table>';
    $mysqli->close();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        </style>
    </head>
    <body>
        <a href="../welcome.php">Return</a>
    </body>
</html>