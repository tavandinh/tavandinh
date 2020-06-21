<?php 
    $now = new DateTime();
    $new_year = new DateTime('next year Jan 1st');

    //Calculate the days, hours, minutes, and seconds
    $span = $now->diff($new_year);
    $md_left = $span->format('%m months, %d days');
    $hms_left = $span->format('%h:%I:%S');
    
    // Display the count down
    if($now->format('MD') == '0101'){
        echo 'Happy New Year!';
    }else if ($now->format('MD') == '1231'){
        echo "$hms_left remaining to the New Year.";
    }else{
        echo "$md_left, and $hms_left remaining to the New Year.";
    }
?>