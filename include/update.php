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
    }else{
        echo "Error with prepare()". mysqli_error($mysqli);
    }
    
    $mysqli->close();
?>
