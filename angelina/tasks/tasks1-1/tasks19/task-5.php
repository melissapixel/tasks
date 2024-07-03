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
            name
            <input name="name">
            <br>
            Password
            <input name="password" type="password">
            <br>
            Login
            <input name="login" type="login">
            <input type="submit">
</form>


<?php
	if (!empty($_POST['name']) and !empty($_POST['password']) and !empty($_POST['login'])) {

				$name = $_POST['name'];
				$password= $_POST['password'];
                $login= $_POST['login'];
				
				$query = "INSERT INTO example 
					SET name='$name', password='$password', login='$login'"; 
				mysqli_query($conn, $query);

                 $id = mysqli_insert_id($conn);
				$_SESSION['id'] = $id; // пишем id в сессию 
		
				$_SESSION['auth'] = true; // пометка об авторизации 

                // var_dump($user);

				header('Location: task-5.php');
		}
	
	$message = 'u are not Avtorization';

    if(isset($_SESSION['auth'])){
		if ($_SESSION['auth'] === true){

				echo "U'r Id: " . $_SESSION['id'];
				$message = 'Good';

                $stmt = mysqli_prepare($conn, "SELECT * FROM example
					WHERE id=?");

                mysqli_stmt_bind_param($stmt, "i",  $_SESSION['id']); // "i" - тип параметра (целое число)

                mysqli_stmt_execute($stmt);

                $result = mysqli_stmt_get_result($stmt);
                
                $user = mysqli_fetch_assoc($result);

                if ($user) {
                    $_SESSION['name'] =  $user['name'];
                    $name = $_SESSION['name'];

                    $_SESSION['password'] =  $user['password'];
                    $password = $_SESSION['password'];

                    $_SESSION['login'] =  $user['login'];
                    $login = $_SESSION['login'];

                    $_SESSION['id'] =  $user['id'];
                    $id = $_SESSION['id'];
                    ?>
                    <a href="task-6.php">Ссылочка</a>
                    <?php
                } else {
                    echo "Пользователь не найден";
                }
		}
		echo $message;
    }
?>
