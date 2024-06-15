<?php
    // В PHP одинарные и двойные кавычки для строк на самом деле не совсем эквиваленты. Дело в том, что в строки в двойных кавычках можно вставлять переменные - и вместо этих переменных подставится их значение.
    $str = 'aaa';
	echo 'xxx ' . $str . ' yyy';
    $str = 'aaa';
	echo "xxx $str yyy";

    $arr = ['a', 'b', 'c'];
	echo "xxx $arr[0] yyy";

    // А вот вставка элементов ассоциативных массивов просто так работать не будет:
    $arr = ['a'=>1, 'b'=>2, 'c'=>3];
	echo "xxx $arr['a'] yyy"; // не работает

    $arr = ['a'=>1, 'b'=>2, 'c'=>3];
	echo "xxx {$arr['a']} yyy"; // работате

    $arr = ['a'=>1, 'b'=2, 'c'=3];
	echo "xxx $arr[a] yyy"; // работате

    for ($i = 1; $i <= 5; $i++) {
		echo "xxx $i yyy";
	}

    $arr = [1, 2, 3, 4, 5];
	foreach ($arr as $elem) {
		echo "xxx $elem yyy";
	}

    // Давайте посмотрим, как выполняются вставки при переборе многомерных массивов. Пусть, к примеру, у нас есть вот такой массив:
	$users = [
		[
			'name' => 'user1',
			'age'  => 30,
		],
		[
			'name' => 'user2',
			'age'  => 31,
		],
		[
			'name' => 'user3',
			'age'  => 32,
		],
	];
    foreach ($users as $user) {
		echo "{$user['name']}: {$user['age']}<br>"; 
	}
    //or
    foreach ($users as $user) {
		echo "$user[name]: $user[age]<br>"; 
	}

    $text = 'aaa';
	echo "<p>$text</p>";

    // Давайте теперь научимся формировать теги с атрибутами. Пусть для примера мы хотим сделать ссылку. При этом текст и адрес ссылки будут хранится в соответствующих переменных:
    $text = 'link';
	$href = 'index.html';
    echo '<a href="' . $href . '">' . $text . '</a>'; 
    echo "<a href="$href">$text</a>"; // не будет работать 
    echo "<a href='$href'>$text</a>";
	echo "<a href=\"$href\">$text</a>";

    for ($i = 1; $i <= 5; $i++) {
		echo "<p>$i</p>";
	}

    foreach ($arr as $elem) {
		echo "<p>$elem</p>";
	}

	echo '<table>';
	foreach ($arr as $row) {
		echo '<tr>';
		foreach ($row as $key => $cell) {
			if ($key === 'salary') {
				$cell .= ' dollars';
			}
			
			echo "<td>$cell</td>";
		}
		echo '</tr>';
	}
	echo '</table>';
?>
<p><?php echo sqrt(4); ?></p>
<?php
	
?>