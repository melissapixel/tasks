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

    // Группы символов \d и \w не очень гибкие. Даже такая простая задача, как найти все буквы, но не цифры - не может быть решена ими. Для таких задач следует использовать квадратные скобки, представляющие собой операцию ИЛИ.

    // между иксами любая буква от 'a' до 'z':
    $str = 'xax xbx xcx x@x';
	$res = preg_replace('#x[a-z]x#', '!', $str); //'! ! ! x@x'

    // между иксами любая буква от 'a' до 'k':
    $str = 'xax xbx xmx x@x';
	$res = preg_replace('#x[a-k]x#', '!', $str); //'! ! xmx x@x'

    // между иксами любая буква от 'A' до 'Z':
    $str = 'xax xBx xcx x@x';
	$res = preg_replace('#x[A-Z]x#', '!', $str); //'xax ! xcx x@x'

    // между иксами любая цифра от 0 до 9:
    $str = 'xax x1x x3x x5x x@x';
	$res = preg_replace('#x[0-9]x#', '!', $str); //'xax ! ! ! x@x'

    // между иксами любая цифра от 3 до 7:
    $str = 'xax x1x x3x x5x x@x';
	$res = preg_replace('#x[3-7]x#', '!', $str); //'xax x1x ! ! x@x'

    // между иксами любая буква от 'a' до 'z' или цифра от 1 до 9:
    $str = 'xax x1x x3x x5x x@x';
	$res = preg_replace('#x[a-z1-9]x#', '!', $str); //'! ! ! ! x@x'

    // между иксами любая буква от 'a' до 'z' или буква от 'A' до 'Z':
    $str = 'xax xBx xcx x5x x@x';
	$res = preg_replace('#x[a-zA-Z]x#', '!', $str); //'! ! ! x5x x@x'

    // между иксами любая буква от 'a' до 'z' или цифры 1, 2:
    $str = 'xax xbx x1x x2x x3x';
	$res = preg_replace('#x[a-z12]x#', '!', $str); //'! ! ! ! x3x'

    // между иксами буквы от 'a' до 'z' в количестве от 1 и более:
    $str = 'xx xabesx xaadx x123x xa3x';
	$res = preg_replace('#x[a-z]+x#', '!', $str); // 'xx ! ! ! x123x xa3x'

    // Сделаем так, чтобы количество букв могло быть и ноль:
    $str = 'xx xabesx xaadx x123x xa3x';
	$res = preg_replace('#x[a-z]*x#', '!', $str); //'! ! ! x123x xa3x'

    // команда [ab] ищет букву 'a' или 'b', то команда [^ab] будет искать все символы, кроме 'a' и 'b'.
    // буква 'x', затем НЕ буква 'a', не 'b' и не 'c', потом буква 'z':
    $str = 'xaz xbz xcz xez';
	$res = preg_replace('#x[^abc]z#', '!', $str); //'xaz xbz xcz !'

    // буква 'x', затем НЕ маленькая латинская буква, потом буква 'z':
    $str = 'xaz xbz x1z xCz';
	$res = preg_replace('#x[^a-z]z#', '!', $str); //'xaz xbz ! !'

    // Кириллические символы не входят в группу \w. Для их получения нужно использовать группу в квадратных скобках, вот так: [а-я]. Но даже с этой группой есть проблема - сюда не войдет буква 'ё'. Для ее включения нужно сделать вот так: [а-яё].
    // Кроме того, для корректной работы кириллицы в регулярке необходимо поставить модификатор u:
    $str = 'яяя ййй ёёё';
	$res = preg_replace('#[а-яё]#u', '!', $str);

    // Спецсимволы внутри [] становятся обычными символами. Это значит, что их не надо экранировать обратным слешем.

    // между иксами любая буква 'a', 'b', 'c', либо точка:
    $str = 'xax xbx xcx xdx x.x x@x';
	$res = preg_replace('#x[abc.]x#', '!', $str //'! ! ! xdx ! x@x'

    // между иксами любая маленькая латинская буква или точка:
    $str = 'xax xbx xcx x@x';
	$res = preg_replace('#x[a-z.]x#', '!', $str); //'! ! ! x@x'

    // Группы символов \d, \D, \w, \W, \s, \S внутри [] будут обозначать именно группы, то есть по-прежнему будут командами.

    // между иксами любая цифра, либо буква от 'a' до 'f':
    $str = 'xax xbx x1x x2x xhx x@x';
	$res = preg_replace('#x[\da-f]x#', '!', $str); // '! ! ! ! xhx x@x'

    // буква 'x', затем не цифра, не точка, и не маленькая латинская буква, затем буква 'z':
    $str = 'xaz x1z xAz x.z x@z';
	$res = preg_replace('#x[^\d.a-z]z#', '!', $str); //'xaz x1z ! x.z !'
    
    // Вы уже знаете, что спецсимволы внутри [] становятся обычными символами. Есть, однако, исключения: если вам нужны квадратные скобки как символы, то их нужно экранировать обратным слешем.

    // между иксами стоит квадратная скобка:
    $str = 'x]x xax x[x x1x';
	$res = preg_replace('#x[\[\]]x#', '!', $str); //'! xax ! x1x'

    // Как вы знаете, шляпка внутри [] делает отрицание, будучи написанной в начале скобок. Значит, она является спецсимволом внутри этих скобок. Чтобы получить шляпку как символ, нужно или заэкранировать ее, или убрать с первого места.
    
    // первый символ - это все кроме 'd', потом две буквы 'x'.
    $str = 'axx bxx ^xx dxx';
	$res = preg_replace('#[^d]xx#', '!', $str); //'! ! ! dxx'

    // первый символ - это 'd' или '^', потом две буквы 'x':
    $str = 'axx bxx ^xx dxx';
	$res = preg_replace('#[d^]xx#', '!', $str); //'axx bxx ! !'

    $str = 'axx bxx ^xx dxx';
	$res = preg_replace('#[\^d]xx#', '!', $str); //'axx bxx ! !'

    // Если вам нужен сам дефис как символ - то поставьте его там, где он не будет воспринят как разделитель группы.

    // цифра 1, затем буква от 'a' до 'z', затем цифра 2:
    $str = '1a2 1-2 1c2 1z2';
	$res = preg_replace('#1[a-z]2#', '!', $str); // '! 1-2 ! !'
    
    // цифра 1, затем буква 'a', или дефис, или буква 'z', затем цифра 2:
    $str = '1a2 1-2 1c2 1z2';
	$res = preg_replace('#1[a\-z]2#', '!', $str); // '! ! 1c2 !'

    $str = '1a2 1-2 1c2 1z2';
	$res = preg_replace('#1[az-]2#', '!', $str); //'! ! 1c2 !'

    // первый символ - это маленькие буквы или дефис '-', потом две буквы 'x':
    $str = 'axx Axx -xx @xx';
	$res = preg_replace('#[a-z-]xx#', '!', $str); //'! Axx ! @xx'

    // первый символ - это маленькие, большие буквы или дефис '-', потом две буквы 'x':
    $str = 'axx Axx -xx @xx';
	$res = preg_replace('#[a-zA-Z-]xx#', '!', $str); //'! ! ! @xx'

    $str = 'axx 9xx -xx @xx';
	$res = preg_replace('#[a-z-0-9]xx#', '!', $str); //'! ! ! @xx'

    // Существуют специальные символы, которые обозначают начало ^ или конец строки $. Давайте посмотрим их работу на примерах.

    // заменить 'aaa' на '!' только, если оно стоит в начале строки:
	$str = 'aaa aaa aaa';
	$res = preg_replace('#^aaa#', '!', $str); //'! aaa aaa'

    // заменить 'aaa' на '!' только, если оно стоит в конце строки:
    $str = 'aaa aaa aaa';
	$res = preg_replace('#aaa$#', '!', $str); //'aaa aaa !'

    // Когда в начале регулярки стоит ^, а в конце - $, то таким образом мы проверяем всю строку целиком на соответствие регулярке.

    // буква 'a' повторяется один или более раз, заменить всю строку на '!' только она состоит из одних букв 'a'.
    $str = 'aaa';
	$res = preg_replace('#^a+$#', '!', $str); //'!'

    начало слова, маленькие латинские буквы один или более раз, конец слова. Таким образом, регулярка найдет все слова и заменит их на '!':
    echo preg_replace('#\b[a-z]+\b#', '!', 'axx bxx xxx exx'); // выведет '! ! ! !' 

    // В данном уроке мы разберем команду |, которая представляет собой более мощный вариант ИЛИ по сравнению с командой []. Данная команда позволяет разделить регулярку на несколько частей. При этом искомое может попасть либо под одну часть регулярки, либо под другую. Давайте посмотрим на примерах.

    // три буквы 'a' или три буквы 'b':
    $str = 'aaa bbb abb';
	$res = preg_replace('#a{3}|b{3}#', '!', $str); //'! ! abb'

    // три буквы 'a' или от 1 и более букв 'b':
    $str = 'aaa bbb bbbb bbbbb axx';
	$res = preg_replace('#a{3}|b+#', '!', $str); //'! ! ! ! axx'

    // одна или более буквы или три цифры:
    $str = 'a ab abc 1 12 123';
	$res = preg_replace('#[a-z]+|\d{3}#', '!', $str); //'! ! ! 1 12 !'

    $str = 'aaa bbb ccc ddd';
	$res = preg_replace('#a+|b+|c+#', '!', $str); //'! ! ! ddd'

    // Если вертикальная черта стоит внутри круглых скобок, то 'или' работает только внутри этих скобок. Для примера давайте найдем строки по следующему шаблону: в начале стоит или 'a', или 'b' один или более раз, а потом две буквы 'x':
    $str = 'axx bxx bbxx exx';
	$res = preg_replace('#(a|b+)xx#', '!', $str); //'! ! ! exx'

    // В качестве ограничителей могут выступать не только #, но и любые другие символы (только не буквы и не цифры). 

    // Если символ не является специальным, то, когда вы используете его в качестве ограничителя, его нужно будет экранировать в самой регулярке.
    echo preg_replace('&a\&b&', '!', 'a&b'); 
		// выведет '!' 

    // Обратный слеш является спецсимволом PHP. Это значит, что в строке, если мы хотим, чтобы слеш обозначал сам себя, мы должны его удвоить:
    $str = '\\ \\\\ \\\\\\'; // на самом деле строка '\ \\ \\\' 

    // Обратный слеш также является и спецсимволом регулярок. Это значит, что внутри регулярки, чтобы слеш обозначал сам себя, его нужно написать аж четыре раза:
    echo preg_replace('#\\\\#', '!', '\\ \\\\ \\\\\\'); // выведет '! ! !!'

    // Давайте теперь напишем регулярку, в которой шаблон поиска будет такой: обратный слеш один или более раз. В таком случае мы напишем оператор + аж для 4 символов перед ним без группировки:
    echo preg_replace('#\\\\+#', '!', 'a\\b c\\\\d e\\\\\\f'); // выведет '! ! !' 

    // Существует также функция preg_match, которая проверяет, есть ли в строке совпадение с регуляркой.

    echo preg_match('#a+#', 'eee aaa bbb'); 
		// выведет 1 
    echo preg_match('#a+#', 'eee bbb'); 
		// выведет 0 

    // Давайте напишем код, который позволит нам удобно тестировать написанные нами регулярки сразу на нескольких строках.

    // Пусть наша регулярка для тестов хранится в следующей переменной:
    $reg = '#\d{3,}#';
    $arr[] = 'aaa 123 bbb';
	$arr[] = 'aaa 12345 bbb';
	$arr[] = 'aaa 12x bbb';
	$arr[] = 'aaa 12 bbb';
    foreach ($arr as $str) {
		echo $str . ' ' . preg_match($reg, $str). '<br>'; 
	}

    // Часто preg_match используется для проверки на соответствие регулярному выражению всей строки. В таком случае в начале регулярки следует поставить шляпку ^, а в конце - доллар $. Этим мы говорим, что под шаблон должна попасть вся строка.
    echo preg_match('#^a+$#', 'aaaa'); // выведет 1 
	echo preg_match('#^a+$#', 'aaab'); // выведет 0 

    $str = 'eee site.ru bbb';
    $reg = '#([a-z0-9_-]+)\.([a-z]{2,})#';
    preg_match($reg, $str, $res);
	var_dump($res); // выведет ['site.ru', 'site', 'ru'] 

    // С помощью функции preg_match_all можно узнать количество всех совпадений с регулярным выражением:
    $str = 'a aa aaa bbb';
	echo preg_match_all('#a+#', $str); // выведет 3 

    // Скобки () выполняют две функции - группировка символов и функцию кармана. А что делать, если нам нужно сгруппировать, но в карман не класть? Для решения такой проблемы придуманы специальные несохраняющие скобки (?: ) - они группируют, но не кладут в карман.
    $str = 'abab123';
	$reg = '#(ab)+([1-9]+)#';
	preg_match_all($reg, $str, $res);
    var_dump($res[0]); // выведет 'abab123' 
	var_dump($res[1]); // выведет 'ab'
	var_dump($res[2]); // выведет '123' 

    $str = 'abab123';
	$reg = '#(?:ab)+([1-9]+)#';
	preg_match_all($reg, $str, $res);
    var_dump($res[1]); // выведет '123' 

    $res = preg_replace('#([a-z])\1#', '!', $str); //'! ! cd ef'

    // Мы можем изменить такое поведение регулярки, использовав модификатор i. Исправим нашу регулярку в соответствии с этим:
    preg_replace('#[a-z]+#i', '!', 'aaa bbb AAA'); // вернет '! ! !' 

    // Модификатор x разрешает расставлять в регулярке произвольные пробелы и переводы строк. Кроме того, символ решетки становится символом однострочного комментария (соотвественно, ограничители придется заменить на другие).
    preg_replace('~
		[a-z]+ # буквы 
		@      # символ собаки
		[0-9]+ # цифры
	~x', '!', 'aaa@333');

    // Модификатор u, с которым вы уже сталкивались ранее, заставляет регулярку корректно работать с юникодом. В частности, корректно обрабатывать кириллические строки:
    preg_replace('#[а-яё]#u', '!', 'яяя ййй ёёё');
    
    // Модификатор U делает так, что все операторы повторений станут по умолчанию нежадными, а добавление ?, наоборот, будет добавлять им жадности:
    preg_replace('#x.+x#U', '!', 'xax xaax xaaax'); // вернет '! ! !'

    // Модификатор X делает так, что экранировка обычного символа приведет к ошибке. Без этого оператора обычные символы можно экранировать, они все равно будут обозначать сами себя (исключение: цифры, они станут карманами). Посмотрим на примере:
    preg_replace('#x\@x#X', '!', 'x@x'); // ошибка, @ не спецсимвол 
?>