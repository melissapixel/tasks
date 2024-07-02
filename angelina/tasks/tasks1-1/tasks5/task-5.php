<?php
	$arr = ['user1' => 30, 'user2' => 32, 'user3' => 33]; 

    foreach($arr as $key => $elem){
        echo $key . '- возраст ' . $elem . ' лет.' . '<br>';
    }
?>