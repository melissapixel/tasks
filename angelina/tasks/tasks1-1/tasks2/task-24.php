<?php
    $str = 12345;
    $str = (string) $str;

    $str[0] = 5;
    $str[1] = 4;
    $str[2] = 3;
    $str[3] = 2;
    $str[4] = 1;
    
    echo $str;
?>