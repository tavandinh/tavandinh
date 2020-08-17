<?php

include 'models/course_model.php';

class CourseController extends CourseModel
{
    public function __construct()
    {
        parent::__construct();

    }

    public function listCourse()
    {
        $pageTitle = 'List All Courses';
        $courses = $this->getAllCourse();
        
        include 'views/courses/course_list.php';
        exit();
    }
}