<?php 
    $now = time();
    $exp = '06/2020';

    //change exp format from mm/yyyy to yyyy-mm
    $month = substr($exp,0,2);
    $year = substr($exp,3,4);
    $exp = $year.'-'.$month;

    //set expiration date and calculate the number of days from current date
    $exp = strtotime($exp.' first day of next month midnight');
    $days = floor(($exp - $now) / 86400); // There are 86400 seconds /day

    //Display a message
    if($days < 0){
        echo 'Your card expired '.abs($days).' days ago.';
    }else if($days > 0){
        echo 'Your card expires in '.$days.' days.';
    }else{
        echo 'Your card expires at midnight';
    }
?>