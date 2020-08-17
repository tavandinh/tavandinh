<?php

include_once 'models/connect_database.php';

class EnrollmentModel extends ConnectDatabase
{
    private $connection;

    public function __construct()
    {
        parent::__construct();

        // get connection string from Class ConnectDatabase
        $this->connection = $this->conn;
    }

    public function getDetailCourse($courseID)
    {
        try {
            $query = 'select * from Enrollment where coursesID = :course_id';
            $statement = $this->connection->prepare($query);
            $statement->bindValue(':course_id', $courseID);
            $statement->execute();

            // set mode
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $courseDetails = $statement->fetchAll();

            $statement->closeCursor();

            return $courseDetails;
        } catch(PDOException $exception) {
            return false;
        }
    }
}