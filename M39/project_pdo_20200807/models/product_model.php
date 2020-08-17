<?php

include_once 'models/connect_database.php';

class ProductModel extends ConnectDatabase
{
    private $connection;

    public function __construct()
    {
        parent::__construct();

        // get connection string from Class ConnectDatabase
        $this->connection = $this->conn;
    }

    public function getAllProduct($categoryID = null)
    {
        try {
            $query = 'select * from products left join categories on categories.categoryID = products.categoryID';

            if ($categoryID) {
                $query .= ' where categoryID = :category_id';
            }

            $statement = $this->connection->prepare($query);

            if ($categoryID) {
                $statement->bindValue(':category_id', $categoryID);
            }

            $statement->execute();

            // set mode
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $products = $statement->fetchAll();

            $statement->closeCursor();

            return $products;
        } catch(PDOException $exception) {
            return false;
        }
    }

    public function getSingleProduct($productID)
    {
        try {
            $query = 'select * from products left join categories on categories.categoryID = products.categoryID where productID = :product_id';
            $statement = $this->connection->prepare($query);
            $statement->bindValue(':product_id', $productID);
            $statement->execute();

            // set mode
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $product = $statement->fetch();

            $statement->closeCursor();

            return $product;
        } catch(PDOException $exception) {
            return false;
        }
    }

    public function insertProduct($productName, $productDescription, $productContent, $productPrice, $productThumbnail, $categoryID)
    {
        try {
            // echo "test";
            // die;
            $query = "INSERT INTO products (productName, productDescription, productContent, productPrice, productThumbnail, categoryID) VALUES (:product_name, :product_description, :product_content, :product_price, :product_thumbnail, :category_id)";
            
            $statement = $this->connection->prepare($query);
            $statement->bindValue(':product_name', $productName);
            $statement->bindValue(':product_description', $productDescription);
            $statement->bindValue(':product_content', $productContent);
            $statement->bindValue(':product_price', $productPrice);
            $statement->bindValue(':product_thumbnail', $productThumbnail);
            $statement->bindValue(':category_id', $categoryID);
            $check = $statement->execute();
            
            $statement->closeCursor();

            var_dump($check);die;
            return true;
        } catch(PDOException $exception) {
            var_dump($exception->getMessage());die;
            return false;
        }
    }

    public function updateProduct($productID, $productName, $productDescription, $productContent, $productPrice, $productThumbnail, $categoryID)
    {
        try {
            $query = "UPDATE products set productName = :product_name, productDescription = :product_description,
                        productContent = :product_content, productPrice = :product_price,
                        productThumbnail = :product_thumbnail, categoryID = :category_id
            
            where productID = :product_id";

            $statement = $this->connection->prepare($query);
            $statement->bindValue(':product_id', $productID);
            $statement->bindValue(':product_name', $productName);
            $statement->bindValue(':product_description', $productDescription);
            $statement->bindValue(':product_content', $productContent);
            $statement->bindValue(':product_price', $productPrice);
            $statement->bindValue(':product_thumbnail', $productThumbnail);
            $statement->bindValue(':category_id', $catecategoryID);   

            $statement->execute();
            
            $statement->closeCursor();

            return true;
        } catch(PDOException $exception) {
            var_dump($exception->getMessage());die;
            return false;
        }
    }

    public function deleteProduct($productID)
    {
        try {
            $query = "DELETE FROM products WHERE productID = :product_id";

            $statement = $this->connection->prepare($query);
            $statement->bindValue(':product_id', $productID);
            
            $statement->execute();
            
            $statement->closeCursor();

            return true;
        } catch(PDOException $exception) {
            return false;
        }
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
        } catch(PDOException $exception) {
            return false;
        }
    }
}