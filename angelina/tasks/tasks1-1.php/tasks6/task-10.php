<?php
    $arr = [];

    for ($i = 0; $i < 3; $i++) {
		for ($j = 0; $j < 2; $j++) {
            for ($k = 0; $k < 5; $k++) {
			    $arr[$i][$j][$k] = $k++; // заполняеподмассив числами 
            }
		}
	}

    var_dump($arr);
?>