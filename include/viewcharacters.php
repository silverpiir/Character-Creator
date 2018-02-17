<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Character Database</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <link rel="stylesheet" href="../css/custom.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:500" rel="stylesheet">
        <style type="text/css">
            body{text-align: center; }
        </style>
    </head>
    <body>
        <div class="container flex-container">
            <div class="section-content">
                <p><h1 class="heading">This is your character database.</h1></p>
                <p><h2>WARNING! Changes made here are PERMANENT!</h2></p>
                <br>
    </body>
</html>

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
        echo '<td><a href="modify_landing.php?character='. $row['id'] .'">MODIFY</a> / <a href="delete.php?character='. $row['id'] .'">DELETE</a></td>';
        echo '</tr>';
    }
    echo '</table>
        <p><a href="../welcome.php" class="buttons buttons-bottom btn btn-primary">Return</a></p>
        </div>
        </div>';
    
    $mysqli->close();
?>