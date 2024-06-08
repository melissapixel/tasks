<?php
    $str = 'ahb acb aeb aeeb adcb axeb'; 
    echo preg_replace('#a.b#', 'L', $str);
?>
<br>
<?php
    $str = 'ahb acb aeb aeeb adcb axeb'; 
    echo preg_replace('#a..b#', 'L', $str);
?>
<br>
<?php
	$str = 'aa aba abba abbba abca abea'; 
    echo preg_replace('#ab+a#', 'L', $str);
?>
<br>
<?= preg_replace('#ab*a#', 'L', $str); ?>
<br>
<?= preg_replace('#ab?a#', 'L', $str); ?>
<br>
<br>
<?php
	$str = 'ab abab abab abababab abea';
    echo preg_replace('#(ab)+#', 'L', $str);
?>
<br>
<?=  preg_replace('#a\.a#', 'M', 'a.a aba aea') ?>
<br>
<?=  preg_replace('#2\+3#', 'M', '2+3 223 2223') ?>
<br>
<?=  preg_replace('#2\++3#', 'M', '23 2+3 2++3 2+++3 345 567') ?>
<br>
<?=  preg_replace('#2\+*3#', 'M', '23 2+3 2++3 2+++3 445 677') ?>
<br>
<?=  preg_replace('#\*(q)+\+#', 'M', '*+ *q+ *qq+ *qqq+ *qqq qqq+') ?>
<br>
<?=  preg_replace('[...]', 'M', '[abc] {abc} abc (abc)[abc]') ?>





