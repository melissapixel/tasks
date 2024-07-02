<?php
    $age = 4;

    if (($age < 10) or ($age > 90)){
        echo "Подходит под 1 условие";
    } if(!($age < 10) or ($age > 90)){
        $age = (string) $age;
            $age1 = $age[0];
            $age2 = $age[1];
            $age_sum = $age[0] + $age[1];
            echo $age_sum;
            if($age_sum <= 9){
                echo " .сумма цифр однозначна";
            } else{
                echo " .сумма цифр двузначна";
            }
    }

?>