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
<form method="POST">
            Please, what is ur Password.
            <input name="password" type="password">
            <br>
            <input type="submit">
</form>
<?php
	if (isset($_SESSION['id'])) {
		$id = $_SESSION['id'];
	}
	
	$query = "SELECT * FROM example 
		WHERE id='$id'"; 
	
	$res = mysqli_query($conn, $query);
	$user = mysqli_fetch_assoc($res);
	
	$hash = $user['password']; // соленый пароль из БД 
	echo $hash;
	// Проверяем соответствие хеша из базы введенному старому паролю 
    if (isset($_POST['password'])){
	if ($_POST['password'] == $user['password']) {
		$query = "DELETE FROM example WHERE id='$id'"; 
		mysqli_query($conn, $query);
        echo 'ur profil is deleted';
	} else {
		//  пароль введен неверно, выведем сообщение 
        echo 'Is not correct password';
	}
}
?>
