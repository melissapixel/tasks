<!-- frev rgv -->
<?php
   $text = file_get_contents('task-1.php');
    
	// file_put_contents('task-1.php', '!');
    

    $arr = [6, 2, 2];
    $sum = 0;
    foreach ($arr as $elem){
        $sum = $sum + $elem;
    }

     file_put_contents('task-1.php', $text .  $sum);
?>
<?php
	echo __FILE__;
?>
<br>
<?php
	rename('task-1.php', 'new.php');
?>
<?php
    echo filesize('new.php');
?>