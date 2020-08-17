<?php include 'views/layouts/header.php'; ?>

<div class="content">
    <div class="container">
        <h1>Add Product</h1>

        <div class="form-group">
            <form action=".?action=handle_create_product" method="post" enctype="multipart/form-data">
                <input type="hidden" name="action" value="handle_create_product">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="product_name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Product Description</label>
                            <input type="text" name="product_description" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Product Content</label>
                            <textarea name="product_content" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Product Thumbnail</label>
                            <input type="file" name="product_thumbnail" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Product Price</label>
                            <input type="text" name="product_price" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" class="form-control">
                                <?php if (!empty($categories)) : ?>
                                    <?php foreach ($categories as $category) : ?>
                                        <option value="<?php echo $category['categoryID']; ?>"><?php echo $category['categoryName']; ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <a href=".?action=category_list" class="btn btn-secondary">Category List</a>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php include 'views/layouts/footer.php'; ?>