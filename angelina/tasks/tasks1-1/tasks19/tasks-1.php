
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
    	if (($_POST['name']) and ($_POST['age'])) {

            $age = $_POST['age'];
            $name = $_POST['name'];
            
            $query = "SELECT * FROM users WHERE name='$name' AND age='$age'"; 

            $res = mysqli_query($conn, $query);
            $user = mysqli_fetch_assoc($res);
            
            
            if (!empty($user)) {
                $_SESSION['auth'] = true;
                echo 'Year';
            } else {
                $_SESSION['auth'] = null;
                echo 'No';
                // print_r($_SESSION);
            }
        }
?>


<p>Вот ссылки для авторизованных пользователй:</p>
<?php
    if ($_SESSION['auth'] == true){
        echo 'Yes';
    }else{
            echo 'Не авторизован';
        }

        // print_r($_SESSION);
?>

<p>Чтобы перстать быть авторизованным:</p>
<a href="logout.php">Ссылка</a>