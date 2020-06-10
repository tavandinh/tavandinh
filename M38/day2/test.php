<?php
    $message = "Montha: ";
    $months = 120;
    $message .= $months;
    echo $message."<br>";

    $subtotal = 24.50;
    $subtotal += 75.50;
    $subtotal *= .9;
    echo $subtotal."<br>";

    $nf = number_format(12345.678,2);
    echo $nf."<br>";

    echo date("Y-m-d")."<br>";
    echo date("y/m/d")."1<br>";

    $counter = 1;
    $message = "";
    while($counter <= 8){
        $message = $message.$counter."|";
        $counter++;
    }
    echo $message."<br>";

?>