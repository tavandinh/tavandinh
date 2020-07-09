<?php 

$accounts = [
	[
		'account_no' => '900',
		'owner_name' => 'Account 900',
        'amount' => '100000',
        'account_type' => '1',
        'password' => '123456',
	],
    [
		'account_no' => '901',
		'owner_name' => 'Account 901',
        'amount' => '200000',
        'account_type' => '2',
        'password' => '123456',
    ],
    [
		'account_no' => '902',
		'owner_name' => 'Account 902',
        'amount' => '300000',
        'account_type' => '2',
        'password' => '123456',
    ],
    [
		'account_no' => '903',
		'owner_name' => 'Account 903',
        'amount' => '400000',
        'account_type' => '1',
        'password' => '123456',
    ],
    [
		'account_no' => '904',
		'owner_name' => 'Account 904',
        'amount' => '500000',
        'account_type' => '2',
        'password' => '123456',
	],
];
$_SESSION['accounts'] = $accounts;
?>