<form action=".?action=product_list" method="get">
    <input type="hidden" name="action" value="product_list">
    <div class="d-flex justify-content-start mb-3 border border-1">
        <div class="p-2">
            <label>Product Name</label>
        </div>
        <div class="p-2">
            <input type="text" value="<?php echo isset($searchProductName) ? $searchProductName : ''; ?>" name="product_name_search" class="form-control">
        </div>
        <div class="p-2">
            <input type="submit" value="Search" name="search" class="btn btn-primary">
        </div>
    </div>

</form>