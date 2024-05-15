<?php

    $arr = ['a', 'b', 'c'];

    echo $arr;
    var_dump($arr);

    echo $arr[0];
    echo $arr[1];
    echo $arr[2];

    echo $arr[0] . '+' . $arr[1] . '+' . $arr[2];

    $arr_num = [1, 2, 3];
    echo $arr_num[0] + $arr_num[1] + $arr_num[2];

    $arr_num = [2, 5, 3, 9];
    echo $arr_num[0] * $arr_num[1] + $arr_num[2] * $arr_num[3];

    $ass_arr = [1 => 'a', 2 => 'b', 3 => 'c'];
    var_dump($ass_arr);

    $user = ['name' => 'Vasia', 'surname' => 'Ivanov'];

    echo count($arr_num);
    echo $arr_num[count($arr_num) - 1]; // Выведет последний элемент массива

    $arr_num[] = 11; // Добавится в конец массива
?>