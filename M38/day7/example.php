<?php 
    $ext = array();
    $ext[10] = 'Sales';
    $ext[13] = 'Customer Service';
    $ext[16] = 'Returns';
    $ext[18] = 'Warehouse';
    $ext[] = 'test';
    $ext['aaa'] = 'test2';
    $ext[] = 'test3';
    unset($ext[20]);
    $ext[] = 'test4';

    foreach($ext as $key=>$value){
        echo 'Key: '.$key.' Value: '.$value.'<br>';
    }

    echo $ext['aaa'];
?>