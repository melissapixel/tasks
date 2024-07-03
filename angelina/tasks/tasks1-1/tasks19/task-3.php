<?php
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
		
		$query = "INSERT INTO users SET 
			name='$name', age='$age'"; 
		mysqli_query($conn, $query);
		
		$_SESSION['auth'] = true; // пометка об авторизации 

		// $id = mysqli_insert_id($conn);
		// $_SESSION['id'] = $id; // пишем id в сессию 

		

        
	}
?>
<?php
	if(isset($_SESSION['auth'])){
		if ($_SESSION['auth'] == true){
			echo 'Сссылка для премиум пользователей';
			?>
			<a href="#">Сссылка для премиум пользователей</a>
			<?php
			// echo $id;
			// header('Location: task-3.php');
		}
		else{
			echo 'ТЫ не авторизован';
		}
	}

	header('Location: task-3.php');
?>