<?php
    // Основы работы с формами в PHP
    // Мы можем получать данные от пользователя сайта с помощью форм. Формы создаются с помощью тега form, тегов input и кнопок submit:
        <form>
            <input>
            <input>
            <input type="submit">
        </form>

        <form>
            <input name="test1">
            <input name="test2">
            <input type="submit">
        </form>

        // С помощью атрибута action мы указываем файл, на который будет отправлена форма:

        // С помощью атрибута method мы указываем метод отправки формы. Он может быть GET или POST.

        // Пусть наша форма отправляется методом GET на страницу result.php:
        <form action="/result.php" method="GET">
            <input name="test1">
            <input name="test2">
            <input type="submit">
        </form>
        // В этом случае на этой странице в адресной строке появятся данные формы в следующем формате: после адреса страницы будет стоять знак ?, а после него имена инпутов и введенные пользователем значения: result.php?test1=value1&test2=value2.

        // Пусть наша форма отправляется методом POST на страницу result.php. В этом случае данные также будут отправлены, но в адресной строке отражены не будут:
        <form action="/result.php" method="POST">
            <input name="test1">
            <input name="test2">
            <input type="submit">
        </form>

        // Пусть у нас есть файл form.php, а в нем HTML форма, отправляющаяся на страницу result.php. На этой странице мы можем получить данные формы с помощью специальных переменных $_GET, $_POST и $_REQUEST.
        // Эти переменные содержат в себе массив данных отправленной формы. При этом ключами этого массива будут имена инпутов, а значениями - те данные, которые были введены в эти инпуты.
        // При этом, если форма была отправлена методом GET, то данные будут в массиве $_GET, а если методом POST, то данные будут соответственно в массиве $_POST. А в переменной $_REQUEST будут лежать данные формы, отправленные любым из методов.
        // Давайте посмотрим на примере. Пусть файл form.php содержит форму, отправляющуюся методом GET на страницу result.php:
        <form action="/result.php" method="GET">
            <input name="test1">
            <input name="test2">
            <input type="submit">
        </form>

        var_dump($_GET);     // массив с ключами test1  test2 
	var_dump($_POST);    // пустой массив 
	var_dump($_REQUEST); // массив с ключами test1 и test2 
    
    echo $_GET['test1'] . $_GET['test2'];

    // Если оставить атрибут action пустым или убрать его совсем, то форма будет отправляться на эту же страницу.

    // Скрытие формы после отправки в PHP
    <?php
	if (empty($_GET)) {
    ?>
        <form action="" method="GET">
            <input name="test1">
            <input name="test2">
            <input type="submit">
        </form>
    <?php
        } else {
            echo $_GET['test1'] + $_GET['test2'];
        }
    ?>

    // Давайте сделаем так, чтобы после отправки введенные данные не пропадали из нашего инпута:
    <form action="" method="GET">
	<input
		name="test"
		value="<?php if (isset($_GET['test'])) 
			echo $_GET['test'] ?>" 
    >
	<input type="submit">
    </form>

    // Пусть мы хотим сделать так, чтобы по при заходе на страницу в инпуте уже был какой-то текст. Пользователь может поредактировать этот текст, а может оставить его без изменения. А после отправки формы в инпуте должен остаться тот текст, который был на момент отправки.

    <form action="" method="GET">
	<input
		name="test"
		value="<?php
			if (isset($_GET['test']))
				echo $_GET['test'];
			else echo 'default' 
		?>"
	>
	<input type="submit">
    </form>
?>

<form action="" method="GET">
	<input
		name="test"
		value="<?php
			echo isset($_GET['test']) ? $_GET['test'] 
				: 'default'  
		?>"
	>
	<input type="submit">
</form>

<form action="" method="GET">
	<input name="test" value="<?= 
		$_GET['test'] ?? 'default' ?>"> 
	<input type="submit">
</form>

<form action="" method="GET">
	<textarea name="test"></textarea>
	<input type="submit">
</form>

// Давайте теперь научимся работать с флажками checkbox в PHP. Сделаем такой флажок в нашей форме:
<form action="" method="GET">
    <input type="checkbox" name="flag">
        <input name="text">
    <input type="submit">
</form>

// После отправки формы в $_GET флажка будет содержаться строка 'on', если флажок был отмечен и null, если нет:
var_dump($_GET['flag']); // 'on' или null 

<?php
	if (!empty($_GET)) { // если форма была отправлена 
		if (isset($_GET['flag'])) { // если флажок отмечен 
			echo 'отмечен';
		} else {
			echo 'не отмечен';
		}
	}
?>