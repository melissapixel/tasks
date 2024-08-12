<?php
	$arr = ['a' => 1, 'b' => 2, 'c' => 3]; 
    
	$arr['a'] .= '3';
	$arr['b'] .= '3';
	$arr['c'] .= '3';

    var_dump($arr);  
?>
