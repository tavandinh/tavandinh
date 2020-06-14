<?php
    // get the data from the form
    $a = filter_input(INPUT_POST, 'a', FILTER_VALIDATE_FLOAT);
    $b = filter_input(INPUT_POST, 'b', FILTER_VALIDATE_FLOAT);
    $c = filter_input(INPUT_POST, 'c', FILTER_VALIDATE_FLOAT);
    if ($a == 0) {
        if ($b == 0) {
            echo ("No x!");
        } else {
            echo ("x = " . (- $c / $b));
        }
        return;
    }
    // delta
    $delta = $b * $b - 4 * $a * $c;
    $x1 = "";
    $x2 = "";
    // calculate x
    if ($delta > 0) {
        $x1 = (- $b + sqrt ( $delta )) / (2 * $a);
        $x2 = (- $b - sqrt ( $delta )) / (2 * $a);
        echo ("x1 = " . $x1 . " and x2 = " . $x2);
    } else if ($delta == 0) {
        $x1 = (- $b / (2 * $a));
        echo ("x1 = x2 = " . $x1);
    } else {
        echo ("No x!");
    }

?>
