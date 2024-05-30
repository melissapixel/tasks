<!-- Давайте вычислим квадратный корень 16: -->

<?php
	echo sqrt(16);
?>
<!-- Результат выполнения кода: 4 -->

<?php
    // Функция round округляет число по правилам математического округления. Первым параметром функция принимает число, а вторым необязательным параметром - сколько знаков оставить в дробной части. Второй параметр может быть как положительным, так и отрицательным (в этом случае он указывает сколько знаков оставить в целой части).

    // round(число, [количество знаков]);

    echo round(3.4); // 3

    echo round(3.5); // 4

    // Давайте округлим число до двух знаков в дробной части:

    echo round(12.45678, 2); //12.46

    echo round(12.45678, 3); //12.457

    // Округлим число до десятков:
    echo round(12456.78, -1); //12460

    // Округлим число до сотен:
    echo round(12456.78, -2); //12500

    // Округлим число до тысяч:
    echo round(12456.78, -3); //12000

    // Функция ceil округляет дробь в большую сторону до целого. Это значит, что независимо от цифры в начале дробной части, дробь все равно округлится с увеличением целой части на 1. К примеру, 12.1 округлится к 13.

    echo ceil(5.1); // 6

    // Функция floor округляет дробь в меньшую сторону. Это значит, что независимо от цифры в начале дробной части, дробь все равно округлится без увеличения целой части на 1. К примеру, 12.9 округлится к 12.

    echo floor(4.9); //4

    // Функция min находит самое маленькое число из переданных ей параметрами или самое маленькое число среди элементов массива.

    echo min(1, 2, 3); //1
    echo min([1, 2, 3]); //1

    // ункция max находит самое большое число из переданных ей параметрами или самое большое число среди элементов массива.

    echo max(1, 2, 3) //3
    echo max([1, 2, 3]);  //3

    // Давайте сгенерируем случайное число от 5 до 15:
    echo mt_rand(5, 15);

    // Функция abs вычисляет модуль числа, то есть из отрицательного делает положительное.
    echo abs(-15); //15

    // Функция strtolower преобразовывает строку в нижний регистр.

    // Данная функция неправильно работает с кириллицей. Используйте функцию mb_strtolower (она работает аналогичным образом, но корректно обрабатывает кириллицу).

    echo strtolower('ABCDE'); //'abcde'

    // Функция strtoupper преобразовывает строку в верхний регистр.
    // Данная функция неправильно работает с кириллицей. Используйте функцию mb_strtoupper (она работает аналогичным образом, но корректно обрабатывает кириллицу)
    echo strtoupper('abcde'); //'ABCDE'

    // Функция ucfirst преобразует первый символ строки в верхний регистр. Не работает с кириллицей.
    echo ucfirst('abcde'); //'Abcde'

    // Функция lcfirst преобразует первый символ строки в нижний регистр. Не работает с кириллицей.
    echo lcfirst('Abcde'); //'abcde'

    // Функция ucwords преобразует первый символ каждого слова в строке в верхний регистр. Не работает с кириллицей.
    echo ucwords('lorem ipsum dolor sit amet')
    // 'Lorem Ipsum Dolor Sit Amet'


    // Функция strlen возвращает длину строки (количество символов в строке).
    // Данная функция неправильно работает с кириллицей. Используйте функцию mb_strlen (она работает аналогичным образом, но корректно обрабатывает кириллицу).
    echo strlen('abcde'); //5

    // Функция substr вырезает и возвращает подстроку из строки. Сама строка при этом не изменяется. Первым параметром функция принимает строку, вторым - позицию символа, откуда следует начинать вырезание, а третьим - количество символов. Учтите, что нумерация символов строки начинается с нуля.

    // Второй параметр может быть отрицательным - в этом случае отсчет начнется с конца строки, при этом последний символ будет иметь номер -1.

    // Третий параметр можно не указывать - в этом случае отрезание произойдет до конца строки.

    // Данная функция неправильно работает с кириллицей. Используйте функцию mb_substr (она работает аналогичным образом, но корректно обрабатывает кириллицу).

    echo substr('abcde', 1, 3); //'bcd'
    echo substr('abcde', 1); //'bcde'
    echo substr('abcde', -3, 2); //'cd'
	echo substr('abcde', -2); //'de'
    echo substr('abcde', -1); //'e'

    // Функция str_replace ищет в строке заданный текст и меняет его на другой. Первым параметром функция принимает то, что меняем, а вторым - на что меняем. Это могут быть две строки или два массива. Во втором случае соответствующие элементы одного массива заменятся на соответствующие элементы второго массива (см. примеры).
    echo str_replace('a', '!', 'abcabc'); //'!bc!bc'
    echo str_replace(['a', 'b', 'c'], [1, 2, 3], 'abcabc'); 
    echo str_replace(['a', 'b', 'c'], [1, 2, 3], 'abcabc'); //123123
    
    // Функция strtr осуществляет поиск и замену символов в строке. Имеет два варианта работы.
    echo strtr('111222', ['1'=>'a', '2'=>'b']); //'aaabbb'
    echo strtr('111222', '12', 'ab'); 'aaabbb'

    // Функция substr_replace заменяет указанную часть строки на другую. Эта функция вырезает указанную часть строки (параметрами указывается откуда начинать вырезание и сколько символов взять) и заменяет вырезанную часть на указанную строку. Если последний параметр не указан - замена произведется до конца строки.
    echo substr_replace('abcde', '!!!', 1, 3); //'a!!!e'
    echo substr_replace('abcde', '!!!', 1); //'a!!!'

    // Функция strpos возвращает позицию первого вхождения подстроки в другую строку. Первым параметром функция принимает строку, в которой осуществляется поиск, вторым параметром - подстроку, которую следует искать.

    // Результатом выполнения функции будет позиция первого символа найденной подстроки, а если такая подстрока не будет найдена - то false.
    // Результатом выполнения функции будет позиция первого символа найденной подстроки, а если такая подстрока не будет найдена - то false.
    echo strpos('abcde abcde', 'c'); //2

    // В данном примере задан третий параметр и поэтому поиск начнется с третьей позиции, в этом случае функция найдет уже второй символ 'c' и выведет его позицию - 8:
    echo strpos('abcde abcde', 'c', 3); //8

    if(strpos('http://site.ru', 'http://') 
		=== 0) { 
		echo 'да';
	} else {
		echo 'нет';
	} //'да'

    // Функция strrpos возвращает позицию последнего вхождения подстроки.
    echo strrpos('abcde abcde', 'a'); //6

    // Функция explode разбивает строку в массив по определенному разделителю.
    $date = '2025-12-31';
	$arr = explode('-', $date);
	var_dump($arr); //['2025', '12', '31']

    $date = '2025-12-31';
	$arr = explode('-', $date);
	echo $arr[2].'.'.$arr[1].'.'.$arr[0]; //'31.12.2025'

    // Функция implode сливает массив в строку с указанным разделителем.
    $arr = ['a', 'b', 'c', 'd', 'e'];
	echo implode('-', $arr); // 'a-b-c-d-e'

    // Функция str_split разбивает строку в массив. Первым параметром она принимает строку, а вторым - количество символов в элементе массива. К примеру, если второй параметр задать как 3 - функция разобьет строку в массив так, чтобы в каждом элементе массива было по 3 символа.
    $str = 'abcde';
	$arr = str_split($str, 2);
	var_dump($arr); //['ab', 'cd', 'e'];

	$num = 12345;
	echo array_sum(str_split($num, 1)); //15

    // Функция trim удаляет пробелы с начала и конца строки. Может также удалять другие символы, если их указать вторым параметром.
    echo(trim(' abcde ')); //'abcde'
    echo trim('/abcde/', '/'); //'abcde'
    echo trim('/abcde.', '/.'); // 'abcde'
    echo trim('../../abcde...', '/.'); //'abcde'

    // Можно указать диапазон символов с помощью двух точек '..'. К примеру, укажем, что мы хотим удалить символы от 'a' до 'd':
    echo trim('abcde', 'a..d'); //'e'

    // Функция ltrim удаляет пробелы с начала строки.
    // Функция rtrim удаляет пробелы с конца строки.

    // Функция strrev переворачивает строку так, чтобы символы шли в обратном порядке.
    echo strrev('12345'); //'54321'

    // Функция str_shuffle переставляет символы в строке в случайном порядке.
    echo str_shuffle('abcde');

    // Функция number_format позволяет форматировать число. В основном используется для того, чтобы отделять тройки чисел пробелами, к примеру, из 1234567 она может сделать 1 234 567.
    echo number_format(1234567); //1,234,567
    echo number_format(1234.567, 2); // 1,234.57
    echo number_format(1234.567, 2, '/', ' '); //1 234/57
    echo number_format(1234.567, 2, '.', ' '); // 1 234.57

    // Функция str_repeat повторяет строку заданное количество раз.
    echo str_repeat('x', 5); //'xxxxx'
    echo str_repeat('123', 3); '123123123'

    // Функция htmlspecialchars позволяет вывести теги в браузер так, чтобы он не считал их командами, а выводил как строки. Функция преобразует амперсанд & в &amp;, уголок < в &lt;, уголок > в &gt;.
    echo htmlspecialchars('<b>жирный текст</b>
		'); //'<b>жирный текст</b>'

    // Функция strip_tags удаляет HTML теги из строки, не трогая их содержимого. Вторым необязательным параметром можно указать разрешенные теги - они не будут удалены. Их указываем в таком формате: '<b>' или '<b><p>', если хотим оставить несколько тегов.
    echo strip_tags('lorem <b>ipsum</b> 
    dolor sit amet'); //'lorem ipsum dolor sit amet'

    // Функция chr находит символ по его ASCII коду.
    echo chr(97); //'a'
    echo chr(mt_rand(65, 90));

    $str = '';
	for ($i = 1; $i <= 6; $i++) {
		$str .= chr(mt_rand(97, 122));
	}
	echo $str;

    $codes = array_merge(range(65, 90), range(97, 
		122)); 
	echo chr($codes[array_rand($codes)]);

    // Функция ord возвращает ASCII код символа. Параметром принимает один символ или целую строку (в этом случае возвращает код ее первого символа).
    echo ord('a'); //97
    echo ord('abcde'); // 97

    // Функция strchr находит первое вхождение подстроки в строку и возвращает часть строки начиная этого места до конца строки. Если второй параметр состоит более чем из одного символа, используется только первый символ.
    echo strchr('site.ru/folder1/folder2/page.html', '/'); // '/folder1/folder2/page.html'

    // Функция strrchr находит последнее вхождение символа в строку и возвращает часть строки начиная с этого места до конца строки. Если второй параметр состоит более чем из одного символа, используется только первый символ.
    echo strrchr('site.ru/folder1/folder2/page.html', '/'); //'/page.html'
 
    // Функция strstr находит первое вхождение подстроки в строку и возвращает часть строки начиная этого места до конца строки. В отличие от strchr ищет вхождение подстроки из нескольких символов, а не вхождение одного символа.
    // Есть также функция stristr, которая делает тоже самое, но без учета регистра.
    echo strstr('site.ru/folder1/folder2/page.html', '/'); //'/folder1/folder2/page.html
?>

                <!-- Функции для массивов в PHP -->
<!-- Функция in_array проверяет наличие заданного элемента в массиве. Первым параметром она принимает что искать, а вторым - в каком массиве. -->
<?php
    $arr = ['a', 'b', 'c', 'd', 'e'];
	$result = in_array('c', $arr);
	var_dump($result); //true

    // Функция array_sum вычисляет сумму элементов массива.
    $arr = [1, 2, 3, 4, 5];
	echo array_sum($arr); // 15

    // Давайте найдем сумму цифр числа. Для этого разобьем число в массив с помощью str_split и сложим элементы этого массива с помощью array_sum:
    $num = 12345;
	echo array_sum(str_split($num, 1)); // 15

    // Функция range создает массив с диапазоном элементов. К примеру, можно создать массив, заполненный числами от 1 до 100 или буквами от 'a' до 'z'. Диапазон, который сгенерирует функция, задается параметрами: первый параметр откуда генерировать, а второй - докуда.
    // Третий необязательный параметр функции задает шаг. К примеру, можно сделать ряд 1, 3, 5, 7, если задать шаг 2, или ряд 1, 4, 7, 10 если задать шаг 3.
    var_dump(range(1, 5)); //[1, 2, 3, 4, 5]
    var_dump(range(5, 1)); //[5, 4, 3, 2, 1]
    var_dump(range(0, 10, 2)); //[0, 2, 4, 6, 8, 10
    var_dump(range('a', 'e')); //['a', 'b', 'c', 'd', 'e']

    // Функция array_merge сливает два и более массивов вместе. Если в сливаемых массивах встречаются одинаковые ключи - останется только один из таких элементов. Если вам нужно, чтобы остались все элементы с одинаковыми ключами - используйте функцию array_merge_recursive.
    $arr1 = ['a', 'b', 'c', 'd', 'e'];
	$arr2 = [1, 2, 3, 4, 5];
	$result = array_merge($arr1, $arr2);
	var_dump($result); //['a', 'b', 'c', 'd', 'e', 1, 2, 3, 4, 5]

    // Функция array_slice отрезает и возвращает часть массива. При этом сам массив не меняется. Первым параметром указывается массив для разрезания. Вторым параметром указывается, с какого элемента начинать отрезание, а третьим - сколько элементов отрезать. Второй параметр может быть отрицательным - в этом случае отсчет начнется с конца (-1 - последний элемент, -2 - предпоследний и так далее). Третий параметр можно вообще не указывать - в этом случае массив отрежется до самого конца.

    // Последний необязательный параметр регулирует сохранять ли ключи при отрезании, true - сохранять, false (по умолчанию) - не сохранять. Строковые ключи сохраняются, независимо от значения этого параметра.
    $arr = ['a', 'b', 'c', 'd', 'e'];
	$result = array_slice($arr, 0, 3);
	var_dump($result); //['a', 'b', 'c']

    $arr = ['a', 'b', 'c', 'd', 'e'];
	$result = array_slice($arr, 1, 3);
	var_dump($result); //['b', 'c', 'd']

    $arr = ['a', 'b', 'c', 'd', 'e'];
	$result = array_slice($arr, 1);
	var_dump($result); //['b', 'c', 'd', 'e']

    $arr = ['a', 'b', 'c', 'd', 'e'];
	$result = array_slice($arr, -2, 2);
	var_dump($result); //['d', 'e']

    $arr = [1 => 'a', 2 => 'b', 3 => 'c', 4 => 'd', 5 => 'c']; 
	$result = array_slice($arr, 0, 3);
	var_dump($result); //['a', 'b', 'c']
    
    $arr = [1 => 'a', 2 => 'b', 3 => 'c']; 
	$result = array_slice($arr, 0, 3, true);
	var_dump($result); //[1 => 'a', 2 => 'b', 3 => 'c']

    $arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5]; 
	$result = array_slice($arr, 0, 3);
	var_dump($result); // ['a' => 1, 'b' => 2, 'c' => 3]

    // Функция array_splice отрезает и возвращает часть массива. При этом отрезанная часть исчезает из массива. Вместо отрезанной части можно вставлять новые элементы.
    // Первым параметром указывается массив для разрезания. Вторым параметром указывается, с какого элемента начинать отрезание, а третьим - сколько элементов отрезать. Третий параметр может быть отрицательным - в этом случае отсчет начнется с конца (-1 - последний элемент, -2 - предпоследний и так далее). Третий параметр можно вообще не указывать - в этом случае массив отрежется до самого конца.
    // В последнем необязательным параметре можно задавать массив элементов, которые будут вставлены взамен удаленных.
    $arr = ['a', 'b', 'c', 'd', 'e'];
	$result = array_splice($arr, 0, 3);
	var_dump($result); //['a', 'b', 'c']
    // При этом массив $arr станет выглядеть так: ['d', 'e']

    $arr = ['a', 'b', 'c', 'd', 'e']; //['a', 'e']
	$result = array_splice($arr, 1, 3);
	var_dump($result); //['b', 'c', 'd']

    $arr = ['a', 'b', 'c', 'd', 'e']; //['a']
	$result = array_splice($arr, 1); // ['b', 'c', 'd', 'e']
	var_dump($result);

    $arr = ['a', 'b', 'c', 'd', 'e']; //['a', 'b', 'c']
	$result = array_splice($arr, -2, 2); //['d', 'e']
	var_dump($result);

    $arr = ['a', 'b', 'c', 'd', 'e']; //['a', 1, 2, 3, 'd', 'e']
	$result = array_splice($arr, 1, 2, [1, 2, 3]); //['b', 'c']
	var_dump($result); 

    $arr = ['a', 'b', 'c', 'd', 'e']; //['a', 1, 2, 3, 'b', 'c', 'd', 'e']
	$result = array_splice($arr, 1, 0, [1, 2, 3]); //[]
	var_dump($result);

    // Функция array_keys получает ключи массива и записывает их в новый массив.
    
?>

