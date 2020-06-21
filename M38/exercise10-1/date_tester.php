<?php
    // get the data from the form
    $invoice_date = filter_input(INPUT_POST, 'invoice_date');
    $due_date = filter_input(INPUT_POST, 'due_date');
    
    //change to DateTime
    $invoice_date_DateTime;
    $due_date_DateTime;
    try{
        $invoice_date_DateTime = new DateTime($invoice_date);
        $due_date_DateTime = new DateTime($due_date); 
    }catch (Exception $e) {
        $error_message = 'Error message:'. $e->getMessage();
        include("index.php");
        exit();
    }

    //Check if invoice date later due date
    if($invoice_date_DateTime >= $due_date_DateTime){
        $error_message = 'Error message: Due date have to later than invoice date';
        include("index.php");
        exit();
    }

    //Create due date message
    $now = new DateTime();
    $span = $now->diff($due_date_DateTime);

    $due_date_message = "";
    if($span->format('$R') == '-'){
        $due_date_message = 'This invoice is '.$span->format('%y years, %m months, and %d days').' overdue.';
    }else{
        $due_date_message = 'This invoice is due in '.$span->format('%y years, %m months, and %d days').'.';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Value Calculator</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div id="content">
        <h1>Future Value Calculator</h1>
        <div id="data">
            <label for="">Invoice date:</label>
            <span><?php echo date_format($invoice_date_DateTime,"F d, Y");?></span>
            <br>

            <label for="">Due date:</label>
            <span><?php echo date_format($due_date_DateTime,"F d, Y");?></span>
            <br>

            <label for="">Current date:</label>
            <span><?php echo date_format($now,"F d, Y");?></span>
            <br>

            <label for="">Current time:</label>
            <span><?php echo date_format($now,"g:i:s a");?></span>
            <br>

            <label for="">Due date message:</label>
            <span><?php echo $due_date_message;?></span>
            <br>
        </div>
    </div>   
</body>
</html>