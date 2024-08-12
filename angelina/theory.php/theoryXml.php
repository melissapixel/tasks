<?php
    // Формат XML в PHP
    // XML представляет собой формат для хранения данных. Этот формат часто используется для обмена данными между сайтами, либо между сервером и браузером. Технически XML похож на HTML, но с любыми тегами и атрибутами.
    // Для начала в этом документе нужно сделать специальную шапку, которая будет указывать на то, что у нас XML и задавать версию этого языка:
    // <?xml version="1.0"

    // Теперь нужно сделат корневой элемент. Он будет представлять собой тег, в котором лежит весь документ. Имя этого тега может быть любым. Давайте назовем его <root>: 
    // <root>
	//     <test>text</test>
    // </root>

    // Теперь в PHP мы можем загрузить этот элемент с помощью функции simplexml_load_file:
    // $xml = simplexml_load_file('test.xml');

    $xml = simplexml_load_file('C:\OSPanel\domains\tasks\angelina\tasks\tasks1-1\tasks21\test.xml');
    var_dump($xml); // объект

    // Текст XML тега в PHP
    echo $xml->tag; // выведет 'text'
    echo $xml->name;

    echo '<br>';
    echo '<br>';

    // Тексты группы XML тегов в PHP
    var_dump($xml->tag); // итерируемый объект 

    // Давайте переберем наш итерируемый объект циклом и выведем значения наших тегов:
    foreach ($xml->tag as $tag) {
		echo $tag; // 'text1', 'text2', 'text3' 
        echo '<br>';
	}

    foreach($xml->name as $name){
        echo $name;
        echo '<br>';
    }

    // Атрибуты XML тега в PHP
    echo '<br>';

    // Проверяем, успешно ли загружен XML
    if ($xml === false) {
        echo "Ошибка при загрузке XML.";
    } else {
        // Проверяем наличие элемента и его атрибута
        if (isset($xml->tag) && isset($xml->tag['attr'])) {
            echo $xml->tag['attr'];  // Ожидаем, что это выведет: val
        } else {
            echo "Элемент или атрибут не найден.";
        }
    }
    echo '<br>';
    echo $xml->user['age'];  
    echo '<br>';
    echo $xml->user['salary'];  
    echo '<br>';
    echo $xml->user;  
    echo '<br>';


    // Атрибуты группы XML тегов в PHP
    foreach ($xml->tag as $tag) {
		echo $tag; // 'text1', 'text2', 'text3' 
	}
    echo '<br>';
    foreach ($xml->tag as $tag) {
		echo $tag['attr']; // 'val1', 'val2', 'val3' 
	}

    foreach($xml->product as $elem){
        echo $elem;
    }
    echo '<br>';
    foreach($xml->product as $elem){
        echo $elem['cost'];
        echo $elem['amount'];
        echo '<br>';
    }

    // Вложенный XML тег в PHP
    echo $xml->tag1->tag2->tag3;
    echo '<br>';

    // Группа XML тегов с вложенностью в PHP
    foreach ($xml->tag as $tag) {
		echo $tag->elem; // 'text1', 'text2', 'text3' 
	}

    // Имена XML тегов с дефисами в PHP
    echo $xml->tag->{'elem-child'}; // 'text'

?>