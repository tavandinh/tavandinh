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
        <?php if (!empty($error_message)) {?>
            <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
        <?php } ?>
        <form action="number_tester.php" method="post">
            <div id="data">
                <?php 
                    for($i=1;$i<=3;$i++){
                        echo '<label for="">Number '.$i.':</label>';
                        echo '<input type="number" id="numbers[]" name="numbers[]" step="any"><br>';
                    }
                ?>                
            </div>

            <div id="buttons">
                <label for="">&nbsp;</label>
                <input type="submit" value="Calculate" > <br>
            </div>
        </form>
    </div>   
</body>
</html>