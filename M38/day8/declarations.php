<?php 
    function display_error(string $error){
        echo '<p class="error">'.$error.'</p>';
    }
    display_error('Test error');

    function avg_of_3(int $x, int $y, int $z):float{
        $avg = ($x + $y + $z)/3;
        return $avg;
    }

    echo avg_of_3(1.1,4.2,3);
?>