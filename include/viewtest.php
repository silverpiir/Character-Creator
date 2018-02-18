<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <link rel="stylesheet" href="../css/custom.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:500" rel="stylesheet">
    </head>
    <body>
        <div class="container flex-container">
            <div class="section-content">
            <p><h1 class="heading">Here's a list of your characters:</h1><br><hr></p>

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
        echo "No rows found, nothing to print. Exiting";
        exit;
    }
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="minicontainer">';
        echo '<table class="tableview" cellspacing="100">';
        echo '<tr><td class="tdview">'.'Name:' .'</td><td class="tdview">'. $row["name"] .'</td></tr>';
        echo '<tr><td class="tdview">'.'Class:'.'</td><td class="tdview">'. $row["class"] .'</td></tr>';
        echo '<tr><td class="tdview">'.'Race: '.'</td><td class="tdview">'. $row["race"] .'</td></tr>';
        echo '<tr><td class="tdview">'.'Gender: '.'</td><td class="tdview">'. $row["gender"] .'</td></tr>';
        echo '<tr><td class="tdview">'.'Strength: '.'</td><td class="tdview">'. $row["strength"] .'</td></tr>';
        echo '<tr><td class="tdview">'.'Dexterity: '.'</td><td class="tdview">'. $row["dexterity"] .'</td></tr>';
        echo '<tr><td class="tdview">'.'Constitution: '.'</td><td class="tdview">'. $row["constitution"] .'</td></tr>';
        echo '<tr><td class="tdview">'.'Intelligence: '.'</td><td class="tdview">'. $row["intelligence"] .'</td></tr>';
        echo '<tr><td class="tdview">'.'Wisdom: '.'</td><td class="tdview">'. $row["wisdom"] .'</td></tr>';
        echo '<tr><td class="tdview">'.'Charisma: '.'</td><td class="tdview">'. $row["charisma"] .'</td></tr>';
        echo '</table>';
        echo '</div>';
        echo '<br><hr><br>';
    }
    
    mysqli_free_result($result);
?>
                <div class="centering"><a class="buttons buttons-bottom btn btn-primary" href="../welcome.php">Return</a></div>
            </div>
        </div>
    </body>
</html>