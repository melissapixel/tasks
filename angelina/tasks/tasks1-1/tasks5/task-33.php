<?php
$num =500;
	
while ($num < 1000) {
	$num = $num * 2;
}
echo $num;

for ($num = 500; $num < 1000; $num = $num * 2); 
	echo $num . '<br>';

	$str = '';
	
	for ($i = 0; $i < 10; $i++) {
		$str .= 'O';
	}
	echo $str . '<br>';

	$str = '';
	for ($i = 1; $i < 10; $i++) {
		$str = $str . $i;
	}
	echo $str . '<br>';

	$str = '';
	for ($i = 9; $i >= 1; $i--) {
		$str = $str . $i;
	}
	echo $str . '<br>';

	// $str = '';
	// for ($i = 1; $i < 10; $i++) {
	// 	for ($j = '-'; $j <= 1; $j++) {
	// 		echo $i;
	// 	}
	// }
	// echo '-' . $str .  '-' . '<br>';
	// $str = $str . $i;

	$arr = ['a', 'b', 'c', 'd', 'e'];
	$length = count($arr);
	
	for ($i = 0; $i < $length; $i++) {
		echo $arr[$i];
	}

	$arr = [1, 2, 3, 4, 5, 6, 7, 8];
	$length = count($arr) ;

	$length = $length/2;
	for ($i = 0; $i < $length; $i++) {
		echo $arr[$i];
	}

	$arr = [1, 2, 3, 4, 5, 6, 7, 8];
	$sum = 0;
	$length = count($arr);

	for ($i = 0; $i < $length; $i++) {
		$sum += $arr[$i];
	}
	echo $sum . '<br>';

	$arr = [1, 2, 3, 4, 5];
	$length = count($arr);
	for ($i = 0; $i < $length; $i++) {
		$arr[$i]--;
	}
	var_dump($arr);

	$arr = [1, 2, 3, 4, 5];
	$length = count($arr);
	for ($i = 0; $i < $length; $i++) {
		$arr[$i] += 10;
	}
	var_dump($arr);
?>