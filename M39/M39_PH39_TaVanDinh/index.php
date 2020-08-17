<?php
include 'controllers/course_controller.php';
include 'controllers/enrollment_controller.php';
include 'controllers/student_controller.php';

// check method = GET
$action = filter_input(INPUT_GET, 'action');

if (empty($action)) {
    // check method = POST
    $action = filter_input(INPUT_POST, 'action');

    if (empty($action)) {
        $action = 'course_list';
    }
}
switch ($action) {
    case 'course_list': {
        $course = new CourseController();
        $course->listCourse();
        break;
    }

    case 'show_detail_course': {
        $enrollment = new EnrollmentController();
        $enrollment->detailCourse();
        break;
    }

    case 'show_student_list': {
        $student = new StudentController();
        $student->listStudenOfCourse();
        break;
    }
}

