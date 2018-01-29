<?php
    require_once 'include/dbconf.php';
    $user_id = $_REQUEST['user'];
    $user = array();
    if($query = $db->prepare('
    SELECT * FROM users WHERE user_id = ?
    ;')){
        $query->bind_param('i',intval($user_id));
        $query->execute();
        $result = $query->get_result();
        $user = $result->fetch_assoc();
    }
?>

!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <form action="update.php" method="post">
            <input type="text" name="id" value="<?php echo $user['user_id']?>" disabled=true/><br>
            <input type="text" name="username" value="<?php echo $user['name'] ?>"/><br>
            <input type="text" name="email" value="<?php echo $user['email'] ?>"/><br>
            <input type="password" name="pwd" placeholder="*****"/><br>
            <input type="submit" value="Muuda"/>
        </form>
    </body>
</html>