<?php include 'views/layouts/header.php'; ?>

<div class="content">
    <div class="container">
        <h1>Details of the Courses</h1>

        <p><a href=".?action=course_list" class="btn btn-primary">Course List</a></p>

        <?php if (empty($students)) : ?>
            <p class="text-danger">No Data.</p>
        <?php else : ?>
        <table class="table table-bordered table-striped">
            <tr>
                <th>enrollmentID</th>
                <th>coursesID</th>
                <th>studentID</th>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
            </tr>
            <?php foreach($students as $key => $student) : ?>
            <tr>
                <td><?php echo $student['enrollmentID']; ?></td>
                <td><?php echo $student['coursesID']; ?></td>
                <td><?php echo $student['studentID']; ?></td>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['email']; ?></td>
                <td><?php echo $student['phone']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>


<?php include 'views/layouts/footer.php'; ?>