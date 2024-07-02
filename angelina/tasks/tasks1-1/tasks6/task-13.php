<?php
    $products = [
		[
			'name'   => 'мясо',
			'price'  => 100,
			'amount' => 5,
		],
		[
			'name'   => 'овощи',
			'price'  => 200,
			'amount' => 6,
		],
		[
			'name'   => 'фрукты',
			'price'  => 300,
			'amount' => 7,
		],
	];

    foreach ($products as $fruet){
        echo $fruet['name'] . ': ' . $fruet['price'] . '$, ' . $fruet['amount'] . '<br>';

    }   
?>