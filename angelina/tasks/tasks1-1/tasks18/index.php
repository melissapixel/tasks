<?php
$mysqli = new mysqli("localhost","root","","test");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>
<form method="POST" action="">
<input type="text" name="name">
<input type="submit" value="Submit">
</form>
<?php
	if (isset($_POST['name'])) {
		header('Location: page.php');
        // die();
	}
	
    $name = $_POST['name'];
	$query = "UPDATE users SET name='$name' WHERE id=4"; 
	mysqli_query($mysqli, $query); // выполнится даже при редиректе! 
?>