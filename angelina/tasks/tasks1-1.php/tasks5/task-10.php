<?php
    $day = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

    $today = date("w", mktime(0,0,0,date("m"),date("d"),date("Y")));

    foreach($day as $elem){
        if ($elem == 'Sunday' or $elem == 'Saturday'){
            echo '<b>' . $elem . '</b> <br>';
        } else{
            echo $elem . '<br>';
        }
    }
?>