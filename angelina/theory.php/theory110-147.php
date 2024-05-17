<?php
    foreach (имяМассива as переменнаяДляЭлемента) { 
    /*
        Код, который находится 
            между фигурными 
        скобками будет повторяться 
            столько раз, 
        сколько элементов 
            у массива. 
    */
}
    $arr = [1, 2, 3, 4, 5];
    foreach ($arr as $elem) {
        echo $elem;
    }

    $arr = [1, 2, 3, 4, 5];
	$res = 0;
	foreach ($arr as $elem) {
		$res += $elem;
	}
	echo $res;

    
	$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5]; 
	foreach ($arr as $key => $elem) { 
		echo $key.'-'.$elem; 
			// выведет: 'a-1', 'b-2', 'c-3' и так далее... 
	}

    $arr = [1, 2, 3, 4, 5];
	foreach ($arr as $elem) {
		if ($elem % 2 == 0) {
			echo $elem;
		}
	}
?>