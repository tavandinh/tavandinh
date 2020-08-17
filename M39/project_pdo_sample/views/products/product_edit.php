<?php include 'views/layouts/header.php'; ?>

<div class="content">
    <div class="container">
        <h1>Update Product</h1>

        <div class="form-group">
            <form action=".?action=handle_edit_product" method="post" enctype="multipart/form-data">
                <input type="hidden" name="action" value="handle_edit_product">
                <input type="hidden" name="product_id" value="<?php echo $product['productID']; ?>">
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="product_name" value="<?php echo $product['productName']; ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Product Description</label>
                            <input type="text" name="product_description" value="<?php echo $product['productDescription']; ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Product Content</label>
                            <textarea name="product_content" rows="10" class="form-control"><?php echo $product['productContent']; ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Product Thumbnail</label>
                            <input type="file" name="product_thumbnail" class="form-control">
                            <img src="<?php echo $product['productThumbnail']; ?>" alt="thumbnail">
                        </div>

                        <div class="form-group">
                            <label>Product Price</label>
                            <input type="text" name="product_price" value="<?php echo $product['productPrice']; ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" class="form-control">
                                <?php if (!empty($categories)) : ?>
                                    <?php foreach ($categories as $category) : ?>
                                        <option value="<?php echo $category['categoryID']; ?>" <?php echo $product['categoryID'] == $category['categoryID'] ? 'selected' : ''; ?>><?php echo $category['categoryName']; ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <a href=".?action=product_list" class="btn btn-secondary">Product List</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php include 'views/layouts/footer.php'; ?>
