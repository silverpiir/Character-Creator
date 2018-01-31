<?php
    require_once '../db/config.php';
    
    $character_id = $_GET['id'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    $race = $_POST['race'];
    $gender = $_POST['gender'];
    $strength = $_POST['strength'];
    $dexterity = $_POST['dexterity'];
    $constitution = $_POST['constitution'];
    $intelligence = $_POST['intelligence'];
    $wisdom = $_POST['wisdom'];
    $charisma = $_POST['charisma'];

    if($query = $mysqli->prepare('UPDATE 
    rpg.characters_test SET name=?,class=?,race=?,gender=?,strength=?,dexterity=?,constitution=?,intelligence=?,wisdom=?,charisma=?
    WHERE id = ?
    ;')){
        $query->bind_param('ssssssssssi',$name,$class,$race,$gender,$strength,$dexterity,$constitution,$intelligence,$wisdom,$charisma,$character_id);
        
        if($query->execute()){
            header('Location: ../success.php');
        }else{
            echo "Error: ". $query->error;
        }
    }
    else{
        echo "Error with prepare()". mysqli_error($mysqli);
    }
    
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