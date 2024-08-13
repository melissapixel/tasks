<!-- Введение в работу с куками в PHP -->
<!-- Куки - это небольшие кусочки строк, которые хранятся в специальном месте в браузере. Каждая кука имеет свое имя, по которому эту куку можно записать и прочитать. -->
<!-- первым параметром принимает имя этой куки, а вторым - значение.  -->
<?php
	setcookie('test', 'abcde');
    echo $_COOKIE['test']; // выведет 'abcde' 

    // куки, установленные через setcookie, становятся доступными в массиве $_COOKIE только после перезагрузки страницы.

    setcookie('str', 'eee');
	var_dump($_COOKIE['str']); // сначала null, а потом 'eee' 

    // Для того, чтобы установленная кука сразу появилась в массиве $_COOKIE можно использовать хитрый прием. Суть приема следующая: сначала установим куку с помощью setcookie, а потом вручную запишем ее в массив $_COOKIE:

    setcookie('str', 'eee');
	$_COOKIE['str'] = 'eee';
	var_dump($_COOKIE['str']); // срзу выведет 'eee' 

    // Давайте сделаем счетчик обновления страницы:
    if (!isset($_COOKIE['counter'])) { // первый 
		заход на страницу 
		setcookie('counter', 1);
		$_COOKIE['counter'] = 1;
	} else {
		setcookie('counter', $_COOKIE['counter'] 
			+ 1); 
		$_COOKIE['counter'] = $_COOKIE['counter'] 
			+ 1; 
	}
	
	echo $_COOKIE['counter'];


    // Давайте для примера установим куку на один час. Так как в часе 3600 секунд, то прибавим это число к текущему моменту:
    setcookie('test', 'abcde', time() + 3600);

    // Удаление куки приведет к изменению $_COOKIE только после перезагрузки страницы:
    setcookie('test', '', time());
	var_dump($_COOKIE['test']); // первый раз выведет значение куки 

    
?>