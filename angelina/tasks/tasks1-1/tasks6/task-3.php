<?php
	$arr = [
		[
			[1, 2],
			[3, 4],
		],
		[
			[5, 6],
			[7, 8],
		],
	];

    $result = [];
        array_walk_recursive($arr, function($item) use (&$result) {
            $result[] = $item;
        });
        echo array_sum($result);
?>