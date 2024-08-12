<!-- Тестовая таблица users для практических задач -->
 <!-- Создали -->
 <?php
    // Оформление вывода из базы данных в PHP
    // Например, записи нашей тестовой таблицы users выведем в следующем виде:
            <p>
            <b>user1</b>
            <b>23</b>
            <b>400</b>
        </p>
        <p>
            <b>user2</b>
            <b>24</b>
            <b>500</b>
        </p>
        <p>
            <b>user3</b>
            <b>25</b>
            <b>600</b>
        </p>

    // Для начала давайте получим массив записей из нашей базы данных:
    $query = "SELECT * FROM users";
	$result = mysqli_query($link, $query) or 
		die(mysqli_error($link)); 
	for ($data = []; $row = mysqli_fetch_assoc($result); 
		$data[] = $row); 

    // Выведем теперь данные нашего массива в оформленном виде:
    $result = '';
	
	foreach ($data as $elem) {
		$result .= '<p>';
		$result .= '<b>' . $elem['name'] 
			. '</b>'; 
		$result .= '<b>' . $elem['age'] 
			. '</b>'; 
		$result .= '<b>' . $elem['salary'] 
			. '</b>'; 
		$result .= '</p>';
	}
	echo $result;

    // Можно переписать и в следующем виде:
 ?>
 <?php foreach ($data as $elem): ?>
	<p>
		<b><?= $elem['name'] ?></b>
		<b><?= $elem['age'] ?></b>
		<b><?= $elem['salary'] ?></b>
	</p>
<?php endforeach; ?>

<!-- Удаление данных из БД с помощью GET запросов -->
 <?php
    // Давайте теперь будем удалять записи из базы данных, передавая id для их удаления через GET параметры.
    // Пусть у нас передается GET параметр с именем del. Давайте получим получим id для удаления в переменную:
    $del = $_GET['del'];
    // Сформируем запрос на удаление:
    $query = "DELETE FROM users WHERE id=$del"; 
    // Удалим запись из базы данных:
    mysqli_query($link, $query);

    // Просмотр данных из БД в PHP

    // Добавление новой записи в БД на PHP

    
    // Редактирование записи в БД на PHP

 ?>
