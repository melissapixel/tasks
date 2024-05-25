<?php
	$arr = [
		['a', 'b', 'c'],
		['d', 'e', 'f'],
		['g', 'h', 'i'],
	];
    echo $arr[0][1]; // выведет 'b' 
	echo $arr[1][2]; // выведет 'f' 

    $arr = [
		'user1' => [
			'name' => 'name1',
			'age'  => 31,
		],
		'user2' => [
			'name' => 'name2',
			'age'  => 32,
		],
	];
	echo $arr['user2']['name']; // выведет 'name2'

	$arr = [
		[
			['a', 'b'],
			['c', 'd'],
		],
		[
			['e', 'f'],
			['g', 'h'],
		],
		[
			['i', 'j'],
			['k', 'l'],
		],    
	echo $arr[0][0][0]; // выведет 'a' 
	echo $arr[2][1][0]; // выведет 'k'

	$arr = [
		['a', 'b', 'c'],
		['d', 'e', 'f'],
		['g', 'h', 'i'],
	];
	foreach ($arr as $sub) {
		foreach ($sub as $elem) {
			echo $elem;
		}
	}

	$arr = [
		[
			['a', 'b'],
			['c', 'd'],
		],
		[
			['e', 'f'],
			['g', 'h'],
		],
		[
			['i', 'j'],
			['k', 'l'],
		],
	];

	foreach ($arr as $sub) {
		foreach ($sub as $subsub) {
			foreach ($subsub as $elem) {
				echo $elem;
			}
		}
	}

	$arr = [];
	$k = 1; // счетчик
	for ($i = 0; $i < 3; $i++) {
		for ($j = 0; $j < 3; $j++) {
			$arr[$i][$j] = $k; // записываем 
				счетчик 
			$k++; // увеличиваем счетчик
		}
	}
	var_dump($arr);

	$users = [
		[
			'name'   => 'user1',
			'age'    => 31,
			'salary' => 1000,
		],
		[
			'name'   => 'user2',
			'age'    => 32,
			'salary' => 2000,
		],
		[
			'name'   => 'user3',
			'age'    => 33,
			'salary' => 3000,
		],
	];

	<?php
	foreach ($users as $user) {
		echo $user['name'] . ': ' . $user['salary'] . '$, ' . $user['age'] . '<br>';
	}

?>