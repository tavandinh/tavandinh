<?php
include("connect_pdo.php");

//query
try{
    $query = "INSERT INTO categories (categoryName) VALUES (:categoryName)";
    $statement = $db->prepare($query);
    $categoryName = "car";
    $statement->bindValue(':categoryName',$categoryName);
    $statement->execute();
    // $statement->setFetchMode(PDO::FETCH_ASSOC);
    // $result = $statement->fetchAll();
    $statement->closeCursor();
    // var_dump($result);
}catch(PDOException  $e){
    $error_message = $e->getMessage();
    echo "<p>Error:$error_message</p>";
}