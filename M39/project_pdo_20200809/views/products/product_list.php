<?php include 'views/layouts/header.php'; ?>

<div class="content">
    <div class="container">
        <h1>Product List</h1>

        <p><a href=".?action=show_create_product" class="btn btn-primary">Add Product</a></p>

        <?php if (empty($products)) : ?>
            <p class="text-danger">No Data.</p>
        <?php else : ?>
            <!-- inlude form product search -->
            <?php include './views/products/form_product_search.php'; ?>

            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Product Thumbnail</th>
                    <th>Category Name</th>
                    <th colspan="3">Action</th>
                </tr>
                <?php foreach($products as $key => $product) : ?>
                <tr>
                    <td><?php echo $product['productID']; ?></td>
                    <td><?php echo $product['productName']; ?></td>
                    <td>
                        <img src="<?php echo $product['productThumbnail']; ?>" alt="image" class="img-fluid" style="width: 90px">
                    </td>
                    <td><?php echo $product['categoryName']; ?></td>
                    <td><a href=".?action=show_detail_product&product_id=<?php echo $product['productID']; ?>" class="btn btn-success">Detail Product</a></td>
                    <td><a href=".?action=show_edit_product&product_id=<?php echo $product['productID']; ?>" class="btn btn-primary">Edit Product</a></td>
                    <td>
                        <form action=".?action=handle_delete_product" method="post">
                            <input type="hidden" name="action" value="handle_delete_product">
                            <input type="hidden" name="product_id" value="<?php echo $product['productID']; ?>">
                            <input type="submit" name="submit" value="Delete Product" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>

            <!-- Pagination -->
            <div class="d-flex justify-content-between">
                <div class="p-2">
                    Total: <?php echo isset($productTotal) ? $productTotal : 0; ?> records.
                </div>
                <div class="p-2">
                    <?php if (isset($productTotalPage) && $productTotalPage > 1) : ?>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <?php for($i = 1; $i <= $productTotalPage; $i++) : ?>
                                <li class="page-item <?php echo $pageCurrent == $i ? 'active' : ''; ?>"><a class="page-link" href=".?action=product_list&page=<?php echo $i; ?>&category_id=<?php echo isset($categoryID) ? $categoryID : ''; ?>&product_name_search=<?php echo isset($searchProductName) ? $searchProductName : ''; ?>"><?php echo $i; ?></a></li>
                                <?php endfor; ?>
                            </ul>
                        </nav>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>


<?php include 'views/layouts/footer.php'; ?>