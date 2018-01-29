<?php 
    include_once '../db/config.php';
    
    //session_start();
    //var_dump($_SESSION);
    
    $character_id = $_REQUEST['character'];
    
    if($query = $mysqli->prepare(
        'DELETE FROM rpg.characters_test WHERE id = ?;')){
        $query->bind_param('i',intval($character_id));
        $query->execute();
        header('Location: ../success.php');
    }else{
        die('Ei suutnud kustutada:'. mysqli_error($mysqli));
    }
    
    $mysqli->close();
    