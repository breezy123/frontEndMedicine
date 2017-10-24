<?php

$db_hostname = 'localhost';


$db_dbname   = 'pharmacy';

$db_username = 'root';

$db_password = '';

$db_charset = 'utf8';



try {
    $dbh = new PDO("mysql:host=$db_hostname;dbname=pharmacy", $db_username, $db_password);
    /*** echo a message saying we have connected ***/
    // echo 'Connected to database! </br>';


    }
catch(PDOException $e)
    {
    echo "Error!:". $e->getMessage() . "<br/>";
    die();
    }
 ?>