<?php

include 'controllers/category_controller.php';
include 'controllers/product_controller.php';

$action = filter_input(INPUT_GET,'action');

if(empty($action)){
    //check method = POST
    $action = filter_input(INPUT_POST, 'action');

    if (empty($action)){
        $action = 'category_list';
    }
}

$category = new CategoryController();
switch($action) {
    case 'category_list':{
        $category->listCategory();
        break;
    }

    case 'show_detail_category':{
        $category->detailCategory();
        break;
    }

    case 'show_create_category':{
        $category->showCreateCategory();
    }

    case 'hanlde_create_category':{
        $category->handleCreateCategory();
        break;
    }

    case 'show_edit_category': {
        $category->showEditCategory();
        break;
    }
    
    case 'handle_edit_category' : {
        $category->handleEditCategory();
        break;
    }

    case 'handle_delete_category' : {
        $category->handleDeleteCategory();
        break;
    }
}
