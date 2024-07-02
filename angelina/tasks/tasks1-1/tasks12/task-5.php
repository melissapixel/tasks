<!-- <?php
	if (!empty($_SESSION)) {
		echo $_SESSION['fname'] . ' ' . $_SESSION['lname'];
	} else{
        echo "No";
    }
?> -->

<?php
    session_start();
    echo $_SESSION['fname'] . ' ' . $_SESSION['lname'];
?>