<!-- Протокол HTTP в PHP -->
<!-- Метод HTTP запроса в PHP

В PHP можно определить HTTP метод, которым был осуществлен запрос. Для этого нужно прочитать следующее значение: -->
<?php
	$method = $_SERVER['REQUEST_METHOD'];
	var_dump($method); // 'GET' или 'POST' 
?>

<!-- HTTP заголовки запроса в PHP

В PHP можно получить значения заголовков запроса. Они содержатся в суперглобальной переменной $_SERVER в виде массива. При этом ключ каждого заголовка запроса начинается 'HTTP_', а далее идет имя этого заголовка заглавными буквами.

Давайте, например, получим содержимое заголовка Host: -->
<?php
	echo $_SERVER['HTTP_HOST'];
?>
<!-- Если в имени заголовка есть дефисы, то в ключе PHP они превращаются в подчеркивания. Для примера, получим содержимое заголовка Accept-Encoding: -->
<?php
	echo $_SERVER['HTTP_ACCEPT_ENCODING'];
?>



<!-- Массив заголовков HTTP запроса в PHP

Можно получить все HTTP заголовки запроса в виде массива (работает не под всеми серверами). Это делается с помощью следующей функции: -->
<?php
	$arr = getallheaders();
	var_dump($arr);
?>



<!-- Заголовки HTTP ответа в PHP

С помощью PHP можно отправлять заголовки HTTP ответа в браузер. Это делается с помощью функции header: -->
<?php
	header('Content-Type: text/html');
?>

<!-- Проблема с заголовками HTTP ответа в PHP
По правилам HTTP сначала отправляются HTTP заголовки, а потом тело HTTP ответа. Из-за этого работа с функцией header в PHP имеет свои особенности.

Дело в том, что если перед вызовом этой функции будет какой-то вывод на экран, он будет трактоваться как начало тела ответа. В этом случае вызов функции header приведет к предупреждению PHP с текстом headers already sent. При этом заголовки может даже и отправятся. Может даже и ошибка не выведется (зависит от настроек PHP). Но чаще всего это будет только на локалке, а при выкладке сайта в интернет все поломается.

Под выводом на экран подразумевается любой текст. Например, так: -->



<!-- Проблема с заголовками HTTP при include в PHP
Проблема с заголовками HTTP может также возникнуть при включениях файлов через include. Она проявится в том случае, когда после закрывающий скобки ?> поставлены пробелы или пустые строки, вот так: -->
<?php
	// some code
?>
<!-- В этом случае при инклуде нашего файла в другой файл оставленные пустые строки подействуют как вывод на экран: -->
<?php
	include 'file.php'; // внутри вывод на экран 
	header('Content-Type: text/html');
?>
<!-- Для исправления проблемы лучше во всех PHP файлах удалять последний закрывающий ?>. Такой прием не ведет к ошибке PHP и при этом страхует нас от случайного добавления пустых строк. Давайте исправим наш файл: -->
<?php
	// some code

// Отдача стартовой строки HTTP ответа в PHP
// С помощью функции header можно также отдавать стартовую строку HTTP ответа. Как правило это используется для того, чтобы указать статус. В основном для 404 ошибки:
<?php
	header('HTTP/1.1 404 Not Found');
?>

// Отдача статуса HTTP ответа в PHP
// Можно отдельно задать статус HTTP ответа, не указывая стартовую строку. Это делается с помощью функции http_response_code:
<?php
	http_response_code(404);
?>