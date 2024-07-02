<?php
    // рекурсия - это когда функция вызывает сама себя.
    function func(){
		echo $i;
		$i++;
		
		if ($i <= 10){
			func(); // здесь функция вызывает сама себя 
		}
	}
	func();

//     У нас есть глобальная переменная $i и функция func, внутри которой в консоль выводится содержимое переменной $i, а затем делается ++.

// Если наша переменная $i меньше или равна 10, то функция вызывается повторно. Так как переменная $i - глобальная, то при каждом новом вызове функции в ней будет заданное при предыдущем вызове значение переменной $i.

// Получится, что функция будет вызывать сама себя до тех пор, пока $i не станет больше 10.

// Учтите, что в нашем случае нельзя функцию запустить без if - если это сделать, то получится бесконечный вызов функций.

function func($arr) {
    var_dump(array_shift($arr));
    var_dump($arr);
    
    if (count($arr) !== 0) {
        func($arr);
    }
}
func([1, 2, 3]);

    function getSum($arr) {
    $sum = array_shift($arr);
    
    if (count($arr) !== 0) {
        $sum += getSum($arr);
    }
    
    return $sum;
}

var_dump(getSum([1, 2, 3]));

$arr = [
    1,
    [
        2, 7, 8
    ],
    [
        3, 4, [5, [6, 7]],
    ]
];

function func($arr) {
    $sum = 0;
    
    foreach ($arr as $elem) {
        if (is_array($elem)) {
            $sum += func($elem);
        } else {
            $sum += $elem;
        }
    }
    
    return $sum;
}

var_dump(func([1, [2, 7, 8], [3, 
    4, [5, [6, 7]]]])); 

    function func($arr) {
		$length = count($arr);
		
		for ($i = 0; $i < $length; 
			$i++) { 
			if (is_array($arr[$i])) {
				$arr[$i] = func($arr[$i]);
			} else {
				$arr[$i] = $arr[$i] . '!';
			}
		}
		return $arr;
	}
	var_dump(func([1, [2, 7, 8], [3, 
		4, [5, 6]]])); 
?>