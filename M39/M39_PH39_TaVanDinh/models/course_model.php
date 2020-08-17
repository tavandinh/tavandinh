<?php

include_once 'models/connect_database.php';

class CourseModel extends ConnectDatabase
{
    private $connection;

    public function __construct()
    {
        parent::__construct();

        // get connection string from Class ConnectDatabase
        $this->connection = $this->conn;
    }

    public function getAllCourse()
    {
        try {
            $query = 'select * from Course';
            $statement = $this->connection->prepare($query);
            $statement->execute();

            // set mode
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $courses = $statement->fetchAll();

            $statement->closeCursor();

            return $courses;
        } catch(PDOException $exception) {
            return false;
        }
    }
}