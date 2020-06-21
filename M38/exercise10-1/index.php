<?php
    //set default value of variables for initial page load
    if (!isset($invoice_date)) { $invoice_date = '';}
    if (!isset($due_date)) { $due_date = '';}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Time Calculator</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div id="content">
        <h1>Date Time Calculator</h1>
        <?php if (!empty($error_message)) {?>
            <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
        <?php } ?>
        <form action="date_tester.php" method="post">
            <div id="data">
                <label for="">Invoice date:</label>
                <input type="text" id="invoice_date" name="invoice_date" value="<?php echo $invoice_date; ?>">
                <br>

                <label for="">Due date:</label>
                <input type="text" id="due_date" name="due_date" value="<?php echo $due_date; ?>">
                <br>
            </div>

            <div id="buttons">
                <label for="">&nbsp;</label>
                <input type="submit" value="Calculate" > <br>
            </div>
        </form>
    </div>   
</body>
</html>