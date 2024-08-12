<?php
    $data = [1, 2, 3]; // Было
    $data = '[1, 2, 3]'; //Стало


    $data = ['x', 'y', 'z',]; // Было
    $data = "[
        'x', 
        'y', 
        'z'
    ]"; //Стало


    $data = [
		'x' => 'a',
		'y' => 'b',
		'z' => 'c',
	];  // Было
    $data = "{
		'x' :'a',
		'y' : 'b',
		'z' : 'c'
    }"; //Стало

    $data = [
		'ru' => ['1', '2', '3'],
		'en' => ['a', 'b', 'c'],
	]; // Было
    $data = "{
		'ru' => [1, 2, 3],
		'en' => [4, 5, 6]
	}";


    // Преобразуйте в JSON следующую структуру PHP:
    $data = [
		'x' => 1,
		'y' => 2,
		'z' => 3,
	];
    $json = json_encode($data);
    var_dump($json);

    echo '<br>';

    // Преобразуйте следующий JSON в структуру PHP:
    $json = '[
		"x",
		"y",
		"z"
	]';
    $data = json_decode($json);
    var_dump($data);

    // Преобразуйте следующий JSON в структуру PHP:
    $json = '{
		"user": {
			"name": "john",
			"surn": "smit"
		},
		"city": "London"
	}';
    $data = json_decode($json);
    echo '<br>';
    echo $data->user->name;
    echo '<br>';
    echo $data->user->surn;
    echo '<br>';
    echo $data->city;

    $json = '{
		"ru": ["пн", "вт", "ср"],
		"en": ["mn", "tu", "wd"]
	}';
    $data = json_decode($json);
    echo '<br>';
    echo $data->ru[2];

    // Преобразуйте следующий JSON в ассоциативный массив PHP:
    $json = '{
		"ru": ["пн", "вт", "ср"],
		"en": ["mn", "tu", "wd"]
	}';
    $data = json_decode($json, true);
    echo '<br>';
    echo $data['en'][1];


    // Создаем массив с числами от 1 до 100
    $data = range(1, 100);

    // Преобразуем массив в JSON
    $json = json_encode($data);
    
    // Устанавливаем заголовок для ответа
    header('Content-Type: application/json');

    // Отправляем JSON-данные
    echo $json;
?>