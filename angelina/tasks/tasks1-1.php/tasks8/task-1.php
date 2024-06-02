<?php
    function my_name(){
        echo 'Angelina';
    };
    my_name();

    echo '<br>';

    function num(){
        for($i = 1; $i <=100; $i++){
            echo $i;
        }
    }
    num();

    echo '<br>';

    function cube($i){
        return $i * $i * $i;
    }
    $num = cube(2) + cube(3);
    echo $num;

    echo '<br>';

    function inc_or_dec($num){
        if($num >= 0){
            echo'+++';
        } else{
            echo '---';
        }
    } inc_or_dec(-3);

    echo '<br>';

    function sum_for_tree_num($num1, $num2, $num3){
        echo $num1 + $num2 + $num3;
    }
    $param1 = 1;
	$param2 = 2;
	$param3 = 3;
    sum_for_tree_num($param1, $param2, $param3);


?>