<?php
	$arr = [1, 2, 3, 4, 0, 5];
	
	foreach ($arr as $elem) {
		if ($elem == 0) {
			break; // выйдем из цикла
		}
        echo $elem;
	}
?>
