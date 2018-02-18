<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add character</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <link rel="stylesheet" href="css/custom.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:500" rel="stylesheet">
    </head>
    <body>
        <div class="container container-relative flex-container">
            <div class="section-content">
                <p><h1 class="heading">Add a character to your database</h1></p>
                <form class="form-horizontal" action="include/addcharacter.php" method="POST">
            
                <div class="form-group">
                    <div class="form-width">
                        <label class="col-sm-4 control-label">Name: </label>
                        <div class="col-sm-8">
                            <input type="text" name="name" maxlength="16" class="form-control" value=""/>
                        </div>
                    </div>
                    
                    <div class="form-width">
                        <label class="col-sm-4 control-label">Class: </label>
                        <div class="col-sm-8">
                             <select class="form-control" name="class">
                                <option value="Warrior">Warrior</option>
                                <option value="Mage">Mage</option>
                                <option value="Thief">Thief</option>
                                <option value="Priest">Priest</option>
                            </select> 
                        </div>
                    </div>
                    
                    <div class="form-width">
                        <label class="col-sm-4 control-label">Race: </label>
                        <div class="col-sm-8">
                            <select class="form-control" name="race">
                                <option value="Human">Human</option>
                                <option value="Orc">Orc</option>
                                <option value="Elf">Elf</option>
                                <option value="Gnome">Gnome</option>
                            </select> 
                        </div>
                    </div>
                    
                    <div class="form-width">
                        <label class="col-sm-4 control-label">Gender: </label>
                        <div class="col-sm-8">
                            <div style="display:inline-block"><input class="form-control" type="radio" name="gender" value="M" checked> Male</div>
                            <div style="display:inline-block"><input class="form-control" type="radio" name="gender" value="F"> Female</div>
                        </div>
                    </div>
                    
                    <div class="form-width">
                        <label class="col-sm-4 control-label">Strength: </label>
                        <div class="col-sm-8">
                            <input type="text" name="strength" maxlength="2" class="form-control" value=""/>
                        </div>
                    </div>
                    
                    <div class="form-width">
                        <label class="col-sm-4 control-label">Dexterity: </label>
                        <div class="col-sm-8">
                            <input type="text" name="dexterity" maxlength="2" class="form-control" value=""/>
                        </div>
                    </div>
                    
                    <div class="form-width">
                        <label class="col-sm-4 control-label">Constitution: </label>
                        <div class="col-sm-8">
                            <input type="text" name="constitution" maxlength="2" class="form-control" value=""/>
                        </div>
                    </div>
                    
                    <div class="form-width">
                        <label class="col-sm-4 control-label">Intelligence: </label>
                        <div class="col-sm-8">
                            <input type="text" name="intelligence" maxlength="2" class="form-control" value=""/>
                        </div>
                    </div>
                    
                    <div class="form-width">
                        <label class="col-sm-4 control-label">Wisdom: </label>
                        <div class="col-sm-8">
                            <input type="text" name="wisdom" maxlength="2" class="form-control" value=""/>
                        </div>
                    </div>
                    
                    <div class="form-width">
                        <label class="col-sm-4 control-label">Charisma: </label>
                        <div class="col-sm-8">
                            <input type="text" name="charisma" maxlength="2" class="form-control" value=""/>
                        </div>
                    </div>
                </div>
                <div class="centering">
                    <br><input class="buttons btn btn-primary" type="submit" value="Submit"/>
                    <br><a class="buttons buttons-top btn btn-primary" href="welcome.php">Return</a>
                </div>
                </form>
            </div>
        </div>
    </body>
</html>
