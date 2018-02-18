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
    
    $portrait;
    
    
    while ($row = mysqli_fetch_assoc($result)) {
        if($row["race"] == "Aasimar"){
            $portrait = "../img/portraits/aasimar.png";
        }
        switch($row["race"]){
            case "Aasimar":
                $portrait = "../img/portraits/aasimar.png";
                break;
            case "Bugbear":
                $portrait = "../img/portraits/bugbear.png";
                break;
            case "Dragonborn":
                $portrait = "../img/portraits/dragonborn.png";
                break;
            case "Dwarf":
                $portrait = "../img/portraits/dwarf.png";
                break;
            case "Elf":
                $portrait = "../img/portraits/elf.png";
                break;
            case "Firbolg":
                $portrait = "../img/portraits/firbolg.png";
                break;
            case "Genasi":
                $portrait = "../img/portraits/genasi.png";
                break;
            case "Gnome":
                $portrait = "../img/portraits/gnome.png";
                break;
            case "Goblin":
                $portrait = "../img/portraits/goblin.png";
                break;
            case "Goliath":
                $portrait = "../img/portraits/goliath.png";
                break;
            case "Half-Elf":
                $portrait = "../img/portraits/halfelf.png";
                break;
            case "Half-Orc":
                $portrait = "../img/portraits/halforc.png";
                break;
            case "Halfling":
                $portrait = "../img/portraits/halfling.png";
                break;
            case "Hobgoblin":
                $portrait = "../img/portraits/hobgoblin.png";
                break;
            case "Human":
                $portrait = "../img/portraits/human.png";
                break;
            case "Kenku":
                $portrait = "../img/portraits/kenku.png";
                break;
            case "Kobold":
                $portrait = "../img/portraits/kobold.png";
                break;
            case "Lizardfolk":
                $portrait = "../img/portraits/lizardfolk.png";
                break;
            case "Orc":
                $portrait = "../img/portraits/orc.png";
                break;
            case "Tabaxi":
                $portrait = "../img/portraits/tabaxi.png";
                break;
            case "Tiefling":
                $portrait = "../img/portraits/tiefling.png";
                break;
            case "Tortle":
                $portrait = "../img/portraits/tortle.png";
                break;
            case "Triton":
                $portrait = "../img/portraits/triton.png";
                break;
            case "Yuan-Ti Pureblood":
                $portrait = "../img/portraits/yuantipureblood.png";
                break;
            default:
                break;
        }
        echo '<div class="portrait"><img src="'.$portrait.'"/></div>';
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
            <div class="footer centering">
            <p>
                <a href="https://github.com/silverpiir" target="_blank"><img src="../img/github.png" /></a>
                <a href="https://www.linkedin.com/in/silver-piir-b1a149146/" target="_blank"><img src="../img/linkedin-logo.png" /></a>
                <a href="mailto:silverpiir@gmail.com"><img src="../img/mail.png" /></a>
            </p>
            <p>Copyright © 2018 Silver Piir.</p>
        </div>
        </div>
    </body>
</html>