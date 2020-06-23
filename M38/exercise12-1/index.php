<?php 
    //start session management with a persistent cookie
    $lifetime = 60*60*24*14;
    session_set_cookie_params($lifetime,'/');
    session_start();

    //Load session from cookie
    if(isset($_COOKIE['session'])){
        $_SESSION['cart12'] = json_decode($_COOKIE['session'],true);
    }
    //Create a cart array if needed
    if (empty($_SESSION['cart12'])){
        $_SESSION['cart12'] = array();
    }
    //Create a table of products
    $products = array();
    $products['MMS-1754'] = array('name' => 'Flute', 'cost' => '149.50');
    $products['MMS-6289'] = array('name' => 'Trumpet', 'cost' => '199.50');
    $products['MMS-3408'] = array('name' => 'Clarinet', 'cost' => '299.50');

    // Include cart functions
    require_once('cart.php');

    //Get the action to perform
    $action = filter_input(INPUT_POST, 'action');
    if($action === NULL){
        $action = filter_input(INPUT_GET, 'action');
        if($action === NULL){
            $action = 'show_add_item';
        }
    }

    //Add or update cart as needed
    switch($action){
        case 'add':
            $product_key = filter_input(INPUT_POST,'productkey');
            $item_qty = filter_input(INPUT_POST, 'itemqty');
            add_item($product_key,$item_qty);
            include('cart_view.php');
            break;
        case 'update':
            $new_qty_list = filter_input(INPUT_POST,'newqty', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
            foreach ($new_qty_list as $key => $qty) {
                if ($_SESSION['cart12'][$key]['qty'] != $qty){
                    update_item($key, $qty);
                }
            }
            include('cart_view.php');
            break;
        case 'show_cart':
            include('cart_view.php');
            break;
        case 'show_add_item':
            include('add_item_view.php');
            break;
        case 'empty_cart':
            if(isset($_SESSION['cart12'])){
                unset($_SESSION['cart12']);
            }
            include('cart_view.php');
            break;
        case 'delete_session_cookie':
            if(isset($_SESSION['cart12'])){
                unset($_SESSION['cart12']);
            }
            $expire = strtotime('-1 year');
            setcookie('session','',$expire,'/');
            setcookie('PHPSESSID', '',$expire, '/');
            include('cart_view.php');
            break;
    }

    //Set cookie
    if(isset($_SESSION['cart12'])){
        $name = 'session';
        $value =  json_encode($_SESSION['cart12']);
        $expire = strtotime('+3 year');
        $path = '/';
        setcookie($name, $value, $expire, $path);
    }
?>