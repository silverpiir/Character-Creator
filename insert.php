<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add character</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
    </head>
    <body>
        <form class="form-horizontal" action="include/addcharacter.php" method="POST">
            
            <div class="form-group">
                <label class="col-sm-2 control-label">Name: </label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value=""/>
                </div>
                
                <label class="col-sm-2 control-label">Class: </label>
                <div class="col-sm-10">
                    <!--<input type="text" name="class" class="form-control" value=""/> -->
                     <select class="form-control" name="class">
                        <option value="Warrior">Warrior</option>
                        <option value="Mage">Mage</option>
                        <option value="Thief">Thief</option>
                        <option value="Priest">Priest</option>
                    </select> 
                </div>
                
                <label class="col-sm-2 control-label">Race: </label>
                <div class="col-sm-10">
                    <!--<input type="text" name="race" class="form-control" value=""/>-->
                    <select class="form-control" name="race">
                        <option value="Human">Human</option>
                        <option value="Orc">Orc</option>
                        <option value="Elf">Elf</option>
                        <option value="Gnome">Gnome</option>
                    </select> 
                </div>
                
                <label class="col-sm-2 control-label">Gender: </label>
                <div class="col-sm-10">
                    <!--<input type="text" name="gender" class="form-control" value=""/>-->
                    <div style="display:inline-block"><input class="form-control" type="radio" name="gender" value="M" checked> Male</div>
                    <div style="display:inline-block"><input class="form-control" type="radio" name="gender" value="F"> Female</div>
                </div>
                
                <label class="col-sm-2 control-label">Strength: </label>
                <div class="col-sm-10">
                    <input type="text" name="strength" class="form-control" value=""/>
                </div>
                
                <label class="col-sm-2 control-label">Dexterity: </label>
                <div class="col-sm-10">
                    <input type="text" name="dexterity" class="form-control" value=""/>
                </div>
                
                <label class="col-sm-2 control-label">Constitution: </label>
                <div class="col-sm-10">
                    <input type="text" name="constitution" class="form-control" value=""/>
                </div>
                
                <label class="col-sm-2 control-label">Intelligence: </label>
                <div class="col-sm-10">
                    <input type="text" name="intelligence" class="form-control" value=""/>
                </div>
                
                <label class="col-sm-2 control-label">Wisdom: </label>
                <div class="col-sm-10">
                    <input type="text" name="wisdom" class="form-control" value=""/>
                </div>
                
                <label class="col-sm-2 control-label">Charisma: </label>
                <div class="col-sm-10">
                    <input type="text" name="charisma" class="form-control" value=""/>
                    <input class="col-sm-2" type="submit" value="Submit"/>
                </div>
            </div>
        </form>
        <a href="welcome.php">Return</a>
    </body>
</html>
