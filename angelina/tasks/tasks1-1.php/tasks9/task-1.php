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
<br>
<?= preg_replace('#a[bex]a#', '!', 'aba aea aca aza axa') ?>
<br>
<?= preg_replace('#a[3-6]a#', '!', 'a1a a3a a7a a9a aba') ?>
<br>
<?= preg_replace('#a[a-g]a#', '!', 'aba aea afa aha aga') ?>
<br>
<?= preg_replace('#a[a-fj-z]a#', '!', 'aba aea afa aha aga') ?>
<br>
<?= preg_replace('#a[a-fA-D]a#', '!', 'aAa aea aEa aJa a3a') ?>
<br>
<?= preg_replace('#1[^eb]2#', '!', '1A2 1e2 aEa aJa a3a') ?>
<br>
<?= preg_replace('#x[^2-7]z#', '!', '1A2 1e2 aEa aJa a3a') ?>
<br>
<?= preg_replace('#x[^A-Z]+z#', '!', '1A2 1e2 aEa aJa a3a') ?>
<br>
<?= preg_replace('#x[^A-Za-z1-5]+z#', '!', '1A2 1e2 aEa aJa a3a') ?>
<br>
<?= preg_replace('#w[а-яё]w#u', '!', 'wйw wяw wёw wqw') ?>
<br>
<?= preg_replace('#[а-яёА-ЯЁ]*#u', '!', 'ааа ббб ёёё ззз ййй ААА БББ ЁЁЁ ЗЗЗ ЙЙЙ') ?>
<br>
<?= preg_replace('#a[.+*]a#', '!', 'aba aea aca aza axa a.a a+a a*a') ?>
<br>
<?= preg_replace('#x[^.$@]z#', '!', 'xaz x.z x3z x@z x$z xrz') ?>
<br>
<?= preg_replace('#a[\d.]+a#', '!', 'a1a a3a a7a a9a aba') ?>
<br>
<?= preg_replace('#a[^\da-g]+a#', '!', 'a1a a3a a7a a9a aba') ?>
<br>
<?= preg_replace('#x[\[\]\{\}\(\)]*z#', '!', 'x[]z x{}z x.z x()z') ?>
<br>
<?= preg_replace('#[\^@]xx#', '!', '^xx axx ^zz bkk @ss') ?>
<br>
<?= preg_replace('#[^@^]xx#', '!', '^xx axx ^zz bkk @ss') ?>
<br>
<?= preg_replace('#[^^]kk#', '!', '^xx axx ^zz bkk @ss') ?>
<br>
<?= preg_replace('#x[a-z-A-Z]z#', '!', 'xaz xBz xcz x-z x@z') ?>
<br>
<?= preg_replace('#x[$+-]z#', '!', 'xaz x$z x-z xcz x+z x%z x*z') ?>


