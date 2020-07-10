<?php
$lifetime = 60 * 60 * 24 * 365;
session_set_cookie_params($lifetime, '/');
require('./model/customers.php');
require('./controller/customersController.php');
session_start();

// create an object $accountController
$customersController = new customersController();
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list';
    }
}
switch ($action) {
    case 'list': {
        $customersController->showList();
        break;
    }
    case 'show_add_form': {
        $customersController->showAddForm();

        break;
    }
    case 'add_customer': {
        $customersController->addCustomer();
        break;
    }
    case 'delete_customer': {
        $id = filter_input(INPUT_GET, 'id');
        $customersController->deleteCustomer($id);
        break;
    }
    case 'search_by_name': {
        $customersController->searchByName();
        break;
    }
    default: {  
        break;
    }
}