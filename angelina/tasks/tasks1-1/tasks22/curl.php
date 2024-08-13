<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    $url = 'https://engtrainer.ru'; // Адрес страницы для обращения
    
    $curl = curl_init(); // Инициализируем сеанс
    curl_setopt($curl, CURLOPT_URL, $url); // Указываем адрес страницы
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Сохраняем ответ сервера в переменной

    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); 

    curl_setopt($curl, CURLOPT_COOKIE, 
		'name=john; login=admin');

    $headers = [
        'Accept-Language: en-US',
        'Accept: text/html'
    ];
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); 
    var_dump($_SERVER['HTTP_ACCEPT_LANGUAGE']);
	var_dump($_SERVER['HTTP_ACCEPT']);

    $res = curl_exec($curl);  // Выполняем запрос


    if ($res === false) {
        echo 'Ошибка: ' . curl_error($curl); // Выводим сообщение об ошибке
    } else {
        var_dump($res); // Показываем содержимое полученного ответа
    }

    if (!empty($_COOKIE)) {
		echo json_encode($_COOKIE);
	} else {
		echo 'error';
	}

    curl_close($curl); // Закрываем cURL-сессию
    
    // sleep(5); // Задержка на 5 секунд перед завершением скрипта
?>