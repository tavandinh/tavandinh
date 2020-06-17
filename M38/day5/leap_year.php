<?php 
    //get the data from the form
    $year = filter_input(INPUT_POST,'year',FILTER_VALIDATE_INT);
    if($year === false){
        return;
    }

    // calculate the discount
    $is_leap_year = false;
    if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
        $is_leap_year = true;
    }else{
        $is_leap_year = false;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Discount Calculator </title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div id="content">
        <h1>Leap Year Calculator</h1>
        <span><?php 
        if($is_leap_year){
            echo 'a leap year';
        }else{
            echo 'not a leap year';
        };?></span><br>

        <label>&nbsp;</label>
        <button onclick="history.go(-1);">Back </button> <br>
    </div>
    
</body>
</html>