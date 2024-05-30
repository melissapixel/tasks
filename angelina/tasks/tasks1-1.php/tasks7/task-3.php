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