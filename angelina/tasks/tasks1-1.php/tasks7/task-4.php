<?php
    echo time();

    echo '<br>';

    echo mktime(4, 1, 2025);

    echo '<br>';

    echo mktime(12, 31, 2024);

    echo '<br>';

    echo mktime(13, 12, 59, 4, 14, 2000);

    echo '<br>';

    echo mktime(7, 23, 48, 5, 31, 2024);

    echo '<br>';

    echo date('Y, F, j, H, i, s');

    echo '<br>';

    echo date('Y-m-j');

    echo '<br>';

    echo date('j.m.Y');

    echo '<br>';

    echo date('Y.m.y');

    echo '<br>';

    echo date('H:i:s');

    echo '<br>';

    echo date('d.m.Y', mktime(0, 0, 0, 12, 02, 2025));

    echo '<br>';

    $arr = [0 => 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    $day = date('w');
    echo $arr[$day];

    echo '<br>';

    echo date('F');

    echo '<br>';

    echo date('t');

    echo '<br>';

    $day = date('Y-n-j');

    $data = date_create('2025-12-31');
    date_modify($data, 2 day, 1 month, 3 day, 1 year);
    echo date_format($date, 'Y:n:j');
?>