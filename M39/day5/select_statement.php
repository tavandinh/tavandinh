<?php
include("connect_pdo.php");

//query
try{
    $query = "SELECT * FROM products WHERE categoryID = :categoryID";
    $statement = $db->prepare($query);
    $categoryID = 1;
    $statement->bindValue(':categoryID',$categoryID);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $result = $statement->fetchAll();
    $statement->closeCursor();
    var_dump($result);
}catch(PDOException  $e){
    $error_message = $e->getMessage();
    echo "<p>Error:$error_message</p>";
}