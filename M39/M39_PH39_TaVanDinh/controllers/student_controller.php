<?php

include 'models/student_model.php';

class StudentController extends StudentModel
{
    public function __construct()
    {
        parent::__construct();

    }

    public function listStudenOfCourse()
    {
        $pageTitle = 'Student Lis';
        $courseID = filter_input(INPUT_GET, 'courses_id');

        // validate
        if (empty($courseID)) {
            echo 'course id is required.';
            exit();
        }

        // validate OK
        $students = $this->getStudentOfCourse($courseID);
        include 'views/courses/student_list.php';
    }

}