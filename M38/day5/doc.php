<?php 
    $languague = 'PHP';
    $message = <<<MESSAGE
    The heredoc syntax allows you to build multi-line string in $languague, 
    Inside,it atcs like a double-quoted string anf performs variablem 
    MESSAGE;
    echo $message;

    echo "<br>";
    $languague = 'PHP';
    $message = <<<'MESSAGE'
    The heredoc syntax allows you to build multi-line string in $languague, 
    Inside,it atcs like a double-quoted string anf performs variablem 
    MESSAGE;
    echo $message;

    echo "<br>";
    $copyrigth2 = htmlentities("&#xa9 2010");
    // $copyrigth2 = "&#xa9 2010";
    echo $copyrigth2;

?>