<?php 
    //get radio button
    $radio_data = filter_input(INPUT_POST,'radio_data');
    if(!isset($radio_data)){
        $radio_data = 'Unknown';
    }

    //get checkbox
    $check_box = filter_input(INPUT_POST,'check_box');
    if(!isset($check_box)){
        $check_box = 'No';
    }

    //get text
    $text = filter_input(INPUT_POST,'text');

    //get comment
    $comment = filter_input(INPUT_POST,'comment');
    // $product_description = filter_input(INPUT_POST,'product_description');
    // $list_price = filter_input(INPUT_POST,'list_price');
    // $discount_percent = filter_input(INPUT_POST,'discount_percent');

    // // calculate the discount
    // $discount = $list_price * $discount_percent * .01;
    // $discount_price = $list_price - $discount;

    // //apply currency formatting to the dollar and percent amount
    // $list_price_formatted = '$'.number_format($list_price,2);
    // $discount_percent_formatted = $discount_percent.'%';
    // $discount_formatted = '$'.number_format($discount,2);
    // $discount_price_formatted = '$'.number_format($discount_price,2);
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
        <h1>Input data</h1>
        <div id="data">
            <label class="left_label">Radio button:</label>
            <span><?php echo $radio_data; ?></span><br>

            <label class="left_label">Checkbox:</label>
            <span><?php echo $check_box; ?></span><br>

            <label class="left_label">Text:</label>
            <span><?php echo htmlspecialchars($text); ?></span><br>

            <label class="left_label">Comment:</label><br>
            <div><?php echo nl2br($comment); ?></div><br>

        </div>
    </div>
    
</body>
</html>