<?php
    //Get form data
    $data = [];
    $data['name'] = trim(filter_input(INPUT_POST,'name'));
    $data['email'] = trim(filter_input(INPUT_POST,'email'));
    $data['phone'] = filter_input(INPUT_POST,'phone');
    
    //create message
    $lower_name = strtolower($data['name']);
    $name = ucwords($lower_name);
    $list_name = explode(" ",$name);
    $first_name = $list_name[0];
    $email = $data['email'];
    $phone = substr($data['phone'],0,3).'-'.substr($data['phone'],3,3).'-'.substr($data['phone'],6,strlen($data['phone'])-6);

    $message = <<<MESSAGE
    Hello $first_name,
    \n
    Thank you for entering this data:
    \n
    Name: $name
    Email: $email
    Phone: $phone
    MESSAGE;
?>