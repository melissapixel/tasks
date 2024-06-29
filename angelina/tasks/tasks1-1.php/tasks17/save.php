<?php
$mysqli = new mysqli("localhost","root","","test");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>
<?php
	$id = $_GET['id'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$salary = $_POST['salary'];

    $query = "UPDATE users SET
		name='$name', age='$age', salary='$salary'
	WHERE id=$id";

    mysqli_query($mysqli, $query);
    echo 'юзер успешно изменен!';
?>