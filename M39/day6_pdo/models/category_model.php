<?php

include 'models/connect_database.php';

class CategoryModel extends ConnectDatabase
{
    private $connection;

    public function __construct()
    {
        parent::__construct();

        // get connection string from Class ConnectDatabase
        $this->connection = $this->conn;
    }

    public function getAllCategory()
    {
        try {
            $query = 'select * from categories';
            $statement = $this->connection->prepare($query);
            $statement->execute();

            // set mode
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $categories = $statement->fetchAll();

            $statement->closeCursor();

            return $categories;
        } catch(Exception $exception) {
            return false;
        }
    }

    public function getSingleCategory($categoryID)
    {
        try {
            $query = 'select * from categories where categoryID = :category_id';
            $statement = $this->connection->prepare($query);
            $statement->bindValue(':category_id', $categoryID);
            $statement->execute();

            // set mode
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $category = $statement->fetch();

            $statement->closeCursor();

            return $category;
        } catch(Exception $exception) {
            return false;
        }
    }

    public function insertCategory($categoryName)
    {
        try {
            $query = "INSERT INTO categories (categoryName) VALUES (:category_name)";
            $statement = $this->connection->prepare($query);
            $statement->bindValue(':category_name', $categoryName);
            $statement->execute();
            
            $statement->closeCursor();

            return true;
        } catch(Exception $exception) {
            var_dump($exception->getMessage());die;
            return false;
        }
    }

    public function updateCategory($categoryID, $categoryName)
    {
        try {
            $query = "UPDATE categories set categoryName = :category_name where categoryID = :category_id";

            $statement = $this->connection->prepare($query);
            $statement->bindValue(':category_name', $categoryName);
            $statement->bindValue('category_id', $categoryID);    

            $statement->execute();
            
            $statement->closeCursor();

            return true;
        } catch(Exception $exception) {
            var_dump($exception->getMessage());die;
            return false;
        }
    }

    public function deleteCategory($categoryID)
    {
        try {
            $query = "DELETE FROM categories WHERE categoryID = :category_id";

            $statement = $this->connection->prepare($query);
            $statement->bindValue(':category_id', $categoryID);
            
            $statement->execute();
            
            $statement->closeCursor();

            return true;
        } catch(Exception $exception) {
            return false;
        }
    }
}