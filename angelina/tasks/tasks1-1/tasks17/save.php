<?php
$conn = new mysqli("localhost","root","","test");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conni -> connect_error;
  exit();
}
?>
<?php
	// $_GET["id"] =$userid;
	if($_SERVER["REQUEST_METHOD"] === "GET" AND isset($_GET["id"]))
	{
		$userid = $conn->real_escape_string($_GET["id"]);
		$sql = "SELECT * FROM users WHERE id = '$userid'";
		if($result = $conn->query($sql)){
			if($result->num_rows > 0){
				foreach($result as $row){
					$username = $row["name"];
					$userage = $row["age"];
					// $usersalary = $row['salary'];
				}
				echo "<h3>Обновление пользователя</h3>
					<form method='post'>
						<input type='hidden' name='id' value='$userid' />
						<p>Имя:
						<input type='text' name='name' value='$username' /></p>
						<p>Возраст:
						<input type='number' name='age' value='$userage' /></p>
						// <p>Зарплата
						// <input type='text' name='salary' value='$usersalary' /></p>
						<input type='submit' value='Сохранить'>
				</form>";
			}
			else{
				echo "<div>Пользователь не найден</div>";
			}
			$result->free();
		} else{
			echo "Ошибка: " . $conn->error;
		}
	}
	elseif (isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["age"])) {
      
		$userid = $conn->real_escape_string($_POST["id"]);
		$username = $conn->real_escape_string($_POST["name"]);
		$userage = $conn->real_escape_string($_POST["age"]);
		// $usersalary = $conn->real_escape_string($_POST["salary"]);
		$sql = "UPDATE users SET name = '$username', age = '$userage' WHERE id = '$userid'";
		if($result = $conn->query($sql)){
			header("Location: index.php");
		} else{
			echo "Ошибка: " . $conn->error;
		}
	}
	else{
		echo "Некорректные данные";
	}
?>
