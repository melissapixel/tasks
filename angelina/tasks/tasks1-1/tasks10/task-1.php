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
>
<p><?php echo date('w'); ?></p>
<p><?php echo sqrt(4); ?></p>
<p><?php echo date('Y-m-d H:i:s'); ?></p>

<?php
	$str = 'text';
?>
<p><?= $str ?></p>
<br>
<?php
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
?>
	<p><?= $arr['a'] ?></p>
	<p><?= $arr['b'] ?></p>
	<p><?= $arr['c'] ?></p>
