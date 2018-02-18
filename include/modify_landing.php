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
                                <option value="Warrior" <?php if($character['class'] == "Warrior") echo "selected";?>>Warrior</option>
                                <option value="Mage" <?php if($character['class'] == "Mage") echo "selected";?>>Mage</option>
                                <option value="Thief" <?php if($character['class'] == "Thief") echo "selected";?>>Thief</option>
                                <option value="Priest" <?php if($character['class'] == "Priest") echo "selected";?>>Priest</option>
                            </select> 
                        </div>
                    </div>
                    
                    <div class="form-width">
                        <label class="col-sm-4 control-label">Race: </label>
                        <div class="col-sm-8">
                            <select class="form-control" name="race">
                                <option value="Human" <?php if($character['race'] == "Human") echo "selected";?>>Human</option>
                                <option value="Orc" <?php if($character['race'] == "Orc") echo "selected";?>>Orc</option>
                                <option value="Elf" <?php if($character['race'] == "Elf") echo "selected";?>>Elf</option>
                                <option value="Gnome" <?php if($character['race'] == "Gnome") echo "selected";?>>Gnome</option>
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
                    <br><a class="buttons buttons-top btn btn-primary" href="../welcome.php">Return</a>
                </div>
                </form>
            </div>
        </div>    
    </body>
</html>