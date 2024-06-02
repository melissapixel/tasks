<?php
    # Задание 1

    function setName(){
        echo 'Peter';
    }

    setName();

    # Задание 2

    function setNum(){
        $num = 0;

        for($i = 1; $i <= 100; $i++){
            $num += $i;
        }

        echo $num;
    }

    setNum();

    # Задание 3

    function num_1($num){
        echo $num * $num;
    }

    num_1(3);

    # Задание 4

    function num_2($num){
        if ($num > 0){
            echo '+++';
        } else {
            echo '---';
        }
    }

    num_2(5);

    # Задание 5

    function num_2($n_1, $n_2, $n_3){
        echo $n_1 + $n_2 + $n_3;
    }

    num_2(5, 3, 1);

    # Задание 6

     function num_2($n_1){
        return $n_1 * $n_1;
    }

    $result = num_2(5);

    # Задание 7

     function num_2($n_1, $n_2){
        return $n_1 * $n_1 + $n_2 * $n_2;
    }

    $result = num_2(2, 3);

    # Задание 8

    function num_2($n_1){
        $i = 0;
        $sum = $n_1;

        while (true){
            $sum = $sum / 2;

            if ($sum <= 10){
                return $i;
            }

            $i++;
        }
    }

    $result = num_2(220);
?>