<?php 
    $sum = 0;
    for($i = 0;$i<50;$i++){
        echo $i;
        $sum += $i;
    }
    echo "<br>";
    echo 'sum is'.$sum;
?>