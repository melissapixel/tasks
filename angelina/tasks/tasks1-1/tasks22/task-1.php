<?php
    if (!empty($_POST)) {
		echo json_encode($_POST);
	} else {
		echo 'error';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <label for="name">Введите ваше имя:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Отправить</button>
    </form>
</body>
</html>