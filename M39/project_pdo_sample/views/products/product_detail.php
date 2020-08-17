<?php include 'views/layouts/header.php'; ?>

<div class="content">
    <div class="container">
        <h1>Product Detail</h1>

        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" disabled value="<?php echo $product['productName']; ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Product Description</label>
                        <input type="text" disabled value="<?php echo $product['productDescription']; ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Product Content</label>
                        <textarea disabled rows="10" class="form-control"><?php echo $product['productContent']; ?></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Product Thumbnail</label><br>
                        <img src="<?php echo $product['productThumbnail']; ?>" alt="thumbnail">
                    </div>

                    <div class="form-group">
                        <label>Product Price</label>
                        <input type="text" disabled value="<?php echo $product['productPrice']; ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Category</label>
                        <select disabled class="form-control">
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
            </div>
        </div>
    </div>
</div>


<?php include 'views/layouts/footer.php'; ?>
