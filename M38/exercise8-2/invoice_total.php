<?php 
    //get the data from the form
    $custome_type = filter_input(INPUT_POST,'custome_type');
    $invoice_subtotal = filter_input(INPUT_POST,'invoice_subtotal');

    // calculate the discount
    $discount_invoice = $invoice_subtotal * .9;
    switch ($custome_type) {
        case "r":
        case "R":
            if(250 <= $invoice_subtotal and $invoice_subtotal < 500){
                $discount_invoice = $invoice_subtotal * .75;
            }else if($invoice_subtotal >= 500){
                $discount_invoice = $invoice_subtotal * .7;
            }
            break;
        case "c":
        case "C":
            $discount_invoice = $invoice_subtotal * .8;
            break;
        case "t":
        case "T":
            if($invoice_subtotal < 500){
                $discount_invoice = $invoice_subtotal * .6;
            }else{
                $discount_invoice = $invoice_subtotal * .5;
            }
            break;
        default:
            break;
    }

    //format data
    $invoice_subtotal_f = '$'.number_format($invoice_subtotal,2);
    $discount_invoice_f = '$'.number_format($discount_invoice,2);
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
        <h1>Product Discount Calculator</h1>

        <label>Custome Type:</label>
        <span><?php echo htmlspecialchars($custome_type);?></span><br>

        <label>Invoice Subtotal:</label>
        <span><?php echo htmlspecialchars($invoice_subtotal_f);?></span><br>

        <label>Discount Invoice:</label>
        <span><?php echo htmlspecialchars($discount_invoice_f);?></span><br>
</body>
</html>