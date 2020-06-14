<?php
    $n = readline('a: ');
    for($i=1;$i<=$n;$i++){
        for($j=1;$j<=$n-$i;$j++){
            echo " ";
        }
        for($j=1;$j<=$i;$j++){
            echo "*";
        }
        echo PHP_EOL;
    }
?>