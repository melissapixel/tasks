<form action="/result.php">
    <input name="name">
    <input name="age">
    <input type="salary">
</form>
<br>
<form method="GET">
	<input name="num1">
	<input name="num2">
    <input name="num3">
	<input type="submit">
</form>
    <?= $_GET['num1'] + $_GET['num2'] + $_GET['num3']; ?>

    <form action="" method="GET">
        <input name="lname">
        <input name="fname">
        <input name="dname">

        <input type="submit">
    </form>
    <?php
	if (!empty($_GET)) {
		echo $_GET['lname'] . ' ' . $_GET['fname'] . ' ' . $_GET['dname'];
	}
?>
