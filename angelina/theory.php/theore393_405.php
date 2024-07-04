<!-- Введение в движок PHP

Представим себе, что у вас есть сайт из ста страниц. Все эти страницы имеют общую схему следующего вида: -->
                    <!DOCTYPE html>
                    <html>
                        <head>
                            <title>title</title>
                        </head>
                        <body>
                            <header>
                                header
                            </header>
                            <main>
                                content
                            </main>
                            <header>
                                footer
                            </header>
                        </body>
                    </html>
<!-- При этом обычно такие страницы отличаются лишь тайтлами и контентами, а все остальные блоки остаются неизменными от страницы к странице.

Это создает определенные неудобства. Скажем, нам нужно поменять текст в хедере сайта. В этом случае нам придется изменить сто файлов с нашими страницами.

Это не очень удобно. Поэтому с помощью PHP сайт обычно делают на специальном движке. Этот движок позволяет сделать так, чтобы шаблон нашего сайта размещался в одном единственном файле, а в зависимости от запрошенного URL в этот файл подгружался различный контент.

В следующих уроках мы разработаем несколько вариантов простейшего движка и посмотрим, какие проблемы возникают при его использовании. -->



<!-- 
Использование htaccess в движке PHP
Для того, чтобы сделать движок сайта, для начала нужно сделать так, чтобы запрос любого URL сайта обрабатывался одним файлом PHP.

Это делается с помощью специального файла .htaccess. Давайте создадим этот файл и включим его, написав в начале его текста следующие строки: -->
<?php
    RewriteEngine On
    RewriteBase /
?>
<!-- После этого мы можем указывать, какой файл должен обрабатывать запрощенный URL. Это делается с помощью команды RewriteRule.

Посмотрим на работу этой команды на практике. К примеру, сделаем так, чтобы адрес /test был обработан файлом index.php: -->
<?php
    RewriteRule /test index.php
?>

<!-- Тайтл в движке на файлах в PHP

Во всех движках, в которых контент подключается к шаблону сайта, появляется проблема тайтла. Дело в том, что страницы сайта отличаются не только контентами, но и тайтлами. При этом тайтл в коде находится совсем в другом месте.

Поэтому помимо вставки контента, нашему движку нужно указать место для вставки тайтла. Придумаем соответствующую команду для этого: -->
                        <!DOCTYPE html>
                        <html>
                            <head>
                                <title>{{ title }}</title>
                            </head>
                            <body>
                                <header>
                                    header
                                </header>
                                <main>
                                    {{ content }}
                                </main>
                                <header>
                                    footer
                                </header>
                            </body>
                        </html>
<!-- Давайте теперь рассмотрим варианты, как можно хранить и получать тайтлы страниц. -->

<!-- Тайтлы в массиве в PHP

Сделаем теперь файл, в котором в виде массива будем хранить урлы страниц и соответствующие им тайтлы: -->
                <?php
                    return [
                        '/page1'         => 'page 1 title',
                        '/dir/page2'     => 'page 2 title',
                        '/dir/sub/page3' => 'page 3 title',
                    ];
                ?>
<!-- На странице index.php получим массив тайтлов в переменную: -->
<?php
	$titles = require 'titles.php';
?>
<!-- Получим тайтл запрошенной страницы: -->
<?php
	$title = $titles[$url];
?>
<!-- Заменим в файле шаблона соответствующую команду на наш тайтл: -->
<?php
	$layout = str_replace('{{ title }}', 
		$title, $layout); 
?>



<!-- Тайтлы в контенте в PHP

Гораздо удобнее хранить тайтл странице в том же месте, где ее контент. Для этого в файле контента можно придумать какую-нибудь команду, задающую файл этой страницы.

Например, можно сделать вот так: -->
{{ title: "page 1 title" }}
<div>
	content 1
</div>
<?php
	preg_match('#{{ title: "(.+?)" }}#', 
		$content, $match); 
	$title = $match[1];
?>


<!-- Для того, чтобы определить некорректность запроса, нам необходимо проверить существование файла контента, соответствующего запрошенному URL: -->
<?php
	$path = 'view' . $url . '.php';
	
	if (file_exists($path)) {
		// файл есть
	} else {
		// файла нет
	}
?>

<!-- Давайте будем отдавать файл контента, если он есть, и файл с ошибкой, если контента нет: -->
<?php
	$path = 'view' . $url . '.php';
	
	if (file_exists($path)) {
		$content = file_get_contents($path);
	} else {
		$content = file_get_contents('view/404.php');
	}
?>


<?php
	$path = 'view' . $url . '.php';
	
	if (file_exists($path)) {
		$content = file_get_contents($path);
	} else {
		header('HTTP/1.0 404 Not Found');
		$content = file_get_contents('view/404.php');
	}
?>

<?php
	$link = require 'connect.php';
?>


<?php
	$url = $_SERVER['REQUEST_URI'];
?>

<?php
	preg_match('#/page/(\d+)#', $url, $match);
?>

<?php
	$query = "SELECT * FROM pages 
		WHERE id=$id"; 
	$res = mysqli_query($link, $query) or 
		die(mysqli_error($link)); 
	$page = mysqli_fetch_assoc($res);
?>

<?php
	require 'connect.php';
	
	$url = $_SERVER['REQUEST_URI'];
	preg_match('#/page/(\d+)#', $url, $match);
	$id = $match[1];
	
	$query  = "SELECT * FROM pages 
		WHERE id=$id"; 
	$res = mysqli_query($link, $query) or 
		die(mysqli_error($link)); 
	$page   = mysqli_fetch_assoc($res);
	
	$layout = file_get_contents('layout.php');
	$layout = str_replace('{{ title }}', 
		$page['title'], $layout); 
	$layout = str_replace('{{ content }}', 
		$page['content'], $layout); 
	
	echo $layout;
?>


<!-- ЧПУ в движке на PHP

В современном мире адреса с циферками вида /page/1 считаются некрасивыми. Более красиво, когда для страницы указывается не ее номер, а текстовое имя, соответствующее тайтлу страницы, например, вот так: /page/my-first-page.

Такие адреса называются ЧПУ - человеко-понятные урл. Наличие ЧПУ удобнее пользователю, чем ничего не говорящие ему номера id. Кроме того, за ЧПУ поисковые системы будут повышать позиции нашего сайта.

Кусочек урла, соответствующей имени страницы, называется слаг (slug). Давайте в нашей базе данных добавим нашим страницам колонку со слагами: -->

<?php
	preg_match('#/page/([a-z0-9_-]+)#', $url, $match);
	$slug = $match[1];
?>
<?php
	$query = "SELECT * FROM pages 
		WHERE slug='$slug'"; 
?>

<!-- Простой роутинг в движке в PHP
В предыдущем уроке на нашем сайте была только одна группа урлов. Конечно же, обычно на сайте бывает несколько типов адресов.

Каждая группа адресов будет обрабатываться своим регулярным выражением, которые называются маршрутами или роутами. Соответственно процесс сопоставления маршрутов и кода для их обработки называется маршрутизацией или роутингом

Пусть, к примеру, у нас есть два типа адресов. Давайте для каждой группы напишем свой роут: -->
<?php
	if (preg_match('#^/page/([a-z0-9_-]+)$#', $url, $params)) {
		// одна страница по слагу
	}
	
	if (preg_match('#^/page/all$#', $url, $params)) {
		// список всех страниц
	}
?>

<?php
	if (preg_match('#^/page/([a-z0-9_-]+)$#', $url, $params)) {
		$page = include 'view/page/show.php';
	}
	
	if (preg_match('#^/page/all$#', $url, $params)) {
		$page = include 'view/page/all.php';
	}
?>

<?php
	$slug   = $params[1];
	$query  = "SELECT * FROM pages 
		WHERE slug='$slug'"; 
	
	$res = mysqli_query($link, $query) or 
		die(mysqli_error($link)); 
	$page   = mysqli_fetch_assoc($res);
	
	return $page;
?>

<?php
	$query = "SELECT slug, title FROM 
		pages"; 
	$res = mysqli_query($link, $query) or 
		die(mysqli_error($link)); 
	
	for ($data = []; $row = mysqli_fetch_assoc($res); 
		$data[] = $row); 
	
	$content = '';
	foreach ($data as $page) {
		$content .= '
			<div>
				<a href="/page/'  . $page['slug'] 
					. '">' . $page['title'] . '</a> 
			</div>
		';
	}
	
	$page = [
		'title' => 'список всех страниц',
		'content' => $content
	];
	
	return $page;
?>


<?php
	$layout = file_get_contents('layout.php');
	$layout = str_replace('{{ title }}', 
		$page['title'], $layout); 
	$layout = str_replace('{{ content }}', 
		$page['content'], $layout); 
	
	echo $layout;
?>

<?php
	$url = $_SERVER['REQUEST_URI'];
	
	if (preg_match('#^/page/([a-z0-9_-]+)$#', $url, $params)) {
		$page = include 'view/page/show.php';
	}
	
	if (preg_match('#^/page/all$#', $url, $params)) {
		$page = include 'view/page/all.php';
	}
	
	$layout = file_get_contents('layout.php');
	$layout = str_replace('{{ title }}', 
		$page['title'], $layout); 
	$layout = str_replace('{{ content }}', 
		$page['content'], $layout); 
	
	echo $layout;
?>

<?php
	if (preg_match('#^/page/([a-z0-9_-]+)$#', $url, $params)) {
		$page = include 'view/page/show.php';
	}
?>

<?php
	$slug = $params[1];
?>

<?php
	if (preg_match('#^/page/(?<slug>[a-z0-9_-]+)$#', 
		$url, $params)) { 
		$page = include 'view/page/show.php';
	}
?>

<?php
	$slug = $params['slug'];
?>


<!-- Несколько параметров в роутах движка в PHP
Пусть теперь у нас на сайте есть категории и страницы, принадлежащие этим категориям. Давайте сделаем таблицу с категориями: -->

<?php
	$route = '^/page/(?<catSlug>[a-z0-9_-]+)/(?<pageSlug>
		[a-z0-9_-]+)$'; 
	if (preg_match("#$route#", $url, $params)) {
		$page = include 'view/page/show.php';
	}
	
	$route = '^/page/(?<catSlug>[a-z0-9_-]+)$';
	if (preg_match("#$route#", $url, $params)) {
		$page = include 'view/page/category.php';
	}
	
	$route = '^/$';
	if (preg_match("#$route#", $url, $params)) {
		$page = include 'view/page/all.php';
	}
?>

<?php
	$catSlug = $params['catSlug'];
	$pageSlug = $params['pageSlug'];
	
	$query = "SELECT pages.title, pages.content 
		FROM pages
	LEFT JOIN
		category ON category.id=pages.category_id
	WHERE
		pages.slug='$pageSlug' AND category.slug='$catSlug'";
	
	$res = mysqli_query($link, $query) or 
		die(mysqli_error($link)); 
	$page = mysqli_fetch_assoc($res);
	
	return $page;
?>\


<?php
	$catSlug = $params['catSlug'];
	
	$query = "SELECT pages.slug, pages.title 
		FROM pages 
	LEFT JOIN
		category ON category.id=pages.category_id
	WHERE
		category.slug='$catSlug'";
	
	$res = mysqli_query($link, $query) or 
		die(mysqli_error($link)); 
	
	for ($data = []; $row = mysqli_fetch_assoc($res); 
		$data[] = $row); 
	
	$content = '';
	foreach ($data as $page) {
		$content .= '
			<div>
				<a href="/page/' . $catSlug . '/'  . $page['slug'] . '">' . $page['title'] . '</a>
			</div>
		';
	}
	
	$page = [
		'title' => 'список всех страниц 
			категории ' . $catSlug, 
		'content' => $content
	];
	
	return $page;
?>