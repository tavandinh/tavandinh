<?php 

    //phpinfo();
    $lifetime = 60*60*24*365;
    session_set_cookie_params($lifetime,'/');
    session_start();
    $_SESSION['product_code'] = 'MBT-1753';
    $product_code = $_SESSION['product_code'];
    echo $product_code;
    session_destroy();
?>