<?php
    $result = 0;
    $arr = [1, 2, -1, 3, 4, 5];
	foreach ($arr as $elem) {
		if ($elem <= 0) {
			break; // выйдем из цикла
		}
        $result = $result + $elem;
	}
    echo $result . '<br>';
?>

