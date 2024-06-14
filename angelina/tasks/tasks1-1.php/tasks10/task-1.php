<?php
	$name = 'user';
	echo "hello $name !";
?>
<br>
<?php
	$arr = ['1', '2', '3'];
	echo "aaa $arr[0] bbb  $arr[1]"; 
?>
<br>
<?php
	$arr = ['a' => 1, 'b' => 2, 'c' => 3]; 
	echo "text $arr[a] text $arr[b] text"; 
?>
<br>
<!-- <?php
	for ($i = 1; $i <= 10; $i++) {
		for ($j = 1; $j <= 10; $j++) {
			echo "nums: $i $j  <br>"; 
		}
	}
?> -->
<br>
<?php
	$arr = ['a' => 1, 'b' => 2, 'c' 
		=> 3]; 

	foreach ($arr as $key => $elem) {
		echo "pair: $elem $key <br>"; 
	}
?>
<br>
<?php
	$products = [
		[
			'name'   => 'product1',
			'price'  => 100,
			'amount' => 5,
		],
		[
			'name'   => 'product2',
			'price'  => 200,
			'amount' => 6,
		],
		[
			'name'   => 'product3',
			'price'  => 300,
			'amount' => 7,
		],
	];
    foreach($products as $elem){
        echo "$elem[name]. price: $elem[price]. amount: $elem[amount]<br>";
    }
?>
<?php
	$text1 = 'aaa';
	$text2 = 'bbb';
	$text3 = 'ccc';

    echo "<p>$text1</p>";
    echo "<p>$text2</p>";
    echo "<p>$text3</p>";
?>
<?php
	$src1 = '1.png';
	$src2 = '2.png';
	$src3 = '3.png';
    echo "<img src='$src1' >";
?>
<br>
<?php
    echo "<ul>";
    for ($i = 1; $i <= 5; $i++) {
		echo "<p>$i</p>";
	}
    echo "</ul>";
?>
<br>
<?php
    $arr = ['text1', 'text2', 'text3'];
    echo "<select>";
    foreach ($arr as $elem) {
		echo "<option>$elem</option>";
	}
    echo "</select>";

    echo '<table>';
	foreach ($arr as $user) {
		echo '<tr>';
		
		echo "<td>{$user['name']}</td>";
		echo "<td>{$user['age']} years</td>";
		echo "<td>{$user['salary']} dollars</td>";
		
		echo '</tr>';
	}
	echo '</table>';
?>
