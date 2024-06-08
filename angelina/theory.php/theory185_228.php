<?php
    // плюс + (один и более раз)
    // звездочка * (ноль или более раз)
    // вопрос ? (ноль или один раз)

    // Введение в регулярные выражения в PHP
    // Регулярные выражения - это такие команды для сложного поиска и замены. Они позволяют делать очень интересные вещи, но, к сожалению, довольно тяжелы в освоении.
    preg_replace('#a#', '!', 'bab'); // вернет 'b!b' 

    preg_replace('#x.x#', '!', 'xax eee'); // вернет '! eee' 

    $str = 'xx xax xaax xaaax xbx';
	$res = preg_replace('#xa+x#', '!', $str); //'xx ! ! ! xbx'

    $str = 'xx xax xaax xaaax xbx';
	$res = preg_replace('#xa*x#', '!', $str); //'! ! ! ! xbx'

    $str = 'xx xax xaax xbx';
	$res = preg_replace('#xa?x#', '!', $str); //'! ! xaax xbx'

    $str = 'xx xax xaax xbx';
	$res = preg_replace('#xa?x#', '!', $str);

    // В следующем примере шаблон поиска выглядит так: буква 'x', далее строка 'ab' один или более раз, потом буква 'x':
    $str = 'xabx xababx xaabbx';
	$res = preg_replace('#x(ab)+x#', '!', $str); //'! ! xaabbx'

    $str = 'a+x ax aax aaax';
	$res = preg_replace('#a+x#', '!', $str); //'a+x ! ! !'

    $str = 'a+x ax aax aaax';
	$res = preg_replace('#a\+x#', '!', $str); //'! ax aax aaax'

    $str = 'a.x abx azx';
	$res = preg_replace('#a\.x#', '!', $str); //'! abx azx'

    $str = 'a.x abx azx';
	$res = preg_replace('#a.x#', '!', $str); //'! ! !'

    preg_replace('#a.x#', '!', 'a.x abx azx'); // вернет '! ! !', а ожидалось '! abx azx'

    // Являются спецсимволами: $ ^ . * + ? \ / {} [] () |
    // Не являются спецсимволами: @ : , ' " ; - _ = < > % # ~ ` & !

    
?>