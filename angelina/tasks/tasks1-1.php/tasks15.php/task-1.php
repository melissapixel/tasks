<?php
    $host = 'localhost'; // имя хоста
	$user = 'root';      // имя пользователя 
	$pass = '';          // пароль
	$name = 'test';      // имя базы данных 

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$link = new mysqli($host, $user, $pass, $name); 


    $res = mysqli_query($link, "SELECT name FROM users WHERE id=1 ");

	// $res = mysqli_query($link, $query) or die(mysqli_error($link)); 
	echo $res;
?>