<?php
    //get form data
    $set_score = filter_input(INPUT_POST,'set_score');
    echo $set_score;
    $scores = filter_input(INPUT_POST, 'score', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
    $process_scores = filter_input(INPUT_POST,'process_scores');
    $process_rolls = filter_input(INPUT_POST,'process_rolls');

    //process_scores
    if($process_scores !== NULL){
        $scores[] = $set_score;
    }

    //process_rolls
    if($process_rolls !== NULL && !empty($scores)){
        $max_score = -INF;
        $i = 0;
        $total_score = 0;
        foreach($scores as $score){
            if($max_score < $score ){
                $max_score = $score;
            }
            $i++;
            $total_score += $score;
        }
        $average_score = number_format($total_score/$i,2);

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process Scores Rolls </title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div id="content">
        <h1>Process Scores Rolls</h1>
        <form action="loop_tester.php" method="post">
            <div id="data">
                <label>Scores:</label>
                <select name="set_score">
                    <?php 
                        for($i=0;$i<=10;$i++){
                            echo ' <option value="'.$i.'">'.$i.'</option>';
                        }
                    ?>
                    <option value=""></option>
                </select><br>

                <!-- if user process roll print max and average score to screen -->
                <?php 
                    if (isset($max_score)) {
                        echo "<label>Max score:</label>";
                        echo "<span>".$max_score."</span><br>";
                    }

                    if (isset($average_score)) {
                        echo "<label>Average score:</label>";
                        echo "<span>".$average_score."</span><br>";
                    }
                ?>

                <!-- if user input score print it to screen -->
                <?php 
                    if(isset($scores)){
                        foreach($scores as $key => $score){
                            echo  "<label>Scores".$key.":</label>";
                            echo  "<input name='score[]' type='text' value='".$score."' readonly='readonly' ><br>";
                        }
                    }
                ?>
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Process Scores" name="process_scores"> 
                <input type="submit" value="Process Rolls" name="process_rolls"><br>

            </div>
        </form>

    </div>
    
</body>
</html>