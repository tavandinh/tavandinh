<?php 
    function coin_toss(){
        $coin = (mt_rand(0,1) == 0)?'heads':'fails';
        return $coin;
    }

    //call function
    $result = coin_toss();
    echo 'result:'.$result;

    function add_3_by_ref(&$value){
        $value += 3;
        echo '<p>Number: '.$value.'</p>';
    }
    $number = 5;
    add_3_by_ref($number);
    echo '<p>Number: '.$number.'</p>';

    function array_analyze($array, &$sum, &$prod, &$avg){
        $sum = array_sum($array);
        $prod = array_product($array);
        $avg = $sum/count($array);
    }

    $list = array(1,4,9,16);
    array_analyze($list,$s,$p,$a);
    echo '<p>Sum: '.$s.'<br>Product: '.$p.'<br>Average: '.$a.'</p>';

    $a = 10;
    function show_a(){
        global $a;
        echo $a;
    }
    show_a();
    echo '<br>';

    $a = 12;
    function show_a_2(){
        $a = $GLOBALS['a'];
        echo $a;
    }
    show_a_2();
    echo '<br>';

    function get_rand_bool_text($type = 'coin'){
        $rand = mt_rand(0,1);
        switch ($type){
            case 'coin':
                $result = ($rand == 1) ? 'heads' : 'tails';
                break;
            case 'switch':
                $result = ($rand == 1) ? 'on' : 'off';
                break;
        }
        return $result;
    }
    echo get_rand_bool_text();
    echo '<br>';
    
    Function add(){
        $numbers = func_get_args();
        $total = 0;
        foreach($numbers as $number){
            $total += $number;
        }
        return $total;
    }

    $sum = add(5,10,15);
    echo $sum.'<br>';

?>