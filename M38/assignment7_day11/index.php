<?php
$lifetime = 60 * 60 * 24 * 365;
session_set_cookie_params($lifetime, '/');
session_start();

// import data
require('./model/database.php');
require('./model/account_db.php');

require('./controller/account_controller.php');

//session_start();

// create an object $accountController
$accountController = new AccountController();
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    echo $action;
    if ($action == NULL) {
        $action = 'atm';
    }
}
echo $action;
switch ($action) {
    case 'view_account': {
        // show form detail of account
        $account_no = filter_input(INPUT_GET, 'account_no');
        // check account_no available ?
        if (empty($account_no)) {
            // $account_no is Not OK then will show error message
            $error = 'The account is not available.';
            include 'view/accounts/database_error.php';
        } else {
            // $account_no is OK
            $accountController->detailAccount($account_no);
        }

        break;
    }
    case 'show_login_form': {
        // show form
        $accountController->showLogin();

        break;
    }
    case 'login': {
        // process login
        $accountController->login();

        break;
    }
    case 'show_form_deposit': {
        // process form
        $accountController->showDeposit();

        break;
    }
    case 'deposit': {
        // update data
        $account_no = filter_input(INPUT_POST, 'account_no');
        // check account_no available ?
        if (empty($account_no)) {
            // $account_no is Not OK then will show error message
            $error = 'The account is not available.';
            include 'view/accounts/database_error.php';
        } else {
            // $account_no is OK
            $accountController->deposit($account_no);
        }

        break;
    }
    case 'show_form_transfer': {
        // process form
        $accountController->showTransfer();

        break;
    }
    case 'transfer': {
        $account_no = filter_input(INPUT_POST, 'account_no');
        // check account_no available ?
        if (empty($account_no)) {
            // $account_no is Not OK then will show error message
            $error = 'The account is not available.';
            include 'view/accounts/database_error.php';
        } else {
            // $account_no is OK
            $accountController->transfer($account_no);
        }

        break;
    }
    case 'logout': {
        $accountController->logout();
        
        break;
    }
    default: { // $action == 'atm'
        // show user list
        $accountController->atm();
        echo 'end';
        die();
        
        break;
    }
}
