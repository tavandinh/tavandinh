<?php include 'views/layouts/header.php'; ?>

<div class="content">
    <div class="container">
        <h1>List All Courses</h1>

        <?php if (empty($courses)) : ?>
            <p class="text-danger">No Data.</p>
        <?php else : ?>
        <table class="table table-bordered table-striped">
            <tr>
                <th>coursesID</th>
                <th>coursesName</th>
                <th>View Details</th>
            </tr>
            <?php foreach($courses as $key => $course) : ?>
            <tr>
                <td><?php echo $course['coursesID']; ?></td>
                <td><?php echo $course['coursesName']; ?></td>
                <td><a href=".?action=show_detail_course&courses_id=<?php echo $course['coursesID']; ?>&courses_name=<?php echo $course['coursesName']; ?>" class="btn btn-success">ViewDetails</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>


<?php include 'views/layouts/footer.php'; ?>