<?php
	$result = 1;
	for ($i = 1; $i <= 20; $i++) { 
		$result = $result * $i;
	}
	echo $result .  '<br>';
?>

<?php
	$result = 1;
	for ($i = 2; $i <= 100; $i++) { 
        if ($i & 1){
            $result = $result * $i;
        }
	}
	echo $result .  '<br>';
?>

<?php
	$result = 1;
	for ($i = 1; $i <= 99; $i++) { 
        if (!($i & 1)){
            $result = $result * $i;
        }
	}
	echo $result .  '<br>';
?>