<?php
   echo pow(2, 10) . '<br>';

   echo sqrt(245) . '<br>';

   $arr = [4, 2, 5, 19, 13, 0, 10];
   $sum = 1;
   foreach($arr as $elem){
        $sum += $elem;
   }
   echo sqrt($sum) . '<br>';

   $num = sqrt(379);
   echo round($num, -1) . '<br>';
   echo round($num, -2) . '<br>';
   echo round($num, -3) . '<br>';
?>

<?php
	$arr = [4, -2, 5, 19, -130, 0, 10];
    echo min($arr) . '<br>';
    echo max($arr) . '<br>';
?>

<?php
    // echo mt_rand(5, 15) . '<br>';

   $arr = [];
   for ($i = 0; $i <= 10; $i++){
        $arr[] = mt_rand();
   }
   var_dump($arr);
?>
    <br>
<?php
    $a = 6;
    $b = 7;

    echo abs(-4) . '<br>';
    echo abs(-7) . '<br>';
?>