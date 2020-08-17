<?php
include 'controllers/category_controller.php';
include 'controllers/product_controller.php';


// $database = new Database();
// var_dump($database->getConnection());
// die;

// check method = GET
$action = filter_input(INPUT_GET, 'action');

if (empty($action)) {
    // check method = POST
    $action = filter_input(INPUT_POST, 'action');

    if (empty($action)) {
        $action = 'category_list';
    }
}

switch ($action) {
    // category - begin
    case 'category_list': {
        $category = new CategoryController();
        $category->listCategory();
        break;
    }

    case 'show_detail_category': {
        $category = new CategoryController();
        $category->detailCategory();
        break;
    }

    case 'show_create_category': {
        $category = new CategoryController();
        $category->showCreateCategory();
        break;
    }

    case 'handle_create_category' : {
        $category = new CategoryController();
        $category->handleCreateCategory();
        break;
    }

    case 'show_edit_category': {
        $category = new CategoryController();
        $category->showEditCategory();
        break;
    }

    case 'handle_edit_category' : {
        $category = new CategoryController();
        $category->handleEditCategory();
        break;
    }

    case 'handle_delete_category' : {
        $category = new CategoryController();
        $category->handleDeleteCategory();
        break;
    }
    // category - end

    // product begin
    case 'product_list': {
        $product = new ProductController();
        $product->listProduct();
        break;
    }

    case 'show_detail_product': {
        $product = new ProductController();
        $product->detailProduct();
        break;
    }

    case 'show_create_product': {
        $product = new ProductController();
        $product->showCreateProduct();
        break;
    }

    case 'handle_create_product' : {
        $product = new ProductController();
        $product->handleCreateProduct();
        break;
    }

    case 'show_edit_product': {
        $product = new ProductController();
        $product->showEditProduct();
        break;
    }

    case 'handle_edit_product' : {
        $product = new ProductController();
        $product->handleEditProduct();
        break;
    }

    case 'handle_delete_product' : {
        $product = new ProductController();
        $product->handleDeleteProduct();
        break;
    }
    // product end


}

