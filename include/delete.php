<?php 
    include_once '../db/config.php';
    
    $character_id = $_REQUEST['character'];
    
    if($query = $mysqli->prepare(
        'DELETE FROM rpg.characters_test WHERE id = ?;')){
        $query->bind_param('i',intval($character_id));
        $query->execute();
        header('Location: ../success2.php');
    }else{
        die('Could not delete:'. mysqli_error($mysqli));
    }
    
    $mysqli->close();
?>