<?php
include("connect_pdo.php");

//query
try{
    $query = "DELETE FROM categories WHERE categoryID = ?";
    $statement = $db->prepare($query);
    // $categoryName = "category 4";
    // $categoryID = 4;
    // $statement->bindValue(':categoryName',$categoryName);
    // $statement->bindValue(':categoryID',$categoryID);
    $parames = [4];
    $statement->execute($parames);
    // $statement->setFetchMode(PDO::FETCH_ASSOC);
    // $result = $statement->fetchAll();
    $statement->closeCursor();
    // var_dump($result);
}catch(PDOException  $e){
    $error_message = $e->getMessage();
    echo "<p>Error:$error_message</p>";
}