<?php
$dns = 'mysql:host=localhost;dbname=my_guitar_shop';
$username = 'homestead';
$password = 'secret';

//connect to DB
try{
    $db = new PDO ($dns,$username,$password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    var_dump($db);
}catch(PDOException  $e){
    $error_message = $e->getMessage();
    echo "<p>Error:$error_message</p>";
}

