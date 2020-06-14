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
                <select name="investment">
                    <?php 
                        $investment = 10000;
                        while($investment <= 50000){
                            if($investment == 15000){
                                echo '<option value="'.$investment.'" selected>'.$investment.'</option>';
                            }else{
                                echo '<option value="'.$investment.'">'.$investment.'</option>';
                            }
                            $investment += 5000;
                        }
                    ?>
                </select>
                <br>

                <label for="">Yearly Interest Rate:</label>
                <select name="interest_rate">
                    <?php 
                        $interest_rate = 4;
                        while($interest_rate <= 12){
                            if($interest_rate == 6.5){
                                echo '<option value="'.$interest_rate.'" selected>'.$interest_rate.'</option>';
                            }else{
                                echo '<option value="'.$interest_rate.'">'.$interest_rate.'</option>';
                            }
                            $interest_rate += .5;
                        }
                    ?>
                </select>
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