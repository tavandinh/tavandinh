<?php
    // get the data from the form
    $a = filter_input(INPUT_POST, 'a', FILTER_VALIDATE_FLOAT);
    $b = filter_input(INPUT_POST, 'b', FILTER_VALIDATE_FLOAT);
    if($a!=0){
        $x = -$b/$a;
        echo number_format($x,2);
    }else{
        echo 'x must # 0';
    }

?>
