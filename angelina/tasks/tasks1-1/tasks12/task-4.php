<?php
	session_start();
		$_SESSION['fname'] = $_POST['fname'];
		$_SESSION['lname'] = $_POST['lname'];
?>
<form method="POST">
	<input name="fname">
	<input name="lname">
	<input type="submit">
</form>
