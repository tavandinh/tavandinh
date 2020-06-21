<?php 
    $now = new DateTime();
    $exp = '04/2020';

    //Change exp from mm/yyyy to yyyy-mm
    $month = substr($exp, 0, 2);
    $year = substr($exp, 3, 4);
    $exp = $year.'-'.$month;

    //Set expiration date and calculate the interval from current date
    $exp = new DateTime($exp.' first day of next month midnight');
    $span = $now->diff($exp);

    //Display a message
    $span_text = $span->format('%y years, %m months, and %d days');
    if ($span->format('%R') == '-'){
        echo 'Your card expired '.$span_text.' ago.';
    }else{
        echo 'Your card expires in '.$span_text.'.';
    }
?>