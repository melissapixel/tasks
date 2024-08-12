<?php
$mysqli = new mysqli("localhost","root","","test");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>
<?php
    $query = "SELECT * FROM users";
	$result = mysqli_query($mysqli, $query) or 
		die(mysqli_error($mysqli)); 
	for ($data = []; $row = mysqli_fetch_assoc($result); 
		$data[] = $row); 
?>

<?php foreach ($data as $elem) {?>
<DIV>
    <h2><?= $elem['name'] ?></h2>
    <p><?= $elem['age'] ?>, <b><?= $elem['salary'] ?>$</b></p>
</DIV>
<?php } ?>
<br>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>salary</th>
    </tr>
    <?php foreach ($data as $elem) {?>
        <tr>
            <td><?= $elem['id'] ?></td>
            <td><?= $elem['name'] ?></td>
            <td><?= $elem['age']  ?></td>
            <td><?= $elem['salary'] ?></td>
        </tr>
    <?php } ?>
</table>
<br>
<?php
	if (isset($_GET['del'])) {
		$id = $_GET['del'];
    $query = "DELETE FROM users WHERE id=$id"; 
    mysqli_query($mysqli, $query);
    }
?>
 <?php foreach ($data as $elem) {?>
        <tr>
            <td><?= $elem['id'] ?></td>
            <td><?= $elem['name'] ?></td>
            <td><?= $elem['age']  ?></td>
            <td><?= $elem['salary'] ?></td>
            <td><a href="?del=<?= $elem['id'] ?>">delete</a></td>
        </tr>
    <?php } ?>
<br>
<form action="" method="POST">
	<input name="name">
	<input name="age">
	<input name="salary">
	<input type="submit">
</form>
<?php
	if (!empty($_POST)) {
		// тут будет код обработки формы
        $name = $_POST['name'];
        $age = $_POST['age'];
        $salary = $_POST['salary'];

        $query = "INSERT INTO users SET name='$name', age='$age', salary='$salary'";

    mysqli_query($mysqli, $query);
	}
?>
<br>
<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM users WHERE id=$id";

        $result = mysqli_query($mysqli, $query);

        $user = mysqli_fetch_assoc($result);
    }
?>