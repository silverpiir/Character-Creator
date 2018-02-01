<?php
    include_once '../db/config.php';
    session_start();
    
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
    
    $userid = $_SESSION['username'];
    
    //table set to test!!
    if($stmt = $mysqli->prepare('INSERT INTO rpg.characters_test(name,class,race,gender,strength,constitution,dexterity,intelligence,wisdom,charisma,userid)
    VALUES(?,?,?,?,?,?,?,?,?,?,?);')){
        $stmt->bind_param('ssssiiiiiis',$name,$class,$race,$gender,$strength,$dexterity,$constitution,$intelligence,$wisdom,$charisma,$userid);
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