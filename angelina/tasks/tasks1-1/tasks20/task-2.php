<?php
    $data = range(1, 100);

    // Преобразуем массив в JSON
    $json = json_encode($data);
    
    // Устанавливаем заголовок для ответа
    header('Content-Type: application/json');

    // Отправляем JSON-данные
    echo $json;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>fgre</p>
</body>
</html>