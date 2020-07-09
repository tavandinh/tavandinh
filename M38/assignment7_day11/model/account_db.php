<?php

class AccountModel
{
    public function checkLogin($account_no, $password)
    {
        $accounts = $_SESSION['accounts'];
        if (!empty($accounts)) {
            foreach ($accounts as $account) {
                if ($account['account_no'] == $account_no && $account['password'] == $password) {
                    return $account;
                }
            }
        }

        return null;
    }

    public function processDeposit($account_no, $amount)
    {
        $accounts = $_SESSION['accounts'];

        if (!empty($accounts)) {
            foreach ($accounts as $key => $account) {
                if ($account['account_no'] == $account_no) {
                    // update amount
                    $account['amount'] = $amount;
                    $accounts[$key] = $account;
                }
            }
        }

        return $_SESSION['accounts'] = $accounts;
    }

    public function processTransfer($account_no, $destination_account_no, $destination_owner_name, $amount)
    {
        $accounts = $_SESSION['accounts'];

        if (!empty($accounts)) {
            foreach ($accounts as $key => $account) {
                if ($account['account_no'] == $destination_account_no && $account['owner_name'] == $destination_owner_name) {
                    // update amount for destination
                    $amountDest = $account['amount'];
                    $account['amount'] = $amount + $amountDest;
                    $accounts[$key] = $account;
                }
            }

            foreach ($accounts as $key => $account) {
                if ($account['account_no'] == $account_no) {
                    // update amount for owner
                    $amountOwner = $account['amount'];
                    $account['amount'] = $amountOwner - $amount;
                    $accounts[$key] = $account;

                    // update data of SESSION login
                    $_SESSION['account_login'] = $account;
                }
            }
        }
        
        return $_SESSION['accounts'] = $accounts;
    }

    public function getDetailAccount($account_no)
    {
        $accounts = $_SESSION['accounts'];
        if (!empty($accounts)) {
            foreach ($accounts as $account) {
                if ($account['account_no'] == $account_no) {
                    return $account;
                }
            }
        }

        return null;
    }




    // public function getUserList() {
    //     $users = $_SESSION['users'];
    //     return $users;
    // }

    // public function addUser($email, $first_name, $last_name)
    // {
    //     $users = $_SESSION['users'];
    //     $user = [
    //         'email' => $email,
    //         'first_name' => $first_name,
    //         'last_name' => $last_name,
    //     ];
    //     $users[] = $user;
    //     return $_SESSION['users'] = $users;
    // }

    // public function updateUser($email, $first_name, $last_name)
    // {
    //     // get all user from SESSION
    //     $users = $_SESSION['users'];

    //     $userUpdate = [
    //         'email' => $email,
    //         'first_name' => $first_name,
    //         'last_name' => $last_name,
    //     ];

    //     if (!empty($users)) {
    //         foreach ($users as $key => $user) {
    //             if ($user['email'] == $email)
    //                 $users[$key] = $userUpdate;
    //         }
    //     }

    //     // update data for SESSION
    //     $_SESSION['users'] = $users;
    // }

    // public function detailUser($email)
    // {
    //     $users = $_SESSION['users'];
    //     if (!empty($users)) {
    //         foreach ($users as $user) {
    //             if ($user['email'] == $email) {
    //                 return $user;
    //             }
    //         }
    //     }

    //     return null;
    // }

    // public function deleteUser($email)
    // {
    //     $users = $_SESSION['users'];
    //     if (!empty($users)) {
    //         foreach ($users as $key => $user) {
    //             if ($user['email'] == $email) {
    //                 unset($users[$key]);
    //             }
    //         }
    //     }
    //     $_SESSION['users'] = $users;
    // }
}
