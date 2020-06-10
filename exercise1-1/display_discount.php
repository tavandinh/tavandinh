<?php
    //get the data from the form
    $product_description = $_POST['product_description'];
    $list_price = $_POST['list_price'];
    $discount_percent = $_POST['discount_percent'];

    //calcualate the discount
    $discount = $list_price * $discount_percent * .01;
    $discount_price = $list_price - $discount;

    //apply currency formatting to the dollar and percent amounts
    $list_price_formatted = '$'.number_format($list_price,2);
    $discount_percent_formatted = $discount_percent."%";
    $discount_formatted = "$".number_format($discount,2);
    $discount_price_formatted = "$".number_format ($discount_price,2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div id="content">
        <h1>Product Discount Calculator</h1>
        <form action="display_discount.php" method="post">
            <div id="data">
                <label >Produc Description:</label>
                <span><?php echo $list_price_formatted; ?></span><br>

                <label for="">List Price:</label>
                <span><?php echo $list_price_formatted; ?></span><br>

                <label for="">Standard Discount:</label>
                <span><?php echo $discount_percent_formatted; ?></span><br>

                <label for="">Discount Amount:</label>
                <span><?php echo $discount_formatted; ?></span><br>

                <label for="">Discount Price:</label>
                <span><?php echo $discount_price_formatted; ?></span><br>
            </div>
        </form>
    </div>
    
</body>
</html>