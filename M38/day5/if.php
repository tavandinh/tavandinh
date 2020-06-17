<?php 
    // if($average >= 89.5){
    //     $grade = 'A';
    // }else if ($average >= 79.5){
    //     $grade = 'B';
    // }else if ($average >= 69.5){
    //     $grade = 'C';
    // }else if ($average >= 64.5){
    //     $grade = 'D';
    // }else{
    //     $grade = 'F';
    // }
    $value = 70; $min = 40; $max = 60;
    $value = ($value > $max) ? $max : (($value < $min) ? $min : $value);
    echo $value;
?>