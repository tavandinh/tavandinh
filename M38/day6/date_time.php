<?php 
    function is_leap($date){
        return ($date->format('L') == '1');
    }
    $year_2010 = is_leap(new DateTime('2010-1-1')); //false
    $year_2012 = is_leap(new DateTime('2012-1-1')); //true

    echo $year_2010;
    echo $year_2012;

    echo '<br>';

    $now = new DateTime();
    $exp = new DateTime('2020-4 first day of next month midnight');
    if($exp < $now){
        echo 'Your card has expired.';
    }else{
        echo 'Your card has not expired.';
    }
?>