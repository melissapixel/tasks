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

<p>Вот ссылки для авторизованных пользователй:</p>
<?php
    if ($_SESSION['auth'] = true){
        echo 'Yes';
        else{
            echo 'Не авторизован';
        }
    }
?>

<p>Чтобы перстать быть авторизованным:</p>
<a href="logout.php"></a>