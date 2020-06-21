<?php 
    $now = time();
    $new_year = strtotime('next year Jan 1st'.$now);

    //Calculate the days, hours, minutes, and seconds
    $seconds = $new_year - $now;
    $days = floor($seconds / 86400);
    $seconds -= $days * 86400;
    $hours = floor($seconds / 3600);
    $seconds -= $hours * 3600;
    $minutes = floor($seconds / 60);
    $seconds -= $minutes * 60;
    
    // Display the count down
    echo "$days days and $hours:$minutes:$seconds remaining to the New Year.";
?>