<?php
    // get the data from the form
    $math = filter_input(INPUT_POST, 'math', FILTER_VALIDATE_FLOAT);
    $physics = filter_input(INPUT_POST, 'physics', FILTER_VALIDATE_FLOAT);
    $chemistry = filter_input(INPUT_POST, 'yechemistryars', FILTER_VALIDATE_FLOAT);

    $avg = ($math + $physics + $chemistry)/3;
    echo number_format($avg,2);

?>