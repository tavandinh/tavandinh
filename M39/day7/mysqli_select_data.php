#mysqli - oo - select data 
<?php 

$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'mysqli_db';

try {
    $db = new mysqli($host, $username, $password, $db_name);
    // echo '<pre>';
    // print_r($db);

    $connection_error = $db->connect_error;
    if ($connection_error != null) {
        echo 'connect fail.';
        exit();
    } else {
        echo 'connect success.';
    }

    $query = "select * from catgories";
    $results = $db->query($query);
    if ($results == false) {
        echo 'error : ' . $db->error;
        exit();
    }

    $row_count = $results->num_rows;
    var_dump('row_count : ' . $row_count);

} catch (Exception $exception) {
    var_dump($exception->getMessage());
}