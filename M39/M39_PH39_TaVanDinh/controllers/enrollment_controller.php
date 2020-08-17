<?php

include 'models/enrollment_model.php';

class EnrollmentController extends EnrollmentModel
{
    public function __construct()
    {
        parent::__construct();

    }

    public function detailCourse()
    {
        $pageTitle = 'Details of the Courses';
        $courseID = filter_input(INPUT_GET, 'courses_id');
        $courseName = filter_input(INPUT_GET, 'coursesName');

        // validate
        if (empty($courseID)) {
            echo 'course id is required.';
            exit();
        }

        // validate OK
        $courseDetails = $this->getDetailCourse($courseID);
        include 'views/courses/course_detail.php';
    }

}