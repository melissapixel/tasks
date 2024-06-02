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
    $arr = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5]; 
	$result = array_keys($arr);
	var_dump($result); //['a', 'b', 'c', 'd', 'e']

    // Функция array_values выбирает все значения из массива.
    $arr = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5]; 
	var_dump(array_values($arr)); //[1, 2, 3, 4, 5]

    // Функция array_combine осуществляет слияние двух массивов в один ассоциативный. Первым параметром функция принимает массив будущих ключей, а вторым - массив будущих значений.
    $keys = ['a' , 'b', 'c', 'd', 'e'];
	$elems = [1, 2, 3, 4, 5];
	$result = array_combine($keys, $elems);
	var_dump($result); //['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5]

    // Функция array_flip производит обмен местами ключей и значений массива.
    $arr = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5]; 
	var_dump(array_flip($arr)); //[1=>'a', 2=>'b', 3=>'c', 4=>'d', 5=>'e']

    // Функция array_reverse переворачивает массив в обратном порядке. Первым параметром передается массив, а вторым - сохранять ключи при перестановке элементов или нет (true - да, false - нет). Второй параметр указывать необязательно. В таком случае по умолчанию вторым параметром является false. Строковые ключи всегда сохраняются, независимо от значения этого параметра.
	$arr = ['a', 'b', 'c', 'd', 'e'];
	var_dump(array_reverse($arr)); //['e', 'd', 'c', 'b', 'a']

    // Функция array_search осуществляет поиск значения в массиве и возвращает ключ первого найденного элемента. Если такой элемент не найдет - вернет false. Третий параметр задает строгое сравнение по типу (как по ===). Если поставить true - он будет сравнивать строго, а если false (по умолчанию) - то нет.
    $arr = ['a', 'b', 'c', 'd', 'e'];
	echo array_search('c', $arr); //2

    // Функция array_replace заменяет значения первого массива значениями с такими же ключами из других переданных массивов. Если ключ из первого массива присутствует во втором массиве, его значение заменяется на значение из второго массива. Если ключ есть во втором массиве, но отсутствует в первом - он будет создан в первом массиве. Если ключ присутствует только в первом массиве, то сохранится как есть.
    // Если для замены передано несколько массивов, они будут обработаны в порядке передачи и более поздние массивы будут перезаписывать значения из предыдущих.
	$arr = ['a', 'b', 'c', 'd', 'e'];
	$result = array_replace($arr, [0=>'!', 2=>'!!']); 
	var_dump($result); //['!', 'b', '!!', 'd', 'e']

    // Для сортировки массивов в PHP существует несколько функций: sort - по возрастанию элементов, rsort - по убыванию элементов, asort - по возрастанию элементов с сохранением ключей, arsort - по убыванию элементов с сохранением ключей, ksort - по возрастанию ключей, krsort - по убыванию ключей, usort - по функции по элементам, uasort - по функции по элементам с сохранением ключей, uksort - по функции по ключам, natsort - натуральная сортировка.
    $arr = [1, 3, 2, 5, 4];
	sort($arr);
	var_dump($arr); //[1, 2, 3, 4, 5]

    // Функция array_rand возвращает случайный ключ из массива. Первым параметром задается массив, а второй необязательный параметр указывает, сколько случайных ключей следует вернуть. Если он не указан - возвращается один ключ, а если указан - заданное количество ключей в виде массива.
    $arr = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5]; 
	echo array_rand($arr); //'c'

    $arr = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5]; 
	$key = array_rand($arr);
	echo $arr[$key]; // 3

    $arr = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5]; 
	$keys = array_rand($arr, 3);
	var_dump($keys); //['a', 'b', 'e']

    // Функция shuffle осуществляет перемешивание массива так, чтобы его элементы шли в случайном порядке. При этом функция изменяет сам массив: это значит результат работы функции не нужно никуда присваивать - изменения произойдут над самим массивом.
    $arr = [1, 2, 3, 4, 5];
	shuffle($arr);
	var_dump($arr); //Давайте перемешаем элементы массива в случайном порядке

	$arr = range(1, 10);
	shuffle($arr);
	var_dump($arr);

    $arr = range(1, 10);
	shuffle($arr);
	echo '<ul>';
	foreach ($arr as $elem) {
		echo '<li>'.$elem.'</li>';
	}
	echo '</ul>';

    // Функция array_unique осуществляет удаление повторяющихся элементов (дублей) из массива.
    $arr = [1, 1, 1, 2, 2, 3];
	var_dump(array_unique($arr)); //[1, 2, 3]

    // Функция array_shift вырезает и возвращает первый элемент массива. При этом этот элемент исчезает из массива.
    $arr = [1, 2, 3, 4, 5]; //[2, 3, 4, 5]
	echo array_shift($arr); //1

    // Функция array_pop вырезает и возвращает последний элемент массива. При этом этот элемент исчезает из массива.
    $arr = [1, 2, 3, 4, 5]; //[1, 2, 3, 4]
	echo array_pop($arr); //5

    // Функция array_unshift добавляет элементы в начало массива. При этом переданный массив изменяется, а функция возвращает новое количество элементов в массиве. Элементы для добавления перечисляются через запятую.
    $arr = [1, 2, 3, 4, 5]; //7
	$num = array_unshift($arr, 'a', 'b');
	var_dump($arr); //['a', 'b', 1, 2, 3, 4, 5]

    // Функция array_push добавляет элементы в конец массива. При этом переданный массив изменяется, а функция возвращает новое количество элементов в массиве. Элементы для добавления перечисляются через запятую.
    $arr = [1, 2, 3]; //5
	$num = array_push($arr, 4, 5);
	var_dump($arr); //[1, 2, 3, 4, 5]

    // Функция array_pad дополняет массив определенным значением до заданного размера. Первым параметром функция принимает массив для заполнения, вторым параметром - до какого размера заполнить, третьим - чем заполнять.
    // Второй параметр можно делать отрицательным - в этом случае массив будет дополнятся элементами не с конца, а с начала.
    $arr = ['a', 'b', 'c', 'd', 'e'];
	$result = array_pad($arr, 7, 0);
	var_dump($result); //['a', 'b', 'c', 'd', 'e', 0, 0]

    $arr = ['a', 'b', 'c', 'd', 'e', 'f', 'g']; 
	$result = array_pad($arr, 7, 0);
	var_dump($result); //['a', 'b', 'c', 'd', 'e', 'f', 'g']

    $arr = ['a', 'b', 'c', 'd', 'e'];
	$result = array_pad($arr, -7, 0);
	var_dump($result); //[0, 0, 'a', 'b', 'c', 'd', 'e']

    // Функция array_fill создает массив, заполненный элементами с определенным значением.
    var_dump(array_fill(0, 5, 'x')); //[0=>'x', 1=>'x', 2=>'x', 3=>'x', 4=>'x']

    var_dump(array_fill(3, 5, 'x')); // [3=>'x', 4=>'x', 5=>'x', 6=>'x', 7=>'x']

    $arr = array_fill(0, 3, array_fill(0, 3, 'x')); 
	var_dump($arr); //[['x', 'x', 'x'], ['x', 'x', 'x'], ['x', 'x', 'x']]

    // Функция array_fill_keys создает массив и заполняет массив элементами с определенным значением так, чтобы весь массив был с одинаковыми элементами, но разными ключами. Ключи берутся из массива, передаваемого первым параметром.
    var_dump(array_fill_keys(0, [5], 'x')); //[0=>'x', 1=>'x', 2=>'x', 3=>'x', 4=>'x']

    $arr = array_fill_keys(['a', 'b', 'c', 'd', 'e'], 'x'); 
	var_dump($arr); //['a'=>'x', 'b'=>'x', 'c'=>'x', 'd'=>'x', 'e'=>'x'] 

    // Функция array_chunk разбивает одномерный массив в двухмерный. Первым параметром она принимает массив, а вторым - количество элементов в каждом подмассиве.
    $arr = ['a', 'b', 'c', 'd'];
	$result = array_chunk($arr, 2);
	var_dump($result); //[['a', 'b'], ['c', 'd']];

    $arr = ['a', 'b', 'c', 'd', 'e'];
	$result = array_chunk($arr, 3);
	var_dump($result); //[['a', 'b', 'c'], ['d', 'e']];

    // Функция array_count_values производит подсчет количества всех значений массива. Возвращает ассоциативный массив, в котором ключами будут элементы массива, а значениями - их количество в массиве.
    $arr = ['a', 'a', 'a', 'b', 'b', 'c'];
	var_dump(array_count_values($arr)); //['a'=>3, 'b'=>2, 'c'=>1]
    
    // Функция array_map применяет заданную функцию ко всем элементам массива и возвращает измененный массив. Первым параметром функция принимает имя функции, а вторым - массив. Можно передавать дополнительные массивы третьим и так далее параметрами.
    $arr = [1, 4, 9];
	$result = array_map('sqrt', $arr);
	var_dump($result); //[1, 2, 3]

    // Функция array_intersect вычисляет пересечение массивов - возвращает массив из элементов, которые есть во всех массивах, переданных в функцию.
    $arr1 = [1, 2, 3, 4, 5];
	$arr2 = [3, 4, 5, 6, 7];
	$result = array_intersect($arr1, $arr2);
	var_dump($result); //[3, 4, 5]
?>

        <!-- Функции для времени-даты в PHP -->
<!-- Функция time возвращает текущий момент времени в формате timestamp. Формат timestamp - это количество секунд, прошедшее с 1-го января 1970 года по заданный момент времени. -->
<?php
    echo time();

    // Функция mktime переводит заданную дату в формат timestamp. Формат timestamp - это количество секунд, прошедшее с 1-го января 1970 года по заданный момент времени.
    // Давайте получим разницу в секундах между 1970 годом и 31.12.2025, 12:59:59:
    echo mktime(12, 59, 59, 12, 31, 2025); //1815386399

    // Функция date выводит дату в заданном формате. Первым параметром функция принимает формат, а вторым необязательным параметром - момент времени в формате timestamp. Если второй параметр не указан - возьмется текущий момент времени, если указан - то заданный.

    // U – количество секунд, прошедших с 1 января 1970 года (то есть timestamp).
    // z – номер дня от начала года.
    // Y – год, 4 цифры.
    // y - год, две цифры.
    // m – номер месяца (с нулем спереди).
    // n – номер месяца без нуля впереди.
    // d – номер дня в месяце, всегда две цифры (то есть первая может быть нулем).
    // j – номер дня в месяце без предваряющего нуля.
    // w – день недели (0 - воскресенье, 1 - понедельник и т.д.).
    // h – часы в 12-часовом формате.
    // H – часы в 24-часовом формате.
    // i – минуты.
    // s – секунды.
    // L – 1, если високосный год, 0, если не високосный.
    // W – порядковый номер недели года.
    // t – количество дней в указанном месяце.

    // Все примеры показаны для даты 01.06.2013 
		в 12.23.59, понедельник 
	
	echo date('Y'); // выведет '2013'
	echo date('y'); // выведет '13'
	echo date('m'); // выведет '06' - номер 
		месяца 
	echo date('d'); // выведет '01' - номер 
		дня в месяце 
	echo date('j'); // выведет '1'  - номер 
		дня в месяце (без нуля спереди) 
	echo date('w'); // выведет '1'  - понедельник
	echo date('H'); // выведет '12' - часы
	echo date('i'); // выведет '23' - минуты
	echo date('s'); // выведет '59' - секунды
	
	echo date('d-m-Y'); // выведет 
		'01-06-2013' 
	echo date('d.m.Y'); // выведет 
		'01.06.2013' 
	echo date('H:i:s d.m.Y'); // выведет 
		'12:23:59 01.06.2013'
        
    echo date('d-m-Y', mktime(0, 0, 0, 12, 29, 13)); // выведет '29-12-2013'

    // Узнаем какой день недели был 29-12-2013: 
    echo date('w', mktime(0, 0, 0, 12, 29, 13)); // выведет '0' - воскресенье

    // Функция strtotime преобразует произвольную дату в формат timestamp. Формат timestamp - это количество секунд, прошедшее с 1-го января 1970 года по заданный момент времени.
    echo strtotime('2025-12-31'); //1767128400
    echo strtotime('10 September 2000'); //968529600
    echo strtotime('Tomorrow');

    // Функция date_create создает объект 'дата', с которым в дальнейшем можно выполнять некоторые операции. К примеру, прибавить или отнять промежуток от даты с помощью date_modify или вывести дату в другом формате с помощью функции date_format.
    $date = date_create('2025-12-31');
	echo date_format($date, 'Y-m-d'); //Давайте создадим объект с датой за 2025 год, 12 месяц, 31 день:

    $date = date_create('2025-12-31');
    date_modify($date, '1 day');
    echo date_format($date, 'd.m.Y'); //Давайте создадим объект с датой за 2025 год, 12 месяц, 31 день, затем прибавим к ней 1 день и выведем в формате 'день.месяц.год':
        //01.01.2026

    // Функция date_modify позволяет прибавлять и отнимать от даты определенные промежутки времени. Дата при этом должна быть объектом, созданным функцией date_create. Функция изменяет сам переданный объект, и возвращает также измененный объект 'дата'.
    $date = date_create('2025-12-31');
	date_modify($date, '1 day');
	echo date_format($date, 'd.m.Y'); //01.01.2026


    $date = date_create('2025-12-31');
	date_modify($date, '3 days');
	echo date_format($date, 'd.m.Y'); //03.01.2026

    $date = date_create('2025-12-31');
	date_modify($date, '3 days 1 month'); 
	echo date_format($date, 'd.m.Y'); //03.02.2026

    $date = date_create('2025-01-01');
	date_modify($date, '-1 day');
	echo date_format($date, 'd.m.Y'); //31.12.2024

    // Функция date_format выводит данные из объекта 'дата' в определенном формате. Дата при этом должна быть объектом, созданным функцией date_create. Управляющие команды для формата такие же, как в функции date.
    $date = date_create('2025-12-31');
	date_modify($date, '1 day');
	echo date_format($date, 'd.m.Y'); //01.01.2026


?>

