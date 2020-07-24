<?php

include 'models/category_model.php';

class CategoryController extends CategoryModel
{
    public function __construct()
    {
        parent::__construct();


    }

    public function listCategory()
    {
        $categories = $this->getAllCategory();
        
        include 'views/categories/category_list.php';
        exit();
    }

    public function detailCategory()
    {
        $categoryID = filter_input(INPUT_GET, 'category_id');

        // validate
        if (empty($categoryID)) {
            echo 'category id is required.';
            exit();
        }

        // validate OK
        $category = $this->getSingleCategory($categoryID);
        include 'views/categories/category_detail.php';
    }

    public function showCreateCategory()
    {
        include 'views/categories/category_create.php';
        exit();
    }

    public function handleCreateCategory()
    {
        $categoryName = filter_input(INPUT_POST, 'category_name');
        $result = $this->insertCategory($categoryName);

        if ($result) {
            // insert success
            header('Location: .?action=category_list');
            exit();
        } else {
            // insert fail
            echo 'insert fail';
            exit();
        }
    }

    public function showEditCategory()
    {
        $categoryID = filter_input(INPUT_GET, 'category_id');

        // validate
        if (empty($categoryID)) {
            echo 'category id is required.';
            exit();
        }

        // validate OK
        $category = $this->getSingleCategory($categoryID);
        include 'views/categories/category_edit.php';
    }

    public function handleEditCategory()
    {
        $categoryID = filter_input(INPUT_POST, 'category_id');
        $categoryName = filter_input(INPUT_POST, 'category_name');

        // validate
        if (empty($categoryID)) {
            echo 'category id is required.';
            exit();
        }

        // validate
        if (empty($categoryName)) {
            echo 'category Name is required.';
            exit();
        }

        // validate OK
        $result = $this->updateCategory($categoryID, $categoryName);

        if ($result) {
            // update success
            header('Location: .?action=category_list');
            exit();
        } else {
            // update fail
            echo 'update fail';
            exit();
        }
    }

    public function handleDeleteCategory()
    {
        $categoryID = filter_input(INPUT_POST, 'category_id');

        // validate
        if (empty($categoryID)) {
            echo 'category id is required.';
            exit();
        }

        // validate OK
        $result = $this->deleteCategory($categoryID);

        if ($result) {
            // update success
            header('Location: .?action=category_list');
            exit();
        } else {
            // update fail
            echo 'delete fail';
            exit();
        }
    }

}