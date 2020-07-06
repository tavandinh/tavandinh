<?php 
    $pattern = '/Harri/';

    $author = 'Ray Harris';
    $editor = 'Joel Murach';

    $author_match = preg_match($pattern, $author);
    $editor_match = preg_match($pattern, $editor);

    echo $author_match;
    echo $editor_match;

    $string = "©2010 Mike 's Music. \ All rights reserved (5/2010) .";
    echo preg_match('/\xA9/', $string);
    echo preg_match('///', $string);
    echo preg_match('/\//', $string);
    echo preg_match('/\\\/', $string);

    echo '===========================';
    $string = 'The product code is MBT-3461';
    echo preg_match('/MB./',$string);
    echo preg_match('/MB\d/',$string);
    echo preg_match('/MBT-\d/',$string);

    echo '=================================';
    echo preg_match('/MB[^FA]/',$string);
    echo preg_match('/[.]/',$string);
    echo preg_match('/[13579]/',$string);

    echo '=============author====================';
    $author = 'Ray Harris';
    echo preg_match('/^Ray/',$author);
    echo preg_match('/Harris$/',$author);
    echo preg_match('/^Harris/',$author);

    echo '=============editor====================';

    $editor = 'Anne Bohme';
    echo preg_match('/Ann/',$editor);
    echo preg_match('/Ann\b/',$editor);

    echo '=============match all====================';
    $string = 'MBT-6745 MBT-5712';
    $pattern = '/MBT-[[:digit:]]{4}/';

    $count = preg_match_all($pattern, $string, $matches);
    echo $count;

    foreach($matches[0] as $match){
        echo '<div>'.$match.'</div>';
    }

?>