<?php include 'views/layouts/header.php'; ?>

<div class="content">
    <div class="container">
        <h1>Update Category</h1>

        <div class="form-group">
            <label>Category ID</label>
            <input type="text" class="form-control" value="<?php echo $category['categoryID']; ?>" disabled>
        </div>

        <div class="form-group">
            <label>Category Name</label>
            <input type="text" class="form-control" value="<?php echo $category['categoryName']; ?>" disabled>
        </div>

        <div class="form-group">
            <a href=".?action=category_list" class="btn btn-secondary">Category List</a>
        </div>
    </div>
</div>


<?php include 'views/layouts/footer.php'; ?>