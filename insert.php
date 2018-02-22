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
                                <option value="Artificer">Artificer</option>
                                <option value="Barbarian">Barbarian</option>
                                <option value="Bard">Bard</option>
                                <option value="Cleric">Cleric</option>
                                <option value="Druid">Druid</option>
                                <option value="Fighter">Fighter</option>
                                <option value="Monk">Monk</option>
                                <option value="Mystic">Mystic</option>
                                <option value="Paladin">Paladin</option>
                                <option value="Ranger">Ranger</option>
                                <option value="Rogue">Rogue</option>
                                <option value="Sorcerer">Sorcerer</option>
                                <option value="Warlock">Warlock</option>
                                <option value="Wizard">Wizard</option>
                            </select> 
                        </div>
                    </div>
                    
                    <div class="form-width">
                        <label class="col-sm-4 control-label">Race: </label>
                        <div class="col-sm-8">
                            <select class="form-control" name="race">
                                <option value="Aasimar">Aasimar</option>
                                <option value="Bugbear">Bugbear</option>
                                <option value="Dragonborn">Dragonborn</option>
                                <option value="Dwarf">Dwarf</option>
                                <option value="Elf">Elf</option>
                                <option value="Firbolg">Firbolg</option>
                                <option value="Genasi">Genasi</option>
                                <option value="Gnome">Gnome</option>
                                <option value="Goblin">Goblin</option>
                                <option value="Goliath">Goliath</option>
                                <option value="Half-Elf">Half-Elf</option>
                                <option value="Half-Orc">Half-Orc</option>
                                <option value="Halfling">Halfling</option>
                                <option value="Hobgoblin">Hobgoblin</option>
                                <option value="Human">Human</option>
                                <option value="Kenku">Kenku</option>
                                <option value="Kobold">Kobold</option>
                                <option value="Lizardfolk">Lizardfolk</option>
                                <option value="Orc">Orc</option>
                                <option value="Tabaxi">Tabaxi</option>
                                <option value="Tiefling">Tiefling</option>
                                <option value="Tortle">Tortle</option>
                                <option value="Triton">Triton</option>
                                <option value="Yuan-Ti Pureblood">Yuan-Ti Pureblood</option>
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
                    <br><a class="buttons buttons-top btn btn-primary" href="index.php">Return</a>
                </div>
                </form>
            </div>
            <div class="footer centering">
            <p>
                <a href="https://github.com/silverpiir" target="_blank"><img src="img/github.png" /></a>
                <a href="https://www.linkedin.com/in/silver-piir-b1a149146/" target="_blank"><img src="img/linkedin-logo.png" /></a>
                <a href="mailto:silverpiir@gmail.com"><img src="img/mail.png" /></a>
            </p>
            <p>2018 Silver Piir.</p>
        </div>
        </div>
    </body>
</html>
