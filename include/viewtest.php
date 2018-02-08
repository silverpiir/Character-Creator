<?php
    include_once '../db/config.php';
    session_start();
    
    $query = 'SELECT name,class,race,gender,strength,dexterity,constitution,intelligence,wisdom,charisma FROM rpg.characters_test WHERE userid = "'. $_SESSION['username'] .'";';
    $result = $mysqli->query($query);
    
    if (!$result) {
        echo "Could not successfully run query ($query) from DB: " . mysql_error();
        exit;
    }
    
    if (mysqli_num_rows($result) == 0) {
        echo "No rows found, nothing to print so am exiting";
        exit;
    }
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div>';
        echo '<table cellspacing="100">';
        echo '<tr><td class="col-md-6">'.'Name:' .'</td><td>'. $row["name"] .'</td></tr>';
        echo '<tr><td class="col-md-6">'.'Class:'.'</td><td>'. $row["class"] .'</td></tr>';
        echo '<tr><td class="col-md-6">'.'Race: '.'</td><td>'. $row["race"] .'</td></tr>';
        echo '<tr><td class="col-md-6">'.'Gender: '.'</td><td>'. $row["gender"] .'</td></tr>';
        echo '<tr><td class="col-md-6">'.'Strength: '.'</td><td>'. $row["strength"] .'</td></tr>';
        echo '<tr><td class="col-md-6">'.'Dexterity: '.'</td><td>'. $row["dexterity"] .'</td></tr>';
        echo '<tr><td class="col-md-6">'.'Constitution: '.'</td><td>'. $row["constitution"] .'</td></tr>';
        echo '<tr><td class="col-md-6">'.'Intelligence: '.'</td><td>'. $row["intelligence"] .'</td></tr>';
        echo '<tr><td class="col-md-6">'.'Wisdom: '.'</td><td>'. $row["wisdom"] .'</td></tr>';
        echo '<tr><td class="col-md-6">'.'Charisma: '.'</td><td>'. $row["charisma"] .'</td></tr>';
        echo '</table>';
        echo '</div>';
        echo '<br>';
        
    }
    
    mysqli_free_result($result);
    
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