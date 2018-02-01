<?php
    require_once '../db/config.php';
    
    //$character_id = $query = 'SELECT id FROM rpg.characters_test WHERE userid = "'. $_SESSION['username'] .'";';
    
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
        <style type="text/css">
        body{ font: 14px sans-serif;}
        .wrapper{ width: 350px; padding: 20px; }
        </style>
    </head>
    <body>
        
        <form class="form-horizontal" action="update.php?id=<?php echo $character['id'] ?>" method="POST">
            
            <div class="form-group">
                <label class="col-sm-2 control-label">Name: </label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="<?php echo $character['name'] ?>"/>
                </div>
                
                <label class="col-sm-2 control-label">Class: </label>
                <div class="col-sm-10">
                    <!--<input type="text" name="class" class="form-control" value=""/> -->
                     <select class="form-control" name="class">
                        <option value="Warrior" <?php if($character['class'] == "Warrior") echo "selected";?>>Warrior</option>
                        <option value="Mage" <?php if($character['class'] == "Mage") echo "selected";?>>Mage</option>
                        <option value="Thief" <?php if($character['class'] == "Thief") echo "selected";?>>Thief</option>
                        <option value="Priest" <?php if($character['class'] == "Priest") echo "selected";?>>Priest</option>
                    </select> 
                </div>
                
                <label class="col-sm-2 control-label">Race: </label>
                <div class="col-sm-10">
                    <!--<input type="text" name="race" class="form-control" value=""/>-->
                    <select class="form-control" name="race">
                        <option value="Human" <?php if($character['race'] == "Human") echo "selected";?>>Human</option>
                        <option value="Orc" <?php if($character['race'] == "Orc") echo "selected";?>>Orc</option>
                        <option value="Elf" <?php if($character['race'] == "Elf") echo "selected";?>>Elf</option>
                        <option value="Gnome" <?php if($character['race'] == "Gnome") echo "selected";?>>Gnome</option>
                    </select> 
                </div>
                
                <label class="col-sm-2 control-label">Gender: </label>
                <div class="col-sm-10">
                    <!--<input type="text" name="gender" class="form-control" value=""/>-->
                    <div style="display:inline-block"><input class="form-control" type="radio" name="gender" value="M" <?php if($character['gender'] == "M") echo "checked";?>> Male</div>
                    <div style="display:inline-block"><input class="form-control" type="radio" name="gender" value="F" <?php if($character['gender'] == "F") echo "checked";?>> Female</div>
                </div>
                
                <label class="col-sm-2 control-label">Strength: </label>
                <div class="col-sm-10">
                    <input type="text" name="strength" class="form-control" value="<?php echo $character['strength'] ?>"/>
                </div>
                
                <label class="col-sm-2 control-label">Dexterity: </label>
                <div class="col-sm-10">
                    <input type="text" name="dexterity" class="form-control" value="<?php echo $character['dexterity'] ?>"/>
                </div>
                
                <label class="col-sm-2 control-label">Constitution: </label>
                <div class="col-sm-10">
                    <input type="text" name="constitution" class="form-control" value="<?php echo $character['constitution'] ?>"/>
                </div>
                
                <label class="col-sm-2 control-label">Intelligence: </label>
                <div class="col-sm-10">
                    <input type="text" name="intelligence" class="form-control" value="<?php echo $character['intelligence'] ?>"/>
                </div>
                
                <label class="col-sm-2 control-label">Wisdom: </label>
                <div class="col-sm-10">
                    <input type="text" name="wisdom" class="form-control" value="<?php echo $character['wisdom'] ?>"/>
                </div>
                
                <label class="col-sm-2 control-label">Charisma: </label>
                <div class="col-sm-10">
                    <input type="text" name="charisma" class="form-control" value="<?php echo $character['charisma'] ?>"/>
                    <input class="col-sm-2 btn btn-primary" type="submit" value="Modify"/>
                </div>
            </div>
            
        </form>
        <a href="../welcome.php">Return</a>
    </body>
</html>