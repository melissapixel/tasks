<?php

    # Формы

    # Данные из формы, которые были переданым методом POST можно получить из суперглобального массива POST
    
    echo $_POST['name'];

    # Либо можно получить параметры GET запроса, через суперглобальный массив GET

    # link.php?name=Петр

    echo $_GET['name'];
?>

<form action="" method="POST">
    <input type="text" name="name" value="">
</form>