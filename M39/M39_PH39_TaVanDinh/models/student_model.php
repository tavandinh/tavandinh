<?php

include_once 'models/connect_database.php';

class StudentModel extends ConnectDatabase
{
    private $connection;

    public function __construct()
    {
        parent::__construct();

        // get connection string from Class ConnectDatabase
        $this->connection = $this->conn;
    }

    public function getStudentOfCourse($courseID)
    {
        try {
            $query = 'select  Enrollment.enrollmentID,Enrollment.coursesID,Student.studentID,Student.name,Student.email,Student.phone from Student JOIN Enrollment ON Student.studentID = Enrollment.studentID where Enrollment.coursesID = :course_id';
            $statement = $this->connection->prepare($query);
            $statement->bindValue(':course_id', $courseID);
            $statement->execute();

            // set mode
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $students = $statement->fetchAll();

            $statement->closeCursor();

            return $students;
        } catch(PDOException $exception) {
            return false;
        }
    }
}