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

    // буква 'x', буква 'a' один или два раза, буква 'x'
    $str = 'xx xax xaax xaaax';
	$res = preg_replace('#xa{1,2}x#', '!', $str); //'xx ! ! xaaax'

    // буква 'x', буква 'a' два раза и более, буква 'x'
    $str = 'xx xax xaax xaaax';
	$res = preg_replace('#xa{2,}x#', '!', $str); //'xx xax ! !'

    // буква 'x', буква 'a' три раза, буква 'x'
    $str = 'xx xax xaax xaaax';
	$res = preg_replace('#xa{3}x#', '!', $str); //'xx xax xaax !'

    $str = 'aaa aaaaaaaaaa aaa';
	$res = preg_replace('#a{10}#', '!', $str); //'aaa ! aaa'

    // буква 'x', буква 'a' три раза раза и меньше, буква 'x'
    $str = 'xx xax xaax xaaax';
	$res = preg_replace('#xa{1,3}x#', '!', $str); //'xx ! ! !'

    $str = 'xx xax xaax xaaax';
	$res = preg_replace('#xa{0,3}x#', '!', $str); //'! ! ! !'

    // Регулярные выражения по умолчанию жадные. Это значит, что они захватывают максимальное возможное количество символов.

    // буква 'a', затем любой символ один или более раз, затем буква 'x'.
    $res = preg_replace('#a.+x#', '!', 'aeeex zzz x kkk'); // ! kkk
    
    $res = preg_replace('#a.+?x#', '!', $str);

    // Команда \d означает цифру от 0 до 9.
    // Команда \w обозначает цифру, латинскую букву или знак подчеркивания.
    // Команда \s обозначает пробел или пробельный символ: пробел, перевод строки, табуляцию.
    // если \d - цифра, то \D - не цифра.

    $str = '1 12 123';
	$res = preg_replace('#\d#', '!', $str); //'! !! !!!'

    $str = '123abc3@@';
	$res = preg_replace('#\D+#', '!', $str); //'123!3!'

    $str = '1 12 123 abc @@@';
	$res = preg_replace('#\s#', '!', $str); // '1!12!123!abc!@@@'

    $str = '1 12 123a Abc @@@';
	$res = preg_replace('#\w+#', '!', $str); // '! ! ! ! @@@'

    $str = '1 12 123 Abc @@@';
    $res = preg_replace('#\W+#', '!'); //'1!12!123!Abc!'

    
?>