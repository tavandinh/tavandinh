<?php
    // get the data from the form
    $numbers = filter_input(INPUT_POST, 'numbers', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);

    //create message
    $input_message = '';
    $output_message = '';
    $min = INF;
    $max = -INF;
    foreach ($numbers as $key => $number) {
        $key = $key + 1;
        //create input message
        $input_message .= "Number $key: $number".PHP_EOL;

        //create ouput message
        if(0 < abs($number) and  abs($number) < 1){
            $number_round = round($number,3);
            $output_message .= "Number $key rounded: $number_round".PHP_EOL;
        }else if($number - floor($number) != 0){
            $number_ceil = ceil($number);
            $number_floor = floor($number);
            $output_message .= "Number $key ceiling: $number_ceil".PHP_EOL;
            $output_message .= "Number $key floor: $number_floor".PHP_EOL;
        }

        //Find min
        if($number < $min){
            $min = $number;
        }
        //find max
        if($number > $max){
            $max = $number;
        }
    }
    //random
    $random = rand(1,100);
    $message = $input_message.PHP_EOL.$output_message.PHP_EOL."Min: $min".PHP_EOL."Max: $max".PHP_EOL.PHP_EOL."Random: $random";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change number</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div id="content">
        <h1>Change number</h1>
        <div id="data">
            <?php 
                if(isset($message)){
                    echo nl2br($message);
                }
            ?>                
        </div>
    </div>   
</body>
</html>