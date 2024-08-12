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
	<input name="name">
	<input name="age">
	<input type="submit">
</form>

<?php
	if (!empty($_POST['name']) and !empty($_POST['age'])) {

				$name = $_POST['name'];
				$age= $_POST['age'];
				
				$query = "SELECT * FROM users 
					WHERE name='$name'"; 
				$user = mysqli_fetch_assoc(mysqli_query($conn, $query));

				$_SESSION['auth'] = false;

		if (empty($user)) {
				$query = "INSERT INTO users 
					SET name='$name', age='$age'"; 
				mysqli_query($conn, $query);
		
				$_SESSION['auth'] = true; // пометка об авторизации 

				$id = mysqli_insert_id($conn);
				$_SESSION['id'] = $id; // пишем id в сессию 

				header('Location: task-3.php');
		}
	}
?>

<?php
	$message = 'ТЫ не авторизован';

	if(isset($_SESSION['auth'])){

		if ($_SESSION['auth'] === true){
?>
				<a href="#">Сссылка для Авторизованных</a>
<?php
				echo $_SESSION['id'];
				$message = 'Good';
		}
		echo $message;
	}
?>