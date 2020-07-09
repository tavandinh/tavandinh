<?php

class AccountController extends AccountModel
{
    public function atm()
    {
        // check this account is Login ? yes or no
        if(isset($_SESSION['account_login'])){
            $account_login = $_SESSION['account_login'];
        }else{
            $account_login = NULL;
        }
        
        if (empty($account_login)){
            header("Location: .?action=show_login_form");
        }


        $account_no = $account_login['account_no'];
        $owner_name = $account_login['owner_name'];
        $amount = $account_login['amount'];
        $account_type = $account_login['account_type'];

        include('view/accounts/atm.php');
    }
    
    public function showLogin()
    {
        // check this account is Login ? yes or no
        if(isset($_SESSION['account_login'])){
            $account_login = $_SESSION['account_login'];
        }else{
            $account_login = NULL;
        }
        if (!empty($account_login))
            header("Location: .?action=atm");

        include('view/accounts/login.php');
    }

    public function login()
    {
        $account_no = filter_input(INPUT_POST, 'account_no');
        $password = filter_input(INPUT_POST, 'password');

        $isOK = true;

        // validate account_no
        if (empty($account_no)) {
            $account_no_error = 'The account_no is required.';
            $isOK = false;
        }

        // validate password
        if (empty($password)) {
            $password_error = 'The password is required.';
            $isOK = false;
        }

        // check if $isOK = FALSE then show error form
        if ($isOK == false) {
            include 'view/accounts/login.php';
        } else {
            $account_login = $this->checkLogin($account_no, $password);

            if (empty($account_login)) {
                $login_error = 'The account no or password is not exists.';
                include 'view/accounts/login.php';
            } else {
                $_SESSION['account_login'] = $account_login;
                header("Location: .?action=atm");
            }
        }
    }

    public function showDeposit()
    {
        // check this account is Login ? yes or no
        $account_login = $_SESSION['account_login'];
        if (empty($account_login))
            header("Location: .?action=show_login_form");

        include('view/accounts/deposit.php');
    }

    public function deposit($account_no)
    {
        $amount = filter_input(INPUT_POST, 'amount');

        $isOK = true;

        // validate account_no
        if (empty($account_no)) {
            $account_no_error = 'The account no is required.';
            $isOK = false;
        }

        // validate amount is required
        if (empty($amount)) {
            $amount_error = 'The amount is required.';
            $isOK = false;
        } else {
            // validate amount is numeric
            if (!is_numeric($amount)) {
                $amount_error = 'The amount is not a numeric.';
                $isOK = false;
            }
        }

        // check if $isOK = FALSE then show error form
        if ($isOK == false) {
            include 'view/accounts/deposit.php';
        } else {
            $this->processDeposit($email, $first_name, $last_name);
            $message_success = 'Successful Deposit!';
            header("Location: .?action=atm");
        }
    }

    public function showTransfer()
    {
        // check this account is Login ? yes or no
        $account_login = $_SESSION['account_login'];
        if (empty($account_login))
            header("Location: .?action=show_login_form");

        $account_no = $account_login['account_no'];
        $owner_name = $account_login['owner_name'];
        $amount = $account_login['amount'];
        $account_type = $account_login['account_type'];

        include('view/accounts/transfer.php');
    }

    public function transfer($account_no)
    {
        // check this account is Login ? yes or no
        $account_login = $_SESSION['account_login'];
        if (empty($account_login))
            header("Location: .?action=show_login_form");


        $destination_account_no = filter_input(INPUT_POST, 'destination_account_no');
        $destination_owner_name = filter_input(INPUT_POST, 'destination_owner_name');
        $destination_amount = filter_input(INPUT_POST, 'destination_amount');

        $isOK = true;

        // validate account_no
        if (empty($account_no)) {
            $account_no_error = 'The Account No is required.';
            $isOK = false;
        }

        // validate destination_account_no
        if (empty($destination_account_no)) {
            $destination_account_no_error = 'The Destination Account No is required.';
            $isOK = false;
        }

        // validate destination_owner_name
        if (empty($destination_owner_name)) {
            $destination_owner_name = 'The Destination Owner Name is required.';
            $isOK = false;
        }

        // validate destination_amount
        if (empty($destination_amount)) {
            $destination_amount_error = 'The Destination Amount is required.';
            $isOK = false;
        } else {
            // check destination_amount is number
            if (!is_numeric($destination_amount)) {
                $destination_amount_error = 'The Destination Amount is not a number.';
                $isOK = false;
            }
        }

        // check if $isOK = FALSE then show error form
        if ($isOK == false) {
            include 'view/accounts/transfer.php';
        } else {
            $this->processTransfer($account_no, $destination_account_no, $destination_owner_name, $destination_amount);
            $message_success = 'Successful Transfer!';
            header("Location: .?action=atm");
        }
    }

    public function detailAccount($account_no)
    {
        // check this account is Login ? yes or no
        $account_login = $_SESSION['account_login'];
        if (empty($account_login))
            header("Location: .?action=show_login_form");
  
        $account_no = $account_login['account_no'];
        $owner_name = $account_login['owner_name'];
        $amount = $account_login['amount'];
        $account_type = $account_login['account_type'];

        include "view/accounts/view_account.php"; 
    }

    public function logout()
    {
        unset($_SESSION['account_login']);
        
        header("Location: .?action=atm");
    }
}