<?php
    function greatestCommonDivisor(int $a, int $b){
        if($a == $b){
            return $a;
        }else if($a > $b){
            return greatestCommonDivisor($a-$b,$b);
        }else{
            return greatestCommonDivisor($a,$b-$a);
        }
    }
    $a = readline('a: ');
    $b = readline('b: ');
    echo " greatestCommonDivisor is ".greatestCommonDivisor($a,$b).PHP_EOL;
?>