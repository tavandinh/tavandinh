<?php 
    $names = array('Mke','Joel','Anne');
    array_push($names, 'Ray');
    $next = array_pop($names);
    echo $next;
    array_push($names, 'Ray2');
    print_r($names);

    $next = array_shift($names);
    array_unshift($names, 'Ray3');
    print_r($names);
?>