<?php
$mysqli = new mysqli("localhost","root","","test");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>
<form action="" method="POST">
	<input name="name">
	<input name="age">
	<input name="salary">
	<input type="submit">
</form>
<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM users WHERE id=$id";

        $result = mysqli_query($mysqli, $query);

        $user = mysqli_fetch_assoc($result);
    }
?>

    if(isset($_POST)){
        $query = "INSERT INTO users SET name='$name', age='$age', salary='$salary'";
    }
?>