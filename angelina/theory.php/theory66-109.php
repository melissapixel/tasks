<?php
	if (операция сравнения) {
		/*
			расположенный здесь 
				код выполнится, 
			если результат операция 
				сравнения верный 
		*/
	} else {
		/*
			расположенный здесь 
				код выполнится, 
			если результат операция 
				сравнения неверный 
		*/
	}

    $test = 1;
	if ($test > 0) {
		echo '+++'; // сработает это
	} else {
		echo '---';
	}

    $test = 0;	
	if ($test > 0) {
		echo '+++';
	} else {
		echo '---'; // сработает это
	}

    $test = 0;
	
	if ($test >= 0) {
		echo '+++'; // сработает это
	} else {
		echo '---';
	}

    // Давайте для примера проверим, что переменная $test равна 0:
    $test = 0; // пусть значение переменной равно 0 
	if ($test == 0) {
		echo '+++'; // сработает это, так как переменная равна 0 
	} else {
		echo '---';
	}

    $test = 1; // пусть значение переменной равно 1 
	if ($test != 0) {
		echo '+++'; // сработает это, так как переменная НЕ равна 0 
	} else {
		echo '---';
	}

    $test1 = 1;
	$test2 = 2;
	if ($test2 > $test1) {
		echo '+++'; // сработает это, так как $test2 больше $test1 
	} else {
		echo '---';
	}

    $test = 'abc';
	if ($test == 'abc') {
		echo '+++'; // сработает 
			это, так как переменная 
			равна 'abc' 
	} else {
		echo '---';
	}

    if ('3' == 3) {
		echo '+++'; // сработает это - значения равны 
	} else {
		echo '---';
	}

    if ('3' === 3) {
		echo '+++';
	} else {
		echo '---'; // сработает это, тк значения не равны по типу 
	}

    if ('3' === '3') {
		echo '+++'; // сработает это
	} else {
		echo '---';
	}

    if (3 === 3) {
		echo '+++'; // сработает это
	} else {
		echo '---';
	}

    if (2 === 3) {
		echo '+++';
	} else {
		echo '---'; // сработает это
	}

    // Кроме оператора != существует также оператор !==, учитывающий тип при сравнении.
    if (3 != 3) {
		echo '+++';
	} else {
		echo '---'; // сработает это, так как значения равны 
	}

    if ('3' != 3) {
		echo '+++';
	} else {
		echo '---'; // сработает это, так как значения равны 
	}

    if (3 !== 3) {
		echo '+++';
	} else {
		echo '---'; // сработает это, так как значения равны 
	}

    if (0 == '') {
		echo '+++'; // сработает это
	} else {
		echo '---';
	}

    if (0 == '0') {
		echo '+++'; // сработает это
	} else {
		echo '---';
	}

    $num = 3;
	if ($num > 0 and $num < 10) {
		echo '+++';
	} else {
		echo '---';
	}

    $num1 = 10;
	$num2 = -5;
	
	if ($num1 > 0 or $num2 > 0) {
		echo '+++'; // сработает это
	} else {
		echo '---';
	}

    // Операция and имеет приоритет над or.
    $num = 3;
	if ($num > 0 and $num < 5 or $num > 10 and $num < 20) { 
		echo '+++';
	} else {
		echo '---';
	}

    $num = 3;
	if ( ($num > 0 and 
		$num < 5) or ($num > 
		10 and $num < 20) ) { 
		echo '+++';
	} else {
		echo '---';
	}

    // Инвертирование высказываний в if-else

    if ( !($num > 0 and $num < 5) ) {
		echo '+++';
	} else {
		echo '---';
	}

    $test = true;
	if ($test === true) {
		echo '+++';
	} else {
		echo '---';
	}

    $test = true; // тут пишем или true, или false 
	if ($test == true) {
		echo '+++';
	} else {
		echo '---';
	}

    $test = 0;
	if ($test == true) {
		echo '+++';
	} else {
		echo '---'; // сработает это, тк 0 == true  это НЕверно 
	}

    $test = true;
	if ($test == true) {
		echo '+++';
	} else {
		echo '---';
	}

    $test = true;
	
	if ($test) { // эквивалентно if ($test == true) 
		echo '+++';
	} else {
		echo '---';
	}

    $test = true;
	if (!$test) { // используем логическое НЕ
		echo '+++';
	} else {
		echo '---';
	}

    $test = true;
	if ($test != true) 
		{ // эквивалентно if ($test == false) 
		echo '+++';
	} else {
		echo '---';
	}

// Учтите, что в сокращенных операциях сравнение идет по ==, а не по ===.

    $test = null;
        
    if (isset($test)) {
        echo '+++';
    } else {
        echo '---';
    }

// Можно выполнить обратную проверку, на то, что переменная не определена. Для этого выполним инвертирование isset с помощью логического НЕ:

    $test = null;
    if (!isset($test)) {
        echo '+++';
    } else {
        echo '---';
    }

    $arr = ['a', 'b', 'c'];
	if (isset($arr['5'])) {
		echo $arr['5'];
	} else {
		echo 'element does not exist';
	}

//     В PHP переменная будет пустая, если она равна 0, '', '0', false или null.

// Проверка на пустоту выполняется с помощью команды empty:
    $test = '';
        
    if (empty($test)) {
        echo '+++';
    } else {
        echo '---';
    }

    $test = '';
	
	if (!empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}

// конструкция else не является обязательной.
    
    $test = 1;
    if ($test == 1) {
        echo '+++';
    }

    if ($test == 0) echo '+++'; else echo '---';

    if ($test == 0) {echo '+++';
	} else echo '---';

    if ($test == 0)
		echo '+++';
	else
		echo '---';

    $num = 1; // может быть 1, 2 или 3
	if ($num === 1) {
		echo 'value1'; // сработает, если $num равно 1 
	}
	if ($num === 2) {
		echo 'value2'; // сработает, если $num равно 2 
	}
	if ($num === 3) {
		echo 'value3'; // сработает, если $num равно 3 
	}

    // Конструкция elseif в PHP
    $num = 1;
	if ($num === 1) {
		echo 'value1';
	} elseif ($num === 2) {
		echo 'value2';
	} elseif ($num === 3) {
		echo 'value3';
	}

	$num = 3;
	if ($num >= 0) {
		if ($num <= 5) {
			echo 'меньше или равно 5';
		} else {
			echo 'больше 5';
		}
	} else {
		echo 'меньше нуля';
	}

	$lang = 'ru';
	if ($lang === 'ru') {
		echo 'рус';
	} elseif ($lang === 'en') {
		echo 'анг';
	} elseif ($lang === 'de') {
		echo 'нем';
	} else {
		echo 'язык не поддерживается';
	}

	$lang = 'ru';
	switch ($lang) {
		case 'ru':
			echo 'рус';
		break;
		case 'en':
			echo 'англ';
		break;
		case 'de':
			echo 'нем';
		break;
		default:
			echo 'язык не поддерживается';
		break;
	}

	// Блок default and break является необязательным.

	$num = 1;
	switch ($num) {
		case 1:
		case 2:
			$res = 'a';
		break;
		case 3:
			$res = 'b';
		break;
	}
	echo $res;

	// тернарный оператор
	// переменная = условие ? значение1 : значение2;
	$age = 17;
	$adult = $age >= 18 ? true : false;
	var_dump($adult);

	$elem = isset($arr['test']) ? $arr['test'] : 'empty';

	$elem = $arr['test'] ?? 'empty';

	// Цепочки операторов объединения с null в PHP
	$elem = $arr['test1'] ?? $arr['test2'] ?? 'empty'; 

	$str = '12345';
	if (strlen($str) >= 3) {
		echo '!';
	}
	
	$str = '12345';
	$last = $str[strlen($str) - 1];
	if ($last == 5) {
		echo '!';
	}
?>
