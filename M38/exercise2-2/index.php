<?php
    //set default value of variables for initial page load
    if (!isset($investment)) { $investment = '';}
    if (!isset($interest_rate)) { $interest_rate = '';}
    if (!isset($years)) { $years = '';}
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
        <?php if (!empty($error_message)) {?>
            <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
        <?php } ?>
        <form action="display_results.php" method="post">
            <div id="data">
                <label for="">Investment Amount:</label>
                <input type="text" name="investment" value="<?php echo htmlspecialchars($investment); ?>">
                <br>

                <label for="">Yearly Interest Rate:</label>
                <input type="text" name="interest_rate" value="<?php echo htmlspecialchars($interest_rate);?>">
                <br>

                <label for="">Number of Years:</label>
                <input type="text" name="years" value="<?php echo htmlspecialchars($years);?>">
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