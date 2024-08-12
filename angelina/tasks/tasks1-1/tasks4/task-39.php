<?php
    $num = 111111;
    $num = (string) $num;
    $num_1 = $num[0] + $num[1] + $num[2];
    $num_2 = $num[3] + $num[4] + $num[5];
    if($num_1 == $num_2){
        echo "Yes";
    } else{
        echo "No";
    }
?>