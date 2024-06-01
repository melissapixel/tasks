<!-- Основы работы с пользовательскими функциями в PHP -->
<?php
    // Функция создается с помощью команды function. Далее через пробел следует имя функции и круглые скобки, в которых пишется какой-то код:
    function func() {
		echo '!';
	}
    	// Вызываем нашу функцию:
	func(); // выведет '!'
    func(); // выведет '!'
	func(); // выведет '!'
	func(); // выведет '!'

    // Функции могут быть вызваны до места своего определения
    // К примеру, вот так мы получим квадрат числа 2:
    function func($num) {
		echo $num * $num;
	}
    func(2); // выведет 4
    func(3); // выведет 9

    function func($num1, $num2) {
		echo $num1 + $num2;
	}
	func(1, 2); // выведет 3

    // Не обязательно параметром функции передавать именно число - можно передать и переменную, содержащую нужное нам число:
    function func($num) {
		echo $num * $num;
	}
	$param = 2;
	func($param);

    
    // Давайте сделаем так, чтобы этот параметр по умолчанию имел значение 0:
    function func($num = 0) {
		echo $num ** 2;
	}
    func(2); // выведет 4
    func(); // выведет 0

    // существует специальная инструкция return, которая позволяет указать значение, которое возвращает функция. Под словом возвращает понимают то значение, которое запишется в переменную, если ей присвоить вызванную функцию.
    function func($num) {
		return $num * $num;
	}
    $res = func(3);
    echo $res; // выведет 9
    $res = func(2) + func(3);
	echo $res; // выведет 13
    
    // Можно результат работы одной функции передать параметром в другую. В следующем примере мы сначала найдем квадрат числа 2, а затем квадрат результата:
    function func($num) {
		return $num * $num;
	}
	$res = func(func(2));
	echo $res; // выведет 16

    function square($num) {
		return $num * $num;
	}
    function cube($num) {
		return $num * $num * $num;
	}
    $res = cube(square(2));
	echo $res;

    function square($num) {
		return $num * $num;
	}
	
	function sum($num1, $num2) {
		return $num1 + $num2;
	}
    $res = sum(square(2), square(3));
	echo $res;

    // после выполнения return больше никакой код не выполнится.
    function func($num) {
		return $num * $num;
		
		echo '!'; // этот код никогда не выполнится 
	}
	$res = func(3);

    function func($num) {
		if ($num >= 0) {
			return '+';
		} else {
			return '-';
		}
	}
	echo func( 3); // выведет '+'
	echo func(-3); // выведет '-'

    // То, что return расположен внутри цикла, не всегда может быть ошибкой.
    // В следующем примере сделана функция, которая определяет, сколько первых элементов массива нужно сложить, чтобы сумма стала больше или равна 10:
    $length = count($arr);
		$sum = 0;
		for ($i = 0; $i < $length; 
			$i++) { 
			$sum += $arr[$i];
			
			// Если сумма больше или равна 10:
			if ($sum >= 10) {
				return $i + 1; // выходим из цикла и из функции 
			}
		}
	}
	$res = func([1, 2, 3, 4, 5]);
	echo $res;


    function func($num) {
		if ($num >= 0) {
			$res = sqrt($num);
		} else {
			$res = 0;
		}
		return $res;
	}
	echo func(3);

    // В функциях можно использовать флаги в неявном виде с помощью инструкции return. Давайте посмотрим, как это делается. Пусть у нас есть следующая функция, проверяющая, что все элементы массива положительные числа:
    function isPositive($arr) {
		$flag = true;
		
		foreach ($arr as $elem) {
			if ($elem < 0) {
				$flag = false;
			}
		}
		return $flag;


	}
    function isPositive($arr) {
		foreach ($arr as $elem) {
			if ($elem < 0) {
				return false;
			}
		}
		return true;
	}

    // Логические операторы без if в функциях PHP
    function func($a, $b) {
		if ($a > $b) {
			return true;
		} else {
			return false;
		}
	}

?>