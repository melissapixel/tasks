<?php
	$user = ['name' => 'john', 'age' 
		=> 30]; 
    $name = $user['nae'] ?? 'unknown';
    echo $name;
?>