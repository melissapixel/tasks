<?php
    mb_internal_encoding('UTF-8');

    echo '<i>Курсивный текст</i><br>';

    echo 1 . '<br>';
    echo 2 . '<br>';
    echo 3 . '<br>';
    echo 4 . '<br>';
    echo 5 . '<br>';

    echo '<img src="https://get.wallhere.com/photo/anime-anime-girls-school-uniform-schoolgirl-blue-eyes-1243853.jpg" alt="picture" width="400px"><br>';
    echo '<input type="text" value="Какой-то текст тут"><br>';
    echo '<textarea>Тут какой-то текст</textarea>';

    $let_true = true;
    $let_false = false;

    echo $let_true;
    echo $let_false;

    $var_null = null;

    var_dump($var_null);
    var_dump($none);

    $to_num = (int) '12345';
    $to_num_float = (float) '12.345';
    $to_num = (int) '12.345';
    $to_string = (string) 12345;

    $string = 'abcde';

    echo $string[0] . ' ';
    echo $string[2] . ' ';
    echo $string[4] . ' ';

    $string = $string[4] . $string[3] . $string[2] . $string[1] . $string[0];

    echo $string;

    $num = 2;

    echo $string[$num];

    $string = 'string';
    echo $string[strlen($string) - 1];

    # 43 след задание

    $num_str = '12345';
    echo $num_str[0] + $num_str[1] + $num_str[2] + $num_str[3] + $num_str[4];

    $num_str = (string) 12345;
    echo $num_str[0] + $num_str[1] + $num_str[2] + $num_str[3] + $num_str[4];

    $num = 47;
	$num += 7;
	$num -= 18;
	$num *= 10;
	$num /= 15;
	echo $num;

    $num = 10;
	$num++;
	$num++;
	$num--;
	echo $num . '<br>';

    echo 60 * 60 * 24 . '<br>';
    echo 60 * 60 * 24 * 30 . '<br>';

    echo 'Площадь круга: ' . 3.14 * 5 * 5;
    echo 'Площадь квадрата: ' . 8 * 8;
    echo 'Площадь прямоугольника: ' . 8 * 4;

    # Завершено 30-50
?>