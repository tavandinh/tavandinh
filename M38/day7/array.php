<?php 
    $times_table = array();
    for($i=0;$i <= 12;$i++){
        $times_table[$i] = array();
    }

    for($i=0;$i<=12;$i++){
        for($j=0;$j<=12;$j++){
            $times_table[$i][$j] = $i*$j;
        }
    }

    echo $times_table[4][3];
    echo $times_table[7][6];
    print_r($times_table);
?>