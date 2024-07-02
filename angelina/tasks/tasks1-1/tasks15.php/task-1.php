<?php
    $host = 'localhost'; // имя хоста
	$user = 'root';      // имя пользователя 
	$pass = '';          // пароль
	$name = 'test';      // имя базы данных 

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$link = mysqli_connect($host, $user, $pass, $name); 
	mysqli_query($link, "SET NAMES 'utf8'"); 

	$query = 'SELECT * FROM users';
	$res = mysqli_query($link, $query) or die(mysqli_error($link)); 
	var_dump($res);
?>
<br>
<?php
	$row = mysqli_fetch_assoc($res);
	var_dump($row);
?>
<br>
<?php
	$query = 'SELECT * FROM users';
	$res = mysqli_query($link, $query) or die(mysqli_error($link)); 
?>
<br>
<?php
	for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row); 
	
	function doSomething($item, $key){
		echo $key."=>".$item.PHP_EOL;
	}
	array_walk_recursive($data, 'doSomething');
?>
<br>
<br>
<?php
	$result = mysqli_query($link, 'SELECT * FROM users where age>=17');
	foreach ($result as $row) {
		printf("%s (%s)\n", $row["name"], $row["age"]);
	}
?>
<br>
<?php
	$result = mysqli_query($link, 'SELECT * FROM users where age<17 or age=17');
	foreach ($result as $row) {
		printf("%s (%s)\n", $row["name"], $row["age"]);
	}
?>
<br>
<?php
	$query = "INSERT INTO users (name, age) VALUES ('kate', 15)";
	mysqli_query($link, $query);
?>
<?php
	$query = "UPDATE users SET age=24 WHERE name='Kate'";
	mysqli_query($link, $query); 
?>
<?php
	$query = "DELETE FROM users WHERE name='Kate'"; 
	mysqli_query($link, $query);
?>
<?php
	$query = "SELECT * FROM users ORDER BY age ";
	$result = mysqli_query($link, $query); 

	foreach ($result as $row) {
		printf("%s (%s)\n", $row["name"], $row["age"]);
	}
?>
