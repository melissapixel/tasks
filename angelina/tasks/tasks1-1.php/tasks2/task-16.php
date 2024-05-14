<?php
    $str = 'abcde';

    $str[0] = $str[4];
    $str[1] = $str[3];
    
    echo $str;
?>