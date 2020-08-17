<?php include 'views/layouts/header.php'; ?>

<div class="content">
    <div class="container">
        <h1>Details of the Courses</h1>

        <p><a href=".?action=course_list" class="btn btn-primary">Course List</a></p>

        <?php if (empty($courseDetails)) : ?>
            <p class="text-danger">No Data.</p>
        <?php else : ?>
        <table class="table table-bordered table-striped">
            <tr>
                <th>enrollmentID</th>
                <th>coursesID</th>
                <th>coursesName</th>
                <th>enrolledFrom</th>
                <th>enrolledTo</th>
                <th>View Student List</th>
            </tr>
            <?php foreach($courseDetails as $key => $courseDetail) : ?>
            <tr>
                <td><?php echo $courseDetail['enrollmentID']; ?></td>
                <td><?php echo $courseDetail['coursesID']; ?></td>
                <td><?php echo $courseName; ?></td>
                <td><?php echo $courseDetail['enrolledFromDate']; ?></td>
                <td><?php echo $courseDetail['enrolledToDate']; ?></td>
                <td><a href=".?action=show_student_list&courses_id=<?php echo $courseDetail['coursesID']; ?>" class="btn btn-success">View Student List</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>


<?php include 'views/layouts/footer.php'; ?>