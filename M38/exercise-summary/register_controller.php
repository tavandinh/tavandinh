<?php
    //Get form data
    $data = [];
    $data['first_name'] = filter_input(INPUT_POST,'first_name');
    $data['last_name'] = filter_input(INPUT_POST,'last_name');
    $data['user_name'] = filter_input(INPUT_POST,'user_name');
    $data['pass_word'] = filter_input(INPUT_POST,'pass_word');
    $data['birthday'] = filter_input(INPUT_POST,'birthday');
    $data['gender'] = filter_input(INPUT_POST,'gender');
    $data['sport'] = filter_input(INPUT_POST,'sport');
    $data['coffee'] = filter_input(INPUT_POST,'coffee');
    $data['shopping'] = filter_input(INPUT_POST,'shopping');
    $data['research'] = filter_input(INPUT_POST,'research');
    $data['address'] = filter_input(INPUT_POST,'address');
?>