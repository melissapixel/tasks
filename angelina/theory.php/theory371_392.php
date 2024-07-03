<!-- Введение в аутентификацию на PHP

Аутентификация - это процесс определения пользователя сайтом. Для этого пользователь обычно должен вбить свой логин и пароль. После этого наш сайт выполняет авторизацию этого пользователя, то есть наделяет его определенными правами на совершение операций.

Конечно же, изначально этот пользователь должен пройти регистрацию на этом самом сайте: придумать себе логин (то есть имя на сайте), причем так, чтобы это имя было не занято, и пароль.

Обычно логин - это открытая информация, которая видна всем посетителям сайта. Ну, а пароль - закрытая информация, чтобы только владелец данного логина мог получить доступ к своим данным, или другими словами - к своему аккаунту на сайте.

В следующих уроках мы будем разбираться, как реализуется авторизация и регистрация пользователей в PHP. -->


<!-- Простая авторизация через базу данных на PHP

Давайте реализуем самую простую авторизацию на базе данных, пока без регистрации. Вместо регистрации пользователей, мы просто вобьем их логины и пароли в таблицу в базе данных: -->
<!-- Сделаем теперь форму, в которую будут вбиваться логин и пароль: -->
<!-- <form action="" method="POST">
	<input name="login">
	<input name="password" type="password">
	<input type="submit">
</form> -->
<!-- <?php
	if (!empty($_POST['password']) and !empty($_POST['login'])) {
		$login = $_POST['login'];
		$password = $_POST['password'];
		
		$query = "SELECT * FROM users 
			WHERE login='$login' AND password='$password'"; 
		$res = mysqli_query($link, $query);
		$user = mysqli_fetch_assoc($res);
		
		if (!empty($user)) {
			// прошел авторизацию
		} else {
			// неверно ввел логин или пароль
		}
	}
?> -->


<!-- Авторизация через сессию на PHP

Наша авторизация должна работать так: пользователь, который хочет авторизоваться на сайте, заходит на страницу login.php, вбивает правильные логин и пароль и далее ходит по страницам сайта уже будучи авторизованным.

Чтобы другие страницы сайта знали о том, что наш пользователь авторизован, мы должны хранить в сессии пометку об этом.

Пока наша авторизация не совсем рабочая, так как сессию мы еще не подключили и другие страницы сайта не могут понять, авторизован пользователь или нет.

Будем хранить пометку об авторизации в переменной сессии $_SESSION['auth'] - если там записано true, то пользователь авторизован, а если null - то не авторизован.

Давайте внесем соответствующую правку в наш код: -->
    <!-- <?php
        session_start();
        
        if (!empty($_POST['password']) and !empty($_POST['login'])) {
            $login = $_POST['login'];
            $password = $_POST['password'];
            
            $query = "SELECT * FROM users 
                WHERE login='$login' AND password='$password'"; 
            $res = mysqli_query($link, $query);
            $user = mysqli_fetch_assoc($res);
            
            if (!empty($user)) {
                $_SESSION['auth'] = true;
            } else {
                // неверно ввел логин или пароль
            }
        }
    ?> -->

<!-- Теперь на любой странице сайта мы можем проверить, авторизован пользователь или нет, вот таким образом: -->
<!-- <?php
	if (!empty($_SESSION['auth'])) {
		
	}
?> -->
<!-- Можно закрыть текст какой-нибудь страницы целиком для неавторизованного пользователя: -->

            <!-- <?php if (!empty($_SESSION['auth'])): ?>
                <!DOCTYPE html>
                <html>
                    <head>
                        
                    </head>
                    <body>
                        <p>текст только для авторизованного 
                            пользователя</p> 
                    </body>
                </html>
            <?php else: ?>
                <p>пожалуйста, авторизуйтесь</p>
            <?php endif; ?> -->

<!-- Можно закрыть только часть страницы: -->
                <!DOCTYPE html>
                <html>
                    <head>
                        
                    </head>
                    <body>
                        <p>текст для любого пользователя</p>
                        <?php
                            if (!empty($_SESSION['auth'])) {
                                echo 'текст только для авторизованного 
                                    пользователя'; 
                            }
                        ?>
                        <p>текст для любого пользователя</p>
                    </body>
                </html>

<!-- Выход из сессии на PHP

Авторизованный пользователь должен возможность перестать быть авторизованным, то есть совершить выход из своего аккаунта. Для этого нужно сделать отдельную страницу и удалять на ней пометку об авторизации, примерно вот так: -->
<!-- <?php
	session_start();
	$_SESSION['auth'] = null;
?> -->


<!-- Регистрация на PHP

Давайте теперь реализуем регистрацию. Для этого сделаем отдельную страницу register.php. По заходу на эту страницу, пользователь должен увидеть форму, в которую он должен вбить желаемый логин и пароль: -->
<!-- <form action="" method="POST">
	<input name="login">
	<input name="password" type="password">
	<input type="submit">
</form> -->
<!-- По нажатию на кнопку отправки форму логин и пароль пользователя должны занестись в базу данных с помощью INSERT запроса, вот так: -->
<!-- <?php
	if (!empty($_POST['login']) and !empty($_POST['password'])) {
		$login = $_POST['login'];
		$password = $_POST['password'];
		
		$query = "INSERT INTO users SET 
			login='$login', password='$password'"; 
		mysqli_query($link, $query);
	}
?> -->
<!-- Затем пользователь может зайти на страницу авторизации, ввести логин и пароль, под которым он зарегистрировался и авторизоваться. -->



<!-- Авторизация сразу при регистрации в PHP

Сейчас наша регистрация сделана таким образом, что пользователь первый раз вбивает логин-пароль регистрируясь, а потом сразу же вбивает их второй раз, желая зайти на сайт.

Это на самом деле не очень удобно и будет раздражать пользователей. Лучше сделать так, чтобы при успешной регистрации сразу же происходила автоматическая авторизация. Для этого сразу после успешной регистрации запишем в сессию пометку об успешной авторизации: -->
<!-- <?php
	if (!empty($_POST['login']) and !empty($_POST['password'])) {
        
		$login = $_POST['login'];
		$password = $_POST['password'];
		
		$query = "INSERT INTO users SET 
			login='$login', password='$password'"; 
		mysqli_query($link, $query);
		
		$_SESSION['auth'] = true; // пометка 
			об авторизации 
	}
?> -->


<!-- Добавление id пользователя в сессию
Пусть кроме пометки об авторизации мы бы хотели записать в сессию еще и его id.

В этом случае мы можем получить его с помощью функции mysqli_insert_id. Эта функция получает id последней вставленной в данном скрипте записи, то есть как раз то, что нам нужно.

Реализуем: -->
<!-- <?php
	if (!empty($_POST['login']) and !empty($_POST['password'])) {

		$login = $_POST['login'];
		$password = $_POST['password'];
		
		$query = "INSERT INTO users SET 
			login='$login', password='$password'"; 
		mysqli_query($link, $query);
		
		$_SESSION['auth'] = true;
		
		$id = mysqli_insert_id($link);
		$_SESSION['id'] = $id; // пишем 
			id в сессию 
	}
?> -->



<!-- Скрытие пароля при регистрации на PHP

Поле ввода пароля обычно представляет собой инпут с типом password, в котором введенные символы скрываются под звездочками. Это сделано для того, чтобы злоумышленник не мог подсмотреть пароль пользователя через плечо в момент регистрации.

Сокрытие пароля таким образом конечно хорошо, но есть, однако, проблема - пользователь не видит, что вводит. Он может ошибиться при вводе какого-либо символа и зарегистрироваться не с тем паролем, с которым он хотел. Это будет печально:(, так как он затем не сможет авторизоваться на сайте.

Существует стандартное решение этой проблемы: пользователю показываются два инпута для ввода пароля - в первый инпут он вводит пароль, а во второй инпут - его подтверждение, то есть этот же пароль второй раз: -->

<!-- <form action="" method="POST">
	<input name="login">
	<input type="password" name="password">
	<input type="password" name="confirm">
	<input type="submit">
</form> -->

<!-- Задача нашего сайта - проверить, что пароль и его подтверждение совпадают, так как логично, что в этом случае пользователь ввел именно то, что хотел ввести: -->
<!-- <?php
	if (!empty($_POST['login']) and !empty($_POST['password']) 
		and !empty($_POST['confirm'])) { 
		if ($_POST['password'] == $_POST['confirm']) {
			// регистрируем
		} else {
			// выведем сообщение о несовпадении
		}
	}
?> -->

<!-- Проверка логина на занятость

Сейчас наша регистрация имеет одну проблему - новый пользователь нашего сайта может зарегистрироваться под уже существующим логином, что, конечно же, недопустимо.

Для решения проблемы необходимо перед запросом на добавление нового пользователя в базу данных, выполнить SELECT запрос, который проверит, занят желаемый логин или нет. Если не занят - регистрируем, если занят - не регистрируем, а выводим сообщение об этом.

Давайте напишем этот код: -->
<!-- <?php
	if (!empty($_POST['login']) and !empty($_POST['password'])) {
		$login = $_POST['login'];
		$password = $_POST['password'];
		
		$query = "SELECT * FROM users 
			WHERE login='$login'"; 
		$user = mysqli_fetch_assoc(mysqli_query($link, $query));
		
		if (empty($user)) {
			$query = "INSERT INTO users 
				SET login='$login', password='$password'"; 
			mysqli_query($link, $query);
			
			$_SESSION['auth'] = true;
			
		} else {
			// логин занят, выведем сообщение 
				об этом 
		}
	}
?> -->


<!-- Валидация данных при регистрации на PHP
 
Сейчас мы не накладываем никаких ограничений на пару логин-пароль, однако, это неправильно. К примеру, сейчас у нас пользователи случайно или намеренно могут зарегистрироваться с пустым логином или паролем, или с паролем, состоящим из одного символа. Такой пароль будет слишком простым и не безопасным.

Учтите, что если какое-то поле вбито некорректно, форма не должна очищаться, так как это будет доставлять ему неудобство пользователю: он вводил-вводил данные, нажал - и все пропало, хотя ошибка возможно была в одном символе. -->


<!-- Хеширование пароля на PHP

Хранить пароль в открытом виде - неправильно. Хакер-злоумышленник может получить доступ к вашей базе данных и украсть пароли.

Поэтому обычно логин хранится в открытом виде, а пароль хешируется специальной функцией md5, которая параметром принимает пароль, а возвращает его хеш, по которому нельзя восстановить этот самый пароль.

Давайте, например, найдем хеш какой-нибудь строки: -->
<!-- <?php
	echo md5('12345'); // выведет 
		'827ccb0eea8a706c4c34a16891f84e7b' 
?> -->
<!-- Сейчас нам необходимо переделать нашу регистрацию и нашу авторизацию. Для начала я бы советовал очистить таблицу с юзерами, так как там сейчас хранятся пароли в открытом виде, а должны хранится их хеши. Затем при тестировании регистрации таблица заполнится данными в новом формате.

Давайте теперь поправим нашу регистрацию так, чтобы при сохранении нового пользователя в базу добавлялся не пароль, а его хеш.

Описанная правка будет представлять собой что-то такое: -->
<?php
	$login = $_POST['login'];
	$password = md5($_POST['password']); // преобразуем пароль в его хеш 
	
	$query = "INSERT INTO users SET 
		login='$login', password='$password'"; 
?>


<!-- Добавление соли в регистрацию

Итак, вы уже знаете, что хеширование через md5 - необратимый процесс и хакер, получивший доступ к хешу, не сможет получить по этому хешу пароль.

На самом деле это утверждение не совсем верное - в настоящее время злые хакеры составили библиотеки хешей популярных и не очень паролей и любой дурак может разгадать пароль, просто загуглив его хеш.

Речь идет о достаточно простых, популярных паролях.

Загуглите, например, хеш 827ccb0eea8a706c4c34a16891f84e7b и сразу в поиске гугла вы увидите, что это пароль '12345'.

Хеши достаточно сложных паролей таким образом не разгадать (попробуйте).

Вы можете спросить, в чем тогда проблема - давайте все мы будем регистрироваться со сложными паролями. Есть, однако, проблема - большинство пользователей не задумываются о безопасности своих данных и могут вводить достаточно простые пароли.

Мы можем при регистрации заставлять придумывать более длинные пароли, ограничивая, к примеру, минимальное количество символов 6-ю или 8-ю, однако, все равно будут появляться пароли вида '123456' или '12345678'.

Можно, конечно, придумать более умный алгоритм проверки пароля на сложность, но есть другое решение.

Суть этого решения такая: пароли надо посолить. Соль - это специальная случайная строка, которая будет добавляться к паролю при регистрации и хеш уже будет вычисляться не от простого пароля типа, а от строки соль+пароль, то есть от соленого пароля.

То есть при регистрации вы будете делать что-то типа такого: -->
<?php
	$salt = '1sJg3hfdf'; // соль - 
		сложная случайная строка 
	$password = md5($salt . $_POST['password']); 
		// преобразуем пароль в соленый хеш 
?>
<!-- При этом соль будет разная для каждого пользователя, ее нужно будет генерировать случайным образом в момент регистрации.

Вот готовая функция, которая сделает это: -->
<?php
	function generateSalt()
	{
		$salt = '';
		$saltLength = 8; // длина соли
		
		for($i = 0; $i < $saltLength; $i++) {
			$salt .= chr(mt_rand(33, 126)); // символ 
				из ASCII-table 
		}
		
		return $salt;
	}
?>
<?php
	$salt = generateSalt(); // соль
	$password = md5($salt . $_POST['password']); 
		// соленый пароль 
?>
<!-- Еще раз повторю, что это были изменения при регистрации - в БД сохраняем не просто хеш пароля, а хеш соленого пароля.

Это еще не все: в таблице с юзерами кроме поля login и password нужно сделать еще и поле salt, в котором мы будем хранить соль каждого пользователя. -->



<!-- Добавление соли в авторизацию

Теперь нам необходимо поменять авторизацию. Здесь уже изменения будут более существенными.

Уже не получится проверить правильность пары логин-пароль сразу же, одним запросом. Почему: потому что, чтобы проверить пароль, надо получить его соленый хеш, а соль хранится в базе данных и уникальная для каждого логина.

Придется вначале получить запись только по логину, прочитать соль, посолить введенный пароль и сравнить с соленым паролем из базы и только, если они совпадают, - авторизовывать пользователя.

Учтите, что может такое быть, что логин вбит неправильно, в этом случае проверку пароля можно не осуществлять, а сразу вывести, что авторизация не возможна - данные не верны: -->
<?php
	$login = $_POST['login'];
	
	$query = "SELECT * FROM users 
		WHERE login='$login'"; 
	$res = mysqli_query($link, $query);
	$user = mysqli_fetch_assoc($res);
		
	if (!empty($user)) {
		// пользователь с таким логином есть, теперь надо проверять пароль... 
	} else {
		// пользователя с таким логином нет, выведем сообщение 
	}
?>
<!-- Давайте добавим проверку пароля: -->
<?php
	$login = $_POST['login'];
	
	$query = "SELECT * FROM users 
		WHERE login='$login'"; 
	$res = mysqli_query($link, $query);
	$user = mysqli_fetch_assoc($res);
		
	if (!empty($user)) {
		$salt = $user['salt']; // соль из БД
		$hash = $user['password']; // соленый пароль из БД 
		
		$password = md5($salt . $_POST['password']); 
			// соленый пароль от юзера 
		
		// Сравниваем соленые хеши
		if ($password == $hash) {
			// все ок, авторизуем...
		} else {
			// пароль не подошел, выведем сообщение 
		}
	} else {
		// пользователя с таким логином нет, выведем сообщение 
	}
?>



<!-- Функция password_hash

На самом деле функция md5 и соление пароля с ее помощью считается устаревшим. Мы изучали ее, чтобы вы поняли дальнейший материал, а также потому, что вы можете столкнуться с этим, работая с чужими проектами.

Существует более совершенный способ получить соленый пароль. Для этого используется функция password_hash. Первым параметром она принимает строку, а вторым - алгоритм шифрования (о нем позднее), и возвращает хеш этой строки вместе с солью.

Попробуйте несколько раз запустите этот код: -->
<!-- <?php
	echo password_hash('12345', PASSWORD_DEFAULT);
?> -->


<!-- Вы каждый раз будете получать разный результат и в этом результате первая часть строки будет являться солью, а вторая часть - соленым паролем.

Пусть у нас есть хеш, полученный из функции password_hash и какой-то пароль. Чтобы проверить, это хеш этого пароля или нет, следует использовать функцию password_verify - первым параметром она принимает пароль, а вторым - хеш, и возвращает true или false.

Давайте посмотрим на примере: -->
<?php
	$password = '12345'; // пароль
	$hash = '$2y$10$xoYFX1mFPxBSyxaRe3iIRutxkIWhxGShzEhjYUVd3qpCUKfJE1k7a'; // хеш
	
	if (password_verify($password, $hash)) {
		// хеш от этого пароля
	} else {
		// хеш не от этого пароля
	}
?>
<!-- Что это дает нам на практике: мы можем не создавать в базе данных отдельное поле для хранения соли, не заморачиваться с генерированием этой соли - PHP все сделает за нас!

То есть получится, что в базе данных в поле password мы будем хранить соленый пароль вместе с его солью. При этом хешированный пароль будет иметь большую длину. Поэтому в базе данных нам нужно исправить размер поля с паролем и установить ее в 60 символов.

Теперь давайте поправим код регистрации. Вот то, что есть сейчас: -->
<!-- С помощью password_hash мы сократим это до: -->
<?php
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
?>
<!-- Аналогичным образом подправится код авторизации: -->
<?php
	$login = $_POST['login'];
	
	$query = "SELECT * FROM users 
		WHERE login='$login'"; // получаем юзера по логину 
	$res = mysqli_query($link, $query);
	$user = mysqli_fetch_assoc($res);
	
	if (!empty($user)) {
		$hash = $user['password']; // соленый 
			пароль из БД 
		
		// Проверяем соответствие хеша из базы введенному паролю 
		if (password_verify($_POST['password'], $hash)) {
			// все ок, авторизуем...
		} else {
			// пароль не подошел, выведем сообщение 
		}
	} else {
		// пользователя с таким логином нет, выведем сообщение 
	}
?>

<!-- 
Реализация профиля на PHP

Давайте теперь реализуем просмотр профиля пользователя. Под профилем понимается информация, которую этот пользователь указал при регистрации.

Сделаем так, чтобы можно было смотреть профиль любого из пользователей. Для этого сделаем страницу profile.php, в которую GET параметром будем передавать id пользователя, которого мы хотим посмотреть.

На странице профиля мы будем показывать не всю информацию, которую указал о себе пользователь. К примеру, пароль там показывать точно не стоит. Кроме того, скорее всего показ емейла также будет лишним, так как в этом случае спамеры могут собирать эти емейлы программами-парсерами и рассылать спам на них. -->


<!-- Личный кабинет на PHP

Под личным кабинетом понимается место, где пользователь может редактировать данные своего профиля. Давайте сделаем страницу account.php, зайдя на которую пользователь увидит форму для редактирования данных своего профиля (кроме логина и пароля, их следует обрабатывать особым образом).

Обратите внимание на то, что id пользователя мы не передаем GET параметром - мы сделаем так, чтобы каждый пользователь на странице account.php видел данные своего профиля, а не чужого.

Для этого следует при авторизации пользователя мы должны в сессию записать id этого пользователя, вот так: -->
<!-- <?php
	if (password_verify($_POST['password'], $hash)) {
		$_SESSION['auth'] = true;
		$_SESSION['id'] = $user['id'];
	}
?> -->
<!-- Затем по заходу на страницу account.php мы будем делать SELECT запрос, который будет доставать из БД пользователя с id из сессии -->
<!-- <?php
	$id = $_SESSION['id'];
	$query = "SELECT * FROM users WHERE login='$id'"; 
	
	$res = mysqli_query($link, $query);
	$user = mysqli_fetch_assoc($res);
?> -->

<!-- Данные пользователя мы должны показать в форме для редактирования. Пусть, к примеру, это будут имя и фамилия пользователя: -->
<form action="" method="POST">
	<input name="name" value="<?= 
		$user['name'] ?>"> 
	<input name="surname" value="<?= 
		$user['surname'] ?>"> 
	<input type="submit" name="submit">
</form>
<!-- После нажатия на кнопку отправки формы мы должны будем сделать запрос на обновление юзера: -->
<?php
	if (!empty($_POST['submit'])) {
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		
		$query = "UPDATE users SET name='$name', 
			surname='$surname' WHERE id=$id"; 
		mysqli_query($link, $query);
	}
?>

