<?php
    require_once '../db/config.php';
    
    $character_id = $_REQUEST['character'];
    $character = array();
    if($query = $mysqli->prepare('
    SELECT * FROM rpg.characters_test WHERE id = ?
    ;')){
        $query->bind_param('i',intval($character_id));
        $query->execute();
        $result = $query->get_result();
        $character = $result->fetch_assoc();
    }
?>

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
        <div class="container container-relative flex-container">
            <div class="section-content">
                <p><h1 class="heading">Modify character</h1></p>
                <form class="form-horizontal" action="update.php?id=<?php echo $character['id'] ?>" method="POST">
            
                <div class="form-group">
                    <div class="form-width">
                        <label class="col-sm-4 control-label">Name: </label>
                        <div class="col-sm-8">
                            <input type="text" name="name" maxlength="16" class="form-control" value="<?php echo $character['name'] ?>"/>
                        </div>
                    </div>
                    
                    <div class="form-width">
                        <label class="col-sm-4 control-label">Class: </label>
                        <div class="col-sm-8">
                             <select class="form-control" name="class">
                                <option value="Artificer" <?php if($character['class'] == "Artificer") echo "selected";?>>Artificer</option>
                                <option value="Barbarian" <?php if($character['class'] == "Barbarian") echo "selected";?>>Barbarian</option>
                                <option value="Bard" <?php if($character['class'] == "Bard") echo "selected";?>>Bard</option>
                                <option value="Cleric" <?php if($character['class'] == "Cleric") echo "selected";?>>Cleric</option>
                                <option value="Druid" <?php if($character['class'] == "Druid") echo "selected";?>>Druid</option>
                                <option value="Fighter" <?php if($character['class'] == "Fighter") echo "selected";?>>Fighter</option>
                                <option value="Monk" <?php if($character['class'] == "Monk") echo "selected";?>>Monk</option>
                                <option value="Mystic" <?php if($character['class'] == "Mystic") echo "selected";?>>Mystic</option>
                                <option value="Paladin" <?php if($character['class'] == "Paladin") echo "selected";?>>Paladin</option>
                                <option value="Ranger" <?php if($character['class'] == "Ranger") echo "selected";?>>Ranger</option>
                                <option value="Rogue" <?php if($character['class'] == "Rogue") echo "selected";?>>Rogue</option>
                                <option value="Sorcerer" <?php if($character['class'] == "Sorcerer") echo "selected";?>>Sorcerer</option>
                                <option value="Warlock" <?php if($character['class'] == "Warlock") echo "selected";?>>Warlock</option>
                                <option value="Wizard" <?php if($character['class'] == "Wizard") echo "selected";?>>Wizard</option>
                            </select> 
                        </div>
                    </div>
                    
                    <div class="form-width">
                        <label class="col-sm-4 control-label">Race: </label>
                        <div class="col-sm-8">
                            <select class="form-control" name="race">
                                <option value="Aasimar" <?php if($character['race'] == "Aasimar") echo "selected";?>>Aasimar</option>
                                <option value="Bugbear" <?php if($character['race'] == "Bugbear") echo "selected";?>>Bugbear</option>
                                <option value="Dragonborn" <?php if($character['race'] == "Dragonborn") echo "selected";?>>Dragonborn</option>
                                <option value="Dwarf" <?php if($character['race'] == "Dwarf") echo "selected";?>>Dwarf</option>
                                <option value="Elf" <?php if($character['race'] == "Elf") echo "selected";?>>Elf</option>
                                <option value="Firbolg" <?php if($character['race'] == "Firbolg") echo "selected";?>>Firbolg</option>
                                <option value="Genasi" <?php if($character['race'] == "Genasi") echo "selected";?>>Genasi</option>
                                <option value="Gnome" <?php if($character['race'] == "Gnome") echo "selected";?>>Gnome</option>
                                <option value="Goblin" <?php if($character['race'] == "Goblin") echo "selected";?>>Goblin</option>
                                <option value="Goliath" <?php if($character['race'] == "Goliath") echo "selected";?>>Goliath</option>
                                <option value="Half-Elf" <?php if($character['race'] == "Half-Elf") echo "selected";?>>Half-Elf</option>
                                <option value="Half-Orc" <?php if($character['race'] == "Half-Orc") echo "selected";?>>Half-Orc</option>
                                <option value="Halfling" <?php if($character['race'] == "Halfling") echo "selected";?>>Halfling</option>
                                <option value="Hobgoblin" <?php if($character['race'] == "Hobgoblin") echo "selected";?>>Hobgoblin</option>
                                <option value="Human" <?php if($character['race'] == "Human") echo "selected";?>>Human</option>
                                <option value="Kenku" <?php if($character['race'] == "Kenku") echo "selected";?>>Kenku</option>
                                <option value="Kobold" <?php if($character['race'] == "Kobold") echo "selected";?>>Kobold</option>
                                <option value="Lizardfolk" <?php if($character['race'] == "Lizardfolk") echo "selected";?>>Lizardfolk</option>
                                <option value="Orc" <?php if($character['race'] == "Orc") echo "selected";?>>Orc</option>
                                <option value="Tabaxi" <?php if($character['race'] == "Tabaxi") echo "selected";?>>Tabaxi</option>
                                <option value="Tiefling" <?php if($character['race'] == "Tiefling") echo "selected";?>>Tiefling</option>
                                <option value="Tortle" <?php if($character['race'] == "Tortle") echo "selected";?>>Tortle</option>
                                <option value="Triton" <?php if($character['race'] == "Triton") echo "selected";?>>Triton</option>
                                <option value="Yuan-Ti Pureblood" <?php if($character['race'] == "Yuan-Ti Pureblood") echo "selected";?>>Yuan-Ti Pureblood</option>
                            </select> 
                        </div>
                    </div>
                    
                    <div class="form-width">
                        <label class="col-sm-4 control-label">Gender: </label>
                        <div class="col-sm-8">
                            <div style="display:inline-block"><input class="form-control" type="radio" name="gender" value="M" <?php if($character['gender'] == "M") echo "checked";?>> Male</div>
                            <div style="display:inline-block"><input class="form-control" type="radio" name="gender" value="F" <?php if($character['gender'] == "F") echo "checked";?>> Female</div>
                        </div>
                    </div>
                    
                    <div class="form-width">
                        <label class="col-sm-4 control-label">Strength: </label>
                        <div class="col-sm-8">
                            <input type="text" name="strength" maxlength="2" class="form-control" value="<?php echo $character['strength'] ?>"/>
                        </div>
                    </div>
                    
                    <div class="form-width">
                        <label class="col-sm-4 control-label">Dexterity: </label>
                        <div class="col-sm-8">
                            <input type="text" name="dexterity" maxlength="2" class="form-control" value="<?php echo $character['dexterity'] ?>"/>
                        </div>
                    </div>
                    
                    <div class="form-width">
                        <label class="col-sm-4 control-label">Constitution: </label>
                        <div class="col-sm-8">
                            <input type="text" name="constitution" maxlength="2" class="form-control" value="<?php echo $character['constitution'] ?>"/>
                        </div>
                    </div>
                    
                    <div class="form-width">
                        <label class="col-sm-4 control-label">Intelligence: </label>
                        <div class="col-sm-8">
                            <input type="text" name="intelligence" maxlength="2" class="form-control" value="<?php echo $character['intelligence'] ?>"/>
                        </div>
                    </div>
                    
                    <div class="form-width">
                        <label class="col-sm-4 control-label">Wisdom: </label>
                        <div class="col-sm-8">
                            <input type="text" name="wisdom" maxlength="2" class="form-control" value="<?php echo $character['wisdom'] ?>"/>
                        </div>
                    </div>
                    
                    <div class="form-width">
                        <label class="col-sm-4 control-label">Charisma: </label>
                        <div class="col-sm-8">
                            <input type="text" name="charisma" maxlength="2" class="form-control" value="<?php echo $character['charisma'] ?>"/>
                        </div>
                    </div>
                </div>
                <div class="centering">
                    <br><input class="buttons btn btn-primary" type="submit" value="Modify"/>
                    <br><a class="buttons buttons-top btn btn-primary" href="viewcharacters.php">Return</a>
                </div>
                </form>
            </div>
            <div class="footer centering">
                <p>
                    <a href="https://github.com/silverpiir" target="_blank"><img src="../img/github.png" /></a>
                    <a href="https://www.linkedin.com/in/silver-piir-b1a149146/" target="_blank"><img src="../img/linkedin-logo.png" /></a>
                    <a href="mailto:silverpiir@gmail.com"><img src="../img/mail.png" /></a>
                </p>
                <p>2018 Silver Piir.</p>
            </div>
        </div>    
    </body>
</html>