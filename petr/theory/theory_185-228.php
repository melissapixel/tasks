<?php

    # Регулярные выражения

    $str = 'ahb acb aeb aeeb adcb axeb';
    preg_replace('#a.b#', 'ок', $str);

    preg_replace('#a.+b#', 'ok', $str);

    $str = 'ab abab abab abababab abea';

    preg_replace('#(ab)+#', 'ok', $str);

    $str = 'a.a aba aea';

    preg_replace('#a\.a#', 'ok', $str);

    $str = 'aa aba abba abbba abbbba abbbbba';

    preg_replace('#ab{2,4}a#', 'ok', $str);

    $str = 'aba accca azzza wwwwa';

    preg_replace('#a.+a#', 'ok', $str);

    $str = 'a1a a2a a3a a4a a5a aba aca';

    preg_replace('#a\da#', 'ok', $str);

    $str = 'aba aea aca aza axa';

    preg_replace('#a[bex]a#', 'ok', $str);

    $str = 'aAXa aeffa aGha aza ax23a a3sSa';

    preg_replace('#a[a-z1-9]a#', 'ok', $str);

    preg_match_all('#a#', 'dsfa'); // Выведет количество совпадений

    preg_replace_callback('#a#', function($match){
        return '!';
    });

    # Карманы при замене через регулярки на PHP
?>