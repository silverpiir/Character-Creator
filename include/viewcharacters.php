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
    
    //table set to test!
    $query = 'SELECT id,name,class,race,gender,strength,dexterity,constitution,intelligence,wisdom,charisma FROM rpg.characters_test WHERE userid = "'. $_SESSION['username'] .'";';
    $result = $mysqli->query($query);
    
    echo '<table class="table"><tr>';
    while($thfield = $result->fetch_field()){
        echo '<th class="centering" scope="col">'. ucfirst($thfield->name) .'</th>';
    }
    echo '<th class="centering">Action</th>';
    echo '</tr>';
    while($row = $result->fetch_assoc()){
        echo '<tr scope="row">';
        foreach($row as $field){
            echo '<td>'. $field .'</td>';
        }
        echo '<td><a href="modify_landing.php?character='. $row['id'] .'">MODIFY</a> / <a onclick="return confirm(\'Delete character '. $row['name'].'?\')" href="delete.php?character='. $row['id'] .'">DELETE</a></td>';
        echo '</tr>';
    }
    echo '</table>
        <p><a href="../index.php" class="buttons buttons-bottom btn btn-primary">Return</a></p>
        </div>
        <div class="footer">
            <p>
                <a href="https://github.com/silverpiir" target="_blank"><img src="../img/github.png" /></a>
                <a href="https://www.linkedin.com/in/silver-piir-b1a149146/" target="_blank"><img src="../img/linkedin-logo.png" /></a>
                <a href="mailto:silverpiir@gmail.com"><img src="../img/mail.png" /></a>
            </p>
            <p>2018 Silver Piir.</p>
        </div>
        </div>';
    
    $mysqli->close();
?>