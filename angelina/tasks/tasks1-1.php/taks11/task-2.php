<?php if (empty($_GET)) { ?>
        <form action="" method="GET">
            <input name="name">
            <input type="submit">
        </form>
    <?php
        } else {
            echo $_GET['name'];
        }
    ?>

<form action="" method="GET">
	<input
		name="country"
		value="<?php if (isset($_GET['country'])) 
			echo $_GET['country'] ?>" 
    >

    <input
		name="city"
		value="<?php if (isset($_GET['city'])) 
			echo $_GET['city'] ?>" 
    >
	<input type="submit">
</form>

<h4>Оставьте отзыв!</h4>
<?php if (empty($_GET['text'])) { ?>
        <form action="" method="GET">
            <input name="text">
            <input type="submit">
        </form>
    <?php
        } else {
            echo $_GET['text'];
        }
    ?>