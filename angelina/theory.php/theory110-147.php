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

    $i = 10; // начальное значение 10 
	while ($i >= 1) { // пока $i больше 1 
		echo $i;
		$i--; // уменьшаем $i на единицу 
	}

    /*
		В начале цикла $i 
			будет равно нулю, 
		цикл будет выполнятся 
			пока $i <= 9, 
		после каждого прохода 
			к $i прибавляется единица: 
	*/
	for ($i = 0; $i <= 9; $i++) {
		echo $i; // выведет 1, 2... 9 
	}

    $result = 0;
	for ($i = 1; $i <= 100; $i++) {
		$result = $result + $i;
	}
	echo $result; // искомая сумма

    for ($i = 0; $i <= 9; $i++)
		echo $i;

        for ($i = 0, $j = 0; 
		$i <= 9; $i++, $j += 2) { 
		echo $i . ' ' . $j . '<br>';
	}

    $arr = [1, 2, 3, 4, 5];
	foreach ($arr as $elem) {
		if ($elem == 3) {
			echo 'есть';
			break; // выйдем из цикла
		}
	}

	$arr = [1, 2, 3, 4, 
		5, 6, 7, 8, 9]; 
	
	foreach ($arr as $elem) {
		if ($elem % 2 === 0) {
			$res = $elem * $elem;
		} elseif ($elem % 3 === 0) {
			$res = $elem * $elem 
				* $elem; 
		} else {
			continue; // перейдем на новую итерацию цикла 
		}
		echo $res; // выполнится, если делится на 2 или 3 
	}
	$arr = [1, 2, 3, 4, 3, 5];
	foreach ($arr as $elem) {
		if ($elem === 3) {
			echo 'есть';
			break;  // завершим цикл
		}
	}

	$arr = [1, 2, 3, 4, 5];
	$flag = false;
	
	foreach ($arr as $elem) {
		if ($elem === 3) {
			$flag = true;
			break;
		}
	}
	// тут переменная $flag равна или true, или false 

	$arr = [1, 2, 3, 4, 5];
	$flag = false;
	foreach ($arr as $elem) {
		if ($elem === 3) {
			$flag = true;
			break;
		}
	}
	if ($flag === true) {
		echo 'есть';
	} else {
		echo 'нет';
	}

	$num = 500;
	while ($num > 10) {
		$num = $num / 2;
	}
	echo $num; // после цикла получим результат
	for ($num = 500; $num > 10; 
	$num = $num / 2); 
	echo $num; // после цикла получим результат 

	$arr = [1, 2, 3, 4, 5];
	$length = count($arr);
	for ($i = 0; $i < $length; $i++) {
		$arr[$i]++;
	}
	var_dump($arr); // выведет [2, 3, 4, 5, 6]


	$arr = [1, 2, 3, 4, 5];
	$length = count($arr);
	for ($i = 0; $i < $length; $i++) {
		$arr[$i] += 5;
	}
	var_dump($arr); // выведет [6, 7, 8, 9, 10] 
 
?>