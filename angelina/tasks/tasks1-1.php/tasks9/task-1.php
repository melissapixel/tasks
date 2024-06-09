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
<?= preg_replace('[...]', 'M', '[abc] {abc} abc (abc)[abc]') ?>
<br>
<?= preg_replace('#ab{2,4}a#', 'k', 'aa aba abba abbba abbbba abbbbba'); ?>
<br>
<?= preg_replace('#ab{0,3}a#', 'k', 'aa aba abba abbba abbbba abbbbba'); ?>
<br>
<?= preg_replace('#ab{4,}a#', 'k', 'aa aba abba abbba abbbba abbbbba'); ?>
<br>
<?= preg_replace('#a\da#', '!', 'a1a a2a a3a a4a a5a aba aca') ?>
<br>
<?= preg_replace('#a\d*a#', '!', 'a1a a22a a333a a4444a a55555a aba aca') ?>
<br>
<?= preg_replace('#a\d*a#', '!', 'aa a1a a22a a333a a4444a a55555a aba aca') ?>
<br>
<?= preg_replace('#a\Db#', '!', 'avb a1b a2b a3b a4b a5b abb acb') ?>
<br>
<?= preg_replace('#a\wb#', '!', 'ave a#b a2b a$b a4b a5b a-b acb') ?>




