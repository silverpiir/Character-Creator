<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'db_user');
    define('DB_PASSWORD', 'Tere12345');
    define('DB_NAME', 'rpg');
     
    /* Attempt to connect to MySQL database */
    $mysqli = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
     
    // Check connection
    if($mysqli === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>