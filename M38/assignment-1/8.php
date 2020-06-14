<?php 
$month = readline('Month: '); 
if ($month>12 or $month<1 ){
    echo 'error'.PHP_EOL;
}else{
    echo cal_days_in_month(CAL_GREGORIAN,$month,date("Y")).PHP_EOL;
}
?> 