<?php
session_start();
// session_destroy();
$servername = "localhost";
$username = "root";
$password = "";
$bd = 'test';

// Create connection
$conn = new mysqli($servername, $username, $password, $bd,);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<form action="" method="POST">
	<input name="name" value="<?= $_SESSION['name'] ?>"> 
	<input name="login" value="<?= 
		$_SESSION['login'] ?>"> 
	<input type="submit" name="submit">
</form>

<?php
	if (!empty($_POST['submit'])) {
		$name = $_POST['name'];
		$login = $_POST['login'];

        // Проверьте, что `$id` получено, например, из сессии или другого источника
	if (isset($_SESSION['id'])) {
		$id = $_SESSION['id'];
	}
		
		// Подготовленный запрос для предотвращения SQL-инъекций
        $stmt = $conn->prepare("UPDATE example SET name=?, login=? WHERE id=?");
        $stmt->bind_param("ssi", $name, $login, $id);
    
        // Выполнение запроса и проверка на ошибки
        if ($stmt->execute()) {
            $_SESSION['name'] =  $name;
            $_SESSION['login'] =  $login;
            echo "Запись успешно обновлена.";
        } else {
            echo "Ошибка: " . $stmt->error;
        }
	}
?>