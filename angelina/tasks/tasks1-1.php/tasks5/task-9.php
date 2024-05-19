<?php
	$arr = [10, 20, 30, 50, 235, 3000];
        
    foreach($arr as $elem){
        $elem = (string) $elem;
        if($elem[0] == 1 or $elem[0] = 2 or $elem[0] = 3){
            echo $elem  . '<br>';
        }
    }
    
?>