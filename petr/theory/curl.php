<?php

    $data = [
        "host" => "www.example.ru",
        "key" => "jdskjHSDiurewrwe98fdfds789fds6fds786fsd876",
        "urlList" => [
            "https://www.example.ru/folder/computer.php"
        ]
    ];
    
    $data_string = json_encode ($data, JSON_UNESCAPED_UNICODE);
    $curl = curl_init("https://yandex.com/indexnow");
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, false);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        "Content-Type: application/json",
        "Content-Length: " . strlen($data_string))
    );
    $result = curl_exec($curl);
    curl_close($curl);

    // Отправка POST запроса к сайту (API)

    // Чтобы вернуть данные нужно вывести их через ECHO

?>