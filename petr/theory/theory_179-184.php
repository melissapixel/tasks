<?php

    # Рекурсия - это функция, которая вызывает саму себя. 

    $i = 0;

    function recursion(){
        $i++;

        if ($i >= 10){
            return $i;
        } else {
            recursion();
        }
    }

    recursion();

?>