<?php
    
    $arr = [
		['a', 'b', 'c'],
		['d', 'e', 'f'],
		['g', 'h', 'i'],
		['j', 'k', 'l'],
	];

    echo $arr[2][2] . '<br>' . $arr[1][1] . '<br>' . $arr[2][0] . '<br>' . $arr[0][0];

    $arr = [[1, 2], [3, 4], [5, 6]];

    echo $arr[0][0] + $arr[0][1] + $arr[1][0] + $arr[1][1] + $arr[2][0] + $arr[2][1];

    $arr = [
		[
			[1, 2],
			[3, 4],
		],
		[
			[5, 6],
			[7, 8],
		],
	];

    echo $arr[0][0][0] + $arr[0][0][1] + $arr[0][1][0] + $arr[0][1][1] + $arr[1][0][0] + $arr[1][0][1] + $arr[1][1][0] + $arr[1][1][1];

    $arr = [
		'boys'  => [1 => 'Коля', 2 => 'Вася', 3 => 'Петя'],
		'girls' => [1 => 'Даша', 2 => 'Маша', 3 => 'Лена'],
	];

    echo $arr['boys'][1];
    echo $arr['girls'][2];

    $arr = [
		'ru' => ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
		'en' => ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'],
	];

    echo $arr['en'][2];

    $arr = [
		[
			'name'   => 'user1',
			'age'    => 30,
			'salary' => 1000,
		],
		[
			'name'   => 'user2',
			'age'    => 31,
			'salary' => 2000,
		],
		[
			'name'   => 'user3',
			'age'    => 32,
			'salary' => 3000,
		],
	];

    echo $arr[0]['salary'];
    echo $arr[2]['salary'];

    $arr = [[1, 2, 3, [4, 5, [6, 7]]], [8, [9, 10]]];

    echo $arr[0][0] + 
    $arr[0][1] + 
    $arr[0][2] + 
    $arr[0][3][0] + 
    $arr[0][3][1] + 
    $arr[0][3][2][0] + 
    $arr[0][3][2][1] + 
    $arr[1][0] + 
    $arr[1][1][0] + 
    $arr[1][1][1];
    
    $arr = [[1, 2, 3], [4, 5, 6, 7], [8, 9]];

    $num = 0;

    foreach ($arr as $sub) {
        foreach ($sub as $elem) {
            $num += $elem;
        }
    }

    echo '<br>' . $num;

    $arr = [
		[
			[1, 2, 3],
			[6, 7, 8],
			[3, 8, 4],
			[6, 7, 9],
		],
		[
			[9, 1, 2],
			[4, 5, 6],
		],
		[
			[9, 1, 2],
			[4, 5, 6],
			[5, 6, 3],
		],
	];

    $num = 0;

    foreach ($arr as $sub) {
        foreach ($sub as $subsub) {
            foreach ($subsub as $elem) {
                $num += $elem;
            }
        }
    }

    echo '<br>' . $num;

    $arr = [
		[
			'name'   => 'user1',
			'age'    => 30,
			'salary' => 1000,
		],
		[
			'name'   => 'user2',
			'age'    => 31,
			'salary' => 2000,
		],
		[
			'name'   => 'user3',
			'age'    => 32,
			'salary' => 3000,
		],
	];

    foreach ($arr as $sub) {
        foreach ($sub as $key => $elem) {
            echo $key . ' ' . $elem . '<br>';
        }
    }

    $arr = [
		'group1'  => ['user11', 'user12', 'user13', 'user43'],
		'group2'  => ['user21', 'user22', 'user23'],
		'group3'  => ['user31', 'user32', 'user33'],
		'group4'  => ['user41', 'user42', 'user43'],
		'group5'  => ['user51', 'user52'],
	];
    
    foreach ($arr as $key => $sub) {
        foreach ($sub as $elem) {
            echo $key . ' ' . $elem . '<br>';
        }
    }

    $arr = [];

    for ($i = 0; $i < 3; $i++){
        for ($y = 0; $y < 5; $y++){
            $arr[$i][$y] = $y + 1;
        }
    }

    var_dump($arr);

    echo '<br><br>';

    $arr = [];

    for ($i = 0; $i < 3; $i++){
        for ($y = 0; $y < 4; $y++){
            $arr[$i][$y] = 'x';
        }
    }

    var_dump($arr);

    echo '<br><br>';

    $arr = [];

    for ($i = 0; $i < 3; $i++){
        for ($y = 0; $y < 2; $y++){
            for ($j = 0; $j < 5; $j++){
                $arr[$i][$y][$j] = $j + 1;
            }
        }
    }

    var_dump($arr);

    echo '<br><br>';

    $arr = [];

    for ($i = 0, $k = 1; $i < 3; $i++){
        for ($j = 0; $j < 2; $j++){
            $arr[$i][$j] = $k++;
        }
    }

    var_dump($arr);

    echo '<br><br>';

    $arr = [];

    for ($i = 0, $k = 0; $i < 4; $i++){
        for ($j = 0; $j < 3; $j++){
            $arr[$i][$j] = $k += 2;
        }
    }

    var_dump($arr);

    echo '<br><br>';

    $arr = [];

    for ($i = 0, $k = 1; $i < 2; $i++){
        for ($j = 0; $j < 2; $j++){
            for ($y = 0; $y < 2; $y++){
                $arr[$i][$j][$y] = $k++;
            }
        }
    }

    var_dump($arr);

    echo '<br><br>';

    $products = [
		[
			'name'   => 'мясо',
			'price'  => 100,
			'amount' => 5,
		],
		[
			'name'   => 'овощи',
			'price'  => 200,
			'amount' => 6,
		],
		[
			'name'   => 'фрукты',
			'price'  => 300,
			'amount' => 7,
		],
	];

    foreach ($products as $sub) {
        foreach ($sub as $elem) {
            echo $elem . ' ';
        }
        echo '<br>';
    }

    echo '<br><br>';

?>