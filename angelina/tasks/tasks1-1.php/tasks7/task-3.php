<?php
	$arr = [1, 2, 3, 4, 5];
    $result = in_array(3, $arr);
    var_dump($result);
?>
<br>
<?php
	$arr = [1, 2, 3, 4, 5];
    $result = array_sum($arr);
    echo $result;
?>
<br>
<?php
    $num = 1;
	$arr = [1, 2, 3, 4, 5];
    foreach($arr as $elem){
        $num *= $elem;
    }
    echo $num;
?>
<br>
<?php
    $arr = [1, 2, 3, 4, 5];
    echo array_sum($arr) / count($arr);
?>
<br>
<?= var_dump(range(1, 100)); ?>
<br>
<?= var_dump(range('a', 'z')); ?>
<br>
<?php 
    $arr = (range(1, 9)); 
    $str = implode('-', $arr);
    echo $str;
?>
<br>
<?php
    $arr = range(1, 100);
    echo array_sum($arr);
?>
<br>
<?php
    $num = 1;
    $arr = range(1, 10);
    foreach($arr as $elem){
        $num *= $elem;
    }
    echo $num;
?>
<br>
<?php
	$arr1 = [1, 2, 3];
	$arr2 = ['a', 'b', 'c'];
    $result = array_merge($arr1, $arr2);
    var_dump($result);
?>
<br>
<?php
    $arr = [1, 2, 3, 4, 5];
    $array_new = array_slice($arr, 1, 3);
    var_dump($array_new);
?>
<br>
<?php
	$arr = [1, 2, 3, 4, 5];
    $array = array_splice($arr, 1, 3);
    var_dump($arr);
?>
<?php
    $arr = ['a' => 1, 'b' => 2, 'c' => 3]; 
    $keys = array_keys($arr);
    $values = array_values($arr);
?>
<?php
	$arr1 = ['a', 'b', 'c'];
	$arr2 = [1, 2, 3];
    $arr = array_combine($arr1, $arr2);
?>
<?php
	$arr = ['a' => 1, 'b' => 2, 'c' => 3]; 
    $arr_new = array_flip($arr); 
?>
<?php
	$arr = [1, 2, 3, 4, 5];
    $arr_new = array_reverse($arr); 
?>
<?php
	$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
    $elem = array_search('-', $arr); 
    echo $elem;
?>
<?php
	$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
    echo array_splice($arr, array_search('-', $arr), 1);
    var_dump($arr);
?>
<br>
<?php
	$arr = ['a', 'b', 'c', 'd', 'e'];
    $arr_new = array_replace($arr, [0 => '!', 3 => '!!']);
    var_dump($arr_new);
?>
<br>
<?php
	$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b']; 
    sort($arr);
    var_dump($arr);
?>
<br>
<?php
	$arr = ['a' => 1, 'b' => 2, 'c' => 3]; 
    echo array_rand($arr);
?>
<br>
<?php
	$arr = ['a' => 1, 'b' => 2, 'c' => 3]; 
    $key = array_rand($arr);
    echo $arr[$key];
?>
<br>
<?php
	$arr = [1, 2, 3, 4, 5];
    $arr_new = shuffle($arr);
?>
<?php
    $arr = range(1, 25);
    $arr_new = shuffle($arr);
?>
<?php
    $arr = range('a', 'z');
    $arr_new = shuffle($arr);
?>
<?php
    $len = 6;
    $elem = range('a', 'z');
    for($i = 0; $i > $len; $i++){
        $arr[] = chr($elem);
    }
    var_dump($arr);
?>
<?php
	$arr = ['a', 'b', 'c', 'b', 'a'];
    var_dump(array_unique($arr));
?>
<br>
<?php
	$arr = [1, 2, 3, 4, 5];
    $first = array_shift($arr);
    echo $first;

    echo '<br>';

    $last = array_pop($arr);
    echo $last;
?> 
<br>
<?php
	$arr = [1, 2, 3, 4, 5];
    array_unshift($arr, 0);
    array_push($arr, 6);
    echo '<br>';
    var_dump($arr);
?>
<br>
<?php
    $arr = ['a', 'b', 'c'];
    $result = array_pad($arr, 6, '-');
    var_dump($result);
?>
<br>
<br>
<?php
    $arr = array_fill(0, 10, 'x');
    var_dump($arr);
?>
<br>
<br>
<?php
    $arr = range(1, 25);
    $arr_new = array_chunk($arr, 5);
?>
<?php
	$arr = ['a', 'b', 'c', 'b', 'a'];
    $arr_new = array_count_values($arr);
    var_dump($arr_new);
?>
<br>
<?php
	$arr = [1, 2, 3, 4, 5];
    $arr_new = array_map('sqrt', $arr);
    var_dump($arr_new);
?>
<br>
<br>
<?php
	$arr1 = [1, 2, 3, 4, 5];
	$arr2 = [3, 4, 5, 6, 7];
    $arr_new = array_intersect($arr1, $arr2);
    var_dump($arr_new);
?>