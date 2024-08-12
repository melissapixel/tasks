<?php
	$arr = [
		'boys'  => [1 => 'Коля', 2 => 'Вася', 
			3 => 'Петя'], 
		'girls' => [1 => 'Даша', 2 => 'Маша', 
			3 => 'Лена'], 
	];

     echo $arr['boys'][1];
     echo $arr['girls'][2];
?>

<?php
	$arr = [
		'ru' => ['пн', 'вт', 
			'ср', 'чт', 'пт', 'сб', 
			'вс'], 
		'en' => ['mn', 'ts', 
			'wd', 'th', 'fr', 'st', 
			'sn'], 
	];

    echo $arr['en'][2];
?>

<?php
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
?>