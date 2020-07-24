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


}

