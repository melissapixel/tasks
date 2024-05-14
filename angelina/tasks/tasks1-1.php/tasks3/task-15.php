<?php
	$arr = ['a' => 1, 'b' => 2, 'c' => 3]; 

    $arr['a'] = '!';
    $arr['b'] = '(';
    $arr['c'] = '@';

    var_dump($arr);
?>