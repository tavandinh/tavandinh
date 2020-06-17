<?php 
    //get the data from the form
    $letter_grade = filter_input(INPUT_POST,'letter');
    switch ($letter_grade){
        case 'A':
            $message = 'well above average';
            break;
        case 'B':
            $message = 'above average';
            break;
        case 'C':
            $message = 'average';
            break;
        case 'D':
            $message = 'below average';
            break;
        case 'F':
            $message = 'failing';
            break;
        default:
            $message = 'invalid grade';
            break;
    }
    echo $message;
    // switch ($average)
    //     case ($average >= 89.5):
    //         $grade = 'A';
    //         break;
    //     case ($average >= 89.5):
    //         $grade = 'A';
    //         break;
    //     case ($average >= 89.5):
    //         $grade = 'A';
    //         break;
    //     case ($average >= 89.5):
    //         $grade = 'D';
    //         break;
    //     default:
    //         $grade = 'F';
    //         break;
?>