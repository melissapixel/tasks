<?php
    $day = [0 => 'Sunday', 
            1 => 'Monday', 
            'Tuesday', 
            'Wednesday', 
            'Thursday', 
            'Friday', 
            'Saturday'
            ];

    $today = date("w", mktime(0,0,0,date("m"),date("d"),date("Y")));
    $today = (int) $today;

    foreach($day as $elem){
        if($elem == $day[$today]){
            echo '<i>' . $elem . '</i> <br>';
        } else{
            echo $elem . '<br>';
        }

    }
?>