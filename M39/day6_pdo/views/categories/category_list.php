<?php include 'views/layouts/header.php'; ?>

<div class="content">
    <div class="container">
        <h1>Category List</h1>

        <p><a href=".?action=show_create_category" class="btn btn-primary">Add Category</a></p>

        <?php if (empty($categories)) : ?>
            <p class="text-danger">No Data.</p>
        <?php else : ?>
        <table class="table table-bordered table-striped">
            <tr>
                <th>Category ID</th>
                <th>Category Name</th>
                <th>Product List</th>
                <th colspan="3">Action</th>
            </tr>
            <?php foreach($categories as $key => $category) : ?>
            <tr>
                <td><?php echo $category['categoryID']; ?></td>
                <td><?php echo $category['categoryName']; ?></td>
                <td></td>
                <td><a href=".?action=show_detail_category&category_id=<?php echo $category['categoryID']; ?>" class="btn btn-success">Detail Category</a></td>
                <td><a href=".?action=show_edit_category&category_id=<?php echo $category['categoryID']; ?>" class="btn btn-primary">Edit Category</a></td>
                <td>
                    <form action=".?action=handle_delete_category" method="post">
                        <input type="hidden" name="action" value="handle_delete_category">
                        <input type="hidden" name="category_id" value="<?php echo $category['categoryID']; ?>">
                        <input type="submit" name="submit" value="Delete Category" class="btn btn-danger">
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>


<?php include 'views/layouts/header.php'; ?>