<?php 
    $numbers1 = range(1,4);
    print_r($numbers1);
    print('<br>');

    $numbers2 = range(10,21,4);
    print_r($numbers2);
    print('<br>');

    $numbers3 = array_merge($numbers1,$numbers2);
    print_r($numbers3);
    print('<br>');

    $numbers4 = array_pad($numbers1, 5, 0);
    print_r($numbers4);
    print('<br>');

    $b = array_fill(-10, 4, 'pear');
    print_r($b);

?>