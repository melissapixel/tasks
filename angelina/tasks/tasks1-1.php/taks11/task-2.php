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

<form action="" method="GET">
	<select name="test">
		<option value="1" <?php
			if (!empty($_GET['test']) and $_GET['test'] 
				=== '1') { 
				echo 'selected';
			}
		?>>item1</option>
		<option value="2" <?php
			if (!empty($_GET['test']) and $_GET['test'] 
				=== '2') { 
				echo 'selected';
			}
		?>>item2</option>
		<option value="3" <?php
			if (!empty($_GET['test']) and $_GET['test'] 
				=== '3') { 
				echo 'selected';
			}
		?>>item3</option>
	</select>
	<input type="submit">
</form>