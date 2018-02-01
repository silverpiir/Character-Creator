<?php
    include_once '../db/config.php';
    session_start();
    
    $query = 'SELECT id,name,class,race,gender,strength,dexterity,constitution,intelligence,wisdom,charisma FROM rpg.characters_test WHERE userid = "'. $_SESSION['username'] .'";';
    $result = $mysqli->query($query);
    
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
        echo '<td><a href="delete.php?character='. $row['id'] .'">DELETE</a> / <a href="modify_landing.php?character='. $row['id'] .'">MODIFY</a></td>';
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