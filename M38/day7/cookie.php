<?php 
    $name = 'userid';
    $value = 'rharris';
    $expire = strtotime('+2 year');
    $path = '/';
    setcookie($name, $value, $expire, $path);
    // sleep(1);
    $userid = $_COOKIE['userid'];
    echo $userid;
    $expire = strtotime('-1 year');
    setcookie('userid','',$expire,'/');
?>