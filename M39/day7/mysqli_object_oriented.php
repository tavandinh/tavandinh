<?php 

$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'mysqli_db';

try {
    $db = new mysqli($host, $username, $password, $db_name);
    echo '<pre>';
    print_r($db);
} catch (Exception $exception) {
    var_dump($exception->getMessage());
}