<?php
	$arr = [2, -5, -9, -15, -1, 4];
    $sum = 0;

    foreach($arr as $elem){
        if($elem > 0){
            $sum += $elem;
        }
    } echo $sum;
?>