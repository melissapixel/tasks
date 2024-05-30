<?php
    echo pow(2, 10);

    echo '<br>';

    echo sqrt(245);

    echo '<br><br>';

    $arr = [4, 2, 5, 19, 13, 0, 10];

    $sum = 0;

    foreach ($arr as $elem) {
        $sum += sqrt($elem);
    }

    echo sqrt($sum);

    echo '<br><br>';

    $num = sqrt(379);

    echo round($num, 1);

    echo '<br>';

    echo round($num, 2);

    echo '<br>';

    echo round($num, 3);

    echo '<br><br>';

    $num = sqrt(587);

    $arr['floor'] = floor($num);
    $arr['ceil'] = ceil($num);

    var_dump($arr);

    echo '<br><br>';

    $arr = [4, -2, 5, 19, -130, 0, 10];

    echo min($arr);

    echo '<br>';

    echo max($arr);

    echo '<br><br>';

    echo mt_rand(1, 100);

    $arr = [];

    for ($i = 0; $i < 10; $i++){
        $arr[$i] = mt_rand(1, 100);
    }

    var_dump($arr);

    echo '<br><br>';

    $a = 5;
    $b = 2;

    echo abc($a - $b);
?>